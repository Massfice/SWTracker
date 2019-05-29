function exec(route) 
{
		
	var url = route.url;
	var user_function = route.user_function;
	var confirm_function = route.confirm_function;
	var id_element = route.id_element;
	var id_form = route.id_form;
	var show = route.show;
		
	if(confirm_function()) {
		var formData = '';
		if(id_form) {
			var form = document.getElementById(id_form);
			var formData = new FormData(form); 
		}
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.onreadystatechange = async function() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
					
				var response = xmlHttp.responseText;
				var id = response.charAt(0);
					
				if(id != '4') id_element = id;
					
				response = response.substr(1);
					
				if(id_element) show(response,id_element);
				if(await on_exist('data')) {
					try { user_function(); } catch(err) {}
				}
			}
		}
		xmlHttp.open("POST", url, true); 
		xmlHttp.send(formData);
	}
}