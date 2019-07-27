<?php

namespace app\core\ArrayRefactor\Selectors;

class Cond extends Blank {
	
	public function set(array $array, array $pattern) {
		
		$this->selected = [];
		
		$checker = \app\core\ArrayRefactory::createChecker();
		
		foreach($array as $k => $a) {
			if($checker->check($a,$pattern)) $this->selected[] = $k;
		}
		
	}
	
}

?>