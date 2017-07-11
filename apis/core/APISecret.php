<?php
/**
 * Filename: APISecret.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 8:43 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class APISecret {
	
	/* variables */
	/* constants */
	
	function __construct() {
		return $this;
	}
	
	function __destruct() {
	}

	private function generateKeyString() {
		
		$tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$segment_chars = 5;
		$num_segments = 4;
		$key_string = '';
		
		for ($i = 0; $i < $num_segments; $i++) {
			
			$segment = '';
			
			for ($j = 0; $j < $segment_chars; $j++) {
				$segment .= $tokens[rand(0, 35)];
			}
			
			$key_string .= $segment;
			
			if ($i < ($num_segments - 1)) {
				$key_string .= '-';
			}
			
		}
		
		return $key_string;
		
	}
	
	function genSecret() {
		return $this->generateKeyString();
	}
	
	/*
	function APISecret() {
	
	}
	*/
} // end of APISecret