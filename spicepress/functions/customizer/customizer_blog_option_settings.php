<?php
/**
 * Wrapper for customizer_blog_option_settings.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/customizer/customizer_blog_option_settings-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/customizer/customizer_blog_option_settings-free.php' );
}

