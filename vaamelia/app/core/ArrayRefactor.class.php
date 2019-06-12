<?php

namespace app\core;

class ArrayRefactor {

	public static function replaceKeys(array $arr, array $keys) : array {

		foreach($arr as $key => $item) {
			if(isset($keys[$key]) && $keys[$key] != null && is_string($keys[$key]) && $keys[$key] != '')
				$r_arr[$keys[$key]] = $item;
			else $r_arr[$key] = $item;
		}
		
		return $r_arr;
		
	}
	
	public static function foreachReplaceKeys(array $arr, array $keys) : array {
		
		foreach($arr as $key => $item) {
			$r_arr[$key] = self::replaceKeys($item,$keys);
		}
		
		return $r_arr;
		
	}

}

?>