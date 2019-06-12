<?php

namespace app\core\ElementTemplater\Templates;

class TemplateInfo {
	
	private $template;
	private $order;
	
	public function __construct(string $template, string ...$order) {
		$this->template = $template;
		$this->order = $order;
	}
	
	public function getTemplate() : string {
		return $this->template;
	}
	
	public function getOrder() : array {
		return $this->order;
	}

}

?>