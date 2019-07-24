<?php

namespace app\core\ArrayRefactor\Selectors;

class Specified extends Blank {
	
	public function set(array $selected) {
		$this->selected = $selected;
	}
	
}

?>