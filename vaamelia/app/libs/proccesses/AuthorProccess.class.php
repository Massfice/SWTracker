<?php

namespace app\libs\proccesses;

abstract class AuthorProccess extends IsActiveSettlementProccess {
	
	protected $params;
	
	abstract protected function proccess();
	
	protected function validate() {
		
		if(!parent::validate()) return FALSE;
		
		if(!isset($this->params['author'])) return FALSE;
		
		return TRUE;
		
	}
	
}

?>