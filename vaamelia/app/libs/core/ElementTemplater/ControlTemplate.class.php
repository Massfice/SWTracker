<?php

namespace app\libs\core\ElementTemplater;

class ControlTemplate implements Template {
	
	private $type;
	
	public function __construct(string $type) {
		$this->type = $type;
	}
	
	public function getTemplateInfo() : TemplateInfo {
		
		switch($this->type) {
			
			default:
			
			case 'url':
				$template = '<a href = "javascript:void(0);" onclick = "go(\'_index_\',\'_addon_\')">_name_</a>'; break;
				
			case 'submit':
				$template = '<input type = "submit" value = "_name_" onclick = "go(\'_index_\',\'_addon_\')">'; break;
			
			case 'button':
				$template = '<input type = "button" value = "_name_" onclick = "go(\'_index_\',\'_addon_\')">'; break;
			
		}
		
		return new TemplateInfo($template,'_index_','_name_','_addon_');
	}

}

?>