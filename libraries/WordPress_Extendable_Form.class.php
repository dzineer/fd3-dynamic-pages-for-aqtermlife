<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: wordpress_extendable_form.class.php
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

abstract class WordPress_Extendable_Form extends FD3Library {

    protected $errors = array();
    protected $valid = false;
    protected $fields = array();
    protected $field = null;
    protected $id = null;
    protected $posted = array();
    protected $fieldTypes = array();
    protected $current = null;
    protected $fieldIndex = 0;
    protected $inState = false;
    protected $stateTitle;
    protected $stateStarted = false;
    protected $fieldsOrder = 0;
    protected $formTitle;
    protected $inSession = false;
    protected $state;
    protected $formStates;
    protected $currentState;
    protected $outputToScreen = false;
    protected $nonce_action;
    protected $nonce_code;
    protected $nonce;
    protected $tempFields;

    public function __construct() {

    }
	
	public function initForm( $id, $formTitle, $formStates = array(), $nonce, $nonce_action ) {
					$this->id = $id;
					$this->formTitle = $formTitle;
					$this->errors = new \WP_Error();
					// add_action( 'init', array( $this, 'formSubmitted') );
					$this->types = array();
					$this->valid = true;
					
					if (session_status() == PHP_SESSION_NONE) {
						$this->inSession = session_start();
					}
					
					$this->state = '';
					
					$this->nonce = $nonce;
					$this->nonce_action = $nonce_action;
					
					if( count($formStates) > 0 ) {
							$this->formStates = $formStates;
					} else {
							$this->formStates = array( 'general' );
					}
	}
	
	public function isNonceExpired() {
        return $this->nonce->isNonceExpired( $this->nonce_action );
    }

    private function goToFirstNewState() {
        foreach($this->fields as $fieldObj) { // find the first field with the new state
            if( $fieldObj->field['state'] == $this->state ) {
                $this->current = $fieldObj;
                $this->fieldIndex = $this->fieldIndex + 1;
                break;
            } else {
                $this->fieldIndex = $this->fieldIndex + 1; // if not found go to next field
            }
        }
    }

    private function clearFormState() {
        if( isset(  $_SESSION[ 'fd3_form_states' ] ) ) {
            unset(  $_SESSION[ 'fd3_form_states' ] );
        }

        // session_write_close();

    }

    private function nextFormState( $state, $statesArr ) {

        $len = count( $statesArr );
        $lastPosition = $len - 1;

        $foundPos = array_search( $state, $statesArr );

        //echo "\n" . 'foundPos: '. $foundPos;
        //echo "\n" . 'lastPosition: '. $lastPosition;

        if( $foundPos !== FALSE ) { // okay we got it
            if( $foundPos < $lastPosition ) { // okay we have another state
                // this is the next state
                return $statesArr[ $foundPos + 1 ];
            } else {
                // no more states
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    private function isLastFormState( $state ) {
        end($this->formStates); // got to end of array
        return  $state == end($this->formStates) ? true : false;
    }

    public function formSubmitted() {
        $result = new \stdClass();

        if( isset( $_POST ) && isset( $_POST[ $this->id ] ) && isset( $_POST[ 'nonce' ] ) ) {

            $this->posted = $_POST;
            $id = session_id();
            $nonce = sanitize_text_field( $_POST[ 'nonce' ] );
            $real_nonce =  $this->nonce->getNonce( $this->nonce_action );

            if( $id !== false ) { // if security breach then just quit
                if( $nonce !== $real_nonce ) {
                    die();
                }
            } else {
                die();
            }

            $this->formValidate();

            if( count( $this->errors->get_error_messages() ) == 0 ) { // no errors

                $result->output = '';

                $this->saveFormState();

                do_action( 'fd3_forms_is_valid_' . $this->id, $this );

                $newFormState = $this->nextFormState( $this->state, $this->formStates );

                if( $newFormState !== FALSE ) { // okay render next part of form

                    $promos = AQ2ESession::getSession('/affiliate_site/promoContent');

                    $usePromo = array();

                    foreach( $promos as $promo ) {
                        if($promo['code'] == 'AQ2ELIFE') {
                            $usePromo = $promo;
                        }
                    }

                    $this->setFormState( $newFormState );

                    if( $newFormState == 'billing_info' ) {
                        $inv = new FD3Invoice( $this->nonce, $this->nonce_action );

                        if( AQ2ESession::getSession( '/aq2e_form/status' ) != 'billing' ) {
                            AQ2ESession::registerSession('aq2e_form', array( 'status' => 'billing') );

                            if( AQ2ESession::getSession('/request_state/form_rendered') == false ) {

                                $inv->addHeader( array(
                                    'Description',
                                    'Qty',
                                    'Cost'
                                ));

                                $inv->addItem( array(
                                    'type' => 'line-item',
                                    'description' => 'AQ2E Program (aqterm) - 1 License',
                                    'qty' => '1',
                                    'cost' => '30.00'
                                ));

                                $inv->addItem( array(
                                    'type' => 'line-item',
                                    'description' => 'AQ2E Facebook App',
                                    'qty' => '1',
                                    'cost' => '10.00'
                                ));

                                $inv->addItem( array(
                                    'type' => 'line-item',
                                    'description' => 'AQ2E Facebook App Limited Time Discount',
                                    'qty' => '1',
                                    'cost' => '-10.00'
                                ));

                                /*			                    $inv->addItem( array(
                                                                    'description' => 'Applied Affiliate Discount - PROMO CODE: AQ2ELIFE',
                                                                    'qty' => '1',
                                                                    'cost' => '-10.00'
                                                                ));*/

                                $invoiceContent = $inv->render( $promos, $usePromo );
                                $result->output = $this->renderContent( $invoiceContent );
                                $result->success = true;
                                $result->complete = false;

                                AQ2ESession::registerSession('request_state', array( 'form_rendered') );
                                AQ2ESession::registerSession('aq2e_form', array( 'status' => 'billing_promocode') );

                            }

                        }
                    }
                    else {

                        $result->output .= $this->renderContent();
                        $result->success = true;
                        $result->complete = false;

                    }

                } else { // we are done, so submit the form

                    $membership = new AQ2EMembership();
                    $gateway = new AQ2EAffiliateGateway( AQ2EPlatformConfig::getGlobal( '/services/affiliate/uri_link' ) );
                    $service = new AQ2ESubscriberService( $gateway );

                    $fields = $this->getAllSavedFields();

                    $domainName = $_SERVER['HTTP_HOST'];

                    $site = new \stdClass();
                    $site->affiliatePosition = 1;

                    $rules = new AQ2EAffiliateRules( $site->affiliatePosition );

                    $affiliateId = $rules->getSiteId( $domainName );

                    if( $affiliateId === false ) { // if an affiliate id is not provided quit.
                        exit(0);
                    }

                    $membership->addRequest(

                    /* request */ 'newAccount',
                        /* siteId */  $affiliateId,
                        /* type */    'affiliate',
                        /* mode */    'signup'

                    );

                    $membership->addAccount(

                    /* type */ 'affiliate',
                        /* price */ '18.00',
                        /* tax */ '0.00',
                        /* shipAndHandling */ '0.00',
                        /* subtotal */ '18.00',
                        /* total */ '18.00',
                        /* promocode */ 'AQTERMLIFE',
                        /* promoText */ 'Your Credit card will not be charged for the first 30 days'

                    );

                    $membership->addAccount(

                    /* type */ 'aqterm',
                        /* price */ '18.00',
                        /* tax */ '0.00',
                        /* shipAndHandling */ '0.00',
                        /* subtotal */ '18.00',
                        /* total */ '18.00',
                        /* promocode */ 'AQ2ELIFE',
                        /* promoText */ 'Your Credit card will not be charged for the first 30 days'

                    );

                    $membership->addProduct(

                    /* name */ 'aqterm',
                        /* version */ '18.00',
                        /* price */ '18.00'

                    );

                    $curCCType = new \stdClass();
                    $curCCType->text = ucwords( strtolower( $fields['billing_info']['fd3_form_cc_cardtype'] ) );
                    $curCCType->value = strtoupper( $fields['billing_info']['fd3_form_cc_cardtype'] );

                    $expDate = explode("/", $fields['billing_info']['fd3_form_cc_expdate'] );

                    $curMonth = new \stdClass();
                    $curMonth->text = $expDate[0];
                    $curMonth->value = $expDate[0];

                    $curYear = new \stdClass();
                    $curYear->text = $expDate[1];
                    $curYear->value = $expDate[1];


                    $membership->addCreditCard(

                        $fields['billing_info']['fd3_form_cc_cardholdername'],
                        $curCCType,
                        $fields['billing_info']['fd3_form_cc_cardno'],
                        /* cardExpiryMonth */ '',
                        $curMonth,
                        /* cardExpiryYear */ '',
                        $curYear,
                        $fields['billing_info']['fd3_form_cc_cvv2'],
                        /* period */ '',
                        /* agreeToTerms */ true,
                        /* notAgreeToTerms */ false

                    );

                    $membership->addUser(

                        $fields['account_info']['fd3_form_account_id'],
                        $fields['account_info']['fd3_form_password'],
                        $fields['account_info']['fd3_form_password_repeat'],
                        $fields['account_info']['fd3_form_microsite_id']

                    );

                    $membership->addSite();
                    $membership->addSecurity( /* validation code */ '' );
                    $membership->addLicenseInfo( /* domain */ '' );

                    $curState = new \stdClass();
                    $curState->text = $fields['billing_info']['fd3_form_state'];
                    $curState->value = substr( $fields['billing_info']['fd3_form_state'], 2 ); // Get Full State Name

                    /*
                     *
		$companyName,
		$firstName,
		$lastName,
		$address1,
		$address2,
		$city,
		$state,
		$curState,
		$zipcode,
		$phone,
		$emailAddress                     *
                     */

                    $membership->addPersonal(

                        $fields['contact_info']['fd3_form_company'],
                        $fields['contact_info']['fd3_form_fname'],
                        $fields['contact_info']['fd3_form_lname'],
                        $fields['billing_info']['fd3_form_address1'],
                        $fields['billing_info']['fd3_form_address2'],
                        $fields['billing_info']['fd3_form_city'],
                        $fields['billing_info']['fd3_form_state'],
                        $curState,
                        $fields['billing_info']['fd3_form_zipcode'],
                        $fields['contact_info']['fd3_form_phone'],
                        $fields['contact_info']['fd3_form_email']

                    );

                    if(!$service->subscribe( $membership )) {
                        header("Content-type: application/json");

                        $this->setFormState( 'billing_info' );

                        $result->output = $this->renderContent();
                        $result->success = true;
                        $result->complete = false;

                        return $result;

                    }
                    else {

                        $this->clearFormState();

                        $confirmationPage = new FD3Confirmation();

                        $email = AQ2ESession::getSession( '/aq2e_form/status' );

                        $result->output = $confirmationPage->render( $fields['contact_info']['fd3_form_email'] );

                        // $result->output = 'Thank You';
                        $result->complete = true;
                        $result->success = true;
                        // $result->page = '/thank-you';

                    }

                }

            } else {

                if( $this->state == 'billing_info' ) {

                    $promos = AQ2ESession::getSession('/affiliate_site/promoContent');

                    $usePromo = array();

                    $promoCode = strtoupper( $this->posted['fd3_form_promocode'] );

                    foreach( $promos as $promo ) {
                        if( $promo['code'] == $promoCode ) {
                            $usePromo = $promo;
                        }
                    }

                    $inv = new FD3Invoice( $this->nonce, $this->nonce_action );

                    if( AQ2ESession::getSession( '/aq2e_form/status' ) == 'billing' || AQ2ESession::getSession( '/aq2e_form/status' ) == 'billing_promocode' ) {
                        AQ2ESession::registerSession('aq2e_form', array( 'status' => 'billing') );

                        if( AQ2ESession::getSession('/request_state/form_rendered') == false ) {

                            $inv->addHeader( array(
                                'Description',
                                'Qty',
                                'Cost'
                            ));

                            $inv->addItem( array(
                                'type' => 'line-item',
                                'description' => 'AQ2E Program (aqterm) - 1 License',
                                'qty' => '1',
                                'cost' => '30.00'
                            ));

                            $inv->addItem( array(
                                'type' => 'line-item',
                                'description' => 'AQ2E Facebook App',
                                'qty' => '1',
                                'cost' => '10.00'
                            ));

                            $inv->addItem( array(
                                'type' => 'line-item',
                                'description' => 'AQ2E Facebook App Limited Time Discount',
                                'qty' => '1',
                                'cost' => '-10.00'
                            ));

                            /*			                    $inv->addItem( array(
                                                                'description' => 'Applied Affiliate Discount - PROMO CODE: AQ2ELIFE',
                                                                'qty' => '1',
                                                                'cost' => '-10.00'
                                                            ));*/

                            $invoiceContent = $inv->render( $promos, $usePromo );
                            $result->output = $this->renderContent( $invoiceContent );
                            $result->success = true;
                            $result->complete = false;

                            AQ2ESession::registerSession('request_state', array( 'form_rendered') );
                            AQ2ESession::registerSession('aq2e_form', array( 'status' => 'billing_promocode') );

                        }

                    }
                } else {

                    $result->success = false;
                    $this->valid     = false;
                    $result->output  = $this->renderContent();

                }
            }

        }

        return $result;
    }

    public function saveFormState() {
        $formFields = array();
        while( $this->NextField() ) {
            if( $this->current->field['state'] == $this->state ) {
                $formFields[ $this->current->field['id'] ] = $this->posted[ $this->current->field['id'] ];
            }
        }
        if( count($formFields) ) {
            if( $this->inSession && $this->valid ) {
                $_SESSION[ 'fd3_form_states' ][ $this->state ] = $formFields;
            }
        }
    }

    public function getAllSavedFields() {
        $multipleFormStates = array();

        if( isset( $_SESSION[ 'fd3_form_states' ] ) ) {

            $multipleFormStates = $_SESSION[ 'fd3_form_states' ];
        }

        if( isset( $multipleFormStates['state'] ) ) {
            $this->state = $multipleFormStates[ 'state' ];
        }

        return $multipleFormStates;
    }

    public function formValidate() {

        if(isset($this->posted['state'])) {
            $this->state = $this->posted[ 'state' ];
        }

        while( $this->NextField() ) {

            if($this->current->field['state'] == $this->state ) {

                $key         = $this->current->field[ 'id' ];
                $fieldPosted = $this->posted[ $key ];

                if($this->current->field['type'] != 'button') {

                    $this->current->field[ 'value' ] = urldecode( $fieldPosted );

                    if ( isset( $this->current->field[ 'repeat' ] ) && $this->current->field[ 'repeat' ] == 'true' ) {

                        $fieldPostedRepeat = $this->posted[ $this->current->field[ 'id' ] . '_repeat' ];

                        $this->current->field[ 'repeat_value' ] = urldecode( $fieldPostedRepeat );

                        if ( $fieldPostedRepeat == '' || ( $fieldPosted != $fieldPostedRepeat ) ) {
                            $this->errors->add( $this->current->field[ 'id' ] , sprintf( __( 'Repeat %s and %s are different' , 'themeasap' ) , $this->current->field[ 'label' ] , $this->current->field[ 'label' ] ) );
                        }
                    }

                    // force sanitation
                    $fieldPosted = sanitize_text_field( $fieldPosted );

                    // run custom sanitation if needed
                    if ( $this->current->field[ 'sanitize' ] == 'true' ) {
                        $fieldPosted = $this->current->sanitize( $fieldPosted );
                    }

                    if ( ( $this->current->field[ 'required' ] == 'true' && ( $fieldPosted == '' || $fieldPosted == null ) ) || !$this->current->validate( $fieldPosted ) ) {
                        $this->errors->add( $this->current->field[ 'id' ] , sprintf( __( '%s' , 'themeasap' ) , $this->current->field[ 'error_msg' ] ) );
                        $this->valid = false;
                    }

                    $this->posted[ $this->current->field[ 'id' ] ] = $fieldPosted;

                }

            }
        }

    }

    public function renderSubmitButton( $caption ) {
        ob_start();
        ?>
        <button type="submit" class="btn btn-lg btn-primary form-btn" name="<?= $this->id ?>" data-action="<?= admin_url('admin-ajax.php'); ?>"><i class="fa fa-cog fa-btn-font" aria-hidden="true"></i><span class="btn-caption"><?= __($caption) ?></span></button>
        <?
        $content = ob_get_clean();

        return $content;
    }

    public function NextField() {

        if ( $this->fieldIndex == count( $this->fields )) {
            $this->fieldIndex = 0;
            return false;

        } else {
            $this->current = $this->fields[ $this->fieldIndex ];
            $this->fieldIndex = $this->fieldIndex + 1;
            return true;
        }

    }

    public function PrevField() {

        if ( $this->fieldIndex == count( $this->fields )) {
            $this->fieldIndex = 0;
            return false;

        } else {
            $this->fieldIndex = $this->fieldIndex - 1;
            $this->current = $this->fields[ $this->fieldIndex ];

            return true;
        }

    }

    public function setFormState( $state ) {
        $this->state = $state;
        if( isset( $this->inSession ) ) {
            //  AQ2ESession::registerSession( 'fd3_form_states', array( 'state' => $state )) ;
            $_SESSION['fd3_form_states']['state'] = $state;
        }
    }

    public function getFormState() {
        if( isset( $_SESSION['fd3_form_states']['state'] ) ) {
            return $_SESSION['fd3_form_states']['state'];
        } else {
            return null;
        }
    }

    public function setJS() {

        wp_enqueue_script('jquery');
        wp_register_script ( 'fd3_form_ajax_custom', FD3_FORMS_WEB_BASE . 'assets/js/custom.js' );

        $domainName = $_SERVER[ 'HTTP_HOST' ];
        
        $site = new \stdClass();
        $site->affiliatePosition = 1;
        $rules = new AQ2EAffiliateRules( $site->affiliatePosition );
        $affiliateId = $rules->getSiteId( $domainName );

        wp_localize_script( 'fd3_form_ajax_custom', 'myAjax', array( 'url' => admin_url( 'admin-ajax.php' ),
            'formid' => $this->id,
            'strictFlag' => '"use strict;"',
            'affiliateId' => $affiliateId,
            'eventType' => 'click',
            'formButtonQuery' => '.form-btn',
            'formContainerQuery' => '.form-container',
            'action' => 'process',
            'formQuery' => '#register_form',
            'formType' => 'post',
            'dataType' => 'json',
            'useCache' => 'false',
            'nonce' => $this->nonce->getNonce( $this->nonce_action ) ));
        wp_enqueue_script( 'fd3_form_ajax_custom' );

        wp_enqueue_script( 'fd3_form_dropbox_password_meter', FD3_FORMS_WEB_BASE . 'assets/js/zxcvbn.js' );

    }

    public function process() {

        // $obj = new \stdClass();
        // $obj->status = 'success';
        // $obj->output = 'cool';

        // wp_send_json( $obj );

        header("Content-type: application/json");

        // echo json_encode( new \stdClass() );
        // wp_die();

        $obj = $this->formSubmitted();

        // header('Content-type: application/json');

        echo json_encode( $obj );

        die();
        // exit(0);
    }

    private function renderBreadCrumbs( $current, $items ) {
        ob_start();
        ?>
        <ol class="breadcrumb">
            <? foreach ($items as $item) : ?>
                <li class="<?= $current == $item ? 'active' : 'not-active'; ?>"><?= ucwords(str_replace('_', ' ', $item)) ?></li>
            <? endforeach; ?>
        </ol>
        <?
        $output = ob_get_clean();
        return $output;
    }

    private function getFieldFromSession( $fieldName ) {

        $multipleFormStates = $this->getAllSavedFields();

        if( count($multipleFormStates) ) {

            foreach( $multipleFormStates as $formState ) {

                foreach( $formState as $key => $formField) {

                    if( $fieldName == $key ) {
                        return $formField;
                    }

                }

            }

        }
        else {
            return false;
        }

    }

    private function getValueByFieldName( $fieldName ) {

        return $this->getFieldFromSession( $fieldName );

    }

    private function renderGroup( $items ) {
        ob_start(); ?>

        <div class="form-group">
            <? foreach($items as $item) : ?>
                <?= $item ?>
            <? endforeach; ?>
        </div>

        <?
        $content = ob_get_clean();
        return $content;
    }

    private function isSessionExpired() {

        if ( AQ2ESession::getSession('/aq2e_session/expires') == false ) {

            AQ2ESession::registerSession('aq2e_session', array( "expires" => time() + 1200) );
        } else if (time() == AQ2ESession::getSession('/aq2e_session/expires') ) {
            // session started more than 20 minutes ago
            session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
            AQ2ESession::registerSession('aq2e_session', array( "expires" => time() + 1200) );
        }

    }

    public function renderContent( $content=null ) {

        ob_start(); ?><!-- fd3-left-right -->

        <div class="fd3-actions-container">

            <div class="form-container aq2e-signup-form">

                <div class="bootstrap-container">

                    <div class="panel panel-default">

                        <div class="panel-heading"><?= $this->formTitle ?></div>

                        <div class="panel-body">

                            <form class="form" id="<?= $this->id ?>">

                                <? while( $this->NextField() ) { ?>

                                    <? if($this->current->field['state'] == $this->state ) : ?>

                                        <? if( $this->current->field['state'] != '' && !$this->inState ) {
                                            $this->inState    = true;
                                            // $this->state = $this->current->field['state'];
                                            // $this->setFormState( $this->state );
                                            $this->stateTitle = $this->current->field[ 'state_title' ];  ?>

                                            <?= $this->renderBreadCrumbs( $this->state, $this->formStates ) ?>

                                            <? if( isset( $content ) && strlen( $content ) ) : ?>
                                                <?= $content ?>
                                            <? endif; ?>

                                            <input type="hidden" name="state" value="<?= $this->state ?>" />

                                        <? } ?>

                                        <? if( $this->inState && !$this->stateStarted ) : ?>
                                            <h2 class="fd3-section-title"><?= $this->stateTitle ?></h2>
                                            <?  $this->stateStarted = true;
                                        endif;
                                        ?>

                                        <? if( !$this->valid ) :
                                            $fieldErrors = $this->errors->get_error_messages( $this->current->field['id'] );

                                            foreach( $fieldErrors as $fieldError ) : ?>

                                                <span class="fd3_forms_form_error" id="fd3_forms_form_error_<?= $this->current->field['id'] ?>"><?= $fieldError ?></span>

                                            <?	endforeach;
                                            $this->current->field['value'] = $this->posted[ $this->current->field['id'] ];
                                        endif; ?>

                                        <? if( isset( $this->current->field['refer_from'] ) ) :
                                            $value = $this->getValueByFieldName( $this->current->field['refer_from'] );
                                            $this->current->field['value'] = ($value !== false) ? $value : '';
                                        endif;
                                        ?>

                                        <? if( isset( $this->current->field['form_group'] ) ) {
                                            $currentGroup = $this->current->field[ 'form_group' ];
                                            $groupItems   = [];
                                            do {
                                                $groupItems[] = $this->current->render();
                                            } while ( $this->NextField() && isset( $this->current->field[ 'form_group' ] ) && strlen( $this->current->field[ 'form_group' ] ) && $this->current->field[ 'form_group' ] == $currentGroup );

                                            $this->PrevField();

                                            echo $this->renderGroup( $groupItems );

                                        } else {  ?>

                                            <?= $this->current->render() ?>

                                            <? if( $this->current->isRepeat() == true ) : ?>
                                                <?= $this->current->renderRepeat()  ?>
                                            <? endif; ?>

                                        <? } ?>

                                    <? endif; ?>

                                <? } ?>

                                <? if( !$this->isLastFormState( $this->state ) ) { ?>

                                    <? echo $this->renderSubmitButton('Next'); ?>

                                <? }
                                else { ?>

                                    <? echo $this->renderSubmitButton('Sign Up'); ?>

                                <? } ?>

                                <? do_action( 'fd3_form_render_' . $this->id ); ?>

                            </form> <!-- end div form -->
                        </div> <!-- end panel body -->
                    </div> <!-- end panel -->
                </div> <!-- ./bootstrap-container -->
            </div> <!-- ./form-container -->
        </div>
        <?

        // $this->setJS();

        $form = ob_get_clean();

        return $form;
    }

    public function resetFormState() {
        if( isset( $_SESSION ) && isset( $_SESSION['fd3_form_states'] ) && isset( $_SESSION['fd3_form_states']['state'] ) ) {
            unset( $_SESSION['fd3_form_states']['state'] );
            unset( $_SESSION['fd3_form_states'] );
        }
    }

    public function render2() {

        $this->resetFormState();
        /*
                echo $this->renderContent();

                return;*/

        ?>

        <div class="fd3-actions-container fd3-drop-down">

            <div class="form-container aq2e-signup-form">

                <div class="bootstrap-container">

                    <div class="panel panel-default">

                        <div class="panel-heading">AQ2E Platform Signup</div>

                        <div class="panel-body">

                            <form class="form" id="<?= $this->id ?>">

                                <? while( $this->NextField() ) { ?>

                                    <? if( $this->current->field['state'] != '' && !$this->inState ) {
                                        $this->inState    = true;
                                        $this->state = $this->current->field['state'];
                                        $this->setFormState( $this->state );
                                        $this->stateTitle = $this->current->field[ 'state_title' ];  ?>

                                        <?= $this->renderBreadCrumbs( $this->state, $this->formStates ) ?>

                                        <input type="hidden" name="state" value="<?= $this->state ?>" />

                                    <? } ?>

                                    <? if( $this->inState && !$this->stateStarted ) { ?>
                                        <h2 class="fd3-section-title"><?= $this->stateTitle ?></h2>
                                        <? $this->stateStarted = true;
                                    }
                                    ?>

                                    <? if($this->current->field['state'] == $this->state ) : ?>

                                        <? if( !$this->valid ) {
                                            $fieldErrors = $this->errors->get_error_messages( $this->current->field['id'] );

                                            foreach( $fieldErrors as $fieldError ) : ?>

                                                <span class="fd3_forms_form_error" id="fd3_forms_form_error_<?= $this->current->field['id'] ?>"><?= $fieldError ?></span>

                                            <?	endforeach;

                                            $this->current->field['value'] = $this->posted[ $this->current->field['id'] ];

                                        }

                                        if( isset( $this->current->field['refer_from'] ) ) :
                                            $value = $this->getValueByFieldName( $this->current->field['refer_from'] );
                                            $this->current->field['value'] = ($value !== false) ? $value : '';
                                        endif;
                                        ?>

                                        <? if( isset( $this->current->field['form_group'] ) ) {
                                            $currentGroup = $this->current->field[ 'form_group' ];
                                            $groupItems   = [];
                                            do {
                                                $groupItems[] = $this->current->render();
                                            } while ( $this->NextField() && isset( $this->current->field[ 'form_group' ] ) && strlen( $this->current->field[ 'form_group' ] ) && $this->current->field[ 'form_group' ] == $currentGroup );

                                            $this->PrevField();

                                            echo $this->renderGroup( $groupItems );

                                        } else {  ?>

                                            <?= $this->current->render() ?>

                                            <? if( $this->current->isRepeat() == true ) : ?>
                                                <?= $this->current->renderRepeat()  ?>
                                            <? endif; ?>

                                        <? } ?>

                                    <? endif; ?>


                                <? } ?>

                                <? if( !$this->isLastFormState( $this->state ) ) { ?>

                                    <? echo $this->renderSubmitButton('Next'); ?>

                                <? }
                                else { ?>

                                    <? echo $this->renderSubmitButton('Sign Up'); ?>

                                <? } ?>

                                <? do_action( 'fd3_form_render_' . $this->id ); ?>

                            </form> <!-- end div form -->
                        </div> <!-- end panel body -->
                    </div> <!-- end panel -->
                </div> <!-- ./bootstrap-container -->
            </div> <!-- ./form-container -->
        </div>
        <?

        // $this->setJS();
    }

    public function render() {

        return $this->render2();

        $this->resetFormState();

        ?>

        <div class="fd3-actions-container">

            <div class="form-container">

                <div class="bootstrap-container">

                    <div class="panel panel-default">

                        <div class="panel-heading"><?= $this->formTitle ?></div>

                        <div class="panel-body">


                            <form class="form" id="<?= $this->id ?>">
                                <? while( $this->NextField() ) { ?>

                                    <? if( $this->current->field['state'] != '' && !$this->inState ) {
                                        $this->inState    = true;
                                        $this->state = $this->current->field['state'];
                                        $this->setFormState( $this->state );
                                        $this->stateTitle = $this->current->field[ 'state_title' ];  ?>

                                        <?= $this->renderBreadCrumbs( $this->state, $this->formStates ) ?>

                                        <input type="hidden" name="state" value="<?= $this->state ?>" />
                                    <? } ?>

                                    <? if($this->current->field['state'] == $this->state ) : ?>

                                        <? if( $this->inState && !$this->stateStarted ) : ?>
                                            <h2 class="fd3-section-title"><?= $this->stateTitle ?></h2>
                                            <?  $this->stateStarted = true;
                                        endif;
                                        ?>

                                        <? if( !$this->valid ) :
                                            $fieldErrors = $this->errors->get_error_messages( $this->current->field['id'] );

                                            foreach( $fieldErrors as $fieldError ) : ?>

                                                <span class="fd3_forms_form_error" id="fd3_forms_form_error_<?= $this->current->field['id'] ?>"><?= $fieldError ?></span>

                                            <?	endforeach;

                                        endif; ?>

                                        <?= $this->current->render() ?>

                                        <? if( $this->current->isRepeat() == true ) : ?>
                                            <?= $this->current->renderRepeat()  ?>
                                        <? endif; ?>

                                    <? endif; ?>

                                <? } ?>

                                <? /*do_action( 'fd3_form_render_' . $this->id );*/ ?>

                                <? if( $this->inState ) { ?>

                                    <? echo $this->renderSubmitButton('Next'); ?>

                                <? }
                                else { ?>

                                    <? echo $this->renderSubmitButton('Join'); ?>

                                <? } ?>

                                <? do_action( 'fd3_form_render_' . $this->id ); ?>

                            </form> <!-- end div form -->
                        </div> <!-- end panel body -->
                    </div> <!-- end panel -->
                </div> <!-- ./bootstrap-container -->
            </div> <!-- ./form-container -->
        </div>
        <?

        // $this->setJS();
    }

} // end of WordPress_Extendable_Form