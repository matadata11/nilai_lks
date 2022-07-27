<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['checkdulu']             = 'auth/login/checklogin';
$route['checkjuri']             = 'auth/login/checkjuri';
$route['keluaraja']             = 'auth/login/logout';

// route nilai
$route['nilai'] 				= 'penilaian/Penilaian';
// end

// route peserta
$route['peserta'] 				= 'peserta/Peserta';
$route['add-peserta'] 			= 'peserta/Peserta/store';
$route['edit-peserta'] 			= 'peserta/Peserta/update';
$route['remove-peserta/(:num)'] = 'peserta/Peserta/destroy';

// route mata lomba
$route['mata-lomba'] 			= 'lomba/Mata_lomba';
$route['add-lomba'] 			= 'lomba/Mata_lomba/store';
$route['edit-lomba'] 			= 'lomba/Mata_lomba/update';
$route['remove-lomba/(:num)'] 	= 'lomba/Mata_lomba/destroy';
$route['import-lomba']          = 'lomba/Mata_lomba/import_excel';

// route juri
$route['juri'] 					= 'juri/Juri';
$route['add-juri'] 				= 'juri/Juri/store';
$route['update-juri'] 			= 'juri/Juri/update';
$route['remove-juri/(:num)'] 	= 'juri/Juri/destroy';

$route['masuk'] 				= 'Authha';


$route['default_controller'] 	= 'welcome';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
