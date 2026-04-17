<?php
/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */

if ( ! class_exists( 'WP_Customize_Control' ) )
	return NULL;

function spicepress_sections_settings( $wp_customize ){

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/* Sections Settings */
	$wp_customize->add_panel( 'section_settings', array(
		'priority'       => 126,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Homepage Section Settings','spicepress'),
	) );


	//Page editor Section
	$wp_customize->add_section('spicepress_gutenberg_editor_section',array(
				'title' => esc_html__('Gutenberg Editor settings','spicepress'),
				'panel' => 'section_settings',
				'priority'       => 2,
	));


	// Enable editor section
	$wp_customize->add_setting( 'gutenberg_editor_section_enable' , array( 'default' => 'on',  'sanitize_callback' => 'spicepress_sanitize_radio',) );
	$wp_customize->add_control(	'gutenberg_editor_section_enable' , array(
			'label'    => esc_html__( 'Enable Page Editor', 'spicepress' ),
			'section'  => 'spicepress_gutenberg_editor_section',
			'type'     => 'radio',
			'choices' => array(
				'on'=>esc_html__('ON', 'spicepress'),
				'off'=>esc_html__('OFF', 'spicepress')
			)
	));


		// Custom Control Button
	class Spicepress_Editor_Customize_Control extends WP_Customize_Control {
	    public $type = 'new_menu';

	    public function render_content() {

	        $template_file = 'template-business.php';

	        $pages = get_posts(array(
	            'post_type'  => 'page',
	            'meta_key'   => '_wp_page_template',
	            'meta_value' => $template_file,
	            'posts_per_page' => 1,
	        ));

	        if ( !empty($pages) ) {
	            $page_id = $pages[0]->ID;
	            $edit_link = admin_url('post.php?post=' . $page_id . '&action=edit');
	        } else {
	            $edit_link = admin_url('edit.php?post_type=page');
	        }
	        ?>
	        <div class="spicepress-pro-features-customizer">
	            <p>Use this button to insert Gutenberg blocks into the Business Template page.</p>
	            <a href="<?php echo esc_url($edit_link); ?>" class="spicepress-pro-button button-primary">
	                <?php esc_html_e('Page Editor Section', 'spicepress'); ?>
	            </a>
	        </div>
	        <?php
	    }
	}


	$wp_customize->add_setting(
	    'edit_homepage_button_setting',
	    array(
	        'capability'        => 'edit_theme_options',
	        'sanitize_callback' => 'sanitize_text_field',
	    )	
	);

	$wp_customize->add_control( 
	    new Spicepress_Editor_Customize_Control( 
	        $wp_customize, 
	        'edit_homepage_button_setting', 
	        array(
	            'section' => 'spicepress_gutenberg_editor_section',
	            'active_callback' => 'spicepress_editor_button_callback',
	            'setting' => 'edit_homepage_button_setting'
	        )
	    )
	);

	//Latest News Section
	$wp_customize->add_section('spicepress_latest_news_section',array(
			'title' => esc_html__('Latest News Settings','spicepress'),
			'panel' => 'section_settings',
			'priority'       => 8,
			));


			// Enable news section
			$wp_customize->add_setting( 'latest_news_section_enable' , array( 'default' => 'on',  'sanitize_callback' => 'spicepress_sanitize_radio',) );
			$wp_customize->add_control(	'latest_news_section_enable' , array(
					'label'    => esc_html__( 'Enable Home News section', 'spicepress' ),
					'section'  => 'spicepress_latest_news_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>esc_html__('ON', 'spicepress'),
						'off'=>esc_html__('OFF', 'spicepress')
					)
			));

		// News section title
		$wp_customize->add_setting( 'home_news_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Turpis Mollis','spicepress'),
		'sanitize_callback' => 'spicepress_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));
		$wp_customize->add_control( 'home_news_section_title',array(
		'label'   => esc_html__('Title','spicepress'),
		'section' => 'spicepress_latest_news_section',
		'type' => 'text',
		));

		//News section discription
		$wp_customize->add_setting( 'home_news_section_discription',array(
		'default'=> esc_html__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim mei ludus efficiendi ei sea summo mazim ex.','spicepress'),
		'transport'         => $selective_refresh,
		'sanitize_callback' => 'spicepress_sanitize_textarea',
		));
		$wp_customize->add_control( 'home_news_section_discription',array(
		'label'   => esc_html__('Description','spicepress'),
		'section' => 'spicepress_latest_news_section',
		'type' => 'textarea',
		));


		// enable / disable meta section
		$wp_customize->add_setting(
			'blog_meta_section_enable',
			array('capability'  => 'edit_theme_options',
			'default' => true,
			'sanitize_callback' => 'spicepress_sanitize_checkbox',

			));
		$wp_customize->add_control(
			'blog_meta_section_enable',
			array(
				'type' => 'checkbox',
				'label' => esc_html__('Enable post meta values, like author name, date, comments, etc.','spicepress'),
				'section' => 'spicepress_latest_news_section',
			)
		);


}
add_action( 'customize_register', 'spicepress_sections_settings' );

/**
 * Add selective refresh for Front page section section controls.
 */
function spicepress_register_home_section_partials( $wp_customize ){


	//News
	$wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
		'selector'            => '.home-news .section-header .widget-title',
		'settings'            => 'home_news_section_title',
		'render_callback'  => 'spicepress_home_news_section_title_render_callback',

	) );

	$wp_customize->selective_refresh->add_partial( 'home_news_section_discription', array(
		'selector'            => '.home-news .section-header p',
		'settings'            => 'home_news_section_discription',
		'render_callback'  => 'spicepress_home_news_section_discription_render_callback',

	) );


}

add_action( 'customize_register', 'spicepress_register_home_section_partials' );


function spicepress_home_news_section_title_render_callback() {
	return get_theme_mod( 'home_news_section_title' );
}

function spicepress_home_news_section_discription_render_callback() {
	return get_theme_mod( 'home_news_section_discription' );
}

function spicepress_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function spicepress_sanitize_radio( $input, $setting ){

            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);

            //get the list of possible radio box options
            $choices = $setting->manager->get_control( $setting->id )->choices;

            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

        }
function spicepress_sanitize_textarea( $input )
{
	return wp_kses_post( force_balance_tags( $input ) );
}
// callback function for editor button
function spicepress_editor_button_callback($control) {
    if('on' == $control->manager->get_setting('gutenberg_editor_section_enable')->value()) {
        return true;
    } else {
        return false;
    }
}