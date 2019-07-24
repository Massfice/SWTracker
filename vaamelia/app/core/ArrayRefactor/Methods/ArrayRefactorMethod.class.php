<?php

namespace app\core\ArrayRefactor\Methods;

interface ArrayRefactorMethod {
	
	public function refactor(array $array, array $args) : array;
	
}

?>