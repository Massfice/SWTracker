function exec(route) 
{
		
	var url = route.url;
	var user_function = route.user_function;
	var validate_function = route.validate_function;
	var id_element = route.id_element;
	var id_form = route.id_form;
	var show = route.show;
		
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
					
				var response = xmlHttp.responseText;
				var id = response.charAt(0);
					
				if(id != '4') id_element = id;
					
				response = response.substr(1);
					
				if(id_element) show(response,user_function,id_element);
			}
		}
		xmlHttp.open("POST", url, true); 
		xmlHttp.send(formData);
	}
}