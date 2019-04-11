<html>
	<head>
		<title>SW Tracker - Logowanie</title>
	</head>
	
	<body onload="">
		<form action = '' method = 'POST'>
			<b>Zaloguj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
			<input type = 'submit' value = 'Login'>
			<input type = 'hidden' name = 'action' value = 'login'> 
			Nie masz jeszcze konta? <a href = '{$MAIN_URL}register'>Zarejestruj sie</a>
		</form>
		
		
		{if isset($error) && is_array($error) && count($error) > 0}
			
			<b>### BLEDY ###</b><br>
			
			{section name = 'errors' loop = $error}
				- {$error[errors]} <br>
			{/section}
			
		{/if}
		
	</body>
	
	
</html>