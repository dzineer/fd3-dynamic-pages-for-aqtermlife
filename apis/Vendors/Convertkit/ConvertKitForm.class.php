<?

namespace AQ2EMarketingPlatform;

class ConvertKitForm
{
	/**
	 * @var string URL to use for all requests.
	 */
	protected $host = 'https://api.Convertkit.com/';

	/**
	 * @var string URL to use for all requests.
	 */
	protected $apiUrl = '';
	/**
	 * @var string The API key for your account.
	 */
	protected $apiKey;

	/**
	 * @var string The API endpoint.
	 */
	protected $apiEndpoint;

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
	public function __construct($apiKey, $version = 2)
	{
		$this->useJSONString = false;
		$this->apiKey = $apiKey;
		$this->version = $version;
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_USERAGENT, 'ConvertKit-PHP-V3');
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($this->ch, CURLOPT_TIMEOUT, 600);
        $this->resultObject = new stdClass();
		$this->queryType = 'GET';
	}



	/**
	 * @param array $arguments
	 * @return string
	 */
	protected function prepareQueryString(array $arguments = array())
	{
		$arguments['k'] = $this->apiKey;
		$arguments['v'] = $this->version;
		return http_build_query($arguments);
	}

	public function setQueryType( $type ) {
		$this->queryType = $type;
	}

	/**
	 * @param array $arguments
	 * @return string
	 */
	protected function queryApi(array $arguments = array())
	{
		$this->apiUrl = $this->host . $this->apiEndpoint;

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
			$data_json = json_encode( $arguments );
			curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'POST');
			curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data_json);
		}

		curl_setopt($this->ch, CURLOPT_POST, true);
		curl_setopt($this->ch, CURLOPT_URL, $this->apiUrl);

		$this->resultObject = curl_exec($this->ch);

		return $this->resultObject;

	}

	private function getQuery() {

		$this->apiUrl .= '?' . $this->prepareQueryString($arguments);
		curl_setopt($this->ch, CURLOPT_URL, $fullUrl);
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

	private function setFormsEndPoint( $id ) {
		$this->apiEndpoint = $this->version.'/forms/' . $id . '/subscribe';
	}

	/**
	 * @param integer $formId
	 * @param string $email
	 * @param string $firstName
	 * @param string $courseOptedIn
	 * @return string JSON string.
	 */
	public function subscribeToForm($formId, $fields)
	{

		$this->setFormsEndPoint( $formId );

		if(!is_array($fields)) {
			return false;
		}

		return $this->queryApi(
			$fields
		);
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