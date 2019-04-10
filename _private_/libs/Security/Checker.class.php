<?php
	
	class Checker {
		
		private $b;
		
		function __construct() {
			session_start();
			$this->b = isset($_SESSION['id']);
		}
		
		public function check() {
			
			if(!$this->b) {
				
				if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['action']) &&
					$_POST['action'] == 'login') {
						
					$id = null;
					$error = array();
					
					$login = new Login($_POST['login'],$_POST['passwd']);
					$login->validate(array($_POST['login'],$_POST['passwd']));
					$login->execute();
					
					$login->getInfo($id,$error);
					
					$_SESSION['id'] = $id;
					
					if(empty($error)) header('Location: http://localhost/myProjects/SWTracker/');
					
				}
				
				include dirname(__DIR__, 2).'/login_view.php';
				exit();
			}
		}
		
	}
	
?>