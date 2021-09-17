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
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Front End 
$route['login'] = 'login/register';
$route['dashboard'] = 'dashboard/index';
$route['profile'] = 'dashboard/userProfile';
$route['seller-setting'] = "dashboard/sellerSetting";
$route['buyer-setting'] = "dashboard/sellerSetting";
$route['investor-setting'] = "dashboard/sellerSetting";
$route['advisory-setting'] = "dashboard/sellerSetting";
$route['notifications'] = "dashboard/notifications";
$route['bookmarks'] = "dashboard/Bookmark";


$route['view-profile/(:any)'] = "home/viewProfile/$1";
$route['view-buyer/(:any)'] = "home/viewBuyer/$1";
$route['view-investor/(:any)'] = "home/viewInvestor/$1";
$route['view-advisory/(:any)'] = "home/viewAdvisory/$1";
$route['search-result'] = "home/searchResult";
$route['contact-us'] = "home/contactUs";
$route['about-us'] = "home/aboutUs";
$route['sellers'] = "home/sellers";
$route['buyers'] = "home/buyers";
$route['investors'] = "home/investors";
$route['advisory'] = "home/advisory";
$route['buy'] = "home/Buy";
$route['sell'] = "home/Sell";
$route['business-plan'] = "home/BusinessPlan";



	
$route['payment-method/(:any)'] = "payment/paymentMethod/$1";
$route['stripePost']['post'] = "stripe/stripePost";
$route['payment/(:any)'] = "payment/paymentmodule/$1";






$route['administrator'] = 'administrator/login';
$route['administrator/dashboard'] = 'administrator/dashboard';
$route['logout'] = 'login/logout';

$route['administrator/resources'] = 'administrator/Resources';
$route['administrator/about-us'] = 'administrator/aboutUs';



$route['administrator/buyers'] = 'administrator/Buyers';
$route['administrator/sellers'] = 'administrator/Sellers';
$route['administrator/investors'] = 'administrator/investors';
$route['administrator/advisory'] = 'administrator/advisory';
$route['administrator/view-buyer/(:any)'] = 'administrator/viewBuyer/$1';
$route['administrator/view-seller/(:any)'] = 'administrator/viewSeller/$1';
$route['administrator/view-investor/(:any)'] = 'administrator/viewInvestor/$1';
$route['administrator/view-advisory/(:any)'] = 'administrator/viewAdvisory/$1';
$route['administrator/create-testimonial'] = 'administrator/createTestimonial';
$route['administrator/update-testimonial/(:any)'] = 'administrator/updateTestimonial/$1';


//$route['new-admin'] = 'administrator/addAdmin';

