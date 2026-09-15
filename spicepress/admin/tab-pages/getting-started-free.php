<?php
/**
 * Getting started template - Redesigned
 */
?>
<div id="getting_started" class="spicepress-tab-pane active">
	<div class="sp-gs-wrap">

		<!-- Hero: two-column layout -->
		<div class="sp-gs-hero">
			<div class="sp-gs-hero-left">
				<h2 class="sp-gs-headline"><?php esc_html_e( 'Welcome to SpicePress', 'spicepress' ); ?></h2>
				<p class="sp-gs-desc"><?php esc_html_e( 'Build your site visually with the Customizer, or get started fast by installing a pre-built demo site.', 'spicepress' ); ?></p>
				<div class="sp-gs-btn-row">
					<a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="sp-btn sp-btn-primary">
						<?php esc_html_e( 'Open Customizer', 'spicepress' ); ?>
					</a>
					<span class="sp-btn-or"><?php esc_html_e( 'or', 'spicepress' ); ?></span>
					<a target="_self" href="#starter_sites" class="sp-btn sp-btn-secondary spicepress-free-pro-demo-class">
						<?php esc_html_e( 'Install Demo', 'spicepress' ); ?>
					</a>
				</div>
			</div>
			<div class="sp-gs-hero-right">
				<div class="sp-gs-screenshot-frame">
					<img src="<?php echo esc_url( ST_TEMPLATE_DIR_URI . '/admin/img/spicepress.png' ); ?>" alt="<?php esc_attr_e( 'SpicePress theme preview', 'spicepress' ); ?>" />
				</div>
			</div>
		</div>

		<!-- Divider -->
		<div class="sp-gs-divider"></div>

		<!-- Quick links grid -->
		<p class="sp-gs-section-label"><?php esc_html_e( 'Quick links', 'spicepress' ); ?></p>
		<div class="sp-gs-links-grid">

			<a href="<?php echo esc_url( 'https://spicepress-lite.spicethemes.com/' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-desktop"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Lite demo', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( 'Preview the free theme live', 'spicepress' ); ?></span>
				</div>
			</a>

			<a href="<?php echo esc_url( 'https://spicepress.spicethemes.com/' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-star-filled"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Pro demo', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( 'Explore all premium features', 'spicepress' ); ?></span>
				</div>
			</a>

			<a href="<?php echo esc_url( 'https://wordpress.org/support/theme/spicepress/' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-sos"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Support', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( 'WordPress.org support forum', 'spicepress' ); ?></span>
				</div>
			</a>

			<a href="<?php echo esc_url( 'https://wordpress.org/support/view/theme-reviews/spicepress' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-smiley"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Leave a review', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( 'Your feedback helps us grow', 'spicepress' ); ?></span>
				</div>
			</a>

			<a href="<?php echo esc_url( 'https://spicethemes.com/spicepress-free-vs-pro/' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-welcome-write-blog"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Free vs Pro', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( 'Compare all feature tiers', 'spicepress' ); ?></span>
				</div>
			</a>

			<a href="<?php echo esc_url( 'https://spicethemes.com/spicepress-changelog/' ); ?>" target="_blank" class="sp-link-card">
				<div class="sp-link-icon dashicons dashicons-portfolio"></div>
				<div class="sp-link-body">
					<span class="sp-link-title"><?php esc_html_e( 'Changelog', 'spicepress' ); ?></span>
					<span class="sp-link-desc"><?php esc_html_e( "What's new in this version", 'spicepress' ); ?></span>
				</div>
			</a>

		</div><!-- .sp-gs-links-grid -->

	</div><!-- .sp-gs-wrap -->
</div><!-- #getting_started -->