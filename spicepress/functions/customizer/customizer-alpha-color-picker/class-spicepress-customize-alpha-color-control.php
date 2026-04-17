<?php
/**
 * Wrapper for class-spicepress-customize-alpha-color-control.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/customizer/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/customizer/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control-free.php' );
}

