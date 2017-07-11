/**
 * Created by huranku on 12/8/2016.
 * fd3.js
 */

var jq = jQuery.noConflict();

(function ( options ) {
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
                    if( typeof $.args.fieldErrors[ eId ] != 'undefined' && $.args.fieldErrors[ eId ] == true ) {
                        return $.args.fieldErrors[ eId ];
                    } else {
                        return "undefined";
                    }
                },
                getSuccess: function( eId ) {
                   if( typeof $.args.fieldSuccesses[ eId ] != 'undefined' && $.args.fieldSuccesses[ eId ] == true ) {
                       return $.args.fieldSuccesses[ eId ];
                   } else {
                       return "undefined";
                   }
                },
                removeSuccess: function( eId ) {
                    if( typeof $.args.fieldSuccesses[ eId ] != 'undefined' ) {
                        delete $.args.fieldSuccesses[eId];
                    }
                },
                removeError: function( eId ) {
                    if( typeof $.args.fieldErrors[ eId ] != 'undefined' ) {
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
                   if( typeof $.args.ServerErrors[ eId ] != 'undefined' && $.args.ServerErrors[ eId ] == true ) {
                       return $.args.ServerErrors[ eId ];
                   } else {
                       return "undefined";
                   }
                },
                removeServerError: function( eId ) {
                   if( typeof $.args.ServerErrors[ eId ] != 'undefined' ) {
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

    if(typeof FORMS == "undefined" || !FORMS ) { var FORMS = {} ; }

    FORMS.Validate = {
        selectedIndex: function(s) {
            var ind = $('#'+s).prop('selectedIndex');
            return ind;
        },
        Name: function(s) {
            return FORMS.REGEXP.NAME.test(s);
        },
        MicrositeId: function(s) {
            var r;
            r = FORMS.REGEXP.MICROSITE_ID.test(s);
            if(!r) {
                return 'microsite1'
            } else {
                return '';
            }
        },
        FullName: function(s) {
            return (s.length > 2);
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
        URL: function(s) {
            return (s.length > 4);
        },
        CompanyName: function(s) {
            return (s.length > 2);
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
            fn = parseInt(cc_num.substr(0, 1));
            // Make sure it is the correct amount of digits. Account for dashes being present.
            switch (fn)
            {
                case 3:
                    regexp = /^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/;
                    if (!regexp.test(cc_num))
                    {
                        return "creditcard0";
                    }
                    break;
                case 4:
                    regexp = /^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                    if (!regexp.test(cc_num))
                    {
                        return "creditcard0";
                    }
                    break;
                case 5:
                    regexp = /^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                    if (!regexp.test(cc_num))
                    {
                        return "creditcard0";
                    }
                    break;
                case 6:
                    regexp = /^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/;
                    if (!regexp.test(cc_num))
                    {
                        return "creditcard0";
                    }
                    break;
                default:
                    return "creditcard0";
            }
            // Here's where we use the Luhn Algorithm
            cc_num = cc_num.replace('-', '');
            map = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
                0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
            sum = 0;
            last = cc_num.length - 1;
            for (i = 0; i <= last; i++)
            {
                charr = cc_num[last - i];
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
        Password: function(passwd) {
            var points = passwd.length;
            var has_letter_exp		= new RegExp("[a-z]");
            var has_caps_exp		= new RegExp("[A-Z]");
            var has_numbers_exp		= new RegExp("[0-9]");

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
        PASSWORD: /^[A-Za-z0-9_!]{8,16}$/,
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
        if(typeof globalMessages[ code ] != 'undefined') {
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

            if( typeof FD3Message.getServerError( eId ) != 'undefined' ) {
                msgId = '#fd3_forms_form_error_' + eId;
                options.jq( msgId ).remove();
                FD3Message.removeServerError( eId );
            }

            if( typeof FD3Message.getSuccess( eId ) != 'undefined' ) {
                msgId = '#' + eId + '-success';
                options.jq( msgId ).remove();
                FD3Message.removeSuccess( eId );
            }

            if( typeof FD3Message.getError( eId ) != 'undefined' ) {
                msgId = '#' + eId + '-error';
                options.jq( msgId ).remove();
                FD3Message.removeError( eId );
            }

            if( msg.type == 'success' ) {

                // <span class="fd3_forms_form_error">A Microsite Id is required</span>
                // fd3_forms_form_success

                // options.jq( e ).parent().prepend('<div class="alert alert-success" id="' + eId + '-success" alertrole="alert"><strong>Good, </strong>' + msg.text + '</div>');

                options.jq( e ).parent().prepend('<span class="fd3_forms_form_success" id="' + eId + '-success" alertrole="alert"><strong>Good, </strong>' + msg.text + '</span>');

                FD3Message.addSuccess( eId );

            } else if( msg.type == 'error' ) {

                options.jq( e ).parent().prepend('<span class="fd3_forms_form_error" id="' + eId + '-error" alertrole="alert"><strong>Error, </strong>' + msg.text + '</span>');
                fieldErrors[ eId ] = true;
                FD3Message.addError( eId );
            }

        } else {

            // if we received no message then if all is well then clear any errors or messages

            if( typeof FD3Message.getServerError( eId ) != 'undefined' ) {
                msgId = '#fd3_forms_form_error_' + eId;
                options.jq( msgId ).remove();
                FD3Message.removeServerError( eId );
            }

            if( typeof FD3Message.addSuccess(eId ) != 'undefined' ) {
                msgId = '#' + eId + '-success';
                options.jq( msgId ).remove();
                FD3Message.removeSuccess( eId );
            }

            if( typeof FD3Message.getError( eId ) != 'undefined' ) {
                msgId = '#' + eId + '-error';
                options.jq( msgId ).remove();
                FD3Message.removeError( eId );
            }
        }

    }

    options.jq(function() {

        options.doc.on('click', '#fd3_form_apply_promo_btn', function() {

            var that = options.jq( this );

            (function( container, field ) {

                var promoCode = options.jq(field).val();
                var packagedData = { 'action': 'process_invoice', "nonce": myAjax.nonce, "fd3_form_promocode": options.jq( field ).val() };
                // var packagedData = JSON.stringify( data );

                that.find(".fa-btn-font").addClass('show').addClass('fa-spin');
                that.find('.btn-caption').html("Applying Promo Code...");

                setTimeout( function() {

                    options.jq.ajax( {

                        url: myAjax.url,
                        type: myAjax.formType,
                        dataType : myAjax.dataType,
                        data: packagedData,
                        cache: myAjax.useCache,

                        error: function( response ) {
                            console.log( response );
                        },

                        success: function( response ) {

                            options.jq(  "#fd3_form_promocode-error" ).remove();

                            if(response.success == true) {
                                options.jq( container ).replaceWith( response.output );
                                options.jq( "#fd3_form_promocode" ).val( promoCode );
                                console.log( response.output );
                            } else if( response.success == false ) { // we have a form error
                                options.jq( container ).replaceWith( response.output );
                                options.jq( "#fd3_form_promocode" ).val( promoCode );

                                options.jq( "#fd3_form_promocode" ).parent().prepend('<span class="fd3_forms_form_error" id="' + 'fd3_form_promocode' + '-error" alertrole="alert"><strong>Error, </strong>You Provided An Invalid Promo Code</span>');

                                console.log( response.output );
                            }

                            options.jq( that ).find(".fa-btn-font").removeClass('show').removeClass('fa-spin');
                            that.find('.btn-caption').html("Apply Promo Code");

                            FD3Message.getServerErrors();

                        }

                    });

                }, 1000);

            }(  '#invoice-template',
                options.jq( "#fd3_form_promocode" )
            ));

            return false;

        });

        options.doc.on('click', '#fd3_form_validate_microsite_btn', function() {

            var that = options.jq( this );

            var signupInfo = {};
            signupInfo.account = {};
            signupInfo.account = {};
            signupInfo.account.type = 'aqterm';
            signupInfo.user = {};
            signupInfo.user.userName = options.jq("#fd3_form_microsite_id").val();

            signupInfo.site = {};
            signupInfo.request = 'availability';
            signupInfo.siteId = myAjax.affiliateId;
            signupInfo.type = 'affiliate';
            signupInfo.mode = 'affiliate';

            var signupString = '{"account":{"type":"affiliate","price":"18.00","tax":"0.00","shipAndHandling":"0.00","subtotal":"18.00","total":"18.00","promocode":"AQ2ELIFE","promoText":"Your credit card will not be charged for the first 30 days"},"product":{"name":"aqcampaigns Pro - 25 guests commerical use","version":"Pro","price":"18.00"},"state":{"currentState":0,"nextState":0,"ready":false},"error":{"errorFound":false,"message":""},"ccinfo":{"cardHolderName":"","curCCType":{"text":"Visa","value":"VISA"},"cardNumber":"","cardExpiryMonth":"","curMonth":{"text":"Jan (01)","value":"01"},"cardExpiryYear":"","curYear":{"text":"2016","value":"2016"},"cardCVV":"","period":"","agreeToTerms":false,"notAgreeToTerms":false},"user":{"userName":"sfdsdfsdsdfdsDDDFD34343","password":"sfdsdfsdsdfdsDDDFD34343","passwordConfirm":"sfdsdfsdsdfdsDDDFD34343"},"site":{},"security":{"validationCode":""},"licenseinfo":{"domain":""},"personal":{"companyName":"Test, Inc.","firstName":"Test","lastName":"Name","address1":"888 Gold St.","address2":"testwebsite.com","city":"Fullerton","state":"","curState":{"value":"CACalifornia","text":"California"},"zipcode":"90631","phone":"8888888888","emailAddress":"test@test.com","emailAddressConfirm":"test@test.com"},"request":"availability","siteId":"'+myAjax.affiliateId+'","type":"affiliate","mode":"affiliate"}';
            var packagedSignUpInfoData = FORMS.PackageData( JSON.stringify( signupInfo ) );
            var thePackageObject = { "params": { "data": packagedSignUpInfoData }, "nonce": myAjax.nonce };
            var packagedData = JSON.stringify( thePackageObject );

            console.log( packagedData );

            options.jq('.alert').remove();

           // that.addClass('fd3-spin').find('.btn-caption').slideUp( 320 );

            that.find(".fa-btn-font").addClass('show').addClass('fa-spin');
            that.find('.btn-caption').html("Checking Availability...");

            options.jq.ajax( {

                url: "https://aqtermlife.com/aqterm-engine/index.php/process",
                type: 'put',
                data: packagedData,
                dataType : myAjax.dataType,
                cache: myAjax.useCache,

                error: function( response ) {
                    console.log( response );
                },

                success: function( response ) {

                    if(response.successful == true) {

                        options.jq(that).parent().prepend('<div class="alert alert-success" role="alert"><strong></strong>Great News, That Microsite ID is Available!</div>');

                        console.log( response.output );
                    } else if( response.successful == false ) { // we have a form error

                        options.jq(that).parent().prepend('<div class="alert alert-danger" role="alert"><strong>Error, </strong>Sorry That Microsite ID is Not Available</div>');

                        console.log( response.output );
                    }

                    options.jq(that).find('.btn-caption').html('Check Availability');
                    options.jq(that).find(".fa-btn-font").removeClass('show').removeClass('fa-spin');

                }

            });

            return false;

        });

        options.doc.on( 'input', function ( e ) {

            var that = e.srcElement;
            var expDate;
            var n1, n2, n3;
            var s;

            switch( that.id ) {
                case "fd3_form_microsite_id":

                    fd3_check_error( that, FORMS.Validate.MicrositeId );

                    var val = "Your Microsite ID will be used for your Microsite.<br/><span class='microsite-url'>Your Microsite URL: https://" + myAjax.affiliateId + ".aq2e.com/ms/</span>";
                    val += '<strong>' + options.jq( "#" + that.id ).val() + '</strong>';

                    if (options.jq( "#" + that.id ).val().length == 0) {
                        var original = options.jq("#fd3_form_microsite_id_label").data('original');
                        original = original.replace("<", "&lt;");
                        original = original.replace(">", "&gt;");
                        // original = encodeURIComponent( original );
                        options.jq("#fd3_form_microsite_id_label").html(original);
                    } else {
                        options.jq("#fd3_form_microsite_id_label").html(val);
                    }

                    break;

                case 'fd3_form_password':
                    //fd3_check_error( that, FORMS.Validate.Password );
                    var complexityContainer =  options.jq('#passwd-complexity-container');
                    var passwdStrengthText =  options.jq('#password-strength-text');
                    var passwd = options.jq(that).val();
                    var result = zxcvbn( passwd );

                 //   options.jq( complexityContainer ).data( "password-strength", result.score );
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

                    break;

                case 'fd3_form_password_repeat':
                    fd3_check_error( that, function() {
                        var a = options.jq( '#fd3_form_password_repeat' ).val();
                        var b = options.jq( '#fd3_form_password' ).val();

                        if( a != b ) {
                            return 'password5';
                        } else {
                            return '';
                        }

                    } );
                    break;

                case 'fd3_form_cc_cardno':
                    fd3_check_error( that, FORMS.Validate.CreditCard );
                    break;

                case 'fd3_form_cc_expdate':

                    if( options.jq(that).val().length == 3 ) {

                        s = options.jq(that).val().split('');
                        n1 = s[0];
                        n2 = s[1];
                        n3 = s[2];

                        if(n3 != '/') {

                            expDate = n1 + n2 + "/" + n3
                            options.jq(that).val(expDate);

                        }
                    }

                    fd3_check_error( that, FORMS.Validate.ExpirationDate );
                    break;

                case 'fd3_form_cc_cvv2':
                    fd3_check_error( that, function() {
                        return FORMS.Validate.CVV3( options.jq("#fd3_form_cc_cardno").val(), options.jq("#fd3_form_cc_cvv2").val() );
                    } );
                    break;

                case 'fd3_form_zipcode':
                    fd3_check_error( that, FORMS.Validate.Zipcode );
                    break;



                case 'fd3_form_promocode':
                    fd3_check_error( that, FORMS.Validate.Promocode );
                    break;

            }


        });

        options.doc.on( myAjax.eventType, myAjax.formButtonQuery, function () {

            if( !FD3Message.hasErrors() ) {

                var that = options.jq( this );
                var data = options.jq( myAjax.formQuery ).serialize();
                var dataObject = fd3_objectify( data );

                dataObject[ 'action' ] = myAjax.action;
                dataObject[ 'nonce' ] = myAjax.nonce
                dataObject[ myAjax.formid ] = myAjax.formid;

    //            var JSONData = JSON.stringify( dataObject );


                that.find('.btn-caption').html('Loading...');
                that.find(".fa-btn-font").addClass('show').addClass('fa-spin');

                setTimeout( function() {

                    options.jq.ajax( {

                        url: myAjax.url,
                        type: myAjax.formType,
                        dataType : myAjax.dataType,
                        data: dataObject,
                        cache: myAjax.useCache,

                        error: function( response ) {
                            console.log( response );
                        },

                        success: function( response ) {

                            if(response.success == true) {
                                options.jq(".fd3-actions-container").addClass('fd3-falloff');

                                setTimeout(function() {
                                     options.jq(".fd3-actions-container").removeClass('fd3-falloff')
                                }, 100);
    
                                setTimeout(function() {
                                    options.jq( myAjax.formContainerQuery ).replaceWith( decodeURIComponent( response.output ).replace(/\+/g, ' ') );
                                }, 100);

                                // console.log( decodeURIComponent( response.output ) );
                            } else if( response.success == false ) { // we have a form error
                                options.jq( myAjax.formContainerQuery ).replaceWith( decodeURIComponent( response.output ).replace(/\+/g, ' ') );
                                // console.log( decodeURIComponent( response.output ) );
                            }

                            FD3Message.getServerErrors();

                            options.jq("#fd3_form_validate_microsite_btn").find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Next");

                        }

                    });

                }, 1000);

            }

            return false;


        });



    });

    // alert('test');
})(
    { jq: jq, doc: jq(document), win: window }
);