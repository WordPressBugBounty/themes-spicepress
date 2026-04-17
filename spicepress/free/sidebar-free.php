<?php
/**
 * Template file for sidebar
 */
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<!--Sidebar Section-->
<div class="col-md-4 col-sm-5 col-xs-12">
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>	
	</div>
</div>	
<!--Sidebar Section-->
<?php endif; ?>