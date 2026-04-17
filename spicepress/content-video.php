<?php
/**
 * The default template for "No Posts Found" message
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content-area wow fadeInDown animated' ); ?> data-wow-delay="0.4s">

		<?php if(get_theme_mod('blog_title_position_enable',false) == true){ ?>
		<div class="entry-header">
			<?php
				if ( is_single() ) :
					the_title( '<h2 class="entry-title">', '</h2>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
				endif;
			?>
		</div>	
		<?php } ?>
	
		
		
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
	
	        <div class="entry-content">
	
				<div class="video-wrapper">
									<?php 
			$width = '540';
			$height = '360';

			$parsedUrl  = parse_url(get_the_content());
			
			if(array_key_exists("host",$parsedUrl))
			{
				
				//specified condition for YouTube URL
				if($parsedUrl['host'] == 'www.youtube.com' || $parsedUrl['host'] == 'youtube.com')	{
				//get Youtube id from URL
				$embed = $parsedUrl['query'];
				parse_str($embed, $out);
				$embedUrl   = $out['v'];
				$embedUrl = explode('__',$embedUrl);
				$url = '//www.youtube.com/embed/'.$embedUrl[0] ;
				
				//echo the embed code for you tube
				echo '<iframe width="'.esc_attr($width).'" height="'.esc_attr($height).'" src="'.esc_url($url).'" frameborder="0" allowfullscreen></iframe>';
				}
				
				//specified condition for vimeo URL
				if($parsedUrl['host'] == 'www.vimeo.com' || $parsedUrl['host'] == 'vimeo.com') {
				//get vimeo id from URL	
				$urlid = $parsedUrl['path'];
				$number = preg_replace("/[^0-9]/", '', $urlid);
				$url = '//player.vimeo.com/video/'.$number ;
			  
			  
				//echo $url;
				//echo the embed code for Vimeo
				echo '<iframe width="'.esc_attr($width).'" height="'.esc_attr($height).'" src="'.esc_url($url).'" frameborder="0" allowfullscreen></iframe>';
				}
				
				//specified condition for vimeo URL
				if($parsedUrl['host'] == 'www.videopress.com' || $parsedUrl['host'] == 'videopress.com') {
				//get vimeo id from URL	
				$urlid = $parsedUrl['path'];
				//$number = preg_replace("/[^0-9]/", '', $urlid);
				$url = '//videopress.com'.$urlid ;
				//echo the embed code for Vimeo
				echo '<iframe width="'.esc_attr($width).'" height="'.esc_attr($height).'" src="'.esc_url($url).'" frameborder="0" allowfullscreen></iframe>
				<script src="' . esc_url('https://videopress.com/videopress-iframe.js') . '"></script>';
				}
			} ?>
				</div>
				<div class="video-content">
				<?php the_excerpt(); ?>
				</div>
				
			</div>	
				

			
		
</article>