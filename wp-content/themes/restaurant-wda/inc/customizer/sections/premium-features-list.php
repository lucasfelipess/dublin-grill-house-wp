<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( 'Preloader', 'restaurant-wda' ),
                    esc_html__( 'Button Animation', 'restaurant-wda' ),
                    esc_html__( '+6 Beautiful Patterns', 'restaurant-wda' ),
					esc_html__( 'Customizable Search Overlay', 'restaurant-wda' ),
					esc_html__( 'Back To Top Button', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'restaurant-wda' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'restaurant-wda' ),
                    esc_html__( 'Logo Animations', 'restaurant-wda' ),
					esc_html__( 'Search Button Animations', 'restaurant-wda' ),
                    esc_html__( 'Woo Cart Animations', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
					esc_html__( '+6 Beautiful Patterns', 'restaurant-wda' ),
                    esc_html__( 'Post/Page Title Animations', 'restaurant-wda' ),
					esc_html__( 'Post/Page Banner Animations', 'restaurant-wda' ),
                    esc_html__( '4 Animated Banner Elements', 'restaurant-wda' ),
					esc_html__( 'Animated Elements Colors', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'restaurant-wda' ),
					esc_html__( 'Archive/Search Page Title Animations', 'restaurant-wda' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'restaurant-wda' ),
					esc_html__( '4 Animated Elements', 'restaurant-wda' ),
                    esc_html__( 'Animated Elements Colors', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
                    esc_html__( '+4 Beautiful Banner Themes', 'restaurant-wda' ),
                    esc_html__( 'Homepage Sections Positions', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Section', 'restaurant-wda' ),
					esc_html__( 'Sales Section', 'restaurant-wda' ),
                    esc_html__( 'Benefits of Ordering Section', 'restaurant-wda' ),
                    esc_html__( 'Our Partners Section', 'restaurant-wda' ),
                    esc_html__( 'Shop by Category Section', 'restaurant-wda' ),
					esc_html__( 'Achievements Section', 'restaurant-wda' ),
					esc_html__( 'Advantages Section', 'restaurant-wda' ),
					esc_html__( 'Services Section', 'restaurant-wda' ),
					esc_html__( 'Sections Description Color', 'restaurant-wda' ),
					esc_html__( 'Sections Title Lines Color', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_restaurant_wda_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'restaurant-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'restaurant-wda' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Shop/Category Structure', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Premium Sections', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Header Cart Design', 'restaurant-wda' ),
                    esc_html__( 'WooCommerce Button Animation', 'restaurant-wda' ),
					esc_html__( 'WooCommerce Sidebar Options', 'restaurant-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'restaurant-wda' ),
					esc_html__( '... and Other Premium Features', 'restaurant-wda' ),
				),
				'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Logo Animation', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo Font-size', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo Font Weight', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Site Description Color', 'restaurant-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Site Description Font-size', 'restaurant-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_primary_button_settings',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Button Animation', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_woo_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'woocommerce_primary_button_colors_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'WooCommerce Button Animation', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+6 Beautiful Patterns', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'restaurant-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'restaurant-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+6 Beautiful Patterns', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'restaurant-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'restaurant-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_restaurant_wda_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'restaurant-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'restaurant-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Ordering of Metas', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Banner Themes', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_custom_homepage_general_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_custom_homepage_general_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_custom_homepage_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Ordering of Sections', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sections Description Color', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Sections Title Lines Color', 'restaurant-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_restaurant_wda_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'restaurant-wda' ),
        'section' => 'wpdevart_restaurant_wda_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'restaurant-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright Section Image', 'restaurant-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'restaurant-wda' )
            ),
        )
    )
    ) );