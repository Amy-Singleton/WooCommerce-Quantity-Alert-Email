<?php
/**
 * Plugin Name: WooCommerce Quantity Alert Email
 * Plugin URI: https://learnarmor.com
 * Description: Add a custom WooCommerce email that sends admins an email when 50 or more publications are ordered.
 * Author: LearnArmor - Amy Sigleton
 * Author URI: https://learnarmor.com
 * Text Domain: woocommerce-admin-alert-order-email
 * Version: 1.0.1
 *
 * WC requires at least: 3.1.0
 * WC tested up to: 3.3.4
 * 
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Add a custom email to the list of emails WooCommerce should load
 *
 * @since 0.1
 * @param array $email_classes available email classes
 * @return array filtered available email classes
 */

 
 /**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    // Put your plugin code here
    function add_admin_alert_woocommerce_email( $email_classes ) {

	// include our custom email class
	require_once( 'includes/class-wc-admin-alert-order-email.php' );

	// add the email class to the list of email classes that WooCommerce loads
	$email_classes['WC_Admin_Alert_Order_Email'] = new WC_Admin_Alert_Order_Email();

	return $email_classes;

    }
    add_filter( 'woocommerce_email_classes', 'add_admin_alert_woocommerce_email' );

}
