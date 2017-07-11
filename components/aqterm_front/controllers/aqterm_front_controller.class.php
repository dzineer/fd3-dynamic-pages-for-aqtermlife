<?php
/**
 * Filename: aqterm_front_controller.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/25/2017 12:26 AM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class aqterm_front_controller extends FD3Controller {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function render() {
		$data = array();
		$data['name'] = $this->model->getName();
		$this->view->render( null, $data );
	}
	
	function __destruct() {
	}
	/*
	function aqterm_front_component_controller() {
	
	}
	*/
} // end of aqterm_front_component_controller