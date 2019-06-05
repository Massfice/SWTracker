<?php

namespace app\libs\core;

abstract class Singleton {
	
	protected static $instances;
	
	protected function __construct() {}
	
	public static function getInstance() {
		
       self::$instances = array();

        $calledClass = get_called_class();

        if (!isset(self::$instances[$calledClass]))
        {
            self::$instances[$calledClass] = new $calledClass();
        }

        return self::$instances[$calledClass];
	}
	
}

?>