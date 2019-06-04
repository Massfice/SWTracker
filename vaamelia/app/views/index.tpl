<hmtl>

	<head>
	
		{include 'usage/head.tpl'}
		
		<script 'text/javascript' src = '{$conf->app_root}/js/core/on_exist.js'></script>
		<script 'text/javascript' src = '{$conf->app_root}/js/core/getVar.js'></script>
		<script 'text/javascript' src = '{$conf->app_root}/js/core/waiting.js'></script>
		
		<script type = 'text/javascript' src = '{$conf->app_root}/js/usage/funcs.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/usage/init.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/default_show_funcs.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/usage/show_funcs.js'></script>
		
		<script type = 'text/javascript'>
			var sid = '{$sid}';
			var full_url = '{$full_url}';
			var action = '{$action}';
		</script>
		
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/consts.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/route_settings.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/Route.class.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/usage/routing.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/exec.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/go.js'></script>
		<script type = 'text/javascript' src = '{$conf->app_root}/js/core/initialize.js'></script>
	
	</head>
	
	<body onload = 'initialize()'>
		{include 'usage/body_up.tpl'}
		<x id = '0'>
		
		
		
		</x>
		{include 'usage/body_down.tpl'}
	</body>

</html>