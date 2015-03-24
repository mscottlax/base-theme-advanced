<?php

/**
 * Change this to true to load unminified styles and scritps
 */
define('SEBO_DEV', false);
define('GZIP_ENABLED', false);
define('SEBO_THEME_VERSION', '0.3.0');

/**
 * Get things started
 */
require_once( dirname( __FILE__ ) . '/inc/init.php' );

/**
*  WooCommerce Theme Support
*/
add_theme_support('woocommerce');

/**
 * All custom site code goes right below here.
 */
