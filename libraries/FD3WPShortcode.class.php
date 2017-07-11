<?php
/**
 * Filename: FD3WPShortcode.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/23/2017 10:45 PM
 */

namespace AQ2EMarketingPlatform;

class FD3WPShortcode {
	
	/* variables */
	private $_shortcodes;
	/* constants */
	
	function __construct() {
		$this->_shortcodes = array();
	}
	
	public function add( $shortcode, $data ) {
		$this->_shortcodes[ $shortcode ] = $data;
	}
	
	public function register() {
		foreach( $this->_shortcodes as $shortcode => $data ) {
			add_shortcode( $shortcode , $data );
		}
	}
	
	function __destruct() {
	}
	/*
	function FD3WPShortcode() {
	
	}
	*/
} // end of FD3WPShortcode