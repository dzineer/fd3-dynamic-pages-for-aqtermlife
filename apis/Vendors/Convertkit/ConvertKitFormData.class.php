<?
namespace AQ2EMarketingPlatform;

$requires_interface = FD3_DYNAMIC_PAGES_PLUGIN_VENDOR_APIS . DIRECTORY_SEPARATOR . 'ConvertKit' . DIRECTORY_SEPARATOR . 'ConvertKitData.class.php';

if( file_exists( $requires_interface ) ) {
	include_once( $requires_interface );
}

class ConvertKitFormData extends ConvertKitData {
	/**
	 * @var array The Form data.
	 */
	private $data;

	/**
	 * @var string post or get variables form data.
	 */
    private $dataType;

	public function __construct()
	{
        $this->data = array();
        $this->dataType = 'GET';
	}

	/**
	 * @param string $key
	 * @return
	 */
	public function setDataType($dataType)
	{
		$this->dataType = $dataType;
	}

	/**
	 * @param string $key
	 * @return
	 */
	public function setData(array $data)
	{
		$this->data = $data;
	}

	public function getData()
	{
        $getInfo = '';
        if($this->dataType == 'POST') {
		    return json_encode($this->data);
        }
        else {
            return http_build_query($this->data);
        }
	}

	/**
	 * Closes the cURL connection.
	 */
	public function __destruct()
	{
        $this->data = null;
	}
}