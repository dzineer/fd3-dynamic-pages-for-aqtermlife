<?php
namespace AQ2EMarketingPlatform;

/**
 * Created by PhpStorm.
 * User: niran
 * Date: 1/18/2017
 * Time: 4:23 PM
 */
class FormFieldFactory {
    private function  __construct() {

    }

    public static function Make( $field ) {
        switch( $field['type'] ) {
            case 'text':
                return new FD3TextField( $field );
            case 'email':
                return new FD3EmailField(  $field  );
            case 'password':
                return new FD3PasswordField(  $field  );
            case 'phone':
                return new FD3PhoneField(  $field  );
            case 'state':
                return new FD3StateField(  $field  );
            case 'creditcard-type':
                return new FD3CreditCardTypeField(  $field  );
            case 'button':
                return new FD3ButtonField(  $field  );

            default:
                return new FD3PhoneField(  $field  );
        }
    }
}