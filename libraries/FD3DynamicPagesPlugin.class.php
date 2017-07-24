<?php
namespace AQ2EMarketingPlatform;
/**
 * Filename: FD3_Dynamic_Pages_Plugin.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/22/2017 5:41 PM
 */

if( ! class_exists('AQ2EMarketingPlatform\FD3DynamicPagesPlugin' ) ) {
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	class FD3DynamicPagesPlugin extends FD3Library {
		
		var $plugin_version = FD3_DYNAMIC_PAGES_PLUGIN_VERSION;
		var $menu_page;
		var $dashboard_options;
		var $protocol;
		var $plugin_name;
		var $admin_menu;
		var $formId;
		var $scriptBlocks;
		var $nonce;
		var $validateNonce;
		var $promoNonce;
		var $executableRules;
		var $site_num = '';
		var $FD3;
		
		private static $_this;
		
		function __construct() {
			if ( isset( self::$_this ) ) { // first don't allow more than one instance of this class
				wp_die(
					sprintf(
						esc_html__( '%s is a singleton class and you cannot create a second instance.' , 'fd3_dynamic_pages_plugin' ) , get_class( $this )
					)
				);
			}
			
			if ( ( defined( 'FD3_DYNAMIC_PAGES_THEME' ) && FD3_DYNAMIC_PAGES_THEME || function_exists( 'fd3_xyx' ) ) ) {
				return; // Disable the plugin, if the theme comes with the FD3_DYNAMIC_PAGES_PLUGIN
			}
			
			self::$_this = $this;
		}
		
		function run() {
			
			$this->protocol = is_ssl() ? 'https' : 'http';
			$this->scriptBlocks = [];
			
			$this->fd3_plugin_setup_dynamic_pages();
			
			remove_filter( 'template_redirect' , 'redirect_canonical' );
			
			$this->getVar('FD3')->load->library( 'FD3WPAction' , null , 'wp_actions' );
			$this->getVar('FD3')->load->library( 'FD3WPShortcode' , null , 'wp_shortcodes' );
			
			$this->getVar('FD3')->load->library( 'FD3Nonce' , null , 'nonce' );
			
			$this->getVar('FD3')->load->library( 'FD3Capture_Form', null, 'optin_form' );
			$this->getVar('FD3')->optin_form->initForm( 'optin_form' , "AQ2E Platform Registration Form" , [ 'contact_info' , 'account_info' , 'billing_info' ] , $this->getVar('FD3')->nonce , 'optin_form' );
			
			$this->getVar('FD3')->wp_actions->add( 'template_redirect', [ $this , 'template_redirect' ] );
			$this->getVar('FD3')->wp_actions->add( 'admin_enqueue_scripts', [ $this , 'register_scripts' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process', [ $this->getVar('FD3')->optin_form , 'process' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process', [ $this->getVar('FD3')->optin_form , 'process' ] );
			
			// initForm( $id, $formTitle, $formStates = array(), $nonce, $nonce_action )

			$this->getVar('FD3')->load->library( 'FD3_AMPForm_Register', null, 'register_amp_form' );
			$this->getVar('FD3')->register_amp_form->initForm( 'register_amp_form' , "AQ2E Marketing Platform Registration Form" , [ 'contact_info' , 'account_info' , 'billing_info' ] , $this->getVar('FD3')->nonce , 'register_amp_form' );
			$this->getVar('FD3')->register_amp_form->isNonceExpired( 'register_amp_form' );

			$this->getVar('FD3')->load->library( 'FD3_APForm_Register', null, 'register_ap_form' );
			$this->getVar('FD3')->register_ap_form->initForm( 'register_ap_form' , "AQ2E Platform Registration Form" , [ 'contact_info' , 'account_info' , 'billing_info' ] , $this->getVar('FD3')->nonce , 'register_ap_form' );
			$this->getVar('FD3')->register_ap_form->isNonceExpired( 'register_ap_form' );			
			
			$this->getVar('FD3')->load->library( 'FD3Nonce' , null , 'validateNonce' );
			$this->getVar('FD3')->load->library( 'FD3Nonce' , null , 'promoNonce' );
			
			$this->getVar('FD3')->load->library( 'FD3_AMPForm_Promo' , null , 'amp_promo' );
			$this->getVar('FD3')->amp_promo->initForm( 'process_amp_promo' , "AQ2E Promo Code" , [ 'process_amp_promo' ] , $this->getVar('FD3')->promoNonce , 'process_amp_promo' );
			$this->getVar('FD3')->amp_promo->isNonceExpired( 'process_amp_promo' );

			$this->getVar('FD3')->load->library( 'FD3_APForm_Promo' , null , 'ap_promo' );
			$this->getVar('FD3')->ap_promo->initForm( 'process_ap_promo' , "AQ2E Promo Code" , [ 'process_ap_promo' ] , $this->getVar('FD3')->promoNonce , 'process_ap_promo' );
			$this->getVar('FD3')->ap_promo->isNonceExpired( 'process_ap_promo' );			
			
			$this->getVar('FD3')->load->library( 'FD3_Form_Validator' , null , 'validator' );
			$this->getVar('FD3')->validator->initForm( 'validate_form' , "AQ2E Platform Registration Form" , [ 'validate_info' ] , $this->getVar('FD3')->validateNonce , 'validate_form' );
			$this->getVar('FD3')->validator->isNonceExpired( 'validate_form' );
			
			$this->getVar('FD3')->load->library( 'FD3AMPInvoice' , null , 'inv_amp' );
			$this->getVar('FD3')->inv_amp->initInvoice( $this->getVar('FD3')->nonce , 'register_amp_form' );

			$this->getVar('FD3')->load->library( 'FD3APInvoice' , null , 'inv_ap' );
			$this->getVar('FD3')->inv_ap->initInvoice( $this->getVar('FD3')->nonce , 'register_ap_form' );
			
			$this->getVar('FD3')->wp_actions->add( 'init', [ $this->getVar('FD3')->reg_amp_form , 'setJS' ] );
			$this->getVar('FD3')->wp_actions->add( 'init', [ $this->getVar('FD3')->reg_ap_form , 'setJS' ] );

			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_amp_registration', [ $this->getVar('FD3')->register_amp_form , 'process_amp_registration' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_amp_registration' , [ $this->getVar('FD3')->register_amp_form , 'process_amp_registration' ] );
			
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_ap_registration' , [ $this->getVar('FD3')->register_ap_form , 'process_ap_registration' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_ap_registration' , [ $this->getVar('FD3')->register_ap_form , 'process_ap_registration' ] );
			
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_amp_promo' , [ $this->getVar('FD3')->amp_promo , 'process_amp_promo' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_amp_promo' , [ $this->getVar('FD3')->amp_promo , 'process_amp_promo' ] );

			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_ap_promo' , [ $this->getVar('FD3')->ap_promo , 'process_ap_promo' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_ap_promo' , [ $this->getVar('FD3')->ap_promo , 'process_ap_promo' ] );
			
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_validation' , [ $this->getVar('FD3')->validator , 'process_validation' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_validation' , [ $this->getVar('FD3')->validator , 'process_validation' ] );
			
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_process_invoice' , [ $this->getVar('FD3')->inv , 'process_invoice' ] );
			$this->getVar('FD3')->wp_actions->add( 'wp_ajax_nopriv_process_invoice' , [ $this->getVar('FD3')->inv , 'process_invoice' ] );
			
			
//			$this->getVar('FD3')->load->library( 'AffiliateShortcode' , null , 'affiliate_shortcode' );
//			add_shortcode( 'aq2e-affiliate-home', array( $this->getVar('FD3')->affiliate_shortcode, 'aq2e_affiliate_home_render')  );
			
			$this->getVar('FD3')->load->library( 'FD3RegisterAssets' , null , 'regAssets', true );
			// $this->getVar('FD3')->load->library( 'FD3RegisterAssets' , null , 'regJSAssets', true );
			
			$this->getVar('FD3')->regAssets->registerCSS();

			// $this->getVar('FD3')->wp_actions->add( 'init' , [ $this->getVar('FD3')->regAssets , 'registerCSS' ] );
			// $this->getVar('FD3')->wp_actions->add( 'init' , [ $this->getVar('FD3')->regAssets , 'registerJS' ] );

			$this->getVar('FD3')->load->library( 'AQ2EAffiliateWidget' , null , 'aq2e_widget' );
			$this->getVar('FD3')->aq2e_widget->prepare();

			$this->getVar('FD3')->load->library( 'AQ2EAffiliateMenuWidget' , null , 'aq2e_menu_widget' );

			$this->getVar('FD3')->wp_shortcodes->add( 'aq2e-affiliate-home', [ $this->getVar('FD3')->aq2e_widget , 'render_home' ]);
			$this->getVar('FD3')->wp_shortcodes->add( 'aq2-affiliate-menu', [ $this->getVar('FD3')->aq2e_menu_widget , 'render' ]);
			
			add_shortcode( 'aq2e-affiliate-home', [ $this->getVar('FD3')->aq2e_widget, 'render_home' ] );
			add_shortcode( 'aq2e-affiliate-pricing', [ $this->getVar('FD3')->aq2e_widget, 'render_price' ] );

			$this->getVar('FD3')->wp_actions->register();
			$this->getVar('FD3')->wp_shortcodes->register();
			
		}

		function loadAffiliateWidgetCSS() {
			
			$this->getVar( 'FD3' )->load->library( 'FD3WPStyle', null, 'style' );

			$this->getVar( 'FD3' )->style->add( 'aq2e-affiliate-widget-bootstrap-css' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/bootstrap.css' );
			$this->getVar( 'FD3' )->style->add( 'aq2e-affiliate-custom' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/aq2e-affiliate-custom.css' );
			$this->getVar( 'FD3' )->style->add( 'aq2e-affiliate-fd3-aq2e-font-css' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/fd3-aq2e/style.css' );
			
			$this->getVar( 'FD3' )->style->register();
			
		}
		
		function loadAffiliateWidgetJS() {
			
			wp_enqueue_script( 'jquery' );
			
			wp_register_script( 'aq2e-affiliate-ajax-custom' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/aq2e-affiliate-custom.js' );
			
			wp_enqueue_script( 'fd3-colorpicker-handle' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/fd3-colorpicker.js' , [ 'wp-color-picker' ] , false , true );
			wp_enqueue_script( 'aq2e_affiliate_slideshow' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/aq2e-affiliate-slideshow.js' );
			
			wp_localize_script(
				'aq2e-affiliate-ajax-custom' , 'myAffiliateAjax' , [
				'url'                => admin_url( 'admin-ajax.php' ) ,
				'formid'             => 'register_form' ,
				'strictFlag'         => '"use strict;"' ,
				'eventType'          => 'click' ,
				'formButtonQuery'    => '.form-btn' ,
				'formContainerQuery' => '.form-container' ,
				'action'             => 'process_registration' ,
				'formQuery'          => '#register_form' ,
				'formType'           => 'post' ,
				'dataType'           => 'json' ,
				'useCache'           => 'false'
			]
			);
			
			wp_enqueue_script( 'aq2e-affiliate-ajax-custom' );
		}

		function register_scripts() {
			
			// echo "<br>FD3_DYNAMIC_PAGES_PLUGIN_URI: " . FD3_DYNAMIC_PAGES_PLUGIN_URI . "<br>";   exit;
			
			wp_enqueue_style( 'aq2e-affiliate-widget-bootstrap-css' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/bootstrap.css' );
			wp_enqueue_style( 'aq2e-affiliate-custom' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/aq2e-affiliate-custom.css' );
			
			wp_enqueue_style( 'aq2e-affiliate-fd3-aq2e-font-css' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/css/custom.css' );
			wp_enqueue_script( 'jquery' );
			
			wp_register_script( 'aq2e-affiliate-ajax-custom' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/aq2e-affiliate-custom.js' );
			
			wp_enqueue_script( 'fd3-colorpicker-handle' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/fd3-colorpicker.js' , [ 'wp-color-picker' ] , false , true );
			wp_enqueue_script( 'aq2e_affiliate_slideshow' ,FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/js/aq2e-affiliate-slideshow.js' );
			
			wp_localize_script(
				'aq2e-affiliate-ajax-custom' , 'myAjax' , [
				'url'                => admin_url( 'admin-ajax.php' ) ,
				'formid'             => $this->formId ,
				'strictFlag'         => '"use strict;"' ,
				'eventType'          => 'click' ,
				'formButtonQuery'    => '.form-btn' ,
				'formContainerQuery' => '.form-container' ,
				'action'             => 'process' ,
				'formQuery'          => '#optin_form' ,
				'formType'           => 'post' ,
				'dataType'           => 'json' ,
				'useCache'           => 'false'
			]
			);
			
			wp_enqueue_script( 'aq2e-affiliate-ajax-custom' );
		}
		
		function fd3_plugin_setup_dynamic_pages() {
			define( 'FD3_DYNAMIC_PAGES_PLUGIN_ACTIVE', true );
			define( 'FD3_DYNAMIC_PAGES_VERSION', FD3_DYNAMIC_PAGES_PLUGIN_VERSION );
			define( 'FD3_DYNAMIC_PAGES_DIR', FD3_DYNAMIC_PAGES_PLUGIN_DIR );
			define( 'FD3_DYNAMIC_PAGES_URI', FD3_DYNAMIC_PAGES_PLUGIN_URI );
			define( 'FD3_DYNAMIC_PAGES_CORE', FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'core' );
			
			$this->plugin_name = 'fd3_dynamic_pages';
			
		//	add_action( 'admin_menu' , [ $this , 'add_dynamic_pages_menu' ] );
		}
		
		function add_dynamic_pages_menu() {
			
			$this->getVar( 'FD3' )->load->library( 'DynamicPagesAdminSettingPage', null, 'admin_settings' );

			$this->getVar( 'FD3' )->admin_settings->addOptionPage( 'Dynamic Pages' , 'Dynamic Pages' , 'fd3_dynamic_pages' , 'fd3-dp-dashboard-icons' );
			$this->getVar( 'FD3' )->admin_settings->addOptionsGroup( 'fd3_dynamic_pages_group' );
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id' => 'fd3_dynamic_pages_affiliate_main_domain' , 'type' => 'text' , 'text' => 'Dynamic Pages Domain' , 'help' => '* Sub Domain that hosts all affiliate websites' , 'asterisk' => [ 'title' => 'AQ2E Affiliate Marketing Domain' , 'description' => 'This function is not currently supported.' ] ] );
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id' => 'fd3_dynamic_pages_page_select' , 'type' => 'select' , 'text' => 'Set Current Home Page' , 'callback' => [ $this->admin_menu , 'renderPageSelect' ] , 'help' => 'Select Default Home Page' ] );
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id'       => 'fd3_dynamic_pages_redirect_to' ,
			                               'type'     => 'text' ,
			                               'text'     => 'If Page Does Not Exists Redirect to here' ,
			                               'help'     => '* If a Page Is Not Found Redirect To Specified URL' ,
			                               'asterisk' => [ 'title' => 'If Page Does Not Exists Redirect to here' , 'description' => 'On our affiliate website if a page requested does not currently exists, because either it has been disabled or it just does not exists, we will forward the page requested to the specified page.' ]
			                             ]
			);
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id' => 'fd3_dynamic_pages_affiliate_background' , 'type' => 'color' , 'text' => 'Set Affiliate Background Color' ] );
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id' => 'fd3_dynamic_pages_affiliate_custom_class' , 'type' => 'text' , 'text' => 'Apply Custom Class' , 'help' => '* By providing a CSS Class Name You Can Modify Default Styles' , 'asterisk' => [ 'title' => 'Apply Custom Class' , 'description' => 'This function is not currently supported.' ] ] );
			$this->getVar( 'FD3' )->admin_settings->addField( [ 'id' => 'fd3_dynamic_pages_website_under_maintenance_select' , 'type' => 'select' , 'text' => 'Website Mode' , 'callback' => [ $this->admin_menu , 'renderMaintenanceSelect' ] , 'help' => 'Here You Can Enable or Disable Website Maintenance Mode' ] );
			
			$this->getVar( 'FD3' )->admin_settings->queueOptions();
			$this->getVar( 'FD3' )->admin_settings->run();
			
		}
		
		function dispatch( $wp ) {
			
			// $this->getVar('FD3')->load->library( 'FD3MicrositePage', null, 'microsite_page' );
			// $this->getVar('FD3')->microsite_page->is_page( $wp );
			
			if ( stristr( $wp->request , 'capture' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3CaptureRedirect', null, 'capture_redirect' );
				$this->getVar('FD3')->capture_redirect->is_redirect();

				aq2emm_exit( 'capture page redirected' );
				
			}
			else if ( stristr( $wp->request , 'pages' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3Page', null, 'page' );
				$this->getVar('FD3')->page->is_page();
				
				aq2emm_exit( 'page loaded' );
				
			}
			else if ( stristr( $wp->request , 'confirmation' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3ConfirmationPage', null, 'confirmation_page' );
				$this->getVar('FD3')->confirmation_page->is_page();
				
				aq2emm_exit( 'page loaded' );
				
			}
			else if ( stristr( $wp->request , 'forms' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3Forms', null, 'forms_page' );
				$this->getVar('FD3')->forms_page->is_page();
				
				aq2emm_exit( 'form loaded' );
				
			}
			else if ( stristr( $wp->request , 'link' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3Link', null, 'links' );
				$this->getVar('FD3')->links->is_link();

				aq2emm_exit( 'link loaded' );
				
			}
			else if ( stristr( $wp->request , 'campaigns' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3Campaign', null, 'campaign' );
				$this->getVar('FD3')->campaign->is_camapaign();
				
				aq2emm_exit( 'campaign loaded' );
				
			}
			
			else if ( stristr( $wp->request , 'dp' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3DynamicPage', null, 'dynamic_page' );
				$this->getVar('FD3')->dynamic_page->is_page();
				
				aq2emm_exit( 'dynamic_page loaded' );
				
			}
			else if ( stristr( $wp->request , 'events' ) ) {
				
				$this->getVar('FD3')->load->library( 'FD3Event', null, 'event' );
				$this->getVar('FD3')->event->is_event();
				
				aq2emm_exit( 'event loaded' );
				
			}
			
		}
		
		function template_redirect() {
			
			global $wp;
			
			\aq2emm_log( "template_redirect fired!" );
			
			$this->dispatch( $wp ); // if not then we must figure out what is the request
			
		}
		
		static function add_updates() {
			require_once( FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'core/updates/updates_init.php' );
		}
		
		function __destruct() {
			/*	    DebugTimer::end();
				$timeStamp = DebugTimer::getTime();
				echo "<!-- ". $timeStamp . "-->";*/
		}
		
	}
	// end of FD3_Dynamic_Pages_Plugin
}