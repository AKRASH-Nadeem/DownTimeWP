<?php

/**
 * Plugin Name: DownTimeWP
 * Plugin URI: https://github.com/AKRASH-Nadeem/DownTimeWP
 * Description: A simple plugin to enable maintenance mode for your WordPress site. Display a beautiful maintenance page while you work on your site.
 * Version: 1.0.0
 * Author: Akrash Nadeem
 * Author URI: https://linkedin.com/in/akrash-nadeem
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Tested up to: 6.7.1
 * Requires PHP: 7.4
 * Stable tag: 1.0.0
 * GitHub Plugin URI: https://github.com/AKRASH-Nadeem/DownTimeWP
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define("DOWNTIMEWP_PLUGIN_DIR",plugin_dir_path(__FILE__));
define("DOWNTIMEWP_PLUGIN_URL",plugin_dir_url(__FILE__));
define("DOWNTIMEWP_PLUGIN_NAME",plugin_basename(__FILE__));
require_once DOWNTIMEWP_PLUGIN_DIR."includes/DownTimeWP.php";

$wt = new DownTimeWP();

// Deactivation hook
register_deactivation_hook(__FILE__,array($wt,"downtimewp_deactivate"));
