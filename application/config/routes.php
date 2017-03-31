<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['about'] = 'about';
$route['news/(:any)'] = 'news/view/$1';
$route['session'] = 'MySession';
$route['session/(:any)'] = 'MySession/$1';

$route['todos/create'] = 'todos/create';
$route['todos/view/(:any)'] = 'todos/view/$1';
$route['todos/edit/(:any)'] = 'todos/edit/$1';
$route['todos/completed/(:any)'] = 'todos/completed/$1';
$route['todos'] = 'todos';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
