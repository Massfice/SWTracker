<?php

	interface DataBaseConnection {
		
		const dbHost = 'localhost';
		const dbUser = 'root';
		const dbPasswd = '';
		const dbName = 'swtrackerbase';
		
		public function execute();
	}

?>