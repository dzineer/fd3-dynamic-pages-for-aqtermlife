<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_LIBRARIES')) exit('No direct script access allowed');

/**
 * Filename: FD3Nonce.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/26/2016 7:33 PM
 */
//require_once('');

if( ! class_exists('AQ2EMarketingPlatform\FD3Nonce' ) ) {
	
	class FD3Nonce {
		
		/* variables */
		
		protected $nonce_privateAction;
		protected $nonce_key1;
		protected $nonce_key2;
		
		/* constants */
		
		function __construct() {
		}
		
		private function genNonce( $action ) {
			
			$id = session_id();
			
			$this->nonce_key1 = $this->genKey();
			$this->nonce_key2 = $this->genKey();
			
			$_SESSION[ $id ][ $action . 'key1' ] = $this->nonce_key1;
			$_SESSION[ $id ][ $action . 'key2' ] = $this->nonce_key2;
			
			$_SESSION[ $id . $this->nonce_key1 . $this->nonce_key2 . $action ] = $this->genKey();
		}
		
		public function getNonce( $action ) {
			
			$id = session_id();
			
			if ( isset( $_SESSION[ $id ][ $action . 'key1' ] ) && isset( $_SESSION[ $id ][ $action . 'key2' ] ) && isset( $_SESSION[ $id . $_SESSION[ $id ][ $action . 'key1' ] . $_SESSION[ $id ][ $action . 'key2' ] . $action ] ) ) {
				
				return $_SESSION[ $id . $_SESSION[ $id ][ $action . 'key1' ] . $_SESSION[ $id ][ $action . 'key2' ] . $action ];
			}
			else {
				return false;
			}
		}
		
		private function genKey() {
			$key = $this->generateRandomString( 10 );
			
			return $key;
		}
		
		private function generateRandomString( $length = 10 ) {
			$characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen( $characters );
			$randomString     = '';
			for ( $i = 0; $i < $length; $i ++ ) {
				$randomString .= $characters[ rand( 0 , $charactersLength - 1 ) ];
			}
			
			return $randomString;
		}
		
		public function isNonceExpired( $action ) {
			
			if ( ! isset( $_SESSION[ 'NONCE_TIME_' . $action ] ) ) {
				
				$this->genNonce( $action );
				
				$_SESSION[ 'NONCE_TIME_' . $action ] = time();  // update creation time
				
			}
			else if ( time() - $_SESSION[ 'NONCE_TIME_' . $action ] > 3600 ) {
				// session started more than 60 minutes ago
				
				$this->genNonce( $action );
				
				$_SESSION[ 'NONCE_TIME_' . $action ] = time();  // update creation time
			}
			else {
				return $this->getNonce( $action );
			}
			
		}
		
		function makeRandomString( $bits = 256 ) {
			$bytes  = ceil( $bits / 8 );
			$return = '';
			for ( $i = 0; $i < $bytes; $i ++ ) {
				$return .= chr( mt_rand( 0 , 255 ) );
			}
			
			return $return;
		}
		
		function __destruct() {
		}
		/*
		function FD3Nonce() {
		
		}
		*/
	} // end of FD3Nonce
	
}