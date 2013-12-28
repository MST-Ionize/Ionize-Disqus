<?php

/*

	This work is licensed under the Creative Commons Attribution 4.0 International License.
	To view a copy of this license, visit http://creativecommons.org/licenses/by/4.0/.

	Giacomo Furlan
	http://giacomofurlan.name

*/

	class Disqus_Tags extends TagManager {
		public static $tag_definitions = array (
			'disqus:code'				=> 'get_view',
			'disqus:comments_num_code'	=> 'get_comments_count_view',
			'disqus:shortname'			=> 'get_shortname'
		);

		public static function index(FTL_Binding $tag) {
			$str = $tag->expand();
			return $str;
		}

		public static function get_view(FTL_Binding $tag) {
			$shortname = Settings::get('disqus_shortname');
			$disable_mobile = Settings::get('disqus_disable_mobile');

			if($shortname === FALSE)
				$shortname = '';
			if($disable_mobile === FALSE || $disable_mobile == "0")
				$disable_mobile = "false";
			else $disable_mobile = "true";

			$view = self::$ci->load->view(
				'disqus',
				array(
					'disqus_shortname' => $shortname,
					'disqus_disable_mobile' => $disable_mobile
				),
				TRUE
			);

			return $view;
		}

		public static function get_comments_count_view(FTL_Binding $tag) {
			$shortname = Settings::get('disqus_shortname');
			$disable_mobile = Settings::get('disqus_disable_mobile');

			if($shortname === FALSE)
				$shortname = '';
			if($disable_mobile === FALSE || $disable_mobile == "0")
				$disable_mobile = "false";
			else $disable_mobile = "true";

			$view = self::$ci->load->view(
				'disqus_comments_count',
				array(
					'disqus_shortname' => $shortname,
					'disqus_disable_mobile' => $disable_mobile
				),
				TRUE
			);

			return $view;
		}

		public static function get_shortname(FTL_Binding $tag) {
			$shortname = Settings::get('disqus_shortname');
			if($shortname === FALSE)
				$shortname = '';

			return $shortname;
		}
	}
?>