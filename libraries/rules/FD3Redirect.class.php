<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:18 PM
 */
class FD3Redirect extends FD3Rule {

    protected $rule;
    protected $data;
    protected $uri;

    function __construct() {
    }

    private function start_session() {
        // backwards compatible with older versions of php
        if(function_exists('session_status')) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
        else {
            if(session_id() == '') {
                session_start();
            }
        }
    }

    public function execute( $rule ) {

        $this->rule = $rule;
        $this->data = $rule['data'];

        $this->uri = '';

        $this->start_session();

        foreach( $this->data['segments'] as $segmentInfo ) {
            $segment = $segmentInfo['segment'];
            $this->uri = $this->uri . '/' . $segment;
        }

        if( ! empty( $this->uri ) ) {
            $_SESSION[ $this->data['redirect_flag']['key'] ] = $this->data['redirect_flag']['value'];
        }

        $this->callback_data[ 'redirect_uri' ] = $this->uri;

       // aq2emm_json_log2screen( array( "redirect_uri" => $this->uri ) );
    }

    public function __destruct() {
    }
}