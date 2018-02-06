<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homepage_ctrl/view';
$route['(:any)'] = 'homepage_ctrl/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
