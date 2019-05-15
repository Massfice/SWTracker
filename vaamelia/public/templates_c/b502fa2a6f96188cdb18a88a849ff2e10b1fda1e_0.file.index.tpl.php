<?php
/* Smarty version 3.1.33, created on 2019-05-15 20:12:20
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc56849c14e1_75998101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b502fa2a6f96188cdb18a88a849ff2e10b1fda1e' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\index.tpl',
      1 => 1557943932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc56849c14e1_75998101 (Smarty_Internal_Template $_smarty_tpl) {
?><hmtl>

	<head>
	
		<title>SW Helper</title>
	
	</head>
	
	<body onload = 'initialize()'>
		<x id = 'body'>
		
		
		
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
	
	var b = false;
	
	
	
	function login() {
		if(getVar('login_successfull')) alert('Pomyślnie zalogowano.');
	}
	
	function register() {
		if(getVar('register_successfull')) alert('Rejestracja zakończona pomyślnie. Zostałeś/aś zalogowany/a.');
	}
	
	function do_magic(response,func,element) {
		var buff = '';
		var i;
		for(i = 0; i < response.length; i++) {
		
			setTimeout(function(i,element) {
				buff = buff + response.charAt(i);
				if(buff != ' ') document.getElementById(element).innerHTML = buff;
			
				if(i == response.length - 1) {
					try { func(); } catch(err) {}			
				}
			}.bind(this,i).bind(this,element).bind(this,func), i);
		}
	}
	
	function alwaysT() {
		b = true;
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
		validate_function();
		
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
	
	function addRoute(index,action,element,valid,form) {
		
		var u = full_url + action + '?sid=' + sid + '&mini=' + element +'&ajax';
		
		var f = new Function(index+'()');
		
		v = valid ? new Function('validate_' + action + '()') : new Function('alwaysT()');
		
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
		addRoute('new_settlement_show','new_settlement','body',false,false);
		
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
		
	
	
	<?php echo '</script'; ?>
>

</html><?php }
}
