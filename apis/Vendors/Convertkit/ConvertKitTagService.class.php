<?
namespace AQ2EMarketingPlatform;

class ConvertKitTagService implements iConvertKitWebService
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

	/**
	 * @param
	 */
    public function request() {
        $this->resultData = new ConvertKitResult();
	
	    // $this->api_response( "test" );
	    
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

    // POST /v3/tags/<tag_id>/subscribe
	
	public function addTag( $data )
	{
		$this->endpoint->setEndPoint('tags/');
		$this->api->setHost( $this->host );
		$this->api->setEndPoint( $this->endpoint );
		$this->api->setEndPointSecurity( $this->security );
		$this->api->setQueryType( 'POST' );
		$this->api->useJSON();
		$this->formData->setDataType( 'POST' );
		$this->setData( $data );
		return $this->request();
	}
	
	public function tagSubscriber($tagId, $data)
	{
        $this->endpoint->setEndPoint('tags/' . $tagId . '/subscribe');
        $this->api->setHost( $this->host );
        $this->api->setEndPoint( $this->endpoint );
        $this->api->setEndPointSecurity( $this->security );
        $this->api->setQueryType( 'POST' );
        $this->api->useJSON();
        $this->formData->setDataType( 'POST' );
        $this->setData( $data );
        return $this->request();
	}

	

	public function getTags()
	{
        $this->endpoint->setEndPoint('/tags');
        $this->api->setHost( $this->host );
        $this->api->setEndPoint( $this->endpoint );
        $this->api->setQueryType( 'GET' );
        return $this->request();
	}    

	public function __destruct()
	{

	}
}