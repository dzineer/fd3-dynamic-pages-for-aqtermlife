<?php
/**
 * Filename: aqterm_front_model.php
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

class form_model extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getName() {
		$this->FD3->load->local_model( $this->getVar( 'LOCAL_PATH' ), 'my');
		$name = $this->FD3->my->getName();
		return $name;
	}
	
	
	
	function __destruct() {
	}
	/*
	function aqterm_front_component_model() {
	
	}
	*/
} // end of aqterm_front_component_model