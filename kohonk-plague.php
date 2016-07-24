<?php
/*
Plugin Name: Kohonk Plague
Plugin URI: https://github.com/toshimichimiki/kohonk-plague
Description: Custom post type, taxonomy and metabox.
Version: 0.0.1
Author: Toshimichi Miki
Author URI: https://github.com/toshimichimiki
License: CC0 1.0 Universal
License URI: http://creativecommons.org/publicdomain/zero/1.0/
Copyright: Toshimichi Miki
Text Domain: kohonk-plague
GitHub Plugin URI: https://github.com/toshimichimiki/kohonk-plague
GitHub Branch: master
*/
if(!class_exists('KohonkPlague')):
require_once(plugin_dir_path( __FILE__ ) . 'dropin/class-tgm-plugin-activation.php');
class KohonkPlague
{
	function __construct($global=null)
	{
		add_action('tgmpa_register', 'register_required_plugins');
	}
	function register_required_plugins()
	{
		$plugins = array(
			array(
				'name' => 'GitHub Updater',
				'slug' => 'github-updater',
				'source' => 'https://github.com/afragen/github-updater/archive/master.zip',
				'required' => true,
				'force_activation' => true,
			),
			array(
				'name' => 'WP REST API',
				'slug' => 'rest-api',
				'required' => true,
				'force_activation' => true,
			),
			array(
				'name' => 'Meta Box',
				'slug' => 'meta-box',
				'required' => true,
				'force_activation' => true,
			),
			array(
				'name' => 'MB Rest API',
				'slug' => 'mb-rest-api',
				'required' => true,
				'force_activation' => true,
			),
		);
		$config = array(

		);
		tgmpa($plugins, $config);
	}
}
new KohonkPlague();
endif;
?>
