<html>

	<head>
		<title>SW Tracker - Baza</title>
	</head>

	<body>
	
		<form action = '' method = 'POST'>
			Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
			Rozliczam: <input type = 'text' name = 'nicks'> 
			<input type = 'submit' value = 'Proccess'>
			<input type = 'hidden' name = 'action' value = 'track'>
		</form>
		
		{if isset($error) && is_array($error) && count($error) > 0}
			
			<b>### BLEDY ###</b><br>
			
			{section name = 'errors' loop = $error}
				- {$error[errors]} <br>
			{/section}
			
		{/if}
		
		{if isset($info) && is_array($info) && count($info) > 0}
			
			{section name = 'infos' loop = $info}
				- {$info[infos].author}: <a href = '{$info[infos].link}' target = '_blank'>{$info[infos].link}</a><br>
			{/section}
			
		{/if}
		<br>
		<br>
		<a href = 'http://localhost/myProjects/SWTracker/logout'>Wyloguj sie</a>

	</body>
	
</html>