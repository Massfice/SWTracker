<?php

namespace app\core\ArrayRefactor\Modes;

class Single implements ArrayRefactorMode {
	
	private $pattern;
	
	public function __construct() {
		$this->pattern = ['AlwaysTrue' => []];
	}
	
	public function refactor(\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method, array $array, array $args) : array {
		
		$checker = \app\core\ArrayRefactory::createChecker();
		
		if($checker->check($array,$this->pattern)) return $method->refactor($array,$args);
		else return $array;
	}
	
	public function set(array $pattern) {
		$this->pattern = $pattern;
	}
	
}

?>