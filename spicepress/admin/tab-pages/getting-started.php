<?php
/**
 * Getting started template
 */
?>
<div id="getting_started" class="spicepress-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="spicepress-info-title text-center"><?php echo esc_html__('About the SpicePress theme','spicepress'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<p><?php esc_html_e( 'This theme is ideal for creating corporate and business websites. The PRO version has tons of features: a homepage with many sections where you can feature unlimited sliders, portfolios, user reviews, latest news, services, calls to action and much more. Each section in the HomePage template is carefully designed to fit to all business requirements.','spicepress');?></p>
					<p>
					<?php esc_html_e( 'You can use this theme for any type of activity. SpicePress is compatible with popular plugins like WPML and Polylang. To help you create an effective and impactful web presence, SpicePress has predefined versions of many pages: Contact, Services, Portfolios, About Us and Blog.', 'spicepress' ); ?>
					</p>
					<h1 style="margin-top: 73px; background: #0085ba;border-color: #0073aa #006799 #006799; color: #fff; padding: 15px 10px;"><?php esc_html_e( "Getting Started", 'spicepress' ); ?></h1>
					<div>
					<p style="margin-top: 16px;">
					<?php esc_html_e( 'To take full advantage of all the features this theme has to offer, install and activate the SpiceBox plugin. Go to Customize and install the SpiceBox plugin.', 'spicepress' ); ?>
					</p>
					<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Go to the Customizer','spicepress');?></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
				<img src="<?php echo esc_url(ST_TEMPLATE_DIR_URI . '/admin/img/spicepress.png'); ?>" alt="<?php esc_attr_e( 'SpicePress theme', 'spicepress' ); ?>" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="spicepress-tab-center">
				<h1><?php esc_html_e( "Useful Links", 'spicepress' ); ?></h1>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicepress-lite.spicethemes.com/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Lite Demo','spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicepress.spicethemes.com/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-desktop info-icon"></div>
					<p class="info-text"><?php echo esc_html__('PRO Demo','spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/spicepress/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-sos info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Theme Support','spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/spicepress'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-smiley info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Your feedback is valuable to us','spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicethemes.com/spicepress/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-book-alt info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Premium Theme Details', 'spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicethemes.com/spicepress-free-vs-pro/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-welcome-write-blog info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Free vs Pro', 'spicepress'); ?></p></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spicepress-tab-pane-half spicepress-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicethemes.com/spicepress-changelog/'); ?>" target="_blank"  class="info-block"><div class="dashicons dashicons-portfolio info-icon"></div>
					<p class="info-text"><?php echo esc_html__('Changelog', 'spicepress'); ?></p></a>
				</div>
			</div>
		</div>
	</div>
</div>