function go(index) {
		
	if('data' in window) document.getElementById('data').outerHTML = ''; //Jeżeli element nie równa się 'data'
	//usuwanie end
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