<?php 
/**
 * Template Name: About Us
 */
get_header();
spicepress_breadcrumbs();
?>
<div id="content">
<?php
if ( $post->post_content!=="" )
{?>
<!-- About Section -->
<section class="about-section">		
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php 
				the_post();
				the_content();
				wp_link_pages( );
				?>
			</div>	
		</div>
	</div>
</section>
<!-- /About Section -->
<?php } ?>
<div class="clearfix"></div>

<!-- Testimonial Section -->
<?php
if ( function_exists( 'spiceb_spicepress_testimonial' ) ) {
spiceb_spicepress_testimonial();
}?>
<!-- /Testimonial Section -->
<div class="clearfix"></div>
</div>
<?php get_footer(); ?>