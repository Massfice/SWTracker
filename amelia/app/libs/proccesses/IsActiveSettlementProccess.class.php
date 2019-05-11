<?php

namespace app\libs\proccesses;

use core\App;

class IsActiveSettlementProccess extends ValidateProccess {
	
	protected function validate() {
		
		if(!isset($this->params['id'])) return FALSE;
		
		$i = App::getDB()->count('settlements',[
			'user_id' => $this->params['id'],
			'settled_link' => NULL
		]);
		
		return $i == 1;
	}
	
}

?>