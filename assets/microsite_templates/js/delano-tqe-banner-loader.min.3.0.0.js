// make sure we have jQuery

var AQLoader = (function($) {

    var
    // Define a local copy of AQLoader
        AQLoader = function() {

            // The AQLoader object is actually just the init constructor 'enhanced'
            // Need init if AQLoader is called (just allow error to be thrown if not included)
            return new AQLoader.fn.init();
        };

    window.AQLoader = AQLoader;

    AQLoader.fn = AQLoader.prototype = {
        constructor: AQLoader
    },

        AQLoader.events = [],

        AQLoader.me = this;

    AQLoader.init = function(obj) {
        obj.call(AQLoader);
    }

    AQLoader.extend = function(config) {
        var tmp = Object.create(this);
        for (var key in config) {
            if (config.hasOwnProperty(key)) {
                tmp[key] = config[key];
            }
        }
        return tmp;
    };

    AQLoader.loadBanner = function(rtndata) {

        AQLoader.data.packagedData = rtndata.code;

        $("#snippet").html(AQLoader.data.packagedData);
        $("#snippet").addClass("show");

        return false;
    };

    AQLoader.secureBannerJSONP = function() {

        AQLoader.data.license = $('#delanoLoader').attr('license');

        if(AQLoader.data.license.length == 0 || AQLoader.data.license == "") {
            console.log("license not found");
            return false;
        }

        AQLoader.data.packagedData = AQLoader.PackageData(AQLoader.data.license);
        AQLoader.data.scriptPath = 'https://banner.aq2e.com/marketingsite/callback';
        AQLoader.data.compact = AQLoader.data.scriptPath + AQLoader.data.packagedData;
        AQLoader.data.surl = AQLoader.data.scriptPath;

        $.ajax({
            url: AQLoader.data.surl,
            data: {id: AQLoader.data.packagedData},
            dataType: "jsonp",
            jsonp : "callback",
            jsonpCallback: "AQLoader.loadBanner"
        }).error(
            function(XHR, textStatus, errorThrown){
                console.log("ERREUR: " + textStatus);
                console.log("ERREUR: " + errorThrown);
            }
        ).success(
            function() {
                AQLoader.loadBanner.call(AQLoader);
            }
        );
    };

    AQLoader.PackageData = function(dataToPackage) {
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

    AQLoader.data =
    {
        surl: '',
        compact: '',
        scriptPath: [],
        packagedData: '',
        errorCount: null,
        errorStr: null,
        messages: [],
        seperator: "_",
        jsonObj: null,
        data: null,
        dataArr: null,
        domain: '127.0.0.1',
        scriptPath: '/tqe/update',
        URIType: 'http://',
        formType: 'POST',
        subscriberId: null,
        reaction: null,
        me: null,
        license: null
    };


    return AQLoader;

}(jQuery));

AQLoader.init( function() {
    jQuery(function() {
        AQLoader.secureBannerJSONP();
    });
});