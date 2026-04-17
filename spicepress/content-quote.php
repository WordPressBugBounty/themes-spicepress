<?php
/**
 * The default template for "No Posts Found" message
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content-area wow fadeInDown animated' ); ?> data-wow-delay="0.4s">

		    <?php 
					spicepress_blog_meta_content();?>
					<header class="entry-header">
						<?php if ( is_single() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
						else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
						endif; 
						spicepress_blog_category_content();
						?>
					</header>	
		
		
		    <?php 
			if(has_post_thumbnail()){
			if ( is_single() ) {
					echo '<figure class="post-thumbnail">';
					the_post_thumbnail( '', array( 'class'=>'img-responsive','alt' => esc_attr(get_the_title()) ) );
					echo '</figure>';
					}} ?>
		    <div class="entry-content">	
			
			<blockquote><?php the_content(); 
				wp_link_pages();?>
			</blockquote>
			
			</div>						

</article>