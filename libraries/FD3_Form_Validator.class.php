<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:46 PM
 */
class FD3_Form_Validator extends Wordpress_Extendable_Form {

    protected $fields;
    protected $fieldsMap;
    protected $id;

    public function __construct() {
	    parent::__construct();
    }
    
/*    public function init( $id, $formTitle, $formStates, $nonce, $nonce_action ) {
	    $this->id = $id;
	    parent::init( $id, $formTitle, $formStates, $nonce, $nonce_action );
    }
    
    public function isNonceExpired() {
        return parent::isNonceExpired();
    }*/
    
    public function formIsValid() {
        $email = $this->posted[ 'fd3_form_email' ];
        $redirect_url = get_home_url();
        $redirect_url = apply_filters( 'fd3_validate_form_redirect_link', $redirect_url );

        // end registration email

        // Login the user

        // Redirect user

        wp_redirect( $redirect_url );
    }

    public function process_validation() {
        header("Content-type: application/json");

        $data = new \stdClass();
        $data->successful = false;

        // echo json_encode( $data ); exit;

        $data = $this->processValidationSubmitted();
        
        echo json_encode( $data ); 

        die();
    }    

    public function getAllSavedFields() {
       
        $this->fieldsMap = '[

            { "field_name" : "fd3_form_validate_account_id",        "section":"validate_info" },
            { "field_name" : "fd3_form_validate_password",          "section":"validate_info" }

        ]';

        // return $this->fieldsMap;

        $fieldsObj = json_decode( $this->fieldsMap );

      //  ob_start();

      //  echo print_r($fieldsObj, true);

      //  $output = ob_get_clean();

      //  return $output;


        foreach( $fieldsObj as $f ) {
             $this->fields[ $f->section ][ $f->field_name ] = $_POST[ $f->field_name ];
          //  echo print_r($f, true);
        }

        return $this->fields;
    }

// auth_remote

    public function processValidationSubmitted() {

         $result = new \stdClass();
         $statuses = array();

         // return json_encode( array($this->id, $_POST) );

        if( isset( $_POST ) && isset( $_POST[ 'validate_form' ] ) && isset( $_POST[ 'nonce' ] ) ) {

          //  return json_encode("[we made it inside]");

            $this->posted = $_POST;
            $id = session_id();
            $nonce = sanitize_text_field( $_POST[ 'nonce' ] );
            $real_nonce =  $this->nonce->getNonce( $this->nonce_action );

           // return json_encode( sprintf("[%s vs %s]", $nonce, $real_nonce) );

            if( $id !== false ) { // if security breach then just quit
                if( $nonce !== $real_nonce ) {
                    die();
                }
            } else {
                die();
            }

            $result = new \stdClass();

			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EAffiliateGateway.class.php";
	        include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EAffiliateGateway.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EPlatformConfig.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2ESubscriberService.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2ESession.class.php";

            $result->statuses[] = 'loaded all classes';      

            $membership = new AQ2EMembership();
            $gateway = new AQ2EAffiliateGateway( AQ2EPlatformConfig::getGlobal( '/services/affiliate/uri_validate_link' ) );
            $service = new AQ2ESubscriberService( $gateway );

            $fields = $this->getAllSavedFields();

            $fields['auth_remote'] = 'auth_remote';

            $result = $service->validateAgent( $fields );

            if( ! $result ) {

                return $result;

            }
            else {
	
	            AQ2ESession::registerSession( 'agent', json_decode(json_encode($result->agent),true) );

                return $result;      

           }

        } // ./if( isset( $_POST ) && isset( $_POST[ $this->id ] ) && isset( $_POST[ 'nonce' ] ) ) {
        else {
         //   return json_encode("[did not make it inside]");

                $result->error = 'nonce is invalid';
                $result->successful = false;
                $result->complete = false;               
        }

        return $result;
    }

}
