<center>
	<b>Autologowanie</b> 
{if !isset($autologin)}
<b>wyłączone:</b> <a href = '{$conf->action_root}autologin_on'>Włącz</a>
{else}
<b>włączone:</b> <a href = '{$conf->action_root}autologin_off'>Wyłącz</a>
{/if} |
<a href = '{$conf->action_root}logout'>Wyloguj się</a>
</center>