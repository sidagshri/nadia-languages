<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/sidagshri/
 * @since      1.0.0
 *
 * @package    Nadia_Overrides
 * @subpackage Nadia_Overrides/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nadia_Overrides
 * @subpackage Nadia_Overrides/includes
 * @author     Shridhar <sid.ag.shri@gmail.com>
 */
class Nadia_Overrides_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nadia-overrides',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
