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
	
	final public function param($name,$source,$key) {
		if(!isset($key)) $key = $name;
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
			
			$key = $param->key;
			
			$re = '/^(CLEANURL|REQUEST|GET|POST|COOKIES)$/m';
			if(\preg_match($re, $param->source)) $method = $method.'From'.$param->source;
			else $key = $param->source;
				
			$v = new Validator();
			
			$this->params[$param->name] = $v->$method($key,$param->paramConfig);
			
			if(isset($this->params['id'])) echo $this->params[$param->name];
			else 'Nie istnieje';
			
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