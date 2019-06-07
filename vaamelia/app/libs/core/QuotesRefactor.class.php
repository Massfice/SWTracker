<?php

namespace app\libs\core;

class QuotesRefactor extends StringRefactor {
	
	private $prior;
	private $secondary;
	private $html_q;
	
	private $counter = -1;
	
	protected $specials = [
		'!' => 'escape',
		'{' => 'start_quote_refactor',
		'}' => 'end_quote_refactor'
	];
	
	private function quote_refactor() {
		switch($this->counter) {
			
			case 0: $this->char = $this->prior; break;
				
			case 1: $this->char = $this->secondary; break;
			
			case 2: $this->char = $this->html_q; break;
		}		
	}
	
	protected function start_quote_refactor() {
		$this->counter = $this->counter < 2 ? $this->counter + 1 : 2;
		$this->quote_refactor();	
	}
	
	protected function end_quote_refactor() {
		$this->quote_refactor();
		$this->counter = $this->counter > -1 ? $this->counter - 1 : 0;
	}

	public function __construct(string $mode = 'double') {
		switch($mode) {
			
			case 'single':
				$this->prior = "'";
				$this->secondary = '"';
				$this->html_q = '\\&#39';
				break;
				
			case 'double':
			default:
				$this->prior = '"';
				$this->secondary = "'";
				$this->html_q = '\\&#34';
				break;
		}
	}	
}

?>