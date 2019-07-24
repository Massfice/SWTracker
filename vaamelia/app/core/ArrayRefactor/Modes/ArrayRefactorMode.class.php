<?php

namespace app\core\ArrayRefactor\Modes;

interface ArrayRefactorMode {
	
	public function refactor(\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method, array $array, array $args) : array;
	
}

?>