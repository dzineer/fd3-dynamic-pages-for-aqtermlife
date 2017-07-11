<?php
/**
 * Filename: FD3View.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/24/2017 9:55 PM
 */

namespace AQ2EMarketingPlatform;


//require_once('');

class FD3View extends FD3ClassType {
	
	/* variables */
	protected $_loaded;
	protected $_dir;
	
	/* constants */
	
	function __construct() {}
	
	function view( $name, $args = [], $returnOnly = false ) {
		
		return $this->render( $name, $args, $returnOnly );
	}
	
	function render( $name, $args = [], $returnOnly = false ) {
		
		$data = null;
		
		if( empty( $name ) ) {
			$name = $this->getVar('_name' );
		}
		
		if( ! empty( $this->getVar('LOCAL_PATH') ) ) {
			$name = $this->getVar('LOCAL_PATH') . $name;
		}
		
		if( ! empty( $args ) ) {
			$data_obj = (object) $args;
			$data_arr = $args;
		}
		
		if( ! empty( $name ) ) {
			$namePath = $name . '_view.php';
			if( file_exists( $namePath ) ) {
				if( $returnOnly ) {
					
					ob_start();
					require $namePath;
					$content = ob_get_clean();
					ob_end_flush();
					
					return $content;
					
				}
				else {
					require $namePath;
				}
			}
		}
	}
	
	function __destruct() {
	}
	/*
	function FD3View() {
	
	}
	*/
} // end of FD3View