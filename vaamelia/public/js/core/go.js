function go(index,addon = '') {

	//addon - używamy, gdy chcemy przekazać dodatkowe parametry za pomocą metody GET albo CleanURL
	//dla CleanURL format jest następujący '/<clean_url_1>/<clean_url_1>/<clean_url_2>[/...]?'
	//dla GET format jest następujący '?<zmienna1>=<wartość1>&<zmienna2>=<wartość2>[&...]&'
	//dla GET + CleanURL - '/<clean_url_1>?<zmienna1>=<wartość1>&'
	//i tak dalej
	
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
		
		if(addon == '') addon = '?';
		var url = full_url + route.action + addon + 'sid=' + sid + '&mini=' + route.mini +'&ajax';
		
		exec(route,url);		
		
	}
		
	b = false;
	
}