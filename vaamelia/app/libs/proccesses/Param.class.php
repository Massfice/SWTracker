<?php

namespace app\libs\proccesses;

class Param {
	
	private $proccess;
	
	public $source;
	public $key;
	public $paramConfig;
	public $name;
	
	private function setDefault() {
		$this->setTrim(TRUE)->setRequired(TRUE)->setRequiredMessage('')->setValidatorMessage('');
	}
	
	public function setEscape($escape) {
		$this->paramConfig['escape'] = !$escape ? FALSE : ($escape != 'script' ? TRUE : 'script');
		return $this;
	}
	
	public function setTrim($trim) {
		$this->paramConfig['trim'] = $trim ? TRUE : FALSE;
		return $this;
	}
	
	public function setRequired($set) {
		if($set) $this->paramConfig['required'] = TRUE;
		else unset($this->paramConfig['required']);
		return $this;
	}
	
	public function setRequiredMessage($required_message) {
		$this->paramConfig['required_message'] = $required_message;
		return $this;
	}
	
	public function setMinLength($min_length) {
		$this->paramConfig['min_length'] = $min_length;
		return $this;
	}
	
	public function setMaxLength($max_length) {
		$this->paramConfig['max_length'] = $max_length;
		return $this;
	}
	
	public function setEmail($set) {
		if($set) $this->paramConfig['email'] = TRUE;
		else unset($this->paramConfig['email']);
		return $this;
	}
	
	public function setUrl($set) {
		if($set) $this->paramConfig['url'] = TRUE;
		else unset($this->paramConfig['url']);
		return $this;
	}
	
	public function setNumeric($set) {
		if($set) $this->paramConfig['numeric'] = TRUE;
		else unset($this->paramConfig['numeric']);
		return $this;
	}
	
	public function setInt($set) {
		if($set) $this->paramConfig['int'] = TRUE;
		else unset($this->paramConfig['int']);
		return $this;
	}
	
	public function setFloat($set) {
		if($set) $this->paramConfig['float'] = TRUE;
		else unset($this->paramConfig['float']);
		return $this;
	}
	
	public function setDateFormat($date_format) {
		$this->paramConfig['date_format'] = $date_format;
		return $this;
	}
	
	public function setRegexp($regexp) {
		$this->paramConfig['regexp'] = $regexp;
		return $this;
	}
	
	public function setValidatorMessage($validator_message) {
		$this->paramConfig['validator_message'] = $validator_message;
		return $this;
	}
	
	public function setMessageType($message_type) {
		$this->paramConfig['message_type'] = 
		($message_type == 'error' || $message_type == 'warning' || $message_type == 'info') ?
		$message_type : 'error';
		return $this;
	}
	
	public function save() {
		$this->proccess->saveParam($this);
	}
	
	public function __construct($name,$source,$proccess,$key) {
		$this->key = $key;
		$this->proccess = $proccess;
		$this->source = $source;
		$this->name = $name;
		
		$this->setDefault();
	}
	
}

?>