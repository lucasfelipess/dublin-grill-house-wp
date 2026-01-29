<?php 
	$wp_customize->add_panel( 'wpdevart_restaurant_wda_woocommerce_settings_panel', 
    array(
		'title'	=> esc_html__('WooCommerce WpDevArt','restaurant-wda'),			
        'description'	=> esc_html__('WooCommerce custom settings','restaurant-wda'),		
		'priority'		=> 29
    ) 
	);

	##################------ WooCommerce ------##################

	$wp_customize->add_section('woocommerce_general_section',array(
		'title'	=> esc_html__('WooCommerce Layout','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_shop_category_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_shop_category_layout',
	array(
		'label' => esc_html__( 'WooCommerce Shop/Category pages layout', 'restaurant-wda' ),
		'description' => esc_html__( 'Choose the WooCommerce Shop/Category pages layout.', 'restaurant-wda' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'restaurant-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'restaurant-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'restaurant-wda' )
		)
		)
	)
	) );
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_product_pages_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_product_pages_layout',
	array(
		'label' => esc_html__( 'WooCommerce Products pages layout', 'restaurant-wda' ),
		'description' => esc_html__( 'Choose the WooCommerce products pages layout.', 'restaurant-wda' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'restaurant-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'restaurant-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'restaurant-wda' )
		)
		)
	)
	) );
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_cart_checkout_account_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_restaurant_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_cart_checkout_account_layout',
	array(
		'label' => esc_html__( 'WooCommerce Cart/Checkout/Account layout', 'restaurant-wda' ),
		'description' => esc_html__( 'Choose the WooCommerce Cart/Checkout/Account pages layout.', 'restaurant-wda' ),
		'section' => 'woocommerce_general_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'restaurant-wda' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'restaurant-wda' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'restaurant-wda' )
		)
		)
	)
	) );
	
	##################------ WooCommerce Typography ------##################

	$wp_customize->add_section('woocommerce_typography_section',array(
		'title'	=> esc_html__('WooCommerce Typography','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_text_font_size',
	array(
		'default' => esc_html('17'),
		'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_text_font_size',
		array(
		'label' => esc_html__( 'Text font-size for Woo pages (px)', 'restaurant-wda' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_link_font_size',
	array(
		'default' => esc_html('17'),
		'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_link_font_size',
		array(
		'label' => esc_html__( 'Link font-size for Woo pages (px)', 'restaurant-wda' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woocommerce_heading_h1_font_size',
	array(
		'default' => esc_html('40'),
		'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Title font-size for Woo pages (px)', 'restaurant-wda' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );

	##################------ WooCommerce Shop/Product Colors ------##################

	$wp_customize->add_section('woocommerce_global_colors_section',array(
		'title'	=> esc_html__('WooCommerce Colors','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_page_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_page_bg_color', esc_html('#15120f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_page_bg_color', array(
        'label' => esc_html__('WooCommerce pages bg color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_page_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_products_blocks_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_products_blocks_bg_color', esc_html('#15120f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_products_blocks_bg_color', array(
        'label' => esc_html__('WooCommerce product summary bg color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_products_blocks_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_heading_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_heading_color', array(
        'label' => esc_html__('WooCommerce pages headings color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_text_color', array(
        'label' => esc_html__('WooCommerce pages text color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_text_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_link_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_link_color', array(
        'label' => esc_html__('WooCommerce pages link color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_link_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_link_hover_color', array(
        'label' => esc_html__('WooCommerce pages link hover color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_sales_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_sales_bg_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_sales_bg_color', array(
        'label' => esc_html__('WooCommerce Sales background color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_sales_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_sales_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_sales_text_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_sales_text_color', array(
        'label' => esc_html__('WooCommerce Sales text color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_sales_text_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_active_tab_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_active_tab_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_active_tab_color', array(
        'label' => esc_html__('WooCommerce product active tab color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_active_tab_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_inactive_tab_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_inactive_tab_color', esc_html('#7e7e7e')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_inactive_tab_color', array(
        'label' => esc_html__('WooCommerce product inactive tab color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_inactive_tab_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_tab_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_tab_border_color', esc_html('#433e37')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_tab_border_color', array(
        'label' => esc_html__('WooCommerce product tab border color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_tab_border_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_rating_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_rating_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_rating_color', array(
        'label' => esc_html__('WooCommerce rating/star color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_rating_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woocommerce_info_border_icon_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woocommerce_info_border_icon_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woocommerce_info_border_icon_color', array(
        'label' => esc_html__('WooCommerce Info border/icon color','restaurant-wda'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'wpdevart_restaurant_wda_woocommerce_info_border_icon_color'
    )));

	##################------ WooCommerce Primary Button ------##################

	$wp_customize->add_section('woocommerce_primary_button_colors_section',array(
		'title'	=> esc_html__('WooCommerce Primary Button','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_bg_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_bg_color', array(
		'label' => esc_html__('WooCommerce primary button bg color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_border_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_border_color', array(
		'label' => esc_html__('WooCommerce primary button border color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_border_color'
	)));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_link_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_link_color', array(
		'label' => esc_html__('WooCommerce primary button text color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_link_color'
	)));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_bg_hover_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_bg_hover_color', array(
		'label' => esc_html__('WooCommerce primary button bg hover color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_bg_hover_color'
	)));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_border_hover_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_border_hover_color', array(
		'label' => esc_html__('WooCommerce primary button border hover color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_border_hover_color'
	)));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_primary_button_link_hover_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_primary_button_link_hover_color', array(
		'label' => esc_html__('WooCommerce primary button text hover color','restaurant-wda'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'wpdevart_restaurant_wda_woo_primary_button_link_hover_color'
	)));

	##################------ WooCommerce Shop/Category Structure ------##################

	$wp_customize->add_section('woocommerce_shop_cat_page_title_section',array(
		'title'	=> esc_html__('Shop/Category Title Banner','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_restaurant_wda_shop_cat_page_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_shop_cat_page_title_alignment',array(
			'label'	=> esc_html__('Position of Title/Breadcrumbs','restaurant-wda'),
			'section'	=> 'woocommerce_shop_cat_page_title_section',
			'setting'	=> 'wpdevart_restaurant_wda_shop_cat_page_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','restaurant-wda'),
				'center' => esc_html__('Center','restaurant-wda'),
				'right' => esc_html__('Right','restaurant-wda')
				)
	));	
	$wp_customize->add_setting('wpdevart_restaurant_wda_shop_cat_page_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_shop_cat_page_banner_bg_color', esc_html('#0c0c0c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_shop_cat_page_banner_bg_color', array(
        'label' => esc_html__('Banner BG color','restaurant-wda'),
        'section' => 'woocommerce_shop_cat_page_title_section',
        'settings' => 'wpdevart_restaurant_wda_shop_cat_page_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_shop_cat_page_banner_gradient_type',array(
		'default'	=> esc_html('to bottom'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_shop_cat_page_banner_gradient_type',array(
			'label'	=> esc_html__('Banner gradient type','restaurant-wda'),
			'section'	=> 'woocommerce_shop_cat_page_title_section',
			'setting'	=> 'wpdevart_restaurant_wda_shop_cat_page_banner_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','restaurant-wda'),
				'to left' => esc_html__('To left','restaurant-wda'),
				'to bottom' => esc_html__('To bottom','restaurant-wda'),
				'to top' => esc_html__('To top','restaurant-wda'),
				'to bottom right' => esc_html__('To bottom right','restaurant-wda'),
				'to bottom left' => esc_html__('To bottom left','restaurant-wda'),
				'to top right' => esc_html__('To top right','restaurant-wda'),
				'to top left' => esc_html__('To top left','restaurant-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_restaurant_wda_shop_cat_page_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_shop_cat_page_banner_gradient_color', esc_html('#0c0c0c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_shop_cat_page_banner_gradient_color', array(
        'label' => esc_html__('Banner gradient color','restaurant-wda'),
        'section' => 'woocommerce_shop_cat_page_title_section',
        'settings' => 'wpdevart_restaurant_wda_shop_cat_page_banner_gradient_color'
    )));
	
	##################------ WooCommerce Shop by Category Section ------##################

	$wp_customize->add_section('woocommerce_shop_shop_by_category_section',array(
		'title'	=> esc_html__('WooCommerce Shop by Category Section','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting( 'wpdevart_restaurant_wda_hide_woo_by_category_section_shop',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_restaurant_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_restaurant_wda_hide_woo_by_category_section_shop',
        array(
			'label'	=> esc_html__('Show on the Shop Page','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_hide_woo_by_category_section_category',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_restaurant_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_restaurant_wda_hide_woo_by_category_section_category',
        array(
			'label'	=> esc_html__('Show on Category Pages','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
        )
    ) );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_title',array(
		'default'	=> esc_html(''),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category_title',
            array(
                'label'    => esc_html__('Shop by Category title','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_link_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_shop_by_category_link_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_link_color', array(
        'label' => esc_html__('Category link color','restaurant-wda'),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_link_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_link_hover_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_shop_by_category_link_hover_color', esc_html('#d8d8d8')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_link_hover_color', array(
        'label' => esc_html__('Category link hover color','restaurant-wda'),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category1_text',array(
		'default'	=> esc_html('Appetizers'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category1_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category1_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category1_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category1_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category1_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image1',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category1.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image1', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image1',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category2_text',array(
		'default'	=> esc_html('Entrees'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category2_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category2_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category2_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category2_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category2_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image2',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category2.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image2', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image2',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category3_text',array(
		'default'	=> esc_html('Sides'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category3_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category3_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category3_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category3_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category3_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image3',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category3.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image3', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image3',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category4_text',array(
		'default'	=> esc_html('Desserts'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category4_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category4_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category4_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category4_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category4_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image4',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category4.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image4', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image4',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category5_text',array(
		'default'	=> esc_html('Beverages'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category5_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category5_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category5_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category5_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category5_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image5',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category5.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image5', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image5',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category6_text',array(
		'default'	=> esc_html('Pizzas'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category6_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category6_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category6_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category6_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category6_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image6',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category6.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image6', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image6',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category7_text',array(
		'default'	=> esc_html('Salads'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_restaurant_wda_woo_shop_by_category7_text',
            array(
                'label'    => esc_html__('Category page text','restaurant-wda'),
                'section'  => 'woocommerce_shop_shop_by_category_section',
                'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category7_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category7_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_restaurant_wda_woo_shop_by_category7_url',array(
			'label'	=> esc_html__('Category page link/URL','restaurant-wda'),
			'section'	=> 'woocommerce_shop_shop_by_category_section',
			'setting'	=> 'wpdevart_restaurant_wda_woo_shop_by_category7_url'
	));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_shop_by_category_image7',array(
		'default'	=> esc_url(get_theme_file_uri('/images/category7.jpg')),
		'sanitize_callback'	=> 'wpdevart_restaurant_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_shop_by_category_image7', array(
        'label' => esc_html__('Category Image','restaurant-wda'),
		'description' => esc_html__( 'Recommended image size ~280*280', 'restaurant-wda' ),
        'section' => 'woocommerce_shop_shop_by_category_section',
        'settings' => 'wpdevart_restaurant_wda_woo_shop_by_category_image7',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','restaurant-wda'),
                    'remove' => esc_html__('Remove Image','restaurant-wda'),
                    'change' => esc_html__('Change Image','restaurant-wda'),
                    )
    )));
	
	##################------ WooCommerce Pagination ------##################

	$wp_customize->add_section('wpdevart_restaurant_wda_woo_pagination_settings',array(
		'title'	=> esc_html__('WooCommerce Pagination','restaurant-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_restaurant_wda_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_bg_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_border_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_border_color', array(
        'label' => esc_html__('Buttons border color','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_border_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_link_color', esc_html('#c9a581')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_text_color', esc_html('#c9b29f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_bg_hover_color', esc_html('#15120f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_border_hover_color', esc_html('#040404')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_border_hover_color', array(
        'label' => esc_html__('Buttons border hover color','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_restaurant_wda_woo_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_woo_pagination_buttons_text_hover_color', esc_html('#c9b29f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','restaurant-wda'),
        'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
        'settings' => 'wpdevart_restaurant_wda_woo_pagination_buttons_text_hover_color'
    )));
	$wp_customize->add_setting( 'wpdevart_restaurant_wda_woo_pagination_text_font_size',
	array(
		'default' => esc_html('18'),
		'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_woo_pagination_text_font_size',
		array(
		'label' => esc_html__( 'Font-size of buttons (px)', 'restaurant-wda' ),
		'section' => 'wpdevart_restaurant_wda_woo_pagination_settings',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );