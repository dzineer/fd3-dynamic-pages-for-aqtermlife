<?php
/**
 * Filename: FD3WPAction.php
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

class FD3WPAction {
	
	/* variables */
	private $_actions;
	/* constants */
	
	function __construct() {
		$this->_actions = array();
	}
	
	public function add( $action, $data ) {
		$this->_actions[ $action ] = $data;
	}
	
	public function register() {
		foreach( $this->_actions as $action => $data ) {
			add_action( $action , $data );
		}
	}
	
	function __destruct() {
	}
	/*
	function FD3WPAction() {
	
	}
	*/
} // end of FD3WPAction