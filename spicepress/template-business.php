<?php 
		// Template Name: Business Template
		
		get_header();
		echo '<div id="content">';
		
		if ( function_exists( 'spiceb_spicepress_slider' ) ) {
			spiceb_spicepress_slider();
		}

		//editor content
		if( get_theme_mod('gutenberg_editor_section_enable','on') == 'on'){
			the_content();
			spicepress_edit_link();
		}

		if ( function_exists( 'spiceb_spicepress_service' ) ) {
			spiceb_spicepress_service();
		}

		if ( function_exists( 'spiceb_spicepress_portfolio' ) ) {
			spiceb_spicepress_portfolio();
		}

		if ( function_exists( 'spiceb_spicepress_portfolio' ) ) {
			spiceb_spicepress_testimonial();
		}

		get_template_part('index','news');

		echo '</div>';
        get_footer();			