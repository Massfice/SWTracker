<?php

namespace app\core\ArrayRefactor\Modes;

class Multi extends Single {
	
	private $spd;
	private $reverse;
	
	private static function isInside($value, array $array) : bool {
		foreach($array as $a) {
			if($value === $a) return true;
		}
		
		return false;
	}
	
	public function __construct() {
		$this->select(new \app\core\ArrayRefactor\Selectors\Blank());
		$this->reverse(true);
	}
	
	public function refactor(\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method, array $array, array $args) : array {
		
		foreach($array as $key => $item) {
			$b = $this->isInside($key,$this->spd);
			if(($b && !$this->reverse) || (!$b && $this->reverse))
				$r_array[$key] = parent::refactor($method,$item,$args);
			else
				$r_array[$key] = $item;
		}
		
		return $r_array;
	}
	
	public function select(\app\core\ArrayRefactor\Selectors\ArraySelector $selector) {
		$this->spd = $selector->select();
	}
	
	public function reverse(bool $reverse) {
		$this->reverse = $reverse;
	}
	
}

?>