<?php

if( ! defined( 'ABSPATH' ) ) { die; }

if( ! function_exists( 'mbhi_hours_overview_block' ) ) {
	
	wp_register_script(
		'mbhi-hours-overview',
		plugin_dir_url( __FILE__ ) . 'block.js',
		[
			'wp-blocks',
			'wp-element',
			'wp-editor',
			'wp-components',
			'wp-block-editor',
			'wp-server-side-render'
		]
	);
	
	wp_localize_script( 'mbhi-hours-overview', 'mbhiOverviewSettings', [ 'locations' => $location_names ] );
	
	register_block_type( 'mbhi/hours-overview', [
		'category'        => 'widgets',
		'editor_script'   => 'mbhi-hours-overview',
		'render_callback' => 'mbhi_hours_overview_block',
		'attributes'      => [
			'displayLocation' => [
				'type'    => 'string',
				'default' => '',
			],
		],
	] );
	
	function mbhi_hours_overview_block( $attributes ) {
		$location = isset( $attributes['displayLocation'] ) ? esc_attr( $attributes['displayLocation'] ) : '';
		$output   = do_shortcode( '[mbhi_hours location="' . $location . '"]' );
	
		return '<div class="mbhi-hours-wrap">' . $output . '</div>';
	}
	
}