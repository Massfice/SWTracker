<?php

namespace app\controllers;

use core\App;

use app\libs\proccesses\LogoutProccess;
use app\libs\proccesses\AutologinProccess;

class HomeController extends Controller {
	
	public function action_home() {
		
		$this->container->generateView();
	}
	
	public function action_logout() {
		
		$lifetime = time() - (86400 * 30);
		
		$proccess = new AutologinProccess();
		$proccess->param('lifetime',$lifetime,null)->setRequired(FALSE)->save();
		$proccess->make();
		
		$proccess = new LogoutProccess();
		$proccess->make();
		
		App::getRouter()->forwardTo('login_show');
	}
	
	public function action_autologin_on() {
		$lifetime = time() + (86400 * 30);
		
		$proccess = new AutologinProccess();
		$proccess->param('lifetime',$lifetime,null)->setRequired(FALSE)->save();
		$proccess->make();
		
		App::getRouter()->forwardTo('home');
	}
	
	public function action_autologin_off() {
		$lifetime = time() - (86400 * 30);
		
		$proccess = new AutologinProccess();
		$proccess->param('lifetime',$lifetime,null)->setRequired(FALSE)->save();
		$proccess->make();
		
		App::getRouter()->forwardTo('home');
	}

}

?>