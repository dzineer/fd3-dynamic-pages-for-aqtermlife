<?php

namespace FD3DynamicPages;

/*
 * Plugin name: FD3 Dynamic Pages
 * Plugin URI: agentquote.com/wp/plugins/fd3-dynamic-pages
 * Description: FD3 Dynamic Pages
 * Author: Frank Decker
 * Author URI: agentquote.com
 * Version: 1.0.0
 * License: Private
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

define( 'FD3_DYNAMIC_PAGES_PLUGIN_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

include_once( FD3_DYNAMIC_PAGES_PLUGIN_DIR . '\\config\\fd3_bootstrap.php' );

if( false ) :

	aq2emm_debug_flag( 0 );
	aq2emm_new_log( "D:\\aq2e\\domains\\aq2emarketing.com\\htdocs\\wp-content\\plugins\\fd3-dynamic-pages\\logs\\fd3_dynamic_page.log" );
	aq2emm_log( "fd3-dynamic-page starting..." );
	aq2emm_start_timer();

endif;