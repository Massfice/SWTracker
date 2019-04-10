<?php			
			
	$this->mq = new mysqli(
		DataBaseConnection::dbHost,
		DataBaseConnection::dbUser,
		DataBaseConnection::dbPasswd,
		DataBaseConnection::dbName);
		
?>