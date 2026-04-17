<?php
/**
 * The default template for displaying content
 */
?>
<article class="post" id="post-<?php the_ID(); ?>" <?php post_class( 'post-content-area wow fadeInDown animated' ); ?> data-wow-delay="0.4s">
			
		<?php 
		if(has_post_thumbnail()){
		if ( is_single() ) {
			echo '<div class="blog-featured-img">';
			the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
			echo '</div>';
		}else{
			echo '<div class="blog-featured-img">';
			the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
			echo '</div>';
		}}?>
		
		
		
		<div class="post-content">					
			<div class="entry-content">
			<?php the_content( __('Read More','spicepress') );
				wp_link_pages( ); ?>
			</div>							
		</div>
</article>