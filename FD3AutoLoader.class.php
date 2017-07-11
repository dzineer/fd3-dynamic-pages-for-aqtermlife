<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */
class FD3AutoLoader {
	
	private $_paths = array();
	private $_all_load_requests;
	private $_all_classes_loaded;
	private $_debug = true;
	private $_show_loaded_log = true;
	
	public function __construct() {
		
		spl_autoload_register( array( $this, 'classes' ) );
		spl_autoload_register( array( $this, 'aqterm' ) );
		spl_autoload_register( array( $this, 'core' ) );
		spl_autoload_register( array( $this, 'rules' ) );
		spl_autoload_register( array( $this, 'apis' ) );
		
	}
	
	public function setDebug( $debug = false ) {
		$this->_debug = $debug;
	}
	
	public function addPath( $path ) {
		$this->_paths[] = $path;
	}
	
	public function getLoadQuests() {
		return $this->_all_load_requests;
	}
	
	private function debugLog( $s ) {
		if( $this->_debug ) {
			echo $s;
		}
	}
	
	private function loadedLog( $s ) {
		if( $this->_show_loaded_log ) {
			echo $s;
		}
	}
	
	private function classes( $class ) {
		$loadClassFile = "\\classes\\" . $class;
		echo( 'classes: ' . "\\classes\\" . $class );
		
		if( file_exists( $loadClassFile ) ) {
		
		}
		
		spl_autoload_register( "\\classes\\" . $class );
	}
	
	private function core( $class ) {
		$loadClassFile = "\\classes\\" . $class;
		echo( 'core: ' . "\\core\\" . $class );
		spl_autoload_register( "\\core\\" . $class );
	}
	
	private function aqterm( $class ) {
		$loadClassFile = "\\classes\\" . $class;
		echo( 'core: ' . "\\aqterm\\" . $class );
		spl_autoload_register( "\\aqterm\\" . $class );
	}
	
	private function rules( $class ) {
		$loadClassFile = "\\classes\\" . $class;
		echo( 'rules: ' . "\\rules\\" . $class );
		spl_autoload_register( "\\rules\\" . $class );
	}
	
	private function apis( $class ) {
		echo( 'apis: ' . "\\apis\\" . $class );
		spl_autoload_register( "\\apis\\" . $class );
	}
	
}

