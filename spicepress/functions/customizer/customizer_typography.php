<?php
/**
 * Wrapper for customizer_typography.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/customizer/customizer_typography-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/customizer/customizer_typography-free.php' );
}

