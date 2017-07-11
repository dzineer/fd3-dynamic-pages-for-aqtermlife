<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: wordpress_extendable_form.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/12/2016 6:37 PM
 */
//require_once('');

abstract class FD3FormField {

/*    function render() {

    }
*/
/*    function validate() {

    }*/

/*    function sanitize() {

    }*/

    function attributes( $a ) {
        $s = '';
        $ignore = array('type', 'label', 'repeat', 'required', 'in_series', 'series', 'sanitize', 'instance', 'series_title', 'pattern', 'in_state', 'state_title', 'show_label', 'read_only', 'refer_from', 'error_msg');

        $a_keys = array_keys($a);
        $keys = array_diff( $a_keys, $ignore );

        foreach($keys as $key) {
            $val = $a[ $key ];
            $s .= $key . '=' . '"' . $val . '" ';
        }

        return $s;
    }
}