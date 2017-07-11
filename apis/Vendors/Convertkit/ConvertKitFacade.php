<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');
/*
 * BannerFacade.php - Main Application
 *
 */

namespace AQ2EMarketingPlatform;

class ConvertKitFacade
{
	var $debug = false;
	private $CI;
	private $aqprodDBConfig;
	private $aqtqeDBConfig;

	function __construct($Domain = '127.0.0.1') {
		$this->CI =& get_instance();

        $this->loadLibraries();
        $this->loadModels();
		$this->debug = false;
	}

    function loadLibraries() {
		$this->CI->load->library('ConvertKitFacade', null, 'convertKit');
    }

    function loadModels() {
        return;

        // $this->CI->load->model('AdModel', 'aModel');

		$this->aqprodDBConfig = new AqprodDBConfig();
		$this->aqtqeDBConfig = new AQTQE2011DBConfig();

        $this->CI->aModel->initDB($this->aqprodDBConfig);
    }


}
?>