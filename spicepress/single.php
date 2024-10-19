<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Spicepress
 */
get_header();
spicepress_breadcrumbs(); 
 ?>
<!-- Blog & Sidebar Section -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'8' ); ?> col-sm-<?php echo ( !is_active_sidebar( 'sidebar-1' ) ? '12' :'7' ); ?> col-xs-12">
				<?php 
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page
					get_template_part( 'content','single');
					
					// author meta
					if(get_theme_mod('spicepress_enable_single_post_admin_details',true)===true):					
						spicepress_author_meta();
					endif;	
					
					comments_template( '', true ); // show comments 
					
				endwhile;
				?>
			</div>	
			<!--/Blog Section-->
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
</div>
<!-- /Blog & Sidebar Section -->
<?php get_footer(); ?>