<center>
	{if isset($user)}<b>Zalogowany/a jako: {$user['name']}</b> (ID: {$user['id']})<br><br>{/if}
	<a href ='javascript:void(0);' onclick ='go("hello_show")'>Hello</a> | 
	{if !isset($user)}<a href ='javascript:void(0);' onclick ='go("login_show")'>Wejdź</a>
	{else}<a href = 'javascript:void(0);' onclick ='go("home_show")'>Panel Użytkownika</a>{/if}
</center>