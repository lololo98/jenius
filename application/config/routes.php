<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Main Controller
$route['default_controller'] = 'MainController';
$route['login'] = 'LoginController';
$route['jenjang/(:any)'] = 'JenjangController/index/$1';
$route['jenjang/(:any)/(:any)'] = 'JenjangController/mapel/$1/$2';
$route['jenjang/(:any)/(:any)/(:any)'] = 'JenjangController/bab/$1/$2/$3';
$route['matkul']= 'MatkulController';
// Admin Route
$route['admin'] = 'AdminController';
$route['admin'] = 'AdminController/admin';
$route['admin/dashboard'] = 'AdminController';
// Admin Pelajaran Route
$route['admin/pelajaran'] = 'Admin/PelajaranController';
$route['admin/pelajaran/tambah'] = 'Admin/PelajaranController/tambah';
$route['admin/pelajaran/tambah-post'] = 'Admin/PelajaranController/tambah_post';
$route['admin/pelajaran/hapus/(:any)'] = 'Admin/PelajaranController/hapus/$1';
$route['admin/pelajaran/ubah/(:any)'] = 'Admin/PelajaranController/ubah/$1';
$route['admin/pelajaran/update'] = 'Admin/PelajaranController/update';
// Admin Bab Route
$route['admin/bab'] = 'Admin/BabController';
$route['admin/bab/tambah'] = 'Admin/BabController/tambah';
$route['admin/bab/tambah-post'] = 'Admin/BabController/tambah_post';
$route['admin/bab/hapus/(:any)'] = 'Admin/BabController/hapus/$1';
$route['admin/bab/ubah/(:any)'] = 'Admin/BabController/ubah/$1';
$route['admin/bab/update'] = 'Admin/BabController/update';
// Admin Login Route
$route['admin/login'] = 'AdminController/login';
$route['admin/login-post'] = 'AdminController/login_post';
$route['admin/logout'] = 'AdminController/logout';
// Default CI Route
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;