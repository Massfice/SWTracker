<?php

	interface Validation {
		
		public function validate($params);
		public function getInfo(&$info);
		public function getErr(&$error);
		
	}

?>