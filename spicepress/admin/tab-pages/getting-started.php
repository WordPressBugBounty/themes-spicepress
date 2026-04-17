<?php
/**
 * Wrapper for getting-started.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/admin/pro/tab-pages/getting-started-pro.php' );
} else {
    require get_parent_theme_file_path( '/admin/tab-pages/getting-started-free.php' );
}

