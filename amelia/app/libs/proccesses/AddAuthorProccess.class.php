<?php

namespace app\libs\proccesses;

abstract class AddAuthorProccess extends AuthorProccess {
	
	protected function proccess() {
		
		/*App::getDB()->insert('settlements',[
			'author_id' => NULL,
			'settlement_id' => $this->params['id'],
			'settled_link' => $this->params['author']
		]);*/
		
	}
	
}

?>