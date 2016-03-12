<?php
/*
Plugin Name: DQG Adbock Detected
Plugin URI: https://www.dinhquochan.com
Description: This plugin for wordpress, it help you to detected guest use adblock remove your ads on blog.
Version: 1.0
Author: Dinh Quoc Han
Author URI: https://www.dinhquochan.com
License: GPLv2 or later
*/
global $wpdb;

define("DQHAD_PATH", plugin_dir_path(__FILE__));
define("DQHAD_URI", plugin_dir_url(__FILE__));
define("DQHAD_VERSION", 1.0);

require (DQHAD_PATH . 'libs/register_menu.php');
require (DQHAD_PATH . 'libs/admin_pages.php');
require (DQHAD_PATH . 'libs/helpers.php');
require (DQHAD_PATH . 'libs/init.php');