<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = '';

// migration routes
$route['migrate'] 				= 'migrate/index';
$route['migrate/to/(:num)'] 	= 'migrate/to/$1';

// setup routes
$route['setup'] 				= 'setup/index';

// dashboard routes
$route['admin']			= 'admin/dashboard/index';

// user routes
$route['admin/users']	= 'admin/users/index';
$route['admin/users/add']	= 'admin/users/add';
$route['admin/users/edit/(:num)']	= 'admin/users/edit/$1';
$route['admin/users/delete/(:num)']	= 'admin/users/delete/$1';
$route['admin/users/activate/(:num)']	= 'admin/users/activate/$1';
$route['admin/users/hard_delete/(:num)']	= 'admin/users/hard_delete/$1';

// details routes
$route['admin/enterprises/details/(:num)'] = 'admin/details/index/$1';
$route['admin/pictures/upload/(:num)'] = 'admin/pictures/upload/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */