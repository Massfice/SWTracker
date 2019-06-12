<?php

namespace app\core\ElementTemplater;

use app\core\ElementTemplater\Templates\ElementTemplate;
use app\core\ElementTemplater\Makers\ElementMaker;

use core\App;

class ElementTemplater {
	
	public function register(string $name, ElementMaker $maker, ElementTemplate $template, array $vars = array()) {
		$smarty_name = 'templater_'.$name;
		App::getSmarty()->assign($smarty_name,$maker->make($template,$vars)->getElement());
	}

}

?>