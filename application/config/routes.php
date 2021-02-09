<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'website';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// View
$route['login.html'] = 'view/Login';
$route['dashboard.html'] = 'view/Dashboard';
$route['artikel.html'] = 'view/Dashboard/index_artikel';
$route['input-artikel.html'] = 'view/Dashboard/index_artikel_input';
$route['logout.html'] = 'view/Dashboard/logout';

$route['company.html'] = 'view/Master';
$route['struktur-organisasi.html'] = 'view/Master/index_struktur';
$route['moto.html'] = 'view/Master/index_moto';
$route['visi.html'] = 'view/Master/index_visi';
$route['misi.html'] = 'view/Master/index_misi';
$route['program.html'] = 'view/Master/index_program';
$route['produk-jasa.html'] = 'view/Master/index_produk';
$route['galeri.html'] = 'view/Master/index_galeri';
$route['medsos.html'] = 'view/Master/index_medsos';
$route['banner.html'] = 'view/Master/index_banner';
$route['list-contact.html'] = 'view/Master/index_contact';
$route['users.html'] = 'view/Master/index_user';
$route['text-pendaftaran.html'] = 'view/Master/index_pendafataran';

//website
$route['tentang.html'] = 'website/tentang';
$route['jasa.html'] = 'website/jasa';
$route['artikel'] = 'website/artikel';
$route['artikel/detail/(:any)'] = 'website/artikel_detail/$1';
$route['kontak.html'] = 'website/kontak';
$route['galeri-kegiatan.html'] = 'website/galeri';