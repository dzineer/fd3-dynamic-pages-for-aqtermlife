<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:46 PM
 */
class FD3_Form_Promo extends Wordpress_Extendable_Form {

    protected $fields;
    protected $fieldsMap;
    protected $id;

    public function __construct() {

    }
	
    public function process_promo() {
        header("Content-type: application/json");

        $data = new \stdClass();
        $data->successful = false;
        $data->info = 'process_promo';

     //  echo json_encode( $data ); exit;

        $data = $this->processPromo();
        
        echo json_encode( $data ); 

        die();
    }    

    public function getAllSavedFields() {
       
        $this->fieldsMap = '[

            { "field_name" : "fd3_form_promocode",        "section":"promo_info" }

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

    public function processPromo() {

         $result = new \stdClass();
         $statuses = array();

         // return json_encode( array($this->id, $_POST) );

        if( isset( $_POST ) && isset( $_POST[ 'process_promo' ] ) && isset( $_POST[ 'nonce' ] ) ) {

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

            $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateGateway', null, 'affiliate_gw' );
	        $this->getVar( 'FD3' )->load->library( 'AQ2EPlatformConfig', null, 'platform_config' );
	        $this->getVar( 'FD3' )->load->library( 'AQ2ESubscriberService', null, 'subscriber_service', true );
			
            $result->statuses[] = 'loaded all classes';      

	        $this->getVar( 'FD3' )->load->library( 'AQ2EMembership', null, 'membership' );
	
	        $this->getVar( 'FD3' )->affiliate_gw->setURL( $this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/uri_validate_promo_link' ) );
	        $this->getVar( 'FD3' )->subscriber_service->setGateway(  $this->getVar( 'FD3' )->affiliate_gw ) ;
		
	        $fields = $this->getAllSavedFields();

            $fields['auth_remote'] = 'auth_remote';
            $fields['bga'] = 'aqterm';

           // echo print_r($fields, true); exit;

            $result = $this->getVar( 'FD3' )->subscriber_service->validatePromo( $fields );

            if( ! $result ) {

                return $result;

            }
            else {

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
