<?php

namespace app\libs\proccesses;

abstract class NonValidationProccess extends Proccess {
	
	protected $params;
	
	abstract protected function proccess();
	
	protected function validate() {
		return true;
	}
	
}

?>