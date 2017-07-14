<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */
abstract class FD3ClassLoader {
	
	private $_fileType = '_library';
	private $_dir;
	private $_subDir;
	private $_origin_dir;
	
	public function __construct( $dir = '', $fileType = '_library' ) {

		$this->_dir = $this->_origin_dir = $dir;
		$this->_fileType = $fileType;

	}
 
	// allow sub directories if we want
	public function setSubDir( $subDir ) {
		$this->_subDir = $subDir;
		$this->_dir = $this->_origin_dir . '\\' . $this->_subDir;
	}
	
	public function load( $className, $dependency = null ) {

		$classPath = $this->_dir . DIRECTORY_SEPARATOR . $className;
		
		$instance = null;
		
		// if *_library
		
		if( substr($className, strlen( $this->_fileType ) * -1 ) == $this->_fileType ) { // do we have a _library file type ?
			
			$classPath = $classPath . $this->_fileType . '.class.php';
			$className = $className . $this->_fileType;
			$namespaceClass = __NAMESPACE__ . '\\' . $className;
			
			if( file_exists( $classPath ) ) {
				
				include( $classPath );
				
				if( class_exists( $namespaceClass ) ) { // can we load based on className ?
					
					if( $dependency != null ) {
						
						$instance = new $namespaceClass();
						
						if( is_subclass_of( $instance, 'FD3ClassType') ) {
							$instance->init( $dependency );
						}
						
					}
					else {
						$instance = new $namespaceClass();
					}
					
					return $instance;
				}
				
			}
			
		}
		
		// Using possible class $className_library
		// check if possible class exists
		
		$possible_class = $className . $this->_fileType;
		$possible_class_path = $classPath . $this->_fileType . '.class.php';
		$namespaceClass = __NAMESPACE__ . '\\' . $possible_class;
		


		if( file_exists( $possible_class_path ) ) {
			
			include( $possible_class_path );
			
			if( class_exists( $namespaceClass ) ) { // can we load based on className ?
				if( $dependency != null ) {
					
					$instance = new $namespaceClass();
					
					if( is_subclass_of( $instance, 'FD3ClassType') ) {
						$instance->init( $dependency );
					}
					
				}
				else {
					$instance = new $namespaceClass();
				}
			}
			
		}
		else { // else check if base className exists. okay if this exists just load it. we are okay if you don't follow our format :)
			
			// echo "<br> classPath: " . $classPath . '.class.php' . "<br>";

			if( file_exists( $classPath . '.class.php' ) ) {
				
				include( $classPath . '.class.php' );
				
				$namespaceClass = __NAMESPACE__ . '\\' . $className;
				
				if( class_exists( $namespaceClass ) ) { // can we load based on className ? exist with namespace
					
					if( $dependency != null ) {
						$instance = new $namespaceClass();
						
						if( is_subclass_of( $instance, 'AQ2EMarketingPlatform\FD3ClassType') ) {
							$instance->init( $dependency );
						}
					}
					else {
						$instance = new $namespaceClass();
					}
					
				}
				else if( class_exists( $namespaceClass ) ){ // exist without namespace
					if( $dependency != null ) {
						$instance = new $namespaceClass();
						
						if( is_subclass_of( $instance, 'AQ2EMarketingPlatform\FD3ClassType') ) {
							$instance->init( $dependency );
						}

					}
					else {
						$instance = new $namespaceClass();
					}
				}
				
			}
			else { // we also support lowercase libraries to support linux
				
				$lowercaseClassPath = strtolower($classPath);
				
				$namespaceClass = __NAMESPACE__ . '\\' . $className;
				
				if( file_exists( $lowercaseClassPath . '.class.php' ) ) {
					
					include( $lowercaseClassPath . '.class.php' );
					
					if( class_exists( $namespaceClass ) ) { // can we load based on className ?
						if( $dependency != null ) {
							
							$instance = new $namespaceClass();
							
							if( is_subclass_of( $instance, 'AQ2EMarketingPlatform\FD3ClassType') ) {
								$instance->init( $dependency );
							}
							
						}
						else {
							$instance = new $namespaceClass();
						}
						
					}
				}
			}
			
		}
		
		// TODO: Do we have a class now ?
		return $instance;
		
 	}
	
}

