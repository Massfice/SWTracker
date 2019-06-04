function go(index) {
		
	if(!(index in routes)) {
			
		if(default_index in routes) {
			index = default_index
		} else {
			index = '';
		}
			
	}
		
	if(index != '') {
		var route = routes[index];
		
		if(route.id_element != 'data' && 'data' in window) document.getElementById('data').outerHTML = '';
		if('end' in window) document.getElementById('end').outerHTML = '';
		
		exec(route);
			
	}
		
	b = false;
	
}