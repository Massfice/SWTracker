<?php

	interface Validation {
		
		public function validate();
		public function getInfo(&$info);
		public function getErr(&$error);
		
	}

?>