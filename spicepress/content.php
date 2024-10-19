<?php
/**
 * The default template for displaying content
 */
?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-wow-delay="0.4s">			
					<?php 
					$spicepress_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
					if($spicepress_blog_meta_section_enable == true) {
					spicepress_blog_meta_content(); } ?>
					<header class="entry-header">
						<?php if ( is_single() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
						else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
						endif; 
						if($spicepress_blog_meta_section_enable ==true) {
						spicepress_blog_category_content();
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
					<?php
					$spicepress_user=get_option('spicepress_user_with_1_9_1');
  					if($spicepress_user=='old'){
						if (get_theme_mod('spicepress_blog_content')!=null || get_theme_mod('spicepress_blog_content_length')!=null ) { 
								spicepress_posted_content(); wp_link_pages( ); 
								$spicepress_read_btn=get_theme_mod('spicepress_blog_content','excerpt');
								if($spicepress_read_btn=="excerpt"){?>
									<p><a href="<?php the_permalink();?>" class="more-link"><?php _e('Read More','spicepress'); ?></a></p>
								<?php 
								}
						}else{
								the_content( __('Read More','spicepress') );
								wp_link_pages( );

						}
					}else{
						spicepress_posted_content(); wp_link_pages( ); 
						$spicepress_read_btn=get_theme_mod('spicepress_blog_content','excerpt');
							if($spicepress_read_btn=="excerpt"){?>
								<p><a href="<?php the_permalink();?>" class="more-link"><?php _e('Read More','spicepress'); ?></a></p>
							<?php 
							}
					}?>						
					</div>						
				</article>