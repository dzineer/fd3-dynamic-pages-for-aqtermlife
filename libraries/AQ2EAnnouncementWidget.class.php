<?php
namespace AQ2EMarketingPlatform;

if ( ! defined('FD3_DYNAMIC_PAGES_PLUGIN_AQTERM')) exit('No direct script access allowed');

/**
 * Filename: AQ2EAnnouncementWidget.class.php
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

class AQ2EAnnouncementWidget extends FD3Library {
	
	/* variables */
	private $bgImage;
	private $styling = '';
	private $script = '';
	/* constants */
	
	function __construct() {}

	function setScript( $script ) {
		$this->script = $script;
	}

	function setBackground( $bgImage ) {
		$this->bgImage = $bgImage;
	}

	function setStyling( $styling ) {
		$this->styling = $styling;
	}
	
	function render( $content ) {
		ob_start();
	?>
		<div id="fd3-ads-container" class="slideDown">
				<div id="fd3-ads-close-btn">X</div>
			<div class="fd3-ads">
				<img class="fd3-image-ads" src="<?= $this->bgImage ?>">
			</div>		  	
		</div>

		<style>

			#fd3-ads-container {
			    margin: 0;
			    padding: 0;
			    position: fixed;
			    right: 119px;
			    top: 120px;
			    border: 1px solid #ccc;
			    border-left: none;
			    border-right: none;	
			    border-bottom: 5px solid #3388cd;	
			    z-index: 9999999999999;	
			    background-color: #ffffff;
			    height:auto;	    
			    cursor: pointer;
				-webkit-box-shadow: 0px 0px 12px 0px rgba(50, 50, 50, 0.49);
				-moz-box-shadow:    0px 0px 12px 0px rgba(50, 50, 50, 0.49);
				box-shadow:         0px 0px 12px 0px rgba(50, 50, 50, 0.49);			    
			}

			.fd3-ads {
		    margin: 0;
		    padding: 0;
			}

			.fd3-image-ads {
				margin:0 !important;
				padding:0 !important;		
				max-width: 100%;	    
			}

			<?= $this->styling ?>

		</style>
		<script type="text/javascript">

			jQuery(".fd3-ads").on('click', function() {
				window.location.href = '/our-platform/#marketing-platform-video';
				return false;
			});

		</script>

		<script type="text/javascript">
			<?= $this->script ?>
		</script>
  <?
		$content = ob_get_clean();
		ob_end_flush();
		return $content;  
	}
	

	/*
	function AQ2EAnnouncementWidget() {
	
	}
	*/
} // end of AQ2EAnnouncementWidget