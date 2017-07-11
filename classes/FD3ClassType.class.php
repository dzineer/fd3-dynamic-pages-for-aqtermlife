<?php
/**
 * Filename: FD3ClassType.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 5:27 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3ClassType {
	
	/* variables */
	protected $_loaded;
	protected $_dir;
	
	/* constants */
	
	function __construct() {
	
	}
	
	function init( $dependencies ) {
		foreach( $dependencies as $key => $dependency ) {
			$this->_loaded[ $key ] = $dependency;
		}
	}
	
	function get_cwd() {
		return dirname(__FILE__ );
	}
	
	public function getVar( $name ) {
		
		if ( array_key_exists( $name , $this->_loaded ) ) {
			return $this->_loaded[ $name ];
		}
		
		return null;
		
	}
	
	public function __get( $name ) {
		
		if ( array_key_exists( $name , $this->_loaded ) ) {
			return $this->_loaded[ $name ];
		}
		
		return null;
		
	}
	
	function __destruct() {
	}
	/*
	function FD3ClassType() {
	
	}
	*/
} // end of FD3ClassType