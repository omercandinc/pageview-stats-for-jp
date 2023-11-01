<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://twitter.com/omercandinc
 * @since             1.0.0
 * @package           Pageview_Stats_For_Jp
 *
 * @wordpress-plugin
 * Plugin Name:       Pageview Stats For JP
 * Plugin URI:        https://linkedin.com/in/omercandinc
 * Description:       Jetpack yüklü olan sitelerde bu eklentinin tuttuğu istatistikleri önyüzde göstermeye yarar
 * Version:           1.0.0
 * Author:            Ömercan Dinç
 * Author URI:        https://twitter.com/omercandinc/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pageview-stats-for-jp
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
define( 'PAGEVIEW_STATS_FOR_JP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pageview-stats-for-jp-activator.php
 */
function activate_pageview_stats_for_jp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pageview-stats-for-jp-activator.php';
	Pageview_Stats_For_Jp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pageview-stats-for-jp-deactivator.php
 */
function deactivate_pageview_stats_for_jp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pageview-stats-for-jp-deactivator.php';
	Pageview_Stats_For_Jp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pageview_stats_for_jp' );
register_deactivation_hook( __FILE__, 'deactivate_pageview_stats_for_jp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pageview-stats-for-jp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pageview_stats_for_jp() {

	$plugin = new Pageview_Stats_For_Jp();
	$plugin->run();

}
run_pageview_stats_for_jp();
