<?php
/**
 * Wrapper for breadcrumbs.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/breadcrumbs/breadcrumbs-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/breadcrumbs/breadcrumbs-free.php' );
}

