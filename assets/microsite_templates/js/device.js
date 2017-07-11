/*! device.js 0.1.61 */
(function() {
    var a, b, c, d, e, f, g, h, i, j;
    a = window.device,
    window.device = {},
    c = window.document.documentElement,
    j = window.navigator.userAgent.toLowerCase(),
    device.ios = function() {
        return device.iphone() || device.ipod() || device.ipad()
    }
    ,
    device.iphone = function() {
        return d("iphone")
    }
    ,
    device.ipod = function() {
        return d("ipod")
    }
    ,
    device.ipad = function() {
        return d("ipad")
    }
    ,
    device.android = function() {
        return d("android")
    }
    ,
    device.androidPhone = function() {
        return device.android() && d("mobile")
    }
    ,
    device.androidTablet = function() {
        return device.android() && !d("mobile")
    }
    ,
    device.blackberry = function() {
        return d("blackberry") || d("bb10") || d("rim")
    }
    ,
    device.blackberryPhone = function() {
        return device.blackberry() && !d("tablet")
    }
    ,
    device.blackberryTablet = function() {
        return device.blackberry() && d("tablet")
    }
    ,
    device.windows = function() {
        return d("windows")
    }
    ,
    device.windowsPhone = function() {
        return device.windows() && d("phone")
    }
    ,
    device.windowsTablet = function() {
        return device.windows() && d("touch") && !device.windowsPhone()
    }
    ,
    device.fxos = function() {
        return (d("(mobile;") || d("(tablet;")) && d("; rv:")
    }
    ,
    device.fxosPhone = function() {
        return device.fxos() && d("mobile")
    }
    ,
    device.fxosTablet = function() {
        return device.fxos() && d("tablet")
    }
    ,
    device.meego = function() {
        return d("meego")
    }
    ,
    device.cordova = function() {
        return window.cordova && "file:" === location.protocol
    }
    ,
    device.nodeWebkit = function() {
        return "object" == typeof window.process
    }
    ,
    device.mobile = function() {
        return device.androidPhone() || device.iphone() || device.ipod() || device.windowsPhone() || device.blackberryPhone() || device.fxosPhone() || device.meego()
    }
    ,
    device.tablet = function() {
        return device.ipad() || device.androidTablet() || device.blackberryTablet() || device.windowsTablet() || device.fxosTablet()
    }
    ,
    device.desktop = function() {
        return !device.tablet() && !device.mobile()
    }
    ,
    device.portrait = function() {
        return window.innerHeight / window.innerWidth > 1
    }
    ,
    device.landscape = function() {
        return window.innerHeight / window.innerWidth < 1
    }
    ,
    device.noConflict = function() {
        return window.device = a,
        this
    }
    ,
    d = function(a) {
        return -1 !== j.indexOf(a)
    }
    ,
    f = function(a) {
        var b;
        return b = new RegExp(a,"i"),
        c.className.match(b)
    }
    ,
    b = function(a) {
        return f(a) ? void 0 : c.className += " " + a
    }
    ,
    h = function(a) {
        return f(a) ? c.className = c.className.replace(a, "") : void 0
    }
    ,
    device.ios() ? device.ipad() ? b("ios ipad tablet") : device.iphone() ? b("ios iphone mobile") : device.ipod() && b("ios ipod mobile") : b(device.android() ? device.androidTablet() ? "android tablet" : "android mobile" : device.blackberry() ? device.blackberryTablet() ? "blackberry tablet" : "blackberry mobile" : device.windows() ? device.windowsTablet() ? "windows tablet" : device.windowsPhone() ? "windows mobile" : "desktop" : device.fxos() ? device.fxosTablet() ? "fxos tablet" : "fxos mobile" : device.meego() ? "meego mobile" : device.nodeWebkit() ? "node-webkit" : "desktop"),
    device.cordova() && b("cordova"),
    e = function() {
        return device.landscape() ? (h("portrait"),
        b("landscape")) : (h("landscape"),
        b("portrait"))
    }
    ,
    i = "onorientationchange"in window,
    g = i ? "orientationchange" : "resize",
    window.addEventListener ? window.addEventListener(g, e, !1) : window.attachEvent ? window.attachEvent(g, e) : window[g] = e,
    e()
}
).call(this);
