<?php
/* Smarty version 3.1.33, created on 2019-05-24 18:20:41
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ce819d97b0f57_48371916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b502fa2a6f96188cdb18a88a849ff2e10b1fda1e' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\index.tpl',
      1 => 1558714838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ce819d97b0f57_48371916 (Smarty_Internal_Template $_smarty_tpl) {
?><hmtl>

	<head>
	
		<title>SW Helper</title>
	
	</head>
	
	<body onload = 'initialize()'>
		<x id = '0'>
		
		
		
		</x>
	</body>
	

	<?php echo '<script'; ?>
>		
		
	var sid = '<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
';
	var full_url = '<?php echo $_smarty_tpl->tpl_vars['full_url']->value;?>
';
	var routes = [];
	var default_index;
	var action = '<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
_show';
	
	
	
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
	
	function exec(route) 
	{
		
		var url = route.url;
		var user_function = route.user_function;
		var validate_function = route.validate_function;
		var id_element = route.id_element;
		var id_form = route.id_form;
		
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
	
			exec(route);
			
		}
		
		b = false;
	
	}
	
	function addRoute(index,action,element,valid,form,mini = element) {
		
		//var u = full_url + action + '?sid=' + sid + '&mini=' + mini +'&ajax';
		//var f = new Function(index+'()');
		
		this.user_function = new Function(index+'()');
		this.validate_function = valid ? new Function('validate_' + index + '()') : new Function('return true;');
		this.element = element;
		this.form = form;
		this.mini = mini;
		this.action = action;
		
		this.url = full_url + this.action + '?sid=' + sid + '&mini=' + this.mini +'&ajax';
		
		//v = valid ? new Function('validate_' + index + '()') : new Function('return true;');
		
		var route = {
			url: this.url, //u
			user_function: this.user_function, //f
			validate_function: this.validate_function, //v
			id_element: this.element, //element
			id_form: this.form //form
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
		
	
	
	<?php echo '</script'; ?>
>

</html><?php }
}
