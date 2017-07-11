<?php
/**
 * Filename: FD3MicrositePage.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 10:48 PM
 */

namespace AQ2EMarketingPlatform;

class FD3MicrositePage Extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getAgentSite() {
		
		$this->getVar('FD3')->load->library( 'AQ2EGeneralAgentAccount', null, 'ga_site', true );
		return $this->getVar('FD3')->ga_site->getSite();
		
	}
	
	function get_available_pages() {
		$available_pages = [
			'' ,
			'home' ,
			'process' ,
			'life' ,
			'calculator' ,
			'glossary' ,
			'about'
		];
		
		return $available_pages;
	}
	
	function is_page( $wp ) {
		
		$pages_array = $this->get_available_pages();
		
		if ( in_array( $wp->request , $pages_array ) ) { // microsite
			
			$hostname = $_SERVER[ 'HTTP_HOST' ];
			$host     = explode( '.' , $hostname );
			
			if ( /*$host[0] != 'aq2emarketing'*/  /*count($host) != 2 || */
				count( $host ) != 3
			) {
				
				if ( $_SERVER[ 'REMOTE_ADDR' ] == '171.4.232.196' ) {
					// echo "nothing"; exit;
				}
				
				return;
			}
			
			if ( $_SERVER[ 'REMOTE_ADDR' ] == '171.4.232.196' ) {
//				echo "okay"; exit;
			}
			
			$subdomain = $host[ 0 ];
			$this->load_page( $wp->request );
			aq2emm_exit( 'microsite requested page loaded: ' . sprintf( "wp->request: %s" , $wp->request ) );
		}
		
	}
	
	function load_page( $page ) {
		
		aq2emm_log( "load_page fired!" );
		
		$host = $this->getHost();
		
		if ( /*count($host) != 2 &&*/
			count( $host ) != 3
		) {
			$this->set404Status( true , false );
			
			return;
		}
		
		if ( $_SERVER[ 'REMOTE_ADDR' ] == '171.4.232.196' ) {
//			echo 'host: '. print_r($host,true); exit;
		}
		
		$subdomain = $host[ 0 ];
		
		if ( $subdomain == 'www' ) {
			return;
		}
		
		$this->set404Status( false , true );
		
		if ( $page == '' || $page == '/' ) {
			$page = 'home';
		}
		
		header( 'HTTP/1.1 200 OK' );
		
		$agentData = $this->getAgentSite();
		
		$this->loadPage( $page , 6 , $agentData );
		
		aq2emm_exit( 'microsite page loaded: ' . $page );
	}
	
	function loadPage( $id , $version_id , $agentData ) {
		
		$template    = FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'microsite_templates/' . 'page' . '-' . $id . '.php';
		$cssTemplate = FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/microsite_templates/' . 'css' . '-' . $id . '.css' . '?v=' . $version_id;
		
		// echo '<br>template: ' . $template; exit;
		// echo '<br>cssTemplate: ' . $cssTemplate;
		
		if ( file_exists( $template ) ) {
			// aq2emm_log( 'template loaded: ' . $template );
			include_once( $template );
			aq2emm_exit( 'template loaded: ' . $template );
			// return true;
		}
		else {
			return false;
		}
	}
	
	
	function __destruct() {
	}
	/*
	function FD3MicrositePage() {
	
	}
	*/
} // end of FD3MicrositePage