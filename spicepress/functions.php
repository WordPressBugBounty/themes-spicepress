<?php

/**
 * Wrapper for functions.php
 */
if ( !class_exists( 'SpicePress_Freemius_Mock' ) ) {
    class SpicePress_Freemius_Mock {
        public function can_use_premium_code() {
            return false;
        }

        public function is_premium() {
            return false;
        }

        public function is_plan( $plan ) {
            return false;
        }

        public function is_free_plan() {
            return true;
        }

    }

}
if ( !function_exists( 'sp_fs' ) ) {
    // Create a helper function for easy SDK access.
    function sp_fs() {
        global $sp_fs;
        if ( !isset( $sp_fs ) ) {
            $spicepress_theme = wp_get_theme();
            $allowed_themes = array(
                'SpicePress',
                'SpicePress child',
                'SpicePress Child',
                'SpicePress Pro',
                'SpicePress Pro child',
                'SpicePress Pro Child'
            );
            if ( in_array( $spicepress_theme->get( 'Name' ), $allowed_themes ) ) {
                // Include Freemius SDK.
                if ( file_exists( dirname( __FILE__ ) . '/freemius/start.php' ) ) {
                    require_once dirname( __FILE__ ) . '/freemius/start.php';
                } elseif ( defined( 'SPICEB_PLUGIN_DIR' ) && file_exists( SPICEB_PLUGIN_DIR . 'inc/freemius/start.php' ) ) {
                    require_once SPICEB_PLUGIN_DIR . 'inc/freemius/start.php';
                }
                if ( function_exists( 'fs_dynamic_init' ) ) {
                    $sp_fs = fs_dynamic_init( array(
                        'id'               => '10307',
                        'slug'             => 'spicepress',
                        'premium_slug'     => 'spicepress-pro',
                        'type'             => 'theme',
                        'public_key'       => 'pk_f5ba3b4e2e6dced9648d73555ed61',
                        'is_premium'       => false,
                        'premium_suffix'   => 'Pro',
                        'has_addons'       => false,
                        'has_paid_plans'   => true,
                        'is_org_compliant' => true,
                        'menu'             => array(
                            'slug'    => 'spicepress-welcome',
                            'account' => true,
                            'support' => true,
                            'contact' => false,
                            'parent'  => array(
                                'slug' => 'spicepress-welcome',
                            ),
                        ),
                        'navigation'       => 'menu',
                        'is_live'          => true,
                    ) );
                }
            }
        }
        if ( !isset( $sp_fs ) || !is_object( $sp_fs ) ) {
            $sp_fs = new SpicePress_Freemius_Mock();
        }
        return $sp_fs;
    }

    // Init Freemius.
    sp_fs();
    // Signal that SDK was initiated.
    do_action( 'sp_fs_loaded' );
}
if ( sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/pro/functions-pro.php' );
} else {
    require get_parent_theme_file_path( '/free/functions-free.php' );
}