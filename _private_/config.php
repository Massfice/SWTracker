<?php
	
	define('ROOT',dirname(__FILE__).'/');
	
	define('GARRAY',array(
							'MAIN_URL' => str_replace('index.php','',$_SERVER['PHP_SELF']),
							'AUTHOR' => 'Iwaru'
						)
	);
	
	define('MQ',ROOT.'mq.php');
	
	define('SMARTY', ROOT.'libs/Smarty/');
	
?>