<?php
// Global variables define
define('ST_TEMPLATE_DIR_URI',get_template_directory_uri());	
define('ST_TEMPLATE_DIR',get_template_directory());
define('ST_THEME_FUNCTIONS_PATH',ST_TEMPLATE_DIR.'/functions');

/**
* helder function
*/
require( ST_THEME_FUNCTIONS_PATH . '/custom-style/custom-css.php');
// Theme functions file including
require( ST_THEME_FUNCTIONS_PATH . '/scripts/script.php');
require( ST_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php');
require( ST_THEME_FUNCTIONS_PATH . '/menu/st_nav_walker.php');
require( ST_THEME_FUNCTIONS_PATH .'/font/font.php');
require( ST_THEME_FUNCTIONS_PATH . '/breadcrumbs/breadcrumbs.php');
require( ST_THEME_FUNCTIONS_PATH . '/template-tags.php');
require( ST_THEME_FUNCTIONS_PATH . '/widgets/sidebars.php');

// Adding customizer files
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_sections_settings.php' );
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_general_settings.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_recommended_plugin.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_import_data.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_bredcrumbs_settings.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro.php');
require ( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_theme_style.php' );
require ( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_color_back_settings.php' );
require ( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_typography.php' );
require ( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_blog_option_settings.php' );

//Alpha Color Control
require( ST_THEME_FUNCTIONS_PATH .'/customizer/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control.php');
require( ST_TEMPLATE_DIR .'/inc/customizer/customizer-slider/customizer-slider.php');

//About Theme
add_action( 'init', function() {
    $theme = wp_get_theme(); // Gets the current theme
    if ( 'SpicePress' == $theme->name ) {
        if ( is_admin() ) {
            require ST_TEMPLATE_DIR . '/admin/admin-init.php';
        }
    }
});

// set default content width
if ( ! isset( $content_width ) ) {
	$content_width = 696;
}
// Theme title
if( !function_exists( 'spicepress_head_title' ) ) 
{
	function spicepress_head_title( $title , $sep ) {
		global $paged, $page;
		
		if ( is_feed() )
				return $title;
			
		// Add the site name
		$title .= esc_html(get_bloginfo( 'name' ));
		
		// Add the site description for the home / front page
		$site_description = esc_html(get_bloginfo( 'description' ));
		if ( $site_description && ( is_home() || is_front_page() ) )
				$title = "$title $sep $site_description";
			
		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
				$title = "$title $sep " . sprintf( esc_html__('Page', 'spicepress' ), max( $paged, $page ) );
			
		return $title;
	}
}
add_filter( 'wp_title', 'spicepress_head_title', 10, 2);


if ( ! function_exists( 'spicepress_theme_setup' ) ) :

function spicepress_theme_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	
	load_theme_textdomain( 'spicepress', ST_TEMPLATE_DIR . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	
	add_theme_support( 'automatic-feed-links' );
	
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );

	
	
	/*
	 * Let WordPress manage the document title.
	 */
	 
	add_theme_support( 'title-tag' );
	

	// supports featured image
	
	add_theme_support( 'post-thumbnails' );

	
	
	// This theme uses wp_nav_menu() in two locations.
	
	register_nav_menus( array(
	
		'primary' => __( 'Primary Menu', 'spicepress' ),
		
	) );
	
	
	// woocommerce support
	
	add_theme_support( 'woocommerce' );
	
	// Woocommerce Gallery Support
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
	//Custom logo
	
	add_theme_support( 'custom-logo', array(
		'height'      => 49,
		'width'       => 210,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description' ),
		
	) );

	add_editor_style();
	
	//Custom background
	add_theme_support( 'custom-background');
					
	}
endif; 
add_action( 'after_setup_theme', 'spicepress_theme_setup' );


function spicepress_logo_class($html)
{
	$spicepress_header_logo_placing = get_theme_mod('header_logo_placing', 'left');
	
	if($spicepress_header_logo_placing == 'left'){$spicepress_logo_class = '';}
	if($spicepress_header_logo_placing == 'right'){$spicepress_logo_class = 'align-right';}
	if($spicepress_header_logo_placing == 'center'){$spicepress_logo_class = 'align-center';}
	
	$html = str_replace('custom-logo-link', 'navbar-brand '.$spicepress_logo_class.'', $html);
	return $html;
}
add_filter('get_custom_logo','spicepress_logo_class');

add_action( 'admin_init', 'spicepress_detect_button' );
	function spicepress_detect_button() {
	wp_enqueue_style( 'spicepress-info-button', ST_TEMPLATE_DIR_URI . '/css/import-button.css' );
}

function spicepress_customizer_live_preview() {
	wp_enqueue_script(
		'spicepress-customizer-preview', ST_TEMPLATE_DIR_URI . '/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}

add_action( 'customize_preview_init', 'spicepress_customizer_live_preview' );


require_once ST_TEMPLATE_DIR . '/class-tgm-plugin-activation.php';

if ( ! function_exists( 'wp_body_open' ) ) {

	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}
add_action( 'admin_enqueue_scripts','spicpress_theme_style');
function spicpress_theme_style(){?> 
	<style type="text/css">
		#customize-control-theme_color input[type=radio], #customize-control-spicepress_layout_style input[type=radio], #customize-control-theme_style_type input[type=radio], #customize-control-predefined_back_image input[type=radio] {
		    display: none !important;
		}
		#customize-control-header_logo_placing #input_header_logo_placing{
			float: left;
		}
	</style>
<?php } 

//Set for old user before 1.3.7
if (!get_option('spicepress_user_with_1_9_1', false)) {
    //detect old user and set value
    $spicepress_service_title=get_theme_mod('home_service_section_title');
    $spicepress_service_discription=get_theme_mod('home_service_section_discription');
    $spicepress_blog_title=get_theme_mod('home_news_section_title');
    $spicepress_blog_discription=get_theme_mod('home_news_section_discription');
    $spicepress_slider_title=get_theme_mod('home_slider_title');
    $spicepress_slider_discription=get_theme_mod('home_slider_discription'); 
    $spicepress_testimonial_title=get_theme_mod('home_testimonial_section_title'); 
    $spicepress_testimonial__discription=get_theme_mod('home_testimonial_section_discription');
    $spicepress_footer_credit=get_theme_mod('footer_copyright_text');

    if ($spicepress_service_title !=null || $spicepress_service_discription !=null || $spicepress_blog_title !=null || $spicepress_blog_discription !=null || $spicepress_slider_title !=null || $spicepress_slider_discription !=null || $spicepress_testimonial_title !=null || $spicepress_testimonial__discription !=null || $spicepress_footer_credit !=null )  {
        add_option('spicepress_user_with_1_9_1', 'old');

    } else {
        add_option('spicepress_user_with_1_9_1', 'new');
    }
}
//Remove Footer section
function spicepress_remove_customize_register( $wp_customize ) {
   $wp_customize->remove_section( 'spicepress_footer_copyright');
}
add_action( 'customize_register', 'spicepress_remove_customize_register',11);
function spicepress_sanitize_select( $input, $setting ) {
		//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
		$input = sanitize_key($input);
		//get the list of possible radio box options
		$choices = $setting->manager->get_control( $setting->id )->choices;
		//return input if valid or return default option
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function spicepress_customizer_inline_styles() { ?>
	<style>
	    #customize-controls #customize-theme-controls .accordion-section-title button.accordion-trigger {
	      height: auto ;
	    }
	</style>
<?PHP
}
add_action('customize_controls_print_styles', 'spicepress_customizer_inline_styles');

// Hook the AJAX action for logged-in users
add_action('wp_ajax_spicepress_check_plugin_status', 'spicepress_check_plugin_status');

function spicepress_check_plugin_status() {
    if (!current_user_can('install_plugins')) {
        wp_send_json_error('You do not have permission to manage plugins.');
        return;
    }

    if (!isset($_POST['plugin_slug'])) {
        wp_send_json_error('No plugin slug provided.');
        return;
    }

    $plugin_slug = sanitize_text_field($_POST['plugin_slug']);
    $plugin_main_file = $plugin_slug . '/' . $plugin_slug . '.php'; // Adjust this based on your plugin structure

    // Check if the plugin exists
    $plugins = get_plugins();
    if (isset($plugins[$plugin_main_file])) {
        if (is_plugin_active($plugin_main_file)) {
            wp_send_json_success(array('status' => 'activated'));
        } else {
            wp_send_json_success(array('status' => 'installed'));
        }
    } else {
        wp_send_json_success(array('status' => 'not_installed'));
    }
}

// Existing AJAX installation function for installing and activating
add_action('wp_ajax_spicepress_install_activate_plugin', 'spicepress_install_and_activate_plugin');

function spicepress_install_and_activate_plugin() {
    if (!current_user_can('install_plugins')) {
        wp_send_json_error('You do not have permission to install plugins.');
        return;
    }

    if (!isset($_POST['plugin_url'])) {
        wp_send_json_error('No plugin URL provided.');
        return;
    }

    // Include necessary WordPress files for plugin installation
    include_once(ABSPATH . 'wp-admin/includes/file.php');
    include_once(ABSPATH . 'wp-admin/includes/misc.php');
    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');

    $plugin_url = esc_url($_POST['plugin_url']);
    $plugin_slug = sanitize_text_field($_POST['plugin_slug']);
    $plugin_main_file = $plugin_slug . '/' . $plugin_slug . '.php'; // Ensure this matches your plugin structure

    // Download the plugin file
    WP_Filesystem();
    $temp_file = download_url($plugin_url);

    if (is_wp_error($temp_file)) {
        wp_send_json_error($temp_file->get_error_message());
        return;
    }

    // Unzip the plugin to the plugins folder
    $plugin_folder = WP_PLUGIN_DIR;
    $result = unzip_file($temp_file, $plugin_folder);
    
    // Clean up temporary file
    unlink($temp_file);

    if (is_wp_error($result)) {
        wp_send_json_error($result->get_error_message());
        return;
    }

    // Activate the plugin if it was installed
    $activate_result = activate_plugin($plugin_main_file);

    

    // Return success with redirect URL
    wp_send_json_success(array('redirect_url' => admin_url('admin.php?page=spicepress-welcome')));
}

// Enqueue JavaScript for the button functionality
add_action('admin_enqueue_scripts', 'spicepress_enqueue_plugin_installer_script');

function spicepress_enqueue_plugin_installer_script() {
    global $hook_suffix;
    wp_enqueue_script('spicepress-plugin-installer-js',  ST_TEMPLATE_DIR_URI . '/admin/assets/js/plugin-installer.js', array('jquery'), null, true);
    wp_localize_script('spicepress-plugin-installer-js', 'pluginInstallerAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'hook_suffix' => $hook_suffix,
        'nonce' => wp_create_nonce('plugin_installer_nonce'),

    ));
}


/**
 * Admin Enqueue scripts and styles.
 */
function spicpress_notice_style() { 
    wp_enqueue_style('spicpress-admin', ST_TEMPLATE_DIR_URI . '/css/admin.css');
}
add_action('admin_enqueue_scripts','spicpress_notice_style');

function spicepress_admin_plugin_notice_warn() {
    $theme_name=wp_get_theme();
    if ( get_option( 'dismissed-spicepress_comanion_plugin', false ) ) {
       return;
    }

    $dismissed = get_user_meta(get_current_user_id(), 'spicpress_welcome_admin_notice_dismissed', true);

    if ($dismissed) {
        return;
    } ?>

    <div class="updated notice is-dismissible spicepress-theme-notice">
        <div class="dashboard-hero-panel">
            <div class="hero-panel-content">
                <div class="hero-panel-subtitle">
                    <?php esc_html_e('Hello', 'spicepress'); 
                    echo ', '; 
                    $current_user = wp_get_current_user();
                    echo esc_html($current_user->display_name);
                    ?>
                </div>
                <div class="hero-panel-title">
                    <?php 
                    /* translators: %s: theme name */
                    printf(esc_html__('Welcome to', 'spicepress') . ' %s', $theme_name ); ?>
                </div>
                <div class="hero-panel-description">
                    <?php 
                    /* translators: %s: theme name */
                    printf(esc_html__("%s is now installed and ready to use. We've provide some links to get you started.", 'spicepress'), $theme_name ); ?>
                </div>
                <div class="theme-admin-button-wrap theme-admin-button-group">
                    <a href="<?php echo esc_url(admin_url('admin.php?page=spicepress-welcome')); ?>" class="button theme-admin-button admin-button-secondary" target="_self" title="<?php esc_attr_e('Theme Dashboard', 'spicepress'); ?>">
                            <span class="dashicons dashicons-dashboard"></span>
                            <span><?php esc_html_e('Theme Dashboard', 'spicepress'); ?></span>
                    </a>
                    <a href="<?php echo esc_url('https://spicethemes.com/spicepress-wordpress-theme/#spicepress_demo_lite'); ?>" class="button theme-admin-button admin-button-secondary" target="_blank" title="<?php esc_attr_e('Live Demo', 'spicepress'); ?>">
                        <span class="dashicons dashicons-welcome-view-site"></span>
                        <span><?php esc_html_e('View Live Demos', 'spicepress'); ?></span>
                    </a>
                    <a href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/spicepress/'); ?>" class="button theme-admin-button admin-button-secondary" target="_blank" title="<?php esc_attr_e('Help Docs', 'spicepress'); ?>">
                        <span class="dashicons dashicons-media-document"></span>
                        <span><?php esc_html_e('Theme Documentation', 'spicepress'); ?></span>
                    </a>            
                    <?php
                    if(!function_exists('spiceb_activate')):
	                	$spicepress_box_about_page = SpicePress_About_Page();            
		                $spicepress_actions = $spicepress_box_about_page->recommended_actions;
		                $spicepress_actions_todo = get_option( 'recommended_actions', false );
		                if($spicepress_actions): 
		                    foreach ($spicepress_actions as $key => $spicepress_val):
		                        if($spicepress_val['id']=='install_spicebox'):
		                            /* translators: %s: theme name */
		                            echo '<p>'.wp_kses_post($spicepress_val['link']).'</p>';
		                        endif;
		                    endforeach;
	                	endif;
	                endif;
                ?>
                </div>
            </div>
            <div class="hero-panel-image">
                <img src="<?php echo esc_url(get_theme_file_uri().'/admin/img/welcome-banner-spicepress-lite.png');?>" alt="<?php esc_attr_e('Welcome Banner','spicepress'); ?>">
            </div>
        </div>
        <p><a href="#" class="dismiss-welcome-notice"><?php _e('Dismiss this notice', 'spicepress'); ?></a></p>
    </div>
    
    <script type="text/javascript">
        jQuery(function($) {
        $( document ).on( 'click', '.spicepress-theme-notice .notice-dismiss', function () {
            var type = $( this ).closest( '.spicepress-theme-notice' ).data( 'notice' );
            $.ajax( ajaxurl,
              {
                type: 'POST',
                data: {
                  action: 'dismissed_notice_handler',
                  type: type,
                }
              } );
          } );
      });
    </script>

    <script>
        jQuery(document).ready(function($) {
            $('.dismiss-welcome-notice').on('click', function(e) {
                e.preventDefault();
                $('.spicepress-theme-notice').fadeOut();
                $.post(ajaxurl, {
                    action: 'dismiss_spicepress_welcome_admin_notice',
                    security: '<?php echo wp_create_nonce("dismiss_spicpress_welcome_admin_notice_nonce"); ?>'
                });
            });
        });
    </script>
<?php  }

function spicepress_dismiss_welcome_admin_notice() {
    check_ajax_referer('dismiss_spicepress_welcome_admin_notice_nonce', 'security');
    update_user_meta(get_current_user_id(), 'spicepress_welcome_admin_notice_dismissed', true);
    wp_die();
}
add_action('wp_ajax_dismiss_spicepress_welcome_admin_notice', 'spicepress_dismiss_welcome_admin_notice');

global $pagenow;
if ( "themes.php" == $pagenow && is_admin() ) {
    add_action('admin_notices', 'spicepress_admin_plugin_notice_warn' );
    add_action('wp_ajax_dismissed_notice_handler', 'spicepress_ajax_notice_handler');
}
    