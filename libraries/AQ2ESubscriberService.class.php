<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2ESubscriberService.class.php
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

class AQ2ESubscriberService extends FD3Library {
	
	private $url;
	private $gw; // gateway
	private $membership;
	
	function __construct() {}
	
	function __destruct() {
		// TODO: Implement __destruct() method.
	}
	
	function setGateway( $gw ) {
		$this->gw = $gw;
	}
	
	function setMembership( $membership ) {
		$this->membership = $membership;
	}
	
	function subscribe() {

	    $newSite = $this->membership->getData();

	    $jsonStr = \json_encode( $newSite );
	    $package = \base64_encode( $jsonStr );

        $packageObject = new \stdClass();
        $packageObject->params = new \stdClass();
        $packageObject->params->data = $package;

        $packageData = \json_encode( $packageObject );

        $jsonResult = $this->gw->subscribeAgent( $packageData );

		$resultObj = \json_decode($jsonResult);
		
		// header("Content-type: application/json");

		// echo json_encode($resultObj); exit;

		if( $resultObj === false || ( isset($resultObj->successful) && $resultObj->successful == false ) ) {
			
			$errorObj =  new \stdClass();
			$errorObj->successful = false;
			
			if($resultObj === false) {
				$errorObj->specialmessage = 'subscribeAgent return false';
				$errorObj->packageData = $packageData;
			}
			else {
				$errorObj->result = $jsonResult;
			}
			
			return $errorObj;
			
		} else if(  isset($resultObj->successful) && $resultObj->successful == true ) {
			
		    return $resultObj;
        }
        else {
	        $errorObj =  new \stdClass();
	        $errorObj->successful = false;
	        $errorObj->nocertain = $jsonResult;
	
	        return $resultObj;
        }
		
	}
	
	function upgrade() {
		
		$newSite = $this->membership->getData();
		
		$jsonStr = \json_encode( $newSite );
		$package = \base64_encode( $jsonStr );
		
		$packageObject = new \stdClass();
		$packageObject->params = new \stdClass();
		$packageObject->params->data = $package;
		
		$packageData = \json_encode( $packageObject );
		
		$jsonResult = $this->gw->upgradeAgent( $packageData );
		
		$resultObj = \json_decode($jsonResult);
		
		// header("Content-type: application/json");
		
		// echo json_encode($resultObj); exit;
		
		if( $resultObj === false || ( isset($resultObj->successful) && $resultObj->successful == false ) ) {
			
			$errorObj =  new \stdClass();
			$errorObj->successful = false;
			
			if($resultObj === false) {
				$errorObj->specialmessage = 'upgradeAgent return false';
				$errorObj->packageData = $packageData;
			}
			else {
				$errorObj->result = $jsonResult;
			}
			
			return $errorObj;
			
		} else if(  isset($resultObj->successful) && $resultObj->successful == true ) {
			
			return $resultObj;
		}
		else {
			$errorObj =  new \stdClass();
			$errorObj->successful = false;
			$errorObj->nocertain = $jsonResult;
			
			return $errorObj;
		}
		
	}
	
	function getBGA() {
		
		$newSite = $this->membership->getData();
		
		$jsonStr = json_encode( $newSite );
		$package = base64_encode( $jsonStr );
		
		$packageObject = new \stdClass();
		$packageObject->params = new \stdClass();
		$packageObject->params->data = $package;
		
		$packageData = json_encode( $packageObject );

        $result = $this->gw->getAffiliate( $packageData );

        error_log(sprintf("AQ2ESubscriberService::subscribe - getBGA result: %s", print_r($result,true)));


        if (!$result) {
            return false;
        } else {
            return $result;
        }
		
	}

	function validateAgent( $loginData ) {
		
		$jsonStr = json_encode( $loginData );
		$package = base64_encode( $jsonStr );
		
	//	$packageData = json_encode( $package );

        $result = $this->gw->validateAgent( $package );

		$objResult = json_decode( $result );

//        error_log(sprintf("AQ2ESubscriberService::validateAgent - getBGA result: %s", print_r($result,true)));


        if ( ! $objResult || $objResult ->successful == false) {
            return $objResult;
        } else {
            return $objResult;
        }
		
	}

	function validatePromo( $promoData ) {
		
		$jsonStr = json_encode( $promoData );
		$package = base64_encode( $jsonStr );
		
	//	$packageData = json_encode( $package );

        $result = $this->gw->validatePromo( $package );

		$objResult = json_decode( $result );

//        error_log(sprintf("AQ2ESubscriberService::validateAgent - getBGA result: %s", print_r($result,true)));


        if ( ! $objResult || $objResult ->successful == false) {
            return $objResult;
        } else {
            return $objResult;
        }
		
	}
	
	function subscribeToMarketingMailbox( $data ) {
		
	//	$jsonStr = json_encode( $data );
	//	$package = base64_encode( $jsonStr );
		
	//	$packageData = json_encode( $package );

        $result = $this->gw->subscribeToMarketingMailbox( $data );

	//	$objResult = json_decode( $result );

//        error_log(sprintf("AQ2ESubscriberService::validateAgent - getBGA result: %s", print_r($result,true)));

        if ( ! $result || $result ->successful == false) {
	        return $result;
        } else {
	        return $result;
        }
	
	}
	
	
}
 // end of AQ2ESubscriberService