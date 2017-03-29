<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['about'] = 'about';
$route['news/(:any)'] = 'news/view/$1';
$route['session'] = 'MySession';
$route['session/(:any)'] = 'MySession/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
