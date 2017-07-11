<?

require_once(FD3_DYNAMIC_PAGES_PLUGIN_APIS.'\\Convertkit\\'.'ConvertKitData.class.php');

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