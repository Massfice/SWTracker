<?php

	class Login implements DataBaseConnection,Validation {
		
		
		private $mq;
		
		private $login;
		private $passwd;
		
		private $error;
		private $info;
		
		public function __construct($login,$passwd) {
			
			$this->login = $login;
			$this->passwd = $passwd;
			
			$this->error = array(self::vError);
			$this->id = null;
			
			include MQ;
		}
		
		public function validate() {
			
			$this->error = array();
			
			$login = $this->login;
			$passwd = $this->passwd;
			
			if($login == '') $this->error[] = 'Musisz podac login';
			if($passwd == '') $this->error[] = 'Musisz podac haslo';
			
			if(empty($this->error)) {
				
				$result = 
				$this->mq->query('select user_id from users where login ="'.$login.'" && passwd = "'.$passwd
				.'"');
				
				if($result->num_rows == 0) $this->error[] = 'Niewlasciwe dane logowania';
				
			}
		}
		
		public function execute() {
			if(empty($this->error)) {
				$result = 
					$this->mq->query('select user_id from users where login ="'.$this->login.'" && passwd = "'.$this->passwd
					.'"');
			
				if($result->num_rows == 1) {
					$row = $result->fetch_assoc();
				
					$this->info['id'] = $row['user_id'];
				}	
			}
		}
		
		public function getInfo(&$info) {
			$info = $this->info;
		}
		
		public function getErr(&$error) {
			$error = $this->error;
		}
		
	}

?>