<?php
/*
Plugin Name: Tirral Addons for SiteOrigin
Description: An Tirral collection of addons for SiteOrigin. SiteOrigin Widgets Bundle is required.
Version: 2.4.1
Author: Tirral
Author URI: 
Plugin URI: 
License: 
License URI: 
*/




function tirral_so_widgets_bundle($folders){
	$folders[] = plugin_dir_path(__FILE__).'widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'tirral_so_widgets_bundle');

