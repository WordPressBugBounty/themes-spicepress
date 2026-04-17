<?php
/**
 * Wrapper for searchform.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/pro/searchform-pro.php' );
} else {
    require get_parent_theme_file_path( '/free/searchform-free.php' );
}

