<?php

namespace app\libs\core\ElementTemplater;

use core\App;

class ElementTemplater {
	
	public function register(string $name, ElementMaker $maker, Template $template, array $vars = array()) {
		$smarty_name = 'templater_'.$name;
		App::getSmarty()->assign($smarty_name,$maker->make($template,$vars)->getElement());
	}

}

?>