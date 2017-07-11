<?php
/*
 * AccountFacade.php - 
 *
 */

namespace AQ2EMarketingPlatform;

class AQ2EAuthClient {
	private $ch;
	private $result;
	private $jsonResult;
	protected $readyForAuth;
	
	public function init( $uri ) {
		$this->ch = curl_init();
		
		$this->readyForAuth = false;
		
		curl_setopt( $this->ch, CURLOPT_URL, $uri );
		curl_setopt( $this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt( $this->ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
		curl_setopt( $this->ch, CURLOPT_POST, 1);
		
		$headers = array();
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);
	}
	
	public function setCredentials( $client_id, $client_secret ) {
		curl_setopt($this->ch, CURLOPT_USERPWD, $client_id . ":" . $client_secret );
		$this->readyForAuth = true;
	}
	
	public function request( $uri ) {
		$result = curl_exec($this->ch);
		if (curl_errno($this->ch)) {
			$this->result = json_encode( [ "response" => ["error" => 'Error:' . curl_error($this->ch) ] ] );
		}
		curl_close ($this->ch);
		$this->result = json_decode($result);
		return $this;
	}
	
	public function toJSON() {
		$this->jsonResult = json_encode( $this->result );
		return $this->jsonResult;
	}
	
	public function toDetails() {
		$arr = json_decode( $this->jsonResult, true );
		// echo print_r( $arr, true ); exit;
		$s = '';
		if( !empty( $arr['access_token'] ) ) {
			$s = '';
			foreach( $arr as $key => $data ) {
				$s .= "\n" . $key . ': ' . $data;
			}
		}
		$s .= "\n";
		return $s;
	}
}

class Authorize_facade
{
	var $debug = false;
	protected $ch;
	protected $readyForAuth;
	protected $aq2e_client;
	private $CI;
	
	function __construct() {
		$this->readyForAuth = false;
	}
	
	function authorize_for_token(  ) {
		
		// return array( "access_token" => "c81b85f72964597372a0ed9b173a43cba6a6df1b", "scope" => "NULL" );
		
		$uri = 'https://api.aq2e.com/oauth2-server/token.php';
		$client_id = 'aq2emarketing';
		$client_secret = 'bMRqdUPE2xCNAkUx7kgD6V2Y';
		$this->aq2e_client = new AQ2EAuthClient();
		$this->aq2e_client->init( $uri );
		$this->aq2e_client->setCredentials( $client_id, $client_secret );
		
		$result = $this->aq2e_client->request( $uri )->toJSON();

		return $result;
		
		// echo $result;
		// echo $this->aq2e_client->toDetails();
	}
	
}