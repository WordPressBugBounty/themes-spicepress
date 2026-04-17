<?php
/**
 * Wrapper for header-navbar.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( 'pro/header/header-navbar-pro.php' );
} else {
    require get_parent_theme_file_path( '/header/header-navbar-free.php' );
}

