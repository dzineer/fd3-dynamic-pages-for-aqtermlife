<?php
/**
 * Filename: Action.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:27 PM
 */

namespace AQ2EMarketingPlatform;

//require_once('');

class Action implements ActionInterface {
	
	/* variables */
	private $cmd, $data;
	/* constants */
	
	function __construct() {
		$this->cmd = new LinkCommand();
		return $this;
	}
	
	function __destruct() {
	}
	
	function init( $data ) {
		$this->data = $data;
		return $this;
	}
	
	function monitor() {
		
		$this->cmd->execute();
	}
	/*
	function Action() {
	
	}
	*/
} // end of Action