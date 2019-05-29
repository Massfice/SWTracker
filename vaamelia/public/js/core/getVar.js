function getVar(key) {
	var data = document.getElementById('data').value;
	if(data != '')
	{
		data = JSON.parse(data);
				
		if(key in data) {
			return data[key];
		} else {
			return false;
		}
				
	} else {
		return false;
	}
}