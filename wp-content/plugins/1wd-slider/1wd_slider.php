<?php
/* Plugin Name: 1WD Slider
Plugin URI: http://1stwebdesigner.com/
Description: Slider Component for WordPress
Version: 1.0
Author: Rakhitha Nimesh
Author URI: http://1stwebdesigner.com/
License: GPLv2 or later
*/


add_action ('admin_menu', 'basicPluginMenu');

function basicPluginMenu() {
	
	$appName = 'Basic Plugin';
	$appID = 'basic-plugin';
	add_menu_page($appName, $appName, 'administrator', $appID . '-top-level', 'pluginAdminScreen');
}

function pluginAdminScreen() {
	
	echo "<h1>The Basic Plugin Admin Area</h1>";
	echo "<p>Here is my wonderful new plugin in all its GUI glory</p>";
}
?>