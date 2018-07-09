<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Controller
$route['default_controller'] = 'MainController';
$route['login'] = 'LoginController';
$route['sd'] = 'JenjangController';
$route['matkul']= 'MatkulController';
// Admin Route
$route['admin'] = 'AdminController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;