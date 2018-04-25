<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/main'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/main.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');


$route['/registierung.html'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');
$route['/registierung'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');
$route['/register'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');


$route['/game3.html'] = array('controller' => 'Game3Controller', 'uniqueName' => 'game3');
$route['/game3'] = array('controller' => 'Game3Controller', 'uniqueName' => 'game3');


$route['/game1.html'] = array('controller' => 'Game1Controller', 'uniqueName' => 'game1');
$route['/game1'] = array('controller' => 'Game1Controller', 'uniqueName' => 'game1');


