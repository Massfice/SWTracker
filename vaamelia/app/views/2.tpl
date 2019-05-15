{block name = 1}

	{include $paths[2]|cat:'/up.tpl'}
	<br><br>
	{block name = 2}
	<br><br>	
	{/block}
	<br><br>
	{include $paths[2]|cat:'/down.tpl'}
		
{/block}