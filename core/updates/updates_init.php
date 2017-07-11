<?php

if( !function_exists( 'fd3_core_enable_automatic_updates' ) ) :
function fd3_core_enable_automatic_updates( $url, $version ) {
 
    if( ! is_admin() ) {
        return;
    }

    if( class_alias( 'FD3_Core_Updates' ) ) {
        return;
    }

    $url = trailingslashit( $url ) . 'core/';
    $core_dir = trailingslashit( dirname( __FILE__ ) );

    $fd3_core_updates = new FD3_Core_Updates( $url, $version );

    $GLOBALS['fd3_core_updates'] = $fd3_core_updates;
}
endif;