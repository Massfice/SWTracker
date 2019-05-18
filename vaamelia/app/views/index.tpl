<hmtl>

	<head>
	
		<title>SW Helper</title>
	
	</head>
	
	<body onload = 'initialize()'>
		<x id = '0'>
		
		
		
		</x>
	</body>
	

	<script>		
		
	var sid = '{$sid}';
	var full_url = '{$full_url}';
	var routes = [];
	var default_index;
	var action = '{$action}_show';
	
	{literal}
	
	function user_refresh() {
		var user_name = getVar('user_name');
		var user_id = getVar('user_id');
		
		if(user_name && user_id) {
			var user_text = '<b>Zalogowany/a jako: ' + user_name + '</b> (ID: ' + user_id + ')<br><br>';
			document.getElementById('user_info').innerHTML = user_text;
		}
		
		document.getElementById('user_link').innerHTML = 
			'<a href = \'javascript:void(0);\' onclick =\'go("home_show")\'>Panel Użytkownika</a>';
	}
	
	function login() {
		if(getVar('successfull')) {
			user_refresh()
			alert('Pomyślnie zalogowano.');
		}
	}
	
	function register() {
		if(getVar('successfull')) {
			user_refresh()
			alert('Rejestracja zakończona pomyślnie. Zostałeś/aś zalogowany/a.');
		}
	}
	
	function logout() {
		if(getVar('successfull')) {
			document.getElementById('user_info').innerHTML = '';
			document.getElementById('user_link').innerHTML = 
				'<a href =\'javascript:void(0);\' onclick =\'go("login_show")\'>Wejdź</a>';
				
			alert('Pomyślnie wylogowano.');
		}		
	}
	
	function do_magic(response,func,element,buff = '',i = 0,show = true) {
		setTimeout(function(response,func,element,buff,i,show) {
			var c = response.charAt(i);
			buff = buff + c;
			
			if(c == '<') show = false;
			if(c == '>') show = true;
			
			if(show) document.getElementById(element).innerHTML = buff;
			
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
					
					var response = xmlHttp.responseText;
					var id = response.charAt(0);
					
					if(id != '4') id_element = id;
					
					response = response.substr(1);
					
					if(id_element) do_magic(response,user_function,id_element);
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
		addRoute('login_show','login_show','body',false,false);
		addRoute('register_show','register_show','body',false,false);
		addRoute('home_show','home','body',false,false);
		addRoute('authors_show','authors','body',false,false);
		addRoute('positions_show','positions','body',false,false);
		
		//Just Parts
		addRoute('new_settlement_show','new_settlement','settlement_created',false,false);
		
		//Autologin
		addRoute('autologin_on','autologin_on','autologin',false);
		addRoute('autologin_off','autologin_off','autologin',false);
		
		//Register
		addRoute('register','register','errors',false,'register_form');
		
		//Login
		addRoute('login','login','errors',false,'login_form');
		
		//Logout
		addRoute('logout','logout','body',false,false);
		
	}
	
	function initialize() {
		routing();
		go(action);
	}
		
	{/literal}
	
	</script>

</html>