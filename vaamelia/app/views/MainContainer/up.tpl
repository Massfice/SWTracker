<center>
	<x id = 'user_info'>{if isset($user)}<b>Zalogowany/a jako: {$user['name']}</b> (ID: {$user['id']})<br><br>{/if}</x>
	<a href ='javascript:void(0);' onclick ='go("hello_show")'>Hello</a> | 
	<x id = 'user_link'>{if !isset($user)}<a href ='javascript:void(0);' onclick ='go("login_show")'>Wejdź</a>
	{else}<a href = 'javascript:void(0);' onclick ='go("home_show")'>Panel Użytkownika</a>{/if}</x>
</center>