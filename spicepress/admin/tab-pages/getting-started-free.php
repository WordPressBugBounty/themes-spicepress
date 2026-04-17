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
					<div>
						<p style="margin-top: 16px;">
						<?php esc_html_e( 'If you want to build your website using the Customizer, click on the Customizer button and start customizing your site.', 'spicepress' ); ?>
						</p>
						<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Go to the Customizer','spicepress');?></a>
						</p>
					</div>
					<p>or</p>
					<div >
						<p style="margin-top: 16px;">
							<?php _e( 'If you want to use Pre-built Websites click on the Install Demo buttton.', 'spicepress' ); ?>
						</p>		
						<p>
							<a target="_self" href="#starter_sites" class="spicepress-free-pro-demo-class button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Install Demo','spicepress');?></a>
						</p>
						
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