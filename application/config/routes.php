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
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'index';
$route['404_override'] = 'Errorpage';
$route['translate_uri_dashes'] = FALSE;

// $route['api/cargotiator/(:num)']['get'] = 'api/cargotiator/cargoById/$1';

$route['api/cargotiator/(:num)']['get'] = 'api/cargotiator/vehicles/$1';
$route['api/cargotiator/(:num)/(:any)'] = 'api/cargotiator/vehicles/$1/$2';
$route['api/cargotiator/(:num)/(:any)/(:any)'] = 'api/cargotiator/vehicles/$1/$2/$3';
$route['api/cargotiator/(:num)/(:any)/(:any)/(:any)'] = 'api/cargotiator/vehicles/$1/$2/$3/$4';
$route['api/cargotiator/years/years/years/years/0'] = 'api/cargotiator/activeyears';
// $route['api/cargotiator/(:num)']['GET'] = 'api/cargotiator/cargoById/$1';
$route['api/cargotiator/(:num)']['POST'] = 'api/cargotiator/deleteAllCargo/$1';
$route['api/cargotiator/(:num)']['delete'] = 'api/cargotiator/deleteCargotiator/$1';
$route['api/cargotiator/(:num)']['put'] = 'api/cargotiator/updateCargotiator/$1';

$route['api/channel']['post'] = 'api/channel/addChannel';
$route['api/channel']['get'] = 'api/channel/getAllChannels';
$route['api/channel/(:num)'] = 'api/channel/deleteChannels/$1';
$route['api/channel/(:num)/(:any)'] = 'api/channel/editChannels/$1/$2';

$route['api/request']['get'] = 'api/request/getAllRequests';
$route['api/request/details/(:num)']['get'] = 'api/request/getAllRequests1/$1';
$route['api/request']['post'] = 'api/request/addRequest';

$route['api/request/todayDate/today/(:num)']['get'] = 'api/request/currentRequests1';

$route['api/request/requpdate']['post'] = 'api/request/updateCustRequest';
// $route['api/request/requpdate']['post'] = 'api/request/updateEditRequests';

$route['api/request/update']['post'] = 'api/request/updateRequest';
$route['api/request/(:num)']['post'] = 'api/request/deleteRequests';
$route['api/request/(:num)/shared']['get'] = 'api/request/getRequestSharingList';
// $route['api/request/(:num)/shared']['post'] = 'api/request/getRequestSharingList';
$route['api/request/todayDate/week/(:num)']['get'] = 'api/request/lastRequests1';
//it will create string url randomly.
$route['api/request/(:num)/shared']['post'] = 'api/request/shareWithDealer';



$route['api/requests_details/(:num)/bids']['get'] = 'api/requests_details/bids/$1';

$route['api/dealer']['get'] = 'api/dealer/getAllDealers';
$route['api/dealer']['post'] = 'api/dealer/addDealer';
$route['api/dealer/(:num)']['delete'] = 'api/dealer/deleteDealers';
$route['api/dealer/(:num)']['get'] = 'api/dealer/getDealerById';
// $route['api/dealer/(:num)']['get'] = 'api/dealer/getContactsByDealer';



//contact controller..
$route['api/contact']['post'] = 'api/contact/addContact';
// $route['api/contact']['post'] = 'api/contact/addContact';

$route['api/sendmail']['post'] = 'api/contactus/sendEmail';

//pricing controller..
$route['api/pricing/(:any)']['get'] = 'api/pricing/getRequestDetails/$1';
$route['api/pricing/(:any)/options']['get'] = 'api/pricing/getDealerBidsForRequest';
$route['api/pricing/(:any)']['post'] = 'api/pricing/saveBid';
$route['api/pricing/(:any)/(:num)']['delete'] = 'api/pricing/deleteBid';

