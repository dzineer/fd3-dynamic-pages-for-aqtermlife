<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAffiliateWidget.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:58 PM
 */
//require_once('');

class AQ2EAffiliateWidget extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {}
	
	function prepare() {

        $this->getVar( 'FD3' )->load->library( 'AffiliateFacade', null, 'affiliate_facade', true );
        $this->getVar( 'FD3' )->affiliate_facade->loadAffiliateData();

		$siteData = $this->getVar( 'FD3' )->session->getSession('/affiliate_site');

		if( $siteData === false ) { // if we do not get affiliate info quit
			exit(0);
		}
		
		$invoice_items = $this->getVar( 'FD3' )->session->getSession('/invoice_items');

		echo "<pre>".print_r($siteData,true) . '</pre>'; exit;
	}
	
	function render_price() {
        ob_start();
		
        if( $this->getVar('FD3')->session->getSession('/affiliate_site/affiliate2/affiliateId') != 'aqterm' ) {
        ?>
        	<div style="font-size: 26px; font-family: 'Open Sans'; font-weight: 300;">Your General Agency has secured a $20 discount for you. Don’t miss out on getting this incredible program for only $79/month. The AQ2E Quote Engine Platform is included in the offer. Be sure to get the promo Code from your General Agency.</div>
        <?
        }  else { ?>

        	<div style="font-size: 26px; font-family: 'Open Sans'; font-weight: 300;text-align:center;">The AQ2E Quote Engine Platform is included in the offer.</div>

        <? }

        $content = ob_get_clean();
        return $content;
	}

	function render_home() {
        ob_start();
		
		$bg = get_option('ffpmwp_affiliate_background');

        if( strlen($bg) ) : ?>
                <style>
                   #fd3-affiliate-container {

                       color: #ffffff;
                       background-color: #0b435f;
                       border-color: #0b435f;

                   }
                </style>
        <? endif;
        if( $this->getVar('FD3')->session->getSession('/affiliate_site/affiliate2/affiliateId') != 'aqterm' ) {
        ?>

        	<div class="bootstrap-container">

                <div class="aq2e-widget">

                        <div class="agency-offer">

                            <div class="row row-spacing ">

                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                <? // echo '<pre>: ' . print_r( $this->getVar('FD3')->session->getSession('/affiliate_site'), true) . "</pre>"; ?>
                                    <h3 class="bga-company-info"><span class="asterisk">*</span><span class="bga-company-name"><?= $this->getVar('FD3')->session->getSession('/affiliate_site/site/GACompany_name'); ?></span> has secured a <?= $this->getVar('FD3')->session->getSession('/affiliate_site/affiliate2/offerPercentage'); ?> discount for its affiliated reps to obtain this unique marketing tool.</h3>
                                    <h2 class="bga-offer">
                                        For only &dollar;<?= $this->getVar('FD3')->session->getSession('/affiliate_site/affiliate2/pricePerPeriod'); ?>, you can have the AQ2E Platform.
                                    </h2>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <img src="<?= $this->getVar('FD3')->session->getSession('/affiliate_site/site/logo'); ?>" class="site-logo" style="max-width: 100%;">
                                </div>


                            </div>

                        </div>

                </div>

            </div>
        <?
        }  else { ?>

        	<div class="bootstrap-container">

                <div class="aq2e-widget">

                        <div>

                            <div class="row row-spacing ">

                            	<div class="container">

									<div class="row">

		                                <div class="col-md-12">
		                                    <?// echo '<pre>: ' . print_r( $this->getVar('FD3')->session->getSession('/affiliate_site'), true) . "</pre>"; ?>
		                                	<h2 id="main-aqterm-header" style=""><strong>Only <span style="color: #e46622; font-size: 1.3em;">$30</span> per month</strong></h2>
		                                </div>

		                                <div class="col-md-12">
		                                	<h2 style="font-size: 1.5em;text-align: center;color:#ffffff;margin-top: -19px;"><span style="font-size: x-large"><strong>Website Quote Engine – Term Life Microsite – AQ2E Facebook App</strong></span></h2>
		                                </div>

		                                <div class="col-md-12">
		                                	<h2 id="mini-aqterm-header"  style=""><span style="font-size: medium"><strong>No Set Up – No Lengthy Contract – Cancel at any time</strong></span></h2>
		                                </div>		                                		                                

		                                <div class="col-md-12">

		                                	<div class="row">

				                                <div class="col-md-4">

				                                	<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_center et_pb_blurb_0 et_pb_blurb_position_top fd3-left-blurb">
														<div class="et_pb_blurb_content">
															<div class="et_pb_main_blurb_image">
																<span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border et-animated" style="color: #ffffff; background-color: #0c71c3; border-color: #ffffff;">l</span>
															</div>
															<div class="et_pb_blurb_container">
																<h4>No Contracts</h4>
															</div>
														</div><!-- .et_pb_blurb_content -->
													</div><!-- .et_pb_blurb -->

				                                </div>

				                                <div class="col-md-4">

													<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_center et_pb_blurb_1 et_pb_blurb_position_top">
														<div class="et_pb_blurb_content">
															<div class="et_pb_main_blurb_image">
																<span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border et-animated" style="color: #ffffff; background-color: #0c71c3; border-color: #ffffff;"></span>
															</div>
															<div class="et_pb_blurb_container">
																<h4>Minimal Setup</h4>
															</div>
														</div><!-- .et_pb_blurb_content -->
													</div><!-- .et_pb_blurb -->

				                                </div>

				                                <div class="col-md-4">

													<div class="et_pb_blurb et_pb_module et_pb_bg_layout_dark et_pb_text_align_center et_pb_blurb_2 et_pb_blurb_position_top fd3-right-blurb">
														<div class="et_pb_blurb_content">
															<div class="et_pb_main_blurb_image">
																<span class="et-pb-icon et-waypoint et_pb_animation_top et-pb-icon-circle et-pb-icon-circle-border et-animated" style="color: #ffffff; background-color: #0c71c3; border-color: #ffffff;">q</span>
															</div>
															<div class="et_pb_blurb_container">
																<h4>Cancel Anytime</h4>
															</div>
														</div><!-- .et_pb_blurb_content -->
													</div><!-- .et_pb_blurb -->
				                                
				                                </div>


		                                	</div>

		                                </div>


	                                </div>

                                </div>

                            </div>

                        </div>

                </div>

            </div>

        <? }

        $content = ob_get_clean();
        return $content;
	}
	
	function render() 
	{
        ob_start();
		
		$bg = get_option('fd3-ap-aqterm_affiliate_background');

        ?>

            <? if( strlen($bg) ) : ?>
                <style>
                   #fd3-affiliate-container {

                       color: #ffffff;
                       background-color: #0b435f;
                       border-color: #0b435f;

                   }
                </style>
            <? endif ?>
            <div class="bootstrap-container">

                <div class="aq2e-widget">


                        <div class="agency-offer">

                            <div class="row row-spacing ">

                                <div class="col-md-12">
                                    <?= $this->getVar( 'FD3')->sessiongetSession('/affiliate_site/carriersWP/content'); ?>
                                </div>

                            </div>

                        </div>

                </div>

            </div>
        <?
        $content = ob_get_clean();
        echo $content;
	}
	
	function renderAffiliate() 
	{
		ob_start();
		
		$allPlugins = wp_get_active_and_valid_plugins();
		
		?>
							
			<div class="wrap">
				<h1>From Rendered AQ2E Affiliate Widget</h1>
				<h2>Multi-Site Check: <?= is_multisite() ? 'Multi-site' : 'Not Multi-site'; ?></h2>
				<br/>
				<h3>Plugins: </h3>
				<ul>
					<? foreach( $allPlugins as $plugin ) : ?>
					<li><? $paths = explode("/", $plugin); $pieces = explode(".", $paths[ count($paths) - 1 ]); $pName = $pieces[0]; echo ucwords( str_replace('-', ' ', $pName) ); ?></li>
					<? endforeach; ?>
				</ul>
			</div>
		
		<?
		$content = ob_get_clean();
		echo $content;
	}
	
	function loadCSS() 
	{
		wp_enqueue_style ( 'bootstrap-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/css/bootstrap.css' );
		wp_enqueue_style ( 'custom-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/css/aq2e-affiliate-custom.css' );
		wp_enqueue_style ( 'fd3-aq2e-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/fd3-aq2e/style.css' );
	}
	
	function loadJS() 
	{
		wp_enqueue_script('jquery');
		wp_register_script ( 'aq2e_affiliate_ajax_custom', aAQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/js/aq2e-affiliate-custom.js' );
		
		wp_localize_script( 'aq2e_affiliate_ajax_custom', 'myAjax', array( 'url' => admin_url( 'admin-ajax.php' ),
		                                                                   'formid' => $this->id,
		                                                                   'strictFlag' => '"use strict;"',
		                                                                   'eventType' => 'click',
		                                                                   'formButtonQuery' => '.form-btn',
		                                                                   'formContainerQuery' => '.form-container',
		                                                                   'action' => 'process',
		                                                                   'formQuery' => '#register_form',
		                                                                   'formType' => 'post',
		                                                                   'dataType' => 'json',
		                                                                   'useCache' => 'false'  ) );
		wp_enqueue_script( 'aq2e_affiliate_ajax_custom' );
		
		wp_register_script ( 'aq2e_affiliate_slideshow', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/js/aq2e-affiliate-slideshow.js' );
		
	}
	
	/*
	function AQ2EAffiliateWidget() {
	
	}
	*/
} // end of AQ2EAffiliateWidget