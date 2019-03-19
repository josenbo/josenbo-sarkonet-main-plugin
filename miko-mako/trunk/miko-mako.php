<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mikomako.com
 * @since             1.0.0
 * @package           Miko_Mako
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://mikomako.com/miko-mako-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://mikomako.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       miko-mako
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_miko_mako() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-miko-mako-activator.php';
	Miko_Mako_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-miko-mako-deactivator.php
 */
function deactivate_miko_mako() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-miko-mako-deactivator.php';
	Miko_Mako_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_miko_mako' );
register_deactivation_hook( __FILE__, 'deactivate_miko_mako' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-miko-mako.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_miko_mako() {

	$plugin = new Miko_Mako();
	$plugin->run();

}
run_miko_mako();
