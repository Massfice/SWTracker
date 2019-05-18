<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login_show'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloController');
Utils::addRoute('register', 'RegisterController');
Utils::addRoute('register_show', 'RegisterController');
Utils::addRoute('login', 'LoginController');
Utils::addRoute('login_show', 'LoginController');
Utils::addRoute('logout', 'HomeController');

Utils::addRoute('home', 'HomeController', ['user']);
Utils::addRoute('autologin_on', 'HomeController', ['user']);
Utils::addRoute('autologin_off', 'HomeController', ['user']);
Utils::addRoute('authors', 'AuthorController', ['user']);
Utils::addRoute('new_author', 'AuthorController', ['user']);
Utils::addRoute('positions', 'PositionController', ['user']);
Utils::addRoute('new_settlement', 'SettlementController', ['user']);
//Utils::addroute('echo', 'Controller');
//Utils::addRoute('action_name', 'controller_class_name');