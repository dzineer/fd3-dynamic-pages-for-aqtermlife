<?php
/**
 * Filename: StartCampaignCommand.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:32 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class StartCampaignCommand implements CommandInterface {
	
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
	function StartCampaignCommand() {
	
	}
	*/
} // end of StartCampaignCommand