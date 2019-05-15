{block name = 0}

	{include $paths[1]|cat:'/up.tpl'}
	<br><br>
	{block name = 1}
	<br><br>	
	{/block}
	<br><br>
	{include $paths[1]|cat:'/down.tpl'}
		
{/block}