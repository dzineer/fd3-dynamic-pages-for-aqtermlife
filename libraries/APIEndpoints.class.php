<?php
/*
 * AccountFacade.php - 
 *
 */

namespace AQ2EMarketingPlatform;

if( ! class_exists( "AQ2EMarketingPlatform\APIEndpoints" ) ) {
	
	class APIEndpoints {
		private $ch;
		private $result;
		private $jsonResult;
		protected $readyForAuth;
		
		public function init( $uri ) {
			$this->ch = curl_init();
			
			$this->readyForAuth = false;
			
			curl_setopt( $this->ch , CURLOPT_URL , $uri );
			curl_setopt( $this->ch , CURLOPT_RETURNTRANSFER , 1 );
			
			$headers   = [];
			$headers[] = "Content-Type: application/x-www-form-urlencoded";
			curl_setopt( $this->ch , CURLOPT_HTTPHEADER , $headers );
			curl_setopt( $this->ch , CURLOPT_RETURNTRANSFER , true );
		}
		
		public function request() {
			$result = curl_exec( $this->ch );
			if ( curl_errno( $this->ch ) ) {
				$this->result = json_encode( [ "response" => [ "error" => 'Error:' . curl_error( $this->ch ) ] ] );
			}
			curl_close( $this->ch );
			$this->result = json_decode( $result );
			
			// echo "<pre>Result: " . print_r($result,true);
			
			return $this;
		}
		
		public function toJSON() {
			$this->jsonResult = json_encode( $this->result );
			
			return $this->jsonResult;
		}
		
		public function toDetails() {
			$arr = json_decode( $this->jsonResult , true );
			// echo print_r( $arr, true ); exit;
			$s = '';
			if ( ! empty( $arr[ 'access_token' ] ) ) {
				$s = '';
				foreach ( $arr as $key => $data ) {
					$s .= "\n" . $key . ': ' . $data;
				}
			}
			$s .= "\n";
			
			return $s;
		}
		
		function get_confirmation_page( $id , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/confirmation_pages/' . $id . '?access_token=' . $access_token;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		public function post_request( $uri , $post_fields ) {
			$this->ch = curl_init();
			$start    = true;
			$s        = '';
			
			if ( is_array( $post_fields ) ) {
				foreach ( $post_fields as $key => $val ) {
					if ( $start ) {
						$s     = $s . $key . '=' . $val;
						$start = false;
					}
					else {
						$s = $s . '&' . $key . '=' . $val;
					}
				}
			}
			else {
				$s = $post_fields;
			}
			
			// echo "<pre>post_fields: " . $s; exit;
			
			curl_setopt( $this->ch , CURLOPT_URL , $uri );
			curl_setopt( $this->ch , CURLOPT_RETURNTRANSFER , 1 );
			curl_setopt( $this->ch , CURLOPT_POSTFIELDS , $s );
			curl_setopt( $this->ch , CURLOPT_POST , 1 );
			
			$headers   = [];
			$headers[] = "Content-Type: application/x-www-form-urlencoded";
			curl_setopt( $this->ch , CURLOPT_HTTPHEADER , $headers );
			
			$result = curl_exec( $this->ch );
			
			// echo "<pre>Result: " . print_r($result,true); exit;
			
			if ( curl_errno( $this->ch ) ) {
				$this->result = json_encode( [ "response" => [ "error" => 'Curl Error:' . curl_error( $this->ch ) ] ] );
			}
			
			curl_close( $this->ch );
			$this->result = json_decode( $result );
			
			return $this;
		}
		
		function save_subscriber( $params , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/subscribers';
			
			return $this->post_request( $uri , $params )->toDetails();
			// return $result;

//		echo $result;
//		echo $this->toDetails(); exit;
		}
		
		function get_form_page( $id , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/form_pages/' . $id . '?access_token=' . $access_token;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		function get_external_api_form( $id , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/external_api_forms/' . $id . '?access_token=' . $access_token;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		function get_capture_link( $id , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/capture_links/' . $id . '?access_token=' . $access_token;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		function get_registered_link( $hash , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/link_monitors/' . $hash . '?access_token=' . $access_token;
			
			// echo $uri; exit;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		function register_click( $params , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/link_monitors';
			
			// echo $uri; exit;
			
			$this->init( $uri );
			
			return $this->post_request( $uri , $params )->toDetails();
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
		
		function get_capture_link_rules( $id , $access_token ) {
			$uri = 'https://api.aq2e.com/v1/capture_link_rules/' . $id . '?access_token=' . $access_token;
			
			$this->init( $uri );
			$result = $this->request()->toJSON();
			
			return $result;
			
			// echo $result;
			// echo $this->aq2e_client->toDetails();
		}
	}
	
}