<?

namespace AQ2EMarketingPlatform;

abstract class ConvertKitData {
    /**
	 * @var string The API key for your account.
	 */
	private $data;

    abstract function setDataType( $type );
    abstract function setData( array $data );
    abstract function getData();
}