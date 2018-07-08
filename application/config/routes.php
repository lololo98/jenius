<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Controller
$route['default_controller'] = 'MainController';

// Admin Route
$route['admin'] = 'AdminController';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;