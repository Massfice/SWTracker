<?php

	namespace app\libs\containers;

	use core\App;
	use core\ParamUtils;
	use core\SessionUtils;
	
	use app\libs\containers\core\GeneralContainer;
	
	use app\libs\core\ElementTemplater\ControlTemplate;
	use app\libs\core\ElementTemplater\ArrayMaker;
	use app\libs\core\ElementTemplater\ElementTemplater;
	
	use app\core\TemplaterFactory;
	use app\core\ArrayRefactor\ArrayRefactor;
	use app\core\ArrayRefactory;

	abstract class Container extends GeneralContainer {
		
		protected function init() {
			
			//$templater = new ElementTemplater();
			$templater = TemplaterFactory::createTemplater();
			//$maker = new ArrayMaker();
			$maker = TemplaterFactory::createArrayMaker('SmartyMaker');
			//$maker->setNames('b');
			//$template = new ControlTemplate('button');
			//$template = TemplaterFactory::createTemplate('SmartyUrlTemplate');
			$template = TemplaterFactory::createSmartyTemplate('url_template.tpl');
			
			$arr = [
				'a' => ['login_show','Logowanie'],
				'b' => ['register_show','Rejestracja'],
				['hello_show','Hello']
			];
			
			/*$arr = ArrayRefactor::refactor('RenameKeys',$arr,[
				0 => 'index',
				1 => 'name'
			],'multi');*/
			
			$refactor = ArrayRefactory::createRefactor();
			$mode = ArrayRefactory::createMode('Multi');
			$method = ArrayRefactory::createMethod('RenameKeys');
			
			$arr = $refactor->refactor($mode,$method,$arr,[
				0 => 'index',
				1 => 'name'
			]);
			
			$templater->register('babcia',$maker,$template,$arr);
			
			App::getSmarty()->assign('user',SessionUtils::loadObject('user',TRUE));
				
			$cookie = isset($_SESSION['SWHelper_cookie']) ? $_SESSION['SWHelper_cookie'] : FALSE;
			App::getSmarty()->assign('autologin',$cookie);
			
		}
		
	}

?>