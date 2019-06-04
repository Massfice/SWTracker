function routing() {
		
	rsetting.defShow(do_magic).defStart(waiting.start).defEnd(waiting.stop);
		
	//Pages
	new Route('hello_show','hello').makeDefault().save();
	new Route('login_show','login_show').save();
	new Route('register_show','register_show').save();
	new Route('home_show','home').save();
	new Route('authors_show','authors').save();
	new Route('positions_show','positions').save();
		
	//Just Parts
	new Route('new_settlement_show','new_settlement').setElement('settlement_created').save();
		
	//Autologin
	new Route('autologin_on','autologin_on').setElement('autologin').save();
	new Route('autologin_off','autologin_off').setElement('autologin').save();
		
	//Register
	new Route('register','register').setElement('errors').setFunction(register).setForm('register_form').save();
		
	//Login
	new Route('login','login').setElement('errors').setFunction(login).setForm('login_form').save();
		
	//Logout
	new Route('logout','logout').setFunction(logout).save();
		
}