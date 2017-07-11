<?php
/**
 * Filename: AQ2EAffiliateData.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/28/2017 9:53 PM
 */

namespace AQ2EMarketingPlatform;

class AQ2EAffiliateData extends FD3Library {
	
	/* variables */
	private $signupInfo;
	
	/* constants */
	
	function __construct() {
	}
	
	function initData( $siteId ) {
		$this->signupInfo = new \stdClass();
		$this->signupInfo->account = new \stdClass();
		$this->signupInfo->account->type = '';
		$this->signupInfo->user = new \stdClass();
		$this->signupInfo->site= '';
		$this->signupInfo->request = '';
		$this->signupInfo->siteId = $siteId;
		$this->signupInfo->type = 'aqtermlife';
		$this->signupInfo->mode = 'signup';
	}
	
	function getAffiliate() {
		return $this->signupInfo;
	}
	
	function setMode( $mode = 'affiliate' ) {
		$this->signupInfo->mode = $mode;
	}
	
	function setSiteId( $siteId ) {
		$this->signupInfo->siteId = $siteId;
	}
	
	function setRequest( $requestType ) {
		$this->signupInfo->request = $requestType;
	}
	
	
	function __destruct() {
	}
	/*
	function AQ2EAffiliateData() {
	
	}
	*/
} // end of AQ2EAffiliateData