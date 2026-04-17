<?php
/**
 * Wrapper for sidebars.php
 */
if ( function_exists( 'sp_fs' ) && sp_fs()->can_use_premium_code() ) {
    require get_parent_theme_file_path( '/functions/pro/widgets/sidebars-pro.php' );
} else {
    require get_parent_theme_file_path( '/functions/widgets/sidebars-free.php' );
}

