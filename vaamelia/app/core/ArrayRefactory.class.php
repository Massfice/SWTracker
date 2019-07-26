<?php

namespace app\core;

class ArrayRefactory {
	
	public static function createRefactor() : \app\core\ArrayRefactor\ArrayRefactor {
		return new \app\core\ArrayRefactor\ArrayRefactor();
	}
	
	public static function createChecker() : \app\core\ArrayRefactor\ArrayChecker {
		return new \app\core\ArrayRefactor\ArrayChecker();
	}
	
	public static function createMode(string $mode) : \app\core\ArrayRefactor\Modes\ArrayRefactorMode {
		
		$mode_name = '\\app\\core\\ArrayRefactor\\Modes\\'.$mode;
		
		return new $mode_name();
		
	}
	
	public static function createMethod(string $method) : \app\core\ArrayRefactor\Methods\ArrayRefactorMethod {
		
		$method_name = '\\app\\core\\ArrayRefactor\\Methods\\'.$method;
		
		return new $method_name();
		
	}
	
	public static function createSelector(string $selector) : \app\core\ArrayRefactor\Selectors\ArraySelector {
		
		$selector_name = '\\app\\core\\ArrayRefactor\\Selectors\\'.$selector;
		
		return new $selector_name();
		
	}
	
	public static function createCheckerMethod(string $cheker_method) : \app\core\ArrayRefactor\ArrayCheckerMethods\ArrayCheckerMethod {
		
		$cheker_method_name = '\\app\\core\\ArrayRefactor\\ArrayCheckerMethods\\'.$cheker_method;
		
		return new $cheker_method_name();
		
	}
	
}

?>