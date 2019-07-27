<?php

namespace app\core\ArrayRefactor\ArrayCheckerMethods;

class AlwaysTrue implements ArrayCheckerMethod {
	
	public function check(array $array, array $args) : bool {
	
		return true;
		
	}
	
}

?>