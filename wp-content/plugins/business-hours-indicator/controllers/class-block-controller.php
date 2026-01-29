<?php

namespace MABEL_BHI_LITE\Controllers
{

	use MABEL_BHI_LITE\Core\Settings_Manager;

	class Block_Controller
	{
		private $all_blocks;

		public function __construct()
		{

			if ( ! function_exists( 'register_block_type' ) ) {
				return; 
			}

			$this->all_blocks = [
				'hours-overview',
				'opening-hours-indicator',
				'show-only-when-open',
				'show-only-when-closed'
			];

			add_action( 'init', [ $this, 'include_all_blocks' ]);
			add_filter( 'allowed_block_types_all', [ $this, 'remove_block_from_widgets' ], 10, 2 );

		}

		public function include_all_blocks() {

			$loc_setting = Settings_Manager::get_setting('locations');
			$locations = empty( $loc_setting ) ? null : json_decode( $loc_setting, true);
			if($locations == null) $locations = [];
			$location_names = [ [ 'label' => __( '-- Select a location --', 'mabel-business-hours-indicator' ) ] ];

			if( !empty($locations) && is_array($locations) ) {
				foreach ($locations as $location) {
					$location_names[] =  [ 'label' => $location['Name'] ]; 
				}
			}


			foreach ( $this->all_blocks as $block ) {
				if ( ! empty( $block ) ) {
					$file_path = plugin_dir_path( dirname(__FILE__) ) . 'blocks/'. $block . '/index.php';
					if( file_exists( $file_path ) ){
						include_once $file_path;
					}
				}
			}

		}

		public function remove_block_from_widgets( $allowed_blocks, $editor_context ) {
			if ( isset( $editor_context->name ) && $editor_context->name == 'core/edit-widgets' ) {
				if( ! empty( $this->all_blocks ) ) {
					$this->all_blocks = array_map( function( $block ) {
						return 'mbhi/' . $block;
					}, $this->all_blocks );

					if( ! is_array( $allowed_blocks ) || empty( $allowed_blocks ) ) {
						$registered_blocks = \WP_Block_Type_Registry::get_instance()->get_all_registered();
						$allowed_blocks = array_keys( $registered_blocks );
					}

					foreach( $allowed_blocks as $index => $block_id ) {
						if( in_array( $block_id, $this->all_blocks, true ) ) {
							unset( $allowed_blocks[ $index ] );
						}
					}

					return array_values( $allowed_blocks );
				}
			}

			return $allowed_blocks;
		}

	}
}