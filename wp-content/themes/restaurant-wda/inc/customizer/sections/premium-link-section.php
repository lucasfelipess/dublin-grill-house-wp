<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_restaurant_wda_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_restaurant_wda_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Restaurant WDA','restaurant-wda'),
				'pro_text' => esc_html__('Premium','restaurant-wda'),
				'pro_url'  => apply_filters( 'parent_wpdevart_restaurant_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-restaurant-theme')),
				'priority'  => 10,
			)
		)
	);