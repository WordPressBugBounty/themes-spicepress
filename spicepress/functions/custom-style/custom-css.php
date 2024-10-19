<?php
// define function for custom color setting
function spicepress_custom_light() {

    $link_color = esc_html(get_theme_mod('link_color','#ce1b28'));
    list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
    $r = $r - 50;
    $g = $g - 25;
    $b = $b - 40;
    if ( $link_color != '#ff0000' ) :
    ?>
<style type="text/css">
/*===================================================================================*/
/*  MENUBAR SECTION
/*===================================================================================*/

@media (max-width: 1100px) and (min-width: 100px) {
.navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus {
    background-color: transparent;
}
}
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav .open > a,
.navbar-custom .navbar-nav .open > a:focus,
.navbar-custom .navbar-nav .open > a:hover {
    color: <?php echo $link_color; ?>;
    background-color: transparent;
}
@media (min-width: 1101px){
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
    color: #ffffff ;
    background-color: <?php echo $link_color; ?>  !important;
}
}
/*.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
    color: #ffffff ;
    background-color: <?php echo $link_color; ?>  !important;
}*/

@media (max-width: 1100px) {
.navbar-custom .dropdown-menu > li > a:hover, .navbar-custom .dropdown-menu > li > a:focus {
    background-color: #21202F;
    color: #fff;

}
}


.navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
.navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    background-color: transparent;
    color: <?php echo $link_color; ?>  !important;
}

@media (max-width: 1100px) and (min-width: 100px) {
.navbar-custom .dropdown-menu > .active > a {

color: <?php echo $link_color; ?>  !important;
}
}
/*Dropdown Menus & Submenus Css----------------------------------------------------------*/

@media (min-width: 1101px){
.navbar.navbar-custom .dropdown-menu {
    border-top: 2px solid  <?php echo $link_color; ?>  !important;
    border-bottom: 2px solid  <?php echo $link_color; ?>  !important;
}}

/*===================================================================================*/
/*  CART ICON
/*===================================================================================*/

.cart-header:hover > a { color: <?php echo $link_color; ?>  !important; }
.cart-header > a .cart-total { background:  <?php echo $link_color; ?>  !important; }


/*===================================================================================*/
/*  HOMEPAGE SLIDER
/*===================================================================================*/

.slide-btn-sm:before, .slide-btn-sm:after { background-color: <?php echo $link_color; ?>  !important; }
/*Status Format*/
.format-status-btn-sm { background-color: <?php echo $link_color; ?>  !important; box-shadow: 0 3px 0 0 #b3131f; }

/*Video Format*/
.format-video-btn-sm { background-color: <?php echo $link_color; ?>  !important; box-shadow: 0 3px 0 0 #b3131f; }
/* Direction Nav */
.slide-shadow { background: url("../images/slide-shadow.png") no-repeat center bottom #fff; }



/*===================================================================================*/
/*  SECTION HEADER
/*===================================================================================*/

.widget-separator span { background-color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  SECRVICE SECTION
/*===================================================================================*/

.service-section .post:hover { border-top: 3px solid  <?php echo $link_color; ?>  !important; }
.txt-pink { color: <?php echo $link_color; ?>  !important; }
.more-link, .more-link:hover, .more-link:focus { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  PORTFOLIO SECTION
/*===================================================================================*/

/*Portfolio Tabs*/
.portfolio-tabs li.active > a, .portfolio-tabs li > a:hover { border-color: <?php echo $link_color; ?>  !important; background:  <?php echo $link_color; ?>  !important; }


/*===================================================================================*/
/*  TESTIMONIAL SECTION
/*===================================================================================*/

.author-description p:before { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  CALLOUT SECTION
/*===================================================================================*/

.sm-callout { border-top: 2px solid  <?php echo $link_color; ?>  !important; }
.sm-callout-btn a { background-color: <?php echo $link_color; ?>  !important; box-shadow: 0 3px 0 0 #b3131f; }
.sm-callout-btn a:hover { color: #ffffff; }

/*===================================================================================*/
/*  PAGE TITLE SECTION
/*===================================================================================*/

.page-title-section .overlay { background-color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  ABOUT US PAGE
/*===================================================================================*/

.about-section h2 > span { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  TEAM SECTION
/*===================================================================================*/

.team-image .team-showcase-icons a:hover { background-color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  HOMEPAGE BLOG & BLOG PAGE SECTION
/*===================================================================================*/

/*Entry Title*/
.entry-header .entry-title > a:hover, .entry-header .entry-title > a:focus { color: <?php echo $link_color; ?>  !important; }
/*Blog Meta*/

.entry-meta .entry-date > a { background-color: <?php echo $link_color; ?>  !important; }
/*More Link*/
.home-news .more-link:hover, .home-news .more-link:focus,
.blog-section .more-link:hover, .blog-section .more-link:focus {
    background-color: transparent;
     color: <?php echo $link_color; ?>  !important;
}
/*Comment Section*/
.comment-date { color: <?php echo $link_color; ?>  !important; }
.reply a { background-color: <?php echo $link_color; ?>  !important;
 box-shadow: 0 3px 0 0 rgb(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b;?>);
 }
.blogdetail-btn, .blogdetail-btn a {
background-color: <?php echo $link_color; ?>  !important;
box-shadow: 0 3px 0 0 rgb(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b;?>);
}



/*===================================================================================*/
/*  SIDEBAR SECTION
/*===================================================================================*/

/*Sidebar Calender Widget*/
.widget table#wp-calendar caption { background-color: <?php echo $link_color; ?>  !important; }
.widget table#wp-calendar a:hover, .widget table#wp-calendar a:focus,
.widget table#wp-calendar #next a:hover, .widget table#wp-calendar #next a:focus,
.widget table#wp-calendar #prev a:hover, .widget table#wp-calendar #prev a:focus { color: <?php echo $link_color; ?>  !important; }
/*Sidebar Widget Archive, Widget categories, Widget Links, Widget Meta, widget Nav Menu, Widget Pages, Widget Recent Comments, Widget Recent Entries */
.widget_archive a:hover, .widget_categories a:hover, .widget_links a:hover,
.widget_meta a:hover, .widget_nav_menu a:hover, .widget_pages a:hover,
.widget_recent_comments a:hover, .widget_recent_entries a:hover {
     color: <?php echo $link_color; ?>  !important;
}
.widget_archive li:before, .widget_categories li:before, .widget_links li:before,
.widget_meta li:before, .widget_nav_menu li:before, .widget_pages li:before,
.widget_recent_comments li:before, .widget_recent_entries li:before {
    color: <?php echo $link_color; ?>  !important;
}
/*Sidebar Search*/
form.search-form input.search-submit,
input[type="submit"],
.woocommerce-product-search input[type="submit"], .home-blog-btn { background-color: <?php echo $link_color; ?>  !important; }

/*Sidebar Tags*/
.tagcloud a:hover { background-color: <?php echo $link_color; ?>  !important; border: 1px solid  <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  HEADER SIDEBAR & FOOTER SIDEBAR SECTION
/*===================================================================================*/

.site-footer { border-top: 3px solid  <?php echo $link_color; ?>  !important; border-bottom: 3px solid  <?php echo $link_color; ?>  !important; }
.header-sidebar .section-header span, .footer-sidebar .section-header span { background-color: <?php echo $link_color; ?>  !important; }
/*Sidebar Latest Post Widget*/
.footer-sidebar .widget .post .entry-title:hover, .footer-sidebar .widget .post .entry-title a:hover,
.header-sidebar .widget .post .entry-title:hover, .header-sidebar .widget .post .entry-title a:hover {
    color: <?php echo $link_color; ?>  !important;
}
.widget .post:hover .entry-title a { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  FOOTER COPYRIGHTS - SITE INFO
/*===================================================================================*/

.site-info a:hover, .site-info a:focus { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  WP THEME DATA - CUSTOM HTML TAGS
/*===================================================================================*/
blockquote { border-left: 5px solid  <?php echo $link_color; ?>  !important; }
table a, table a:hover, table a:focus,
dl dd a, dl dd a:hover, dl dd a:focus { color: <?php echo $link_color; ?>  !important; }
p > mark { background-color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  CONTACT SECTION
/*===================================================================================*/

.cont-info address > a:hover, .cont-info address > a:focus { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  404 ERROR PAGE SECTION
/*===================================================================================*/

.error_404 h1 { color: <?php echo $link_color; ?>  !important; }
.error_404 p > a { color: <?php echo $link_color; ?>  !important; }

/*===================================================================================*/
/*  SCROLL BUTTON PAGE TO TOP
/*===================================================================================*/

.hc_scrollup { background-color: <?php echo $link_color; ?>  !important; }


/*WOOCOMMERCE CSS-----------------------------------------------------------------------------------------------------------------*/
/* Woocommerce Colors-------------------------------------------------------------------------------------------- */
.woocommerce ul.products li.product .price del, .woocommerce ul.products li.product .price ins, .woocommerce div.product p.price ins, .woocommerce ul.products li.product .price, .woocommerce .variations td.label, .woocommerce table.shop_table td, .woocommerce-cart .cart-collaterals .cart_totals table td, .woocommerce .woocommerce-ordering select, .woocommerce-cart table.cart td.actions .coupon .input-text, .select2-container .select2-choice { color: #64646d; }
.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .posted_in a, .woocommerce-product-rating a, .woocommerce .tagged_as a, .woocommerce div.product form.cart .variations td.label label, .woocommerce #reviews #comments ol.commentlist li .meta strong, .woocommerce table.shop_table th, .woocommerce-cart table.cart td a, .woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a, .woocommerce-error, .woocommerce-info, .woocommerce-message { color: #0f0f16; }
.woocommerce ul.products li.product .button { color: #fff; }
.woocommerce ul.product_list_widget li a:hover, .woocommerce ul.product_list_widget li a:focus,
.woocommerce .posted_in a:hover, .woocommerce .posted_in a:focus { color: <?php echo $link_color; ?>  !important; }
.woocommerce ul.products li.product:hover .button,
.woocommerce ul.products li.product:focus .button,
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product form.cart .button:focus,
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce-EditAccountForm input.woocommerce-Button, #add_payment_method table.cart img, .woocommerce-cart table.cart img, .woocommerce-checkout table.cart img { border: 4px double #e9e9e9; }
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.added_to_cart, .woocommerce table.my_account_orders .order-actions .button { color: #fff; }
.woocommerce ul.products li.product .button { background:  <?php echo $link_color; ?>  !important; }
.woocommerce ul.products li.product .button, .woocommerce ul.products li.product .button:hover { border: 1px solid  <?php echo $link_color; ?>  !important; }
.woocommerce ul.products li.product,
.woocommerce-page ul.products li.product { background-color: #ffffff; border: 1px solid #e9e9e9; }
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover { background-color: <?php echo $link_color; ?>  !important; }
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
    background-color: <?php echo $link_color; ?>  !important;
    color: #fff;
}
.woocommerce .star-rating span { color: <?php echo $link_color; ?>  !important; }
.woocommerce ul.products li.product .onsale, .woocommerce span.onsale { background:  <?php echo $link_color; ?>  !important; border: 2px solid  <?php echo $link_color; ?>  !important; color: #fff; }
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.button, .woocommerce .woocommerce-Button, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus,
.woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus,
.woocommerce input.button:hover, .woocommerce input.button:focus,
.woocommerce button.button:hover, .woocommerce button.button:focus,
.woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button {
    background:  <?php echo $link_color; ?>  !important;
    border: 1px solid transparent !important;
    color:#ffffff ! important;

    }
.woocommerce-message, .woocommerce-info {
    border-top-color: <?php echo $link_color; ?>  !important;
}
.woocommerce-message::before, .woocommerce-info::before { color: <?php echo $link_color; ?>  !important; }
.woocommerce .checkout_coupon input.button,
.woocommerce .woocommerce-MyAccount-content input.button, .woocommerce .login input.button { background-color: <?php echo $link_color; ?>  !important; }


.woocommerce .widget_price_filter .ui-slider .ui-slider-range { background-color: <?php echo $link_color; ?>  !important; }


/*Woocommerce Section----------------------------------------------------------------------------------------*/
.woocommerce-section {  background-color: <?php echo $link_color; ?>  !important; }
.rating li i { color: <?php echo $link_color; ?>  !important; }
.products .onsale {
    background:  <?php echo $link_color; ?>  !important;
    border: 2px solid  <?php echo $link_color; ?>  !important;

    }

/*404 */
.error_404_btn:hover, .error_404_btn:focus {
   background-color: <?php echo $link_color; ?>  !important;
     color:#ffffff !important;
}

.error_404_btn {
   color: <?php echo $link_color; ?>  !important;
   border: 1px solid  <?php echo $link_color; ?>  !important;
}

.sidebar .section-header {
    border-left: 5px solid <?php echo $link_color; ?>  !important;
}
h1.site-title a:hover {
    color: <?php echo $link_color; ?>  !important;
}


.widget_archive a:hover, .widget_categories a:hover, .widget_links a:hover, .widget_meta a:hover, .widget_nav_menu a:hover, .widget_pages a:hover, .widget_recent_comments a:hover, .widget_recent_entries a:hover {
    color:<?php echo $link_color; ?>  !important;
}
<!-- added css  added by me -->
.comment-section a, .comment-section a:hover, .comment-section a:focus {
   color:<?php echo $link_color; ?>;
}

blogdetail-btn, .blogdetail-btn a {

    box-shadow: 0 3px 0 0 <?php echo $link_color; ?>;
}

table a, table a:hover, table a:focus, a, a:hover, a:focus, dl dd a, dl dd a:hover, dl dd a:focus {
    color:<?php echo $link_color; ?>;
}
.entry-meta a:hover, .entry-meta a:focus {
   color:<?php echo $link_color; ?>;
    }

.woocommerce-product-search input[type="submit"], button[type="submit"] {
    background-color:<?php echo $link_color; ?>  !important;
}
.blog-section .post.sticky a:hover {
      color: <?php echo $link_color; ?>  !important;
}

.woocommerce a.added_to_cart {
    background: #21202e;
    border: 1px solid #ffffff;
}
.navbar-center-fullwidth .navbar-nav > li.active > a, .navbar-center-fullwidth .navbar-nav > li.active > a:hover, .navbar-center-fullwidth .navbar-nav > li.active > a:focus {
    color: <?php echo $link_color; ?> !important;
}
.rtl .sidebar .section-header {
    border-right: 5px solid <?php echo $link_color; ?>;
    border-left: none !important;
}
.sidebar li a:hover {
    color: <?php echo $link_color; ?> !important;
}
/* 5.8 Widget Classes ==*/
.sidebar .wp-block-search .wp-block-search__label,.sidebar .widget.widget_block h1,.sidebar .widget.widget_block h2,.sidebar .widget.widget_block h3,.sidebar .widget.widget_block h4,.sidebar .widget.widget_block h5,.sidebar .widget.widget_block h6, .sidebar .widget.widget_block .wc-block-product-search__label{
    border-left: 5px solid <?php echo $link_color; ?>;
}
.widget .wp-block-search button[type="submit"] {font-weight:700}
.widget li:before {
    color: <?php echo $link_color; ?>;
}
.wp-block-tag-cloud a:hover {
    background-color: <?php echo $link_color; ?>;
    border: 1px solid <?php echo $link_color; ?>;
}
.footer-sidebar .wp-block-page-list a:hover{
    color: <?php echo $link_color; ?>;
}
 .footer-sidebar .wp-block-search__label:after,.footer-sidebar .widget_block h1:after, .footer-sidebar .widget_block h2:after,.footer-sidebar .widget_block h3:after,.footer-sidebar .widget_block h4:after,.footer-sidebar .widget_block h5:after,.footer-sidebar .widget_block h6:after {
    background-color: <?php echo $link_color; ?>;
}
body .sidebar .wp-block-search .wp-block-search__label, body .sidebar .widget.widget_block h1, body .sidebar .widget.widget_block h2, body .sidebar .widget.widget_block h3, body .sidebar .widget.widget_block h4, body .sidebar .widget.widget_block h5, body .sidebar .widget.widget_block h6, body .sidebar .widget.widget_block .wc-block-product-search__label {
  border-left: 5px solid <?php echo $link_color; ?>;
}
body .widget li:before {
    color: <?php echo $link_color; ?>;
}
body .footer-sidebar .wp-block-search__label:after, body .footer-sidebar .widget_block h1:after, body .footer-sidebar .widget_block h2:after, body .footer-sidebar .widget_block h3:after, body .footer-sidebar .widget_block h4:after, body .footer-sidebar .widget_block h5:after, body .footer-sidebar .widget_block h6:after {
   background-color: <?php echo $link_color; ?>;
}
body .wp-block-tag-cloud a:hover {
    background-color: <?php echo $link_color; ?>;
    border: 1px solid <?php echo $link_color; ?>;
}
body .footer-sidebar .widget li a{color: #9595a0;}
body .footer-sidebar .widget li a:hover{color: <?php echo $link_color; ?>;}
.rtl .sidebar .wp-block-search .wp-block-search__label, .rtl .sidebar .widget.widget_block h1, .rtl .sidebar .widget.widget_block h2, .rtl .sidebar .widget.widget_block h3, .rtl .sidebar .widget.widget_block h4, .rtl .sidebar .widget.widget_block h5, .rtl .sidebar .widget.widget_block h6, .rtl .sidebar .widget.widget_block .wc-block-product-search__label {
    border-right: 5px solid <?php echo $link_color; ?>;
    border-left: none;
}
.post .edit-link a:hover, .post .nav-title:hover, .post a:hover .nav-subtitle {
    color: <?php echo $link_color; ?>;
}
</style>
<?php endif; } ?>
