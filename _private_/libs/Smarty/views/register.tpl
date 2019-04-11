<html>
	<head>
		<title>SW Tracker - Logowanie</title>
		
	</head>
	
	<body>
		{if !isset($info) || !is_array($info) || !(count($info) > 0)}
		<form action = '' method = 'POST'>
			<b>Zarejestruj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> Retype Password: <input type = 'password' name = 'repasswd'> 
			<input type = 'submit' value = 'Register'>
			<input type = 'hidden' name = 'action' value = 'register'>
		</form>
		{/if}
		
		
		{if isset($error) && is_array($error) && count($error) > 0}
			
			<b>### BLEDY ###</b><br>
			
			{section name = 'errors' loop = $error}
				- {$error[errors]} <br>
			{/section}
			
		{/if}
		
		{if isset($info) && is_array($info) && count($info) > 0}
			{section name = 'infos' loop = $info}
				<b>{$info[infos]}</b> <br>
			{/section}
			<br><a href = 'http://localhost/myProjects/SWTracker/'>Powrot do strony glownej</a>
		{/if}
		
	</body>
	
	
</html>