<hmtl>

	<head>
	
		<title>SW Helper</title>
	
	</head>
	
	<body onload = 'initialize()'>
		<x id = 'body'>
		
		
		
		</x>
	</body>
	

	<script>		
		
	var sid = '{$sid}';
	var full_url = '{$full_url}';
	var routes = [];
	var default_index;
	var action = '{$action}_show';
	
	{literal}
	
	function login() {
		if(getVar('login_successfull')) alert('Pomyślnie zalogowano.');
	}
	
	function register() {
		if(getVar('register_successfull')) alert('Rejestracja zakończona pomyślnie. Zostałeś/aś zalogowany/a.');
	}
	
	function do_magic(response,func,element,buff = '',i = 0,show = true) {
		setTimeout(function(response,func,element,buff,i,show) {
			var c = response.charAt(i);
			buff = buff + c;
			
			if(c == '<') show = false;
			if(c == '>') show = true;
			
			if(show) document.getElementById(element).outerHTML = buff;
			
			if(i == response.length - 1) {
				try { func(); } catch(err) {}			
			}
			
			i++;
			if(i < response.length) do_magic(response,func,element,buff,i,show);
		}.bind(this,response).bind(this,func).bind(this,element).bind(this,buff).bind(this,i).bind(this,show), 1);		
	}
	
	function alwaysT() {
		b = true;
		return true;
	}
			
	function getVar(key) {
		var data = document.getElementById('data').value;
		if(data != '')
		{
			data = JSON.parse(data);
				
			if(key in data) {
				return data[key];
			} else {
				return false;
			}
				
		} else {
			return false;
		}
	}
	
	function exec(url,user_function,validate_function,id_element,id_form) 
	{
		
		var b;
		try { b = validate_function(); } catch(err) { b = false; }
		
		if(b) {
			var formData = '';
			if(id_form) {
				var form = document.getElementById(id_form);
				var formData = new FormData(form); 
			}
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				
					//if(id_element) document.getElementById(id_element).innerHTML = xmlHttp.responseText;
					
					//try { user_function(); } catch(err) {}
					
					if(id_element) do_magic(xmlHttp.responseText,user_function,id_element);
				}
			}
			xmlHttp.open("POST", url, true); 
			xmlHttp.send(formData);
		}
	}
	
	function go(index) {
		
		if('data' in window) document.getElementById('data').outerHTML = '';
		
		if(!(index in routes)) {
			
			if(default_index in routes) {
				index = default_index
			} else {
				index = '';
			}
			
		}
		
		if(index != '') {
		
			var route = routes[index];
	
			exec
			(
				route.url,
				route.user_function,
				route.validate_function,
				route.id_element,
				route.id_form
			);
			
		}
		
		b = false;
	
	}
	
	function addRoute(index,action,element,valid,form,mini = element) {
		
		var u = full_url + action + '?sid=' + sid + '&mini=' + mini +'&ajax';
		var f = new Function(index+'()');
		
		v = valid ? new Function('validate_' + index + '()') : new Function('return true;');
		
		var route = {
			url: u,
			user_function: f,
			validate_function: v,
			id_element: element,
			id_form: form
		};
		
		routes[index] = route;
	}
	
	function routing() {
	
		default_index = 'hello_show';
		
		//Pages
		addRoute('hello_show','hello','body',false,false);
		addRoute('login_show','login','body',false,false);
		addRoute('register_show','register','body',false,false);
		addRoute('logout_show','logout','body',false,false);
		addRoute('home_show','home','body',false,false);
		addRoute('authors_show','authors','body',false,false);
		addRoute('positions_show','positions','body',false,false);
		
		//Just Parts
		addRoute('new_settlement_show','new_settlement','settlement',false,false,'settlement_created');
		addRoute('positions_part_show','positions','settlement',false,false,'positions');
		addRoute('authors_part_show','authors','settlement',false,false,'authors');
		addRoute('register_part_show','register','access',false,false,'register');
		addRoute('login_part_show','login','access',false,false,'login');
		
		//Autologin
		addRoute('autologin_on','autologin_on','autologin',false);
		addRoute('autologin_off','autologin_off','autologin',false);
		
		//Register
		addRoute('register','register','body',false,'register_form');
		
		//Login
		addRoute('login','login','body',false,'login_form');
		
	}
	
	function initialize() {
		routing();
		go(action);
	}
		
	{/literal}
	
	</script>

</html>