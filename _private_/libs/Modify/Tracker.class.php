<?php

	require_once dirname(__DIR__, 1).'/Interfaces/DataBaseConnection.interface.php';
	
	class Tracker implements DataBaseConnection {
		
		private $source;
		
		function __construct($url) {
			$source = file_get_contents($url);
			$source =  trim(preg_replace('/[\s]+/m','',$source));
			$source = preg_replace('/(&amp;sid=[a-zA-Z0-9]+)/m','',$source);
			
			$this->source = $source;
		}
		
	}

?>