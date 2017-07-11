<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: FD3Proxy.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/20/2016 5:32 PM
 */

class FD3Proxy {
	private $values;
	private $classInst;
	
	public function __construct( $instance, $values  ) {
		$this->values    = $values;
		$this->classInst = $instance;
	}
	
	public function __call( $callback , $arguments ) {
		if ( ! empty( $this->classInst ) && class_exists( get_class( $this->classInst ) ) ) {
			$function = [ $this->classInst , $callback ];
		} else {
			$function = $callback;
		}
		
		if ( is_callable( $function , true ) ) //$this->values holds an array of intended arguments
		{
			return call_user_func( $function , $this->values );
		}
		
	}
}