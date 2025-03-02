<?php
/* Notifications in customizer */
require ST_TEMPLATE_DIR . '/functions/customizer-notify/spicepress-customizer-notify.php';

function spicepress_customizer_notify_setup() {
	$config_customizer = array(
		'recommended_plugins'       => array(
			'spicebox' => array(
				'recommended' => true,
				'description' => sprintf( esc_html__( 'Install and activate %s plugin for taking full advantage of all the features this theme has to offer.', 'spicepress' ), sprintf( '<strong>%s</strong>', 'Spice Box' ) ),
			),
		),
		'recommended_actions'       => array(),
		'recommended_actions_title' => esc_html__( 'Recommended Actions', 'spicepress' ),
		'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'spicepress' ),
		'install_button_label'      => esc_html__( 'Install and Activate', 'spicepress' ),
		'activate_button_label'     => esc_html__( 'Activate', 'spicepress' ),
		'deactivate_button_label'   => esc_html__( 'Deactivate', 'spicepress' ),
	);
	Spicepress_Customizer_Notify::init( apply_filters( 'spicepress_customizer_notify_array', $config_customizer ) );
}
add_action( 'init', 'spicepress_customizer_notify_setup' );
?>