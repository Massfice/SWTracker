<html>
	<head>
		<title>SW Tracker - Logowanie</title>
	</head>
	
	<body>
		<b>Zaloguj sie:</b> 
		<form action = '' method = 'POST'>
			Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
			<input type = 'submit' value = 'Login'>
			<input type = 'hidden' name = 'action' value = 'login'>
		</form>
		
		
		{if isset($error) && is_array($error) && count($error) > 0}
			
			<b>### BLEDY ###</b><br>
			
			{section name = 'errors' loop = $error}
				- {$error[errors]} <br>
			{/section}
			
		{/if}
		
	</body>
	
	
</html>