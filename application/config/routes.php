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

$route['default_controller'] = "main";
$route['404_override'] = '';
require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$query = $db->get( 'app_users' );
$result = $query->result();
foreach( $result as $row )
{
    $route[$row->username] = "main/captura/".$row->id;
}
$route['sobre-nosotros'] = 'main/about';
$route['plan-de-compensacion'] = 'main/plan';
$route['profile/update'] = 'main/update_profile';

$route['demo'] = 'main/captura/81';
$route['concierge-service'] = 'main/concierge';
$route['shop-in-the-usa'] = 'main/shop';
$route['import-and-export'] = 'main/import';
$route['pricing'] = 'main/pricing';
$route['contacto'] = 'main/contacto';
$route['support/import-export'] = 'main/support_advanced';
$route['my-account'] = 'main/account';
$route['new-account/(:any)'] = 'main/new_account/$1';
$route['new-account'] = 'main/new_account';
$route['terms-of-service'] = 'main/terms';
$route['privacy-policy'] = 'main/privacy';
$route['registro'] = 'main/registro';
$route['request-support'] = 'main/help';
$route['request-support-advanced'] = 'main/help_advanced';

$route['your-information'] = 'main/your_info';
$route['save-your-information'] = 'main/save_your_info';
$route['payment'] = 'main/payment';
$route['welcome'] = 'main/welcome';
$route['dashboard'] = 'main/dashboard';
$route['save-payment-option-selected'] = 'main/save_payment_option_selected';
$route['payment/paypal'] = 'main/payment_paypal';
/*admin routes*/
$route['admin/clients'] = 'clients';
$route['admin/client/(:any)'] = 'clients/details/$1';
//$route['client/delete/(:num)'] = 'clients/del/$1';
$route['admin/packages'] = 'packages';
$route['admin/receive-package'] = 'packages/receive';
$route['admin/package/(:any)'] = 'packages/details/$1';
$route['package/(:any)'] = 'packages/details_user/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */