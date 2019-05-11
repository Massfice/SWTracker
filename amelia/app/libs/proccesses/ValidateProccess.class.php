<?php

namespace app\libs\proccesses;

abstract class ValidateProccess extends Proccess {
	
	protected $params;
	
	abstract protected function validate();
	
	protected function proccess() {}
	
}

?>