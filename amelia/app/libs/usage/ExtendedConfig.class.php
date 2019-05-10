<?php

namespace app\libs\usage;

use core\App;

class ExtendedConfig extends Singleton {
	
	private static $general_config;
	
	private static $extended_config;
	
	protected function __construct() {
		
		self::$general_config = App::getConf();
		
		self::$extended_config = array(
			'full_url' =>
				self::$general_config->protocol.'://'.self::$general_config->server_name.
				self::$general_config->action_root,
		);
	}	
	
	public function getGeneral() {
		return self::$general_config;
	}
	
	public function getExtended() {
		return self::$extended_config;
	}
}

?>