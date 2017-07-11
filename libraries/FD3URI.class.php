<?php
namespace AQ2EMarketingPlatform;

/**
 * Filename: FD3URI.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/9/2016 5:51 PM
 */
//require_once('');

class FD3URI {
    
    /* variables */
    private $uri;
    private $methods = array( 'GET', 'PUT', 'POST', 'DELETE' );
    /* constants */
    
    function __construct () {}
	
	function setURI ( $uri ) {
		$this->uri = $uri;
	}

    function __destruct () {
    }

    function getUriSegments() {
        $segments = explode("/", parse_url($this->uri, PHP_URL_PATH));
        if( $segments[0] == '') {
            array_shift( $segments );
        }
        return $segments;
    }
     
    function getUriSegment($n) {
        $segs = $this->getUriSegments();
        return count($segs)>0&&count($segs)>=($n-1)?$segs[$n]:'';
    }

    function isHTTPMethod($method) {
        if( in_array( $method, $this->methods ) ) {
            return true;
        }
    }

    function getHTTPMethod() {
        $method = $_SERVER['REQUEST_METHOD'];
        if( $this->isHTTPMethod( $method ) ) {
            return $method;
        }
        else {
            return false;
        }
    }

    /*
    function FD3URI() {
    
    }
    */
} // end of FD3URI