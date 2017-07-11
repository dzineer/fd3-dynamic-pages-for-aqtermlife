<?

namespace AQ2EMarketingPlatform;

class EndpointSecurity {
	/**
	 * @var string The API key for your account.
	 */
	protected $apiKey;

	/**
	 * @var string The API endpoint.
	 */
	protected $secret;

	/**
	 * @var int The API version you wish to use
	 */

	public function __construct()
	{
        $this->apiKey = '';
        $this->secret = '';
	}

	/**
	 * @param string $key
	 * @return
	 */
	public function setAPIKey($key)
	{
		$this->apiKey = $key;
	}

	/**
	 * @param string $secret
	 * @return
	 */
	public function setSecret($secret)
	{
		$this->secret = $secret;
	}

	/**
	 * @param
	 * @return string $key
	 */
	public function getAPIKey()
	{
		return $this->apiKey;
	}

	/**
	 * @param
	 * @return array $secret
	 */
	public function getSecret()
	{
		return $this->secret;
	}
	
	/**
	 * Closes the cURL connection.
	 */
	public function __destruct()
	{

	}
}