<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAffiliateWidget.class.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/21/2016 8:58 PM
 */
//require_once('');

class AQ2EAffiliateMenuWidget extends FD3Library {
	
	/* variables */
	/* constants */
	
	function __construct() {
	}
	
	function __destruct() {
		
	}

	function render() {
        ob_start();
        
            ?>
             <div class="super-container">
	             <div class="menu-container">
	            	<span><i class="login-hamburger fa fa-user" aria-hidden="true"></i> Login</span>
	            	<ul class="login-menu">
	            		<li class="login-menu-item"><a href="https://<?= $this->getVar( 'FD3' )->session->getSession('/affiliate_site/site/subdomain'); ?>.aq2e.com/adlogin" target="_blank"><!-- <i class="login-hamburger fa fa-superpowers" aria-hidden="true"></i> -->Admin</a></li>
	            		<li class="login-menu-item"><a href="https://<?= $this->getVar( 'FD3' )->session->getSession('/affiliate_site/site/subdomain'); ?>.aq2e.com/login" target="_blank"><!-- <i class="login-hamburger fa fa-user" aria-hidden="true"></i> -->Agent</a></li>
	            	</ul>
	              </div>
              </div>

			<style>

            .login-hamburger {
        	    margin-right: 9px;
            }

            .super-container {
			    right: 0;
			    padding: 0;
			    box-sizing: border-box;
			    cursor: pointer;
            }

        	.menu-container {
        		position: absolute;
                /*background: #e46622;*/
                background: transparent;
                color: #fff;
                padding: 10px 21px;
                top: 0px;
                box-sizing: border-box;
                /*border-radius: 5px 5px 5px 5px;*/
                border-radius: 0;
                right: 31px;
                cursor: pointer;
        	}   

        	.menu-container span {
				padding: 0px;
				box-sizing: border-box;
				cursor: pointer;
        	}

        	.menu-container ul.login-menu {
		        position: absolute;
                display: none;
                background: #2ea3f2;
                top: 30px;
                left: 1px;
                width: 96px;
                padding: 0;
                box-sizing: border-box;
        	} 	

        	.menu-container ul.login-menu li {
        		padding: 0;
        		margin: 0;
        		list-style-type: none;
        		text-align: center;
        		box-sizing: border-box;
        		padding-left: 7px;
        		cursor: pointer;
          	} 

			.menu-container ul.login-menu li:nth-child(1) {
			    border-bottom: 1px solid rgba(234, 233, 233, 0.22);
			}

            .menu-container ul.login-menu li a {
                display: block;
                text-decoration: none;
                text-align: left;
                padding: 14px 10px 14px 21px;
                color: #ffffff !important;
            }       

			.menu-container ul.login-menu li:last-child {
        		border-radius: 0 0 5px 5px;
        	}

        	.menu-container:hover {
			    /*border-radius: 5px 5px 0 0;*/
        	} 	

        	.menu-container ul.login-menu li:hover {
			    background: #0e4a7b !important;
			    color: #ffffff !important;
        	} 	

			.menu-container ul.login-menu li:hover:before {
				border-left:1px solid orange;
				width:0px;
			}

        	.menu-container ul.login-menu li:hover a {
			    color: #ffffff !important;
        	} 	

        	.menu-container:hover ul.login-menu {
        		display: inline-block;
        	}                             	
        </style>
            <?
        $content = ob_get_clean();
        echo $content;
    }
	
	/*
	function AQ2EAffiliateMenuWidget() {
	
	}
	*/
} // end of AQ2EAffiliateMenuWidget