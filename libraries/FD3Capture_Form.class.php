<?php
/**

 * Filename: FD3Capture_Form.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/12/2016 6:37 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class FD3Capture_Form extends Wordpress_Extendable_Form {

    protected $errors = array();
    protected $valid = false;
    protected $fields = array();
    protected $field = null;
    protected $id = null;
    protected $posted = array();
    protected $formTitle;
    protected $outputToScreen = false;
    protected $nonce_action;
    protected $nonce_code;
    protected $nonce;

    public function __construct() {

    }
	
/*	public function init( $id, $formTitle, $formStates = array(), $nonce, $nonce_action ) {
		$this->id = $id;
		$this->formTitle = $formTitle;
		$this->errors = new \WP_Error();
//        $this->fields = apply_filters( 'fd3_forms_form_fields_' . $this->id, $this->fields, $this );
		// add_action( 'init', array( $this, 'formSubmitted') );
		$this->types = array();
		$this->valid = true;
		$this->inSession = \session_start();
		$this->state = '';
		
		$this->nonce = $nonce;
		$this->nonce_action = $nonce_action;
	}*/
    
/*    public function isNonceExpired() {
        return $this->nonce->isNonceExpired( $this->nonce_action );
    }*/

    private function myLog( $class, $method, $s, $line ) {
        $log = new FD3Log();
        $log->init( "d:\\logs\\debugging-frank.log" );
        $log->log( sprintf( "%s::%s [line: %s] - %s ", $class, $method, $line, $s) );
        $log->close();
    }

    public function formSubmitted() {

        $this->formValidate();
        
        return $result;
    }

    public function formValidate() {

    }

    public function setJS() {

        wp_enqueue_script('jquery');
        wp_register_script ( 'fd3_form_ajax_custom', FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/custom.js' );

        wp_localize_script( 'fd3_form_ajax_custom', 'myAjax', array( 'url' => admin_url( 'admin-ajax.php' ),
            'formid' => $this->id,
            'strictFlag' => '"use strict;"',
            'eventType' => 'click',
            'formButtonQuery' => '.form-btn',
            'formContainerQuery' => '.form-container',
            'action' => 'process',
            'formQuery' => '#optin_form',
            'formType' => 'post',
            'dataType' => 'json',
            'useCache' => 'false',
            'nonce' => $this->nonce->getNonce( $this->nonce_action ) ));
        wp_enqueue_script( 'fd3_form_ajax_custom' );

    }

	private function getAPIKey() {
    	return "X-ffgIhIwUbJFtA9rOD3lQ";
	}
	
	private function getSecret() {
		return "6kw2lof43ZrIGuWmCJpii2s3DJR78bBhwktIgEvIwCQ";
	}

    private function registerEmail($formId, $name, $email) {

/*      include_once FD3_DYNAMIC_PAGES_PLUGIN_CORE.'Webhost.class.php';
        include_once FD3_DYNAMIC_PAGES_PLUGIN_CLASSES."EndpointSecurity.class.php";
        include_once FD3_DYNAMIC_PAGES_PLUGIN_CORE."campaigns\\Vendors\\Convertkit\\ConvertKitSubscriberService.class.php";*/

        $ckService = new ConvertKitSubscriberService();
        $ckEndpointSecurity = new EndpointSecurity();
        $ckHost = new Webhost();

        $ckHost->setHost('https://api.Convertkit.com/v3/');
        $ckEndpointSecurity->setAPIKey( $this->getAPIKey() );
        $ckEndpointSecurity->setSecret( $this->getSecret() );

        $ckService->setHost( $ckHost );
        $ckService->setEndPointSecurity(  $ckEndpointSecurity );        

		$addOptin = array(
			"api_key" => $this->getAPIKey(),
			"email" => $email,
			"name" => $name
			/*			"fields" => array(
							"first_name" => $contact['fields']
						)*/
		);        

        $res = $ckService->subscribe("185336", $addOptin);

    }

    public function process() {

        header("Content-type: application/json");

        $res = new stdClass();
        

        $name = $_POST['name'];
        $email = $_POST['email'];

        $res->name = $name;
        $res->email = $email;
        $res->success = true;

        $this->registerEmail('185336', $name, $email);

      //  $obj = $this->formSubmitted();

        echo json_encode( $res );

        exit;

    }


} // end of FD3Capture_Form