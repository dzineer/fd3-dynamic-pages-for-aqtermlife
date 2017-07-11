<?php
namespace AQ2EMarketingPlatform;

if( ! class_exists('AQ2EMarketingPlatform\FD3RegisterAssets' ) ) {
	
	class FD3RegisterAssets {
		
		function __construct() {
		
		}
		
		public function registerCSS() {
			
			wp_enqueue_style( 'aq2e-font-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/AQ2EFont/style.css' );
			wp_enqueue_style( 'aq2e-multisite-bootstrap-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/bootstrap.css' );
			wp_enqueue_style( 'aq2e-multisite-custom-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/custom.css' );
			wp_enqueue_style( 'aq2e-multisite-font-awesome-css' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/font-awesome/css/font-awesome.css' );
			
			wp_enqueue_style( 'wp-color-picker' );
			
			//wp_enqueue_style ( 'fd3-font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css'  );
		}
		
		public function registerJS() {
			wp_enqueue_script( 'fd3-colorpicker-handle' , FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/fd3-colorpicker.js' , [ 'wp-color-picker' ] , false , true );
		}
		
	}
	
}