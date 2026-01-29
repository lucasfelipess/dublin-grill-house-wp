<?php

if(!defined('ABSPATH')){die;}

if( ! function_exists( 'mbhi_show_only_when_closed_block' ) ) {
	
	wp_register_script(
		'mbhi-show-only-when-closed',
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

	wp_localize_script( 'mbhi-show-only-when-closed', 'mbhiIfclosedSettings', [ 'locations' => $location_names ] );

	register_block_type( 'mbhi/show-only-when-closed', [
		'category'        => 'widgets',
		'editor_script'   => 'mbhi-show-only-when-closed',
		'render_callback' => 'mbhi_show_only_when_closed_block',
		'attributes'      => [
			'displayLocation' => [
				'type'    => 'string',
				'default' => '',
			],
			'content'         => [
				'type'    => 'string',
				'default' => '',
			],
		]
	] );

	function mbhi_show_only_when_closed_block( $attributes ) {
		$location = isset( $attributes['displayLocation'] ) ? esc_attr( $attributes['displayLocation'] ) : '';
		$content  = isset( $attributes['content'] ) ? esc_attr( $attributes['content'] ) : '';

		$output = do_shortcode( '[mbhi_ifclosed location="' . $location . '"]' . $content . '[/mbhi_ifclosed]' );

		if ( defined( 'REST_REQUEST' ) && REST_REQUEST && empty( trim( $output ) ) ) {
			$output = '<div style="padding:1em; color: #999;">' . __( '[Preview] This content will only display when the selected location is closed.', 'business-hours-indicator' ) . '</div>';
		}

		return '<div class="mbhi-ifclosed-wrap">' . $output . '</div>';
	}
	
}