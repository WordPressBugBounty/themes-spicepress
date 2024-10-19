<?php

/* * *********************** Theme Customizer with Sanitize function ******************************** */

function spicepress_theme_option($wp_customize) {

$selective_refresh = isset($wp_customize->selective_refresh) ? 'postMessage' : 'refresh';

    /**
     * Register Custom Slider Controls
     */
    require_once ST_TEMPLATE_DIR . '/inc/customizer/toggle/class-toggle-control.php';
    $wp_customize->register_control_type('spicepress_Toggle_Control');

    $wp_customize->add_panel('spicepress_theme_panel',
            array(
                'priority' => 2,
                'capability' => 'edit_theme_options',
                'title' => esc_html__('Spicepress Theme Blog Option', 'spicepress')
            )
    );
    $wp_customize->add_setting( 'spicepress_logo_length',
            array(
                'default' => 154,
                'transport'         => 'postMessage',
                'sanitize_callback' => 'absint'
            )
        );

    $wp_customize->add_control( new Spicepress_Slider_Custom_Control( $wp_customize, 'spicepress_logo_length',
        array(
            'label' => esc_html__( 'Logo Width', 'spicepress'  ),
            'priority' => 50,
            'section' => 'title_tagline',
            'input_attrs' => array(
                'min' => 0,
                'max' => 500,
                'step' => 1,
            ),
        )
    ) );
}

add_action('customize_register', 'spicepress_theme_option');


function spicepress_blog_customizer ( $wp_customize ){

$wp_customize->add_section('spicepress_blog_section',
	array(
	'title' => esc_html__('Blog Page','spicepress'),
	'panel' => 'spicepress_theme_panel',
	'priority' => 4,
));

/******************** Blog Content *******************************/
$wp_customize->add_setting('spicepress_blog_content',
	array(
		'default' 			=> esc_html__('excerpt','spicepress'),
		'sanitize_callback' => 'spicepress_sanitize_radio'
		)
	);

$wp_customize->add_control('spicepress_blog_content',
	array(
		'label' 	=> esc_html__('Choose Options', 'spicepress'),
		'section' 	=> 'spicepress_blog_section',
		'type' 		=> 'radio',
		'choices' 	=>  array(
			'excerpt' 	=> esc_html__('Excerpt', 'spicepress'),
			'content' 	=> esc_html__('Full Content', 'spicepress'),
			)
		)
	);

/******************** Blog Length *******************************/
$wp_customize->add_setting( 'spicepress_blog_content_length',
	array(
		'default'           => 30,
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',
		)
);
$wp_customize->add_control( 'spicepress_blog_content_length',
	array(
		'label'       => esc_html__( 'Excerpt Length', 'spicepress' ),
		'section'     => 'spicepress_blog_section',
		'type'        => 'number',
		'input_attrs' => array( 'min' => 10, 'max' => 200, 'step' => 1, 'style' => 'width: 200px;' ),
	)
);

}
add_action( 'customize_register', 'spicepress_blog_customizer' );

/**
 * Single Blog Options Customizer
 *
 * @package SpicePress
 */

function spicepress_single_blog_customizer($wp_customize) {
    $wp_customize->add_section('spicepress_single_blog_section',
            array(
                'title' => esc_html__('Single Post', 'spicepress'),
                'panel' => 'spicepress_theme_panel',
                'priority' => 5
    ));

    /*     * *********************** Meta Hide Show ******************************** */

    $wp_customize->add_setting('spicepress_enable_single_post_category',
            array(
                'default' => true,
                'sanitize_callback' => 'spicepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new spicepress_Toggle_Control($wp_customize, 'spicepress_enable_single_post_category',
                    array(
                'label' => esc_html__('Hide/Show Categroy', 'spicepress'),
                'type' => 'toggle',
                'section' => 'spicepress_single_blog_section',
                'priority' => 4,
                    )
    ));

    $wp_customize->add_setting('spicepress_enable_single_post_date',
            array(
                'default' => true,
                'sanitize_callback' => 'spicepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new spicepress_Toggle_Control($wp_customize, 'spicepress_enable_single_post_date',
                    array(
                'label' => esc_html__('Hide/Show Date', 'spicepress'),
                'type' => 'toggle',
                'section' => 'spicepress_single_blog_section',
                'priority' => 6,
                    )
    ));

    $wp_customize->add_setting('spicepress_enable_single_post_admin',
            array(
                'default' => true,
                'sanitize_callback' => 'spicepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new spicepress_Toggle_Control($wp_customize, 'spicepress_enable_single_post_admin',
                    array(
                'label' => esc_html__('Hide/Show Author Name', 'spicepress'),
                'type' => 'toggle',
                'section' => 'spicepress_single_blog_section',
                'priority' => 5,
                    )
    ));

    $wp_customize->add_setting('spicepress_enable_single_post_tag',
            array(
                'default' => true,
                'sanitize_callback' => 'spicepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new spicepress_Toggle_Control($wp_customize, 'spicepress_enable_single_post_tag',
                    array(
                'label' => esc_html__('Hide/Show Tag', 'spicepress'),
                'type' => 'toggle',
                'section' => 'spicepress_single_blog_section',
                'priority' => 8,
                    )
    ));
    $wp_customize->add_setting('spicepress_enable_single_post_admin_details',
            array(
                'default' => true,
                'sanitize_callback' => 'spicepress_sanitize_checkbox',
            )
    );
    $wp_customize->add_control(new spicepress_Toggle_Control($wp_customize, 'spicepress_enable_single_post_admin_details',
                    array(
                'label' => esc_html__('Hide/Show Author Details', 'spicepress'),
                'type' => 'toggle',
                'section' => 'spicepress_single_blog_section',
                'priority' => 9,
                    )
    ));
}

add_action('customize_register', 'spicepress_single_blog_customizer');
