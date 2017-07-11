<?php
/**
 * Filename: loader.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/22/2017 6:08 PM
 */
namespace AQ2EMarketingPlatform;

if( ! defined( 'FD3_LOADER_LOADED' ) ) {
	
	$FD3_PLUGIN_NAME = 'FD3_DYNAMIC_PAGES_PLUGIN';
	
	define( $FD3_PLUGIN_NAME . '_LIBRARIES' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'libraries' );
	define( $FD3_PLUGIN_NAME . '_CLASSES' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'classes' );
	define( $FD3_PLUGIN_NAME . '_CORE' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'core' );
	define( $FD3_PLUGIN_NAME . '_AQTERM' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'aqterm' );
	define( $FD3_PLUGIN_NAME . '_CONTROLLERS' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'controllers' );
	define( $FD3_PLUGIN_NAME . '_MODELS' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'models' );
	define( $FD3_PLUGIN_NAME . '_VIEWS' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'views' );
	
	define( $FD3_PLUGIN_NAME . '_COMPONENTS' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'components' );

// point to vendor's APIs
	define( $FD3_PLUGIN_NAME . '_APIS_ROOT' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'apis' );
	define( $FD3_PLUGIN_NAME . '_APIS' , FD3_DYNAMIC_PAGES_PLUGIN_APIS_ROOT . 'Vendors' );

// point to rules
	define( $FD3_PLUGIN_NAME . '_RULES' , FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'rules' );
	define( $FD3_PLUGIN_NAME . '_URI' , '/wp-content/plugins/fd3-dynamic-pages/' );
	define( $FD3_PLUGIN_NAME . '_VERSION' , '1.0.0' );
	
	include_once( FD3_DYNAMIC_PAGES_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'fd3-functions.php' );
	include_once( FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Loader.class.php' );
	include_once( FD3_DYNAMIC_PAGES_PLUGIN_LIBRARIES . DIRECTORY_SEPARATOR . 'WordPress_Extendable_Form.class.php' );
	
	/*$fd3_auto_loader = new FD3AutoLoader();
	
	// echo FD3_DYNAMIC_PAGES_PLUGIN_CLASSES;
	
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_LIBRARY );
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_CLASSES );
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_CORE );
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_AQTERM );
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_APIS );
	$fd3_auto_loader->addPath(FD3_DYNAMIC_PAGES_PLUGIN_RULES );*/
	
	$fd3_loader = new FD3Loader();
	
	$aq2e_agent = array();
	$aq2e_agent[ 'agent' ]['protocol'] = 'https://';
	$aq2e_agent[ 'agent' ]['gateway'] = 'aqterm.com';
	$aq2e_agent[ 'agent' ]['uri'] = '/aqterm-engine/index.php/aqmprocess';
	$aq2e_agent[ 'agent' ]['uri_link'] = $aq2e_agent[ 'agent' ]['protocol'] . $aq2e_agent[ 'agent' ]['gateway'] . $aq2e_agent[ 'agent' ]['uri'];
	$aq2e_agent[ 'agent' ]['master']['domain'] = unserialize( get_option( 'aq2edp_affiliate_main_domain' ) );
	
	$fd3_loader->load->controller('Test', 'test_controller' );
	
	// $fd3_loader->test_controller->index();
	
	$fd3_loader->load->library( 'AQ2ESession', null, 'session', true );
	
	$fd3_loader->load->library( 'AQ2EMarketingPlatformConfig', null, 'mp_config', true );
	$fd3_loader->mp_config->registerGlobals( 'services' , $aq2e_agent );
	
	$FD3 = $fd3_loader->get_instance();
	
	add_action(
		'init' , function () {
		// new FD3DynamicPagesPlugin();
		global $fd3_loader;
		$fd3_loader->load->library( 'FD3DynamicPagesPlugin', $fd3_loader );
		
	});
	
/*	add_action(
		'plugins_loaded' , function () {
		// FD3DynamicPagesPlugin::add_updates();
		global $fd3_loader;
		$fd3_loader->load->library( 'FD3DynamicPagesPlugin', $fd3_loader );
		$fd3_loader->FD3DynamicPagesPlugin->add_updates();
	});*/
	
	define( 'FD3_LOADER_LOADED', true );
	
}