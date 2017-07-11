<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */

class FD3LoaderUtils {
	
	private $_loaded = array();
	
	private $_library;
	private $_core;
	private $_aqterm;
	
	private $_model;
	private $_view;
	private $_controller;
	private $_component;
	private $_api;
	
	private $FD3;
	
	public function __construct() {
		
		$this->_library = new FD3LibraryLoader( FD3_DYNAMIC_PAGES_PLUGIN_LIBRARIES, '_library' );
		$this->_core = new FD3CoreLoader( FD3_DYNAMIC_PAGES_PLUGIN_CORE, '_core' );
		$this->_aqterm = new FD3AQTermLoader( FD3_DYNAMIC_PAGES_PLUGIN_AQTERM, '_aqterm' );
		
		$this->_api = new FD3APILoader( FD3_DYNAMIC_PAGES_PLUGIN_VENDOR_APIS, '_api' );
		
		$this->_model = new FD3ModelLoader( FD3_DYNAMIC_PAGES_PLUGIN_CONTROLLERS, '_model' );
		$this->_view= new FD3ViewLoader( FD3_DYNAMIC_PAGES_PLUGIN_VIEWS, '_view' );
		$this->_controller = new FD3ControllerLoader( FD3_DYNAMIC_PAGES_PLUGIN_CONTROLLERS, '_controller' );
		
		$this->_component = new FD3ComponentLoader( FD3_DYNAMIC_PAGES_PLUGIN_COMPONENTS, '_component' );
		
		
		$this->_viewController = new FD3View();
		
	}
	
	public function init( $FD3 ) {
		$this->FD3 = $FD3;
		$this->_viewController->init( $this->FD3 );
		$this->_component->init( $this->FD3 );
	}
	
	public function getProperty( $name ) {
		
		if( array_key_exists( $name, $this->_loaded ) ) {
			return $this->_loaded[ $name ];
		}
		
		return null;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function component( $className, $config = null, $instName='', $singleInstance = false ) {
		
		$inst = null;
		
		if( empty($instName) ) {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if( ! empty($inst) ) {
						return $inst;
					}
					else {
						$inst = $this->_component->load( $className , $config );
					}
				}
				else {
					$inst = $this->_component->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_component->load( $className );
					}
				}
				else {
					$inst = $this->_component->load( $className );
				}
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_component->load( $className , $config );
					}
				}
				else {
					$inst = $this->_component->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_component->load( $className );
					}
				}
				else {
					$inst = $this->_component->load( $className );
				}
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function controller( $controllerName, $instName='', $singleInstance = false ) {
		
		$inst = null;
		
		if( empty($instName) ) {
			
			if( $singleInstance ) { // check if we already have an instance if so just return it.
				$inst = $this->getProperty( $controllerName );
				if( ! empty($inst) ) {
					return $inst;
				}
				else {
					$inst = $this->_controller->load( $controllerName , [ "FD3" => $this->FD3, "view" => $this->_viewController ] );
				}
			}
			else {
				$inst = $this->_controller->load( $controllerName , [ "FD3" => $this->FD3, "view" => $this->_viewController ] );
			}
			
			
			$this->_loaded[ $controllerName ] = $inst;
			
		}
		else {
			
			if( $singleInstance ) { // check if we already have an instance if so just return it.
				$inst = $this->getProperty( $instName );
				if ( ! empty( $inst ) ) {
					return $inst;
				}
				else {
					$inst = $this->_controller->load( $controllerName , [ "FD3" => $this->FD3, "view" => $this->_viewController ] );
				}
			}
			else {
				$inst = $this->_controller->load( $controllerName , [ "FD3" => $this->FD3, "view" => $this->_viewController ] );
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function model( $className, $config = null, $instName='', $singleInstance = false ) {
		
		$inst = null;
		
		if( empty($instName) ) {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if( ! empty($inst) ) {
						return $inst;
					}
					else {
						$inst = $this->_model->load( $className , $config );
					}
				}
				else {
					$inst = $this->_model->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_model->load( $className );
					}
				}
				else {
					$inst = $this->_model->load( $className );
				}
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_model->load( $className , $config );
					}
				}
				else {
					$inst = $this->_model->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_model->load( $className );
					}
				}
				else {
					$inst = $this->_model->load( $className );
				}
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function local_model( $dir, $className, $config = null, $instName='', $singleInstance = false ) {
		
		if( empty( $dir ) ) { // a directory must be specified if this method is to be used
			return null;
		}
		
		$inst = null;
		
		$model = new FD3ModelLoader( $dir, '_model' );
		
		if( empty($instName) ) {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if( ! empty($inst) ) {
						return $inst;
					}
					else {
						$inst = $model->load( $className , $config );
					}
				}
				else {
					$inst = $model->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $model->load( $className );
					}
				}
				else {
					$inst = $model->load( $className );
				}
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $model->load( $className , $config );
					}
				}
				else {
					$inst = $model->load( $className , $config );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $model->load( $className );
					}
				}
				else {
					$inst = $model->load( $className );
				}
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function library( $className, $config = null, $instName='', $singleInstance = false ) {
		
		// TODO: note by default we are supporting the config variable but for now we are overriding it to provide our FD3 variable in each loaded library
		
		$inst = null;
		
		if( empty($instName) ) {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if( ! empty($inst) ) {
						return $inst;
					}
					else {
						$inst = $this->_library->load( $className , [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_library->load( $className , [ "FD3" => $this->FD3 ] );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_library->load( $className, [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_library->load( $className, [ "FD3" => $this->FD3 ] );
				}
			}

			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_library->load( $className , [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_library->load( $className , [ "FD3" => $this->FD3 ] );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_library->load( $className, [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_library->load( $className, [ "FD3" => $this->FD3 ] );
				}
			}
			
			$this->_loaded[ $instName ] = $inst;

		}
		
		return $inst;
		
	}
	
	// support single instances and multiple instances using singleInstance flag
	public function api( $apiPath='', $className, $config = null, $instName='', $singleInstance = false ) {
		
		// TODO: note by default we are supporting the config variable but for now we are overriding it to provide our FD3 variable in each loaded library
		
		$inst = null;
		
		if( ! empty( $apiPath ) ) {
			$this->_api->setSubDir( $apiPath );
		}
		
		if( empty($instName) ) {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if( ! empty($inst) ) {
						return $inst;
					}
					else {
						$inst = $this->_api->load( $className , [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_api->load( $className , [ "FD3" => $this->FD3 ] );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $className );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_api->load( $className, [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_api->load( $className, [ "FD3" => $this->FD3 ] );
				}
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_api->load( $className , [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_api->load( $className , [ "FD3" => $this->FD3 ] );
				}
			}
			else {
				if( $singleInstance ) { // check if we already have an instance if so just return it.
					$inst = $this->getProperty( $instName );
					if ( ! empty( $inst ) ) {
						return $inst;
					}
					else {
						$inst = $this->_api->load( $className, [ "FD3" => $this->FD3 ] );
					}
				}
				else {
					$inst = $this->_api->load( $className, [ "FD3" => $this->FD3 ] );
				}
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	public function core( $className, $config = null, $instName='' ) {
		
		$inst = null;
		
		if( $config ) {
		
		}
		
		if( empty($instName) ) {
			
			if( $config ) {
				$inst = $this->_core->load( $className, $config );
			}
			else {
				$inst = $this->_core->load( $className );
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				$inst = $this->_core->load( $className, $config );
			}
			else {
				$inst = $this->_core->load( $className );
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	public function aqterm( $className, $config = null, $instName='' ) {
		
		$inst = null;
		
		if( $config ) {
		
		}
		
		if( empty($instName) ) {
			
			if( $config ) {
				$inst = $this->_aqterm->load( $className, $config );
			}
			else {
				$inst = $this->_aqterm->load( $className );
			}
			
			$this->_loaded[ $className ] = $inst;
			
		}
		else {
			
			if( $config ) {
				$inst = $this->_aqterm->load( $className, $config );
			}
			else {
				$inst = $this->_aqterm->load( $className );
			}
			
			$this->_loaded[ $instName ] = $inst;
			
		}
		
		return $inst;
		
	}
	
	
}

