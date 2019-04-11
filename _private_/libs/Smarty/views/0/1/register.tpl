{if !isset($tpl[1]['params']['info']) || !is_array($tpl[1]['params']['info']) || !(count($tpl[1]['params']['info']) > 0)}
<form action = '' method = 'POST'>
	<b>Zarejestruj sie:</b>  Login: <input type = 'text' name = 'login'> Password: <input type = 'password' name = 'passwd'> Retype Password: <input type = 'password' name = 'repasswd'> 
	<input type = 'submit' value = 'Register'>
	<input type = 'hidden' name = 'action' value = 'register'> 
	Masz konto? <a href = '{$MAIN_URL}login'>Zaloguj sie</a>
</form>
{/if}
		
		
{if isset($tpl[1]['params']['error']) && is_array($tpl[1]['params']['error']) && count($tpl[1]['params']['error']) > 0}
			
	<b>### BLEDY ###</b><br>
			
	{section name = 'errors' loop = $tpl[1]['params']['error']}
		- {$tpl[1]['params']['error'][errors]} <br>
	{/section}
			
{/if}
		
{if isset($tpl[1]['params']['info']) && is_array($tpl[1]['params']['info']) && count($tpl[1]['params']['info']) > 0}
	{section name = 'infos' loop = $tpl[1]['params']['info']}
		<b>{$tpl[1]['params']['info'][infos]}</b> <br>
	{/section}
	<br><a href = '{$MAIN_URL}'>Powrot do strony glownej</a>
{/if}