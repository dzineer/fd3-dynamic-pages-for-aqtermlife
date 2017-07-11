<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:18 PM
 */
class FD3SaveData extends FD3Rule {

    protected $rule;
    protected $data;

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

        $this->start_session();
	
	
	   // echo "<pre>this->data: " .  print_r( $this->data, true ); exit;
        
        foreach( $this->data['vars'] as $fieldVar ) {
            $field = $fieldVar['field'];
            if( isset( $_GET[ $field ] ) && ! empty($_GET[ $field ] ) ) {
                $val = $_GET[ $field ];

                // store as a session key that the form will recognize
                $_SESSION[ $this->data['session_key'] ][ $field ] = $val;
            }
        }
        
        // echo "<pre>session_key: " .  print_r( $this->data['session_key'], true ); exit;
        
    }

    public function __destruct() {
    }
}