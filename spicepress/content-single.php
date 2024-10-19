<?php
/**
 * The default template for displaying content
 */
?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-wow-delay="0.4s">			
					<?php 
					$spicepress_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
					if($spicepress_blog_meta_section_enable == true) {
					spicepres_single_post_meta_content(); } ?>
					<header class="entry-header">
						<?php if ( is_single() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
						else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
						endif; 
						if($spicepress_blog_meta_section_enable ==true) {
						spicepress_single_post_category_content();
						}
						?>
					</header>				
					<?php 
					if(has_post_thumbnail()){
					if ( is_single() ) {
					echo '<figure class="post-thumbnail">';
					the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
					echo '</figure>';
					}else{
					echo '<figure class="post-thumbnail"><a class="post-thumbnail" href="'.esc_url(get_the_permalink()).'">';
					the_post_thumbnail( '', array( 'class'=>'img-responsive' ) );
					echo '</a></figure>';
					} } ?>
					<div class="entry-content">
						<?php the_content( __('Read More','spicepress') ); 
						 wp_link_pages();
						 spicepress_edit_link();
						 ?>
					</div>	
				</article>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
				 <?php
		//Single Post Next&Previous Navigation link.
				the_post_navigation(
				array(
				'prev_text' => '<span class="nav-subtitle"><i class="fa fa-angle-double-left"></i>' . esc_html__( 'Previous:', 'appointment' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'appointment' ) . '<i class="fa fa-angle-double-right"></i></span> <span class="nav-title">%title</span>',
				)
				);
		?>
				</article>