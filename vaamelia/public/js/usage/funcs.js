function user_refresh() {
	var user_name = getVar('user_name');
	var user_id = getVar('user_id');
		
	if(user_name && user_id) {
		var user_text = '<b>Zalogowany/a jako: ' + user_name + '</b> (ID: ' + user_id + ')<br><br>';
		document.getElementById('user_info').innerHTML = user_text;
	}
		
	document.getElementById('user_link').innerHTML = 
		'<a href = \'javascript:void(0);\' onclick =\'go("home_show")\'>Panel Użytkownika</a>';
}
	
function login() {
	if(getVar('successfull')) {
		user_refresh()
		alert('Pomyślnie zalogowano.');
	}
}
	
function register() {
	if(getVar('successfull')) {
		user_refresh()
		alert('Rejestracja zakończona pomyślnie. Zostałeś/aś zalogowany/a.');
	}
}
	
function logout() {
	if(getVar('successfull')) {
		document.getElementById('user_info').innerHTML = '';
		document.getElementById('user_link').innerHTML = 
			'<a href =\'javascript:void(0);\' onclick =\'go("login_show")\'>Wejdź</a>';
				
		alert('Pomyślnie wylogowano.');
	}		
}