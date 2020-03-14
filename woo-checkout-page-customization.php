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
		/**
		 *
		 *  List of hooks fired on the checkout page. 
		 *
		 *	1. woocommerce_before_checkout_form_cart_notices
		 *	2. woocommerce_cart_reset			
		 *	3. woocommerce_before_calculate_totals			
		 *	4. woocommerce_cart_calculate_fees			
		 *	5. woocommerce_after_calculate_totals
		 *	6. woocommerce_before_checkout_form	
		 *	7. woocommerce_checkout_before_customer_details
		 *	8. woocommerce_before_checkout_billing_form			
		 *	9. woocommerce_after_checkout_billing_form			
		 *	10. woocommerce_checkout_shipping
		 *	11. woocommerce_before_order_notes			
		 *	12. woocommerce_after_order_notes			
		 *	13. woocommerce_checkout_after_customer_details			
		 *	14. woocommerce_checkout_before_order_review_heading			
		 *	15. woocommerce_checkout_before_order_review			
		 *	16. woocommerce_checkout_order_review
		 *	17. woocommerce_review_order_before_cart_contents			
		 *	18. woocommerce_review_order_after_cart_contents			
		 *	19. woocommerce_review_order_before_order_total			
		 *	20. woocommerce_review_order_after_order_total			
		 *	21. woocommerce_review_order_before_payment			
		 *	22. woocommerce_checkout_before_terms_and_conditions			
		 *	23. woocommerce_checkout_terms_and_conditions
		 *	24. woocommerce_checkout_after_terms_and_conditions			
		 *	25. woocommerce_review_order_before_submit			
		 *	26. woocommerce_review_order_after_submit			
		 *	27. woocommerce_review_order_after_payment			
		 *	28. woocommerce_checkout_after_order_review			
		 *	29. woocommerce_after_checkout_form
		**/

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

