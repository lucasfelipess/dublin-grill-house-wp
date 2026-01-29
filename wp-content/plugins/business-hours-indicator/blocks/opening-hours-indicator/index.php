<?php

if(!defined('ABSPATH')){die;}

if( ! function_exists( 'mbhi_opening_hours_indicator_block' ) ) {
	
	wp_register_script(
	    'mbhi-opening-hours-indicator',
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
	
	wp_localize_script( 'mbhi-opening-hours-indicator', 'mbhiIndicatorSettings', [ 'locations' => $location_names ] );
	
	register_block_type( 'mbhi/opening-hours-indicator', [
	    'category'          => 'widgets',
	    'editor_script'     => 'mbhi-opening-hours-indicator',
	    'render_callback'   => 'mbhi_opening_hours_indicator_block',
	    'attributes'        => [
	        'displayLocation' => [
	            'type'      => 'string',
	            'default'   => '',
	        ],
	    ],
	] );
	
	function mbhi_opening_hours_indicator_block( $attributes ){
	    $location = isset( $attributes['displayLocation'] ) ? esc_attr( $attributes['displayLocation'] ) : '';
	    $output = do_shortcode( '[mbhi location="' . $location . '"]' );
	    return '<div class="mbhi-indicator-wrap">' . $output . '</div>';
	}

}