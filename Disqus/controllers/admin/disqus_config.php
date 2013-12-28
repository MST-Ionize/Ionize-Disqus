<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

	if( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Disqus_Config extends Module_Admin {
		public function construct() {

		}

		public function get($config) {
			$output = Settings::get($config);

			return ($output == FALSE) ? '' : $output;
		}

		public function save() {
			$this->load->model('settings_model', 'settings');
			$shortname = $this->input->post('shortname');
			$disable = $this->input->post('disable_mobile');
			if($disable !== "0")
				$disable = "1";
			
			$this->settings->save_setting(array('name' => 'disqus_shortname', 'content' => $shortname));
			$this->settings->save_setting(array('name' => 'disqus_disable_mobile', 'content' => $disable));

			$this->success(lang('ionize_message_operation_ok'));
		}
	}
?>
