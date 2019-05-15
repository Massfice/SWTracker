<?php

namespace app\libs\usage;

use core\App;

class VarySender extends Singleton {
	
	private static $vars = array();
	
	public function addVar($key,$val) {
		
		self::$vars[$key] = $val;
	}
	
	public function send() {
		
		$vars = '';
		
		if(!empty(self::$vars)) $vars = json_encode(self::$vars);
		App::getSmarty()->assign('vars',$vars);
	}
}

?>