<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */

if( ! class_exists( __NAMESPACE__ . '\\' . 'FD3ComponentLoader' ) ) {
	
	class FD3ComponentLoader extends FD3ClassLoader {
		
		private $_fileType = '_component';
		private $_dir;
		private $_model;
		private $_view;
		private $_controller;
		private $_component;
		private $_viewController;
		private $FD3;
		
		public function __construct( $dir = '' , $fileType = '_component' ) {
			
			$this->_dir      = $dir;
			$this->_fileType = $fileType;
		}
		
		public function init( $FD3 ) {
			$this->FD3 = $FD3;
		}
		
		public function load( $componentName , $dependencies = null ) {
			
			$this->_model          = new FD3ModelLoader( $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'models' , '_model' );
			$this->_view           = new FD3ViewLoader( $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'views' , '_view' );
			$this->_controller     = new FD3ControllerLoader( $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'controllers' , '_controller' );
			$this->_viewController = new FD3View();
			
			$modelName      = $componentName;
			$viewName       = $componentName;
			$controllerName = $componentName;
			
			// $componentPath           = $this->_dir . DIRECTORY_SEPARATOR . $componentName . '_component.class.php';
			$componentModelPath      = $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $componentName . '_model.class.php';
			$componentViewPath       = $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $componentName . '_view.php';
			$componentControllerPath = $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $componentName . '_controller.class.php';
			
			$instance = null;
			
			// Component name must equal the directory it resides in:
			// components/<component_name>/
			
			// these are more strict so we must depend on the component name to equal the model, view, and controller
			// i.e. <component_name>_model, <component_name>_view, <component_name>_controller
			
			// first make sure the Component Name folder exists
			
			// make sure each sub folder exists
			if ( ! file_exists( $componentModelPath ) ) {
				throw new \Exception( 'Model ' . $componentModelPath . ' required' );
			}
			else if ( ! file_exists( $componentViewPath ) ) {
				throw new \Exception( 'View ' . $componentViewPath . ' required' );
			}
			else if ( ! file_exists( $componentControllerPath ) ) {
				throw new \Exception( 'Controller ' . $componentControllerPath . ' required' );
			}
			else { // we made it here so we are ok
				
				$model = $this->_model->load( $modelName , $dependencies );
				$model->init( [ 'FD3' => $this->FD3,
					                   'LOCAL_PATH' => $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR
									 ]);
				
				$this->_viewController->init( [ 'FD3' => $this->FD3,
				                       'LOCAL_PATH' => $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR,
				                       '_name' => $viewName
				                     ]);
				
 				$controller = $this->_controller->load( $controllerName, $dependencies );
				
				$controller->init( [ 'model' => $model,
					                        'view' => $this->_viewController,
					                        'FD3' => $this->FD3,
											'LOCAL_PATH' => $this->_dir . DIRECTORY_SEPARATOR . $componentName . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR
				                          ]);
				
				$componentNamespace = __NAMESPACE__ . '\\' . 'FD3Component';
				
				$this->_component   = new $componentNamespace( $controller );
				
				if ( class_exists( $componentNamespace ) ) { // can we load based on className ?
					$instance = $this->_component;
				}
				
			}
			
			// TODO: Do we have a class now ?
			return $instance;
			
		}
		
	}
	
}