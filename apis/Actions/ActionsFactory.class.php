<?php
/**
 * Filename: ActionsFactory.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 1/13/2017 9:25 PM
 */
//require_once('');

namespace AQ2EMarketingPlatform;

class ActionsFactory {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function __destruct() {
	}
	
	static function Action( $action ) {
		switch( $action['action'] ) {
			case 'monitor-link':
				(new LinkAction())->init( $action )->monitor();
				return (new CampaignAction())->init( $action )->start();
			case 'start-campaign':
				return (new CampaignAction())->init( $action )->start();
			case 'end-campaign':
				return (new CampaignAction())->init( $action )->stop();
			case 'set-tag':
				return (new TagAction())->init( $action )->setAction();
			case 'unset-tag':
				return (new TagAction())->init( $action )->unsetAction();
				
			default: // for backwards compatibility we will support the original default action
				// monitor-link
				(new LinkAction())->init( $action )->monitor();
				return (new CampaignAction())->init( $action )->start();
		}
	}
	/*
	function ActionsFactory() {
	
	}
	*/
} // end of ActionsFactory