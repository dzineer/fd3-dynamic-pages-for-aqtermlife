<?php
namespace AQ2EMarketingPlatform;

/**
 * Filename: FD3Website.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/9/2016 5:50 PM
 */
//require_once('');

class FD3Website extends FD3Library {
    
    /* variables */

    private $domain;
    private $uri;

    /* constants */

    function __construct () {}
	
	function setDomain ( $domain ) {
		$this->domain = $domain;
	}
	
	function setURI ( $uri ) {
		$this->uri = $uri;
	}

    function getDomain() {
        return $this->domain;
    }

    function getURI() {
        return $this->uri;
    }

    function __destruct () {
    }
    /*
    function FD3Website() {
    
    }
    */
} // end of FD3Website