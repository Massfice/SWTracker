<?php

	class AuthorManager implements DBManager {
		
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
			$this->query = '';
		}
		
		public function mUpdate($params) {
			$this->query = '';			
		}
		
		public function mAdd($params) {
			$this->query = '';			
		}
		
	}

?>