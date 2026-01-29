<?php
	$wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogname' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_header_logo_max_height',
    array(
    'default' => esc_html('50'),
    'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_header_logo_max_height',
        array(
        'label' => esc_html__( 'Logo (image) max-height (px)', 'restaurant-wda' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('30'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting( 'wpdevart_restaurant_wda_header_logo_mobile_max_height',
    array(
    'default' => esc_html('70'),
    'sanitize_callback' => 'wpdevart_restaurant_wda_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_restaurant_wda_header_logo_mobile_max_height',
        array(
        'label' => esc_html__( 'Mobile Logo (image) max-height (px)', 'restaurant-wda' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('30'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting('wpdevart_restaurant_wda_header_logo_text_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_header_logo_text_color', esc_html('#c9a581')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_header_logo_text_color', array(
        'label' => esc_html__('Text Logo color','restaurant-wda'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_restaurant_wda_header_logo_text_color'
    )));
    $wp_customize->add_setting('wpdevart_restaurant_wda_header_logo_gradient_type',array(
        'default'	=> esc_html('to right'),
        'sanitize_callback'	=> 'wpdevart_restaurant_wda_text_sanitization'	
    ));
    $wp_customize->add_control('wpdevart_restaurant_wda_header_logo_gradient_type',array(
            'label'	=> esc_html__('Text Logo gradient type','restaurant-wda'),
            'section'	=> 'title_tagline',
            'setting'	=> 'wpdevart_restaurant_wda_header_logo_gradient_type',
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
    $wp_customize->add_setting('wpdevart_restaurant_wda_header_logo_gradient_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_restaurant_wda_header_logo_gradient_color', esc_html('#c9a581')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_restaurant_wda_header_logo_gradient_color', array(
        'label' => esc_html__('Text Logo gradient color','restaurant-wda'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_restaurant_wda_header_logo_gradient_color'
    )));