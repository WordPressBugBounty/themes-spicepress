<?php
/**
 * Wrapper for index-news.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/pro/index-news-pro.php' );
} else {
    require get_parent_theme_file_path( '/free/index-news-free.php' );
}

