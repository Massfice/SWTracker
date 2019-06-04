var rsetting = function() {
	
	this.defShow = function(set) {
		if(set && typeof set === 'function') this.show = set;
		else this.show = pure_show;
		return this;		
	}
	
	this.defStart = function(set) {
		if(set && typeof set === 'function') this.start_function = set;
		else this.start_function = function() {};
			
		return this;		
	}
	
	this.defEnd = function(set) {
		if(set && typeof set === 'function') this.end_function = set;
		else this.end_function = function() {};
			
		return this;
	}
	
	this.defShow(false).defStart(false).defEnd(false);
	
	return this;
}();