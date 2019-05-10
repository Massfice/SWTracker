<?php

namespace app\libs\usage;

use core\App;

class JavaScriptFuncsCaller extends Singleton {
	
	private static $funcs = array();
	
	public function addFunc($func) {
		self::$funcs[] = $func;
	}
	
	public function callFuncs() {
		App::getSmarty()->assign('funcs',self::$funcs);
	}
}

?>