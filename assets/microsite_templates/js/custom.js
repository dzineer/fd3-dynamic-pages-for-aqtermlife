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

    myAjax.strictFlag

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

                    // display tabs
                    jq('#new-sign-up-tab').addClass('show');

                    contactInfo.index();

                } else if( id == 'product-two-container' ) {
                    console.log( "info", id + ' was clicked' );
                    jq('.signup-choice-container').removeClass('show');
                    jq('.popout-header').html('Sign up below:');
                    jq('.product-separator').html('');
                    jq('.product-one-hilite').html('');
                    jq('.product-two-hilite').html('AQ2E Marketing Platform Sign Up');

                    // display tabs
                    jq('#new-sign-up-tab').addClass('show');

                    contactInfo.index();
                }
            }
        });

        // Model: PromoInfoModel
        var PromoInfoModel = FD3Model.extend({

            'data': {},

            'loadPage': function() {
                this.data.views.promoInfo.registerCallback( this, this.eventsFired );
                this.data.views.promoInfo.view( PromoInfoData.data );
                this.data.container = PromoInfoData.data.container;
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
                        var packagedData = { 'action': myAjax.promoAction, "nonce": myAjax.promoNonce,  "process_promo": myAjax.formPromo, "fd3_form_promocode": options.jq( field ).val() };

                        currentInstance.find(".fa-btn-font").addClass('show').addClass('fa-spin');
                        currentInstance.find('.btn-caption').html("Applying Promo Code...");

                        setTimeout( function() {

                            jq.ajax( {

                                url: myAjax.url,
                                type: myAjax.formType,
                                dataType : myAjax.dataType,
                                data: packagedData,
                                cache: myAjax.useCache,

                                error: function( response ) {
                                    console.log( response );
                                },

                                success: function( response ) {

                                    jq(  "#fd3_form_promocode-error" ).remove();

                                    if(response.successful == true) {

                                        jq( "#fd3_form_promocode" ).val( promoCode );
                                        console.log( response.output );

                                        that.data.views.invoiceInfo.applyPromo( response.promo );
                                        that.loadPage();

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

            'loadPage': function() {
                this.data.views.contactInfo.registerCallback( this, this.eventsFired );
                this.data.views.contactInfo.view( ContactInfoData.data );
                this.data.parent_container = ContactInfoData.data.parent_container;
                this.data.container = ContactInfoData.data.container;
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var accountInfo = new AccountInfoController();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'sign-up-fd3-contact-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        accountInfo.index();

                        email = tab.find('#fd3_form_email').val();
                        options.jq('#new-sign-up-account-info-tab').tab('show');
                        options.jq(".amp-new-sign-up-container").find('#fd3_form_account_id').val( email );
                        

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

        // Model: AccountInfo
        var AccountInfoModel = FD3Model.extend({

            'data': {},

            'loadPage': function() {
                this.data.views.accountInfo.registerCallback( this, this.eventsFired );
                this.data.views.accountInfo.view( AccountInfoData.data );
                this.data.container = AccountInfoData.data.container;
                this.data.container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var referencesInfo = new PreferencesInfoController();
                var that = currentTarget;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-account-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        this.data.container.removeClass('show');

                        referencesInfo.index();

                        options.jq('#new-sign-up-preferences-info-tab').tab('show');

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

                // okay now we draw the next tab
                // TODO: Instantiate Account Info Controller
                //       Instantiate Account Info Model

                return true;

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });        

        // Model: PreferencesInfo
        var PreferencesInfoModel = FD3Model.extend({
            
            'data': {},

            'loadPage': function() {
                this.data.views.preferencesInfo.registerCallback( this, this.eventsFired );
                this.data.views.preferencesInfo.view( PreferencesInfoData.data );
                this.data.parent_container = PreferencesInfoData.data.parent_container;
                this.data.container = PreferencesInfoData.data.container;
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var agreementsInfo = new AgreementsInfoController();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-preferences-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        agreementsInfo.index();

                        options.jq('#new-sign-up-agreements-info-tab').tab('show');

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

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });

        // Model: AgreementsInfo
        var AgreementsInfoModel = FD3Model.extend({

            'data': {},

            'loadPage': function() {
                this.data.views.agreementsInfo.registerCallback( this, this.eventsFired );
                this.data.views.agreementsInfo.view( AgreementsInfoData.data );
                this.data.parent_container = AgreementsInfoData.data.parent_container;
                this.data.container = AgreementsInfoData.data.container;
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var billingInfo = new BillingInfoController();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-agreements-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        billingInfo.index();

                        options.jq('#new-sign-up-billing-info-tab').tab('show');

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

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });

        // Model: BillingInfo
        var BillingInfoModel = FD3Model.extend({

            'data': {},
            'subtotal': 0.00,
            'total': 0.00,
            'items': [],            

            'loadPage': function() {
                this.data.views.billingInfo.registerCallback( this, this.eventsFired );
                this.data.views.billingInfo.view( BillingInfoData.data );
                this.data.parent_container = BillingInfoData.data.parent_container;
                this.data.container = BillingInfoData.data.container;
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                var billingInfo = new BillingInfoController();
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
                        
                            event.preventDefault();
                                
                            var data = jq( myAjax.formQuery ).serialize();
                            var promoCode =  jq( "#fd3_form_promocode" ).data("promocode");
                            data = data + '&fd3_form_promocode=' + promoCode;
                            var dataObject = fd3_objectify( data );

                            dataObject[ 'action' ] = myAjax.action;
                            dataObject[ myAjax.formid ] = myAjax.formid;
                            dataObject[ 'nonce' ] = myAjax.nonce;
                        
                            var hasErrors = false;
                            
                            var fields = [

                /*
                              { "field_name" : "fd3_form_company",           "validate" : FORMS.Validate.CompanyName,  "required": false,  "instance" : options.jq("#fd3_form_company"), "message": "" },
                              { "field_name" : "fd3_form_fname",             "validate" : FORMS.Validate.FullName,     "required": true,  "instance" : options.jq("#fd3_form_fname"), "message": "Invalid First Name" },
                              { "field_name" : "fd3_form_lname",             "validate" : FORMS.Validate.FullName,     "required": true,  "instance" : options.jq("#fd3_form_lname"), "message": "Invalid Last Name" },
                              { "field_name" : "fd3_form_email",             "validate" : FORMS.Validate.Email,        "required": true,  "instance" : options.jq("#fd3_form_email"), "message": "Invalid Email Address" },
                              { "field_name" : "fd3_form_phone",             "validate" : FORMS.Validate.PhoneStr,        "required": true,  "instance" : options.jq("#fd3_form_phone"), "message": "Invalid Phone Number" }
                              { "field_name" : "fd3_form_microsite_id",      "validate" : FORMS.Validate.MicrositeId, "required": true,   "instance" : options.jq("#fd3_form_microsite_id"), "message": "Invalid Microsite Id" },
                              { "field_name" : "fd3_form_password",          "validate" : FORMS.Validate.Password,    "required": true,   "instance" : options.jq("#fd3_form_password"), "message": "Invalid Password" }
                */
                              
                                { "field_name" : "fd3_form_promocode",         "validate" : FORMS.Validate.Promocode,    "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_promocode")  },
                                { "field_name" : "fd3_form_address1",          "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_address1"), "message": "Invalid Address." },
                                { "field_name" : "fd3_form_address2",          "validate" : FORMS.Validate.FullName,     "required": false,  "use_object": true,   "instance" : options.jq("#fd3_form_address2") },
                                { "field_name" : "fd3_form_city",              "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_city"), "message": "Invalid City is required." },
                                { "field_name" : "fd3_form_state",             "validate" : FORMS.Validate.selectedIndex,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_state"), "message": "State is required." },
                                { "field_name" : "fd3_form_zipcode",           "validate" : FORMS.Validate.Zipcode,      "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_zipcode"), "message": "Invalid Zipcode."  },
                                { "field_name" : "fd3_form_cc_cardholdername", "validate" : FORMS.Validate.FullName,     "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardholdername"), "message": "Invalid Card Holder Name." },
                                { "field_name" : "fd3_form_cc_cardno",         "validate" : FORMS.Validate.CreditCard_V2,   "required": true,   "use_object": true,   "instance" : options.jq("#fd3_form_cc_cardno"), "message": "Invalid Card." },
                                { "field_name" : "fd3_form_cc_expdate",        "validate" : FORMS.Validate.ExpirationDate, "required": true, "use_object": true,  "instance" : options.jq("#fd3_form_cc_expdate"), "message": "Invalid Expiration Date." },
                /*
                                { "field_name" : "fd3_form_cc_cvv2",           "validate" : FORMS.Validate.CVV3,          "required": true,  "use_object": true, "instance" : options.jq("#fd3_form_cc_cvv2"), "message": "Invalid CVV2." }
                */

                /*
                                { "field_name" : "fd3_form_permission_personal_emails",   "validate" : FORMS.Validate.isGroupChecked,   "required": true,  "use_object": true,   "instance" : options.jq("#fd3_personal_emails_permission_checkbox") },
                                { "field_name" : "fd3_form_permission_newsletter_emails", "validate" : FORMS.Validate.isGroupChecked,   "required": true,  "use_object": true,   "instance" : options.jq("#fd3_newsletter_emails_permission_checkbox") }
                */

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

                                    url: myAjax.url,
                                    type: myAjax.formType,
                                    dataType : myAjax.dataType,
                                    data: dataObject,
                                    cache: myAjax.useCache,

                                    error: function( response ) {
                                        console.log( response );
                                    },

                                    success: function( response ) {

                                        if(response.successful == true) {

                                            jq( myAjax.formButtonQuery ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Sign Up");

                                            jq( '.fd3-panel' ).find( '.title-text' ).remove();

                                            jq('#register_form').remove();
                                            jq('.thankyou-container').addClass('show');

                                            // options.jq( myAjax.formButtonQuery ).attr("disabled", "disabled");

                                           //  options.jq('#marketing-platform-info-tab').tab('show'); // once we have success then show the next step
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
            'getSubtotal': function() {

                this.subtotal = this.subtotal.toFixed(2).replace(/./g, function(c, i, a) {
                    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
                });                             

                return this.subtotal;
            },
            'getTotal': function() {
                this.total = this.total.toFixed(2).replace(/./g, function(c, i, a) {
                    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
                });                             
                return this.total;
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

                // tab.find('#fd3_form_account_id').val( email );
                // options.jq('#new-sign-up-account-info-tab').tab('show');                

            }
        });

        // Model: InvoiceInfo
        var InvoiceInfoModel = FD3Model.extend({

            'data': {},

            'loadPage': function() {
                this.data.views.invoiceInfo.registerCallback( this, this.eventsFired );
                var InvoiceDataAndBillingData = InvoiceInfoData;
                InvoiceDataAndBillingData.data.billingData = this.data.billingData;
                InvoiceDataAndBillingData.data.billing = this.data.billing;
                InvoiceDataAndBillingData.data.items = this.data.billing.getItems();
                this.data.views.invoiceInfo.view( InvoiceDataAndBillingData.data );
                this.data.parent_container = InvoiceInfoData.data.parent_container;
                this.data.container = InvoiceInfoData.data.container;
                this.data.parent_container.addClass('show');
            },
            'eventsFired': function( e ) {
                var currentTarget = e.currentTarget;
                var id = currentTarget.id;
                // var billingInfo = new BillingInfoController();
                var tab = this.data.container;

                e.preventDefault();

                console.log( "info", id + ' was clicked' );

                if( id == 'new-sign-up-fd3-agreements-btn' ) {
                    console.log( "info", id + ' was clicked' );

                    if(this.validateFields()) {
                        console.log( 'info', 'all fields valid.' );
                        
                        billingInfo.index();

                        options.jq('#new-sign-up-billing-info-tab').tab('show');

                    } else {
                        console.log( 'info', 'all fields not valid.' );
                    }

                }
            },

        });

        // Model: SignAQ2EMarketing
        var SignAQ2EMarketingModel = FD3Model.extend({
            'data': ['contact'][ ContactInfoData ],
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

        // Controller: ContactInfo
        var ContactInfoController = FD3Controller.extend({
            'index': function() {

                var contactInfo = new ContactInfoModel();
                contactInfo.init({
                    'contents': ContactInfoData,
                    'views': { 'contactInfo': new ContactInfoView() }
                });

                contactInfo.loadPage();
            } 
        }); 

        // Controller: AccountInfo
        var AccountInfoController = FD3Controller.extend({
            'index': function() {

                var accountInfo = new AccountInfoModel();
                accountInfo.init({
                    'contents': AccountInfoData,
                    'views': { 'accountInfo': new AccountInfoView() }
                });

                accountInfo.loadPage();
            } 
        });  

        // Controller: PreferencesInfo
        var PreferencesInfoController = FD3Controller.extend({
            'index': function() {

                var preferencesInfo = new PreferencesInfoModel();
                preferencesInfo.init({
                    'contents': PreferencesInfoData,
                    'views': { 'preferencesInfo': new PreferencesInfoView() }
                });

                preferencesInfo.loadPage();
            } 
        }); 

        // Controller: AgreementsInfo
        var AgreementsInfoController = FD3Controller.extend({
            'index': function() {

                var agreementsInfo = new AgreementsInfoModel();
                agreementsInfo.init({
                    'contents': AgreementsInfoData,
                    'views': { 'agreementsInfo': new AgreementsInfoView() }
                });

                agreementsInfo.loadPage();
            } 
        });  

        // Controller: BillingInfo
        var BillingInfoController = FD3Controller.extend({
            'index': function() {

                var invoiceInfoView = new InvoiceInfoView();

                var billingInfo = new BillingInfoModel();
                billingInfo.init({
                    'contents': BillingInfoData,
                    'views': { 'billingInfo': new BillingInfoView() }
                });

                var invoiceInfo = new InvoiceInfoModel();
                invoiceInfo.init({
                    'contents': InvoiceInfoData,
                    'views': { 'invoiceInfo': invoiceInfoView },
                    'billing': billingInfo,
                    'billingData': BillingInfoData
                });                

                var promoInfo = new PromoInfoModel();
                promoInfo.init({
                    'contents': PromoInfoModel,
                    'views': { 
                        'promoInfo': new PromoInfoView(),
                        'invoiceInfo': invoiceInfoView
                    },
                }); 

                billingInfo.addItem( 'AQ2E Marketing Platform', 1, 99.00 );
                billingInfo.addItem( 'AQ2E Platform (Included)', 1, 0.00 );

                billingInfo.loadPage();
                invoiceInfo.loadPage();
                promoInfo.loadPage();
            } 
        });

        // Controller: InvoiceInfo
        var InvoiceInfoController = FD3Controller.extend({
            'index': function() {

                var invoiceInfo = new InvoiceInfoModel();
                invoiceInfo.init({
                    'contents': InvoiceInfoData,
                    'views': { 'invoiceInfo': new InvoiceInfoView() }
                });

                invoiceInfo.loadPage();
            } 
        });  
/*
        // Controller: PromoInfo
        var PromoInfoController = FD3Controller.extend({
            'index': function() {

                var promoInfo = new PromoInfoModel();
                promoInfo.init({
                    'contents': PromoInfoData,
                    'controller': this,
                    'views': { 
                        'promoInfo': new PromoInfoView()
                    }
                });

                promoInfo.loadPage();
            }            
        });*/ 

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

        var ContactInfoData = {

            'data': {

                'parent_container': jq('.amp-new-sign-up-container'),
                'container': jq('#new-sign-up-contact-info'),
                'title': 'Contact Info',
                'items': [

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"Company", "props": { "class": "", "id": "fd3_form_company_label", "for": "fd3_form_company" }, "has_children": false },
                        { "element": "input", "type": "text",   "state": "contact-info",      "validate" : FORMS.Validate.CompanyName,    "props": { "type": "text", "name" : "fd3_form_company", "class": "fd3-form-control input-lg", "id": "fd3_form_company", "placeholder": "Company" }, "has_children": false  },
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"First Name", "props": { "class": "", "id": "fd3_form_fname_label", "for": "fd3_form_fname" }, "has_children": false },
                        { "element": "input", "type": "text",  "state": "contact-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "id": "fd3_form_fname", "name": "fd3_form_fname", "placeholder": "First Name (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"Last Name", "props": { "class": "", "id": "fd3_form_lname_label", "for": "fd3_form_lname" }, "has_children": false },
                        { "element": "input", "type": "text",              "state": "contact-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name" : "fd3_form_lname", "id": "fd3_form_lname", "placeholder": "Last Name (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"Email", "props": { "class": "", "id": "fd3_form_email_label", "for": "fd3_form_email" }, "has_children": false },
                        { "element": "input", "type": "text",             "state": "contact-info",      "validate" : FORMS.Validate.Email,          "props": { "name" : "fd3_form_email", "type": "text", "class": "fd3-form-control input-lg", "id": "fd3_form_email", "placeholder": "Email (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"Phone", "props": { "class": "", "id": "fd3_form_phone_label", "for": "fd3_form_phone" }, "has_children": false },
                        { "element": "input", "type": "text",              "state": "contact-info",      "validate" : FORMS.Validate.Phone,          "props": { "name" : "fd3_form_phone","type": "text", "class": "fd3-form-control input-lg", "id": "fd3_form_phone", "placeholder": "Phone (required)" }, "has_children": false }
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "a", "contents": "Next", "props": { "class": "btn btn-primary btn-block btn-lg form-control", "id": "sign-up-fd3-contact-btn" }, "has_children": false }
                    ]}                    

                ]
            }

        };

        var AccountInfoData = {

            'data': {

                'parent_container': jq('.amp-new-sign-up-container'),
                'container': jq('#new-sign-up-account-info'),
                'title': 'Account Info',
                'items': [

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"Your Account Id", "props": { "class": "", "id": "fd3_form_account_id_label", "for": "fd3_form_account_id" }, "has_children": false },
                        { "element": "input", "type": "text",            "state": "contact-info",      "validate" : null,    "props": { "name" : "fd3_form_account_id", "type": "text", "class": "fd3-form-control form-control-md", "id": "fd3_form_account_id", "placeholder": "Account Id", "readonly": "readonly" }, "has_children": false  },
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [

                        { "element": "label", "contents":"Your Microsite ID will be used for your Microsite.", "props": { "class": "", "id": "fd3_form_microsite_id_label", "for": "fd3_form_microsite_id" }, "data-original": "Your Microsite ID will be used for your Microsite.", "has_children": false },
                        { "element": "input", "type": "text",           "state": "contact-info",      "validate" : null,    "props": { "name" : "fd3_form_microsite_id", "type": "text", "class": "fd3-form-control input-lg", "id": "fd3_form_microsite_id",  "form_group": "microsite_id", "placeholder": "Your MICROSITE ID" }, "has_children": false  },

                        { "element": "button", "type": "button",  "name" : "fd3_form_validate_microsite_btn",          "state": "contact-info",      "validate" : null,    "props": { "type": "text", "class": "fd3-form-control input-lg btn btn-success", "id": "fd3_form_validate_microsite_btn",  "state":"account_info", "form_group": "microsite_id", "value": "Check Availability" }, "has_children": true, "children": [
                            { "element": "i", "props": { "class": "fa fa-cog fa-btn-font", "aria-hidden": "true", "has_children": false } },
                            { "element": "span", "contents": "Check Availability", "props": { "class": "btn-caption", "has_children": false } },
                        ]  }

                    ] },
                    
                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [                    
                        { "element": "div", "state": "contact-info", "props": { "id": "passwd-complexity-container" }, "has_children": true, "children": [   
                            { "element": "input", "type": "password",   "state": "contact-info",      "validate" : null,    "props": { "name" : "fd3_form_password", "type": "text", "class": "fd3-form-control input-lg", "id": "fd3_form_password", "placeholder": "Password (required)" }, "has_children": false  },
                            { "element": "span", "contents": "Strength: ", "props": { "id": "password-strength-text" }, "has_children": true, "children": [
                                { "element": "strong", "contents":"Weak", "props": {}, "has_children": false },
                                { "element": "br", "props": {}, "has_children": false },
                                { "element": "span", "contents": "Feedback:  Add another word or two. Uncommon words are better.", "props": { "class": "feedback", "has_children": false } },
                            ]}
                        ]}
                    ] },

                    { "element": "div", "state": "contact-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "a", "contents": "Next", "props": { "class": "btn btn-primary btn-block btn-lg fd3-account-btn form-control", "id": "new-sign-up-fd3-account-btn" }, "has_children": false }
                    ]}

                ]
            }

        };        

        var PreferencesInfoData =  {

            'data': {

              'parent_container': jq('.amp-new-sign-up-container'),                
              'container': jq('#new-sign-up-preferences-info'),
              'title': 'Preferences',
              'items': [
        
                      { "element": "p", "contents":"We intend each month to email your clients either a personal contact email, or a newsletter or both.", "props": { "style": "display:inline-block;margin-bottom: 10px;font-size: 15px;font-weight: 700;" }, "has_children": false },
        
                      { "element": "p", "contents":"The Personal Contact Email will go out on the tenth of each month, the Newsletter Email will go out on the 20th of each month. Please indicate your preference below.", "props": { "style": "display:inline-block;margin-bottom: 16px;font-size: 15px;font-weight: 700;" }, "has_children": false },
                
                      { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                              { "element": "div", "props": { "class": "form-check" }, "has_children": true, "children": [
                                      { "element": "h5", "contents":" Personal Contact Emails", "props": {}, "has_children": false },
                                      { "element": "a", "contents":"View Example", "props": { "href": "https://www.marketingmailbox.net/bankbroker/agentrep/pdf_files/Marketing%20Mailbox%20Terms%20of%20Service%20Agreement.pdf", "class": "btn btn-primary btn-sm view-agreement", "target": "_blank" }, "has_children": false },
                                      { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                              { "element": "input", "props": { "type": "radio", "class": "form-check-input-md form-check-input", "name": "fd3_personal_emails_permission_checkbox", "id": "fd3_personal_emails_permission_checkbox", "value": "1", "style": "margin-top:15px" }, "has_children": false },
                                              { "element": "span", "contents": "Yes, I would like to have emails sent out automatically each month on my behalf.", "props": { "style": "display:inline-block;margin-top: 10px;" }, "has_children": false }
                                      ]},

                                      { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                              { "element": "input", "props": { "type": "radio", "class": "form-check-input-md form-check-input", "name": "fd3_personal_emails_permission_checkbox", "id": "fd3_personal_emails_permission_checkbox", "value": "0", "style": "margin-top:15px" }, "has_children": false },
                                              { "element": "span", "contents": "No, I do not want emails sent out.", "props": { "style": "display:inline-block;margin-top: 10px;" }, "has_children": false }
                                      ]}
                    
                              ]}
                      ] },
        
                      { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                              { "element": "div", "props": { "class": "form-check" }, "has_children": true, "children": [
                                      { "element": "h5", "contents":"Newsletter Emails", "props": {}, "has_children": false },
                                      { "element": "a", "contents":"View Example", "props": { "href": "https://www.marketingmailbox.net/bankbroker/agentrep/pdf_files/Marketing%20Mailbox%20CAN-SPAM.pdf", "class": "btn btn-primary btn-sm view-agreement", "target": "_blank" }, "has_children": false },
                                      { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                              { "element": "input", "props": { "type": "radio", "class": "form-check-input-md form-check-input", "name": "fd3_newsletter_emails_permission_checkbox", "id": "fd3_newsletter_emails_permission_checkbox", "value": "1", "style": "margin-top:15px" }, "has_children": false },
                                              { "element": "span", "contents": "Yes, I would like to have emails sent out automatically each month on my behalf.", "props": { "style": "display:inline-block;margin-top: 10px;" }, "has_children": false }
                                      ]}
                              ]},
                
                              { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                      { "element": "input", "props": { "type": "radio", "class": "form-check-input-md form-check-input", "name": "fd3_newsletter_emails_permission_checkbox", "id": "fd3_personal_emails_permission_checkbox", "value": "0", "style": "margin-top:15px" }, "has_children": false },
                                      { "element": "span", "contents": "No, I do not want emails sent out.", "props": { "style": "display:inline-block;margin-top: 10px;" }, "has_children": false }
                              ]}
                  
                      ] },
        
                      { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                              { "element": "a", "contents":"Next", "props": { "href": "#", "class": "btn btn-primary btn-block btn-lg form-control", "id": "new-sign-up-fd3-preferences-btn" }, "has_children": false }
                      ]}
          
              ]

            }            
        }

        var AgreementsInfoData =  {

           'data': {

                'parent_container': jq('.amp-new-sign-up-container'),
                'container': '#new-sign-up-agreements-info',
                'title': 'Agreements Info',
                'items': [

                    { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "div", "props": { "class": "form-check" }, "has_children": true, "children": [
                            { "element": "h5", "contents":"User Agreement (required)", "props": {}, "has_children": false },
                            { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                { "element": "input", "props": { "type": "checkbox", "class": "form-check-input-md form-check-input", "name": "fd3_user_agreement_checkbox", "id": "fd3_user_agreement_checkbox", "value": "1" }, "has_children": false },
                                { "element": "span", "contents": "I Agree | ", "has_children": false },
                                { "element": "a", "contents":"View Agreement", "props": { "href": "https://www.marketingmailbox.net/bankbroker/agentrep/pdf_files/Marketing%20Mailbox%20Terms%20of%20Service%20Agreement.pdf", "class": "btn btn-primary btn-sm view-agreement", "target": "_blank" }, "has_children": false }
                            ]}
                        ]}
                    ] },

                    { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "div", "props": { "class": "form-check" }, "has_children": true, "children": [
                            { "element": "h5", "contents":"CAN-SPAM Compliance Agreement (required)", "props": {}, "has_children": false },
                            { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                { "element": "input", "props": { "type": "checkbox", "class": "form-check-input-md form-check-input", "name": "fd3_spam_agreement_checkbox", "id": "fd3_spam_agreement_checkbox", "value": "1" }, "has_children": false },
                                { "element": "span", "contents": "I Agree | ", "has_children": false },
                                { "element": "a", "contents":"View Agreement", "props": { "href": "https://www.marketingmailbox.net/bankbroker/agentrep/pdf_files/Marketing%20Mailbox%20CAN-SPAM.pdf", "class": "btn btn-primary btn-sm view-agreement", "target": "_blank" }, "has_children": false }
                            ]}
                        ]}
                    ] },

                    { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "div", "props": { "class": "form-check" }, "has_children": true, "children": [
                            { "element": "h5", "contents":"Cancellation Policy (required)", "props": {}, "has_children": false },
                            { "element": "label", "props": { "class": "form-check-label" }, "has_children": true, "children": [
                                { "element": "input", "props": { "type": "checkbox", "class": "form-check-input-md form-check-input", "name": "fd3_cancel_policy_agreement_checkbox", "id": "fd3_cancel_policy_agreement_checkbox", "value": "1" }, "has_children": false },
                                { "element": "span", "contents": "I Agree | ", "has_children": false },
                                { "element": "a", "contents":"View Agreement", "props": { "href": "https://www.agentadvisorconnect.com/bankbroker/agentrep/pdf_files/Marketing%20Mailbox%20Cancellation%20Policy.pdf", "class": "btn btn-primary btn-sm view-agreement", "target": "_blank" }, "has_children": false }
                            ]}
                        ]}
                    ] },

                    { "element": "div", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "a", "contents":"Next", "props": { "href": "#", "class": "btn btn-primary btn-block btn-lg form-control", "id": "new-sign-up-fd3-agreements-btn" }, "has_children": false }
                    ]}

                ]
            }           
        }

        var BillingInfoData =  {

            'data': {

                'parent_container': jq('.amp-new-sign-up-container'),
                'container': '#new-sign-up-billing-info',
                'title': 'Billing Details',
                'items': [

                    { "element": "div",  "state": "billing-info",  "props": { "id": "new-sign-up-invoice-container" }, "has_children": false },

                    { "element": "h2",  "contents": "Billing Details", "state": "billing-info",  "props": { "class": "fd3-form-title" }, "has_children": false },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"BILLING ADDRESS", "props": { "class": "", "id": "fd3_form_address1_label", "for": "fd3_form_address1", "data-original": "BILLING ADDRESS" }, "has_children": false },
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_address1", "id": "fd3_form_address1", "state": "billing_info", "placeholder": "Address (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_address2", "id": "fd3_form_address2", "state": "billing_info", "placeholder": "Address 2 (optional)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_city", "id": "fd3_form_city", "state": "billing_info", "placeholder": "City (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "select", "state": "billing-info",  "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_state", "id": "fd3_form_state", "state": "billing_info", "placeholder": "State (required)" }, "has_children": true, "children": [
                            { "element": "optgroup", "props": { "label": "United States" }, "has_children": true, "children": [
                                { "element": "option", "contents":"Select State", "props": { "value": "0", "selected": "selected" }, "has_children": false },
                                { "element": "option", "contents":"Alabama", "props": { "value": "ALAlabama" }, "has_children": false },
                                { "element": "option", "contents":"Alaska", "props": { "value": "AKAlaska" }, "has_children": false },
                                { "element": "option", "contents":"Arizona", "props": { "value": "AZArizona" }, "has_children": false },
                                { "element": "option", "contents":"Arkansas", "props": { "value": "ARArkansas" }, "has_children": false },
                                { "element": "option", "contents":"California", "props": { "value": "CACalifornia" }, "has_children": false },
                                { "element": "option", "contents":"Colorado", "props": { "value": "COColorado" }, "has_children": false },
                                { "element": "option", "contents":"Connecticut", "props": { "value": "CTConnecticut" }, "has_children": false },
                                { "element": "option", "contents":"DC", "props": { "value": "DCDC" }, "has_children": false },
                                { "element": "option", "contents":"Delaware", "props": { "value": "DEDelaware" }, "has_children": false },
                                { "element": "option", "contents":"Florida", "props": { "value": "FLFlorida" }, "has_children": false },
                                { "element": "option", "contents":"Georgia", "props": { "value": "GAGeorgia" }, "has_children": false },
                                { "element": "option", "contents":"Hawaii", "props": { "value": "HIHawaii" }, "has_children": false },
                                { "element": "option", "contents":"Idaho", "props": { "value": "IDIdaho" }, "has_children": false },
                                { "element": "option", "contents":"Illinois", "props": { "value": "ILIllinois" }, "has_children": false },
                                { "element": "option", "contents":"Iowa", "props": { "value": "IAIowa" }, "has_children": false },
                                { "element": "option", "contents":"Kansas", "props": { "value": "KSKansas" }, "has_children": false },
                                { "element": "option", "contents":"Kentucky", "props": { "value": "KYKentucky" }, "has_children": false },
                                { "element": "option", "contents":"Louisiana", "props": { "value": "LALouisiana" }, "has_children": false },
                                { "element": "option", "contents":"Maryland", "props": { "value": "MDMaryland" }, "has_children": false },
                                { "element": "option", "contents":"Massachusetts", "props": { "value": "MAMassachusetts" }, "has_children": false },
                                { "element": "option", "contents":"Michigan", "props": { "value": "MIMichigan" }, "has_children": false },
                                { "element": "option", "contents":"Minnesota", "props": { "value": "MNMinnesota" }, "has_children": false },
                                { "element": "option", "contents":"Mississippi", "props": { "value": "MSMississippi" }, "has_children": false },
                                { "element": "option", "contents":"Missouri", "props": { "value": "MOMissouri" }, "has_children": false },
                                { "element": "option", "contents":"Montana", "props": { "value": "MTMontana" }, "has_children": false },
                                { "element": "option", "contents":"Nebraska", "props": { "value": "NENebraska" }, "has_children": false },
                                { "element": "option", "contents":"Nevada", "props": { "value": "NVNevada" }, "has_children": false },
                                { "element": "option", "contents":"New Hampshire", "props": { "value": "NHNew Hampshire" }, "has_children": false },
                                { "element": "option", "contents":"New Jersey", "props": { "value": "NJNew Jersey" }, "has_children": false },
                                { "element": "option", "contents":"New Mexico", "props": { "value": "NMNew Mexico" }, "has_children": false },
                                { "element": "option", "contents":"New York", "props": { "value": "NYNew York" }, "has_children": false },
                                { "element": "option", "contents":"North Carolina", "props": { "value": "NCNorth Carolina" }, "has_children": false },
                                { "element": "option", "contents":"North Dakota", "props": { "value": "NDNorth Dakota" }, "has_children": false },
                                { "element": "option", "contents":"Ohio", "props": { "value": "OHOhio" }, "has_children": false },
                                { "element": "option", "contents":"Oklahoma", "props": { "value": "OKOklahoma" }, "has_children": false },
                                { "element": "option", "contents":"Oregon", "props": { "value": "OROregon" }, "has_children": false },
                                { "element": "option", "contents":"Pennsylvania", "props": { "value": "PAPennsylvania" }, "has_children": false },
                                { "element": "option", "contents":"Rhode Island", "props": { "value": "RIRhode Island" }, "has_children": false },
                                { "element": "option", "contents":"South Carolina", "props": { "value": "SCSouth Carolina" }, "has_children": false },
                                { "element": "option", "contents":"South Dakota", "props": { "value": "SDSouth Dakota" }, "has_children": false },
                                { "element": "option", "contents":"Tennessee", "props": { "value": "TNTennessee" }, "has_children": false },
                                { "element": "option", "contents":"Texas", "props": { "value": "TXTexas" }, "has_children": false },
                                { "element": "option", "contents":"Utah", "props": { "value": "UTUtah" }, "has_children": false },
                                { "element": "option", "contents":"Vermont", "props": { "value": "VTVermont" }, "has_children": false },
                                { "element": "option", "contents":"Virginia", "props": { "value": "VAVirginia" }, "has_children": false },
                                { "element": "option", "contents":"Washington", "props": { "value": "WAWashington" }, "has_children": false },
                                { "element": "option", "contents":"West Virginia", "props": { "value": "WVWest Virginia" }, "has_children": false },
                                { "element": "option", "contents":"Wisconsin", "props": { "value": "WIWisconsin" }, "has_children": false },
                                { "element": "option", "contents":"Wyoming", "props": { "value": "WYWyoming" }, "has_children": false }

                            ]}                            
                        ]},
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_zipcode", "id": "fd3_form_zipcode", "state": "billing_info", "placeholder": "Zip Code (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "label", "contents":"PAYMENT DETAILS", "props": { "class": "", "id": "fd3_form_cc_cardtype_label", "for": "fd3_form_cc_cardtype", "data-original": "PAYMENT DETAILS" }, "has_children": false },

                        { "element": "select", "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_cc_cardtype", "id": "fd3_form_cc_cardtype", "state": "billing_info" }, "has_children": true, "children": [

                            { "element": "optgroup", "props": { "label": "Accepted Payments" }, "has_children": true, "children": [
                                { "element": "option", "contents":"Visa", "props": { "value": "0", "selected": "selected" }, "has_children": false },
                                { "element": "option", "contents":"MasterCard", "props": { "value": "1", "selected": "selected" }, "has_children": false },
                                { "element": "option", "contents":"American Express", "props": { "value": "2", "selected": "selected" }, "has_children": false }
                            ]}
                            
                        ]}
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_cc_cardholdername", "id": "fd3_form_cc_cardholdername", "state": "billing_info", "placeholder": "Card Holder's name  (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_cc_cardno", "id": "fd3_form_cc_cardno", "state": "billing_info", "placeholder": "Card Number (required)" }, "has_children": false },
                    ] },

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_cc_expdate", "id": "fd3_form_cc_expdate", "state": "billing_info", "data-validator": "FORMS.Validate.ExpirationDate", "placeholder": "mm/yyyy (required)" }, "has_children": false },
                    ] },                    

                    { "element": "div", "state": "billing-info", "props": { "class": "form-group" }, "has_children": true, "children": [
                        { "element": "input", "type": "text",  "state": "billing-info",      "validate" : FORMS.Validate.FullName,       "props": { "type": "text", "class": "fd3-form-control input-lg", "name": "fd3_form_cc_cvv2", "id": "fd3_form_cc_cvv2", "state": "billing_info", "data-validator": "FORMS.Validate.ExpirationDate", "placeholder": "Security Code (required)" }, "has_children": false },
                    ] },

                    { "element": "button", "type": "button", "props": { "type": "text", "class": "btn btn-secondary btn-block btn-lg form-control fd3-subscribe-btn", "id": "link-to-subscribe",  "state":"billing_info", "form_group": "microsite_id", "value": "Signup For The Marketing Platform" }, "has_children": true, "children": [
                        { "element": "i", "props": { "class": "fa fa-cog fa-btn-font", "aria-hidden": "true", "has_children": false } },
                        { "element": "span", "contents": "Signup For The Marketing Platform", "props": { "class": "btn-caption", "has_children": false } }
                    ]  }


                ]
            }          
        }

        var InvoiceInfoData =  {

             'data': {

                'parent_container': jq('.invoice-container'),
                'container': '#new-sign-up-invoice-container',
                'title': 'Billing Info'

            }
        }

        var PromoInfoData =  {

             'data': {

                'container': '#new-sign-up-invoice-container',

            }
        }        

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

        // View: AccountInfo 
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

                sp2.html( '&dollar;' + this.data.billing.getSubtotal() );
                sp2.appendTo( d );
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
                    this.items.push( data );
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
                this.monitors();
            },
        }); 

        // View: PromoInfo
        var PromoInfoView = FD3View.extend({

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
            'renderPromo': function() {

                var container = jq(this.data.container);
                
                var d = this.renderElement( 'div', { 'class': 'form-group' } );
                var l = this.renderElement( 'label', { 'for': 'fd3_form_promocode', 'id': 'fd3_form_promocode_label', 'data-original': 'PROMO CODE' } );
                var i = this.renderInput( { 'type': 'text', 'class': 'fd3-form-control input-lg', 'id': 'fd3_form_promocode', 'class': 'fd3-form-control input-lg', 'name': 'fd3_form_promocode', 'state': 'billing_info', 'form_group': 'promocode_id', 'placeholder': 'Promo Code', 'value': '' } );
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

        var signUpChoiceContoller = new SignUpChoiceController();
        signUpChoiceContoller.index();

    });


}( {
  'jq': jq, 'doc':document, 'win': window
}));  