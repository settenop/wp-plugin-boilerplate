<?php
/**
 * Plugin Name: YOUR_PLUGIN_NAME
 *
 * @package YOUR_PLUGIN_NAME
 */

/**
 * YOUR_PLUGIN_NAME main class, singleton.
 */
class YOUR_PLUGIN_NAME {

	/**
	 * Builds the plugin instance.
	 */
	private function __construct() { }

	/**
	 * Plugin instance.
	 *
	 * @var object $instance
	 */
	private static YOUR_PLUGIN_NAME $instance;

	/**
	 * Gets the plugin instance for the current request, if no instance is found then one is built.
	 */
	public static function get_instance() : YOUR_PLUGIN_NAME {
		if ( ! isset( YOUR_PLUGIN_NAME::$instance ) ) {
			YOUR_PLUGIN_NAME::$instance = new YOUR_PLUGIN_NAME();
		}

		return YOUR_PLUGIN_NAME::$instance;
	}
}
