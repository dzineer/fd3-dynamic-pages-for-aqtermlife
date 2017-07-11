<?php
/**
 * Filename: FD3Forms.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 7:20 PM
 */

namespace AQ2EMarketingPlatform;

class FD3Forms extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getAgentSite() {
		
		$this->getVar('FD3')->load->library( 'AQ2EGeneralAgentAccount', null, 'ga_site', true );
		return $this->getVar('FD3')->ga_site->getSite();
		
	}
	
	function loadForm( $id , $page_details , $form_data = [] ) {
		$template    = FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'page_templates/' . 'page' . '-' . $page_details[ "page" ][ "template" ] . '.php';
		$cssTemplate = FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/page_templates/' . 'css' . '-' . $page_details[ "page" ][ "styles" ] . '.css';
		
		// echo "<pre>form_data" . print_r($form_data,true); exit;
		
		if ( file_exists( $template ) ) {
			include_once( $template );
			
			return true;
		}
		else {
			return false;
		}
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
	
	function get_external_API_form( $id ) {
		
		$this->getVar('FD3')->load->library( 'Authorize_facade', null, 'auth_client', true );
		$res = $this->getVar('FD3')->auth_client->authorize_for_token();
		
		$token_info = [];
		
		if ( ! empty( $res ) ) {
			$token_info = json_decode( $res , true );
		}
		else {
			return [];
		}
		
		// echo "<pre>id: " . $id; exit;
		
		$access_token = $token_info[ "access_token" ];
		$scope        = $token_info[ "scope" ];
		
		$aq2e_api = new APIEndpoints();
		
		$external_api_form = [];
		
		$this->getVar('FD3')->load->library( 'APIEndpoints', null, 'aq2e_api' );
		$external_api_form_json = $this->getVar('FD3')->aq2e_api->get_external_api_form( $id , $access_token );
		
		//echo "<pre>external_api_form_json info: " . $external_api_form_json; exit;
		
		if ( ! empty( $external_api_form_json ) ) {
			$external_api_form = json_decode( $external_api_form_json , true );
		}
		
		// echo "<pre>external_api_form info: " . print_r($external_api_form, true); exit;
		
		return $external_api_form[ "response" ][ "external_api_forms" ];
	}
	
	function get_apis() {
		$apis = [
			[ 'id' => 1 , 'name' => 'Convertkit' , 'namespace' => __NAMESPACE__ , 'instance_name' => 'convertkit_form_service', 'library' => 'ConvertKitFormService' ]
		];
		
		return $apis;
	}
	
	function get_api( $api_name ) {
		$apis = $this->get_apis();
		
		foreach ( $apis as $api ) {
			if ( $api[ 'name' ] == $api_name ) {
				return $api;
			}
		}
		
		return false;
	}
	
	function get_current_campaigns_api() {
		$api_name = 'Convertkit';
		
		return $this->get_api( $api_name );
	}
	
	function is_page() {
		
		aq2emm_log( "is_forms called" );
		
		$host = $this->getHost();
		$subdomain = $host[ 0 ];
		$agentData = $this->getAgentSite();
		
		if ( count( $host ) != 3 ) {
			$this->set404Status( true , false );
			aq2emm_log( "is_forms: 404" );
			return;
		}
		
		if ( $subdomain != 'www' && false ) {
			$this->set404Status( true , false );
			return;
		}
		
		$this->set404Status( false , true );
		
		$uri = $_SERVER[ 'REQUEST_URI' ];
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		$segments = $this->getVar('FD3')->uri->getUriSegments();
		
		if ( $method == 'GET' ) {
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				if ( count( $segments ) == 3 ) {
					
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_form_id = $segments[ 2 ];
					
					if ( $s_version == 'v1' && $s_entity == 'forms' ) {
						
						if ( strlen( $s_form_id ) > 0 && is_numeric( $s_form_id ) ) { // good if we got the right parameter format
							
							$form = $this->getForm( $s_form_id );
							
							$this->getVar('FD3')->session->registerSession( 'page' , [ "subdomain" => $subdomain , "form" => $form , "segments" => $segments ] );
							
							if ( $form && count( $form ) ) { // form exists
								// let's load it
								
								if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
									
									$formObj       = new \stdClass();
									$formObj->form = $form;
									echo json_encode( $form );
									aq2emm_exit( 'form(debug) json response output: ' . sprintf( "s_form_id: %s|lpage: %s|version: %s" , $s_form_id , print_r( $form , true ) , $s_version ) );
									
								}
								else {
									
									if ( isset( $form[ 'session_key' ] ) && ! empty( $form[ 'session_key' ] ) ) {
										
										$session_key = $form[ 'session_key' ];
										
										$form_data = [];
										
										// if they exist, let's pass the saved fields to the form
										
										if ( isset( $_SESSION[ $session_key ] ) ) {
											foreach ( $form[ 'fields' ] as $field ) {
												$session_key_field = $field[ 'name' ];
												if ( isset( $_SESSION[ $session_key ][ $session_key_field ] ) ) {
													$form_data[ $session_key_field ] = $_SESSION[ $session_key ][ $session_key_field ];
												}
											}
										}
										
										if ( $this->loadForm( $s_form_id , $form , $form_data ) ) {
											aq2emm_exit( 'form loaded: ' . sprintf( "s_form_id: %s|lpage: %s|version: %s" , $s_form_id , print_r( $form , true ) , $s_version ) );
										}
										else { // not good so pass control back
											aq2emm_exit( 'form not loaded. Page not found ' );
										}
										
									}
									else {
										
										if ( $this->loadForm( $s_form_id , $form ) ) {
											aq2emm_exit( 'form loaded: ' . sprintf( "s_form_id: %s|lpage: %s|version: %s" , $s_form_id , print_r( $form , true ) , $s_version ) );
										}
										else { // not good so pass control back
											aq2emm_exit( 'form not loaded. Page not found ' );
										}
										
									}
									
								}
								
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
			$error->examples = 'Valid methods: GET, POST';
			
			aq2emm_exit_json( $error );
			
		}
		else if ( $method == 'POST' ) {
			
			$fieldsArr = [];
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				if ( count( $segments ) == 3 ) {
					
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_form_id = $segments[ 2 ];
					
					if ( $s_version == 'v1' && $s_entity == 'forms' ) {
						
						if ( strlen( $s_form_id ) > 0 && is_numeric( $s_form_id ) ) { // good if we got the right parameter format
							
							$formDetails = $this->getForm( $s_form_id );
							
							$this->getVar('FD3')->session->registerSession( 'page' , [ "subdomain" => $subdomain , "form" => $formDetails , "segments" => $segments ] );
							
							if ( $formDetails && count( $formDetails ) ) { // form exists
								// let's load it
								foreach ( $formDetails[ 'fields' ] as $field ) {
									
									if ( ! isset( $_POST[ $field[ 'name' ] ] ) ) {
										exit;
									}
									else {
										$str = $_POST[ $field[ 'name' ] ];
										
										if ( ! strlen( $str ) ) {
											exit;
										}
										
										$fieldsArr[ $field[ 'name' ] ] = $str;
									}
								}
								
								$s_campaign_id = $formDetails[ 'page' ][ 'campaign_id' ];
								$apiForm = $this->get_external_API_form( $s_campaign_id );
								$redirect_uri = $formDetails[ 'campaign' ][ 'confirmation_url' ];
								$external_form_id = '';
								$external_form_id = intval( $apiForm[ 'external_form_id' ] );
								$api = $this->get_current_campaigns_api();
								
								if ( $api ) {
										
										$this->getVar( 'FD3' )->load->api( $api[ 'name' ], $api[ 'library' ], null, $api[ 'instance_name' ] );
										
										if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
											$this->get_available_convertkit_forms();
										}
										
										$this->getVar('FD3')->load->library( 'EndpointSecurity', null, 'ckEndpointSecurity' );
										$this->getVar('FD3')->load->library( 'Webhost', null, 'ckHost' );
										
										// $ckEndpointSecurity = new EndpointSecurity();
										// $ckHost             = new Webhost();
										
										$this->getVar('FD3')->ckHost->setHost( 'https://api.Convertkit.com/v3/' );
										
										$this->getVar('FD3')->ckEndpointSecurity->setAPIKey( $this->getAPIKey() );
										$this->getVar('FD3')->ckEndpointSecurity->setSecret( $this->getSecret() );
										
										$this->getVar('FD3')->{$api[ 'instance_name' ]}->setHost( $this->getVar('FD3')->ckHost );
										$this->getVar('FD3')->{$api[ 'instance_name' ]}->setEndPointSecurity( $this->getVar('FD3')->ckEndpointSecurity );
										
										$addOptin = [
											
											"api_key" => $this->getAPIKey() ,
											"email"   => $fieldsArr[ 'email' ] ,
											"name"    => $fieldsArr[ 'name' ] ,
											
											"fields" => [
												"phone"                     => $fieldsArr[ 'phone' ] ,
												"agent_sub_domain"          => $subdomain ,
												"agent_domain"              => $subdomain . '.aq2emarketing.com' ,
												"subscriber_type"           => 'agents_client' ,
												"source"                    => "marketing mailbox" ,
												"form_id"                   => $s_form_id ,
												"subscriber_e_mail_address" => $fieldsArr[ 'email' ] ,
												"campaign_id"               => $s_campaign_id ,
												"agent_account_id"          => $agentData[ 'site' ][ 'site_num' ] ,
												"agent_phone"               => $agentData[ 'site' ][ 'phone_text' ] ,
												"agent_email"               => $agentData[ 'site' ][ 'email_text' ] ,
												"agent_full_name"           => $agentData[ 'site' ][ 'AgentName' ] ,
												"agent_company"             => $agentData[ 'site' ][ 'company_name' ] ,
												"agent_marketing_website"   => 'https://' . $subdomain . '.aq2emarketing.com'
											]
											
											/*			"fields" => array(
														"first_name" => $contact['fields']
													)*/
										];
										
										// $args = json_encode( $addOptin );
										
										// echo "<pre>external_form_id: " . $external_form_id; exit;
										
										// echo "<pre>addOptin: " . print_r( $addOptin, true );
										// echo "<pre>agentData: " . print_r( $agentData, true ); exit;
										
										$res = $this->getVar('FD3')->{$api[ 'instance_name' ]}->addSubscriber( $external_form_id , $addOptin );
										
										$subscription = json_decode( json_encode( $res->subscription ) , true );
										
										// echo "<pre>subscription: " . print_r( $subscription, true ); exit;
										
										$subscriber = $subscription[ 'subscriber' ];
										
										// echo "<pre>subscriber: " . print_r( $subscriber, true ); exit;
										
										$this->save_subscriber(
											[
												"account_id"    => $agentData[ 'site' ][ 'site_num' ] ,
												"subscriber_id" => $subscriber[ 'id' ] ,
												"first_name"    => $fieldsArr[ 'name' ] ,
												"email"         => $fieldsArr[ 'email' ] ,
												"phone"         => $fieldsArr[ 'phone' ]
											]
										);
										
										if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
											
											printf( "<hr>" );
											var_dump( $addOptin );
											
											//  echo "<br>subscriber id: " . $subscription->subscribable_id;
											echo "<br>subscriber type: " . $subscription->subscribable_type;
											echo "<br>created_at: " . $subscription->created_at;
											echo "<br>form id: " . $subscriber->id;
											echo "<br>first name: " . $subscriber->first_name;
											echo "<br>email: " . $subscriber->email_address;
											
											printf( "<hr>" );
											var_dump( $res );
											printf( "<hr>" );
											
										}
										
										// printf("<pre>formDetails %s", print_r( $formDetails, true) ); exit;
										
										header( sprintf( "location: %s" , $redirect_uri ) );
										
										exit;
									
								}
								
								$campaign = $this->getCampaign( $s_campaign_id );
								
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
	
	function getCampaign( $form_id ) {
		return $this->getForm( $form_id );
	}
	
	function save_subscriber( $params ) {
		
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
		
		$p = array_merge( $params , [ "access_token" => $access_token ] );
		
		// echo "<pre>token_info: " . print_r($p, true); exit;
		
		$res = $this->getVar('FD3')->aq2e_api->save_subscriber( $p , $access_token );
		
		// echo "<pre>res: " . print_r($res, true); exit;
		
		/*
	if( ! empty( $page_form_json )) {
		$page_form = json_decode( $page_form_json, true );
	}
	
	return $page_form['response']['form_page'];*/
	}
	
	function get_available_convertkit_forms() {
		$useSSL = true;
		
		$url = 'https://api.Convertkit.com/v3/forms?api_key=' . $this->getAPIKey();
		
		$ch = curl_init();
		
		curl_setopt( $ch , CURLOPT_URL , $url );
		curl_setopt( $ch , CURLOPT_RETURNTRANSFER , true );
		curl_setopt( $ch , CURLOPT_TIMEOUT , 60 );
		
		if ( $useSSL == true ) {
			curl_setopt( $ch , CURLOPT_SSL_VERIFYPEER , 0 );
			curl_setopt( $ch , CURLOPT_SSL_VERIFYHOST , 0 );
		}
		
		curl_setopt( $ch , CURLOPT_USERAGENT , $this->getRandomUserAgent() );
		curl_setopt( $ch , CURLOPT_FOLLOWLOCATION , true );
		curl_setopt( $ch , CURLOPT_HEADER , false );
		
		//	    curl_setopt($ch, CURLOPT_GET);
		//	    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		
		$output     = curl_exec( $ch );
		$jsonObject = json_decode( $output );
		
		if ( $jsonObject === false ) {
			$this->api_error( [ "Error Number:" . curl_errno( $ch ) , "Error String:" . curl_error( $ch ) ] );
		}
		
		curl_close( $ch );
		//printf("<hr>");
		//var_dump($jsonObject);
		//printf("<hr>");
		$this->api_response( $jsonObject );
		
	}
	
	private function getRandomUserAgent() {
		$userAgents = [
			"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6" ,
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)" ,
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)" ,
			"Opera/9.20 (Windows NT 6.0; U; en)" ,
			"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50" ,
			"Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [en]" ,
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr; rv:1.7) Gecko/20040624 Firefox/0.9" ,
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/48 (like Gecko) Safari/48"
		];
		$random     = rand( 0 , count( $userAgents ) - 1 );
		
		return $userAgents[ $random ];
	}
	
	private function getAPIKey() {
		return "X-ffgIhIwUbJFtA9rOD3lQ";
	}
	
	private function getSecret() {
		return "6kw2lof43ZrIGuWmCJpii2s3DJR78bBhwktIgEvIwCQ";
	}
	
	function api_response( $msg ) {
		aq2emm_json_log2screen( [ "response" => $msg ] );
	}
	
	function __destruct() {
	}
	/*
	function FD3Forms() {
	
	}
	*/
} // end of FD3Forms