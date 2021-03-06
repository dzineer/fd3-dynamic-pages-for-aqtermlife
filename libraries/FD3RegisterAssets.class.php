<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAffiliateWidget.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:58 PM
 */
//require_once('');

if( ! class_exists('AQ2EMarketingPlatform\FD3RegisterAssets' ) ) {
	
	// echo '<pre>FD3_DYNAMIC_PAGES_PLUGIN_URI: '.FD3_DYNAMIC_PAGES_PLUGIN_URI;

	class FD3RegisterAssets extends FD3Library {
		
		function __construct() {
		
		}
		
		public function registerCSS() {
			
			// echo 'FD3_DYNAMIC_PAGES_PLUGIN_URI: '.FD3_DYNAMIC_PAGES_PLUGIN_URI; exit;

			wp_enqueue_style( 'aq2e-font-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/AQ2EFont/style.css' );
			wp_enqueue_style( 'aq2e-multisite-custom-css', FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/custom.css' );
			wp_enqueue_style( 'aq2e-multisite-bootstrap-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/bootstrap.css' );
			wp_enqueue_style( 'aq2e-multisite-font-awesome-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/font-awesome/css/font-awesome.css' );
			
			wp_enqueue_style( 'wp-color-picker' );
			
			//wp_enqueue_style ( 'fd3-font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css'  );
		}
		
		public function registerJS() {
			wp_enqueue_script( 'fd3-colorpicker-handle' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/fd3-colorpicker.js' , [ 'wp-color-picker' ] , false , true );
		}
		
	}
	
}