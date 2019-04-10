<html>
	<head>
		<title>SW Tracker - Logowanie</title>
	</head>
	
	<body>
		<form action = '' method = 'POST'>
			Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
			<input type = 'submit' value = 'Login'>
			<input type = 'hidden' name = 'action' value = 'login'>
		</form>
		
		<?php
		
			if(isset($error) && !empty($error)) {	

				echo '<b>### BLEDY ###</b><br><br>';

				foreach($error as $e) {
					echo '- '.$e.'<br>';
				}
			}
		
		?>
		
	</body>
	
	
</html>