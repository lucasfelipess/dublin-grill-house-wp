<?php

namespace MABEL_BHI_LITE\Core
{
	if(!defined('ABSPATH')){die;}

	class Language_Manager
	{

		protected $language_folder = 'languages';

		public function __construct()
		{
		}

		public function load_text_domain()
		{
			load_plugin_textdomain(
				'business-hours-indicator',
				false,
				plugin_basename(Config_Manager::$slug) .'/'. $this->language_folder . '/'
			);
		}
	}
}
