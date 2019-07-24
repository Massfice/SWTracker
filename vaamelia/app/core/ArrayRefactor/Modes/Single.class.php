<?php

namespace app\core\ArrayRefactor\Modes;

class Single implements ArrayRefactorMode {
	
	public function refactor(\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method, array $array, array $args) : array {
		return $method->refactor($array,$args);
	}
	
}

?>