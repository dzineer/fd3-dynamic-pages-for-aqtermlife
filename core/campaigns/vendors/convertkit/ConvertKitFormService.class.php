<?

require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'iConvertKitWebService.interface.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitAPI.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'Webhost.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES.'EndpointSecurity.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES.'FD3Endpoint.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitFormData.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitResult.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitTagService.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitFormService.class.php');

class ConvertKitFormService implements iConvertKitWebService
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
	public function __construct()
	{
        $this->api = new ConvertKitAPI();
        $this->endpoint = new FD3Endpoint();
        $this->formData = new ConvertKitFormData();
	}

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
        $this->formData->setData( $data );
        $this->api->setData( $this->formData );
    }

	/**
	 * @param
	 */
    public function request() {
        $this->resultData = new ConvertKitResult();
        $res = $this->api->queryAPI();
        $this->resultData->setResult( $res );

        return $this->resultData->getResult();
    }

	/**
	 * @return Webhost
	 */
    public function getResult() {
        return $this->resultData->getResult();
    }

    // GET /v3/forms/<form_id>/subscriptions

	public function getSubscriptions($formId , $fields)
	{
        $this->endpoint->setEndPoint('/forms/' . $formId . '/subscriptions');
        $this->api->setHost( $this->host );
        $this->api->setEndPoint( $this->endpoint );
        $this->api->setEndPointSecurity( $this->security );
        $this->api->setQueryType( 'GET' );
        $this->setData( $fields );
        return $this->request();
	}

	public function addSubscriber($formId, $fields)
	{
        $this->endpoint->setEndPoint('forms/' . $formId . '/subscribe');
        $this->api->setHost( $this->host );
        $this->api->setEndPoint( $this->endpoint );
        $this->api->setEndPointSecurity( $this->security );
        $this->api->setQueryType( 'POST' );
        $this->api->useJSON();
        $this->formData->setDataType( 'POST' );
        $this->setData( $fields );
        return $this->request();
	}

	public function getForm()
	{
        $this->endpoint->setEndPoint('/forms');
        $this->api->setHost( $this->host );
        $this->api->setEndPoint( $this->endpoint );
        $this->api->setQueryType( 'GET' );
        return $this->request();
	}    

    public function getForms() {
        $this->endpoint->setEndPoint('/forms');
        return $this->request();
    }

    public function addForm() {

    }    

	public function __destruct()
	{

	}
}