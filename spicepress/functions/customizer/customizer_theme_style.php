<?php
// Adding customizer home page setting
function spicepress_custom_color($wp_customize)
{

	/* Theme Style settings */
	$wp_customize->add_section( 'theme_style' , array(
		'title'      => esc_html__('Theme Style Settings', 'spicepress'),
		'priority'   => 115,
   	));

	//Layout Style
	class WP_spicepress_style_layout_Customize_Control extends WP_Customize_Control {
	public $type = 'new_menu';

	       function render_content()

		   {
		   echo '<h3>',esc_html__('Theme Layout','spicepress').'</h3>';
			  $name = '_customize-layout-radio-' . $this->id;
			  foreach($this->choices as $key => $value ) {
	            ?>
	               <label>
					<input type="radio" value="<?php echo $key; ?>" name="<?php echo esc_attr( $name ); ?>" data-customize-setting-link="<?php echo esc_attr( $this->id ); ?>" <?php if($this->value() == $key){ echo 'checked'; } ?>>
					<img <?php if($this->value() == $key){ echo 'class="color_scheem_active"'; } ?> src="<?php echo esc_url(get_template_directory_uri()); ?>/images/<?php echo esc_attr($value); ?>" alt="<?php echo esc_attr( $value ); ?>" />
					</label>

	            <?php
			  }
			  ?>
			  <script>
				jQuery(document).ready(function($) {
					$("#customize-control-spicepress_layout_style label img").click(function(){
						$("#customize-control-spicepress_layout_style label img").removeClass("color_scheem_active");
						$(this).addClass("color_scheem_active");
					});
				});
			  </script>
			  <?php
	       }


	}
	//Theme Layout
	$wp_customize->add_setting(
	'spicepress_layout_style', array(
	'default' => 'wide.jpg',
	'capability'     => 'edit_theme_options',
	'sanitize_callback' => 'spicepress_sanitize_radio',

    ));
	$wp_customize->add_control(new WP_spicepress_style_layout_Customize_Control($wp_customize,'spicepress_layout_style',
	array(
        'label'   => esc_html__('Layout style', 'spicepress'),
        'section' => 'theme_style',
		'type' => 'radio',
		'choices' => array(
            'wide' => 'wide.png',
            'boxed' => 'boxed.png',
    )

	)));

	// enable / disable custom color settings
	$wp_customize->add_setting('custom_color_enable', array(
		'capability'  => 'edit_theme_options',
		'default' => false,
		'sanitize_callback' => 'spicepress_sanitize_checkbox',
		));
	$wp_customize->add_control('custom_color_enable',array(
			'type' => 'checkbox',
			'label' => esc_html__('Enable custom color skin','spicepress'),
			'section' => 'theme_style',
		)
	);

	// link color settings
	$wp_customize->add_setting('link_color', array(
		'capability'     => 'edit_theme_options',
		'default' => '#ce1b28',
		'sanitize_callback' => 'sanitize_hex_color'
    ));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_color',
	array(
		'label'      => esc_html__( 'Skin Color', 'spicepress' ),
		'section'    => 'theme_style',
		'settings'   => 'link_color',
	) ) );
}

add_action( 'customize_register', 'spicepress_custom_color' );
