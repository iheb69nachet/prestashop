! function(t) {
    function e(i) {
        if (n[i]) return n[i].exports;
        var r = n[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(r.exports, r, r.exports, e), r.l = !0, r.exports
    }
    var n = {};
    e.m = t, e.c = n, e.i = function(t) {
        return t
    }, e.d = function(t, n, i) {
        e.o(t, n) || Object.defineProperty(t, n, {
            configurable: !1,
            enumerable: !0,
            get: i
        })
    }, e.n = function(t) {
        var n = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return e.d(n, "a", n), n
    }, e.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, e.p = "", e(e.s = 26)
}([function(t, e) {
    t.exports = jQuery
}, function(t, e) {
    t.exports = prestashop
}, function(t, e, n) {
    "use strict";

    function i(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var r = function() {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(),
        o = n(0),
        a = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(o),
        s = function() {
            function t(e) {
                i(this, t), this.el = e
            }
            return r(t, [{
                key: "init",
                value: function() {
                    this.el.on("show.bs.dropdown", function(t, e) {
                        e ? (0, a.default)("#" + e).find(".dropdown-menu").first().stop(!0, !0).slideDown() : (0, a.default)(t.target).find(".dropdown-menu").first().stop(!0, !0).slideDown()
                    }), this.el.on("hide.bs.dropdown", function(t, e) {
                        e ? (0, a.default)("#" + e).find(".dropdown-menu").first().stop(!0, !0).slideUp() : (0, a.default)(t.target).find(".dropdown-menu").first().stop(!0, !0).slideUp()
                    }), this.el.find("select.link").each(function(t, e) {
                        (0, a.default)(e).on("change", function(t) {
                            window.location = (0, a.default)(this).val()
                        })
                    })
                }
            }]), t
        }();
    e.default = s, t.exports = e.default
}, function(t, e, n) {
    "use strict";

    function i(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var r = function() {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(),
        o = n(0),
        a = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(o),
        s = function() {
            function t() {
                i(this, t)
            }
            return r(t, [{
                key: "init",
                value: function() {
                    (0, a.default)(".js-product-miniature").each(function(t, e) {
                        var n = (0, a.default)(e).find(".discount-product"),
                            i = (0, a.default)(e).find(".on-sale"),
                            r = (0, a.default)(e).find(".new");
                        n.length && (r.css("top", 2 * n.height() + 10), n.css("top", -(0, a.default)(e).find(".thumbnail-container").height() + (0, a.default)(e).find(".product-description").height() + 10)), i.length && (n.css("top", parseFloat(n.css("top")) + i.height() + 10), r.css("top", 2 * n.height() + i.height() + 20)), (0, a.default)(e).find(".color").length > 5 && function() {
                            var t = 0;
                            (0, a.default)(e).find(".color").each(function(e, n) {
                                e > 4 && ((0, a.default)(n).hide(), t++)
                            }), (0, a.default)(e).find(".js-count").append("+" + t)
                        }()
                    })
                }
            }]), t
        }();
    e.default = s, t.exports = e.default
}, function(t, e, n) {
    "use strict";
    var i, r;
    ! function(t) {
        function e(t) {
            var e = t.length,
                i = n.type(t);
            return "function" !== i && !n.isWindow(t) && (!(1 !== t.nodeType || !e) || ("array" === i || 0 === e || "number" == typeof e && e > 0 && e - 1 in t))
        }
        if (!t.jQuery) {
            var n = function t(e, n) {
                return new t.fn.init(e, n)
            };
            n.isWindow = function(t) {
                return t && t === t.window
            }, n.type = function(t) {
                return t ? "object" == typeof t || "function" == typeof t ? r[a.call(t)] || "object" : typeof t : t + ""
            }, n.isArray = Array.isArray || function(t) {
                return "array" === n.type(t)
            }, n.isPlainObject = function(t) {
                var e;
                if (!t || "object" !== n.type(t) || t.nodeType || n.isWindow(t)) return !1;
                try {
                    if (t.constructor && !o.call(t, "constructor") && !o.call(t.constructor.prototype, "isPrototypeOf")) return !1
                } catch (t) {
                    return !1
                }
                for (e in t);
                return void 0 === e || o.call(t, e)
            }, n.each = function(t, n, i) {
                var r = 0,
                    o = t.length,
                    a = e(t);
                if (i) {
                    if (a)
                        for (; r < o && !1 !== n.apply(t[r], i); r++);
                    else
                        for (r in t)
                            if (t.hasOwnProperty(r) && !1 === n.apply(t[r], i)) break
                } else if (a)
                    for (; r < o && !1 !== n.call(t[r], r, t[r]); r++);
                else
                    for (r in t)
                        if (t.hasOwnProperty(r) && !1 === n.call(t[r], r, t[r])) break;
                return t
            }, n.data = function(t, e, r) {
                if (void 0 === r) {
                    var o = t[n.expando],
                        a = o && i[o];
                    if (void 0 === e) return a;
                    if (a && e in a) return a[e]
                } else if (void 0 !== e) {
                    var s = t[n.expando] || (t[n.expando] = ++n.uuid);
                    return i[s] = i[s] || {}, i[s][e] = r, r
                }
            }, n.removeData = function(t, e) {
                var r = t[n.expando],
                    o = r && i[r];
                o && (e ? n.each(e, function(t, e) {
                    delete o[e]
                }) : delete i[r])
            }, n.extend = function() {
                var t, e, i, r, o, a, s = arguments[0] || {},
                    l = 1,
                    u = arguments.length,
                    c = !1;
                for ("boolean" == typeof s && (c = s, s = arguments[l] || {}, l++), "object" != typeof s && "function" !== n.type(s) && (s = {}), l === u && (s = this, l--); l < u; l++)
                    if (o = arguments[l])
                        for (r in o) o.hasOwnProperty(r) && (t = s[r], i = o[r], s !== i && (c && i && (n.isPlainObject(i) || (e = n.isArray(i))) ? (e ? (e = !1, a = t && n.isArray(t) ? t : []) : a = t && n.isPlainObject(t) ? t : {}, s[r] = n.extend(c, a, i)) : void 0 !== i && (s[r] = i)));
                return s
            }, n.queue = function(t, i, r) {
                if (t) {
                    i = (i || "fx") + "queue";
                    var o = n.data(t, i);
                    return r ? (!o || n.isArray(r) ? o = n.data(t, i, function(t, n) {
                        var i = n || [];
                        return t && (e(Object(t)) ? function(t, e) {
                            for (var n = +e.length, i = 0, r = t.length; i < n;) t[r++] = e[i++];
                            if (n !== n)
                                for (; void 0 !== e[i];) t[r++] = e[i++];
                            t.length = r
                        }(i, "string" == typeof t ? [t] : t) : [].push.call(i, t)), i
                    }(r)) : o.push(r), o) : o || []
                }
            }, n.dequeue = function(t, e) {
                n.each(t.nodeType ? [t] : t, function(t, i) {
                    e = e || "fx";
                    var r = n.queue(i, e),
                        o = r.shift();
                    "inprogress" === o && (o = r.shift()), o && ("fx" === e && r.unshift("inprogress"), o.call(i, function() {
                        n.dequeue(i, e)
                    }))
                })
            }, n.fn = n.prototype = {
                init: function(t) {
                    if (t.nodeType) return this[0] = t, this;
                    throw new Error("Not a DOM node.")
                },
                offset: function() {
                    var e = this[0].getBoundingClientRect ? this[0].getBoundingClientRect() : {
                        top: 0,
                        left: 0
                    };
                    return {
                        top: e.top + (t.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0),
                        left: e.left + (t.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)
                    }
                },
                position: function() {
                    var t = this[0],
                        e = function(t) {
                            for (var e = t.offsetParent; e && "html" !== e.nodeName.toLowerCase() && e.style && "static" === e.style.position;) e = e.offsetParent;
                            return e || document
                        }(t),
                        i = this.offset(),
                        r = /^(?:body|html)$/i.test(e.nodeName) ? {
                            top: 0,
                            left: 0
                        } : n(e).offset();
                    return i.top -= parseFloat(t.style.marginTop) || 0, i.left -= parseFloat(t.style.marginLeft) || 0, e.style && (r.top += parseFloat(e.style.borderTopWidth) || 0, r.left += parseFloat(e.style.borderLeftWidth) || 0), {
                        top: i.top - r.top,
                        left: i.left - r.left
                    }
                }
            };
            var i = {};
            n.expando = "velocity" + (new Date).getTime(), n.uuid = 0;
            for (var r = {}, o = r.hasOwnProperty, a = r.toString, s = "Boolean Number String Function Array Date RegExp Object Error".split(" "), l = 0; l < s.length; l++) r["[object " + s[l] + "]"] = s[l].toLowerCase();
            n.fn.init.prototype = n.fn, t.Velocity = {
                Utilities: n
            }
        }
    }(window),
    function(o) {
        "object" == typeof t && "object" == typeof t.exports ? t.exports = o() : (i = o, void 0 !== (r = "function" == typeof i ? i.call(e, n, e, t) : i) && (t.exports = r))
    }(function() {
        return function(t, e, n, i) {
            function r(t) {
                for (var e = -1, n = t ? t.length : 0, i = []; ++e < n;) {
                    var r = t[e];
                    r && i.push(r)
                }
                return i
            }

            function o(t) {
                return _.isWrapped(t) ? t = y.call(t) : _.isNode(t) && (t = [t]), t
            }

            function a(t) {
                var e = h.data(t, "velocity");
                return null === e ? i : e
            }

            function s(t, e) {
                var n = a(t);
                n && n.delayTimer && !n.delayPaused && (n.delayRemaining = n.delay - e + n.delayBegin, n.delayPaused = !0, clearTimeout(n.delayTimer.setTimeout))
            }

            function l(t, e) {
                var n = a(t);
                n && n.delayTimer && n.delayPaused && (n.delayPaused = !1, n.delayTimer.setTimeout = setTimeout(n.delayTimer.next, n.delayRemaining))
            }

            function u(t) {
                return function(e) {
                    return Math.round(e * t) * (1 / t)
                }
            }

            function c(t, n, i, r) {
                function o(t, e) {
                    return 1 - 3 * e + 3 * t
                }

                function a(t, e) {
                    return 3 * e - 6 * t
                }

                function s(t) {
                    return 3 * t
                }

                function l(t, e, n) {
                    return ((o(e, n) * t + a(e, n)) * t + s(e)) * t
                }

                function u(t, e, n) {
                    return 3 * o(e, n) * t * t + 2 * a(e, n) * t + s(e)
                }

                function c(e, n) {
                    for (var r = 0; r < m; ++r) {
                        var o = u(n, t, i);
                        if (0 === o) return n;
                        n -= (l(n, t, i) - e) / o
                    }
                    return n
                }

                function f() {
                    for (var e = 0; e < b; ++e) S[e] = l(e * _, t, i)
                }

                function d(e, n, r) {
                    var o, a, s = 0;
                    do {
                        a = n + (r - n) / 2, o = l(a, t, i) - e, o > 0 ? r = a : n = a
                    } while (Math.abs(o) > v && ++s < y);
                    return a
                }

                function p(e) {
                    for (var n = 0, r = 1, o = b - 1; r !== o && S[r] <= e; ++r) n += _;
                    --r;
                    var a = (e - S[r]) / (S[r + 1] - S[r]),
                        s = n + a * _,
                        l = u(s, t, i);
                    return l >= g ? c(e, s) : 0 === l ? s : d(e, n, n + _)
                }

                function h() {
                    E = !0, t === n && i === r || f()
                }
                var m = 4,
                    g = .001,
                    v = 1e-7,
                    y = 10,
                    b = 11,
                    _ = 1 / (b - 1),
                    x = "Float32Array" in e;
                if (4 !== arguments.length) return !1;
                for (var w = 0; w < 4; ++w)
                    if ("number" != typeof arguments[w] || isNaN(arguments[w]) || !isFinite(arguments[w])) return !1;
                t = Math.min(t, 1), i = Math.min(i, 1), t = Math.max(t, 0), i = Math.max(i, 0);
                var S = x ? new Float32Array(b) : new Array(b),
                    E = !1,
                    C = function(e) {
                        return E || h(), t === n && i === r ? e : 0 === e ? 0 : 1 === e ? 1 : l(p(e), n, r)
                    };
                C.getControlPoints = function() {
                    return [{
                        x: t,
                        y: n
                    }, {
                        x: i,
                        y: r
                    }]
                };
                var T = "generateBezier(" + [t, n, i, r] + ")";
                return C.toString = function() {
                    return T
                }, C
            }

            function f(t, e) {
                var n = t;
                return _.isString(t) ? E.Easings[t] || (n = !1) : n = _.isArray(t) && 1 === t.length ? u.apply(null, t) : _.isArray(t) && 2 === t.length ? C.apply(null, t.concat([e])) : !(!_.isArray(t) || 4 !== t.length) && c.apply(null, t), !1 === n && (n = E.Easings[E.defaults.easing] ? E.defaults.easing : S), n
            }

            function d(t) {
                if (t) {
                    var e = E.timestamp && !0 !== t ? t : v.now(),
                        n = E.State.calls.length;
                    n > 1e4 && (E.State.calls = r(E.State.calls), n = E.State.calls.length);
                    for (var o = 0; o < n; o++)
                        if (E.State.calls[o]) {
                            var s = E.State.calls[o],
                                l = s[0],
                                u = s[2],
                                c = s[3],
                                f = !!c,
                                g = null,
                                y = s[5],
                                b = s[6];
                            if (c || (c = E.State.calls[o][3] = e - 16), y) {
                                if (!0 !== y.resume) continue;
                                c = s[3] = Math.round(e - b - 16), s[5] = null
                            }
                            b = s[6] = e - c;
                            for (var x = Math.min(b / u.duration, 1), w = 0, S = l.length; w < S; w++) {
                                var C = l[w],
                                    A = C.element;
                                if (a(A)) {
                                    var O = !1;
                                    if (u.display !== i && null !== u.display && "none" !== u.display) {
                                        if ("flex" === u.display) {
                                            var k = ["-webkit-box", "-moz-box", "-ms-flexbox", "-webkit-flex"];
                                            h.each(k, function(t, e) {
                                                T.setPropertyValue(A, "display", e)
                                            })
                                        }
                                        T.setPropertyValue(A, "display", u.display)
                                    }
                                    u.visibility !== i && "hidden" !== u.visibility && T.setPropertyValue(A, "visibility", u.visibility);
                                    for (var D in C)
                                        if (C.hasOwnProperty(D) && "element" !== D) {
                                            var N, P = C[D],
                                                L = _.isString(P.easing) ? E.Easings[P.easing] : P.easing;
                                            if (_.isString(P.pattern)) {
                                                var j = 1 === x ? function(t, e, n) {
                                                    var i = P.endValue[e];
                                                    return n ? Math.round(i) : i
                                                } : function(t, e, n) {
                                                    var i = P.startValue[e],
                                                        r = P.endValue[e] - i,
                                                        o = i + r * L(x, u, r);
                                                    return n ? Math.round(o) : o
                                                };
                                                N = P.pattern.replace(/{(\d+)(!)?}/g, j)
                                            } else if (1 === x) N = P.endValue;
                                            else {
                                                var B = P.endValue - P.startValue;
                                                N = P.startValue + B * L(x, u, B)
                                            }
                                            if (!f && N === P.currentValue) continue;
                                            if (P.currentValue = N, "tween" === D) g = N;
                                            else {
                                                var V;
                                                if (T.Hooks.registered[D]) {
                                                    V = T.Hooks.getRoot(D);
                                                    var F = a(A).rootPropertyValueCache[V];
                                                    F && (P.rootPropertyValue = F)
                                                }
                                                var R = T.setPropertyValue(A, D, P.currentValue + (m < 9 && 0 === parseFloat(N) ? "" : P.unitType), P.rootPropertyValue, P.scrollData);
                                                T.Hooks.registered[D] && (T.Normalizations.registered[V] ? a(A).rootPropertyValueCache[V] = T.Normalizations.registered[V]("extract", null, R[1]) : a(A).rootPropertyValueCache[V] = R[1]), "transform" === R[0] && (O = !0)
                                            }
                                        }
                                    u.mobileHA && a(A).transformCache.translate3d === i && (a(A).transformCache.translate3d = "(0px, 0px, 0px)", O = !0), O && T.flushTransformCache(A)
                                }
                            }
                            u.display !== i && "none" !== u.display && (E.State.calls[o][2].display = !1), u.visibility !== i && "hidden" !== u.visibility && (E.State.calls[o][2].visibility = !1), u.progress && u.progress.call(s[1], s[1], x, Math.max(0, c + u.duration - e), c, g), 1 === x && p(o)
                        }
                }
                E.State.isTicking && I(d)
            }

            function p(t, e) {
                if (!E.State.calls[t]) return !1;
                for (var n = E.State.calls[t][0], r = E.State.calls[t][1], o = E.State.calls[t][2], s = E.State.calls[t][4], l = !1, u = 0, c = n.length; u < c; u++) {
                    var f = n[u].element;
                    e || o.loop || ("none" === o.display && T.setPropertyValue(f, "display", o.display), "hidden" === o.visibility && T.setPropertyValue(f, "visibility", o.visibility));
                    var d = a(f);
                    if (!0 !== o.loop && (h.queue(f)[1] === i || !/\.velocityQueueEntryFlag/i.test(h.queue(f)[1])) && d) {
                        d.isAnimating = !1, d.rootPropertyValueCache = {};
                        var p = !1;
                        h.each(T.Lists.transforms3D, function(t, e) {
                            var n = /^scale/.test(e) ? 1 : 0,
                                r = d.transformCache[e];
                            d.transformCache[e] !== i && new RegExp("^\\(" + n + "[^.]").test(r) && (p = !0, delete d.transformCache[e])
                        }), o.mobileHA && (p = !0, delete d.transformCache.translate3d), p && T.flushTransformCache(f), T.Values.removeClass(f, "velocity-animating")
                    }
                    if (!e && o.complete && !o.loop && u === c - 1) try {
                        o.complete.call(r, r)
                    } catch (t) {
                        setTimeout(function() {
                            throw t
                        }, 1)
                    }
                    s && !0 !== o.loop && s(r), d && !0 === o.loop && !e && (h.each(d.tweensContainer, function(t, e) {
                        if (/^rotate/.test(t) && (parseFloat(e.startValue) - parseFloat(e.endValue)) % 360 == 0) {
                            var n = e.startValue;
                            e.startValue = e.endValue, e.endValue = n
                        }
                        /^backgroundPosition/.test(t) && 100 === parseFloat(e.endValue) && "%" === e.unitType && (e.endValue = 0, e.startValue = 100)
                    }), E(f, "reverse", {
                        loop: !0,
                        delay: o.delay
                    })), !1 !== o.queue && h.dequeue(f, o.queue)
                }
                E.State.calls[t] = !1;
                for (var m = 0, g = E.State.calls.length; m < g; m++)
                    if (!1 !== E.State.calls[m]) {
                        l = !0;
                        break
                    }!1 === l && (E.State.isTicking = !1, delete E.State.calls, E.State.calls = [])
            }
            var h, m = function() {
                    if (n.documentMode) return n.documentMode;
                    for (var t = 7; t > 4; t--) {
                        var e = n.createElement("div");
                        if (e.innerHTML = "\x3c!--[if IE " + t + "]><span></span><![endif]--\x3e", e.getElementsByTagName("span").length) return e = null, t
                    }
                    return i
                }(),
                g = function() {
                    var t = 0;
                    return e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || function(e) {
                        var n, i = (new Date).getTime();
                        return n = Math.max(0, 16 - (i - t)), t = i + n, setTimeout(function() {
                            e(i + n)
                        }, n)
                    }
                }(),
                v = function() {
                    var t = e.performance || {};
                    if ("function" != typeof t.now) {
                        var n = t.timing && t.timing.navigationStart ? t.timing.navigationStart : (new Date).getTime();
                        t.now = function() {
                            return (new Date).getTime() - n
                        }
                    }
                    return t
                }(),
                y = function() {
                    var t = Array.prototype.slice;
                    try {
                        return t.call(n.documentElement), t
                    } catch (e) {
                        return function(e, n) {
                            var i = this.length;
                            if ("number" != typeof e && (e = 0), "number" != typeof n && (n = i), this.slice) return t.call(this, e, n);
                            var r, o = [],
                                a = e >= 0 ? e : Math.max(0, i + e),
                                s = n < 0 ? i + n : Math.min(n, i),
                                l = s - a;
                            if (l > 0)
                                if (o = new Array(l), this.charAt)
                                    for (r = 0; r < l; r++) o[r] = this.charAt(a + r);
                                else
                                    for (r = 0; r < l; r++) o[r] = this[a + r];
                            return o
                        }
                    }
                }(),
                b = function() {
                    return Array.prototype.includes ? function(t, e) {
                        return t.includes(e)
                    } : Array.prototype.indexOf ? function(t, e) {
                        return t.indexOf(e) >= 0
                    } : function(t, e) {
                        for (var n = 0; n < t.length; n++)
                            if (t[n] === e) return !0;
                        return !1
                    }
                },
                _ = {
                    isNumber: function(t) {
                        return "number" == typeof t
                    },
                    isString: function(t) {
                        return "string" == typeof t
                    },
                    isArray: Array.isArray || function(t) {
                        return "[object Array]" === Object.prototype.toString.call(t)
                    },
                    isFunction: function(t) {
                        return "[object Function]" === Object.prototype.toString.call(t)
                    },
                    isNode: function(t) {
                        return t && t.nodeType
                    },
                    isWrapped: function(t) {
                        return t && t !== e && _.isNumber(t.length) && !_.isString(t) && !_.isFunction(t) && !_.isNode(t) && (0 === t.length || _.isNode(t[0]))
                    },
                    isSVG: function(t) {
                        return e.SVGElement && t instanceof e.SVGElement
                    },
                    isEmptyObject: function(t) {
                        for (var e in t)
                            if (t.hasOwnProperty(e)) return !1;
                        return !0
                    }
                },
                x = !1;
            if (t.fn && t.fn.jquery ? (h = t, x = !0) : h = e.Velocity.Utilities, m <= 8 && !x) throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");
            if (m <= 7) return void(jQuery.fn.velocity = jQuery.fn.animate);
            var w = 400,
                S = "swing",
                E = {
                    State: {
                        isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                        isAndroid: /Android/i.test(navigator.userAgent),
                        isGingerbread: /Android 2\.3\.[3-7]/i.test(navigator.userAgent),
                        isChrome: e.chrome,
                        isFirefox: /Firefox/i.test(navigator.userAgent),
                        prefixElement: n.createElement("div"),
                        prefixMatches: {},
                        scrollAnchor: null,
                        scrollPropertyLeft: null,
                        scrollPropertyTop: null,
                        isTicking: !1,
                        calls: [],
                        delayedElements: {
                            count: 0
                        }
                    },
                    CSS: {},
                    Utilities: h,
                    Redirects: {},
                    Easings: {},
                    Promise: e.Promise,
                    defaults: {
                        queue: "",
                        duration: w,
                        easing: S,
                        begin: i,
                        complete: i,
                        progress: i,
                        display: i,
                        visibility: i,
                        loop: !1,
                        delay: !1,
                        mobileHA: !0,
                        _cacheValues: !0,
                        promiseRejectEmpty: !0
                    },
                    init: function(t) {
                        h.data(t, "velocity", {
                            isSVG: _.isSVG(t),
                            isAnimating: !1,
                            computedStyle: null,
                            tweensContainer: null,
                            rootPropertyValueCache: {},
                            transformCache: {}
                        })
                    },
                    hook: null,
                    mock: !1,
                    version: {
                        major: 1,
                        minor: 5,
                        patch: 0
                    },
                    debug: !1,
                    timestamp: !0,
                    pauseAll: function(t) {
                        var e = (new Date).getTime();
                        h.each(E.State.calls, function(e, n) {
                            if (n) {
                                if (t !== i && (n[2].queue !== t || !1 === n[2].queue)) return !0;
                                n[5] = {
                                    resume: !1
                                }
                            }
                        }), h.each(E.State.delayedElements, function(t, n) {
                            n && s(n, e)
                        })
                    },
                    resumeAll: function(t) {
                        var e = (new Date).getTime();
                        h.each(E.State.calls, function(e, n) {
                            if (n) {
                                if (t !== i && (n[2].queue !== t || !1 === n[2].queue)) return !0;
                                n[5] && (n[5].resume = !0)
                            }
                        }), h.each(E.State.delayedElements, function(t, n) {
                            n && l(n, e)
                        })
                    }
                };
            e.pageYOffset !== i ? (E.State.scrollAnchor = e, E.State.scrollPropertyLeft = "pageXOffset", E.State.scrollPropertyTop = "pageYOffset") : (E.State.scrollAnchor = n.documentElement || n.body.parentNode || n.body, E.State.scrollPropertyLeft = "scrollLeft", E.State.scrollPropertyTop = "scrollTop");
            var C = function() {
                function t(t) {
                    return -t.tension * t.x - t.friction * t.v
                }

                function e(e, n, i) {
                    var r = {
                        x: e.x + i.dx * n,
                        v: e.v + i.dv * n,
                        tension: e.tension,
                        friction: e.friction
                    };
                    return {
                        dx: r.v,
                        dv: t(r)
                    }
                }

                function n(n, i) {
                    var r = {
                            dx: n.v,
                            dv: t(n)
                        },
                        o = e(n, .5 * i, r),
                        a = e(n, .5 * i, o),
                        s = e(n, i, a),
                        l = 1 / 6 * (r.dx + 2 * (o.dx + a.dx) + s.dx),
                        u = 1 / 6 * (r.dv + 2 * (o.dv + a.dv) + s.dv);
                    return n.x = n.x + l * i, n.v = n.v + u * i, n
                }
                return function t(e, i, r) {
                    var o, a, s, l = {
                            x: -1,
                            v: 0,
                            tension: null,
                            friction: null
                        },
                        u = [0],
                        c = 0;
                    for (e = parseFloat(e) || 500, i = parseFloat(i) || 20, r = r || null, l.tension = e, l.friction = i, o = null !== r, o ? (c = t(e, i), a = c / r * .016) : a = .016;;)
                        if (s = n(s || l, a), u.push(1 + s.x), c += 16, !(Math.abs(s.x) > 1e-4 && Math.abs(s.v) > 1e-4)) break;
                    return o ? function(t) {
                        return u[t * (u.length - 1) | 0]
                    } : c
                }
            }();
            E.Easings = {
                linear: function(t) {
                    return t
                },
                swing: function(t) {
                    return .5 - Math.cos(t * Math.PI) / 2
                },
                spring: function(t) {
                    return 1 - Math.cos(4.5 * t * Math.PI) * Math.exp(6 * -t)
                }
            }, h.each([
                ["ease", [.25, .1, .25, 1]],
                ["ease-in", [.42, 0, 1, 1]],
                ["ease-out", [0, 0, .58, 1]],
                ["ease-in-out", [.42, 0, .58, 1]],
                ["easeInSine", [.47, 0, .745, .715]],
                ["easeOutSine", [.39, .575, .565, 1]],
                ["easeInOutSine", [.445, .05, .55, .95]],
                ["easeInQuad", [.55, .085, .68, .53]],
                ["easeOutQuad", [.25, .46, .45, .94]],
                ["easeInOutQuad", [.455, .03, .515, .955]],
                ["easeInCubic", [.55, .055, .675, .19]],
                ["easeOutCubic", [.215, .61, .355, 1]],
                ["easeInOutCubic", [.645, .045, .355, 1]],
                ["easeInQuart", [.895, .03, .685, .22]],
                ["easeOutQuart", [.165, .84, .44, 1]],
                ["easeInOutQuart", [.77, 0, .175, 1]],
                ["easeInQuint", [.755, .05, .855, .06]],
                ["easeOutQuint", [.23, 1, .32, 1]],
                ["easeInOutQuint", [.86, 0, .07, 1]],
                ["easeInExpo", [.95, .05, .795, .035]],
                ["easeOutExpo", [.19, 1, .22, 1]],
                ["easeInOutExpo", [1, 0, 0, 1]],
                ["easeInCirc", [.6, .04, .98, .335]],
                ["easeOutCirc", [.075, .82, .165, 1]],
                ["easeInOutCirc", [.785, .135, .15, .86]]
            ], function(t, e) {
                E.Easings[e[0]] = c.apply(null, e[1])
            });
            var T = E.CSS = {
                RegEx: {
                    isHex: /^#([A-f\d]{3}){1,2}$/i,
                    valueUnwrap: /^[A-z]+\((.*)\)$/i,
                    wrappedValueAlreadyExtracted: /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,
                    valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi
                },
                Lists: {
                    colors: ["fill", "stroke", "stopColor", "color", "backgroundColor", "borderColor", "borderTopColor", "borderRightColor", "borderBottomColor", "borderLeftColor", "outlineColor"],
                    transformsBase: ["translateX", "translateY", "scale", "scaleX", "scaleY", "skewX", "skewY", "rotateZ"],
                    transforms3D: ["transformPerspective", "translateZ", "scaleZ", "rotateX", "rotateY"],
                    units: ["%", "em", "ex", "ch", "rem", "vw", "vh", "vmin", "vmax", "cm", "mm", "Q", "in", "pc", "pt", "px", "deg", "grad", "rad", "turn", "s", "ms"],
                    colorNames: {
                        aliceblue: "240,248,255",
                        antiquewhite: "250,235,215",
                        aquamarine: "127,255,212",
                        aqua: "0,255,255",
                        azure: "240,255,255",
                        beige: "245,245,220",
                        bisque: "255,228,196",
                        black: "0,0,0",
                        blanchedalmond: "255,235,205",
                        blueviolet: "138,43,226",
                        blue: "0,0,255",
                        brown: "165,42,42",
                        burlywood: "222,184,135",
                        cadetblue: "95,158,160",
                        chartreuse: "127,255,0",
                        chocolate: "210,105,30",
                        coral: "255,127,80",
                        cornflowerblue: "100,149,237",
                        cornsilk: "255,248,220",
                        crimson: "220,20,60",
                        cyan: "0,255,255",
                        darkblue: "0,0,139",
                        darkcyan: "0,139,139",
                        darkgoldenrod: "184,134,11",
                        darkgray: "169,169,169",
                        darkgrey: "169,169,169",
                        darkgreen: "0,100,0",
                        darkkhaki: "189,183,107",
                        darkmagenta: "139,0,139",
                        darkolivegreen: "85,107,47",
                        darkorange: "255,140,0",
                        darkorchid: "153,50,204",
                        darkred: "139,0,0",
                        darksalmon: "233,150,122",
                        darkseagreen: "143,188,143",
                        darkslateblue: "72,61,139",
                        darkslategray: "47,79,79",
                        darkturquoise: "0,206,209",
                        darkviolet: "148,0,211",
                        deeppink: "255,20,147",
                        deepskyblue: "0,191,255",
                        dimgray: "105,105,105",
                        dimgrey: "105,105,105",
                        dodgerblue: "30,144,255",
                        firebrick: "178,34,34",
                        floralwhite: "255,250,240",
                        forestgreen: "34,139,34",
                        fuchsia: "255,0,255",
                        gainsboro: "220,220,220",
                        ghostwhite: "248,248,255",
                        gold: "255,215,0",
                        goldenrod: "218,165,32",
                        gray: "128,128,128",
                        grey: "128,128,128",
                        greenyellow: "173,255,47",
                        green: "0,128,0",
                        honeydew: "240,255,240",
                        hotpink: "255,105,180",
                        indianred: "205,92,92",
                        indigo: "75,0,130",
                        ivory: "255,255,240",
                        khaki: "240,230,140",
                        lavenderblush: "255,240,245",
                        lavender: "230,230,250",
                        lawngreen: "124,252,0",
                        lemonchiffon: "255,250,205",
                        lightblue: "173,216,230",
                        lightcoral: "240,128,128",
                        lightcyan: "224,255,255",
                        lightgoldenrodyellow: "250,250,210",
                        lightgray: "211,211,211",
                        lightgrey: "211,211,211",
                        lightgreen: "144,238,144",
                        lightpink: "255,182,193",
                        lightsalmon: "255,160,122",
                        lightseagreen: "32,178,170",
                        lightskyblue: "135,206,250",
                        lightslategray: "119,136,153",
                        lightsteelblue: "176,196,222",
                        lightyellow: "255,255,224",
                        limegreen: "50,205,50",
                        lime: "0,255,0",
                        linen: "250,240,230",
                        magenta: "255,0,255",
                        maroon: "128,0,0",
                        mediumaquamarine: "102,205,170",
                        mediumblue: "0,0,205",
                        mediumorchid: "186,85,211",
                        mediumpurple: "147,112,219",
                        mediumseagreen: "60,179,113",
                        mediumslateblue: "123,104,238",
                        mediumspringgreen: "0,250,154",
                        mediumturquoise: "72,209,204",
                        mediumvioletred: "199,21,133",
                        midnightblue: "25,25,112",
                        mintcream: "245,255,250",
                        mistyrose: "255,228,225",
                        moccasin: "255,228,181",
                        navajowhite: "255,222,173",
                        navy: "0,0,128",
                        oldlace: "253,245,230",
                        olivedrab: "107,142,35",
                        olive: "128,128,0",
                        orangered: "255,69,0",
                        orange: "255,165,0",
                        orchid: "218,112,214",
                        palegoldenrod: "238,232,170",
                        palegreen: "152,251,152",
                        paleturquoise: "175,238,238",
                        palevioletred: "219,112,147",
                        papayawhip: "255,239,213",
                        peachpuff: "255,218,185",
                        peru: "205,133,63",
                        pink: "255,192,203",
                        plum: "221,160,221",
                        powderblue: "176,224,230",
                        purple: "128,0,128",
                        red: "255,0,0",
                        rosybrown: "188,143,143",
                        royalblue: "65,105,225",
                        saddlebrown: "139,69,19",
                        salmon: "250,128,114",
                        sandybrown: "244,164,96",
                        seagreen: "46,139,87",
                        seashell: "255,245,238",
                        sienna: "160,82,45",
                        silver: "192,192,192",
                        skyblue: "135,206,235",
                        slateblue: "106,90,205",
                        slategray: "112,128,144",
                        snow: "255,250,250",
                        springgreen: "0,255,127",
                        steelblue: "70,130,180",
                        tan: "210,180,140",
                        teal: "0,128,128",
                        thistle: "216,191,216",
                        tomato: "255,99,71",
                        turquoise: "64,224,208",
                        violet: "238,130,238",
                        wheat: "245,222,179",
                        whitesmoke: "245,245,245",
                        white: "255,255,255",
                        yellowgreen: "154,205,50",
                        yellow: "255,255,0"
                    }
                },
                Hooks: {
                    templates: {
                        textShadow: ["Color X Y Blur", "black 0px 0px 0px"],
                        boxShadow: ["Color X Y Blur Spread", "black 0px 0px 0px 0px"],
                        clip: ["Top Right Bottom Left", "0px 0px 0px 0px"],
                        backgroundPosition: ["X Y", "0% 0%"],
                        transformOrigin: ["X Y Z", "50% 50% 0px"],
                        perspectiveOrigin: ["X Y", "50% 50%"]
                    },
                    registered: {},
                    register: function() {
                        for (var t = 0; t < T.Lists.colors.length; t++) {
                            var e = "color" === T.Lists.colors[t] ? "0 0 0 1" : "255 255 255 1";
                            T.Hooks.templates[T.Lists.colors[t]] = ["Red Green Blue Alpha", e]
                        }
                        var n, i, r;
                        if (m)
                            for (n in T.Hooks.templates)
                                if (T.Hooks.templates.hasOwnProperty(n)) {
                                    i = T.Hooks.templates[n], r = i[0].split(" ");
                                    var o = i[1].match(T.RegEx.valueSplit);
                                    "Color" === r[0] && (r.push(r.shift()), o.push(o.shift()), T.Hooks.templates[n] = [r.join(" "), o.join(" ")])
                                }
                        for (n in T.Hooks.templates)
                            if (T.Hooks.templates.hasOwnProperty(n)) {
                                i = T.Hooks.templates[n], r = i[0].split(" ");
                                for (var a in r)
                                    if (r.hasOwnProperty(a)) {
                                        var s = n + r[a],
                                            l = a;
                                        T.Hooks.registered[s] = [n, l]
                                    }
                            }
                    },
                    getRoot: function(t) {
                        var e = T.Hooks.registered[t];
                        return e ? e[0] : t
                    },
                    getUnit: function(t, e) {
                        var n = (t.substr(e || 0, 5).match(/^[a-z%]+/) || [])[0] || "";
                        return n && b(T.Lists.units, n) ? n : ""
                    },
                    fixColors: function(t) {
                        return t.replace(/(rgba?\(\s*)?(\b[a-z]+\b)/g, function(t, e, n) {
                            return T.Lists.colorNames.hasOwnProperty(n) ? (e || "rgba(") + T.Lists.colorNames[n] + (e ? "" : ",1)") : e + n
                        })
                    },
                    cleanRootPropertyValue: function(t, e) {
                        return T.RegEx.valueUnwrap.test(e) && (e = e.match(T.RegEx.valueUnwrap)[1]), T.Values.isCSSNullValue(e) && (e = T.Hooks.templates[t][1]), e
                    },
                    extractValue: function(t, e) {
                        var n = T.Hooks.registered[t];
                        if (n) {
                            var i = n[0],
                                r = n[1];
                            return e = T.Hooks.cleanRootPropertyValue(i, e), e.toString().match(T.RegEx.valueSplit)[r]
                        }
                        return e
                    },
                    injectValue: function(t, e, n) {
                        var i = T.Hooks.registered[t];
                        if (i) {
                            var r, o = i[0],
                                a = i[1];
                            return n = T.Hooks.cleanRootPropertyValue(o, n), r = n.toString().match(T.RegEx.valueSplit), r[a] = e, r.join(" ")
                        }
                        return n
                    }
                },
                Normalizations: {
                    registered: {
                        clip: function(t, e, n) {
                            switch (t) {
                                case "name":
                                    return "clip";
                                case "extract":
                                    var i;
                                    return T.RegEx.wrappedValueAlreadyExtracted.test(n) ? i = n : (i = n.toString().match(T.RegEx.valueUnwrap), i = i ? i[1].replace(/,(\s+)?/g, " ") : n), i;
                                case "inject":
                                    return "rect(" + n + ")"
                            }
                        },
                        blur: function(t, e, n) {
                            switch (t) {
                                case "name":
                                    return E.State.isFirefox ? "filter" : "-webkit-filter";
                                case "extract":
                                    var i = parseFloat(n);
                                    if (!i && 0 !== i) {
                                        var r = n.toString().match(/blur\(([0-9]+[A-z]+)\)/i);
                                        i = r ? r[1] : 0
                                    }
                                    return i;
                                case "inject":
                                    return parseFloat(n) ? "blur(" + n + ")" : "none"
                            }
                        },
                        opacity: function(t, e, n) {
                            if (m <= 8) switch (t) {
                                case "name":
                                    return "filter";
                                case "extract":
                                    var i = n.toString().match(/alpha\(opacity=(.*)\)/i);
                                    return n = i ? i[1] / 100 : 1;
                                case "inject":
                                    return e.style.zoom = 1, parseFloat(n) >= 1 ? "" : "alpha(opacity=" + parseInt(100 * parseFloat(n), 10) + ")"
                            } else switch (t) {
                                case "name":
                                    return "opacity";
                                case "extract":
                                case "inject":
                                    return n
                            }
                        }
                    },
                    register: function() {
                        function t(t, e, n) {
                            if ("border-box" === T.getPropertyValue(e, "boxSizing").toString().toLowerCase() === (n || !1)) {
                                var i, r, o = 0,
                                    a = "width" === t ? ["Left", "Right"] : ["Top", "Bottom"],
                                    s = ["padding" + a[0], "padding" + a[1], "border" + a[0] + "Width", "border" + a[1] + "Width"];
                                for (i = 0; i < s.length; i++) r = parseFloat(T.getPropertyValue(e, s[i])), isNaN(r) || (o += r);
                                return n ? -o : o
                            }
                            return 0
                        }

                        function e(e, n) {
                            return function(i, r, o) {
                                switch (i) {
                                    case "name":
                                        return e;
                                    case "extract":
                                        return parseFloat(o) + t(e, r, n);
                                    case "inject":
                                        return parseFloat(o) - t(e, r, n) + "px"
                                }
                            }
                        }
                        m && !(m > 9) || E.State.isGingerbread || (T.Lists.transformsBase = T.Lists.transformsBase.concat(T.Lists.transforms3D));
                        for (var n = 0; n < T.Lists.transformsBase.length; n++) ! function() {
                            var t = T.Lists.transformsBase[n];
                            T.Normalizations.registered[t] = function(e, n, r) {
                                switch (e) {
                                    case "name":
                                        return "transform";
                                    case "extract":
                                        return a(n) === i || a(n).transformCache[t] === i ? /^scale/i.test(t) ? 1 : 0 : a(n).transformCache[t].replace(/[()]/g, "");
                                    case "inject":
                                        var o = !1;
                                        switch (t.substr(0, t.length - 1)) {
                                            case "translate":
                                                o = !/(%|px|em|rem|vw|vh|\d)$/i.test(r);
                                                break;
                                            case "scal":
                                            case "scale":
                                                E.State.isAndroid && a(n).transformCache[t] === i && r < 1 && (r = 1), o = !/(\d)$/i.test(r);
                                                break;
                                            case "skew":
                                            case "rotate":
                                                o = !/(deg|\d)$/i.test(r)
                                        }
                                        return o || (a(n).transformCache[t] = "(" + r + ")"), a(n).transformCache[t]
                                }
                            }
                        }();
                        for (var r = 0; r < T.Lists.colors.length; r++) ! function() {
                            var t = T.Lists.colors[r];
                            T.Normalizations.registered[t] = function(e, n, r) {
                                switch (e) {
                                    case "name":
                                        return t;
                                    case "extract":
                                        var o;
                                        if (T.RegEx.wrappedValueAlreadyExtracted.test(r)) o = r;
                                        else {
                                            var a, s = {
                                                black: "rgb(0, 0, 0)",
                                                blue: "rgb(0, 0, 255)",
                                                gray: "rgb(128, 128, 128)",
                                                green: "rgb(0, 128, 0)",
                                                red: "rgb(255, 0, 0)",
                                                white: "rgb(255, 255, 255)"
                                            };
                                            /^[A-z]+$/i.test(r) ? a = s[r] !== i ? s[r] : s.black : T.RegEx.isHex.test(r) ? a = "rgb(" + T.Values.hexToRgb(r).join(" ") + ")" : /^rgba?\(/i.test(r) || (a = s.black), o = (a || r).toString().match(T.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g, " ")
                                        }
                                        return (!m || m > 8) && 3 === o.split(" ").length && (o += " 1"), o;
                                    case "inject":
                                        return /^rgb/.test(r) ? r : (m <= 8 ? 4 === r.split(" ").length && (r = r.split(/\s+/).slice(0, 3).join(" ")) : 3 === r.split(" ").length && (r += " 1"), (m <= 8 ? "rgb" : "rgba") + "(" + r.replace(/\s+/g, ",").replace(/\.(\d)+(?=,)/g, "") + ")")
                                }
                            }
                        }();
                        T.Normalizations.registered.innerWidth = e("width", !0), T.Normalizations.registered.innerHeight = e("height", !0), T.Normalizations.registered.outerWidth = e("width"), T.Normalizations.registered.outerHeight = e("height")
                    }
                },
                Names: {
                    camelCase: function(t) {
                        return t.replace(/-(\w)/g, function(t, e) {
                            return e.toUpperCase()
                        })
                    },
                    SVGAttribute: function(t) {
                        var e = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
                        return (m || E.State.isAndroid && !E.State.isChrome) && (e += "|transform"), new RegExp("^(" + e + ")$", "i").test(t)
                    },
                    prefixCheck: function(t) {
                        if (E.State.prefixMatches[t]) return [E.State.prefixMatches[t], !0];
                        for (var e = ["", "Webkit", "Moz", "ms", "O"], n = 0, i = e.length; n < i; n++) {
                            var r;
                            if (r = 0 === n ? t : e[n] + t.replace(/^\w/, function(t) {
                                    return t.toUpperCase()
                                }), _.isString(E.State.prefixElement.style[r])) return E.State.prefixMatches[t] = r, [r, !0]
                        }
                        return [t, !1]
                    }
                },
                Values: {
                    hexToRgb: function(t) {
                        var e, n = /^#?([a-f\d])([a-f\d])([a-f\d])$/i,
                            i = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;
                        return t = t.replace(n, function(t, e, n, i) {
                            return e + e + n + n + i + i
                        }), e = i.exec(t), e ? [parseInt(e[1], 16), parseInt(e[2], 16), parseInt(e[3], 16)] : [0, 0, 0]
                    },
                    isCSSNullValue: function(t) {
                        return !t || /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(t)
                    },
                    getUnitType: function(t) {
                        return /^(rotate|skew)/i.test(t) ? "deg" : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(t) ? "" : "px"
                    },
                    getDisplayType: function(t) {
                        var e = t && t.tagName.toString().toLowerCase();
                        return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(e) ? "inline" : /^(li)$/i.test(e) ? "list-item" : /^(tr)$/i.test(e) ? "table-row" : /^(table)$/i.test(e) ? "table" : /^(tbody)$/i.test(e) ? "table-row-group" : "block"
                    },
                    addClass: function(t, e) {
                        if (t)
                            if (t.classList) t.classList.add(e);
                            else if (_.isString(t.className)) t.className += (t.className.length ? " " : "") + e;
                        else {
                            var n = t.getAttribute(m <= 7 ? "className" : "class") || "";
                            t.setAttribute("class", n + (n ? " " : "") + e)
                        }
                    },
                    removeClass: function(t, e) {
                        if (t)
                            if (t.classList) t.classList.remove(e);
                            else if (_.isString(t.className)) t.className = t.className.toString().replace(new RegExp("(^|\\s)" + e.split(" ").join("|") + "(\\s|$)", "gi"), " ");
                        else {
                            var n = t.getAttribute(m <= 7 ? "className" : "class") || "";
                            t.setAttribute("class", n.replace(new RegExp("(^|s)" + e.split(" ").join("|") + "(s|$)", "gi"), " "))
                        }
                    }
                },
                getPropertyValue: function(t, n, r, o) {
                    function s(t, n) {
                        var r = 0;
                        if (m <= 8) r = h.css(t, n);
                        else {
                            var l = !1;
                            /^(width|height)$/.test(n) && 0 === T.getPropertyValue(t, "display") && (l = !0, T.setPropertyValue(t, "display", T.Values.getDisplayType(t)));
                            var u = function() {
                                l && T.setPropertyValue(t, "display", "none")
                            };
                            if (!o) {
                                if ("height" === n && "border-box" !== T.getPropertyValue(t, "boxSizing").toString().toLowerCase()) {
                                    var c = t.offsetHeight - (parseFloat(T.getPropertyValue(t, "borderTopWidth")) || 0) - (parseFloat(T.getPropertyValue(t, "borderBottomWidth")) || 0) - (parseFloat(T.getPropertyValue(t, "paddingTop")) || 0) - (parseFloat(T.getPropertyValue(t, "paddingBottom")) || 0);
                                    return u(), c
                                }
                                if ("width" === n && "border-box" !== T.getPropertyValue(t, "boxSizing").toString().toLowerCase()) {
                                    var f = t.offsetWidth - (parseFloat(T.getPropertyValue(t, "borderLeftWidth")) || 0) - (parseFloat(T.getPropertyValue(t, "borderRightWidth")) || 0) - (parseFloat(T.getPropertyValue(t, "paddingLeft")) || 0) - (parseFloat(T.getPropertyValue(t, "paddingRight")) || 0);
                                    return u(), f
                                }
                            }
                            var d;
                            d = a(t) === i ? e.getComputedStyle(t, null) : a(t).computedStyle ? a(t).computedStyle : a(t).computedStyle = e.getComputedStyle(t, null), "borderColor" === n && (n = "borderTopColor"), r = 9 === m && "filter" === n ? d.getPropertyValue(n) : d[n], "" !== r && null !== r || (r = t.style[n]), u()
                        }
                        if ("auto" === r && /^(top|right|bottom|left)$/i.test(n)) {
                            var p = s(t, "position");
                            ("fixed" === p || "absolute" === p && /top|left/i.test(n)) && (r = h(t).position()[n] + "px")
                        }
                        return r
                    }
                    var l;
                    if (T.Hooks.registered[n]) {
                        var u = n,
                            c = T.Hooks.getRoot(u);
                        r === i && (r = T.getPropertyValue(t, T.Names.prefixCheck(c)[0])), T.Normalizations.registered[c] && (r = T.Normalizations.registered[c]("extract", t, r)), l = T.Hooks.extractValue(u, r)
                    } else if (T.Normalizations.registered[n]) {
                        var f, d;
                        f = T.Normalizations.registered[n]("name", t), "transform" !== f && (d = s(t, T.Names.prefixCheck(f)[0]), T.Values.isCSSNullValue(d) && T.Hooks.templates[n] && (d = T.Hooks.templates[n][1])), l = T.Normalizations.registered[n]("extract", t, d)
                    }
                    if (!/^[\d-]/.test(l)) {
                        var p = a(t);
                        if (p && p.isSVG && T.Names.SVGAttribute(n))
                            if (/^(height|width)$/i.test(n)) try {
                                l = t.getBBox()[n]
                            } catch (t) {
                                l = 0
                            } else l = t.getAttribute(n);
                            else l = s(t, T.Names.prefixCheck(n)[0])
                    }
                    return T.Values.isCSSNullValue(l) && (l = 0), E.debug, l
                },
                setPropertyValue: function(t, n, i, r, o) {
                    var s = n;
                    if ("scroll" === n) o.container ? o.container["scroll" + o.direction] = i : "Left" === o.direction ? e.scrollTo(i, o.alternateValue) : e.scrollTo(o.alternateValue, i);
                    else if (T.Normalizations.registered[n] && "transform" === T.Normalizations.registered[n]("name", t)) T.Normalizations.registered[n]("inject", t, i), s = "transform", i = a(t).transformCache[n];
                    else {
                        if (T.Hooks.registered[n]) {
                            var l = n,
                                u = T.Hooks.getRoot(n);
                            r = r || T.getPropertyValue(t, u), i = T.Hooks.injectValue(l, i, r), n = u
                        }
                        if (T.Normalizations.registered[n] && (i = T.Normalizations.registered[n]("inject", t, i), n = T.Normalizations.registered[n]("name", t)), s = T.Names.prefixCheck(n)[0], m <= 8) try {
                            t.style[s] = i
                        } catch (t) {
                            E.debug
                        } else {
                            var c = a(t);
                            c && c.isSVG && T.Names.SVGAttribute(n) ? t.setAttribute(n, i) : t.style[s] = i
                        }
                        E.debug
                    }
                    return [s, i]
                },
                flushTransformCache: function(t) {
                    var e = "",
                        n = a(t);
                    if ((m || E.State.isAndroid && !E.State.isChrome) && n && n.isSVG) {
                        var i = function(e) {
                                return parseFloat(T.getPropertyValue(t, e))
                            },
                            r = {
                                translate: [i("translateX"), i("translateY")],
                                skewX: [i("skewX")],
                                skewY: [i("skewY")],
                                scale: 1 !== i("scale") ? [i("scale"), i("scale")] : [i("scaleX"), i("scaleY")],
                                rotate: [i("rotateZ"), 0, 0]
                            };
                        h.each(a(t).transformCache, function(t) {
                            /^translate/i.test(t) ? t = "translate" : /^scale/i.test(t) ? t = "scale" : /^rotate/i.test(t) && (t = "rotate"), r[t] && (e += t + "(" + r[t].join(" ") + ") ", delete r[t])
                        })
                    } else {
                        var o, s;
                        h.each(a(t).transformCache, function(n) {
                            if (o = a(t).transformCache[n], "transformPerspective" === n) return s = o, !0;
                            9 === m && "rotateZ" === n && (n = "rotate"), e += n + o + " "
                        }), s && (e = "perspective" + s + " " + e)
                    }
                    T.setPropertyValue(t, "transform", e)
                }
            };
            T.Hooks.register(), T.Normalizations.register(), E.hook = function(t, e, n) {
                var r;
                return t = o(t), h.each(t, function(t, o) {
                    if (a(o) === i && E.init(o), n === i) r === i && (r = T.getPropertyValue(o, e));
                    else {
                        var s = T.setPropertyValue(o, e, n);
                        "transform" === s[0] && E.CSS.flushTransformCache(o), r = s
                    }
                }), r
            };
            var A = function t() {
                function r() {
                    return m ? A.promise || null : g
                }

                function u(t, r) {
                    function o(o) {
                        var c, p;
                        if (l.begin && 0 === O) try {
                            l.begin.call(y, y)
                        } catch (t) {
                            setTimeout(function() {
                                throw t
                            }, 1)
                        }
                        if ("scroll" === N) {
                            var m, g, v, w = /^x$/i.test(l.axis) ? "Left" : "Top",
                                C = parseFloat(l.offset) || 0;
                            l.container ? _.isWrapped(l.container) || _.isNode(l.container) ? (l.container = l.container[0] || l.container, m = l.container["scroll" + w], v = m + h(t).position()[w.toLowerCase()] + C) : l.container = null : (m = E.State.scrollAnchor[E.State["scrollProperty" + w]], g = E.State.scrollAnchor[E.State["scrollProperty" + ("Left" === w ? "Top" : "Left")]], v = h(t).offset()[w.toLowerCase()] + C), u = {
                                scroll: {
                                    rootPropertyValue: !1,
                                    startValue: m,
                                    currentValue: m,
                                    endValue: v,
                                    unitType: "",
                                    easing: l.easing,
                                    scrollData: {
                                        container: l.container,
                                        direction: w,
                                        alternateValue: g
                                    }
                                },
                                element: t
                            }, E.debug
                        } else if ("reverse" === N) {
                            if (!(c = a(t))) return;
                            if (!c.tweensContainer) return void h.dequeue(t, l.queue);
                            "none" === c.opts.display && (c.opts.display = "auto"), "hidden" === c.opts.visibility && (c.opts.visibility = "visible"), c.opts.loop = !1, c.opts.begin = null, c.opts.complete = null, S.easing || delete l.easing, S.duration || delete l.duration, l = h.extend({}, c.opts, l), p = h.extend(!0, {}, c ? c.tweensContainer : null);
                            for (var k in p)
                                if (p.hasOwnProperty(k) && "element" !== k) {
                                    var D = p[k].startValue;
                                    p[k].startValue = p[k].currentValue = p[k].endValue, p[k].endValue = D, _.isEmptyObject(S) || (p[k].easing = l.easing), E.debug
                                }
                            u = p
                        } else if ("start" === N) {
                            c = a(t), c && c.tweensContainer && !0 === c.isAnimating && (p = c.tweensContainer);
                            var P = function(r, o) {
                                var a, f = T.Hooks.getRoot(r),
                                    d = !1,
                                    m = o[0],
                                    g = o[1],
                                    v = o[2];
                                if (!(c && c.isSVG || "tween" === f || !1 !== T.Names.prefixCheck(f)[1] || T.Normalizations.registered[f] !== i)) return void E.debug;
                                (l.display !== i && null !== l.display && "none" !== l.display || l.visibility !== i && "hidden" !== l.visibility) && /opacity|filter/.test(r) && !v && 0 !== m && (v = 0), l._cacheValues && p && p[r] ? (v === i && (v = p[r].endValue + p[r].unitType), d = c.rootPropertyValueCache[f]) : T.Hooks.registered[r] ? v === i ? (d = T.getPropertyValue(t, f), v = T.getPropertyValue(t, r, d)) : d = T.Hooks.templates[f][1] : v === i && (v = T.getPropertyValue(t, r));
                                var y, b, x, w = !1,
                                    S = function(t, e) {
                                        var n, i;
                                        return i = (e || "0").toString().toLowerCase().replace(/[%A-z]+$/, function(t) {
                                            return n = t, ""
                                        }), n || (n = T.Values.getUnitType(t)), [i, n]
                                    };
                                if (v !== m && _.isString(v) && _.isString(m)) {
                                    a = "";
                                    var C = 0,
                                        A = 0,
                                        I = [],
                                        O = [],
                                        k = 0,
                                        D = 0,
                                        N = 0;
                                    for (v = T.Hooks.fixColors(v), m = T.Hooks.fixColors(m); C < v.length && A < m.length;) {
                                        var P = v[C],
                                            L = m[A];
                                        if (/[\d\.-]/.test(P) && /[\d\.-]/.test(L)) {
                                            for (var j = P, B = L, V = ".", R = "."; ++C < v.length;) {
                                                if ((P = v[C]) === V) V = "..";
                                                else if (!/\d/.test(P)) break;
                                                j += P
                                            }
                                            for (; ++A < m.length;) {
                                                if ((L = m[A]) === R) R = "..";
                                                else if (!/\d/.test(L)) break;
                                                B += L
                                            }
                                            var M = T.Hooks.getUnit(v, C),
                                                H = T.Hooks.getUnit(m, A);
                                            if (C += M.length, A += H.length, M === H) j === B ? a += j + M : (a += "{" + I.length + (D ? "!" : "") + "}" + M, I.push(parseFloat(j)), O.push(parseFloat(B)));
                                            else {
                                                var W = parseFloat(j),
                                                    U = parseFloat(B);
                                                a += (k < 5 ? "calc" : "") + "(" + (W ? "{" + I.length + (D ? "!" : "") + "}" : "0") + M + " + " + (U ? "{" + (I.length + (W ? 1 : 0)) + (D ? "!" : "") + "}" : "0") + H + ")", W && (I.push(W), O.push(0)), U && (I.push(0), O.push(U))
                                            }
                                        } else {
                                            if (P !== L) {
                                                k = 0;
                                                break
                                            }
                                            a += P, C++, A++, 0 === k && "c" === P || 1 === k && "a" === P || 2 === k && "l" === P || 3 === k && "c" === P || k >= 4 && "(" === P ? k++ : (k && k < 5 || k >= 4 && ")" === P && --k < 5) && (k = 0), 0 === D && "r" === P || 1 === D && "g" === P || 2 === D && "b" === P || 3 === D && "a" === P || D >= 3 && "(" === P ? (3 === D && "a" === P && (N = 1), D++) : N && "," === P ? ++N > 3 && (D = N = 0) : (N && D < (N ? 5 : 4) || D >= (N ? 4 : 3) && ")" === P && --D < (N ? 5 : 4)) && (D = N = 0)
                                        }
                                    }
                                    C === v.length && A === m.length || (E.debug, a = i), a && (I.length ? (E.debug, v = I, m = O, b = x = "") : a = i)
                                }
                                a || (y = S(r, v), v = y[0], x = y[1], y = S(r, m), m = y[0].replace(/^([+-\/*])=/, function(t, e) {
                                    return w = e, ""
                                }), b = y[1], v = parseFloat(v) || 0, m = parseFloat(m) || 0, "%" === b && (/^(fontSize|lineHeight)$/.test(r) ? (m /= 100, b = "em") : /^scale/.test(r) ? (m /= 100, b = "") : /(Red|Green|Blue)$/i.test(r) && (m = m / 100 * 255, b = "")));
                                if (/[\/*]/.test(w)) b = x;
                                else if (x !== b && 0 !== v)
                                    if (0 === m) b = x;
                                    else {
                                        s = s || function() {
                                            var i = {
                                                    myParent: t.parentNode || n.body,
                                                    position: T.getPropertyValue(t, "position"),
                                                    fontSize: T.getPropertyValue(t, "fontSize")
                                                },
                                                r = i.position === F.lastPosition && i.myParent === F.lastParent,
                                                o = i.fontSize === F.lastFontSize;
                                            F.lastParent = i.myParent, F.lastPosition = i.position, F.lastFontSize = i.fontSize;
                                            var a = {};
                                            if (o && r) a.emToPx = F.lastEmToPx, a.percentToPxWidth = F.lastPercentToPxWidth, a.percentToPxHeight = F.lastPercentToPxHeight;
                                            else {
                                                var s = c && c.isSVG ? n.createElementNS("http://www.w3.org/2000/svg", "rect") : n.createElement("div");
                                                E.init(s), i.myParent.appendChild(s), h.each(["overflow", "overflowX", "overflowY"], function(t, e) {
                                                    E.CSS.setPropertyValue(s, e, "hidden")
                                                }), E.CSS.setPropertyValue(s, "position", i.position), E.CSS.setPropertyValue(s, "fontSize", i.fontSize), E.CSS.setPropertyValue(s, "boxSizing", "content-box"), h.each(["minWidth", "maxWidth", "width", "minHeight", "maxHeight", "height"], function(t, e) {
                                                    E.CSS.setPropertyValue(s, e, "100%")
                                                }), E.CSS.setPropertyValue(s, "paddingLeft", "100em"), a.percentToPxWidth = F.lastPercentToPxWidth = (parseFloat(T.getPropertyValue(s, "width", null, !0)) || 1) / 100, a.percentToPxHeight = F.lastPercentToPxHeight = (parseFloat(T.getPropertyValue(s, "height", null, !0)) || 1) / 100, a.emToPx = F.lastEmToPx = (parseFloat(T.getPropertyValue(s, "paddingLeft")) || 1) / 100, i.myParent.removeChild(s)
                                            }
                                            return null === F.remToPx && (F.remToPx = parseFloat(T.getPropertyValue(n.body, "fontSize")) || 16), null === F.vwToPx && (F.vwToPx = parseFloat(e.innerWidth) / 100, F.vhToPx = parseFloat(e.innerHeight) / 100), a.remToPx = F.remToPx, a.vwToPx = F.vwToPx, a.vhToPx = F.vhToPx, E.debug, a
                                        }();
                                        var q = /margin|padding|left|right|width|text|word|letter/i.test(r) || /X$/.test(r) || "x" === r ? "x" : "y";
                                        switch (x) {
                                            case "%":
                                                v *= "x" === q ? s.percentToPxWidth : s.percentToPxHeight;
                                                break;
                                            case "px":
                                                break;
                                            default:
                                                v *= s[x + "ToPx"]
                                        }
                                        switch (b) {
                                            case "%":
                                                v *= 1 / ("x" === q ? s.percentToPxWidth : s.percentToPxHeight);
                                                break;
                                            case "px":
                                                break;
                                            default:
                                                v *= 1 / s[b + "ToPx"]
                                        }
                                    }
                                switch (w) {
                                    case "+":
                                        m = v + m;
                                        break;
                                    case "-":
                                        m = v - m;
                                        break;
                                    case "*":
                                        m *= v;
                                        break;
                                    case "/":
                                        m = v / m
                                }
                                u[r] = {
                                    rootPropertyValue: d,
                                    startValue: v,
                                    currentValue: v,
                                    endValue: m,
                                    unitType: b,
                                    easing: g
                                }, a && (u[r].pattern = a), E.debug
                            };
                            for (var L in x)
                                if (x.hasOwnProperty(L)) {
                                    var j = T.Names.camelCase(L),
                                        B = function(e, n) {
                                            var i, o, a;
                                            return _.isFunction(e) && (e = e.call(t, r, I)), _.isArray(e) ? (i = e[0], !_.isArray(e[1]) && /^[\d-]/.test(e[1]) || _.isFunction(e[1]) || T.RegEx.isHex.test(e[1]) ? a = e[1] : _.isString(e[1]) && !T.RegEx.isHex.test(e[1]) && E.Easings[e[1]] || _.isArray(e[1]) ? (o = n ? e[1] : f(e[1], l.duration), a = e[2]) : a = e[1] || e[2]) : i = e, n || (o = o || l.easing), _.isFunction(i) && (i = i.call(t, r, I)), _.isFunction(a) && (a = a.call(t, r, I)), [i || 0, o, a]
                                        }(x[L]);
                                    if (b(T.Lists.colors, j)) {
                                        var V = B[0],
                                            M = B[1],
                                            H = B[2];
                                        if (T.RegEx.isHex.test(V)) {
                                            for (var W = ["Red", "Green", "Blue"], U = T.Values.hexToRgb(V), q = H ? T.Values.hexToRgb(H) : i, z = 0; z < W.length; z++) {
                                                var $ = [U[z]];
                                                M && $.push(M), q !== i && $.push(q[z]), P(j + W[z], $)
                                            }
                                            continue
                                        }
                                    }
                                    P(j, B)
                                }
                            u.element = t
                        }
                        u.element && (T.Values.addClass(t, "velocity-animating"), R.push(u), c = a(t), c && ("" === l.queue && (c.tweensContainer = u, c.opts = l), c.isAnimating = !0), O === I - 1 ? (E.State.calls.push([R, y, l, null, A.resolver, null, 0]), !1 === E.State.isTicking && (E.State.isTicking = !0, d())) : O++)
                    }
                    var s, l = h.extend({}, E.defaults, S),
                        u = {};
                    switch (a(t) === i && E.init(t), parseFloat(l.delay) && !1 !== l.queue && h.queue(t, l.queue, function(e) {
                        E.velocityQueueEntryFlag = !0;
                        var n = E.State.delayedElements.count++;
                        E.State.delayedElements[n] = t;
                        var i = function(t) {
                            return function() {
                                E.State.delayedElements[t] = !1, e()
                            }
                        }(n);
                        a(t).delayBegin = (new Date).getTime(), a(t).delay = parseFloat(l.delay), a(t).delayTimer = {
                            setTimeout: setTimeout(e, parseFloat(l.delay)),
                            next: i
                        }
                    }), l.duration.toString().toLowerCase()) {
                        case "fast":
                            l.duration = 200;
                            break;
                        case "normal":
                            l.duration = w;
                            break;
                        case "slow":
                            l.duration = 600;
                            break;
                        default:
                            l.duration = parseFloat(l.duration) || 1
                    }
                    if (!1 !== E.mock && (!0 === E.mock ? l.duration = l.delay = 1 : (l.duration *= parseFloat(E.mock) || 1, l.delay *= parseFloat(E.mock) || 1)), l.easing = f(l.easing, l.duration), l.begin && !_.isFunction(l.begin) && (l.begin = null), l.progress && !_.isFunction(l.progress) && (l.progress = null), l.complete && !_.isFunction(l.complete) && (l.complete = null), l.display !== i && null !== l.display && (l.display = l.display.toString().toLowerCase(), "auto" === l.display && (l.display = E.CSS.Values.getDisplayType(t))), l.visibility !== i && null !== l.visibility && (l.visibility = l.visibility.toString().toLowerCase()), l.mobileHA = l.mobileHA && E.State.isMobile && !E.State.isGingerbread, !1 === l.queue)
                        if (l.delay) {
                            var c = E.State.delayedElements.count++;
                            E.State.delayedElements[c] = t;
                            var p = function(t) {
                                return function() {
                                    E.State.delayedElements[t] = !1, o()
                                }
                            }(c);
                            a(t).delayBegin = (new Date).getTime(), a(t).delay = parseFloat(l.delay), a(t).delayTimer = {
                                setTimeout: setTimeout(o, parseFloat(l.delay)),
                                next: p
                            }
                        } else o();
                    else h.queue(t, l.queue, function(t, e) {
                        if (!0 === e) return A.promise && A.resolver(y), !0;
                        E.velocityQueueEntryFlag = !0, o(t)
                    });
                    "" !== l.queue && "fx" !== l.queue || "inprogress" === h.queue(t)[0] || h.dequeue(t)
                }
                var c, m, g, v, y, x, S, C = arguments[0] && (arguments[0].p || h.isPlainObject(arguments[0].properties) && !arguments[0].properties.names || _.isString(arguments[0].properties));
                _.isWrapped(this) ? (m = !1, v = 0, y = this, g = this) : (m = !0, v = 1, y = C ? arguments[0].elements || arguments[0].e : arguments[0]);
                var A = {
                    promise: null,
                    resolver: null,
                    rejecter: null
                };
                if (m && E.Promise && (A.promise = new E.Promise(function(t, e) {
                        A.resolver = t, A.rejecter = e
                    })), C ? (x = arguments[0].properties || arguments[0].p, S = arguments[0].options || arguments[0].o) : (x = arguments[v], S = arguments[v + 1]), !(y = o(y))) return void(A.promise && (x && S && !1 === S.promiseRejectEmpty ? A.resolver() : A.rejecter()));
                var I = y.length,
                    O = 0;
                if (!/^(stop|finish|finishAll|pause|resume)$/i.test(x) && !h.isPlainObject(S)) {
                    var k = v + 1;
                    S = {};
                    for (var D = k; D < arguments.length; D++) _.isArray(arguments[D]) || !/^(fast|normal|slow)$/i.test(arguments[D]) && !/^\d/.test(arguments[D]) ? _.isString(arguments[D]) || _.isArray(arguments[D]) ? S.easing = arguments[D] : _.isFunction(arguments[D]) && (S.complete = arguments[D]) : S.duration = arguments[D]
                }
                var N;
                switch (x) {
                    case "scroll":
                        N = "scroll";
                        break;
                    case "reverse":
                        N = "reverse";
                        break;
                    case "pause":
                        var P = (new Date).getTime();
                        return h.each(y, function(t, e) {
                            s(e, P)
                        }), h.each(E.State.calls, function(t, e) {
                            var n = !1;
                            e && h.each(e[1], function(t, r) {
                                var o = S === i ? "" : S;
                                return !0 !== o && e[2].queue !== o && (S !== i || !1 !== e[2].queue) || (h.each(y, function(t, i) {
                                    if (i === r) return e[5] = {
                                        resume: !1
                                    }, n = !0, !1
                                }), !n && void 0)
                            })
                        }), r();
                    case "resume":
                        return h.each(y, function(t, e) {
                            l(e, P)
                        }), h.each(E.State.calls, function(t, e) {
                            var n = !1;
                            e && h.each(e[1], function(t, r) {
                                var o = S === i ? "" : S;
                                return !0 !== o && e[2].queue !== o && (S !== i || !1 !== e[2].queue) || (!e[5] || (h.each(y, function(t, i) {
                                    if (i === r) return e[5].resume = !0, n = !0, !1
                                }), !n && void 0))
                            })
                        }), r();
                    case "finish":
                    case "finishAll":
                    case "stop":
                        h.each(y, function(t, e) {
                            a(e) && a(e).delayTimer && (clearTimeout(a(e).delayTimer.setTimeout), a(e).delayTimer.next && a(e).delayTimer.next(), delete a(e).delayTimer), "finishAll" !== x || !0 !== S && !_.isString(S) || (h.each(h.queue(e, _.isString(S) ? S : ""), function(t, e) {
                                _.isFunction(e) && e()
                            }), h.queue(e, _.isString(S) ? S : "", []))
                        });
                        var L = [];
                        return h.each(E.State.calls, function(t, e) {
                            e && h.each(e[1], function(n, r) {
                                var o = S === i ? "" : S;
                                if (!0 !== o && e[2].queue !== o && (S !== i || !1 !== e[2].queue)) return !0;
                                h.each(y, function(n, i) {
                                    if (i === r)
                                        if ((!0 === S || _.isString(S)) && (h.each(h.queue(i, _.isString(S) ? S : ""), function(t, e) {
                                                _.isFunction(e) && e(null, !0)
                                            }), h.queue(i, _.isString(S) ? S : "", [])), "stop" === x) {
                                            var s = a(i);
                                            s && s.tweensContainer && !1 !== o && h.each(s.tweensContainer, function(t, e) {
                                                e.endValue = e.currentValue
                                            }), L.push(t)
                                        } else "finish" !== x && "finishAll" !== x || (e[2].duration = 1)
                                })
                            })
                        }), "stop" === x && (h.each(L, function(t, e) {
                            p(e, !0)
                        }), A.promise && A.resolver(y)), r();
                    default:
                        if (!h.isPlainObject(x) || _.isEmptyObject(x)) {
                            if (_.isString(x) && E.Redirects[x]) {
                                c = h.extend({}, S);
                                var j = c.duration,
                                    B = c.delay || 0;
                                return !0 === c.backwards && (y = h.extend(!0, [], y).reverse()), h.each(y, function(t, e) {
                                    parseFloat(c.stagger) ? c.delay = B + parseFloat(c.stagger) * t : _.isFunction(c.stagger) && (c.delay = B + c.stagger.call(e, t, I)), c.drag && (c.duration = parseFloat(j) || (/^(callout|transition)/.test(x) ? 1e3 : w), c.duration = Math.max(c.duration * (c.backwards ? 1 - t / I : (t + 1) / I), .75 * c.duration, 200)), E.Redirects[x].call(e, e, c || {}, t, I, y, A.promise ? A : i)
                                }), r()
                            }
                            var V = "Velocity: First argument (" + x + ") was not a property map, a known action, or a registered redirect. Aborting.";
                            return A.promise ? A.rejecter(new Error(V)) : e.console, r()
                        }
                        N = "start"
                }
                var F = {
                        lastParent: null,
                        lastPosition: null,
                        lastFontSize: null,
                        lastPercentToPxWidth: null,
                        lastPercentToPxHeight: null,
                        lastEmToPx: null,
                        remToPx: null,
                        vwToPx: null,
                        vhToPx: null
                    },
                    R = [];
                h.each(y, function(t, e) {
                    _.isNode(e) && u(e, t)
                }), c = h.extend({}, E.defaults, S), c.loop = parseInt(c.loop, 10);
                var M = 2 * c.loop - 1;
                if (c.loop)
                    for (var H = 0; H < M; H++) {
                        var W = {
                            delay: c.delay,
                            progress: c.progress
                        };
                        H === M - 1 && (W.display = c.display, W.visibility = c.visibility, W.complete = c.complete), t(y, "reverse", W)
                    }
                return r()
            };
            E = h.extend(A, E), E.animate = A;
            var I = e.requestAnimationFrame || g;
            if (!E.State.isMobile && n.hidden !== i) {
                var O = function() {
                    n.hidden ? (I = function(t) {
                        return setTimeout(function() {
                            t(!0)
                        }, 16)
                    }, d()) : I = e.requestAnimationFrame || g
                };
                O(), n.addEventListener("visibilitychange", O)
            }
            return t.Velocity = E, t !== e && (t.fn.velocity = A, t.fn.velocity.defaults = E.defaults), h.each(["Down", "Up"], function(t, e) {
                E.Redirects["slide" + e] = function(t, n, r, o, a, s) {
                    var l = h.extend({}, n),
                        u = l.begin,
                        c = l.complete,
                        f = {},
                        d = {
                            height: "",
                            marginTop: "",
                            marginBottom: "",
                            paddingTop: "",
                            paddingBottom: ""
                        };
                    l.display === i && (l.display = "Down" === e ? "inline" === E.CSS.Values.getDisplayType(t) ? "inline-block" : "block" : "none"), l.begin = function() {
                        0 === r && u && u.call(a, a);
                        for (var n in d)
                            if (d.hasOwnProperty(n)) {
                                f[n] = t.style[n];
                                var i = T.getPropertyValue(t, n);
                                d[n] = "Down" === e ? [i, 0] : [0, i]
                            }
                        f.overflow = t.style.overflow, t.style.overflow = "hidden"
                    }, l.complete = function() {
                        for (var e in f) f.hasOwnProperty(e) && (t.style[e] = f[e]);
                        r === o - 1 && (c && c.call(a, a), s && s.resolver(a))
                    }, E(t, d, l)
                }
            }), h.each(["In", "Out"], function(t, e) {
                E.Redirects["fade" + e] = function(t, n, r, o, a, s) {
                    var l = h.extend({}, n),
                        u = l.complete,
                        c = {
                            opacity: "In" === e ? 1 : 0
                        };
                    0 !== r && (l.begin = null), l.complete = r !== o - 1 ? null : function() {
                        u && u.call(a, a), s && s.resolver(a)
                    }, l.display === i && (l.display = "In" === e ? "auto" : "none"), E(this, c, l)
                }
            }), E
        }(window.jQuery || window.Zepto || window, window, window ? window.document : void 0)
    })
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }
    n(25), n(20), n(22), n(19), n(18), n(8), n(13), n(16), n(17), n(7);
    var r = n(2),
        o = i(r),
        a = n(10),
        s = i(a),
        l = n(3),
        u = i(l),
        c = n(11),
        f = i(c),
        d = n(12),
        p = i(d),
        h = n(1),
        m = i(h),
        g = n(21),
        v = i(g);
    n(14), n(15), n(9);
    for (var y in v.default.prototype) m.default[y] = v.default.prototype[y];
    $(document).ready(function() {
        var t = $(".js-dropdown"),
            e = new s.default,
            n = $('.js-top-menu ul[data-depth="0"]'),
            i = new o.default(t),
            r = new p.default(n),
            a = new u.default,
            l = new f.default;
        i.init(), e.init(), r.init(), a.init(), l.init()
    })
}, function(t, e) {}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }

    function r() {
        a.default.each((0, a.default)(u), function(t, e) {
            (0, a.default)(e).TouchSpin({
                verticalbuttons: !0,
                verticalupclass: "material-icons touchspin-up",
                verticaldownclass: "material-icons touchspin-down",
                buttondown_class: "btn btn-touchspin js-touchspin js-increase-product-quantity",
                buttonup_class: "btn btn-touchspin js-touchspin js-decrease-product-quantity",
                min: parseInt((0, a.default)(e).attr("min"), 10),
                max: 1e6
            })
        }), p.switchErrorStat()
    }
    var o = n(0),
        a = i(o),
        s = n(1),
        l = i(s);
    l.default.cart = l.default.cart || {}, l.default.cart.active_inputs = null;
    var u = 'input[name="product-quantity-spin"]',
        c = !1,
        f = !1,
        d = "";
    (0, a.default)(document).ready(function() {
        function t(t) {
            return "on.startupspin" === t || "on.startdownspin" === t
        }

        function e(t) {
            return "on.startupspin" === t
        }

        function n(t) {
            var e = t.parents(".bootstrap-touchspin").find(h);
            return e.is(":focus") ? null : e
        }

        function i(t) {
            var e = t.split("-"),
                n = void 0,
                i = void 0,
                r = "";
            for (n = 0; n < e.length; n++) i = e[n], 0 !== n && (i = i.substring(0, 1).toUpperCase() + i.substring(1)), r += i;
            return r
        }

        function o(r, o) {
            if (!t(o)) return {
                url: r.attr("href"),
                type: i(r.data("link-action"))
            };
            var a = n(r);
            if (a) {
                return e(o) ? {
                    url: a.data("up-url"),
                    type: "increaseProductQuantity"
                } : {
                    url: a.data("down-url"),
                    type: "decreaseProductQuantity"
                }
            }
        }

        function s(t, e, n) {
            return v(), a.default.ajax({
                url: t,
                method: "POST",
                data: e,
                dataType: "json",
                beforeSend: function(t) {
                    m.push(t)
                }
            }).then(function(t) {
                p.checkUpdateOpertation(t), n.val(t.quantity);
                var e;
                e = n && n.dataset ? n.dataset : t, l.default.emit("updateCart", {
                    reason: e
                })
            }).fail(function(t) {
                l.default.emit("handleError", {
                    eventType: "updateProductQuantityInCart",
                    resp: t
                })
            })
        }

        function c(t) {
            return {
                ajax: "1",
                qty: Math.abs(t),
                action: "update",
                op: f(t)
            }
        }

        function f(t) {
            return t > 0 ? "up" : "down"
        }

        function d(t) {
            var e = (0, a.default)(t.currentTarget),
                n = e.data("update-url"),
                i = e.attr("value"),
                r = e.val();
            if (r != parseInt(r) || r < 0 || isNaN(r)) return void e.val(i);
            var o = r - i;
            if (0 != o) {
                s(n, c(o), e)
            }
        }
        var h = ".js-cart-line-product-quantity",
            m = [];
        l.default.on("updateCart", function() {
            (0, a.default)(".quickview").modal("hide")
        }), l.default.on("updatedCart", function() {
            r()
        }), r();
        var g = (0, a.default)("body"),
            v = function() {
                for (var t; m.length > 0;) t = m.pop(), t.abort()
            },
            y = function(t) {
                return (0, a.default)(t.parents(".bootstrap-touchspin").find("input"))
            },
            b = function(t) {
                t.preventDefault();
                var e = (0, a.default)(t.currentTarget),
                    n = t.currentTarget.dataset,
                    i = o(e, t.namespace),
                    r = {
                        ajax: "1",
                        action: "update"
                    };
                void 0 !== i && (v(), a.default.ajax({
                    url: i.url,
                    method: "POST",
                    data: r,
                    dataType: "json",
                    beforeSend: function(t) {
                        m.push(t)
                    }
                }).then(function(t) {
                    p.checkUpdateOpertation(t), y(e).val(t.quantity), l.default.emit("updateCart", {
                        reason: n
                    })
                }).fail(function(t) {
                    l.default.emit("handleError", {
                        eventType: "updateProductInCart",
                        resp: t,
                        cartAction: i.type
                    })
                }))
            };
        g.on("click", '[data-link-action="delete-from-cart"], [data-link-action="remove-voucher"]', b), g.on("touchspin.on.startdownspin", u, b), g.on("touchspin.on.startupspin", u, b), g.on("focusout", h, function(t) {
            d(t)
        }), g.on("keyup", h, function(t) {
            13 == t.keyCode && d(t)
        }), g.on("click", ".js-discount .code", function(t) {
            t.stopPropagation();
            var e = (0, a.default)(t.currentTarget);
            return (0, a.default)("[name=discount_name]").val(e.text()), !1
        })
    });
    var p = {
        switchErrorStat: function() {
            var t = (0, a.default)(".checkout a");
            if (((0, a.default)("#notifications article.alert-danger").length || c) && t.addClass("disabled"), c && "" !== d) {
                var e = ' <article class="alert alert-danger" role="alert" data-alert="danger"><ul><li>' + d + "</li></ul></article>";
                (0, a.default)("#notifications .container").html(e), d = "", f = !1
            } else !c && f && (c = !1, f = !1, (0, a.default)("#notifications .container").html(""), t.removeClass("disabled"))
        },
        checkUpdateOpertation: function(t) {
            c = t.hasOwnProperty("hasError"), f = !0, c || (c = "" !== t.errors, d = t.errors)
        }
    }
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }

    function r() {
        0 !== (0, a.default)(".js-cancel-address").length && (0, a.default)(".checkout-step:not(.js-current-step) .step-title").addClass("not-allowed"), (0, a.default)(".js-terms a").on("click", function(t) {
            t.preventDefault();
            var e = (0, a.default)(t.target).attr("href");
            e && (e += "?content_only=1", a.default.get(e, function(t) {
                (0, a.default)("#modal").find(".js-modal-content").html((0, a.default)(t).find(".page-cms").contents())
            }).fail(function(t) {
                l.default.emit("handleError", {
                    eventType: "clickTerms",
                    resp: t
                })
            })), (0, a.default)("#modal").modal("show")
        }), (0, a.default)(".js-gift-checkbox").on("click", function(t) {
            (0, a.default)("#gift").collapse("toggle")
        })
    }
    var o = n(0),
        a = i(o),
        s = n(1),
        l = i(s);
    (0, a.default)(document).ready(function() {
        1 === (0, a.default)("body#checkout").length && r(), l.default.on("updatedDeliveryForm", function(t) {
            void 0 !== t.deliveryOption && 0 !== t.deliveryOption.length && ((0, a.default)(".carrier-extra-content").hide(), t.deliveryOption.next(".carrier-extra-content").slideDown())
        })
    })
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }
    var r = n(1),
        o = i(r),
        a = n(0),
        s = i(a);
    o.default.blockcart = o.default.blockcart || {}, o.default.blockcart.showModal = function(t) {
        function e() {
            return (0, s.default)("#blockcart-modal")
        }
        var n = e();
        n.length && n.remove(), (0, s.default)("body").append(t), n = e(), n.modal("show").on("hidden.bs.modal", function(t) {
            o.default.emit("updateProduct", {
                reason: t.currentTarget.dataset
            })
        })
    }
}, function(t, e, n) {
    "use strict";

    function i(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var r = function() {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(),
        o = n(0),
        a = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(o),
        s = function() {
            function t() {
                i(this, t)
            }
            return r(t, [{
                key: "init",
                value: function() {
                    this.parentFocus(), this.togglePasswordVisibility()
                }
            }, {
                key: "parentFocus",
                value: function() {
                    (0, a.default)(".js-child-focus").focus(function() {
                        (0, a.default)(this).closest(".js-parent-focus").addClass("focus")
                    }), (0, a.default)(".js-child-focus").focusout(function() {
                        (0, a.default)(this).closest(".js-parent-focus").removeClass("focus")
                    })
                }
            }, {
                key: "togglePasswordVisibility",
                value: function() {
                    (0, a.default)('button[data-action="show-password"]').on("click", function() {
                        var t = (0, a.default)(this).closest(".input-group").children("input.js-visible-password");
                        "password" === t.attr("type") ? (t.attr("type", "text"), (0, a.default)(this).text((0, a.default)(this).data("textHide"))) : (t.attr("type", "password"), (0, a.default)(this).text((0, a.default)(this).data("textShow")))
                    })
                }
            }]), t
        }();
    e.default = s, t.exports = e.default
}, function(t, e, n) {
    "use strict";

    function i(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var r = function() {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(),
        o = n(0),
        a = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(o);
    n(4);
    var s = function() {
        function t() {
            i(this, t)
        }
        return r(t, [{
            key: "init",
            value: function() {
                var t = this,
                    e = (0, a.default)(".js-modal-arrows"),
                    n = (0, a.default)(".js-modal-product-images"),
                    i = (0, a.default)(".on-sale");
                (0, a.default)("body").on("click", ".js-modal-thumb", function(t) {
                    (0, a.default)(".js-modal-thumb").hasClass("selected") && (0, a.default)(".js-modal-thumb").removeClass("selected"), (0, a.default)(t.currentTarget).addClass("selected"), (0, a.default)(".js-modal-product-cover").attr("src", (0, a.default)(t.target).data("image-large-src")), (0, a.default)(".js-modal-product-cover").attr("title", (0, a.default)(t.target).attr("title")), (0, a.default)(".js-modal-product-cover").attr("alt", (0, a.default)(t.target).attr("alt"))
                }).on("click", "aside#thumbnails", function(t) {
                    "thumbnails" == t.target.id && (0, a.default)("#product-modal").modal("hide")
                }), i.length && (0, a.default)("#product").length && (0, a.default)(".new").css("top", i.height() + 10), (0, a.default)(".js-modal-product-images li").length <= 5 ? e.css("opacity", ".2") : e.on("click", function(e) {
                    (0, a.default)(e.target).hasClass("arrow-up") && n.position().top < 0 ? (t.move("up"), (0, a.default)(".js-modal-arrow-down").css("opacity", "1")) : (0, a.default)(e.target).hasClass("arrow-down") && n.position().top + n.height() > (0, a.default)(".js-modal-mask").height() && (t.move("down"), (0, a.default)(".js-modal-arrow-up").css("opacity", "1"))
                })
            }
        }, {
            key: "move",
            value: function(t) {
                var e = (0, a.default)(".js-modal-product-images"),
                    n = (0, a.default)(".js-modal-product-images li img").height() + 10,
                    i = e.position().top;
                e.velocity({
                    translateY: "up" === t ? i + n : i - n
                }, function() {
                    e.position().top >= 0 ? (0, a.default)(".js-modal-arrow-up").css("opacity", ".2") : e.position().top + e.height() <= (0, a.default)(".js-modal-mask").height() && (0, a.default)(".js-modal-arrow-down").css("opacity", ".2")
                })
            }
        }]), t
    }();
    e.default = s, t.exports = e.default
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }

    function r(t, e) {
        if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
    }

    function o(t, e) {
        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
        t.prototype = Object.create(e && e.prototype, {
            constructor: {
                value: t,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
    }
    Object.defineProperty(e, "__esModule", {
        value: !0
    });
    var a = function() {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            return function(e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(),
        s = function(t, e, n) {
            for (var i = !0; i;) {
                var r = t,
                    o = e,
                    a = n;
                i = !1, null === r && (r = Function.prototype);
                var s = Object.getOwnPropertyDescriptor(r, o);
                if (void 0 !== s) {
                    if ("value" in s) return s.value;
                    var l = s.get;
                    if (void 0 === l) return;
                    return l.call(a)
                }
                var u = Object.getPrototypeOf(r);
                if (null === u) return;
                t = u, e = o, n = a, i = !0, s = u = void 0
            }
        },
        l = n(0),
        u = i(l),
        c = n(2),
        f = i(c),
        d = function(t) {
            function e() {
                r(this, e), s(Object.getPrototypeOf(e.prototype), "constructor", this).apply(this, arguments)
            }
            return o(e, t), a(e, [{
                key: "init",
                value: function() {
                    var t = this,
                        n = void 0,
                        i = this;
                    this.el.find("li").hover(function(e) {
                        t.el.parent().hasClass("mobile") || (n !== (0, u.default)(e.currentTarget).attr("id") && (0 === (0, u.default)(e.target).data("depth") && (0, u.default)("#" + n + " .js-sub-menu").hide(), n = (0, u.default)(e.currentTarget).attr("id")), n && 0 === (0, u.default)(e.target).data("depth") && (0, u.default)("#" + n + " .js-sub-menu").show().css({
                            top: (0, u.default)("#" + n).height() + (0, u.default)("#" + n).position().top
                        }))
                    }), (0, u.default)("#menu-icon").on("click", function() {
                        (0, u.default)("#mobile_top_menu_wrapper").toggle(), i.toggleMobileMenu()
                    }), (0, u.default)(".js-top-menu").mouseleave(function() {
                        t.el.parent().hasClass("mobile") || (0, u.default)("#" + n + " .js-sub-menu").hide()
                    }), this.el.on("click", function(e) {
                        t.el.parent().hasClass("mobile") || e.stopPropagation()
                    }), prestashop.on("responsive update", function(t) {
                        (0, u.default)(".js-sub-menu").removeAttr("style"), i.toggleMobileMenu()
                    }), s(Object.getPrototypeOf(e.prototype), "init", this).call(this)
                }
            }, {
                key: "toggleMobileMenu",
                value: function() {
                    (0, u.default)("#mobile_top_menu_wrapper").is(":visible") ? ((0, u.default)("#notifications").hide(), (0, u.default)("#wrapper").hide(), (0, u.default)("#footer").hide()) : ((0, u.default)("#notifications").show(), (0, u.default)("#wrapper").show(), (0, u.default)("#footer").show())
                }
            }]), e
        }(f.default);
    e.default = d, t.exports = e.default
}, function(t, e, n) {
    "use strict";

    function i() {
        (0, a.default)("#order-return-form table thead input[type=checkbox]").on("click", function() {
            var t = (0, a.default)(this).prop("checked");
            (0, a.default)("#order-return-form table tbody input[type=checkbox]").each(function(e, n) {
                (0, a.default)(n).prop("checked", t)
            })
        })
    }

    function r() {
        (0, a.default)("body#order-detail") && i()
    }
    var o = n(0),
        a = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(o);
    (0, a.default)(document).ready(r)
}, function(t, e, n) {
    "use strict";
    ! function(t) {
        var e = 0,
            n = function(e, n) {
                this.options = n, this.$elementFilestyle = [], this.$element = t(e)
            };
        n.prototype = {
            clear: function() {
                this.$element.val(""), this.$elementFilestyle.find(":text").val(""), this.$elementFilestyle.find(".badge").remove()
            },
            destroy: function() {
                this.$element.removeAttr("style").removeData("filestyle"), this.$elementFilestyle.remove()
            },
            disabled: function(t) {
                if (!0 === t) this.options.disabled || (this.$element.attr("disabled", "true"), this.$elementFilestyle.find("label").attr("disabled", "true"), this.options.disabled = !0);
                else {
                    if (!1 !== t) return this.options.disabled;
                    this.options.disabled && (this.$element.removeAttr("disabled"), this.$elementFilestyle.find("label").removeAttr("disabled"), this.options.disabled = !1)
                }
            },
            buttonBefore: function(t) {
                if (!0 === t) this.options.buttonBefore || (this.options.buttonBefore = !0, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles()));
                else {
                    if (!1 !== t) return this.options.buttonBefore;
                    this.options.buttonBefore && (this.options.buttonBefore = !1, this.options.input && (this.$elementFilestyle.remove(), this.constructor(), this.pushNameFiles()))
                }
            },
            icon: function(t) {
                if (!0 === t) this.options.icon || (this.options.icon = !0, this.$elementFilestyle.find("label").prepend(this.htmlIcon()));
                else {
                    if (!1 !== t) return this.options.icon;
                    this.options.icon && (this.options.icon = !1, this.$elementFilestyle.find(".icon-span-filestyle").remove())
                }
            },
            input: function(t) {
                if (!0 === t) this.options.input || (this.options.input = !0, this.options.buttonBefore ? this.$elementFilestyle.append(this.htmlInput()) : this.$elementFilestyle.prepend(this.htmlInput()), this.$elementFilestyle.find(".badge").remove(), this.pushNameFiles(), this.$elementFilestyle.find(".group-span-filestyle").addClass("input-group-btn"));
                else {
                    if (!1 !== t) return this.options.input;
                    if (this.options.input) {
                        this.options.input = !1, this.$elementFilestyle.find(":text").remove();
                        var e = this.pushNameFiles();
                        e.length > 0 && this.options.badge && this.$elementFilestyle.find("label").append(' <span class="badge">' + e.length + "</span>"), this.$elementFilestyle.find(".group-span-filestyle").removeClass("input-group-btn")
                    }
                }
            },
            size: function(t) {
                if (void 0 === t) return this.options.size;
                var e = this.$elementFilestyle.find("label"),
                    n = this.$elementFilestyle.find("input");
                e.removeClass("btn-lg btn-sm"), n.removeClass("input-lg input-sm"), "nr" != t && (e.addClass("btn-" + t), n.addClass("input-" + t))
            },
            placeholder: function(t) {
                if (void 0 === t) return this.options.placeholder;
                this.options.placeholder = t, this.$elementFilestyle.find("input").attr("placeholder", t)
            },
            buttonText: function(t) {
                if (void 0 === t) return this.options.buttonText;
                this.options.buttonText = t, this.$elementFilestyle.find("label .buttonText").html(this.options.buttonText)
            },
            buttonName: function(t) {
                if (void 0 === t) return this.options.buttonName;
                this.options.buttonName = t, this.$elementFilestyle.find("label").attr({
                    class: "btn " + this.options.buttonName
                })
            },
            iconName: function(t) {
                if (void 0 === t) return this.options.iconName;
                this.$elementFilestyle.find(".icon-span-filestyle").attr({
                    class: "icon-span-filestyle " + this.options.iconName
                })
            },
            htmlIcon: function() {
                return this.options.icon ? '<span class="icon-span-filestyle ' + this.options.iconName + '"></span> ' : ""
            },
            htmlInput: function() {
                return this.options.input ? '<input type="text" class="form-control ' + ("nr" == this.options.size ? "" : "input-" + this.options.size) + '" placeholder="' + this.options.placeholder + '" disabled> ' : ""
            },
            pushNameFiles: function() {
                var t = "",
                    e = [];
                void 0 === this.$element[0].files ? e[0] = {
                    name: this.$element[0] && this.$element[0].value
                } : e = this.$element[0].files;
                for (var n = 0; n < e.length; n++) t += e[n].name.split("\\").pop() + ", ";
                return "" !== t ? this.$elementFilestyle.find(":text").val(t.replace(/\, $/g, "")) : this.$elementFilestyle.find(":text").val(""), e
            },
            constructor: function() {
                var n = this,
                    i = "",
                    r = n.$element.attr("id"),
                    o = "";
                "" !== r && r || (r = "filestyle-" + e, n.$element.attr({
                    id: r
                }), e++), o = '<span class="group-span-filestyle ' + (n.options.input ? "input-group-btn" : "") + '"><label for="' + r + '" class="btn ' + n.options.buttonName + " " + ("nr" == n.options.size ? "" : "btn-" + n.options.size) + '" ' + (n.options.disabled ? 'disabled="true"' : "") + ">" + n.htmlIcon() + '<span class="buttonText">' + n.options.buttonText + "</span></label></span>", i = n.options.buttonBefore ? o + n.htmlInput() : n.htmlInput() + o, n.$elementFilestyle = t('<div class="bootstrap-filestyle input-group">' + i + "</div>"), n.$elementFilestyle.find(".group-span-filestyle").attr("tabindex", "0").keypress(function(t) {
                    if (13 === t.keyCode || 32 === t.charCode) return n.$elementFilestyle.find("label").click(), !1
                }), n.$element.css({
                    position: "absolute",
                    clip: "rect(0px 0px 0px 0px)"
                }).attr("tabindex", "-1").after(n.$elementFilestyle), n.options.disabled && n.$element.attr("disabled", "true"), n.$element.change(function() {
                    var t = n.pushNameFiles();
                    0 == n.options.input && n.options.badge ? 0 == n.$elementFilestyle.find(".badge").length ? n.$elementFilestyle.find("label").append(' <span class="badge">' + t.length + "</span>") : 0 == t.length ? n.$elementFilestyle.find(".badge").remove() : n.$elementFilestyle.find(".badge").html(t.length) : n.$elementFilestyle.find(".badge").remove()
                }), window.navigator.userAgent.search(/firefox/i) > -1 && n.$elementFilestyle.find("label").click(function() {
                    return n.$element.click(), !1
                })
            }
        };
        var i = t.fn.filestyle;
        t.fn.filestyle = function(e, i) {
            var r = "",
                o = this.each(function() {
                    if ("file" === t(this).attr("type")) {
                        var o = t(this),
                            a = o.data("filestyle"),
                            s = t.extend({}, t.fn.filestyle.defaults, e, "object" == typeof e && e);
                        a || (o.data("filestyle", a = new n(this, s)), a.constructor()), "string" == typeof e && (r = a[e](i))
                    }
                });
            return void 0 !== typeof r ? r : o
        }, t.fn.filestyle.defaults = {
            buttonText: "Choose file",
            iconName: "glyphicon glyphicon-folder-open",
            buttonName: "btn-default",
            size: "nr",
            input: !0,
            badge: !0,
            icon: !0,
            buttonBefore: !1,
            disabled: !1,
            placeholder: ""
        }, t.fn.filestyle.noConflict = function() {
            return t.fn.filestyle = i, this
        }, t(function() {
            t(".filestyle").each(function() {
                var e = t(this),
                    n = {
                        input: "false" !== e.attr("data-input"),
                        icon: "false" !== e.attr("data-icon"),
                        buttonBefore: "true" === e.attr("data-buttonBefore"),
                        disabled: "true" === e.attr("data-disabled"),
                        size: e.attr("data-size"),
                        buttonText: e.attr("data-buttonText"),
                        buttonName: e.attr("data-buttonName"),
                        iconName: e.attr("data-iconName"),
                        badge: "false" !== e.attr("data-badge"),
                        placeholder: e.attr("data-placeholder")
                    };
                e.filestyle(n)
            })
        })
    }(window.jQuery)
}, function(t, e, n) {
    "use strict";
    ! function(t) {
        t.fn.scrollbox = function(e) {
            var n = {
                linear: !1,
                startDelay: 2,
                delay: 3,
                step: 5,
                speed: 32,
                switchItems: 1,
                direction: "vertical",
                distance: "auto",
                autoPlay: !0,
                onMouseOverPause: !0,
                paused: !1,
                queue: null,
                listElement: "ul",
                listItemElement: "li",
                infiniteLoop: !0,
                switchAmount: 0,
                afterForward: null,
                afterBackward: null,
                triggerStackable: !1
            };
            return e = t.extend(n, e), e.scrollOffset = "vertical" === e.direction ? "scrollTop" : "scrollLeft", e.queue && (e.queue = t("#" + e.queue)), this.each(function() {
                var n, i, r, o, a, s, l, u, c, f = t(this),
                    d = null,
                    p = null,
                    h = !1,
                    m = 0,
                    g = 0;
                e.onMouseOverPause && (f.bind("mouseover", function() {
                    h = !0
                }), f.bind("mouseout", function() {
                    h = !1
                })), n = f.children(e.listElement + ":first-child"), !1 === e.infiniteLoop && 0 === e.switchAmount && (e.switchAmount = n.children().length), s = function() {
                    if (!h) {
                        var r, a, s, l, u;
                        if (r = n.children(e.listItemElement + ":first-child"), l = "auto" !== e.distance ? e.distance : "vertical" === e.direction ? r.outerHeight(!0) : r.outerWidth(!0), e.linear ? s = Math.min(f[0][e.scrollOffset] + e.step, l) : (u = Math.max(3, parseInt(.3 * (l - f[0][e.scrollOffset]), 10)), s = Math.min(f[0][e.scrollOffset] + u, l)), f[0][e.scrollOffset] = s, s >= l) {
                            for (a = 0; a < e.switchItems; a++) e.queue && e.queue.find(e.listItemElement).length > 0 ? (n.append(e.queue.find(e.listItemElement)[0]), n.children(e.listItemElement + ":first-child").remove()) : n.append(n.children(e.listItemElement + ":first-child")), ++m;
                            if (f[0][e.scrollOffset] = 0, clearInterval(d), d = null, t.isFunction(e.afterForward) && e.afterForward.call(f, {
                                    switchCount: m,
                                    currentFirstChild: n.children(e.listItemElement + ":first-child")
                                }), e.triggerStackable && 0 !== g) return void i();
                            if (!1 === e.infiniteLoop && m >= e.switchAmount) return;
                            e.autoPlay && (p = setTimeout(o, 1e3 * e.delay))
                        }
                    }
                }, l = function() {
                    if (!h) {
                        var r, a, s, l, u;
                        if (0 === f[0][e.scrollOffset]) {
                            for (a = 0; a < e.switchItems; a++) n.children(e.listItemElement + ":last-child").insertBefore(n.children(e.listItemElement + ":first-child"));
                            r = n.children(e.listItemElement + ":first-child"), l = "auto" !== e.distance ? e.distance : "vertical" === e.direction ? r.height() : r.width(), f[0][e.scrollOffset] = l
                        }
                        if (e.linear ? s = Math.max(f[0][e.scrollOffset] - e.step, 0) : (u = Math.max(3, parseInt(.3 * f[0][e.scrollOffset], 10)), s = Math.max(f[0][e.scrollOffset] - u, 0)), f[0][e.scrollOffset] = s, 0 === s) {
                            if (--m, clearInterval(d), d = null, t.isFunction(e.afterBackward) && e.afterBackward.call(f, {
                                    switchCount: m,
                                    currentFirstChild: n.children(e.listItemElement + ":first-child")
                                }), e.triggerStackable && 0 !== g) return void i();
                            e.autoPlay && (p = setTimeout(o, 1e3 * e.delay))
                        }
                    }
                }, i = function() {
                    0 !== g && (g > 0 ? (g--, p = setTimeout(o, 0)) : (g++, p = setTimeout(r, 0)))
                }, o = function() {
                    clearInterval(d), d = setInterval(s, e.speed)
                }, r = function() {
                    clearInterval(d), d = setInterval(l, e.speed)
                }, u = function() {
                    e.autoPlay = !0, h = !1, clearInterval(d), d = setInterval(s, e.speed)
                }, c = function() {
                    h = !0
                }, a = function(t) {
                    e.delay = t || e.delay, clearTimeout(p), e.autoPlay && (p = setTimeout(o, 1e3 * e.delay))
                }, e.autoPlay && (p = setTimeout(o, 1e3 * e.startDelay)), f.bind("resetClock", function(t) {
                    a(t)
                }), f.bind("forward", function() {
                    e.triggerStackable ? null !== d ? g++ : o() : (clearTimeout(p), o())
                }), f.bind("backward", function() {
                    e.triggerStackable ? null !== d ? g-- : r() : (clearTimeout(p), r())
                }), f.bind("pauseHover", function() {
                    c()
                }), f.bind("forwardHover", function() {
                    u()
                }), f.bind("speedUp", function(t, n) {
                    "undefined" === n && (n = Math.max(1, parseInt(e.speed / 2, 10))), e.speed = n
                }), f.bind("speedDown", function(t, n) {
                    "undefined" === n && (n = 2 * e.speed), e.speed = n
                }), f.bind("updateConfig", function(n, i) {
                    e = t.extend(e, i)
                })
            })
        }
    }(jQuery)
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }

    function r(t) {
        (0, a.default)("#search_filters").replaceWith(t.rendered_facets), (0, a.default)("#js-active-search-filters").replaceWith(t.rendered_active_filters), (0, a.default)("#js-product-list-top").replaceWith(t.rendered_products_top), (0, a.default)("#js-product-list").replaceWith(t.rendered_products), (0, a.default)("#js-product-list-bottom").replaceWith(t.rendered_products_bottom), (new c.default).init()
    }
    var o = n(0),
        a = i(o),
        s = n(1),
        l = i(s);
    n(4);
    var u = n(3),
        c = i(u);
    (0, a.default)(document).ready(function() {
        l.default.on("clickQuickView", function(e) {
            var n = {
                action: "quickview",
                id_product: e.dataset.idProduct,
                id_product_attribute: e.dataset.idProductAttribute
            };
            a.default.post(l.default.urls.pages.product, n, null, "json").then(function(e) {
                (0, a.default)("body").append(e.quickview_html);
                var n = (0, a.default)("#quickview-modal-" + e.product.id + "-" + e.product.id_product_attribute);
                n.modal("show"), t(n), n.on("hidden.bs.modal", function() {
                    n.remove()
                })
            }).fail(function(t) {
                l.default.emit("handleError", {
                    eventType: "clickQuickView",
                    resp: t
                })
            })
        });
        var t = function(t) {
                var n = (0, a.default)(".js-arrows"),
                    i = t.find(".js-qv-product-images");
                (0, a.default)(".js-thumb").on("click", function(t) {
                    (0, a.default)(".js-thumb").hasClass("selected") && (0, a.default)(".js-thumb").removeClass("selected"), (0, a.default)(t.currentTarget).addClass("selected"), (0, a.default)(".js-qv-product-cover").attr("src", (0, a.default)(t.target).data("image-large-src"))
                }), i.find("li").length <= 4 ? n.hide() : n.on("click", function(t) {
                    (0, a.default)(t.target).hasClass("arrow-up") && (0, a.default)(".js-qv-product-images").position().top < 0 ? (e("up"), (0, a.default)(".arrow-down").css("opacity", "1")) : (0, a.default)(t.target).hasClass("arrow-down") && i.position().top + i.height() > (0, a.default)(".js-qv-mask").height() && (e("down"), (0, a.default)(".arrow-up").css("opacity", "1"))
                }), t.find("#quantity_wanted").TouchSpin({
                    verticalbuttons: !0,
                    verticalupclass: "material-icons touchspin-up",
                    verticaldownclass: "material-icons touchspin-down",
                    buttondown_class: "btn btn-touchspin js-touchspin",
                    buttonup_class: "btn btn-touchspin js-touchspin",
                    min: 1,
                    max: 1e6
                })
            },
            e = function(t) {
                var e = (0, a.default)(".js-qv-product-images"),
                    n = (0, a.default)(".js-qv-product-images li img").height() + 20,
                    i = e.position().top;
                e.velocity({
                    translateY: "up" === t ? i + n : i - n
                }, function() {
                    e.position().top >= 0 ? (0, a.default)(".arrow-up").css("opacity", ".2") : e.position().top + e.height() <= (0, a.default)(".js-qv-mask").height() && (0, a.default)(".arrow-down").css("opacity", ".2")
                })
            };
        (0, a.default)("body").on("click", "#search_filter_toggler", function() {
            (0, a.default)("#search_filters_wrapper").removeClass("hidden-md-down"), (0, a.default)("#content-wrapper").addClass("hidden-md-down"), (0, a.default)("#footer").addClass("hidden-md-down")
        }), (0, a.default)("#search_filter_controls .clear").on("click", function() {
            (0, a.default)("#search_filters_wrapper").addClass("hidden-md-down"), (0, a.default)("#content-wrapper").removeClass("hidden-md-down"), (0, a.default)("#footer").removeClass("hidden-md-down")
        }), (0, a.default)("#search_filter_controls .ok").on("click", function() {
            (0, a.default)("#search_filters_wrapper").addClass("hidden-md-down"), (0, a.default)("#content-wrapper").removeClass("hidden-md-down"), (0, a.default)("#footer").removeClass("hidden-md-down")
        });
        var n = function(t) {
            if (void 0 !== t.target.dataset.searchUrl) return t.target.dataset.searchUrl;
            if (void 0 === (0, a.default)(t.target).parent()[0].dataset.searchUrl) throw new Error("Can not parse search URL");
            return (0, a.default)(t.target).parent()[0].dataset.searchUrl
        };
        (0, a.default)("body").on("change", "#search_filters input[data-search-url]", function(t) {
            l.default.emit("updateFacets", n(t))
        }), (0, a.default)("body").on("click", ".js-search-filters-clear-all", function(t) {
            l.default.emit("updateFacets", n(t))
        }), (0, a.default)("body").on("click", ".js-search-link", function(t) {
            t.preventDefault(), l.default.emit("updateFacets", (0, a.default)(t.target).closest("a").get(0).href)
        }), (0, a.default)("body").on("change", "#search_filters select", function(t) {
            var e = (0, a.default)(t.target).closest("form");
            l.default.emit("updateFacets", "?" + e.serialize())
        }), l.default.on("updateProductList", function(t) {
            r(t)
       	var view = $.totalStorage("display");
		if (view && view != 'grid')
			display(view);
		else
			$('.display').find('li#grid').addClass('selected');
        })
    })
}, function(t, e, n) {
    "use strict";
    var i = n(0),
        r = function(t) {
            return t && t.__esModule ? t : {
                default: t
            }
        }(i);
    (0, r.default)(document).ready(function() {
        function t() {
            (0, r.default)(".js-thumb").on("click", function(t) {
                (0, r.default)(".js-modal-product-cover").attr("src", (0, r.default)(t.target).data("image-large-src")), (0, r.default)(".selected").removeClass("selected"), (0, r.default)(t.target).addClass("selected"), (0, r.default)(".js-qv-product-cover").prop("src", (0, r.default)(t.currentTarget).data("image-large-src"))
            })
        }

        function e() {
            (0, r.default)("#main .js-qv-product-images li").length > 2 ? ((0, r.default)("#main .js-qv-mask").addClass("scroll"), (0, r.default)(".scroll-box-arrows").addClass("scroll"), (0, r.default)("#main .js-qv-mask").scrollbox({
                direction: "h",
                distance: 113,
                autoPlay: !1
            }), (0, r.default)(".scroll-box-arrows .left").click(function() {
                (0, r.default)("#main .js-qv-mask").trigger("backward")
            }), (0, r.default)(".scroll-box-arrows .right").click(function() {
                (0, r.default)("#main .js-qv-mask").trigger("forward")
            })) : ((0, r.default)("#main .js-qv-mask").removeClass("scroll"), (0, r.default)(".scroll-box-arrows").removeClass("scroll"))
        }

        function n() {
            (0, r.default)(".js-file-input").on("change", function(t) {
                var e = void 0,
                    n = void 0;
                (e = (0, r.default)(t.currentTarget)[0]) && (n = e.files[0]) && (0, r.default)(e).prev().text(n.name)
            })
        }! function() {
            var t = (0, r.default)("#quantity_wanted");
            t.TouchSpin({
                verticalbuttons: !0,
                verticalupclass: "material-icons touchspin-up",
                verticaldownclass: "material-icons touchspin-down",
                buttondown_class: "btn btn-touchspin js-touchspin",
                buttonup_class: "btn btn-touchspin js-touchspin",
                min: parseInt(t.attr("min"), 10),
                max: 1e6
            });
            var e = t.val();
            t.on("keyup change", function(t) {
                var n = (0, r.default)(this).val();
                if (n !== e) {
                    e = n;
                    var i = (0, r.default)(".product-refresh");
                    (0, r.default)(t.currentTarget).trigger("touchspin.stopspin"), i.trigger("click", {
                        eventType: "updatedProductQuantity"
                    })
                }
                return t.preventDefault(), !1
            })
        }(), n(), t(), e(), prestashop.on("updatedProduct", function(i) {
            if (n(), t(), i && i.product_minimal_quantity) {
                var o = parseInt(i.product_minimal_quantity, 10);
                (0, r.default)("#quantity_wanted").trigger("touchspin.updatesettings", {
                    min: o
                })
            }
            e(), (0, r.default)((0, r.default)(".tabs .nav-link.active").attr("href")).addClass("active").removeClass("fade"), (0, r.default)(".js-product-images-modal").replaceWith(i.product_images_modal)
        })
    })
}, function(t, e, n) {
    "use strict";

    function i(t) {
        return t && t.__esModule ? t : {
            default: t
        }
    }

    function r(t, e) {
        var n = e.children().detach();
        e.empty().append(t.children().detach()), t.append(n)
    }

    function o() {
        u.default.responsive.mobile ? (0, s.default)("*[id^='_desktop_']").each(function(t, e) {
            var n = (0, s.default)("#" + e.id.replace("_desktop_", "_mobile_"));
            n.length && r((0, s.default)(e), n)
        }) : (0, s.default)("*[id^='_mobile_']").each(function(t, e) {
            var n = (0, s.default)("#" + e.id.replace("_mobile_", "_desktop_"));
            n.length && r((0, s.default)(e), n)
        }), u.default.emit("responsive update", {
            mobile: u.default.responsive.mobile
        })
    }
    var a = n(0),
        s = i(a),
        l = n(1),
        u = i(l);
    u.default.responsive = u.default.responsive || {}, u.default.responsive.current_width = window.innerWidth, u.default.responsive.min_width = 992, u.default.responsive.mobile = u.default.responsive.current_width < u.default.responsive.min_width, (0, s.default)(window).on("resize", function() {
        var t = u.default.responsive.current_width,
            e = u.default.responsive.min_width,
            n = window.innerWidth,
            i = t >= e && n < e || t < e && n >= e;
        u.default.responsive.current_width = n, u.default.responsive.mobile = u.default.responsive.current_width < u.default.responsive.min_width, i && o()
    }), (0, s.default)(document).ready(function() {
        u.default.responsive.mobile && o()
    })
}, function(t, e, n) {
    "use strict";
    ! function(t) {
        function e(t, e) {
            return t + ".touchspin_" + e
        }

        function n(n, i) {
            return t.map(n, function(t) {
                return e(t, i)
            })
        }
        var i = 0;
        t.fn.TouchSpin = function(e) {
            if ("destroy" === e) return void this.each(function() {
                var e = t(this),
                    i = e.data();
                t(document).off(n(["mouseup", "touchend", "touchcancel", "mousemove", "touchmove", "scroll", "scrollstart"], i.spinnerid).join(" "))
            });
            var r = {
                    min: 0,
                    max: 100,
                    initval: "",
                    replacementval: "",
                    step: 1,
                    decimals: 0,
                    stepinterval: 100,
                    forcestepdivisibility: "round",
                    stepintervaldelay: 500,
                    verticalbuttons: !1,
                    verticalupclass: "glyphicon glyphicon-chevron-up",
                    verticaldownclass: "glyphicon glyphicon-chevron-down",
                    prefix: "",
                    postfix: "",
                    prefix_extraclass: "",
                    postfix_extraclass: "",
                    booster: !0,
                    boostat: 10,
                    maxboostedstep: !1,
                    mousewheel: !0,
                    buttondown_class: "btn btn-default",
                    buttonup_class: "btn btn-default",
                    buttondown_txt: "-",
                    buttonup_txt: "+"
                },
                o = {
                    min: "min",
                    max: "max",
                    initval: "init-val",
                    replacementval: "replacement-val",
                    step: "step",
                    decimals: "decimals",
                    stepinterval: "step-interval",
                    verticalbuttons: "vertical-buttons",
                    verticalupclass: "vertical-up-class",
                    verticaldownclass: "vertical-down-class",
                    forcestepdivisibility: "force-step-divisibility",
                    stepintervaldelay: "step-interval-delay",
                    prefix: "prefix",
                    postfix: "postfix",
                    prefix_extraclass: "prefix-extra-class",
                    postfix_extraclass: "postfix-extra-class",
                    booster: "booster",
                    boostat: "boostat",
                    maxboostedstep: "max-boosted-step",
                    mousewheel: "mouse-wheel",
                    buttondown_class: "button-down-class",
                    buttonup_class: "button-up-class",
                    buttondown_txt: "button-down-txt",
                    buttonup_txt: "button-up-txt"
                };
            return this.each(function() {
                function a() {
                    "" !== T.initval && "" === L.val() && L.val(T.initval)
                }

                function s(t) {
                    c(t), b();
                    var e = I.input.val();
                    "" !== e && (e = Number(I.input.val()), I.input.val(e.toFixed(T.decimals)))
                }

                function l() {
                    T = t.extend({}, r, j, u(), e)
                }

                function u() {
                    var e = {};
                    return t.each(o, function(t, n) {
                        var i = "bts-" + n;
                        L.is("[data-" + i + "]") && (e[t] = L.data(i))
                    }), e
                }

                function c(e) {
                    T = t.extend({}, T, e)
                }

                function f() {
                    var t = L.val(),
                        e = L.parent();
                    "" !== t && (t = Number(t).toFixed(T.decimals)), L.data("initvalue", t).val(t), L.addClass("form-control"), e.hasClass("input-group") ? d(e) : p()
                }

                function d(e) {
                    e.addClass("bootstrap-touchspin");
                    var n, i, r = L.prev(),
                        o = L.next(),
                        a = '<span class="input-group-addon bootstrap-touchspin-prefix">' + T.prefix + "</span>",
                        s = '<span class="input-group-addon bootstrap-touchspin-postfix">' + T.postfix + "</span>";
                    r.hasClass("input-group-btn") ? (n = '<button class="' + T.buttondown_class + ' bootstrap-touchspin-down" type="button">' + T.buttondown_txt + "</button>", r.append(n)) : (n = '<span class="input-group-btn"><button class="' + T.buttondown_class + ' bootstrap-touchspin-down" type="button">' + T.buttondown_txt + "</button></span>", t(n).insertBefore(L)), o.hasClass("input-group-btn") ? (i = '<button class="' + T.buttonup_class + ' bootstrap-touchspin-up" type="button">' + T.buttonup_txt + "</button>", o.prepend(i)) : (i = '<span class="input-group-btn"><button class="' + T.buttonup_class + ' bootstrap-touchspin-up" type="button">' + T.buttonup_txt + "</button></span>", t(i).insertAfter(L)), t(a).insertBefore(L), t(s).insertAfter(L), A = e
                }

                function p() {
                    var e;
                    e = T.verticalbuttons ? '<div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix">' + T.prefix + '</span><span class="input-group-addon bootstrap-touchspin-postfix">' + T.postfix + '</span><span class="input-group-btn-vertical"><button class="' + T.buttondown_class + ' bootstrap-touchspin-up" type="button"><i class="' + T.verticalupclass + '"></i></button><button class="' + T.buttonup_class + ' bootstrap-touchspin-down" type="button"><i class="' + T.verticaldownclass + '"></i></button></span></div>' : '<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="' + T.buttondown_class + ' bootstrap-touchspin-down" type="button">' + T.buttondown_txt + '</button></span><span class="input-group-addon bootstrap-touchspin-prefix">' + T.prefix + '</span><span class="input-group-addon bootstrap-touchspin-postfix">' + T.postfix + '</span><span class="input-group-btn"><button class="' + T.buttonup_class + ' bootstrap-touchspin-up" type="button">' + T.buttonup_txt + "</button></span></div>", A = t(e).insertBefore(L), t(".bootstrap-touchspin-prefix", A).after(L), L.hasClass("input-sm") ? A.addClass("input-group-sm") : L.hasClass("input-lg") && A.addClass("input-group-lg")
                }

                function h() {
                    I = {
                        down: t(".bootstrap-touchspin-down", A),
                        up: t(".bootstrap-touchspin-up", A),
                        input: t("input", A),
                        prefix: t(".bootstrap-touchspin-prefix", A).addClass(T.prefix_extraclass),
                        postfix: t(".bootstrap-touchspin-postfix", A).addClass(T.postfix_extraclass)
                    }
                }

                function m() {
                    "" === T.prefix && I.prefix.hide(), "" === T.postfix && I.postfix.hide()
                }

                function g() {
                    L.on("keydown", function(t) {
                        var e = t.keyCode || t.which;
                        38 === e ? ("up" !== V && (x(), E()), t.preventDefault()) : 40 === e && ("down" !== V && (w(), S()), t.preventDefault())
                    }), L.on("keyup", function(t) {
                        var e = t.keyCode || t.which;
                        38 === e ? C() : 40 === e && C()
                    }), L.on("blur", function() {
                        b()
                    }), I.down.on("keydown", function(t) {
                        var e = t.keyCode || t.which;
                        32 !== e && 13 !== e || ("down" !== V && (w(), S()), t.preventDefault())
                    }), I.down.on("keyup", function(t) {
                        var e = t.keyCode || t.which;
                        32 !== e && 13 !== e || C()
                    }), I.up.on("keydown", function(t) {
                        var e = t.keyCode || t.which;
                        32 !== e && 13 !== e || ("up" !== V && (x(), E()), t.preventDefault())
                    }), I.up.on("keyup", function(t) {
                        var e = t.keyCode || t.which;
                        32 !== e && 13 !== e || C()
                    }), I.down.on("mousedown.touchspin", function(t) {
                        I.down.off("touchstart.touchspin"), L.is(":disabled") || (w(), S(), t.preventDefault(), t.stopPropagation())
                    }), I.down.on("touchstart.touchspin", function(t) {
                        I.down.off("mousedown.touchspin"), L.is(":disabled") || (w(), S(), t.preventDefault(), t.stopPropagation())
                    }), I.up.on("mousedown.touchspin", function(t) {
                        I.up.off("touchstart.touchspin"), L.is(":disabled") || (x(), E(), t.preventDefault(), t.stopPropagation())
                    }), I.up.on("touchstart.touchspin", function(t) {
                        I.up.off("mousedown.touchspin"), L.is(":disabled") || (x(), E(), t.preventDefault(), t.stopPropagation())
                    }), I.up.on("mouseout touchleave touchend touchcancel", function(t) {
                        V && (t.stopPropagation(), C())
                    }), I.down.on("mouseout touchleave touchend touchcancel", function(t) {
                        V && (t.stopPropagation(), C())
                    }), I.down.on("mousemove touchmove", function(t) {
                        V && (t.stopPropagation(), t.preventDefault())
                    }), I.up.on("mousemove touchmove", function(t) {
                        V && (t.stopPropagation(), t.preventDefault())
                    }), t(document).on(n(["mouseup", "touchend", "touchcancel"], i).join(" "), function(t) {
                        V && (t.preventDefault(), C())
                    }), t(document).on(n(["mousemove", "touchmove", "scroll", "scrollstart"], i).join(" "), function(t) {
                        V && (t.preventDefault(), C())
                    }), L.on("mousewheel DOMMouseScroll", function(t) {
                        if (T.mousewheel && L.is(":focus")) {
                            var e = t.originalEvent.wheelDelta || -t.originalEvent.deltaY || -t.originalEvent.detail;
                            t.stopPropagation(), t.preventDefault(), e < 0 ? w() : x()
                        }
                    })
                }

                function v() {
                    L.on("touchspin.uponce", function() {
                        C(), x()
                    }), L.on("touchspin.downonce", function() {
                        C(), w()
                    }), L.on("touchspin.startupspin", function() {
                        E()
                    }), L.on("touchspin.startdownspin", function() {
                        S()
                    }), L.on("touchspin.stopspin", function() {
                        C()
                    }), L.on("touchspin.updatesettings", function(t, e) {
                        s(e)
                    })
                }

                function y(t) {
                    switch (T.forcestepdivisibility) {
                        case "round":
                            return (Math.round(t / T.step) * T.step).toFixed(T.decimals);
                        case "floor":
                            return (Math.floor(t / T.step) * T.step).toFixed(T.decimals);
                        case "ceil":
                            return (Math.ceil(t / T.step) * T.step).toFixed(T.decimals);
                        default:
                            return t
                    }
                }

                function b() {
                    var t, e, n;
                    if ("" === (t = L.val())) return void("" !== T.replacementval && (L.val(T.replacementval), L.trigger("change")));
                    T.decimals > 0 && "." === t || (e = parseFloat(t), isNaN(e) && (e = "" !== T.replacementval ? T.replacementval : 0), n = e, e.toString() !== t && (n = e), e < T.min && (n = T.min), e > T.max && (n = T.max), n = y(n), Number(t).toString() !== n.toString() && (L.val(n), L.trigger("change")))
                }

                function _() {
                    if (T.booster) {
                        var t = Math.pow(2, Math.floor(B / T.boostat)) * T.step;
                        return T.maxboostedstep && t > T.maxboostedstep && (t = T.maxboostedstep, O = Math.round(O / t) * t), Math.max(T.step, t)
                    }
                    return T.step
                }

                function x() {
                    b(), O = parseFloat(I.input.val()), isNaN(O) && (O = 0);
                    var t = O,
                        e = _();
                    O += e, O > T.max && (O = T.max, L.trigger("touchspin.on.max"), C()), I.input.val(Number(O).toFixed(T.decimals)), t !== O && L.trigger("change")
                }

                function w() {
                    b(), O = parseFloat(I.input.val()), isNaN(O) && (O = 0);
                    var t = O,
                        e = _();
                    O -= e, O < T.min && (O = T.min, L.trigger("touchspin.on.min"), C()), I.input.val(O.toFixed(T.decimals)), t !== O && L.trigger("change")
                }

                function S() {
                    C(), B = 0, V = "down", L.trigger("touchspin.on.startspin"), L.trigger("touchspin.on.startdownspin"), N = setTimeout(function() {
                        k = setInterval(function() {
                            B++, w()
                        }, T.stepinterval)
                    }, T.stepintervaldelay)
                }

                function E() {
                    C(), B = 0, V = "up", L.trigger("touchspin.on.startspin"), L.trigger("touchspin.on.startupspin"), P = setTimeout(function() {
                        D = setInterval(function() {
                            B++, x()
                        }, T.stepinterval)
                    }, T.stepintervaldelay)
                }

                function C() {
                    switch (clearTimeout(N), clearTimeout(P), clearInterval(k), clearInterval(D), V) {
                        case "up":
                            L.trigger("touchspin.on.stopupspin"), L.trigger("touchspin.on.stopspin");
                            break;
                        case "down":
                            L.trigger("touchspin.on.stopdownspin"), L.trigger("touchspin.on.stopspin")
                    }
                    B = 0, V = !1
                }
                var T, A, I, O, k, D, N, P, L = t(this),
                    j = L.data(),
                    B = 0,
                    V = !1;
                ! function() {
                    L.data("alreadyinitialized") || (L.data("alreadyinitialized", !0), i += 1, L.data("spinnerid", i), L.is("input") && (l(), a(), b(), f(), h(), m(), g(), v(), I.input.css("display", "block")))
                }()
            })
        }
    }(jQuery)
}, function(t, e, n) {
    "use strict";
    if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery"); + function(t) {
        var e = t.fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
    }(jQuery),
    function() {
        function t(t, e) {
            if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return !e || "object" != typeof e && "function" != typeof e ? t : e
        }

        function e(t, e) {
            if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
            t.prototype = Object.create(e && e.prototype, {
                constructor: {
                    value: t,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
        }

        function n(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }
        var i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                return typeof t
            } : function(t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
            },
            r = function() {
                function t(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var i = e[n];
                        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                    }
                }
                return function(e, n, i) {
                    return n && t(e.prototype, n), i && t(e, i), e
                }
            }(),
            o = function(t) {
                function e(t) {
                    return {}.toString.call(t).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
                }

                function n(t) {
                    return (t[0] || t).nodeType
                }

                function i() {
                    return {
                        bindType: a.end,
                        delegateType: a.end,
                        handle: function(e) {
                            if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                        }
                    }
                }

                function r() {
                    if (window.QUnit) return !1;
                    var t = document.createElement("bootstrap");
                    for (var e in s)
                        if (void 0 !== t.style[e]) return {
                            end: s[e]
                        };
                    return !1
                }

                function o(e) {
                    var n = this,
                        i = !1;
                    return t(this).one(l.TRANSITION_END, function() {
                        i = !0
                    }), setTimeout(function() {
                        i || l.triggerTransitionEnd(n)
                    }, e), this
                }
                var a = !1,
                    s = {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd otransitionend",
                        transition: "transitionend"
                    },
                    l = {
                        TRANSITION_END: "bsTransitionEnd",
                        getUID: function(t) {
                            do {
                                t += ~~(1e6 * Math.random())
                            } while (document.getElementById(t));
                            return t
                        },
                        getSelectorFromElement: function(t) {
                            var e = t.getAttribute("data-target");
                            return e || (e = t.getAttribute("href") || "", e = /^#[a-z]/i.test(e) ? e : null), e
                        },
                        reflow: function(t) {
                            new Function("bs", "return bs")(t.offsetHeight)
                        },
                        triggerTransitionEnd: function(e) {
                            t(e).trigger(a.end)
                        },
                        supportsTransitionEnd: function() {
                            return Boolean(a)
                        },
                        typeCheckConfig: function(t, i, r) {
                            for (var o in r)
                                if (r.hasOwnProperty(o)) {
                                    var a = r[o],
                                        s = i[o],
                                        l = void 0;
                                    if (l = s && n(s) ? "element" : e(s), !new RegExp(a).test(l)) throw new Error(t.toUpperCase() + ': Option "' + o + '" provided type "' + l + '" but expected type "' + a + '".')
                                }
                        }
                    };
                return function() {
                    a = r(), t.fn.emulateTransitionEnd = o, l.supportsTransitionEnd() && (t.event.special[l.TRANSITION_END] = i())
                }(), l
            }(jQuery),
            a = (function(t) {
                var e = "alert",
                    i = "bs.alert",
                    a = "." + i,
                    s = t.fn[e],
                    l = {
                        DISMISS: '[data-dismiss="alert"]'
                    },
                    u = {
                        CLOSE: "close" + a,
                        CLOSED: "closed" + a,
                        CLICK_DATA_API: "click" + a + ".data-api"
                    },
                    c = {
                        ALERT: "alert",
                        FADE: "fade",
                        IN: "in"
                    },
                    f = function() {
                        function e(t) {
                            n(this, e), this._element = t
                        }
                        return e.prototype.close = function(t) {
                            t = t || this._element;
                            var e = this._getRootElement(t);
                            this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
                        }, e.prototype.dispose = function() {
                            t.removeData(this._element, i), this._element = null
                        }, e.prototype._getRootElement = function(e) {
                            var n = o.getSelectorFromElement(e),
                                i = !1;
                            return n && (i = t(n)[0]), i || (i = t(e).closest("." + c.ALERT)[0]), i
                        }, e.prototype._triggerCloseEvent = function(e) {
                            var n = t.Event(u.CLOSE);
                            return t(e).trigger(n), n
                        }, e.prototype._removeElement = function(e) {
                            return t(e).removeClass(c.IN), o.supportsTransitionEnd() && t(e).hasClass(c.FADE) ? void t(e).one(o.TRANSITION_END, t.proxy(this._destroyElement, this, e)).emulateTransitionEnd(150) : void this._destroyElement(e)
                        }, e.prototype._destroyElement = function(e) {
                            t(e).detach().trigger(u.CLOSED).remove()
                        }, e._jQueryInterface = function(n) {
                            return this.each(function() {
                                var r = t(this),
                                    o = r.data(i);
                                o || (o = new e(this), r.data(i, o)), "close" === n && o[n](this)
                            })
                        }, e._handleDismiss = function(t) {
                            return function(e) {
                                e && e.preventDefault(), t.close(this)
                            }
                        }, r(e, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }]), e
                    }();
                t(document).on(u.CLICK_DATA_API, l.DISMISS, f._handleDismiss(new f)), t.fn[e] = f._jQueryInterface, t.fn[e].Constructor = f, t.fn[e].noConflict = function() {
                    return t.fn[e] = s, f._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "button",
                    i = "bs.button",
                    o = "." + i,
                    a = ".data-api",
                    s = t.fn[e],
                    l = {
                        ACTIVE: "active",
                        BUTTON: "btn",
                        FOCUS: "focus"
                    },
                    u = {
                        DATA_TOGGLE_CARROT: '[data-toggle^="button"]',
                        DATA_TOGGLE: '[data-toggle="buttons"]',
                        INPUT: "input",
                        ACTIVE: ".active",
                        BUTTON: ".btn"
                    },
                    c = {
                        CLICK_DATA_API: "click" + o + a,
                        FOCUS_BLUR_DATA_API: "focus" + o + a + " blur" + o + a
                    },
                    f = function() {
                        function e(t) {
                            n(this, e), this._element = t
                        }
                        return e.prototype.toggle = function() {
                            var e = !0,
                                n = t(this._element).closest(u.DATA_TOGGLE)[0];
                            if (n) {
                                var i = t(this._element).find(u.INPUT)[0];
                                if (i) {
                                    if ("radio" === i.type)
                                        if (i.checked && t(this._element).hasClass(l.ACTIVE)) e = !1;
                                        else {
                                            var r = t(n).find(u.ACTIVE)[0];
                                            r && t(r).removeClass(l.ACTIVE)
                                        }
                                    e && (i.checked = !t(this._element).hasClass(l.ACTIVE), t(this._element).trigger("change")), i.focus()
                                }
                            } else this._element.setAttribute("aria-pressed", !t(this._element).hasClass(l.ACTIVE));
                            e && t(this._element).toggleClass(l.ACTIVE)
                        }, e.prototype.dispose = function() {
                            t.removeData(this._element, i), this._element = null
                        }, e._jQueryInterface = function(n) {
                            return this.each(function() {
                                var r = t(this).data(i);
                                r || (r = new e(this), t(this).data(i, r)), "toggle" === n && r[n]()
                            })
                        }, r(e, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }]), e
                    }();
                t(document).on(c.CLICK_DATA_API, u.DATA_TOGGLE_CARROT, function(e) {
                    e.preventDefault();
                    var n = e.target;
                    t(n).hasClass(l.BUTTON) || (n = t(n).closest(u.BUTTON)), f._jQueryInterface.call(t(n), "toggle")
                }).on(c.FOCUS_BLUR_DATA_API, u.DATA_TOGGLE_CARROT, function(e) {
                    var n = t(e.target).closest(u.BUTTON)[0];
                    t(n).toggleClass(l.FOCUS, /^focus(in)?$/.test(e.type))
                }), t.fn[e] = f._jQueryInterface, t.fn[e].Constructor = f, t.fn[e].noConflict = function() {
                    return t.fn[e] = s, f._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "carousel",
                    a = "bs.carousel",
                    s = "." + a,
                    l = ".data-api",
                    u = t.fn[e],
                    c = {
                        interval: 5e3,
                        keyboard: !0,
                        slide: !1,
                        pause: "hover",
                        wrap: !0
                    },
                    f = {
                        interval: "(number|boolean)",
                        keyboard: "boolean",
                        slide: "(boolean|string)",
                        pause: "(string|boolean)",
                        wrap: "boolean"
                    },
                    d = {
                        NEXT: "next",
                        PREVIOUS: "prev"
                    },
                    p = {
                        SLIDE: "slide" + s,
                        SLID: "slid" + s,
                        KEYDOWN: "keydown" + s,
                        MOUSEENTER: "mouseenter" + s,
                        MOUSELEAVE: "mouseleave" + s,
                        LOAD_DATA_API: "load" + s + l,
                        CLICK_DATA_API: "click" + s + l
                    },
                    h = {
                        CAROUSEL: "carousel",
                        ACTIVE: "active",
                        SLIDE: "slide",
                        RIGHT: "right",
                        LEFT: "left",
                        ITEM: "carousel-item"
                    },
                    m = {
                        ACTIVE: ".active",
                        ACTIVE_ITEM: ".active.carousel-item",
                        ITEM: ".carousel-item",
                        NEXT_PREV: ".next, .prev",
                        INDICATORS: ".carousel-indicators",
                        DATA_SLIDE: "[data-slide], [data-slide-to]",
                        DATA_RIDE: '[data-ride="carousel"]'
                    },
                    g = function() {
                        function l(e, i) {
                            n(this, l), this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this._config = this._getConfig(i), this._element = t(e)[0], this._indicatorsElement = t(this._element).find(m.INDICATORS)[0], this._addEventListeners()
                        }
                        return l.prototype.next = function() {
                            this._isSliding || this._slide(d.NEXT)
                        }, l.prototype.nextWhenVisible = function() {
                            document.hidden || this.next()
                        }, l.prototype.prev = function() {
                            this._isSliding || this._slide(d.PREVIOUS)
                        }, l.prototype.pause = function(e) {
                            e || (this._isPaused = !0), t(this._element).find(m.NEXT_PREV)[0] && o.supportsTransitionEnd() && (o.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                        }, l.prototype.cycle = function(e) {
                            e || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval(t.proxy(document.visibilityState ? this.nextWhenVisible : this.next, this), this._config.interval))
                        }, l.prototype.to = function(e) {
                            var n = this;
                            this._activeElement = t(this._element).find(m.ACTIVE_ITEM)[0];
                            var i = this._getItemIndex(this._activeElement);
                            if (!(e > this._items.length - 1 || e < 0)) {
                                if (this._isSliding) return void t(this._element).one(p.SLID, function() {
                                    return n.to(e)
                                });
                                if (i === e) return this.pause(), void this.cycle();
                                var r = e > i ? d.NEXT : d.PREVIOUS;
                                this._slide(r, this._items[e])
                            }
                        }, l.prototype.dispose = function() {
                            t(this._element).off(s), t.removeData(this._element, a), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                        }, l.prototype._getConfig = function(n) {
                            return n = t.extend({}, c, n), o.typeCheckConfig(e, n, f), n
                        }, l.prototype._addEventListeners = function() {
                            this._config.keyboard && t(this._element).on(p.KEYDOWN, t.proxy(this._keydown, this)), "hover" !== this._config.pause || "ontouchstart" in document.documentElement || t(this._element).on(p.MOUSEENTER, t.proxy(this.pause, this)).on(p.MOUSELEAVE, t.proxy(this.cycle, this))
                        }, l.prototype._keydown = function(t) {
                            if (t.preventDefault(), !/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                                case 37:
                                    this.prev();
                                    break;
                                case 39:
                                    this.next();
                                    break;
                                default:
                                    return
                            }
                        }, l.prototype._getItemIndex = function(e) {
                            return this._items = t.makeArray(t(e).parent().find(m.ITEM)), this._items.indexOf(e)
                        }, l.prototype._getItemByDirection = function(t, e) {
                            var n = t === d.NEXT,
                                i = t === d.PREVIOUS,
                                r = this._getItemIndex(e),
                                o = this._items.length - 1;
                            if ((i && 0 === r || n && r === o) && !this._config.wrap) return e;
                            var a = t === d.PREVIOUS ? -1 : 1,
                                s = (r + a) % this._items.length;
                            return -1 === s ? this._items[this._items.length - 1] : this._items[s]
                        }, l.prototype._triggerSlideEvent = function(e, n) {
                            var i = t.Event(p.SLIDE, {
                                relatedTarget: e,
                                direction: n
                            });
                            return t(this._element).trigger(i), i
                        }, l.prototype._setActiveIndicatorElement = function(e) {
                            if (this._indicatorsElement) {
                                t(this._indicatorsElement).find(m.ACTIVE).removeClass(h.ACTIVE);
                                var n = this._indicatorsElement.children[this._getItemIndex(e)];
                                n && t(n).addClass(h.ACTIVE)
                            }
                        }, l.prototype._slide = function(e, n) {
                            var i = this,
                                r = t(this._element).find(m.ACTIVE_ITEM)[0],
                                a = n || r && this._getItemByDirection(e, r),
                                s = Boolean(this._interval),
                                l = e === d.NEXT ? h.LEFT : h.RIGHT;
                            if (a && t(a).hasClass(h.ACTIVE)) return void(this._isSliding = !1);
                            if (!this._triggerSlideEvent(a, l).isDefaultPrevented() && r && a) {
                                this._isSliding = !0, s && this.pause(), this._setActiveIndicatorElement(a);
                                var u = t.Event(p.SLID, {
                                    relatedTarget: a,
                                    direction: l
                                });
                                o.supportsTransitionEnd() && t(this._element).hasClass(h.SLIDE) ? (t(a).addClass(e), o.reflow(a), t(r).addClass(l), t(a).addClass(l), t(r).one(o.TRANSITION_END, function() {
                                    t(a).removeClass(l).removeClass(e), t(a).addClass(h.ACTIVE), t(r).removeClass(h.ACTIVE).removeClass(e).removeClass(l), i._isSliding = !1, setTimeout(function() {
                                        return t(i._element).trigger(u)
                                    }, 0)
                                }).emulateTransitionEnd(600)) : (t(r).removeClass(h.ACTIVE), t(a).addClass(h.ACTIVE), this._isSliding = !1, t(this._element).trigger(u)), s && this.cycle()
                            }
                        }, l._jQueryInterface = function(e) {
                            return this.each(function() {
                                var n = t(this).data(a),
                                    r = t.extend({}, c, t(this).data());
                                "object" === (void 0 === e ? "undefined" : i(e)) && t.extend(r, e);
                                var o = "string" == typeof e ? e : r.slide;
                                if (n || (n = new l(this, r), t(this).data(a, n)), "number" == typeof e) n.to(e);
                                else if ("string" == typeof o) {
                                    if (void 0 === n[o]) throw new Error('No method named "' + o + '"');
                                    n[o]()
                                } else r.interval && (n.pause(), n.cycle())
                            })
                        }, l._dataApiClickHandler = function(e) {
                            var n = o.getSelectorFromElement(this);
                            if (n) {
                                var i = t(n)[0];
                                if (i && t(i).hasClass(h.CAROUSEL)) {
                                    var r = t.extend({}, t(i).data(), t(this).data()),
                                        s = this.getAttribute("data-slide-to");
                                    s && (r.interval = !1), l._jQueryInterface.call(t(i), r), s && t(i).data(a).to(s), e.preventDefault()
                                }
                            }
                        }, r(l, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }, {
                            key: "Default",
                            get: function() {
                                return c
                            }
                        }]), l
                    }();
                t(document).on(p.CLICK_DATA_API, m.DATA_SLIDE, g._dataApiClickHandler), t(window).on(p.LOAD_DATA_API, function() {
                    t(m.DATA_RIDE).each(function() {
                        var e = t(this);
                        g._jQueryInterface.call(e, e.data())
                    })
                }), t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function() {
                    return t.fn[e] = u, g._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "collapse",
                    a = "bs.collapse",
                    s = "." + a,
                    l = t.fn[e],
                    u = {
                        toggle: !0,
                        parent: ""
                    },
                    c = {
                        toggle: "boolean",
                        parent: "string"
                    },
                    f = {
                        SHOW: "show" + s,
                        SHOWN: "shown" + s,
                        HIDE: "hide" + s,
                        HIDDEN: "hidden" + s,
                        CLICK_DATA_API: "click" + s + ".data-api"
                    },
                    d = {
                        IN: "in",
                        COLLAPSE: "collapse",
                        COLLAPSING: "collapsing",
                        COLLAPSED: "collapsed"
                    },
                    p = {
                        WIDTH: "width",
                        HEIGHT: "height"
                    },
                    h = {
                        ACTIVES: ".card > .in, .card > .collapsing",
                        DATA_TOGGLE: '[data-toggle="collapse"]'
                    },
                    m = function() {
                        function s(e, i) {
                            n(this, s), this._isTransitioning = !1, this._element = e, this._config = this._getConfig(i), this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]')), this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                        }
                        return s.prototype.toggle = function() {
                            t(this._element).hasClass(d.IN) ? this.hide() : this.show()
                        }, s.prototype.show = function() {
                            var e = this;
                            if (!this._isTransitioning && !t(this._element).hasClass(d.IN)) {
                                var n = void 0,
                                    i = void 0;
                                if (this._parent && (n = t.makeArray(t(h.ACTIVES)), n.length || (n = null)), !(n && (i = t(n).data(a)) && i._isTransitioning)) {
                                    var r = t.Event(f.SHOW);
                                    if (t(this._element).trigger(r), !r.isDefaultPrevented()) {
                                        n && (s._jQueryInterface.call(t(n), "hide"), i || t(n).data(a, null));
                                        var l = this._getDimension();
                                        t(this._element).removeClass(d.COLLAPSE).addClass(d.COLLAPSING), this._element.style[l] = 0, this._element.setAttribute("aria-expanded", !0), this._triggerArray.length && t(this._triggerArray).removeClass(d.COLLAPSED).attr("aria-expanded", !0), this.setTransitioning(!0);
                                        var u = function() {
                                            t(e._element).removeClass(d.COLLAPSING).addClass(d.COLLAPSE).addClass(d.IN), e._element.style[l] = "", e.setTransitioning(!1), t(e._element).trigger(f.SHOWN)
                                        };
                                        if (!o.supportsTransitionEnd()) return void u();
                                        var c = l[0].toUpperCase() + l.slice(1),
                                            p = "scroll" + c;
                                        t(this._element).one(o.TRANSITION_END, u).emulateTransitionEnd(600), this._element.style[l] = this._element[p] + "px"
                                    }
                                }
                            }
                        }, s.prototype.hide = function() {
                            var e = this;
                            if (!this._isTransitioning && t(this._element).hasClass(d.IN)) {
                                var n = t.Event(f.HIDE);
                                if (t(this._element).trigger(n), !n.isDefaultPrevented()) {
                                    var i = this._getDimension(),
                                        r = i === p.WIDTH ? "offsetWidth" : "offsetHeight";
                                    this._element.style[i] = this._element[r] + "px", o.reflow(this._element), t(this._element).addClass(d.COLLAPSING).removeClass(d.COLLAPSE).removeClass(d.IN), this._element.setAttribute("aria-expanded", !1), this._triggerArray.length && t(this._triggerArray).addClass(d.COLLAPSED).attr("aria-expanded", !1), this.setTransitioning(!0);
                                    var a = function() {
                                        e.setTransitioning(!1), t(e._element).removeClass(d.COLLAPSING).addClass(d.COLLAPSE).trigger(f.HIDDEN)
                                    };
                                    return this._element.style[i] = "", o.supportsTransitionEnd() ? void t(this._element).one(o.TRANSITION_END, a).emulateTransitionEnd(600) : void a()
                                }
                            }
                        }, s.prototype.setTransitioning = function(t) {
                            this._isTransitioning = t
                        }, s.prototype.dispose = function() {
                            t.removeData(this._element, a), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                        }, s.prototype._getConfig = function(n) {
                            return n = t.extend({}, u, n), n.toggle = Boolean(n.toggle), o.typeCheckConfig(e, n, c), n
                        }, s.prototype._getDimension = function() {
                            return t(this._element).hasClass(p.WIDTH) ? p.WIDTH : p.HEIGHT
                        }, s.prototype._getParent = function() {
                            var e = this,
                                n = t(this._config.parent)[0],
                                i = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                            return t(n).find(i).each(function(t, n) {
                                e._addAriaAndCollapsedClass(s._getTargetFromElement(n), [n])
                            }), n
                        }, s.prototype._addAriaAndCollapsedClass = function(e, n) {
                            if (e) {
                                var i = t(e).hasClass(d.IN);
                                e.setAttribute("aria-expanded", i), n.length && t(n).toggleClass(d.COLLAPSED, !i).attr("aria-expanded", i)
                            }
                        }, s._getTargetFromElement = function(e) {
                            var n = o.getSelectorFromElement(e);
                            return n ? t(n)[0] : null
                        }, s._jQueryInterface = function(e) {
                            return this.each(function() {
                                var n = t(this),
                                    r = n.data(a),
                                    o = t.extend({}, u, n.data(), "object" === (void 0 === e ? "undefined" : i(e)) && e);
                                if (!r && o.toggle && /show|hide/.test(e) && (o.toggle = !1), r || (r = new s(this, o), n.data(a, r)), "string" == typeof e) {
                                    if (void 0 === r[e]) throw new Error('No method named "' + e + '"');
                                    r[e]()
                                }
                            })
                        }, r(s, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }, {
                            key: "Default",
                            get: function() {
                                return u
                            }
                        }]), s
                    }();
                t(document).on(f.CLICK_DATA_API, h.DATA_TOGGLE, function(e) {
                    e.preventDefault();
                    var n = m._getTargetFromElement(this),
                        i = t(n).data(a),
                        r = i ? "toggle" : t(this).data();
                    m._jQueryInterface.call(t(n), r)
                }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function() {
                    return t.fn[e] = l, m._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "dropdown",
                    i = "bs.dropdown",
                    a = "." + i,
                    s = ".data-api",
                    l = t.fn[e],
                    u = {
                        HIDE: "hide" + a,
                        HIDDEN: "hidden" + a,
                        SHOW: "show" + a,
                        SHOWN: "shown" + a,
                        CLICK: "click" + a,
                        CLICK_DATA_API: "click" + a + s,
                        KEYDOWN_DATA_API: "keydown" + a + s
                    },
                    c = {
                        BACKDROP: "dropdown-backdrop",
                        DISABLED: "disabled",
                        OPEN: "open"
                    },
                    f = {
                        BACKDROP: ".dropdown-backdrop",
                        DATA_TOGGLE: '[data-toggle="dropdown"]',
                        FORM_CHILD: ".dropdown form",
                        ROLE_MENU: '[role="menu"]',
                        ROLE_LISTBOX: '[role="listbox"]',
                        NAVBAR_NAV: ".navbar-nav",
                        VISIBLE_ITEMS: '[role="menu"] li:not(.disabled) a, [role="listbox"] li:not(.disabled) a'
                    },
                    d = function() {
                        function e(t) {
                            n(this, e), this._element = t, this._addEventListeners()
                        }
                        return e.prototype.toggle = function() {
                            if (this.disabled || t(this).hasClass(c.DISABLED)) return !1;
                            var n = e._getParentFromElement(this),
                                i = t(n).hasClass(c.OPEN);
                            if (e._clearMenus(), i) return !1;
                            if ("ontouchstart" in document.documentElement && !t(n).closest(f.NAVBAR_NAV).length) {
                                var r = document.createElement("div");
                                r.className = c.BACKDROP, t(r).insertBefore(this), t(r).on("click", e._clearMenus)
                            }
                            var o = {
                                    relatedTarget: this
                                },
                                a = t.Event(u.SHOW, o);
                            return t(n).trigger(a), !a.isDefaultPrevented() && (this.focus(), this.setAttribute("aria-expanded", "true"), t(n).toggleClass(c.OPEN), t(n).trigger(t.Event(u.SHOWN, o)), !1)
                        }, e.prototype.dispose = function() {
                            t.removeData(this._element, i), t(this._element).off(a), this._element = null
                        }, e.prototype._addEventListeners = function() {
                            t(this._element).on(u.CLICK, this.toggle)
                        }, e._jQueryInterface = function(n) {
                            return this.each(function() {
                                var r = t(this).data(i);
                                if (r || t(this).data(i, r = new e(this)), "string" == typeof n) {
                                    if (void 0 === r[n]) throw new Error('No method named "' + n + '"');
                                    r[n].call(this)
                                }
                            })
                        }, e._clearMenus = function(n) {
                            if (!n || 3 !== n.which) {
                                var i = t(f.BACKDROP)[0];
                                i && i.parentNode.removeChild(i);
                                for (var r = t.makeArray(t(f.DATA_TOGGLE)), o = 0; o < r.length; o++) {
                                    var a = e._getParentFromElement(r[o]),
                                        s = {
                                            relatedTarget: r[o]
                                        };
                                    if (t(a).hasClass(c.OPEN) && !(n && "click" === n.type && /input|textarea/i.test(n.target.tagName) && t.contains(a, n.target))) {
                                        var l = t.Event(u.HIDE, s);
                                        t(a).trigger(l), l.isDefaultPrevented() || (r[o].setAttribute("aria-expanded", "false"), t(a).removeClass(c.OPEN).trigger(t.Event(u.HIDDEN, s)))
                                    }
                                }
                            }
                        }, e._getParentFromElement = function(e) {
                            var n = void 0,
                                i = o.getSelectorFromElement(e);
                            return i && (n = t(i)[0]), n || e.parentNode
                        }, e._dataApiKeydownHandler = function(n) {
                            if (/(38|40|27|32)/.test(n.which) && !/input|textarea/i.test(n.target.tagName) && (n.preventDefault(), n.stopPropagation(), !this.disabled && !t(this).hasClass(c.DISABLED))) {
                                var i = e._getParentFromElement(this),
                                    r = t(i).hasClass(c.OPEN);
                                if (!r && 27 !== n.which || r && 27 === n.which) {
                                    if (27 === n.which) {
                                        var o = t(i).find(f.DATA_TOGGLE)[0];
                                        t(o).trigger("focus")
                                    }
                                    return void t(this).trigger("click")
                                }
                                var a = t.makeArray(t(f.VISIBLE_ITEMS));
                                if (a = a.filter(function(t) {
                                        return t.offsetWidth || t.offsetHeight
                                    }), a.length) {
                                    var s = a.indexOf(n.target);
                                    38 === n.which && s > 0 && s--, 40 === n.which && s < a.length - 1 && s++, s < 0 && (s = 0), a[s].focus()
                                }
                            }
                        }, r(e, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }]), e
                    }();
                t(document).on(u.KEYDOWN_DATA_API, f.DATA_TOGGLE, d._dataApiKeydownHandler).on(u.KEYDOWN_DATA_API, f.ROLE_MENU, d._dataApiKeydownHandler).on(u.KEYDOWN_DATA_API, f.ROLE_LISTBOX, d._dataApiKeydownHandler).on(u.CLICK_DATA_API, d._clearMenus).on(u.CLICK_DATA_API, f.DATA_TOGGLE, d.prototype.toggle).on(u.CLICK_DATA_API, f.FORM_CHILD, function(t) {
                    t.stopPropagation()
                }), t.fn[e] = d._jQueryInterface, t.fn[e].Constructor = d, t.fn[e].noConflict = function() {
                    return t.fn[e] = l, d._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "modal",
                    a = "bs.modal",
                    s = "." + a,
                    l = t.fn[e],
                    u = {
                        backdrop: !0,
                        keyboard: !0,
                        focus: !0,
                        show: !0
                    },
                    c = {
                        backdrop: "(boolean|string)",
                        keyboard: "boolean",
                        focus: "boolean",
                        show: "boolean"
                    },
                    f = {
                        HIDE: "hide" + s,
                        HIDDEN: "hidden" + s,
                        SHOW: "show" + s,
                        SHOWN: "shown" + s,
                        FOCUSIN: "focusin" + s,
                        RESIZE: "resize" + s,
                        CLICK_DISMISS: "click.dismiss" + s,
                        KEYDOWN_DISMISS: "keydown.dismiss" + s,
                        MOUSEUP_DISMISS: "mouseup.dismiss" + s,
                        MOUSEDOWN_DISMISS: "mousedown.dismiss" + s,
                        CLICK_DATA_API: "click" + s + ".data-api"
                    },
                    d = {
                        SCROLLBAR_MEASURER: "modal-scrollbar-measure",
                        BACKDROP: "modal-backdrop",
                        OPEN: "modal-open",
                        FADE: "fade",
                        IN: "in"
                    },
                    p = {
                        DIALOG: ".modal-dialog",
                        DATA_TOGGLE: '[data-toggle="modal"]',
                        DATA_DISMISS: '[data-dismiss="modal"]',
                        FIXED_CONTENT: ".navbar-fixed-top, .navbar-fixed-bottom, .is-fixed"
                    },
                    h = function() {
                        function l(e, i) {
                            n(this, l), this._config = this._getConfig(i), this._element = e, this._dialog = t(e).find(p.DIALOG)[0], this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._originalBodyPadding = 0, this._scrollbarWidth = 0
                        }
                        return l.prototype.toggle = function(t) {
                            return this._isShown ? this.hide() : this.show(t)
                        }, l.prototype.show = function(e) {
                            var n = this,
                                i = t.Event(f.SHOW, {
                                    relatedTarget: e
                                });
                            t(this._element).trigger(i), this._isShown || i.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), t(document.body).addClass(d.OPEN), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(f.CLICK_DISMISS, p.DATA_DISMISS, t.proxy(this.hide, this)), t(this._dialog).on(f.MOUSEDOWN_DISMISS, function() {
                                t(n._element).one(f.MOUSEUP_DISMISS, function(e) {
                                    t(e.target).is(n._element) && (n._ignoreBackdropClick = !0)
                                })
                            }), this._showBackdrop(t.proxy(this._showElement, this, e)))
                        }, l.prototype.hide = function(e) {
                            e && e.preventDefault();
                            var n = t.Event(f.HIDE);
                            t(this._element).trigger(n), this._isShown && !n.isDefaultPrevented() && (this._isShown = !1, this._setEscapeEvent(), this._setResizeEvent(), t(document).off(f.FOCUSIN), t(this._element).removeClass(d.IN), t(this._element).off(f.CLICK_DISMISS), t(this._dialog).off(f.MOUSEDOWN_DISMISS), o.supportsTransitionEnd() && t(this._element).hasClass(d.FADE) ? t(this._element).one(o.TRANSITION_END, t.proxy(this._hideModal, this)).emulateTransitionEnd(300) : this._hideModal())
                        }, l.prototype.dispose = function() {
                            t.removeData(this._element, a), t(window).off(s), t(document).off(s), t(this._element).off(s), t(this._backdrop).off(s), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._originalBodyPadding = null, this._scrollbarWidth = null
                        }, l.prototype._getConfig = function(n) {
                            return n = t.extend({}, u, n), o.typeCheckConfig(e, n, c), n
                        }, l.prototype._showElement = function(e) {
                            var n = this,
                                i = o.supportsTransitionEnd() && t(this._element).hasClass(d.FADE);
                            this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.scrollTop = 0, i && o.reflow(this._element), t(this._element).addClass(d.IN), this._config.focus && this._enforceFocus();
                            var r = t.Event(f.SHOWN, {
                                    relatedTarget: e
                                }),
                                a = function() {
                                    n._config.focus && n._element.focus(), t(n._element).trigger(r)
                                };
                            i ? t(this._dialog).one(o.TRANSITION_END, a).emulateTransitionEnd(300) : a()
                        }, l.prototype._enforceFocus = function() {
                            var e = this;
                            t(document).off(f.FOCUSIN).on(f.FOCUSIN, function(n) {
                                document === n.target || e._element === n.target || t(e._element).has(n.target).length || e._element.focus()
                            })
                        }, l.prototype._setEscapeEvent = function() {
                            var e = this;
                            this._isShown && this._config.keyboard ? t(this._element).on(f.KEYDOWN_DISMISS, function(t) {
                                27 === t.which && e.hide()
                            }) : this._isShown || t(this._element).off(f.KEYDOWN_DISMISS)
                        }, l.prototype._setResizeEvent = function() {
                            this._isShown ? t(window).on(f.RESIZE, t.proxy(this._handleUpdate, this)) : t(window).off(f.RESIZE)
                        }, l.prototype._hideModal = function() {
                            var e = this;
                            this._element.style.display = "none", this._element.setAttribute("aria-hidden", "true"), this._showBackdrop(function() {
                                t(document.body).removeClass(d.OPEN), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(f.HIDDEN)
                            })
                        }, l.prototype._removeBackdrop = function() {
                            this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
                        }, l.prototype._showBackdrop = function(e) {
                            var n = this,
                                i = t(this._element).hasClass(d.FADE) ? d.FADE : "";
                            if (this._isShown && this._config.backdrop) {
                                var r = o.supportsTransitionEnd() && i;
                                if (this._backdrop = document.createElement("div"), this._backdrop.className = d.BACKDROP, i && t(this._backdrop).addClass(i), t(this._backdrop).appendTo(document.body), t(this._element).on(f.CLICK_DISMISS, function(t) {
                                        return n._ignoreBackdropClick ? void(n._ignoreBackdropClick = !1) : void(t.target === t.currentTarget && ("static" === n._config.backdrop ? n._element.focus() : n.hide()))
                                    }), r && o.reflow(this._backdrop), t(this._backdrop).addClass(d.IN), !e) return;
                                if (!r) return void e();
                                t(this._backdrop).one(o.TRANSITION_END, e).emulateTransitionEnd(150)
                            } else if (!this._isShown && this._backdrop) {
                                t(this._backdrop).removeClass(d.IN);
                                var a = function() {
                                    n._removeBackdrop(), e && e()
                                };
                                o.supportsTransitionEnd() && t(this._element).hasClass(d.FADE) ? t(this._backdrop).one(o.TRANSITION_END, a).emulateTransitionEnd(150) : a()
                            } else e && e()
                        }, l.prototype._handleUpdate = function() {
                            this._adjustDialog()
                        }, l.prototype._adjustDialog = function() {
                            var t = this._element.scrollHeight > document.documentElement.clientHeight;
                            !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                        }, l.prototype._resetAdjustments = function() {
                            this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                        }, l.prototype._checkScrollbar = function() {
                            this._isBodyOverflowing = document.body.clientWidth < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                        }, l.prototype._setScrollbar = function() {
                            var e = parseInt(t(p.FIXED_CONTENT).css("padding-right") || 0, 10);
                            this._originalBodyPadding = document.body.style.paddingRight || "", this._isBodyOverflowing && (document.body.style.paddingRight = e + this._scrollbarWidth + "px")
                        }, l.prototype._resetScrollbar = function() {
                            document.body.style.paddingRight = this._originalBodyPadding
                        }, l.prototype._getScrollbarWidth = function() {
                            var t = document.createElement("div");
                            t.className = d.SCROLLBAR_MEASURER, document.body.appendChild(t);
                            var e = t.offsetWidth - t.clientWidth;
                            return document.body.removeChild(t), e
                        }, l._jQueryInterface = function(e, n) {
                            return this.each(function() {
                                var r = t(this).data(a),
                                    o = t.extend({}, l.Default, t(this).data(), "object" === (void 0 === e ? "undefined" : i(e)) && e);
                                if (r || (r = new l(this, o), t(this).data(a, r)), "string" == typeof e) {
                                    if (void 0 === r[e]) throw new Error('No method named "' + e + '"');
                                    r[e](n)
                                } else o.show && r.show(n)
                            })
                        }, r(l, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }, {
                            key: "Default",
                            get: function() {
                                return u
                            }
                        }]), l
                    }();
                t(document).on(f.CLICK_DATA_API, p.DATA_TOGGLE, function(e) {
                    var n = this,
                        i = void 0,
                        r = o.getSelectorFromElement(this);
                    r && (i = t(r)[0]);
                    var s = t(i).data(a) ? "toggle" : t.extend({}, t(i).data(), t(this).data());
                    "A" === this.tagName && e.preventDefault();
                    var l = t(i).one(f.SHOW, function(e) {
                        e.isDefaultPrevented() || l.one(f.HIDDEN, function() {
                            t(n).is(":visible") && n.focus()
                        })
                    });
                    h._jQueryInterface.call(t(i), s, this)
                }), t.fn[e] = h._jQueryInterface, t.fn[e].Constructor = h, t.fn[e].noConflict = function() {
                    return t.fn[e] = l, h._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "scrollspy",
                    a = "bs.scrollspy",
                    s = "." + a,
                    l = t.fn[e],
                    u = {
                        offset: 10,
                        method: "auto",
                        target: ""
                    },
                    c = {
                        offset: "number",
                        method: "string",
                        target: "(string|element)"
                    },
                    f = {
                        ACTIVATE: "activate" + s,
                        SCROLL: "scroll" + s,
                        LOAD_DATA_API: "load" + s + ".data-api"
                    },
                    d = {
                        DROPDOWN_ITEM: "dropdown-item",
                        DROPDOWN_MENU: "dropdown-menu",
                        NAV_LINK: "nav-link",
                        NAV: "nav",
                        ACTIVE: "active"
                    },
                    p = {
                        DATA_SPY: '[data-spy="scroll"]',
                        ACTIVE: ".active",
                        LIST_ITEM: ".list-item",
                        LI: "li",
                        LI_DROPDOWN: "li.dropdown",
                        NAV_LINKS: ".nav-link",
                        DROPDOWN: ".dropdown",
                        DROPDOWN_ITEMS: ".dropdown-item",
                        DROPDOWN_TOGGLE: ".dropdown-toggle"
                    },
                    h = {
                        OFFSET: "offset",
                        POSITION: "position"
                    },
                    m = function() {
                        function l(e, i) {
                            n(this, l), this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(i), this._selector = this._config.target + " " + p.NAV_LINKS + "," + this._config.target + " " + p.DROPDOWN_ITEMS, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(f.SCROLL, t.proxy(this._process, this)), this.refresh(), this._process()
                        }
                        return l.prototype.refresh = function() {
                            var e = this,
                                n = this._scrollElement !== this._scrollElement.window ? h.POSITION : h.OFFSET,
                                i = "auto" === this._config.method ? n : this._config.method,
                                r = i === h.POSITION ? this._getScrollTop() : 0;
                            this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), t.makeArray(t(this._selector)).map(function(e) {
                                var n = void 0,
                                    a = o.getSelectorFromElement(e);
                                return a && (n = t(a)[0]), n && (n.offsetWidth || n.offsetHeight) ? [t(n)[i]().top + r, a] : null
                            }).filter(function(t) {
                                return t
                            }).sort(function(t, e) {
                                return t[0] - e[0]
                            }).forEach(function(t) {
                                e._offsets.push(t[0]), e._targets.push(t[1])
                            })
                        }, l.prototype.dispose = function() {
                            t.removeData(this._element, a), t(this._scrollElement).off(s), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                        }, l.prototype._getConfig = function(n) {
                            if (n = t.extend({}, u, n), "string" != typeof n.target) {
                                var i = t(n.target).attr("id");
                                i || (i = o.getUID(e), t(n.target).attr("id", i)), n.target = "#" + i
                            }
                            return o.typeCheckConfig(e, n, c), n
                        }, l.prototype._getScrollTop = function() {
                            return this._scrollElement === window ? this._scrollElement.scrollY : this._scrollElement.scrollTop
                        }, l.prototype._getScrollHeight = function() {
                            return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                        }, l.prototype._process = function() {
                            var t = this._getScrollTop() + this._config.offset,
                                e = this._getScrollHeight(),
                                n = this._config.offset + e - this._scrollElement.offsetHeight;
                            if (this._scrollHeight !== e && this.refresh(), t >= n) {
                                var i = this._targets[this._targets.length - 1];
                                this._activeTarget !== i && this._activate(i)
                            }
                            if (this._activeTarget && t < this._offsets[0]) return this._activeTarget = null, void this._clear();
                            for (var r = this._offsets.length; r--;) {
                                this._activeTarget !== this._targets[r] && t >= this._offsets[r] && (void 0 === this._offsets[r + 1] || t < this._offsets[r + 1]) && this._activate(this._targets[r])
                            }
                        }, l.prototype._activate = function(e) {
                            this._activeTarget = e, this._clear();
                            var n = this._selector.split(",");
                            n = n.map(function(t) {
                                return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                            });
                            var i = t(n.join(","));
                            i.hasClass(d.DROPDOWN_ITEM) ? (i.closest(p.DROPDOWN).find(p.DROPDOWN_TOGGLE).addClass(d.ACTIVE), i.addClass(d.ACTIVE)) : i.parents(p.LI).find(p.NAV_LINKS).addClass(d.ACTIVE), t(this._scrollElement).trigger(f.ACTIVATE, {
                                relatedTarget: e
                            })
                        }, l.prototype._clear = function() {
                            t(this._selector).filter(p.ACTIVE).removeClass(d.ACTIVE)
                        }, l._jQueryInterface = function(e) {
                            return this.each(function() {
                                var n = t(this).data(a),
                                    r = "object" === (void 0 === e ? "undefined" : i(e)) && e || null;
                                if (n || (n = new l(this, r), t(this).data(a, n)), "string" == typeof e) {
                                    if (void 0 === n[e]) throw new Error('No method named "' + e + '"');
                                    n[e]()
                                }
                            })
                        }, r(l, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }, {
                            key: "Default",
                            get: function() {
                                return u
                            }
                        }]), l
                    }();
                t(window).on(f.LOAD_DATA_API, function() {
                    for (var e = t.makeArray(t(p.DATA_SPY)), n = e.length; n--;) {
                        var i = t(e[n]);
                        m._jQueryInterface.call(i, i.data())
                    }
                }), t.fn[e] = m._jQueryInterface, t.fn[e].Constructor = m, t.fn[e].noConflict = function() {
                    return t.fn[e] = l, m._jQueryInterface
                }
            }(jQuery), function(t) {
                var e = "tab",
                    i = "bs.tab",
                    a = "." + i,
                    s = t.fn[e],
                    l = {
                        HIDE: "hide" + a,
                        HIDDEN: "hidden" + a,
                        SHOW: "show" + a,
                        SHOWN: "shown" + a,
                        CLICK_DATA_API: "click" + a + ".data-api"
                    },
                    u = {
                        DROPDOWN_MENU: "dropdown-menu",
                        ACTIVE: "active",
                        FADE: "fade",
                        IN: "in"
                    },
                    c = {
                        A: "a",
                        LI: "li",
                        DROPDOWN: ".dropdown",
                        UL: "ul:not(.dropdown-menu)",
                        FADE_CHILD: "> .nav-item .fade, > .fade",
                        ACTIVE: ".active",
                        ACTIVE_CHILD: "> .nav-item > .active, > .active",
                        DATA_TOGGLE: '[data-toggle="tab"], [data-toggle="pill"]',
                        DROPDOWN_TOGGLE: ".dropdown-toggle",
                        DROPDOWN_ACTIVE_CHILD: "> .dropdown-menu .active"
                    },
                    f = function() {
                        function e(t) {
                            n(this, e), this._element = t
                        }
                        return e.prototype.show = function() {
                            var e = this;
                            if (!this._element.parentNode || this._element.parentNode.nodeType !== Node.ELEMENT_NODE || !t(this._element).hasClass(u.ACTIVE)) {
                                var n = void 0,
                                    i = void 0,
                                    r = t(this._element).closest(c.UL)[0],
                                    a = o.getSelectorFromElement(this._element);
                                r && (i = t.makeArray(t(r).find(c.ACTIVE)), i = i[i.length - 1]);
                                var s = t.Event(l.HIDE, {
                                        relatedTarget: this._element
                                    }),
                                    f = t.Event(l.SHOW, {
                                        relatedTarget: i
                                    });
                                if (i && t(i).trigger(s), t(this._element).trigger(f), !f.isDefaultPrevented() && !s.isDefaultPrevented()) {
                                    a && (n = t(a)[0]), this._activate(this._element, r);
                                    var d = function() {
                                        var n = t.Event(l.HIDDEN, {
                                                relatedTarget: e._element
                                            }),
                                            r = t.Event(l.SHOWN, {
                                                relatedTarget: i
                                            });
                                        t(i).trigger(n), t(e._element).trigger(r)
                                    };
                                    n ? this._activate(n, n.parentNode, d) : d()
                                }
                            }
                        }, e.prototype.dispose = function() {
                            t.removeClass(this._element, i), this._element = null
                        }, e.prototype._activate = function(e, n, i) {
                            var r = t(n).find(c.ACTIVE_CHILD)[0],
                                a = i && o.supportsTransitionEnd() && (r && t(r).hasClass(u.FADE) || Boolean(t(n).find(c.FADE_CHILD)[0])),
                                s = t.proxy(this._transitionComplete, this, e, r, a, i);
                            r && a ? t(r).one(o.TRANSITION_END, s).emulateTransitionEnd(150) : s(), r && t(r).removeClass(u.IN)
                        }, e.prototype._transitionComplete = function(e, n, i, r) {
                            if (n) {
                                t(n).removeClass(u.ACTIVE);
                                var a = t(n).find(c.DROPDOWN_ACTIVE_CHILD)[0];
                                a && t(a).removeClass(u.ACTIVE), n.setAttribute("aria-expanded", !1)
                            }
                            if (t(e).addClass(u.ACTIVE), e.setAttribute("aria-expanded", !0), i ? (o.reflow(e), t(e).addClass(u.IN)) : t(e).removeClass(u.FADE), e.parentNode && t(e.parentNode).hasClass(u.DROPDOWN_MENU)) {
                                var s = t(e).closest(c.DROPDOWN)[0];
                                s && t(s).find(c.DROPDOWN_TOGGLE).addClass(u.ACTIVE), e.setAttribute("aria-expanded", !0)
                            }
                            r && r()
                        }, e._jQueryInterface = function(n) {
                            return this.each(function() {
                                var r = t(this),
                                    o = r.data(i);
                                if (o || (o = o = new e(this), r.data(i, o)), "string" == typeof n) {
                                    if (void 0 === o[n]) throw new Error('No method named "' + n + '"');
                                    o[n]()
                                }
                            })
                        }, r(e, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }]), e
                    }();
                t(document).on(l.CLICK_DATA_API, c.DATA_TOGGLE, function(e) {
                    e.preventDefault(), f._jQueryInterface.call(t(this), "show")
                }), t.fn[e] = f._jQueryInterface, t.fn[e].Constructor = f, t.fn[e].noConflict = function() {
                    return t.fn[e] = s, f._jQueryInterface
                }
            }(jQuery), function(t) {
                if (void 0 === window.Tether) throw new Error("Bootstrap tooltips require Tether (http://tether.io/)");
                var e = "tooltip",
                    a = "bs.tooltip",
                    s = "." + a,
                    l = t.fn[e],
                    u = {
                        animation: !0,
                        template: '<div class="tooltip" role="tooltip"><div class="tooltip-inner"></div></div>',
                        trigger: "hover focus",
                        title: "",
                        delay: 0,
                        html: !1,
                        selector: !1,
                        placement: "top",
                        offset: "0 0",
                        constraints: []
                    },
                    c = {
                        animation: "boolean",
                        template: "string",
                        title: "(string|element|function)",
                        trigger: "string",
                        delay: "(number|object)",
                        html: "boolean",
                        selector: "(string|boolean)",
                        placement: "(string|function)",
                        offset: "string",
                        constraints: "array"
                    },
                    f = {
                        TOP: "bottom center",
                        RIGHT: "middle left",
                        BOTTOM: "top center",
                        LEFT: "middle right"
                    },
                    d = {
                        IN: "in",
                        OUT: "out"
                    },
                    p = {
                        HIDE: "hide" + s,
                        HIDDEN: "hidden" + s,
                        SHOW: "show" + s,
                        SHOWN: "shown" + s,
                        INSERTED: "inserted" + s,
                        CLICK: "click" + s,
                        FOCUSIN: "focusin" + s,
                        FOCUSOUT: "focusout" + s,
                        MOUSEENTER: "mouseenter" + s,
                        MOUSELEAVE: "mouseleave" + s
                    },
                    h = {
                        FADE: "fade",
                        IN: "in"
                    },
                    m = {
                        TOOLTIP: ".tooltip",
                        TOOLTIP_INNER: ".tooltip-inner"
                    },
                    g = {
                        element: !1,
                        enabled: !1
                    },
                    v = {
                        HOVER: "hover",
                        FOCUS: "focus",
                        CLICK: "click",
                        MANUAL: "manual"
                    },
                    y = function() {
                        function l(t, e) {
                            n(this, l), this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._tether = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
                        }
                        return l.prototype.enable = function() {
                            this._isEnabled = !0
                        }, l.prototype.disable = function() {
                            this._isEnabled = !1
                        }, l.prototype.toggleEnabled = function() {
                            this._isEnabled = !this._isEnabled
                        }, l.prototype.toggle = function(e) {
                            if (e) {
                                var n = this.constructor.DATA_KEY,
                                    i = t(e.currentTarget).data(n);
                                i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), i._activeTrigger.click = !i._activeTrigger.click, i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i)
                            } else {
                                if (t(this.getTipElement()).hasClass(h.IN)) return void this._leave(null, this);
                                this._enter(null, this)
                            }
                        }, l.prototype.dispose = function() {
                            clearTimeout(this._timeout), this.cleanupTether(), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._tether = null, this.element = null, this.config = null, this.tip = null
                        }, l.prototype.show = function() {
                            var e = this,
                                n = t.Event(this.constructor.Event.SHOW);
                            if (this.isWithContent() && this._isEnabled) {
                                t(this.element).trigger(n);
                                var i = t.contains(this.element.ownerDocument.documentElement, this.element);
                                if (n.isDefaultPrevented() || !i) return;
                                var r = this.getTipElement(),
                                    a = o.getUID(this.constructor.NAME);
                                r.setAttribute("id", a), this.element.setAttribute("aria-describedby", a), this.setContent(), this.config.animation && t(r).addClass(h.FADE);
                                var s = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                                    u = this._getAttachment(s);
                                t(r).data(this.constructor.DATA_KEY, this).appendTo(document.body), t(this.element).trigger(this.constructor.Event.INSERTED), this._tether = new Tether({
                                    attachment: u,
                                    element: r,
                                    target: this.element,
                                    classes: g,
                                    classPrefix: "bs-tether",
                                    offset: this.config.offset,
                                    constraints: this.config.constraints,
                                    addTargetClasses: !1
                                }), o.reflow(r), this._tether.position(), t(r).addClass(h.IN);
                                var c = function() {
                                    var n = e._hoverState;
                                    e._hoverState = null, t(e.element).trigger(e.constructor.Event.SHOWN), n === d.OUT && e._leave(null, e)
                                };
                                if (o.supportsTransitionEnd() && t(this.tip).hasClass(h.FADE)) return void t(this.tip).one(o.TRANSITION_END, c).emulateTransitionEnd(l._TRANSITION_DURATION);
                                c()
                            }
                        }, l.prototype.hide = function(e) {
                            var n = this,
                                i = this.getTipElement(),
                                r = t.Event(this.constructor.Event.HIDE),
                                a = function() {
                                    n._hoverState !== d.IN && i.parentNode && i.parentNode.removeChild(i), n.element.removeAttribute("aria-describedby"), t(n.element).trigger(n.constructor.Event.HIDDEN), n.cleanupTether(), e && e()
                                };
                            t(this.element).trigger(r), r.isDefaultPrevented() || (t(i).removeClass(h.IN), o.supportsTransitionEnd() && t(this.tip).hasClass(h.FADE) ? t(i).one(o.TRANSITION_END, a).emulateTransitionEnd(150) : a(), this._hoverState = "")
                        }, l.prototype.isWithContent = function() {
                            return Boolean(this.getTitle())
                        }, l.prototype.getTipElement = function() {
                            return this.tip = this.tip || t(this.config.template)[0]
                        }, l.prototype.setContent = function() {
                            var e = t(this.getTipElement());
                            this.setElementContent(e.find(m.TOOLTIP_INNER), this.getTitle()), e.removeClass(h.FADE).removeClass(h.IN), this.cleanupTether()
                        }, l.prototype.setElementContent = function(e, n) {
                            var r = this.config.html;
                            "object" === (void 0 === n ? "undefined" : i(n)) && (n.nodeType || n.jquery) ? r ? t(n).parent().is(e) || e.empty().append(n) : e.text(t(n).text()): e[r ? "html" : "text"](n)
                        }, l.prototype.getTitle = function() {
                            var t = this.element.getAttribute("data-original-title");
                            return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
                        }, l.prototype.cleanupTether = function() {
                            this._tether && this._tether.destroy()
                        }, l.prototype._getAttachment = function(t) {
                            return f[t.toUpperCase()]
                        }, l.prototype._setListeners = function() {
                            var e = this;
                            this.config.trigger.split(" ").forEach(function(n) {
                                if ("click" === n) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, t.proxy(e.toggle, e));
                                else if (n !== v.MANUAL) {
                                    var i = n === v.HOVER ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                        r = n === v.HOVER ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                    t(e.element).on(i, e.config.selector, t.proxy(e._enter, e)).on(r, e.config.selector, t.proxy(e._leave, e))
                                }
                            }), this.config.selector ? this.config = t.extend({}, this.config, {
                                trigger: "manual",
                                selector: ""
                            }) : this._fixTitle()
                        }, l.prototype._fixTitle = function() {
                            var t = i(this.element.getAttribute("data-original-title"));
                            (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                        }, l.prototype._enter = function(e, n) {
                            var i = this.constructor.DATA_KEY;
                            return n = n || t(e.currentTarget).data(i), n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusin" === e.type ? v.FOCUS : v.HOVER] = !0), t(n.getTipElement()).hasClass(h.IN) || n._hoverState === d.IN ? void(n._hoverState = d.IN) : (clearTimeout(n._timeout), n._hoverState = d.IN, n.config.delay && n.config.delay.show ? void(n._timeout = setTimeout(function() {
                                n._hoverState === d.IN && n.show()
                            }, n.config.delay.show)) : void n.show())
                        }, l.prototype._leave = function(e, n) {
                            var i = this.constructor.DATA_KEY;
                            if (n = n || t(e.currentTarget).data(i), n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusout" === e.type ? v.FOCUS : v.HOVER] = !1), !n._isWithActiveTrigger()) return clearTimeout(n._timeout), n._hoverState = d.OUT, n.config.delay && n.config.delay.hide ? void(n._timeout = setTimeout(function() {
                                n._hoverState === d.OUT && n.hide()
                            }, n.config.delay.hide)) : void n.hide()
                        }, l.prototype._isWithActiveTrigger = function() {
                            for (var t in this._activeTrigger)
                                if (this._activeTrigger[t]) return !0;
                            return !1
                        }, l.prototype._getConfig = function(n) {
                            return n = t.extend({}, this.constructor.Default, t(this.element).data(), n), n.delay && "number" == typeof n.delay && (n.delay = {
                                show: n.delay,
                                hide: n.delay
                            }), o.typeCheckConfig(e, n, this.constructor.DefaultType), n
                        }, l.prototype._getDelegateConfig = function() {
                            var t = {};
                            if (this.config)
                                for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                            return t
                        }, l._jQueryInterface = function(e) {
                            return this.each(function() {
                                var n = t(this).data(a),
                                    r = "object" === (void 0 === e ? "undefined" : i(e)) ? e : null;
                                if ((n || !/dispose|hide/.test(e)) && (n || (n = new l(this, r), t(this).data(a, n)), "string" == typeof e)) {
                                    if (void 0 === n[e]) throw new Error('No method named "' + e + '"');
                                    n[e]()
                                }
                            })
                        }, r(l, null, [{
                            key: "VERSION",
                            get: function() {
                                return "4.0.0-alpha.5"
                            }
                        }, {
                            key: "Default",
                            get: function() {
                                return u
                            }
                        }, {
                            key: "NAME",
                            get: function() {
                                return e
                            }
                        }, {
                            key: "DATA_KEY",
                            get: function() {
                                return a
                            }
                        }, {
                            key: "Event",
                            get: function() {
                                return p
                            }
                        }, {
                            key: "EVENT_KEY",
                            get: function() {
                                return s
                            }
                        }, {
                            key: "DefaultType",
                            get: function() {
                                return c
                            }
                        }]), l
                    }();
                return t.fn[e] = y._jQueryInterface, t.fn[e].Constructor = y, t.fn[e].noConflict = function() {
                    return t.fn[e] = l, y._jQueryInterface
                }, y
            }(jQuery));
        ! function(o) {
            var s = "popover",
                l = "bs.popover",
                u = "." + l,
                c = o.fn[s],
                f = o.extend({}, a.Default, {
                    placement: "right",
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
                }),
                d = o.extend({}, a.DefaultType, {
                    content: "(string|element|function)"
                }),
                p = {
                    FADE: "fade",
                    IN: "in"
                },
                h = {
                    TITLE: ".popover-title",
                    CONTENT: ".popover-content"
                },
                m = {
                    HIDE: "hide" + u,
                    HIDDEN: "hidden" + u,
                    SHOW: "show" + u,
                    SHOWN: "shown" + u,
                    INSERTED: "inserted" + u,
                    CLICK: "click" + u,
                    FOCUSIN: "focusin" + u,
                    FOCUSOUT: "focusout" + u,
                    MOUSEENTER: "mouseenter" + u,
                    MOUSELEAVE: "mouseleave" + u
                },
                g = function(a) {
                    function c() {
                        return n(this, c), t(this, a.apply(this, arguments))
                    }
                    return e(c, a), c.prototype.isWithContent = function() {
                        return this.getTitle() || this._getContent()
                    }, c.prototype.getTipElement = function() {
                        return this.tip = this.tip || o(this.config.template)[0]
                    }, c.prototype.setContent = function() {
                        var t = o(this.getTipElement());
                        this.setElementContent(t.find(h.TITLE), this.getTitle()), this.setElementContent(t.find(h.CONTENT), this._getContent()), t.removeClass(p.FADE).removeClass(p.IN), this.cleanupTether()
                    }, c.prototype._getContent = function() {
                        return this.element.getAttribute("data-content") || ("function" == typeof this.config.content ? this.config.content.call(this.element) : this.config.content)
                    }, c._jQueryInterface = function(t) {
                        return this.each(function() {
                            var e = o(this).data(l),
                                n = "object" === (void 0 === t ? "undefined" : i(t)) ? t : null;
                            if ((e || !/destroy|hide/.test(t)) && (e || (e = new c(this, n), o(this).data(l, e)), "string" == typeof t)) {
                                if (void 0 === e[t]) throw new Error('No method named "' + t + '"');
                                e[t]()
                            }
                        })
                    }, r(c, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.0.0-alpha.5"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return f
                        }
                    }, {
                        key: "NAME",
                        get: function() {
                            return s
                        }
                    }, {
                        key: "DATA_KEY",
                        get: function() {
                            return l
                        }
                    }, {
                        key: "Event",
                        get: function() {
                            return m
                        }
                    }, {
                        key: "EVENT_KEY",
                        get: function() {
                            return u
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return d
                        }
                    }]), c
                }(a);
            o.fn[s] = g._jQueryInterface, o.fn[s].Constructor = g, o.fn[s].noConflict = function() {
                return o.fn[s] = c, g._jQueryInterface
            }
        }(jQuery)
    }()
}, function(t, e, n) {
    "use strict";

    function i() {
        this._events = this._events || {}, this._maxListeners = this._maxListeners || void 0
    }

    function r(t) {
        return "function" == typeof t
    }

    function o(t) {
        return "number" == typeof t
    }

    function a(t) {
        return "object" == typeof t && null !== t
    }

    function s(t) {
        return void 0 === t
    }
    t.exports = i, i.EventEmitter = i, i.prototype._events = void 0, i.prototype._maxListeners = void 0, i.defaultMaxListeners = 10, i.prototype.setMaxListeners = function(t) {
        if (!o(t) || t < 0 || isNaN(t)) throw TypeError("n must be a positive number");
        return this._maxListeners = t, this
    }, i.prototype.emit = function(t) {
        var e, n, i, o, l, u;
        if (this._events || (this._events = {}), "error" === t && (!this._events.error || a(this._events.error) && !this._events.error.length)) {
            if ((e = arguments[1]) instanceof Error) throw e;
            var c = new Error('Uncaught, unspecified "error" event. (' + e + ")");
            throw c.context = e, c
        }
        if (n = this._events[t], s(n)) return !1;
        if (r(n)) switch (arguments.length) {
            case 1:
                n.call(this);
                break;
            case 2:
                n.call(this, arguments[1]);
                break;
            case 3:
                n.call(this, arguments[1], arguments[2]);
                break;
            default:
                o = Array.prototype.slice.call(arguments, 1), n.apply(this, o)
        } else if (a(n))
            for (o = Array.prototype.slice.call(arguments, 1), u = n.slice(), i = u.length, l = 0; l < i; l++) u[l].apply(this, o);
        return !0
    }, i.prototype.addListener = function(t, e) {
        var n;
        if (!r(e)) throw TypeError("listener must be a function");
        return this._events || (this._events = {}), this._events.newListener && this.emit("newListener", t, r(e.listener) ? e.listener : e), this._events[t] ? a(this._events[t]) ? this._events[t].push(e) : this._events[t] = [this._events[t], e] : this._events[t] = e, a(this._events[t]) && !this._events[t].warned && (n = s(this._maxListeners) ? i.defaultMaxListeners : this._maxListeners) && n > 0 && this._events[t].length > n && (this._events[t].warned = !0, console.trace), this
    }, i.prototype.on = i.prototype.addListener, i.prototype.once = function(t, e) {
        function n() {
            this.removeListener(t, n), i || (i = !0, e.apply(this, arguments))
        }
        if (!r(e)) throw TypeError("listener must be a function");
        var i = !1;
        return n.listener = e, this.on(t, n), this
    }, i.prototype.removeListener = function(t, e) {
        var n, i, o, s;
        if (!r(e)) throw TypeError("listener must be a function");
        if (!this._events || !this._events[t]) return this;
        if (n = this._events[t], o = n.length, i = -1, n === e || r(n.listener) && n.listener === e) delete this._events[t], this._events.removeListener && this.emit("removeListener", t, e);
        else if (a(n)) {
            for (s = o; s-- > 0;)
                if (n[s] === e || n[s].listener && n[s].listener === e) {
                    i = s;
                    break
                }
            if (i < 0) return this;
            1 === n.length ? (n.length = 0, delete this._events[t]) : n.splice(i, 1), this._events.removeListener && this.emit("removeListener", t, e)
        }
        return this
    }, i.prototype.removeAllListeners = function(t) {
        var e, n;
        if (!this._events) return this;
        if (!this._events.removeListener) return 0 === arguments.length ? this._events = {} : this._events[t] && delete this._events[t], this;
        if (0 === arguments.length) {
            for (e in this._events) "removeListener" !== e && this.removeAllListeners(e);
            return this.removeAllListeners("removeListener"), this._events = {}, this
        }
        if (n = this._events[t], r(n)) this.removeListener(t, n);
        else if (n)
            for (; n.length;) this.removeListener(t, n[n.length - 1]);
        return delete this._events[t], this
    }, i.prototype.listeners = function(t) {
        return this._events && this._events[t] ? r(this._events[t]) ? [this._events[t]] : this._events[t].slice() : []
    }, i.prototype.listenerCount = function(t) {
        if (this._events) {
            var e = this._events[t];
            if (r(e)) return 1;
            if (e) return e.length
        }
        return 0
    }, i.listenerCount = function(t, e) {
        return t.listenerCount(e)
    }
}, function(t, e, n) {
    "use strict";
    var i, i;
    ! function(e) {
        t.exports = e()
    }(function() {
        return function t(e, n, r) {
            function o(s, l) {
                if (!n[s]) {
                    if (!e[s]) {
                        var u = "function" == typeof i && i;
                        if (!l && u) return i(s, !0);
                        if (a) return a(s, !0);
                        var c = new Error("Cannot find module '" + s + "'");
                        throw c.code = "MODULE_NOT_FOUND", c
                    }
                    var f = n[s] = {
                        exports: {}
                    };
                    e[s][0].call(f.exports, function(t) {
                        var n = e[s][1][t];
                        return o(n || t)
                    }, f, f.exports, t, e, n, r)
                }
                return n[s].exports
            }
            for (var a = "function" == typeof i && i, s = 0; s < r.length; s++) o(r[s]);
            return o
        }({
            1: [function(t, e, n) {
                e.exports = function(t) {
                    var e, n, i, r = -1;
                    if (t.lines.length > 1 && "flex-start" === t.style.alignContent)
                        for (e = 0; i = t.lines[++r];) i.crossStart = e, e += i.cross;
                    else if (t.lines.length > 1 && "flex-end" === t.style.alignContent)
                        for (e = t.flexStyle.crossSpace; i = t.lines[++r];) i.crossStart = e, e += i.cross;
                    else if (t.lines.length > 1 && "center" === t.style.alignContent)
                        for (e = t.flexStyle.crossSpace / 2; i = t.lines[++r];) i.crossStart = e, e += i.cross;
                    else if (t.lines.length > 1 && "space-between" === t.style.alignContent)
                        for (n = t.flexStyle.crossSpace / (t.lines.length - 1), e = 0; i = t.lines[++r];) i.crossStart = e, e += i.cross + n;
                    else if (t.lines.length > 1 && "space-around" === t.style.alignContent)
                        for (n = 2 * t.flexStyle.crossSpace / (2 * t.lines.length), e = n / 2; i = t.lines[++r];) i.crossStart = e, e += i.cross + n;
                    else
                        for (n = t.flexStyle.crossSpace / t.lines.length, e = t.flexStyle.crossInnerBefore; i = t.lines[++r];) i.crossStart = e, i.cross += n, e += i.cross
                }
            }, {}],
            2: [function(t, e, n) {
                e.exports = function(t) {
                    for (var e, n = -1; line = t.lines[++n];)
                        for (e = -1; child = line.children[++e];) {
                            var i = child.style.alignSelf;
                            "auto" === i && (i = t.style.alignItems), "flex-start" === i ? child.flexStyle.crossStart = line.crossStart : "flex-end" === i ? child.flexStyle.crossStart = line.crossStart + line.cross - child.flexStyle.crossOuter : "center" === i ? child.flexStyle.crossStart = line.crossStart + (line.cross - child.flexStyle.crossOuter) / 2 : (child.flexStyle.crossStart = line.crossStart, child.flexStyle.crossOuter = line.cross, child.flexStyle.cross = child.flexStyle.crossOuter - child.flexStyle.crossBefore - child.flexStyle.crossAfter)
                        }
                }
            }, {}],
            3: [function(t, e, n) {
                e.exports = function(t, e) {
                    var n = "row" === e || "row-reverse" === e,
                        i = t.mainAxis;
                    if (i) {
                        n && "inline" === i || !n && "block" === i || (t.flexStyle = {
                            main: t.flexStyle.cross,
                            cross: t.flexStyle.main,
                            mainOffset: t.flexStyle.crossOffset,
                            crossOffset: t.flexStyle.mainOffset,
                            mainBefore: t.flexStyle.crossBefore,
                            mainAfter: t.flexStyle.crossAfter,
                            crossBefore: t.flexStyle.mainBefore,
                            crossAfter: t.flexStyle.mainAfter,
                            mainInnerBefore: t.flexStyle.crossInnerBefore,
                            mainInnerAfter: t.flexStyle.crossInnerAfter,
                            crossInnerBefore: t.flexStyle.mainInnerBefore,
                            crossInnerAfter: t.flexStyle.mainInnerAfter,
                            mainBorderBefore: t.flexStyle.crossBorderBefore,
                            mainBorderAfter: t.flexStyle.crossBorderAfter,
                            crossBorderBefore: t.flexStyle.mainBorderBefore,
                            crossBorderAfter: t.flexStyle.mainBorderAfter
                        })
                    } else t.flexStyle = n ? {
                        main: t.style.width,
                        cross: t.style.height,
                        mainOffset: t.style.offsetWidth,
                        crossOffset: t.style.offsetHeight,
                        mainBefore: t.style.marginLeft,
                        mainAfter: t.style.marginRight,
                        crossBefore: t.style.marginTop,
                        crossAfter: t.style.marginBottom,
                        mainInnerBefore: t.style.paddingLeft,
                        mainInnerAfter: t.style.paddingRight,
                        crossInnerBefore: t.style.paddingTop,
                        crossInnerAfter: t.style.paddingBottom,
                        mainBorderBefore: t.style.borderLeftWidth,
                        mainBorderAfter: t.style.borderRightWidth,
                        crossBorderBefore: t.style.borderTopWidth,
                        crossBorderAfter: t.style.borderBottomWidth
                    } : {
                        main: t.style.height,
                        cross: t.style.width,
                        mainOffset: t.style.offsetHeight,
                        crossOffset: t.style.offsetWidth,
                        mainBefore: t.style.marginTop,
                        mainAfter: t.style.marginBottom,
                        crossBefore: t.style.marginLeft,
                        crossAfter: t.style.marginRight,
                        mainInnerBefore: t.style.paddingTop,
                        mainInnerAfter: t.style.paddingBottom,
                        crossInnerBefore: t.style.paddingLeft,
                        crossInnerAfter: t.style.paddingRight,
                        mainBorderBefore: t.style.borderTopWidth,
                        mainBorderAfter: t.style.borderBottomWidth,
                        crossBorderBefore: t.style.borderLeftWidth,
                        crossBorderAfter: t.style.borderRightWidth
                    }, "content-box" === t.style.boxSizing && ("number" == typeof t.flexStyle.main && (t.flexStyle.main += t.flexStyle.mainInnerBefore + t.flexStyle.mainInnerAfter + t.flexStyle.mainBorderBefore + t.flexStyle.mainBorderAfter), "number" == typeof t.flexStyle.cross && (t.flexStyle.cross += t.flexStyle.crossInnerBefore + t.flexStyle.crossInnerAfter + t.flexStyle.crossBorderBefore + t.flexStyle.crossBorderAfter));
                    t.mainAxis = n ? "inline" : "block", t.crossAxis = n ? "block" : "inline", "number" == typeof t.style.flexBasis && (t.flexStyle.main = t.style.flexBasis + t.flexStyle.mainInnerBefore + t.flexStyle.mainInnerAfter + t.flexStyle.mainBorderBefore + t.flexStyle.mainBorderAfter), t.flexStyle.mainOuter = t.flexStyle.main, t.flexStyle.crossOuter = t.flexStyle.cross, "auto" === t.flexStyle.mainOuter && (t.flexStyle.mainOuter = t.flexStyle.mainOffset), "auto" === t.flexStyle.crossOuter && (t.flexStyle.crossOuter = t.flexStyle.crossOffset), "number" == typeof t.flexStyle.mainBefore && (t.flexStyle.mainOuter += t.flexStyle.mainBefore), "number" == typeof t.flexStyle.mainAfter && (t.flexStyle.mainOuter += t.flexStyle.mainAfter), "number" == typeof t.flexStyle.crossBefore && (t.flexStyle.crossOuter += t.flexStyle.crossBefore), "number" == typeof t.flexStyle.crossAfter && (t.flexStyle.crossOuter += t.flexStyle.crossAfter)
                }
            }, {}],
            4: [function(t, e, n) {
                var i = t("../reduce");
                e.exports = function(t) {
                    if (t.mainSpace > 0) {
                        var e = i(t.children, function(t, e) {
                            return t + parseFloat(e.style.flexGrow)
                        }, 0);
                        e > 0 && (t.main = i(t.children, function(n, i) {
                            return "auto" === i.flexStyle.main ? i.flexStyle.main = i.flexStyle.mainOffset + parseFloat(i.style.flexGrow) / e * t.mainSpace : i.flexStyle.main += parseFloat(i.style.flexGrow) / e * t.mainSpace, i.flexStyle.mainOuter = i.flexStyle.main + i.flexStyle.mainBefore + i.flexStyle.mainAfter, n + i.flexStyle.mainOuter
                        }, 0), t.mainSpace = 0)
                    }
                }
            }, {
                "../reduce": 12
            }],
            5: [function(t, e, n) {
                var i = t("../reduce");
                e.exports = function(t) {
                    if (t.mainSpace < 0) {
                        var e = i(t.children, function(t, e) {
                            return t + parseFloat(e.style.flexShrink)
                        }, 0);
                        e > 0 && (t.main = i(t.children, function(n, i) {
                            return i.flexStyle.main += parseFloat(i.style.flexShrink) / e * t.mainSpace, i.flexStyle.mainOuter = i.flexStyle.main + i.flexStyle.mainBefore + i.flexStyle.mainAfter, n + i.flexStyle.mainOuter
                        }, 0), t.mainSpace = 0)
                    }
                }
            }, {
                "../reduce": 12
            }],
            6: [function(t, e, n) {
                var i = t("../reduce");
                e.exports = function(t) {
                    var e;
                    t.lines = [e = {
                        main: 0,
                        cross: 0,
                        children: []
                    }];
                    for (var n, r = -1; n = t.children[++r];) "nowrap" === t.style.flexWrap || 0 === e.children.length || "auto" === t.flexStyle.main || t.flexStyle.main - t.flexStyle.mainInnerBefore - t.flexStyle.mainInnerAfter - t.flexStyle.mainBorderBefore - t.flexStyle.mainBorderAfter >= e.main + n.flexStyle.mainOuter ? (e.main += n.flexStyle.mainOuter, e.cross = Math.max(e.cross, n.flexStyle.crossOuter)) : t.lines.push(e = {
                        main: n.flexStyle.mainOuter,
                        cross: n.flexStyle.crossOuter,
                        children: []
                    }), e.children.push(n);
                    t.flexStyle.mainLines = i(t.lines, function(t, e) {
                        return Math.max(t, e.main)
                    }, 0), t.flexStyle.crossLines = i(t.lines, function(t, e) {
                        return t + e.cross
                    }, 0), "auto" === t.flexStyle.main && (t.flexStyle.main = Math.max(t.flexStyle.mainOffset, t.flexStyle.mainLines + t.flexStyle.mainInnerBefore + t.flexStyle.mainInnerAfter + t.flexStyle.mainBorderBefore + t.flexStyle.mainBorderAfter)), "auto" === t.flexStyle.cross && (t.flexStyle.cross = Math.max(t.flexStyle.crossOffset, t.flexStyle.crossLines + t.flexStyle.crossInnerBefore + t.flexStyle.crossInnerAfter + t.flexStyle.crossBorderBefore + t.flexStyle.crossBorderAfter)), t.flexStyle.crossSpace = t.flexStyle.cross - t.flexStyle.crossInnerBefore - t.flexStyle.crossInnerAfter - t.flexStyle.crossBorderBefore - t.flexStyle.crossBorderAfter - t.flexStyle.crossLines, t.flexStyle.mainOuter = t.flexStyle.main + t.flexStyle.mainBefore + t.flexStyle.mainAfter, t.flexStyle.crossOuter = t.flexStyle.cross + t.flexStyle.crossBefore + t.flexStyle.crossAfter
                }
            }, {
                "../reduce": 12
            }],
            7: [function(t, e, n) {
                function i(e) {
                    for (var n, i = -1; n = e.children[++i];) t("./flex-direction")(n, e.style.flexDirection);
                    t("./flex-direction")(e, e.style.flexDirection), t("./order")(e), t("./flexbox-lines")(e), t("./align-content")(e), i = -1;
                    for (var r; r = e.lines[++i];) r.mainSpace = e.flexStyle.main - e.flexStyle.mainInnerBefore - e.flexStyle.mainInnerAfter - e.flexStyle.mainBorderBefore - e.flexStyle.mainBorderAfter - r.main, t("./flex-grow")(r), t("./flex-shrink")(r), t("./margin-main")(r), t("./margin-cross")(r), t("./justify-content")(r, e.style.justifyContent, e);
                    t("./align-items")(e)
                }
                e.exports = i
            }, {
                "./align-content": 1,
                "./align-items": 2,
                "./flex-direction": 3,
                "./flex-grow": 4,
                "./flex-shrink": 5,
                "./flexbox-lines": 6,
                "./justify-content": 8,
                "./margin-cross": 9,
                "./margin-main": 10,
                "./order": 11
            }],
            8: [function(t, e, n) {
                e.exports = function(t, e, n) {
                    var i, r, o, a = n.flexStyle.mainInnerBefore,
                        s = -1;
                    if ("flex-end" === e)
                        for (i = t.mainSpace, i += a; o = t.children[++s];) o.flexStyle.mainStart = i, i += o.flexStyle.mainOuter;
                    else if ("center" === e)
                        for (i = t.mainSpace / 2, i += a; o = t.children[++s];) o.flexStyle.mainStart = i, i += o.flexStyle.mainOuter;
                    else if ("space-between" === e)
                        for (r = t.mainSpace / (t.children.length - 1), i = 0, i += a; o = t.children[++s];) o.flexStyle.mainStart = i, i += o.flexStyle.mainOuter + r;
                    else if ("space-around" === e)
                        for (r = 2 * t.mainSpace / (2 * t.children.length), i = r / 2, i += a; o = t.children[++s];) o.flexStyle.mainStart = i, i += o.flexStyle.mainOuter + r;
                    else
                        for (i = 0, i += a; o = t.children[++s];) o.flexStyle.mainStart = i, i += o.flexStyle.mainOuter
                }
            }, {}],
            9: [function(t, e, n) {
                e.exports = function(t) {
                    for (var e, n = -1; e = t.children[++n];) {
                        var i = 0;
                        "auto" === e.flexStyle.crossBefore && ++i, "auto" === e.flexStyle.crossAfter && ++i;
                        var r = t.cross - e.flexStyle.crossOuter;
                        "auto" === e.flexStyle.crossBefore && (e.flexStyle.crossBefore = r / i), "auto" === e.flexStyle.crossAfter && (e.flexStyle.crossAfter = r / i), "auto" === e.flexStyle.cross ? e.flexStyle.crossOuter = e.flexStyle.crossOffset + e.flexStyle.crossBefore + e.flexStyle.crossAfter : e.flexStyle.crossOuter = e.flexStyle.cross + e.flexStyle.crossBefore + e.flexStyle.crossAfter
                    }
                }
            }, {}],
            10: [function(t, e, n) {
                e.exports = function(t) {
                    for (var e, n = 0, i = -1; e = t.children[++i];) "auto" === e.flexStyle.mainBefore && ++n, "auto" === e.flexStyle.mainAfter && ++n;
                    if (n > 0) {
                        for (i = -1; e = t.children[++i];) "auto" === e.flexStyle.mainBefore && (e.flexStyle.mainBefore = t.mainSpace / n), "auto" === e.flexStyle.mainAfter && (e.flexStyle.mainAfter = t.mainSpace / n), "auto" === e.flexStyle.main ? e.flexStyle.mainOuter = e.flexStyle.mainOffset + e.flexStyle.mainBefore + e.flexStyle.mainAfter : e.flexStyle.mainOuter = e.flexStyle.main + e.flexStyle.mainBefore + e.flexStyle.mainAfter;
                        t.mainSpace = 0
                    }
                }
            }, {}],
            11: [function(t, e, n) {
                var i = /^(column|row)-reverse$/;
                e.exports = function(t) {
                    t.children.sort(function(t, e) {
                        return t.style.order - e.style.order || t.index - e.index
                    }), i.test(t.style.flexDirection) && t.children.reverse()
                }
            }, {}],
            12: [function(t, e, n) {
                function i(t, e, n) {
                    for (var i = t.length, r = -1; ++r < i;) r in t && (n = e(n, t[r], r));
                    return n
                }
                e.exports = i
            }, {}],
            13: [function(t, e, n) {
                function i(t) {
                    s(a(t))
                }
                var r = t("./read"),
                    o = t("./write"),
                    a = t("./readAll"),
                    s = t("./writeAll");
                e.exports = i, e.exports.read = r, e.exports.write = o, e.exports.readAll = a, e.exports.writeAll = s
            }, {
                "./read": 15,
                "./readAll": 16,
                "./write": 17,
                "./writeAll": 18
            }],
            14: [function(t, e, n) {
                function i(t, e) {
                    var n = String(t).match(o);
                    if (!n) return t;
                    var i = n[1],
                        a = n[2];
                    return "px" === a ? 1 * i : "cm" === a ? .3937 * i * 96 : "in" === a ? 96 * i : "mm" === a ? .3937 * i * 96 / 10 : "pc" === a ? 12 * i * 96 / 72 : "pt" === a ? 96 * i / 72 : "rem" === a ? 16 * i : r(t, e)
                }

                function r(t, e) {
                    a.style.cssText = "border:none!important;clip:rect(0 0 0 0)!important;display:block!important;font-size:1em!important;height:0!important;margin:0!important;padding:0!important;position:relative!important;width:" + t + "!important", e.parentNode.insertBefore(a, e.nextSibling);
                    var n = a.offsetWidth;
                    return e.parentNode.removeChild(a), n
                }
                e.exports = i;
                var o = /^([-+]?\d*\.?\d+)(%|[a-z]+)$/,
                    a = document.createElement("div")
            }, {}],
            15: [function(t, e, n) {
                function i(t) {
                    var e = {
                        alignContent: "stretch",
                        alignItems: "stretch",
                        alignSelf: "auto",
                        borderBottomWidth: 0,
                        borderLeftWidth: 0,
                        borderRightWidth: 0,
                        borderTopWidth: 0,
                        boxSizing: "content-box",
                        display: "inline",
                        flexBasis: "auto",
                        flexDirection: "row",
                        flexGrow: 0,
                        flexShrink: 1,
                        flexWrap: "nowrap",
                        justifyContent: "flex-start",
                        height: "auto",
                        marginTop: 0,
                        marginRight: 0,
                        marginLeft: 0,
                        marginBottom: 0,
                        paddingTop: 0,
                        paddingRight: 0,
                        paddingLeft: 0,
                        paddingBottom: 0,
                        maxHeight: "none",
                        maxWidth: "none",
                        minHeight: 0,
                        minWidth: 0,
                        order: 0,
                        position: "static",
                        width: "auto"
                    };
                    if (t instanceof Element) {
                        var n = t.hasAttribute("data-style"),
                            i = n ? t.getAttribute("data-style") : t.getAttribute("style") || "";
                        n || t.setAttribute("data-style", i), a(e, window.getComputedStyle && getComputedStyle(t) || {}), r(e, t.currentStyle || {}), o(e, i);
                        for (var s in e) e[s] = l(e[s], t);
                        var u = t.getBoundingClientRect();
                        e.offsetHeight = u.height || t.offsetHeight, e.offsetWidth = u.width || t.offsetWidth
                    }
                    return {
                        element: t,
                        style: e
                    }
                }

                function r(t, e) {
                    for (var n in t) {
                        if (n in e) t[n] = e[n];
                        else {
                            var i = n.replace(/[A-Z]/g, "-$&").toLowerCase();
                            i in e && (t[n] = e[i])
                        }
                    }
                    "-js-display" in e && (t.display = e["-js-display"])
                }

                function o(t, e) {
                    for (var n; n = s.exec(e);) {
                        t[n[1].toLowerCase().replace(/-[a-z]/g, function(t) {
                            return t.slice(1).toUpperCase()
                        })] = n[2]
                    }
                }

                function a(t, e) {
                    for (var n in t) {
                        n in e && !/^(alignSelf|height|width)$/.test(n) && (t[n] = e[n])
                    }
                }
                e.exports = i;
                var s = /([^\s:;]+)\s*:\s*([^;]+?)\s*(;|$)/g,
                    l = t("./getComputedLength")
            }, {
                "./getComputedLength": 14
            }],
            16: [function(t, e, n) {
                function i(t) {
                    var e = [];
                    return r(t, e), e
                }

                function r(t, e) {
                    for (var n, i = o(t), s = [], l = -1; n = t.childNodes[++l];) {
                        var u = 3 === n.nodeType && !/^\s*$/.test(n.nodeValue);
                        if (i && u) {
                            var c = n;
                            n = t.insertBefore(document.createElement("flex-item"), c), n.appendChild(c)
                        }
                        if (n instanceof Element) {
                            var f = r(n, e);
                            if (i) {
                                var d = n.style;
                                d.display = "inline-block", d.position = "absolute", f.style = a(n).style, s.push(f)
                            }
                        }
                    }
                    var p = {
                        element: t,
                        children: s
                    };
                    return i && (p.style = a(t).style, e.push(p)), p
                }

                function o(t) {
                    var e = t instanceof Element,
                        n = e && t.getAttribute("data-style"),
                        i = e && t.currentStyle && t.currentStyle["-js-display"];
                    return s.test(n) || l.test(i)
                }
                e.exports = i;
                var a = t("../read"),
                    s = /(^|;)\s*display\s*:\s*(inline-)?flex\s*(;|$)/i,
                    l = /^(inline-)?flex$/i
            }, {
                "../read": 15
            }],
            17: [function(t, e, n) {
                function i(t) {
                    o(t);
                    var e = t.element.style,
                        n = "inline" === t.mainAxis ? ["main", "cross"] : ["cross", "main"];
                    e.boxSizing = "content-box", e.display = "block", e.position = "relative", e.width = r(t.flexStyle[n[0]] - t.flexStyle[n[0] + "InnerBefore"] - t.flexStyle[n[0] + "InnerAfter"] - t.flexStyle[n[0] + "BorderBefore"] - t.flexStyle[n[0] + "BorderAfter"]), e.height = r(t.flexStyle[n[1]] - t.flexStyle[n[1] + "InnerBefore"] - t.flexStyle[n[1] + "InnerAfter"] - t.flexStyle[n[1] + "BorderBefore"] - t.flexStyle[n[1] + "BorderAfter"]);
                    for (var i, a = -1; i = t.children[++a];) {
                        var s = i.element.style,
                            l = "inline" === i.mainAxis ? ["main", "cross"] : ["cross", "main"];
                        s.boxSizing = "content-box", s.display = "block", s.position = "absolute", "auto" !== i.flexStyle[l[0]] && (s.width = r(i.flexStyle[l[0]] - i.flexStyle[l[0] + "InnerBefore"] - i.flexStyle[l[0] + "InnerAfter"] - i.flexStyle[l[0] + "BorderBefore"] - i.flexStyle[l[0] + "BorderAfter"])), "auto" !== i.flexStyle[l[1]] && (s.height = r(i.flexStyle[l[1]] - i.flexStyle[l[1] + "InnerBefore"] - i.flexStyle[l[1] + "InnerAfter"] - i.flexStyle[l[1] + "BorderBefore"] - i.flexStyle[l[1] + "BorderAfter"])), s.top = r(i.flexStyle[l[1] + "Start"]), s.left = r(i.flexStyle[l[0] + "Start"]), s.marginTop = r(i.flexStyle[l[1] + "Before"]), s.marginRight = r(i.flexStyle[l[0] + "After"]), s.marginBottom = r(i.flexStyle[l[1] + "After"]), s.marginLeft = r(i.flexStyle[l[0] + "Before"])
                    }
                }

                function r(t) {
                    return "string" == typeof t ? t : Math.max(t, 0) + "px"
                }
                e.exports = i;
                var o = t("../flexbox")
            }, {
                "../flexbox": 7
            }],
            18: [function(t, e, n) {
                function i(t) {
                    for (var e, n = -1; e = t[++n];) r(e)
                }
                e.exports = i;
                var r = t("../write")
            }, {
                "../write": 17
            }]
        }, {}, [13])(13)
    })
}, function(t, e, n) {
    "use strict";
    var i, r;
    ! function(o, a) {
        i = a, void 0 !== (r = "function" == typeof i ? i.call(e, n, e, t) : i) && (t.exports = r)
    }(0, function(t, e, n) {
        function i(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function r(t) {
            var e = t.getBoundingClientRect(),
                n = {};
            for (var i in e) n[i] = e[i];
            if (t.ownerDocument !== document) {
                var o = t.ownerDocument.defaultView.frameElement;
                if (o) {
                    var a = r(o);
                    n.top += a.top, n.bottom += a.top, n.left += a.left, n.right += a.left
                }
            }
            return n
        }

        function o(t) {
            var e = getComputedStyle(t) || {},
                n = e.position,
                i = [];
            if ("fixed" === n) return [t];
            for (var r = t;
                (r = r.parentNode) && r && 1 === r.nodeType;) {
                var o = void 0;
                try {
                    o = getComputedStyle(r)
                } catch (t) {}
                if (void 0 === o || null === o) return i.push(r), i;
                var a = o,
                    s = a.overflow,
                    l = a.overflowX;
                /(auto|scroll)/.test(s + a.overflowY + l) && ("absolute" !== n || ["relative", "absolute", "fixed"].indexOf(o.position) >= 0) && i.push(r)
            }
            return i.push(t.ownerDocument.body), t.ownerDocument !== document && i.push(t.ownerDocument.defaultView), i
        }

        function a() {
            C && document.body.removeChild(C), C = null
        }

        function s(t) {
            var e = void 0;
            t === document ? (e = document, t = document.documentElement) : e = t.ownerDocument;
            var n = e.documentElement,
                i = r(t),
                o = I();
            return i.top -= o.top, i.left -= o.left, void 0 === i.width && (i.width = document.body.scrollWidth - i.left - i.right), void 0 === i.height && (i.height = document.body.scrollHeight - i.top - i.bottom), i.top = i.top - n.clientTop, i.left = i.left - n.clientLeft, i.right = e.body.clientWidth - i.width - i.left, i.bottom = e.body.clientHeight - i.height - i.top, i
        }

        function l(t) {
            return t.offsetParent || document.documentElement
        }

        function u() {
            if (O) return O;
            var t = document.createElement("div");
            t.style.width = "100%", t.style.height = "200px";
            var e = document.createElement("div");
            c(e.style, {
                position: "absolute",
                top: 0,
                left: 0,
                pointerEvents: "none",
                visibility: "hidden",
                width: "200px",
                height: "150px",
                overflow: "hidden"
            }), e.appendChild(t), document.body.appendChild(e);
            var n = t.offsetWidth;
            e.style.overflow = "scroll";
            var i = t.offsetWidth;
            n === i && (i = e.clientWidth), document.body.removeChild(e);
            var r = n - i;
            return O = {
                width: r,
                height: r
            }
        }

        function c() {
            var t = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0],
                e = [];
            return Array.prototype.push.apply(e, arguments), e.slice(1).forEach(function(e) {
                if (e)
                    for (var n in e)({}).hasOwnProperty.call(e, n) && (t[n] = e[n])
            }), t
        }

        function f(t, e) {
            if (void 0 !== t.classList) e.split(" ").forEach(function(e) {
                e.trim() && t.classList.remove(e)
            });
            else {
                var n = new RegExp("(^| )" + e.split(" ").join("|") + "( |$)", "gi"),
                    i = h(t).replace(n, " ");
                m(t, i)
            }
        }

        function d(t, e) {
            if (void 0 !== t.classList) e.split(" ").forEach(function(e) {
                e.trim() && t.classList.add(e)
            });
            else {
                f(t, e);
                var n = h(t) + " " + e;
                m(t, n)
            }
        }

        function p(t, e) {
            if (void 0 !== t.classList) return t.classList.contains(e);
            var n = h(t);
            return new RegExp("(^| )" + e + "( |$)", "gi").test(n)
        }

        function h(t) {
            return t.className instanceof t.ownerDocument.defaultView.SVGAnimatedString ? t.className.baseVal : t.className
        }

        function m(t, e) {
            t.setAttribute("class", e)
        }

        function g(t, e, n) {
            n.forEach(function(n) {
                -1 === e.indexOf(n) && p(t, n) && f(t, n)
            }), e.forEach(function(e) {
                p(t, e) || d(t, e)
            })
        }

        function i(t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }

        function v(t, e) {
            if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
            t.prototype = Object.create(e && e.prototype, {
                constructor: {
                    value: t,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
        }

        function y(t, e) {
            var n = arguments.length <= 2 || void 0 === arguments[2] ? 1 : arguments[2];
            return t + n >= e && e >= t - n
        }

        function b() {
            return "undefined" != typeof performance && void 0 !== performance.now ? performance.now() : +new Date
        }

        function _() {
            for (var t = {
                    top: 0,
                    left: 0
                }, e = arguments.length, n = Array(e), i = 0; i < e; i++) n[i] = arguments[i];
            return n.forEach(function(e) {
                var n = e.top,
                    i = e.left;
                "string" == typeof n && (n = parseFloat(n, 10)), "string" == typeof i && (i = parseFloat(i, 10)), t.top += n, t.left += i
            }), t
        }

        function x(t, e) {
            return "string" == typeof t.left && -1 !== t.left.indexOf("%") && (t.left = parseFloat(t.left, 10) / 100 * e.width), "string" == typeof t.top && -1 !== t.top.indexOf("%") && (t.top = parseFloat(t.top, 10) / 100 * e.height), t
        }

        function w(t, e) {
            return "scrollParent" === e ? e = t.scrollParents[0] : "window" === e && (e = [pageXOffset, pageYOffset, innerWidth + pageXOffset, innerHeight + pageYOffset]), e === document && (e = e.documentElement), void 0 !== e.nodeType && function() {
                var t = e,
                    n = s(e),
                    i = n,
                    r = getComputedStyle(e);
                if (e = [i.left, i.top, n.width + i.left, n.height + i.top], t.ownerDocument !== document) {
                    var o = t.ownerDocument.defaultView;
                    e[0] += o.pageXOffset, e[1] += o.pageYOffset, e[2] += o.pageXOffset, e[3] += o.pageYOffset
                }
                Y.forEach(function(t, n) {
                    t = t[0].toUpperCase() + t.substr(1), "Top" === t || "Left" === t ? e[n] += parseFloat(r["border" + t + "Width"]) : e[n] -= parseFloat(r["border" + t + "Width"])
                })
            }(), e
        }
        var S = function() {
                function t(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var i = e[n];
                        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                    }
                }
                return function(e, n, i) {
                    return n && t(e.prototype, n), i && t(e, i), e
                }
            }(),
            E = void 0;
        void 0 === E && (E = {
            modules: []
        });
        var C = null,
            T = function() {
                var t = 0;
                return function() {
                    return ++t
                }
            }(),
            A = {},
            I = function() {
                var t = C;
                t && document.body.contains(t) || (t = document.createElement("div"), t.setAttribute("data-tether-id", T()), c(t.style, {
                    top: 0,
                    left: 0,
                    position: "absolute"
                }), document.body.appendChild(t), C = t);
                var e = t.getAttribute("data-tether-id");
                return void 0 === A[e] && (A[e] = r(t), D(function() {
                    delete A[e]
                })), A[e]
            },
            O = null,
            k = [],
            D = function(t) {
                k.push(t)
            },
            N = function() {
                for (var t = void 0; t = k.pop();) t()
            },
            P = function() {
                function t() {
                    i(this, t)
                }
                return S(t, [{
                    key: "on",
                    value: function(t, e, n) {
                        var i = !(arguments.length <= 3 || void 0 === arguments[3]) && arguments[3];
                        void 0 === this.bindings && (this.bindings = {}), void 0 === this.bindings[t] && (this.bindings[t] = []), this.bindings[t].push({
                            handler: e,
                            ctx: n,
                            once: i
                        })
                    }
                }, {
                    key: "once",
                    value: function(t, e, n) {
                        this.on(t, e, n, !0)
                    }
                }, {
                    key: "off",
                    value: function(t, e) {
                        if (void 0 !== this.bindings && void 0 !== this.bindings[t])
                            if (void 0 === e) delete this.bindings[t];
                            else
                                for (var n = 0; n < this.bindings[t].length;) this.bindings[t][n].handler === e ? this.bindings[t].splice(n, 1) : ++n
                    }
                }, {
                    key: "trigger",
                    value: function(t) {
                        if (void 0 !== this.bindings && this.bindings[t]) {
                            for (var e = 0, n = arguments.length, i = Array(n > 1 ? n - 1 : 0), r = 1; r < n; r++) i[r - 1] = arguments[r];
                            for (; e < this.bindings[t].length;) {
                                var o = this.bindings[t][e],
                                    a = o.handler,
                                    s = o.ctx,
                                    l = o.once,
                                    u = s;
                                void 0 === u && (u = this), a.apply(u, i), l ? this.bindings[t].splice(e, 1) : ++e
                            }
                        }
                    }
                }]), t
            }();
        E.Utils = {
            getActualBoundingClientRect: r,
            getScrollParents: o,
            getBounds: s,
            getOffsetParent: l,
            extend: c,
            addClass: d,
            removeClass: f,
            hasClass: p,
            updateClasses: g,
            defer: D,
            flush: N,
            uniqueId: T,
            Evented: P,
            getScrollBarSize: u,
            removeUtilElements: a
        };
        var L = function() {
                function t(t, e) {
                    var n = [],
                        i = !0,
                        r = !1,
                        o = void 0;
                    try {
                        for (var a, s = t[Symbol.iterator](); !(i = (a = s.next()).done) && (n.push(a.value), !e || n.length !== e); i = !0);
                    } catch (t) {
                        r = !0, o = t
                    } finally {
                        try {
                            !i && s.return && s.return()
                        } finally {
                            if (r) throw o
                        }
                    }
                    return n
                }
                return function(e, n) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return t(e, n);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            S = function() {
                function t(t, e) {
                    for (var n = 0; n < e.length; n++) {
                        var i = e[n];
                        i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                    }
                }
                return function(e, n, i) {
                    return n && t(e.prototype, n), i && t(e, i), e
                }
            }(),
            j = function(t, e, n) {
                for (var i = !0; i;) {
                    var r = t,
                        o = e,
                        a = n;
                    i = !1, null === r && (r = Function.prototype);
                    var s = Object.getOwnPropertyDescriptor(r, o);
                    if (void 0 !== s) {
                        if ("value" in s) return s.value;
                        var l = s.get;
                        if (void 0 === l) return;
                        return l.call(a)
                    }
                    var u = Object.getPrototypeOf(r);
                    if (null === u) return;
                    t = u, e = o, n = a, i = !0, s = u = void 0
                }
            };
        if (void 0 === E) throw new Error("You must include the utils.js file before tether.js");
        var B = E.Utils,
            o = B.getScrollParents,
            s = B.getBounds,
            l = B.getOffsetParent,
            c = B.extend,
            d = B.addClass,
            f = B.removeClass,
            g = B.updateClasses,
            D = B.defer,
            N = B.flush,
            u = B.getScrollBarSize,
            a = B.removeUtilElements,
            V = function() {
                if ("undefined" == typeof document) return "";
                for (var t = document.createElement("div"), e = ["transform", "WebkitTransform", "OTransform", "MozTransform", "msTransform"], n = 0; n < e.length; ++n) {
                    var i = e[n];
                    if (void 0 !== t.style[i]) return i
                }
            }(),
            F = [],
            R = function() {
                F.forEach(function(t) {
                    t.position(!1)
                }), N()
            };
        ! function() {
            var t = null,
                e = null,
                n = null,
                i = function i() {
                    if (void 0 !== e && e > 16) return e = Math.min(e - 16, 250), void(n = setTimeout(i, 250));
                    void 0 !== t && b() - t < 10 || (null != n && (clearTimeout(n), n = null), t = b(), R(), e = b() - t)
                };
            "undefined" != typeof window && void 0 !== window.addEventListener && ["resize", "scroll", "touchmove"].forEach(function(t) {
                window.addEventListener(t, i)
            })
        }();
        var M = {
                center: "center",
                left: "right",
                right: "left"
            },
            H = {
                middle: "middle",
                top: "bottom",
                bottom: "top"
            },
            W = {
                top: 0,
                left: 0,
                middle: "50%",
                center: "50%",
                bottom: "100%",
                right: "100%"
            },
            U = function(t, e) {
                var n = t.left,
                    i = t.top;
                return "auto" === n && (n = M[e.left]), "auto" === i && (i = H[e.top]), {
                    left: n,
                    top: i
                }
            },
            q = function(t) {
                var e = t.left,
                    n = t.top;
                return void 0 !== W[t.left] && (e = W[t.left]), void 0 !== W[t.top] && (n = W[t.top]), {
                    left: e,
                    top: n
                }
            },
            z = function(t) {
                var e = t.split(" "),
                    n = L(e, 2);
                return {
                    top: n[0],
                    left: n[1]
                }
            },
            $ = z,
            Q = function(t) {
                function e(t) {
                    var n = this;
                    i(this, e), j(Object.getPrototypeOf(e.prototype), "constructor", this).call(this), this.position = this.position.bind(this), F.push(this), this.history = [], this.setOptions(t, !1), E.modules.forEach(function(t) {
                        void 0 !== t.initialize && t.initialize.call(n)
                    }), this.position()
                }
                return v(e, t), S(e, [{
                    key: "getClass",
                    value: function() {
                        var t = arguments.length <= 0 || void 0 === arguments[0] ? "" : arguments[0],
                            e = this.options.classes;
                        return void 0 !== e && e[t] ? this.options.classes[t] : this.options.classPrefix ? this.options.classPrefix + "-" + t : t
                    }
                }, {
                    key: "setOptions",
                    value: function(t) {
                        var e = this,
                            n = arguments.length <= 1 || void 0 === arguments[1] || arguments[1],
                            i = {
                                offset: "0 0",
                                targetOffset: "0 0",
                                targetAttachment: "auto auto",
                                classPrefix: "tether"
                            };
                        this.options = c(i, t);
                        var r = this.options,
                            a = r.element,
                            s = r.target,
                            l = r.targetModifier;
                        if (this.element = a, this.target = s, this.targetModifier = l, "viewport" === this.target ? (this.target = document.body, this.targetModifier = "visible") : "scroll-handle" === this.target && (this.target = document.body, this.targetModifier = "scroll-handle"), ["element", "target"].forEach(function(t) {
                                if (void 0 === e[t]) throw new Error("Tether Error: Both element and target must be defined");
                                void 0 !== e[t].jquery ? e[t] = e[t][0] : "string" == typeof e[t] && (e[t] = document.querySelector(e[t]))
                            }), d(this.element, this.getClass("element")), !1 !== this.options.addTargetClasses && d(this.target, this.getClass("target")), !this.options.attachment) throw new Error("Tether Error: You must provide an attachment");
                        this.targetAttachment = $(this.options.targetAttachment), this.attachment = $(this.options.attachment), this.offset = z(this.options.offset), this.targetOffset = z(this.options.targetOffset), void 0 !== this.scrollParents && this.disable(), "scroll-handle" === this.targetModifier ? this.scrollParents = [this.target] : this.scrollParents = o(this.target), !1 !== this.options.enabled && this.enable(n)
                    }
                }, {
                    key: "getTargetBounds",
                    value: function() {
                        if (void 0 === this.targetModifier) return s(this.target);
                        if ("visible" === this.targetModifier) {
                            if (this.target === document.body) return {
                                top: pageYOffset,
                                left: pageXOffset,
                                height: innerHeight,
                                width: innerWidth
                            };
                            var t = s(this.target),
                                e = {
                                    height: t.height,
                                    width: t.width,
                                    top: t.top,
                                    left: t.left
                                };
                            return e.height = Math.min(e.height, t.height - (pageYOffset - t.top)), e.height = Math.min(e.height, t.height - (t.top + t.height - (pageYOffset + innerHeight))), e.height = Math.min(innerHeight, e.height), e.height -= 2, e.width = Math.min(e.width, t.width - (pageXOffset - t.left)), e.width = Math.min(e.width, t.width - (t.left + t.width - (pageXOffset + innerWidth))), e.width = Math.min(innerWidth, e.width), e.width -= 2, e.top < pageYOffset && (e.top = pageYOffset), e.left < pageXOffset && (e.left = pageXOffset), e
                        }
                        if ("scroll-handle" === this.targetModifier) {
                            var t = void 0,
                                n = this.target;
                            n === document.body ? (n = document.documentElement, t = {
                                left: pageXOffset,
                                top: pageYOffset,
                                height: innerHeight,
                                width: innerWidth
                            }) : t = s(n);
                            var i = getComputedStyle(n),
                                r = n.scrollWidth > n.clientWidth || [i.overflow, i.overflowX].indexOf("scroll") >= 0 || this.target !== document.body,
                                o = 0;
                            r && (o = 15);
                            var a = t.height - parseFloat(i.borderTopWidth) - parseFloat(i.borderBottomWidth) - o,
                                e = {
                                    width: 15,
                                    height: .975 * a * (a / n.scrollHeight),
                                    left: t.left + t.width - parseFloat(i.borderLeftWidth) - 15
                                },
                                l = 0;
                            a < 408 && this.target === document.body && (l = -11e-5 * Math.pow(a, 2) - .00727 * a + 22.58), this.target !== document.body && (e.height = Math.max(e.height, 24));
                            var u = this.target.scrollTop / (n.scrollHeight - a);
                            return e.top = u * (a - e.height - l) + t.top + parseFloat(i.borderTopWidth), this.target === document.body && (e.height = Math.max(e.height, 24)), e
                        }
                    }
                }, {
                    key: "clearCache",
                    value: function() {
                        this._cache = {}
                    }
                }, {
                    key: "cache",
                    value: function(t, e) {
                        return void 0 === this._cache && (this._cache = {}), void 0 === this._cache[t] && (this._cache[t] = e.call(this)), this._cache[t]
                    }
                }, {
                    key: "enable",
                    value: function() {
                        var t = this,
                            e = arguments.length <= 0 || void 0 === arguments[0] || arguments[0];
                        !1 !== this.options.addTargetClasses && d(this.target, this.getClass("enabled")), d(this.element, this.getClass("enabled")), this.enabled = !0, this.scrollParents.forEach(function(e) {
                            e !== t.target.ownerDocument && e.addEventListener("scroll", t.position)
                        }), e && this.position()
                    }
                }, {
                    key: "disable",
                    value: function() {
                        var t = this;
                        f(this.target, this.getClass("enabled")), f(this.element, this.getClass("enabled")), this.enabled = !1, void 0 !== this.scrollParents && this.scrollParents.forEach(function(e) {
                            e.removeEventListener("scroll", t.position)
                        })
                    }
                }, {
                    key: "destroy",
                    value: function() {
                        var t = this;
                        this.disable(), F.forEach(function(e, n) {
                            e === t && F.splice(n, 1)
                        }), 0 === F.length && a()
                    }
                }, {
                    key: "updateAttachClasses",
                    value: function(t, e) {
                        var n = this;
                        t = t || this.attachment, e = e || this.targetAttachment;
                        var i = ["left", "top", "bottom", "right", "middle", "center"];
                        void 0 !== this._addAttachClasses && this._addAttachClasses.length && this._addAttachClasses.splice(0, this._addAttachClasses.length), void 0 === this._addAttachClasses && (this._addAttachClasses = []);
                        var r = this._addAttachClasses;
                        t.top && r.push(this.getClass("element-attached") + "-" + t.top), t.left && r.push(this.getClass("element-attached") + "-" + t.left), e.top && r.push(this.getClass("target-attached") + "-" + e.top), e.left && r.push(this.getClass("target-attached") + "-" + e.left);
                        var o = [];
                        i.forEach(function(t) {
                            o.push(n.getClass("element-attached") + "-" + t), o.push(n.getClass("target-attached") + "-" + t)
                        }), D(function() {
                            void 0 !== n._addAttachClasses && (g(n.element, n._addAttachClasses, o), !1 !== n.options.addTargetClasses && g(n.target, n._addAttachClasses, o), delete n._addAttachClasses)
                        })
                    }
                }, {
                    key: "position",
                    value: function() {
                        var t = this,
                            e = arguments.length <= 0 || void 0 === arguments[0] || arguments[0];
                        if (this.enabled) {
                            this.clearCache();
                            var n = U(this.targetAttachment, this.attachment);
                            this.updateAttachClasses(this.attachment, n);
                            var i = this.cache("element-bounds", function() {
                                    return s(t.element)
                                }),
                                r = i.width,
                                o = i.height;
                            if (0 === r && 0 === o && void 0 !== this.lastSize) {
                                var a = this.lastSize;
                                r = a.width, o = a.height
                            } else this.lastSize = {
                                width: r,
                                height: o
                            };
                            var c = this.cache("target-bounds", function() {
                                    return t.getTargetBounds()
                                }),
                                f = c,
                                d = x(q(this.attachment), {
                                    width: r,
                                    height: o
                                }),
                                p = x(q(n), f),
                                h = x(this.offset, {
                                    width: r,
                                    height: o
                                }),
                                m = x(this.targetOffset, f);
                            d = _(d, h), p = _(p, m);
                            for (var g = c.left + p.left - d.left, v = c.top + p.top - d.top, y = 0; y < E.modules.length; ++y) {
                                var b = E.modules[y],
                                    w = b.position.call(this, {
                                        left: g,
                                        top: v,
                                        targetAttachment: n,
                                        targetPos: c,
                                        elementPos: i,
                                        offset: d,
                                        targetOffset: p,
                                        manualOffset: h,
                                        manualTargetOffset: m,
                                        scrollbarSize: A,
                                        attachment: this.attachment
                                    });
                                if (!1 === w) return !1;
                                void 0 !== w && "object" == typeof w && (v = w.top, g = w.left)
                            }
                            var S = {
                                    page: {
                                        top: v,
                                        left: g
                                    },
                                    viewport: {
                                        top: v - pageYOffset,
                                        bottom: pageYOffset - v - o + innerHeight,
                                        left: g - pageXOffset,
                                        right: pageXOffset - g - r + innerWidth
                                    }
                                },
                                C = this.target.ownerDocument,
                                T = C.defaultView,
                                A = void 0;
                            return T.innerHeight > C.documentElement.clientHeight && (A = this.cache("scrollbar-size", u), S.viewport.bottom -= A.height), T.innerWidth > C.documentElement.clientWidth && (A = this.cache("scrollbar-size", u), S.viewport.right -= A.width), -1 !== ["", "static"].indexOf(C.body.style.position) && -1 !== ["", "static"].indexOf(C.body.parentElement.style.position) || (S.page.bottom = C.body.scrollHeight - v - o, S.page.right = C.body.scrollWidth - g - r), void 0 !== this.options.optimizations && !1 !== this.options.optimizations.moveElement && void 0 === this.targetModifier && function() {
                                var e = t.cache("target-offsetparent", function() {
                                        return l(t.target)
                                    }),
                                    n = t.cache("target-offsetparent-bounds", function() {
                                        return s(e)
                                    }),
                                    i = getComputedStyle(e),
                                    r = n,
                                    o = {};
                                if (["Top", "Left", "Bottom", "Right"].forEach(function(t) {
                                        o[t.toLowerCase()] = parseFloat(i["border" + t + "Width"])
                                    }), n.right = C.body.scrollWidth - n.left - r.width + o.right, n.bottom = C.body.scrollHeight - n.top - r.height + o.bottom, S.page.top >= n.top + o.top && S.page.bottom >= n.bottom && S.page.left >= n.left + o.left && S.page.right >= n.right) {
                                    var a = e.scrollTop,
                                        u = e.scrollLeft;
                                    S.offset = {
                                        top: S.page.top - n.top + a - o.top,
                                        left: S.page.left - n.left + u - o.left
                                    }
                                }
                            }(), this.move(S), this.history.unshift(S), this.history.length > 3 && this.history.pop(), e && N(), !0
                        }
                    }
                }, {
                    key: "move",
                    value: function(t) {
                        var e = this;
                        if (void 0 !== this.element.parentNode) {
                            var n = {};
                            for (var i in t) {
                                n[i] = {};
                                for (var r in t[i]) {
                                    for (var o = !1, a = 0; a < this.history.length; ++a) {
                                        var s = this.history[a];
                                        if (void 0 !== s[i] && !y(s[i][r], t[i][r])) {
                                            o = !0;
                                            break
                                        }
                                    }
                                    o || (n[i][r] = !0)
                                }
                            }
                            var u = {
                                    top: "",
                                    left: "",
                                    right: "",
                                    bottom: ""
                                },
                                f = function(t, n) {
                                    if (!1 !== (void 0 !== e.options.optimizations ? e.options.optimizations.gpu : null)) {
                                        var i = void 0,
                                            r = void 0;
                                        t.top ? (u.top = 0, i = n.top) : (u.bottom = 0, i = -n.bottom), t.left ? (u.left = 0, r = n.left) : (u.right = 0, r = -n.right), window.matchMedia && (window.matchMedia("only screen and (min-resolution: 1.3dppx)").matches || window.matchMedia("only screen and (-webkit-min-device-pixel-ratio: 1.3)").matches || (r = Math.round(r), i = Math.round(i))), u[V] = "translateX(" + r + "px) translateY(" + i + "px)", "msTransform" !== V && (u[V] += " translateZ(0)")
                                    } else t.top ? u.top = n.top + "px" : u.bottom = n.bottom + "px", t.left ? u.left = n.left + "px" : u.right = n.right + "px"
                                },
                                d = !1;
                            if ((n.page.top || n.page.bottom) && (n.page.left || n.page.right) ? (u.position = "absolute", f(n.page, t.page)) : (n.viewport.top || n.viewport.bottom) && (n.viewport.left || n.viewport.right) ? (u.position = "fixed", f(n.viewport, t.viewport)) : void 0 !== n.offset && n.offset.top && n.offset.left ? function() {
                                    u.position = "absolute";
                                    var i = e.cache("target-offsetparent", function() {
                                        return l(e.target)
                                    });
                                    l(e.element) !== i && D(function() {
                                        e.element.parentNode.removeChild(e.element), i.appendChild(e.element)
                                    }), f(n.offset, t.offset), d = !0
                                }() : (u.position = "absolute", f({
                                    top: !0,
                                    left: !0
                                }, t.page)), !d)
                                if (this.options.bodyElement) this.options.bodyElement.appendChild(this.element);
                                else {
                                    for (var p = !0, h = this.element.parentNode; h && 1 === h.nodeType && "BODY" !== h.tagName;) {
                                        if ("static" !== getComputedStyle(h).position) {
                                            p = !1;
                                            break
                                        }
                                        h = h.parentNode
                                    }
                                    p || (this.element.parentNode.removeChild(this.element), this.element.ownerDocument.body.appendChild(this.element))
                                }
                            var m = {},
                                g = !1;
                            for (var r in u) {
                                var v = u[r];
                                this.element.style[r] !== v && (g = !0, m[r] = v)
                            }
                            g && D(function() {
                                c(e.element.style, m), e.trigger("repositioned")
                            })
                        }
                    }
                }]), e
            }(P);
        Q.modules = [], E.position = R;
        var G = c(Q, E),
            L = function() {
                function t(t, e) {
                    var n = [],
                        i = !0,
                        r = !1,
                        o = void 0;
                    try {
                        for (var a, s = t[Symbol.iterator](); !(i = (a = s.next()).done) && (n.push(a.value), !e || n.length !== e); i = !0);
                    } catch (t) {
                        r = !0, o = t
                    } finally {
                        try {
                            !i && s.return && s.return()
                        } finally {
                            if (r) throw o
                        }
                    }
                    return n
                }
                return function(e, n) {
                    if (Array.isArray(e)) return e;
                    if (Symbol.iterator in Object(e)) return t(e, n);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            B = E.Utils,
            s = B.getBounds,
            c = B.extend,
            g = B.updateClasses,
            D = B.defer,
            Y = ["left", "top", "right", "bottom"];
        E.modules.push({
            position: function(t) {
                var e = this,
                    n = t.top,
                    i = t.left,
                    r = t.targetAttachment;
                if (!this.options.constraints) return !0;
                var o = this.cache("element-bounds", function() {
                        return s(e.element)
                    }),
                    a = o.height,
                    l = o.width;
                if (0 === l && 0 === a && void 0 !== this.lastSize) {
                    var u = this.lastSize;
                    l = u.width, a = u.height
                }
                var f = this.cache("target-bounds", function() {
                        return e.getTargetBounds()
                    }),
                    d = f.height,
                    p = f.width,
                    h = [this.getClass("pinned"), this.getClass("out-of-bounds")];
                this.options.constraints.forEach(function(t) {
                    var e = t.outOfBoundsClass,
                        n = t.pinnedClass;
                    e && h.push(e), n && h.push(n)
                }), h.forEach(function(t) {
                    ["left", "top", "right", "bottom"].forEach(function(e) {
                        h.push(t + "-" + e)
                    })
                });
                var m = [],
                    v = c({}, r),
                    y = c({}, this.attachment);
                return this.options.constraints.forEach(function(t) {
                    var o = t.to,
                        s = t.attachment,
                        u = t.pin;
                    void 0 === s && (s = "");
                    var c = void 0,
                        f = void 0;
                    if (s.indexOf(" ") >= 0) {
                        var h = s.split(" "),
                            g = L(h, 2);
                        f = g[0], c = g[1]
                    } else c = f = s;
                    var b = w(e, o);
                    "target" !== f && "both" !== f || (n < b[1] && "top" === v.top && (n += d, v.top = "bottom"), n + a > b[3] && "bottom" === v.top && (n -= d, v.top = "top")), "together" === f && ("top" === v.top && ("bottom" === y.top && n < b[1] ? (n += d, v.top = "bottom", n += a, y.top = "top") : "top" === y.top && n + a > b[3] && n - (a - d) >= b[1] && (n -= a - d, v.top = "bottom", y.top = "bottom")), "bottom" === v.top && ("top" === y.top && n + a > b[3] ? (n -= d, v.top = "top", n -= a, y.top = "bottom") : "bottom" === y.top && n < b[1] && n + (2 * a - d) <= b[3] && (n += a - d, v.top = "top", y.top = "top")), "middle" === v.top && (n + a > b[3] && "top" === y.top ? (n -= a, y.top = "bottom") : n < b[1] && "bottom" === y.top && (n += a, y.top = "top"))), "target" !== c && "both" !== c || (i < b[0] && "left" === v.left && (i += p, v.left = "right"), i + l > b[2] && "right" === v.left && (i -= p, v.left = "left")), "together" === c && (i < b[0] && "left" === v.left ? "right" === y.left ? (i += p, v.left = "right", i += l, y.left = "left") : "left" === y.left && (i += p, v.left = "right", i -= l, y.left = "right") : i + l > b[2] && "right" === v.left ? "left" === y.left ? (i -= p, v.left = "left", i -= l, y.left = "right") : "right" === y.left && (i -= p, v.left = "left", i += l, y.left = "left") : "center" === v.left && (i + l > b[2] && "left" === y.left ? (i -= l, y.left = "right") : i < b[0] && "right" === y.left && (i += l, y.left = "left"))), "element" !== f && "both" !== f || (n < b[1] && "bottom" === y.top && (n += a, y.top = "top"), n + a > b[3] && "top" === y.top && (n -= a, y.top = "bottom")), "element" !== c && "both" !== c || (i < b[0] && ("right" === y.left ? (i += l, y.left = "left") : "center" === y.left && (i += l / 2, y.left = "left")), i + l > b[2] && ("left" === y.left ? (i -= l, y.left = "right") : "center" === y.left && (i -= l / 2, y.left = "right"))), "string" == typeof u ? u = u.split(",").map(function(t) {
                        return t.trim()
                    }) : !0 === u && (u = ["top", "left", "right", "bottom"]), u = u || [];
                    var _ = [],
                        x = [];
                    n < b[1] && (u.indexOf("top") >= 0 ? (n = b[1], _.push("top")) : x.push("top")), n + a > b[3] && (u.indexOf("bottom") >= 0 ? (n = b[3] - a, _.push("bottom")) : x.push("bottom")), i < b[0] && (u.indexOf("left") >= 0 ? (i = b[0], _.push("left")) : x.push("left")), i + l > b[2] && (u.indexOf("right") >= 0 ? (i = b[2] - l, _.push("right")) : x.push("right")), _.length && function() {
                        var t = void 0;
                        t = void 0 !== e.options.pinnedClass ? e.options.pinnedClass : e.getClass("pinned"), m.push(t), _.forEach(function(e) {
                            m.push(t + "-" + e)
                        })
                    }(), x.length && function() {
                        var t = void 0;
                        t = void 0 !== e.options.outOfBoundsClass ? e.options.outOfBoundsClass : e.getClass("out-of-bounds"), m.push(t), x.forEach(function(e) {
                            m.push(t + "-" + e)
                        })
                    }(), (_.indexOf("left") >= 0 || _.indexOf("right") >= 0) && (y.left = v.left = !1), (_.indexOf("top") >= 0 || _.indexOf("bottom") >= 0) && (y.top = v.top = !1), v.top === r.top && v.left === r.left && y.top === e.attachment.top && y.left === e.attachment.left || (e.updateAttachClasses(y, v), e.trigger("update", {
                        attachment: y,
                        targetAttachment: v
                    }))
                }), D(function() {
                    !1 !== e.options.addTargetClasses && g(e.target, m, h), g(e.element, m, h)
                }), {
                    top: n,
                    left: i
                }
            }
        });
        var B = E.Utils,
            s = B.getBounds,
            g = B.updateClasses,
            D = B.defer;
        E.modules.push({
            position: function(t) {
                var e = this,
                    n = t.top,
                    i = t.left,
                    r = this.cache("element-bounds", function() {
                        return s(e.element)
                    }),
                    o = r.height,
                    a = r.width,
                    l = this.getTargetBounds(),
                    u = n + o,
                    c = i + a,
                    f = [];
                n <= l.bottom && u >= l.top && ["left", "right"].forEach(function(t) {
                    var e = l[t];
                    e !== i && e !== c || f.push(t)
                }), i <= l.right && c >= l.left && ["top", "bottom"].forEach(function(t) {
                    var e = l[t];
                    e !== n && e !== u || f.push(t)
                });
                var d = [],
                    p = [],
                    h = ["left", "top", "right", "bottom"];
                return d.push(this.getClass("abutted")), h.forEach(function(t) {
                    d.push(e.getClass("abutted") + "-" + t)
                }), f.length && p.push(this.getClass("abutted")), f.forEach(function(t) {
                    p.push(e.getClass("abutted") + "-" + t)
                }), D(function() {
                    !1 !== e.options.addTargetClasses && g(e.target, p, d), g(e.element, p, d)
                }), !0
            }
        });
        var L = function() {
            function t(t, e) {
                var n = [],
                    i = !0,
                    r = !1,
                    o = void 0;
                try {
                    for (var a, s = t[Symbol.iterator](); !(i = (a = s.next()).done) && (n.push(a.value), !e || n.length !== e); i = !0);
                } catch (t) {
                    r = !0, o = t
                } finally {
                    try {
                        !i && s.return && s.return()
                    } finally {
                        if (r) throw o
                    }
                }
                return n
            }
            return function(e, n) {
                if (Array.isArray(e)) return e;
                if (Symbol.iterator in Object(e)) return t(e, n);
                throw new TypeError("Invalid attempt to destructure non-iterable instance")
            }
        }();
        return E.modules.push({
            position: function(t) {
                var e = t.top,
                    n = t.left;
                if (this.options.shift) {
                    var i = this.options.shift;
                    "function" == typeof this.options.shift && (i = this.options.shift.call(this, {
                        top: e,
                        left: n
                    }));
                    var r = void 0,
                        o = void 0;
                    if ("string" == typeof i) {
                        i = i.split(" "), i[1] = i[1] || i[0];
                        var a = i,
                            s = L(a, 2);
                        r = s[0], o = s[1], r = parseFloat(r, 10), o = parseFloat(o, 10)
                    } else r = i.top, o = i.left;
                    return e += r, n += o, {
                        top: e,
                        left: n
                    }
                }
            }
        }), G
    })
}, function(t, e, n) {
    "use strict";
    var i;
    i = function() {
        return this
    }();
    try {
        i = i || Function("return this")() || (0, eval)("this")
    } catch (t) {
        "object" == typeof window && (i = window)
    }
    t.exports = i
}, function(t, e, n) {
    (function(e) {
        t.exports = e.Tether = n(23)
    }).call(e, n(24))
}, function(t, e, n) {
    n(5), t.exports = n(6)
}]);