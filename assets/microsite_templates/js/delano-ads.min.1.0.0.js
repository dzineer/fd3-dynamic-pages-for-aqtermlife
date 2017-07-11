var DelanoAds = (function($) {
    var DelanoAds = function() {
            return new DelanoAds.fn.init()
        }
        ;
    window.DelanoAds = DelanoAds;
    DelanoAds.childrenJQ = "";
    DelanoAds.handler = "";
    DelanoAds.position = 0;
    DelanoAds.previous = 0;
    DelanoAds.maxSize = 0;
    DelanoAds.container = "";
    DelanoAds.containerName = "#aq-ads";
    DelanoAds.childrenTag = ".ad";
    DelanoAds.rate = 0;
    DelanoAds.speedAttr = "speed";
    DelanoAds.transition = 0;
    DelanoAds.transitionAttr = "transition";
    DelanoAds.childrenArr = [];
    DelanoAds.surl = "";
    DelanoAds.compact = "";
    DelanoAds.scriptPath = [];
    DelanoAds.packagedData = "";
    DelanoAds.adData = "";
    DelanoAds.errorCount = null ;
    DelanoAds.errorStr = null ;
    DelanoAds.messages = [];
    DelanoAds.seperator = "_";
    DelanoAds.jsonObj = null ;
    DelanoAds.data = null ;
    DelanoAds.dataArr = null ;
    DelanoAds.domain = "127.0.0.1";
    DelanoAds.scriptPath = "/tqe/update";
    DelanoAds.URIType = "http = //";
    DelanoAds.formType = "POST";
    DelanoAds.subscriberId = null ;
    DelanoAds.reaction = null ;
    DelanoAds.me = null ;
    DelanoAds.license = null ;
    DelanoAds.licenseAttr = "license";
    DelanoAds.script = "#delano-ads";
    DelanoAds.overrideAdCallback = null ;
    DelanoAds.parentContainer = null ;
    DelanoAds.parentName = "#ads-snippet";
    DelanoAds.scriptPath = "https://banner.aq2e.com/index.php/msadsutils/callback";
    DelanoAds.fn = DelanoAds.prototype = {
        constructor: DelanoAds
    },
        DelanoAds.events = [],
        DelanoAds.me = this;
    DelanoAds.init = function(b) {
        b.call(DelanoAds)
    }
    ;
    DelanoAds.extend = function(c) {
        var e = Object.create(this);
        for (var d in c) {
            if (c.hasOwnProperty(d)) {
                e[d] = c[d]
            }
        }
        ;return e
    }
    ;
    DelanoAds.loadAds = function(f) {
        DelanoAds.adData = f.code;
        DelanoAds.createAd();
        return false
    }
    ;
    DelanoAds.load = function() {
        if (arguments.length && arguments.length == 1) {
            DelanoAds.overrideAdCallback = arguments[0]
        }
        ;DelanoAds.license = $(DelanoAds.script).attr(DelanoAds.licenseAttr);
        if (DelanoAds.license.length == 0 || DelanoAds.license == "") {
            console.log("license not found");
            return false
        }
        ;DelanoAds.packagedData = DelanoAds.PackageData(DelanoAds.license);
        DelanoAds.compact = DelanoAds.scriptPath + DelanoAds.packagedData;
        DelanoAds.surl = DelanoAds.scriptPath;
        $.ajax({
            url: DelanoAds.surl,
            data: {
                id: DelanoAds.packagedData
            },
            dataType: "jsonp",
            jsonp: "callback",
            jsonpCallback: "DelanoAds.loadAds"
        }).error(function(i, h, g) {
            console.log("ERREUR: " + h);
            console.log("ERREUR: " + g)
        }).success(function() {})
    }
    ;
    DelanoAds.createAd = function() {
        if (!DelanoAds.container || DelanoAds.container.length == 0) {
            DelanoAds.container = $(DelanoAds.containerName)
        }
        ;DelanoAds.container.html(DelanoAds.adData);
        if (DelanoAds.overrideAdCallback) {
            var j = arguments[0];
            var l = {
                childrenJQ: null ,
                rate: null ,
                transition: null
            };
            var k = DelanoAds.overrideAdCallback.call(l);
            $(DelanoAds.parentContainer).show();
            if (DelanoAds.parentContainer == null ) {
                DelanoAds.parentContainer = $(DelanoAds.parentName)
            }
            ;DelanoAds.parentContainer.addClass("show");
            if (k.childrenJQ !== null ) {
                DelanoAds.childrenJQ = k.childrenJQ
            } else {
                DelanoAds.childrenJQ = $(DelanoAds.childrenTag)
            }
            ;if (k.rate !== null ) {
                DelanoAds.rate = k.rate
            } else {
                DelanoAds.rate = DelanoAds.childrenJQ.data(DelanoAds.speedAttr)
            }
            ;if (k.transition !== null ) {
                DelanoAds.transition = k.transition
            } else {
                DelanoAds.transition = DelanoAds.childrenJQ.data(DelanoAds.transitionAttr)
            }
        } else {
            DelanoAds.childrenJQ = $(DelanoAds.childrenTag);
            DelanoAds.rate = DelanoAds.childrenJQ.data(DelanoAds.speedAttr);
            DelanoAds.transition = DelanoAds.childrenJQ.data(DelanoAds.transitionAttr)
        }
        ;DelanoAds.rate = parseInt(DelanoAds.rate) * 1000;
        DelanoAds.transition = parseInt(DelanoAds.transition) * 1000;
        DelanoAds.childrenArr = new Array();
        $(DelanoAds.childrenJQ).each(function() {
            DelanoAds.childrenArr.push($(this))
        });
        DelanoAds.updateAds()
    }
    ;
    DelanoAds.updateAds = function() {
        if (DelanoAds.position < DelanoAds.childrenArr.length) {
            if (DelanoAds.position === DelanoAds.previous) {
                DelanoAds.childrenArr[DelanoAds.position].fadeIn(DelanoAds.transition, function() {
                    DelanoAds.previous = DelanoAds.position;
                    DelanoAds.position = DelanoAds.position + 1;
                    setTimeout($.proxy(function() {
                        DelanoAds.updateAds.call(DelanoAds)
                    }, DelanoAds), DelanoAds.rate)
                })
            } else {
                DelanoAds.childrenArr[DelanoAds.previous].fadeOut(DelanoAds.transition, function() {
                    DelanoAds.childrenArr[DelanoAds.position].fadeIn(DelanoAds.transition * 4);
                    DelanoAds.previous = DelanoAds.position;
                    DelanoAds.position = DelanoAds.position + 1;
                    setTimeout($.proxy(function() {
                        DelanoAds.updateAds.call(DelanoAds)
                    }, DelanoAds), DelanoAds.rate)
                })
            }
        } else {
            DelanoAds.position = 0;
            setTimeout($.proxy(function() {
                DelanoAds.updateAds.call(DelanoAds)
            }, DelanoAds), DelanoAds.rate)
        }
    }
    ;
    DelanoAds.PackageData = function(q) {
        var z = q;
        var m = z.length % 3;
        if (m != 0) {
            for (var w = 0; w < (3 - m); w++) {
                z = z + " "
            }
        }
        ;var y = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        var x = "", n, o, p, r, s, t, u;
        for (var v = 0; v < z.length; ) {
            n = z.charCodeAt(v++);
            o = z.charCodeAt(v++);
            p = z.charCodeAt(v++);
            r = n >> 2;
            s = ((n & 3) << 4) + (o >> 4);
            t = ((o & 15) << 2) + (p >> 6);
            u = p & 63;
            if (isNaN(o)) {
                t = u = 64
            } else {
                if (isNaN(p)) {
                    u = 64
                }
            }
            ;x += y.charAt(r) + y.charAt(s) + y.charAt(t) + y.charAt(u)
        }
        ;return x
    }
    ;
    return DelanoAds
}(jQuery));
jQuery(function() {
    DelanoAds.init(function() {
        this.container = jQuery("#aq-ads");
        this.childrenTag = ".ad"
    });
    DelanoAds.load(function() {
        this.transition = 0;
        this.rate = 10;
        return this
    })
})
