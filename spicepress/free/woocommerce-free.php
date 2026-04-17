<?php
get_header(); 
spicepress_breadcrumbs();?>
<!-- /Page Title Section -->
<div class="clearfix"></div>
<!-- Blog Section with Sidebar -->
<div id="content">
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-<?php echo ( !is_active_sidebar( 'woocommerce' ) ? '12' :'8' ); ?> col-sm-<?php echo ( !is_active_sidebar( 'woocommerce' ) ? '12' :'7' ); ?> col-xs-12">
				<?php woocommerce_content(); ?>
			</div>	
			<!--/Blog Section-->
			<?php get_sidebar('woocommerce'); ?>
		</div>
	</div>
</section>
</div>
<!-- /Blog Section with Sidebar -->
<?php get_footer(); ?>