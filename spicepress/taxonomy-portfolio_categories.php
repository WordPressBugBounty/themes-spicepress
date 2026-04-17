<?php
/**
 * Wrapper for taxonomy-portfolio_categories.php
 */

if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/pro/taxonomy-portfolio_categories-pro.php' );
} else {
    require get_parent_theme_file_path( '/free/archive.php' );
}

