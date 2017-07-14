<?php
/**
 * Filename: FD3DynamicPage.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 9:17 PM
 */

namespace AQ2EMarketingPlatform;

class FD3DynamicPage extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function loadDynamicPage( $id , $page , $version_id ) {
		
		$template = FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'page_templates/' . 'page' . '-' . $id . '.php';
		$cssTemplate = FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/page_templates/' . 'css' . '-' . $id . '.css' . '?v=' . $version_id;
		
		// echo $template;
		
		if ( file_exists( $template ) ) {
			include_once( $template );
			
			return true;
		}
		else {
			return false;
		}
	}
	
	
	function is_page() {
		
		$host = $this->getHost();
		
		// echo "host: ". print_r($host,true); exit;
		
		if ( count( $host ) != 2 && count( $host ) != 3 ) {
			$this->set404Status( true , false );
			
			return;
		}
		
		if ( $_SERVER[ 'REMOTE_ADDR' ] == '171.4.232.196' ) {
			//	echo "could be"; exit;
		}
		
		$subdomain = $host[ 0 ];
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
	/*	if ( $subdomain != 'www' && $subdomain != 'aq2emarketing' ) ) {
			$this->set404Status( true , false );
			
			return;
		}*/
		
		// echo '<br>okay so far: '; exit;
		
		$this->set404Status( false , true );
		
		$uri = $_SERVER[ 'REQUEST_URI' ];
		
		//$current_url = wp_parse_url;
		$path = $this->getPathAsArray( $uri , [ 'REMOVE_FIRST_SLASH' => true ] );
		
		if ( is_array( $path ) && count( $path ) != 0 ) { // page/12345?v=6
			
			if ( count( $path ) == 2 ) {
				$slug     = $path[ 0 ];
				$s_params = $path[ 1 ];
				
				// printf("<pre>Slug: %s", $slug);
				// printf("<pre>String Params: %s", $s_params);
				
				if ( $slug == 'dp' ) {
					
					if ( stristr( $s_params , "?" ) ) { // 12345?v=6
						$params = explode( "?" , $s_params );
						
						// printf("<pre>Count: %s", count($params) );
						
						if ( count( $params ) == 2 ) { // good if we got the right parameter format
							$s_dynamicgpage_id = $params[ 0 ];
							$s_version         = $params[ 1 ];
							if ( stristr( $s_version , "=" ) ) { // v=6
								$arr_version = explode( "=" , $s_version );
								if ( count( $arr_version ) == 2 ) {
									$s_version_var = $arr_version[ 0 ];
									$s_version     = $arr_version[ 1 ];
									
									if ( $s_version_var == 'v' && is_numeric( $s_version ) ) {
										
										// printf( "<pre>Params: %s\n" , print_r( $params , true ) );
										// printf("\nLanding Page Id: %s\n", $s_dynamicgpage_id);
										// printf("Version: %s\n", $s_version); exit;
										
										$dpage = $this->getDynamicPage( $subdomain, $s_dynamicgpage_id );
										
										// printf("<pre>dPage: %s\n", print_r($dpage,true)); exit;
										
										if ( $dpage && count( $dpage ) ) { // landingpage exists
											// let's load it
											if ( $this->loadDynamicPage( $s_dynamicgpage_id , $dpage , $s_version ) ) {
												aq2emm_exit( 's_dynamicgpage_id loaded: ' . $s_dynamicgpage_id );
											}
											else {
												return;
											}
											
										}
										
										aq2emm_exit( 's_dynamicgpage_id invalid' );
									}
									else {
										return;
									}
								}
								else {
									return;
								}
							}
							else { // not good so pass control back
								return;
							}
							
						}
						else { // not good so pass control back
							return;
						}
					}
					else {
						return;
					}
					
				}
				
			}
			else {
				return;
			}
			// echo printf("<br>Count: %s", count($path)) . print_r($path,true);
		}
		else {
			return;
		}
		
	}
	
	function getDynamicPage( $affiliateId, $id ) {
		$dynamicPages = [
			
			[
				'id'             => 'thankyou' ,
				'campaign_id'    => '2346' ,
				'page_content'   => [
					'main_bg'         => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/thankyou/bg_6.jpg' ,
					'main_header'     => 'Thank You For Subscribing To Our Guide' ,
					'main_sub_header' => '- 9 Tips To Guide You Through The Process -' ,
					'top_image'       => '' ,
					'mini_top_text'   => 'Subscribe to our mailing list and receive added value!' ,
					'spam_disclaimer' => 'We hate SPAM and promise to keep your email address safe.' ,
					'form_title'      => 'YES, let me get that Quote!' ,
					'form_sub_text'   => 'Let Me Provide You with an Instant Online Quote' ,
					'form_image'      => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/thankyou/value.png' ,
					// 'form_image' => 'https://s3.amazonaws.com/convertkit/subscription_forms/images/004/990/527/standard/value.png?1489146488',
					'button_text'     => 'Click For Our Guide'
				] ,
				'require_fields' => [ 'phone' => 'not-required' ] ,
				'scripts'        => [
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/jquery.js' , 'ver' => '220' ] ,
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/custom.js' , 'ver' => '6' ]
				]
			],
			[
				'id'                 => 'signup' ,
				'campaign_id'        => '2346' ,
				'page_content'       => [
					'main_bg'         => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/signup/bg_6.jpg' ,
					'main_header'     => 'Platforms Registration Page' ,
					'main_sub_header' => '- 9 Tips To Guide You Through The Process -' ,
					'top_image'       => '' ,
					'mini_top_text'   => 'Subscribe to our mailing list and receive added value!' ,
					'spam_disclaimer' => 'We hate SPAM and promise to keep your email address safe.' ,
					'form_title'      => 'YES, let me get that Quote!' ,
					'form_sub_text'   => 'Let Me Provide You with an Instant Online Quote' ,
					'form_image'      => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/signup/value.png' ,
					// 'form_image' => 'https://s3.amazonaws.com/convertkit/subscription_forms/images/004/990/527/standard/value.png?1489146488',
					'button_text'     => 'Next'
				] ,
				'require_fields'     => [ 'phone' => 'not-required' ] ,
				'scripts'            => [
					[ 'load-first' => false , 'src' => get_dynamic_pages_template_directory_uri() . '/js/zxcvbn.js' , 'ver' => '4.7.3' ] ,
					[ 'load-first' => false , 'src' => get_dynamic_pages_template_directory_uri() . '/js/custom.js' , 'ver' => '6' ]
				] ,
				'global_var_scripts' => [
					
					[
						
						'name'    => 'my_AMP_Ajax' ,
						'content' => [
							'url'                 => admin_url( 'admin-ajax.php' ) ,
							'formid'              => 'register_amp_form' ,
							'nonce'               => $this->getVar('FD3')->nonce->getNonce( 'register_amp_form' ) ,
							'validateNonce'       => $this->getVar('FD3')->validateNonce->getNonce( 'validate_amp_form' ) ,
							'promoNonce'          => $this->getVar('FD3')->promoNonce->getNonce( 'process_amp_promo' ) ,
							'strictFlag'          => '"use strict;"' ,
							'eventType'           => 'click' ,
							'formButtonQuery'     => '.fd3-subscribe-btn' ,
							'formContainerQuery'  => '.form-container' ,
							'action'              => 'process_amp_registration' ,
							'formQuery'           => '#register_form' ,
							'formValidateId'      => '#validate_form' ,
							'formValidate'        => 'validate_amp_form' ,
							'validateAction'      => 'process_validation' ,
							'promoAction'         => 'process_amp_promo' ,
							'formPromo'           => 'process_amp_promo' ,
							'formType'            => 'post' ,
							'dataFilesPath'       =>  get_dynamic_pages_template_directory_uri() . '/data/',
							'affiliateId'         =>  $affiliateId ,
							'dataType'            => 'json' ,
							'useCache'            => 'false' ,
							'redirect_on_success' => '/forms/thankyou?v=6'
						]

					],
					[
						
						'name'    => 'my_AP_Ajax' ,
						'content' => [
							'url'                 => admin_url( 'admin-ajax.php' ) ,
							'formid'              => 'register_ap_form' ,
							'nonce'               => $this->getVar('FD3')->nonce->getNonce( 'register_ap_form' ) ,
							'validateNonce'       => $this->getVar('FD3')->validateNonce->getNonce( 'validate_ap_form' ) ,
							'promoNonce'          => $this->getVar('FD3')->promoNonce->getNonce( 'process_ap_promo' ) ,
							'strictFlag'          => '"use strict;"' ,
							'eventType'           => 'click' ,
							'formButtonQuery'     => '.fd3-subscribe-btn' ,
							'formContainerQuery'  => '.form-container' ,
							'action'              => 'process_ap_registration' ,
							'formQuery'           => '#register_form' ,
							'formValidateId'      => '#validate_form' ,
							'formValidate'        => 'validate_ap_form' ,
							'validateAction'      => 'process_ap_validation' ,
							'promoAction'         => 'process_ap_promo' ,
							'formPromo'           => 'process_ap_promo' ,
							'formType'            => 'post' ,
							'dataFilesPath'       =>  get_dynamic_pages_template_directory_uri() . '/data/',
							'affiliateId'         =>  $affiliateId ,
							'dataType'            => 'json' ,
							'useCache'            => 'false' ,
							'redirect_on_success' => '/forms/thankyou?v=6'
						]

					]					
				
				]
			],			
			[
				'id'                 => 'react' ,
				'campaign_id'        => '2346' ,
				'page_content'       => [
					'main_bg'         => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/signup/bg_6.jpg' ,
					'main_header'     => 'Platforms Registration Page' ,
					'main_sub_header' => '- 9 Tips To Guide You Through The Process -' ,
					'top_image'       => '' ,
					'mini_top_text'   => 'Subscribe to our mailing list and receive added value!' ,
					'spam_disclaimer' => 'We hate SPAM and promise to keep your email address safe.' ,
					'form_title'      => 'YES, let me get that Quote!' ,
					'form_sub_text'   => 'Let Me Provide You with an Instant Online Quote' ,
					'form_image'      => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/signup/value.png' ,
					// 'form_image' => 'https://s3.amazonaws.com/convertkit/subscription_forms/images/004/990/527/standard/value.png?1489146488',
					'button_text'     => 'Next'
				] ,
				'require_fields'     => [ 'phone' => 'not-required' ] ,
				'scripts'            => [
					[ 'load-first' => false , 'src' => get_dynamic_pages_template_directory_uri() . '/js/zxcvbn.js' , 'ver' => '4.7.3' ] ,
					[ 'load-first' => false , 'src' => get_dynamic_pages_template_directory_uri() . '/js/custom.js' , 'ver' => '6' ]
				] ,
				'global_var_scripts' => [
					
					[
						
						'name'    => 'myAjax' ,
						'content' => [
							'url'                 => admin_url( 'admin-ajax.php' ) ,
							'formid'              => 'register_form' ,
							'nonce'               => $this->getVar('FD3')->nonce->getNonce( 'register_form' ) ,
							'validateNonce'       => $this->getVar('FD3')->validateNonce->getNonce( 'validate_form' ) ,
							'promoNonce'          => $this->getVar('FD3')->promoNonce->getNonce( 'process_promo' ) ,
							'strictFlag'          => '"use strict;"' ,
							'eventType'           => 'click' ,
							'formButtonQuery'     => '.fd3-subscribe-btn' ,
							'formContainerQuery'  => '.form-container' ,
							'action'              => 'process_registration' ,
							'formQuery'           => '#register_form' ,
							'formValidateId'      => '#validate_form' ,
							'formValidate'        => 'validate_form' ,
							'validateAction'      => 'process_validation' ,
							'promoAction'         => 'process_promo' ,
							'formPromo'           => 'process_promo' ,
							'formType'            => 'post' ,
							'affiliateId'         =>  $affiliateId ,
							'dataType'            => 'json' ,
							'useCache'            => 'false' ,
							'redirect_on_success' => '/forms/thankyou?v=6'
						]
					]
				
				]
			]
		];
		
		// echo "<pre>dpage" . $id; exit;
		
		foreach ( $dynamicPages as $dpage ) {
			if ( $dpage[ 'id' ] == $id ) {
				return $dpage;
			}
		}
		
		return null;
	}
	
	
	function __destruct() {
	}
	/*
	function FD3DynamicPage() {
	
	}
	*/
} // end of FD3DynamicPage