var waiting = function() {
	
	this.wait;
	
	this.start = function(i = 0) {
		
		this.wait = setTimeout(function() {
			
			var buff = 'Proszę czekać ';
			
			for(var c = 0; c <= i; c++) {
				buff = buff + ' . ';
			}
			
			buff = '<center>' + buff + '</center><br>';
			
			if(document.getElementById('waiting')) document.getElementById('waiting').innerHTML = buff;
			
			i = (i + 1) % 5;
			
			this.start(i);
		},110);
	};
		
	
	this.stop = function() {
		
		if(document.getElementById('waiting')) document.getElementById('waiting').innerHTML = '<br><br>';
		clearTimeout(this.wait);
		
	};
	
	return this;
}();