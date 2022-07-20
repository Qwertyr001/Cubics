<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about-us'] ='pages/aboutus';
$route['contact-us'] ='pages/contactus';
$route['faqs'] ='pages/faqs';
$route['feedback'] ='pages/feedback';
$route['forgot-password'] ='pages/forgotpass';
$route['login'] ='pages/login';
$route['register'] ='pages/register';
$route['terms-and-condtion'] ='pages/terms_and_condtion';
$route['view-business-details/(:num)'] ='pages/view_business_details/$2';
$route['view-business-details'] ='pages/view_business_details';
$route['view-business'] ='pages/view_business';
$route['view-business/(:any)/(:any)'] ='pages/view_business/$2/$3';

    // Admin Route 

$route['admin-authentication'] = 'authorize/index';
$route['admin-authentication/(:num)'] = 'authorize/index/$2';
$route['admin-forget-password'] = 'authorize/forget_password';
$route['admin-logout'] = 'authorize/logout';
$route['admin-dashboard'] = 'authorize/dashboard';
$route['admin-setting'] = 'authorize/setting';
$route['manage-banner'] = 'authorize/Banner';
$route['manage-Email_subscriber'] = 'authorize/Email_subscriber';
$route['manage-Feedback'] = 'authorize/Feedback';
$route['manage-City'] = 'authorize/city';
$route['edit-city/(:any)'] = 'edit/city/$2';
$route['manage-Contact-us'] = 'authorize/contact_us';
$route['manage-main_in_category'] = 'authorize/main_in_category';
$route['manage-member'] = 'authorize/member';
$route['manage-state'] = 'authorize/state';
$route['manage-all-business'] = 'authorize/all_business';
$route['manage-all-review'] = 'authorize/all_review';

$route['edit-state/(:any)'] = 'edit/state/$2';
$route['edit-category/(:any)'] = 'edit/category/$2';
$route['delete/(:any)/(:any)'] = 'authorize/delete/$2/$3';


    // Member Route

$route['member-dashboard'] = 'member/dashboard';
$route['member-profile'] = 'member/profile';
$route['member-update-profile'] = 'member/update_profile';
$route['member-review'] = 'member/review';
$route['member-follow'] = 'member/follow';
$route['member-logout'] = 'member/logout';
$route['member-inquiry'] = 'member/inquiry';
$route['member-change-password'] = 'member/change_password';



    // Business Route
$route['business-register-1'] ='business/index';
$route['business-register-2'] ='business/business_register_2';
$route['business-register-3'] ='business/business_register_3';
$route['business-register-4'] ='business/business_register_4';

    // Business Admin
$route['business-dashboard'] = 'business/dashboard';
$route['business-profile'] = 'business/profile';
$route['business-update-profile'] = 'business/update_profile';
$route['business-login'] = 'business/business_login';
$route['business-change-password'] = 'business/change_password';
$route['business-logout'] = 'business/logout';
$route['business-gallery'] = 'business/gallery';
$route['business-review'] = 'business/review';
$route['business-inquery'] = 'business/inquery';
$route['business-forgot-password'] = 'business/forgot_password';
