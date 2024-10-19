<?php 
/**
 * Template name:Full-width page
 */
get_header();
spicepress_breadcrumbs(); ?>
<!-- Blog & Sidebar Section -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-12 col-xs-12">
				<?php 
				// Start the Loop.
				while ( have_posts() ) : the_post();
				// Include the page
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content-area wow fadeInDown animated' ); ?> data-wow-delay="0.4s">

					<?php 
						echo '<div class="blog-featured-img">';
						the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
						echo '</div>';
					?>
					
					<div class="post-content">
					<div class="entry-content">
						<?php the_content( __('Read More','spicepress') ); 
							wp_link_pages( );
						?>
						</div>							
					</div>
				</article>
					 <?php
					comments_template( '', true ); // show comments 
					
				endwhile;
				?>
			</div>	
			<!--/Blog Section-->
		</div>
	</div>
</section>
</div>
<!-- /Blog & Sidebar Section -->
<?php get_footer(); ?>