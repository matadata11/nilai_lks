<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['checkdulu']             = 'auth/login/checklogin';
$route['checkjuri']             = 'auth/login/checkjuri';
$route['keluaraja']             = 'auth/login/logout';

// route nilai
$route['nilai'] 				= 'penilaian/Penilaian';
$route['add-nilai'] 			= 'penilaian/Penilaian/store';
$route['edit-nilai'] 			= 'penilaian/Penilaian/update';
$route['remove-nilai/(:num)']   = 'penilaian/Penilaian/destroy';

$route['add-nilai_it'] 			= 'penilaian/Nilai_it/store';
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

// route pact
$route['patch']                = 'setting/Master_patch';
$route['patching']             = 'setting/Master_patch/patchsystem';
// end


$route['default_controller'] 	= 'welcome';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
