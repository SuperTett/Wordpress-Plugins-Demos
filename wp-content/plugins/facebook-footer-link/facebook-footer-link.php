<?php
/**
* Plugin Name: Facebook Footer Link
* Description: Ads a Facebook profile link to the end of posts
* Version: 1.0
* Author: Brad Traversy
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');

// Load content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');