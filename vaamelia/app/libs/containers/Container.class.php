<?php

	namespace app\libs\containers;
	
	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;
	
	use app\libs\usage\VarySender;

	abstract class Container {
		
		private $paths;
		private $extend_string;
		
		private function initialize() {
			
			$rc = new \ReflectionClass($this);
			
			$this->extend_string = 'extends:';
			
			$names = array();
			
			while ($rc = $rc->getParentClass()) {
				
				$class_name = $rc->getName();
				$class_name = str_replace('app\\libs\\containers\\','',$class_name);
				if($class_name == 'Container') break;
				
				$names[] = $class_name;
			}
			
			for($i = 0; $i < count($names); $i++) {
				
				$this->paths[$i] = $names[count($names) - $i - 1];
				$this->extend_string = $this->extend_string.$i.'.tpl|';
			}
			
			$rc = new \ReflectionClass($this);
				
			$name = $rc->getName();
				
			$name = str_replace('app\\libs\\containers\\','',$name);
				
			$this->paths[] = $name;
			
			$this->extend_string = $this->extend_string.$i.'.tpl';
			
			if($this->extend_string == 'extend:0.tpl') $this->extend_string = '0.tpl';	
			
			$mini = ParamUtils::getFromGET('mini');
			if(isset($mini) && $mini != 'body') $this->extend_string = 'minis/'.$mini.'.tpl';				
		}
		
		private function assignVars() {
			
			App::getSmarty()->assign('user',SessionUtils::loadObject('user',TRUE));
				
			$cookie = isset($_SESSION['SWHelper_cookie']) ? $_SESSION['SWHelper_cookie'] : FALSE;
			App::getSmarty()->assign('autologin',$cookie);			
		}
		
		private function render() {
			App::getSmarty()->assign('container',$this->extend_string);
			App::getSmarty()->assign('paths',$this->paths);
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