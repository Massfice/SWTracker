<?php

namespace app\core\ElementTemplater\Makers;

use app\core\ElementTemplater\Templates\ElementTemplate;

class ArrayMaker implements ElementMaker {
	
	private $maker;
	
	public function __construct(ElementMaker $maker) {
		$this->maker = $maker;
	}
	
	public function make(ElementTemplate $template, array $vars) : Element {
		
		/*$keys = array_keys($vars);
		
		for($i = 0; $i < count($keys); $i++) {
			if(is_array($vars[$keys[$i]]))
				$e = parent::make($template,$vars[$keys[$i]])->getElement();
			else {
				$e = parent::make($template,$vars)->getElement();
				break;
			}
			if(isset($this->names[$i])) $arr[$this->names[$i]] = $e;
			else $arr[$keys[$i]] = $e;
		}*/
		
		//if(!$this->isTwoDimensional($vars)) \trigger_error('Array \'vars\' isn\'t two dimensional array.');
		
		foreach($vars as $key => $item){
			$arr[$key] = $this->maker->make($template,$item)->getElement();
		}
		
		return new Element($arr);
	}

}

?>