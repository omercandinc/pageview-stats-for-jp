<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://twitter.com/omercandinc
 * @since      1.0.0
 *
 * @package    Pageview_Stats_For_Jp
 * @subpackage Pageview_Stats_For_Jp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pageview_Stats_For_Jp
 * @subpackage Pageview_Stats_For_Jp/includes
 * @author     Ömercan Dinç <omercan74@gmail.com>
 */
class Pageview_Stats_For_Jp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pageview-stats-for-jp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
