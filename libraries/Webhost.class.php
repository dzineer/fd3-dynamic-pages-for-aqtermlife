<?

namespace AQ2EMarketingPlatform;

class Webhost {
    /**
	 * @var string The host domain or IP Address.
	 */
	protected $host;

	public function __construct()
	{
        $this->host = '';
	}

	/**
	 * @param string $host
	 * @return
	 */
	public function setHost($host)
	{
		$this->host = $host;
	}

	/**
	 * @param
	 * @return string $host
	 */
	public function getHost()
	{
		return $this->host;
	}

}