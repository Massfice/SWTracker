<?php

	class PositionManager implements DBManager {
		
		private $query;
		private $mq;
		
		public function __construct() {
			include MQ;
		}
		
		public function execute() {
			if(isset($this->query)) {
				$this->mq->query($this->query);
			}	
		}
		
		public function mDelete($params) {
			
		}
		
		public function mUpdate($params) {
			
		}
		
		public function mAdd($params) {
			
		}
		
	}

?>