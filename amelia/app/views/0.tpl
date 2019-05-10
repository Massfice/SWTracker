<hmtl>

	<head>
	
		<title>SW Helper</title>
		
		{literal}
		<script type='text/javascript'>
		
			function redirectMessage(message,redirect) {
				window.alert(message);
				window.location.href = redirect;
			}
		
		</script>
		{/literal}
	
	</head>
	
	<body>
		
		{include $paths[0]|cat:'/up.tpl'}
		<br><br>
		{block name = 0}
		<br><br>	
		{/block}
		<br><br>
		{include $paths[0]|cat:'/down.tpl'}
		
			{if isset($funcs) && is_array($funcs)}
			<script type='text/javascript'>
				{foreach $funcs as $f}
					{$f}
				{/foreach}
			</script>
			{/if}
		
		
	</body>

</html>