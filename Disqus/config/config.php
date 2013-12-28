<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['module']['disqus'] = array
(
	'module' => "Disqus",
    'name' => "Disqus integration",
	'description' => "Easily embed the Disqus comment system.",
	'author' => "Giacomo Furlan",
	'version' => "1.0",

	/*
	'install' => 'install.php',
	'migrate' => 'migrate.php',
	'uninstall' => 'uninstall.php',
	*/

	'has_admin'=> TRUE,
	'has_frontend'=> FALSE
);

return $config['module']['disqus'];



/*
 *
		'admin' => array(
			'title' => 'Demo Module Administration'
		),
		'one_resource' => array
		(
			// Title of the resource
			'title' => 'Resource name',
			// Can be 'edit', 'eat_cheese', what you want
			'actions' => 'action_key_1,action_key_2',
		),
		// Authority::can('access', 'module/demo/one_resource/one_child_resource'
		'one_resource/one_child_resource' => array
		(
			// Parent of the module's ressource in the resources tree
			'parent' => 'one_resource',
			'title' => 'One Child Resource',
			'actions' => 'action_1',
		),
		// Authority::can('access', 'module/demo/one_resource_in_parent'
		'one_resource_in_parent' => array
		(
			// Parent of the module's ressource in the resources tree
			'parent' => 'one_resource',
			'title' => 'One Resource in the Parent Tree',
			'actions' => 'action_1',
		),

 *
 *
 */