<?php

	namespace app\libs\containers;
	
	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;
	
	use app\libs\usage\VarySender;

	abstract class Container {
		
		private $paths;
		private $extend_string;
		private $ajax_info;
		
		public static $enable_mini = TRUE;
		
		protected $mini_container;
		
		private function getHierarchy($class) {
			
			$rc = new \ReflectionClass($class);
			
			$my_name = $rc->getName();
			
			$my_name = str_replace('app\\libs\\containers\\','',$my_name);
			
			$names[] = $my_name;
			
			while ($rc = $rc->getParentClass()) {
				
				$class_name = $rc->getName();
				$class_name = str_replace('app\\libs\\containers\\','',$class_name);
				if($class_name == 'Container') break;
				$names[] = $class_name;
			}
			
			return $names;
		}
		
		private function getNewId($n1,$n2) {
			
			if(count($n1) > count($n2)) $array = $n1;
			else if(count($n2) > count($n1)) $array = $n2;
			else $array = $n1;
				
			for($i = 0; $i < count($array); $i++) {
				if((isset($n1[$i]) && isset($n2[$i]) && $n1[$i] != $n2[$i]) || !isset($n1[$i]) || !isset($n2[$i]))
					return $i;
			}
			
			return -1;
		}
		
		private function initialize() {
			
			$rc = new \ReflectionClass($this);
			$my_name = $rc->getName();
			
			$n1 = $this->getHierarchy($this);
			$prev = SessionUtils::load('prev');
			$n2 = $this->getHierarchy($prev);
			
			$n1 = \array_reverse($n1, FALSE);
			$n2 = \array_reverse($n2, FALSE);
			
			$id = $this->getNewId($n1,$n2);
			
			if($id == -1) $id = count($n1);
			
			for($i = $id; $i < count($n1); $i++) {
				$this->paths[$i] = $n1[$i];
			}
			
			$this->extend_string = $id.'.tpl';
			$this->ajax_info = $id;
			SessionUtils::store('prev',$my_name);
			
			$buff = ParamUtils::getFromGET('mini');
			$mini = $buff;
			
			if(self::$enable_mini && isset($mini) && $buff != 'body') {
				$this->extend_string = 'minis/'.$mini.'.tpl';
				$this->ajax_info = 4;
			}
		}
		
		private function assignVars() {
			
			App::getSmarty()->assign('user',SessionUtils::loadObject('user',TRUE));
				
			$cookie = isset($_SESSION['SWHelper_cookie']) ? $_SESSION['SWHelper_cookie'] : FALSE;
			App::getSmarty()->assign('autologin',$cookie);			
		}
		
		private function render() {
			App::getSmarty()->assign('container',$this->extend_string);
			App::getSmarty()->assign('paths',$this->paths);
			App::getSmarty()->assign('ajax_info',$this->ajax_info);
			VarySender::getInstance()->send();
			
			App::getSmarty()->display('general_container.tpl');
		}
		
		public function generateView() {
			$this->initialize();
			$this->assignVars();
			$this->render();
		}
	}

?>