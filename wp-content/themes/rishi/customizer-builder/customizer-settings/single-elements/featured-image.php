<?php

if (! isset($prefix)) {
	$prefix = '';
} else {
	$prefix = $prefix . '_';
}

$options = [

	$prefix . 'featured_image_ratio' => [
		'label' => __( 'Image Ratio', 'rishi' ),
		'type' => 'rt-ratio',
		'value' => 'original',
		'design' => 'inline',
		'sync' => 'live',
	],

	$prefix . 'featured_image_size' => [
		'label' => __('Image Size', 'rishi'),
		'type' => 'rt-select',
		'value' => 'full',
		'view' => 'text',
		'design' => 'inline',
		'choices' => rishi__cb_customizer_ordered_keys( rishi__cb_customizer_get_all_image_sizes())
	],

	$prefix . 'featured_image_visibility' => [
		'label' => __( 'Image Visibility', 'rishi' ),
		'type' => 'rt-visibility',
		'design' => 'block',

		'value' => [
			'desktop' => true,
			'tablet' => true,
			'mobile' => true,
		],

		'choices' => rishi__cb_customizer_ordered_keys([
			'desktop' => __( 'Desktop', 'rishi' ),
			'tablet' => __( 'Tablet', 'rishi' ),
			'mobile' => __( 'Mobile', 'rishi' ),
		]),

		'sync' => 'live'
	],
];
