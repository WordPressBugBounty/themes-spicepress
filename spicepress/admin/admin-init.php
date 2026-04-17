<?php
/**
 * Wrapper for admin-init.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/admin/pro/admin-init-pro.php' );
} else {
    require get_parent_theme_file_path( '/admin/admin-init-free.php' );
}

