<?php
namespace AQ2EMarketingPlatform;
/**
 * Created by PhpStorm.
 * User: niran
 * Date: 5/15/2017
 * Time: 3:44 PM
 */
abstract class FD3Rule {

    protected $rule;
    protected $data;
    protected $callback;
    protected $callback_data;

    public abstract function execute( $rule );

    public final function execCB(  $rule  ) {

        $this->rule = $rule;
        $this->data = $rule['data'];
        $this->callback = $rule['callback'];

        $this->execute( $rule );

        if( $this->callback ) {
            if( is_array( $this->callback ) ) {
                $inst = array_shift( $this->callback );
                $func = array_shift( $this->callback );

                if( $inst && method_exists( $inst, $func ) ) {
                    call_user_func( array( $inst, $func), $this->callback_data );
                }
            }
            else {
                // okay if we got this far we are looking to execute a function
                if( is_string( $this->callback ) && function_exists( $this->callback ) ) {
                    call_user_func( $this->callback, $this->callback_data );
                }
            }
        }
    }
}