<?php

	class FrontController extends Smarty implements DataBaseConnection {
		
		private $checker;
		private $tpl;
		
		private $mq;
		
		//Konstruktor
		public function __construct() {
			
			parent::__construct();
			
			$this->template_dir = SMARTY.'views';
			$this->compile_dir = SMARTY.'tmp';
			$this->cache_dir = SMARTY.'cache';
			
			$this->checker = new Checker();
			
			$this->tpl = null;
			
			include MQ;
			
		}
		//--------
		
		//Funkcje 'uzytkowe'
		private function logout() {
			session_destroy();
			header('Location: '.GARRAY['MAIN_URL']);
		}
		
		private function track() {
			
			$info = array();
			$error = array();
			
			if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['nicks'])) {
				
				$from = $_POST['from'];
				$to = $_POST['to'];
				$nicks = $_POST['nicks'];
		
				$tracker = new Tracker($from,$to,$nicks);
			
				$tracker->validate();
		
				$tracker->extractAll();
				
				$tracker->getInfo($info);
				$tracker->getErr($error);
				
			}	
			
				$this->tpl = 'home.tpl';
				
				$this->assign('info',$info);
				$this->assign('error',$error);
		}
		
		private function login() {
			
			if(isset($_SESSION['id'])) header('Location: '.GARRAY['MAIN_URL'].'track');
			
			$error = array();
			
			if(isset($_POST['login']) && isset($_POST['passwd'])) {
						
				$info = array();
					
				$login = new Login($_POST['login'],$_POST['passwd']);
				$login->validate();
				$login->execute();
					
				$login->getInfo($info);
				$login->getErr($error);
					
				if(!empty($info)) {
					$_SESSION['id'] = $info['id'];
				}
					
				if(empty($error)) header('Location: '.GARRAY['MAIN_URL'].'track');
					
			}		
			
			$this->tpl = 'login.tpl';
			
			$this->assign('error',$error);
			
		}
		
		private function index() {
			
			$this->tpl = 'index2.tpl';
			
			if(isset($_SESSION['name'])) $this->assign('name',$_SESSION['name']);
		}
		
		private function home() {
			//$this->tpl = 'home.tpl';
		}
		
		private function register() {
			$error = array();
			$info = array();
			
			if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['repasswd'])) {
				
				$register = new Register($_POST['login'],$_POST['passwd'],$_POST['repasswd']);
				
				$register->execute();
				
				$register->validate();
				
				$register->execute();
				
				$register->getErr($error);
				
				$register->getInfo($info);
				
			}
			
			$this->tpl = 'register.tpl';
			
			$this->assign('error',$error);
			
			$this->assign('info',$info);
		}
		//--------
		
		//Fukcja wprowadzająca dane globalne do Smarty
		private function assignGARRAY() {
			foreach(GARRAY as $key => $g) {
				$this->assign($key,$g);
			}
		}
		//--------
		
		//Fukcja wybierająca akcje
		public function action() {
			
			$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'default';
			
			$this->checker->check($action);
				
			switch($action) {
			
				case 'track': $this->track(); break;
				case 'login': $this->login(); break;
				case 'logout': $this->logout(); break;
				case 'home': $this->home(); break;
				case 'register': $this->register(); break;
				case 'default':
				default: $this->index();
			
			}
				
			if($this->tpl != null) {
				
				$this->assignGARRAY();
				
				$this->display($this->tpl);
			}
		
		}
		//--------
		
		//Wyciąganie informacji z bazy danych (dla widoku)
		public function execute() {
			if(isset($_SESSION['id'])) {
				
				$result = 
					$this->mq->query('select login from users where user_id = '.$_SESSION['id']);
					
				if($result->num_rows == 1) {
					$row = $result->fetch_assoc();
				
					$_SESSION['name'] = $row['login'];
				}
				
			}
		}
		//--------
		
		
		
	}

?>