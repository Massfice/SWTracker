<?php

	require_once dirname(__DIR__, 1).'/Interfaces/DataBaseConnection.interface.php';
	
	class Checker implements DataBaseConnection {
		
		private $id;
		private $mq;
		
		function __construct() {
			session_start();
			$this->id = isset($_SESSION['id']) ? $_SESSION['id'] : (isset($_REQUEST['user']) ? $_REQUEST['user'] : -1);

			$this->mq = new mysqli(
				DataBaseConnection::dbHost,
				DataBaseConnection::dbUser,
				DataBaseConnection::dbPasswd,
				DataBaseConnection::dbName);
		}
		
		public function execute() {
			
			if(!$this->mq) echo 'Data Base Error :(<br><br>';
			else {
				$result = $this->mq->query('select is_login_in from users where user_id='.$this->id);
				$this->mq->close();
				
				$b = FALSE;
				
				if($result != NULL && $result->num_rows > 0) {
					$result = $result->fetch_assoc();
				
					if($result['is_login_in'] == '1') $b = TRUE;
				
				}
			
				if(!$b) {
					include dirname(__DIR__, 2).'/login_view.php';
					exit();
				}
			
			}
		}
		
	}
	
?>