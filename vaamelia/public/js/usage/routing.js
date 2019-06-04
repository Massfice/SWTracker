function routing() {
		
	//Pages
	new Route('hello_show','hello').makeDefault().setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
	new Route('login_show','login_show').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
	new Route('register_show','register_show').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
	new Route('home_show','home').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
	new Route('authors_show','authors').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
	new Route('positions_show','positions').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).save();
		
	//Just Parts
	new Route('new_settlement_show','new_settlement').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setElement('settlement_created').save();
		
	//Autologin
	new Route('autologin_on','autologin_on').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setElement('autologin').save();
	new Route('autologin_off','autologin_off').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setElement('autologin').save();
		
	//Register
	new Route('register','register').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setElement('errors').setFunction(register).setForm('register_form').save();
		
	//Login
	new Route('login','login').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setElement('errors').setFunction(login).setForm('login_form').save();
		
	//Logout
	new Route('logout','logout').setStartFunction(waiting.start).setEndFunction(waiting.stop).setShow(do_magic).setFunction(logout).save();
		
}