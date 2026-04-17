<?php
/**
 * Wrapper for template-tags.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/template-tags-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/template-tags-free.php' );
}

