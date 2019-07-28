<?php

namespace app\core\ArrayRefactor\Modes;

class Multi implements ArrayRefactorMode {
	
	protected $selected;
	protected $reverse;
	
	public function __construct() {
		$selector = \app\core\ArrayRefactory::createSelector('Blank');
		$this->select($selector);
		$this->reverse(true);
	}
	
	public function refactor(\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method, array $array, array $args) : array {
		
		$cmethod = \app\core\ArrayRefactory::createCheckerMethod('ValuesExist');
		
		foreach($array as $key => $item) {
			//$b = $this->isInside($key,$this->selected);
			$b = $cmethod->check($this->selected,[$key]);
			if(($b && !$this->reverse) || (!$b && $this->reverse)) {
				$refactor = new Single();
				$r_array[$key] = $refactor->refactor($method,$item,$args);
			}
			else
				$r_array[$key] = $item;
		}
		
		return $r_array;
	}
	
	public function select(\app\core\ArrayRefactor\Selectors\ArraySelector $selector) {
		$this->selected = $selector->select();
	}
	
	public function reverse(bool $reverse) {
		$this->reverse = $reverse;
	}
	
}

?>