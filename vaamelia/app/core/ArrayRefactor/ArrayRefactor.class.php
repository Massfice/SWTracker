<?php

namespace app\core\ArrayRefactor;

class ArrayRefactor {
	
	public function refactor(
		\app\core\ArrayRefactor\Modes\ArrayRefactorMode $mode,
		\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method,
		array $array,
		array $args = []
	) : array {
		
		return $mode->refactor($method, $array, $args);
		
	}

}

?>