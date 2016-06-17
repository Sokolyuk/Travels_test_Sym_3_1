! function() {
    "use strict";
    var a = document.getElementsByTagName("body")[0],
        b = a.getAttribute("data-app") || "flights",
        c = a.getAttribute("data-language") || "en",
        d = a.getAttribute("data-locale") || "en_US",
        e = a.getAttribute("data-brand") || "ED",
        f = function(a) {
            if (Array.prototype.reduce) return a.split("").reduce(function(a, b) {
                return a = (a << 5) - a + b.charCodeAt(0), a & a
            }, 0);
            var b = 0;
            if (0 === a.length) return b;
            for (var c = 0; c < a.length; c++) {
                var d = a.charCodeAt(c);
                b = (b << 5) - b + d, b &= b
            }
            return b
        },
        g = function() {
            for (var a = document.getElementsByTagName("meta") || [], b = [], c = 0; c < a.length; c++) "odigeo-static-domain" === a[c].getAttribute("name") && b.push("//" + a[c].getAttribute("content") + "/travel/");
            return b
        }(),
        h = function(a) {
            if (g.length > 0) {
                var b = Math.abs(f(a)) % g.length;
                return g[b] + a
            }
            return "/travel/" + a
        },
        i = function(a) {
            return h("static-content/versioned/" + a)
        },
        j = function(a) {
            return h("static-content/versioned_bZZcQkB3rS/" + a)
        },
        k = function(a, c, d) {
            var e = "js/" + (a ? a : "");
            return e += "/" + c, e += "." + ("http:" === location.protocol ? b : "secure") + "." + d, j(e)
        };
    window.___gcfg = {
        lang: c
    };
    var l = {
        waitSeconds: 0,
        paths: {
            font: i("require/require.font.min.4f23996b357c6c40db69235066b904b2"),
            propertyParser: i("require/require.propertyParser.min.5d9e09ca8eed74acd59dc28bde595b69"),
            async: i("require/require.async.min.3ed84faeea2ab459e3c6d72797e1fd5b"),
            jQuery: ["//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min", i("jquery/jquery-1.11.2.min.9aecea3830b65ecad103ee84bd5fe294")],
            thirdParty: i("thirdParty.desktop.min.38732992b8c8492d4d3aafcf263a0c78"),
            underscore: i("underscore.1.7.min.8866e84bc6081be27cd3cef1178288dc"),
            backbone: i("backbone.min.73c50cc1d02efb4e4a868d88c9b39e74"),
            html5shiv: i("html5shiv.c5776ab906652add91f9d827138cddf5"),
            Odigeo: j("js/desktop.odigeo.all"),
            setupjs: "//" + location.host + "/travel/setup.js/index.jsp?noext=1" + (location.search ? "&" + location.search.slice(1) : ""),
            desktop: k("", "desktop", "bundle"),
            googleAds: "//www.google.com/adsense/search/async-ads",
            facebook: "//connect.facebook.net/" + d + "/sdk",
            twitter: location.protocol + "//platform.twitter.com/widgets",
            googlePlus: location.protocol + "//apis.google.com/js/client:plusone.js",
            tv4: i("tv4.min.616474ed3f393ff5367e4acdbaad50d8"),
            markerclusterer: i("gmaps/markerclusterer.min.undefined"),
            GenesysWebChat: i("genesyschat/genesys-webchat.undefined"),
            mailcheck: i("mailcheck.min.355ae133e1873be4a62a67bd4350eb2d"),
            maps: location.protocol + "//maps.google.com/maps/api/js?client=gme-opodoltd&sensor=false&language=" + c + "&channel=" + e + "_" + d,
            "google-analytics": "//www.google-analytics.com/analytics"
        },
        modules: [],
        shim: {
            jQuery: {
                exports: "$"
            },
            underscore: {
                exports: "_"
            },
            backbone: {
                exports: "Backbone",
                deps: ["jQuery", "underscore"]
            },
            tv4: {
                exports: "tv4"
            },
            markerclusterer: {
                exports: "MarkerClusterer",
                deps: ["googleMaps"]
            },
            GenesysWebChat: {
                exports: "GenesysWebChat"
            },
            thirdParty: {
                deps: ["jQuery"]
            },
            Odigeo: {
                exports: "Odigeo",
                deps: ["underscore", "backbone", "jQuery", "thirdParty"]
            },
            desktop: {
                deps: ["tv4", "Odigeo"]
            },
            facebook: {
                exports: "FB"
            },
            twitter: {
                exports: "twttr"
            },
            googlePlus: {
                exports: "gapi"
            },
            mailcheck: {
                exports: "mailcheck",
                deps: ["jQuery"]
            },
            "google-analytics": {
                exports: "ga"
            }
        }
    };
    require.config(l), define("googleMaps", ["async!maps"], function() {
        return google.maps
    });
    var m = /msie/i.test((navigator.userAgent || navigator.vendor || window.opera).toLowerCase());
    m && (window.require(["html5shiv"]), "function" != typeof String.prototype.trim && (String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g, "")
    }), "function" != typeof Date.now && (Date.now = function() {
        return +new Date
    }), "function" != typeof Array.prototype.indexOf && (Array.prototype.indexOf = function(a) {
        for (var b = 0, c = this.length; c > b; b++)
            if (this[b] === a) return b;
        return -1
    })), window.require(["Odigeo"], function() {
        window.require(["setupjs"], function() {
            "https:" !== location.protocol && Odigeo.SessionScope.cosearchLibUrl && window.require([Odigeo.SessionScope.cosearchLibUrl]), $(function() {
                window.require(["desktop"])
            })
        })
    })
}();