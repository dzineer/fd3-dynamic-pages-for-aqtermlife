<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: FD3Confirmation.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/25/2016 9:34 PM
 */
//require_once('');

class FD3Confirmation {
	
	private $lineItems;
	private $headerItems;
	private $nonce;
	private $nonce_action;
	private $promoCodes;
	
	function __construct(  ) {
	}
	
	function render( $email ) {
	    
			
		ob_start(); ?>
		
		<style>

            .bootstrap-container {
                margin-top: 100px;
                max-width: 1100px;
                margin: 0 auto; }
            .bootstrap-container .thankyou-container {
                padding: 26px 180px;
                text-align: center;
                background: #fff;
                border-radius: 10px;
                margin: 2px auto;
                height: 500px;
                border: 1px solid #eee;
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid transparent;
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05); }
            .bootstrap-container .thankyou-container .main-message {
                margin: 0 auto;
                font-size: 36px;
                font-weight: 500;
                line-height: 1.2;
                letter-spacing: -.01em;
                width: 500px; }
            .bootstrap-container .thankyou-container .main-message h1 {
                font-size: 36px;
                font-weight: 500;
                line-height: 1.2;
                letter-spacing: -.01em; }
            .bootstrap-container .thankyou-container .main-message img {
                width: 140px; }
            .bootstrap-container .thankyou-container .main-message p {
                margin: 20px 0 0 0;
                margin-bottom: -14px;
                font-size: 18px;
                line-height: 1.5;
                color: #777; }

            .sent-to-container strong {
                font-size: 18px !important; }


        </style>

        <div class="form-container">
            <div class="bootstrap-container">
                <div class="thankyou-container">
                    <div class="main-message">
                        <h1>Almost there...</h1>
                        <img src="/wp-content/uploads/2017/01/confirmation-email-icon.png">
                        <p>Please verify your email address. We've sent a confirmation email to: </p>
                        <div class="sent-to-container"><strong><?= $email ?></strong></div>
                        <p>Click the confirmation link in that email to begin using the AQ2E Platform</p>
                    </div>
                </div>
            </div>
        </div>
		
		<?
		
		// $this->setJS();
		
		$form = ob_get_clean();
		
		return $form;
	}
	
	function __destruct() {
		// TODO: Implement __destruct() method.
	}
	
	
}
 // end of FD3Confirmation