<?

require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'."iConvertKitResult.interface.php");

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