<?php

namespace app\core\ArrayRefactor;

class ArrayRefactor {
	
	public static function isInside($value, array $array) : bool {
		foreach($array as $a) {
			if($value === $a) return true;
		}
		
		return false;
	}
	
	private static function singleRefactor(
		\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method,
		array $array,
		array $args
	) : array {

		return $method->refactor($array,$args);
		
	}
	
	private static function multiRefactor(
		\app\core\ArrayRefactor\Methods\ArrayRefactorMethod $method,
		array $array,
		array $args,
		array $spd,
		bool $reverse
	) : array {
		
		foreach($array as $key => $item) {
			$b = self::isInside($key,$spd);
			if(($b && !$reverse) || (!$b && $reverse))
				$r_array[$key] = self::singleRefactor($method,$item,$args);
			else
				$r_array[$key] = $item;
		}
		
		return $r_array;
		
	}
	
	public static function refactor(
		string $method,
		array $array,
		array $args = [],
		string $mode = 'single',
		array $spd = [],
		bool $reverse = true
	) : array {
		
		$class_name = '\\app\\core\\ArrayRefactor\\Methods\\'.$method;
		
		$method = new $class_name();
		
		switch($mode) {
			
			case 'multi': return self::multiRefactor($method,$array,$args,$spd,$reverse);
			case 'single': return self::singleRefactor($method,$array,$args);
			default: return $array;
			
		}
	}

}

?>