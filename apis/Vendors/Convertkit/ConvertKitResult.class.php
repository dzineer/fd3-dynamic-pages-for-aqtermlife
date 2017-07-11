<?
namespace AQ2EMarketingPlatform;

$requires_interface = FD3_DYNAMIC_PAGES_PLUGIN_VENDOR_APIS . DIRECTORY_SEPARATOR . 'ConvertKit' . DIRECTORY_SEPARATOR . 'iConvertKitResult.interface.php';

if( file_exists( $requires_interface ) ) {
	include_once( $requires_interface );
}

class ConvertKitResult implements iConvertKitResult {
	/**
	 * @var Array result request
	 */
    private $data;
    private $useJSON;

    public function __construct()
	{
        $this->useJSON = true;
	}

    public function setResult( $data ) {
        $this->data = $data;
    }

    public function getResult() {
        if($this->useJSON) {
            return json_decode($this->data);
        }
        else {
            return $this->data;
        }
    }
}