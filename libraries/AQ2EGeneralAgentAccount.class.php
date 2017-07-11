<?php
/**
 * Filename: AQ2EGeneralAgentAccount.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 7:09 PM
 */

namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

class AQ2EGeneralAgentAccount extends FD3ClassType {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getSite() {
		
		$this->getVar('FD3')->load->library( 'AQ2EAgentMicrositeMembership', null, 'membership' );
		
		$this->getVar('FD3')->load->library( 'AQ2EAgentMicrositeGateway', null, 'gateway' );
		$this->getVar('FD3')->gateway->setURI( $this->getVar('FD3')->mp_config->getGlobal( '/services/agent/uri_link' ) );
		
		$this->getVar('FD3')->load->library( 'AQ2EAgentMicrositeService', null, 'service' );
		$this->getVar('FD3')->service->setGateway( $this->getVar('FD3')->gateway );
		
		$domainName   = $_SERVER[ 'HTTP_HOST' ];
		$requestedURI = $_SERVER[ 'REQUEST_URI' ];
		
		$site                    = new \stdClass();
		$site->affiliatePosition = 1;
		
		$this->getVar('FD3')->load->library( 'AQ2EAgentMicrositeRules', null, 'rules' );
		$this->getVar('FD3')->rules->setRule( $site->affiliatePosition );
		
		$micrositId = $this->getVar('FD3')->rules->getSiteId( $domainName );
		
		if ( $micrositId === false ) { // if an affiliate id is not provided quit.
			aq2emm_exit( 'getAgentSite: micrositId invalid' );
		}
		
		aq2emm_log( "getAgentSite: checking if we have cached site..." );
		
		if ( $this->getVar('FD3')->session->getSession( '/agent_microsite/site/m_subdomain' ) === false || $this->getVar('FD3')->session->getSession( '/agent_microsite/site/m_subdomain' ) != $micrositId ) { // check if we have the affiliate session already
			
			aq2emm_log( "no" );
			
			// aqterm only
			
			$this->getVar('FD3')->membership->addRequest(
			
			/* request */
				'agentMicrositeData' , /* type */
				'agent'
			
			);
			
			$this->getVar('FD3')->membership->addSubDomain(
			
			/* subdomain */
				$micrositId
			
			);
			
			aq2emm_log( "getAgentSite: getting siteData" );
			$start_time   = microtime( true );
			$siteData     = $this->getVar('FD3')->service->getAgentMicrosite( $this->getVar('FD3')->membership );
			$end_time     = microtime( true );
			$elapsed_time = ( $end_time - $start_time );
			
			$hours   = (int) ( $elapsed_time / 60 / 60 );
			$minutes = (int) ( $elapsed_time / 60 ) - $hours * 60;
			$seconds = (int) $elapsed_time - $hours * 60 * 60 - $minutes * 60;
			
			$elapsed_time = $hours . ':' . $minutes . ':' . $seconds;
			
			aq2emm_log( "getAgentSite: it took " . $elapsed_time . " to get siteData." );
			
			if ( $siteData === false ) { // if we do not get affiliate info quit
				aq2emm_exit( 'getAgentSite no siteData returned' );
			}
			else {
				aq2emm_log( "getAgentSite: siteData: " . print_r( $siteData , true ) );
			}
			
			$siteObj = json_decode( $siteData , true );
			
			// AQ2EMarketingPlatform\AQ2ESession::registerSession( 'agent_microsite', array( "site" => null ) )
			$this->getVar('FD3')->session->registerSession( 'agent_microsite' , [ "site" => $siteObj[ 'site' ] ] );
			$this->getVar('FD3')->mp_config->registerGlobals( 'agent_microsite' , [ "site" => $siteObj[ 'site' ] ] );
			
			$siteData = $this->getVar('FD3')->session->getSession( '/agent_microsite' );
			
			//   echo '<pre>siteData: ' . print_r($siteData,true); exit(0);
			
		}
		else {
			
			aq2emm_log( "yes" );
			$siteData = $this->getVar('FD3')->session->getSession( '/agent_microsite' );
			
		}
		
		// echo '<pre>siteData: ' . print_r($siteData,true); exit(0);
		
		return $siteData;
	}
	
	function __destruct() {
	}
	/*
	function AQ2EGeneralAgentAccount() {
	
	}
	*/
} // end of AQ2EGeneralAgentAccount