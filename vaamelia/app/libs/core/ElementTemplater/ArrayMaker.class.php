<?php

namespace app\libs\core\ElementTemplater;

class ArrayMaker extends StandardMaker {
	
	public function make(Template $template, array $vars) : Element {
		
		for($i = 0; $i < count($vars); $i++) {
			if(is_array($vars[$i]))
				$arr[] = parent::make($template,$vars[$i])->getElement();
			else
				$arr[] = parent::make($template,$vars)->getElement();
		}
		
		return new Element($arr);
	}

}

?>