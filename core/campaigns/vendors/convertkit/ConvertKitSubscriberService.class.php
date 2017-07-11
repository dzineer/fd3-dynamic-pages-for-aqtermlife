<?

require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitAPI.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'Webhost.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES.'EndpointSecurity.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES.'FD3Endpoint.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitFormData.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitResult.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitTagService.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitFormService.class.php');

class ConvertKitSubscriberService /* implements iConvertKitWebService */
{
	/**
	 * @var ConvertKitTagService
	 */
	protected $tagService;

	/**
	 * @var ConvertKitTagService
	 */
	protected $formService;	

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
		$this->tagService = new ConvertKitTagService();
		$this->formService = new ConvertKitFormService();
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

	public function subscribe($formId, $fields)
	{
		$this->formService->setHost( $this->host );
        $this->formService->setEndPointSecurity(  $this->security );		
        $this->formService->setEndPoint( $this->endpoint );
		return $this->formService->addSubscriber( $formId, $fields );
	}

	public function getSubscriptions($formId , $fields)
	{
		$this->formService->setHost( $this->host );
        $this->formService->setEndPointSecurity(  $this->security );		
        $this->formService->setEndPoint( $this->endpoint );
		return $this->formService->getSubscriptions( $formId, $fields );
	}	

	public function tagSubscriber($tagId, $fields)
	{
		$this->tagService->setHost( $this->host );
        $this->tagService->setEndPointSecurity(  $this->security );		
        $this->tagService->setEndPoint( $this->endpoint );
		return $this->tagService->tagSubscriber( $tagId, $fields );
	}

	public function __destruct() {

	}
}