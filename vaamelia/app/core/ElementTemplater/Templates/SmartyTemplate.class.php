<?php

namespace app\core\ElementTemplater\Templates;

use core\App;

class SmartyTemplate implements ElementTemplate {
	
	private $smarty_file;
	
	public function __construct(string $smarty_file) {
		
		$smarty_file = 'element_templater_templates/'.$smarty_file;
		
		App::getSmarty()->fetch($smarty_file);
		
		$this->smarty_file = $smarty_file;
		
	}

	public function getTemplateInfo() : TemplateInfo {
		
		return new TemplateInfo($this->smarty_file);
		
	}

}

?>