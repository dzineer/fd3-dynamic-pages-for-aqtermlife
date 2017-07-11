<?php
/**
 * Filename: FD3link.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 9:42 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3Link extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getHost() {
		$hostname = $_SERVER[ 'HTTP_HOST' ];
		$host     = explode( '.' , $hostname );
		return $host;
	}
	
	function getAgentSite() {
		
		$this->getVar('FD3')->load->library( 'AQ2EGeneralAgentAccount', null, 'ga_site', true );
		return $this->getVar('FD3')->ga_site->getSite();
		
	}
	
	function set404Status( $is_404 , $is_active ) {
		global $wp_query;
		
		if ( $wp_query->is_404 ) {
			$wp_query->is_404    = $is_404;
			$wp_query->is_active = $is_active;
		}
		
	}
	
	function getLink( $hash ) {
		
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
		$registered_link_json = $this->getVar('FD3')->aq2e_api->get_registered_link( $hash , $access_token );
		
		$registered_link = [];
		
		if ( ! empty( $registered_link_json ) ) {
			$registered_link = json_decode( $registered_link_json , true );
		}
		
		// echo "<pre>registered_link info: " . print_r($registered_link, true); exit;
		
		return $registered_link[ 'response' ][ 'registered_link' ][ 0 ];
	}
	
	function get_apis() {
		$apis = [
			[ 'id' => 1 , 'name' => 'Convertkit' , 'namespace' => '' , 'library' => 'ConvertKitFormService' ]
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
	
	function is_link() {
		
		aq2emm_log( "is_forms called" );
		
		$s_sequence_id      = '';
		$s_sequence_index   = '';
		$s_subscriber_email = '';
		
		$host = $this->getHost();
		
		// aq2emm_json_log2screen( array( $host ) );
		
		$subdomain = $host[ 0 ];
		
		$agentData = $this->getAgentSite();
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
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
		
		// printf("<pre>uri: %s", $uri ); exit;
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		$segments = $this->getVar('FD3')->uri->getUriSegments();
		
		if ( $method == 'GET' ) {
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				
				$segment_length = count( $segments );
				
				if ( $segment_length == 3 || $segment_length == 4 ) {
					
					$s_version   = $segments[ 0 ];
					$s_entity    = $segments[ 1 ];
					$s_link_hash = $segments[ 2 ];
					
					if ( $segment_length == 4 ) { // if segment length 6 then we have a { sequence_id, sequence_index, subscriber_email }
						$s_subscriber_email = $segments[ 3 ];
					}
					
					/*				printf("<pre>Slug: %s", $slug);
								printf("<pre>String Params: %s", $s_param); exit;*/
					
					if ( $s_version == 'v1' && $s_entity == 'link' ) {
						
						if ( strlen( $s_link_hash ) > 0 && ctype_alnum( $s_link_hash ) ) { // good if we got the right parameter format
							
							// echo "<pre>s_link_hash: " .  print_r( $s_link_hash, true ); exit;
							
							$link_info = $this->getLink( $s_link_hash );
							
							if ( strlen( $s_sequence_id ) != 0 && strlen( $s_sequence_index ) != 0 && strlen( $s_subscriber_email ) != 0 ) { // okay we do something special here because we have the subscriber id from our campaign
								echo "<pre>$s_sequence_id: " . $s_sequence_id;
								echo "<pre>$s_sequence_index: " . $s_sequence_index;
								echo "<pre>$s_subscriber_email: " . $s_subscriber_email;
								exit;
							}
							
							if ( $link_info && count( $link_info ) ) { // link exists
								// let's load it
								
								if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
									
									aq2emm_exit( 'form(debug) json response output: ' . sprintf( "" ) );
									
								}
								else {
									
									if ( strlen( $s_subscriber_email ) > 0 ) {
										// echo "<pre>s_subscriber_email: ".$s_subscriber_email . " yes <br> ";
										$this->register_linked_clicked( [ "hash" => $s_link_hash , "email" => $s_subscriber_email ] );
									}
									
									// echo "<pre>link_info: " .  print_r( $link_info, true ); exit;
									header( 'location: ' . $link_info[ 'link' ] );
									// echo "<pre>link_info: " .  print_r( $link_info, true ); exit;
									exit;
									
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
			
			/*			$error = new \stdClass();
					$error->message = 'Valid Request Method';
					$error->examples = 'Valid methods: GET, PUT';
		
					aq2emm_exit_json( $error );*/
			
			// $this->get_available_convertkit_forms(); exit;
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				if ( count( $segments ) == 3 ) {
					
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_form_id = $segments[ 2 ];
					
					if ( $s_version == 'v1' && $s_entity == 'link' ) {
						
						if ( strlen( $s_form_id ) > 0 && is_numeric( $s_form_id ) ) { // good if we got the right parameter format
							
							$formDetails = $this->getForm( $s_form_id );
							
							$this->getVar( 'FD3' )->session->registerSession( 'page' , [ "subdomain" => $subdomain , "form" => $formDetails , "segments" => $segments ] );
							
							if ( $formDetails && count( $formDetails ) ) { // form exists

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
								
								$campaign_id_s = $formDetails[ 'page' ][ 'campaign_id' ];
								$apiForm = $this->get_external_API_form( $campaign_id_s );

								$redirect_uri = $formDetails[ 'campaign' ][ 'confirmation_url' ];
								
								$external_form_id = '';
								
								$external_form_id = intval( $apiForm[ 'external_form_id' ] );
								
								$api = $this->get_current_campaigns_api();
								
								if ( $api ) {
									if ( strlen( $api[ 'namespace' ] ) > 0 ) {
										
										$className = sprintf( "%s\%s" , $api[ 'namespace' ] , $api[ 'library' ] );
										printf( "Loading API Class %s" , $className );
										
										$this->fd3_load_class(
											FD3_DYNAMIC_PAGES_PLUGIN_APIS . $api[ 'name' ] . '\\' , $className
										);
										
										// X-ffgIhIwUbJFtA9rOD3lQ
										
										$apiObj = new $className();
										
										if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
											$this->get_available_convertkit_forms();
										}
										
										exit;
									}
									else {
										
										// $agentData
										
										// aq2emm_json_log2screen( $agentData[ 'site' ] );
										
										$className = sprintf( "%s" , $api[ 'library' ] );
										
										$this->fd3_load_class(
											FD3_DYNAMIC_PAGES_PLUGIN_APIS . $api[ 'name' ] . '\\' , $className
										);
										
										if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
											$this->get_available_convertkit_forms();
										}
										
										$ckService          = new $className();
										
										$this->getVar('FD3')->load->library( 'EndpointSecurity', null, 'ckEndpointSecurity' );
										$this->getVar('FD3')->load->library( 'Webhost', null, 'ckHost' );
										
										$ckHost->setHost( 'https://api.Convertkit.com/v3/' );
										
										$this->getVar('FD3')->load->ckEndpointSecurity->setAPIKey( $this->getAPIKey() );
										$this->getVar('FD3')->load->ckEndpointSecurity->setSecret( $this->getSecret() );
										
										$ckService->setHost( $this->getVar('FD3')->ckHost );
										$ckService->setEndPointSecurity( $this->getVar('FD3')->load->ckEndpointSecurity );
										
										$addOptin = [
											"api_key" => $this->getAPIKey() ,
											"email"   => $fieldsArr[ 'email' ] ,
											"name"    => $fieldsArr[ 'name' ] ,
											"fields"  => [
												"phone"           => $fieldsArr[ 'phone' ] ,
												"sub_domain"      => $subdomain ,
												"domain"          => $subdomain . '.aq2emarketing.com' ,
												"subscriber_type" => 'agents_client' ,
												"source"          => "marketing mailbox" ,
												"form_id"         => $s_form_id ,
												"campaign_id"     => $campaign_id_s ,
												"account_id"      => $agentData[ 'site' ][ 'site_num' ]
											]
											
											/*			"fields" => array(
														"first_name" => $contact['fields']
													)*/
										];
										
										// $args = json_encode( $addOptin );
										
										// echo "<pre>external_form_id: " . $external_form_id; exit;
										
										$res = $ckService->addSubscriber( $external_form_id , $addOptin );
										
										$subscription = $res->subscription;
										$subscriber   = $res->subscription->subscriber;
										
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
								}
								
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
	
	function register_linked_clicked( $params ) {
		
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
		
		$res = $this->getVar('FD3')->aq2e_api->register_click( $p , $access_token );

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
	
	function fd3_load_class( $path , $className ) {
		$loadClass = $path . $className . '.class.' . 'php';
		// echo $loadClass; exit;
		if ( file_exists( $loadClass ) ) {
			require_once( $loadClass );
		}
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
	
	function api_response( $msg ) {
		aq2emm_json_log2screen( [ "response" => $msg ] );
	}
	
	function __destruct() {
	}
	/*
	function FD3link() {
	
	}
	*/
} // end of FD3link