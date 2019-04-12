<?php

	class SettlementManager implements DataBaseConnection,Actioner,Information {
		
		private $info;
		
		private $id;
		
		public function __construct($id) {
			$this->info = array();
			$this->id = $id;
			include MQ;
		}
		
		private function positions() {
			$this->info['file'] = '0/1/2/3/positions.tpl';
		}
		
		private function authors() {
			$this->info['file'] = '0/1/2/3/authors.tpl';
		}
		
		public function action() {
			
			$action = isset($_REQUEST['saction']) ? $_REQUEST['saction'] : 'default';
			
			switch($action) {
				case 'positions': $this->positions(); break;
				case 'authors':
				case 'default':
				default: $this->authors();;
			
			}			
		}
		
		public function execute() {
			
		}
		
		public function getInfo(&$info) {
			$info = $this->info;
		}
		
	}

?>