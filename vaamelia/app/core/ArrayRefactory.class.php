<?php

namespace app\core;

class ArrayRefactory {
	
	public static function createRefactor() : \app\core\ArrayRefactor\ArrayRefactor {
		return new \app\core\ArrayRefactor\ArrayRefactor();
	}
	
	public static function createMode(string $mode) : \app\core\ArrayRefactor\Modes\ArrayRefactorMode {
		
		$mode_name = '\\app\\core\\ArrayRefactor\\Modes\\'.$mode;
		
		return new $mode_name();
		
	}
	
	public static function createMethod(string $method) : \app\core\ArrayRefactor\Methods\ArrayRefactorMethod {
		
		$method_name = '\\app\\core\\ArrayRefactor\\Methods\\'.$method;
		
		return new $method_name();
		
	}
	
}

?>