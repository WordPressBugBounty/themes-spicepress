<?php
/**
 * Recommended Actions Tab - Redesigned
 *
 * @package SpicePress
 */

$spicepress_actions      = $this->recommended_actions;
$spicepress_actions_todo = get_option( 'recommended_actions', false );

// Count totals for progress display
$total_done    = 0;
$total_actions = is_array( $spicepress_actions ) ? count( $spicepress_actions ) : 0;
if ( $spicepress_actions ) {
	foreach ( $spicepress_actions as $a ) {
		if ( $a['is_done'] ) {
			$total_done++;
		}
	}
}
$total_pending  = $total_actions - $total_done;
$progress_pct   = $total_actions > 0 ? round( ( $total_done / $total_actions ) * 100 ) : 0;
$ring_dash      = $total_actions > 0 ? round( ( $total_done / $total_actions ) * 113 ) : 0;

// Map plugin slugs to dashicons
$slug_icons = array(
	'install_spicebox'             => 'dashicons-screenoptions',
	'install_contact-form-7'       => 'dashicons-email-alt',
	'install_woocommerce'          => 'dashicons-cart',
	'install_spice-post-slider'    => 'dashicons-slides',
	'install_spice-social-share'   => 'dashicons-share',
	'install_seo-optimized-images' => 'dashicons-format-image',
	'install_spice-blocks'         => 'dashicons-block-default',
);
?>

<div id="recommended_actions" class="spicepress-tab-pane panel-close">
	<div class="sp-ra-wrap">

		<!-- ── Header + progress ring ── -->
		<div class="sp-ra-header">
			<div class="sp-ra-header-left">
				<h2 class="sp-ra-title"><?php esc_html_e( 'Recommended actions', 'spicepress' ); ?></h2>
				<p class="sp-ra-subtitle"><?php esc_html_e( 'Complete these steps to get the most out of SpicePress.', 'spicepress' ); ?></p>
			</div>
			<div class="sp-ra-header-right">
				<div class="sp-ra-ring-wrap" title="<?php echo esc_attr( $total_done . ' of ' . $total_actions . ' complete' ); ?>">
					<svg class="sp-ra-ring" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
						<circle class="sp-ra-ring-bg" cx="22" cy="22" r="18" fill="none" stroke-width="4"/>
						<circle class="sp-ra-ring-fill" cx="22" cy="22" r="18" fill="none" stroke-width="4"
							stroke-dasharray="<?php echo esc_attr( $ring_dash . ' 113' ); ?>"
							transform="rotate(-90 22 22)"/>
					</svg>
					<span class="sp-ra-ring-lbl"><?php echo esc_html( $total_done . '/' . $total_actions ); ?></span>
				</div>
				<div class="sp-ra-progress-text">
					<strong><?php echo esc_html( $total_done ); ?></strong> <?php esc_html_e( 'done', 'spicepress' ); ?><br>
					<span><?php echo esc_html( $total_pending ); ?> <?php esc_html_e( 'remaining', 'spicepress' ); ?></span>
				</div>
			</div>
		</div>

		<!-- ── Progress bar ── -->
		<div class="sp-ra-bar-wrap">
			<div class="sp-ra-bar-fill" style="width:<?php echo esc_attr( $progress_pct ); ?>%"></div>
		</div>

		<!-- ── Cards grid ── -->
		<div class="sp-ra-grid">
		<?php if ( $spicepress_actions ) : foreach ( $spicepress_actions as $key => $val ) :

			$is_done   = $val['is_done'];
			$is_hidden = ( ! $is_done ) && isset( $spicepress_actions_todo[ $val['id'] ] ) && $spicepress_actions_todo[ $val['id'] ];

			$card_class = 'sp-ra-card';
			if ( $is_done )        { $card_class .= ' sp-ra-card--done'; }
			elseif ( $is_hidden )  { $card_class .= ' sp-ra-card--hidden'; }

			$icon = isset( $slug_icons[ $val['id'] ] ) ? $slug_icons[ $val['id'] ] : 'dashicons-admin-plugins';
		?>
			<div class="<?php echo esc_attr( $card_class ); ?>" id="<?php echo esc_attr( $val['id'] ); ?>">

				<!-- Dismiss / done eye icon (top-right) -->
				<div class="action-watch sp-ra-dismiss">
					<?php if ( ! $is_done ) : ?>
						<?php if ( ! $is_hidden ) : ?>
							<span class="dashicons dashicons-visibility sp-ra-eye" title="<?php esc_attr_e( 'Dismiss', 'spicepress' ); ?>"></span>
						<?php else : ?>
							<span class="dashicons dashicons-hidden sp-ra-eye sp-ra-eye--off" title="<?php esc_attr_e( 'Show again', 'spicepress' ); ?>"></span>
						<?php endif; ?>
					<?php else : ?>
						<span class="dashicons dashicons-yes-alt sp-ra-done-check"></span>
					<?php endif; ?>
				</div>

				<!-- Plugin icon badge -->
				<div class="sp-ra-icon <?php echo $is_done ? 'sp-ra-icon--done' : ''; ?>">
					<span class="dashicons <?php echo esc_attr( $icon ); ?>"></span>
				</div>

				<!-- Title + description -->
				<h4 class="sp-ra-card-title"><?php echo esc_html( $val['title'] ); ?></h4>
				<p class="sp-ra-card-desc"><?php echo esc_html( $val['desc'] ); ?></p>

				<!-- CTA or Active badge -->
				<?php if ( ! $is_done ) : ?>
					<div class="sp-ra-card-action">
						<?php echo wp_kses_post( $val['link'] ); ?>
					</div>
				<?php else : ?>
					<span class="sp-ra-active-badge">
						<span class="dashicons dashicons-yes"></span>
						<?php esc_html_e( 'Active', 'spicepress' ); ?>
					</span>
				<?php endif; ?>

			</div>
		<?php endforeach; endif; ?>
		</div><!-- .sp-ra-grid -->

	</div><!-- .sp-ra-wrap -->
</div><!-- #recommended_actions -->