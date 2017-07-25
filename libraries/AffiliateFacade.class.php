<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAffiliateWidget.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:58 PM
 */
//require_once('');

class AffiliateFacade extends FD3Library {
	/* variables */
	private $affiliate;
	private $gateway;
	/* constants */
	
	function __construct() {}

	function loadAffiliateData() {

        $domainName = $_SERVER['HTTP_HOST'];

        $site = new \stdClass();
        $site->affiliatePosition = 1;

        $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateRules', null, 'affiliate_rules', true );
        $this->getVar( 'FD3' )->affiliate_rules->setSetSiteIdPosition( $site->affiliatePosition );

        $affiliateId = $this->getVar( 'FD3' )->affiliate_rules->getSiteId( $domainName );

        $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateGateway', null, 'affiliate_gw', true );
        $this->getVar( 'FD3' )->load->library( 'AQ2EPlatformConfig', null, 'platform_config', true );
        $this->getVar( 'FD3' )->load->library( 'AQ2ESubscriberService', null, 'subscriber_service', true );

		$this->getVar( 'FD3' )->load->library( 'AQ2EMembership', null, 'membership' );

	    $this->getVar( 'FD3' )->affiliate_gw->setURL( $this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/aqm_uri_link' ) );
	    
		// echo "<pre>".$this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/aqm_uri_link' ); exit;

        $this->getVar( 'FD3' )->membership->addRequest(
        /* request */ 'websiteData2',
			/* siteId */  $affiliateId,
			/* type */    'affiliate',
			/* mode */    'signup'

		);

		$this->getVar( 'FD3' )->subscriber_service->setGateway(  $this->getVar( 'FD3' )->affiliate_gw ) ;
		$this->getVar( 'FD3' )->subscriber_service->setMembership(  $this->getVar( 'FD3' )->membership );

		$siteData = $this->getVar( 'FD3' )->session->getSession('/affiliate_site');

		if( empty( $siteData ) || ( $affiliateId != $siteData['affiliate2']['affiliateId'] ) ) {

			// echo "<pre>not available</pre>";
			
			$siteData = $this->getVar( 'FD3' )->subscriber_service->getBGA( $this->getVar( 'FD3' )->membership );
			$siteObj = json_decode( $siteData,true );

			$this->getVar( 'FD3' )->session->registerSession( 'affiliate_site', $siteObj['content'] );
			$this->getVar( 'FD3' )->session->registerSession( 'promo_items', $siteObj['content']['promoContent'] );
			$this->getVar( 'FD3' )->session->registerSession( 'invoice_items', $siteObj['content']['invoiceItems'] );
			$this->getVar('FD3')->platform_config->registerGlobals( 'affiliate_site', $siteObj['content'] );

		} // else {
			// echo "<pre>available</pre>";
		// }
		
		if( $siteData === false ) { // if we do not get affiliate info quit
			exit(0);
		}
		
		// echo "<pre>".print_r($siteData,true); exit;
		// $this->getVar('FD3')->platform_config->registerGlobals( 'promo_content', $siteObj['content']['promoContent'] );
		// $siteData = $this->getVar( 'FD3' )->session->getSession('/affiliate_site');
		// $invoice_items = $this->getVar( 'FD3' )->session->getSession('/invoice_items');
		// echo "<pre>".print_r($siteData,true) . '</pre>'; exit;
	}

}