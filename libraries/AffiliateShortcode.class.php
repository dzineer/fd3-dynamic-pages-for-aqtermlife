<?php
/**
 * Filename: AffiliateShortcode.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/28/2017 9:00 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class AffiliateShortcode extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function aq2e_affiliate_home_render( $content ) {
		
		$this->getVar( 'FD3' )->load->library( 'AQ2EMembership', null, 'aq2e_membership' );
		
		$this->getVar( 'FD3' )->load->library( 'AQ2EPlatformConfig', null, 'platform_config', true );
		
		$gateway = $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateGateway', null, 'affiliate_gw', true );
		
		$this->getVar( 'FD3' )->affiliate_gw->setURL( $this->getVar( 'FD3' )->platform_config->getGlobal( '/services/affiliate/uri_link' ) );
		
		$this->getVar( 'FD3' )->load->library( 'AQ2ESubscriberService', null, 'subscriber_service' );
		
		$this->getVar( 'FD3' )->subscriber_service->setGateway( $this->getVar( 'FD3' )->affiliate_gw );
		
		$domainName = $_SERVER['HTTP_HOST'];
		$requestedURI = $_SERVER['REQUEST_URI'];
		
		$site = new \stdClass();
		$site->affiliatePosition = 1;
		
		$this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateRules', null, 'affiliate_rules' );
		$this->getVar( 'FD3' )->affiliate_rules->setSetSiteIdPosition( $site->affiliatePosition );
		
		$affiliateId = $this->getVar( 'FD3' )->affiliate_rules->getSiteId( $domainName );
		
		$affiliateId = 'bha';
		
		//$affiliateId = 'bha';
		
		//		add_filter( 'wp_nav_menu_items', array( new FD3MenuItems( $affiliateId ), 'renderMenu'), 10, 2 );
		
		if( $affiliateId === false ) { // if an affiliate id is not provided quit.
			exit(0);
		}
		
		if(/* AQ2ESession::getSession('/affiliate/affiliate_id') === false */ true) { // check if we have the affiliate session already
			
			$this->getVar( 'FD3' )->session->registerSession( 'affiliate', array( "affiliate_id" => $affiliateId ) );
			
		
			$this->getVar( 'FD3' )->aq2e_membership->addRequest(
			
			/* request */ 'websiteData2',
				/* siteId */  $affiliateId,
				/* type */    'affiliate',
				/* mode */    'signup'
			
			);
			
			$this->getVar( 'FD3' )->subscriber_service->setMembership( $this->getVar( 'FD3' )->aq2e_membership );
			
			$siteData = $this->getVar( 'FD3' )->subscriber_service->getBGA( $this->getVar( 'FD3' )->aq2e_membership );
			/*
						if( $_SERVER['REMOTE_ADDR'] == '223.204.86.132 ' ) {
							 $content = ob_get_clean();
							 ob_end_flush();
							return $content;
						}*/
			
			
			if( $siteData === false ) { // if we do not get affiliate info quit
				exit(0);
			}
			
			$siteObj = json_decode( $siteData,true );
			
			if( $_SERVER['REMOTE_ADDR'] == '223.204.86.132 ') {
				printf("%s", print_r($siteObj,true));
				$content = ob_get_clean();
				ob_end_flush();
				
				return $content;
			}
			
			if($siteObj['successful'] == false) {
				/*wp_redirect('/invalid/');*/
				exit(0);
			}
			
			$this->getVar( 'FD3' )->session->registerSession( 'affiliate_site', $siteObj['content'] );
			$this->getVar( 'FD3' )->platform_config->registerGlobals( 'affiliate_site', $siteObj['content'] );
			
			$siteData = $this->getVar( 'FD3' )->session->getSession('/affiliate_site');
			
		} else {
			
			$siteData = $this->getVar( 'FD3' )->session->getSession('/affiliate_site');
			
		}

		ob_start();
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $requestedURI );
		
		$this->getVar('FD3')->load->library( 'FD3Domain', null, 'domain', true );
		
		$this->getVar('FD3')->load->library( 'FD3Website', null, 'website', true );
		
		$this->getVar('FD3')->domain->setDomain( $domainName );
		
		$this->getVar('FD3')->website->setDomain( $this->getVar('FD3')->domain );
		$this->getVar('FD3')->website->setURI( $this->getVar('FD3')->uri );
		
		$this->getVar('FD3')->load->library( 'AQ2EAffiliateData', null, 'affiliate_data', true );
		$this->getVar('FD3')->affiliate_data->initData( $affiliateId );
		
		$this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateGateway', null, 'affiliate_gw', true );
		
		$this->getVar( 'FD3' )->affiliate_gw->setURL( $this->getVar('FD3')->affiliate_data );
		
		$this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateWidget', null, 'affiliate_widget', true );
		
		$this->getVar( 'FD3' )->affiliate_widget->setGateway( $this->getVar( 'FD3' )->affilaite_gw );
		
		$this->getVar( 'FD3' )->affiliate_widget->render_home();
		
		$content = ob_get_clean();

		if ( ob_get_length() > 0 ) {
			ob_end_flush();
	    }
		
		return $content;
	}
	
	function __destruct() {
	}
	/*
	function AffiliateShortcode() {
	
	}
	*/
} // end of AffiliateShortcode