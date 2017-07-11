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
	private $affiliate;
	private $gateway;
	/* constants */
	
	function __construct() {}
	
	function setGateway( $gateway ) {
		$this->gateway = $gateway;
		add_action('aq2e_affiliate_content_load', array( $this, 'renderAffiliate') );
	}
	
	function render_home() {
		ob_start();
		
		$bg = get_option('ffpmwp_affiliate_background');
		
		?><? if( strlen($bg) ) : ?>
										<style>
													#fd3-affiliate-container {
																
																color: #ffffff;
																background-color: #0b435f;
																border-color: #0b435f;
																
													}
										</style>
		<? endif ?><div class="bootstrap-container">
							
							<div class="aq2e-widget">
										
										
										<div class="agency-offer">
													
													<div class="row row-spacing ">
																
																<div class="col-md-9">
					<? // echo 'AAA: ' . print_r( AQ2ESession::getSession('/affiliate_site/affiliate2'), true); ?>
																			<h3 class="bga-company-info"><span class="asterisk">*</span><span class="bga-company-name"><?= $this->getVar( 'FD3')->session->getSession('/affiliate_site/site/GACompany_name'); ?></span> has secured a <?= $this->getVar( 'FD3')->session->getSession('/affiliate_site/affiliate2/offerPercentage'); ?> discount for its affiliated reps to obtain this unique marketing tool.</h3>
																			<h2>
																						For only &dollar;<?= $this->getVar( 'FD3')->session->getSession('/affiliate_site/affiliate2/pricePerPeriod'); ?>, you can have the AQ2E Platform.
																			</h2>
																</div>
																<div class="col-md-3">
																			<img src="<?= $this->getVar( 'FD3')->session->getSession('/affiliate_site/site/logo'); ?>" class="site-logo">
																</div>
													
													
													
													
													</div>
										
										</div>
							
							</div>
							
							</div><?
		$content = ob_get_clean();
		echo $content;
	}
	
	function render() {
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
					   <?= $this->getVar( 'FD3')->session->getSession('/affiliate_site/carriersWP/content'); ?>
																			</div>
																
																</div>
													
													</div>
										
										</div>
							
							</div>
		<?
		$content = ob_get_clean();
		echo $content;
	}
	
	function renderAffiliate() {
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
	
	function loadCSS() {
		wp_enqueue_style ( 'bootstrap-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/css/bootstrap.css' );
		wp_enqueue_style ( 'custom-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/css/aq2e-affiliate-custom.css' );
		
		// wp_enqueue_style ( 'fd3-font-awesome-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/font-awesome/css/font-awesome.css' );
		// wp_enqueue_style ( 'fd3-font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'  );
		
		wp_enqueue_style ( 'fd3-aq2e-css', AQ2E_AFFILIATE_WIDGET_WEB_BASE . 'assets/fd3-aq2e/style.css' );
	}
	
	function loadJS() {
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