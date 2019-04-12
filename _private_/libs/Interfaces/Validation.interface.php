<?php

	interface Validation extends Information{
		
		const vError = 'Function validate() missing call';
		
		public function validate();
		public function getErr(&$error);
		
	}

?>