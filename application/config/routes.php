<?php
defined('BASEPATH') || exit('No direct script access allowed');

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
|   example.com/class/method/id/
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
|   $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|   $route['404_override'] = 'errors/page_missing';
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

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

// Authentication
Route::any(LOGIN_URL, 'users/login', array('as' => 'login'));
Route::any(REGISTER_URL, 'users/register', array('as' => 'register'));
Route::block('users/login');
Route::block('users/register');

Route::any('logout', 'users/logout');
Route::any('forgot_password', 'users/forgot_password');
Route::any('reset_password/(:any)/(:any)', 'users/reset_password/$1/$2');

// Activation
Route::any('activate', 'users/activate');
Route::any('activate/(:any)', 'users/activate/$1');
Route::any('resend_activation', 'users/resend_activation');

Route::any('v/(:any)', 'api/view/struk/$1');
// Contexts
Route::prefix(SITE_AREA, function(){
    Route::context('content', array('home' => SITE_AREA .'/content/index'));
    Route::context('reports', array('home' => SITE_AREA .'/reports/index'));
    Route::context('developer');
    Route::context('settings');
});

Route::any('permohonan_tjsl', 'tjsl', array('as' => 'permohonan_tjsl'));
Route::any('simpan_pengajuan', 'tjsl/simpan_pengajuan', array('as' => 'simpan_pengajuan'));
Route::any('about-us', 'aboutus', array('as' => 'about-us'));
Route::any('news', 'news', array('as' => 'news'));
Route::any('news_detail/(:any)', 'news/read_more/$1', array('as' => 'news_detail'));
Route::any('inforial', 'inforial', array('as' => 'inforial'));
Route::any('inforial_detail/(:any)', 'inforial/read_more/$1', array('as' => 'inforial_detail'));
Route::any('rekapitulasi', 'rekapitulasi', array('as' => 'rekapitulasi'));
Route::any('get_data_rekapitulasi/(:any)', 'rekapitulasi/get_data_rekapitulasi/$1', array('as' => 'get_data_rekapitulasi'));
Route::any('panduan_masyarakat', 'panduan/masyarakat', array('as' => 'panduan_masyarakat'));
Route::any('panduan_perusahaan', 'panduan/perusahaan', array('as' => 'panduan_perusahaan'));
Route::any('perusahaan', 'perusahaan', array('as' => 'perusahaan'));
Route::any('perusahaan/perusahaan_json', 'perusahaan/perusahaan_json', array('as' => 'perusahaan/perusahaan_json'));
Route::any('simpan_berita', 'skpd/berita/save', array('as' => 'simpan_berita'));
Route::any('simpan_kegiatan', 'skpd/kegiatan_tjsl/save', array('as' => 'simpan_kegiatan'));
$route = Route::map($route);
