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