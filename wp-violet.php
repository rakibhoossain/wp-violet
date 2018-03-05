<?php
/**
 * Plugin Name:       Violet Custom Post Meta 
 * Plugin URI:        www.rakibhossain.cf/wp-violet
 * Description:       This plugin is mainly for Portfolio Themes. Adds necessary post types, texynomy and meta to rapid theme development.
 * Version:           1.0.0
 * Author:            Rakib Hossain
 * Author URI:        www.rakibhossain.cf
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vcpm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'VCPM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vcpm-activator.php
 */
function vcpm_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vcpm-activator.php';
	Vcpm_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vcpm-deactivator.php
 */
function vcpm_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vcpm-deactivator.php';
	Vcpm_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'vcpm_activate' );
register_deactivation_hook( __FILE__, 'vcpm_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vcpm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function vcpm_run() {

	$plugin = new Vcpm();
	$plugin->run();

}
vcpm_run();
