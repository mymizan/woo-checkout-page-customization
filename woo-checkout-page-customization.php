<?php
/**
 * Plugin Name: WooCommerce Checkout Page Customization
 * Plugin URI: https://woocommerce.com/
 * Description: A simple plugin to demonstrate some checkout page customizations
 * Version: 1.0.0
 * Author: M Yakub Mizan
 * Author URI: https://yakub.xyz
 *
 */

defined( 'ABSPATH' ) || exit;


class WOO_Checkout_Page_Customization {

	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * The single instance of the class.
	 *
	 * @var WOO_Checkout_Page_Customization
	 */
	protected static $_instance = null;

	/**
	 * Plugin constructor
	 */
	private function __construct() {
		add_action( 'init', array($this, 'init'), 10, 0 );
	}

	/**
	 * Main plugin instance
	 *
	 * Ensures only one instance of the plugin is loaded or can be loaded.
	 *
	 * @static
	 * @return Plugin main instance. 
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Sets up hooks
	 */
	public function init() {

	}
}


/**
 * Returns the main instance of the plugin class.
 *
 * @return WOO_Checkout_Page_Customization
 */
function WOO_Checkout_Page_Customization__init() {
	return WOO_Checkout_Page_Customization::instance();
}

// Run the plugin. 
$GLOBALS['WOO_Checkout_Page_Customization'] = WOO_Checkout_Page_Customization__init();

