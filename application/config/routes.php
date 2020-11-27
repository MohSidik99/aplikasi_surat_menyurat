<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = "HomeController/halaman_home";
$route['login'] = 'AuthController/tampilkan_login';
$route['register'] = 'AuthController/tampilkan_register';
$route['terserah'] = 'AuthController/tampilkan_atas';