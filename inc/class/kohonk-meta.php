<?php
class KohonkMeta{
	function __construct()
	{
		add_filter('rwmb_meta_boxes', array($this, 'logotype_meta'));
	}
	function logotype_meta($meta_boxes)
	{
		$prefix = 'kohonk_logo_';
		$meta_boxes[] = array(
			'id' => $prefix . 'fields',
			'title' => 'Paragraph settings',
			'post_types' => 'logotype',
			'context' => 'side',
			'fields' => array(
				array(
					'name' => __('Keywords', 'kohonk-plague'),
					'id' => $prefix . 'keywords',
					'type' => 'text',
				),
				array(
					'name' => __('Writing Mode', 'kohonk-plague'),
					'id' => $prefix . 'writing_mode',
					'type' => 'radio',
					'inline' => false,
					'std' => 'horizontal-tb',
					'options' => array(
						'horizontal-tb' => __('Content flows horizontally from left to right, vertically from top to bottom', 'kohonk-plague'),
						'vertical-rl' => __('Content flows vertically from top to bottom, horizontally from right to left', 'kohonk-plague'),
						'vertical-lr' => __('Content flows vertically from top to bottom, horizontally from left to right', 'kohonk-plague'),
					),
				),
				array(
					'name' => __('Direction', 'kohonk-plague'),
					'id' => $prefix . 'direction',
					'type' => 'radio',
					'inline' => false,
					'std' => 'ltr',
					'options' => array(
						'ltr' => __('Left to right', 'kohonk-plague'),
						'rtl' => __('Right to left', 'kohonk-plague'),
					),
				),
				array(
					'name' => __('Alignment', 'kohonk-plague'),
					'id' => $prefix . 'align',
					'type' => 'radio',
					'inline' => false,
					'std' => 'left',
					'options' => array(
						'left' => __('Left', 'kohonk-plague'),
						'right' => __('Right', 'kohonk-plague'),
						'center' => __('Centering', 'kohonk-plague'),
						'justify' => __('Justification', 'kohonk-plague'),
					),
				),
			),
		);
		return $meta_boxes;
	}
}
?>
