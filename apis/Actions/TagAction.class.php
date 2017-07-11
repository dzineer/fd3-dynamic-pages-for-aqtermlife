<?php
/**
 * Filename: TagAction.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:40 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class TagAction implements ActionInterface {
	
	/* variables */
	private $setTagCmd;
	private $unsetTagCmd;
	private $data;
	/* constants */
	
	function __construct() {
		$this->setTagCmd = new SetTagCommand();
		$this->unsetTagCmd = new UnsetTagCommand();
		
		return $this;
	}
	
	function init( $data ) {
		$this->data = $data;
		return $this;
	}
	
	function setAction() {
		return $this->setTagCmd->execute();
	}
	
	function unsetAction() {
		return $this->unsetTagCmd->execute();
	}
	
	function __destruct() {
	}
	/*
	function TagAction() {
	
	}
	*/
} // end of TagAction