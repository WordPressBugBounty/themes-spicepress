<?php
/* TYPOGRAPHY */
$spicepress_enable_header_typography = get_theme_mod('enable_header_typography',false);
$spicepress_enable_banner_typography = get_theme_mod('enable_banner_typography',false);
$spicepress_enable_section_title_typography = get_theme_mod('enable_section_title_typography',false);
$spicepress_enable_content_typography = get_theme_mod('enable_content_typography',false);
$spicepress_enable_post_typography = get_theme_mod('enable_post_typography',false);
$spicepress_enable_shop_page_typography = get_theme_mod('enable_shop_page_typography',false);
$spicepress_enable_sidebar_typography = get_theme_mod('enable_sidebar_typography',false);
$spicepress_enable_footer_widget_typography = get_theme_mod('enable_footer_widget_typography',false);

/* COLOR AND BACKGROUND */
$spicepress_enable_color_background = get_theme_mod('apply_menu_clr_enable',false);
$spicepress_enable_header_bg_color_background = get_theme_mod('apply_header_bg_clr_enable',false);

/* ========== HAEDER AREA =========== */

if($spicepress_enable_header_typography == true)
{
?>
<style>
/* Site Title */
.site-title {
	font-size:<?php echo intval(get_theme_mod('site_title_fontsize','30')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('site_title_fontfamily','Open Sans')); ?> !important;

}
/* Site Tagline*/
.site-description {
	font-size:<?php echo intval(get_theme_mod('site_tagline_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('site_tagline_fontfamily','Open Sans')); ?> !important;

}
/* Menu */
.navbar-nav > li > a {
	font-size:<?php echo intval(get_theme_mod('menu_title_fontsize','14')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('menu_title_fontfamily','Open Sans')); ?> !important;

}
/* Sub-menu */
.dropdown-menu > li > a {
	font-size:<?php echo intval(get_theme_mod('submenu_title_fontsize','14')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('submenu_title_fontfamily','Open Sans')); ?> !important;

}
</style>
<?php }




/* ========== BANNER AREA =========== */

if($spicepress_enable_banner_typography == true)
{
?>
<style>
/* Page Title */
.page-title h1 {
	font-size:<?php echo intval(get_theme_mod('banner_title_fontsize','32')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('banner_title_fontfamily','Open Sans')); ?> !important;

}
/* Breadcrumb Title */
.page-breadcrumb, .woocommerce .woocommerce-breadcrumb a, .woocommerce .woocommerce-breadcrumb
 {
	font-size:<?php echo intval(get_theme_mod('breadcrumb_title_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('breadcrumb_title_fontfamily','Open Sans')); ?> !important;

}
</style>
<?php }




/* ========== HOMEPAGE SECTION =========== */

if($spicepress_enable_section_title_typography == true)
{
?>
<style>
/* Section Title */
.format-standard h1, .format-status h1, .video-content h1, .section-header h1 {
	font-size:<?php echo intval(get_theme_mod('section_title_fontsize','32')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('section_title_fontfamily','Open Sans')); ?> !important;

}
.section-header p {
   	font-size:<?php echo intval(get_theme_mod('section_description_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('section_description_fontfamily','Open Sans')); ?> !important;

}
.format-standard p:not(.blog-section .format-standard p), .format-status p, .format-aside p, .format-quote, .video-content p {
   	font-size:<?php echo intval(get_theme_mod('section_description_fontsize','16')) + 2 .'px'; ?> !important;
   	font-family:<?php echo esc_attr(get_theme_mod('section_description_fontfamily','Open Sans')); ?> !important;

}
</style>
<?php }




/* ========== CONTENT SECTION =========== */

if($spicepress_enable_content_typography == true)
{
?>
<style>
/* Heading H1 */
.about-section h1, .entry-content h1, .slider-section h1, .cont-section h1  {
	font-size:<?php echo intval(get_theme_mod('h1_typography_fontsize','32')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h1_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H2 */
.about-section h2, .entry-content h2:not(.woocommerce-page .entry-content h2), .slider-section h2, .cont-section h2 {
	font-size:<?php echo intval(get_theme_mod('h2_typography_fontsize','30')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h2_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H3*/
.about-section h3, .entry-content h3:not(.woocommerce-page .entry-content h3), .slider-section h3, .cont-section h3, .comment-section h3, .comment-form-section h3, .single-spicepress_portfolio .entry-header h3, .products h3 {
	font-size:<?php echo intval(get_theme_mod('h3_typography_fontsize','24')) .'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h3_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H4 */
.entry-content h4, .entry-header h4, .testmonial-area h4, .team-caption h4, .about-section h4, .entry-content h4, .slider-section h4, .cont-section h4, .sm-callout h4, .team-mambers h4, .testmonial-block h4 {
	font-size:<?php echo intval(get_theme_mod('h4_typography_fontsize','20')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h4_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H5 */
.about-section h5, .entry-content h5, .slider-section h5, .cont-section h5 {
	font-size:<?php echo intval(get_theme_mod('h5_typography_fontsize','18')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h5_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H6 */
.team-caption h6, .about-section h6, .entry-content h6, .slider-section h6, .cont-section h6, .blog-author h6, .comment-section h6 {
	font-size:<?php echo intval(get_theme_mod('h6_typography_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('h6_typography_fontfamily','Open Sans')); ?> !important;

}
/* Paragraph */
.entry-content p, .testmonial-area p, .about-section p, .slider-section p, .cont-section p, .comment p, .comment-form-section p, .portfolio-tabs a, .woocommerce-product-details__short-description p, .error_404 p,.blog-section .entry-content p .more-link,.blog-section .entry-content p,.home-news .entry-content .more-link {
	font-size:<?php echo intval(get_theme_mod('p_typography_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('p_typography_fontfamily','Open Sans')); ?> !important;

}
/* Button Text */
.slide-btn-sm, .format-status-btn-sm, .format-video-btn-sm, .sm-callout-btn a, .search-submit, .wpcf7-form .wpcf7-submit, .mx-auto a,  .woocommerce .button, .woocommerce .added_to_cart, .woocommerce-product-search button, button, .comment-reply-link, #commentform .form-submit,.wp-block-button__link,.blogdetail-btn, .widget_block .wp-block-latest-posts .blog-btn a {
	font-size:<?php echo intval(get_theme_mod('button_text_typography_fontsize','14')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('button_text_typography_fontfamily','Open Sans')); ?> !important;

}
</style>
<?php }




/* ========== BLOG/ARCHIVES/SINGLE POST =========== */

if($spicepress_enable_post_typography == true)
{
?>
<style>
.blog-section .entry-header h3, .blog-section .entry-header .entry-title > a{
	font-size:<?php echo intval(get_theme_mod('post-title_fontsize','36')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('post-title_fontfamily','Open Sans')); ?> !important;

}
</style>
<?php }

/* ========== SHOP PAGE =========== */

if($spicepress_enable_shop_page_typography == true)
{
?>
<style>
/* Heading H1 */
 .woocommerce div.product .product_title{
	font-size:<?php echo intval(get_theme_mod('shop_h1_typography_fontsize','32')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('shop_h1_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H2 */
.woocommerce .products h2, .woocommerce .cart_totals h2, .woocommerce-Tabs-panel h2, .woocommerce .cross-sells h2{
	font-size:<?php echo intval(get_theme_mod('shop_h2_typography_fontsize','18')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('shop_h2_typography_fontfamily','Open Sans')); ?> !important;

}
/* Heading H3 */
.woocommerce .checkout h3 {
	font-size:<?php echo intval(get_theme_mod('shop_h3_typography_fontsize','24')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('shop_h3_typography_fontfamily','Open Sans')); ?> !important;
}
</style>
<?php }

/* ========== SIDEBAR WIDGETS =========== */

if($spicepress_enable_sidebar_typography == true)
{
?>
<style>

/* Sidebar Widget Title */
.sidebar .widget-title, .sidebar .wp-block-search .wp-block-search__label, .sidebar .widget.widget_block h1, .sidebar .widget.widget_block h2, .sidebar .widget.widget_block h3, .sidebar .widget.widget_block h4, .sidebar .widget.widget_block h5, .sidebar .widget.widget_block h6, .sidebar .widget.widget_block .wc-block-product-search__label {
	font-size:<?php echo intval(get_theme_mod('sidebar_fontsize','20')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('sidebar_fontfamily','Open Sans')); ?> !important;
}

/* Sidebar Widget Content */
.sidebar .widget_recent_entries a, .sidebar a:not(.woocommerce .button), .sidebar p, .sidebar .wp-block-latest-posts__post-excerpt {
	font-size:<?php echo intval(get_theme_mod('sidebar_widget_content_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('sidebar_widget_content_fontfamily','Open Sans')); ?> !important;
}
</style>
<?php }



/* ========== FOOTER WIDGETS =========== */

/* Footer Widget */
if($spicepress_enable_footer_widget_typography == true)
{
?>
<style>
/* Footer Widget Title */
.site-footer .widget-title, .footer-sidebar h1, .footer-sidebar h2, .footer-sidebar h3, .footer-sidebar h4, .footer-sidebar h5, .footer-sidebar h6, .header-sidebar h1, .header-sidebar h2, .header-sidebar h3, .header-sidebar h4, .header-sidebar h5, .header-sidebar h6, .footer-sidebar .wp-block-search .wp-block-search__label  {
	font-size:<?php echo intval(get_theme_mod('footer_widget_title_fontsize','24')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('footer_widget_title_fontfamily','Open Sans')); ?> !important;
}
/* Footer Widget Content */
.footer-sidebar .widget_recent_entries a, .footer-sidebar a, .footer-sidebar p, .footer-sidebar .wp-block-latest-posts__post-excerpt {
	font-size:<?php echo intval(get_theme_mod('footer_widget_content_fontsize','16')).'px'; ?> !important;
	font-family:<?php echo esc_attr(get_theme_mod('footer_widget_content_fontfamily','Open Sans')); ?> !important;
}
</style>
<?php }


/*=============================================================*/
                  /* COLOR & BACKGROUND */
/*=============================================================*/
?>
<style type="text/css">
<?php
if($spicepress_enable_color_background == true) :
?>
	/* Menu */
	ul.nav.navbar-nav.navbar-right li a,
    ul.nav.navbar-nav li a,
    .navbar5 ul.nav.navbar-nav li a,
    .navbar5 ul.nav.navbar-nav.navbar-right li a,
    .desktop-header .navbar-classic .navbar-nav.navbar-left > li > a{
    	color: <?php echo esc_attr(get_theme_mod('menus_link_color','#061018')); ?>;
    }

    .navbar-center-fullwidth .navbar-nav > li.active > a,
    .navbar-center-fullwidth .navbar-nav > li.active > a:hover,
    .navbar-center-fullwidth .navbar-nav > li.active > a:focus,
    .navbar5.navbar-center-fullwidth .navbar-nav > li.active > a,
    .navbar5.navbar-center-fullwidth .navbar-nav > li.active > a:hover,
    .navbar5.navbar-center-fullwidth .navbar-nav > li.active > a:focus{
        color: <?php echo esc_attr(get_theme_mod('menus_link_active_color','#ffffff')); ?>!important;
    }
    ul.nav.navbar-nav.navbar-right li a:hover,
    ul.nav.navbar-nav li a:hover,
    .navbar5 ul.nav.navbar-nav.navbar-right li a:hover,
    .navbar5 ul.nav.navbar-nav li a:hover,
    .desktop-header .navbar-classic .navbar-nav.navbar-left > li > a:hover,
    .desktop-header .navbar-classic .navbar-nav.navbar-left > li > a:focus {
    	color: <?php echo esc_attr(get_theme_mod('menus_link_hover_color','#ce1b28')); ?>;
    }

    ul.nav.navbar-nav.navbar-right li.active a,
    ul.nav.navbar-nav li.active a,
    .navbar-custom .navbar-nav > li.active > a,
    .navbar-custom .navbar-nav > li.active > a:hover,
    .navbar-custom .navbar-nav > li.active > a:focus,
    .navbar5 ul.nav.navbar-nav.navbar-right li.active a,
    .navbar5 ul.nav.navbar-nav li.active a,
    .navbar5 .navbar-custom .navbar-nav > li.active > a,
    .navbar-custom.navbar5.hp-hc .navbar-nav > li.active > a:focus, .navbar-custom.navbar5.hp-hc .navbar-nav > li.active > a:hover,
    .navbar-classic.navbar .navbar-nav > li.active > a, .navbar-classic.navbar .navbar-nav > li.active > a:hover, .navbar-classic.navbar .navbar-nav > li.active > a:focus
   {
    	color: <?php echo esc_attr(get_theme_mod('menus_link_active_color','#ffffff')); ?>;
    }
    /* Submenu */
    ul.nav.navbar-nav.navbar-right li.dropdown ul.dropdown-menu li,
    .navbar-custom .dropdown-menu > li > a,.open > a,
    ul.nav.navbar-nav li.dropdown ul.dropdown-menu li,
    .navbar5 ul.nav.navbar-nav.navbar-right li.dropdown ul.dropdown-menu li,
    .navbar5 .navbar-custom .dropdown-menu > li > a,.open > a,
    .navbar5 ul.nav.navbar-nav li.dropdown ul.dropdown-menu li
     {
    	background-color: <?php echo esc_attr(get_theme_mod('submenus_background_color','#282737')); ?>;
    }
    .navbar-custom .dropdown-menu .open > a:hover,
    .navbar-custom .dropdown-menu > li > a:hover,
    .navbar-custom .dropdown-menu .open > a,
    .navbar-custom .dropdown-menu .open > a:focus,
    .navbar-custom .dropdown-menu .open > a:hover {
        background-color: <?php echo esc_attr(get_theme_mod('submenus_background_hover_color','#282737')); ?>!important;
    }
    ul.nav.navbar-nav.navbar-right li.dropdown ul.dropdown-menu li a,
    ul.nav.navbar-nav li.dropdown ul.dropdown-menu li a {
    	color: <?php echo esc_attr(get_theme_mod('submenus_link_color','#d5d5d5')); ?>;
    }
    ul.nav.navbar-nav.navbar-right li.dropdown ul.dropdown-menu li a:hover,
    ul.nav.navbar-nav li.dropdown ul.dropdown-menu li a:hover {
    	color: <?php echo esc_attr(get_theme_mod('submenus_link_hover_color','#fff')); ?>;
    }
    .nav.navbar-nav .dropdown-item:focus, .nav.navbar-nav .dropdown-item:hover {
	    background-color: transparent;
    }
    ul.nav.navbar-nav.navbar-right li.dropdown ul.dropdown-menu li.active > a,
    ul.nav.navbar-nav li.dropdown ul.dropdown-menu li.active > a,
    .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
		color: <?php echo esc_attr(get_theme_mod('submenus_link_active_color','#ce1b28')); ?>!important;
    }
<?php endif;

if($spicepress_enable_header_bg_color_background == true) :
?>
	/* Header */

	.site-title a{
        color: <?php echo esc_attr(get_theme_mod('site_title_link_color','#ce1b28')); ?>!important;
    }
	h1.site-title a:hover {
        color: <?php echo esc_attr(get_theme_mod('site_title_link_hover_color','#ce1b28')); ?>!important;
    }
    .site-description{
        color: <?php echo esc_attr(get_theme_mod('site_tagline_text_color','#64646d')); ?>!important;
    }
    .site-description:hover{
        color: <?php echo esc_attr(get_theme_mod('site_tagline_hover_color','#64646d')); ?>!important;
    }
<?php endif;?>
/* Banner */
.page-title-section .page-title h1 {
	color: <?php echo esc_attr(get_theme_mod('banner_text_color','#fff')); ?>;
}
/* Breadcrumb */
<?php
	$spicepress_enable_brd_link_clr_setting=get_theme_mod('enable_brd_link_clr_setting',false);
	if($spicepress_enable_brd_link_clr_setting==true): ?>
		.page-breadcrumb > li a, .page-breadcrumb > li.active a,.page-breadcrumb > li + li:before, .sp-breadcrumb a {
			color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_color','#ffffff'));?> !important;
	}
    .woocommerce .woocommerce-breadcrumb a, .woocommerce .woocommerce-breadcrumb{
            color:<?php echo esc_attr(get_theme_mod('breadcrumb_title_link_color','#ffffff'));?> !important;
    }
    .page-breadcrumb > li a:hover, .page-breadcrumb > li.active a:hover,  .sp-breadcrumb a:hover {
    	color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_hover_color','#ffffff')); ?> !important;
    }
    .woocommerce .woocommerce-breadcrumb a:hover {
            color:<?php echo esc_attr(get_theme_mod('breadcrumb_title_link_hover_color','#ffffff'));?> !important;
    }
<?php endif;

$spicepress_enable_content_clr_setting=get_theme_mod('apply_content_clr_enable',false);
if($spicepress_enable_content_clr_setting==true): ?>
    /* Content */
    .product h1,.about-section h1,.entry-content h1, body .section-header h1.widget-title,.cont-section h1,.slider-content h1 {
        color: <?php echo esc_attr(get_theme_mod('h1_color','#061018')); ?> !important;
    }
    .section-header .section-header h2, body h2{
        color: <?php echo esc_attr(get_theme_mod('h2_color','#061018')); ?>!important;
    }
    .entry-header h3.entry-title a,.entry-content h3,.products > h3 a,.about-section h3,.cont-section h3, .cont-section .sidebar .section-header .widget-title,.slider-content h3,.single-spicepress_portfolio h3,.comment-title h3 {
        color: <?php echo esc_attr(get_theme_mod('h3_color','#061018')); ?>!important;
    }
    .entry-header h4.entry-title, .entry-header h4.entry-title a,.team-caption h4,.about-section h4,.cont-section h4,.slider-content h4,.entry-content h4,.error_404 h4 {
        color: <?php echo esc_attr(get_theme_mod('h4_color','#061018')); ?>!important;
    }
    .product-price h5 > a,.blog-author h5, body .comment-detail h5,.about-section h5,.cont-section h5,.slider-content h5,.entry-content h5 {
        color: <?php echo esc_attr(get_theme_mod('h5_color','#061018')); ?>;
    }
    .section-header h6,.team-caption h6,.about-section h6,.cont-section h6,.slider-content h6,.entry-content h6,.media-body h6 {
        color: <?php echo esc_attr(get_theme_mod('h6_color','#061018')); ?>!important;
    }
    .section-header p:not(.testimonial-section p), .entry-content p:not(.testimonial-section p),.about-section p,.cont-section p,.slider-content p,.woocommerce-product-details__short-description p,.search p,.error_404 p {
        color: <?php echo esc_attr(get_theme_mod('p_color','#061018')); ?>!important;
    }
<?php endif;?>

/* Sidebar */
body .sidebar .section-header .widget-title, body .sidebar .wp-block-search .wp-block-search__label, body .sidebar .widget.widget_block h1, body .sidebar .widget.widget_block h2, body .sidebar .widget.widget_block h3, body .sidebar .widget.widget_block h4, body .sidebar .widget.widget_block h5, body .sidebar .widget.widget_block h6, body .sidebar .widget.widget_block .wc-block-product-search__label {
    color: <?php echo esc_attr(get_theme_mod('sidebar_widget_title_color','#ffffff')); ?>!important;
}
body .sidebar p, .sidebar .wp-block-latest-posts__post-excerpt {
    color: <?php echo esc_attr(get_theme_mod('sidebar_widget_text_color','#64646d')); ?>!important;
}
.sidebar a {
    color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_color','#64646d')); ?>!important;
}
<?php
if(get_theme_mod('apply_sibar_link_hover_clr_enable',false)==true):?>
	body .sidebar.s-l-space .sidebar a:hover, body .sidebar .widget a:hover:not(body .sidebar .widget .woocommerce-mini-cart__buttons a.button), .sidebar .widget a:focus:not(.sidebar .widget .woocommerce-mini-cart__buttons a.button), body .woocommerce ul.product_list_widget li a:hover {
    	color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_hover_color','#2d6ef8')); ?>!important;
	}

<?php endif;?>

/* Footer Widgets */
<?php
if(get_theme_mod('apply_ftrsibar_link_hover_clr_enable',false)==true) { ?>
    body .site-footer .widget-title, body .footer-sidebar .wp-block-search__label, body .footer-sidebar .widget_block h1, body .footer-sidebar .widget_block h2, body .footer-sidebar .widget_block h3, body .footer-sidebar .widget_block h4, body .footer-sidebar .widget_block h5, body .footer-sidebar .widget_block h6 {
        color: <?php echo esc_attr(get_theme_mod('footer_widget_title_color','#ffffff')); ?>!important;
    }
    body .footer-sidebar p,  body .footer-sidebar .widget, .sp-schemes .widget-address address,.sp-schemes .widget-address address abbr, .footer-sidebar .wp-block-latest-posts__post-excerpt {
        color: <?php echo esc_attr(get_theme_mod('footer_widget_text_color','#ffffff')); ?>!important;
    }
    body .footer-sidebar .widget a, body .footer-sidebar .widget_recent_entries .post-date, body .footer-sidebar .widget li a  {
        color: <?php echo esc_attr(get_theme_mod('footer_widget_link_color','#ffffff')); ?>;
    }
    body .footer-sidebar .widget a:hover {
        color: <?php echo esc_attr(get_theme_mod('footer_widget_link_hover_color','#2d6ef8')); ?>!important;
    }
    <?php }
else { ?>
    .site-footer p {
        color: #fff;
    }
<?php   }?>
</style>
<style>
.custom-logo{width: <?php echo intval(get_theme_mod('spicepress_logo_length',154));?>px; height: auto;}
</style>
