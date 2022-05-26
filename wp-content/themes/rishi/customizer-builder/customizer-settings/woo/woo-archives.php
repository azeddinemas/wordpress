<?php
$wooprefix = 'woo_';

$defaults = rishi__cb__get_layout_defaults();

$breaddefaults = rishi__cb__get_breadcrumbs_defaults();

$options = [
	'woo_product_archives_section_options' => [
		'type'     => 'rt-options',
		'setting'  => [ 'transport' => 'postMessage' ],
		'priority' => 3,
        'inner-options'      => [
            $wooprefix . 'title_panel' => [
                'label'         => __( 'Shop Title', 'rishi'),
                'type'          => 'rt-panel',
                'switch'        => true,
                'value'         => 'yes',
                'inner-options' => [

                  rishi__cb_customizer_rand_md5() => [
						'title'   => __('General', 'rishi'),
						'type'    => 'tab',
						'options' => [
                            'breadcrumbs_ed_archive_product' => [
                                'label'   => __('Breadcrumb', 'rishi'),
                                'type'    => 'rara-switch',
                                'value'   => $breaddefaults['breadcrumbs_ed_archive_product'],
                            ],
                            $wooprefix . 'alignment' => [
                                'type'       => 'rt-radio',
                                'label'      => __('Horizontal Alignment', 'rishi'),
                                'value'      => 'left',
                                'view'       => 'text',
                                'attr'       => ['data-type' => 'alignment'],
                                'responsive' => true,
                                'design'     => 'block',
                                'sync'       => 'live',
                                'divider'    => 'top',
                                'choices' => [
                                    'left' => '',
                                    'center' => '',
                                    'right' => '',
                                ],
                            ],
                            $wooprefix . 'margin' => [
                                'label' => __('Vertical Spacing', 'rishi'),
                                'type' => 'rt-slider',
                                'value' => [
                                    'desktop' => 85,
                                    'tablet' => 60,
                                    'mobile' => 30,
                                ],
                                'min' => 0,
                                'max' => 300,
                                'responsive' => true,
                                'divider' => 'top',
                                'setting' => ['transport' => 'postMessage'],
                            ],


						],
					],
				 rishi__cb_customizer_rand_md5() => [
						'title'   => __('Design', 'rishi'),
						'type'    => 'tab',
						'options' => [
							'shop_page_content_background' => [
								'label' => __( 'Content Area Background', 'rishi' ),
								'type' => 'rt-background',
								'design' => 'block:right',
								'responsive' => true,
								'sync' => 'live',
								'value' => rishi__cb_customizer_background_default_value([
									'backgroundColor' => [
										'default' => [
											'color' => 'var(--paletteColor7)',
										],
									],
								])
							],
							'shop_font_color' => [
								'label'           => __('Font Color', 'rishi'),
								'type'            => 'rt-color-picker',
								'skipEditPalette' => true,
								'design'          => 'inline',
								'setting'         => ['transport' => 'postMessage'],
								'value'           => [
									'default' => [
										'color' => 'var(--paletteColor1)',
									],
								],
								'pickers' => [
									[
										'title' => __('Initial', 'rishi'),
										'id'    => 'default',
									],
								],
							],
						],
					],
                ]
            ],
          rishi__cb_customizer_rand_md5() => [
                'type'  => 'rt-title',
                'label' => __('Shop Structure', 'rishi'),
            ],
            'woocommerce_columns' => [
                'label' => __('Columns & Rows', 'rishi'),
                'type'  => 'rt-woocommerce-columns-and-rows',
                'value' => 4,
                'min'   => 1,
                'max'   => 5,
                'responsive' => false,
            ],
            'woocommerce_catalog_columns' => [
                'type' => 'hidden',
                'value' => 4,
                'setting' => [
                    'type' => 'option',
                ],
            ],

            'woocommerce_catalog_rows' => [
                'type' => 'hidden',
                'value' => 4,
                'setting' => [
                    'type' => 'option',
                ],
            ],

            'product_card_options_panel' => [
                'label' => __( 'Cards Options', 'rishi' ),
                'type' => 'rt-panel',
                'wrapperAttr' => [ 'data-panel' => 'only-arrow' ],
                'inner-options' => [

                  rishi__cb_customizer_rand_md5() => [
                        'title' => __( 'General', 'rishi' ),
                        'type' => 'tab',
                        'options' => [
                            [
                                'rishi__cb_customizer_woocommerce_thumbnail_cropping' => [
                                    'label' => __('Image', 'rishi'),
                                    'type' => 'rt-woocommerce-ratio',
                                    /**
                                     * Can be
                                     * 1:1
                                     * custom
                                     * predefined
                                     */
                                    'value' => 'predefined',
                                    'design' => 'inline',
                                    'preview_width_key' => 'woocommerce_thumbnail_image_width',
                                    'inner-options' => [
                                        'woocommerce_thumbnail_image_width' => [
                                            'type' => 'text',
                                            'label' => __('Image Width', 'rishi'),
                                            'desc' => __('Image height will be automatically calculated based on the image ratio.', 'rishi'),
                                            'value' => 500,
                                            'design' => 'inline',
                                            'setting' => [
                                                'type' => 'option',
                                                'capability' => 'manage_woocommerce',
                                            ]
                                        ],
                                    ],
                                ],

                                'woocommerce_thumbnail_cropping_custom_width' => [
                                    'label' => false,
                                    'type' => 'hidden',
                                    'value' => 4,
                                    'setting' => [
                                        'type' => 'option',
                                        'capability' => 'manage_woocommerce',
                                    ],
                                    'disableRevertButton' => true,
                                    'desc' => __('Width', 'rishi'),
                                ],

                                'woocommerce_thumbnail_cropping_custom_height' => [
                                    'label' => false,
                                    'type' => 'hidden',
                                    'value' => 3,
                                    'setting' => [
                                        'type' => 'option',
                                        'capability' => 'manage_woocommerce',
    
                                    ],
                                    'disableRevertButton' => true,
                                    'desc' => __('Height', 'rishi'),
                                ],

                                'has_star_rating' => [
                                    'label' => __( 'Star Rating', 'rishi' ),
                                    'type' => 'rara-switch',
                                    'value' => 'yes',
                                ],

                                'has_sale_badge' => [
                                    'label' => __( 'Sale Badge', 'rishi' ),
                                    'type' => 'rara-switch',
                                    'value' => 'yes',
                                ],

                                'shop_cards_sales_badge_design' => [
                                    'label'   => __('Sale Badge Design', 'rishi'),
                                    'type'    => 'rt-select',
                                    'value'   => 'circle',
                                    'view'    => 'text',
                                    'design'  => 'inline',
                                    'setting' => ['transport' => 'postMessage'],
                                    'divider' => 'top',
                                    'choices' => rishi__cb_customizer_ordered_keys([
                                        'circle' => __('Circle', 'rishi'),
                                        'square' => __('Square', 'rishi'),
                                    ]),
                                ],

                                'shop_cards_type' => [
                                    'label'   => __('Card Design', 'rishi'),
                                    'type'    => 'rt-select',
                                    'value'   => 'normal',
                                    'view'    => 'text',
                                    'design'  => 'inline',
                                    'setting' => ['transport' => 'postMessage'],
                                    'divider' => 'top',
                                    'choices' => rishi__cb_customizer_ordered_keys([
                                        'normal'     => __('Normal', 'rishi'),
                                        'background' => __('Background', 'rishi'),
                                    ]),
                                ],
                                'shop_cards_alignment' => [
                                    'type' => 'rt-radio',
                                    'label' => __( 'Content Alignment', 'rishi' ),
                                    'value' => 'center',
                                    'view' => 'center',
                                    'attr' => [ 'data-type' => 'alignment' ],
                                    'disableRevertButton' => true,
                                    'design' => 'block',
                                    'divider' => 'top',
                                    'setting' => [ 'transport' => 'postMessage' ],
                                    'choices' => [
                                        'left' => '',
                                        'center' => '',
                                        'right' => '',
                                    ],
                                ],
                            ],
                        ],
                    ],

                  rishi__cb_customizer_rand_md5() => [
                        'title' => __( 'Design', 'rishi' ),
                        'type' => 'tab',
                        'options' => [

                            'cardProductTitleColor' => [
                                'label' => __( 'Title Color', 'rishi' ),
                                'type'  => 'rt-color-picker',
                                'design' => 'inline',
                                'setting' => [ 'transport' => 'postMessage' ],

                                'value' => [
                                    'default' => [
                                        'color' => 'var(--paletteColor2)',
                                    ],

                                    'hover' => [
                                        'color' => 'var(--paletteColor3)',
                                    ],
                                ],

                                'pickers' => [
                                    [
                                        'title' => __( 'Initial', 'rishi' ),
                                        'id' => 'default',
                                        'inherit' => 'var(--heading-2-color, var(--headings-color))'
                                    ],

                                    [
                                        'title' => __( 'Hover', 'rishi' ),
                                        'id' => 'hover',
                                        'inherit' => 'var(--linkHoverColor)'
                                    ],
                                ],
                            ],

                            'salesBagdgeColor' => [
                                'label' => __( 'Sales Badge Color', 'rishi' ),
                                'type'  => 'rt-color-picker',
                                'design' => 'inline',
                                'setting' => [ 'transport' => 'postMessage' ],
                                'value' => [
                                    'default' => [
                                        'color' => 'var(--paletteColor5)',
                                    ],

                                    'background' => [
                                        'color' => 'var(--paletteColor3)',
                                    ],
                                ],

                                'pickers' => [
                                    [
                                        'title' => __( 'Text Color', 'rishi' ),
                                        'id' => 'default',
                                    ],

                                    [
                                        'title' => __( 'Background', 'rishi' ),
                                        'id' => 'background',
                                    ],
                                ],
                            ],

                            'cardProductPriceColor' => [
                                'label' => __( 'Price Color', 'rishi' ),
                                'type'  => 'rt-color-picker',
                                'design' => 'inline',
                                'divider' => 'top',
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

                            'cardProductButtonText' => [
                                'label' => __( 'Button Text Color', 'rishi' ),
                                'type'  => 'rt-color-picker',
                                'design' => 'inline',
                                'divider' => 'top',
                                'setting' => [ 'transport' => 'postMessage' ],

                                'value' => [
                                    'default' => [
                                        'color' => 'var(--paletteColor5)',
                                    ],

                                    'hover' => [
                                        'color' => 'var(--paletteColor5)',
                                    ],
                                ],

                                'pickers' => [
                                    [
                                        'title' => __( 'Initial', 'rishi' ),
                                        'id' => 'default',
                                        'inherit' => 'var(--buttonTextInitialColor)'
                                    ],

                                    [
                                        'title' => __( 'Hover', 'rishi' ),
                                        'id' => 'hover',
                                        'inherit' => 'var(--buttonTextHoverColor)'
                                    ],
                                ],
                            ],

                            'cardProductButtonBackground' => [
                                'label' => __( 'Button Background Color', 'rishi' ),
                                'type'  => 'rt-color-picker',
                                'design' => 'inline',
                                'setting' => [ 'transport' => 'postMessage' ],

                                'value' => [
                                    'default' => [
                                        'color' => 'var(--paletteColor3)',
                                    ],

                                    'hover' => [
                                        'color' => 'var(--paletteColor3)',
                                    ],
                                ],

                                'pickers' => [
                                    [
                                        'title' => __( 'Initial', 'rishi' ),
                                        'id' => 'default',
                                        'inherit' => 'var(--buttonInitialColor)'
                                    ],

                                    [
                                        'title' => __( 'Hover', 'rishi' ),
                                        'id' => 'hover',
                                        'inherit' => 'var(--buttonHoverColor)'
                                    ],
                                ],
                            ],
                          rishi__cb_customizer_rand_md5() => [
                                'type'      => 'rt-condition',
                                'condition' => ['shop_cards_type' => 'background'],
                                'options'   => [
                                    'cardCaptionBgColor' => [
                                        'label' => __( 'Card Caption Background Color', 'rishi' ),
                                        'type'  => 'rt-color-picker',
                                        'design' => 'inline',
                                        'divider' => 'top',
                                        'setting' => [ 'transport' => 'postMessage' ],

                                        'value' => [
                                            'default' => [
                                                'color' => 'var(--paletteColor5)',
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
                                    'cardCaptionBoxShadow' => [
                                        'label' => __('Card Caption Box Shadow', 'rishi'),
                                        'type' => 'rt-box-shadow',
                                        'sync' => 'live',
                                        'responsive' => true,
                                        'divider' => 'top',
                                        'value' => rishi__cb_customizer_box_shadow_value([
                                            'enable' => true,
                                            'h_offset' => 0,
                                            'v_offset' => 12,
                                            'blur' => 18,
                                            'spread' => -6,
                                            'inset' => false,
                                            'color' => [
                                                'color' => 'rgba(34, 56, 101, 0.04)',
                                            ],
                                        ])
                                    ],

                                ],
                            ],
                            'cardProductRadius' => [
                                'label' => __( 'Border Radius', 'rishi' ),
                                'type' => 'rt-spacing',
                                'divider' => 'top',
                                'setting' => [ 'transport' => 'postMessage' ],
                                'value' => rishi__cb_customizer_spacing_value([
                                    'linked' => true,
                                    'top' => '3px',
                                    'left' => '3px',
                                    'right' => '3px',
                                    'bottom' => '3px',
                                ]),
                                'responsive' => true
                            ],
                        ],
                    ],

                ],
            ],
          rishi__cb_customizer_rand_md5() => [
                'type'  => 'rt-title',
                'label' => __( 'Page Elements', 'rishi' ),
            ],

            'has_shop_sort' => [
                'label' => __( 'Shop Sort', 'rishi' ),
                'type' => 'rara-switch',
                'value' => 'yes',
            ],

            'has_shop_results_count' => [
                'label' => __( 'Shop Results Count', 'rishi' ),
                'type' => 'rara-switch',
                'value' => 'yes',
            ],

            'woo_post_navigation' => [
				'label'   => __('Navigation', 'rishi'),
				'type'    => 'rt-select',
				'value'   => 'numbered',
				'view'    => 'text',
				'design'  => 'inline',
				'divider' => 'top',
				'choices' => rishi__cb_customizer_ordered_keys([
					'numbered'        => __('Numbered', 'rishi'),
					'infinite_scroll' => __('Infinite Scroll', 'rishi'),
				]),
			],
        ],
    ],
];
