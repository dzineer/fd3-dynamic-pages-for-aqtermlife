<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAgentMicrositeGateway.clas.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:24 PM
 */
//require_once('');

class AQ2EAgentMicrositeGateway {
	
	/* variables */

	private $uri;
	private $context;

	/* constants */
	
	function __construct() {
	
	}

	public function setURI( $uri ) {
		$this->uri = $uri;
	}
	
	public function connect( $data ) {

        $this->context = stream_context_create(

            array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-type: application/json\n\n",
                    'content' => $data
                )
            )

        );

        //  printf("<br>AQ2EAgentMicrositeGateway::connect - uri result: %s", $this->uri); exit;       

        $post = file_get_contents(
            $this->uri,
            false,
            $this->context

        );

        //printf("<br>AQ2EAgentMicrositeGateway::connect - post result: %s<br>", $post);     

        if (!$post) {
            return false;
        } else {
            return $post;
        }

    }

    public function getAgent( $data ) {
        return $this->connect( $data );
    }

    public function subscribeAgent( $data ) {
        return $this->connect( $data );
    }

	function __destruct() {
	}
	/*
	function AQ2EAgentMicrositeGateway() {
	
	}
	*/
} // end of AQ2EAgentMicrositeGateway