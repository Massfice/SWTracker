<html>
	<head>
		<title>SW Tracker</title>
	</head>
	
	<body>
		{if isset($name)}
			Witamy {$name}, przejdz do swojej bazy: <a href = '{$MAIN_URL}track'>klik</a>
		{else}
			{include 'login.tpl'}
		{/if}
	</body>
	
</html>