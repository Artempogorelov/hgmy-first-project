<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.themepunch.com
 * @since             1.0.0
 * @package           Revslider_Maintenance_Addon
 *
 * @wordpress-plugin
 * Plugin Name:       Slider Revolution Coming Soon & Maintenance Add-on
 * Plugin URI:        https://www.themepunch.com
 * Description:       Very simple Coming Soon & Maintenance Page by RevSlider
 * Version:           1.0.4
 * Author:            ThemePunch
 * Author URI:        https://www.themepunch.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       revslider-maintenance-addon
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define("REV_ADDON_MAINTENANCE_VERSION", "1.0.4");
define("REV_ADDON_MAINTENANCE_URL", str_replace('index.php','',plugins_url( 'index.php', __FILE__ )));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-revslider-maintenance-addon-activator.php
 */
function activate_revslider_maintenance_addon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-revslider-maintenance-addon-activator.php';
	Revslider_Maintenance_Addon_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-revslider-maintenance-addon-deactivator.php
 */
function deactivate_revslider_maintenance_addon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-revslider-maintenance-addon-deactivator.php';
	Revslider_Maintenance_Addon_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_revslider_maintenance_addon' );
register_deactivation_hook( __FILE__, 'deactivate_revslider_maintenance_addon' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-revslider-maintenance-addon.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_revslider_maintenance_addon() {

	$plugin = new Revslider_Maintenance_Addon();
	$plugin->run();

}
run_revslider_maintenance_addon();
