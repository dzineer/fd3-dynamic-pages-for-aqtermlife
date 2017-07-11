/**
 * Created by huranku on 12/8/2016.
 * fd3.js
 */

var jq = jQuery.noConflict();

/*
this.PackageData = function(dataToPackage) {
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
*/

(function( options ) {

    myAjax.strictFlag

    PackageData = function(dataToPackage) {
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

    options.jq(function() {

        options.doc.on('click', '#fd3_form_validate_microsite_btn', function() {

            var that = options.jq( this );

            /*


             signupInfo.account.type = 'aqtermlife';
             signupInfo.request = 'availability';
             signupInfo.siteId = s;
             signupInfo.type = t;
             signupInfo.mode = m;


             */

            var signupInfo = {};
            signupInfo.account = {};
            signupInfo.account = {};
            signupInfo.account.type = 'aqtermlife';
            signupInfo.user = {};
            signupInfo.user.userName = options.jq("#fd3_form_microsite_id").val();

            signupInfo.site = {};
            signupInfo.request = 'availability';
            signupInfo.siteId = 'trials';
            signupInfo.type = 'aqtermlife';
            signupInfo.mode = 'signup';


            var signupString = '{"account":{"type":"aqtermlife","price":"18.00","tax":"0.00","shipAndHandling":"0.00","subtotal":"18.00","total":"18.00","promocode":"AQ2ELIFE","promoText":"Your credit card will not be charged for the first 30 days"},"product":{"name":"aqcampaigns Pro - 25 guests commerical use","version":"Pro","price":"18.00"},"state":{"currentState":0,"nextState":0,"ready":false},"error":{"errorFound":false,"message":""},"ccinfo":{"cardHolderName":"","curCCType":{"text":"Visa","value":"VISA"},"cardNumber":"","cardExpiryMonth":"","curMonth":{"text":"Jan (01)","value":"01"},"cardExpiryYear":"","curYear":{"text":"2016","value":"2016"},"cardCVV":"","period":"","agreeToTerms":false,"notAgreeToTerms":false},"user":{"userName":"sfdsdfsdsdfdsDDDFD34343","password":"sfdsdfsdsdfdsDDDFD34343","passwordConfirm":"sfdsdfsdsdfdsDDDFD34343"},"site":{},"security":{"validationCode":""},"licenseinfo":{"domain":""},"personal":{"companyName":"Test, Inc.","firstName":"Test","lastName":"Name","address1":"888 Gold St.","address2":"testwebsite.com","city":"Fullerton","state":"","curState":{"value":"CACalifornia","text":"California"},"zipcode":"90631","phone":"8888888888","emailAddress":"test@test.com","emailAddressConfirm":"test@test.com"},"request":"availability","siteId":"trials","type":"aqtermlife","mode":"signup"}';
/*

            {
                "account": {
                    "type": "aqtermlife",
                    "price": "18.00",
                    "tax": "0.00",
                    "shipAndHandling": "0.00",
                    "subtotal": "18.00",
                    "total": "18.00",
                    "promocode": "AQ2ELIFE",
                    "promoText": "Your credit card will not be charged for the first 30 days"
            },
                "error": {
                "errorFound": false,
                    "message": ""
            },
                "user": {
                "userName": "sfdsdfsdsdfdsDDDFD34343",
                    "password": "sfdsdfsdsdfdsDDDFD34343",
                    "passwordConfirm": "sfdsdfsdsdfdsDDDFD34343"
            },
                "site": {},
                "request": "availability",
                "siteId": "trials",
                "type": "aqtermlife",
                "mode": "signup"
            }

*/

            //var packagedData = PackageData( signupString );
            var packagedSignUpInfoData = PackageData( JSON.stringify( signupInfo ) );

            var thePackageObject = { "params": { "data": packagedSignUpInfoData } };

            var packagedData = JSON.stringify( thePackageObject );

            console.log( packagedData );

            options.jq('.alert').remove();

           // that.addClass('fd3-spin').find('.btn-caption').slideUp( 320 );

            that.find(".fa-btn-font").addClass('show').addClass('fa-spin');
            that.find('.btn-caption').html("Checking Availability...");

            options.jq.ajax( {

                url: "https://aqtermlife.com/index.php/process",
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

        options.doc.on( 'input', '#fd3_form_microsite_id', function () {

            var val = "The Microsite ID will also be used for your Microsite. In the Microsite URL: https://trials.aq2e.com/ms/";
            val += options.jq( this ).val();

            if( options.jq( this ).val().length == 0 ) {
                var original =  options.jq( "#fd3_form_microsite_id_label" ).data('original');
                original = original.replace("<", "&lt;");
                original = original.replace(">", "&gt;");
                // original = encodeURIComponent( original );
                options.jq( "#fd3_form_microsite_id_label" ).html( original );
            } else {
                options.jq("#fd3_form_microsite_id_label").html(val);
            }

        });

        options.doc.on( myAjax.eventType, myAjax.formButtonQuery, function () {

            var that = options.jq( this );
            var data = options.jq( myAjax.formQuery ).serialize();
            var dataObject = fd3_objectify( data );

            dataObject[ 'action' ] = myAjax.action;
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
                            options.jq( myAjax.formContainerQuery ).replaceWith( response.output );
                            console.log( response.output );
                        } else if( response.success == false ) { // we have a form error
                            options.jq( myAjax.formContainerQuery ).replaceWith( response.output );
                            console.log( response.output );
                        }

                        options.jq("#fd3_form_validate_microsite_btn").find(".fa-btn-font").removeClass('show').removeClass('fa-spin').find('.btn-caption').html("Next");

                    }

                });

            }, 1000);

            return false;

        });

    });

    // alert('test');
})(
    { jq: jq, doc: jq(document), win: window }
);
