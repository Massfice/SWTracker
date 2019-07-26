<?php

namespace app\core\ArrayRefactor\ArrayCheckerMethods;

interface ArrayCheckerMethod {
	
	public function check(array $array, array $args) : bool;
	
}

?>