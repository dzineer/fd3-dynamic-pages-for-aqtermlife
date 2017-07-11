<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */

$libraries = array(
	
	
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3ClassLoader.class.php',
	
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Library.class.php',
	
	// API
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3API.class.php',
	
	// MVC
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Model.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Controller.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3View.class.php',
	
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3URLPage.class.php',
	
	// Component
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Component.class.php',
	
	// Class Type Loaders
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3APILoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3ModelLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3ViewLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3ControllerLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3ComponentLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3LibraryLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3CoreLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3AQTermLoader.class.php',
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3LoaderUtils.class.php',
	
	// Rules
	FD3_DYNAMIC_PAGES_PLUGIN_CLASSES . DIRECTORY_SEPARATOR . 'FD3Rule.class.php'

);

foreach( $libraries as $lib ) {
	if( file_exists( $lib ) ) {
		include( $lib );
	}
}


class FD3Loader {
	
	private $_loaded = array();
	public $load;
	
	public function __construct() {
		
		$this->load = new FD3LoaderUtils();
		$this->load->init( $this );
		
	}
	
	public function get_instance() {
		return $this;
	}
	
	public function __get( $name ) {
		
		if( array_key_exists( $name, $this->_loaded ) ) {
			return $this->_loaded[ $name ];
		}
		else {
			
			return $this->load->getProperty( $name );
		}

	}
	
}

