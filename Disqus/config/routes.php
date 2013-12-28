<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

$route['default_controller'] = "disqus";
$route['(.*)'] = "disqus/index/$1";
$route[''] = 'disqus/index';
