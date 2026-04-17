<?php
/**
 * Wrapper for custom_style.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/scripts/custom_style-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/scripts/custom_style-free.php' );
}

