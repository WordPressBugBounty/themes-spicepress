<?php
if ( ! function_exists( 'spicepress_blog_meta_content' ) ) :
function spicepress_blog_meta_content()
{ 
	$spicepress_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);	
	if( $spicepress_blog_meta_section_enable == true ) { ?>
	<div class="entry-meta">
		<span class="entry-date">
			<a href="<?php echo esc_url(get_month_link(esc_html(get_post_time('Y')),esc_html(get_post_time('m')))); ?>"><time datetime=""><?php echo esc_html(get_the_date()); ?></time></a>
		</span>
	</div>
<?php } 
}
endif;

if ( ! function_exists( 'spicepress_blog_category_content' ) ) :
function spicepress_blog_category_content()
{
	$spicepress_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
	
	if( $spicepress_blog_meta_section_enable == true ) {

?>
<div class="entry-meta">
	<span class="author"><?php esc_html_e('By','spicepress');?> <a rel="tag" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo esc_html(get_the_author());?></a>
	
	</span>
	<?php 	
	$spicepress_cat_list = get_the_category_list();
		if(!empty($spicepress_cat_list)) { ?>
	<span class="cat-links"><?php esc_html_e('in','spicepress');?>&nbsp;<?php the_category(', '); ?></span>
	<?php } 
	    $spicepress_tag_list = get_the_tag_list();
		if(!empty($spicepress_tag_list)) { ?>
				<span class="tag-links"><?php esc_html_e('Tag','spicepress');?> <?php the_tags('', ', ', ''); ?></span>
				<?php } ?>

</div>	 
<?php } } endif;

//Blog Content
if ( ! function_exists( 'spicepress_posted_content' ) ) :
    function spicepress_posted_content() { 
      $spicepress_blog_content  = get_theme_mod('spicepress_blog_content','excerpt');
      $spicepress_excerpt_length  = get_theme_mod('spicepress_blog_content_length',30);

      if ( 'excerpt' == $spicepress_blog_content ){
      $spicepress_excerpt = spicepress_the_excerpt( absint( $spicepress_excerpt_length ) );
      if ( !empty( $spicepress_excerpt ) ) :                   
          echo wp_kses_post( wpautop( $spicepress_excerpt ) );
           endif; 
      } else{ 
       the_content( __('Read More','spicepress') );
        }
 }
endif;

if ( ! function_exists( 'spicepress_the_excerpt' ) ) :

    /**
     * Generate excerpt.
     *
     */
    function spicepress_the_excerpt( $length = 0, $post_obj = null ) {

        global $post;

        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length ) {
            return;
        }

        $source_content = $post_obj->post_content;

        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
        return $trimmed_content;

    }
endif;
//Single post meta content
if ( ! function_exists( 'spicepres_single_post_meta_content' ) ) :

function spicepres_single_post_meta_content(){	
	$spicepress_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);	
	if( $spicepress_blog_meta_section_enable == true ) { 
		if(get_theme_mod('spicepress_enable_single_post_date',true)==true):?>
			<div class="entry-meta">
				<span class="entry-date">
					<a href="<?php echo esc_url(get_month_link(esc_html(get_post_time('Y')),esc_html(get_post_time('m')))); ?>"><time datetime=""><?php echo esc_html(get_the_date()); ?></time></a>
				</span>
			</div>
		<?php 
		endif;
	} 
}
endif;

//Single post Category
if ( ! function_exists( 'spicepress_single_post_category_content' ) ) :

function spicepress_single_post_category_content()
{		
	if( get_theme_mod('spicepress_enable_single_post_admin',true)== true || get_theme_mod('spicepress_enable_single_post_category',true)==true || get_theme_mod('spicepress_enable_single_post_tag',true)==true ) {?>
		<div class="entry-meta">
			<?php if(get_theme_mod('spicepress_enable_single_post_admin',true)==true):?>
				<span class="author"><?php esc_html_e('By','spicepress');?> <a rel="tag" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo esc_html(get_the_author());?></a>		
				</span>
			<?php 
			endif;
			if(get_theme_mod('spicepress_enable_single_post_category',true)==true):	
				$spicepress_cat_list = get_the_category_list();
				if(!empty($spicepress_cat_list)) { ?>
					<span class="cat-links"><?php esc_html_e('in','spicepress');?>&nbsp;<?php the_category(', '); ?></span>
				<?php } 
			endif;

			if(get_theme_mod('spicepress_enable_single_post_tag',true)==true):	
				$spicepress_tag_list = get_the_tag_list();
				if(!empty($spicepress_tag_list)) { ?>
						<span class="tag-links"><?php esc_html_e('Tag','spicepress');?> <?php the_tags('', ', ', ''); ?></span>
				<?php } 
			endif;?>
		</div>	 
<?php } } endif;
// avator class
function spicepress_gravatar_class($class) {
    $spicepress_class = str_replace("class='avatar", "class='img-responsive img-circle", $class);
    return $spicepress_class;
}
add_filter('get_avatar','spicepress_gravatar_class');


// spicepress author meta
function spicepress_author_meta()
{ ?>
<article class="blog-author wow fadeInDown animated" data-wow-delay="0.4s">
	<div class="media">
		<div class="pull-left">
			<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
		</div>
		<div class="media-body">
			<h6><?php the_author_link(); ?></h6>
			<p><?php the_author_meta( 'description' ); ?></p>
			<ul class="blog-author-social">
			    <?php $spicepress_facebook_profile = get_the_author_meta( 'facebook_profile' ); if ( $spicepress_facebook_profile && $spicepress_facebook_profile != '' ): ?>
				<li class="facebook"><a href="<?php echo esc_url($spicepress_facebook_profile); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php $spicepress_linkedin_profile = get_the_author_meta( 'linkedin_profile' ); if ( $spicepress_linkedin_profile && $spicepress_linkedin_profile != '' ): ?>
				<li class="linkedin"><a href="<?php echo esc_url($spicepress_linkedin_profile); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php $spicepress_twitter_profile = get_the_author_meta( 'twitter_profile' ); if ( $spicepress_twitter_profile && $spicepress_twitter_profile != '' ): ?>
				<li class="twitter"><a href="<?php echo esc_url($spicepress_twitter_profile); ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
		   </ul>
		</div>
	</div>	
</article>
<?php }

// blogs,pages and archive page title
function spicepress_archive_page_title(){
	if( is_archive() )
	{
		$spicepress_archive_text = get_theme_mod('archive_prefix', esc_html__('Archive','spicepress'));
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		if ( is_day() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_archive_text), esc_html(get_the_date()) );
		  
        elseif ( is_month() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_archive_text), esc_html(get_the_date()) );
		  
        elseif ( is_year() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_archive_text), esc_html(get_the_date()) );
		  
        elseif( is_category() ):
		
			$spicepress_category_text = get_theme_mod('category_prefix',esc_html__('Category','spicepress'));
			
			printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_category_text), single_cat_title( '', false ) );
			
		elseif( is_author() ):
			
			$spicepress_author_text = get_theme_mod('author_prefix',esc_html__('All posts by','spicepress'));
		
			printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_author_text), esc_html(get_the_author() ));
			
		elseif( is_tag() ):
			
			$spicepress_tag_text = get_theme_mod('tag_prefix',esc_html__('Tag','spicepress'));
			
			printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_tag_text), single_tag_title( '', false ) );
			
		elseif( class_exists( 'WooCommerce' ) && is_shop() ):
			
		$spicepress_shop_text = get_theme_mod('shop_prefix',esc_html__('Shop','spicepress'));
			
		printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_shop_text), single_tag_title( '', false ));
			
        elseif( is_archive() ): 
		the_archive_title( '<h1>', '</h1>' ); 
		
		endif;
		

		echo '</h1></div>';
	}
	elseif( is_search() )
	{
		$spicepress_search_text = get_theme_mod('search_prefix',__('Search results for','spicepress'));
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		printf( esc_html__( '%1$s %2$s', 'spicepress' ), esc_html($spicepress_search_text), get_search_query() );
		
		echo '</h1></div>';
	}
	elseif( is_404() )
	{
		$spicepress_breadcrumbs_text = get_theme_mod('404_prefix',__('404','spicepress'));
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		printf( esc_html__( '%1$s %2$s', 'spicepress' ) , esc_html($spicepress_breadcrumbs_text), '' );
		
		echo '</h1></div>';
	}
	else
	{
		  	$allowed_html = array(
									'br'     => array(),
									'em'     => array(),
									'strong' => array(),
									'i'      => array(
										'class' => array(),
									),
									'span'   => array(),
								);	
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>'.esc_html(get_the_title(), $allowed_html).'</h1></div>';
	}
}

function spicepress_excerpt_more( $more ) {
	return '</div><div class="blog-btn"><a href="' . esc_url(get_permalink()) . '" class="home-blog-btn">'.esc_html__('Read More','spicepress').'</a>';
}
add_filter( 'excerpt_more', 'spicepress_excerpt_more' );

// spicepress post navigation
function spicepress_post_nav()
{
	global $post;
	echo '<div style="text-align:center;">';
	posts_nav_link( ' &#183; ', esc_html__('previous page','spicepress'), esc_html__('next page','spicepress') );
	echo '</div>';
}

add_filter( 'widget_text', 'do_shortcode' );



//Hide Title of woocommerce shop page
add_filter( 'woocommerce_show_page_title' , 'spicepress_woo_hide_page_title' );
function spicepress_woo_hide_page_title() {
	
	return false;
	
}

if(!function_exists( 'spicepress_image_thumbnail')) : 					
		function spicepress_image_thumbnail($preset,$class){
		if(has_post_thumbnail()){  $defalt_arg =array('class' => $class);
	the_post_thumbnail($preset, $defalt_arg); } } 
endif;

/*----Function for the menu breakpoint----*/ 

add_action('wp_head','spicepress_custom_menu_breakpoint');
function spicepress_custom_menu_breakpoint() {
	
$spicepress_menu_breakpoint = esc_html(get_theme_mod('menu_breakpoint', 1100));
$link_color = esc_attr(get_theme_mod('link_color'));

?>
<style type="text/css">


@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) { 
	.navbar-custom .dropdown-menu {
		border-top: none;
		border-bottom: none;	
		box-shadow: none !important;
		border: none;
	}		
}

@media (min-width: <?php echo $spicepress_menu_breakpoint; ?>px) {
.navbar-nav li button { display: none;} 
}

@media (min-width: <?php echo $spicepress_menu_breakpoint; ?>px){
.navbar-nav ul.dropdown-menu  .caret {
        float: right;
        border: none;
}}

@media (min-width: <?php echo $spicepress_menu_breakpoint; ?>px){
.navbar-nav ul.dropdown-menu  .caret:after {
        content: "\f0da";
        font-family: "FontAwesome";
        font-size: 10px;
}}

@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px){
.caret {
        position: absolute;
        right: 0;
        margin-top: 10px;
        margin-right: 10px;
}}


@media (min-width: 100px) and (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) { 
	.navbar .navbar-nav > .active > a, 
	.navbar .navbar-nav > .active > a:hover, 
	.navbar .navbar-nav > .active > a:focus {
		
            color: <?php echo $link_color; ?>;
            background-color: transparent;
	}
	.navbar .navbar-nav > .open > a,
	.navbar .navbar-nav > .open > a:hover,
	.navbar .navbar-nav > .open > a:focus { 
		background-color: transparent; 
		
		 color: <?php echo $link_color; ?>;
		border-bottom: 1px dotted #4c4a5f; 
	}
}

/*===================================================================================*/
/*	NAVBAR
/*===================================================================================*/

.navbar-custom {
	background-color: #fff;
	border: 0;
	border-radius: 0;
	z-index: 1000;
	font-size: 1.000rem;
	transition: background, padding 0.4s ease-in-out 0s;
	margin: 0; 
	min-height: 90px;
}
.navbar a { transition: color 0.125s ease-in-out 0s; }
.navbar-custom .navbar-brand {
	letter-spacing: 1px;
	font-weight: 600;
	font-size: 2.000rem;
    line-height: 1.5;
	color: #1b1b1b;
	margin-left: 0px !important;
	height: auto;
	padding: 26px 30px 26px 15px;
}
.site-branding-text { float: left; margin: 0; padding: 13px 50px 13px 0; }
.site-title { height: auto; font-size: 1.875rem; line-height: 1.3; font-weight: 600; margin: 0; padding: 0px; }
.site-description { padding: 0; margin: 0; }
.navbar-custom .navbar-nav li { margin: 0px; padding: 0; }
.navbar-custom .navbar-nav li > a {
	position: relative;
	color: #1b1b1b;
	font-weight: 600;
	font-size: 0.875rem;
	padding: 35px 17px;
    transition: all 0.3s ease-in-out 0s;
}
.navbar-custom .navbar-nav li > a > i {
    padding-left: 5px;
}

/*Dropdown Menu*/
.navbar-custom .dropdown-menu {
	border-radius: 0;
	padding: 0;
	min-width: 200px;
    background-color: #21202e;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.5);
	position: static;
	float: none;
	width: auto;
	margin-top: 0;
}
.navbar-custom .dropdown-menu > li { padding: 0 10px; margin: 0; }
.navbar-custom .dropdown-menu > li > a {
	color: #d5d5d5;
    border-bottom: 1px dotted #363544;
    font-weight: 600;
    font-size: 0.875rem;
    padding: 12px 15px;
    transition: all 0.2s ease-in-out 0s;
    letter-spacing: 0.7px;	
	white-space: normal;
}
.navbar-custom .dropdown-menu > li > a:hover, 
.navbar-custom .dropdown-menu > li > a:focus {
    padding: 12px 15px 12px 20px;
}
.navbar-custom .dropdown-menu > li > a:hover, 
.navbar-custom .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: #282737;
}
.navbar-custom .dropdown-menu .dropdown-menu {
	left: 100%;
	right: auto;
	top: 0;
	margin-top: 0;
}
.navbar-custom .dropdown-menu.left-side .dropdown-menu {
	border: 0;
	right: 100%;
	left: auto;
}
.navbar-custom .dropdown-menu .open > a,
.navbar-custom .dropdown-menu .open > a:focus,
.navbar-custom .dropdown-menu .open > a:hover {
	background: #282737;
	color: #fff;
}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus { 
	border-color: #363544;
} 
.navbar-custom .dropdown-menu > .active > a, 
.navbar-custom .dropdown-menu > .active > a:hover, 
.navbar-custom .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: transparent;
}
.navbar-custom .navbar-toggle .icon-bar { background: #121213; width: 40px; height: 2px; }
.navbar-toggle .icon-bar + .icon-bar { margin-top: 8px; }


/*--------------------------------------------------------------
	Menubar - Media Queries
--------------------------------------------------------------*/

@media (min-width: <?php echo $spicepress_menu_breakpoint; ?>px){

	.navbar-collapse.collapse {
		display: block !important;
	}
	.navbar-nav {
		margin: 0;
	}
	.navbar-custom .navbar-nav > li {
		float: left;
	}
	.navbar-header {
		float: left;
	}
	.navbar-toggle {
		display: none;
	}
}



@media (min-width: 768px){
	.navbar-custom .navbar-brand {
		padding: 20px 50px 20px 0;
	}
}
@media (min-width: <?php echo $spicepress_menu_breakpoint; ?>px) {
	.navbar-transparent { background: transparent; padding-bottom: 0px; padding-top: 0px; margin: 0; }
	.navbar-custom .open > .dropdown-menu { visibility: visible; opacity: 1; }
	.navbar-right .dropdown-menu { right: auto; left: 0; }
}
 
<?php if($spicepress_menu_breakpoint < 991){ ?>
@media (min-width: 200px) and (max-width: 991px) {
	.navbar-custom .container-fluid {
		width: auto !important;
	}
}

<?php } ?>

@media (min-width: <?php echo $spicepress_menu_breakpoint+1; ?>px) {
	.navbar-custom .container-fluid {
		width: 970px;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}
	
	.navbar-custom .dropdown-menu { 
		border-top: 2px solid #ce1b28 !important;
		border-bottom: 2px solid #ce1b28 !important;
		position: absolute !important; 
		display: block; 
		visibility: hidden; 
		opacity: 0; 
	}
	.navbar-custom .dropdown-menu > li > a { padding: 12px 15px !important; }
	.navbar-custom .dropdown-menu > li > a:hover, 
	.navbar-custom .dropdown-menu > li > a:focus {
		padding: 12px 15px 12px 20px !important;
	}	
	.navbar-custom .open .dropdown-menu { background-color: #21202e !important; }
	
	.navbar-custom .dropdown-menu > li > a i {
        float: right;
    }

}
@media (min-width: 1200px) {
	.navbar-custom .container-fluid {
		width: 1170px;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}
}


/** BELOW MAX-WIDTH MEDIA QUERIES **/

@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) {
	/* Navbar */
	.navbar-custom .navbar-nav { letter-spacing: 0px; margin-top: 1px; margin-bottom: 0; }
	.navbar-custom .navbar-nav li { margin: 0 15px; padding: 0; }
	.navbar-custom .navbar-nav li > a { color: #bbb; padding: 12px 0px 12px 0px; }
	.navbar-custom .navbar-nav > li > a:focus,
	.navbar-custom .navbar-nav > li > a:hover {
		background: transparent;
		color: #fff;
	}
	.navbar-custom .dropdown-menu > li > a {
		display: block;
		clear: both;
		font-weight: normal;
	}
	.navbar-custom .dropdown-menu > li > a:hover, 
	.navbar-custom .dropdown-menu > li > a:focus {
		background-color: #21202F;
		color: #fff;
		padding: 12px 0px 12px 0px;
	}
	.navbar-custom .open .dropdown-menu {
		position: static;
		float: none;
		width: auto;
		margin-top: 0;
		background-color: transparent;
		border: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.navbar-custom .open .dropdown-menu > li > a {
		line-height: 20px;
	}
	.navbar-custom .open .dropdown-menu .dropdown-header,
	.navbar-custom .open .dropdown-menu > li > a {
		padding: 12px 0px;
	}
	.navbar-custom .open .dropdown-menu .dropdown-menu .dropdown-header,
	.navbar-custom .open .dropdown-menu .dropdown-menu > li > a {
		padding: 12px 0px;
	}
	.navbar-custom li a,
	.navbar-custom .dropdown-search {
		border-bottom: 1px dotted #4c4a5f !important;
	}
	.navbar-header { padding: 0px 15px; float: none; }
	.navbar-custom .navbar-brand { padding: 20px 50px 20px 0px; }
	.navbar-toggle { display: block; margin: 24px 15px 24px 0; padding: 9px 0px; }
	.site-branding-text { padding: 17px 50px 17px 15px; }
	.navbar-collapse { border-top: 1px solid transparent; box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1); }
	.navbar-collapse.collapse { display: none!important; }
	.navbar-custom .navbar-nav { background-color: #21202e; float: none!important; margin: 0px }
	.navbar-custom .navbar-nav > li { float: none; }
	.navbar-collapse.collapse.in { display: block!important; }
	.collapsing { overflow: hidden!important; }
	
}
@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) { 
	.navbar-custom .dropdown a > i.fa {
		font-size: 0.938rem;
		position: absolute;
		right: 0;
		margin-top: -6px;
		top: 50%;
		padding-left: 7px;
	}	
}
@media (max-width: 768px) {
	.navbar-header { padding: 0 15px; }
	.navbar-custom .navbar-brand { padding: 20px 50px 20px 15px; }
}
@media (max-width: 500px) { 
	.navbar-custom .navbar-brand { float: none; display: block; text-align: center; padding: 25px 15px 12px 15px; }
	.navbar-custom .navbar-brand img { margin: 0 auto; }
	.site-branding-text { padding: 17px 15px 17px 15px; float: none; text-align: center; }
	.navbar-toggle { float: none; margin: 10px auto 25px; }	
}



/*===================================================================================*/
/*	CART ICON 
/*===================================================================================*/
.cart-header {
	width: 40px;
	height: 40px;
	line-height: 1.6;
	text-align: center;
	background: transparent;
	position: relative;
	float: right;
	margin: 25px 7px 25px 20px;
}
.cart-header > a.cart-icon {
    -wekbit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    display: inline-block;
    font-size: 1.125rem;
    color: #202020;
    width: 100%;
    height: 100%;
	border: 1px solid #eaeaea;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	padding: 4px;
}
.cart-header > a .cart-total {
    font-family: 'Open Sans', Sans-serif;
    font-size: 0.688rem;
	line-height: 1.7;
    color: #ffffff;
	font-weight: 600;
    position: absolute;
    right: -7px;
    top: -7px;
	padding: 1px;
    width: 1.225rem;
    height: 1.225rem;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
	-wekbit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
@media (min-width: 100px) and (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) { 
.cart-header { float: left; margin: 20px 7px 20px 15px !important; }
.cart-header > a.cart-icon { color: #fff; }
}


/*--------------------------------------------------------------
	Navbar Overlapped & Stiky Header Css
--------------------------------------------------------------*/ 
body.blog .header-overlapped { 
	margin: 0px; 
}
body.page-template-template-business .header-overlapped, 
body.page-template-template-overlaped .header-overlapped { 
    background-color: transparent; 
    margin: 0; 
    position: relative; 
    z-index: 99; 
}
.header-overlapped .page-title-section { background-color: transparent !important; }
.navbar-overlapped {
	position: absolute;
	right: 0;
	left: 0;
	top: 0;
	z-index: 20;
	background-color: rgba(0,0,0,0.2);
}
@media (min-width:500px) {
    body.page-template-template-business .navbar-overlapped { 
        position: absolute; 
        right: 0; 
        left: 0; 
        top: 0; 
        z-index: 20;
    }
}
.navbar-overlapped { min-height: 90px; position: relative; }
.header-overlapped .page-seperate {display: none;}
.navbar-overlapped .navbar-brand { padding: 20px 0px; color: #ffffff; }
.navbar-overlapped .navbar-brand:hover, 
.navbar-overlapped .navbar-brand:focus { 
	color: #ffffff; 
}
.navbar-overlapped .site-title a, 
.navbar-overlapped .site-title a:hover, 
.navbar-overlapped .site-title a:focus, 
.navbar-overlapped .site-description {
    color: #fff;
}
.navbar-overlapped .navbar-nav > li > a {
	color: #fff;
	border-bottom: 2px solid transparent;
	margin-left: 5px;
	margin-right: 5px;
}
.navbar-overlapped .navbar-nav > li > a:hover, 
.navbar-overlapped .navbar-nav > li > a:focus {
    background-color: transparent;
    color: #fff;
    border-bottom: 2px solid rgba(255,255,255,1);
}
.navbar-overlapped .navbar-nav > .open > a,
.navbar-overlapped .navbar-nav > .open > a:hover,
.navbar-overlapped .navbar-nav > .open > a:focus { 
	background-color: transparent; 
	color: #fff; 
	border-bottom: 2px solid transparent; 
} 
.navbar-overlapped .navbar-nav > .active > a, 
.navbar-overlapped .navbar-nav > .active > a:hover, 
.navbar-overlapped .navbar-nav > .active > a:focus { 
	background-color: transparent !important;
    color: #fff;
    border-bottom: 2px solid rgba(255,255,255,1);
}
.navbar-overlapped .cart-header { width: 25px; height: 25px; margin: 33px 7px 32px 20px; }
.navbar-overlapped .cart-header > a.cart-icon { color: #fff; border: 1px solid #ffffff; }
.navbar-overlapped .cart-header > a.cart-icon { width: auto; height: auto; border: 0 none; padding: 0; }
.navbar-overlapped .cart-header > a .cart-total { right: -11px; top: -4px; }

/*Header Stiky Menu*/
.stiky-header{
    position: fixed !important;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
	background: #21202e;
	transition: all 0.3s ease;
	min-height: 70px;
	box-shadow: 0 2px 3px rgba(0,0,0,.1)
}
.navbar-overlapped.stiky-header .navbar-brand { padding: 10px 0px; }
.navbar-overlapped.stiky-header .site-branding-text { padding: 3px 50px 3px 15px; }
.navbar-overlapped.stiky-header .navbar-nav > li > a { padding: 24px 10px; }
.navbar-overlapped.stiky-header .cart-header { margin: 23px 7px 22px 20px; }

/*--------------------------------------------------------------
	Menubar - Media Queries
--------------------------------------------------------------*/

@media (min-width: 768px){
	.navbar-custom .navbar-brand {
		padding: 20px 50px 20px 0;
	}
}
/** BELOW MAX-WIDTH MEDIA QUERIES **/

@media (max-width: 768px) {
	.navbar-custom .navbar-brand { padding: 20px 50px 20px 15px; }
}
@media (max-width: 500px) { 
	.navbar-custom .navbar-brand { float: none; display: block; text-align: center; padding: 20px 15px 25px 15px; }
	.navbar-custom .navbar-brand img { margin: 0 auto; }
	.site-branding-text { padding: 17px 15px 17px 15px; float: none; text-align: center; }
	.navbar-toggle { float: none; margin: 10px auto 25px; }
	/*Navbar Overlapped*/
	.navbar-overlapped { position: relative; background-color: #21202e; border-bottom: 1px solid #4c4a5f; }
	.navbar-overlapped .navbar-collapse.in { bottom: 0px; }
	.navbar-overlapped .navbar-collapse { bottom: 0px; }	
	.navbar-overlapped.stiky-header .navbar-toggle { float: none; margin: 10px auto 25px; }
	.navbar-overlapped.stiky-header .site-branding-text { 
		padding: 17px 15px 17px 15px; 
		float: none; 
		text-align: center; 
	}
	body.blog .navbar-overlapped { position: relative; }
	
}

/*--------------------------------------------------------------
	Navbar Classic Header Css
--------------------------------------------------------------*/


.navbar-classic { z-index: 20; background-color: #21202e; }
.navbar-classic { min-height: 60px; }
.navbar-classic .navbar-nav { float: none !important; }
.desktop-header .navbar-classic .navbar-nav > li > a { color: #fff; padding: 20px 25px; }
.navbar-classic .navbar-collapse { border-top: 1px solid #434158; }
.navbar-classic .cart-header { width: 25px; height: 25px; margin: 18px 10px 17px 20px; }
.navbar-classic .cart-header > a.cart-icon { color: #fff; border: 1px solid #ffffff; }
.navbar-classic .cart-header > a.cart-icon { width: auto; height: auto; border: 0 none; padding: 0; }
.navbar-classic .cart-header > a .cart-total { right: -11px; top: -4px; }
.header-widget-info .navbar-brand { height: auto; padding: 15px 0px; }

/*--------------------------------------------------------------
	Menubar - Media Queries
--------------------------------------------------------------*/

@media (min-width: 768px){
	.navbar-custom .navbar-brand {
		padding: 20px 50px 20px 0;
	}
	/* Navbar Classic */
	.navbar-classic .navbar-nav { float: none !important; }
}


/*-------------------------------------------------------------------------
/* Navbar - Logo Right Align with Menu
-------------------------------------------------------------------------*/

@media (min-width: <?php echo $spicepress_menu_breakpoint+1; ?>px) {
	.navbar-header.align-right {
		float: right;
	}
	.navbar-header.align-right ~ .navbar-collapse { padding-left: 0; }
}
@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px) {  
	.navbar-header.align-right .navbar-toggle { 
		float: left;
		margin-left: 15px;
	}
}
.navbar-brand.align-right, .site-branding-text.align-right {
	float: right;
	margin-right: 0px;
	margin-left: 50px;
	padding-right: 0px;
}
@media (max-width: 768px) {
	.navbar-brand.align-right, .site-branding-text.align-right {
		padding-right: 15px;
	}
}
@media (max-width: 500px) {
	.navbar-brand.align-right{ 
		float: none;
		padding: 10px 15px 30px 15px;
	}
    .site-branding-text.align-right { 
		float: none;
		padding: 10px 15px 30px 15px;
		margin-left: 0;
	}		
	.navbar-header.align-right .navbar-toggle { 
		float: none;
		margin: 30px auto 10px; 
	}
}
.p-lef-right-0 { padding-left: 0; padding-right: 0; }


/*-------------------------------------------------------------------------
/* Navbar - Logo Center Align with Menu
-------------------------------------------------------------------------*/

.mobile-header-center { display: none; }
@media (max-width: <?php echo $spicepress_menu_breakpoint; ?>px){
	.desktop-header-center {
		display: none !important;
	}
	.mobile-header-center {
		display: block !important;
	}
}
.navbar-center-fullwidth .container-fluid {
	padding-left: 0px;
	padding-right: 0px;
	width: auto;
}
@media (min-width: <?php echo $spicepress_menu_breakpoint+1; ?>px) {
	.navbar-center-fullwidth .logo-area { 
		margin: 0 auto;
		padding: 40px 0;
		text-align: center;
	}
	.navbar-brand.align-center, .site-branding-text.align-center{
		float: none;
		padding: 0px;
		display: inline-block;
	}	
	.navbar-center-fullwidth .navbar-nav {
		float: none;
		margin: 0 auto;
		display: table;
	}
}
.navbar-center-fullwidth .navbar-collapse {
    border-top: 1px solid #e9e9e9;
	border-bottom: 1px solid #e9e9e9;
}
.navbar-center-fullwidth .navbar-nav > .active > a, 
.navbar-center-fullwidth .navbar-nav > .active > a:hover, 
.navbar-center-fullwidth .navbar-nav > .active > a:focus {
    color: #ce1b28 !important;
    background-color: transparent !important;
}
.navbar-center-fullwidth .navbar-nav li > a {
    padding: 20px;
}
.navbar-center-fullwidth .dropdown-menu > li > a {
    padding: 12px 15px;
}
.navbar-center-fullwidth .sp-search-area {
    margin-top: 10px;
    margin-bottom: 8px;
}

</style>
<?php } 
//Edit link 
if (!function_exists('spicepress_edit_link')) :
    function spicepress_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'spicepress'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fa fa-edit"></i>',
                '</span>'
            );
    } 
endif;
?>