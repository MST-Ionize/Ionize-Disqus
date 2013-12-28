<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

if( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Module admin controller
*
*
*/
class Disqus extends Module_Admin
{
	/**
	* Constructor
	*
	* @access	public
	* @return	void
	*/
	public function construct()
	{
	}

	/**
	* Admin panel
	* Called from the modules list.
	*
	* @access	public
	* @return	parsed view
	*/
	public function index()
	{
		$shortname = Settings::get('disqus_shortname');
		$disable_mobile = Settings::get('disqus_disable_mobile');
		$this->template['shortname'] = $shortname ? $shortname : '';
		$this->template['disable_mobile'] = ($disable_mobile == "0") ? false : true;
		$this->output('admin/disqus');
	}
}

