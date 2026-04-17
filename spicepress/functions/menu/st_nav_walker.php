<?php
/**
 * Wrapper for st_nav_walker.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/menu/st_nav_walker-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/menu/st_nav_walker-free.php' );
}

