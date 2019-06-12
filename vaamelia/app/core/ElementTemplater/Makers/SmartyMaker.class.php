<?php

namespace app\core\ElementTemplater\Makers;

use app\core\ElementTemplater\Templates\ElementTemplate;
use core\App;

class SmartyMaker implements ElementMaker {
	
	public function make(ElementTemplate $template, array $vars) : Element {
		
		$template = $template->getTemplateInfo()->getTemplate();
		
		foreach($vars as $key => $item) {
			App::getSmarty()->assign($key, $item);
		}
		
		$template = App::getSmarty()->fetch($template);
		
		foreach($vars as $key => $item) {
			App::getSmarty()->clearAssign($key);
		}
		
		return new Element($template);
	}

}

?>