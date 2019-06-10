<?php
/**
Plugin Name: Stan Plugin
Plugin URI: https://kunoichiwp.com/product/stan-plugin
Description: Just a sample plugin for Kunoichi WP Marketplace.
Version: nightly
PHP Version: 5.6
Author: Takahashi Fumiki
Author URI: https://kunoichiwp.com
License: GPL 3.0 or later
Text Domain: stan-getz
Domain Path: /languages
 */

// Avoid direct loading.
defined( 'ABSPATH' ) || die();

/**
 * Get plugin version.
 *
 * @return string
 */
function stan_plugin_version() {
	$data = get_file_data( __FILE__, [
		'version' => 'Version'
	] );
	return $data['version'];
}
