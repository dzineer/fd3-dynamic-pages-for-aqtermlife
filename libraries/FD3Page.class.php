<?php
/**
 * Filename: FD3Page.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 9:24 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3Page extends FD3URLPage {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getPage( $id ) {
		$pages = [
			
			[
				'id'           => '12362' ,
				'campaign_id'  => '2346' ,
				'page_content' => [
					'main_bg'         => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/thankyou/bg_6.jpg' ,
					'main_header'     => 'Thank You For Subscribing To Our Guide' ,
					'main_sub_header' => '- Life Insurance Planning Guide -' ,
					'text1'           => 'Be sure to check your email to receive your eBook (PDF) download.' ,
					'text2'           => 'Thank You' ,
				] ,
				'scripts'      => [
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/jquery.js' , 'ver' => '220' ] ,
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/custom.js' , 'ver' => '6' ]
				]
			] ,
			[
				'id'             => 'thankyou-main' ,
				'campaign_id'    => '2346' ,
				'page_content'   => [
					'main_bg'         => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/thankyou-main/bg_6.jpg' ,
					'main_header'     => 'Thank You For Subscribing To Our Guide' ,
					'main_sub_header' => '- 9 Tips To Guide You Through The Process -' ,
					'top_image'       => '' ,
					'mini_top_text'   => 'Subscribe to our mailing list and receive added value!' ,
					'spam_disclaimer' => 'We hate SPAM and promise to keep your email address safe.' ,
					'form_title'      => 'YES, let me get that Quote!' ,
					'form_sub_text'   => 'Let Me Provide You with an Instant Online Quote' ,
					'form_image'      => FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/images/page_templates/thankyou-main/value.png' ,
					// 'form_image' => 'https://s3.amazonaws.com/convertkit/subscription_forms/images/004/990/527/standard/value.png?1489146488',
					'button_text'     => 'Click For Our Guide'
				] ,
				'require_fields' => [ 'phone' => 'not-required' ] ,
				'scripts'        => [
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/jquery.js' , 'ver' => '220' ] ,
					[ 'src' => get_dynamic_pages_template_directory_uri() . '/js/custom.js' , 'ver' => '6' ]
				]
			]
		
		];
		
		foreach ( $pages as $page ) {
			if ( $page[ 'id' ] == $id ) {
				return $page;
			}
		}
		
		return null;
	}
	
	
	function is_page() {
		
		aq2emm_log( "is_pages called" );
		
		$host = $this->getHost();
		
		$subdomain = $host[ 0 ];
		
		// echo '<br>subdomain: ' . $subdomain; exit;
		
		if ( count( $host ) != 3 ) {
			$this->set404Status( true , false );
			aq2emm_log( "is_pages: 404" );
			
			return;
		}
		
		if ( $subdomain != 'www' && false ) {
			$this->set404Status( true , false );
			
			return;
		}
		
		$this->set404Status( false , true );
		
		$uri = $_SERVER[ 'REQUEST_URI' ];
		
		// printf("<pre>uri: %s", $uri ); exit;
		
		$this->getVar('FD3')->load->library( 'FD3URI', null, 'uri', true );
		$this->getVar('FD3')->uri->setURI( $uri );
		
		$method   = $this->getVar('FD3')->uri->getHTTPMethod();
		$segments = $this->getVar('FD3')->uri->getUriSegments();
		
		// printf("<pre>segments: %s", print_r( $segments, true) ); exit;
		
		if ( $method == 'GET' ) {
			
			if ( is_array( $segments ) && count( $segments ) != 0 ) { // forms/12345?v=6
				if ( count( $segments ) == 3 ) {
					
					$s_version = $segments[ 0 ];
					$s_entity  = $segments[ 1 ];
					$s_page_id = $segments[ 2 ];
					
					/*				printf("<pre>Slug: %s", $slug);
								printf("<pre>String Params: %s", $s_param); exit;*/
					
					if ( $s_version == 'v1' && $s_entity == 'pages' ) {
						
						if ( strlen( $s_page_id ) > 0 ) { // good if we got the right parameter format
							
							$page = $this->getPage( $s_page_id );
							
							if ( $page && count( $page ) ) { // form exists
								// let's load it
								
								if ( isset( $_GET[ 'debug' ] ) && $_GET[ 'debug' ] == 'true' ) {
									
									$pageObj       = new \stdClass();
									$pageObj->page = $page;
									echo json_encode( $page );
									aq2emm_exit( 'page(debug) json response output: ' . sprintf( "s_form_id: %s|lpage: %s|version: %s" , $s_page_id , print_r( $page , true ) , $s_version ) );
									
								}
								else {
									
									if ( $this->loadPage( $s_page_id , $page ) ) {
										aq2emm_exit( 'form loaded: ' . sprintf( "s_form_id: %s|lpage: %s|version: %s" , $s_page_id , print_r( $page , true ) , $s_version ) );
									}
									else { // not good so pass control back
										return;
									}
									
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
					
				}
				else {
					return;
				}
			}
			else {
				return;
			}
		}
		else if ( $method == 'PUT' ) { // these ones are for saving the data
			
			$error           = new \stdClass();
			$error->message  = 'Invalid Request Method';
			$error->examples = 'Valid methods: GET';
			
			aq2emm_exit_json( $error );
			
		}
		else if ( $method == 'POST' ) {
			
			$error           = new \stdClass();
			$error->message  = 'Invalid Request Method';
			$error->examples = 'Valid methods: GET';
			
			aq2emm_exit_json( $error );
			
		}
		
	}
	
	function __destruct() {
	}
	/*
	function FD3Page() {
	
	}
	*/
} // end of FD3Page