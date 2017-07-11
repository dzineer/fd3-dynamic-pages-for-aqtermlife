<?

namespace AQ2EMarketingPlatform;

class FD3Endpoint {
	/**
	 * @var string The API key for your account.
	 */
	protected $endpoint;

	public function __construct()
	{
        $this->endpoint = '';
	}

	/**
	 * @param string $key
	 * @return
	 */
	public function setEndpoint($endpoint)
	{
		$this->endpoint = $endpoint;
	}

	public function getEndpoint()
	{
		return $this->endpoint;
	}

	/**
	 * Closes the cURL connection.
	 */
	public function __destruct()
	{
        $this->endpoint = '';
	}
}