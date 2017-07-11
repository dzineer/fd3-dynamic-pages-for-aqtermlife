<?php
/**
 * Filename: FD3URLPage.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: AQ2EMarketingPlatform
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 6/26/2017 10:21 PM
 */

namespace AQ2EMarketingPlatform;

class FD3URLPage extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function getHost() {
		$hostname = $_SERVER[ 'HTTP_HOST' ];
		$host     = explode( '.' , $hostname );
		return $host;
	}
	
	function set404Status( $is_404 , $is_active ) {
		global $wp_query;
		
		if ( $wp_query->is_404 ) {
			$wp_query->is_404    = $is_404;
			$wp_query->is_active = $is_active;
		}
		
	}
	
	function getPathAsArray( $path , $flags ) {
		$newPath = $path;
		if ( isset( $flags[ 'REMOVE_FIRST_SLASH' ] ) ) {
			if ( $flags[ 'REMOVE_FIRST_SLASH' ] == true ) {
				$newPath = ltrim( $path , "/" );
			}
		}
		
		if ( stristr( $newPath , "/" ) ) {
			$pathArr = explode( "/" , $newPath );
			
			return $pathArr;
		}
		else {
			return $newPath;
		}
	}
	
	function __destruct() {
	}
	/*
	function FD3URLPage() {
	
	}
	*/
} // end of FD3URLPage