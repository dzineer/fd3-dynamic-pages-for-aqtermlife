<?php
/**
 * Filename: FD3RuleRegistrator.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 5:06 PM
 */

namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_LIBRARIES')) exit('No direct script access allowed');

//require_once('');

class FD3RuleRegistrator extends FD3Library {
	
	/* variables */
	private $dir;
	private $executableRules = array();
	
	/* constants */
	
	function __construct() {
	}
	
	function init( $dir ) {
		$this->dir = $dir;
	}
	
	function registerRule( $instruction , $overrideRule = false ) {
		if ( isset( $instruction[ 'rule' ] ) ) {
			$rule_name = $instruction[ 'rule' ];
			if ( in_array( $rule_name , $this->executableRules ) && ! $overrideRule ) {
				return false;
			}
			else {
				$this->executableRules[ $rule_name ] = $instruction;
				
				return true;
			}
		}
	}
	
	function executeRules() {
		
		foreach ( $this->executableRules as $rule ) {
			$className     = $rule[ 'library' ];
			$fullClassName = $this->dir . $className . '.class.' . 'php';
			$c             = new $fullClassName();
			$c->execCB( $rule );
		}
		
	}
	
	function executeRule( $rule_name ) {
		
		foreach ( $this->executableRules as $rule ) {
			if ( $rule[ 'rule' ] == $rule_name ) {
				$className     = $rule[ 'library' ];
				$fullClassName = $this->dir . $className . '.class.' . 'php';
				
				if ( file_exists( $fullClassName ) ) {

					$namespaceClass = __NAMESPACE__ . '\\' . $className;
					
					include_once $fullClassName;

					if( class_exists( $namespaceClass ) ) {
						$c = new $namespaceClass();
						$c->execCB( $rule );
					}
				}
			}
		}
		
	}
	
	function __destruct() {
	}
	/*
	function FD3RuleRegistrator() {
	
	}
	*/
} // end of FD3RuleRegistrator