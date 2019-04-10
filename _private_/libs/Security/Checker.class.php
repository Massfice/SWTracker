<?php
	
	class Checker {
		
		private $b;
		
		private $allowed;
		private $def;
		
		public function __construct() {
			session_start();
			$this->b = isset($_SESSION['id']);
			
			$this->allowed = array(
									'register',
									'login',
									'default'); 
			
		}
		
		private function isNotAllowed($action) {
			
			$b = TRUE;
		
			foreach($this->allowed as $a) {
				if($action == $a) {
					$b = FALSE;
					break;
				}
			}
			
			return $b;
		}
		
		public function check(&$action) {
			
			if(!$this->b) {
				
				if($this->isNotAllowed($action)) $action = 'login';
			}
		}
		
	}
	
?>