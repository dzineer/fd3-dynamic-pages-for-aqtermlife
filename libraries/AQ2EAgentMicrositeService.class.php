<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAgentMicrositeService.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/23/2016 11:49 PM
 */
//require_once('');

class AQ2EAgentMicrositeService {
	
	private $url;
	private $gw; // gateway
	
	function __construct() {}
	
	function setGateway( AQ2EAgentMicrositeGateway $gw ) {
		$this->gw = $gw;
	}
	
	function __destruct() {
		// TODO: Implement __destruct() method.
	}
	
    private function myLog( $class, $method, $s, $line ) {
        $log = new FD3Log();
        $log->init( "d:\\logs\\debugging-frank.log" );
        $log->log( sprintf( "%s::%s [line: %s] - %s ", $class, $method, $line, $s) );
        $log->close();
    }

	function subscribe( AQ2EAgentMicrositeMembership $membership ) {

	    $newSite = $membership->getData();

		// printf("<pre>newSite: \n\n%s\n\n", print_r($newSite,true)); exit;

	    $jsonStr = json_encode( $newSite );

	    $this->myLog( "AQ2EAgentMicrositeService", "subscribe", sprintf("\n\njsonStr: \n\n%s\n\n", $jsonStr), 44);

	    $package = base64_encode( $jsonStr );

        $packageObject = new \stdClass();
        $packageObject->params = new \stdClass();
        $packageObject->params->data = $package;

        $packageData = json_encode( $packageObject );



        $result = $this->gw->subscribeAgent( $packageData );

		// error_log(sprintf("AQ2EAgentMicrositeService::subscribe - subscribeAgent result: %s", print_r($result,true)));

        // exit(0);
        
		if (!$result) {

			$this->myLog( "AQ2EAgentMicrositeService", "subscribe", sprintf("\n\nsubscribeAgent bad result: \n\n%s\n\n", print_r($result,true)), 59);

			return false;
		} else {

			$this->myLog( "AQ2EAgentMicrositeService", "subscribe", sprintf("\n\nsubscribeAgent good result: \n\n%s\n\n", print_r($result,true)), 59);

		    return true;
        }
		
	}
	
	function getAgentMicrosite( AQ2EAgentMicrositeMembership $membership ) {
		
		$newSite = $membership->getData();
		
		// printf("<pre>newSite: %s", print_r($newSite,true)); exit;

		$jsonStr = json_encode( $newSite );
		$package = base64_encode( $jsonStr );
		
		$packageObject = new \stdClass();
		$packageObject->params = new \stdClass();
		$packageObject->params->data = $package;

		//echo '<br>params: ' . print_r($jsonStr,true); 
		//echo '<br>params: ' . print_r($packageObject,true);
		
		$packageData = json_encode( $packageObject );

        $result = $this->gw->getAgent( $packageData );

       // printf("<pre></pre><br>AQ2EAgentMicrositeService::subscribe - getAgentMicrosite result: %s", print_r($result,true));

        error_log(sprintf("AQ2EAgentMicrositeService::subscribe - getAgentMicrosite result: %s", print_r($result,true)));


        if (!$result) {
            return false;
        } else {
            return $result;
        }
		
	}
	
	
}
 // end of AQ2EAgentMicrositeService