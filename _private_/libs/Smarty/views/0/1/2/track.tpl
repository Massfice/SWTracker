<form action = '' method = 'POST'>
	Od: <input type = 'text' name = 'from'> Do: <input type = 'text' name = 'to'><br>
	Rozliczam: <input type = 'text' name = 'nicks'> 
	<input type = 'submit' value = 'Proccess'>
	<input type = 'hidden' name = 'action' value = 'track'>
</form>
		
{if isset($tpl[2]['params']['error']) && is_array($tpl[2]['params']['error']) && count($tpl[2]['params']['error']) > 0}
			
	<b>### BLEDY ###</b><br>
			
	{section name = 'errors' loop = $tpl[2]['params']['error']}
		- {$tpl[2]['params']['error'][errors]} <br>
	{/section}
			
{/if}
		
{if isset($tpl[2]['params']['info']) && is_array($tpl[2]['params']['info']) && count($tpl[2]['params']['info']) > 0}
			
	{section name = 'infos' loop = $tpl[2]['params']['info']}
		- {$tpl[2]['params']['info'][infos].author}: <a href = '{$tpl[2]['params']['info'][infos].link}' target = '_blank'>{$tpl[2]['params']['info'][infos].link}</a><br>
	{/section}
			
{/if}
<br>
<br>