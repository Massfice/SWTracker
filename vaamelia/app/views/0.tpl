{include $paths[0]|cat:'/up.tpl'}
<br><br>
{block name = 0}
<br><br>	
{/block}
<br><br>
{include $paths[0]|cat:'/down.tpl'}

<input type = 'hidden' value ='{if isset($vars)}{$vars}{/if}' id = 'data' style = 'display: inline;'>