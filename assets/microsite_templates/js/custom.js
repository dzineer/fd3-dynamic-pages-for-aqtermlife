/**
 * Created by huranku on 03/21/2017.
 */

function isDefined(s) {
    if( typeof s != 'undefined' ) {
        return true;
    } else {
        return false;
    }
}

/* polyfills */

// Production steps of ECMA-262, Edition 5, 15.4.4.14
// Reference: http://es5.github.io/#x15.4.4.14
if (!Array.prototype.indexOf) {
  Array.prototype.indexOf = function(searchElement, fromIndex) {

    var k;

    // 1. Let o be the result of calling ToObject passing
    //    the this value as the argument.
    if (this == null) {
      throw new TypeError('"this" is null or not defined');
    }

    var o = Object(this);

    // 2. Let lenValue be the result of calling the Get
    //    internal method of o with the argument "length".
    // 3. Let len be ToUint32(lenValue).
    var len = o.length >>> 0;

    // 4. If len is 0, return -1.
    if (len === 0) {
      return -1;
    }

    // 5. If argument fromIndex was passed let n be
    //    ToInteger(fromIndex); else let n be 0.
    var n = fromIndex | 0;

    // 6. If n >= len, return -1.
    if (n >= len) {
      return -1;
    }

    // 7. If n >= 0, then Let k be n.
    // 8. Else, n<0, Let k be len - abs(n).
    //    If k is less than 0, then let k be 0.
    k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

    // 9. Repeat, while k < len
    while (k < len) {
      // a. Let Pk be ToString(k).
      //   This is implicit for LHS operands of the in operator
      // b. Let kPresent be the result of calling the
      //    HasProperty internal method of o with argument Pk.
      //   This step can be combined with c
      // c. If kPresent is true, then
      //    i.  Let elementK be the result of calling the Get
      //        internal method of o with the argument ToString(k).
      //   ii.  Let same be the result of applying the
      //        Strict Equality Comparison Algorithm to
      //        searchElement and elementK.
      //  iii.  If same is true, return k.
      if (k in o && o[k] === searchElement) {
        return k;
      }
      k++;
    }
    return -1;
  };
}

var jq = jQuery.noConflict();

(function ( options ) {

 //   options.jq('#signup-modal').modal();
   

    var $ = {
        'jq': options.jq,
        'win': options.win,
        'doc': options.doc,
        'args': {},
        'f': ( function () {
           return {
                init: function() {
                    $.args.fieldErrors = {};
                    $.args.fieldSuccesses = {};
                    $.args.ServerErrors = {};
                },
                getError: function( eId ) {
                    if( isDefined( $.args.fieldErrors[ eId ] ) && $.args.fieldErrors[ eId ] == true ) {
                        return $.args.fieldErrors[ eId ];
                    } else {
                        return "undefined";
                    }
                },
                getSuccess: function( eId ) {
                   if( isDefined( $.args.fieldSuccesses[ eId ] ) && $.args.fieldSuccesses[ eId ] == true ) {
                       return $.args.fieldSuccesses[ eId ];
                   } else {
                       return "undefined";
                   }
                },
                removeSuccess: function( eId ) {
                    if( isDefined( $.args.fieldSuccesses[ eId ] ) ) {
                        delete $.args.fieldSuccesses[eId];
                    }
                },
                removeError: function( eId ) {
                    if( isDefined( $.args.fieldErrors[ eId ] ) ) {
                        delete $.args.fieldErrors[eId];
                    }
                },
                addError: function( e ) {
                    $.args.fieldErrors[ e ] = true;
                },
                addSuccess: function( s ) {
                   $.args.fieldSuccesses[ s ] = true;
                },
                hasErrors: function() {
                    return Object.keys( $.args.fieldErrors ).length > 0;
                },
                getServerErrors: function() {

                    $.jq( ".fd3_forms_form_error" ).each( function( index, item ) {
                        var eId = this.id;
                        $.args.ServerErrors[ this.id ] = eId;
                    });

                },
                getServerError: function( eId ) {
                   if( isDefined( $.args.ServerErrors[ eId ] ) && $.args.ServerErrors[ eId ] === true ) {
                       return $.args.ServerErrors[ eId ];
                   } else {
                       return "undefined";
                   }
                },
                removeServerError: function( eId ) {
                   if( isDefined( $.args.ServerErrors[ eId ] ) ) {
                       delete $.args.ServerErrors[eId];
                   }
                },

           }
        }())
    };

    $.f.init();
    $.f.getServerErrors();

    $.win[ 'FD3Message' ] =  {
        addError: $.f.addError,
        addSuccess: $.f.addSuccess,
        getError: $.f.getError,
        getSuccess: $.f.getSuccess,
        removeSuccess: $.f.removeSuccess,
        removeError: $.f.removeError,
        hasErrors: $.f.hasErrors,
        removeServerError: $.f.removeServerError,
        getServerError: $.f.getServerError,
        getServerErrors: $.f.getServerErrors
    };

    return {
        addError: $.f.addError,
        addSuccess: $.f.addSuccess,
        getError: $.f.getError,
        getSuccess: $.f.getSuccess,
        removeSuccess: $.f.removeSuccess,
        removeError: $.f.removeError,
        hasErrors: $.f.hasErrors,
        removeServerError: $.f.removeServerError,
        getServerError: $.f.getServerError,
        getServerErrors: $.f.getServerErrors
    }

}( {
  'jq': jq, 'doc':document, 'win': window
}));

var fieldErrors = {};
var fieldSuccesses = {};

(function( options ) {

    my_AMP_Ajax.strictFlag

        var strength = {
        0: "Worst",
        1: "Bad",
        2: "Weak",
        3: "Good",
        4: "Strong"
    };

    var globalMessages = {

        'password0': { type: 'success', text: 'Strong Password!' },
        'password1': { type: 'error', text: 'You must provide a Password!' },
        'password2': { type: 'error', text: 'Password Not long enough!' },
        'password3': { type: 'error', text: 'Password Not strong enough!' },
        'password4': { type: 'error', text: 'Weak Password!!' },
        'password5': { type: 'error', text: 'Passwords do not match!' },
        'microsite1': { type: 'error', text: 'Your Microsite Id must consist of letters/and or numbers and must be a length 3 to 16 characters.' },
        'creditcard0': { type: 'error', text: 'Invalid Credit Card Number' },
        'securitycode0': { type: 'error', text: 'Invalid Security Code' },
        'expirationdata0': { type: 'error', text: 'Invalid Expiration Date. Correct format: (mm/yyyy) ' },
        'state0': { type: 'error', text: 'You must select a State.' },
        'zipcode0': { type: 'error', text: 'Invalid Zip Code' },
        'promocode0': { type: 'error', text: 'Invalid Promo Code' }

    };

    options.jq(function() {

        var object_instances = [];

        function setInstance( key, value ) {
            object_instances[ key ] = value;
        }

        function getInstance( key ) {
            if( key in object_instances ) {
                return object_instances[ key ];
            } else {
                return null;
            }
        }

        function fd3_objectify( s ) {

            var obj = { };
            var items = s.split( '&' );
            for(var i=0; i < items.length; i++) {
                var item = items[i].split( '=' );
                var key = item[0];
                var val = decodeURIComponent(item[1]);

                obj[ key ] = val;
            }

            return obj;
        }        

        function getMessage( code ) {
            if( isDefined( globalMessages[ code ] ) ) {
                return globalMessages[ code ];
            } else {
                return null;
            }
        }

        function fd3_check_error( e, callback ) {

            var result = callback.call( this, options.jq(e).val() );
            var msg = getMessage( result );
            var eId = e.id;
            var msgId;

            if( msg != null ) {

                // clear all the bad alerts

                if( isDefined( FD3Message.getServerError( eId ) ) ) {
                    msgId = '#fd3_forms_form_error_' + eId;
                    options.jq( msgId ).remove();
                    FD3Message.removeServerError( eId );
                }

                if( isDefined( FD3Message.getSuccess( eId ) ) ) {
                    msgId = '#' + eId + '-success';
                    options.jq( msgId ).remove();
                    FD3Message.removeSuccess( eId );
                }

                if( isDefined( FD3Message.getError( eId ) )) {
                    msgId = '#' + eId + '-error';
                    options.jq( msgId ).remove();
                    FD3Message.removeError( eId );
                }

                if( msg.type === 'success' ) {

                    options.jq( e ).parent().prepend('<span class="fd3_forms_form_success" id="' + eId + '-success" alertrole="alert"><strong>Good, </strong>' + msg.text + '</span>');
                    FD3Message.addSuccess( eId );

                } else if( msg.type === 'error' ) {

                    options.jq( e ).parent().prepend('<span class="fd3_forms_form_error" id="' + eId + '-error" alertrole="alert"><strong>Error, </strong>' + msg.text + '</span>');
                    fieldErrors[ eId ] = true;
                    FD3Message.addError( eId );
                }

            } else {

                // if we received no message then if all is well then clear any errors or messages

                if( isDefined( FD3Message.getServerError( eId ) ) ) {
                    msgId = '#fd3_forms_form_error_' + eId;
                    options.jq( msgId ).remove();
                    FD3Message.removeServerError( eId );
                }

                if( isDefined(  FD3Message.addSuccess(eId ) ) ) {
                    msgId = '#' + eId + '-success';
                    options.jq( msgId ).remove();
                    FD3Message.removeSuccess( eId );
                }

                if( isDefined( FD3Message.getError( eId ) ) ) {
                    msgId = '#' + eId + '-error';
                    options.jq( msgId ).remove();
                    FD3Message.removeError( eId );
                }
            }

        }

        if( ! isDefined( FORMS ) || !FORMS ) { var FORMS = {} ; }

        FORMS.Validate = {

            isChecked: function( e ) {
                return e.is(':checked');
            },
            isGroupChecked: function( e ) {
                var name = e.attr('name');
            
                var query = "input[name='" + name + "']:checked";
                
                      return options.jq( query ).length > 0;
            },
            selectedIndex: function(s) {
            
                if( typeof s == "object" ) {
                        return s.prop('selectedIndex');
                }
                else {
                        return options.jq( '#'+s ).prop('selectedIndex');
                }
              
            },
            Name: function(s) {
                return FORMS.REGEXP.NAME.test(s);
            },
            MicrositeId: function(s) {
                return FORMS.REGEXP.MICROSITE_ID.test(s);
            },
            FullName: function(s) {
                    var res;
                    if( typeof s == "object" ) {
                            res =  (s.val().length > 2);
                            return res;
                    }
                    else {
                            res = (s.length > 2);
                            return res;
                    }
            },
            Email: function(s) {
                return FORMS.REGEXP.EMAIL.test(s);
            },
            Phone: function(d1,d2,d3) {
                if(!d1.match(FORMS.REGEXP.PHONE_AREA_CODE))
                    return false;

                if(!d2.match(FORMS.REGEXP.PHONE_PART1))
                    return false;

                if(!d3.match(FORMS.REGEXP.PHONE_PART2))
                    return false;

                return true;
            },
            PhoneStr: function(p) {
                return p.match(FORMS.REGEXP.PHONE_STR);
            },
            URL: function(s) {
                    if( typeof s == "object" ) {
                            return (s.val().length > 4);
                    }
                    else {
                            return (s.length > 4);
                    }
            },
            CompanyName: function(s) {
                      if( typeof s == "object" ) {
                              return (s.val().length > 2);
                      }
                      else {
                              return (s.length > 2);
                      }
            },
            Username: function(s) {
                return FORMS.REGEXP.USERNAME.test(s);
            },
            Promocode: function(s) {

                var r;

                if(s.length == 0) {
                    return '';
                }

                r = FORMS.REGEXP.PROMO_CODE.test(s);
                if(!r) {
                    return 'promocode0'
                } else {
                    return '';
                }

            },
            Zipcode: function(s) {

                var r;
                r = FORMS.REGEXP.ZIP_CODE.test(s);
                if(!r) {
                    return 'zipcode0'
                } else {
                    return '';
                }

            },
            Password: function(s1,s2) {
                if(s1 != s2)
                    return false;

                return FORMS.REGEXP.PASSWORD.test(s1);
            },
            Subdomain: function(s) {
                return FORMS.REGEXP.SUBDOMAIN.test(s);
            },
            ExpirationDate: function( s ) {

                var r;
                r = FORMS.REGEXP.EXPIRATION_DATE.test(s);
                if(!r) {
                    return 'expirationdata0'
                } else {
                    return '';
                }

            },
            CreditCard: function(cc_num) {
                // Check for valid credit card type/number
                // Get the first digit
                                                 var num;
                                                 
                      if( typeof cc_num == "object" ) {
                        num = cc_num.val();
                      } else {
                            num = cc_num;
                      }
                      
                fn = parseInt( num.substr(0, 1) );
                // Make sure it is the correct amount of digits. Account for dashes being present.
                switch (fn)
                {
                    case 3:
                        regexp = /^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/;
                        if (!regexp.test( num ))
                        {
                            return "creditcard0";
                        }
                        break;
                    case 4:
                        regexp = /^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                        if (!regexp.test( num ))
                        {
                            return "creditcard0";
                        }
                        break;
                    case 5:
                        regexp = /^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                        if (!regexp.test( num ))
                        {
                            return "creditcard0";
                        }
                        break;
                    case 6:
                        regexp = /^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                        if (!regexp.test( num ))
                        {
                            return "creditcard0";
                        }
                        break;
                    default:
                        return "creditcard0";
                }
                // Here's where we use the Luhn Algorithm
                      num = num.replace('-', '');
                map = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
                sum = 0;
                last =  num.length - 1;
                
                for (i = 0; i <= last; i++)
                {
                    charr = num[last - i];
                    x = parseInt(charr);
                    mapIndex = x + (i & 1) * 10;
                    sum += map[mapIndex];
                }
                if (sum % 10 != 0)
                {
                    return "creditcard0";
                }
                // If we made it this far the credit card number is in a valid format
                return "";
            },
            CreditCard_V2: function(cc_num) {
                // Check for valid credit card type/number
                // Get the first digit
                var num;
            
                if( typeof cc_num == "object" ) {
                        num = cc_num.val();
                } else {
                        num = cc_num;
                }
            
                fn = parseInt( num.substr(0, 1) );
                // Make sure it is the correct amount of digits. Account for dashes being present.
                switch (fn) {
                        case 3:
                                regexp = /^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/;
                                if (!regexp.test( num ))
                                {
                                        return false;
                                }
                                break;
                        case 4:
                                regexp = /^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                                if (!regexp.test( num ))
                                {
                                        return false;
                                }
                                break;
                        case 5:
                                regexp = /^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                                if (!regexp.test( num ))
                                {
                                        return false;
                                }
                                break;
                        case 6:
                                regexp = /^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                                if (!regexp.test( num ))
                                {
                                        return false;
                                }
                                break;
                        default:
                                return false;
                }
                // Here's where we use the Luhn Algorithm
                num = num.replace('-', '');
                map = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
                sum = 0;
                last =  num.length - 1;
            
                for (i = 0; i <= last; i++) {
                        charr = num[last - i];
                        x = parseInt(charr);
                        mapIndex = x + (i & 1) * 10;
                        sum += map[mapIndex];
                }

                if (sum % 10 != 0) {
                        return false;
                }
                // If we made it this far the credit card number is in a valid format
                return true;
            },
            CVV3: function(cardNumber, cvv)
            {
                // Get the first number of the credit card so we know how many digits to look for
                fn = parseInt(cardNumber.substr(0, 1));
                if (fn == 3)
                {
                    regexp = /^\d{4}$/;
                    if (!regexp.test(cvv))
                    {
                        // The credit card is an American Express card but does not have a four digit CVV code
                        return 'securitycode0';
                    }
                    return '';
                }
                regexp = /^\d{3}$/;
                if (!regexp.test(cvv))
                {
                    // The credit card is a Visa, MasterCard, or Discover Card card but does not have a three digit CVV code
                    return 'securitycode0';
                }
                return '';
            },
            CVV3_V2: function(cardNumber, cvv)
            {
                // Get the first number of the credit card so we know how many digits to look for
                fn = parseInt(cardNumber.substr(0, 1));
                if (fn == 3)
                {
                        regexp = /^\d{4}$/;
                        if (!regexp.test(cvv))
                        {
                                // The credit card is an American Express card but does not have a four digit CVV code
                                return false;
                        }
                        return true;
                }
                regexp = /^\d{3}$/;
                if (!regexp.test(cvv))
                {
                        // The credit card is a Visa, MasterCard, or Discover Card card but does not have a three digit CVV code
                        return false;
                }
                return true;
            },
            Password: function(passwd) {
                var points = passwd.length;
                var has_letter_exp      = new RegExp("[a-z]");
                var has_caps_exp        = new RegExp("[A-Z]");
                var has_numbers_exp     = new RegExp("[0-9]");

                var has_letter_exp = has_letter_exp.test(passwd);
                var has_caps_exp = has_caps_exp.test(passwd);
                var has_numbers_exp = has_numbers_exp.test(passwd);

                if (passwd.length==0) {
                    return 'password1';
                } else if (passwd.length < 8) {
                    return "password2";
                } else if (!(has_letter_exp && has_caps_exp && has_numbers_exp)) {
                    return "password4";
                } else if ((has_letter_exp && has_caps_exp && has_numbers_exp)) {
                    return 'password0';
                } else {
                    return 'password4';
                }
            }
        };


        FORMS.REGEXP = {
            PHONE_AREA_CODE: /^\d{3}$/,
            PHONE_PART1: /^\d{3}$/,
            PHONE_PART2: /^\d{4}$/,
            EXPIRATION_DATE: /^\d{2}\/\d{4}$/,
            ZIP_CODE: /^\d{5}(?:[-\s]\d{4})?$/,
            PHONE_STR: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/,

            /*

             ^\d{5}(?:[-\s]\d{4})?$
             ^ = Start of the string.
             \d{5} = Match 5 digits (for condition 1, 2, 3)
             (?:…) = Grouping
             [-\s] = Match a space (for condition 3) or a hyphen (for condition 2)
             \d{4} = Match 4 digits (for condition 2, 3)
             …? = The pattern before it is optional (for condition 1)
             $ = End of the string.

            */

            EMAIL: /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
            NAME: /^[A-Za-z0-9 ]{3,20}$/,
            MICROSITE_ID: /^[A-Za-z0-9_\-]{3,20}$/,
            URL: /^(ftp|http|https){0}:\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,
            // URL: /^(ftp|http|https){0}:\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,
            ORGANIZATION: /^[A-Za-z0-9 ]{3,20}$/,
            PASSWORD: /^[A-Za-z0-9]{8,16}$/,
            USERNAME: /^[a-zA-Z][a-zA-Z0-9_]{3,32}$/,
            PROMO_CODE: /^[a-zA-Z][a-zA-Z0-9_]{3,32}$/,
            SUBDOMAIN: /^[a-zA-Z][a-zA-Z0-9_]{3,32}$/
        };

        FORMS.PackageData = function(dataToPackage) {
            var work = dataToPackage;
            var adj = work.length % 3;
            if (adj != 0)
            {
                for (var indx = 0; indx < (3 - adj); indx++) { work = work + ' '; }
            }
            var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            var out = "", c1, c2, c3, e1, e2, e3, e4;
            for (var i = 0; i < work.length; )
            {
                c1 = work.charCodeAt(i++);
                c2 = work.charCodeAt(i++);
                c3 = work.charCodeAt(i++);
                e1 = c1 >> 2;
                e2 = ((c1 & 3) << 4) + (c2 >> 4);
                e3 = ((c2 & 15) << 2) + (c3 >> 6);
                e4 = c3 & 63;
                if (isNaN(c2)) { e3 = e4 = 64; }
                else if (isNaN(c3)) { e4 = 64; }
                out += tab.charAt(e1) + tab.charAt(e2) + tab.charAt(e3) + tab.charAt(e4);
            }
            return out;
        };

        (function() {
            var initializing = false,
                fnTest = /xyz/.test( 
                    function() { xyz; }
                ) ? /\b_super\b/ : /.*/;

            // the base class implementation ( does nothing )
            this.Class = function(){};    

            // create a new Class that inherits from this class
            Class.extend = function extender( prop ) {
                var _super = this.prototype;

                // Instantiate a base class ( but only create the instance,
                // don't run the init constructor )
                initializing = true;
                var prototype = new this();
                initializing = false;

                // Copy the properties over onto the new prototype
                for(  var name in prop ) {
                    // Check if we are overriding an existing function
                    prototype[ name ] = typeof prop[ name ] == "function" &&
                                    typeof _super[ name ] == "function" &&
                                    fnTest.test( prop[name] ) ? 
                                ( function(name, fn) {
                                    return function() {
                                        var tmp = this._super;
                                        // Add a new .super() method that is the same method
                                        // but on the super-class
                                        this._super = _super[ name ];
                                        // The method only need to be bound temporarily, so we
                                        // remove it when we are done executing
                                        var ret = fn.apply( this, arguments );
                                        this._super = tmp;

                                        return tmp;
                                    }
                                } )( name, prop[ name ] ) :
                                prop[ name ];
                }

                // The dummy class constructor
                function Class() {
                    // All construction is actually done in the init method
                    if( !initializing && this.init ) {
                        this.init.apply( this, arguments );
                    }
                }

                // Populate our constructed prototype object
                Class.prototype = prototype;
                // Enforce the constructor to be what we expect
                Class.prototype.constructor = Class;
                // And make this class extendable
                Class.extend = extender;

                return Class;
            };        
        }());


        var FD3Model = Class.extend({
            'data': {},
            'init': function( data ) {
                this.data = data;
            }
        });

        var FD3View = Class.extend({

            'data': {},
            'jq': jq,  
            'callback': {},

            'registerCallback': function( inst, cb ) {
                this.callback.inst = inst;
                this.callback.cb = cb;
            },
            'removeItem': function( pos ) {
                var index = this.data.items.indexOf( pos );
                if( index > -1 ) {
                    this.data.items.splice( index, 1 );
                }
            },  
            'renderElement': function( name, o ) {
                var tag = '<' + name + '/>';
                if( typeof o != 'undefined' ) {
                    var el = this.jq( tag, o );
                }
                else {
                    var el = this.jq( tag );
                }

                return el;
            },
            'renderStructure': function() {
                this.renderItems( this.data.container, this.data.items );
            },
            'renderItems': function( container, items ) {

                for(var i=0; i < items.length; i++) {
                    var item = items[ i ];
                    var el = this.renderElement( item.element, item.props );

                    if(item.has_children) {
                        var parent = el;
                        this.renderItems( parent, item.children );
                    }
                    
                    if( typeof item.contents != 'undefined' ) {
                        el.html( item.contents );
                    }

                    el.appendTo( container );

                }

            },                 
            'render': function() {
                this.data.container.empty();
                this.renderStructure();
            },
            'view': function( data ) {
                this.data = data;
                this.data.container = (this.data.container instanceof jq) ? this.data.container : jq( this.data.container );
                return this.render();
            }
        });

        var FD3Controller = Class.extend({
            'init': function( data ) {
                this.data = data;
            }
        });
 
       // ---------------------- Models ----------------------

        // Model: SignUpChoice
        var SignUpChoiceModel = FD3Model.extend({

            'data': {},

            'loadData': function( tab, dataName, cbArray ) {

                var that = this;

                (function( url ) {

                    jq.ajax({ 
                      url: url, 
                      type: 'get', 
                      dataType: 'text', 
                      success: function(data) { 

                        console.log( 'info', data ); 
                        that.initData( tab, cbArray, JSON.parse(data) );

                      } 
                    });

                }( 
                    my_AMP_Ajax.dataFilesPath + dataName + '.json'
                ));

            },

            'initData': function( tab, cbArray, appData ) {
                console.log( 'info', 'tab: ' + tab );
                jq( tab ).addClass('show');
                cbArray[1].call( cbArray[0], appData );

                jq("a[data-toggle='tab'").on('click', function(e) {
                    e.stopImmediatePropagation();
                });

/*                jq("a[data-toggle='tab'").prop('disabled', true);
                jq("a[data-toggle='tab'").each(function () {
                    jq(this).prop('data-href', jq(this).attr('href')); // hold you original href
                    jq(this).attr('href', ''); // clear href
                });                
                jq("a[data-toggle='tab'").addClass('disabled-link');                
*/            },

            'loadPage': function() {
                var signUp = new SignUpChoiceView();
                signUp.registerCallback( this, this.eventsFired );
                signUp.view( SignUpChoiceData.data );
                this.data.container = SignUpChoiceData.data.container;
                this.data.container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var contactInfo = new ContactInfoController();

                if( id == 'product-one-container' ) {
                    console.log( "info", id + ' was clicked' );
                    jq('.signup-choice-container').removeClass('show');
                    jq('.popout-header').html('Sign up below:');
                    jq('.product-separator').html('');
                    jq('.product-two-hilite').html('');
                    jq('.product-one-hilite').html('AQ2E Platform Sign Up');

                    return this.loadData( '#ap-new-sign-up-tab', 'aq2e-platform-signup-data', [contactInfo, contactInfo.index] );

                } else if( id == 'product-two-container' ) {
                    console.log( "info", id + ' was clicked' );
                    jq('.signup-choice-container').removeClass('show');
                    jq('.popout-header').html('Sign up below:');
                    jq('.product-separator').html('');
                    jq('.product-one-hilite').html('');
                    jq('.product-two-hilite').html('AQ2E Marketing Platform Sign Up');

                    return this.loadData( '#amp-new-sign-up-tab', 'aq2e-marketing-platform-signup-data', [contactInfo, contactInfo.index] );

                }
            }
        });

        // Model: AMPPromoInfoModel
        var AMPPromoInfoModel = FD3Model.extend({

            'data': {},
            'appData': {},

            'loadPage': function( appData ) {
                this.appData = appData;
                this.data.views.promoInfo.registerCallback( this, this.eventsFired );
                this.data.views.promoInfo.view( this.appData.PromoInfoData.data );
                this.data.container = this.appData.PromoInfoData.data.container;
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var tab = this.data.container;
                var that = this;
                var currentInstance = jq( currentTarget );

                console.log( "info", id + ' was clicked' );

                if( id == 'fd3_form_apply_promo_btn' ) {
                    e.preventDefault();

                    console.log( "info", id + ' was clicked' );

                    (function( controller, field ) {

                        var promoCode = jq(field).val();
                        var packagedData = { 'action': my_AMP_Ajax.promoAction, "nonce": my_AMP_Ajax.promoNonce,  "process_amp_promo": my_AMP_Ajax.formPromo, "fd3_form_promocode": options.jq( field ).val() };

                        currentInstance.find(".fa-btn-font").addClass('show').addClass('fa-spin');
                        currentInstance.find('.btn-caption').html("Applying Promo Code...");

                        setTimeout( function() {

                            jq.ajax( {

                                url: my_AMP_Ajax.url,
                                type: my_AMP_Ajax.formType,
                                dataType : my_AMP_Ajax.dataType,
                                data: packagedData,
                                cache: my_AMP_Ajax.useCache,

                                error: function( response ) {
                                    console.log( response );
                                },

                                success: function( response ) {

                                    jq(  "#fd3_form_promocode-error" ).remove();

                                    if(response.successful == true) {

                                        jq( "#fd3_form_promocode" ).val( promoCode );
                                        console.log( response.output );

                                        that.data.views.invoiceInfo.applyPromo( response.promo );
                                        that.loadPage( that.appData );

                                        jq( "#fd3_form_promocode" ).val( promoCode );
                                        jq( "#fd3_form_promocode" ).attr( "data-promocode", promoCode );


                                    } else if( response.successful == false ) { // we have a form error
                                        jq( "#fd3_form_promocode" ).parent().prepend('<span class="fd3_forms_form_error" id="' + 'fd3_form_promocode' + '-error" alertrole="alert"><strong>Error, </strong>You Provided An Invalid Promo Code</span>');
                                        console.log( response.output );
                                    }

                                    currentInstance.find(".fa-btn-font").removeClass('show').removeClass('fa-spin');
                                    currentInstance.find('.btn-caption').html("Apply Promo Code");

                                    FD3Message.getServerErrors();

                                }

                            });

                        }, 1000);

                    }( 
                        this.controller,
                        options.jq( "#fd3_form_promocode" )
                    ));

                }
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                        { "field_name" : "fd3_form_phone",             "validate" : FORMS.Validate.PhoneStr,        "required": true,  "instance" : options.jq("#fd3_form_phone"), "message": "Invalid Phone Number" }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {

                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];

                    if( required && ! validate.call( this, inst.val() ) ) {
                        options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                        hasErrors = true;
                    }
                }, this);

                if( hasErrors ) {
                    return false;
                }

                // okay now we draw the next tab
                // TODO: Instantiate Account Info Controller
                //       Instantiate Account Info Model

                console.log( 'info', 'email: ' + email );

                return true;

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });

        // Model: APPromoInfoModel
        var APPromoInfoModel = FD3Model.extend({

            'data': {},
            'appData': {},

            'loadPage': function( appData ) {

                this.appData = appData;
                this.data.views.promoInfo.registerCallback( this, this.eventsFired );

                this.data.views.promoInfo.view( this.appData.PromoInfoData.data );
                this.data.container = this.appData.PromoInfoData.data.container;
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var tab = this.data.container;
                var that = this;
                var currentInstance = jq( currentTarget );

                console.log( "info", id + ' was clicked' );

                if( id == 'fd3_form_apply_promo_btn' ) {
                    e.preventDefault();

                    console.log( "info", id + ' was clicked' );

                    (function( controller, field ) {

                        var promoCode = jq(field).val();
                        var packagedData = { 'action': my_AP_Ajax.promoAction, "nonce": my_AP_Ajax.promoNonce,  "process_ap_promo": my_AP_Ajax.formPromo, "fd3_form_promocode": options.jq( field ).val() };

                        currentInstance.find(".fa-btn-font").addClass('show').addClass('fa-spin');
                        currentInstance.find('.btn-caption').html("Applying Promo Code...");

                        setTimeout( function() {

                            jq.ajax( {

                                url: my_AP_Ajax.url,
                                type: my_AP_Ajax.formType,
                                dataType : my_AP_Ajax.dataType,
                                data: packagedData,
                                cache: my_AP_Ajax.useCache,

                                error: function( response ) {
                                    console.log( response );
                                },

                                success: function( response ) {

                                    jq(  "#fd3_form_promocode-error" ).remove();

                                    if(response.successful == true) {

                                        jq( "#fd3_form_promocode" ).val( promoCode );
                                        console.log( response.output );

                                        that.data.views.invoiceInfo.applyPromo( response.promo );
                                        that.loadPage( this.appData );

                                        jq( "#fd3_form_promocode" ).val( promoCode );
                                        jq( "#fd3_form_promocode" ).attr( "data-promocode", promoCode );


                                    } else if( response.successful == false ) { // we have a form error
                                        jq( "#fd3_form_promocode" ).parent().prepend('<span class="fd3_forms_form_error" id="' + 'fd3_form_promocode' + '-error" alertrole="alert"><strong>Error, </strong>You Provided An Invalid Promo Code</span>');
                                        console.log( response.output );
                                    }

                                    currentInstance.find(".fa-btn-font").removeClass('show').removeClass('fa-spin');
                                    currentInstance.find('.btn-caption').html("Apply Promo Code");

                                    FD3Message.getServerErrors();

                                }

                            });

                        }, 1000);

                    }( 
                        this.controller,
                        options.jq( "#fd3_form_promocode" )
                    ));

                }
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                        { "field_name" : "fd3_form_phone",             "validate" : FORMS.Validate.PhoneStr,        "required": true,  "instance" : options.jq("#fd3_form_phone"), "message": "Invalid Phone Number" }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {

                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];

                    if( required && ! validate.call( this, inst.val() ) ) {
                        options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                        hasErrors = true;
                    }
                }, this);

                if( hasErrors ) {
                    return false;
                }

                // okay now we draw the next tab
                // TODO: Instantiate Account Info Controller
                //       Instantiate Account Info Model

                console.log( 'info', 'email: ' + email );

                return true;

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });

        // Model: ContactInfo
        var ContactInfoModel = FD3Model.extend({

            'data': {},
            'appData': {},

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.ContactInfoData.data;
                this.data.views.contactInfo.registerCallback( this, this.eventsFired );
                this.data.views.contactInfo.view( this.appData.ContactInfoData.data );
                this.data.parent_container = this.appData.ContactInfoData.data.parent_container;
                this.data.container = this.appData.ContactInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');

                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var controller = new this.data.next_controller();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'sign-up-fd3-contact-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        controller.index( this.appData );

                        email = tab.find('#fd3_form_email').val();

                        // options.jq( this.appData.ContactInfoData.data.tab ).tab('hide');

                        this.data.container.removeClass('show');
                        this.data.container.removeClass('active');
                        jq( this.modelData.tab_link ).removeClass('active');
                        jq( this.modelData.next_tab ).tab('show');

                        jq( this.modelData.parent_container ).find('#fd3_form_account_id').val( email );
                        

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                        { "field_name" : "fd3_form_company",           "validate" : FORMS.Validate.CompanyName,  "required": false,  "instance" : options.jq("#fd3_form_company"), "message": "" },
                        { "field_name" : "fd3_form_fname",             "validate" : FORMS.Validate.FullName,     "required": true,  "instance" : options.jq("#fd3_form_fname"), "message": "Invalid First Name" },
                        { "field_name" : "fd3_form_lname",             "validate" : FORMS.Validate.FullName,     "required": true,  "instance" : options.jq("#fd3_form_lname"), "message": "Invalid Last Name" },
                        { "field_name" : "fd3_form_email",             "validate" : FORMS.Validate.Email,        "required": true,  "instance" : options.jq("#fd3_form_email"), "message": "Invalid Email Address" },
                        { "field_name" : "fd3_form_phone",             "validate" : FORMS.Validate.PhoneStr,        "required": true,  "instance" : options.jq("#fd3_form_phone"), "message": "Invalid Phone Number" }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];

                    if( required && ! validate.call( this, inst.val() ) ) {
                        options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                        hasErrors = true;
                    }
                }, this);

                if( hasErrors ) {
                    return false;
                }

                // okay now we draw the next tab
                // TODO: Instantiate Account Info Controller
                //       Instantiate Account Info Model

                console.log( 'info', 'email: ' + email );

                return true;

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });


        setInstance( "ContactInfoModel", ContactInfoModel );

        // Model: AccountInfo
        var AccountInfoModel = FD3Model.extend({

            'data': {},
            'appData': {},
            'modelData': {},

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.AccountInfoData.data;
                this.data.views.accountInfo.registerCallback( this, this.eventsFired );
                this.data.views.accountInfo.view( this.appData.AccountInfoData.data );
                this.data.container = this.appData.AccountInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');

                this.data.container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var controller = new this.data.next_controller();

                var that = currentTarget;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-account-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );


                        controller.index( this.appData );

                        this.data.container.removeClass('show');
                        this.data.container.removeClass('active');
                        jq( this.modelData.tab_link ).removeClass('active');
                        jq( this.modelData.next_tab ).tab('show');

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                } 
                else if( id == 'fd3_form_password' ) {
                    var complexityContainer =  options.jq('#passwd-complexity-container');
                    var passwdStrengthText =  options.jq('#password-strength-text');
                    var passwd = options.jq(that).val();

                    // fd3_check_error( that, FORMS.Validate.Password );

                    var result = zxcvbn( passwd );

                    document.getElementById( 'passwd-complexity-container' ).setAttribute( 'data-background', result.score );

                    if(passwd !== "") {
                        var output = "Strength: " + "<strong>" + strength[result.score] + "</strong>";
                        if( result.score < 3 ) {
                            output = output + "<br/><span class='feedback'>Feedback: " + result.feedback.warning + "&nbsp;" + result.feedback.suggestions + "</span>";
                        }
                        options.jq( passwdStrengthText ).html( output );
                    } else {
                        options.jq( passwdStrengthText ).html( "" );
                    }                   
                }
                else if( id == 'fd3_form_validate_microsite_btn' ) {
                    var that = options.jq( '#'+id );
                    var signupInfo = {};
                    var packagedSignUpInfoData;
                    var thePackageObject;
                    var packagedData;

                    signupInfo.account = {};
                    signupInfo.account = {};
                    signupInfo.account.type = 'affiliate';
                    signupInfo.user = {};
                    signupInfo.user.userName = options.jq("#fd3_form_microsite_id").val();

                    signupInfo.site = {};
                    signupInfo.request = 'availability';
                    signupInfo.siteId = myAjax.affiliateId;
                    signupInfo.type = 'affiliate';
                    signupInfo.mode = 'affiliate';

                    packagedSignUpInfoData = FORMS.PackageData( JSON.stringify( signupInfo ) );
                    thePackageObject = { "params": { "data": packagedSignUpInfoData }, "nonce": myAjax.nonce };
                    packagedData = JSON.stringify( thePackageObject );

                    console.log( packagedData );

                    options.jq('.alert').remove();

                    that.find(".fa-btn-font").addClass('show').addClass('fa-spin');
                    that.find('.btn-caption').html("Checking Availability...");   
                
                    options.jq.ajax( {

                        url: "https://aqterm.com/aqterm-engine/index.php/aqmprocess",
                        type: 'put',
                        data: packagedData,
                        dataType : myAjax.dataType,
                        cache: myAjax.useCache,

                        error: function( response ) {
                            console.log( response );
                        },

                        success: function( response ) {

                            if(response.successful == true) {

                                options.jq( that ).parent().prepend('<div class="alert alert-success" role="alert"><strong></strong>Great News, That Microsite ID is Available!</div>');
                                options.jq( that ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Check Availability");

                                console.log( response );
                            } else if( response.successful == false ) { // we have a form error

                                options.jq( that ).parent().prepend('<div class="alert alert-danger" role="alert"><strong>Error, </strong>Sorry That Microsite ID is Not Available</div>');
                                options.jq( that ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Check Availability");

                                console.log( response );
                            }

                            options.jq(that).find('.btn-caption').html('Check Availability');
                         //   options.jq(that).find(".fa-btn-font").removeClass('show').removeClass('fa-spin');

                        }

                    });

                    return false;

                }

            },
            'validateFields': function() {
                var hasErrors = false;
                var email;
                var tab = this.data.container;

                var fields = [
                    { "field_name" : "fd3_form_microsite_id",      "validate" : FORMS.Validate.MicrositeId, "required": true,   "instance" : options.jq("#fd3_form_microsite_id"), "message": "Invalid Microsite Id" },
                    { "field_name" : "fd3_form_password",          "validate" : FORMS.Validate.Password,    "required": true,   "instance" : options.jq("#fd3_form_password"), "message": "Invalid Password" }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];

                    if( required && ! validate.call( this, inst.val() ) ) {
                        options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                        hasErrors = true;
                    }
                }, this);

                if( hasErrors ) {
                    return false;
                }

                return true;
            }
        });        

        setInstance( "AccountInfoModel", AccountInfoModel );

        // Model: PreferencesInfo
        var PreferencesInfoModel = FD3Model.extend({
            
            'data': {},
            'appData': {},            

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.PreferencesInfoData.data;
                this.data.views.preferencesInfo.registerCallback( this, this.eventsFired );
                this.data.views.preferencesInfo.view( this.appData.PreferencesInfoData.data );
                this.data.parent_container = this.appData.PreferencesInfoData.data.parent_container;
                this.data.container = this.appData.PreferencesInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );
                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );
                this.data.parent_container.addClass('show');

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');

            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var controller = new this.data.next_controller();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-preferences-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        controller.index( this.appData );

                        this.data.container.removeClass('show');
                        this.data.container.removeClass('active');
                        jq( this.modelData.tab_link ).removeClass('active');
                        jq( this.modelData.next_tab ).tab('show');

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                    { "field_name" : "fd3_personal_emails_permission_checkbox",      "validate" : FORMS.Validate.isGroupChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_personal_emails_permission_checkbox"), "message": "You must check the User Agreement" },
                    { "field_name" : "fd3_newsletter_emails_permission_checkbox",         "validate" : FORMS.Validate.isGroupChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_newsletter_emails_permission_checkbox"), "message": "You must check the Cancellation Policy " }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];
                    var useObject = field['use_object'];

                    if( useObject && required && ! validate.call( this, inst ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger clear-left" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    } else if( ! useObject && required && ! validate.call( this, inst.val() ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger clear-left" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    }

                }, this);

                if( hasErrors ) {
                    return false;
                }


                console.log( 'info', 'email: ' + email );

                return true;
            }
        });

        // Model: AgreementsInfo
        var AgreementsInfoModel = FD3Model.extend({

            'data': {},
            'appData': {},            

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.AgreementsInfoData.data;
                this.data.views.agreementsInfo.registerCallback( this, this.eventsFired );
                this.data.views.agreementsInfo.view( this.appData.AgreementsInfoData.data );
                this.data.parent_container = this.appData.AgreementsInfoData.data.parent_container;
                this.data.container = this.appData.AgreementsInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );
                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );
                this.data.parent_container.addClass('show');

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var controller = new this.data.next_controller();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-agreements-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        controller.index( this.appData );

                        this.data.container.removeClass('show');
                        this.data.container.removeClass('active');
                        jq( this.modelData.tab_link ).removeClass('active');
                        jq( this.modelData.next_tab ).tab('show');

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                    { "field_name" : "fd3_user_agreement_checkbox",      "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_user_agreement_checkbox"), "message": "You must check the User Agreement" },
                    { "field_name" : "fd3_spam_agreement_checkbox",          "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_spam_agreement_checkbox"), "message": "You must check the CAN-SPAM Compliance Agreement" },
                    { "field_name" : "fd3_cancel_policy_agreement_checkbox",          "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_cancel_policy_agreement_checkbox"), "message": "You must check the Cancellation Policy " }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];
                    var useObject = field['use_object'];

                    if( useObject && required && ! validate.call( this, inst ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger clear-left" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    } else if( ! useObject && required && ! validate.call( this, inst.val() ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger clear-left" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    }

                }, this);

                if( hasErrors ) {
                    return false;
                }


                console.log( 'info', 'email: ' + email );

                return true;
            }
        });

        // Model: AMPBillingInfo - AQ2E Marketing Platform Billing Model
        var AMPBillingInfoModel = FD3Model.extend({

            'data': {},
            'subtotal': 0.00,
            'total': 0.00,
            'items': [],            

            'appData': {}, 

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.BillingInfoData.data;
                this.data.views.billingInfo.registerCallback( this, this.eventsFired );
                this.data.views.billingInfo.view( this.appData.BillingInfoData.data );
                this.data.parent_container = this.appData.BillingInfoData.data.parent_container;
                this.data.container = this.appData.BillingInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );
                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');

                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var billingInfo = new AMPBillingInfoController();
                var invoiceInfo = new InvoiceInfoController();
                var tab = this.data.container;
                var that = this;
                var currentInstance = jq( currentTarget );

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'link-to-subscribe' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                            event.preventDefault( this.appData );
                                
                            var data = jq( my_AMP_Ajax.formQuery ).serialize();
                            var promoCode =  jq( "#fd3_form_promocode" ).data("promocode");
                            data = data + '&fd3_form_promocode=' + promoCode;
                            var dataObject = fd3_objectify( data );

                            dataObject[ 'action' ] = my_AMP_Ajax.action;
                            dataObject[ my_AMP_Ajax.formid ] = my_AMP_Ajax.formid;
                            dataObject[ 'nonce' ] = my_AMP_Ajax.nonce;
                        
                            var hasErrors = false;
                            
                            var fields = [

                                { "field_name" : "fd3_form_promocode",         "validate" : FORMS.Validate.Promocode,    "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_promocode")  },
                                { "field_name" : "fd3_form_address1",          "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_address1"), "message": "Invalid Address." },
                                { "field_name" : "fd3_form_address2",          "validate" : FORMS.Validate.FullName,     "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_address2") },
                                { "field_name" : "fd3_form_city",              "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_city"), "message": "Invalid City is required." },
                                { "field_name" : "fd3_form_state",             "validate" : FORMS.Validate.selectedIndex,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_state"), "message": "State is required." },
                                { "field_name" : "fd3_form_zipcode",           "validate" : FORMS.Validate.Zipcode,      "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_zipcode"), "message": "Invalid Zipcode."  },
                                { "field_name" : "fd3_form_cc_cardholdername", "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardholdername"), "message": "Invalid Card Holder Name." },
                                { "field_name" : "fd3_form_cc_cardno",         "validate" : FORMS.Validate.CreditCard_V2,   "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardno"), "message": "Invalid Card." },
                                { "field_name" : "fd3_form_cc_expdate",        "validate" : FORMS.Validate.ExpirationDate, "required": true, "use_object": true,  "instance" : options.jq("#fd3_form_cc_expdate"), "message": "Invalid Expiration Date." },

                            ];

                            jq( '.alert' ).remove();

                            fields.forEach(function(field) {

                                var name = field['field_name'];
                                var validate = field['validate'];
                                var inst = field['instance'];
                                var required = field['required'];
                                var msg = field['message'];
                                var useObject = field['use_object'];
                        
                                if( name == "fd3_form_cc_cardno" ) {
                            
                                    var cardNum = inst.val();
                                    var ccv2 = { "field_name" : "fd3_form_cc_cvv2", "validate" : FORMS.Validate.CVV3_V2, "required": true,  "use_object": true, "instance" : options.jq("#fd3_form_cc_cvv2"), "message": "Invalid Security Code." };
                                    var ccv2Num = ccv2.instance.val();
                        
                                    if( ! validate.call( this, cardNum ) ) {
                                            options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                                            hasErrors = true;
                                    }
                        
                                    if( ! ccv2.validate.call( this, cardNum, ccv2Num ) ) {
                                            options.jq( ccv2.instance ).parent().prepend('<div class="alert alert-danger" role="alert">' + ccv2.message + '</div>');
                                            hasErrors = true;
                                    }
                            
                                } else {
                            
                                    if ( useObject && required && !validate.call( this, inst ) ) {
                                            options.jq( inst ).parent().prepend( '<div class="alert alert-danger" role="alert">' + msg + '</div>' );
                                            hasErrors = true;
                                    }
                                    else if ( !useObject && required && !validate.call( this, inst.val() ) ) {
                                            options.jq( inst ).parent().prepend( '<div class="alert alert-danger" role="alert">' + msg + '</div>' );
                                            hasErrors = true;
                                    }
                            
                                }
                            
                            }, this);
                  
                            if( hasErrors ) {
                                return true;
                            }

                            setTimeout( function() {

                                currentInstance.find('.btn-caption').html('Signing up...');
                                currentInstance.find(".fa-btn-font").addClass('show').addClass('fa-spin');

                                jq.ajax( {

                                    url: my_AMP_Ajax.url,
                                    type: my_AMP_Ajax.formType,
                                    dataType : my_AMP_Ajax.dataType,
                                    data: dataObject,
                                    cache: my_AMP_Ajax.useCache,

                                    error: function( response ) {
                                        console.log( response );
                                    },

                                    success: function( response ) {

                                        if(response.successful == true) {

                                            jq( my_AMP_Ajax.formButtonQuery ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Sign Up");

                                            jq( '.fd3-panel' ).find( '.title-text' ).remove();

                                            jq('#register_form').remove();
                                            jq('.amp-thankyou-container').addClass('show');

                                        } 
                                        else if( response.successful == false ) { // we have a form error
                                            jq('#signup-modal').modal('hide');                            
                                        }

                                    }

                                });

                            }, 1000);


                            return false;


                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },
            'addItem': function( desc, qty, cost ) {
                this.items.push( { "desc": desc, "qty": qty, "cost": cost, "total": qty * cost } );
                this.calc();
            },
            'empty': function() {
                this.items = [];
            },
            'removeItem': function( pos ) {
                var index = this.items.indexOf( pos );
                if( index > -1 ) {
                    this.items.splice( index, 1 );
                }
                this.calc();
            },                            
            'getItems': function() {
                return this.items;
            },
            'calc': function() {
                this.subtotal = this.total = 0.00;
                for( var i=0; i < this.items.length; i++ ) {
                    this.subtotal = this.subtotal + this.items[ i ].total;
                }
                this.total = this.subtotal;
            },
            'getSubTotal': function() {
                
                if( typeof this.subtotal == "string" ) {
                    this.subtotal = parseFloat( this.subtotal );
                }

                this.subtotal = this.subtotal.toFixed(2).replace(/./g, function(c, i, a) {
                    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
                });                             

                return this.subtotal;
            },
            'getTotal': function() {
                return this.getSubTotal();
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                    { "field_name" : "fd3_user_agreement_checkbox",      "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_user_agreement_checkbox"), "message": "You must check the User Agreement" },
                    { "field_name" : "fd3_spam_agreement_checkbox",          "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_spam_agreement_checkbox"), "message": "You must check the CAN-SPAM Compliance Agreement" },
                    { "field_name" : "fd3_cancel_policy_agreement_checkbox",          "validate" : FORMS.Validate.isChecked, "required": true,  "use_object": true, "instance" : options.jq("#fd3_cancel_policy_agreement_checkbox"), "message": "You must check the Cancellation Policy " }
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];
                    var useObject = field['use_object'];

                    if( useObject && required && ! validate.call( this, inst ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    } else if( ! useObject && required && ! validate.call( this, inst.val() ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger " role="alert">' + msg + '</div>');
                      hasErrors = true;
                    }

                }, this);

                if( hasErrors ) {
                    return false;
                }

                console.log( 'info', 'email: ' + email );

                return true;
            }
        });

        // Model: APBillingInfo - AQ2E Platform Billing Model
        var APBillingInfoModel = FD3Model.extend({

            'data': {},
            'subtotal': 0.00,
            'total': 0.00,
            'items': [],            

            'appData': {}, 

            'loadPage': function( appData ) {
                this.appData = appData;
                this.modelData = this.appData.BillingInfoData.data;
                this.data.views.billingInfo.registerCallback( this, this.eventsFired );
                this.data.views.billingInfo.view( this.appData.BillingInfoData.data );
                this.data.parent_container = this.appData.BillingInfoData.data.parent_container;
                this.data.container = this.appData.BillingInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );
                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );

                jq( this.modelData.tab_link ).addClass('active');
                jq( this.modelData.tab ).addClass('active');

                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var billingInfo = new APBillingInfoController();
                var invoiceInfo = new InvoiceInfoController();
                var tab = this.data.container;
                var that = this;
                var currentInstance = jq( currentTarget );

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'link-to-subscribe' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                            event.preventDefault( this.appData );
                                
                            var data = jq( my_AP_Ajax.formQuery ).serialize();
                            var promoCode =  jq( "#fd3_form_promocode" ).data("promocode");
                            data = data + '&fd3_form_promocode=' + promoCode;
                            var dataObject = fd3_objectify( data );

                            dataObject[ 'action' ] = my_AP_Ajax.action;
                            dataObject[ my_AP_Ajax.formid ] = my_AP_Ajax.formid;
                            dataObject[ 'nonce' ] = my_AP_Ajax.nonce;
                        
                            var hasErrors = false;
                            
                            var fields = [

                                { "field_name" : "fd3_form_promocode",         "validate" : FORMS.Validate.Promocode,    "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_promocode")  },
                                { "field_name" : "fd3_form_address1",          "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_address1"), "message": "Invalid Address." },
                                { "field_name" : "fd3_form_address2",          "validate" : FORMS.Validate.FullName,     "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_address2") },
                                { "field_name" : "fd3_form_city",              "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_city"), "message": "Invalid City is required." },
                                { "field_name" : "fd3_form_state",             "validate" : FORMS.Validate.selectedIndex,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_state"), "message": "State is required." },
                                { "field_name" : "fd3_form_zipcode",           "validate" : FORMS.Validate.Zipcode,      "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_zipcode"), "message": "Invalid Zipcode."  },
                                { "field_name" : "fd3_form_cc_cardholdername", "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardholdername"), "message": "Invalid Card Holder Name." },
                                { "field_name" : "fd3_form_cc_cardno",         "validate" : FORMS.Validate.CreditCard_V2,   "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardno"), "message": "Invalid Card." },
                                { "field_name" : "fd3_form_cc_expdate",        "validate" : FORMS.Validate.ExpirationDate, "required": true, "use_object": true,  "instance" : options.jq("#fd3_form_cc_expdate"), "message": "Invalid Expiration Date." },

                            ];

                            jq( '.alert' ).remove();

                            fields.forEach(function(field) {

                                var name = field['field_name'];
                                var validate = field['validate'];
                                var inst = field['instance'];
                                var required = field['required'];
                                var msg = field['message'];
                                var useObject = field['use_object'];
                        
                                if( name == "fd3_form_cc_cardno" ) {
                            
                                    var cardNum = inst.val();
                                    var ccv2 = { "field_name" : "fd3_form_cc_cvv2", "validate" : FORMS.Validate.CVV3_V2, "required": true,  "use_object": true, "instance" : options.jq("#fd3_form_cc_cvv2"), "message": "Invalid Security Code." };
                                    var ccv2Num = ccv2.instance.val();
                        
                                    if( ! validate.call( this, cardNum ) ) {
                                            options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                                            hasErrors = true;
                                    }
                        
                                    if( ! ccv2.validate.call( this, cardNum, ccv2Num ) ) {
                                            options.jq( ccv2.instance ).parent().prepend('<div class="alert alert-danger" role="alert">' + ccv2.message + '</div>');
                                            hasErrors = true;
                                    }
                            
                                } else {
                            
                                    if ( useObject && required && !validate.call( this, inst ) ) {
                                            options.jq( inst ).parent().prepend( '<div class="alert alert-danger" role="alert">' + msg + '</div>' );
                                            hasErrors = true;
                                    }
                                    else if ( !useObject && required && !validate.call( this, inst.val() ) ) {
                                            options.jq( inst ).parent().prepend( '<div class="alert alert-danger" role="alert">' + msg + '</div>' );
                                            hasErrors = true;
                                    }
                            
                                }
                            
                            }, this);
                  
                            if( hasErrors ) {
                                return true;
                            }

                            setTimeout( function() {

                                currentInstance.find('.btn-caption').html('Signing up...');
                                currentInstance.find(".fa-btn-font").addClass('show').addClass('fa-spin');

                                jq.ajax( {

                                    url: my_AP_Ajax.url,
                                    type: my_AP_Ajax.formType,
                                    dataType : my_AP_Ajax.dataType,
                                    data: dataObject,
                                    cache: my_AP_Ajax.useCache,

                                    error: function( response ) {
                                        console.log( response );
                                    },

                                    success: function( response ) {

                                        if(response.successful == true) {

                                            jq( my_AP_Ajax.formButtonQuery ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Sign Up");

                                            jq( '.fd3-panel' ).find( '.title-text' ).remove();

                                            jq('#register_form').remove();
                                            jq('.ap-thankyou-container').addClass('show');

                                        } 
                                        else if( response.successful == false ) { // we have a form error
                                            jq('#signup-modal').modal('hide');                            
                                        }

                                    }

                                });

                            }, 1000);


                            return false;


                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },
            'addItem': function( desc, qty, cost ) {
                this.items.push( { "desc": desc, "qty": qty, "cost": cost, "total": qty * cost } );
                this.calc();
            },
            'empty': function() {
                this.items = [];
            },
            'removeItem': function( pos ) {
                var index = this.items.indexOf( pos );
                if( index > -1 ) {
                    this.items.splice( index, 1 );
                }
                this.calc();
            },                            
            'getItems': function() {
                return this.items;
            },
            'calc': function() {
                this.subtotal = this.total = 0.00;
                for( var i=0; i < this.items.length; i++ ) {
                    this.subtotal = this.subtotal + this.items[ i ].total;
                }
                this.total = this.subtotal;
            },
            'getSubTotal': function() {

                if( typeof this.subtotal == "string" ) {
                    this.subtotal = parseFloat( this.subtotal );
                }

                this.subtotal = this.subtotal.toFixed(2).replace(/./g, function(c, i, a) {
                    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
                });                             

                return this.subtotal;
            },
            'getTotal': function() {
                return this.getSubTotal();
            },
            'validateFields': function() {
                var hasErrors = false;
                var email;

                var fields = [
                ];  
                
                options.jq( '.alert' ).remove();

                fields.forEach(function(field) {
                    var name = field['field_name'];
                    var validate = field['validate'];
                    var inst = field['instance'];
                    var required = field['required'];
                    var msg = field['message'];
                    var useObject = field['use_object'];

                    if( useObject && required && ! validate.call( this, inst ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger" role="alert">' + msg + '</div>');
                      hasErrors = true;
                    } else if( ! useObject && required && ! validate.call( this, inst.val() ) ) {
                      options.jq( inst ).parent().prepend('<div class="alert alert-danger " role="alert">' + msg + '</div>');
                      hasErrors = true;
                    }

                }, this);

                if( hasErrors ) {
                    return false;
                }

                console.log( 'info', 'email: ' + email );

                return true;
            }
        });

        // Model: InvoiceInfo
        var InvoiceInfoModel = FD3Model.extend({

            'data': {},
            'appData': {}, 

            'loadPage': function( appData ) {
                this.appData = appData;
                this.data.views.invoiceInfo.registerCallback( this, this.eventsFired );
                var InvoiceDataAndBillingData = this.appData.InvoiceInfoData;
                InvoiceDataAndBillingData.data.billingData = this.data.billingData;
                InvoiceDataAndBillingData.data.billing = this.data.billing;
                InvoiceDataAndBillingData.data.items = this.data.billing.getItems();
                this.data.views.invoiceInfo.view( InvoiceDataAndBillingData.data );
                this.data.parent_container = this.appData.InvoiceInfoData.data.parent_container;
                this.data.container = this.appData.InvoiceInfoData.data.container;
                this.data.container = this.data.container instanceof jq ? this.data.container : jq( this.data.container );
                this.data.parent_container = this.data.parent_container instanceof jq ? this.data.parent_container : jq( this.data.parent_container );
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-agreements-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        billingInfo.index( this.appData );

                        // options.jq( this.appData.ContactInfoData.data.tab ).tab('hide');
                        options.jq( this.appData.ContactInfoData.data.next_tab ).tab('show');

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },

        });

        setInstance( "InvoiceInfoModel", InvoiceInfoModel );    

        // Model: SignAQ2EMarketing
        var SignAQ2EMarketingModel = FD3Model.extend({
            'controllers': {},
            'views': {},
            'loadPage': function() {
                this.views.signUpView.registerCallback( this, this.eventsFired );
                this.views.signUpView.view( this.contents.data );
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;

                if( id == 'sign-up-fd3-contact-btn' ) {
                    console.log( "info", id + ' was clicked' );
                } 
            }
        });

        setInstance( "SignAQ2EMarketingModel", SignAQ2EMarketingModel );

        // ---------------------- Controllers ----------------------

        // Controller: SignUpChoice
        var SignUpChoiceController = FD3Controller.extend({
            'index': function() {

                var signUpChoiceModel = new SignUpChoiceModel();

                signUpChoiceModel.init({
                    'contents': SignUpChoiceData,
                    'controllers': { 'contactInfo': new ContactInfoController() },
                    'views': { 'signUp': new SignUpChoiceView() }
                });

                signUpChoiceModel.loadPage();
            } 
        });

        setInstance( "SignUpChoiceController", SignUpChoiceController );

        // Controller: ContactInfo
        var ContactInfoController = FD3Controller.extend({
            'index': function( data ) {

                var contactInfo = new ContactInfoModel();
                contactInfo.init({
                    'contents': data.ContactInfoData,
                    'views': { 'contactInfo': new ContactInfoView() },
                    'next_controller': eval(data.ContactInfoData.data.next_controller)
                });

                contactInfo.loadPage( data );
            } 
        }); 

        setInstance( "ContactInfoController", ContactInfoController );        

        // Controller: AccountInfo
        var AccountInfoController = FD3Controller.extend({
            'index': function( data ) {

                var accountInfo = new AccountInfoModel();
                accountInfo.init({
                    'contents': data.AccountInfoData,
                    'views': { 'accountInfo': new AccountInfoView() },
                    'next_controller': eval(data.AccountInfoData.data.next_controller)
                });

                accountInfo.loadPage( data );
            } 
        });  

        setInstance( "AccountInfoController", AccountInfoController );  

        // Controller: PreferencesInfo
        var PreferencesInfoController = FD3Controller.extend({
            'index': function( data ) {

                var preferencesInfo = new PreferencesInfoModel();
                preferencesInfo.init({
                    'contents': data.PreferencesInfoData,
                    'views': { 'preferencesInfo': new PreferencesInfoView() },
                    'next_controller': eval(data.PreferencesInfoData.data.next_controller)
                });

                preferencesInfo.loadPage( data );
            } 
        }); 

        setInstance( "PreferencesInfoController", PreferencesInfoController );  

        // Controller: AgreementsInfo
        var AgreementsInfoController = FD3Controller.extend({
            'index': function( data ) {

                var agreementsInfo = new AgreementsInfoModel();
                agreementsInfo.init({
                    'contents': data.AgreementsInfoData,
                    'views': { 'agreementsInfo': new AgreementsInfoView() },
                    'next_controller': eval(data.AgreementsInfoData.data.next_controller)
                });

                agreementsInfo.loadPage( data );
            } 
        });  

        setInstance( "AgreementsInfoController", AgreementsInfoController ); 

        // Controller: AMPBillingInfo
        var AMPBillingInfoController = FD3Controller.extend({
            'index': function( data ) {

                var invoiceInfoView = new InvoiceInfoView();

                var billingInfo = new AMPBillingInfoModel();
                billingInfo.init({
                    'contents': data.BillingInfoData,
                    'views': { 'billingInfo': new BillingInfoView() }
                });

                var invoiceInfo = new InvoiceInfoModel();
                invoiceInfo.init({
                    'contents': data.InvoiceInfoData,
                    'views': { 'invoiceInfo': invoiceInfoView },
                    'billing': billingInfo,
                    'billingData': data.BillingInfoData
                });                

                var promoInfo = new AMPPromoInfoModel();
                promoInfo.init({
                    'contents': AMPPromoInfoModel,
                    'views': { 
                        'promoInfo': new AMPPromoInfoView(),
                        'invoiceInfo': invoiceInfoView
                    },
                }); 

                billingInfo.addItem( 'AQ2E Marketing Platform', 1, 99.00 );
                billingInfo.addItem( 'AQ2E Platform (Included)', 1, 0.00 );

                billingInfo.loadPage( data );
                invoiceInfo.loadPage( data );
                promoInfo.loadPage( data );
            } 
        });


        // Controller: APBillingInfo
        var APBillingInfoController = FD3Controller.extend({
            'index': function( data ) {

                var invoiceInfoView = new InvoiceInfoView();

                var billingInfo = new APBillingInfoModel();
                billingInfo.init({
                    'contents': data.BillingInfoData,
                    'views': { 'billingInfo': new BillingInfoView() }
                });

                var invoiceInfo = new InvoiceInfoModel();
                invoiceInfo.init({
                    'contents': data.InvoiceInfoData,
                    'views': { 'invoiceInfo': invoiceInfoView },
                    'billing': billingInfo,
                    'billingData': data.BillingInfoData
                });                

                var promoInfo = new APPromoInfoModel();
                promoInfo.init({
                    'contents': APPromoInfoModel,
                    'views': { 
                        'promoInfo': new APPromoInfoView(),
                        'invoiceInfo': invoiceInfoView
                    },
                }); 

                billingInfo.addItem( 'AQ2E Platform', 1, 30.00 );
                billingInfo.addItem( 'AQ2E Facebook App', 1, 10.00 );
                billingInfo.addItem( 'AQ2E Facebook App Limited Time Discount', 1, -10.00 );
                billingInfo.addItem( 'Applied Affiliate Discount<br/><strong>(Applied Promocode: AQ2ELIFE)</strong>', 1, -10.00 );

/*                this.data.views.invoiceInfo.applyPromos([
                    {'desc':'AQ2E Facebook App Limited Time Discount', 'cost':-10, 'qty': 1 },
                    {'desc':'Applied Affiliate Discount - PROMO CODE: AQ2ELIFE', 'cost':-10, 'qty': 1 }
                ]);   */             

                billingInfo.loadPage( data );
                invoiceInfo.loadPage( data );
                promoInfo.loadPage( data );
            } 
        });

        // Controller: InvoiceInfo
        var InvoiceInfoController = FD3Controller.extend({
            'index': function( data ) {

                var invoiceInfo = new InvoiceInfoModel();
                invoiceInfo.init({
                    'contents': data.InvoiceInfoData,
                    'views': { 'invoiceInfo': new InvoiceInfoView() }
                });

                invoiceInfo.loadPage( data );
            } 
        });  

        setInstance( "InvoiceInfoController", InvoiceInfoController ); 

        // Controller: SignUpAQ2EMarketing
        var SignUpAQ2EMarketingController = FD3Controller.extend({
            'index': function() {
                this.data.models.signUp.loadPage();
            } 
        }); 

        // ---------------------- Data ----------------------

        var SignUpChoiceData = {

            'data': {

                'container': jq('#signup-choice-container'),
                'title': '',
                'items': [

                    { "element": "div", "state": "signup-choice", "props": { "class": "row" }, "has_children": true, "children": [
                        { "element": "div", "props": { "class": "col-md-6" }, "has_children": true, "children": [

                            { "element": "div", "props": { "id":"product-one-container", "class": "signup-product product-one-container" }, "has_children": true, "children": [

                                { "element": "div", "props": { "class": "fd3-image-container center-content" }, "has_children": true, "children": [
                                    { "element": "img", "props": { "class": "signup-image", "src": "/wp-content/plugins/fd3-dynamic-pages/assets/images/page_templates/signup/aq2e-platform-signup-box.png" }, "has_children": false  }
                                ]},

                                { "element": "div", "props": { "class": "fd3-product-desc-container" }, "has_children": true, "children": [
                                    { "element": "span", "contents":"Sign me up for the AQ2E Quote Engine Platform for only $20/month", "props": { "class": "fd3-product-desc" }, "has_children": false  }
                                ]}

                            ]}                           

                        ]},

                        { "element": "div", "props": { "class": "col-md-6" }, "has_children": true, "children": [

                            { "element": "div", "props": { "id":"product-two-container", "class": "signup-product product-two-container" }, "has_children": true, "children": [

                                { "element": "div", "props": { "class": "fd3-image-container center-content" }, "has_children": true, "children": [
                                    { "element": "img", "props": { "class": "signup-image", "src": "/wp-content/plugins/fd3-dynamic-pages/assets/images/page_templates/signup/aq2e-marketing-platform-signup-box.png" }, "has_children": false  }
                                ]},

                                { "element": "div", "props": { "class": "fd3-product-desc-container" }, "has_children": true, "children": [
                                    { "element": "span", "contents":"Yes, sign me up the complete AQ2E Marketing Platform which includes the AQ2E Quote Engine Platform for only $79/month.", "props": { "class": "fd3-product-desc" }, "has_children": false  }
                                ]}   

                            ]}                        
                        ]}

                    ]}
                ]

            }
        };

        // ---------------------- Views ----------------------

        // View: SignUpChoice 
        var SignUpChoiceView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on('click', '.signup-product', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });

        setInstance( "SignUpChoiceView", SignUpChoiceView ); 

        // View: ContactInfo 
        var ContactInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on('click', '#sign-up-fd3-contact-btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });  

        setInstance( "ContactInfoView", ContactInfoView ); 

        // View: AccountInfo 
        var AccountInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on( 'input', '#fd3_form_password', function ( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });

                options.jq( "body" ).on('click', '#fd3_form_validate_microsite_btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });

                options.jq( "body" ).on('click', '#new-sign-up-fd3-account-btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });               
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });          

        setInstance( "AccountInfoView", AccountInfoView ); 

        // View: AccountInfo 
        var AccountInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on( 'input', '#fd3_form_password', function ( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });

                options.jq( "body" ).on('click', '#fd3_form_validate_microsite_btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });

                options.jq( "body" ).on('click', '#new-sign-up-fd3-account-btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });  

        setInstance( "AccountInfoView", AccountInfoView ); 

        // View: PreferencesInfo
        var PreferencesInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on('click', '#new-sign-up-fd3-preferences-btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        }); 

        setInstance( "PreferencesInfoView", PreferencesInfoView ); 

        // View: AgreementsInfo
        var AgreementsInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                options.jq( "body" ).on('click', '#new-sign-up-fd3-agreements-btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });         

        setInstance( "AgreementsInfoView", AgreementsInfoView ); 

        // View: BillingInfo
        var BillingInfoView = FD3View.extend({
            'callback': {},
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'monitors': function() {
                var that = this;

                jq( "body" ).on('click', '#link-to-subscribe', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });                
            },
            'render': function() {
                // this.data.container.empty();
                // this.renderTitle();
                this.renderStructure();
                this.monitors();
            },
        });       

        setInstance( "BillingInfoView", BillingInfoView );

        // View: InvoiceInfo
        var InvoiceInfoView = FD3View.extend({
            'renderTitle': function() {
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var h = this.renderElement( 'h2', { 'class': 'fd3-form-title' } );

                h.html( this.data.title );
                h.appendTo( d );

                d.appendTo( this.data.container );
            },
            'renderTable': function() {

                var t = this.renderElement( 'table', { 'class': 'table table-bordered' } );
                var tb = this.renderElement( 'tbody' );
                var h = this.renderTableHeader();
                
                h.appendTo( t );

                for( var i=0; i < this.items.length; i++ ) {
                    var item = this.renderItem( this.items[ i ] );
                    item.appendTo( tb );
                }

                tb.appendTo( t );
                t.appendTo( this.data.container );

            },
            'renderTableHeader': function() {
                 var th = this.renderElement( 'thead' );
                 var tr = this.renderElement( 'tr' );
                 
                 var td1 = this.renderElement( 'th', { 'class': 'head', 'style': 'border:none' } );
                 var td2 = this.renderElement( 'th', { 'class': 'head', 'style': 'border:none' } );
                 var td3 = this.renderElement( 'th', { 'class': 'head', 'style': 'border:none' } );
                 var td4 = this.renderElement( 'th', { 'class': 'head', 'style': 'border:none' } );

                 td1.html( 'Description' );
                 td2.html( 'Qty' );
                 td3.html( 'Cost' );
                 td4.html( 'Total' );

                 td1.appendTo( tr );
                 td2.appendTo( tr );
                 td3.appendTo( tr );
                 td4.appendTo( tr );

                 tr.appendTo( th );

                 return th;
            },             
            'renderColumn': function( v, a ) {
                var td = this.renderElement( 'td', a );
                td.html( v );
                
                return td;
            },
            'renderSubtotal': function() {

                var d = this.renderElement( 'div', { 'class': 'invoice-total-container' } );
                var sp1 = this.renderElement( 'span', { 'class': 'border-none col' } );
                var s = this.renderElement( 'strong' );
                var sp2 = this.renderElement( 'span', { 'class': 'border-none col' } );

                s.html( 'Sub Total: ' );
                s.appendTo( sp1 );
                sp1.appendTo( d );

                sp2.html( '&dollar;' + this.data.billing.getSubTotal() );
                sp2.appendTo( d );

                if( typeof this.data.container === 'string' ) {
                    this.container = jq(this.data.container);
                } else {
                    this.container = this.data.container;
                }

                d.appendTo( this.container );
                
            },
            'renderStructure': function() {
                this.container = jq(this.data.container);
                this.renderItems( this.container, this.data.items );
            },            
            'renderTotal': function() {

                var d = this.renderElement( 'div', { 'class': 'invoice-total-container' } );
                var sp1 = this.renderElement( 'span', { 'class': 'border-none col' } );
                var s = this.renderElement( 'strong' );
                var sp2 = this.renderElement( 'span', { 'class': 'border-none col' } );

                s.html( 'Total: ' );
                s.appendTo( sp1 );
                sp1.appendTo( d );

                sp2.html( '&dollar;' + this.data.billing.getTotal() );
                sp2.appendTo( d );

                if( typeof this.data.container === 'string' ) {
                    this.container = jq(this.data.container);
                } else {
                    this.container = this.data.container;
                }

                d.appendTo( this.container );
            },
            'moneyFormat': function( m ) {

                m = m.toFixed(2).replace(/./g, function(c, i, a) {
                    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
                }); 

                return m;
            },    
            'renderItem': function( i ) {
                 var tr = this.renderElement( 'tr' );
                 var tmpCol = '';

                 tmpCol = this.renderColumn( i.desc, { "class":"col" } );
                 tmpCol.appendTo( tr );

                 tmpCol = this.renderColumn( i.qty, { "class":"col" } );
                 tmpCol.appendTo( tr );

                 tmpCol = this.renderColumn( '&dollar;'+ this.moneyFormat( i.cost ), { "class":"col" } );
                 tmpCol.appendTo( tr );

                 tmpCol = this.renderColumn( '&dollar;'+ this.moneyFormat( i.total ), { "class":"col" } );
                 tmpCol.appendTo( tr );

                 return tr;
            },     
            'applyPromo': function( data ) {

                if( typeof data === 'object' ) {
                    data.total = data.qty * data.cost;
                    this.data.billing.addItem( data.desc, data.qty, data.cost );
                    this.items = this.data.billing.getItems();
                }

                if( typeof this.data.container === 'string' ) {
                    this.container = jq(this.data.container);
                } else {
                    this.container = this.data.container;
                }
                this.container.empty();
                this.render();
            }, 
            'applyPromos': function( dataArr ) {

                for(var i=0; i < dataArr.length; i++) {

                    if( typeof dataArr[i] === 'object' ) {
                        dataArr[i].total = dataArr[i].qty * dataArr[i].cost;
                        this.data.billing.addItem( data.desc, data.qty, data.cost );
                        this.items = this.data.billing.getItems();
                    }

                }

                if( typeof this.data.container === 'string' ) {
                    this.container = jq(this.data.container);
                } else {
                    this.container = this.data.container;
                }

                this.container.empty();
                this.render();
            },                                  

            'monitors': function() {
                /*                
                    options.jq( "body" ).on('click', '#new-sign-up-fd3-agreements-btn', function( e ) {
                        that.callback.cb.call( that.callback.inst, e );
                    });
                */
            },
            'render': function() {
                // this.data.container.empty();

                if( typeof this.data.billingData != 'undefined' ) {
                    this.items = this.data.billing.getItems();
                }

                this.renderTitle();
                this.renderTable();
                this.renderSubtotal();
                this.renderTotal();
                this.monitors();
            },
        }); 

        setInstance( "InvoiceInfoView", InvoiceInfoView );

        // View: PromoInfo
        var AMPPromoInfoView = FD3View.extend({

            'renderElement': function( name, o ) {
                var tag = '<' + name + '/>';
                if( typeof o != 'undefined' ) {
                    var el = jq( tag, o );
                }
                else {
                    var el = jq( tag );
                }

                return el;
            },
            'renderInput': function( o ) {
                var d = this.renderElement( 'input', o );
                return d;                                
            },
            'renderButton': function( txt ) {

                var b = this.renderElement( 
                    'button', { 
                        'type': 'button', 
                        'id': 'fd3_form_apply_promo_btn',
                        'class': 'fd3-form-control input-lg btn btn-success',
                        'name': 'fd3_form_apply_promo_btn',
                        'state': 'billing_info',
                        'value': txt
                    } 
                );

                var i = this.renderElement( 
                    'i', { 
                        'class': 'fa fa-cog fa-btn-font',
                        'aria-hidden': 'true'
                    } 
                );

                var s = this.renderElement( 
                    'span', { 
                        'class': 'btn-caption',
                        'aria-hidden': 'true'
                    } 
                );  

                s.html( txt );
                i.appendTo( b );
                s.appendTo( b );                               

                return b;

            },
            'renderPromo': function( $promocode = '' ) {

                var container = jq(this.data.container);
                
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var l = this.renderElement( 'label', { 'for': 'fd3_form_promocode', 'id': 'fd3_form_promocode_label', 'data-original': 'PROMO CODE' } );
                var i = this.renderInput( { 'type': 'text', 'class': 'fd3-form-control input-lg', 'id': 'fd3_form_promocode', 'class': 'fd3-form-control input-lg', 'name': 'fd3_form_promocode', 'state': 'billing_info', 'form_group': 'promocode_id', 'placeholder': 'Promo Code', 'value': $promocode } );
                var b = this.renderButton( 'Apply Promocode' );

                l.appendTo( d );
                i.appendTo( d );
                b.appendTo( d );                

                d.appendTo( container );

            },  
            'monitors': function() {
                var that = this;

                jq( "body" ).on('click', '#fd3_form_apply_promo_btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                // this.renderTitle();
                this.renderPromo();
                this.monitors();
            },
        }); 

        // View: PromoInfo
        var APPromoInfoView = FD3View.extend({

            'renderElement': function( name, o ) {
                var tag = '<' + name + '/>';
                if( typeof o != 'undefined' ) {
                    var el = jq( tag, o );
                }
                else {
                    var el = jq( tag );
                }

                return el;
            },
            'renderInput': function( o ) {
                var d = this.renderElement( 'input', o );
                return d;                                
            },
            'renderButton': function( txt ) {

                var b = this.renderElement( 
                    'button', { 
                        'type': 'button', 
                        'id': 'fd3_form_apply_promo_btn',
                        'class': 'fd3-form-control input-lg btn btn-success',
                        'name': 'fd3_form_apply_promo_btn',
                        'state': 'billing_info',
                        'value': txt
                    } 
                );

                var i = this.renderElement( 
                    'i', { 
                        'class': 'fa fa-cog fa-btn-font',
                        'aria-hidden': 'true'
                    } 
                );

                var s = this.renderElement( 
                    'span', { 
                        'class': 'btn-caption',
                        'aria-hidden': 'true'
                    } 
                );  

                s.html( txt );
                i.appendTo( b );
                s.appendTo( b );                               

                return b;

            },
            'renderPromo': function( $promocode = '' ) {

                var container = jq(this.data.container);
                
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var l = this.renderElement( 'label', { 'for': 'fd3_form_promocode', 'id': 'fd3_form_promocode_label', 'data-original': 'PROMO CODE' } );
                var i = this.renderInput( { 'type': 'text', 'class': 'fd3-form-control input-lg', 'id': 'fd3_form_promocode', 'class': 'fd3-form-control input-lg', 'name': 'fd3_form_promocode', 'state': 'billing_info', 'form_group': 'promocode_id', 'placeholder': 'Promo Code', 'value': $promocode } );
                var b = this.renderButton( 'Apply Promocode' );

                l.appendTo( d );
                i.appendTo( d );
                b.appendTo( d );                

                d.appendTo( container );

            },  
            'monitors': function() {
                var that = this;

                jq( "body" ).on('click', '#fd3_form_apply_promo_btn', function( e ) {
                    that.callback.cb.call( that.callback.inst, e );
                });
            },
            'render': function() {
                // this.data.container.empty();
                // this.renderTitle();
                this.renderPromo( 'AQ2ELIFE' );
                this.monitors();
            },
        }); 

        var signUpChoiceContoller = new SignUpChoiceController();
        signUpChoiceContoller.index();

    });


}( {
  'jq': jq, 'doc':document, 'win': window
}));  