<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://ThinkDualBrain.com
 * @since             1.0.0
 * @package           Wineshop_Label_Designer
 *
 * @wordpress-plugin
 * Plugin Name:       WineShop At Home Label Designer
 * Plugin URI:        http://www.wineshopathome.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jackie Zhou
 * Author URI:        https://www.upwork.com/fl/jackiezhou
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wineshop-label-designer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wineshop-label-designer-activator.php
 */
function activate_wineshop_label_designer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wineshop-label-designer-activator.php';
	Wineshop_Label_Designer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wineshop-label-designer-deactivator.php
 */
function deactivate_wineshop_label_designer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wineshop-label-designer-deactivator.php';
	Wineshop_Label_Designer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wineshop_label_designer' );
register_deactivation_hook( __FILE__, 'deactivate_wineshop_label_designer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wineshop-label-designer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wineshop_label_designer() {

	$plugin = new Wineshop_Label_Designer();
	$plugin->run();

}
run_wineshop_label_designer();
