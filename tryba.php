<?php
/*
Plugin Name: Tryba for Gravity Forms
Plugin URI: https://tryba.io
Description: Integrates Gravity Forms with Tryba Payments, enabling end users to purchase goods and services through Gravity Forms.
Version: 1.2.1
Author: Tryba
Author URI: https://tryba.io/
License: GPL-2.0+
Text Domain: gravityformstryba
*/

if (!defined( 'ABSPATH' )) {
	die();
}

define( 'GF_TRYBA_VERSION', '1.2' );

add_action( 'gform_loaded', array( 'GF_Tryba_Bootstrap', 'load' ), 5 );

class GF_Tryba_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-tryba.php' );

		GFAddOn::register( 'Waf_Tryba_GFPaymentAddOn' );
	}
}