<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAgentMicrositeMembership.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/23/2016 11:50 PM
 */
//require_once('');

class AQ2EAgentMicrositeMembership {
	
	private $signup;
	
	function __construct() {
		
		$this->agent = new \stdClass();
		$this->agent->micrositeSubdomain = '';
	}
	
	function addSubDomain( $micrositeSubdomain ) {
		
		$this->agent->micrositeSubdomain = $micrositeSubdomain;
		
	}
	
	function addRequest(
		
		$request,
		$type
	
	) {
		
		$this->agent = new \stdClass();
		
		$this->agent->request = $request;
		$this->agent->type = $type;
		
	}
	
	function __destruct() {
		// TODO: Implement __destruct() method.
	}
	
	function getData() {
		
		return $this->agent;
		
	}
	
}
 // end of AQ2EAgentMicrositeMembership