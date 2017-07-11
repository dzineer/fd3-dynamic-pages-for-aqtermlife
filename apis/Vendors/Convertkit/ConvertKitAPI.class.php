<?

namespace AQ2EMarketingPlatform;

class ConvertKitAPI extends FD3Library
{
	/**
	 * @var Webhost URL object to use for all requests.
	 */
	protected $host;

	/**
	 * @var EndpointSecurity.
	 */
	protected $endpointSecurity = '';

	/**
	 * @var FD3Endpoint The API endpoint.
	 */
	protected $apiEndpoint;

	/**
	 * @var string endpoint
	 */
	protected $endpoint;	

	/**
	 * @var ConvertKitData.
	 */
	protected $data = '';	

	/**
	 * @var int The API version you wish to use
	 */
	protected $version;

	/**
	 * @var int The Query Type POST/GET/PUT
	 */
	protected $queryType;

	/**
	 * @var bool Use JSON String
	 */
	protected $useJSONString;

	/**
	 * @var stdClass resultObject
	 */
	protected $resultObject;

	/**
	 * @var resource The cURL resource
	 */
	protected $ch;

	/**
	 * @param string $apiKey The API key for your account.
	 * @param int $version The API version you wish to use.
	 */
	public function __construct()
	{
	    // echo phpinfo(); exit;

		$this->useJSONString = false;
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_USERAGENT, 'ConvertKit-PHP-V3');
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($this->ch, CURLOPT_TIMEOUT, 600);
        $this->resultObject = new \stdClass();
		$this->queryType = 'GET';
	}

	public function setQueryType( $type ) {
		$this->queryType = $type;
	}

	public function setData( ConvertKitData $data ) {
		$this->data = $data;
	}

	/**
	 * @param array $arguments
	 * @return string
	 */
	public function queryAPI()
	{
		$this->host = $this->host->getHost();
		$this->endpoint = $this->apiEndpoint->getEndpoint();

		$this->apiUrl = $this->host . $this->endpoint;

		/*
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response  = curl_exec($ch);
			curl_close($ch);
		*/

		if ($this->queryType == 'POST') {
			return $this->postQuery();
		}
		else if($this->queryType == 'GET') {
			return $this->getQuery();
		} 
		else { // default to GEt Query if we don't have any other option
			return $this->getQuery();
		}

		return $this->resultObject;
	}

	private function postQuery() {

		if($this->useJSONString) {
			$data_json = $this->data->getData();
			curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data_json);
		}

	//	printf("<hr>");
	//	var_dump($data_json);

		curl_setopt($this->ch, CURLOPT_POST, true);
		curl_setopt($this->ch, CURLOPT_URL, $this->apiUrl);

		$this->resultObject = curl_exec($this->ch);

		return $this->resultObject;

	}

	private function getQuery() {

        $data_get = $this->data->getData();
		$apiKey = $this->endpointSecurity->getAPIKey();
		$apiSecret = $this->endpointSecurity->getSecret();

		if(count($data_get)) {
			$this->apiUrl .= '?' . $this->data->getData() ;
		}
		else {
			exit(0);
		}

	//	printf("<hr>");
	//	var_dump($this->apiUrl);
	//	printf("<hr>");

		///exit(0);

		curl_setopt($this->ch, CURLOPT_URL,  $this->apiUrl);
		$this->resultObject = curl_exec($this->ch);

		return $this->resultObject;

	}

	public function useJSON() {
		$this->useJSONString = true;
	}

	/**
	 * @return string JSON string
	 */
	public function getAllForms()
	{
		return $this->queryApi('forms');
	}

	/**
	 * @param EndpointSecrity
	 */
    public function setEndPointSecurity( $endpointSecurity ) {
        $this->endpointSecurity = $endpointSecurity;
    }
	

	public function setEndPoint( $endPoint ) {
		$this->apiEndpoint = $endPoint;
	}

    public function setHost( $host ) {
		$this->host = $host;
	}

    public function getResultObject() {
        return json_decode($this->resultObject);
    }

	/**
	 * @param integer $formId
	 * @return string JSON string.
	 */
	public function getFormDetails($formId)
	{
		$apiEndpoint = 'forms/' . $formId;
		return $this->queryApi($apiEndpoint);
	}
	/**
	 * Closes the cURL connection.
	 */
	public function __destruct()
	{
		if (is_resource($this->ch)) {
			curl_close($this->ch);
		}
	}
}