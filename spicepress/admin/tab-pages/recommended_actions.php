<?php 
	$spicepress_actions = $this->recommended_actions;
	$spicepress_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="spicepress-tab-pane panel-close">
	<div class="action-list">
		<?php if($spicepress_actions): foreach ($spicepress_actions as $key => $spicepress_actions_val): ?>
		<div class="col-md-6">
		<div class="action" id="<?php echo esc_attr($spicepress_actions_val['id']); ?>">
			<div class="action-watch">
			<?php if(!$spicepress_actions_val['is_done']): ?>
				<?php if(!isset($spicepress_actions_todo[$spicepress_actions_val['id']]) || !$spicepress_actions_todo[$spicepress_actions_val['id']]): ?>
					<span class="dashicons dashicons-visibility"></span>
				<?php else: ?>
					<span class="dashicons dashicons-hidden"></span>
				<?php endif; ?>
			<?php else: ?>
				<span class="dashicons dashicons-yes"></span>
			<?php endif; ?>
			</div>
			<div class="action-inner">
				<h3 class="action-title"><?php echo esc_html($spicepress_actions_val['title']); ?></h3>
				<div class="action-desc"><?php echo esc_html($spicepress_actions_val['desc']); ?></div>
				<?php echo wp_kses_post($spicepress_actions_val['link']); ?>
			</div>
		</div>
		</div>
		<?php endforeach; endif; ?>
	</div>
</div>