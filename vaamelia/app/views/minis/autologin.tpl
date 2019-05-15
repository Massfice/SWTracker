<x id = 'autologin'>
<b>Autologowanie</b> 
{if !isset($autologin) || !$autologin}
<b>wyłączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_on")'>Włącz</a> 
{else}
<b>włączone:</b> <a href = 'javascript:void(0);' onclick ='go("autologin_off")'>Wyłącz</a> 
{/if} | 
</x>