<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAgentMicrositeRules.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:42 PM
 */
//require_once('');

class AQ2EAgentMicrositeRules {
	
	/* variables */
	private $siteIdPosition;
	/* constants */
	
	function __construct() {}
	
	function setRule( $siteIdPosition ) {
		$this->siteIdPosition = $siteIdPosition - 1; // index position starts at 1 when passed in but in reality it starts at 0
	}
	
	function __destruct() {
	}
	
	function getSiteId( $domain ) {
		$pieces = explode(".", $domain);
		if( isset( $pieces[ $this->siteIdPosition ] ) ) {
			return $pieces[ $this->siteIdPosition ];
		} else {
			return false;
		}
	}
	
	/*
	function AQ2EAgentMicrositeRules() {
	
	}
	*/
} // end of AQ2EAgentMicrositeRules