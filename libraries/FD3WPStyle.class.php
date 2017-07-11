<?php
/**
 * Filename: FD3WPStyle.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/27/2017 12:22 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3WPStyle extends FD3Library {
	
	/* variables */
	private $_styles;
	/* constants */
	
	function __construct() {
		$this->_styles = array();
	}
	
	public function add( $style, $data ) {
		$this->_styles[ $style ] = $data;
	}
	
	public function register() {
		foreach( $this->_styles as $style => $data ) {
			wp_enqueue_style( $style , $data );
		}
	}
	
	function __destruct() {
	}
	/*
	function FD3WPStyle() {
	
	}
	*/
} // end of FD3WPStyle