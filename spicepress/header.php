<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : 
        echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
    endif; 
    wp_head(); ?>
</head>
<?php 
	$layout_selector=get_theme_mod('spicepress_layout_style','wide');
	if($layout_selector == "boxed")
	{ $class="boxed"; }
	else
	{ $class="wide"; }
 ?>
<body <?php body_class($class); ?> >
<?php wp_body_open(); ?>
<div id="wrapper">
<div id="page" class="site">
	<a class="skip-link spicepress-screen-reader" href="#content"><?php esc_html_e( 'Skip to content', 'spicepress' ); ?></a>
<?php get_template_part('header/header-navbar');?>