<?php

namespace app\libs\core\ElementTemplater;

class ArrayMaker extends StandartMaker {
	
	private $names = array();
	
	public function setNames(string ...$names) {
		$this->names = $names;
	}
	
	public function make(Template $template, array $vars) : Element {
		
		$keys = array_keys($vars);
		
		for($i = 0; $i < count($keys); $i++) {
			if(is_array($vars[$keys[$i]]))
				$e = parent::make($template,$vars[$keys[$i]])->getElement();
			else {
				$e = parent::make($template,$vars)->getElement();
				break;
			}
			if(isset($this->names[$i])) $arr[$this->names[$i]] = $e;
			else $arr[$keys[$i]] = $e;
		}
		
		return new Element($arr);
	}

}

?>