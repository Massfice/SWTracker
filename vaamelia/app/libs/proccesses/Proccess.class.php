<?php

namespace app\libs\proccesses;

abstract class Proccess {
	
	protected $params;
	
	abstract protected function validate();
	abstract protected function proccess();
	
	protected function areParamsSet(...$rparams) {
		
		$b = TRUE;
		
		foreach($rparams as $r) {
			
			if(!isset($this->params[$r])) {
				$b = FALSE;
				break;
			}
		}
		
		return $b;
	}
	
	final public function putVar($key, &$var) {
		if(isset($var)) $this->params[$key] = $var;
		
	}
	
	final public function make($negate = FALSE) {
		
		$validation = $this->validate();
		
		if($negate) $validation = !$validation;
		
		if($validation) $this->proccess();
		
		return $validation;
		
		
	}
	
}

?>