<?php

namespace app\core\ElementTemplater\Makers;

use app\core\ElementTemplater\Templates\ElementTemplate;

interface ElementMaker {
	
	public function make(ElementTemplate $template, array $vars) : Element;

}

?>