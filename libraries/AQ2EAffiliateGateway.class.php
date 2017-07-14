<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAffilaiteGateway.clas.php
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

class AQ2EAffiliateGateway extends FD3Library {
	
	/* variables */

	private $uri;
	private $context;

	/* constants */
	
	function __construct() {}
	
	function setURL( $uri ) {
		$this->uri = $uri;
	}

	public function connect( $data, $method, $contentType ) {

		  // echo json_encode( $this->uri ); exit;

          if( $method == 'POST' || $method == 'PUT' ) {
        
            $this->context = stream_context_create(

                array(
                    'http' => array(
                        'method' => $method,
                        'header' => "Content-type: application/json\n\n",
                        'content' => $data
                    )
                )

            );

            $post = file_get_contents(
                $this->uri,
                false,
                $this->context

            );

           // echo json_encode( array( "successful"=> "false", "uri" => $this->uri, "method" => $method, "info" => print_r($post,true) ) );
           // die();
            
            if (!$post) {
                return false;
            } else {
                return $post;
            }

        }
        else if( $method == 'GET' ) {


        //    header("Content-type: application/json");

        //    echo json_encode( $get );
        //    exit;
	
	    //    header("Content-type: application/json");
	    //    echo $this->uri . '/' . $data; exit;
	
	        $get = file_get_contents(
		        $this->uri . '/' . $data
	        );
	
	        // header("Content-type: application/json");
	        // echo json_encode( $get );
	        // exit;
	
	        if (!$get) {
                return false;
            } else {
                return $get;
            }

        }

    }

    public function getAffiliate( $data ) {
        return $this->postMethod( $data );
    }

    public function subscribeAgent( $data ) {
        return $this->postMethod( $data );
    }
	
	public function upgradeAgent( $data ) {
		return $this->postMethod( $data );
	}

    public function validateAgent( $data ) {
        return $this->getMethod( $data );
    }    

    public function validatePromo( $data ) {
        return $this->getMethod( $data );
    }
	
	public function subscribeToMarketingMailbox( $data ) {
		return $this->postMethod( $data );
	}
	
	private function getMethod( $data ) {
		return $this->connect( $data, 'GET', "Content-type: application/json\n\n" );
	}
	
	private function postMethod( $data ) {
		return $this->connect( $data, 'POST', "Content-type: application/json\n\n" );
	}
	
	function __destruct() {
	}

	/*
	function AQ2EAffilaiteGateway() {
	
	}
	*/
} // end of AQ2EAffilaiteGateway