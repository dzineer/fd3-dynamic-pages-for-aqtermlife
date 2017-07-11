<?
namespace AQ2EMarketingPlatform;

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