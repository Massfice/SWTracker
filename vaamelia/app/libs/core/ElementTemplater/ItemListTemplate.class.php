<?php

namespace app\libs\core\ElementTemplater;

class ItemListTemplate implements Template {
	
	private $type;
	
	public function __construct(string $type) {
		$this->type = $type;
	}
	
	public function getTemplateInfo() : TemplateInfo {
		
		switch($this->type) {
			
			default:
			
			case 'url':
				$template = '<a href = "javascript:void(0);" onclick = "go(\'login_show\')">Login__name__Haslo__passwd_</a>'; break;
				
			case 'submit':
				$template = '<input type = "submit" value = "Login__name__Haslo__passwd_" onclick = "go(\'login_show\')">'; break;
			
			case 'button':
				$template = '<input type = "button" value = "Login__name__Haslo__passwd_" onclick = "go(\'login_show\')">'; break;
			
		}
		
		return new TemplateInfo($template,'_name_','_passwd_');
	}

}

//Do przerobienia!

?>