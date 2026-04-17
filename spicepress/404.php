<?php
/**
 * Wrapper for 404.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/pro/404-pro.php' );
} else {
    require get_parent_theme_file_path( '/free/404-free.php' );
}

