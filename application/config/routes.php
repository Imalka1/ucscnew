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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route[''] = 'Welcome';

$route['signin'] = 'LoginController/viewSignIn';
$route['signup'] = 'LoginController/viewSignUp';
$route['dashboard'] = 'DashboardController';
$route['interview/interview_panel'] = 'InterviewerController/viewInterviewPanel';
$route['sar/advertisement'] = 'SarController/viewAdvertisement';
$route['sar/applicants'] = 'SarController/viewApplicants';
$route['sar/vacancy'] = 'SarController/viewVacancy';
$route['advertisement'] = 'AdvertisementController';
$route['application_form/page1'] = 'ApplicationController/page1';
$route['application_form/page1AppNo'] = 'ApplicationController/page1WithAppNo';
$route['application_form/page2'] = 'ApplicationController/page2';
$route['application_form/page3'] = 'ApplicationController/page3';
$route['application_form/page4'] = 'ApplicationController/page4';
$route['application_form/page5'] = 'ApplicationController/page5';
$route['application_form/page6'] = 'ApplicationController/page6';
$route['application_form/page7'] = 'ApplicationController/page7';
$route['application_form/page8'] = 'ApplicationController/page8';
$route['application_form/page9'] = 'ApplicationController/page9';
$route['application_form/page10'] = 'ApplicationController/page10';