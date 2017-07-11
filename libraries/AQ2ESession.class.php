<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:10 PM
 */

if( ! class_exists( 'AQ2EMarketingPlatform\AQ2ESession' ) ) {
	
	class AQ2ESession {
		
		public function registerSession( $registry , $val ) {
			
			// make sure our session starts and is backwards compatible
			
			if ( function_exists( 'session_status' ) ) {
				
				if ( session_status() == PHP_SESSION_NONE ) {
					session_start();
				}
				
			}
			else if ( session_id() == '' ) {
				session_start();
			}
			
			$_SESSION[ $registry ] = $val;
			
		}
		
		public function getSession( $key ) {
			///services/affiliate/gateway
			
			$cursor = false;
			
			$keys = explode( '/' , $key );
			array_shift( $keys );
			
			if ( isset( $_SESSION[ $keys[ 0 ] ] ) ) { // does our main registry exist?
				
				$cursor = $_SESSION[ $keys[ 0 ] ];
				
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
	
}