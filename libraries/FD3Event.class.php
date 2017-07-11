<?php
/**
 * Filename: FD3Event.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 10:39 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3Event extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function is_valid_auth_token() {
		
		$auth_token = ( ! empty( $_GET[ 'auth_token' ] ) ) ? $_GET[ 'auth_token' ] : '';
		$valid      = ( ! empty( $auth_token ) && ! empty( $_SESSION[ 'auth_token' ] ) && $_SESSION[ 'auth_token' ][ 'token' ] == $auth_token ) ? true : false;
		$expired = false;
		
		$now = date( "F j, Y, H:i" , time() );
		
		if ( $valid ) {
			$expired = $_SESSION[ 'auth_token' ][ 'expires' ] > $now ? false : true;
		}
		
		if ( $valid && $expired ) { // have a valid token but it is expired
			$this->clear_auth_token();
			
			return false;
		}
		else if ( $valid && ! $expired ) {
			return true;
		}
		else {
			return false;
			
		}
		
	}
	
	function clear_auth_token() {
		$key = isset( $_SESSION[ 'auth_token' ] );
		
		if ( $key ) {
			unset ( $_SESSION[ 'auth_token' ] );
		}
	}
	
	function get_remote_auth_tokens() {
		$tokens = [
			
			[
				'remote_auth_token' => '04a8ec99-776c-561a-a4e6-220b7b6bba89'
			]
		
		];
		
		return $tokens;
	}
	
	function is_valid_remote_auth_token() {
		
		$remote_auth_token = ( ! empty( $_GET[ 'remote_auth_token' ] ) ) ? $_GET[ 'remote_auth_token' ] : '';
		$valid             = false;
		$tokens            = $this->get_remote_auth_tokens();
		
		foreach ( $tokens as $token ) {
			if ( $token[ 'remote_auth_token' ] == $remote_auth_token ) {
				$valid = true;
				break;
			}
		}
		
		if ( $valid ) {
			return true;
		}
		else {
			return false;
		}
		
	}
	
	function is_valid_token() {
		
		$valid_remote_auth_token = $this->is_valid_remote_auth_token();
		$valid_auth_token        = $this->is_valid_auth_token();
		
		if ( $valid_remote_auth_token || $valid_auth_token ) {
			return true;
		}
		else {
			$this->auth_token_error( "invalid auth_token" );
			
			return false;
		}
		
	}
	
	function auth_token_error( $msg ) {
		$this->api_error( $msg );
	}
	
	
	function api_response( $msg ) {
		aq2emm_json_log2screen( [ "response" => $msg ] );
	}
	
	function api_error( $msg ) {
		$this->api_response( [ "errors" => [ "error" => $msg ] ] );
	}
	
	function is_event() {
		$subdomRedirect = false;
		
		$host = $this->getHost();
		
		if ( count( $host ) != 3 ) {
			$this->set404Status( true , false );
			
			return;
		}
		
		$subdomain = $host[ 0 ];
		
		// aq2emm_json_log2screen( array( $subdomain ) );
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
		if ( ! in_array( $subdomain , [ 'api' ] ) ) {
			return;
		}
		
		$uri      = $_SERVER[ 'REQUEST_URI' ];
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		
		$this->is_valid_token();
		
		if ( ( $method == 'GET' || $method == 'get' ) ) {
			
			$success          = new \stdClass();
			$success->message = 'Valid Request Method';
			
			$segments = $uriUtils->getUriSegments();
			
			// aq2emm_json_log2screen( array( $method ) );
			
			//  $this->set404Status( false, true );
			
			$uri = $_SERVER[ 'REQUEST_URI' ];
			
			/*

			"v1",
			"events"

		 */
			
			// aq2emm_json_log2screen( array( $segments ) );
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) {
				
				if ( count( $segments ) == 3 ) {
					$s_version  = $segments[ 0 ];
					$s_entity   = $segments[ 1 ];
					$s_event_id = $segments[ 2 ];
					
					
					if ( $s_entity == 'events' ) {
						
						$event = $this->getEvents( $s_event_id );
						
						if ( ! empty( $event ) ) {
							
							fd3_http_response_code( 200 );
							
							aq2emm_convertkit_log(
								print_r( [ "_GET" => $_GET , "event" => $event ] , true )
							);
							
							aq2emm_json_log2screen( [ "Request Type" => 'GET' , "event" => $event ] );
						}
						else {
							$this->api_error( "event does not exist" );
						}
						
					}
					
				}
				else {
					return;
				}
				// echo printf("<br>Count: %s", count($path)) . print_r($path,true);
			}
			else {
				return;
			}
			
			// aq2emm_exit_json( $success );
		}
		else if ( ( $method == 'POST' || $method == 'post' ) ) {
			
			$success          = new \stdClass();
			$success->message = 'Valid Request Method';
			
			$segments = $uriUtils->getUriSegments();
			
			// aq2emm_json_log2screen( array( $method ) );
			
			$this->set404Status( false , true );
			
			$uri = $_SERVER[ 'REQUEST_URI' ];
			
			if ( count( $segments ) == 3 ) {
				$s_version  = $segments[ 0 ];
				$s_entity   = $segments[ 1 ];
				$s_event_id = $segments[ 2 ];
				
				if ( $s_entity == 'events' ) {
					
					$event = $this->getEvents( $s_event_id );
					
					if ( ! empty( $event ) ) {
						
						$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
						
						fd3_http_response_code( 200 );
						
						// echo "Good";
						
						aq2emm_convertkit_log(
							print_r( [ "_POST" => $HTTP_RAW_POST_DATA , "event" => $event ] , true )
						);
						
						// exit(0);
						
						aq2emm_json_log2screen( [ "_POST" => $HTTP_RAW_POST_DATA , "event" => $event ] );
					}
					
				}
				
			}
		}
		else if ( ( $method == 'PUT' || $method == 'put' ) ) {
			
			$success          = new \stdClass();
			$success->message = 'Valid Request Method';
			
			$segments = $uriUtils->getUriSegments();
			
			// aq2emm_json_log2screen( array( $method ) );
			
			//  $this->set404Status( false, true );
			
			$uri = $_SERVER[ 'REQUEST_URI' ];
			
			if ( count( $segments ) >= 2 ) {
				$s_version = $segments[ 0 ];
				$s_entity  = $segments[ 1 ];
				
				if ( $s_entity == 'log' ) {
					
					$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
					
					fd3_http_response_code( 200 );
					
					// echo "Good";
					
					aq2emm_convertkit_log(
						[ "_PUT" => $HTTP_RAW_POST_DATA ]
					);
					
					// exit(0);
					
					aq2emm_json_log2screen( [ "_PUT" => $HTTP_RAW_POST_DATA ] );
					
				}
				
			}
			
		}
		
	}
	
	function getEvents( $id ) {
		
		$events = [
			
			[
				'id'     => '90001' ,
				'name'   => 'subscriber.subscriber_activate' ,
				'entity' => 'subscriber' ,
				'action' => 'activate_subscriber'
			] ,
			[
				'id'     => '90002' ,
				'name'   => 'subscriber.tag_add' ,
				'entity' => 'tag' ,
				'tag'    => [
					'id'   => '212585' ,
					'name' => "Viewed Needs Analyzer Page"
				] ,
				'action' => 'add_subscriber_tag'
			] ,
			[
				'id'       => '90003' ,
				'name'     => 'subscriber.course_complete' ,
				'entity'   => 'sequence' ,
				'sequence' => [
					'id'   => '88096' ,
					'name' => "Nurturing Opt-in Agents Sequence"
				] ,
				'action'   => 'end_subscriber_campaign'
			] ,
			[
				'id'     => '90004' ,
				'name'   => 'subscriber.tag_remove' ,
				'entity' => 'tag' ,
				'tag'    => [
					'id'   => '213000' ,
					'name' => "Started Nurturing Optin Agents Sequence"
				] ,
				'action' => 'remove_subscriber_tag'
			] ,
			[
				'id'     => '90005' ,
				'name'   => 'subscriber.tag_remove' ,
				'entity' => 'tag' ,
				'tag'    => [
					'id'   => '212585' ,
					'name' => "Viewed Needs Analyzer Page"
				] ,
				'action' => 'remove_subscriber_tag'
			]
		
		];
		
		foreach ( $events as $event ) {
			if ( $event[ 'id' ] == $id ) {
				return $event;
			}
		}
		
		return null;
	}
	
	function __destruct() {
	}
	
	/*
	function FD3Event() {
	
	}
	*/
} // end of FD3Event