<?php
namespace AQ2EMarketingPlatform;

/**
 * Filename: FD3Registry.php
 * Project: webroot
 * Editor: PhpStorm
 * Namespace: DELANO\LIBRARY
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 12/6/2016 2:19 PM
 */

class FD3SubRegistry {

    /* variables */

    /**
     * @type
     */
    protected $_objects;

    /* constants */

    /**
     * FD3SubRegistry constructor.
     */
    public function __construct () {
        // echo "\n\n" . "FD3SubRegistry::__construct" . "\n\n";
    }

    /**
     * @param $name
     * @param $object
     */
    public function set( $name, $object ) { // save object reference
        $this->_objects[ $name ] = $object;
    }

    /**
     * @param $name
     *
     * @return null
     */public function get( $name ) {  // return the reference: _objects[ name ]
        if(isset( $this->_objects[ $name ] )) {
            return $this->_objects[ $name ];
        }
        else {
            return null;
        }
    }

    /**
     * @param $name
     * @param $object
     */
    public function add( $name, $object ) { // save object reference, same as set but allows the developer to choose to use add or set
        $this->_objects[ $name ] = $object;
    }

    /**
     * @param $key
     *
     * @return bool
     */public function find( $key ) {
        if( strlen($key) ) {
            if( array_key_exists( $key, $this->_objects ) ) {
                return true;
            }
            return false;
        }
        else {
            return false;
        }
    }
}

/**
 * Class FD3Registry
 */
final class FD3Registry {
    
    /* variables */

    /**
     * @type array
     */
    protected $_objects;

    /* constants */
    
    /**
     * FD3Registry constructor.
     */
    public function __construct () {
        // echo "\n\n" . "FD3Registry::FD3Registry" . "\n\n";
        $this->_objects = array();
    }

    /**
     * @param        $name
     * @param string $category
     *
     * @return mixed|null
     */public function get( $name, $category = '' ) {  // return the reference: _objects[ name ]

        if(strlen($category)) {

            if ( $this->find ( $category ) ) { // got it
                $obj = $this->_objects[ $category ]; // get FD3SubRegistry object
                if( $obj->find( $name ) ) {
                    return $obj->get( $name );
                }
                else {
                    return null;
                }

            }
            else {
                return null;
            }
        }
        else {

            if($this->find( $name )) { // got it
               return $this->_objects[ $name ];
            }

        }

    }

    /**
     * @param $key
     *
     * @return bool
     */public function find( $key ) {
        if( strlen($key) ) {
            if( array_key_exists( $key, $this->_objects ) ) {
                return true;
            }
            return false;
        }
        else {
            return false;
        }
    }

    /**
     * @param        $name
     * @param        $object
     * @param string $category
     */
    public function add( $name, $object, $category = '' ) { // save object reference, same as set but allows the developer to choose to use add or set

        // echo "\n\n FD3Registry::add - name: $name - category: $category \n\n";

        if(strlen($category)) {

            if($this->find( $category )) { // got it
                $obj = $this->_objects[ $category ]; // get FD3SubRegistry object
                $obj->set( $name, $object ); // update sub object
                $this->_objects[ $category ] =& $obj; // update main object
            }
            else { // new
                $obj = new FD3SubRegistry();
                $obj->set( $name, $object );
                $this->_objects[ $category ] =& $obj;
            }

        }
        else {

            if($this->find( $name )) { // got it
                $this->_objects[ $name ] = $object;
            }

        }
    }
    
} // end of FD3Registry