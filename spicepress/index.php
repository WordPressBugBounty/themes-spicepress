<?php
/**
 * Wrapper for index.php
 */
if (function_exists('sp_fs') && sp_fs()->can_use_premium_code()) {
    require get_parent_theme_file_path('/pro/index-pro.php');
} else {
    if (is_child_theme() && (wp_get_theme()->get('Name') == 'Content' || wp_get_theme()->get('Name') == 'Chilly')) {
        require get_stylesheet_directory() . '/index.php';
    } else {
        require get_parent_theme_file_path('/free/index-free.php');
    }
}
