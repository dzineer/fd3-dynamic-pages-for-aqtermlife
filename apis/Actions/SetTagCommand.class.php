<?php
/**
 * Filename: SetTagCommand.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:35 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class SetTagCommand implements CommandInterface {
	
	/* variables */
	private $data;
	/* constants */
	
	function __construct() {
	}
	
	function __destruct() {
	}
	
	function init( $data ) {
		$this->data = $data;
	}
	
	function execute() {
		return true;
	}
	
	/*
	function SetTagCommand() {
	
	}
	*/
} // end of SetTagCommand