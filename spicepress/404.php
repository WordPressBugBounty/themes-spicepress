<?php 
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); 
spicepress_breadcrumbs();?>
<!-- 404 Error Section -->
<div id="content">
<section class="404-section error">		
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error_404 wow flipInX animated" data-wow-delay=".5s">
					<h4><?php esc_html_e( 'Oops! Page not found', 'spicepress' ); ?></h4>
					<h1><?php esc_html_e( '4', 'spicepress' ); ?><i class="fa fa-frown-o"></i><?php esc_html_e( '4', 'spicepress' ); ?> </h1>
					<p><?php esc_html_e( 'We are sorry, but the page you are looking for does not exist.', 'spicepress' ); ?></p> 
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error_404_btn"><i class="fa fa-arrow-circle-left"></i><?php esc_html_e( 'Go Back', 'spicepress' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<!-- /404 Error Section -->
<div class="clearfix"></div>
<?php get_footer(); ?>