<?php

namespace app\core\ElementTemplater\Makers;

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