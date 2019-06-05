function Route(name,action) {
		
	this.name = name;
	this.action = action;
	this.default = false;
		
	this.setFunction = function(set) {
			
		if(set && typeof set === 'function') this.user_function = set;
		else this.user_function = function() {};
			
		return this;
	};
	
	this.setStartFunction = function(set) {
			
		if(set && typeof set === 'function') this.start_function = set;
		else this.start_function = function() {};
			
		return this;
	};
	
	this.setEndFunction = function(set) {
			
		if(set && typeof set === 'function') this.end_function = set;
		else this.end_function = function() {};
			
		return this;
	};

	this.setConfirm = function(set) {
			
		if(set && typeof set === 'string')
			this.confirm_function = function() { return window.confirm(set); };
		else if(set)
			this.confirm_function = function() { return window.confirm('Czy na pewno chcesz to zrobić?'); };
		else
			this.confirm_function = function() { return true; };
		return this;		
	};
		
	this.setShow = function(set) {
		if(set && typeof set === 'function') this.show = set;
		else this.show = pure_show;
		return this;
	};
		
	this.setElement = function(set) {
		this.id_element = set;
		this.mini = set;
		return this;		
	};
		
	this.setForm = function(set) {
		this.id_form = set;
		return this;		
	};
		
	this.setMini = function(set) {
		this.mini = set;
		return this;		
	};
		
	this.makeDefault = function() {
		this.default = true;
		return this;
	};
		
	this.save = function() {
			
		if(this.default) default_index = this.name;

		routes[this.name] = this;
	};
		
	this.setFunction(false).setConfirm(false).setElement('page').setForm(false)
	.setShow(rsetting.show).setStartFunction(rsetting.start_function).setEndFunction(rsetting.end_function);
		
}