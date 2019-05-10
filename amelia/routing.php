<?php

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;

$user = ParamUtils::getFromCookies('SWHelper');

if(isset($user)) {
	RoleUtils::addRole('user');
	
	$user = unserialize($user);
	SessionUtils::storeObject('user',$user);
}

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloController');
Utils::addRoute('register', 'RegisterController');
Utils::addRoute('login', 'LoginController');
Utils::addRoute('logout', 'HomeController');
Utils::addRoute('home', 'HomeController', ['user']);
Utils::addRoute('autologin_on', 'HomeController', ['user']);
Utils::addRoute('autologin_off', 'HomeController', ['user']);
//Utils::addroute('echo', 'Controller');
//Utils::addRoute('action_name', 'controller_class_name');