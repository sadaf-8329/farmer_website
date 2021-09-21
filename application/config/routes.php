<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'farmer_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

//HOME PAGE ROUTES
$route['home/page'] = 'farmer_controller/frontone';
$route['about/page'] = 'farmer_controller/about';
$route['contact/page'] = 'farmer_controller/contact';

//FARMER TEMPLATE ROUTES
$route['farmer/login/page'] = 'farmer_controller/login';
$route['farmer/redirectpage'] = 'farmer_controller/redirectpage';
$route['farmer/productpage'] = 'farmer_controller/mainpage';
$route['add/products'] = 'farmer_controller/editpro';
$route['view/all/products'] = 'farmer_controller/seepro';
$route['update/products'] = 'farmer_controller/updatepro';
$route['delete/products'] = 'farmer_controller/delete';

$route['farmer/resetpassword/page'] = 'farmer_controller/resetpass';
$route['farmer/resetpassword/redirectpage'] = 'farmer_controller/forgotpass';

$route['farmer/register/page'] = 'farmer_controller/entry';
$route['farmer/register/redirectpage'] = 'farmer_controller/registered';

// $route['farmer/logout/page'] = 'farmer_controller/logout';

//ADMIN TEMPLATE ROUTES
$route['admin/login/page'] = 'admin_controller/adminlogin';
$route['admin/view/products'] = 'admin_controller/adminloginpage';
$route['admin/delete/products'] = 'admin_controller/productdelete';

$route['enquiry/page'] = 'admin_controller/enquiries';
$route['enquiry/delete/page'] = 'admin_controller/enquirydelete';

$route['admin/resetpassword/page'] = 'admin_controller/adminforgot';
$route['admin/resetpassword/redirectpage'] = 'admin_controller/adminforgotpass';

$route['admin/register/page'] = 'admin_controller/adminregister';
$route['admin/register/redirectpage'] = 'admin_controller/adminregistered';
