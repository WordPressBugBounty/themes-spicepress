<?php 
		// Template Name: Business Template
		
		get_header();
		echo '<div id="content">';
		do_action( 'spiceb_spicepress_sections', false );
		get_template_part('index','news');
		echo '</div>';
        get_footer();		