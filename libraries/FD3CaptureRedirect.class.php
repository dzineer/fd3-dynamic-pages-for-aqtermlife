<?php
/**
 * Filename: FD3CaptureRedirect.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 5:06 PM
 */

namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_LIBRARIES')) exit('No direct script access allowed');

//require_once('');

class FD3CaptureRedirect extends FD3URLPage {
	
	/* variables */
	protected $dir;
	protected $_loaded = array();
	/* constants */
	
	function __construct() {
	}
	
	function getSpecialPage( $id ) {
		
		//TODO:: get form from client
		$this->getVar('FD3')->load->library( 'Authorize_facade', null, 'auth_client', true );
		$res = $this->getVar('FD3')->auth_client->authorize_for_token();
		
		$token_info = [];
		
		if ( ! empty( $res ) ) {
			$token_info = json_decode( $res , true );
		}
		else {
			return [];
		}
		
		//  echo "<pre>token_info: " . print_r($token_info, true);
		
		$access_token = $token_info[ "access_token" ];
		$scope        = $token_info[ "scope" ];
		
		$this->getVar('FD3')->load->library( 'APIEndpoints', null, 'aq2e_api' );
		$capture_link_rules_json = $this->getVar('FD3')->aq2e_api->get_capture_link_rules( $id , $access_token );
		
		$capture_link_rules = [];
		
		if ( ! empty( $capture_link_rules_json ) ) {
			$capture_link_rules = json_decode( $capture_link_rules_json , true );
		}
		
		// echo "<pre>capture_link_rules info: " . print_r($capture_link_rules, true); exit;
		
		$rules = $capture_link_rules[ 'response' ][ 'capture_link_rules' ];
		
		$data = [];
		
		$page_form_id = 0;
		
		foreach ( $rules as $rule ) {
			$page_form_id = $rule[ 'page_form_id' ];
			$data[]       = $rule[ 'name' ];
		}
		
		// echo "<pre>capture_link_rules info: " . print_r([ "id" => $id, "page_form_id" => $page_form_id, "rules" => $data ], true); exit;
		return [ "id" => $id , "page_form_id" => $page_form_id , "rules" => $data ];

	}
	
	function is_redirect() {
		
		$subdomRedirect = false;
		
		$host = $this->getHost();
		
		if ( count( $host ) != 3 ) {
			$this->set404Status( true , false );
			
			return;
		}
		
		$subdomain = $host[ 0 ];
		
		// aq2emm_json_log2screen( array( $subdomain ) );
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
		if ( ! in_array( $subdomain , [ 'redirect' ] ) ) {
			$subdomRedirect = false;
		}
		
		$uri      = $_SERVER[ 'REQUEST_URI' ];
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		
		
		
		if ( ( $method == 'GET' || $method == 'get' ) ) {
			
			$success          = new \stdClass();
			$success->message = 'Valid Request Method';
			
			$segments = $this->getVar('FD3')->uri->getUriSegments();
			
			// aq2emm_json_log2screen( array( $method ) );
			
			$this->set404Status( false , true );
			
			$uri = $_SERVER[ 'REQUEST_URI' ];
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) {
				
				if ( count( $segments ) >= 3 ) {
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_id      = $segments[ 2 ];
					
					if ( $s_entity == 'capture' ) {
						
						$pageInfo = $this->getSpecialPage( $s_id );
						
						$this->getVar('FD3' )->load->library( 'FD3RuleRegistrator', null, 'registrator' );
						$this->getVar('FD3' )->registrator->init( FD3_DYNAMIC_PAGES_PLUGIN_RULES . '\\' );
						
						$this->getVar('FD3' )->registrator->registerRule(
							[
								'rule'    => 'save_data' ,
								'library' => 'FD3SaveData' ,
								'data'    => [
									'vars'        => [
										[ 'field' => 'email' ] ,
										[ 'field' => 'name' ]
									] ,
									'session_key' => 'forms_' . $pageInfo[ 'page_form_id' ] ,
								] ,
								
								'callback' => null
							]
						);
						
						$this->getVar('FD3' )->registrator->registerRule(
							[
								'rule'    => 'redirect_form_' . $pageInfo[ 'page_form_id' ] ,
								'library' => 'FD3Redirect' ,
								'data'    => [
									'segments'      => [
										[ 'segment' => 'v1' ] ,
										[ 'segment' => 'forms' ] ,
										[ 'segment' => $pageInfo[ 'page_form_id' ] ]
									] ,
									'redirect_flag' => [ 'key' => 'REDIRECTED_WITH_DATA' , 'value' => true ] ,
								] ,
								
								'callback' => [ $this , 'fd3_redirect' ]
							]
						);
						
						foreach ( $pageInfo[ 'rules' ] as $rule ) {
							$this->getVar('FD3' ) ->registrator->executeRule( $rule );
						}
						//   aq2emm_json_log2screen( array( $pageInfo ) );
						
					}
					
				}
				else {
					return;
				}
			}
			else {
				return;
			}
			
		}
		
	}
	
	function fd3_redirect( $data ) {
		
		if ( isset( $data[ 'redirect_uri' ] ) ) {
			header( 'location: ' . $data[ 'redirect_uri' ] );
			aq2emm_exit( "redirected to: " . $data[ 'redirect_uri' ] );
		}
	}
	
	
	function __destruct() {
	}
	/*
	function FD3CaptureRedirect() {
	
	}
	*/
} // end of FD3CaptureRedirect