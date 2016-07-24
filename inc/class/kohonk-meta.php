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
			'fields' =>
				array(
					'name' => __('keywords', 'kohonk-plague'),
					'id' => $prefix . 'keywords',
					'type' => 'text',
				),
				array(
					'name' => __('alignment', 'kohonk-plague'),
					'id' => $prefix . 'align',
					'type' => 'checkbox_list',
					'options' =>
						array(
							'ltr' => __('Left to right', 'kohonk-plague'),
							'rtl' => __('Right to left', 'kohonk-plague'),
							'center' => __('Centering', 'kohonk-plague'),
							'justify' => __('Justification', 'kohonk-plague'),
						),
				),
		);
		return $meta_boxes;
	}
}
?>
