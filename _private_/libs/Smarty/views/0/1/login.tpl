<form action = '' method = 'POST'>
	<b>Zaloguj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> 
	<input type = 'submit' value = 'Login'>
	<input type = 'hidden' name = 'action' value = 'login'> 
	Nie masz jeszcze konta? <a href = '{$MAIN_URL}register'>Zarejestruj sie</a>
</form>
		
		
{if isset($tpl[1]['params']['error']) && is_array($tpl[1]['params']['error']) && count($tpl[1]['params']['error']) > 0}
			
	<b>### BLEDY ###</b><br>
			
	{section name = 'errors' loop = $tpl[1]['params']['error']}
		- {$tpl[1]['params']['error'][errors]} <br>
	{/section}
			
{/if}