<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EMarketingMailboxGateway.clas.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:24 PM
 */
//require_once('');

class AQ2EMarketingMailboxGateway extends FD3Library {
	
	/* variables */

	private $uri;
	private $context;

	/* constants */
	
	function __construct() {}
	
	function setURL( $uri ) {
		$this->uri = $uri;
	}
	
	private
	function getRandomUserAgent()
	{
		$userAgents = array(
			"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6",
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)",
			"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)",
			"Opera/9.20 (Windows NT 6.0; U; en)",
			"Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50",
			"Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.02 [en]",
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; fr; rv:1.7) Gecko/20040624 Firefox/0.9",
			"Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/48 (like Gecko) Safari/48"
		);
		
		$random = rand(0,count($userAgents)-1);
		
		return $userAgents[$random];
	}
	
	private
	function httpPost($url, $params, $useSSL)
	{
		$result = new \stdClass();
		
		$postData = '';
		//create name value pairs seperated by &
		foreach($params as $k => $v) {
			$postData .= $k . '='.$v.'&';
		}
		
		rtrim($postData, '&');
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_TIMEOUT , 60);
		
		if($useSSL == true) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		}
		
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
		
		curl_setopt($ch, CURLOPT_USERAGENT, $this->getRandomUserAgent() );
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,TRUE);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, count($postData));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
		
		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$output = curl_exec($ch);
		
		$check = stristr( $output, 'Your profile has been saved!') === false ? false : true;
		
// Check if any error occurred
		if (!curl_errno($ch)) {
			$info = curl_getinfo($ch);
		//	echo 'Took ', $info['total_time'], ' seconds to send a request to ', $info['url'], "\n";
		}
		
		$result->successful = false;
		
/*		if($output === false)
		{
			//echo "Error Number:".curl_errno($ch)."<br>";
			//echo "Error String:".curl_error($ch);
		}
*/

		if($check) {
			$result->successful = true;
			$result->output = $output;
		}
		
		curl_close($ch);
		
		return $result;
		
	}
	
	public function connect( $params, $method, $useSSL ) {

        if( $method == 'POST' || $method == 'PUT' ) {
	          
	          $result = $this->httpPost($this->uri, $params, $useSSL);
              return $result;
              
        }
        else if( $method == 'GET' ) {
	
	        if (!$get) {
                return false;
            } else {
                return $get;
            }

        }
        
        return false;

    }

	public function subscribeToMarketingMailbox( $data ) {
		return $this->postMethod( $data );
	}
	
	private function getMethod( $data ) {
		return $this->connect( $data, 'GET', true );
	}
	
	private function postMethod( $data ) {
		return $this->connect( $data, 'POST', true );
	}
	
	function __destruct() {
	}

	/*
	function AQ2EMarketingMailboxGateway() {
	
	}
	*/
} // end of AQ2EMarketingMailboxGateway