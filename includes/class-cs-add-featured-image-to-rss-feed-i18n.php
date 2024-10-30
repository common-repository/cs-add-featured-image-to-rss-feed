<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://chetansatasiya.com/blog
 * @since      1.0.0
 *
 * @package    Cs_Add_Featured_Image_To_Rss_Feed
 * @subpackage Cs_Add_Featured_Image_To_Rss_Feed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cs_Add_Featured_Image_To_Rss_Feed
 * @subpackage Cs_Add_Featured_Image_To_Rss_Feed/includes
 * @author     Chetan Satasiya <info@chetansatasiya.com>
 */
class Cs_Add_Featured_Image_To_Rss_Feed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cs-add-featured-image-to-rss-feed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
