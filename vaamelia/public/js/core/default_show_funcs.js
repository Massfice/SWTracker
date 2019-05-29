function do_magic(response,id_element,buff = '',i = 0,show = true) {
	setTimeout(function() {
		var c = response.charAt(i);
		buff = buff + c;
			
		if(c == '<') show = false;
		if(c == '>') show = true;
			
		if(show) document.getElementById(id_element).innerHTML = buff;
			
		i++;
		if(i < response.length) do_magic(response,id_element,buff,i,show);
	},1);	
}
	
function pure_show(response,id_element) {
	if(id_element) document.getElementById(id_element).innerHTML = response;
}