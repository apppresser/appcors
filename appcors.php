<?php
/*
 * Plugin Name: AppCORS
 * Description: Allow access to your site's resources from your AppPresser app.
 * Author: AppPresser
 * Version: 0.2
 * Author URI: http://apppresser.com
 * License: GPLv3 or later
 */
	
if ( ! is_admin() ) {
	add_action( 'send_headers', 'app_cors_header' );
}

function app_cors_header() {
	
	if( class_exists( 'AppPresser' ) && AppPresser::is_min_ver( 2 ) ) {
		header("Access-Control-Allow-Origin: *");

		// If you have issues displaying the checkout page in AppWoo, you may need to uncomment this line.
		// remove_action( 'template_redirect', 'wc_send_frame_options_header' );
	}
}
