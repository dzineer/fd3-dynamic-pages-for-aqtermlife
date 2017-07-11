<?php

namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */
class FD3ControllerLoader extends FD3ClassLoader {
	
	private $_fileType = '_controller';
	private $_dir;
	
	public function __construct( $dir = '', $fileType = '_library' ) {
		
		$this->_dir = $dir;
		$this->_fileType = $fileType;
		
	}
	
	public function load( $className, $dependency = null ) {
		
		$classPath = $this->_dir . DIRECTORY_SEPARATOR . $className;
		$instance = null;
		
		// if *_library
		
		if( substr($className, strlen( $this->_fileType ) * -1 ) == $this->_fileType ) { // do we have a _library file type ?
			
			$classPath = $classPath . $this->_fileType . '.class.php';
			$className = $className . $this->_fileType;
			
			if( file_exists( $classPath ) ) {
				
				include( $classPath );
				
				if( class_exists( "AQ2EMarketingPlatform\$className" ) ) { // can we load based on className ?
					
					if( $dependency != null ) {
						$instance = new $className( $dependency );
						$instance->init( $dependency );
					}
					else {
						$instance = new $className();
					}
					
					return $instance;
				}
				
			}
			
		}
		
		// Using possible class $className_library
		// check if possible class exists
		
		$possible_class = $className . $this->_fileType;
		$possible_class_path = $classPath . $this->_fileType . '.class.php';
		
		if( file_exists( $possible_class_path ) ) {
			
			include( $possible_class_path );
			
			$nameSpaceClass = __NAMESPACE__.'\\'. $possible_class;
			
			if( class_exists( $nameSpaceClass ) ) { // can we load based on className ?
				if( $dependency != null ) {
					$instance = new $nameSpaceClass();
					$instance->init( $dependency );
				}
				else {
					$instance = new $nameSpaceClass();
				}
			}
			
		}
		else { // else check if base className exists. okay if this exists just load it. we are okay if you don't follow our format :)
			
			if( file_exists( $classPath . '.class.php' ) ) {
				
				include( $classPath . '.class.php' );
				
				$namespaceClass = __NAMESPACE__ . '\\' . $className;
				
				if( class_exists( $namespaceClass ) ) { // can we load based on className ? exist with namespace
					
					if( $dependency != null ) {
						$instance = new $namespaceClass();
						$instance->init( $dependency );
					}
					else {
						$instance = new $namespaceClass();
					}
					
				}
				else if( class_exists( $className ) ){ // exist without namespace
					if( $dependency != null ) {
						$instance = new $className();
						$instance->init( $dependency );
					}
					else {
						$instance = new $className();
					}
				}
				
			}
			else { // we also support lowercase libraries to support linux
				
				$lowercaseClassPath = strtolower($classPath);
				
				if( file_exists( $lowercaseClassPath . '.class.php' ) ) {
					
					include( $lowercaseClassPath . '.class.php' );
					
					if( class_exists( $className ) ) { // can we load based on className ?
						if( $dependency != null ) {
							$instance = new $className();
							$instance->init( $dependency );
						}
						else {
							$instance = new $className();
						}
						
					}
				}
			}
			
		}
		
		// TODO: Do we have a class now ?
		return $instance;
		
	}
	
}

