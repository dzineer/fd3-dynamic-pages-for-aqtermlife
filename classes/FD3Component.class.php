<?php
/**
 * Filename: FD3Controller.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/24/2017 9:44 PM
 */

namespace AQ2EMarketingPlatform;

//require_once('');

if( ! class_exists( __NAMESPACE__ . '\FD3Component') ) {
	
	class FD3Component extends FD3ClassType {
		
		/* variables */
		
		/* constants */
		
		function __construct( FD3Controller $controller ) {
			
			$this->_loaded[ 'controller' ] = $controller;
			
		}
		
		public function init( $dependency ) {
			if ( ! empty( $dependency[ 'FD3' ] ) ) {
				$this->_loaded[ 'FD3' ] = $dependency[ 'FD3' ];
			}
			if ( ! empty( $dependency[ 'model' ] ) ) {
				$this->_loaded[ 'model' ] = $dependency[ 'model' ];
			}
			if ( ! empty( $dependency[ 'view' ] ) ) {
				$this->_loaded[ 'view' ] = $dependency[ 'view' ];
			}
			if ( ! empty( $dependency[ 'controller' ] ) ) {
				$this->_loaded[ 'controller' ] = $dependency[ 'controller' ];
			}
		}
		
		/*
		function FD3Controller() {
		
		}
		*/
	} // end of FD3Controller
	
}