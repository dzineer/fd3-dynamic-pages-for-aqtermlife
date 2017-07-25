<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EMembership.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/23/2016 11:50 PM
 */
//require_once('');

if( ! class_exists('AQ2EMarketingPlatform\AQ2EMembership' ) ) {

	class AQ2EMembership extends FD3Library {
		
		private $signup;
		
		function __construct() {
			
			$this->signup = new \stdClass();
			
			$this->signup->agreements = new \stdClass();
			
			$this->signup->agreements->userAgreement = '';
			$this->signup->agreements->spamComplianceAgreement = '';
			$this->signup->agreements->cancellationAgreement = '';
			
			$this->signup->permissions = new \stdClass();
			$this->signup->permissions->personalEmails = '';
			$this->signup->permissions->newsletterEmails = '';
			
			$this->signup->request = 'availability';
			$this->signup->siteId = 'aqterm';
			$this->signup->type = 'aqterm';
			$this->signup->mode = 'signup';
			$this->signup->micrositeId = '';
			
			$this->signup->account = new \stdClass();
			$this->signup->account->type = '';
			$this->signup->account->price = '99.00';
			$this->signup->account->tax = '0.00';
			$this->signup->account->shipAndHandling = '0.00';
			$this->signup->account->subtotal = '99.00';
			$this->signup->account->total = '99.00';
			$this->signup->account->promocode = '';
			$this->signup->account->promoText = '';
			
			$this->signup->product = new \stdClass();
			$this->signup->product->name = 'AQ2E Marketing Platform';
			$this->signup->product->version = 'Pro';
			$this->signup->product->price = '99.00';
			
			$this->signup->state = new \stdClass();
			$this->signup->state->currentState = 0;
			$this->signup->state->nextState = 0;
			$this->signup->state->ready = false;
			
			$this->signup->error = new \stdClass();
			$this->signup->error->errorFound = false;
			$this->signup->error->message = '';
			
			$this->signup->ccinfo = new \stdClass();
			
			$this->signup->ccinfo->cardHolderName = '';
			$this->signup->ccinfo->curCCType = '';
			$this->signup->ccinfo->cardNumber = '';
			$this->signup->ccinfo->cardExpiryMonth = '';
			$this->signup->ccinfo->curMonth = '';
			$this->signup->ccinfo->cardExpiryYear = '';
			$this->signup->ccinfo->curYear = '';
			$this->signup->ccinfo->cardCVV = '';
			$this->signup->ccinfo->period = '';
			$this->signup->ccinfo->agreeToTerms = false;
			$this->signup->ccinfo->notAgreeToTerms = false;
			
			$this->signup->user = new \stdClass();
			$this->signup->user->userName = '';
			$this->signup->user->password = '';
			$this->signup->user->passwordConfirm = '';
	        $this->signup->user->micrositeId = '';
			
			$this->signup->site = new \stdClass();
			$this->signup->site->login_link = '';
			$this->signup->site->siteNum = '';
			
			$this->signup->security = new \stdClass();
			$this->signup->security->validationCode = '';
			
			$this->signup->licenseinfo = new \stdClass();
			$this->signup->licenseinfo->domain = '';
			
			$this->signup->personal = new \stdClass();
			$this->signup->personal->companyName = '';
			$this->signup->personal->firstName = '';
			$this->signup->personal->lastName = '';
			$this->signup->personal->address1 = '';
			$this->signup->personal->address2 = '';
			$this->signup->personal->city = '';
			$this->signup->personal->state = '';
			$this->signup->personal->curState = '';
			$this->signup->personal->zipcode = '';
			$this->signup->personal->phone = '';
			$this->signup->personal->emailAddress = '';
			$this->signup->personal->emailAddressConfirm = '';
			
		}
		
		function addUser( $userName, $password, $passwordConfirm, $micrositeId ) {
			
			$this->signup->user = new \stdClass();
			
			$this->signup->user->userName = $userName;
			$this->signup->user->password = $password;
	        $this->signup->user->passwordConfirm = $passwordConfirm;
			$this->signup->micrositeId = $micrositeId;
			
		}
		
		
		function addProduct( $name, $version, $price ) {
			
			$this->signup->product = new \stdClass();
			
			$this->signup->product->name = $name;
			$this->signup->product->version = $version;
			$this->signup->product->price = $price;
			
		}
		
		function addAgreements( $ag1, $ag2, $ag3 ) {
			
			$this->signup->agreements = new \stdClass();
			
			$this->signup->agreements->userAgreement = $ag1;
			$this->signup->agreements->spamComplianceAgreement = $ag2;
			$this->signup->agreements->cancellationAgreement = $ag3;
			
		}

	    function addLicenseInfo( $domain ) {

	        $this->signup->licenseinfo = new \stdClass();

	        $this->signup->licenseinfo->domain = $domain;

	    }
		
	    function addPermissions( $personal_emails, $newsletter_emails ) {
		
		    $this->signup->permissions = new \stdClass();
		    
		    $this->signup->permissions->personalEmails = $personal_emails;
		    $this->signup->permissions->newsletterEmails = $newsletter_emails;
			
	    }
	    
		function addRequest(
			
			$request,
			$siteId,
			$type,
			$mode
		
		) {
			
			$this->signup = new \stdClass();
			
			$this->signup->request = $request;
			$this->signup->siteId = $siteId;
			$this->signup->type = $type;
			$this->signup->mode = $mode;
			
			/*
			$this->signup->request = 'availability';
			$this->signup->siteId = 'trials';
			$this->signup->type = 'aqtermlife';
			$this->signup->mode = 'signup';
			*/
		}
		
		function addState(
			
			$currentState,
			$nextState,
			$ready
		
		) {
			
			$this->signup->state = new \stdClass();
			
			$this->signup->state->currentState = $currentState;
			$this->signup->state->nextState = $nextState;
			$this->signup->state->ready = $ready;
		}

	    function addSite( $siteNum, $link ) {
		
		    $this->signup->site = new \stdClass();
		    $this->signup->site->siteNum = $siteNum;
		    $this->signup->site->login_link = $link;

	    }
		
		function addCreditCard(
			
			$cardHolderName,
			$curCCType,
			$cardNumber,
			$cardExpiryMonth,
			$curMonth,
			$cardExpiryYear,
			$curYear,
			$cardCVV,
			$period,
			$agreeToTerms,
			$notAgreeToTerms
		
		) {
			
			$this->signup->ccinfo = new \stdClass();
			
			$this->signup->ccinfo->cardHolderName = $cardHolderName;
			$this->signup->ccinfo->curCCType = $curCCType;
			$this->signup->ccinfo->cardNumber = $cardNumber;
			$this->signup->ccinfo->cardExpiryMonth = $cardExpiryMonth;
			$this->signup->ccinfo->curMonth = $curMonth;
			$this->signup->ccinfo->cardExpiryYear = $cardExpiryYear;
			$this->signup->ccinfo->curYear = $curYear;
			$this->signup->ccinfo->cardCVV = $cardCVV;
			$this->signup->ccinfo->period = $period;
			$this->signup->ccinfo->agreeToTerms = $agreeToTerms;
			$this->signup->ccinfo->notAgreeToTerms = $notAgreeToTerms;
			
		}
		
		function addAccount(
			
			$type,
			$price,
			$tax,
			$shipAndHandling,
			$subtotal,
			$total,
			$promocode,
			$promoText
		
		) {
			
			$this->signup->account = new \stdClass();
			
			$this->signup->account->type = $type;
			$this->signup->account->price = $price;
			$this->signup->account->tax = $tax;
			$this->signup->account->shipAndHandling = $shipAndHandling;
			$this->signup->account->subtotal = $subtotal;
			$this->signup->account->total = $total;
			$this->signup->account->promocode = $promocode;
			$this->signup->account->promoText = $promoText;
			
		}
		
		function addPersonal(
			
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
			$emailAddress
		
		) {
			
			$this->signup->personal = new \stdClass();
			
			$this->signup->personal->companyName = $companyName;
			$this->signup->personal->firstName = $firstName;
			$this->signup->personal->lastName = $lastName;
			$this->signup->personal->address1 = $address1;
			$this->signup->personal->address2 = $address2;
			$this->signup->personal->city = $city;
			$this->signup->personal->state = $state;
			$this->signup->personal->curState = $curState;
			$this->signup->personal->zipcode = $zipcode;
			$this->signup->personal->phone = $phone;
			$this->signup->personal->emailAddress = $emailAddress;
			
		}
		
		function personalToArray() {
			
			$personal = new \stdClass();
			
			$personal->companyName = $this->signup->personal->companyName;
			$personal->firstName = $this->signup->personal->firstName;
			$personal->lastName = $this->signup->personal->lastName;
			$personal->address1 = $this->signup->personal->address1;
			$personal->address2 = $this->signup->personal->address2;
			$personal->city = $this->signup->personal->city;
			$personal->state = $this->signup->personal->curState;
			$personal->zipcode = $this->signup->personal->zipcode;
			$personal->phone = $this->signup->personal->phone;
			$personal->emailAddress = $this->signup->personal->emailAddress;
			
			return json_decode(json_encode($personal), true);
		}

		function userToArray() {
			return json_decode(json_encode($this->signup->user), true);
		}
		
		function agreementsToArray() {
			return json_decode(json_encode($this->signup->agreements), true);
		}
		
		function addSecurity( $validationCode ) {
			
			$this->signup->security = new \stdClass();
			$this->signup->security->validationCode = $validationCode;
			
		}
		
		function getData() {
			return $this->signup;
		}
		
		function __destruct() {
			// TODO: Implement __destruct() method.
		}
		
	}
}
 // end of AQ2EMembership