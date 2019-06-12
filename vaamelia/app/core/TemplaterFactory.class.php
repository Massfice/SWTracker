<?php

namespace app\core;

class TemplaterFactory {

	public static function createTemplater() : \app\core\ElementTemplater\ElementTemplater {
		return new \app\core\ElementTemplater\ElementTemplater();
	}
	
	public static function createMaker(string $name) : \app\core\ElementTemplater\Makers\ElementMaker {
		
		$name = '\\app\\core\\ElementTemplater\\Makers\\'.$name;
		
		return new $name();
		
	}
	
	public static function createTemplate(string $name) : \app\core\ElementTemplater\Templates\ElementTemplate {
		
		$name = '\\app\\core\\ElementTemplater\\Templates\\'.$name;
		
		return new $name();
		
	}
	
	public static function createArrayMaker(string $name) : \app\core\ElementTemplater\Makers\ArrayMaker {
		
		$name = '\\app\\core\\ElementTemplater\\Makers\\'.$name;
		
		return new \app\core\ElementTemplater\Makers\ArrayMaker(new $name());
		
	}
	
	public static function createSmartyTemplate(string $smarty_file) : \app\core\ElementTemplater\Templates\SmartyTemplate {
		
		return new \app\core\ElementTemplater\Templates\SmartyTemplate($smarty_file);
		
	}

}

?>