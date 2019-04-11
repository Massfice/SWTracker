<html>
	<head>
		<title>SW Tracker</title>
	</head>
	
	<body>
		<center>
			<b><font size="6">SW Tracker</font></b><br><br>
			{if isset($tpl[0]['params']['name'])}
				Zalogowany jako: <b>{$tpl[0]['params']['name']}</b><br>.
			{else}
				{if $tpl[0]['params']['b']}
					{include '0/1/login.tpl'}
				{/if}
			{/if}
			-----------------------------------------------------------------------------------------------------<br>
		
			<br>
			<br>
			{include $tpl[1]['file']}
			<br>
			<br>
		
			-----------------------------------------------------------------------------------------------------<br>
			Created by {$AUTHOR}.
		</center>
	</body>
</html>