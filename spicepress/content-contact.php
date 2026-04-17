<?php
/**
 * The default template for displaying content
 */
$contact_form_title = get_theme_mod('contact_form_title',__('Get in touch with us','spicepress'));
if($contact_form_title !=null): ?>
<div class="sidebar contact_form_heading">
	<div class="section-title wow fadeInDown animated" style="margin: 0;" data-wow-delay="0.4s">
		<div data-wow-delay="0.4s" class="section-header wow fadeInDown animated animated" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
			<h3 class="widget-title"><?php echo esc_html($contact_form_title);  ?></h3>
		</div>
	</div>
</div>
<?php endif; 
if ( $post->post_content!=="" ) {
?>
<div class="cont-form-section wow fadeInDown animated" data-wow-delay="0.4s">
		
	<?php the_content( __('Read More','spicepress') );
		wp_link_pages();?>
	
</div>
<?php } ?>
