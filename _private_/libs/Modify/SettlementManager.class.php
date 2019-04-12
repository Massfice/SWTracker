<?php

	class SettlementManager implements DataBaseConnection,Actioner,Information {
		
		private $info;
		
		private $id;
		
		public function __construct() {
			 include MQ;
		}
		
		public function action() {
			
			$action = isset($_REQUEST['saction']) ? $_REQUEST['saction'] : 'default';
			
			switch($action) {
				case 'authors': break;
				case 'positions':
				case 'default':
				default: ;
			
			}			
		}
		
		public function setId($id) {
			
		}
		
		public function execute() {
			
		}
		
		public function createSettlement() {
			
		}
		
		public function getInfo(&$info) {
			
		}
		
	}

?>