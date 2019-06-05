<?php

namespace app\libs\core\ElementTemplater;

class StandardMaker implements ElementMaker {
	
	public function make(Template $template, array $vars) : Element {
		
		$order = $template->getTemplateInfo()->getOrder();
		$template = $template->getTemplateInfo()->getTemplate();
		
		$vars_keys = \array_keys($vars);
		
		for($i = 0; $i < count($order); $i++) {
			if(!isset($vars_keys[$i])) $template = \str_replace($order[$i],'',$template);
			else $template = \str_replace($order[$i],$vars[$vars_keys[$i]],$template);
		}
		
		return new Element($template);
	}

}

?>