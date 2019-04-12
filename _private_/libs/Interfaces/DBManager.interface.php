<?php

	interface DBManager extends DataBaseConnection {
		
		public function mDelete($params);
		public function mUpdate($params);
		public function mAdd($params);
		
	}

?>