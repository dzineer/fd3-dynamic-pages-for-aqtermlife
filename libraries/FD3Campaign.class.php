<?php
/**
 * Filename: FD3Campaign.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 10:14 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3Campaign extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getHost() {
		$hostname = $_SERVER[ 'HTTP_HOST' ];
		$host     = explode( '.' , $hostname );
		return $host;
	}
	
	function set404Status( $is_404 , $is_active ) {
		global $wp_query;
		
		if ( $wp_query->is_404 ) {
			$wp_query->is_404    = $is_404;
			$wp_query->is_active = $is_active;
		}
		
	}
	
	function getCampaign( $form_id ) {
		
		return $this->getForm( $form_id );
		
	}
	
	function getForm( $id ) {
		
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
		$page_form_json = $this->getVar('FD3')->aq2e_api->get_form_page( $id , $access_token );
		
		if ( ! empty( $page_form_json ) ) {
			$page_form = json_decode( $page_form_json , true );
		}
		
		// echo "<pre>form page info: " . print_r($page_form, true); exit;
		
		$session_key = ( ! empty( $_SESSION[ 'forms_' . $id ] ) ) ? 'forms_' . $id : '';
		
		$page_form[ 'response' ][ 'form_page' ][ 'session_key' ] = $session_key;
		
		return $page_form[ 'response' ][ 'form_page' ];
		
	}
	
	function is_campaign() {
		
		aq2emm_log( "is_campaigns called" );
		
		$host = $this->getHost();
		
		$subdomain = $host[ 0 ];
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
		if ( count( $host ) != 3 ) {
			$this->set404Status( true , false );
			aq2emm_log( "is_campaigns: 404" );
			
			return;
		}
		
		if ( $subdomain != 'www' && false ) {
			$this->set404Status( true , false );
			
			return;
		}
		
		$this->set404Status( false , true );
		
		$uri = $_SERVER[ 'REQUEST_URI' ];
		
		// printf("<pre>uri: %s", $uri ); exit;
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		
		if ( ( $method == 'GET' || $method == 'get' ) && isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
			
			$success          = new \stdClass();
			$success->message = 'Valid Request Method';
			
			aq2emm_exit_json( $success );
		}
		
		$segments = $this->getVar('FD3')->uri->getUriSegments();
		
		if ( $method == 'GET' ) {
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) {
				if ( count( $segments ) == 3 ) {
					
					$s_version     = $segments[ 0 ];
					$s_entity      = $segments[ 1 ];
					$s_campaign_id = $segments[ 2 ];
					
					/*				printf("<pre>Slug: %s", $slug);
								printf("<pre>String Params: %s", $s_param); exit;*/
					
					if ( $s_version == 'v1' && $s_entity == 'campaigns' ) {
						
						if ( strlen( $s_campaign_id ) > 0 && is_numeric( $s_campaign_id ) ) { // good if we got the right parameter format
							
							$campaign = $this->getCampaign( $s_campaign_id );
							
							if ( $campaign && count( $campaign ) ) { // campaign exists
								
								$campaign_json = json_encode( $campaign );
								
								
								// printf("<pre>campaign: %s<br/>", print_r($campaign,true));
								printf( "%s" , $campaign_json );
								exit;
								// aq2emm_exit( 'campaign loaded: ' . sprintf("s_campaign_id: %s|campaign: %s|version: %s", $s_campaign_id, print_r($campaign,true), $s_version) );
								
							}
							else {
								return;
							}
							
						}
						else { // not good so pass control back
							return;
						}
						
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
		else if ( $method == 'PUT' ) { // these ones are for saving the data
			
			$error           = new \stdClass();
			$error->message  = 'Valid Request Method';
			$error->examples = 'Valid methods: GET, PUT';
			
			aq2emm_exit_json( $error );
			
		}
		else if ( $method == 'POST' ) {
			
			$fieldsArr = [];
			
			/*			$error = new \stdClass();
					$error->message = 'Valid Request Method';
					$error->examples = 'Valid methods: GET, PUT';

					aq2emm_exit_json( $error );*/
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				if ( count( $segments ) == 3 ) {
					
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_form_id = $segments[ 2 ];
					
					/*				printf("<pre>Slug: %s", $slug);
								printf("<pre>String Params: %s", $s_param); exit;*/
					
					if ( $s_version == 'v1' && $s_entity == 'forms' ) {
						
						if ( strlen( $s_form_id ) > 0 && is_numeric( $s_form_id ) ) { // good if we got the right parameter format
							
							$formDetails = $this->getForm( $s_form_id );
							
							// printf("<pre>form: %s", print_r( $formDetails['form'], true) ); exit;
							
							$this->getVar( 'FD3' )->session->registerSession( 'page' , [ "subdomain" => $subdomain , "form" => $formDetails , "segments" => $segments ] );
							
							if ( $formDetails && count( $formDetails ) ) { // form exists
								// let's load it
								foreach ( $formDetails[ 'form' ][ 'fields' ] as $field ) {
									
									// printf("<pre>_POST: %s", print_r( $_POST, true) );
									
									if ( ! isset( $_POST[ $field[ 'field_name' ] ] ) ) {
										exit;
									}
									else {
										$str = $_POST[ $field[ 'field_name' ] ];
										if ( ! strlen( $str ) ) {
											exit;
										}
										
										$fieldsArr[] = [ $field[ 'field_name' ] => $str ];
									}
								}
								
								$campaign               = $this->getCampaign( $formDetails[ 'campaign_id' ] );
								$campaignsObj           = new \stdClass();
								$campaignsObj->campaign = $campaign;
								
								
								$campaign_json = json_encode( $campaignsObj );
								
								printf( "<pre>campaignsObj: %s<br/><br/>" , print_r( $campaignsObj , true ) );
								printf( "%s" , $campaign_json );
								exit;
								
							}
							else {
								return;
							}
							
						}
						else { // not good so pass control back
							return;
						}
						
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
	
	function __destruct() {
	}
	/*
	function FD3Campaign() {
	
	}
	*/
} // end of FD3Campaign