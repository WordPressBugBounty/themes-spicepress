<?php
/**
 * side bar template
 *
 */
?>
<?php if ( is_active_sidebar( 'woocommerce' )  ) : ?>
<div class="col-md-4 col-sm-5 col-xs-12">
	<div class="sidebar">
		<!--Sidebar-->
		<?php dynamic_sidebar( 'woocommerce' ); ?>
		<!--/End of Sidebar-->
	</div>
</div>	
<?php endif; ?>