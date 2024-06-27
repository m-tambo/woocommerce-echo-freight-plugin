<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/tambornino/woocommerce-echo-freight-plugin
 * @since             1.0.0
 * @package           Wp10Test
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Echo Freight
 * Plugin URI:        https://github.com/tambornino/woocommerce-echo-freight-plugin
 * Description:       A Plugin for Interfacing with Echo Global Logistics API
 * Version:           1.0.0
 * Author:            Tambo
 * Author URI:        https://github.com/tambornino
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       https://github.com/tambornino/woocommerce-echo-freight-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('WP10TEST_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp10test-activator.php
 */
function activate_wp10test()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-wp10test-activator.php';
	Wp10Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp10test-deactivator.php
 */
function deactivate_wp10test()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-wp10test-deactivator.php';
	Wp10Test_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_wp10test');
register_deactivation_hook(__FILE__, 'deactivate_wp10test');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wp10test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp10test()
{

	$plugin = new Wp10Test();
	$plugin->run();
}
run_wp10test();
