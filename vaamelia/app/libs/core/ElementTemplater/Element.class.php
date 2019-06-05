<?php

namespace app\libs\core\ElementTemplater;

class Element {
	
	private $element;
	
	public function __construct(&$element) {
		$this->element = $element;
	}
	
	public function getElement() {
		return $this->element;
	}

}

?>