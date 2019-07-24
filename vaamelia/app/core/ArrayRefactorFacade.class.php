<?php

namespace app\core;

class ArrayRefactorFacade {
	
	public static function singleRefactor(string $method, array $array, array $args = []) : array {
		
		$refactor = ArrayRefactory::createRefactor();
		$mode = ArrayRefactory::createMode('Single');
		$method = ArrayRefactory::createMethod($method);
		
		return $refactor->refactor($mode,$method,$array,$args);
	}
	
	public static function specifiedRefactor(string $method, array $array, array $specified, array $args = [], bool $reverse = true) : array {
		$refactor = ArrayRefactory::createRefactor();
		$mode = ArrayRefactory::createMode('Multi');
		$selector = ArrayRefactory::createSelector('Specified');
		$selector->set($specified);
		$mode->select($selector);
		$mode->reverse($reverse);
		$method = ArrayRefactory::createMethod($method);
		
		return $refactor->refactor($mode,$method,$array,$args);
	}
	
	public static function multiRefactor(string $method, array $array, array $args = [], bool $reverse = true) : array {
		$refactor = ArrayRefactory::createRefactor();
		$mode = ArrayRefactory::createMode('Multi');
		$mode->reverse($reverse);
		$method = ArrayRefactory::createMethod($method);
		
		return $refactor->refactor($mode,$method,$array,$args);		
	}
	
}

?>