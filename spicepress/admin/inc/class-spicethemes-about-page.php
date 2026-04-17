<?php
/**
 * Wrapper for class-spicethemes-about-page.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/admin/pro/inc/class-spicethemes-about-page-pro.php' );
} else {
    require get_parent_theme_file_path( '/admin/inc/class-spicethemes-about-page-free.php' );
}

