<?php
/**
 * Filename: CampaignAction.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:46 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class CampaignAction {
	
	/* variables */
	private $startCmd,
			$stopCmd,
            $data;
	
	/* constants */
	
	function __construct() {
		$this->startCmd = new StartCampaignCommand();
		$this->stopCmd = new StopCampaignCommand();
		
		return $this;
	}
	
	function __destruct() {
	}
	
	function init( $data ) {
		$this->data = $data;
		return $this;
	}
	
	function start() {
		$this->stopCmd->init( $this->data );
		return $this->startCmd->execute();
	}
	
	function stop() {
		$this->stopCmd->init( $this->data );
		return $this->stopCmd->execute();
	}
	
	/*
	function CampaignAction() {
	
	}
	*/
} // end of CampaignAction