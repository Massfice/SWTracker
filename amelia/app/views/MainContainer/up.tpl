<center>
	{if isset($user)}<b>Zalogowany/a jako: {$user['name']}</b> (ID: {$user['id']})<br><br>{/if}
	<a href = '{$conf->action_root}hello'>Hello</a> | 
	{if !isset($l)}<a href = '{$conf->action_root}login'>Wejdź</a>
	{else}<a href = '{$conf->action_root}home'>Panel Użytkownika</a>{/if}
</center>