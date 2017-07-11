<?php
namespace AQ2EMarketingPlatform;

/**
 * Filename: FD3Domain.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/9/2016 5:11 PM
 */
//require_once('');

class FD3Domain extends FD3Library {
    
    /* variables */

    private $parts;

    /* constants */
        
    function __construct() {}
    
    function setDomain( $domain ) {
	    $this->parts = explode('/', $domain);
    }

    function __destruct() {

    }

    function getLevelSubdomain() {

    }

    function parse() {

    }
    /*
    function FD3Domain() {
    
    }
    */
} // end of FD3Domain