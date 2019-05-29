async function on_exist(element) {
	
	this.b = '';
	this.element = element;
		
	var promise = new Promise(function(resolve, reject) {
		setTimeout(function() {
			if(document.getElementById(this.element)) resolve(true);
			else reject(false);
		},20);
	});
		
	await promise.then(function(result) { this.b = result; }).catch(function(error) { this.b = error; });
		
	if(this.b) return this.b;
	else return await on_exist(this.element);
}