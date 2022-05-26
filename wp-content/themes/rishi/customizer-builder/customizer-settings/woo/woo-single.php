<?php

$defaults = rishi__cb__get_layout_defaults();

$breaddefaults = rishi__cb__get_breadcrumbs_defaults();

$options = [
	'woo_single_section_options' => [
		'type'     => 'rt-options',
		'setting'  => [ 'transport' => 'postMessage' ],
		'priority' => 3,
		'inner-options' => [
          rishi__cb_customizer_rand_md5() => [
                'type'  => 'rt-title',
                'label' => __( 'Page Structure', 'rishi' ),
            ],
          rishi__cb_customizer_rand_md5() => [
                'title' => __( 'General', 'rishi' ),
                'type' => 'tab',
                'options' => [
                    'breadcrumbs_ed_single_product' => [
						'label'   => __('Breadcrumb', 'rishi'),
						'type'    => 'rara-switch',
						'value'   => $breaddefaults['breadcrumbs_ed_single_product'],
					],
                    'has_product_single_rating' => [
                        'label' => __( 'Star Rating', 'rishi' ),
                        'type' => 'rara-switch',
                        'value' => 'yes',
                    ],

                    'has_product_single_meta' => [
                        'label' => __( 'Product Meta', 'rishi' ),
                        'type' => 'rara-switch',
                        'value' => 'yes',
                    ],
                    
                    'single_related_products'     => array(
						'label'  => __( 'Related Products Title', 'rishi' ),
						'type'   => 'text',
						'design' => 'block',
						'sync'   => array(
							'selector' => '.single-product.woocommerce .related.products h2',
							'render'   => function() {
								echo rishi_get_related_products_info(); },
						),
						'value'  => $defaults['single_related_products'],
					),

                    'woo_single_no_of_posts' => [
                        'label'   => __('Number of Products', 'rishi'),
                        'type'    => 'rt-number',
                        'design'  => 'inline',
                        'value'   => 3,
                        'min'     => 1,
                        'max'     => 4,
                        'divider' => 'top',
                        'responsive' => false,
                    ],
                    'woo_single_no_of_posts_row' => [
                        'label'   => __('Number of Products per Row', 'rishi'),
                        'type'    => 'rt-number',
                        'design'  => 'inline',
                        'value'   => 3,
                        'min'     => 1,
                        'max'     => 4,
                        'divider' => 'top',
                        'responsive' => false,
                    ],
                ],
            ],
          rishi__cb_customizer_rand_md5() => [
                'title' => __( 'Design', 'rishi' ),
                'type' => 'tab',
                'options' => [
                    'singleProductTitleColor' => [
                        'label' => __( 'Product Title Color', 'rishi' ),
                        'type'  => 'rt-color-picker',
                        'design' => 'inline',
                        'setting' => [ 'transport' => 'postMessage' ],

                        'value' => [
                            'default' => [
                                'color' => 'var(--paletteColor1)',
                            ],
                        ],

                        'pickers' => [
                            [
                                'title' => __( 'Initial', 'rishi' ),
                                'id' => 'default',
                            ],
                        ],
                    ],
                    'singleProductPriceColor' => [
                        'label' => __( 'Product Price Color', 'rishi' ),
                        'type'  => 'rt-color-picker',
                        'design' => 'inline',
                        'setting' => [ 'transport' => 'postMessage' ],

                        'value' => [
                            'default' => [
                                'color' => 'var(--paletteColor1)',
                            ],
                        ],

                        'pickers' => [
                            [
                                'title' => __( 'Initial', 'rishi' ),
                                'id' => 'default',
                                'inherit' => 'var(--color)'
                            ],
                        ],
                    ],
                ],
            ],
	    ],
    ],
];
