<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 12/27/2016
 * Time: 2:10 PM
 */

$aq2e_affiliate = array();

$aq2e_affiliate[ 'affiliate' ]['protocol'] = 'https://';
$aq2e_affiliate[ 'affiliate' ]['gateway'] = 'aqterm.com';

$aq2e_affiliate[ 'affiliate' ]['main_engine_gateway'] = 'banner.aq2e.com';

$aq2e_affiliate[ 'affiliate' ]['uri'] = '/aqterm-engine/index.php/aqmprocess';
$aq2e_affiliate[ 'affiliate' ]['aqm_uri'] = '/aqterm-engine/index.php/aqmprocess';
$aq2e_affiliate[ 'affiliate' ]['validate_uri'] = '/login/authremote';
$aq2e_affiliate[ 'affiliate' ]['validate_promo_uri'] = '/promocode/authremote';

$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'protocol' ] = 'https://';
$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'gateway' ] = 'www.marketingmailbox.net';
$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'uri' ] = '/bankbroker/agentrep/cmp_handlerRegister.jsp';
$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'login_uri' ] = '/bankbroker/agentrep/cmp_Login_test.jsp';

// https://www.marketingmailbox.net/bankbroker/agentrep/cmp_Register_zoho.jsp?own=670.46518482

$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ]['uri_link'] = $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'protocol' ]
                                                                  . $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'gateway' ]
                                                                  . $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'uri' ];

$aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ]['uri_login_link'] = $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'protocol' ]
                                                                    . $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'gateway' ]
                                                                    . $aq2e_affiliate[ 'affiliate' ][ 'marketing_mailbox' ][ 'login_uri' ];

$aq2e_affiliate[ 'affiliate' ]['uri_link'] = $aq2e_affiliate[ 'affiliate' ]['protocol'] . $aq2e_affiliate[ 'affiliate' ]['gateway'] . $aq2e_affiliate[ 'affiliate' ]['uri'];
$aq2e_affiliate[ 'affiliate' ]['aqm_uri_link'] = $aq2e_affiliate[ 'affiliate' ]['protocol'] . $aq2e_affiliate[ 'affiliate' ]['gateway'] . $aq2e_affiliate[ 'affiliate' ]['aqm_uri'];
$aq2e_affiliate[ 'affiliate' ]['uri_validate_link'] = $aq2e_affiliate[ 'affiliate' ]['protocol'] . $aq2e_affiliate[ 'affiliate' ]['main_engine_gateway'] . $aq2e_affiliate[ 'affiliate' ]['validate_uri'];
$aq2e_affiliate[ 'affiliate' ]['uri_validate_promo_link'] = $aq2e_affiliate[ 'affiliate' ]['protocol'] . $aq2e_affiliate[ 'affiliate' ]['main_engine_gateway'] . $aq2e_affiliate[ 'affiliate' ]['validate_promo_uri'];

$aq2e_affiliate[ 'affiliate' ]['marketing_mailbox'][ 'login_link' ] = $aq2e_affiliate[ 'affiliate' ]['protocol'] . $aq2e_affiliate[ 'affiliate' ]['gateway'] . $aq2e_affiliate[ 'affiliate' ]['uri'];

/*$aq2e_affiliate[ 'affiliate' ]['master']['domain'] = unserialize( get_option( 'fd3-ap-aqterm_affiliate_main_domain' ) );*/

class AQ2EPlatformConfig {

    static $dictionary = array();
    

    static function registerGlobals( $registry, $val ) {
        static::$dictionary[ $registry ] = $val;
    }
    
    static function getGlobalSession( $key ) {
	
	    ///services/affiliate/gateway
	
	    $cursor = false;
	
	    $keys = explode( '/', $key );
	    array_shift( $keys );
	
	    if( isset( static::$dictionary[ $keys[0] ] ) ) { // does our main registry exist?
		
		    $cursor = static::$dictionary[ $keys[0] ];
		
		    array_shift( $keys );
		
		    foreach( $keys as $key ) {
			    if( isset( $cursor[ $key ] ) ) {
				    $cursor = $cursor[ $key ];
			    } else {
				    return false;
			    }
		    }
		
	    } else {
		    return false;
	    }
	
	    return $cursor;
	    
    }

    static function getGlobal( $key ) {
        ///services/affiliate/gateway

        $cursor = false;

        $keys = explode( '/', $key );
        array_shift( $keys );

        if( isset( static::$dictionary[ $keys[0] ] ) ) { // does our main registry exist?

            $cursor = static::$dictionary[ $keys[0] ];

            array_shift( $keys );

            foreach( $keys as $key ) {
                if( isset( $cursor[ $key ] ) ) {
                    $cursor = $cursor[ $key ];
                } else {
                    return false;
                }
            }

        } else {
            return false;
        }

        return $cursor;

    }

}

if( function_exists('session_status') ) {
	
	if( session_status() == PHP_SESSION_NONE ) {
		session_start();
	}
	
} else if( session_id() == '' ) {
	session_start();
}

AQ2EPlatformConfig::registerGlobals( 'services', $aq2e_affiliate );
