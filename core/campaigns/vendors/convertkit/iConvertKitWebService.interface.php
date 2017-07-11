<?

require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'Webhost.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES.'EndpointSecurity.class.php');
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES."FD3Endpoint.class.php");
require_once(FD3_DYNAMIC_PAGES_PLUGIN_CORE.'campaigns\\Vendors\\Convertkit\\'.'ConvertKitFormData.class.php');

interface iConvertKitWebService 
{
    public function setHost( $host );
    function setEndPoint( $endpoint );
    public function setEndPointSecurity( $security );
    public function setVersion( $version );
    function setData( array $data );
    public function request();
    public function getResult();
}