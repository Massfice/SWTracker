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
			
			$this->tpl = array(
									0 => array(
													'file' => '0/default_0.tpl',
													'params' => array(
																		'name' => isset($_SESSION['name']) ? $_SESSION['name'] : null,
																		//'b' => isset($_REQUEST['action']) ? ($_REQUEST['action'] != 'login') : TRUE
																		'b' => TRUE
																	)
												),
												
									1 => array(
													'file' => '0/1/default_1.tpl',
													'params' => array()
												),
												
									2 => array(
													'file' => '0/1/2/default_2.tpl',
													'params' => array()
												)
								);
			
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
				
			$this->tpl[1]['file'] = '0/1/home.tpl';
			$this->tpl[2]['file'] = '0/1/2/track.tpl';
			$this->tpl[2]['params']['info'] = $info;
			$this->tpl[2]['params']['error'] = $error;
		}
		
		private function login() {
			
			if(isset($_SESSION['id'])) header('Location: '.GARRAY['MAIN_URL'].'home');
			
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
					
				if(empty($error)) header('Location: '.GARRAY['MAIN_URL'].'home');
					
			}
			
			$this->tpl[0]['params']['b'] = FALSE;
			$this->tpl[1]['file'] = '0/1/login.tpl';
			$this->tpl[1]['params']['error'] = $error;
			
		}
		
		private function index() {
			
		}
		
		private function home() {
			$this->tpl[1]['file'] = '0/1/home.tpl';
		}
		
		private function register() {
			
			if(isset($_SESSION['id'])) header('Location: '.GARRAY['MAIN_URL'].'home');
			
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
			
			$this->tpl[0]['params']['b'] = FALSE;
			$this->tpl[1]['file'] = '0/1/register.tpl';
			$this->tpl[1]['params']['error'] = $error;
			$this->tpl[1]['params']['info'] = $info;
			
			
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

			if(isset($_SESSION['name'])) $this->tpl[0]['params']['name'] = $_SESSION['name'];
			
			switch($action) {
			
				case 'track': $this->track(); break; //LEVEL 2
				case 'login': $this->login(); break; //LEVEL 1
				case 'logout': $this->logout(); break; //--
				case 'home': $this->home(); break; //--
				case 'register': $this->register(); break; //LEVEL 1
				case 'default':
				default: $this->index(); //LEVEL 1
			
			}
				
				$this->assignGARRAY();
				
				$this->assign('tpl',$this->tpl);
				
				$this->display('index.tpl');
		
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