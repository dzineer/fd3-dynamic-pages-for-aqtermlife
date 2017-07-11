<?
namespace AQ2EMarketingPlatform;

$requires_interface = FD3_DYNAMIC_PAGES_PLUGIN_VENDOR_APIS . DIRECTORY_SEPARATOR . 'ConvertKit' . DIRECTORY_SEPARATOR . 'iConvertKitWebService.interface.php';

if( file_exists( $requires_interface ) ) {
	include_once( $requires_interface );
}

class ConvertKitFormService extends FD3Library implements iConvertKitWebService
{

	/**
	 * @var ConvertKitAPI 
	 */
	protected $api = '';

	/**
	 * @var Webhost to use for all requests.
	 */
	protected $host = '';

	/**
	 * @var EndpointSecrity to use for all requests.
	 */
	protected $security = '';

	/**
	 * @var FD3Endpoint The service endpoint.
	 */
	protected $endpoint;

	/**
	 * @var ConvertKitFormData
	 */
	protected $formData;

	/**
	 * @var ConvertKitResult
	 */
	protected $resultData;    

	/**
	 * @var int The API version you wish to use
	 */
	protected $version;

	/**
	 * @param string $apiKey The API key for your account.
	 * @param int $version The API version you wish to use.
	 */
	public function __construct() {}

	/**
	 * @param EndpointSecrity
	 */
    public function setEndPointSecurity( $security ) {
        $this->security = $security;
    }

	/**
	 * @param FD3Endpoint
	 */
    function setEndPoint( $endpoint ) {
        $this->endpoint = $endpoint;
    }    

	/**
	 * @param string Version
	 */
    public function setVersion( $version ) {
        $this->version = $version;
    }      

	/**
	 * @param Webhost
	 */
    public function setHost( $host ) {
        $this->host = $host;
    }    

	/**
	 * @param Webhost
	 */
    function setData( array $data ) {
	    $this->getVar( 'FD3' )->form_data->setData( $data );
	    $this->getVar( 'FD3' )->api->setData( $this->getVar( 'FD3' )->form_data );
    }

	/**
	 * @param
	 */
    public function request() {
	
	    $this->getVar( 'FD3' )->load->api( 'Convertkit', 'ConvertKitResult', null, 'result' );
        
        $res = $this->getVar( 'FD3' )->api->queryAPI();
	    $this->getVar( 'FD3' )->result->setResult( $res );

        return $this->getVar( 'FD3' )->result->getResult();
    }

	/**
	 * @return Webhost
	 */
    public function getResult() {
        return $this->getVar( 'FD3' )->result->getResult();
    }

    // GET /v3/forms/<form_id>/subscriptions

	public function getSubscriptions($formId , $fields)
	{
		$this->getVar( 'FD3' )->load->api( 'Convertkit', 'ConvertKitAPI', null, 'api', true );
		$this->getVar( 'FD3' )->load->library( 'FD3Endpoint', null, 'endpoint', true );
		$this->getVar( 'FD3' )->load->api( 'Convertkit', 'ConvertKitFormData', null, 'form_data' );
		
		$this->getVar( 'FD3' )->endpoint->setEndPoint('/forms/' . $formId . '/subscriptions');
		$this->getVar( 'FD3' )->api->setHost( $this->host );
		$this->getVar( 'FD3' )->api->setEndPoint( $this->getVar( 'FD3' )->endpoint );
		$this->getVar( 'FD3' )->api->setEndPointSecurity( $this->security );
		$this->getVar( 'FD3' )->api->setQueryType( 'GET' );
        $this->setData( $fields );
        return $this->request();
	}

	public function addSubscriber($formId, $fields)
	{
		$this->getVar( 'FD3' )->load->api( 'Convertkit', 'ConvertKitAPI', null, 'api', true );
		$this->getVar( 'FD3' )->load->library( 'FD3Endpoint', null, 'endpoint', true );
		$this->getVar( 'FD3' )->load->api( 'Convertkit', 'ConvertKitFormData', null, 'form_data' );
		
		$this->getVar( 'FD3' )->endpoint->setEndPoint('forms/' . $formId . '/subscribe');
        $this->getVar( 'FD3' )->api->setHost( $this->host );
        $this->getVar( 'FD3' )->api->setEndPoint( $this->getVar( 'FD3' )->endpoint );
        $this->getVar( 'FD3' )->api->setEndPointSecurity( $this->security );
        $this->getVar( 'FD3' )->api->setQueryType( 'POST' );
        $this->getVar( 'FD3' )->api->useJSON();
		$this->getVar( 'FD3' )->form_data->setDataType( 'POST' );
        $this->setData( $fields );
        return $this->request();
	}

	public function getForm()
	{
		$this->getVar( 'FD3' )->endpoint->setEndPoint('/forms');
		$this->getVar( 'FD3' )->api->setHost( $this->host );
		$this->getVar( 'FD3' )->api->setEndPoint( $this->getVar( 'FD3' )->endpoint );
		$this->getVar( 'FD3' )->api->setQueryType( 'GET' );
        return $this->request();
	}    

    public function getForms() {
	    $this->getVar( 'FD3' )->endpoint->setEndPoint('/forms');
        return $this->request();
    }

    public function addForm() {

    }    

	public function __destruct()
	{

	}
}