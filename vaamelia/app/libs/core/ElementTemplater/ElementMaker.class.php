<?php

namespace app\libs\core\ElementTemplater;

interface ElementMaker {
	
	public function make(Template $template, array $vars) : Element;

}

?>