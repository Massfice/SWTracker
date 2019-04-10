<?php

	interface Validation {
		
		const vError = 'Function validate() missing call';
		
		public function validate();
		public function getInfo(&$info);
		public function getErr(&$error);
		
	}

?>