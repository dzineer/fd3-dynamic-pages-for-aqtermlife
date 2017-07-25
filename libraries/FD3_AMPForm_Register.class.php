<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:46 PM
 */

class FD3_AMPForm_Register extends Wordpress_Extendable_Form {

    protected $fields;
    protected $fieldsMap;
    protected $id;

    public function __construct() {
        parent::__construct();
    }
	
/*	public function init( $id, $formTitle, $formStates, $nonce, $nonce_action ) {
		$this->id = $id;
		parent::init( $id, $formTitle, $formStates, $nonce, $nonce_action );
	}*/

/*    public function isNonceExpired() {
        return parent::isNonceExpired();
    }*/
    
    public function formIsValid() {
        $email = $this->posted[ 'fd3_form_email' ];
        $redirect_url = get_home_url();
        $redirect_url = apply_filters( 'fd3_register_form_redirect_link', $redirect_url );

        // end registration email
        // Login the user
        // Redirect user

        wp_redirect( $redirect_url );
    }
    
    public function process_amp_registration() {
        header("Content-type: application/json");

        $data = $this->processFormSubmitted();
        
        echo json_encode( $data );

        die();
    }

    public function process_validation() {
        header("Content-type: application/json");

        $data = $this->processValidationSubmitted();
        
        echo json_encode( $data );

        die();
    }
	
	public function getAllSavedUpgradeFields() {
		
		$this->fieldsMap = '[

            { "field_name" : "fd3_form_promocode",               "section":"account_info" },
            { "field_name" : "fd3_user_agreement_checkbox",          "section":"agreements_info" },
            { "field_name" : "fd3_spam_agreement_checkbox",          "section":"agreements_info" },
            { "field_name" : "fd3_cancel_policy_agreement_checkbox", "section":"agreements_info" }

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
    
    public function getAllSavedFields() {
	
        $this->fieldsMap = '[

            { "field_name" : "fd3_form_company",                 "section":"contact_info" },
            { "field_name" : "fd3_form_fname",                   "section":"contact_info" },
            { "field_name" : "fd3_form_lname",                   "section":"contact_info" },
            { "field_name" : "fd3_form_email",                   "section":"contact_info" },
            { "field_name" : "fd3_form_phone",                   "section":"contact_info" },
            { "field_name" : "fd3_form_account_id",              "section":"account_info" },
            { "field_name" : "fd3_form_microsite_id",            "section":"account_info" },
            { "field_name" : "fd3_form_password",                "section":"account_info" },
            { "field_name" : "fd3_form_promocode",               "section":"account_info" },
            { "field_name" : "fd3_form_address1",                "section":"billing_info" },
            { "field_name" : "fd3_form_address2",                "section":"billing_info" },
            { "field_name" : "fd3_form_city",                    "section":"billing_info" },
            { "field_name" : "fd3_form_state",                   "section":"billing_info" },
            { "field_name" : "fd3_form_zipcode",                 "section":"billing_info" },
            { "field_name" : "fd3_form_cc_cardtype",             "section":"billing_info" },
            { "field_name" : "fd3_form_cc_cardholdername",       "section":"billing_info" },
            { "field_name" : "fd3_form_cc_cardno",               "section":"billing_info" },
            { "field_name" : "fd3_form_cc_expdate",              "section":"billing_info" },
            { "field_name" : "fd3_form_cc_cvv2",                 "section":"billing_info" },
            
            { "field_name" : "fd3_personal_emails_permission_checkbox",          "section":"permissions_info" },
            { "field_name" : "fd3_newsletter_emails_permission_checkbox",        "section":"permissions_info" },
            
            { "field_name" : "fd3_user_agreement_checkbox",          "section":"agreements_info" },
            { "field_name" : "fd3_spam_agreement_checkbox",          "section":"agreements_info" },
            { "field_name" : "fd3_cancel_policy_agreement_checkbox", "section":"agreements_info" }

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

      //  return json_encode( array($this->id, $_POST) );

        if( isset( $_POST ) && isset( $_POST[ 'validate_form' ] ) && isset( $_POST[ 'nonce' ] ) ) {

          //  return json_encode("[we made it inside]");

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

            $result = new \stdClass();

			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EAffiliateGateway.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EAffiliateRules.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EMembership.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EPlatformConfig.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2ESubscriberService.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2ESession.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EAffiliateWidget.class.php";

			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."FD3Domain.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."FD3URI.class.php";
			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."FD3Website.class.php";
// 			include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."FD3_MM_Signup.class.php";

            $result->statuses[] = 'loaded all classes';      

            $membership = new AQ2EMembership();
            $gateway = new AQ2EAffiliateGateway( AQ2EPlatformConfig::getGlobal( '/services/affiliate/aqm_uri_link' ) );
            $service = new AQ2ESubscriberService( $gateway );

            $fields = $this->getAllSavedFields();

            $domainName = $_SERVER['HTTP_HOST'];

            $site = new \stdClass();
            $site->affiliatePosition = 1;

            $rules = new AQ2EAffiliateRules( $site->affiliatePosition );

            //$affiliateId = $rules->getSiteId( $domainName );

            $affiliateId = 'aqterm';

            if( $affiliateId === false ) { // if an affiliate id is not provided quit.
                exit(0);
            }

            $membership->addRequest(

               /* request */ 'newAccount',
                /* siteId */  $affiliateId,
                /* type */    'affiliate',
                /* mode */    'signup'

            );

            $statuses[] = 'addRequest';

            $membership->addAccount(

                /* type */ 'aqterm',
                /* price */ '99.00',
                /* tax */ '0.00',
                /* shipAndHandling */ '0.00',
                /* subtotal */ '99.00',
                /* total */ '99.00',
                /* promocode */ $fields['account_info']['fd3_form_promocode'],
                /* promoText */ 'Your Credit card will not be charged for the first 30 days'

            );

            $statuses[] = 'addAccount';

            $membership->addProduct(

                /* name */ 'aqterm',
                /* version */ '99.00',
                /* price */ '99.00'

            );

            $statuses[] = 'addProduct';

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
	
	        $membership->addPermissions(

		        $fields['permissions_info']['fd3_personal_emails_permission_checkbox'],
		        $fields['permissions_info']['fd3_newsletter_emails_permission_checkbox']
	        	
	        );
            
	        $membership->addAgreements(
	        	
		        $fields['agreements_info']['fd3_user_agreement_checkbox'],
		        $fields['agreements_info']['fd3_spam_agreement_checkbox'],
		        $fields['agreements_info']['fd3_cancel_policy_agreement_checkbox']
		        
	        );
            
            $statuses[] = 'addCreditCard';

            $membership->addUser(

                $fields['account_info']['fd3_form_account_id'],
                $fields['account_info']['fd3_form_password'],
                $fields['account_info']['fd3_form_password'],
                $fields['account_info']['fd3_form_microsite_id']

            );

            $statuses[] = 'addUser';

           // $membership->addSite();
	        
            $membership->addSecurity( /* validation code */ '' );
            $membership->addLicenseInfo( /* domain */ '' );

            $curState = new \stdClass();
            $curState->text = $fields['billing_info']['fd3_form_state'];
            $curState->value = substr( $fields['billing_info']['fd3_form_state'], 2 ); // Get Full State Name

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

            $statuses[] = 'addPersonal';

            $result = $service->subscribe( $membership );

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


    public function processFormSubmitted() {

         $result = new \stdClass();
         $statuses = array();

      //  return json_encode( array($this->id, $_POST) );

        if( isset( $_POST ) && isset( $_POST[ $this->id ] ) && isset( $_POST[ 'nonce' ] ) ) {

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

//	        include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."FD3_MM_Signup.class.php";
//	        include_once FD3_DYNAMIC_PAGES_PLUGIN_AQTERM."AQ2EPassGen.class.php";
	
	        $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateGateway', null, 'affiliate_gw', true );
	        $this->getVar( 'FD3' )->load->library( 'AQ2EPlatformConfig', null, 'platform_config', true );
	        $this->getVar( 'FD3' )->load->library( 'AQ2ESubscriberService', null, 'subscriber_service', true );

            $result->statuses[] = 'loaded all classes';
	
	        $this->getVar( 'FD3' )->load->library( 'AQ2EMembership', null, 'membership' );
	
	        $this->getVar( 'FD3' )->affiliate_gw->setURL( $this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/aqm_uri_link' ) );
	        $this->getVar( 'FD3' )->subscriber_service->setGateway(  $this->getVar( 'FD3' )->affiliate_gw ) ;
         
	
	        if( isset( $_POST[ 'existing_user' ] ) && $_POST[ 'existing_user' ] == true ) {
		
		        $agentSite = $this->getVar( 'FD3')->session->getSession( '/agent/Site' );
		
		        $fields = $this->getAllSavedUpgradeFields();
		        
		        
		        /*
		         *
			        $agentSite['address1_text']
					$agentSite['address2_text']
					$agentSite['AgentName']
					$agentSite['aq_site_loginId']
					$agentSite['aq_site_pwrd']
					$agentSite['city_text']
					$agentSite['company_name']
					$agentSite['contact_fname']
					$agentSite['contact_lname']
					$agentSite['email_text']
					$agentSite['phone_text']
					$agentSite['site_num']
					$agentSite['state_text']
					$agentSite['zip_text']
		         *
		         */
	        	
		      //  $affiliateId = 'aqterm';
		
		        if( $affiliateId === false ) { // if an affiliate id is not provided quit.
			        exit(0);
		        }
		
		        $this->getVar( 'FD3')->membership->addRequest(
		
		            /* request */ 'upgradeAccount',
			        /* siteId */  $affiliateId,
			        /* type */    'affiliate',
			        /* mode */    'upgrade'
		
		        );
		
		        $this->getVar( 'FD3')->membership->addAccount(
		
		            /* type */ 'affiliate',
			        /* price */ '99.00',
			        /* tax */ '0.00',
			        /* shipAndHandling */ '0.00',
			        /* subtotal */ '99.00',
			        /* total */ '99.00',
			        /* promocode */ $fields['account_info']['fd3_form_promocode'],
			        /* promoText */ 'Your Credit card will not be charged for the first 30 days'
		
		        );
		
		        $statuses[] = 'addAccount';
		
		        $this->getVar( 'FD3')->membership->addProduct(
		
		        /* name */ 'aqterm',
			        /* version */ '99.00',
			        /* price */ '99.00'
		
		        );
		
		        $statuses[] = 'addProduct';
		
		        $this->getVar( 'FD3')->membership->addAgreements(
			
			        $fields['agreements_info']['fd3_user_agreement_checkbox'],
			        $fields['agreements_info']['fd3_spam_agreement_checkbox'],
			        $fields['agreements_info']['fd3_cancel_policy_agreement_checkbox']
		
		        );
		
		        $statuses[] = 'addCreditCard';
		
		        $newPass = AQ2EPassGen::generateStrongPassword(8, 'lud');
		
		        $this->getVar( 'FD3')->membership->addUser(
			
			        $agentSite['aq_site_loginId'],
			        $newPass,
			        $newPass,
			        'empty'
		
		        );
		
		        $statuses[] = 'addUser';
		
		        // $membership->addSite();
		        $this->getVar( 'FD3')->membership->addSecurity( /* validation code */ '' );
		        $this->getVar( 'FD3')->membership->addLicenseInfo( /* domain */ '' );
		
		        $this->getVar( 'FD3')->membership->addPersonal(
			
			        $agentSite['company_name'],
			        $agentSite['contact_fname'],
			        $agentSite['contact_lname'],
			        $agentSite['address1_text'],
			        $agentSite['address2_text'],
			        $agentSite['city_text'],
			        substr($agentSite['state_text'], 2),
			        substr($agentSite['state_text'], 2),
			        $agentSite['zip_text'],
			        $agentSite['phone_text'],
			        $agentSite['email_text']
		
		        );
		
		        $login_link = $this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/marketing_mailbox/uri_login_link' ) . '?shapassword=' .  $newPass  . '&shauserid=' . $agentSite['aq_site_loginId'];
		
		        $this->getVar( 'FD3')->membership->addSite( $agentSite['site_num'], $login_link );
		
		        $this->getVar( 'FD3' )->subscriber_service->setMembership( $this->getVar( 'FD3')->membership );
		        $result =  $this->getVar( 'FD3' )->subscriber_service->upgrade();
		        
	        }
	        else {
		
		        $fields = $this->getAllSavedFields();
		
		        $domainName = $_SERVER['HTTP_HOST'];
		
		        $site = new \stdClass();
		        $site->affiliatePosition = 1;
		
		        $this->getVar( 'FD3' )->load->library( 'AQ2EAffiliateRules', null, 'affiliate_rules' );
		        $this->getVar( 'FD3' )->affiliate_rules->setSetSiteIdPosition( $site->affiliatePosition );
		
		        $affiliateId = $this->getVar( 'FD3' )->affiliate_rules->getSiteId( $domainName );
		
		        // $affiliateId = 'aqterm';
		
		        if( $affiliateId === false ) { // if an affiliate id is not provided quit.
			        exit(0);
		        }
		
		        $this->getVar( 'FD3')->membership->addRequest(
		
		        /* request */ 'new_AMP_Account',
			        /* siteId */  $affiliateId,
			        /* type */    'affiliate',
			        /* mode */    'signup'
		
		        );
		
		        $statuses[] = 'addRequest';
		
		        $this->getVar( 'FD3')->membership->addAccount(
		
		        /* type */ 'affiliate',
			        /* price */ '99.00',
			        /* tax */ '0.00',
			        /* shipAndHandling */ '0.00',
			        /* subtotal */ '99.00',
			        /* total */ '99.00',
			        /* promocode */ $fields['account_info']['fd3_form_promocode'],
			        /* promoText */ 'Your Credit card will not be charged for the first 30 days'
		
		        );
		
		        $statuses[] = 'addAccount';
		
		        $this->getVar( 'FD3')->membership->addProduct(
		
		        /* name */ 'aqterm',
			        /* version */ '99.00',
			        /* price */ '99.00'
		
		        );
		
		        $statuses[] = 'addProduct';
		
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
		
		        $this->getVar( 'FD3')->membership->addCreditCard(
			
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
		
		        $this->getVar( 'FD3')->membership->addPermissions(
			
			        $fields['permissions_info']['fd3_personal_emails_permission_checkbox'],
			        $fields['permissions_info']['fd3_newsletter_emails_permission_checkbox']
		
		        );
		
		        $this->getVar( 'FD3')->membership->addAgreements(
			
			        $fields['agreements_info']['fd3_user_agreement_checkbox'],
			        $fields['agreements_info']['fd3_spam_agreement_checkbox'],
			        $fields['agreements_info']['fd3_cancel_policy_agreement_checkbox']
		
		        );
		
		        $statuses[] = 'addCreditCard';
		
		        $this->getVar( 'FD3')->membership->addUser(
			
			        $fields['account_info']['fd3_form_account_id'],
			        $fields['account_info']['fd3_form_password'],
			        $fields['account_info']['fd3_form_password'],
			        $fields['account_info']['fd3_form_microsite_id']
		
		        );
		
		        $statuses[] = 'addUser';
		
		       // $membership->addSite();
		
		        $this->getVar( 'FD3')->membership->addSecurity( /* validation code */ '' );
		        $this->getVar( 'FD3')->membership->addLicenseInfo( /* domain */ '' );
		
		        $curState = new \stdClass();
		        $curState->text = $fields['billing_info']['fd3_form_state'];
		        $curState->value = substr( $fields['billing_info']['fd3_form_state'], 2 ); // Get Full State Name
		
		        $this->getVar( 'FD3')->membership->addPersonal(
			
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
		
		        $statuses[] = 'addPersonal';
		
		        $this->getVar( 'FD3' )->subscriber_service->setMembership( $this->getVar( 'FD3')->membership );
		        $result = $this->getVar( 'FD3' )->subscriber_service->subscribe();

                // return json_encode( $result ); exit;
		
	        }
         
	        if( $result ) { // if we have a problem with upgrading or creating new site then don't create MM account.
		
		        $this->getVar( 'FD3' )->load->library( 'FD3_MM_Signup', null, 'mm_signup' );
		        $this->getVar( 'FD3' )->load->library( 'AQ2EMarketingMailboxGateway', null, 'marketing_gw' );
		        $this->getVar( 'FD3' )->marketing_gw->setURL( $this->getVar('FD3')->platform_config->getGlobal( '/services/affiliate/marketing_mailbox/uri_link' ) );
			       
		        $this->getVar( 'FD3' )->mm_signup->setGateway(  $this->getVar( 'FD3' )->marketing_gw ) ;
		        $this->getVar( 'FD3' )->mm_signup->setMembership(  $this->getVar( 'FD3')->membership ) ;
		
		        $result->mm_result = new \stdClass();
		
		        $mmResult = $this->getVar( 'FD3' )->mm_signup->signup();
		
		        if( $mmResult->successful === true ) {
			
			        $result->mm_result->successful = true;
			        $result->mm_result->data = $mmResult;
			
		        } else if( $mmResult->successful === false ) {
			
			        $result->mm_result->successful = false;
			        $result->mm_result->data = $mmResult;
			
		        } else {
			
			        $result->mm_result->successful = false;
			        $result->mm_result->data = 'error';
			
		        }
	        	
	        }

            return $result; 

        } // ./if( isset( $_POST ) && isset( $_POST[ $this->id ] ) && isset( $_POST[ 'nonce' ] ) ) {
        else {
         //   return json_encode("[did not make it inside]");

                $result->error = 'nonce is invalid';
                // TODO: need to generate new nonce and redirect back to start page.
                $result->message = 'Please reload your page';
                $result->successful = false;
                $result->complete = false;               
        }

        return $result;
    }

}
