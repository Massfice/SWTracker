<?php

namespace app\libs\proccesses;

use core\App;

class NewSettlementProccess extends IsActiveSettlementProccess {
	
	protected function proccess() {
		
		App::getDB()->insert('settlements',[
			'user_id' => $this->params['id'],
			'settlement_id' => NULL,
			'settled_link' => NULL
		]);
		
		App::getSmarty()->assign('settlement_created_message','Pomyślnie utworzono rozliczenie.');
	}
	
}

?>