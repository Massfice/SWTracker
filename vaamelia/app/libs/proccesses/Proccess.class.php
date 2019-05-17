<?php

namespace app\libs\proccesses;

use core\Validator;

abstract class Proccess {
	
	protected $params;
	
	protected $unsaved_param;
	
	abstract protected function validate();
	abstract protected function proccess();
	
	protected function areParamsSet(...$rparams) {
		
		$b = TRUE;
		
		foreach($rparams as $r) {
			
			if(!isset($this->params[$r])) {
				$b = FALSE;
				break;
			}
		}
		
		return $b;
	}
	
	final public function putVar($key, &$var) {
		if(isset($var)) $this->params[$key] = $var;
		
	}
	
	final public function param($name,$source,$key = '') {
		if($key =='') $key = $name;
		if(!isset($this->unsaved_param)) {
			$this->unsaved_param = new Param($name,$source,$this,$key);
			return $this->unsaved_param;
		} else {
			trigger_error('You have unsaved param. Save it and try again.', E_USER_ERROR);
		}
	}
	
	final public function saveParam($param) {
		if(!isset($this->params[$param->name])) {
			
			$method = 'validate';
			$buff = $method;
			$key = $param->key;
			
			$str = \strtoupper($param->source);
			$re = '/^(CLEANURL|REQUEST|GET|POST|COOKIES)$/m';
			if(\preg_match($re, $str)) {
				$buff.='From';
				$buff.=$str;
				$method = $buff;
				
			}
			else $key = $param->source;
			$v = new Validator();
			
			$this->params[$param->name] = $v->$method($key,$param->paramConfig);
			
			unset($this->unsaved_param);
			
		} else {
			trigger_error('This param already exists. Change name.', E_USER_ERROR);
		}
	}
	
	final public function make($negate = FALSE) {
		
		$validation = $this->validate();
		
		if($negate) $validation = !$validation;
		
		if($validation) $this->proccess();
		
		return $validation;
		
		
	}
	
}

?>