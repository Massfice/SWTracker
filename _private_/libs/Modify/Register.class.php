<?php

	class Register implements DataBaseConnection,Validation {
		
		private $login;
		private $passwd;
		private $repasswd;
		
		private $error;
		private $info;
		
		public function __construct($login,$passwd,$repasswd) {
			$this->login = $login;
			$this->passwd = $passwd;
			$this->repasswd = $repasswd;
			
			$this->error = array(self::vError);
			$info = array();
			
			include ROOT.'mq.php';
		}
		
		public function validate() {
			
			$this->error = array();
			
			$login = $this->login;
			$passwd = $this->passwd;
			$repasswd = $this->repasswd;
			
			if($login == '') $this->error[] = 'Musisz podac login';
			if($passwd == '') $this->error[] = 'Musisz podac haslo';
			if($repasswd == '') $this->error[] = 'Musisz powtorzyc haslo';
			
			if(empty($this->error)) {
				
				$result = 
				$this->mq->query('select user_id from users where login ="'.$login.'"');
				
				if($result->num_rows > 0) $this->error[] = 'Podany uzytkownik juz istnieje';
				else {
					
					if($passwd != $repasswd) $this->error[] = 'Podane hasla sie nie zgadzaja';
					
				}
				
			}			
		}
		
		public function execute() {
			
			if(empty($this->error)) {
				
				$this->mq->query('insert into users(user_id,login,passwd) values(NULL,"'.$this->login.'","'.$this->passwd.'")');
				
				$this->info[] = 'Zarejestrowano pomyslnie';
				
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