<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:10 PM
 */

if( ! class_exists( 'AQ2EMarketingPlatform\AQ2EMarketingPlatformConfig' ) ) {

/*	$aq2e_agent = array();
	
	$aq2e_agent[ 'agent' ]['protocol'] = 'https://';
	$aq2e_agent[ 'agent' ]['gateway'] = 'aqterm.com';
	
	$aq2e_agent[ 'agent' ]['uri'] = '/aqterm-engine/index.php/aqmprocess';
	$aq2e_agent[ 'agent' ]['uri_link'] = $aq2e_agent[ 'agent' ]['protocol'] . $aq2e_agent[ 'agent' ]['gateway'] . $aq2e_agent[ 'agent' ]['uri'];
	$aq2e_agent[ 'agent' ]['master']['domain'] = unserialize( get_option( 'aq2edp_affiliate_main_domain' ) );*/
	
	class AQ2EMarketingPlatformConfig extends FD3Library {
		
		private $dictionary = [];
		
		function __construct() { }
		
		function __destruct() {
			// TODO: Implement __destruct() method.
		}
		
		public function registerGlobals( $registry , $val ) {
			$this->dictionary[ $registry ] = $val;
		}
		
		public function getGlobalSession( $key ) {
			
			///services/agent/gateway
			
			$cursor = false;
			
			$keys = explode( '/' , $key );
			array_shift( $keys );
			
			if ( isset( $this->dictionary[ $keys[ 0 ] ] ) ) { // does our main registry exist?
				
				$cursor = $this->dictionary[ $keys[ 0 ] ];
				
				array_shift( $keys );
				
				foreach ( $keys as $key ) {
					if ( isset( $cursor[ $key ] ) ) {
						$cursor = $cursor[ $key ];
					}
					else {
						return false;
					}
				}
				
			}
			else {
				return false;
			}
			
			return $cursor;
			
		}
		
		public function getGlobal( $key ) {
			///services/agent/gateway
			
			$cursor = false;
			
			$keys = explode( '/' , $key );
			array_shift( $keys );
			
			if ( isset( $this->dictionary[ $keys[ 0 ] ] ) ) { // does our main registry exist?
				
				$cursor = $this->dictionary[ $keys[ 0 ] ];
				
				array_shift( $keys );
				
				foreach ( $keys as $key ) {
					if ( isset( $cursor[ $key ] ) ) {
						$cursor = $cursor[ $key ];
					}
					else {
						return false;
					}
				}
				
			}
			else {
				return false;
			}
			
			return $cursor;
			
		}
		
	}
	
	if ( function_exists( 'session_status' ) ) {
		
		if ( session_status() == PHP_SESSION_NONE ) {
			session_start();
		}
		
	}
	else if ( session_id() == '' ) {
		session_start();
	}
	
	/*AQ2EMarketingPlatformConfig::registerGlobals( 'services' , $aq2e_agent );*/
	
}
