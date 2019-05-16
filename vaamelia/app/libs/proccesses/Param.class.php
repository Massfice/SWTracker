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
	
	public function setRequired() {
		$this->paramConfig['required'] = TRUE;
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
	
	public function setEmail() {
		$this->paramConfig['email'] = TRUE;
		return $this;
	}
	
	public function setUrl() {
		$this->paramConfig['url'] = TRUE;
		return $this;
	}
	
	public function setNumeric() {
		$this->paramConfig['numeric'] = TRUE;
		return $this;
	}
	
	public function setInt() {
		$this->paramConfig['int'] = TRUE;
		return $this;
	}
	
	public function setFloat() {
		$this->paramConfig['float'] = TRUE;
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
		$this->$key = $key;
		$this->proccess = $proccess;
		$this->source = \strtoupper($source);
		$this->name = $name;
		
		$this->setDefault();
	}
	
}

?>