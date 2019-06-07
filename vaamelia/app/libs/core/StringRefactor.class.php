<?php

namespace app\libs\core;

abstract class StringRefactor {
	
	protected $char;
	protected $escape = false;
	
	protected $specials;
	
	protected function escape() {
		$this->escape = true;
		$this->char = '';
	}
	
	protected function special_char() {
		
		if(!$this->escape && isset ($this->specials[$this->char])) {
			$method = $this->specials[$this->char];
			$this->$method();
		}
		else $this->escape = false;
		
	}
	
	public function refactor(string $str) {
		$buff = '';
		
		for($i = 0; $i < strlen($str); $i++) {
			
			$this->char = $str[$i];
			$this->special_char();
			$buff = $buff.$this->char;
			
		}
		
		return $buff;
	}
	
}

?>