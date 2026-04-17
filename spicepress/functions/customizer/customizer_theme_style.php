<?php
/**
 * Wrapper for customizer_theme_style.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/customizer/customizer_theme_style-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/customizer/customizer_theme_style-free.php' );
}

