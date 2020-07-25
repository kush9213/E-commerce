<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['super_admin_login'] = 'login/super_admin_login';
$route['logout'] = 'login/logout';



$route['view_super_admin'] = 'super_admin';

$route['add_category'] = 'super_admin/add_category';
$route['check_category'] = 'super_admin/check_category';
$route['delete_category'] = 'super_admin/delete_category';
$route['get_category'] = 'super_admin/get_category';
$route['edit_category'] = 'super_admin/edit_category';


$route['view_sub_category'] = 'super_admin/view_sub_category';
$route['add_sub_category'] = 'super_admin/add_sub_category';
$route['delete_sub_category'] = 'super_admin/delete_sub_category';
$route['get_sub_category'] = 'super_admin/get_sub_category';
$route['edit_sub_category'] = 'super_admin/edit_sub_category';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
