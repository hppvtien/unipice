/*!jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license*/ ! function(e, t) { "use strict"; "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) { if (!e.document) throw new Error("jQuery requires a window with a document"); return t(e) } : t(e) }("undefined" != typeof window ? window : this, function(C, e) {
    "use strict";
    var t = [],
        r = Object.getPrototypeOf,
        s = t.slice,
        g = t.flat ? function(e) { return t.flat.call(e) } : function(e) { return t.concat.apply([], e) },
        u = t.push,
        i = t.indexOf,
        n = {},
        o = n.toString,
        v = n.hasOwnProperty,
        a = v.toString,
        l = a.call(Object),
        y = {},
        m = function(e) { return "function" == typeof e && "number" != typeof e.nodeType },
        x = function(e) { return null != e && e === e.window },
        E = C.document,
        c = { type: !0, src: !0, nonce: !0, noModule: !0 };

    function b(e, t, n) {
        var r, i, o = (n = n || E).createElement("script");
        if (o.text = e, t)
            for (r in c)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
        n.head.appendChild(o).parentNode.removeChild(o)
    }

    function w(e) { return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e }
    var f = "3.5.1",
        S = function(e, t) { return new S.fn.init(e, t) };

    function p(e) {
        var t = !!e && "length" in e && e.length,
            n = w(e);
        return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
    }
    S.fn = S.prototype = {
        jquery: f,
        constructor: S,
        length: 0,
        toArray: function() { return s.call(this) },
        get: function(e) { return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e] },
        pushStack: function(e) { var t = S.merge(this.constructor(), e); return t.prevObject = this, t },
        each: function(e) { return S.each(this, e) },
        map: function(n) { return this.pushStack(S.map(this, function(e, t) { return n.call(e, t, e) })) },
        slice: function() { return this.pushStack(s.apply(this, arguments)) },
        first: function() { return this.eq(0) },
        last: function() { return this.eq(-1) },
        even: function() { return this.pushStack(S.grep(this, function(e, t) { return (t + 1) % 2 })) },
        odd: function() { return this.pushStack(S.grep(this, function(e, t) { return t % 2 })) },
        eq: function(e) {
            var t = this.length,
                n = +e + (e < 0 ? t : 0);
            return this.pushStack(0 <= n && n < t ? [this[n]] : [])
        },
        end: function() { return this.prevObject || this.constructor() },
        push: u,
        sort: t.sort,
        splice: t.splice
    }, S.extend = S.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            u = arguments.length,
            l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || m(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
            if (null != (e = arguments[s]))
                for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (S.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || S.isPlainObject(n) ? n : {}, i = !1, a[t] = S.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
    }, S.extend({
        expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) { throw new Error(e) },
        noop: function() {},
        isPlainObject: function(e) { var t, n; return !(!e || "[object Object]" !== o.call(e)) && (!(t = r(e)) || "function" == typeof(n = v.call(t, "constructor") && t.constructor) && a.call(n) === l) },
        isEmptyObject: function(e) { var t; for (t in e) return !1; return !0 },
        globalEval: function(e, t, n) { b(e, { nonce: t && t.nonce }, n) },
        each: function(e, t) {
            var n, r = 0;
            if (p(e)) {
                for (n = e.length; r < n; r++)
                    if (!1 === t.call(e[r], r, e[r])) break
            } else
                for (r in e)
                    if (!1 === t.call(e[r], r, e[r])) break; return e
        },
        makeArray: function(e, t) { var n = t || []; return null != e && (p(Object(e)) ? S.merge(n, "string" == typeof e ? [e] : e) : u.call(n, e)), n },
        inArray: function(e, t, n) { return null == t ? -1 : i.call(t, e, n) },
        merge: function(e, t) { for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r]; return e.length = i, e },
        grep: function(e, t, n) { for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]); return r },
        map: function(e, t, n) {
            var r, i, o = 0,
                a = [];
            if (p(e))
                for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && a.push(i);
            else
                for (o in e) null != (i = t(e[o], o, n)) && a.push(i);
            return g(a)
        },
        guid: 1,
        support: y
    }), "function" == typeof Symbol && (S.fn[Symbol.iterator] = t[Symbol.iterator]), S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) { n["[object " + t + "]"] = t.toLowerCase() });
    var d = function(n) {
        var e, d, b, o, i, h, f, g, w, u, l, T, C, a, E, v, s, c, y, S = "sizzle" + 1 * new Date,
            p = n.document,
            k = 0,
            r = 0,
            m = ue(),
            x = ue(),
            A = ue(),
            N = ue(),
            D = function(e, t) { return e === t && (l = !0), 0 },
            j = {}.hasOwnProperty,
            t = [],
            q = t.pop,
            L = t.push,
            H = t.push,
            O = t.slice,
            P = function(e, t) {
                for (var n = 0, r = e.length; n < r; n++)
                    if (e[n] === t) return n;
                return -1
            },
            R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            M = "[\\x20\\t\\r\\n\\f]",
            I = "(?:\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
            W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]",
            F = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)",
            B = new RegExp(M + "+", "g"),
            $ = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
            _ = new RegExp("^" + M + "*," + M + "*"),
            z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
            U = new RegExp(M + "|>"),
            X = new RegExp(F),
            V = new RegExp("^" + I + "$"),
            G = { ID: new RegExp("^#(" + I + ")"), CLASS: new RegExp("^\\.(" + I + ")"), TAG: new RegExp("^(" + I + "|[*])"), ATTR: new RegExp("^" + W), PSEUDO: new RegExp("^" + F), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"), bool: new RegExp("^(?:" + R + ")$", "i"), needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i") },
            Y = /HTML$/i,
            Q = /^(?:input|select|textarea|button)$/i,
            J = /^h\d$/i,
            K = /^[^{]+\{\s*\[native \w/,
            Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ee = /[+~]/,
            te = new RegExp("\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\([^\\r\\n\\f])", "g"),
            ne = function(e, t) { var n = "0x" + e.slice(1) - 65536; return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320)) },
            re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            ie = function(e, t) { return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e },
            oe = function() { T() },
            ae = be(function(e) { return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase() }, { dir: "parentNode", next: "legend" });
        try { H.apply(t = O.call(p.childNodes), p.childNodes), t[p.childNodes.length].nodeType } catch (e) {
            H = {
                apply: t.length ? function(e, t) { L.apply(e, O.call(t)) } : function(e, t) {
                    var n = e.length,
                        r = 0;
                    while (e[n++] = t[r++]);
                    e.length = n - 1
                }
            }
        }

        function se(t, e, n, r) {
            var i, o, a, s, u, l, c, f = e && e.ownerDocument,
                p = e ? e.nodeType : 9;
            if (n = n || [], "string" != typeof t || !t || 1 !== p && 9 !== p && 11 !== p) return n;
            if (!r && (T(e), e = e || C, E)) {
                if (11 !== p && (u = Z.exec(t)))
                    if (i = u[1]) { if (9 === p) { if (!(a = e.getElementById(i))) return n; if (a.id === i) return n.push(a), n } else if (f && (a = f.getElementById(i)) && y(e, a) && a.id === i) return n.push(a), n } else { if (u[2]) return H.apply(n, e.getElementsByTagName(t)), n; if ((i = u[3]) && d.getElementsByClassName && e.getElementsByClassName) return H.apply(n, e.getElementsByClassName(i)), n }
                if (d.qsa && !N[t + " "] && (!v || !v.test(t)) && (1 !== p || "object" !== e.nodeName.toLowerCase())) {
                    if (c = t, f = e, 1 === p && (U.test(t) || z.test(t))) {
                        (f = ee.test(t) && ye(e.parentNode) || e) === e && d.scope || ((s = e.getAttribute("id")) ? s = s.replace(re, ie) : e.setAttribute("id", s = S)), o = (l = h(t)).length;
                        while (o--) l[o] = (s ? "#" + s : ":scope") + " " + xe(l[o]);
                        c = l.join(",")
                    }
                    try { return H.apply(n, f.querySelectorAll(c)), n } catch (e) { N(t, !0) } finally { s === S && e.removeAttribute("id") }
                }
            }
            return g(t.replace($, "$1"), e, n, r)
        }

        function ue() { var r = []; return function e(t, n) { return r.push(t + " ") > b.cacheLength && delete e[r.shift()], e[t + " "] = n } }

        function le(e) { return e[S] = !0, e }

        function ce(e) { var t = C.createElement("fieldset"); try { return !!e(t) } catch (e) { return !1 } finally { t.parentNode && t.parentNode.removeChild(t), t = null } }

        function fe(e, t) {
            var n = e.split("|"),
                r = n.length;
            while (r--) b.attrHandle[n[r]] = t
        }

        function pe(e, t) {
            var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (n)
                while (n = n.nextSibling)
                    if (n === t) return -1;
            return e ? 1 : -1
        }

        function de(t) { return function(e) { return "input" === e.nodeName.toLowerCase() && e.type === t } }

        function he(n) { return function(e) { var t = e.nodeName.toLowerCase(); return ("input" === t || "button" === t) && e.type === n } }

        function ge(t) { return function(e) { return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && ae(e) === t : e.disabled === t : "label" in e && e.disabled === t } }

        function ve(a) {
            return le(function(o) {
                return o = +o, le(function(e, t) {
                    var n, r = a([], e.length, o),
                        i = r.length;
                    while (i--) e[n = r[i]] && (e[n] = !(t[n] = e[n]))
                })
            })
        }

        function ye(e) { return e && "undefined" != typeof e.getElementsByTagName && e }
        for (e in d = se.support = {}, i = se.isXML = function(e) {
                var t = e.namespaceURI,
                    n = (e.ownerDocument || e).documentElement;
                return !Y.test(t || n && n.nodeName || "HTML")
            }, T = se.setDocument = function(e) {
                var t, n, r = e ? e.ownerDocument || e : p;
                return r != C && 9 === r.nodeType && r.documentElement && (a = (C = r).documentElement, E = !i(C), p != C && (n = C.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", oe, !1) : n.attachEvent && n.attachEvent("onunload", oe)), d.scope = ce(function(e) { return a.appendChild(e).appendChild(C.createElement("div")), "undefined" != typeof e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length }), d.attributes = ce(function(e) { return e.className = "i", !e.getAttribute("className") }), d.getElementsByTagName = ce(function(e) { return e.appendChild(C.createComment("")), !e.getElementsByTagName("*").length }), d.getElementsByClassName = K.test(C.getElementsByClassName), d.getById = ce(function(e) { return a.appendChild(e).id = S, !C.getElementsByName || !C.getElementsByName(S).length }), d.getById ? (b.filter.ID = function(e) { var t = e.replace(te, ne); return function(e) { return e.getAttribute("id") === t } }, b.find.ID = function(e, t) { if ("undefined" != typeof t.getElementById && E) { var n = t.getElementById(e); return n ? [n] : [] } }) : (b.filter.ID = function(e) { var n = e.replace(te, ne); return function(e) { var t = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id"); return t && t.value === n } }, b.find.ID = function(e, t) {
                    if ("undefined" != typeof t.getElementById && E) {
                        var n, r, i, o = t.getElementById(e);
                        if (o) {
                            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                            i = t.getElementsByName(e), r = 0;
                            while (o = i[r++])
                                if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                        }
                        return []
                    }
                }), b.find.TAG = d.getElementsByTagName ? function(e, t) { return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : d.qsa ? t.querySelectorAll(e) : void 0 } : function(e, t) {
                    var n, r = [],
                        i = 0,
                        o = t.getElementsByTagName(e);
                    if ("*" === e) { while (n = o[i++]) 1 === n.nodeType && r.push(n); return r }
                    return o
                }, b.find.CLASS = d.getElementsByClassName && function(e, t) { if ("undefined" != typeof t.getElementsByClassName && E) return t.getElementsByClassName(e) }, s = [], v = [], (d.qsa = K.test(C.querySelectorAll)) && (ce(function(e) {
                    var t;
                    a.appendChild(e).innerHTML = "<a id='" + S + "'></a><select id='" + S + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"), e.querySelectorAll("[id~=" + S + "-]").length || v.push("~="), (t = C.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || v.push("\\[" + M + "*name" + M + "*=" + M + "*(?:''|\"\")"), e.querySelectorAll(":checked").length || v.push(":checked"), e.querySelectorAll("a#" + S + "+*").length || v.push(".#.+[+~]"), e.querySelectorAll("\\\f"), v.push("[\\r\\n\\f]")
                }), ce(function(e) {
                    e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var t = C.createElement("input");
                    t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"), a.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && v.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), v.push(",.*:")
                })), (d.matchesSelector = K.test(c = a.matches || a.webkitMatchesSelector || a.mozMatchesSelector || a.oMatchesSelector || a.msMatchesSelector)) && ce(function(e) { d.disconnectedMatch = c.call(e, "*"), c.call(e, "[s!='']:x"), s.push("!=", F) }), v = v.length && new RegExp(v.join("|")), s = s.length && new RegExp(s.join("|")), t = K.test(a.compareDocumentPosition), y = t || K.test(a.contains) ? function(e, t) {
                    var n = 9 === e.nodeType ? e.documentElement : e,
                        r = t && t.parentNode;
                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                } : function(e, t) {
                    if (t)
                        while (t = t.parentNode)
                            if (t === e) return !0;
                    return !1
                }, D = t ? function(e, t) { if (e === t) return l = !0, 0; var n = !e.compareDocumentPosition - !t.compareDocumentPosition; return n || (1 & (n = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !d.sortDetached && t.compareDocumentPosition(e) === n ? e == C || e.ownerDocument == p && y(p, e) ? -1 : t == C || t.ownerDocument == p && y(p, t) ? 1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1) } : function(e, t) {
                    if (e === t) return l = !0, 0;
                    var n, r = 0,
                        i = e.parentNode,
                        o = t.parentNode,
                        a = [e],
                        s = [t];
                    if (!i || !o) return e == C ? -1 : t == C ? 1 : i ? -1 : o ? 1 : u ? P(u, e) - P(u, t) : 0;
                    if (i === o) return pe(e, t);
                    n = e;
                    while (n = n.parentNode) a.unshift(n);
                    n = t;
                    while (n = n.parentNode) s.unshift(n);
                    while (a[r] === s[r]) r++;
                    return r ? pe(a[r], s[r]) : a[r] == p ? -1 : s[r] == p ? 1 : 0
                }), C
            }, se.matches = function(e, t) { return se(e, null, null, t) }, se.matchesSelector = function(e, t) {
                if (T(e), d.matchesSelector && E && !N[t + " "] && (!s || !s.test(t)) && (!v || !v.test(t))) try { var n = c.call(e, t); if (n || d.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n } catch (e) { N(t, !0) }
                return 0 < se(t, C, null, [e]).length
            }, se.contains = function(e, t) { return (e.ownerDocument || e) != C && T(e), y(e, t) }, se.attr = function(e, t) {
                (e.ownerDocument || e) != C && T(e);
                var n = b.attrHandle[t.toLowerCase()],
                    r = n && j.call(b.attrHandle, t.toLowerCase()) ? n(e, t, !E) : void 0;
                return void 0 !== r ? r : d.attributes || !E ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
            }, se.escape = function(e) { return (e + "").replace(re, ie) }, se.error = function(e) { throw new Error("Syntax error, unrecognized expression: " + e) }, se.uniqueSort = function(e) {
                var t, n = [],
                    r = 0,
                    i = 0;
                if (l = !d.detectDuplicates, u = !d.sortStable && e.slice(0), e.sort(D), l) { while (t = e[i++]) t === e[i] && (r = n.push(i)); while (r--) e.splice(n[r], 1) }
                return u = null, e
            }, o = se.getText = function(e) {
                var t, n = "",
                    r = 0,
                    i = e.nodeType;
                if (i) { if (1 === i || 9 === i || 11 === i) { if ("string" == typeof e.textContent) return e.textContent; for (e = e.firstChild; e; e = e.nextSibling) n += o(e) } else if (3 === i || 4 === i) return e.nodeValue } else
                    while (t = e[r++]) n += o(t);
                return n
            }, (b = se.selectors = {
                cacheLength: 50,
                createPseudo: le,
                match: G,
                attrHandle: {},
                find: {},
                relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } },
                preFilter: { ATTR: function(e) { return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4) }, CHILD: function(e) { return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e }, PSEUDO: function(e) { var t, n = !e[6] && e[2]; return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = h(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3)) } },
                filter: {
                    TAG: function(e) { var t = e.replace(te, ne).toLowerCase(); return "*" === e ? function() { return !0 } : function(e) { return e.nodeName && e.nodeName.toLowerCase() === t } },
                    CLASS: function(e) { var t = m[e + " "]; return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && m(e, function(e) { return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "") }) },
                    ATTR: function(n, r, i) { return function(e) { var t = se.attr(e, n); return null == t ? "!=" === r : !r || (t += "", "=" === r ? t === i : "!=" === r ? t !== i : "^=" === r ? i && 0 === t.indexOf(i) : "*=" === r ? i && -1 < t.indexOf(i) : "$=" === r ? i && t.slice(-i.length) === i : "~=" === r ? -1 < (" " + t.replace(B, " ") + " ").indexOf(i) : "|=" === r && (t === i || t.slice(0, i.length + 1) === i + "-")) } },
                    CHILD: function(h, e, t, g, v) {
                        var y = "nth" !== h.slice(0, 3),
                            m = "last" !== h.slice(-4),
                            x = "of-type" === e;
                        return 1 === g && 0 === v ? function(e) { return !!e.parentNode } : function(e, t, n) {
                            var r, i, o, a, s, u, l = y !== m ? "nextSibling" : "previousSibling",
                                c = e.parentNode,
                                f = x && e.nodeName.toLowerCase(),
                                p = !n && !x,
                                d = !1;
                            if (c) {
                                if (y) {
                                    while (l) {
                                        a = e;
                                        while (a = a[l])
                                            if (x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) return !1;
                                        u = l = "only" === h && !u && "nextSibling"
                                    }
                                    return !0
                                }
                                if (u = [m ? c.firstChild : c.lastChild], m && p) {
                                    d = (s = (r = (i = (o = (a = c)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]) && r[2], a = s && c.childNodes[s];
                                    while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                        if (1 === a.nodeType && ++d && a === e) { i[h] = [k, s, d]; break }
                                } else if (p && (d = s = (r = (i = (o = (a = e)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]), !1 === d)
                                    while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                        if ((x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) && ++d && (p && ((i = (o = a[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] = [k, d]), a === e)) break;
                                return (d -= v) === g || d % g == 0 && 0 <= d / g
                            }
                        }
                    },
                    PSEUDO: function(e, o) {
                        var t, a = b.pseudos[e] || b.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                        return a[S] ? a(o) : 1 < a.length ? (t = [e, e, "", o], b.setFilters.hasOwnProperty(e.toLowerCase()) ? le(function(e, t) {
                            var n, r = a(e, o),
                                i = r.length;
                            while (i--) e[n = P(e, r[i])] = !(t[n] = r[i])
                        }) : function(e) { return a(e, 0, t) }) : a
                    }
                },
                pseudos: {
                    not: le(function(e) {
                        var r = [],
                            i = [],
                            s = f(e.replace($, "$1"));
                        return s[S] ? le(function(e, t, n, r) {
                            var i, o = s(e, null, r, []),
                                a = e.length;
                            while (a--)(i = o[a]) && (e[a] = !(t[a] = i))
                        }) : function(e, t, n) { return r[0] = e, s(r, null, n, i), r[0] = null, !i.pop() }
                    }),
                    has: le(function(t) { return function(e) { return 0 < se(t, e).length } }),
                    contains: le(function(t) {
                        return t = t.replace(te, ne),
                            function(e) { return -1 < (e.textContent || o(e)).indexOf(t) }
                    }),
                    lang: le(function(n) {
                        return V.test(n || "") || se.error("unsupported lang: " + n), n = n.replace(te, ne).toLowerCase(),
                            function(e) {
                                var t;
                                do { if (t = E ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (t = t.toLowerCase()) === n || 0 === t.indexOf(n + "-") } while ((e = e.parentNode) && 1 === e.nodeType);
                                return !1
                            }
                    }),
                    target: function(e) { var t = n.location && n.location.hash; return t && t.slice(1) === e.id },
                    root: function(e) { return e === a },
                    focus: function(e) { return e === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(e.type || e.href || ~e.tabIndex) },
                    enabled: ge(!1),
                    disabled: ge(!0),
                    checked: function(e) { var t = e.nodeName.toLowerCase(); return "input" === t && !!e.checked || "option" === t && !!e.selected },
                    selected: function(e) { return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected },
                    empty: function(e) {
                        for (e = e.firstChild; e; e = e.nextSibling)
                            if (e.nodeType < 6) return !1;
                        return !0
                    },
                    parent: function(e) { return !b.pseudos.empty(e) },
                    header: function(e) { return J.test(e.nodeName) },
                    input: function(e) { return Q.test(e.nodeName) },
                    button: function(e) { var t = e.nodeName.toLowerCase(); return "input" === t && "button" === e.type || "button" === t },
                    text: function(e) { var t; return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase()) },
                    first: ve(function() { return [0] }),
                    last: ve(function(e, t) { return [t - 1] }),
                    eq: ve(function(e, t, n) { return [n < 0 ? n + t : n] }),
                    even: ve(function(e, t) { for (var n = 0; n < t; n += 2) e.push(n); return e }),
                    odd: ve(function(e, t) { for (var n = 1; n < t; n += 2) e.push(n); return e }),
                    lt: ve(function(e, t, n) { for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r); return e }),
                    gt: ve(function(e, t, n) { for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r); return e })
                }
            }).pseudos.nth = b.pseudos.eq, { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) b.pseudos[e] = de(e);
        for (e in { submit: !0, reset: !0 }) b.pseudos[e] = he(e);

        function me() {}

        function xe(e) { for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value; return r }

        function be(s, e, t) {
            var u = e.dir,
                l = e.next,
                c = l || u,
                f = t && "parentNode" === c,
                p = r++;
            return e.first ? function(e, t, n) {
                while (e = e[u])
                    if (1 === e.nodeType || f) return s(e, t, n);
                return !1
            } : function(e, t, n) {
                var r, i, o, a = [k, p];
                if (n) {
                    while (e = e[u])
                        if ((1 === e.nodeType || f) && s(e, t, n)) return !0
                } else
                    while (e = e[u])
                        if (1 === e.nodeType || f)
                            if (i = (o = e[S] || (e[S] = {}))[e.uniqueID] || (o[e.uniqueID] = {}), l && l === e.nodeName.toLowerCase()) e = e[u] || e;
                            else { if ((r = i[c]) && r[0] === k && r[1] === p) return a[2] = r[2]; if ((i[c] = a)[2] = s(e, t, n)) return !0 } return !1
            }
        }

        function we(i) {
            return 1 < i.length ? function(e, t, n) {
                var r = i.length;
                while (r--)
                    if (!i[r](e, t, n)) return !1;
                return !0
            } : i[0]
        }

        function Te(e, t, n, r, i) { for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s))); return a }

        function Ce(d, h, g, v, y, e) {
            return v && !v[S] && (v = Ce(v)), y && !y[S] && (y = Ce(y, e)), le(function(e, t, n, r) {
                var i, o, a, s = [],
                    u = [],
                    l = t.length,
                    c = e || function(e, t, n) { for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n); return n }(h || "*", n.nodeType ? [n] : n, []),
                    f = !d || !e && h ? c : Te(c, s, d, n, r),
                    p = g ? y || (e ? d : l || v) ? [] : t : f;
                if (g && g(f, p, n, r), v) { i = Te(p, u), v(i, [], n, r), o = i.length; while (o--)(a = i[o]) && (p[u[o]] = !(f[u[o]] = a)) }
                if (e) {
                    if (y || d) {
                        if (y) {
                            i = [], o = p.length;
                            while (o--)(a = p[o]) && i.push(f[o] = a);
                            y(null, p = [], i, r)
                        }
                        o = p.length;
                        while (o--)(a = p[o]) && -1 < (i = y ? P(e, a) : s[o]) && (e[i] = !(t[i] = a))
                    }
                } else p = Te(p === t ? p.splice(l, p.length) : p), y ? y(null, t, p, r) : H.apply(t, p)
            })
        }

        function Ee(e) {
            for (var i, t, n, r = e.length, o = b.relative[e[0].type], a = o || b.relative[" "], s = o ? 1 : 0, u = be(function(e) { return e === i }, a, !0), l = be(function(e) { return -1 < P(i, e) }, a, !0), c = [function(e, t, n) { var r = !o && (n || t !== w) || ((i = t).nodeType ? u(e, t, n) : l(e, t, n)); return i = null, r }]; s < r; s++)
                if (t = b.relative[e[s].type]) c = [be(we(c), t)];
                else {
                    if ((t = b.filter[e[s].type].apply(null, e[s].matches))[S]) {
                        for (n = ++s; n < r; n++)
                            if (b.relative[e[n].type]) break;
                        return Ce(1 < s && we(c), 1 < s && xe(e.slice(0, s - 1).concat({ value: " " === e[s - 2].type ? "*" : "" })).replace($, "$1"), t, s < n && Ee(e.slice(s, n)), n < r && Ee(e = e.slice(n)), n < r && xe(e))
                    }
                    c.push(t)
                }
            return we(c)
        }
        return me.prototype = b.filters = b.pseudos, b.setFilters = new me, h = se.tokenize = function(e, t) {
            var n, r, i, o, a, s, u, l = x[e + " "];
            if (l) return t ? 0 : l.slice(0);
            a = e, s = [], u = b.preFilter;
            while (a) { for (o in n && !(r = _.exec(a)) || (r && (a = a.slice(r[0].length) || a), s.push(i = [])), n = !1, (r = z.exec(a)) && (n = r.shift(), i.push({ value: n, type: r[0].replace($, " ") }), a = a.slice(n.length)), b.filter) !(r = G[o].exec(a)) || u[o] && !(r = u[o](r)) || (n = r.shift(), i.push({ value: n, type: o, matches: r }), a = a.slice(n.length)); if (!n) break }
            return t ? a.length : a ? se.error(e) : x(e, s).slice(0)
        }, f = se.compile = function(e, t) {
            var n, v, y, m, x, r, i = [],
                o = [],
                a = A[e + " "];
            if (!a) {
                t || (t = h(e)), n = t.length;
                while (n--)(a = Ee(t[n]))[S] ? i.push(a) : o.push(a);
                (a = A(e, (v = o, m = 0 < (y = i).length, x = 0 < v.length, r = function(e, t, n, r, i) {
                    var o, a, s, u = 0,
                        l = "0",
                        c = e && [],
                        f = [],
                        p = w,
                        d = e || x && b.find.TAG("*", i),
                        h = k += null == p ? 1 : Math.random() || .1,
                        g = d.length;
                    for (i && (w = t == C || t || i); l !== g && null != (o = d[l]); l++) {
                        if (x && o) {
                            a = 0, t || o.ownerDocument == C || (T(o), n = !E);
                            while (s = v[a++])
                                if (s(o, t || C, n)) { r.push(o); break }
                            i && (k = h)
                        }
                        m && ((o = !s && o) && u--, e && c.push(o))
                    }
                    if (u += l, m && l !== u) {
                        a = 0;
                        while (s = y[a++]) s(c, f, t, n);
                        if (e) {
                            if (0 < u)
                                while (l--) c[l] || f[l] || (f[l] = q.call(r));
                            f = Te(f)
                        }
                        H.apply(r, f), i && !e && 0 < f.length && 1 < u + y.length && se.uniqueSort(r)
                    }
                    return i && (k = h, w = p), c
                }, m ? le(r) : r))).selector = e
            }
            return a
        }, g = se.select = function(e, t, n, r) {
            var i, o, a, s, u, l = "function" == typeof e && e,
                c = !r && h(e = l.selector || e);
            if (n = n || [], 1 === c.length) {
                if (2 < (o = c[0] = c[0].slice(0)).length && "ID" === (a = o[0]).type && 9 === t.nodeType && E && b.relative[o[1].type]) {
                    if (!(t = (b.find.ID(a.matches[0].replace(te, ne), t) || [])[0])) return n;
                    l && (t = t.parentNode), e = e.slice(o.shift().value.length)
                }
                i = G.needsContext.test(e) ? 0 : o.length;
                while (i--) { if (a = o[i], b.relative[s = a.type]) break; if ((u = b.find[s]) && (r = u(a.matches[0].replace(te, ne), ee.test(o[0].type) && ye(t.parentNode) || t))) { if (o.splice(i, 1), !(e = r.length && xe(o))) return H.apply(n, r), n; break } }
            }
            return (l || f(e, c))(r, t, !E, n, !t || ee.test(e) && ye(t.parentNode) || t), n
        }, d.sortStable = S.split("").sort(D).join("") === S, d.detectDuplicates = !!l, T(), d.sortDetached = ce(function(e) { return 1 & e.compareDocumentPosition(C.createElement("fieldset")) }), ce(function(e) { return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href") }) || fe("type|href|height|width", function(e, t, n) { if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2) }), d.attributes && ce(function(e) { return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value") }) || fe("value", function(e, t, n) { if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue }), ce(function(e) { return null == e.getAttribute("disabled") }) || fe(R, function(e, t, n) { var r; if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null }), se
    }(C);
    S.find = d, S.expr = d.selectors, S.expr[":"] = S.expr.pseudos, S.uniqueSort = S.unique = d.uniqueSort, S.text = d.getText, S.isXMLDoc = d.isXML, S.contains = d.contains, S.escapeSelector = d.escape;
    var h = function(e, t, n) {
            var r = [],
                i = void 0 !== n;
            while ((e = e[t]) && 9 !== e.nodeType)
                if (1 === e.nodeType) {
                    if (i && S(e).is(n)) break;
                    r.push(e)
                }
            return r
        },
        T = function(e, t) { for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e); return n },
        k = S.expr.match.needsContext;

    function A(e, t) { return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase() }
    var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

    function D(e, n, r) { return m(n) ? S.grep(e, function(e, t) { return !!n.call(e, t, e) !== r }) : n.nodeType ? S.grep(e, function(e) { return e === n !== r }) : "string" != typeof n ? S.grep(e, function(e) { return -1 < i.call(n, e) !== r }) : S.filter(n, e, r) }
    S.filter = function(e, t, n) { var r = t[0]; return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? S.find.matchesSelector(r, e) ? [r] : [] : S.find.matches(e, S.grep(t, function(e) { return 1 === e.nodeType })) }, S.fn.extend({
        find: function(e) {
            var t, n, r = this.length,
                i = this;
            if ("string" != typeof e) return this.pushStack(S(e).filter(function() {
                for (t = 0; t < r; t++)
                    if (S.contains(i[t], this)) return !0
            }));
            for (n = this.pushStack([]), t = 0; t < r; t++) S.find(e, i[t], n);
            return 1 < r ? S.uniqueSort(n) : n
        },
        filter: function(e) { return this.pushStack(D(this, e || [], !1)) },
        not: function(e) { return this.pushStack(D(this, e || [], !0)) },
        is: function(e) { return !!D(this, "string" == typeof e && k.test(e) ? S(e) : e || [], !1).length }
    });
    var j, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (S.fn.init = function(e, t, n) {
        var r, i;
        if (!e) return this;
        if (n = n || j, "string" == typeof e) {
            if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (r[1]) {
                if (t = t instanceof S ? t[0] : t, S.merge(this, S.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : E, !0)), N.test(r[1]) && S.isPlainObject(t))
                    for (r in t) m(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                return this
            }
            return (i = E.getElementById(r[2])) && (this[0] = i, this.length = 1), this
        }
        return e.nodeType ? (this[0] = e, this.length = 1, this) : m(e) ? void 0 !== n.ready ? n.ready(e) : e(S) : S.makeArray(e, this)
    }).prototype = S.fn, j = S(E);
    var L = /^(?:parents|prev(?:Until|All))/,
        H = { children: !0, contents: !0, next: !0, prev: !0 };

    function O(e, t) { while ((e = e[t]) && 1 !== e.nodeType); return e }
    S.fn.extend({
        has: function(e) {
            var t = S(e, this),
                n = t.length;
            return this.filter(function() {
                for (var e = 0; e < n; e++)
                    if (S.contains(this, t[e])) return !0
            })
        },
        closest: function(e, t) {
            var n, r = 0,
                i = this.length,
                o = [],
                a = "string" != typeof e && S(e);
            if (!k.test(e))
                for (; r < i; r++)
                    for (n = this[r]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && S.find.matchesSelector(n, e))) { o.push(n); break }
            return this.pushStack(1 < o.length ? S.uniqueSort(o) : o)
        },
        index: function(e) { return e ? "string" == typeof e ? i.call(S(e), this[0]) : i.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1 },
        add: function(e, t) { return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t)))) },
        addBack: function(e) { return this.add(null == e ? this.prevObject : this.prevObject.filter(e)) }
    }), S.each({ parent: function(e) { var t = e.parentNode; return t && 11 !== t.nodeType ? t : null }, parents: function(e) { return h(e, "parentNode") }, parentsUntil: function(e, t, n) { return h(e, "parentNode", n) }, next: function(e) { return O(e, "nextSibling") }, prev: function(e) { return O(e, "previousSibling") }, nextAll: function(e) { return h(e, "nextSibling") }, prevAll: function(e) { return h(e, "previousSibling") }, nextUntil: function(e, t, n) { return h(e, "nextSibling", n) }, prevUntil: function(e, t, n) { return h(e, "previousSibling", n) }, siblings: function(e) { return T((e.parentNode || {}).firstChild, e) }, children: function(e) { return T(e.firstChild) }, contents: function(e) { return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (A(e, "template") && (e = e.content || e), S.merge([], e.childNodes)) } }, function(r, i) { S.fn[r] = function(e, t) { var n = S.map(this, i, e); return "Until" !== r.slice(-5) && (t = e), t && "string" == typeof t && (n = S.filter(t, n)), 1 < this.length && (H[r] || S.uniqueSort(n), L.test(r) && n.reverse()), this.pushStack(n) } });
    var P = /[^\x20\t\r\n\f]+/g;

    function R(e) { return e }

    function M(e) { throw e }

    function I(e, t, n, r) { var i; try { e && m(i = e.promise) ? i.call(e).done(t).fail(n) : e && m(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r)) } catch (e) { n.apply(void 0, [e]) } }
    S.Callbacks = function(r) {
        var e, n;
        r = "string" == typeof r ? (e = r, n = {}, S.each(e.match(P) || [], function(e, t) { n[t] = !0 }), n) : S.extend({}, r);
        var i, t, o, a, s = [],
            u = [],
            l = -1,
            c = function() {
                for (a = a || r.once, o = i = !0; u.length; l = -1) { t = u.shift(); while (++l < s.length) !1 === s[l].apply(t[0], t[1]) && r.stopOnFalse && (l = s.length, t = !1) }
                r.memory || (t = !1), i = !1, a && (s = t ? [] : "")
            },
            f = { add: function() { return s && (t && !i && (l = s.length - 1, u.push(t)), function n(e) { S.each(e, function(e, t) { m(t) ? r.unique && f.has(t) || s.push(t) : t && t.length && "string" !== w(t) && n(t) }) }(arguments), t && !i && c()), this }, remove: function() { return S.each(arguments, function(e, t) { var n; while (-1 < (n = S.inArray(t, s, n))) s.splice(n, 1), n <= l && l-- }), this }, has: function(e) { return e ? -1 < S.inArray(e, s) : 0 < s.length }, empty: function() { return s && (s = []), this }, disable: function() { return a = u = [], s = t = "", this }, disabled: function() { return !s }, lock: function() { return a = u = [], t || i || (s = t = ""), this }, locked: function() { return !!a }, fireWith: function(e, t) { return a || (t = [e, (t = t || []).slice ? t.slice() : t], u.push(t), i || c()), this }, fire: function() { return f.fireWith(this, arguments), this }, fired: function() { return !!o } };
        return f
    }, S.extend({
        Deferred: function(e) {
            var o = [
                    ["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2],
                    ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]
                ],
                i = "pending",
                a = {
                    state: function() { return i },
                    always: function() { return s.done(arguments).fail(arguments), this },
                    "catch": function(e) { return a.then(null, e) },
                    pipe: function() {
                        var i = arguments;
                        return S.Deferred(function(r) {
                            S.each(o, function(e, t) {
                                var n = m(i[t[4]]) && i[t[4]];
                                s[t[1]](function() {
                                    var e = n && n.apply(this, arguments);
                                    e && m(e.promise) ? e.promise().progress(r.notify).done(r.resolve).fail(r.reject) : r[t[0] + "With"](this, n ? [e] : arguments)
                                })
                            }), i = null
                        }).promise()
                    },
                    then: function(t, n, r) {
                        var u = 0;

                        function l(i, o, a, s) {
                            return function() {
                                var n = this,
                                    r = arguments,
                                    e = function() {
                                        var e, t;
                                        if (!(i < u)) {
                                            if ((e = a.apply(n, r)) === o.promise()) throw new TypeError("Thenable self-resolution");
                                            t = e && ("object" == typeof e || "function" == typeof e) && e.then, m(t) ? s ? t.call(e, l(u, o, R, s), l(u, o, M, s)) : (u++, t.call(e, l(u, o, R, s), l(u, o, M, s), l(u, o, R, o.notifyWith))) : (a !== R && (n = void 0, r = [e]), (s || o.resolveWith)(n, r))
                                        }
                                    },
                                    t = s ? e : function() { try { e() } catch (e) { S.Deferred.exceptionHook && S.Deferred.exceptionHook(e, t.stackTrace), u <= i + 1 && (a !== M && (n = void 0, r = [e]), o.rejectWith(n, r)) } };
                                i ? t() : (S.Deferred.getStackHook && (t.stackTrace = S.Deferred.getStackHook()), C.setTimeout(t))
                            }
                        }
                        return S.Deferred(function(e) { o[0][3].add(l(0, e, m(r) ? r : R, e.notifyWith)), o[1][3].add(l(0, e, m(t) ? t : R)), o[2][3].add(l(0, e, m(n) ? n : M)) }).promise()
                    },
                    promise: function(e) { return null != e ? S.extend(e, a) : a }
                },
                s = {};
            return S.each(o, function(e, t) {
                var n = t[2],
                    r = t[5];
                a[t[1]] = n.add, r && n.add(function() { i = r }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock), n.add(t[3].fire), s[t[0]] = function() { return s[t[0] + "With"](this === s ? void 0 : this, arguments), this }, s[t[0] + "With"] = n.fireWith
            }), a.promise(s), e && e.call(s, s), s
        },
        when: function(e) {
            var n = arguments.length,
                t = n,
                r = Array(t),
                i = s.call(arguments),
                o = S.Deferred(),
                a = function(t) { return function(e) { r[t] = this, i[t] = 1 < arguments.length ? s.call(arguments) : e, --n || o.resolveWith(r, i) } };
            if (n <= 1 && (I(e, o.done(a(t)).resolve, o.reject, !n), "pending" === o.state() || m(i[t] && i[t].then))) return o.then();
            while (t--) I(i[t], a(t), o.reject);
            return o.promise()
        }
    });
    var W = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    S.Deferred.exceptionHook = function(e, t) { C.console && C.console.warn && e && W.test(e.name) && C.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t) }, S.readyException = function(e) { C.setTimeout(function() { throw e }) };
    var F = S.Deferred();

    function B() { E.removeEventListener("DOMContentLoaded", B), C.removeEventListener("load", B), S.ready() }
    S.fn.ready = function(e) { return F.then(e)["catch"](function(e) { S.readyException(e) }), this }, S.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(e) {
            (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0) !== e && 0 < --S.readyWait || F.resolveWith(E, [S])
        }
    }), S.ready.then = F.then, "complete" === E.readyState || "loading" !== E.readyState && !E.documentElement.doScroll ? C.setTimeout(S.ready) : (E.addEventListener("DOMContentLoaded", B), C.addEventListener("load", B));
    var $ = function(e, t, n, r, i, o, a) {
            var s = 0,
                u = e.length,
                l = null == n;
            if ("object" === w(n))
                for (s in i = !0, n) $(e, t, s, n[s], !0, o, a);
            else if (void 0 !== r && (i = !0, m(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function(e, t, n) { return l.call(S(e), n) })), t))
                for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
        },
        _ = /^-ms-/,
        z = /-([a-z])/g;

    function U(e, t) { return t.toUpperCase() }

    function X(e) { return e.replace(_, "ms-").replace(z, U) }
    var V = function(e) { return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType };

    function G() { this.expando = S.expando + G.uid++ }
    G.uid = 1, G.prototype = {
        cache: function(e) { var t = e[this.expando]; return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, { value: t, configurable: !0 }))), t },
        set: function(e, t, n) {
            var r, i = this.cache(e);
            if ("string" == typeof t) i[X(t)] = n;
            else
                for (r in t) i[X(r)] = t[r];
            return i
        },
        get: function(e, t) { return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)] },
        access: function(e, t, n) { return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t) },
        remove: function(e, t) { var n, r = e[this.expando]; if (void 0 !== r) { if (void 0 !== t) { n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(P) || []).length; while (n--) delete r[t[n]] }(void 0 === t || S.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]) } },
        hasData: function(e) { var t = e[this.expando]; return void 0 !== t && !S.isEmptyObject(t) }
    };
    var Y = new G,
        Q = new G,
        J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        K = /[A-Z]/g;

    function Z(e, t, n) {
        var r, i;
        if (void 0 === n && 1 === e.nodeType)
            if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
                try { n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i) } catch (e) {}
                Q.set(e, t, n)
            } else n = void 0;
        return n
    }
    S.extend({ hasData: function(e) { return Q.hasData(e) || Y.hasData(e) }, data: function(e, t, n) { return Q.access(e, t, n) }, removeData: function(e, t) { Q.remove(e, t) }, _data: function(e, t, n) { return Y.access(e, t, n) }, _removeData: function(e, t) { Y.remove(e, t) } }), S.fn.extend({
        data: function(n, e) {
            var t, r, i, o = this[0],
                a = o && o.attributes;
            if (void 0 === n) {
                if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                    t = a.length;
                    while (t--) a[t] && 0 === (r = a[t].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
                    Y.set(o, "hasDataAttrs", !0)
                }
                return i
            }
            return "object" == typeof n ? this.each(function() { Q.set(this, n) }) : $(this, function(e) {
                var t;
                if (o && void 0 === e) return void 0 !== (t = Q.get(o, n)) ? t : void 0 !== (t = Z(o, n)) ? t : void 0;
                this.each(function() { Q.set(this, n, e) })
            }, null, e, 1 < arguments.length, null, !0)
        },
        removeData: function(e) { return this.each(function() { Q.remove(this, e) }) }
    }), S.extend({
        queue: function(e, t, n) { var r; if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(e, t, S.makeArray(n)) : r.push(n)), r || [] },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = S.queue(e, t),
                r = n.length,
                i = n.shift(),
                o = S._queueHooks(e, t);
            "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, function() { S.dequeue(e, t) }, o)), !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) { var n = t + "queueHooks"; return Y.get(e, n) || Y.access(e, n, { empty: S.Callbacks("once memory").add(function() { Y.remove(e, [t + "queue", n]) }) }) }
    }), S.fn.extend({
        queue: function(t, n) {
            var e = 2;
            return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? S.queue(this[0], t) : void 0 === n ? this : this.each(function() {
                var e = S.queue(this, t, n);
                S._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && S.dequeue(this, t)
            })
        },
        dequeue: function(e) { return this.each(function() { S.dequeue(this, e) }) },
        clearQueue: function(e) { return this.queue(e || "fx", []) },
        promise: function(e, t) {
            var n, r = 1,
                i = S.Deferred(),
                o = this,
                a = this.length,
                s = function() {--r || i.resolveWith(o, [o]) };
            "string" != typeof e && (t = e, e = void 0), e = e || "fx";
            while (a--)(n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
            return s(), i.promise(t)
        }
    });
    var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
        ne = ["Top", "Right", "Bottom", "Left"],
        re = E.documentElement,
        ie = function(e) { return S.contains(e.ownerDocument, e) },
        oe = { composed: !0 };
    re.getRootNode && (ie = function(e) { return S.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument });
    var ae = function(e, t) { return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === S.css(e, "display") };

    function se(e, t, n, r) {
        var i, o, a = 20,
            s = r ? function() { return r.cur() } : function() { return S.css(e, t, "") },
            u = s(),
            l = n && n[3] || (S.cssNumber[t] ? "" : "px"),
            c = e.nodeType && (S.cssNumber[t] || "px" !== l && +u) && te.exec(S.css(e, t));
        if (c && c[3] !== l) {
            u /= 2, l = l || c[3], c = +u || 1;
            while (a--) S.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
            c *= 2, S.style(e, t, c + l), n = n || []
        }
        return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
    }
    var ue = {};

    function le(e, t) { for (var n, r, i, o, a, s, u, l = [], c = 0, f = e.length; c < f; c++)(r = e[c]).style && (n = r.style.display, t ? ("none" === n && (l[c] = Y.get(r, "display") || null, l[c] || (r.style.display = "")), "" === r.style.display && ae(r) && (l[c] = (u = a = o = void 0, a = (i = r).ownerDocument, s = i.nodeName, (u = ue[s]) || (o = a.body.appendChild(a.createElement(s)), u = S.css(o, "display"), o.parentNode.removeChild(o), "none" === u && (u = "block"), ue[s] = u)))) : "none" !== n && (l[c] = "none", Y.set(r, "display", n))); for (c = 0; c < f; c++) null != l[c] && (e[c].style.display = l[c]); return e }
    S.fn.extend({ show: function() { return le(this, !0) }, hide: function() { return le(this) }, toggle: function(e) { return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() { ae(this) ? S(this).show() : S(this).hide() }) } });
    var ce, fe, pe = /^(?:checkbox|radio)$/i,
        de = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
        he = /^$|^module$|\/(?:java|ecma)script/i;
    ce = E.createDocumentFragment().appendChild(E.createElement("div")), (fe = E.createElement("input")).setAttribute("type", "radio"), fe.setAttribute("checked", "checked"), fe.setAttribute("name", "t"), ce.appendChild(fe), y.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML = "<textarea>x</textarea>", y.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML = "<option></option>", y.option = !!ce.lastChild;
    var ge = { thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""] };

    function ve(e, t) { var n; return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && A(e, t) ? S.merge([e], n) : n }

    function ye(e, t) { for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval")) }
    ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td, y.option || (ge.optgroup = ge.option = [1, "<select multiple='multiple'>", "</select>"]);
    var me = /<|&#?\w+;/;

    function xe(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
            if ((o = e[d]) || 0 === o)
                if ("object" === w(o)) S.merge(p, o.nodeType ? [o] : o);
                else if (me.test(o)) {
            a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + S.htmlPrefilter(o) + u[2], c = u[0];
            while (c--) a = a.lastChild;
            S.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
        } else p.push(t.createTextNode(o));
        f.textContent = "", d = 0;
        while (o = p[d++])
            if (r && -1 < S.inArray(o, r)) i && i.push(o);
            else if (l = ie(o), a = ve(f.appendChild(o), "script"), l && ye(a), n) { c = 0; while (o = a[c++]) he.test(o.type || "") && n.push(o) }
        return f
    }
    var be = /^key/,
        we = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        Te = /^([^.]*)(?:\.(.+)|)/;

    function Ce() { return !0 }

    function Ee() { return !1 }

    function Se(e, t) { return e === function() { try { return E.activeElement } catch (e) {} }() == ("focus" === t) }

    function ke(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) { for (s in "string" != typeof n && (r = r || n, n = void 0), t) ke(e, s, n, r, t[s], o); return e }
        if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = Ee;
        else if (!i) return e;
        return 1 === o && (a = i, (i = function(e) { return S().off(e), a.apply(this, arguments) }).guid = a.guid || (a.guid = S.guid++)), e.each(function() { S.event.add(this, t, i, r, n) })
    }

    function Ae(e, i, o) {
        o ? (Y.set(e, i, !1), S.event.add(e, i, {
            namespace: !1,
            handler: function(e) {
                var t, n, r = Y.get(this, i);
                if (1 & e.isTrigger && this[i]) {
                    if (r.length)(S.event.special[i] || {}).delegateType && e.stopPropagation();
                    else if (r = s.call(arguments), Y.set(this, i, r), t = o(this, i), this[i](), r !== (n = Y.get(this, i)) || t ? Y.set(this, i, !1) : n = {}, r !== n) return e.stopImmediatePropagation(), e.preventDefault(), n.value
                } else r.length && (Y.set(this, i, { value: S.event.trigger(S.extend(r[0], S.Event.prototype), r.slice(1), this) }), e.stopImmediatePropagation())
            }
        })) : void 0 === Y.get(e, i) && S.event.add(e, i, Ce)
    }
    S.event = {
        global: {},
        add: function(t, e, n, r, i) { var o, a, s, u, l, c, f, p, d, h, g, v = Y.get(t); if (V(t)) { n.handler && (n = (o = n).handler, i = o.selector), i && S.find.matchesSelector(re, i), n.guid || (n.guid = S.guid++), (u = v.events) || (u = v.events = Object.create(null)), (a = v.handle) || (a = v.handle = function(e) { return "undefined" != typeof S && S.event.triggered !== e.type ? S.event.dispatch.apply(t, arguments) : void 0 }), l = (e = (e || "").match(P) || [""]).length; while (l--) d = g = (s = Te.exec(e[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = S.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = S.event.special[d] || {}, c = S.extend({ type: d, origType: g, data: r, handler: n, guid: n.guid, selector: i, needsContext: i && S.expr.match.needsContext.test(i), namespace: h.join(".") }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(t, r, h, a) || t.addEventListener && t.addEventListener(d, a)), f.add && (f.add.call(t, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), S.event.global[d] = !0) } },
        remove: function(e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = Y.hasData(e) && Y.get(e);
            if (v && (u = v.events)) {
                l = (t = (t || "").match(P) || [""]).length;
                while (l--)
                    if (d = g = (s = Te.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d) {
                        f = S.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                        while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                        a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || S.removeEvent(e, d, v.handle), delete u[d])
                    } else
                        for (d in u) S.event.remove(e, d + t[l], n, r, !0);
                S.isEmptyObject(u) && Y.remove(e, "handle events")
            }
        },
        dispatch: function(e) {
            var t, n, r, i, o, a, s = new Array(arguments.length),
                u = S.event.fix(e),
                l = (Y.get(this, "events") || Object.create(null))[u.type] || [],
                c = S.event.special[u.type] || {};
            for (s[0] = u, t = 1; t < arguments.length; t++) s[t] = arguments[t];
            if (u.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, u)) { a = S.event.handlers.call(this, u, l), t = 0; while ((i = a[t++]) && !u.isPropagationStopped()) { u.currentTarget = i.elem, n = 0; while ((o = i.handlers[n++]) && !u.isImmediatePropagationStopped()) u.rnamespace && !1 !== o.namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o, u.data = o.data, void 0 !== (r = ((S.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (u.result = r) && (u.preventDefault(), u.stopPropagation())) } return c.postDispatch && c.postDispatch.call(this, u), u.result }
        },
        handlers: function(e, t) {
            var n, r, i, o, a, s = [],
                u = t.delegateCount,
                l = e.target;
            if (u && l.nodeType && !("click" === e.type && 1 <= e.button))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                        for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < S(i, this).index(l) : S.find(i, this, null, [l]).length), a[i] && o.push(r);
                        o.length && s.push({ elem: l, handlers: o })
                    }
            return l = this, u < t.length && s.push({ elem: l, handlers: t.slice(u) }), s
        },
        addProp: function(t, e) { Object.defineProperty(S.Event.prototype, t, { enumerable: !0, configurable: !0, get: m(e) ? function() { if (this.originalEvent) return e(this.originalEvent) } : function() { if (this.originalEvent) return this.originalEvent[t] }, set: function(e) { Object.defineProperty(this, t, { enumerable: !0, configurable: !0, writable: !0, value: e }) } }) },
        fix: function(e) { return e[S.expando] ? e : new S.Event(e) },
        special: { load: { noBubble: !0 }, click: { setup: function(e) { var t = this || e; return pe.test(t.type) && t.click && A(t, "input") && Ae(t, "click", Ce), !1 }, trigger: function(e) { var t = this || e; return pe.test(t.type) && t.click && A(t, "input") && Ae(t, "click"), !0 }, _default: function(e) { var t = e.target; return pe.test(t.type) && t.click && A(t, "input") && Y.get(t, "click") || A(t, "a") } }, beforeunload: { postDispatch: function(e) { void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result) } } }
    }, S.removeEvent = function(e, t, n) { e.removeEventListener && e.removeEventListener(t, n) }, S.Event = function(e, t) {
        if (!(this instanceof S.Event)) return new S.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ce : Ee, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && S.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[S.expando] = !0
    }, S.Event.prototype = {
        constructor: S.Event,
        isDefaultPrevented: Ee,
        isPropagationStopped: Ee,
        isImmediatePropagationStopped: Ee,
        isSimulated: !1,
        preventDefault: function() {
            var e = this.originalEvent;
            this.isDefaultPrevented = Ce, e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function() {
            var e = this.originalEvent;
            this.isPropagationStopped = Ce, e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = Ce, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
        }
    }, S.each({ altKey: !0, bubbles: !0, cancelable: !0, changedTouches: !0, ctrlKey: !0, detail: !0, eventPhase: !0, metaKey: !0, pageX: !0, pageY: !0, shiftKey: !0, view: !0, "char": !0, code: !0, charCode: !0, key: !0, keyCode: !0, button: !0, buttons: !0, clientX: !0, clientY: !0, offsetX: !0, offsetY: !0, pointerId: !0, pointerType: !0, screenX: !0, screenY: !0, targetTouches: !0, toElement: !0, touches: !0, which: function(e) { var t = e.button; return null == e.which && be.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && we.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which } }, S.event.addProp), S.each({ focus: "focusin", blur: "focusout" }, function(e, t) { S.event.special[e] = { setup: function() { return Ae(this, e, Se), !1 }, trigger: function() { return Ae(this, e), !0 }, delegateType: t } }), S.each({ mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout" }, function(e, i) {
        S.event.special[e] = {
            delegateType: i,
            bindType: i,
            handle: function(e) {
                var t, n = e.relatedTarget,
                    r = e.handleObj;
                return n && (n === this || S.contains(this, n)) || (e.type = r.origType, t = r.handler.apply(this, arguments), e.type = i), t
            }
        }
    }), S.fn.extend({ on: function(e, t, n, r) { return ke(this, e, t, n, r) }, one: function(e, t, n, r) { return ke(this, e, t, n, r, 1) }, off: function(e, t, n) { var r, i; if (e && e.preventDefault && e.handleObj) return r = e.handleObj, S(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this; if ("object" == typeof e) { for (i in e) this.off(i, t, e[i]); return this } return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Ee), this.each(function() { S.event.remove(this, e, n, t) }) } });
    var Ne = /<script|<style|<link/i,
        De = /checked\s*(?:[^=]|=\s*.checked.)/i,
        je = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

    function qe(e, t) { return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e }

    function Le(e) { return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e }

    function He(e) { return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e }

    function Oe(e, t) {
        var n, r, i, o, a, s;
        if (1 === t.nodeType) {
            if (Y.hasData(e) && (s = Y.get(e).events))
                for (i in Y.remove(t, "handle events"), s)
                    for (n = 0, r = s[i].length; n < r; n++) S.event.add(t, i, s[i][n]);
            Q.hasData(e) && (o = Q.access(e), a = S.extend({}, o), Q.set(t, a))
        }
    }

    function Pe(n, r, i, o) {
        r = g(r);
        var e, t, a, s, u, l, c = 0,
            f = n.length,
            p = f - 1,
            d = r[0],
            h = m(d);
        if (h || 1 < f && "string" == typeof d && !y.checkClone && De.test(d)) return n.each(function(e) {
            var t = n.eq(e);
            h && (r[0] = d.call(this, e, t.html())), Pe(t, r, i, o)
        });
        if (f && (t = (e = xe(r, n[0].ownerDocument, !1, n, o)).firstChild, 1 === e.childNodes.length && (e = t), t || o)) {
            for (s = (a = S.map(ve(e, "script"), Le)).length; c < f; c++) u = e, c !== p && (u = S.clone(u, !0, !0), s && S.merge(a, ve(u, "script"))), i.call(n[c], u, c);
            if (s)
                for (l = a[a.length - 1].ownerDocument, S.map(a, He), c = 0; c < s; c++) u = a[c], he.test(u.type || "") && !Y.access(u, "globalEval") && S.contains(l, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? S._evalUrl && !u.noModule && S._evalUrl(u.src, { nonce: u.nonce || u.getAttribute("nonce") }, l) : b(u.textContent.replace(je, ""), u, l))
        }
        return n
    }

    function Re(e, t, n) { for (var r, i = t ? S.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || S.cleanData(ve(r)), r.parentNode && (n && ie(r) && ye(ve(r, "script")), r.parentNode.removeChild(r)); return e }
    S.extend({
        htmlPrefilter: function(e) { return e },
        clone: function(e, t, n) {
            var r, i, o, a, s, u, l, c = e.cloneNode(!0),
                f = ie(e);
            if (!(y.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
                for (a = ve(c), r = 0, i = (o = ve(e)).length; r < i; r++) s = o[r], u = a[r], void 0, "input" === (l = u.nodeName.toLowerCase()) && pe.test(s.type) ? u.checked = s.checked : "input" !== l && "textarea" !== l || (u.defaultValue = s.defaultValue);
            if (t)
                if (n)
                    for (o = o || ve(e), a = a || ve(c), r = 0, i = o.length; r < i; r++) Oe(o[r], a[r]);
                else Oe(e, c);
            return 0 < (a = ve(c, "script")).length && ye(a, !f && ve(e, "script")), c
        },
        cleanData: function(e) {
            for (var t, n, r, i = S.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (V(n)) {
                    if (t = n[Y.expando]) {
                        if (t.events)
                            for (r in t.events) i[r] ? S.event.remove(n, r) : S.removeEvent(n, r, t.handle);
                        n[Y.expando] = void 0
                    }
                    n[Q.expando] && (n[Q.expando] = void 0)
                }
        }
    }), S.fn.extend({
        detach: function(e) { return Re(this, e, !0) },
        remove: function(e) { return Re(this, e) },
        text: function(e) { return $(this, function(e) { return void 0 === e ? S.text(this) : this.empty().each(function() { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e) }) }, null, e, arguments.length) },
        append: function() { return Pe(this, arguments, function(e) { 1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || qe(this, e).appendChild(e) }) },
        prepend: function() {
            return Pe(this, arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = qe(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        },
        before: function() { return Pe(this, arguments, function(e) { this.parentNode && this.parentNode.insertBefore(e, this) }) },
        after: function() { return Pe(this, arguments, function(e) { this.parentNode && this.parentNode.insertBefore(e, this.nextSibling) }) },
        empty: function() { for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (S.cleanData(ve(e, !1)), e.textContent = ""); return this },
        clone: function(e, t) { return e = null != e && e, t = null == t ? e : t, this.map(function() { return S.clone(this, e, t) }) },
        html: function(e) {
            return $(this, function(e) {
                var t = this[0] || {},
                    n = 0,
                    r = this.length;
                if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                if ("string" == typeof e && !Ne.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                    e = S.htmlPrefilter(e);
                    try {
                        for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (S.cleanData(ve(t, !1)), t.innerHTML = e);
                        t = 0
                    } catch (e) {}
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return Pe(this, arguments, function(e) {
                var t = this.parentNode;
                S.inArray(this, n) < 0 && (S.cleanData(ve(this)), t && t.replaceChild(e, this))
            }, n)
        }
    }), S.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function(e, a) { S.fn[e] = function(e) { for (var t, n = [], r = S(e), i = r.length - 1, o = 0; o <= i; o++) t = o === i ? this : this.clone(!0), S(r[o])[a](t), u.apply(n, t.get()); return this.pushStack(n) } });
    var Me = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
        Ie = function(e) { var t = e.ownerDocument.defaultView; return t && t.opener || (t = C), t.getComputedStyle(e) },
        We = function(e, t, n) { var r, i, o = {}; for (i in t) o[i] = e.style[i], e.style[i] = t[i]; for (i in r = n.call(e), t) e.style[i] = o[i]; return r },
        Fe = new RegExp(ne.join("|"), "i");

    function Be(e, t, n) { var r, i, o, a, s = e.style; return (n = n || Ie(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = S.style(e, t)), !y.pixelBoxStyles() && Me.test(a) && Fe.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a }

    function $e(e, t) {
        return {
            get: function() {
                if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }! function() {
        function e() {
            if (l) {
                u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", l.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", re.appendChild(u).appendChild(l);
                var e = C.getComputedStyle(l);
                n = "1%" !== e.top, s = 12 === t(e.marginLeft), l.style.right = "60%", o = 36 === t(e.right), r = 36 === t(e.width), l.style.position = "absolute", i = 12 === t(l.offsetWidth / 3), re.removeChild(u), l = null
            }
        }

        function t(e) { return Math.round(parseFloat(e)) }
        var n, r, i, o, a, s, u = E.createElement("div"),
            l = E.createElement("div");
        l.style && (l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", y.clearCloneStyle = "content-box" === l.style.backgroundClip, S.extend(y, { boxSizingReliable: function() { return e(), r }, pixelBoxStyles: function() { return e(), o }, pixelPosition: function() { return e(), n }, reliableMarginLeft: function() { return e(), s }, scrollboxSize: function() { return e(), i }, reliableTrDimensions: function() { var e, t, n, r; return null == a && (e = E.createElement("table"), t = E.createElement("tr"), n = E.createElement("div"), e.style.cssText = "position:absolute;left:-11111px", t.style.height = "1px", n.style.height = "9px", re.appendChild(e).appendChild(t).appendChild(n), r = C.getComputedStyle(t), a = 3 < parseInt(r.height), re.removeChild(e)), a } }))
    }();
    var _e = ["Webkit", "Moz", "ms"],
        ze = E.createElement("div").style,
        Ue = {};

    function Xe(e) {
        var t = S.cssProps[e] || Ue[e];
        return t || (e in ze ? e : Ue[e] = function(e) {
            var t = e[0].toUpperCase() + e.slice(1),
                n = _e.length;
            while (n--)
                if ((e = _e[n] + t) in ze) return e
        }(e) || e)
    }
    var Ve = /^(none|table(?!-c[ea]).+)/,
        Ge = /^--/,
        Ye = { position: "absolute", visibility: "hidden", display: "block" },
        Qe = { letterSpacing: "0", fontWeight: "400" };

    function Je(e, t, n) { var r = te.exec(t); return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t }

    function Ke(e, t, n, r, i, o) {
        var a = "width" === t ? 1 : 0,
            s = 0,
            u = 0;
        if (n === (r ? "border" : "content")) return 0;
        for (; a < 4; a += 2) "margin" === n && (u += S.css(e, n + ne[a], !0, i)), r ? ("content" === n && (u -= S.css(e, "padding" + ne[a], !0, i)), "margin" !== n && (u -= S.css(e, "border" + ne[a] + "Width", !0, i))) : (u += S.css(e, "padding" + ne[a], !0, i), "padding" !== n ? u += S.css(e, "border" + ne[a] + "Width", !0, i) : s += S.css(e, "border" + ne[a] + "Width", !0, i));
        return !r && 0 <= o && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5)) || 0), u
    }

    function Ze(e, t, n) {
        var r = Ie(e),
            i = (!y.boxSizingReliable() || n) && "border-box" === S.css(e, "boxSizing", !1, r),
            o = i,
            a = Be(e, t, r),
            s = "offset" + t[0].toUpperCase() + t.slice(1);
        if (Me.test(a)) {
            if (!n) return a;
            a = "auto"
        }
        return (!y.boxSizingReliable() && i || !y.reliableTrDimensions() && A(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === S.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === S.css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Ke(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
    }

    function et(e, t, n, r, i) { return new et.prototype.init(e, t, n, r, i) }
    S.extend({
        cssHooks: { opacity: { get: function(e, t) { if (t) { var n = Be(e, "opacity"); return "" === n ? "1" : n } } } },
        cssNumber: { animationIterationCount: !0, columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, gridArea: !0, gridColumn: !0, gridColumnEnd: !0, gridColumnStart: !0, gridRow: !0, gridRowEnd: !0, gridRowStart: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 },
        cssProps: {},
        style: function(e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = X(t),
                    u = Ge.test(t),
                    l = e.style;
                if (u || (t = Xe(s)), a = S.cssHooks[t] || S.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" === (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null != n && n == n && ("number" !== o || u || (n += i && i[3] || (S.cssNumber[s] ? "" : "px")), y.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
            }
        },
        css: function(e, t, n, r) { var i, o, a, s = X(t); return Ge.test(t) || (t = Xe(s)), (a = S.cssHooks[t] || S.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Be(e, t, r)), "normal" === i && t in Qe && (i = Qe[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i }
    }), S.each(["height", "width"], function(e, u) {
        S.cssHooks[u] = {
            get: function(e, t, n) { if (t) return !Ve.test(S.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Ze(e, u, n) : We(e, Ye, function() { return Ze(e, u, n) }) },
            set: function(e, t, n) {
                var r, i = Ie(e),
                    o = !y.scrollboxSize() && "absolute" === i.position,
                    a = (o || n) && "border-box" === S.css(e, "boxSizing", !1, i),
                    s = n ? Ke(e, u, n, a, i) : 0;
                return a && o && (s -= Math.ceil(e["offset" + u[0].toUpperCase() + u.slice(1)] - parseFloat(i[u]) - Ke(e, u, "border", !1, i) - .5)), s && (r = te.exec(t)) && "px" !== (r[3] || "px") && (e.style[u] = t, t = S.css(e, u)), Je(0, t, s)
            }
        }
    }), S.cssHooks.marginLeft = $e(y.reliableMarginLeft, function(e, t) { if (t) return (parseFloat(Be(e, "marginLeft")) || e.getBoundingClientRect().left - We(e, { marginLeft: 0 }, function() { return e.getBoundingClientRect().left })) + "px" }), S.each({ margin: "", padding: "", border: "Width" }, function(i, o) { S.cssHooks[i + o] = { expand: function(e) { for (var t = 0, n = {}, r = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++) n[i + ne[t] + o] = r[t] || r[t - 2] || r[0]; return n } }, "margin" !== i && (S.cssHooks[i + o].set = Je) }), S.fn.extend({
        css: function(e, t) {
            return $(this, function(e, t, n) {
                var r, i, o = {},
                    a = 0;
                if (Array.isArray(t)) { for (r = Ie(e), i = t.length; a < i; a++) o[t[a]] = S.css(e, t[a], !1, r); return o }
                return void 0 !== n ? S.style(e, t, n) : S.css(e, t)
            }, e, t, 1 < arguments.length)
        }
    }), ((S.Tween = et).prototype = { constructor: et, init: function(e, t, n, r, i, o) { this.elem = e, this.prop = n, this.easing = i || S.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (S.cssNumber[n] ? "" : "px") }, cur: function() { var e = et.propHooks[this.prop]; return e && e.get ? e.get(this) : et.propHooks._default.get(this) }, run: function(e) { var t, n = et.propHooks[this.prop]; return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : et.propHooks._default.set(this), this } }).init.prototype = et.prototype, (et.propHooks = { _default: { get: function(e) { var t; return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0 }, set: function(e) { S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !S.cssHooks[e.prop] && null == e.elem.style[Xe(e.prop)] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit) } } }).scrollTop = et.propHooks.scrollLeft = { set: function(e) { e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now) } }, S.easing = { linear: function(e) { return e }, swing: function(e) { return .5 - Math.cos(e * Math.PI) / 2 }, _default: "swing" }, S.fx = et.prototype.init, S.fx.step = {};
    var tt, nt, rt, it, ot = /^(?:toggle|show|hide)$/,
        at = /queueHooks$/;

    function st() { nt && (!1 === E.hidden && C.requestAnimationFrame ? C.requestAnimationFrame(st) : C.setTimeout(st, S.fx.interval), S.fx.tick()) }

    function ut() { return C.setTimeout(function() { tt = void 0 }), tt = Date.now() }

    function lt(e, t) {
        var n, r = 0,
            i = { height: e };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i
    }

    function ct(e, t, n) {
        for (var r, i = (ft.tweeners[t] || []).concat(ft.tweeners["*"]), o = 0, a = i.length; o < a; o++)
            if (r = i[o].call(n, t, e)) return r
    }

    function ft(o, e, t) {
        var n, a, r = 0,
            i = ft.prefilters.length,
            s = S.Deferred().always(function() { delete u.elem }),
            u = function() { if (a) return !1; for (var e = tt || ut(), t = Math.max(0, l.startTime + l.duration - e), n = 1 - (t / l.duration || 0), r = 0, i = l.tweens.length; r < i; r++) l.tweens[r].run(n); return s.notifyWith(o, [l, n, t]), n < 1 && i ? t : (i || s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l]), !1) },
            l = s.promise({
                elem: o,
                props: S.extend({}, e),
                opts: S.extend(!0, { specialEasing: {}, easing: S.easing._default }, t),
                originalProperties: e,
                originalOptions: t,
                startTime: tt || ut(),
                duration: t.duration,
                tweens: [],
                createTween: function(e, t) { var n = S.Tween(o, l.opts, e, t, l.opts.specialEasing[e] || l.opts.easing); return l.tweens.push(n), n },
                stop: function(e) {
                    var t = 0,
                        n = e ? l.tweens.length : 0;
                    if (a) return this;
                    for (a = !0; t < n; t++) l.tweens[t].run(1);
                    return e ? (s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l, e])) : s.rejectWith(o, [l, e]), this
                }
            }),
            c = l.props;
        for (! function(e, t) {
                var n, r, i, o, a;
                for (n in e)
                    if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = S.cssHooks[r]) && "expand" in a)
                        for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i);
                    else t[r] = i
            }(c, l.opts.specialEasing); r < i; r++)
            if (n = ft.prefilters[r].call(l, o, c, l.opts)) return m(n.stop) && (S._queueHooks(l.elem, l.opts.queue).stop = n.stop.bind(n)), n;
        return S.map(c, ct, l), m(l.opts.start) && l.opts.start.call(o, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), S.fx.timer(S.extend(u, { elem: o, anim: l, queue: l.opts.queue })), l
    }
    S.Animation = S.extend(ft, {
        tweeners: { "*": [function(e, t) { var n = this.createTween(e, t); return se(n.elem, e, te.exec(t), n), n }] },
        tweener: function(e, t) { m(e) ? (t = e, e = ["*"]) : e = e.match(P); for (var n, r = 0, i = e.length; r < i; r++) n = e[r], ft.tweeners[n] = ft.tweeners[n] || [], ft.tweeners[n].unshift(t) },
        prefilters: [function(e, t, n) {
            var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
                p = this,
                d = {},
                h = e.style,
                g = e.nodeType && ae(e),
                v = Y.get(e, "fxshow");
            for (r in n.queue || (null == (a = S._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() { a.unqueued || s() }), a.unqueued++, p.always(function() { p.always(function() { a.unqueued--, S.queue(e, "fx").length || a.empty.fire() }) })), t)
                if (i = t[r], ot.test(i)) {
                    if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                        if ("show" !== i || !v || void 0 === v[r]) continue;
                        g = !0
                    }
                    d[r] = v && v[r] || S.style(e, r)
                }
            if ((u = !S.isEmptyObject(t)) || !S.isEmptyObject(d))
                for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = v && v.display) && (l = Y.get(e, "display")), "none" === (c = S.css(e, "display")) && (l ? c = l : (le([e], !0), l = e.style.display || l, c = S.css(e, "display"), le([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === S.css(e, "float") && (u || (p.done(function() { h.display = l }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function() { h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2] })), u = !1, d) u || (v ? "hidden" in v && (g = v.hidden) : v = Y.access(e, "fxshow", { display: l }), o && (v.hidden = !g), g && le([e], !0), p.done(function() { for (r in g || le([e]), Y.remove(e, "fxshow"), d) S.style(e, r, d[r]) })), u = ct(g ? v[r] : 0, r, p), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
        }],
        prefilter: function(e, t) { t ? ft.prefilters.unshift(e) : ft.prefilters.push(e) }
    }), S.speed = function(e, t, n) { var r = e && "object" == typeof e ? S.extend({}, e) : { complete: n || !n && t || m(e) && e, duration: e, easing: n && t || t && !m(t) && t }; return S.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in S.fx.speeds ? r.duration = S.fx.speeds[r.duration] : r.duration = S.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() { m(r.old) && r.old.call(this), r.queue && S.dequeue(this, r.queue) }, r }, S.fn.extend({
        fadeTo: function(e, t, n, r) { return this.filter(ae).css("opacity", 0).show().end().animate({ opacity: t }, e, n, r) },
        animate: function(t, e, n, r) {
            var i = S.isEmptyObject(t),
                o = S.speed(e, n, r),
                a = function() {
                    var e = ft(this, S.extend({}, t), o);
                    (i || Y.get(this, "finish")) && e.stop(!0)
                };
            return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        },
        stop: function(i, e, o) {
            var a = function(e) {
                var t = e.stop;
                delete e.stop, t(o)
            };
            return "string" != typeof i && (o = e, e = i, i = void 0), e && this.queue(i || "fx", []), this.each(function() {
                var e = !0,
                    t = null != i && i + "queueHooks",
                    n = S.timers,
                    r = Y.get(this);
                if (t) r[t] && r[t].stop && a(r[t]);
                else
                    for (t in r) r[t] && r[t].stop && at.test(t) && a(r[t]);
                for (t = n.length; t--;) n[t].elem !== this || null != i && n[t].queue !== i || (n[t].anim.stop(o), e = !1, n.splice(t, 1));
                !e && o || S.dequeue(this, i)
            })
        },
        finish: function(a) {
            return !1 !== a && (a = a || "fx"), this.each(function() {
                var e, t = Y.get(this),
                    n = t[a + "queue"],
                    r = t[a + "queueHooks"],
                    i = S.timers,
                    o = n ? n.length : 0;
                for (t.finish = !0, S.queue(this, a, []), r && r.stop && r.stop.call(this, !0), e = i.length; e--;) i[e].elem === this && i[e].queue === a && (i[e].anim.stop(!0), i.splice(e, 1));
                for (e = 0; e < o; e++) n[e] && n[e].finish && n[e].finish.call(this);
                delete t.finish
            })
        }
    }), S.each(["toggle", "show", "hide"], function(e, r) {
        var i = S.fn[r];
        S.fn[r] = function(e, t, n) { return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(lt(r, !0), e, t, n) }
    }), S.each({ slideDown: lt("show"), slideUp: lt("hide"), slideToggle: lt("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function(e, r) { S.fn[e] = function(e, t, n) { return this.animate(r, e, t, n) } }), S.timers = [], S.fx.tick = function() {
        var e, t = 0,
            n = S.timers;
        for (tt = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || S.fx.stop(), tt = void 0
    }, S.fx.timer = function(e) { S.timers.push(e), S.fx.start() }, S.fx.interval = 13, S.fx.start = function() { nt || (nt = !0, st()) }, S.fx.stop = function() { nt = null }, S.fx.speeds = { slow: 600, fast: 200, _default: 400 }, S.fn.delay = function(r, e) {
        return r = S.fx && S.fx.speeds[r] || r, e = e || "fx", this.queue(e, function(e, t) {
            var n = C.setTimeout(e, r);
            t.stop = function() { C.clearTimeout(n) }
        })
    }, rt = E.createElement("input"), it = E.createElement("select").appendChild(E.createElement("option")), rt.type = "checkbox", y.checkOn = "" !== rt.value, y.optSelected = it.selected, (rt = E.createElement("input")).value = "t", rt.type = "radio", y.radioValue = "t" === rt.value;
    var pt, dt = S.expr.attrHandle;
    S.fn.extend({ attr: function(e, t) { return $(this, S.attr, e, t, 1 < arguments.length) }, removeAttr: function(e) { return this.each(function() { S.removeAttr(this, e) }) } }), S.extend({
        attr: function(e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? S.prop(e, t, n) : (1 === o && S.isXMLDoc(e) || (i = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ? pt : void 0)), void 0 !== n ? null === n ? void S.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = S.find.attr(e, t)) ? void 0 : r) },
        attrHooks: { type: { set: function(e, t) { if (!y.radioValue && "radio" === t && A(e, "input")) { var n = e.value; return e.setAttribute("type", t), n && (e.value = n), t } } } },
        removeAttr: function(e, t) {
            var n, r = 0,
                i = t && t.match(P);
            if (i && 1 === e.nodeType)
                while (n = i[r++]) e.removeAttribute(n)
        }
    }), pt = { set: function(e, t, n) { return !1 === t ? S.removeAttr(e, n) : e.setAttribute(n, n), n } }, S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var a = dt[t] || S.find.attr;
        dt[t] = function(e, t, n) { var r, i, o = t.toLowerCase(); return n || (i = dt[o], dt[o] = r, r = null != a(e, t, n) ? o : null, dt[o] = i), r }
    });
    var ht = /^(?:input|select|textarea|button)$/i,
        gt = /^(?:a|area)$/i;

    function vt(e) { return (e.match(P) || []).join(" ") }

    function yt(e) { return e.getAttribute && e.getAttribute("class") || "" }

    function mt(e) { return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || [] }
    S.fn.extend({ prop: function(e, t) { return $(this, S.prop, e, t, 1 < arguments.length) }, removeProp: function(e) { return this.each(function() { delete this[S.propFix[e] || e] }) } }), S.extend({ prop: function(e, t, n) { var r, i, o = e.nodeType; if (3 !== o && 8 !== o && 2 !== o) return 1 === o && S.isXMLDoc(e) || (t = S.propFix[t] || t, i = S.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t] }, propHooks: { tabIndex: { get: function(e) { var t = S.find.attr(e, "tabindex"); return t ? parseInt(t, 10) : ht.test(e.nodeName) || gt.test(e.nodeName) && e.href ? 0 : -1 } } }, propFix: { "for": "htmlFor", "class": "className" } }), y.optSelected || (S.propHooks.selected = {
        get: function(e) { var t = e.parentNode; return t && t.parentNode && t.parentNode.selectedIndex, null },
        set: function(e) {
            var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    }), S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() { S.propFix[this.toLowerCase()] = this }), S.fn.extend({
        addClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t)) return this.each(function(e) { S(this).addClass(t.call(this, e, yt(this))) });
            if ((e = mt(t)).length)
                while (n = this[u++])
                    if (i = yt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                        a = 0;
                        while (o = e[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                        i !== (s = vt(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        removeClass: function(t) {
            var e, n, r, i, o, a, s, u = 0;
            if (m(t)) return this.each(function(e) { S(this).removeClass(t.call(this, e, yt(this))) });
            if (!arguments.length) return this.attr("class", "");
            if ((e = mt(t)).length)
                while (n = this[u++])
                    if (i = yt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
                        a = 0;
                        while (o = e[a++])
                            while (-1 < r.indexOf(" " + o + " ")) r = r.replace(" " + o + " ", " ");
                        i !== (s = vt(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        toggleClass: function(i, t) {
            var o = typeof i,
                a = "string" === o || Array.isArray(i);
            return "boolean" == typeof t && a ? t ? this.addClass(i) : this.removeClass(i) : m(i) ? this.each(function(e) { S(this).toggleClass(i.call(this, e, yt(this), t), t) }) : this.each(function() { var e, t, n, r; if (a) { t = 0, n = S(this), r = mt(i); while (e = r[t++]) n.hasClass(e) ? n.removeClass(e) : n.addClass(e) } else void 0 !== i && "boolean" !== o || ((e = yt(this)) && Y.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === i ? "" : Y.get(this, "__className__") || "")) })
        },
        hasClass: function(e) {
            var t, n, r = 0;
            t = " " + e + " ";
            while (n = this[r++])
                if (1 === n.nodeType && -1 < (" " + vt(yt(n)) + " ").indexOf(t)) return !0;
            return !1
        }
    });
    var xt = /\r/g;
    S.fn.extend({
        val: function(n) {
            var r, e, i, t = this[0];
            return arguments.length ? (i = m(n), this.each(function(e) {
                var t;
                1 === this.nodeType && (null == (t = i ? n.call(this, e, S(this).val()) : n) ? t = "" : "number" == typeof t ? t += "" : Array.isArray(t) && (t = S.map(t, function(e) { return null == e ? "" : e + "" })), (r = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set" in r && void 0 !== r.set(this, t, "value") || (this.value = t))
            })) : t ? (r = S.valHooks[t.type] || S.valHooks[t.nodeName.toLowerCase()]) && "get" in r && void 0 !== (e = r.get(t, "value")) ? e : "string" == typeof(e = t.value) ? e.replace(xt, "") : null == e ? "" : e : void 0
        }
    }), S.extend({
        valHooks: {
            option: { get: function(e) { var t = S.find.attr(e, "value"); return null != t ? t : vt(S.text(e)) } },
            select: {
                get: function(e) {
                    var t, n, r, i = e.options,
                        o = e.selectedIndex,
                        a = "select-one" === e.type,
                        s = a ? null : [],
                        u = a ? o + 1 : i.length;
                    for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                        if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !A(n.parentNode, "optgroup"))) {
                            if (t = S(n).val(), a) return t;
                            s.push(t)
                        }
                    return s
                },
                set: function(e, t) {
                    var n, r, i = e.options,
                        o = S.makeArray(t),
                        a = i.length;
                    while (a--)((r = i[a]).selected = -1 < S.inArray(S.valHooks.option.get(r), o)) && (n = !0);
                    return n || (e.selectedIndex = -1), o
                }
            }
        }
    }), S.each(["radio", "checkbox"], function() { S.valHooks[this] = { set: function(e, t) { if (Array.isArray(t)) return e.checked = -1 < S.inArray(S(e).val(), t) } }, y.checkOn || (S.valHooks[this].get = function(e) { return null === e.getAttribute("value") ? "on" : e.value }) }), y.focusin = "onfocusin" in C;
    var bt = /^(?:focusinfocus|focusoutblur)$/,
        wt = function(e) { e.stopPropagation() };
    S.extend(S.event, {
        trigger: function(e, t, n, r) {
            var i, o, a, s, u, l, c, f, p = [n || E],
                d = v.call(e, "type") ? e.type : e,
                h = v.call(e, "namespace") ? e.namespace.split(".") : [];
            if (o = f = a = n = n || E, 3 !== n.nodeType && 8 !== n.nodeType && !bt.test(d + S.event.triggered) && (-1 < d.indexOf(".") && (d = (h = d.split(".")).shift(), h.sort()), u = d.indexOf(":") < 0 && "on" + d, (e = e[S.expando] ? e : new S.Event(d, "object" == typeof e && e)).isTrigger = r ? 2 : 3, e.namespace = h.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : S.makeArray(t, [e]), c = S.event.special[d] || {}, r || !c.trigger || !1 !== c.trigger.apply(n, t))) {
                if (!r && !c.noBubble && !x(n)) {
                    for (s = c.delegateType || d, bt.test(s + d) || (o = o.parentNode); o; o = o.parentNode) p.push(o), a = o;
                    a === (n.ownerDocument || E) && p.push(a.defaultView || a.parentWindow || C)
                }
                i = 0;
                while ((o = p[i++]) && !e.isPropagationStopped()) f = o, e.type = 1 < i ? s : c.bindType || d, (l = (Y.get(o, "events") || Object.create(null))[e.type] && Y.get(o, "handle")) && l.apply(o, t), (l = u && o[u]) && l.apply && V(o) && (e.result = l.apply(o, t), !1 === e.result && e.preventDefault());
                return e.type = d, r || e.isDefaultPrevented() || c._default && !1 !== c._default.apply(p.pop(), t) || !V(n) || u && m(n[d]) && !x(n) && ((a = n[u]) && (n[u] = null), S.event.triggered = d, e.isPropagationStopped() && f.addEventListener(d, wt), n[d](), e.isPropagationStopped() && f.removeEventListener(d, wt), S.event.triggered = void 0, a && (n[u] = a)), e.result
            }
        },
        simulate: function(e, t, n) {
            var r = S.extend(new S.Event, n, { type: e, isSimulated: !0 });
            S.event.trigger(r, null, t)
        }
    }), S.fn.extend({ trigger: function(e, t) { return this.each(function() { S.event.trigger(e, t, this) }) }, triggerHandler: function(e, t) { var n = this[0]; if (n) return S.event.trigger(e, t, n, !0) } }), y.focusin || S.each({ focus: "focusin", blur: "focusout" }, function(n, r) {
        var i = function(e) { S.event.simulate(r, e.target, S.event.fix(e)) };
        S.event.special[r] = {
            setup: function() {
                var e = this.ownerDocument || this.document || this,
                    t = Y.access(e, r);
                t || e.addEventListener(n, i, !0), Y.access(e, r, (t || 0) + 1)
            },
            teardown: function() {
                var e = this.ownerDocument || this.document || this,
                    t = Y.access(e, r) - 1;
                t ? Y.access(e, r, t) : (e.removeEventListener(n, i, !0), Y.remove(e, r))
            }
        }
    });
    var Tt = C.location,
        Ct = { guid: Date.now() },
        Et = /\?/;
    S.parseXML = function(e) { var t; if (!e || "string" != typeof e) return null; try { t = (new C.DOMParser).parseFromString(e, "text/xml") } catch (e) { t = void 0 } return t && !t.getElementsByTagName("parsererror").length || S.error("Invalid XML: " + e), t };
    var St = /\[\]$/,
        kt = /\r?\n/g,
        At = /^(?:submit|button|image|reset|file)$/i,
        Nt = /^(?:input|select|textarea|keygen)/i;

    function Dt(n, e, r, i) {
        var t;
        if (Array.isArray(e)) S.each(e, function(e, t) { r || St.test(n) ? i(n, t) : Dt(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, r, i) });
        else if (r || "object" !== w(e)) i(n, e);
        else
            for (t in e) Dt(n + "[" + t + "]", e[t], r, i)
    }
    S.param = function(e, t) {
        var n, r = [],
            i = function(e, t) {
                var n = m(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
            };
        if (null == e) return "";
        if (Array.isArray(e) || e.jquery && !S.isPlainObject(e)) S.each(e, function() { i(this.name, this.value) });
        else
            for (n in e) Dt(n, e[n], t, i);
        return r.join("&")
    }, S.fn.extend({ serialize: function() { return S.param(this.serializeArray()) }, serializeArray: function() { return this.map(function() { var e = S.prop(this, "elements"); return e ? S.makeArray(e) : this }).filter(function() { var e = this.type; return this.name && !S(this).is(":disabled") && Nt.test(this.nodeName) && !At.test(e) && (this.checked || !pe.test(e)) }).map(function(e, t) { var n = S(this).val(); return null == n ? null : Array.isArray(n) ? S.map(n, function(e) { return { name: t.name, value: e.replace(kt, "\r\n") } }) : { name: t.name, value: n.replace(kt, "\r\n") } }).get() } });
    var jt = /%20/g,
        qt = /#.*$/,
        Lt = /([?&])_=[^&]*/,
        Ht = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Ot = /^(?:GET|HEAD)$/,
        Pt = /^\/\//,
        Rt = {},
        Mt = {},
        It = "*/".concat("*"),
        Wt = E.createElement("a");

    function Ft(o) {
        return function(e, t) {
            "string" != typeof e && (t = e, e = "*");
            var n, r = 0,
                i = e.toLowerCase().match(P) || [];
            if (m(t))
                while (n = i[r++]) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(t)) : (o[n] = o[n] || []).push(t)
        }
    }

    function Bt(t, i, o, a) {
        var s = {},
            u = t === Mt;

        function l(e) { var r; return s[e] = !0, S.each(t[e] || [], function(e, t) { var n = t(i, o, a); return "string" != typeof n || u || s[n] ? u ? !(r = n) : void 0 : (i.dataTypes.unshift(n), l(n), !1) }), r }
        return l(i.dataTypes[0]) || !s["*"] && l("*")
    }

    function $t(e, t) { var n, r, i = S.ajaxSettings.flatOptions || {}; for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]); return r && S.extend(!0, e, r), e }
    Wt.href = Tt.href, S.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: { url: Tt.href, type: "GET", isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Tt.protocol), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": It, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ }, responseFields: { xml: "responseXML", text: "responseText", json: "responseJSON" }, converters: { "* text": String, "text html": !0, "text json": JSON.parse, "text xml": S.parseXML }, flatOptions: { url: !0, context: !0 } },
        ajaxSetup: function(e, t) { return t ? $t($t(e, S.ajaxSettings), t) : $t(S.ajaxSettings, e) },
        ajaxPrefilter: Ft(Rt),
        ajaxTransport: Ft(Mt),
        ajax: function(e, t) {
            "object" == typeof e && (t = e, e = void 0), t = t || {};
            var c, f, p, n, d, r, h, g, i, o, v = S.ajaxSetup({}, t),
                y = v.context || v,
                m = v.context && (y.nodeType || y.jquery) ? S(y) : S.event,
                x = S.Deferred(),
                b = S.Callbacks("once memory"),
                w = v.statusCode || {},
                a = {},
                s = {},
                u = "canceled",
                T = {
                    readyState: 0,
                    getResponseHeader: function(e) {
                        var t;
                        if (h) {
                            if (!n) { n = {}; while (t = Ht.exec(p)) n[t[1].toLowerCase() + " "] = (n[t[1].toLowerCase() + " "] || []).concat(t[2]) }
                            t = n[e.toLowerCase() + " "]
                        }
                        return null == t ? null : t.join(", ")
                    },
                    getAllResponseHeaders: function() { return h ? p : null },
                    setRequestHeader: function(e, t) { return null == h && (e = s[e.toLowerCase()] = s[e.toLowerCase()] || e, a[e] = t), this },
                    overrideMimeType: function(e) { return null == h && (v.mimeType = e), this },
                    statusCode: function(e) {
                        var t;
                        if (e)
                            if (h) T.always(e[T.status]);
                            else
                                for (t in e) w[t] = [w[t], e[t]];
                        return this
                    },
                    abort: function(e) { var t = e || u; return c && c.abort(t), l(0, t), this }
                };
            if (x.promise(T), v.url = ((e || v.url || Tt.href) + "").replace(Pt, Tt.protocol + "//"), v.type = t.method || t.type || v.method || v.type, v.dataTypes = (v.dataType || "*").toLowerCase().match(P) || [""], null == v.crossDomain) { r = E.createElement("a"); try { r.href = v.url, r.href = r.href, v.crossDomain = Wt.protocol + "//" + Wt.host != r.protocol + "//" + r.host } catch (e) { v.crossDomain = !0 } }
            if (v.data && v.processData && "string" != typeof v.data && (v.data = S.param(v.data, v.traditional)), Bt(Rt, v, t, T), h) return T;
            for (i in (g = S.event && v.global) && 0 == S.active++ && S.event.trigger("ajaxStart"), v.type = v.type.toUpperCase(), v.hasContent = !Ot.test(v.type), f = v.url.replace(qt, ""), v.hasContent ? v.data && v.processData && 0 === (v.contentType || "").indexOf("application/x-www-form-urlencoded") && (v.data = v.data.replace(jt, "+")) : (o = v.url.slice(f.length), v.data && (v.processData || "string" == typeof v.data) && (f += (Et.test(f) ? "&" : "?") + v.data, delete v.data), !1 === v.cache && (f = f.replace(Lt, "$1"), o = (Et.test(f) ? "&" : "?") + "_=" + Ct.guid++ + o), v.url = f + o), v.ifModified && (S.lastModified[f] && T.setRequestHeader("If-Modified-Since", S.lastModified[f]), S.etag[f] && T.setRequestHeader("If-None-Match", S.etag[f])), (v.data && v.hasContent && !1 !== v.contentType || t.contentType) && T.setRequestHeader("Content-Type", v.contentType), T.setRequestHeader("Accept", v.dataTypes[0] && v.accepts[v.dataTypes[0]] ? v.accepts[v.dataTypes[0]] + ("*" !== v.dataTypes[0] ? ", " + It + "; q=0.01" : "") : v.accepts["*"]), v.headers) T.setRequestHeader(i, v.headers[i]);
            if (v.beforeSend && (!1 === v.beforeSend.call(y, T, v) || h)) return T.abort();
            if (u = "abort", b.add(v.complete), T.done(v.success), T.fail(v.error), c = Bt(Mt, v, t, T)) {
                if (T.readyState = 1, g && m.trigger("ajaxSend", [T, v]), h) return T;
                v.async && 0 < v.timeout && (d = C.setTimeout(function() { T.abort("timeout") }, v.timeout));
                try { h = !1, c.send(a, l) } catch (e) {
                    if (h) throw e;
                    l(-1, e)
                }
            } else l(-1, "No Transport");

            function l(e, t, n, r) {
                var i, o, a, s, u, l = t;
                h || (h = !0, d && C.clearTimeout(d), c = void 0, p = r || "", T.readyState = 0 < e ? 4 : 0, i = 200 <= e && e < 300 || 304 === e, n && (s = function(e, t, n) {
                    var r, i, o, a, s = e.contents,
                        u = e.dataTypes;
                    while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                    if (r)
                        for (i in s)
                            if (s[i] && s[i].test(r)) { u.unshift(i); break }
                    if (u[0] in n) o = u[0];
                    else {
                        for (i in n) {
                            if (!u[0] || e.converters[i + " " + u[0]]) { o = i; break }
                            a || (a = i)
                        }
                        o = o || a
                    }
                    if (o) return o !== u[0] && u.unshift(o), n[o]
                }(v, T, n)), !i && -1 < S.inArray("script", v.dataTypes) && (v.converters["text script"] = function() {}), s = function(e, t, n, r) {
                    var i, o, a, s, u, l = {},
                        c = e.dataTypes.slice();
                    if (c[1])
                        for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                    o = c.shift();
                    while (o)
                        if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
                            if ("*" === o) o = u;
                            else if ("*" !== u && u !== o) {
                        if (!(a = l[u + " " + o] || l["* " + o]))
                            for (i in l)
                                if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {!0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1])); break }
                        if (!0 !== a)
                            if (a && e["throws"]) t = a(t);
                            else try { t = a(t) } catch (e) { return { state: "parsererror", error: a ? e : "No conversion from " + u + " to " + o } }
                    }
                    return { state: "success", data: t }
                }(v, s, T, i), i ? (v.ifModified && ((u = T.getResponseHeader("Last-Modified")) && (S.lastModified[f] = u), (u = T.getResponseHeader("etag")) && (S.etag[f] = u)), 204 === e || "HEAD" === v.type ? l = "nocontent" : 304 === e ? l = "notmodified" : (l = s.state, o = s.data, i = !(a = s.error))) : (a = l, !e && l || (l = "error", e < 0 && (e = 0))), T.status = e, T.statusText = (t || l) + "", i ? x.resolveWith(y, [o, l, T]) : x.rejectWith(y, [T, l, a]), T.statusCode(w), w = void 0, g && m.trigger(i ? "ajaxSuccess" : "ajaxError", [T, v, i ? o : a]), b.fireWith(y, [T, l]), g && (m.trigger("ajaxComplete", [T, v]), --S.active || S.event.trigger("ajaxStop")))
            }
            return T
        },
        getJSON: function(e, t, n) { return S.get(e, t, n, "json") },
        getScript: function(e, t) { return S.get(e, void 0, t, "script") }
    }), S.each(["get", "post"], function(e, i) { S[i] = function(e, t, n, r) { return m(t) && (r = r || n, n = t, t = void 0), S.ajax(S.extend({ url: e, type: i, dataType: r, data: t, success: n }, S.isPlainObject(e) && e)) } }), S.ajaxPrefilter(function(e) { var t; for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "") }), S._evalUrl = function(e, t, n) { return S.ajax({ url: e, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, converters: { "text script": function() {} }, dataFilter: function(e) { S.globalEval(e, t, n) } }) }, S.fn.extend({
        wrapAll: function(e) { var t; return this[0] && (m(e) && (e = e.call(this[0])), t = S(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() { var e = this; while (e.firstElementChild) e = e.firstElementChild; return e }).append(this)), this },
        wrapInner: function(n) {
            return m(n) ? this.each(function(e) { S(this).wrapInner(n.call(this, e)) }) : this.each(function() {
                var e = S(this),
                    t = e.contents();
                t.length ? t.wrapAll(n) : e.append(n)
            })
        },
        wrap: function(t) { var n = m(t); return this.each(function(e) { S(this).wrapAll(n ? t.call(this, e) : t) }) },
        unwrap: function(e) { return this.parent(e).not("body").each(function() { S(this).replaceWith(this.childNodes) }), this }
    }), S.expr.pseudos.hidden = function(e) { return !S.expr.pseudos.visible(e) }, S.expr.pseudos.visible = function(e) { return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length) }, S.ajaxSettings.xhr = function() { try { return new C.XMLHttpRequest } catch (e) {} };
    var _t = { 0: 200, 1223: 204 },
        zt = S.ajaxSettings.xhr();
    y.cors = !!zt && "withCredentials" in zt, y.ajax = zt = !!zt, S.ajaxTransport(function(i) {
        var o, a;
        if (y.cors || zt && !i.crossDomain) return {
            send: function(e, t) {
                var n, r = i.xhr();
                if (r.open(i.type, i.url, i.async, i.username, i.password), i.xhrFields)
                    for (n in i.xhrFields) r[n] = i.xhrFields[n];
                for (n in i.mimeType && r.overrideMimeType && r.overrideMimeType(i.mimeType), i.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"), e) r.setRequestHeader(n, e[n]);
                o = function(e) { return function() { o && (o = a = r.onload = r.onerror = r.onabort = r.ontimeout = r.onreadystatechange = null, "abort" === e ? r.abort() : "error" === e ? "number" != typeof r.status ? t(0, "error") : t(r.status, r.statusText) : t(_t[r.status] || r.status, r.statusText, "text" !== (r.responseType || "text") || "string" != typeof r.responseText ? { binary: r.response } : { text: r.responseText }, r.getAllResponseHeaders())) } }, r.onload = o(), a = r.onerror = r.ontimeout = o("error"), void 0 !== r.onabort ? r.onabort = a : r.onreadystatechange = function() { 4 === r.readyState && C.setTimeout(function() { o && a() }) }, o = o("abort");
                try { r.send(i.hasContent && i.data || null) } catch (e) { if (o) throw e }
            },
            abort: function() { o && o() }
        }
    }), S.ajaxPrefilter(function(e) { e.crossDomain && (e.contents.script = !1) }), S.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /\b(?:java|ecma)script\b/ }, converters: { "text script": function(e) { return S.globalEval(e), e } } }), S.ajaxPrefilter("script", function(e) { void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET") }), S.ajaxTransport("script", function(n) { var r, i; if (n.crossDomain || n.scriptAttrs) return { send: function(e, t) { r = S("<script>").attr(n.scriptAttrs || {}).prop({ charset: n.scriptCharset, src: n.url }).on("load error", i = function(e) { r.remove(), i = null, e && t("error" === e.type ? 404 : 200, e.type) }), E.head.appendChild(r[0]) }, abort: function() { i && i() } } });
    var Ut, Xt = [],
        Vt = /(=)\?(?=&|$)|\?\?/;
    S.ajaxSetup({ jsonp: "callback", jsonpCallback: function() { var e = Xt.pop() || S.expando + "_" + Ct.guid++; return this[e] = !0, e } }), S.ajaxPrefilter("json jsonp", function(e, t, n) { var r, i, o, a = !1 !== e.jsonp && (Vt.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Vt.test(e.data) && "data"); if (a || "jsonp" === e.dataTypes[0]) return r = e.jsonpCallback = m(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Vt, "$1" + r) : !1 !== e.jsonp && (e.url += (Et.test(e.url) ? "&" : "?") + e.jsonp + "=" + r), e.converters["script json"] = function() { return o || S.error(r + " was not called"), o[0] }, e.dataTypes[0] = "json", i = C[r], C[r] = function() { o = arguments }, n.always(function() { void 0 === i ? S(C).removeProp(r) : C[r] = i, e[r] && (e.jsonpCallback = t.jsonpCallback, Xt.push(r)), o && m(i) && i(o[0]), o = i = void 0 }), "script" }), y.createHTMLDocument = ((Ut = E.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ut.childNodes.length), S.parseHTML = function(e, t, n) { return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (y.createHTMLDocument ? ((r = (t = E.implementation.createHTMLDocument("")).createElement("base")).href = E.location.href, t.head.appendChild(r)) : t = E), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = xe([e], t, o), o && o.length && S(o).remove(), S.merge([], i.childNodes))); var r, i, o }, S.fn.load = function(e, t, n) {
        var r, i, o, a = this,
            s = e.indexOf(" ");
        return -1 < s && (r = vt(e.slice(s)), e = e.slice(0, s)), m(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), 0 < a.length && S.ajax({ url: e, type: i || "GET", dataType: "html", data: t }).done(function(e) { o = arguments, a.html(r ? S("<div>").append(S.parseHTML(e)).find(r) : e) }).always(n && function(e, t) { a.each(function() { n.apply(this, o || [e.responseText, t, e]) }) }), this
    }, S.expr.pseudos.animated = function(t) { return S.grep(S.timers, function(e) { return t === e.elem }).length }, S.offset = {
        setOffset: function(e, t, n) {
            var r, i, o, a, s, u, l = S.css(e, "position"),
                c = S(e),
                f = {};
            "static" === l && (e.style.position = "relative"), s = c.offset(), o = S.css(e, "top"), u = S.css(e, "left"), ("absolute" === l || "fixed" === l) && -1 < (o + u).indexOf("auto") ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), m(t) && (t = t.call(e, n, S.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + i), "using" in t ? t.using.call(e, f) : ("number" == typeof f.top && (f.top += "px"), "number" == typeof f.left && (f.left += "px"), c.css(f))
        }
    }, S.fn.extend({
        offset: function(t) { if (arguments.length) return void 0 === t ? this : this.each(function(e) { S.offset.setOffset(this, t, e) }); var e, n, r = this[0]; return r ? r.getClientRects().length ? (e = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, { top: e.top + n.pageYOffset, left: e.left + n.pageXOffset }) : { top: 0, left: 0 } : void 0 },
        position: function() {
            if (this[0]) {
                var e, t, n, r = this[0],
                    i = { top: 0, left: 0 };
                if ("fixed" === S.css(r, "position")) t = r.getBoundingClientRect();
                else {
                    t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
                    while (e && (e === n.body || e === n.documentElement) && "static" === S.css(e, "position")) e = e.parentNode;
                    e && e !== r && 1 === e.nodeType && ((i = S(e).offset()).top += S.css(e, "borderTopWidth", !0), i.left += S.css(e, "borderLeftWidth", !0))
                }
                return { top: t.top - i.top - S.css(r, "marginTop", !0), left: t.left - i.left - S.css(r, "marginLeft", !0) }
            }
        },
        offsetParent: function() { return this.map(function() { var e = this.offsetParent; while (e && "static" === S.css(e, "position")) e = e.offsetParent; return e || re }) }
    }), S.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function(t, i) {
        var o = "pageYOffset" === i;
        S.fn[t] = function(e) {
            return $(this, function(e, t, n) {
                var r;
                if (x(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === n) return r ? r[i] : e[t];
                r ? r.scrollTo(o ? r.pageXOffset : n, o ? n : r.pageYOffset) : e[t] = n
            }, t, e, arguments.length)
        }
    }), S.each(["top", "left"], function(e, n) { S.cssHooks[n] = $e(y.pixelPosition, function(e, t) { if (t) return t = Be(e, n), Me.test(t) ? S(e).position()[n] + "px" : t }) }), S.each({ Height: "height", Width: "width" }, function(a, s) {
        S.each({ padding: "inner" + a, content: s, "": "outer" + a }, function(r, o) {
            S.fn[o] = function(e, t) {
                var n = arguments.length && (r || "boolean" != typeof e),
                    i = r || (!0 === e || !0 === t ? "margin" : "border");
                return $(this, function(e, t, n) { var r; return x(e) ? 0 === o.indexOf("outer") ? e["inner" + a] : e.document.documentElement["client" + a] : 9 === e.nodeType ? (r = e.documentElement, Math.max(e.body["scroll" + a], r["scroll" + a], e.body["offset" + a], r["offset" + a], r["client" + a])) : void 0 === n ? S.css(e, t, i) : S.style(e, t, n, i) }, s, n ? e : void 0, n)
            }
        })
    }), S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) { S.fn[t] = function(e) { return this.on(t, e) } }), S.fn.extend({ bind: function(e, t, n) { return this.on(e, null, t, n) }, unbind: function(e, t) { return this.off(e, null, t) }, delegate: function(e, t, n, r) { return this.on(t, e, n, r) }, undelegate: function(e, t, n) { return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n) }, hover: function(e, t) { return this.mouseenter(e).mouseleave(t || e) } }), S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, n) { S.fn[n] = function(e, t) { return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n) } });
    var Gt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
    S.proxy = function(e, t) { var n, r, i; if ("string" == typeof t && (n = e[t], t = e, e = n), m(e)) return r = s.call(arguments, 2), (i = function() { return e.apply(t || this, r.concat(s.call(arguments))) }).guid = e.guid = e.guid || S.guid++, i }, S.holdReady = function(e) { e ? S.readyWait++ : S.ready(!0) }, S.isArray = Array.isArray, S.parseJSON = JSON.parse, S.nodeName = A, S.isFunction = m, S.isWindow = x, S.camelCase = X, S.type = w, S.now = Date.now, S.isNumeric = function(e) { var t = S.type(e); return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e)) }, S.trim = function(e) { return null == e ? "" : (e + "").replace(Gt, "") }, "function" == typeof define && define.amd && define("jquery", [], function() { return S });
    var Yt = C.jQuery,
        Qt = C.$;
    return S.noConflict = function(e) { return C.$ === S && (C.$ = Qt), e && C.jQuery === S && (C.jQuery = Yt), S }, "undefined" == typeof e && (C.jQuery = C.$ = S), S
});;
/*!
 * jQuery Once v2.2.3 - http://github.com/robloach/jquery-once
 * @license MIT, GPL-2.0
 * http://opensource.org/licenses/MIT
 * http://opensource.org/licenses/GPL-2.0
 */
(function(e) { "use strict"; if (typeof exports === "object" && typeof exports.nodeName !== "string") { e(require("jquery")) } else if (typeof define === "function" && define.amd) { define(["jquery"], e) } else { e(jQuery) } })(function(t) {
    "use strict";
    var r = function(e) { e = e || "once"; if (typeof e !== "string") { throw new TypeError("The jQuery Once id parameter must be a string") } return e };
    t.fn.once = function(e) { var n = "jquery-once-" + r(e); return this.filter(function() { return t(this).data(n) !== true }).data(n, true) };
    t.fn.removeOnce = function(e) { return this.findOnce(e).removeData("jquery-once-" + r(e)) };
    t.fn.findOnce = function(e) { var n = "jquery-once-" + r(e); return this.filter(function() { return t(this).data(n) === true }) }
});
(function() {
    var settingsElement = document.querySelector('head > script[type="application/json"][data-drupal-selector="drupal-settings-json"], body > script[type="application/json"][data-drupal-selector="drupal-settings-json"]');
    window.drupalSettings = {};
    if (settingsElement !== null) { window.drupalSettings = JSON.parse(settingsElement.textContent); }
})();;
window.Drupal = { behaviors: {}, locale: {} };
(function(Drupal, drupalSettings, drupalTranslations, console, Proxy, Reflect) {
    Drupal.throwError = function(error) { setTimeout(function() { throw error; }, 0); };
    Drupal.attachBehaviors = function(context, settings) {
        context = context || document;
        settings = settings || drupalSettings;
        var behaviors = Drupal.behaviors;
        Object.keys(behaviors || {}).forEach(function(i) { if (typeof behaviors[i].attach === 'function') { try { behaviors[i].attach(context, settings); } catch (e) { Drupal.throwError(e); } } });
    };
    Drupal.detachBehaviors = function(context, settings, trigger) {
        context = context || document;
        settings = settings || drupalSettings;
        trigger = trigger || 'unload';
        var behaviors = Drupal.behaviors;
        Object.keys(behaviors || {}).forEach(function(i) { if (typeof behaviors[i].detach === 'function') { try { behaviors[i].detach(context, settings, trigger); } catch (e) { Drupal.throwError(e); } } });
    };
    Drupal.checkPlain = function(str) { str = str.toString().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;'); return str; };
    Drupal.formatString = function(str, args) {
        var processedArgs = {};
        Object.keys(args || {}).forEach(function(key) {
            switch (key.charAt(0)) {
                case '@':
                    processedArgs[key] = Drupal.checkPlain(args[key]);
                    break;
                case '!':
                    processedArgs[key] = args[key];
                    break;
                default:
                    processedArgs[key] = Drupal.theme('placeholder', args[key]);
                    break;
            }
        });
        return Drupal.stringReplace(str, processedArgs, null);
    };
    Drupal.stringReplace = function(str, args, keys) {
        if (str.length === 0) { return str; }
        if (!Array.isArray(keys)) {
            keys = Object.keys(args || {});
            keys.sort(function(a, b) { return a.length - b.length; });
        }
        if (keys.length === 0) { return str; }
        var key = keys.pop();
        var fragments = str.split(key);
        if (keys.length) { for (var i = 0; i < fragments.length; i++) { fragments[i] = Drupal.stringReplace(fragments[i], args, keys.slice(0)); } }
        return fragments.join(args[key]);
    };
    Drupal.t = function(str, args, options) {
        options = options || {};
        options.context = options.context || '';
        if (typeof drupalTranslations !== 'undefined' && drupalTranslations.strings && drupalTranslations.strings[options.context] && drupalTranslations.strings[options.context][str]) { str = drupalTranslations.strings[options.context][str]; }
        if (args) { str = Drupal.formatString(str, args); }
        return str;
    };
    Drupal.url = function(path) { return drupalSettings.path.baseUrl + drupalSettings.path.pathPrefix + path; };
    Drupal.url.toAbsolute = function(url) {
        var urlParsingNode = document.createElement('a');
        try { url = decodeURIComponent(url); } catch (e) {}
        urlParsingNode.setAttribute('href', url);
        return urlParsingNode.cloneNode(false).href;
    };
    Drupal.url.isLocal = function(url) {
        var absoluteUrl = Drupal.url.toAbsolute(url);
        var protocol = window.location.protocol;
        if (protocol === 'http:' && absoluteUrl.indexOf('https:') === 0) { protocol = 'https:'; }
        var baseUrl = protocol + '//' + window.location.host + drupalSettings.path.baseUrl.slice(0, -1);
        try { absoluteUrl = decodeURIComponent(absoluteUrl); } catch (e) {}
        try { baseUrl = decodeURIComponent(baseUrl); } catch (e) {}
        return absoluteUrl === baseUrl || absoluteUrl.indexOf(baseUrl + '/') === 0;
    };
    Drupal.formatPlural = function(count, singular, plural, args, options) {
        args = args || {};
        args['@count'] = count;
        var pluralDelimiter = drupalSettings.pluralDelimiter;
        var translations = Drupal.t(singular + pluralDelimiter + plural, args, options).split(pluralDelimiter);
        var index = 0;
        if (typeof drupalTranslations !== 'undefined' && drupalTranslations.pluralFormula) { index = count in drupalTranslations.pluralFormula ? drupalTranslations.pluralFormula[count] : drupalTranslations.pluralFormula.default; } else if (args['@count'] !== 1) { index = 1; }
        return translations[index];
    };
    Drupal.encodePath = function(item) { return window.encodeURIComponent(item).replace(/%2F/g, '/'); };
    Drupal.deprecationError = function(_ref) { var message = _ref.message; if (drupalSettings.suppressDeprecationErrors === false && typeof console !== 'undefined' && console.warn) { console.warn('[Deprecation] ' + message); } };
    Drupal.deprecatedProperty = function(_ref2) {
        var target = _ref2.target,
            deprecatedProperty = _ref2.deprecatedProperty,
            message = _ref2.message;
        if (!Proxy || !Reflect) { return target; }
        return new Proxy(target, {
            get: function get(target, key) {
                for (var _len = arguments.length, rest = Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) { rest[_key - 2] = arguments[_key]; }
                if (key === deprecatedProperty) { Drupal.deprecationError({ message: message }); }
                return Reflect.get.apply(Reflect, [target, key].concat(rest));
            }
        });
    };
    Drupal.theme = function(func) {
        if (func in Drupal.theme) {
            var _Drupal$theme;
            for (var _len2 = arguments.length, args = Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) { args[_key2 - 1] = arguments[_key2]; }
            return (_Drupal$theme = Drupal.theme)[func].apply(_Drupal$theme, args);
        }
    };
    Drupal.theme.placeholder = function(str) { return '<em class="placeholder">' + Drupal.checkPlain(str) + '</em>'; };
})(Drupal, window.drupalSettings, window.drupalTranslations, window.console, window.Proxy, window.Reflect);;
if (window.jQuery) { jQuery.noConflict(); }
document.documentElement.className += ' js';
(function(Drupal, drupalSettings) {
    var domReady = function domReady(callback) {
        if (document.readyState !== 'loading') { callback(); } else {
            var listener = function listener() {
                callback();
                document.removeEventListener('DOMContentLoaded', listener);
            };
            document.addEventListener('DOMContentLoaded', listener);
        }
    };
    domReady(function() { Drupal.attachBehaviors(document, drupalSettings); });
})(Drupal, window.drupalSettings);
(function($) { let headerMainPanelBottom = $(".c-header__main-panel-bottom"); if (headerMainPanelBottom) { let menuMobile = headerMainPanelBottom.find(".c-header__account-menu-desktop"); if (menuMobile) { menuMobile.addClass('c-header__account-menu-mobile').removeClass('c-header__account-menu-desktop'); } } })(jQuery);;
var u = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this;

function v() { v = function() {}, u.Symbol || (u.Symbol = A) }
var B = 0;

function A(t) { return "jscomp_symbol_" + (t || "") + B++ }! function(t) {
    function i(n) { if (e[n]) return e[n].T; var s = e[n] = { ja: n, fa: !1, T: {} }; return t[n].call(s.T, s, s.T, i), s.fa = !0, s.T }
    var e = {};
    i.u = t, i.h = e, i.c = function(t, e, n) { i.g(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: n }) }, i.r = function(t) { v(), v(), "undefined" != typeof Symbol && Symbol.toStringTag && (v(), Object.defineProperty(t, Symbol.toStringTag, { value: "Module" })), Object.defineProperty(t, "__esModule", { value: !0 }) }, i.m = function(t, e) {
        if (1 & e && (t = i(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.ba) return t;
        var n = Object.create(null);
        if (i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t)
            for (var s in t) i.c(n, s, function(i) { return t[i] }.bind(null, s));
        return n
    }, i.i = function(t) { var e = t && t.ba ? function() { return t.default } : function() { return t }; return i.c(e, "a", e), e }, i.g = function(t, i) { return Object.prototype.hasOwnProperty.call(t, i) }, i.o = "", i(i.v = 0)
}([function(t, i, e) {
    function n(t, i) {
        if (i = void 0 === i ? {} : i, this.h = t, this.g = this.g.bind(this), !a(this.h)) throw new TypeError("`new Drift` requires a DOM element as its first argument.");
        t = i.namespace || null;
        var e = i.showWhitespaceAtEdges || !1,
            n = i.containInline || !1,
            s = i.inlineOffsetX || 0,
            o = i.inlineOffsetY || 0,
            h = i.inlineContainer || document.body,
            r = i.sourceAttribute || "data-zoom",
            d = i.zoomFactor || 3,
            u = void 0 === i.paneContainer ? document.body : i.paneContainer,
            c = i.inlinePane || 375,
            f = !("handleTouch" in i) || !!i.handleTouch,
            p = i.onShow || null,
            l = i.onHide || null,
            b = !("injectBaseStyles" in i) || !!i.injectBaseStyles,
            v = i.hoverDelay || 0,
            m = i.touchDelay || 0,
            y = i.hoverBoundingBox || !1,
            g = i.touchBoundingBox || !1;
        if (i = i.boundingBoxContainer || document.body, !0 !== c && !a(u)) throw new TypeError("`paneContainer` must be a DOM element when `inlinePane !== true`");
        if (!a(h)) throw new TypeError("`inlineContainer` must be a DOM element");
        this.a = { j: t, P: e, I: n, K: s, L: o, w: h, R: r, f: d, ga: u, ea: c, C: f, O: p, N: l, da: b, F: v, A: m, D: y, G: g, H: i }, this.a.da && !document.querySelector(".drift-base-styles") && ((i = document.createElement("style")).type = "text/css", i.classList.add("drift-base-styles"), i.appendChild(document.createTextNode(".drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}")), (t = document.head).insertBefore(i, t.firstChild)), this.v(), this.u()
    }

    function s(t) {
        t = void 0 === t ? {} : t, this.h = this.h.bind(this), this.g = this.g.bind(this), this.m = this.m.bind(this), this.s = !1;
        var i = void 0 === t.J ? null : t.J,
            e = void 0 === t.f ? c() : t.f,
            n = void 0 === t.U ? c() : t.U,
            s = void 0 === t.j ? null : t.j,
            o = void 0 === t.P ? c() : t.P,
            h = void 0 === t.I ? c() : t.I;
        this.a = { J: i, f: e, U: n, j: s, P: o, I: h, K: void 0 === t.K ? 0 : t.K, L: void 0 === t.L ? 0 : t.L, w: void 0 === t.w ? document.body : t.w }, this.o = this.i("open"), this.Y = this.i("opening"), this.u = this.i("closing"), this.v = this.i("inline"), this.V = this.i("loading"), this.ha()
    }

    function o(t) {
        t = void 0 === t ? {} : t, this.m = this.m.bind(this), this.B = this.B.bind(this), this.g = this.g.bind(this), this.c = this.c.bind(this);
        var i = t;
        t = void 0 === i.b ? c() : i.b;
        var e = void 0 === i.l ? c() : i.l,
            n = void 0 === i.R ? c() : i.R,
            s = void 0 === i.C ? c() : i.C,
            o = void 0 === i.O ? null : i.O,
            a = void 0 === i.N ? null : i.N,
            r = void 0 === i.F ? 0 : i.F,
            d = void 0 === i.A ? 0 : i.A,
            u = void 0 === i.D ? c() : i.D,
            f = void 0 === i.G ? c() : i.G,
            p = void 0 === i.j ? null : i.j,
            l = void 0 === i.f ? c() : i.f;
        i = void 0 === i.H ? c() : i.H, this.a = { b: t, l: e, R: n, C: s, O: o, N: a, F: r, A: d, D: u, G: f, j: p, f: l, H: i }, (this.a.D || this.a.G) && (this.o = new h({ j: this.a.j, f: this.a.f, S: this.a.H })), this.enabled = !0, this.M()
    }

    function h(t) {
        this.s = !1;
        var i = void 0 === t.j ? null : t.j,
            e = void 0 === t.f ? c() : t.f;
        t = void 0 === t.S ? c() : t.S, this.a = { j: i, f: e, S: t }, this.c = this.g("open"), this.h()
    }

    function a(t) { return f ? t instanceof HTMLElement : t && "object" == typeof t && null !== t && 1 === t.nodeType && "string" == typeof t.nodeName }

    function r(t, i) { i.forEach(function(i) { t.classList.add(i) }) }

    function d(t, i) { i.forEach(function(i) { t.classList.remove(i) }) }

    function c() { throw Error("Missing parameter") }
    e.r(i);
    var f = "object" == typeof HTMLElement;
    h.prototype.g = function(t) {
        var i = ["drift-" + t],
            e = this.a.j;
        return e && i.push(e + "-" + t), i
    }, h.prototype.h = function() { this.b = document.createElement("div"), r(this.b, this.g("bounding-box")) }, h.prototype.show = function(t, i) {
        this.s = !0, this.a.S.appendChild(this.b);
        var e = this.b.style;
        e.width = Math.round(t / this.a.f) + "px", e.height = Math.round(i / this.a.f) + "px", r(this.b, this.c)
    }, h.prototype.W = function() { this.s && this.a.S.removeChild(this.b), this.s = !1, d(this.b, this.c) }, h.prototype.setPosition = function(t, i, e) {
        var n = window.pageXOffset,
            s = window.pageYOffset;
        t = e.left + t * e.width - this.b.clientWidth / 2 + n, i = e.top + i * e.height - this.b.clientHeight / 2 + s, t < e.left + n ? t = e.left + n : t + this.b.clientWidth > e.left + e.width + n && (t = e.left + e.width - this.b.clientWidth + n), i < e.top + s ? i = e.top + s : i + this.b.clientHeight > e.top + e.height + s && (i = e.top + e.height - this.b.clientHeight + s), this.b.style.left = t + "px", this.b.style.top = i + "px"
    }, o.prototype.i = function(t) { t.preventDefault() }, o.prototype.u = function(t) { this.a.A && this.V(t) && !this.s || t.preventDefault() }, o.prototype.V = function(t) { return !!t.touches }, o.prototype.M = function() { this.a.b.addEventListener("mouseenter", this.g, !1), this.a.b.addEventListener("mouseleave", this.B, !1), this.a.b.addEventListener("mousemove", this.c, !1), this.a.C ? (this.a.b.addEventListener("touchstart", this.g, !1), this.a.b.addEventListener("touchend", this.B, !1), this.a.b.addEventListener("touchmove", this.c, !1)) : (this.a.b.addEventListener("touchstart", this.i, !1), this.a.b.addEventListener("touchend", this.i, !1), this.a.b.addEventListener("touchmove", this.i, !1)) }, o.prototype.ca = function() { this.a.b.removeEventListener("mouseenter", this.g, !1), this.a.b.removeEventListener("mouseleave", this.B, !1), this.a.b.removeEventListener("mousemove", this.c, !1), this.a.C ? (this.a.b.removeEventListener("touchstart", this.g, !1), this.a.b.removeEventListener("touchend", this.B, !1), this.a.b.removeEventListener("touchmove", this.c, !1)) : (this.a.b.removeEventListener("touchstart", this.i, !1), this.a.b.removeEventListener("touchend", this.i, !1), this.a.b.removeEventListener("touchmove", this.i, !1)) }, o.prototype.g = function(t) { this.u(t), this.h = t, "mouseenter" == t.type && this.a.F ? this.v = setTimeout(this.m, this.a.F) : this.a.A ? this.v = setTimeout(this.m, this.a.A) : this.m() }, o.prototype.m = function() {
        if (this.enabled) {
            var t = this.a.O;
            t && "function" == typeof t && t(), this.a.l.show(this.a.b.getAttribute(this.a.R), this.a.b.clientWidth, this.a.b.clientHeight), this.h && ((t = this.h.touches) && this.a.G || !t && this.a.D) && this.o.show(this.a.l.b.clientWidth, this.a.l.b.clientHeight), this.c()
        }
    }, o.prototype.B = function(t) { t && this.u(t), this.h = null, this.v && clearTimeout(this.v), this.o && this.o.W(), (t = this.a.N) && "function" == typeof t && t(), this.a.l.W() }, o.prototype.c = function(t) {
        if (t) this.u(t), this.h = t;
        else {
            if (!this.h) return;
            t = this.h
        }
        if (t.touches) var i = (t = t.touches[0]).clientX,
            e = t.clientY;
        else i = t.clientX, e = t.clientY;
        i = (i - (t = this.a.b.getBoundingClientRect()).left) / this.a.b.clientWidth, e = (e - t.top) / this.a.b.clientHeight, this.o && this.o.setPosition(i, e, t), this.a.l.setPosition(i, e, t)
    }, u.Object.defineProperties(o.prototype, { s: { configurable: !0, enumerable: !0, get: function() { return this.a.l.s } } }), t = document.createElement("div").style;
    var p = "undefined" != typeof document && ("animation" in t || "webkitAnimation" in t);
    s.prototype.i = function(t) {
        var i = ["drift-" + t],
            e = this.a.j;
        return e && i.push(e + "-" + t), i
    }, s.prototype.ha = function() {
        this.b = document.createElement("div"), r(this.b, this.i("zoom-pane"));
        var t = document.createElement("div");
        r(t, this.i("zoom-pane-loader")), this.b.appendChild(t), this.c = document.createElement("img"), this.b.appendChild(this.c)
    }, s.prototype.X = function(t) { this.c.setAttribute("src", t) }, s.prototype.Z = function(t, i) { this.c.style.width = t * this.a.f + "px", this.c.style.height = i * this.a.f + "px" }, s.prototype.setPosition = function(t, i, e) {
        var n = this.c.offsetWidth,
            s = this.c.offsetHeight,
            o = this.b.offsetWidth,
            h = this.b.offsetHeight,
            a = o / 2 - n * t,
            r = h / 2 - s * i,
            d = o - n,
            u = h - s,
            c = 0 < d,
            f = 0 < u;
        s = c ? d / 2 : 0, n = f ? u / 2 : 0, d = c ? d / 2 : d, u = f ? u / 2 : u, this.b.parentElement === this.a.w && (f = window.pageXOffset, c = window.pageYOffset, t = e.left + t * e.width - o / 2 + this.a.K + f, i = e.top + i * e.height - h / 2 + this.a.L + c, this.a.I && (t < e.left + f ? t = e.left + f : t + o > e.left + e.width + f && (t = e.left + e.width - o + f), i < e.top + c ? i = e.top + c : i + h > e.top + e.height + c && (i = e.top + e.height - h + c)), this.b.style.left = t + "px", this.b.style.top = i + "px"), this.a.P || (a > s ? a = s : a < d && (a = d), r > n ? r = n : r < u && (r = u)), this.c.style.transform = "translate(" + a + "px, " + r + "px)", this.c.style.webkitTransform = "translate(" + a + "px, " + r + "px)"
    }, s.prototype.M = function() { this.b.removeEventListener("animationend", this.h, !1), this.b.removeEventListener("animationend", this.g, !1), this.b.removeEventListener("webkitAnimationEnd", this.h, !1), this.b.removeEventListener("webkitAnimationEnd", this.g, !1), d(this.b, this.o), d(this.b, this.u) }, s.prototype.show = function(t, i, e) { this.M(), this.s = !0, r(this.b, this.o), this.c.getAttribute("src") != t && (r(this.b, this.V), this.c.addEventListener("load", this.m, !1), this.X(t)), this.Z(i, e), this.ia ? this.aa() : this.$(), p && (this.b.addEventListener("animationend", this.h, !1), this.b.addEventListener("webkitAnimationEnd", this.h, !1), r(this.b, this.Y)) }, s.prototype.aa = function() { this.a.w.appendChild(this.b), r(this.b, this.v) }, s.prototype.$ = function() { this.a.J.appendChild(this.b) }, s.prototype.W = function() { this.M(), this.s = !1, p ? (this.b.addEventListener("animationend", this.g, !1), this.b.addEventListener("webkitAnimationEnd", this.g, !1), r(this.b, this.u)) : (d(this.b, this.o), d(this.b, this.v)) }, s.prototype.h = function() { this.b.removeEventListener("animationend", this.h, !1), this.b.removeEventListener("webkitAnimationEnd", this.h, !1), d(this.b, this.Y) }, s.prototype.g = function() { this.b.removeEventListener("animationend", this.g, !1), this.b.removeEventListener("webkitAnimationEnd", this.g, !1), d(this.b, this.o), d(this.b, this.u), d(this.b, this.v), this.b.setAttribute("style", ""), this.b.parentElement === this.a.J ? this.a.J.removeChild(this.b) : this.b.parentElement === this.a.w && this.a.w.removeChild(this.b) }, s.prototype.m = function() { this.c.removeEventListener("load", this.m, !1), d(this.b, this.V) }, u.Object.defineProperties(s.prototype, { ia: { configurable: !0, enumerable: !0, get: function() { var t = this.a.U; return !0 === t || "number" == typeof t && window.innerWidth <= t } } }), n.prototype.v = function() { this.l = new s({ J: this.a.ga, f: this.a.f, P: this.a.P, I: this.a.I, U: this.a.ea, j: this.a.j, K: this.a.K, L: this.a.L, w: this.a.w }) }, n.prototype.u = function() { this.c = new o({ b: this.h, l: this.l, C: this.a.C, O: this.a.O, N: this.a.N, R: this.a.R, F: this.a.F, A: this.a.A, D: this.a.D, G: this.a.G, j: this.a.j, f: this.a.f, H: this.a.H }) }, n.prototype.M = function(t) { this.l.X(t) }, n.prototype.i = function() { this.c.enabled = !1 }, n.prototype.m = function() { this.c.enabled = !0 }, n.prototype.g = function() { this.c.B(), this.c.ca() }, u.Object.defineProperties(n.prototype, { s: { configurable: !0, enumerable: !0, get: function() { return this.l.s } }, f: { configurable: !0, enumerable: !0, get: function() { return this.a.f }, set: function(t) { this.a.f = t, this.l.a.f = t, this.c.a.f = t, this.o.a.f = t } } }), Object.defineProperty(n.prototype, "isShowing", { get: function() { return this.s } }), Object.defineProperty(n.prototype, "zoomFactor", { get: function() { return this.f }, set: function(t) { this.f = t } }), n.prototype.setZoomImageURL = n.prototype.M, n.prototype.disable = n.prototype.i, n.prototype.enable = n.prototype.m, n.prototype.destroy = n.prototype.g, window.Drift = n
}]);
! function(t, n) { "object" == typeof exports && "object" == typeof module ? module.exports = n() : "function" == typeof define && define.amd ? define([], n) : "object" == typeof exports ? exports.animateCSSGrid = n() : t.animateCSSGrid = n() }(window, (function() {
    return function(t) {
        var n = {};

        function r(e) { if (n[e]) return n[e].exports; var o = n[e] = { i: e, l: !1, exports: {} }; return t[e].call(o.exports, o, o.exports, r), o.l = !0, o.exports }
        return r.m = t, r.c = n, r.d = function(t, n, e) { r.o(t, n) || Object.defineProperty(t, n, { enumerable: !0, get: e }) }, r.r = function(t) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(t, "__esModule", { value: !0 }) }, r.t = function(t, n) {
            if (1 & n && (t = r(t)), 8 & n) return t;
            if (4 & n && "object" == typeof t && t && t.__esModule) return t;
            var e = Object.create(null);
            if (r.r(e), Object.defineProperty(e, "default", { enumerable: !0, value: t }), 2 & n && "string" != typeof t)
                for (var o in t) r.d(e, o, function(n) { return t[n] }.bind(null, o));
            return e
        }, r.n = function(t) { var n = t && t.__esModule ? function() { return t.default } : function() { return t }; return r.d(n, "a", n), n }, r.o = function(t, n) { return Object.prototype.hasOwnProperty.call(t, n) }, r.p = "", r(r.s = 14)
    }([function(t, n) { t.exports = function(t) { var n = typeof t; return null != t && ("object" == n || "function" == n) } }, function(t, n, r) {
        var e = r(4),
            o = r(0),
            i = "Expected a function";
        t.exports = function(t, n, r) {
            var u = !0,
                a = !0;
            if ("function" != typeof t) throw new TypeError(i);
            return o(r) && (u = "leading" in r ? !!r.leading : u, a = "trailing" in r ? !!r.trailing : a), e(t, n, { leading: u, maxWait: n, trailing: a })
        }
    }, function(t, n, r) {
        var e = r(6),
            o = "object" == typeof self && self && self.Object === Object && self,
            i = e || o || Function("return this")();
        t.exports = i
    }, function(t, n, r) {
        var e = r(2).Symbol;
        t.exports = e
    }, function(t, n, r) {
        var e = r(0),
            o = r(5),
            i = r(8),
            u = "Expected a function",
            a = Math.max,
            c = Math.min;
        t.exports = function(t, n, r) {
            var f, s, p, l, d, v, h = 0,
                m = !1,
                g = !1,
                y = !0;
            if ("function" != typeof t) throw new TypeError(u);

            function b(n) {
                var r = f,
                    e = s;
                return f = s = void 0, h = n, l = t.apply(e, r)
            }

            function w(t) { var r = t - v; return void 0 === v || r >= n || r < 0 || g && t - h >= p }

            function O() {
                var t = o();
                if (w(t)) return x(t);
                d = setTimeout(O, function(t) { var r = n - (t - v); return g ? c(r, p - (t - h)) : r }(t))
            }

            function x(t) { return d = void 0, y && f ? b(t) : (f = s = void 0, l) }

            function j() {
                var t = o(),
                    r = w(t);
                if (f = arguments, s = this, v = t, r) { if (void 0 === d) return function(t) { return h = t, d = setTimeout(O, n), m ? b(t) : l }(v); if (g) return clearTimeout(d), d = setTimeout(O, n), b(v) }
                return void 0 === d && (d = setTimeout(O, n)), l
            }
            return n = i(n) || 0, e(r) && (m = !!r.leading, p = (g = "maxWait" in r) ? a(i(r.maxWait) || 0, n) : p, y = "trailing" in r ? !!r.trailing : y), j.cancel = function() { void 0 !== d && clearTimeout(d), h = 0, f = v = s = d = void 0 }, j.flush = function() { return void 0 === d ? l : x(o()) }, j
        }
    }, function(t, n, r) {
        var e = r(2);
        t.exports = function() { return e.Date.now() }
    }, function(t, n, r) {
        (function(n) {
            var r = "object" == typeof n && n && n.Object === Object && n;
            t.exports = r
        }).call(this, r(7))
    }, function(t, n) {
        var r;
        r = function() { return this }();
        try { r = r || new Function("return this")() } catch (t) { "object" == typeof window && (r = window) }
        t.exports = r
    }, function(t, n, r) {
        var e = r(0),
            o = r(9),
            i = NaN,
            u = /^\s+|\s+$/g,
            a = /^[-+]0x[0-9a-f]+$/i,
            c = /^0b[01]+$/i,
            f = /^0o[0-7]+$/i,
            s = parseInt;
        t.exports = function(t) {
            if ("number" == typeof t) return t;
            if (o(t)) return i;
            if (e(t)) {
                var n = "function" == typeof t.valueOf ? t.valueOf() : t;
                t = e(n) ? n + "" : n
            }
            if ("string" != typeof t) return 0 === t ? t : +t;
            t = t.replace(u, "");
            var r = c.test(t);
            return r || f.test(t) ? s(t.slice(2), r ? 2 : 8) : a.test(t) ? i : +t
        }
    }, function(t, n, r) {
        var e = r(10),
            o = r(13),
            i = "[object Symbol]";
        t.exports = function(t) { return "symbol" == typeof t || o(t) && e(t) == i }
    }, function(t, n, r) {
        var e = r(3),
            o = r(11),
            i = r(12),
            u = "[object Null]",
            a = "[object Undefined]",
            c = e ? e.toStringTag : void 0;
        t.exports = function(t) { return null == t ? void 0 === t ? a : u : c && c in Object(t) ? o(t) : i(t) }
    }, function(t, n, r) {
        var e = r(3),
            o = Object.prototype,
            i = o.hasOwnProperty,
            u = o.toString,
            a = e ? e.toStringTag : void 0;
        t.exports = function(t) {
            var n = i.call(t, a),
                r = t[a];
            try { t[a] = void 0; var e = !0 } catch (t) {}
            var o = u.call(t);
            return e && (n ? t[a] = r : delete t[a]), o
        }
    }, function(t, n) {
        var r = Object.prototype.toString;
        t.exports = function(t) { return r.call(t) }
    }, function(t, n) { t.exports = function(t) { return null != t && "object" == typeof t } }, function(t, n, r) {
        "use strict";
        r.r(n);
        var e = function(t) { return function(n) { return 1 - t(1 - n) } },
            o = function(t) { return function(n) { return n <= .5 ? t(2 * n) / 2 : (2 - t(2 * (1 - n))) / 2 } },
            i = function(t) { return function(n) { return n * n * ((t + 1) * n - t) } },
            u = function(t) { var n = i(t); return function(t) { return (t *= 2) < 1 ? .5 * n(t) : .5 * (2 - Math.pow(2, -10 * (t - 1))) } },
            a = function(t) { return function(n) { return Math.pow(n, t) } }(2),
            c = e(a),
            f = o(a),
            s = function(t) { return 1 - Math.sin(Math.acos(t)) },
            p = e(s),
            l = o(p),
            d = i(1.525),
            v = e(d),
            h = o(d),
            m = u(1.525);
        var g, y = 0,
            b = "undefined" != typeof window && void 0 !== window.requestAnimationFrame ? function(t) { return window.requestAnimationFrame(t) } : function(t) {
                var n = Date.now(),
                    r = Math.max(0, 16.7 - (n - y));
                y = n + r, setTimeout((function() { return t(y) }), r)
            };
        ! function(t) { t.Read = "read", t.Update = "update", t.Render = "render", t.PostRender = "postRender", t.FixedUpdate = "fixedUpdate" }(g || (g = {}));
        var w = 1 / 60 * 1e3,
            O = !0,
            x = !1,
            j = !1,
            M = { delta: 0, timestamp: 0 },
            P = [g.Read, g.Update, g.Render, g.PostRender],
            C = function(t) { return x = t },
            S = P.reduce((function(t, n) {
                var r, e, o, i, u, a, c, f, s, p = (r = C, e = [], o = [], i = 0, u = !1, a = 0, c = new WeakSet, f = new WeakSet, s = {
                    cancel: function(t) {
                        var n = o.indexOf(t);
                        c.add(t), -1 !== n && o.splice(n, 1)
                    },
                    process: function(t) {
                        var n, p;
                        if (u = !0, e = (n = [o, e])[0], (o = n[1]).length = 0, i = e.length)
                            for (a = 0; a < i; a++)(p = e[a])(t), !0 !== f.has(p) || c.has(p) || (s.schedule(p), r(!0));
                        u = !1
                    },
                    schedule: function(t, n, r) {
                        var a = r && u,
                            c = a ? e : o;
                        n && f.add(t), -1 === c.indexOf(t) && (c.push(t), a && (i = e.length))
                    }
                });
                return t.sync[n] = function(t, n, r) { return void 0 === n && (n = !1), void 0 === r && (r = !1), x || k(), p.schedule(t, n, r), t }, t.cancelSync[n] = function(t) { return p.cancel(t) }, t.steps[n] = p, t
            }), { steps: {}, sync: {}, cancelSync: {} }),
            A = S.steps,
            E = S.sync,
            T = S.cancelSync,
            X = function(t) { return A[t].process(M) },
            Y = function(t) { x = !1, M.delta = O ? w : Math.max(Math.min(t - M.timestamp, 40), 1), O || (w = M.delta), M.timestamp = t, j = !0, P.forEach(X), j = !1, x && (O = !1, b(Y)) },
            k = function() { x = !0, O = !0, j || b(Y) },
            R = E,
            _ = r(1),
            F = r.n(_),
            I = function(t, n) {
                return (I = Object.setPrototypeOf || { __proto__: [] }
                    instanceof Array && function(t, n) { t.__proto__ = n } || function(t, n) { for (var r in n) n.hasOwnProperty(r) && (t[r] = n[r]) })(t, n)
            };

        function $(t, n) {
            function r() { this.constructor = t }
            I(t, n), t.prototype = null === n ? Object.create(n) : (r.prototype = n.prototype, new r)
        }
        var N = function() {
            return (N = Object.assign || function(t) {
                for (var n, r = 1, e = arguments.length; r < e; r++)
                    for (var o in n = arguments[r]) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o]);
                return t
            }).apply(this, arguments)
        };

        function G(t, n) { var r = {}; for (var e in t) Object.prototype.hasOwnProperty.call(t, e) && n.indexOf(e) < 0 && (r[e] = t[e]); if (null != t && "function" == typeof Object.getOwnPropertySymbols) { var o = 0; for (e = Object.getOwnPropertySymbols(t); o < e.length; o++) n.indexOf(e[o]) < 0 && (r[e[o]] = t[e[o]]) } return r }
        /*! *****************************************************************************
        Copyright (c) Microsoft Corporation. All rights reserved.
        Licensed under the Apache License, Version 2.0 (the "License"); you may not use
        this file except in compliance with the License. You may obtain a copy of the
        License at http://www.apache.org/licenses/LICENSE-2.0
        THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
        KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
        WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
        MERCHANTABLITY OR NON-INFRINGEMENT.
        See the Apache Version 2.0 License for specific language governing permissions
        and limitations under the License.
        ***************************************************************************** */
        var L = function() {
                return (L = Object.assign || function(t) {
                    for (var n, r = 1, e = arguments.length; r < e; r++)
                        for (var o in n = arguments[r]) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o]);
                    return t
                }).apply(this, arguments)
            },
            B = function(t, n) { return function(r) { return Math.max(Math.min(r, n), t) } },
            W = function(t) { return function(n) { return "string" == typeof n && 0 === n.indexOf(t) } },
            q = function(t) { return t % 1 ? Number(t.toFixed(5)) : t },
            U = { test: function(t) { return "number" == typeof t }, parse: parseFloat, transform: function(t) { return t } },
            V = (L({}, U, { transform: B(0, 1) }), L({}, U, { default: 1 }), function(t) { return { test: function(n) { return "string" == typeof n && n.endsWith(t) && 1 === n.split(" ").length }, parse: parseFloat, transform: function(n) { return "" + n + t } } }),
            z = V("deg"),
            D = V("%"),
            K = V("px"),
            H = V("vh"),
            J = V("vw"),
            Q = B(0, 255),
            Z = /^(#[0-9a-f]{3}|#(?:[0-9a-f]{2}){2,4}|(rgb|hsl)a?\((-?\d+%?[,\s]+){2,3}\s*[\d\.]+%?\))$/i,
            tt = function(t) { return void 0 !== t.red },
            nt = function(t) { return void 0 !== t.hue },
            rt = function(t) { var n = t.length; return function(r) { if ("string" != typeof r) return r; for (var e, o = {}, i = function(t) { return "string" == typeof t ? t.split(/,\s*/) : [t] }((e = r).substring(e.indexOf("(") + 1, e.lastIndexOf(")"))), u = 0; u < n; u++) o[t[u]] = void 0 !== i[u] ? parseFloat(i[u]) : 1; return o } },
            et = L({}, U, { transform: function(t) { return Math.round(Q(t)) } }),
            ot = W("rgb"),
            it = {
                test: function(t) { return "string" == typeof t ? ot(t) : tt(t) },
                parse: rt(["red", "green", "blue", "alpha"]),
                transform: function(t) {
                    var n = t.red,
                        r = t.green,
                        e = t.blue,
                        o = t.alpha;
                    return function(t) {
                        var n = t.red,
                            r = t.green,
                            e = t.blue,
                            o = t.alpha;
                        return "rgba(" + n + ", " + r + ", " + e + ", " + (void 0 === o ? 1 : o) + ")"
                    }({ red: et.transform(n), green: et.transform(r), blue: et.transform(e), alpha: q(o) })
                }
            },
            ut = W("hsl"),
            at = {
                test: function(t) { return "string" == typeof t ? ut(t) : nt(t) },
                parse: rt(["hue", "saturation", "lightness", "alpha"]),
                transform: function(t) {
                    var n = t.hue,
                        r = t.saturation,
                        e = t.lightness,
                        o = t.alpha;
                    return function(t) {
                        var n = t.hue,
                            r = t.saturation,
                            e = t.lightness,
                            o = t.alpha;
                        return "hsla(" + n + ", " + r + ", " + e + ", " + (void 0 === o ? 1 : o) + ")"
                    }({ hue: Math.round(n), saturation: D.transform(q(r)), lightness: D.transform(q(e)), alpha: q(o) })
                }
            },
            ct = L({}, it, {
                test: W("#"),
                parse: function(t) {
                    var n = "",
                        r = "",
                        e = "";
                    return t.length > 4 ? (n = t.substr(1, 2), r = t.substr(3, 2), e = t.substr(5, 2)) : (n = t.substr(1, 1), r = t.substr(2, 1), e = t.substr(3, 1), n += n, r += r, e += e), { red: parseInt(n, 16), green: parseInt(r, 16), blue: parseInt(e, 16), alpha: 1 }
                }
            }),
            ft = { test: function(t) { return "string" == typeof t && Z.test(t) || it.test(t) || at.test(t) || ct.test(t) }, parse: function(t) { return it.test(t) ? it.parse(t) : at.test(t) ? at.parse(t) : ct.test(t) ? ct.parse(t) : t }, transform: function(t) { return tt(t) ? it.transform(t) : nt(t) ? at.transform(t) : t } },
            st = /(-)?(\d[\d\.]*)/g,
            pt = /(#[0-9a-f]{6}|#[0-9a-f]{3}|#(?:[0-9a-f]{2}){2,4}|(rgb|hsl)a?\((-?\d+%?[,\s]+){2,3}\s*[\d\.]+%?\))/gi,
            lt = function(t) {
                if ("string" != typeof t || !isNaN(t)) return !1;
                var n = 0,
                    r = t.match(st),
                    e = t.match(pt);
                return r && (n += r.length), e && (n += e.length), n > 0
            },
            dt = function(t) {
                var n = t,
                    r = [],
                    e = n.match(pt);
                e && (n = n.replace(pt, "${c}"), r.push.apply(r, e.map(ft.parse)));
                var o = n.match(st);
                return o && r.push.apply(r, o.map(U.parse)), r
            },
            vt = function(t) {
                var n = t,
                    r = 0,
                    e = t.match(pt),
                    o = e ? e.length : 0;
                if (e)
                    for (var i = 0; i < o; i++) n = n.replace(e[i], "${c}"), r++;
                var u = n.match(st),
                    a = u ? u.length : 0;
                if (u)
                    for (i = 0; i < a; i++) n = n.replace(u[i], "${n}"), r++;
                return function(t) { for (var e = n, i = 0; i < r; i++) e = e.replace(i < o ? "${c}" : "${n}", i < o ? ft.transform(t[i]) : q(t[i])); return e }
            };
        var ht = function(t) { return "number" == typeof t },
            mt = function(t) { return function(n, r, e) { return void 0 !== e ? t(n, r, e) : function(e) { return t(n, r, e) } } },
            gt = mt((function(t, n, r) { return Math.min(Math.max(r, t), n) })),
            yt = function(t, n, r) { var e = n - t; return 0 === e ? 1 : (r - t) / e },
            bt = function(t, n, r) { return -r * t + r * n + t },
            wt = function() {
                return (wt = Object.assign || function(t) {
                    for (var n, r = 1, e = arguments.length; r < e; r++)
                        for (var o in n = arguments[r]) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o]);
                    return t
                }).apply(this, arguments)
            },
            Ot = function(t, n, r) {
                var e = t * t,
                    o = n * n;
                return Math.sqrt(r * (o - e) + e)
            },
            xt = [ct, it, at],
            jt = function(t) { return xt.find((function(n) { return n.test(t) })) },
            Mt = function(t, n) {
                var r = jt(t),
                    e = jt(n);
                r.transform, e.transform;
                var o = r.parse(t),
                    i = e.parse(n),
                    u = wt({}, o),
                    a = r === at ? bt : Ot;
                return function(t) { for (var n in u) "alpha" !== n && (u[n] = a(o[n], i[n], t)); return u.alpha = bt(o.alpha, i.alpha, t), r.transform(u) }
            },
            Pt = function(t, n) { return function(r) { return n(t(r)) } },
            Ct = function() { for (var t = [], n = 0; n < arguments.length; n++) t[n] = arguments[n]; return t.reduce(Pt) },
            St = function(t, n) {
                var r = t.slice(),
                    e = r.length,
                    o = t.map((function(t, r) { var e = n[r]; return ht(t) ? function(n) { return bt(t, e, n) } : ft.test(t) ? Mt(t, e) : At(t, e) }));
                return function(t) { for (var n = 0; n < e; n++) r[n] = o[n](t); return r }
            },
            At = function(t, n) { var r = vt(t); return r(t), vt(n)(t), Ct(St(dt(t), dt(n)), r) },
            Et = (mt(bt), function(t) { return t }),
            Tt = function(t) {
                return void 0 === t && (t = Et), mt((function(n, r, e) {
                    var o = r - e,
                        i = -(0 - n + 1) * (0 - t(Math.abs(o)));
                    return o <= 0 ? r + i : r - i
                }))
            },
            Xt = (Tt(), Tt(Math.sqrt), mt((function(t, n, r) { var e = n - t; return ((r - t) % e + e) % e + t })), gt(0, 1), function(t) { return function(n) { return 1 - t(1 - n) } }),
            Yt = function(t) { return t },
            kt = function(t) { return function(n) { return Math.pow(n, t) } }(2),
            Rt = Xt(kt);
        var _t = function() {
                function t(t) { void 0 === t && (t = {}), this.props = t }
                return t.prototype.applyMiddleware = function(t) { return this.create(N({}, this.props, { middleware: this.props.middleware ? [t].concat(this.props.middleware) : [t] })) }, t.prototype.pipe = function() { for (var t = [], n = 0; n < arguments.length; n++) t[n] = arguments[n]; var r = 1 === t.length ? t[0] : Ct.apply(void 0, t); return this.applyMiddleware((function(t) { return function(n) { return t(r(n)) } })) }, t.prototype.while = function(t) { return this.applyMiddleware((function(n, r) { return function(e) { return t(e) ? n(e) : r() } })) }, t.prototype.filter = function(t) { return this.applyMiddleware((function(n) { return function(r) { return t(r) && n(r) } })) }, t
            }(),
            Ft = function() {
                return function(t, n) {
                    var r = t.middleware,
                        e = t.onComplete,
                        o = this;
                    this.isActive = !0, this.update = function(t) { o.observer.update && o.updateObserver(t) }, this.complete = function() { o.observer.complete && o.isActive && o.observer.complete(), o.onComplete && o.onComplete(), o.isActive = !1 }, this.error = function(t) { o.observer.error && o.isActive && o.observer.error(t), o.isActive = !1 }, this.observer = n, this.updateObserver = function(t) { return n.update(t) }, this.onComplete = e, n.update && r && r.length && r.forEach((function(t) { return o.updateObserver = t(o.updateObserver, o.complete) }))
                }
            }(),
            It = function(t, n, r) { var e = n.middleware; return new Ft({ middleware: e, onComplete: r }, "function" == typeof t ? { update: t } : t) },
            $t = function(t) {
                function n() { return null !== t && t.apply(this, arguments) || this }
                return $(n, t), n.prototype.create = function(t) { return new n(t) }, n.prototype.start = function(t) {
                    void 0 === t && (t = {});
                    var n = !1,
                        r = { stop: function() {} },
                        e = this.props,
                        o = e.init,
                        i = G(e, ["init"]),
                        u = o(It(t, i, (function() { n = !0, r.stop() })));
                    return r = u ? N({}, r, u) : r, t.registerParent && t.registerParent(r), n && r.stop(), r
                }, n
            }(_t),
            Nt = function(t) { return new $t({ init: t }) },
            Gt = function(t) {
                var n = t.getCount,
                    r = t.getFirst,
                    e = t.getOutput,
                    o = t.mapApi,
                    i = t.setProp,
                    u = t.startActions;
                return function(t) {
                    return Nt((function(a) {
                        var c = a.update,
                            f = a.complete,
                            s = a.error,
                            p = n(t),
                            l = e(),
                            d = function() { return c(l) },
                            v = 0,
                            h = u(t, (function(t, n) { var r = !1; return t.start({ complete: function() { r || (r = !0, ++v === p && R.update(f)) }, error: s, update: function(t) { i(l, n, t), R.update(d, !1, !0) } }) }));
                        return Object.keys(r(h)).reduce((function(t, n) { return t[n] = o(h, n), t }), {})
                    }))
                }
            },
            Lt = Gt({ getOutput: function() { return {} }, getCount: function(t) { return Object.keys(t).length }, getFirst: function(t) { return t[Object.keys(t)[0]] }, mapApi: function(t, n) { return function() { for (var r = [], e = 0; e < arguments.length; e++) r[e] = arguments[e]; return Object.keys(t).reduce((function(e, o) { var i; return t[o][n] && (r[0] && void 0 !== r[0][o] ? e[o] = t[o][n](r[0][o]) : e[o] = (i = t[o])[n].apply(i, r)), e }), {}) } }, setProp: function(t, n, r) { return t[n] = r }, startActions: function(t, n) { return Object.keys(t).reduce((function(r, e) { return r[e] = n(t[e], e), r }), {}) } }),
            Bt = Gt({ getOutput: function() { return [] }, getCount: function(t) { return t.length }, getFirst: function(t) { return t[0] }, mapApi: function(t, n) { return function() { for (var r = [], e = 0; e < arguments.length; e++) r[e] = arguments[e]; return t.map((function(t, e) { if (t[n]) return Array.isArray(r[0]) ? t[n](r[0][e]) : t[n].apply(t, r) })) } }, setProp: function(t, n, r) { return t[n] = r }, startActions: function(t, n) { return t.map((function(t, r) { return n(t, r) })) } }),
            Wt = function() { for (var t = [], n = 0; n < arguments.length; n++) t[n] = arguments[n]; return Bt(t) },
            qt = [K, D, z, H, J],
            Ut = function(t) { return qt.find((function(n) { return n.test(t) })) },
            Vt = function(t, n) { return t(n) },
            zt = function(t, n, r) {
                var e = r[0],
                    o = n[e].map((function(e, o) { var i = r.reduce(function(t) { return function(n, r) { return n[r] = n[r][t], n } }(o), N({}, n)); return Zt(e)(t, i) }));
                return Wt.apply(void 0, o)
            },
            Dt = function(t, n, r) {
                var e = r[0],
                    o = Object.keys(n[e]).reduce((function(o, i) { var u = r.reduce(function(t) { return function(n, r) { return n[r] = n[r][t], n } }(i), N({}, n)); return o[i] = Zt(n[e][i])(t, u), o }), {});
                return Lt(o)
            },
            Kt = function(t, n) {
                var r = n.from,
                    e = n.to,
                    o = G(n, ["from", "to"]),
                    i = Ut(r) || Ut(e),
                    u = i.transform,
                    a = i.parse;
                return t(N({}, o, { from: "string" == typeof r ? a(r) : r, to: "string" == typeof e ? a(e) : e })).pipe(u)
            },
            Ht = function(t, n) {
                var r = n.from,
                    e = n.to,
                    o = G(n, ["from", "to"]);
                return t(N({}, o, { from: 0, to: 1 })).pipe(Mt(r, e), ft.transform)
            },
            Jt = function(t, n) {
                var r = n.from,
                    e = n.to,
                    o = G(n, ["from", "to"]),
                    i = vt(r);
                return i(r), vt(e)(r), t(N({}, o, { from: 0, to: 1 })).pipe(St(dt(r), dt(e)), i)
            },
            Qt = function(t, n) {
                var r = function(t) {
                        var n = Object.keys(t),
                            r = function(n, r) { return void 0 !== n && !t[r](n) };
                        return { getVectorKeys: function(t) { return n.reduce((function(n, e) { return r(t[e], e) && n.push(e), n }), []) }, testVectorProps: function(t) { return t && n.some((function(n) { return r(t[n], n) })) } }
                    }(n),
                    e = r.testVectorProps,
                    o = r.getVectorKeys;
                return function(n) {
                    if (!e(n)) return t(n);
                    var r = o(n),
                        i = n[r[0]];
                    return Zt(i)(t, n, r)
                }
            },
            Zt = function(t) { var n = Vt; return "number" == typeof t ? n = Vt : Array.isArray(t) ? n = zt : ! function(t) { return Boolean(Ut(t)) }(t) ? ft.test(t) ? n = Ht : lt(t) ? n = Jt : "object" == typeof t && (n = Dt) : n = Kt, n },
            tn = Qt((function(t) {
                var n = t.from,
                    r = void 0 === n ? 0 : n,
                    e = t.to,
                    o = void 0 === e ? 1 : e,
                    i = t.ease,
                    u = void 0 === i ? Yt : i;
                return Nt((function(t) { var n = t.update; return { seek: function(t) { return n(t) } } })).pipe(u, (function(t) { return bt(r, o, t) }))
            }), { ease: function(t) { return "function" == typeof t }, from: U.test, to: U.test }),
            nn = gt(0, 1),
            rn = function(t) {
                return void 0 === t && (t = {}), Nt((function(n) {
                    var r, e = n.update,
                        o = n.complete,
                        i = t.duration,
                        u = void 0 === i ? 300 : i,
                        a = t.ease,
                        c = void 0 === a ? Rt : a,
                        f = t.flip,
                        s = void 0 === f ? 0 : f,
                        p = t.loop,
                        l = void 0 === p ? 0 : p,
                        d = t.yoyo,
                        v = void 0 === d ? 0 : d,
                        h = t.from,
                        m = void 0 === h ? 0 : h,
                        g = t.to,
                        y = void 0 === g ? 1 : g,
                        b = t.elapsed,
                        w = void 0 === b ? 0 : b,
                        O = t.playDirection,
                        x = void 0 === O ? 1 : O,
                        j = t.flipCount,
                        M = void 0 === j ? 0 : j,
                        P = t.yoyoCount,
                        C = void 0 === P ? 0 : P,
                        S = t.loopCount,
                        A = void 0 === S ? 0 : S,
                        E = tn({ from: m, to: y, ease: c }).start(e),
                        X = 0,
                        Y = !1,
                        k = function() { return x *= -1 },
                        _ = function() { X = nn(yt(0, u, w)), E.seek(X) },
                        F = function() {
                            Y = !0, r = R.update((function(t) {
                                var n = t.delta;
                                w += n * x, _(),
                                    function() { var t, n = 1 === x ? Y && w >= u : Y && w <= 0; if (!n) return !1; if (n && !l && !s && !v) return !0; var r = !1; return l && A < l ? (w = 0, A++, r = !0) : s && M < s ? (w = u - w, E = tn({ from: m = (t = [y, m])[0], to: y = t[1], ease: c }).start(e), M++, r = !0) : v && C < v && (k(), C++, r = !0), !r }() && o && (T.update(r), R.update(o, !1, !0))
                            }), !0)
                        },
                        I = function() { Y = !1, r && T.update(r) };
                    return F(), { isActive: function() { return Y }, getElapsed: function() { return gt(0, u, w) }, getProgress: function() { return X }, stop: function() { I() }, pause: function() { return I(), this }, resume: function() { return Y || F(), this }, seek: function(t) { return w = bt(0, u, t), R.update(_, !1, !0), this }, reverse: function() { return k(), this } }
                }))
            },
            en = function(t, n, r) {
                return Nt((function(e) {
                    var o = e.update,
                        i = n.split(" ").map((function(n) { return t.addEventListener(n, o, r), n }));
                    return { stop: function() { return i.forEach((function(n) { return t.removeEventListener(n, o, r) })) } }
                }))
            },
            on = function() { return { clientX: 0, clientY: 0, pageX: 0, pageY: 0, x: 0, y: 0 } },
            un = function(t, n) { return void 0 === n && (n = { clientX: 0, clientY: 0, pageX: 0, pageY: 0, x: 0, y: 0 }), n.clientX = n.x = t.clientX, n.clientY = n.y = t.clientY, n.pageX = t.pageX, n.pageY = t.pageY, n },
            an = [on()];
        if ("undefined" != typeof document) {
            en(document, "touchstart touchmove", { passive: !0, capture: !0 }).start((function(t) {
                var n = t.touches;
                !0;
                var r = n.length;
                an.length = 0;
                for (var e = 0; e < r; e++) {
                    var o = n[e];
                    an.push(un(o))
                }
            }))
        }
        var cn = on();
        if ("undefined" != typeof document) { en(document, "mousedown mousemove", !0).start((function(t) {!0, un(t, cn) })) }
        r.d(n, "wrapGrid", (function() { return vn }));
        var fn = { anticipate: m, backIn: d, backInOut: h, backOut: v, circIn: s, circInOut: l, circOut: p, easeIn: a, easeInOut: f, easeOut: c, linear: function(t) { return t } },
            sn = "animateGridId",
            pn = function(t) { return t ? Array.prototype.slice.call(t) : [] },
            ln = function(t, n) {
                var r = n.getBoundingClientRect(),
                    e = { top: r.top, left: r.left, width: r.width, height: r.height };
                return e.top -= t.top, e.left -= t.left, e.top = Math.max(e.top, 0), e.left = Math.max(e.left, 0), e
            },
            dn = function(t, n) {
                var r = n.translateX,
                    e = n.translateY,
                    o = n.scaleX,
                    i = n.scaleY,
                    u = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {},
                    a = u.immediate,
                    c = 0 === r && 0 === e && 1 === o && 1 === i,
                    f = function() { t.style.transform = c ? "" : "translateX(".concat(r, "px) translateY(").concat(e, "px) scaleX(").concat(o, ") scaleY(").concat(i, ")") };
                a ? f() : R.render(f);
                var s = t.children[0];
                if (s) {
                    var p = function() { s.style.transform = c ? "" : "scaleX(".concat(1 / o, ") scaleY(").concat(1 / i, ")") };
                    a ? p() : R.render(p)
                }
            },
            vn = function(t) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    r = n.duration,
                    e = void 0 === r ? 250 : r,
                    o = n.stagger,
                    i = void 0 === o ? 0 : o,
                    u = n.easing,
                    a = void 0 === u ? "easeInOut" : u,
                    c = n.onStart,
                    f = void 0 === c ? function() {} : c,
                    s = n.onEnd,
                    p = void 0 === s ? function() {} : s;
                if (!fn[a]) throw new Error("".concat(a, " is not a valid easing name"));
                var l = !1,
                    d = function(t) { l = !0, t(), setTimeout((function() { l = !1 }), 0) },
                    v = {},
                    h = function(n) {
                        var r = t.getBoundingClientRect();
                        pn(n).forEach((function(t) {
                            if ("function" == typeof t.getBoundingClientRect) {
                                if (!t.dataset[sn]) {
                                    var n = "".concat(Math.random());
                                    t.dataset[sn] = n
                                }
                                var e = t.dataset[sn];
                                v[e] || (v[e] = {});
                                var o = ln(r, t);
                                v[e].rect = o, v[e].gridBoundingClientRect = r
                            }
                        }))
                    };
                h(t.children);
                var m = F()((function() {
                    var n = document.querySelector("body"),
                        r = n && !n.contains(t);
                    t && !r || window.removeEventListener("resize", m), h(t.children)
                }), 250);
                window.addEventListener("resize", m);
                var g = F()((function() { h(t.children) }), 20);
                t.addEventListener("scroll", g);
                var y = function(n) {
                        if ("forceGridAnimation" !== n) { if (!n.filter((function(t) { return "class" === t.attributeName || t.addedNodes.length || t.removedNodes.length })).length) return; if (l) return }
                        var r = t.getBoundingClientRect(),
                            o = pn(t.children);
                        o.filter((function(t) { var n = v[t.dataset[sn]]; if (n && n.stopTween) return n.stopTween(), delete n.stopTween, !0 })).forEach((function(t) {
                            t.style.transform = "";
                            var n = t.children[0];
                            n && (n.style.transform = "")
                        }));
                        var u = o.map((function(t) { return { childCoords: {}, el: t, boundingClientRect: ln(r, t) } })).filter((function(t) {
                            var n = t.el,
                                r = t.boundingClientRect,
                                e = v[n.dataset[sn]];
                            return e ? r.top !== e.rect.top || r.left !== e.rect.left || r.width !== e.rect.width || r.height !== e.rect.height : (h([n]), !1)
                        }));
                        if (u.forEach((function(t) { var n = t.el; if (pn(n.children).length > 1) throw new Error("Make sure every grid item has a single container element surrounding its children") })), u.length) {
                            var c = u.map((function(t) { return t.el }));
                            d((function() { return f(c) }));
                            var s = [];
                            u.map((function(t) { var n = t.el.children[0]; return n && (t.childCoords = ln(r, n)), t })).forEach((function(t, n) {
                                var r = t.el,
                                    o = t.boundingClientRect,
                                    u = o.top,
                                    c = o.left,
                                    f = o.width,
                                    p = o.height,
                                    l = t.childCoords,
                                    d = l.top,
                                    m = l.left,
                                    g = r.children[0],
                                    y = v[r.dataset[sn]],
                                    b = { scaleX: y.rect.width / f, scaleY: y.rect.height / p, translateX: y.rect.left - c, translateY: y.rect.top - u };
                                r.style.transformOrigin = "0 0", g && m === c && d === u && (g.style.transformOrigin = "0 0");
                                var w = function() {},
                                    O = new Promise((function(t) { w = t }));
                                s.push(O), dn(r, b, { immediate: !0 });
                                var x = function() {
                                    var t = rn({ from: b, to: { translateX: 0, translateY: 0, scaleX: 1, scaleY: 1 }, duration: e, ease: fn[a] }).start({ update: function(t) { dn(r, t), R.postRender((function() { return h([r]) })) }, complete: w }).stop;
                                    y.stopTween = t
                                };
                                if ("number" != typeof i) x();
                                else {
                                    var j = setTimeout((function() { R.update(x) }), i * n);
                                    y.stopTween = function() { return clearTimeout(j) }
                                }
                            })), Promise.all(s).then((function() { p(c) }))
                        }
                    },
                    b = new MutationObserver(y);
                b.observe(t, { childList: !0, attributes: !0, subtree: !0, attributeFilter: ["class"] });
                var w = function() { window.removeEventListener("resize", m), t.removeEventListener("scroll", g), b.disconnect() },
                    O = function() { return y("forceGridAnimation") };
                return { unwrapGrid: w, forceGridAnimation: O }
            }
    }])
}));
(function(root, factory) { factory((root.dragscroll = {})); }(this, function(exports) {
    var _window = window;
    var _document = document;
    var mousemove = 'mousemove';
    var mouseup = 'mouseup';
    var mousedown = 'mousedown';
    var EventListener = 'EventListener';
    var addEventListener = 'add' + EventListener;
    var removeEventListener = 'remove' + EventListener;
    var newScrollX, newScrollY;
    var dragged = [];
    var reset = function(i, el) {
        for (i = 0; i < dragged.length;) {
            el = dragged[i++];
            el = el.container || el;
            el[removeEventListener](mousedown, el.md, 0);
            _window[removeEventListener](mouseup, el.mu, 0);
            _window[removeEventListener](mousemove, el.mm, 0);
        }
        dragged = [].slice.call(_document.getElementsByClassName('dragscroll'));
        for (i = 0; i < dragged.length;) {
            (function(el, lastClientX, lastClientY, pushed, scroller, cont) {
                (cont = el.container || el)[addEventListener](mousedown, cont.md = function(e) {
                    if (!el.hasAttribute('nochilddrag') || _document.elementFromPoint(e.pageX, e.pageY) == cont) {
                        pushed = 1;
                        lastClientX = e.clientX;
                        lastClientY = e.clientY;
                        e.preventDefault();
                    }
                    el.classList.add('dragscroll--dragging');
                }, 0);
                _window[addEventListener](mouseup, cont.mu = function() {
                    pushed = 0;
                    el.classList.remove('dragscroll--dragging');
                }, 0);
                _window[addEventListener](mousemove, cont.mm = function(e) {
                    if (pushed) {
                        (scroller = el.scroller || el).scrollLeft -= newScrollX = (-lastClientX + (lastClientX = e.clientX));
                        scroller.scrollTop -= newScrollY = (-lastClientY + (lastClientY = e.clientY));
                        if (el == _document.body) {
                            (scroller = _document.documentElement).scrollLeft -= newScrollX;
                            scroller.scrollTop -= newScrollY;
                        }
                    }
                }, 0);
            })(dragged[i++]);
        }
    }
    if (_document.readyState == 'complete') { reset(); } else { _window[addEventListener]('load', reset, 0); }
    exports.reset = reset;
}));
/*!
 * Glide.js v3.4.1
 * (c) 2013-2019 JÄ™drzej ChaÅ‚ubek <jedrzej.chalubek@gmail.com> (http://jedrzejchalubek.com/)
 * Released under the MIT License.
 */
! function(t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.Glide = e() }(this, function() {
    "use strict";
    var n = {
        type: "slider",
        startAt: 0,
        perView: 1,
        focusAt: 0,
        gap: 10,
        loop: true,
        autoplay: 10000,
        hoverpause: !0,
        keyboard: !0,
        bound: !1,
        swipeThreshold: 80,
        dragThreshold: 120,
        perTouch: !1,
        touchRatio: .5,
        touchAngle: 45,
        animationDuration: 400,
        rewind: !0,
        rewindDuration: 800,
        animationTimingFunc: "cubic-bezier(.165, .840, .440, 1)",
        throttle: 10,
        direction: "ltr",
        peek: 0,
        breakpoints: {},
        classes: {
            direction: { ltr: "glide--ltr", rtl: "glide--rtl" },
            slider: "glide--slider",
            carousel: "glide--carousel",
            swipeable: "glide--swipeable",
            dragging: "glide--dragging",
            cloneSlide: "glide__slide--clone",
            activeNav: "glide__bullet--active",
            activeSlide: "glide__slide--active",
            disabledArrow: "glide__arrow--disabled"
        }
    };

    function i(t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") }
    var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) { return typeof t } : function(t) {
            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
        },
        t = function(t, e, n) { return e && o(t.prototype, e), n && o(t, n), t };

    function o(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }
    var a = Object.assign || function(t) { for (var e = 1; e < arguments.length; e++) { var n = arguments[e]; for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]) } return t };

    function y(t) { return parseInt(t) }

    function s(t) { return "string" == typeof t }

    function u(t) { var e = void 0 === t ? "undefined" : r(t); return "function" === e || "object" === e && !!t }

    function c(t) { return "function" == typeof t }

    function l(t) { return void 0 === t }

    function f(t) { return t.constructor === Array }

    function d(t, e, n) { Object.defineProperty(t, e, n) }

    function h(t, e) { var n = a({}, t, e); return e.hasOwnProperty("classes") && (n.classes = a({}, t.classes, e.classes), e.classes.hasOwnProperty("direction") && (n.classes.direction = a({}, t.classes.direction, e.classes.direction))), e.hasOwnProperty("breakpoints") && (n.breakpoints = a({}, t.breakpoints, e.breakpoints)), n }
    var v = (t(e, [{
        key: "on",
        value: function(t, e) {
            if (f(t))
                for (var n = 0; n < t.length; n++) this.on(t[n], e);
            this.hop.call(this.events, t) || (this.events[t] = []);
            var i = this.events[t].push(e) - 1;
            return { remove: function() { delete this.events[t][i] } }
        }
    }, {
        key: "emit",
        value: function(t, e) {
            if (f(t))
                for (var n = 0; n < t.length; n++) this.emit(t[n], e);
            this.hop.call(this.events, t) && this.events[t].forEach(function(t) { t(e || {}) })
        }
    }]), e);

    function e() {
        var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
        i(this, e), this.events = t, this.hop = t.hasOwnProperty
    }
    var p = (t(m, [{ key: "mount", value: function(t) { var e = 0 < arguments.length && void 0 !== t ? t : {}; return this._e.emit("mount.before"), u(e) && (this._c = function(t, e, n) { var i = {}; for (var r in e) c(e[r]) && (i[r] = e[r](t, i, n)); for (var o in i) c(i[o].mount) && i[o].mount(); return i }(this, e, this._e)), this._e.emit("mount.after"), this } }, { key: "mutate", value: function(t) { var e = 0 < arguments.length && void 0 !== t ? t : []; return f(e) && (this._t = e), this } }, { key: "update", value: function(t) { var e = 0 < arguments.length && void 0 !== t ? t : {}; return this.settings = h(this.settings, e), e.hasOwnProperty("startAt") && (this.index = e.startAt), this._e.emit("update"), this } }, { key: "go", value: function(t) { return this._c.Run.make(t), this } }, { key: "move", value: function(t) { return this._c.Transition.disable(), this._c.Move.make(t), this } }, { key: "destroy", value: function() { return this._e.emit("destroy"), this } }, { key: "play", value: function(t) { var e = 0 < arguments.length && void 0 !== t && t; return e && (this.settings.autoplay = e), this._e.emit("play"), this } }, { key: "pause", value: function() { return this._e.emit("pause"), this } }, { key: "disable", value: function() { return this.disabled = !0, this } }, { key: "enable", value: function() { return this.disabled = !1, this } }, { key: "on", value: function(t, e) { return this._e.on(t, e), this } }, { key: "isType", value: function(t) { return this.settings.type === t } }, { key: "settings", get: function() { return this._o }, set: function(t) { u(t) && (this._o = t) } }, { key: "index", get: function() { return this._i }, set: function(t) { this._i = y(t) } }, { key: "type", get: function() { return this.settings.type } }, { key: "disabled", get: function() { return this._d }, set: function(t) { this._d = !!t } }]), m);

    function m(t) {
        var e = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {};
        i(this, m), this._c = {}, this._t = [], this._e = new v, this.disabled = !1, this.selector = t, this.settings = h(n, e), this.index = this.settings.startAt
    }

    function g() { return (new Date).getTime() }

    function b(n, i, r) {
        var o = void 0,
            s = void 0,
            u = void 0,
            a = void 0,
            c = 0;
        r = r || {};

        function l() { c = !1 === r.leading ? 0 : g(), o = null, a = n.apply(s, u), o || (s = u = null) }

        function t() {
            var t = g();
            c || !1 !== r.leading || (c = t);
            var e = i - (t - c);
            return s = this, u = arguments, e <= 0 || i < e ? (o && (clearTimeout(o), o = null), c = t, a = n.apply(s, u), o || (s = u = null)) : o || !1 === r.trailing || (o = setTimeout(l, e)), a
        }
        return t.cancel = function() { clearTimeout(o), c = 0, o = s = u = null }, t
    }
    var w = { ltr: ["marginLeft", "marginRight"], rtl: ["marginRight", "marginLeft"] };

    function _(t) { if (t && t.parentNode) { for (var e = t.parentNode.firstChild, n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e); return n } return [] }

    function k(t) { return !!(t && t instanceof window.HTMLElement) }
    var S = '[data-glide-el="track"]';
    var H = (t(T, [{
        key: "on",
        value: function(t, e, n, i) {
            var r = 3 < arguments.length && void 0 !== i && i;
            s(t) && (t = [t]);
            for (var o = 0; o < t.length; o++) this.listeners[t[o]] = n, e.addEventListener(t[o], this.listeners[t[o]], r)
        }
    }, {
        key: "off",
        value: function(t, e, n) {
            var i = 2 < arguments.length && void 0 !== n && n;
            s(t) && (t = [t]);
            for (var r = 0; r < t.length; r++) e.removeEventListener(t[r], this.listeners[t[r]], i)
        }
    }, { key: "destroy", value: function() { delete this.listeners } }]), T);

    function T() {
        var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
        i(this, T), this.listeners = t
    }
    var x = ["ltr", "rtl"],
        O = { ">": "<", "<": ">", "=": "=" };

    function A(t, e) { return { modify: function(t) { return e.Direction.is("rtl") ? -t : t } } }

    function M(i, r, o) {
        var s = [function(e, n) { return { modify: function(t) { return t + n.Gaps.value * e.index } } }, function(t, e) { return { modify: function(t) { return t + e.Clones.grow / 2 } } }, function(n, i) { return { modify: function(t) { if (0 <= n.settings.focusAt) { var e = i.Peek.value; return u(e) ? t - e.before : t - e } return t } } }, function(o, s) {
            return {
                modify: function(t) {
                    var e = s.Gaps.value,
                        n = s.Sizes.width,
                        i = o.settings.focusAt,
                        r = s.Sizes.slideWidth;
                    return "center" === i ? t - (n / 2 - r / 2) : t - r * i - e * i
                }
            }
        }].concat(i._t, [A]);
        return {
            mutate: function(t) {
                for (var e = 0; e < s.length; e++) {
                    var n = s[e];
                    c(n) && c(n().modify) && (t = n(i, r, o).modify(t))
                }
                return t
            }
        }
    }
    var C = !1;
    try {
        var P = Object.defineProperty({}, "passive", { get: function() { C = !0 } });
        window.addEventListener("testPassive", null, P), window.removeEventListener("testPassive", null, P)
    } catch (t) {}
    var L = C,
        z = ["touchstart", "mousedown"],
        j = ["touchmove", "mousemove"],
        D = ["touchend", "touchcancel", "mouseup", "mouseleave"],
        E = ["mousedown", "mousemove", "mouseup", "mouseleave"];

    function R(t) { return u(t) ? function(n) { return Object.keys(n).sort().reduce(function(t, e) { return t[e] = n[e], t[e], t }, {}) }(t) : {} }
    var W = {
        Html: function(e, t) { var n = { mount: function() { this.root = e.selector, this.track = this.root.querySelector(S), this.slides = Array.prototype.slice.call(this.wrapper.children).filter(function(t) { return !t.classList.contains(e.settings.classes.cloneSlide) }) } }; return d(n, "root", { get: function() { return n._r }, set: function(t) { s(t) && (t = document.querySelector(t)), k(t) && (n._r = t) } }), d(n, "track", { get: function() { return n._t }, set: function(t) { k(t) && (n._t = t) } }), d(n, "wrapper", { get: function() { return n.track.children[0] } }), n },
        Translate: function(r, o, s) {
            var u = {
                set: function(t) {
                    var e = M(r, o).mutate(t);
                    o.Html.wrapper.style.transform = "translate3d(" + -1 * e + "px, 0px, 0px)"
                },
                remove: function() { o.Html.wrapper.style.transform = "" }
            };
            return s.on("move", function(t) {
                var e = o.Gaps.value,
                    n = o.Sizes.length,
                    i = o.Sizes.slideWidth;
                return r.isType("carousel") && o.Run.isOffset("<") ? (o.Transition.after(function() { s.emit("translate.jump"), u.set(i * (n - 1)) }), u.set(-i - e * n)) : r.isType("carousel") && o.Run.isOffset(">") ? (o.Transition.after(function() { s.emit("translate.jump"), u.set(0) }), u.set(i * n + e * n)) : u.set(t.movement)
            }), s.on("destroy", function() { u.remove() }), u
        },
        Transition: function(n, i, t) {
            var r = !1,
                e = {
                    compose: function(t) { var e = n.settings; return r ? t + " 0ms " + e.animationTimingFunc : t + " " + this.duration + "ms " + e.animationTimingFunc },
                    set: function(t) {
                        var e = 0 < arguments.length && void 0 !== t ? t : "transform";
                        i.Html.wrapper.style.transition = this.compose(e)
                    },
                    remove: function() { i.Html.wrapper.style.transition = "" },
                    after: function(t) { setTimeout(function() { t() }, this.duration) },
                    enable: function() { r = !1, this.set() },
                    disable: function() { r = !0, this.set() }
                };
            return d(e, "duration", { get: function() { var t = n.settings; return n.isType("slider") && i.Run.offset ? t.rewindDuration : t.animationDuration } }), t.on("move", function() { e.set() }), t.on(["build.before", "resize", "translate.jump"], function() { e.disable() }), t.on("run", function() { e.enable() }), t.on("destroy", function() { e.remove() }), e
        },
        Direction: function(t, e, n) { var i = { mount: function() { this.value = t.settings.direction }, resolve: function(t) { var e = t.slice(0, 1); return this.is("rtl") ? t.split(e).join(O[e]) : t }, is: function(t) { return this.value === t }, addClass: function() { e.Html.root.classList.add(t.settings.classes.direction[this.value]) }, removeClass: function() { e.Html.root.classList.remove(t.settings.classes.direction[this.value]) } }; return d(i, "value", { get: function() { return i._v }, set: function(t) {-1 < x.indexOf(t) && (i._v = t) } }), n.on(["destroy", "update"], function() { i.removeClass() }), n.on("update", function() { i.mount() }), n.on(["build.before", "update"], function() { i.addClass() }), i },
        Peek: function(n, t, e) {
            var i = { mount: function() { this.value = n.settings.peek } };
            return d(i, "value", { get: function() { return i._v }, set: function(t) { u(t) ? (t.before = y(t.before), t.after = y(t.after)) : t = y(t), i._v = t } }), d(i, "reductor", {
                get: function() {
                    var t = i.value,
                        e = n.settings.perView;
                    return u(t) ? t.before / e + t.after / e : 2 * t / e
                }
            }), e.on(["resize", "update"], function() { i.mount() }), i
        },
        Sizes: function(t, i, e) {
            var n = {
                setupSlides: function() { for (var t = this.slideWidth + "px", e = i.Html.slides, n = 0; n < e.length; n++) e[n].style.width = t },
                setupWrapper: function(t) { i.Html.wrapper.style.width = this.wrapperSize + "px" },
                remove: function() {
                    for (var t = i.Html.slides, e = 0; e < t.length; e++) t[e].style.width = "";
                    i.Html.wrapper.style.width = ""
                }
            };
            return d(n, "length", { get: function() { return i.Html.slides.length } }), d(n, "width", { get: function() { return i.Html.root.offsetWidth } }), d(n, "wrapperSize", { get: function() { return n.slideWidth * n.length + i.Gaps.grow + i.Clones.grow } }), d(n, "slideWidth", { get: function() { return n.width / t.settings.perView - i.Peek.reductor - i.Gaps.reductor } }), e.on(["build.before", "resize", "update"], function() { n.setupSlides(), n.setupWrapper() }), e.on("destroy", function() { n.remove() }), n
        },
        Gaps: function(e, o, t) {
            var n = {
                apply: function(t) {
                    for (var e = 0, n = t.length; e < n; e++) {
                        var i = t[e].style,
                            r = o.Direction.value;
                        i[w[r][0]] = 0 !== e ? this.value / 2 + "px" : "", e !== t.length - 1 ? i[w[r][1]] = this.value / 2 + "px" : i[w[r][1]] = ""
                    }
                },
                remove: function(t) {
                    for (var e = 0, n = t.length; e < n; e++) {
                        var i = t[e].style;
                        i.marginLeft = "", i.marginRight = ""
                    }
                }
            };
            return d(n, "value", { get: function() { return y(e.settings.gap) } }), d(n, "grow", { get: function() { return n.value * (o.Sizes.length - 1) } }), d(n, "reductor", { get: function() { var t = e.settings.perView; return n.value * (t - 1) / t } }), t.on(["build.after", "update"], b(function() { n.apply(o.Html.wrapper.children) }, 30)), t.on("destroy", function() { n.remove(o.Html.wrapper.children) }), n
        },
        Move: function(t, i, r) {
            var e = {
                mount: function() { this._o = 0 },
                make: function(t) {
                    var e = this,
                        n = 0 < arguments.length && void 0 !== t ? t : 0;
                    this.offset = n, r.emit("move", { movement: this.value }), i.Transition.after(function() { r.emit("move.after", { movement: e.value }) })
                }
            };
            return d(e, "offset", { get: function() { return e._o }, set: function(t) { e._o = l(t) ? 0 : y(t) } }), d(e, "translate", { get: function() { return i.Sizes.slideWidth * t.index } }), d(e, "value", {
                get: function() {
                    var t = this.offset,
                        e = this.translate;
                    return i.Direction.is("rtl") ? e + t : e - t
                }
            }), r.on(["build.before", "run"], function() { e.make() }), e
        },
        Clones: function(v, p, t) {
            var e = {
                mount: function() { this.items = [], v.isType("carousel") && (this.items = this.collect()) },
                collect: function(t) {
                    for (var e = 0 < arguments.length && void 0 !== t ? t : [], n = p.Html.slides, i = v.settings, r = i.perView, o = i.classes, s = r + +!!v.settings.peek, u = n.slice(0, s), a = n.slice(-s), c = 0; c < Math.max(1, Math.floor(r / n.length)); c++) {
                        for (var l = 0; l < u.length; l++) {
                            var f = u[l].cloneNode(!0);
                            f.classList.add(o.cloneSlide), e.push(f)
                        }
                        for (var d = 0; d < a.length; d++) {
                            var h = a[d].cloneNode(!0);
                            h.classList.add(o.cloneSlide), e.unshift(h)
                        }
                    }
                    return e
                },
                append: function() { for (var t = this.items, e = p.Html, n = e.wrapper, i = e.slides, r = Math.floor(t.length / 2), o = t.slice(0, r).reverse(), s = t.slice(r, t.length), u = p.Sizes.slideWidth + "px", a = 0; a < s.length; a++) n.appendChild(s[a]); for (var c = 0; c < o.length; c++) n.insertBefore(o[c], i[0]); for (var l = 0; l < t.length; l++) t[l].style.width = u },
                remove: function() { for (var t = this.items, e = 0; e < t.length; e++) p.Html.wrapper.removeChild(t[e]) }
            };
            return d(e, "grow", { get: function() { return (p.Sizes.slideWidth + p.Gaps.value) * e.items.length } }), t.on("update", function() { e.remove(), e.mount(), e.append() }), t.on("build.before", function() { v.isType("carousel") && e.append() }), t.on("destroy", function() { e.remove() }), e
        },
        Resize: function(t, e, n) {
            var i = new H,
                r = { mount: function() { this.bind() }, bind: function() { i.on("resize", window, b(function() { n.emit("resize") }, t.settings.throttle)) }, unbind: function() { i.off("resize", window) } };
            return n.on("destroy", function() { r.unbind(), i.destroy() }), r
        },
        Build: function(n, i, t) {
            var e = {
                mount: function() { t.emit("build.before"), this.typeClass(), this.activeClass(), t.emit("build.after") },
                typeClass: function() { i.Html.root.classList.add(n.settings.classes[n.settings.type]) },
                activeClass: function() {
                    var e = n.settings.classes,
                        t = i.Html.slides[n.index];
                    t && (t.classList.add(e.activeSlide), _(t).forEach(function(t) { t.classList.remove(e.activeSlide) }))
                },
                removeClasses: function() {
                    var e = n.settings.classes;
                    i.Html.root.classList.remove(e[n.settings.type]), i.Html.slides.forEach(function(t) { t.classList.remove(e.activeSlide) })
                }
            };
            return t.on(["destroy", "update"], function() { e.removeClasses() }), t.on(["resize", "update"], function() { e.mount() }), t.on("move.after", function() { e.activeClass() }), e
        },
        Run: function(o, n, i) {
            var t = {
                mount: function() { this._o = !1 },
                make: function(t) {
                    var e = this;
                    o.disabled || (o.disable(), this.move = t, i.emit("run.before", this.move), this.calculate(), i.emit("run", this.move), n.Transition.after(function() { e.isStart() && i.emit("run.start", e.move), e.isEnd() && i.emit("run.end", e.move), (e.isOffset("<") || e.isOffset(">")) && (e._o = !1, i.emit("run.offset", e.move)), i.emit("run.after", e.move), o.enable() }))
                },
                calculate: function() {
                    var t = this.move,
                        e = this.length,
                        n = t.steps,
                        i = t.direction,
                        r = function(t) { return "number" == typeof t }(y(n)) && 0 !== y(n);
                    switch (i) {
                        case ">":
                            ">" === n ? o.index = e : this.isEnd() ? o.isType("slider") && !o.settings.rewind || (this._o = !0, o.index = 0) : r ? o.index += Math.min(e - o.index, -y(n)) : o.index++;
                            break;
                        case "<":
                            "<" === n ? o.index = 0 : this.isStart() ? o.isType("slider") && !o.settings.rewind || (this._o = !0, o.index = e) : r ? o.index -= Math.min(o.index, y(n)) : o.index--;
                            break;
                        case "=":
                            o.index = n
                    }
                },
                isStart: function() { return 0 === o.index },
                isEnd: function() { return o.index === this.length },
                isOffset: function(t) { return this._o && this.move.direction === t }
            };
            return d(t, "move", {
                get: function() { return this._m },
                set: function(t) {
                    var e = t.substr(1);
                    this._m = { direction: t.substr(0, 1), steps: e ? y(e) ? y(e) : e : 0 }
                }
            }), d(t, "length", {
                get: function() {
                    var t = o.settings,
                        e = n.Html.slides.length;
                    return o.isType("slider") && "center" !== t.focusAt && t.bound ? e - 1 - (y(t.perView) - 1) + y(t.focusAt) : e - 1
                }
            }), d(t, "offset", { get: function() { return this._o } }), t
        },
        Swipe: function(d, h, v) {
            var n = new H,
                p = 0,
                m = 0,
                g = 0,
                i = !1,
                r = !!L && { passive: !0 },
                t = {
                    mount: function() { this.bindSwipeStart() },
                    start: function(t) {
                        if (!i && !d.disabled) {
                            this.disable();
                            var e = this.touches(t);
                            p = null, m = y(e.pageX), g = y(e.pageY), this.bindSwipeMove(), this.bindSwipeEnd(), v.emit("swipe.start")
                        }
                    },
                    move: function(t) {
                        if (!d.disabled) {
                            var e = d.settings,
                                n = e.touchAngle,
                                i = e.touchRatio,
                                r = e.classes,
                                o = this.touches(t),
                                s = y(o.pageX) - m,
                                u = y(o.pageY) - g,
                                a = Math.abs(s << 2),
                                c = Math.abs(u << 2),
                                l = Math.sqrt(a + c),
                                f = Math.sqrt(c);
                            if (!(180 * (p = Math.asin(f / l)) / Math.PI < n)) return !1;
                            t.stopPropagation(), h.Move.make(s * function(t) { return parseFloat(t) }(i)), h.Html.root.classList.add(r.dragging), v.emit("swipe.move")
                        }
                    },
                    end: function(t) {
                        if (!d.disabled) {
                            var e = d.settings,
                                n = this.touches(t),
                                i = this.threshold(t),
                                r = n.pageX - m,
                                o = 180 * p / Math.PI,
                                s = Math.round(r / h.Sizes.slideWidth);
                            this.enable(), i < r && o < e.touchAngle ? (e.perTouch && (s = Math.min(s, y(e.perTouch))), h.Direction.is("rtl") && (s = -s), h.Run.make(h.Direction.resolve("<" + s))) : r < -i && o < e.touchAngle ? (e.perTouch && (s = Math.max(s, -y(e.perTouch))), h.Direction.is("rtl") && (s = -s), h.Run.make(h.Direction.resolve(">" + s))) : h.Move.make(), h.Html.root.classList.remove(e.classes.dragging), this.unbindSwipeMove(), this.unbindSwipeEnd(), v.emit("swipe.end")
                        }
                    },
                    bindSwipeStart: function() {
                        var e = this,
                            t = d.settings;
                        t.swipeThreshold && n.on(z[0], h.Html.wrapper, function(t) { e.start(t) }, r), t.dragThreshold && n.on(z[1], h.Html.wrapper, function(t) { e.start(t) }, r)
                    },
                    unbindSwipeStart: function() { n.off(z[0], h.Html.wrapper, r), n.off(z[1], h.Html.wrapper, r) },
                    bindSwipeMove: function() {
                        var e = this;
                        n.on(j, h.Html.wrapper, b(function(t) { e.move(t) }, d.settings.throttle), r)
                    },
                    unbindSwipeMove: function() { n.off(j, h.Html.wrapper, r) },
                    bindSwipeEnd: function() {
                        var e = this;
                        n.on(D, h.Html.wrapper, function(t) { e.end(t) })
                    },
                    unbindSwipeEnd: function() { n.off(D, h.Html.wrapper) },
                    touches: function(t) { return -1 < E.indexOf(t.type) ? t : t.touches[0] || t.changedTouches[0] },
                    threshold: function(t) { var e = d.settings; return -1 < E.indexOf(t.type) ? e.dragThreshold : e.swipeThreshold },
                    enable: function() { return i = !1, h.Transition.enable(), this },
                    disable: function() { return i = !0, h.Transition.disable(), this }
                };
            return v.on("build.after", function() { h.Html.root.classList.add(d.settings.classes.swipeable) }), v.on("destroy", function() { t.unbindSwipeStart(), t.unbindSwipeMove(), t.unbindSwipeEnd(), n.destroy() }), t
        },
        Images: function(t, e, n) {
            var i = new H,
                r = { mount: function() { this.bind() }, bind: function() { i.on("dragstart", e.Html.wrapper, this.dragstart) }, unbind: function() { i.off("dragstart", e.Html.wrapper) }, dragstart: function(t) { t.preventDefault() } };
            return n.on("destroy", function() { r.unbind(), i.destroy() }), r
        },
        Anchors: function(t, e, n) {
            var i = new H,
                r = !1,
                o = !1,
                s = {
                    mount: function() { this._a = e.Html.wrapper.querySelectorAll("a"), this.bind() },
                    bind: function() { i.on("click", e.Html.wrapper, this.click) },
                    unbind: function() { i.off("click", e.Html.wrapper) },
                    click: function(t) { o && (t.stopPropagation(), t.preventDefault()) },
                    detach: function() {
                        if (o = !0, !r) {
                            for (var t = 0; t < this.items.length; t++) this.items[t].draggable = !1, this.items[t].setAttribute("data-href", this.items[t].getAttribute("href")), this.items[t].removeAttribute("href");
                            r = !0
                        }
                        return this
                    },
                    attach: function() {
                        if (o = !1, r) {
                            for (var t = 0; t < this.items.length; t++) this.items[t].draggable = !0, this.items[t].setAttribute("href", this.items[t].getAttribute("data-href"));
                            r = !1
                        }
                        return this
                    }
                };
            return d(s, "items", { get: function() { return s._a } }), n.on("swipe.move", function() { s.detach() }), n.on("swipe.end", function() { e.Transition.after(function() { s.attach() }) }), n.on("destroy", function() { s.attach(), s.unbind(), i.destroy() }), s
        },
        Controls: function(i, e, t) {
            var n = new H,
                r = !!L && { passive: !0 },
                o = {
                    mount: function() { this._n = e.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'), this._c = e.Html.root.querySelectorAll('[data-glide-el^="controls"]'), this.addBindings() },
                    setActive: function() { for (var t = 0; t < this._n.length; t++) this.addClass(this._n[t].children) },
                    removeActive: function() { for (var t = 0; t < this._n.length; t++) this.removeClass(this._n[t].children) },
                    addClass: function(t) {
                        var e = i.settings,
                            n = t[i.index];
                        n && (n.classList.add(e.classes.activeNav), _(n).forEach(function(t) { t.classList.remove(e.classes.activeNav) }))
                    },
                    removeClass: function(t) {
                        var e = t[i.index];
                        e && e.classList.remove(i.settings.classes.activeNav)
                    },
                    addBindings: function() { for (var t = 0; t < this._c.length; t++) this.bind(this._c[t].children) },
                    removeBindings: function() { for (var t = 0; t < this._c.length; t++) this.unbind(this._c[t].children) },
                    bind: function(t) { for (var e = 0; e < t.length; e++) n.on("click", t[e], this.click), n.on("touchstart", t[e], this.click, r) },
                    unbind: function(t) { for (var e = 0; e < t.length; e++) n.off(["click", "touchstart"], t[e]) },
                    click: function(t) { t.preventDefault(), e.Run.make(e.Direction.resolve(t.currentTarget.getAttribute("data-glide-dir"))) }
                };
            return d(o, "items", { get: function() { return o._c } }), t.on(["mount.after", "move.after"], function() { o.setActive() }), t.on("destroy", function() { o.removeBindings(), o.removeActive(), n.destroy() }), o
        },
        Keyboard: function(t, e, n) {
            var i = new H,
                r = { mount: function() { t.settings.keyboard && this.bind() }, bind: function() { i.on("keyup", document, this.press) }, unbind: function() { i.off("keyup", document) }, press: function(t) { 39 === t.keyCode && e.Run.make(e.Direction.resolve(">")), 37 === t.keyCode && e.Run.make(e.Direction.resolve("<")) } };
            return n.on(["destroy", "update"], function() { r.unbind() }), n.on("update", function() { r.mount() }), n.on("destroy", function() { i.destroy() }), r
        },
        Autoplay: function(e, n, t) {
            var i = new H,
                r = {
                    mount: function() { this.start(), e.settings.hoverpause && this.bind() },
                    start: function() {
                        var t = this;
                        e.settings.autoplay && l(this._i) && (this._i = setInterval(function() { t.stop(), n.Run.make(">"), t.start() }, this.time))
                    },
                    stop: function() { this._i = clearInterval(this._i) },
                    bind: function() {
                        var t = this;
                        i.on("mouseover", n.Html.root, function() { t.stop() }), i.on("mouseout", n.Html.root, function() { t.start() })
                    },
                    unbind: function() { i.off(["mouseover", "mouseout"], n.Html.root) }
                };
            return d(r, "time", { get: function() { var t = n.Html.slides[e.index].getAttribute("data-glide-autoplay"); return y(t || e.settings.autoplay) } }), t.on(["destroy", "update"], function() { r.unbind() }), t.on(["run.before", "pause", "destroy", "swipe.start", "update"], function() { r.stop() }), t.on(["run.after", "play", "swipe.end"], function() { r.start() }), t.on("update", function() { r.mount() }), t.on("destroy", function() { i.destroy() }), r
        },
        Breakpoints: function(t, e, n) {
            var i = new H,
                r = t.settings,
                o = R(r.breakpoints),
                s = a({}, r),
                u = {
                    match: function(t) {
                        if (void 0 !== window.matchMedia)
                            for (var e in t)
                                if (t.hasOwnProperty(e) && window.matchMedia("(max-width: " + e + "px)").matches) return t[e];
                        return s
                    }
                };
            return a(r, u.match(o)), i.on("resize", window, b(function() { t.settings = h(r, u.match(o)) }, t.settings.throttle)), n.on("update", function() { o = R(o), s = a({}, r) }), n.on("destroy", function() { i.off("resize", window) }), u
        }
    };

    function G() {
        return i(this, G),
            function(t, e) { if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !e || "object" != typeof e && "function" != typeof e ? t : e }(this, (G.__proto__ || Object.getPrototypeOf(G)).apply(this, arguments))
    }
    return function(t, e) {
        if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
        t.prototype = Object.create(e && e.prototype, { constructor: { value: t, enumerable: !1, writable: !0, configurable: !0 } }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
    }(G, p), t(G, [{ key: "mount", value: function(t) { var e = 0 < arguments.length && void 0 !== t ? t : {}; return function t(e, n, i) { null === e && (e = Function.prototype); var r = Object.getOwnPropertyDescriptor(e, n); if (void 0 === r) { var o = Object.getPrototypeOf(e); return null === o ? void 0 : t(o, n, i) } if ("value" in r) return r.value; var s = r.get; return void 0 !== s ? s.call(i) : void 0 }(G.prototype.__proto__ || Object.getPrototypeOf(G.prototype), "mount", this).call(this, a({}, W, e)) } }]), G
}); /*!lazysizes - v5.2.2*/
! function(e) {
    var t = function(u, D, f) {
        "use strict";
        var k, H;
        if (function() {
                var e;
                var t = { lazyClass: "lazyload", loadedClass: "lazyloaded", loadingClass: "lazyloading", preloadClass: "lazypreload", errorClass: "lazyerror", autosizesClass: "lazyautosizes", srcAttr: "data-src", srcsetAttr: "data-srcset", sizesAttr: "data-sizes", minSize: 40, customMedia: {}, init: true, expFactor: 1.5, hFac: .8, loadMode: 2, loadHidden: true, ricTimeout: 0, throttleDelay: 125 };
                H = u.lazySizesConfig || u.lazysizesConfig || {};
                for (e in t) { if (!(e in H)) { H[e] = t[e] } }
            }(), !D || !D.getElementsByClassName) { return { init: function() {}, cfg: H, noSupport: true } }
        var O = D.documentElement,
            a = u.HTMLPictureElement,
            P = "addEventListener",
            $ = "getAttribute",
            q = u[P].bind(u),
            I = u.setTimeout,
            U = u.requestAnimationFrame || I,
            l = u.requestIdleCallback,
            j = /^picture$/i,
            r = ["load", "error", "lazyincluded", "_lazyloaded"],
            i = {},
            G = Array.prototype.forEach,
            J = function(e, t) { if (!i[t]) { i[t] = new RegExp("(\\s|^)" + t + "(\\s|$)") } return i[t].test(e[$]("class") || "") && i[t] },
            K = function(e, t) { if (!J(e, t)) { e.setAttribute("class", (e[$]("class") || "").trim() + " " + t) } },
            Q = function(e, t) { var i; if (i = J(e, t)) { e.setAttribute("class", (e[$]("class") || "").replace(i, " ")) } },
            V = function(t, i, e) {
                var a = e ? P : "removeEventListener";
                if (e) { V(t, i) }
                r.forEach(function(e) { t[a](e, i) })
            },
            X = function(e, t, i, a, r) {
                var n = D.createEvent("Event");
                if (!i) { i = {} }
                i.instance = k;
                n.initEvent(t, !a, !r);
                n.detail = i;
                e.dispatchEvent(n);
                return n
            },
            Y = function(e, t) {
                var i;
                if (!a && (i = u.picturefill || H.pf)) {
                    if (t && t.src && !e[$]("srcset")) { e.setAttribute("srcset", t.src) }
                    i({ reevaluate: true, elements: [e] })
                } else if (t && t.src) { e.src = t.src }
            },
            Z = function(e, t) { return (getComputedStyle(e, null) || {})[t] },
            s = function(e, t, i) {
                i = i || e.offsetWidth;
                while (i < H.minSize && t && !e._lazysizesWidth) {
                    i = t.offsetWidth;
                    t = t.parentNode
                }
                return i
            },
            ee = function() {
                var i, a;
                var t = [];
                var r = [];
                var n = t;
                var s = function() {
                    var e = n;
                    n = t.length ? r : t;
                    i = true;
                    a = false;
                    while (e.length) { e.shift()() }
                    i = false
                };
                var e = function(e, t) {
                    if (i && !t) { e.apply(this, arguments) } else {
                        n.push(e);
                        if (!a) {
                            a = true;
                            (D.hidden ? I : U)(s)
                        }
                    }
                };
                e._lsFlush = s;
                return e
            }(),
            te = function(i, e) {
                return e ? function() { ee(i) } : function() {
                    var e = this;
                    var t = arguments;
                    ee(function() { i.apply(e, t) })
                }
            },
            ie = function(e) {
                var i;
                var a = 0;
                var r = H.throttleDelay;
                var n = H.ricTimeout;
                var t = function() {
                    i = false;
                    a = f.now();
                    e()
                };
                var s = l && n > 49 ? function() { l(t, { timeout: n }); if (n !== H.ricTimeout) { n = H.ricTimeout } } : te(function() { I(t) }, true);
                return function(e) {
                    var t;
                    if (e = e === true) { n = 33 }
                    if (i) { return }
                    i = true;
                    t = r - (f.now() - a);
                    if (t < 0) { t = 0 }
                    if (e || t < 9) { s() } else { I(s, t) }
                }
            },
            ae = function(e) {
                var t, i;
                var a = 99;
                var r = function() {
                    t = null;
                    e()
                };
                var n = function() {
                    var e = f.now() - i;
                    if (e < a) { I(n, a - e) } else {
                        (l || r)(r)
                    }
                };
                return function() { i = f.now(); if (!t) { t = I(n, a) } }
            },
            e = function() {
                var v, m, c, h, e;
                var y, z, g, p, C, b, A;
                var n = /^img$/i;
                var d = /^iframe$/i;
                var E = "onscroll" in u && !/(gle|ing)bot/.test(navigator.userAgent);
                var _ = 0;
                var w = 0;
                var N = 0;
                var M = -1;
                var x = function(e) { N--; if (!e || N < 0 || !e.target) { N = 0 } };
                var W = function(e) { if (A == null) { A = Z(D.body, "visibility") == "hidden" } return A || !(Z(e.parentNode, "visibility") == "hidden" && Z(e, "visibility") == "hidden") };
                var S = function(e, t) {
                    var i;
                    var a = e;
                    var r = W(e);
                    g -= t;
                    b += t;
                    p -= t;
                    C += t;
                    while (r && (a = a.offsetParent) && a != D.body && a != O) {
                        r = (Z(a, "opacity") || 1) > 0;
                        if (r && Z(a, "overflow") != "visible") {
                            i = a.getBoundingClientRect();
                            r = C > i.left && p < i.right && b > i.top - 1 && g < i.bottom + 1
                        }
                    }
                    return r
                };
                var t = function() {
                    var e, t, i, a, r, n, s, l, o, u, f, c;
                    var d = k.elements;
                    if ((h = H.loadMode) && N < 8 && (e = d.length)) {
                        t = 0;
                        M++;
                        for (; t < e; t++) {
                            if (!d[t] || d[t]._lazyRace) { continue }
                            if (!E || k.prematureUnveil && k.prematureUnveil(d[t])) { R(d[t]); continue }
                            if (!(l = d[t][$]("data-expand")) || !(n = l * 1)) { n = w }
                            if (!u) {
                                u = !H.expand || H.expand < 1 ? O.clientHeight > 500 && O.clientWidth > 500 ? 500 : 370 : H.expand;
                                k._defEx = u;
                                f = u * H.expFactor;
                                c = H.hFac;
                                A = null;
                                if (w < f && N < 1 && M > 2 && h > 2 && !D.hidden) {
                                    w = f;
                                    M = 0
                                } else if (h > 1 && M > 1 && N < 6) { w = u } else { w = _ }
                            }
                            if (o !== n) {
                                y = innerWidth + n * c;
                                z = innerHeight + n;
                                s = n * -1;
                                o = n
                            }
                            i = d[t].getBoundingClientRect();
                            if ((b = i.bottom) >= s && (g = i.top) <= z && (C = i.right) >= s * c && (p = i.left) <= y && (b || C || p || g) && (H.loadHidden || W(d[t])) && (m && N < 3 && !l && (h < 3 || M < 4) || S(d[t], n))) {
                                R(d[t]);
                                r = true;
                                if (N > 9) { break }
                            } else if (!r && m && !a && N < 4 && M < 4 && h > 2 && (v[0] || H.preloadAfterLoad) && (v[0] || !l && (b || C || p || g || d[t][$](H.sizesAttr) != "auto"))) { a = v[0] || d[t] }
                        }
                        if (a && !r) { R(a) }
                    }
                };
                var i = ie(t);
                var B = function(e) {
                    var t = e.target;
                    if (t._lazyCache) { delete t._lazyCache; return }
                    x(e);
                    K(t, H.loadedClass);
                    Q(t, H.loadingClass);
                    V(t, L);
                    X(t, "lazyloaded")
                };
                var a = te(B);
                var L = function(e) { a({ target: e.target }) };
                var T = function(t, i) { try { t.contentWindow.location.replace(i) } catch (e) { t.src = i } };
                var F = function(e) { var t; var i = e[$](H.srcsetAttr); if (t = H.customMedia[e[$]("data-media") || e[$]("media")]) { e.setAttribute("media", t) } if (i) { e.setAttribute("srcset", i) } };
                var s = te(function(t, e, i, a, r) {
                    var n, s, l, o, u, f;
                    if (!(u = X(t, "lazybeforeunveil", e)).defaultPrevented) {
                        if (a) { if (i) { K(t, H.autosizesClass) } else { t.setAttribute("sizes", a) } }
                        s = t[$](H.srcsetAttr);
                        n = t[$](H.srcAttr);
                        if (r) {
                            l = t.parentNode;
                            o = l && j.test(l.nodeName || "")
                        }
                        f = e.firesLoad || "src" in t && (s || n || o);
                        u = { target: t };
                        K(t, H.loadingClass);
                        if (f) {
                            clearTimeout(c);
                            c = I(x, 2500);
                            V(t, L, true)
                        }
                        if (o) { G.call(l.getElementsByTagName("source"), F) }
                        if (s) { t.setAttribute("srcset", s) } else if (n && !o) { if (d.test(t.nodeName)) { T(t, n) } else { t.src = n } }
                        if (r && (s || o)) { Y(t, { src: n }) }
                    }
                    if (t._lazyRace) { delete t._lazyRace }
                    Q(t, H.lazyClass);
                    ee(function() {
                        var e = t.complete && t.naturalWidth > 1;
                        if (!f || e) {
                            if (e) { K(t, "ls-is-cached") }
                            B(u);
                            t._lazyCache = true;
                            I(function() { if ("_lazyCache" in t) { delete t._lazyCache } }, 9)
                        }
                        if (t.loading == "lazy") { N-- }
                    }, true)
                });
                var R = function(e) {
                    if (e._lazyRace) { return }
                    var t;
                    var i = n.test(e.nodeName);
                    var a = i && (e[$](H.sizesAttr) || e[$]("sizes"));
                    var r = a == "auto";
                    if ((r || !m) && i && (e[$]("src") || e.srcset) && !e.complete && !J(e, H.errorClass) && J(e, H.lazyClass)) { return }
                    t = X(e, "lazyunveilread").detail;
                    if (r) { re.updateElem(e, true, e.offsetWidth) }
                    e._lazyRace = true;
                    N++;
                    s(e, t, r, a, i)
                };
                var r = ae(function() {
                    H.loadMode = 3;
                    i()
                });
                var l = function() {
                    if (H.loadMode == 3) { H.loadMode = 2 }
                    r()
                };
                var o = function() {
                    if (m) { return }
                    if (f.now() - e < 999) { I(o, 999); return }
                    m = true;
                    H.loadMode = 3;
                    i();
                    q("scroll", l, true)
                };
                return {
                    _: function() {
                        e = f.now();
                        k.elements = D.getElementsByClassName(H.lazyClass);
                        v = D.getElementsByClassName(H.lazyClass + " " + H.preloadClass);
                        q("scroll", i, true);
                        q("resize", i, true);
                        q("pageshow", function(e) { if (e.persisted) { var t = D.querySelectorAll("." + H.loadingClass); if (t.length && t.forEach) { U(function() { t.forEach(function(e) { if (e.complete) { R(e) } }) }) } } });
                        if (u.MutationObserver) { new MutationObserver(i).observe(O, { childList: true, subtree: true, attributes: true }) } else {
                            O[P]("DOMNodeInserted", i, true);
                            O[P]("DOMAttrModified", i, true);
                            setInterval(i, 999)
                        }
                        q("hashchange", i, true);
                        ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach(function(e) { D[P](e, i, true) });
                        if (/d$|^c/.test(D.readyState)) { o() } else {
                            q("load", o);
                            D[P]("DOMContentLoaded", i);
                            I(o, 2e4)
                        }
                        if (k.elements.length) {
                            t();
                            ee._lsFlush()
                        } else { i() }
                    },
                    checkElems: i,
                    unveil: R,
                    _aLSL: l
                }
            }(),
            re = function() {
                var i;
                var n = te(function(e, t, i, a) {
                    var r, n, s;
                    e._lazysizesWidth = a;
                    a += "px";
                    e.setAttribute("sizes", a);
                    if (j.test(t.nodeName || "")) { r = t.getElementsByTagName("source"); for (n = 0, s = r.length; n < s; n++) { r[n].setAttribute("sizes", a) } }
                    if (!i.detail.dataAttr) { Y(e, i.detail) }
                });
                var a = function(e, t, i) {
                    var a;
                    var r = e.parentNode;
                    if (r) {
                        i = s(e, r, i);
                        a = X(e, "lazybeforesizes", { width: i, dataAttr: !!t });
                        if (!a.defaultPrevented) { i = a.detail.width; if (i && i !== e._lazysizesWidth) { n(e, r, a, i) } }
                    }
                };
                var e = function() { var e; var t = i.length; if (t) { e = 0; for (; e < t; e++) { a(i[e]) } } };
                var t = ae(e);
                return {
                    _: function() {
                        i = D.getElementsByClassName(H.autosizesClass);
                        q("resize", t)
                    },
                    checkElems: t,
                    updateElem: a
                }
            }(),
            t = function() {
                if (!t.i && D.getElementsByClassName) {
                    t.i = true;
                    re._();
                    e._()
                }
            };
        return I(function() { H.init && t() }), k = { cfg: H, autoSizer: re, loader: e, init: t, uP: Y, aC: K, rC: Q, hC: J, fire: X, gW: s, rAF: ee }
    }(e, e.document, Date);
    e.lazySizes = t, "object" == typeof module && module.exports && (module.exports = t)
}("undefined" != typeof window ? window : {});
/*! picturefill - v3.0.2 - 2016-02-12
 * https://scottjehl.github.io/picturefill/
 * Copyright (c) 2016 https://github.com/scottjehl/picturefill/blob/master/Authors.txt; Licensed MIT
 */
! function(a) {
    var b = navigator.userAgent;
    a.HTMLPictureElement && /ecko/.test(b) && b.match(/rv\:(\d+)/) && RegExp.$1 < 45 && addEventListener("resize", function() {
        var b, c = document.createElement("source"),
            d = function(a) { var b, d, e = a.parentNode; "PICTURE" === e.nodeName.toUpperCase() ? (b = c.cloneNode(), e.insertBefore(b, e.firstElementChild), setTimeout(function() { e.removeChild(b) })) : (!a._pfLastSize || a.offsetWidth > a._pfLastSize) && (a._pfLastSize = a.offsetWidth, d = a.sizes, a.sizes += ",100vw", setTimeout(function() { a.sizes = d })) },
            e = function() { var a, b = document.querySelectorAll("picture > img, img[srcset][sizes]"); for (a = 0; a < b.length; a++) d(b[a]) },
            f = function() { clearTimeout(b), b = setTimeout(e, 99) },
            g = a.matchMedia && matchMedia("(orientation: landscape)"),
            h = function() { f(), g && g.addListener && g.addListener(f) };
        return c.srcset = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==", /^[c|i]|d$/.test(document.readyState || "") ? h() : document.addEventListener("DOMContentLoaded", h), f
    }())
}(window),
function(a, b, c) {
    "use strict";

    function d(a) { return " " === a || "	" === a || "\n" === a || "\f" === a || "\r" === a }

    function e(b, c) { var d = new a.Image; return d.onerror = function() { A[b] = !1, ba() }, d.onload = function() { A[b] = 1 === d.width, ba() }, d.src = c, "pending" }

    function f() { M = !1, P = a.devicePixelRatio, N = {}, O = {}, s.DPR = P || 1, Q.width = Math.max(a.innerWidth || 0, z.clientWidth), Q.height = Math.max(a.innerHeight || 0, z.clientHeight), Q.vw = Q.width / 100, Q.vh = Q.height / 100, r = [Q.height, Q.width, P].join("-"), Q.em = s.getEmValue(), Q.rem = Q.em }

    function g(a, b, c, d) { var e, f, g, h; return "saveData" === B.algorithm ? a > 2.7 ? h = c + 1 : (f = b - c, e = Math.pow(a - .6, 1.5), g = f * e, d && (g += .1 * e), h = a + g) : h = c > 1 ? Math.sqrt(a * b) : a, h > c }

    function h(a) {
        var b, c = s.getSet(a),
            d = !1;
        "pending" !== c && (d = r, c && (b = s.setRes(c), s.applySetCandidate(b, a))), a[s.ns].evaled = d
    }

    function i(a, b) { return a.res - b.res }

    function j(a, b, c) { var d; return !c && b && (c = a[s.ns].sets, c = c && c[c.length - 1]), d = k(b, c), d && (b = s.makeUrl(b), a[s.ns].curSrc = b, a[s.ns].curCan = d, d.res || aa(d, d.set.sizes)), d }

    function k(a, b) {
        var c, d, e;
        if (a && b)
            for (e = s.parseSet(b), a = s.makeUrl(a), c = 0; c < e.length; c++)
                if (a === s.makeUrl(e[c].url)) { d = e[c]; break }
        return d
    }

    function l(a, b) { var c, d, e, f, g = a.getElementsByTagName("source"); for (c = 0, d = g.length; d > c; c++) e = g[c], e[s.ns] = !0, f = e.getAttribute("srcset"), f && b.push({ srcset: f, media: e.getAttribute("media"), type: e.getAttribute("type"), sizes: e.getAttribute("sizes") }) }

    function m(a, b) {
        function c(b) { var c, d = b.exec(a.substring(m)); return d ? (c = d[0], m += c.length, c) : void 0 }

        function e() {
            var a, c, d, e, f, i, j, k, l, m = !1,
                o = {};
            for (e = 0; e < h.length; e++) f = h[e], i = f[f.length - 1], j = f.substring(0, f.length - 1), k = parseInt(j, 10), l = parseFloat(j), X.test(j) && "w" === i ? ((a || c) && (m = !0), 0 === k ? m = !0 : a = k) : Y.test(j) && "x" === i ? ((a || c || d) && (m = !0), 0 > l ? m = !0 : c = l) : X.test(j) && "h" === i ? ((d || c) && (m = !0), 0 === k ? m = !0 : d = k) : m = !0;
            m || (o.url = g, a && (o.w = a), c && (o.d = c), d && (o.h = d), d || c || a || (o.d = 1), 1 === o.d && (b.has1x = !0), o.set = b, n.push(o))
        }

        function f() {
            for (c(T), i = "", j = "in descriptor";;) {
                if (k = a.charAt(m), "in descriptor" === j)
                    if (d(k)) i && (h.push(i), i = "", j = "after descriptor");
                    else {
                        if ("," === k) return m += 1, i && h.push(i), void e();
                        if ("(" === k) i += k, j = "in parens";
                        else {
                            if ("" === k) return i && h.push(i), void e();
                            i += k
                        }
                    }
                else if ("in parens" === j)
                    if (")" === k) i += k, j = "in descriptor";
                    else {
                        if ("" === k) return h.push(i), void e();
                        i += k
                    }
                else if ("after descriptor" === j)
                    if (d(k));
                    else {
                        if ("" === k) return void e();
                        j = "in descriptor", m -= 1
                    }
                m += 1
            }
        }
        for (var g, h, i, j, k, l = a.length, m = 0, n = [];;) {
            if (c(U), m >= l) return n;
            g = c(V), h = [], "," === g.slice(-1) ? (g = g.replace(W, ""), e()) : f()
        }
    }

    function n(a) {
        function b(a) {
            function b() { f && (g.push(f), f = "") }

            function c() { g[0] && (h.push(g), g = []) }
            for (var e, f = "", g = [], h = [], i = 0, j = 0, k = !1;;) {
                if (e = a.charAt(j), "" === e) return b(), c(), h;
                if (k) {
                    if ("*" === e && "/" === a[j + 1]) { k = !1, j += 2, b(); continue }
                    j += 1
                } else {
                    if (d(e)) {
                        if (a.charAt(j - 1) && d(a.charAt(j - 1)) || !f) { j += 1; continue }
                        if (0 === i) { b(), j += 1; continue }
                        e = " "
                    } else if ("(" === e) i += 1;
                    else if (")" === e) i -= 1;
                    else { if ("," === e) { b(), c(), j += 1; continue } if ("/" === e && "*" === a.charAt(j + 1)) { k = !0, j += 2; continue } }
                    f += e, j += 1
                }
            }
        }

        function c(a) { return k.test(a) && parseFloat(a) >= 0 ? !0 : l.test(a) ? !0 : "0" === a || "-0" === a || "+0" === a ? !0 : !1 }
        var e, f, g, h, i, j, k = /^(?:[+-]?[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?(?:ch|cm|em|ex|in|mm|pc|pt|px|rem|vh|vmin|vmax|vw)$/i,
            l = /^calc\((?:[0-9a-z \.\+\-\*\/\(\)]+)\)$/i;
        for (f = b(a), g = f.length, e = 0; g > e; e++)
            if (h = f[e], i = h[h.length - 1], c(i)) { if (j = i, h.pop(), 0 === h.length) return j; if (h = h.join(" "), s.matchesMedia(h)) return j }
        return "100vw"
    }
    b.createElement("picture");
    var o, p, q, r, s = {},
        t = !1,
        u = function() {},
        v = b.createElement("img"),
        w = v.getAttribute,
        x = v.setAttribute,
        y = v.removeAttribute,
        z = b.documentElement,
        A = {},
        B = { algorithm: "" },
        C = "data-pfsrc",
        D = C + "set",
        E = navigator.userAgent,
        F = /rident/.test(E) || /ecko/.test(E) && E.match(/rv\:(\d+)/) && RegExp.$1 > 35,
        G = "currentSrc",
        H = /\s+\+?\d+(e\d+)?w/,
        I = /(\([^)]+\))?\s*(.+)/,
        J = a.picturefillCFG,
        K = "position:absolute;left:0;visibility:hidden;display:block;padding:0;border:none;font-size:1em;width:1em;overflow:hidden;clip:rect(0px, 0px, 0px, 0px)",
        L = "font-size:100%!important;",
        M = !0,
        N = {},
        O = {},
        P = a.devicePixelRatio,
        Q = { px: 1, "in": 96 },
        R = b.createElement("a"),
        S = !1,
        T = /^[ \t\n\r\u000c]+/,
        U = /^[, \t\n\r\u000c]+/,
        V = /^[^ \t\n\r\u000c]+/,
        W = /[,]+$/,
        X = /^\d+$/,
        Y = /^-?(?:[0-9]+|[0-9]*\.[0-9]+)(?:[eE][+-]?[0-9]+)?$/,
        Z = function(a, b, c, d) { a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent("on" + b, c) },
        $ = function(a) { var b = {}; return function(c) { return c in b || (b[c] = a(c)), b[c] } },
        _ = function() {
            var a = /^([\d\.]+)(em|vw|px)$/,
                b = function() { for (var a = arguments, b = 0, c = a[0]; ++b in a;) c = c.replace(a[b], a[++b]); return c },
                c = $(function(a) { return "return " + b((a || "").toLowerCase(), /\band\b/g, "&&", /,/g, "||", /min-([a-z-\s]+):/g, "e.$1>=", /max-([a-z-\s]+):/g, "e.$1<=", /calc([^)]+)/g, "($1)", /(\d+[\.]*[\d]*)([a-z]+)/g, "($1 * e.$2)", /^(?!(e.[a-z]|[0-9\.&=|><\+\-\*\(\)\/])).*/gi, "") + ";" });
            return function(b, d) {
                var e;
                if (!(b in N))
                    if (N[b] = !1, d && (e = b.match(a))) N[b] = e[1] * Q[e[2]];
                    else try { N[b] = new Function("e", c(b))(Q) } catch (f) {}
                return N[b]
            }
        }(),
        aa = function(a, b) { return a.w ? (a.cWidth = s.calcListLength(b || "100vw"), a.res = a.w / a.cWidth) : a.res = a.d, a },
        ba = function(a) {
            if (t) {
                var c, d, e, f = a || {};
                if (f.elements && 1 === f.elements.nodeType && ("IMG" === f.elements.nodeName.toUpperCase() ? f.elements = [f.elements] : (f.context = f.elements, f.elements = null)), c = f.elements || s.qsa(f.context || b, f.reevaluate || f.reselect ? s.sel : s.selShort), e = c.length) {
                    for (s.setupRun(f), S = !0, d = 0; e > d; d++) s.fillImg(c[d], f);
                    s.teardownRun(f)
                }
            }
        };
    o = a.console && console.warn ? function(a) { console.warn(a) } : u, G in v || (G = "src"), A["image/jpeg"] = !0, A["image/gif"] = !0, A["image/png"] = !0, A["image/svg+xml"] = b.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1"), s.ns = ("pf" + (new Date).getTime()).substr(0, 9), s.supSrcset = "srcset" in v, s.supSizes = "sizes" in v, s.supPicture = !!a.HTMLPictureElement, s.supSrcset && s.supPicture && !s.supSizes && ! function(a) { v.srcset = "data:,a", a.src = "data:,a", s.supSrcset = v.complete === a.complete, s.supPicture = s.supSrcset && s.supPicture }(b.createElement("img")), s.supSrcset && !s.supSizes ? ! function() {
        var a = "data:image/gif;base64,R0lGODlhAgABAPAAAP///wAAACH5BAAAAAAALAAAAAACAAEAAAICBAoAOw==",
            c = "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",
            d = b.createElement("img"),
            e = function() {
                var a = d.width;
                2 === a && (s.supSizes = !0), q = s.supSrcset && !s.supSizes, t = !0, setTimeout(ba)
            };
        d.onload = e, d.onerror = e, d.setAttribute("sizes", "9px"), d.srcset = c + " 1w," + a + " 9w", d.src = c
    }() : t = !0, s.selShort = "picture>img,img[srcset]", s.sel = s.selShort, s.cfg = B, s.DPR = P || 1, s.u = Q, s.types = A, s.setSize = u, s.makeUrl = $(function(a) { return R.href = a, R.href }), s.qsa = function(a, b) { return "querySelector" in a ? a.querySelectorAll(b) : [] }, s.matchesMedia = function() { return a.matchMedia && (matchMedia("(min-width: 0.1em)") || {}).matches ? s.matchesMedia = function(a) { return !a || matchMedia(a).matches } : s.matchesMedia = s.mMQ, s.matchesMedia.apply(this, arguments) }, s.mMQ = function(a) { return a ? _(a) : !0 }, s.calcLength = function(a) { var b = _(a, !0) || !1; return 0 > b && (b = !1), b }, s.supportsType = function(a) { return a ? A[a] : !0 }, s.parseSize = $(function(a) { var b = (a || "").match(I); return { media: b && b[1], length: b && b[2] } }), s.parseSet = function(a) { return a.cands || (a.cands = m(a.srcset, a)), a.cands }, s.getEmValue = function() {
        var a;
        if (!p && (a = b.body)) {
            var c = b.createElement("div"),
                d = z.style.cssText,
                e = a.style.cssText;
            c.style.cssText = K, z.style.cssText = L, a.style.cssText = L, a.appendChild(c), p = c.offsetWidth, a.removeChild(c), p = parseFloat(p, 10), z.style.cssText = d, a.style.cssText = e
        }
        return p || 16
    }, s.calcListLength = function(a) {
        if (!(a in O) || B.uT) {
            var b = s.calcLength(n(a));
            O[a] = b ? b : Q.width
        }
        return O[a]
    }, s.setRes = function(a) { var b; if (a) { b = s.parseSet(a); for (var c = 0, d = b.length; d > c; c++) aa(b[c], a.sizes) } return b }, s.setRes.res = aa, s.applySetCandidate = function(a, b) {
        if (a.length) {
            var c, d, e, f, h, k, l, m, n, o = b[s.ns],
                p = s.DPR;
            if (k = o.curSrc || b[G], l = o.curCan || j(b, k, a[0].set), l && l.set === a[0].set && (n = F && !b.complete && l.res - .1 > p, n || (l.cached = !0, l.res >= p && (h = l))), !h)
                for (a.sort(i), f = a.length, h = a[f - 1], d = 0; f > d; d++)
                    if (c = a[d], c.res >= p) { e = d - 1, h = a[e] && (n || k !== s.makeUrl(c.url)) && g(a[e].res, c.res, p, a[e].cached) ? a[e] : c; break }
            h && (m = s.makeUrl(h.url), o.curSrc = m, o.curCan = h, m !== k && s.setSrc(b, h), s.setSize(b))
        }
    }, s.setSrc = function(a, b) {
        var c;
        a.src = b.url, "image/svg+xml" === b.set.type && (c = a.style.width, a.style.width = a.offsetWidth + 1 + "px", a.offsetWidth + 1 && (a.style.width = c))
    }, s.getSet = function(a) {
        var b, c, d, e = !1,
            f = a[s.ns].sets;
        for (b = 0; b < f.length && !e; b++)
            if (c = f[b], c.srcset && s.matchesMedia(c.media) && (d = s.supportsType(c.type))) { "pending" === d && (c = d), e = c; break }
        return e
    }, s.parseSets = function(a, b, d) {
        var e, f, g, h, i = b && "PICTURE" === b.nodeName.toUpperCase(),
            j = a[s.ns];
        (j.src === c || d.src) && (j.src = w.call(a, "src"), j.src ? x.call(a, C, j.src) : y.call(a, C)), (j.srcset === c || d.srcset || !s.supSrcset || a.srcset) && (e = w.call(a, "srcset"), j.srcset = e, h = !0), j.sets = [], i && (j.pic = !0, l(b, j.sets)), j.srcset ? (f = { srcset: j.srcset, sizes: w.call(a, "sizes") }, j.sets.push(f), g = (q || j.src) && H.test(j.srcset || ""), g || !j.src || k(j.src, f) || f.has1x || (f.srcset += ", " + j.src, f.cands.push({ url: j.src, d: 1, set: f }))) : j.src && j.sets.push({ srcset: j.src, sizes: null }), j.curCan = null, j.curSrc = c, j.supported = !(i || f && !s.supSrcset || g && !s.supSizes), h && s.supSrcset && !j.supported && (e ? (x.call(a, D, e), a.srcset = "") : y.call(a, D)), j.supported && !j.srcset && (!j.src && a.src || a.src !== s.makeUrl(j.src)) && (null === j.src ? a.removeAttribute("src") : a.src = j.src), j.parsed = !0
    }, s.fillImg = function(a, b) {
        var c, d = b.reselect || b.reevaluate;
        a[s.ns] || (a[s.ns] = {}), c = a[s.ns], (d || c.evaled !== r) && ((!c.parsed || b.reevaluate) && s.parseSets(a, a.parentNode, b), c.supported ? c.evaled = r : h(a))
    }, s.setupRun = function() {
        (!S || M || P !== a.devicePixelRatio) && f()
    }, s.supPicture ? (ba = u, s.fillImg = u) : ! function() {
        var c, d = a.attachEvent ? /d$|^c/ : /d$|^c|^i/,
            e = function() {
                var a = b.readyState || "";
                f = setTimeout(e, "loading" === a ? 200 : 999), b.body && (s.fillImgs(), c = c || d.test(a), c && clearTimeout(f))
            },
            f = setTimeout(e, b.body ? 9 : 99),
            g = function(a, b) {
                var c, d, e = function() {
                    var f = new Date - d;
                    b > f ? c = setTimeout(e, b - f) : (c = null, a())
                };
                return function() { d = new Date, c || (c = setTimeout(e, b)) }
            },
            h = z.clientHeight,
            i = function() { M = Math.max(a.innerWidth || 0, z.clientWidth) !== Q.width || z.clientHeight !== h, h = z.clientHeight, M && s.fillImgs() };
        Z(a, "resize", g(i, 99)), Z(b, "readystatechange", e)
    }(), s.picturefill = ba, s.fillImgs = ba, s.teardownRun = u, ba._ = s, a.picturefillCFG = { pf: s, push: function(a) { var b = a.shift(); "function" == typeof s[b] ? s[b].apply(s, a) : (B[b] = a[0], S && s.fillImgs({ reselect: !0 })) } };
    for (; J && J.length;) a.picturefillCFG.push(J.shift());
    a.picturefill = ba, "object" == typeof module && "object" == typeof module.exports ? module.exports = ba : "function" == typeof define && define.amd && define("picturefill", function() { return ba }), s.supPicture || (A["image/webp"] = e("image/webp", "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA=="))
}(window, document);
if (!Element.prototype.matches) { Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector; }
if (!Element.prototype.closest) {
    Element.prototype.closest = function(s) {
        var el = this;
        if (!document.documentElement.contains(el)) return null;
        do {
            if (el.matches(s)) return el;
            el = el.parentElement || el.parentNode;
        } while (el !== null && el.nodeType === 1);
        return null;
    };
}
if (!NodeList.prototype.forEach) { NodeList.prototype.forEach = Array.prototype.forEach; }
if (!Array.from) {
    Array.from = (function() {
        var toStr = Object.prototype.toString;
        var isCallable = function(fn) { return typeof fn === 'function' || toStr.call(fn) === '[object Function]'; };
        var toInteger = function(value) {
            var number = Number(value);
            if (isNaN(number)) { return 0; }
            if (number === 0 || !isFinite(number)) { return number; }
            return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
        };
        var maxSafeInteger = Math.pow(2, 53) - 1;
        var toLength = function(value) { var len = toInteger(value); return Math.min(Math.max(len, 0), maxSafeInteger); };
        return function from(arrayLike) {
            var C = this;
            var items = Object(arrayLike);
            if (arrayLike == null) { throw new TypeError('Array.from requires an array-like object - not null or undefined'); }
            var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
            var T;
            if (typeof mapFn !== 'undefined') {
                if (!isCallable(mapFn)) { throw new TypeError('Array.from: when provided, the second argument must be a function'); }
                if (arguments.length > 2) { T = arguments[2]; }
            }
            var len = toLength(items.length);
            var A = isCallable(C) ? Object(new C(len)) : new Array(len);
            var k = 0;
            var kValue;
            while (k < len) {
                kValue = items[k];
                if (mapFn) { A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k); } else { A[k] = kValue; }
                k += 1;
            }
            A.length = len;
            return A;
        };
    }());
}
if (!Array.prototype.filter) {
    Array.prototype.filter = function(func, thisArg) {
        'use strict';
        if (!((typeof func === 'Function' || typeof func === 'function') && this))
            throw new TypeError();
        var len = this.length >>> 0,
            res = new Array(len),
            t = this,
            c = 0,
            i = -1;
        if (thisArg === undefined) { while (++i !== len) { if (i in this) { if (func(t[i], i, t)) { res[c++] = t[i]; } } } } else { while (++i !== len) { if (i in this) { if (func.call(thisArg, t[i], i, t)) { res[c++] = t[i]; } } } }
        res.length = c;
        return res;
    };
}
if (!Array.prototype.includes) {
    Object.defineProperty(Array.prototype, 'includes', {
        value: function(searchElement, fromIndex) {
            if (this == null) { throw new TypeError('"this" is null or not defined'); }
            var o = Object(this);
            var len = o.length >>> 0;
            if (len === 0) { return false; }
            var n = fromIndex | 0;
            var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

            function sameValueZero(x, y) { return x === y || (typeof x === 'number' && typeof y === 'number' && isNaN(x) && isNaN(y)); }
            while (k < len) {
                if (sameValueZero(o[k], searchElement)) { return true; }
                k++;
            }
            return false;
        }
    });
}
if (!String.prototype.includes) {
    String.prototype.includes = function(search, start) {
        'use strict';
        if (typeof start !== 'number') { start = 0; }
        if (start + search.length > this.length) { return false; } else { return this.indexOf(search, start) !== -1; }
    };
}! function(e, t) { "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (e = e || self).Swiper = t() }(this, (function() {
    "use strict";

    function e(e, t) {
        for (var i = 0; i < t.length; i++) {
            var s = t[i];
            s.enumerable = s.enumerable || !1, s.configurable = !0, "value" in s && (s.writable = !0), Object.defineProperty(e, s.key, s)
        }
    }

    function t() { return (t = Object.assign || function(e) { for (var t = 1; t < arguments.length; t++) { var i = arguments[t]; for (var s in i) Object.prototype.hasOwnProperty.call(i, s) && (e[s] = i[s]) } return e }).apply(this, arguments) }

    function i(e) { return null !== e && "object" == typeof e && "constructor" in e && e.constructor === Object }

    function s(e, t) { void 0 === e && (e = {}), void 0 === t && (t = {}), Object.keys(t).forEach((function(a) { void 0 === e[a] ? e[a] = t[a] : i(t[a]) && i(e[a]) && Object.keys(t[a]).length > 0 && s(e[a], t[a]) })) }
    var a = { body: {}, addEventListener: function() {}, removeEventListener: function() {}, activeElement: { blur: function() {}, nodeName: "" }, querySelector: function() { return null }, querySelectorAll: function() { return [] }, getElementById: function() { return null }, createEvent: function() { return { initEvent: function() {} } }, createElement: function() { return { children: [], childNodes: [], style: {}, setAttribute: function() {}, getElementsByTagName: function() { return [] } } }, createElementNS: function() { return {} }, importNode: function() { return null }, location: { hash: "", host: "", hostname: "", href: "", origin: "", pathname: "", protocol: "", search: "" } };

    function r() { var e = "undefined" != typeof document ? document : {}; return s(e, a), e }
    var n = { document: a, navigator: { userAgent: "" }, location: { hash: "", host: "", hostname: "", href: "", origin: "", pathname: "", protocol: "", search: "" }, history: { replaceState: function() {}, pushState: function() {}, go: function() {}, back: function() {} }, CustomEvent: function() { return this }, addEventListener: function() {}, removeEventListener: function() {}, getComputedStyle: function() { return { getPropertyValue: function() { return "" } } }, Image: function() {}, Date: function() {}, screen: {}, setTimeout: function() {}, clearTimeout: function() {}, matchMedia: function() { return {} }, requestAnimationFrame: function(e) { return "undefined" == typeof setTimeout ? (e(), null) : setTimeout(e, 0) }, cancelAnimationFrame: function(e) { "undefined" != typeof setTimeout && clearTimeout(e) } };

    function l() { var e = "undefined" != typeof window ? window : {}; return s(e, n), e }

    function o(e) { return (o = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) { return e.__proto__ || Object.getPrototypeOf(e) })(e) }

    function d(e, t) { return (d = Object.setPrototypeOf || function(e, t) { return e.__proto__ = t, e })(e, t) }

    function h() { if ("undefined" == typeof Reflect || !Reflect.construct) return !1; if (Reflect.construct.sham) return !1; if ("function" == typeof Proxy) return !0; try { return Date.prototype.toString.call(Reflect.construct(Date, [], (function() {}))), !0 } catch (e) { return !1 } }

    function p(e, t, i) {
        return (p = h() ? Reflect.construct : function(e, t, i) {
            var s = [null];
            s.push.apply(s, t);
            var a = new(Function.bind.apply(e, s));
            return i && d(a, i.prototype), a
        }).apply(null, arguments)
    }

    function u(e) {
        var t = "function" == typeof Map ? new Map : void 0;
        return (u = function(e) {
            if (null === e || (i = e, -1 === Function.toString.call(i).indexOf("[native code]"))) return e;
            var i;
            if ("function" != typeof e) throw new TypeError("Super expression must either be null or a function");
            if (void 0 !== t) {
                if (t.has(e)) return t.get(e);
                t.set(e, s)
            }

            function s() { return p(e, arguments, o(this).constructor) }
            return s.prototype = Object.create(e.prototype, { constructor: { value: s, enumerable: !1, writable: !0, configurable: !0 } }), d(s, e)
        })(e)
    }
    var c = function(e) {
        var t, i;

        function s(t) { var i, s, a; return i = e.call.apply(e, [this].concat(t)) || this, s = function(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e }(i), a = s.__proto__, Object.defineProperty(s, "__proto__", { get: function() { return a }, set: function(e) { a.__proto__ = e } }), i }
        return i = e, (t = s).prototype = Object.create(i.prototype), t.prototype.constructor = t, t.__proto__ = i, s
    }(u(Array));

    function v(e) { void 0 === e && (e = []); var t = []; return e.forEach((function(e) { Array.isArray(e) ? t.push.apply(t, v(e)) : t.push(e) })), t }

    function f(e, t) { return Array.prototype.filter.call(e, t) }

    function m(e, t) {
        var i = l(),
            s = r(),
            a = [];
        if (!t && e instanceof c) return e;
        if (!e) return new c(a);
        if ("string" == typeof e) {
            var n = e.trim();
            if (n.indexOf("<") >= 0 && n.indexOf(">") >= 0) {
                var o = "div";
                0 === n.indexOf("<li") && (o = "ul"), 0 === n.indexOf("<tr") && (o = "tbody"), 0 !== n.indexOf("<td") && 0 !== n.indexOf("<th") || (o = "tr"), 0 === n.indexOf("<tbody") && (o = "table"), 0 === n.indexOf("<option") && (o = "select");
                var d = s.createElement(o);
                d.innerHTML = n;
                for (var h = 0; h < d.childNodes.length; h += 1) a.push(d.childNodes[h])
            } else a = function(e, t) { if ("string" != typeof e) return [e]; for (var i = [], s = t.querySelectorAll(e), a = 0; a < s.length; a += 1) i.push(s[a]); return i }(e.trim(), t || s)
        } else if (e.nodeType || e === i || e === s) a.push(e);
        else if (Array.isArray(e)) {
            if (e instanceof c) return e;
            a = e
        }
        return new c(function(e) { for (var t = [], i = 0; i < e.length; i += 1) - 1 === t.indexOf(e[i]) && t.push(e[i]); return t }(a))
    }
    m.fn = c.prototype;
    var g, w, b, y = {
        addClass: function() {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function(e) { return e.split(" ") })));
            return this.forEach((function(e) {
                var t;
                (t = e.classList).add.apply(t, s)
            })), this
        },
        removeClass: function() {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function(e) { return e.split(" ") })));
            return this.forEach((function(e) {
                var t;
                (t = e.classList).remove.apply(t, s)
            })), this
        },
        hasClass: function() { for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i]; var s = v(t.map((function(e) { return e.split(" ") }))); return f(this, (function(e) { return s.filter((function(t) { return e.classList.contains(t) })).length > 0 })).length > 0 },
        toggleClass: function() {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = v(t.map((function(e) { return e.split(" ") })));
            this.forEach((function(e) { s.forEach((function(t) { e.classList.toggle(t) })) }))
        },
        attr: function(e, t) {
            if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
            for (var i = 0; i < this.length; i += 1)
                if (2 === arguments.length) this[i].setAttribute(e, t);
                else
                    for (var s in e) this[i][s] = e[s], this[i].setAttribute(s, e[s]);
            return this
        },
        removeAttr: function(e) { for (var t = 0; t < this.length; t += 1) this[t].removeAttribute(e); return this },
        transform: function(e) { for (var t = 0; t < this.length; t += 1) this[t].style.transform = e; return this },
        transition: function(e) { for (var t = 0; t < this.length; t += 1) this[t].style.transition = "string" != typeof e ? e + "ms" : e; return this },
        on: function() {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = t[0],
                a = t[1],
                r = t[2],
                n = t[3];

            function l(e) {
                var t = e.target;
                if (t) {
                    var i = e.target.dom7EventData || [];
                    if (i.indexOf(e) < 0 && i.unshift(e), m(t).is(a)) r.apply(t, i);
                    else
                        for (var s = m(t).parents(), n = 0; n < s.length; n += 1) m(s[n]).is(a) && r.apply(s[n], i)
                }
            }

            function o(e) {
                var t = e && e.target && e.target.dom7EventData || [];
                t.indexOf(e) < 0 && t.unshift(e), r.apply(this, t)
            }
            "function" == typeof t[1] && (s = t[0], r = t[1], n = t[2], a = void 0), n || (n = !1);
            for (var d, h = s.split(" "), p = 0; p < this.length; p += 1) {
                var u = this[p];
                if (a)
                    for (d = 0; d < h.length; d += 1) {
                        var c = h[d];
                        u.dom7LiveListeners || (u.dom7LiveListeners = {}), u.dom7LiveListeners[c] || (u.dom7LiveListeners[c] = []), u.dom7LiveListeners[c].push({ listener: r, proxyListener: l }), u.addEventListener(c, l, n)
                    } else
                        for (d = 0; d < h.length; d += 1) {
                            var v = h[d];
                            u.dom7Listeners || (u.dom7Listeners = {}), u.dom7Listeners[v] || (u.dom7Listeners[v] = []), u.dom7Listeners[v].push({ listener: r, proxyListener: o }), u.addEventListener(v, o, n)
                        }
            }
            return this
        },
        off: function() {
            for (var e = arguments.length, t = new Array(e), i = 0; i < e; i++) t[i] = arguments[i];
            var s = t[0],
                a = t[1],
                r = t[2],
                n = t[3];
            "function" == typeof t[1] && (s = t[0], r = t[1], n = t[2], a = void 0), n || (n = !1);
            for (var l = s.split(" "), o = 0; o < l.length; o += 1)
                for (var d = l[o], h = 0; h < this.length; h += 1) {
                    var p = this[h],
                        u = void 0;
                    if (!a && p.dom7Listeners ? u = p.dom7Listeners[d] : a && p.dom7LiveListeners && (u = p.dom7LiveListeners[d]), u && u.length)
                        for (var c = u.length - 1; c >= 0; c -= 1) {
                            var v = u[c];
                            r && v.listener === r || r && v.listener && v.listener.dom7proxy && v.listener.dom7proxy === r ? (p.removeEventListener(d, v.proxyListener, n), u.splice(c, 1)) : r || (p.removeEventListener(d, v.proxyListener, n), u.splice(c, 1))
                        }
                }
            return this
        },
        trigger: function() {
            for (var e = l(), t = arguments.length, i = new Array(t), s = 0; s < t; s++) i[s] = arguments[s];
            for (var a = i[0].split(" "), r = i[1], n = 0; n < a.length; n += 1)
                for (var o = a[n], d = 0; d < this.length; d += 1) {
                    var h = this[d];
                    if (e.CustomEvent) {
                        var p = new e.CustomEvent(o, { detail: r, bubbles: !0, cancelable: !0 });
                        h.dom7EventData = i.filter((function(e, t) { return t > 0 })), h.dispatchEvent(p), h.dom7EventData = [], delete h.dom7EventData
                    }
                }
            return this
        },
        transitionEnd: function(e) { var t = this; return e && t.on("transitionend", (function i(s) { s.target === this && (e.call(this, s), t.off("transitionend", i)) })), this },
        outerWidth: function(e) { if (this.length > 0) { if (e) { var t = this.styles(); return this[0].offsetWidth + parseFloat(t.getPropertyValue("margin-right")) + parseFloat(t.getPropertyValue("margin-left")) } return this[0].offsetWidth } return null },
        outerHeight: function(e) { if (this.length > 0) { if (e) { var t = this.styles(); return this[0].offsetHeight + parseFloat(t.getPropertyValue("margin-top")) + parseFloat(t.getPropertyValue("margin-bottom")) } return this[0].offsetHeight } return null },
        styles: function() { var e = l(); return this[0] ? e.getComputedStyle(this[0], null) : {} },
        offset: function() {
            if (this.length > 0) {
                var e = l(),
                    t = r(),
                    i = this[0],
                    s = i.getBoundingClientRect(),
                    a = t.body,
                    n = i.clientTop || a.clientTop || 0,
                    o = i.clientLeft || a.clientLeft || 0,
                    d = i === e ? e.scrollY : i.scrollTop,
                    h = i === e ? e.scrollX : i.scrollLeft;
                return { top: s.top + d - n, left: s.left + h - o }
            }
            return null
        },
        css: function(e, t) {
            var i, s = l();
            if (1 === arguments.length) {
                if ("string" != typeof e) {
                    for (i = 0; i < this.length; i += 1)
                        for (var a in e) this[i].style[a] = e[a];
                    return this
                }
                if (this[0]) return s.getComputedStyle(this[0], null).getPropertyValue(e)
            }
            if (2 === arguments.length && "string" == typeof e) { for (i = 0; i < this.length; i += 1) this[i].style[e] = t; return this }
            return this
        },
        each: function(e) { return e ? (this.forEach((function(t, i) { e.apply(t, [t, i]) })), this) : this },
        html: function(e) { if (void 0 === e) return this[0] ? this[0].innerHTML : null; for (var t = 0; t < this.length; t += 1) this[t].innerHTML = e; return this },
        text: function(e) { if (void 0 === e) return this[0] ? this[0].textContent.trim() : null; for (var t = 0; t < this.length; t += 1) this[t].textContent = e; return this },
        is: function(e) {
            var t, i, s = l(),
                a = r(),
                n = this[0];
            if (!n || void 0 === e) return !1;
            if ("string" == typeof e) {
                if (n.matches) return n.matches(e);
                if (n.webkitMatchesSelector) return n.webkitMatchesSelector(e);
                if (n.msMatchesSelector) return n.msMatchesSelector(e);
                for (t = m(e), i = 0; i < t.length; i += 1)
                    if (t[i] === n) return !0;
                return !1
            }
            if (e === a) return n === a;
            if (e === s) return n === s;
            if (e.nodeType || e instanceof c) {
                for (t = e.nodeType ? [e] : e, i = 0; i < t.length; i += 1)
                    if (t[i] === n) return !0;
                return !1
            }
            return !1
        },
        index: function() { var e, t = this[0]; if (t) { for (e = 0; null !== (t = t.previousSibling);) 1 === t.nodeType && (e += 1); return e } },
        eq: function(e) { if (void 0 === e) return this; var t = this.length; if (e > t - 1) return m([]); if (e < 0) { var i = t + e; return m(i < 0 ? [] : [this[i]]) } return m([this[e]]) },
        append: function() {
            for (var e, t = r(), i = 0; i < arguments.length; i += 1) {
                e = i < 0 || arguments.length <= i ? void 0 : arguments[i];
                for (var s = 0; s < this.length; s += 1)
                    if ("string" == typeof e) { var a = t.createElement("div"); for (a.innerHTML = e; a.firstChild;) this[s].appendChild(a.firstChild) } else if (e instanceof c)
                    for (var n = 0; n < e.length; n += 1) this[s].appendChild(e[n]);
                else this[s].appendChild(e)
            }
            return this
        },
        prepend: function(e) {
            var t, i, s = r();
            for (t = 0; t < this.length; t += 1)
                if ("string" == typeof e) { var a = s.createElement("div"); for (a.innerHTML = e, i = a.childNodes.length - 1; i >= 0; i -= 1) this[t].insertBefore(a.childNodes[i], this[t].childNodes[0]) } else if (e instanceof c)
                for (i = 0; i < e.length; i += 1) this[t].insertBefore(e[i], this[t].childNodes[0]);
            else this[t].insertBefore(e, this[t].childNodes[0]);
            return this
        },
        next: function(e) { return this.length > 0 ? e ? this[0].nextElementSibling && m(this[0].nextElementSibling).is(e) ? m([this[0].nextElementSibling]) : m([]) : this[0].nextElementSibling ? m([this[0].nextElementSibling]) : m([]) : m([]) },
        nextAll: function(e) {
            var t = [],
                i = this[0];
            if (!i) return m([]);
            for (; i.nextElementSibling;) {
                var s = i.nextElementSibling;
                e ? m(s).is(e) && t.push(s) : t.push(s), i = s
            }
            return m(t)
        },
        prev: function(e) { if (this.length > 0) { var t = this[0]; return e ? t.previousElementSibling && m(t.previousElementSibling).is(e) ? m([t.previousElementSibling]) : m([]) : t.previousElementSibling ? m([t.previousElementSibling]) : m([]) } return m([]) },
        prevAll: function(e) {
            var t = [],
                i = this[0];
            if (!i) return m([]);
            for (; i.previousElementSibling;) {
                var s = i.previousElementSibling;
                e ? m(s).is(e) && t.push(s) : t.push(s), i = s
            }
            return m(t)
        },
        parent: function(e) { for (var t = [], i = 0; i < this.length; i += 1) null !== this[i].parentNode && (e ? m(this[i].parentNode).is(e) && t.push(this[i].parentNode) : t.push(this[i].parentNode)); return m(t) },
        parents: function(e) {
            for (var t = [], i = 0; i < this.length; i += 1)
                for (var s = this[i].parentNode; s;) e ? m(s).is(e) && t.push(s) : t.push(s), s = s.parentNode;
            return m(t)
        },
        closest: function(e) { var t = this; return void 0 === e ? m([]) : (t.is(e) || (t = t.parents(e).eq(0)), t) },
        find: function(e) {
            for (var t = [], i = 0; i < this.length; i += 1)
                for (var s = this[i].querySelectorAll(e), a = 0; a < s.length; a += 1) t.push(s[a]);
            return m(t)
        },
        children: function(e) {
            for (var t = [], i = 0; i < this.length; i += 1)
                for (var s = this[i].children, a = 0; a < s.length; a += 1) e && !m(s[a]).is(e) || t.push(s[a]);
            return m(t)
        },
        filter: function(e) { return m(f(this, e)) },
        remove: function() { for (var e = 0; e < this.length; e += 1) this[e].parentNode && this[e].parentNode.removeChild(this[e]); return this }
    };

    function E(e, t) { return void 0 === t && (t = 0), setTimeout(e, t) }

    function x() { return Date.now() }

    function T(e, t) {
        void 0 === t && (t = "x");
        var i, s, a, r = l(),
            n = r.getComputedStyle(e, null);
        return r.WebKitCSSMatrix ? ((s = n.transform || n.webkitTransform).split(",").length > 6 && (s = s.split(", ").map((function(e) { return e.replace(",", ".") })).join(", ")), a = new r.WebKitCSSMatrix("none" === s ? "" : s)) : i = (a = n.MozTransform || n.OTransform || n.MsTransform || n.msTransform || n.transform || n.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,")).toString().split(","), "x" === t && (s = r.WebKitCSSMatrix ? a.m41 : 16 === i.length ? parseFloat(i[12]) : parseFloat(i[4])), "y" === t && (s = r.WebKitCSSMatrix ? a.m42 : 16 === i.length ? parseFloat(i[13]) : parseFloat(i[5])), s || 0
    }

    function C(e) { return "object" == typeof e && null !== e && e.constructor && e.constructor === Object }

    function S() {
        for (var e = Object(arguments.length <= 0 ? void 0 : arguments[0]), t = 1; t < arguments.length; t += 1) {
            var i = t < 0 || arguments.length <= t ? void 0 : arguments[t];
            if (null != i)
                for (var s = Object.keys(Object(i)), a = 0, r = s.length; a < r; a += 1) {
                    var n = s[a],
                        l = Object.getOwnPropertyDescriptor(i, n);
                    void 0 !== l && l.enumerable && (C(e[n]) && C(i[n]) ? S(e[n], i[n]) : !C(e[n]) && C(i[n]) ? (e[n] = {}, S(e[n], i[n])) : e[n] = i[n])
                }
        }
        return e
    }

    function M(e, t) { Object.keys(t).forEach((function(i) { C(t[i]) && Object.keys(t[i]).forEach((function(s) { "function" == typeof t[i][s] && (t[i][s] = t[i][s].bind(e)) })), e[i] = t[i] })) }

    function z() {
        return g || (g = function() {
            var e = l(),
                t = r();
            return {
                touch: !!("ontouchstart" in e || e.DocumentTouch && t instanceof e.DocumentTouch),
                pointerEvents: !!e.PointerEvent && "maxTouchPoints" in e.navigator && e.navigator.maxTouchPoints >= 0,
                observer: "MutationObserver" in e || "WebkitMutationObserver" in e,
                passiveListener: function() {
                    var t = !1;
                    try {
                        var i = Object.defineProperty({}, "passive", { get: function() { t = !0 } });
                        e.addEventListener("testPassiveListener", null, i)
                    } catch (e) {}
                    return t
                }(),
                gestures: "ongesturestart" in e
            }
        }()), g
    }

    function P(e) {
        return void 0 === e && (e = {}), w || (w = function(e) {
            var t = (void 0 === e ? {} : e).userAgent,
                i = z(),
                s = l(),
                a = s.navigator.platform,
                r = t || s.navigator.userAgent,
                n = { ios: !1, android: !1 },
                o = s.screen.width,
                d = s.screen.height,
                h = r.match(/(Android);?[\s\/]+([\d.]+)?/),
                p = r.match(/(iPad).*OS\s([\d_]+)/),
                u = r.match(/(iPod)(.*OS\s([\d_]+))?/),
                c = !p && r.match(/(iPhone\sOS|iOS)\s([\d_]+)/),
                v = "Win32" === a,
                f = "MacIntel" === a;
            return !p && f && i.touch && ["1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768"].indexOf(o + "x" + d) >= 0 && ((p = r.match(/(Version)\/([\d.]+)/)) || (p = [0, 1, "13_0_0"]), f = !1), h && !v && (n.os = "android", n.android = !0), (p || c || u) && (n.os = "ios", n.ios = !0), n
        }(e)), w
    }

    function k() { return b || (b = function() { var e, t = l(); return { isEdge: !!t.navigator.userAgent.match(/Edge/g), isSafari: (e = t.navigator.userAgent.toLowerCase(), e.indexOf("safari") >= 0 && e.indexOf("chrome") < 0 && e.indexOf("android") < 0), isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent) } }()), b }

    function $(e) {
        var t = r(),
            i = l(),
            s = this.touchEventsData,
            a = this.params,
            n = this.touches;
        if (!this.animating || !a.preventInteractionOnTransition) {
            var o = e;
            o.originalEvent && (o = o.originalEvent);
            var d = m(o.target);
            if (("wrapper" !== a.touchEventsTarget || d.closest(this.wrapperEl).length) && (s.isTouchEvent = "touchstart" === o.type, (s.isTouchEvent || !("which" in o) || 3 !== o.which) && !(!s.isTouchEvent && "button" in o && o.button > 0 || s.isTouched && s.isMoved)))
                if (a.noSwiping && d.closest(a.noSwipingSelector ? a.noSwipingSelector : "." + a.noSwipingClass)[0]) this.allowClick = !0;
                else if (!a.swipeHandler || d.closest(a.swipeHandler)[0]) {
                n.currentX = "touchstart" === o.type ? o.targetTouches[0].pageX : o.pageX, n.currentY = "touchstart" === o.type ? o.targetTouches[0].pageY : o.pageY;
                var h = n.currentX,
                    p = n.currentY,
                    u = a.edgeSwipeDetection || a.iOSEdgeSwipeDetection,
                    c = a.edgeSwipeThreshold || a.iOSEdgeSwipeThreshold;
                if (!u || !(h <= c || h >= i.screen.width - c)) {
                    if (S(s, { isTouched: !0, isMoved: !1, allowTouchCallbacks: !0, isScrolling: void 0, startMoving: void 0 }), n.startX = h, n.startY = p, s.touchStartTime = x(), this.allowClick = !0, this.updateSize(), this.swipeDirection = void 0, a.threshold > 0 && (s.allowThresholdMove = !1), "touchstart" !== o.type) {
                        var v = !0;
                        d.is(s.formElements) && (v = !1), t.activeElement && m(t.activeElement).is(s.formElements) && t.activeElement !== d[0] && t.activeElement.blur();
                        var f = v && this.allowTouchMove && a.touchStartPreventDefault;
                        (a.touchStartForcePreventDefault || f) && o.preventDefault()
                    }
                    this.emit("touchStart", o)
                }
            }
        }
    }

    function L(e) {
        var t = r(),
            i = this.touchEventsData,
            s = this.params,
            a = this.touches,
            n = this.rtlTranslate,
            l = e;
        if (l.originalEvent && (l = l.originalEvent), i.isTouched) {
            if (!i.isTouchEvent || "touchmove" === l.type) {
                var o = "touchmove" === l.type && l.targetTouches && (l.targetTouches[0] || l.changedTouches[0]),
                    d = "touchmove" === l.type ? o.pageX : l.pageX,
                    h = "touchmove" === l.type ? o.pageY : l.pageY;
                if (l.preventedByNestedSwiper) return a.startX = d, void(a.startY = h);
                if (!this.allowTouchMove) return this.allowClick = !1, void(i.isTouched && (S(a, { startX: d, startY: h, currentX: d, currentY: h }), i.touchStartTime = x()));
                if (i.isTouchEvent && s.touchReleaseOnEdges && !s.loop)
                    if (this.isVertical()) { if (h < a.startY && this.translate <= this.maxTranslate() || h > a.startY && this.translate >= this.minTranslate()) return i.isTouched = !1, void(i.isMoved = !1) } else if (d < a.startX && this.translate <= this.maxTranslate() || d > a.startX && this.translate >= this.minTranslate()) return;
                if (i.isTouchEvent && t.activeElement && l.target === t.activeElement && m(l.target).is(i.formElements)) return i.isMoved = !0, void(this.allowClick = !1);
                if (i.allowTouchCallbacks && this.emit("touchMove", l), !(l.targetTouches && l.targetTouches.length > 1)) {
                    a.currentX = d, a.currentY = h;
                    var p = a.currentX - a.startX,
                        u = a.currentY - a.startY;
                    if (!(this.params.threshold && Math.sqrt(Math.pow(p, 2) + Math.pow(u, 2)) < this.params.threshold)) {
                        var c;
                        if (void 0 === i.isScrolling) this.isHorizontal() && a.currentY === a.startY || this.isVertical() && a.currentX === a.startX ? i.isScrolling = !1 : p * p + u * u >= 25 && (c = 180 * Math.atan2(Math.abs(u), Math.abs(p)) / Math.PI, i.isScrolling = this.isHorizontal() ? c > s.touchAngle : 90 - c > s.touchAngle);
                        if (i.isScrolling && this.emit("touchMoveOpposite", l), void 0 === i.startMoving && (a.currentX === a.startX && a.currentY === a.startY || (i.startMoving = !0)), i.isScrolling) i.isTouched = !1;
                        else if (i.startMoving) {
                            this.allowClick = !1, !s.cssMode && l.cancelable && l.preventDefault(), s.touchMoveStopPropagation && !s.nested && l.stopPropagation(), i.isMoved || (s.loop && this.loopFix(), i.startTranslate = this.getTranslate(), this.setTransition(0), this.animating && this.$wrapperEl.trigger("webkitTransitionEnd transitionend"), i.allowMomentumBounce = !1, !s.grabCursor || !0 !== this.allowSlideNext && !0 !== this.allowSlidePrev || this.setGrabCursor(!0), this.emit("sliderFirstMove", l)), this.emit("sliderMove", l), i.isMoved = !0;
                            var v = this.isHorizontal() ? p : u;
                            a.diff = v, v *= s.touchRatio, n && (v = -v), this.swipeDirection = v > 0 ? "prev" : "next", i.currentTranslate = v + i.startTranslate;
                            var f = !0,
                                g = s.resistanceRatio;
                            if (s.touchReleaseOnEdges && (g = 0), v > 0 && i.currentTranslate > this.minTranslate() ? (f = !1, s.resistance && (i.currentTranslate = this.minTranslate() - 1 + Math.pow(-this.minTranslate() + i.startTranslate + v, g))) : v < 0 && i.currentTranslate < this.maxTranslate() && (f = !1, s.resistance && (i.currentTranslate = this.maxTranslate() + 1 - Math.pow(this.maxTranslate() - i.startTranslate - v, g))), f && (l.preventedByNestedSwiper = !0), !this.allowSlideNext && "next" === this.swipeDirection && i.currentTranslate < i.startTranslate && (i.currentTranslate = i.startTranslate), !this.allowSlidePrev && "prev" === this.swipeDirection && i.currentTranslate > i.startTranslate && (i.currentTranslate = i.startTranslate), s.threshold > 0) { if (!(Math.abs(v) > s.threshold || i.allowThresholdMove)) return void(i.currentTranslate = i.startTranslate); if (!i.allowThresholdMove) return i.allowThresholdMove = !0, a.startX = a.currentX, a.startY = a.currentY, i.currentTranslate = i.startTranslate, void(a.diff = this.isHorizontal() ? a.currentX - a.startX : a.currentY - a.startY) }
                            s.followFinger && !s.cssMode && ((s.freeMode || s.watchSlidesProgress || s.watchSlidesVisibility) && (this.updateActiveIndex(), this.updateSlidesClasses()), s.freeMode && (0 === i.velocities.length && i.velocities.push({ position: a[this.isHorizontal() ? "startX" : "startY"], time: i.touchStartTime }), i.velocities.push({ position: a[this.isHorizontal() ? "currentX" : "currentY"], time: x() })), this.updateProgress(i.currentTranslate), this.setTranslate(i.currentTranslate))
                        }
                    }
                }
            }
        } else i.startMoving && i.isScrolling && this.emit("touchMoveOpposite", l)
    }

    function I(e) {
        var t = this,
            i = t.touchEventsData,
            s = t.params,
            a = t.touches,
            r = t.rtlTranslate,
            n = t.$wrapperEl,
            l = t.slidesGrid,
            o = t.snapGrid,
            d = e;
        if (d.originalEvent && (d = d.originalEvent), i.allowTouchCallbacks && t.emit("touchEnd", d), i.allowTouchCallbacks = !1, !i.isTouched) return i.isMoved && s.grabCursor && t.setGrabCursor(!1), i.isMoved = !1, void(i.startMoving = !1);
        s.grabCursor && i.isMoved && i.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
        var h, p = x(),
            u = p - i.touchStartTime;
        if (t.allowClick && (t.updateClickedSlide(d), t.emit("tap click", d), u < 300 && p - i.lastClickTime < 300 && t.emit("doubleTap doubleClick", d)), i.lastClickTime = x(), E((function() { t.destroyed || (t.allowClick = !0) })), !i.isTouched || !i.isMoved || !t.swipeDirection || 0 === a.diff || i.currentTranslate === i.startTranslate) return i.isTouched = !1, i.isMoved = !1, void(i.startMoving = !1);
        if (i.isTouched = !1, i.isMoved = !1, i.startMoving = !1, h = s.followFinger ? r ? t.translate : -t.translate : -i.currentTranslate, !s.cssMode)
            if (s.freeMode) {
                if (h < -t.minTranslate()) return void t.slideTo(t.activeIndex);
                if (h > -t.maxTranslate()) return void(t.slides.length < o.length ? t.slideTo(o.length - 1) : t.slideTo(t.slides.length - 1));
                if (s.freeModeMomentum) {
                    if (i.velocities.length > 1) {
                        var c = i.velocities.pop(),
                            v = i.velocities.pop(),
                            f = c.position - v.position,
                            m = c.time - v.time;
                        t.velocity = f / m, t.velocity /= 2, Math.abs(t.velocity) < s.freeModeMinimumVelocity && (t.velocity = 0), (m > 150 || x() - c.time > 300) && (t.velocity = 0)
                    } else t.velocity = 0;
                    t.velocity *= s.freeModeMomentumVelocityRatio, i.velocities.length = 0;
                    var g = 1e3 * s.freeModeMomentumRatio,
                        w = t.velocity * g,
                        b = t.translate + w;
                    r && (b = -b);
                    var y, T, C = !1,
                        S = 20 * Math.abs(t.velocity) * s.freeModeMomentumBounceRatio;
                    if (b < t.maxTranslate()) s.freeModeMomentumBounce ? (b + t.maxTranslate() < -S && (b = t.maxTranslate() - S), y = t.maxTranslate(), C = !0, i.allowMomentumBounce = !0) : b = t.maxTranslate(), s.loop && s.centeredSlides && (T = !0);
                    else if (b > t.minTranslate()) s.freeModeMomentumBounce ? (b - t.minTranslate() > S && (b = t.minTranslate() + S), y = t.minTranslate(), C = !0, i.allowMomentumBounce = !0) : b = t.minTranslate(), s.loop && s.centeredSlides && (T = !0);
                    else if (s.freeModeSticky) {
                        for (var M, z = 0; z < o.length; z += 1)
                            if (o[z] > -b) { M = z; break }
                        b = -(b = Math.abs(o[M] - b) < Math.abs(o[M - 1] - b) || "next" === t.swipeDirection ? o[M] : o[M - 1])
                    }
                    if (T && t.once("transitionEnd", (function() { t.loopFix() })), 0 !== t.velocity) {
                        if (g = r ? Math.abs((-b - t.translate) / t.velocity) : Math.abs((b - t.translate) / t.velocity), s.freeModeSticky) {
                            var P = Math.abs((r ? -b : b) - t.translate),
                                k = t.slidesSizesGrid[t.activeIndex];
                            g = P < k ? s.speed : P < 2 * k ? 1.5 * s.speed : 2.5 * s.speed
                        }
                    } else if (s.freeModeSticky) return void t.slideToClosest();
                    s.freeModeMomentumBounce && C ? (t.updateProgress(y), t.setTransition(g), t.setTranslate(b), t.transitionStart(!0, t.swipeDirection), t.animating = !0, n.transitionEnd((function() { t && !t.destroyed && i.allowMomentumBounce && (t.emit("momentumBounce"), t.setTransition(s.speed), setTimeout((function() { t.setTranslate(y), n.transitionEnd((function() { t && !t.destroyed && t.transitionEnd() })) }), 0)) }))) : t.velocity ? (t.updateProgress(b), t.setTransition(g), t.setTranslate(b), t.transitionStart(!0, t.swipeDirection), t.animating || (t.animating = !0, n.transitionEnd((function() { t && !t.destroyed && t.transitionEnd() })))) : t.updateProgress(b), t.updateActiveIndex(), t.updateSlidesClasses()
                } else if (s.freeModeSticky) return void t.slideToClosest();
                (!s.freeModeMomentum || u >= s.longSwipesMs) && (t.updateProgress(), t.updateActiveIndex(), t.updateSlidesClasses())
            } else {
                for (var $ = 0, L = t.slidesSizesGrid[0], I = 0; I < l.length; I += I < s.slidesPerGroupSkip ? 1 : s.slidesPerGroup) {
                    var O = I < s.slidesPerGroupSkip - 1 ? 1 : s.slidesPerGroup;
                    void 0 !== l[I + O] ? h >= l[I] && h < l[I + O] && ($ = I, L = l[I + O] - l[I]) : h >= l[I] && ($ = I, L = l[l.length - 1] - l[l.length - 2])
                }
                var A = (h - l[$]) / L,
                    D = $ < s.slidesPerGroupSkip - 1 ? 1 : s.slidesPerGroup;
                if (u > s.longSwipesMs) { if (!s.longSwipes) return void t.slideTo(t.activeIndex); "next" === t.swipeDirection && (A >= s.longSwipesRatio ? t.slideTo($ + D) : t.slideTo($)), "prev" === t.swipeDirection && (A > 1 - s.longSwipesRatio ? t.slideTo($ + D) : t.slideTo($)) } else {
                    if (!s.shortSwipes) return void t.slideTo(t.activeIndex);
                    t.navigation && (d.target === t.navigation.nextEl || d.target === t.navigation.prevEl) ? d.target === t.navigation.nextEl ? t.slideTo($ + D) : t.slideTo($) : ("next" === t.swipeDirection && t.slideTo($ + D), "prev" === t.swipeDirection && t.slideTo($))
                }
            }
    }

    function O() {
        var e = this.params,
            t = this.el;
        if (!t || 0 !== t.offsetWidth) {
            e.breakpoints && this.setBreakpoint();
            var i = this.allowSlideNext,
                s = this.allowSlidePrev,
                a = this.snapGrid;
            this.allowSlideNext = !0, this.allowSlidePrev = !0, this.updateSize(), this.updateSlides(), this.updateSlidesClasses(), ("auto" === e.slidesPerView || e.slidesPerView > 1) && this.isEnd && !this.isBeginning && !this.params.centeredSlides ? this.slideTo(this.slides.length - 1, 0, !1, !0) : this.slideTo(this.activeIndex, 0, !1, !0), this.autoplay && this.autoplay.running && this.autoplay.paused && this.autoplay.run(), this.allowSlidePrev = s, this.allowSlideNext = i, this.params.watchOverflow && a !== this.snapGrid && this.checkOverflow()
        }
    }

    function A(e) { this.allowClick || (this.params.preventClicks && e.preventDefault(), this.params.preventClicksPropagation && this.animating && (e.stopPropagation(), e.stopImmediatePropagation())) }

    function D() {
        var e = this.wrapperEl,
            t = this.rtlTranslate;
        this.previousTranslate = this.translate, this.isHorizontal() ? this.translate = t ? e.scrollWidth - e.offsetWidth - e.scrollLeft : -e.scrollLeft : this.translate = -e.scrollTop, -0 === this.translate && (this.translate = 0), this.updateActiveIndex(), this.updateSlidesClasses();
        var i = this.maxTranslate() - this.minTranslate();
        (0 === i ? 0 : (this.translate - this.minTranslate()) / i) !== this.progress && this.updateProgress(t ? -this.translate : this.translate), this.emit("setTranslate", this.translate, !1)
    }
    Object.keys(y).forEach((function(e) { m.fn[e] = y[e] }));
    var G = !1;

    function N() {}
    var B = { init: !0, direction: "horizontal", touchEventsTarget: "container", initialSlide: 0, speed: 300, cssMode: !1, updateOnWindowResize: !0, width: null, height: null, preventInteractionOnTransition: !1, userAgent: null, url: null, edgeSwipeDetection: !1, edgeSwipeThreshold: 20, freeMode: !1, freeModeMomentum: !0, freeModeMomentumRatio: 1, freeModeMomentumBounce: !0, freeModeMomentumBounceRatio: 1, freeModeMomentumVelocityRatio: 1, freeModeSticky: !1, freeModeMinimumVelocity: .02, autoHeight: !1, setWrapperSize: !1, virtualTranslate: !1, effect: "slide", breakpoints: void 0, spaceBetween: 0, slidesPerView: 1, slidesPerColumn: 1, slidesPerColumnFill: "column", slidesPerGroup: 1, slidesPerGroupSkip: 0, centeredSlides: !1, centeredSlidesBounds: !1, slidesOffsetBefore: 0, slidesOffsetAfter: 0, normalizeSlideIndex: !0, centerInsufficientSlides: !1, watchOverflow: !1, roundLengths: !1, touchRatio: 1, touchAngle: 45, simulateTouch: !0, shortSwipes: !0, longSwipes: !0, longSwipesRatio: .5, longSwipesMs: 300, followFinger: !0, allowTouchMove: !0, threshold: 0, touchMoveStopPropagation: !1, touchStartPreventDefault: !0, touchStartForcePreventDefault: !1, touchReleaseOnEdges: !1, uniqueNavElements: !0, resistance: !0, resistanceRatio: .85, watchSlidesProgress: !1, watchSlidesVisibility: !1, grabCursor: !1, preventClicks: !0, preventClicksPropagation: !0, slideToClickedSlide: !1, preloadImages: !0, updateOnImagesReady: !0, loop: !1, loopAdditionalSlides: 0, loopedSlides: null, loopFillGroupWithBlank: !1, loopPreventsSlide: !0, allowSlidePrev: !0, allowSlideNext: !0, swipeHandler: null, noSwiping: !0, noSwipingClass: "swiper-no-swiping", noSwipingSelector: null, passiveListeners: !0, containerModifierClass: "swiper-container-", slideClass: "swiper-slide", slideBlankClass: "swiper-slide-invisible-blank", slideActiveClass: "swiper-slide-active", slideDuplicateActiveClass: "swiper-slide-duplicate-active", slideVisibleClass: "swiper-slide-visible", slideDuplicateClass: "swiper-slide-duplicate", slideNextClass: "swiper-slide-next", slideDuplicateNextClass: "swiper-slide-duplicate-next", slidePrevClass: "swiper-slide-prev", slideDuplicatePrevClass: "swiper-slide-duplicate-prev", wrapperClass: "swiper-wrapper", runCallbacksOnInit: !0, _emitClasses: !1 },
        H = {
            modular: {
                useParams: function(e) {
                    var t = this;
                    t.modules && Object.keys(t.modules).forEach((function(i) {
                        var s = t.modules[i];
                        s.params && S(e, s.params)
                    }))
                },
                useModules: function(e) {
                    void 0 === e && (e = {});
                    var t = this;
                    t.modules && Object.keys(t.modules).forEach((function(i) {
                        var s = t.modules[i],
                            a = e[i] || {};
                        s.on && t.on && Object.keys(s.on).forEach((function(e) { t.on(e, s.on[e]) })), s.create && s.create.bind(t)(a)
                    }))
                }
            },
            eventsEmitter: {
                on: function(e, t, i) { var s = this; if ("function" != typeof t) return s; var a = i ? "unshift" : "push"; return e.split(" ").forEach((function(e) { s.eventsListeners[e] || (s.eventsListeners[e] = []), s.eventsListeners[e][a](t) })), s },
                once: function(e, t, i) {
                    var s = this;
                    if ("function" != typeof t) return s;

                    function a() {
                        s.off(e, a), a.__emitterProxy && delete a.__emitterProxy;
                        for (var i = arguments.length, r = new Array(i), n = 0; n < i; n++) r[n] = arguments[n];
                        t.apply(s, r)
                    }
                    return a.__emitterProxy = t, s.on(e, a, i)
                },
                onAny: function(e, t) { if ("function" != typeof e) return this; var i = t ? "unshift" : "push"; return this.eventsAnyListeners.indexOf(e) < 0 && this.eventsAnyListeners[i](e), this },
                offAny: function(e) { if (!this.eventsAnyListeners) return this; var t = this.eventsAnyListeners.indexOf(e); return t >= 0 && this.eventsAnyListeners.splice(t, 1), this },
                off: function(e, t) {
                    var i = this;
                    return i.eventsListeners ? (e.split(" ").forEach((function(e) {
                        void 0 === t ? i.eventsListeners[e] = [] : i.eventsListeners[e] && i.eventsListeners[e].forEach((function(s, a) {
                            (s === t || s.__emitterProxy && s.__emitterProxy === t) && i.eventsListeners[e].splice(a, 1)
                        }))
                    })), i) : i
                },
                emit: function() {
                    var e, t, i, s = this;
                    if (!s.eventsListeners) return s;
                    for (var a = arguments.length, r = new Array(a), n = 0; n < a; n++) r[n] = arguments[n];
                    "string" == typeof r[0] || Array.isArray(r[0]) ? (e = r[0], t = r.slice(1, r.length), i = s) : (e = r[0].events, t = r[0].data, i = r[0].context || s), t.unshift(i);
                    var l = Array.isArray(e) ? e : e.split(" ");
                    return l.forEach((function(e) {
                        if (s.eventsListeners && s.eventsListeners[e]) {
                            var a = [];
                            s.eventsListeners[e].forEach((function(e) { a.push(e) })), a.forEach((function(e) { e.apply(i, t) }))
                        }
                    })), s
                }
            },
            update: {
                updateSize: function() {
                    var e, t, i = this.$el;
                    e = void 0 !== this.params.width && null !== this.params.width ? this.params.width : i[0].clientWidth, t = void 0 !== this.params.height && null !== this.params.width ? this.params.height : i[0].clientHeight, 0 === e && this.isHorizontal() || 0 === t && this.isVertical() || (e = e - parseInt(i.css("padding-left") || 0, 10) - parseInt(i.css("padding-right") || 0, 10), t = t - parseInt(i.css("padding-top") || 0, 10) - parseInt(i.css("padding-bottom") || 0, 10), Number.isNaN(e) && (e = 0), Number.isNaN(t) && (t = 0), S(this, { width: e, height: t, size: this.isHorizontal() ? e : t }))
                },
                updateSlides: function() {
                    var e = l(),
                        t = this.params,
                        i = this.$wrapperEl,
                        s = this.size,
                        a = this.rtlTranslate,
                        r = this.wrongRTL,
                        n = this.virtual && t.virtual.enabled,
                        o = n ? this.virtual.slides.length : this.slides.length,
                        d = i.children("." + this.params.slideClass),
                        h = n ? this.virtual.slides.length : d.length,
                        p = [],
                        u = [],
                        c = [];

                    function v(e, i) { return !t.cssMode || i !== d.length - 1 }
                    var f = t.slidesOffsetBefore;
                    "function" == typeof f && (f = t.slidesOffsetBefore.call(this));
                    var m = t.slidesOffsetAfter;
                    "function" == typeof m && (m = t.slidesOffsetAfter.call(this));
                    var g = this.snapGrid.length,
                        w = this.snapGrid.length,
                        b = t.spaceBetween,
                        y = -f,
                        E = 0,
                        x = 0;
                    if (void 0 !== s) {
                        var T, C;
                        "string" == typeof b && b.indexOf("%") >= 0 && (b = parseFloat(b.replace("%", "")) / 100 * s), this.virtualSize = -b, a ? d.css({ marginLeft: "", marginTop: "" }) : d.css({ marginRight: "", marginBottom: "" }), t.slidesPerColumn > 1 && (T = Math.floor(h / t.slidesPerColumn) === h / this.params.slidesPerColumn ? h : Math.ceil(h / t.slidesPerColumn) * t.slidesPerColumn, "auto" !== t.slidesPerView && "row" === t.slidesPerColumnFill && (T = Math.max(T, t.slidesPerView * t.slidesPerColumn)));
                        for (var M, z = t.slidesPerColumn, P = T / z, k = Math.floor(h / t.slidesPerColumn), $ = 0; $ < h; $ += 1) {
                            C = 0;
                            var L = d.eq($);
                            if (t.slidesPerColumn > 1) {
                                var I = void 0,
                                    O = void 0,
                                    A = void 0;
                                if ("row" === t.slidesPerColumnFill && t.slidesPerGroup > 1) {
                                    var D = Math.floor($ / (t.slidesPerGroup * t.slidesPerColumn)),
                                        G = $ - t.slidesPerColumn * t.slidesPerGroup * D,
                                        N = 0 === D ? t.slidesPerGroup : Math.min(Math.ceil((h - D * z * t.slidesPerGroup) / z), t.slidesPerGroup);
                                    I = (O = G - (A = Math.floor(G / N)) * N + D * t.slidesPerGroup) + A * T / z, L.css({ "-webkit-box-ordinal-group": I, "-moz-box-ordinal-group": I, "-ms-flex-order": I, "-webkit-order": I, order: I })
                                } else "column" === t.slidesPerColumnFill ? (A = $ - (O = Math.floor($ / z)) * z, (O > k || O === k && A === z - 1) && (A += 1) >= z && (A = 0, O += 1)) : O = $ - (A = Math.floor($ / P)) * P;
                                L.css("margin-" + (this.isHorizontal() ? "top" : "left"), 0 !== A && t.spaceBetween && t.spaceBetween + "px")
                            }
                            if ("none" !== L.css("display")) {
                                if ("auto" === t.slidesPerView) {
                                    var B = e.getComputedStyle(L[0], null),
                                        H = L[0].style.transform,
                                        X = L[0].style.webkitTransform;
                                    if (H && (L[0].style.transform = "none"), X && (L[0].style.webkitTransform = "none"), t.roundLengths) C = this.isHorizontal() ? L.outerWidth(!0) : L.outerHeight(!0);
                                    else if (this.isHorizontal()) {
                                        var Y = parseFloat(B.getPropertyValue("width") || 0),
                                            V = parseFloat(B.getPropertyValue("padding-left") || 0),
                                            F = parseFloat(B.getPropertyValue("padding-right") || 0),
                                            W = parseFloat(B.getPropertyValue("margin-left") || 0),
                                            R = parseFloat(B.getPropertyValue("margin-right") || 0),
                                            q = B.getPropertyValue("box-sizing");
                                        C = q && "border-box" === q ? Y + W + R : Y + V + F + W + R
                                    } else {
                                        var j = parseFloat(B.getPropertyValue("height") || 0),
                                            _ = parseFloat(B.getPropertyValue("padding-top") || 0),
                                            U = parseFloat(B.getPropertyValue("padding-bottom") || 0),
                                            K = parseFloat(B.getPropertyValue("margin-top") || 0),
                                            Z = parseFloat(B.getPropertyValue("margin-bottom") || 0),
                                            J = B.getPropertyValue("box-sizing");
                                        C = J && "border-box" === J ? j + K + Z : j + _ + U + K + Z
                                    }
                                    H && (L[0].style.transform = H), X && (L[0].style.webkitTransform = X), t.roundLengths && (C = Math.floor(C))
                                } else C = (s - (t.slidesPerView - 1) * b) / t.slidesPerView, t.roundLengths && (C = Math.floor(C)), d[$] && (this.isHorizontal() ? d[$].style.width = C + "px" : d[$].style.height = C + "px");
                                d[$] && (d[$].swiperSlideSize = C), c.push(C), t.centeredSlides ? (y = y + C / 2 + E / 2 + b, 0 === E && 0 !== $ && (y = y - s / 2 - b), 0 === $ && (y = y - s / 2 - b), Math.abs(y) < .001 && (y = 0), t.roundLengths && (y = Math.floor(y)), x % t.slidesPerGroup == 0 && p.push(y), u.push(y)) : (t.roundLengths && (y = Math.floor(y)), (x - Math.min(this.params.slidesPerGroupSkip, x)) % this.params.slidesPerGroup == 0 && p.push(y), u.push(y), y = y + C + b), this.virtualSize += C + b, E = C, x += 1
                            }
                        }
                        if (this.virtualSize = Math.max(this.virtualSize, s) + m, a && r && ("slide" === t.effect || "coverflow" === t.effect) && i.css({ width: this.virtualSize + t.spaceBetween + "px" }), t.setWrapperSize && (this.isHorizontal() ? i.css({ width: this.virtualSize + t.spaceBetween + "px" }) : i.css({ height: this.virtualSize + t.spaceBetween + "px" })), t.slidesPerColumn > 1 && (this.virtualSize = (C + t.spaceBetween) * T, this.virtualSize = Math.ceil(this.virtualSize / t.slidesPerColumn) - t.spaceBetween, this.isHorizontal() ? i.css({ width: this.virtualSize + t.spaceBetween + "px" }) : i.css({ height: this.virtualSize + t.spaceBetween + "px" }), t.centeredSlides)) {
                            M = [];
                            for (var Q = 0; Q < p.length; Q += 1) {
                                var ee = p[Q];
                                t.roundLengths && (ee = Math.floor(ee)), p[Q] < this.virtualSize + p[0] && M.push(ee)
                            }
                            p = M
                        }
                        if (!t.centeredSlides) {
                            M = [];
                            for (var te = 0; te < p.length; te += 1) {
                                var ie = p[te];
                                t.roundLengths && (ie = Math.floor(ie)), p[te] <= this.virtualSize - s && M.push(ie)
                            }
                            p = M, Math.floor(this.virtualSize - s) - Math.floor(p[p.length - 1]) > 1 && p.push(this.virtualSize - s)
                        }
                        if (0 === p.length && (p = [0]), 0 !== t.spaceBetween && (this.isHorizontal() ? a ? d.filter(v).css({ marginLeft: b + "px" }) : d.filter(v).css({ marginRight: b + "px" }) : d.filter(v).css({ marginBottom: b + "px" })), t.centeredSlides && t.centeredSlidesBounds) {
                            var se = 0;
                            c.forEach((function(e) { se += e + (t.spaceBetween ? t.spaceBetween : 0) }));
                            var ae = (se -= t.spaceBetween) - s;
                            p = p.map((function(e) { return e < 0 ? -f : e > ae ? ae + m : e }))
                        }
                        if (t.centerInsufficientSlides) {
                            var re = 0;
                            if (c.forEach((function(e) { re += e + (t.spaceBetween ? t.spaceBetween : 0) })), (re -= t.spaceBetween) < s) {
                                var ne = (s - re) / 2;
                                p.forEach((function(e, t) { p[t] = e - ne })), u.forEach((function(e, t) { u[t] = e + ne }))
                            }
                        }
                        S(this, { slides: d, snapGrid: p, slidesGrid: u, slidesSizesGrid: c }), h !== o && this.emit("slidesLengthChange"), p.length !== g && (this.params.watchOverflow && this.checkOverflow(), this.emit("snapGridLengthChange")), u.length !== w && this.emit("slidesGridLengthChange"), (t.watchSlidesProgress || t.watchSlidesVisibility) && this.updateSlidesOffset()
                    }
                },
                updateAutoHeight: function(e) {
                    var t, i = [],
                        s = 0;
                    if ("number" == typeof e ? this.setTransition(e) : !0 === e && this.setTransition(this.params.speed), "auto" !== this.params.slidesPerView && this.params.slidesPerView > 1)
                        if (this.params.centeredSlides) this.visibleSlides.each((function(e) { i.push(e) }));
                        else
                            for (t = 0; t < Math.ceil(this.params.slidesPerView); t += 1) {
                                var a = this.activeIndex + t;
                                if (a > this.slides.length) break;
                                i.push(this.slides.eq(a)[0])
                            } else i.push(this.slides.eq(this.activeIndex)[0]);
                    for (t = 0; t < i.length; t += 1)
                        if (void 0 !== i[t]) {
                            var r = i[t].offsetHeight;
                            s = r > s ? r : s
                        }
                    s && this.$wrapperEl.css("height", s + "px")
                },
                updateSlidesOffset: function() { for (var e = this.slides, t = 0; t < e.length; t += 1) e[t].swiperSlideOffset = this.isHorizontal() ? e[t].offsetLeft : e[t].offsetTop },
                updateSlidesProgress: function(e) {
                    void 0 === e && (e = this && this.translate || 0);
                    var t = this.params,
                        i = this.slides,
                        s = this.rtlTranslate;
                    if (0 !== i.length) {
                        void 0 === i[0].swiperSlideOffset && this.updateSlidesOffset();
                        var a = -e;
                        s && (a = e), i.removeClass(t.slideVisibleClass), this.visibleSlidesIndexes = [], this.visibleSlides = [];
                        for (var r = 0; r < i.length; r += 1) {
                            var n = i[r],
                                l = (a + (t.centeredSlides ? this.minTranslate() : 0) - n.swiperSlideOffset) / (n.swiperSlideSize + t.spaceBetween);
                            if (t.watchSlidesVisibility || t.centeredSlides && t.autoHeight) {
                                var o = -(a - n.swiperSlideOffset),
                                    d = o + this.slidesSizesGrid[r];
                                (o >= 0 && o < this.size - 1 || d > 1 && d <= this.size || o <= 0 && d >= this.size) && (this.visibleSlides.push(n), this.visibleSlidesIndexes.push(r), i.eq(r).addClass(t.slideVisibleClass))
                            }
                            n.progress = s ? -l : l
                        }
                        this.visibleSlides = m(this.visibleSlides)
                    }
                },
                updateProgress: function(e) {
                    if (void 0 === e) {
                        var t = this.rtlTranslate ? -1 : 1;
                        e = this && this.translate && this.translate * t || 0
                    }
                    var i = this.params,
                        s = this.maxTranslate() - this.minTranslate(),
                        a = this.progress,
                        r = this.isBeginning,
                        n = this.isEnd,
                        l = r,
                        o = n;
                    0 === s ? (a = 0, r = !0, n = !0) : (r = (a = (e - this.minTranslate()) / s) <= 0, n = a >= 1), S(this, { progress: a, isBeginning: r, isEnd: n }), (i.watchSlidesProgress || i.watchSlidesVisibility || i.centeredSlides && i.autoHeight) && this.updateSlidesProgress(e), r && !l && this.emit("reachBeginning toEdge"), n && !o && this.emit("reachEnd toEdge"), (l && !r || o && !n) && this.emit("fromEdge"), this.emit("progress", a)
                },
                updateSlidesClasses: function() {
                    var e, t = this.slides,
                        i = this.params,
                        s = this.$wrapperEl,
                        a = this.activeIndex,
                        r = this.realIndex,
                        n = this.virtual && i.virtual.enabled;
                    t.removeClass(i.slideActiveClass + " " + i.slideNextClass + " " + i.slidePrevClass + " " + i.slideDuplicateActiveClass + " " + i.slideDuplicateNextClass + " " + i.slideDuplicatePrevClass), (e = n ? this.$wrapperEl.find("." + i.slideClass + '[data-swiper-slide-index="' + a + '"]') : t.eq(a)).addClass(i.slideActiveClass), i.loop && (e.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + r + '"]').addClass(i.slideDuplicateActiveClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + r + '"]').addClass(i.slideDuplicateActiveClass));
                    var l = e.nextAll("." + i.slideClass).eq(0).addClass(i.slideNextClass);
                    i.loop && 0 === l.length && (l = t.eq(0)).addClass(i.slideNextClass);
                    var o = e.prevAll("." + i.slideClass).eq(0).addClass(i.slidePrevClass);
                    i.loop && 0 === o.length && (o = t.eq(-1)).addClass(i.slidePrevClass), i.loop && (l.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass), o.hasClass(i.slideDuplicateClass) ? s.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass) : s.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass)), this.emitSlidesClasses()
                },
                updateActiveIndex: function(e) {
                    var t, i = this.rtlTranslate ? this.translate : -this.translate,
                        s = this.slidesGrid,
                        a = this.snapGrid,
                        r = this.params,
                        n = this.activeIndex,
                        l = this.realIndex,
                        o = this.snapIndex,
                        d = e;
                    if (void 0 === d) {
                        for (var h = 0; h < s.length; h += 1) void 0 !== s[h + 1] ? i >= s[h] && i < s[h + 1] - (s[h + 1] - s[h]) / 2 ? d = h : i >= s[h] && i < s[h + 1] && (d = h + 1) : i >= s[h] && (d = h);
                        r.normalizeSlideIndex && (d < 0 || void 0 === d) && (d = 0)
                    }
                    if (a.indexOf(i) >= 0) t = a.indexOf(i);
                    else {
                        var p = Math.min(r.slidesPerGroupSkip, d);
                        t = p + Math.floor((d - p) / r.slidesPerGroup)
                    }
                    if (t >= a.length && (t = a.length - 1), d !== n) {
                        var u = parseInt(this.slides.eq(d).attr("data-swiper-slide-index") || d, 10);
                        S(this, { snapIndex: t, realIndex: u, previousIndex: n, activeIndex: d }), this.emit("activeIndexChange"), this.emit("snapIndexChange"), l !== u && this.emit("realIndexChange"), (this.initialized || this.params.runCallbacksOnInit) && this.emit("slideChange")
                    } else t !== o && (this.snapIndex = t, this.emit("snapIndexChange"))
                },
                updateClickedSlide: function(e) {
                    var t = this.params,
                        i = m(e.target).closest("." + t.slideClass)[0],
                        s = !1;
                    if (i)
                        for (var a = 0; a < this.slides.length; a += 1) this.slides[a] === i && (s = !0);
                    if (!i || !s) return this.clickedSlide = void 0, void(this.clickedIndex = void 0);
                    this.clickedSlide = i, this.virtual && this.params.virtual.enabled ? this.clickedIndex = parseInt(m(i).attr("data-swiper-slide-index"), 10) : this.clickedIndex = m(i).index(), t.slideToClickedSlide && void 0 !== this.clickedIndex && this.clickedIndex !== this.activeIndex && this.slideToClickedSlide()
                }
            },
            translate: {
                getTranslate: function(e) {
                    void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                    var t = this.params,
                        i = this.rtlTranslate,
                        s = this.translate,
                        a = this.$wrapperEl;
                    if (t.virtualTranslate) return i ? -s : s;
                    if (t.cssMode) return s;
                    var r = T(a[0], e);
                    return i && (r = -r), r || 0
                },
                setTranslate: function(e, t) {
                    var i = this.rtlTranslate,
                        s = this.params,
                        a = this.$wrapperEl,
                        r = this.wrapperEl,
                        n = this.progress,
                        l = 0,
                        o = 0;
                    this.isHorizontal() ? l = i ? -e : e : o = e, s.roundLengths && (l = Math.floor(l), o = Math.floor(o)), s.cssMode ? r[this.isHorizontal() ? "scrollLeft" : "scrollTop"] = this.isHorizontal() ? -l : -o : s.virtualTranslate || a.transform("translate3d(" + l + "px, " + o + "px, 0px)"), this.previousTranslate = this.translate, this.translate = this.isHorizontal() ? l : o;
                    var d = this.maxTranslate() - this.minTranslate();
                    (0 === d ? 0 : (e - this.minTranslate()) / d) !== n && this.updateProgress(e), this.emit("setTranslate", this.translate, t)
                },
                minTranslate: function() { return -this.snapGrid[0] },
                maxTranslate: function() { return -this.snapGrid[this.snapGrid.length - 1] },
                translateTo: function(e, t, i, s, a) {
                    void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0), void 0 === s && (s = !0);
                    var r = this,
                        n = r.params,
                        l = r.wrapperEl;
                    if (r.animating && n.preventInteractionOnTransition) return !1;
                    var o, d = r.minTranslate(),
                        h = r.maxTranslate();
                    if (o = s && e > d ? d : s && e < h ? h : e, r.updateProgress(o), n.cssMode) {
                        var p, u = r.isHorizontal();
                        if (0 === t) l[u ? "scrollLeft" : "scrollTop"] = -o;
                        else if (l.scrollTo) l.scrollTo(((p = {})[u ? "left" : "top"] = -o, p.behavior = "smooth", p));
                        else l[u ? "scrollLeft" : "scrollTop"] = -o;
                        return !0
                    }
                    return 0 === t ? (r.setTransition(0), r.setTranslate(o), i && (r.emit("beforeTransitionStart", t, a), r.emit("transitionEnd"))) : (r.setTransition(t), r.setTranslate(o), i && (r.emit("beforeTransitionStart", t, a), r.emit("transitionStart")), r.animating || (r.animating = !0, r.onTranslateToWrapperTransitionEnd || (r.onTranslateToWrapperTransitionEnd = function(e) { r && !r.destroyed && e.target === this && (r.$wrapperEl[0].removeEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].removeEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd), r.onTranslateToWrapperTransitionEnd = null, delete r.onTranslateToWrapperTransitionEnd, i && r.emit("transitionEnd")) }), r.$wrapperEl[0].addEventListener("transitionend", r.onTranslateToWrapperTransitionEnd), r.$wrapperEl[0].addEventListener("webkitTransitionEnd", r.onTranslateToWrapperTransitionEnd))), !0
                }
            },
            transition: {
                setTransition: function(e, t) { this.params.cssMode || this.$wrapperEl.transition(e), this.emit("setTransition", e, t) },
                transitionStart: function(e, t) {
                    void 0 === e && (e = !0);
                    var i = this.activeIndex,
                        s = this.params,
                        a = this.previousIndex;
                    if (!s.cssMode) {
                        s.autoHeight && this.updateAutoHeight();
                        var r = t;
                        if (r || (r = i > a ? "next" : i < a ? "prev" : "reset"), this.emit("transitionStart"), e && i !== a) {
                            if ("reset" === r) return void this.emit("slideResetTransitionStart");
                            this.emit("slideChangeTransitionStart"), "next" === r ? this.emit("slideNextTransitionStart") : this.emit("slidePrevTransitionStart")
                        }
                    }
                },
                transitionEnd: function(e, t) {
                    void 0 === e && (e = !0);
                    var i = this.activeIndex,
                        s = this.previousIndex,
                        a = this.params;
                    if (this.animating = !1, !a.cssMode) {
                        this.setTransition(0);
                        var r = t;
                        if (r || (r = i > s ? "next" : i < s ? "prev" : "reset"), this.emit("transitionEnd"), e && i !== s) {
                            if ("reset" === r) return void this.emit("slideResetTransitionEnd");
                            this.emit("slideChangeTransitionEnd"), "next" === r ? this.emit("slideNextTransitionEnd") : this.emit("slidePrevTransitionEnd")
                        }
                    }
                }
            },
            slide: {
                slideTo: function(e, t, i, s) {
                    void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0);
                    var a = this,
                        r = e;
                    r < 0 && (r = 0);
                    var n = a.params,
                        l = a.snapGrid,
                        o = a.slidesGrid,
                        d = a.previousIndex,
                        h = a.activeIndex,
                        p = a.rtlTranslate,
                        u = a.wrapperEl;
                    if (a.animating && n.preventInteractionOnTransition) return !1;
                    var c = Math.min(a.params.slidesPerGroupSkip, r),
                        v = c + Math.floor((r - c) / a.params.slidesPerGroup);
                    v >= l.length && (v = l.length - 1), (h || n.initialSlide || 0) === (d || 0) && i && a.emit("beforeSlideChangeStart");
                    var f, m = -l[v];
                    if (a.updateProgress(m), n.normalizeSlideIndex)
                        for (var g = 0; g < o.length; g += 1) - Math.floor(100 * m) >= Math.floor(100 * o[g]) && (r = g);
                    if (a.initialized && r !== h) { if (!a.allowSlideNext && m < a.translate && m < a.minTranslate()) return !1; if (!a.allowSlidePrev && m > a.translate && m > a.maxTranslate() && (h || 0) !== r) return !1 }
                    if (f = r > h ? "next" : r < h ? "prev" : "reset", p && -m === a.translate || !p && m === a.translate) return a.updateActiveIndex(r), n.autoHeight && a.updateAutoHeight(), a.updateSlidesClasses(), "slide" !== n.effect && a.setTranslate(m), "reset" !== f && (a.transitionStart(i, f), a.transitionEnd(i, f)), !1;
                    if (n.cssMode) {
                        var w, b = a.isHorizontal(),
                            y = -m;
                        if (p && (y = u.scrollWidth - u.offsetWidth - y), 0 === t) u[b ? "scrollLeft" : "scrollTop"] = y;
                        else if (u.scrollTo) u.scrollTo(((w = {})[b ? "left" : "top"] = y, w.behavior = "smooth", w));
                        else u[b ? "scrollLeft" : "scrollTop"] = y;
                        return !0
                    }
                    return 0 === t ? (a.setTransition(0), a.setTranslate(m), a.updateActiveIndex(r), a.updateSlidesClasses(), a.emit("beforeTransitionStart", t, s), a.transitionStart(i, f), a.transitionEnd(i, f)) : (a.setTransition(t), a.setTranslate(m), a.updateActiveIndex(r), a.updateSlidesClasses(), a.emit("beforeTransitionStart", t, s), a.transitionStart(i, f), a.animating || (a.animating = !0, a.onSlideToWrapperTransitionEnd || (a.onSlideToWrapperTransitionEnd = function(e) { a && !a.destroyed && e.target === this && (a.$wrapperEl[0].removeEventListener("transitionend", a.onSlideToWrapperTransitionEnd), a.$wrapperEl[0].removeEventListener("webkitTransitionEnd", a.onSlideToWrapperTransitionEnd), a.onSlideToWrapperTransitionEnd = null, delete a.onSlideToWrapperTransitionEnd, a.transitionEnd(i, f)) }), a.$wrapperEl[0].addEventListener("transitionend", a.onSlideToWrapperTransitionEnd), a.$wrapperEl[0].addEventListener("webkitTransitionEnd", a.onSlideToWrapperTransitionEnd))), !0
                },
                slideToLoop: function(e, t, i, s) { void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0); var a = e; return this.params.loop && (a += this.loopedSlides), this.slideTo(a, t, i, s) },
                slideNext: function(e, t, i) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                    var s = this.params,
                        a = this.animating,
                        r = this.activeIndex < s.slidesPerGroupSkip ? 1 : s.slidesPerGroup;
                    if (s.loop) {
                        if (a && s.loopPreventsSlide) return !1;
                        this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft
                    }
                    return this.slideTo(this.activeIndex + r, e, t, i)
                },
                slidePrev: function(e, t, i) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                    var s = this.params,
                        a = this.animating,
                        r = this.snapGrid,
                        n = this.slidesGrid,
                        l = this.rtlTranslate;
                    if (s.loop) {
                        if (a && s.loopPreventsSlide) return !1;
                        this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft
                    }

                    function o(e) { return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e) }
                    var d, h = o(l ? this.translate : -this.translate),
                        p = r.map((function(e) { return o(e) })),
                        u = (r[p.indexOf(h)], r[p.indexOf(h) - 1]);
                    return void 0 === u && s.cssMode && r.forEach((function(e) {!u && h >= e && (u = e) })), void 0 !== u && (d = n.indexOf(u)) < 0 && (d = this.activeIndex - 1), this.slideTo(d, e, t, i)
                },
                slideReset: function(e, t, i) { return void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), this.slideTo(this.activeIndex, e, t, i) },
                slideToClosest: function(e, t, i, s) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), void 0 === s && (s = .5);
                    var a = this.activeIndex,
                        r = Math.min(this.params.slidesPerGroupSkip, a),
                        n = r + Math.floor((a - r) / this.params.slidesPerGroup),
                        l = this.rtlTranslate ? this.translate : -this.translate;
                    if (l >= this.snapGrid[n]) {
                        var o = this.snapGrid[n];
                        l - o > (this.snapGrid[n + 1] - o) * s && (a += this.params.slidesPerGroup)
                    } else {
                        var d = this.snapGrid[n - 1];
                        l - d <= (this.snapGrid[n] - d) * s && (a -= this.params.slidesPerGroup)
                    }
                    return a = Math.max(a, 0), a = Math.min(a, this.slidesGrid.length - 1), this.slideTo(a, e, t, i)
                },
                slideToClickedSlide: function() {
                    var e, t = this,
                        i = t.params,
                        s = t.$wrapperEl,
                        a = "auto" === i.slidesPerView ? t.slidesPerViewDynamic() : i.slidesPerView,
                        r = t.clickedIndex;
                    if (i.loop) {
                        if (t.animating) return;
                        e = parseInt(m(t.clickedSlide).attr("data-swiper-slide-index"), 10), i.centeredSlides ? r < t.loopedSlides - a / 2 || r > t.slides.length - t.loopedSlides + a / 2 ? (t.loopFix(), r = s.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), E((function() { t.slideTo(r) }))) : t.slideTo(r) : r > t.slides.length - a ? (t.loopFix(), r = s.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), E((function() { t.slideTo(r) }))) : t.slideTo(r)
                    } else t.slideTo(r)
                }
            },
            loop: {
                loopCreate: function() {
                    var e = this,
                        t = r(),
                        i = e.params,
                        s = e.$wrapperEl;
                    s.children("." + i.slideClass + "." + i.slideDuplicateClass).remove();
                    var a = s.children("." + i.slideClass);
                    if (i.loopFillGroupWithBlank) {
                        var n = i.slidesPerGroup - a.length % i.slidesPerGroup;
                        if (n !== i.slidesPerGroup) {
                            for (var l = 0; l < n; l += 1) {
                                var o = m(t.createElement("div")).addClass(i.slideClass + " " + i.slideBlankClass);
                                s.append(o)
                            }
                            a = s.children("." + i.slideClass)
                        }
                    }
                    "auto" !== i.slidesPerView || i.loopedSlides || (i.loopedSlides = a.length), e.loopedSlides = Math.ceil(parseFloat(i.loopedSlides || i.slidesPerView, 10)), e.loopedSlides += i.loopAdditionalSlides, e.loopedSlides > a.length && (e.loopedSlides = a.length);
                    var d = [],
                        h = [];
                    a.each((function(t, i) {
                        var s = m(t);
                        i < e.loopedSlides && h.push(t), i < a.length && i >= a.length - e.loopedSlides && d.push(t), s.attr("data-swiper-slide-index", i)
                    }));
                    for (var p = 0; p < h.length; p += 1) s.append(m(h[p].cloneNode(!0)).addClass(i.slideDuplicateClass));
                    for (var u = d.length - 1; u >= 0; u -= 1) s.prepend(m(d[u].cloneNode(!0)).addClass(i.slideDuplicateClass))
                },
                loopFix: function() {
                    this.emit("beforeLoopFix");
                    var e, t = this.activeIndex,
                        i = this.slides,
                        s = this.loopedSlides,
                        a = this.allowSlidePrev,
                        r = this.allowSlideNext,
                        n = this.snapGrid,
                        l = this.rtlTranslate;
                    this.allowSlidePrev = !0, this.allowSlideNext = !0;
                    var o = -n[t] - this.getTranslate();
                    if (t < s) e = i.length - 3 * s + t, e += s, this.slideTo(e, 0, !1, !0) && 0 !== o && this.setTranslate((l ? -this.translate : this.translate) - o);
                    else if (t >= i.length - s) { e = -i.length + t + s, e += s, this.slideTo(e, 0, !1, !0) && 0 !== o && this.setTranslate((l ? -this.translate : this.translate) - o) }
                    this.allowSlidePrev = a, this.allowSlideNext = r, this.emit("loopFix")
                },
                loopDestroy: function() {
                    var e = this.$wrapperEl,
                        t = this.params,
                        i = this.slides;
                    e.children("." + t.slideClass + "." + t.slideDuplicateClass + ",." + t.slideClass + "." + t.slideBlankClass).remove(), i.removeAttr("data-swiper-slide-index")
                }
            },
            grabCursor: {
                setGrabCursor: function(e) {
                    if (!(this.support.touch || !this.params.simulateTouch || this.params.watchOverflow && this.isLocked || this.params.cssMode)) {
                        var t = this.el;
                        t.style.cursor = "move", t.style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", t.style.cursor = e ? "-moz-grabbin" : "-moz-grab", t.style.cursor = e ? "grabbing" : "grab"
                    }
                },
                unsetGrabCursor: function() { this.support.touch || this.params.watchOverflow && this.isLocked || this.params.cssMode || (this.el.style.cursor = "") }
            },
            manipulation: {
                appendSlide: function(e) {
                    var t = this.$wrapperEl,
                        i = this.params;
                    if (i.loop && this.loopDestroy(), "object" == typeof e && "length" in e)
                        for (var s = 0; s < e.length; s += 1) e[s] && t.append(e[s]);
                    else t.append(e);
                    i.loop && this.loopCreate(), i.observer && this.support.observer || this.update()
                },
                prependSlide: function(e) {
                    var t = this.params,
                        i = this.$wrapperEl,
                        s = this.activeIndex;
                    t.loop && this.loopDestroy();
                    var a = s + 1;
                    if ("object" == typeof e && "length" in e) {
                        for (var r = 0; r < e.length; r += 1) e[r] && i.prepend(e[r]);
                        a = s + e.length
                    } else i.prepend(e);
                    t.loop && this.loopCreate(), t.observer && this.support.observer || this.update(), this.slideTo(a, 0, !1)
                },
                addSlide: function(e, t) {
                    var i = this.$wrapperEl,
                        s = this.params,
                        a = this.activeIndex;
                    s.loop && (a -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + s.slideClass));
                    var r = this.slides.length;
                    if (e <= 0) this.prependSlide(t);
                    else if (e >= r) this.appendSlide(t);
                    else {
                        for (var n = a > e ? a + 1 : a, l = [], o = r - 1; o >= e; o -= 1) {
                            var d = this.slides.eq(o);
                            d.remove(), l.unshift(d)
                        }
                        if ("object" == typeof t && "length" in t) {
                            for (var h = 0; h < t.length; h += 1) t[h] && i.append(t[h]);
                            n = a > e ? a + t.length : a
                        } else i.append(t);
                        for (var p = 0; p < l.length; p += 1) i.append(l[p]);
                        s.loop && this.loopCreate(), s.observer && this.support.observer || this.update(), s.loop ? this.slideTo(n + this.loopedSlides, 0, !1) : this.slideTo(n, 0, !1)
                    }
                },
                removeSlide: function(e) {
                    var t = this.params,
                        i = this.$wrapperEl,
                        s = this.activeIndex;
                    t.loop && (s -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + t.slideClass));
                    var a, r = s;
                    if ("object" == typeof e && "length" in e) {
                        for (var n = 0; n < e.length; n += 1) a = e[n], this.slides[a] && this.slides.eq(a).remove(), a < r && (r -= 1);
                        r = Math.max(r, 0)
                    } else a = e, this.slides[a] && this.slides.eq(a).remove(), a < r && (r -= 1), r = Math.max(r, 0);
                    t.loop && this.loopCreate(), t.observer && this.support.observer || this.update(), t.loop ? this.slideTo(r + this.loopedSlides, 0, !1) : this.slideTo(r, 0, !1)
                },
                removeAllSlides: function() {
                    for (var e = [], t = 0; t < this.slides.length; t += 1) e.push(t);
                    this.removeSlide(e)
                }
            },
            events: {
                attachEvents: function() {
                    var e = r(),
                        t = this.params,
                        i = this.touchEvents,
                        s = this.el,
                        a = this.wrapperEl,
                        n = this.device,
                        l = this.support;
                    this.onTouchStart = $.bind(this), this.onTouchMove = L.bind(this), this.onTouchEnd = I.bind(this), t.cssMode && (this.onScroll = D.bind(this)), this.onClick = A.bind(this);
                    var o = !!t.nested;
                    if (!l.touch && l.pointerEvents) s.addEventListener(i.start, this.onTouchStart, !1), e.addEventListener(i.move, this.onTouchMove, o), e.addEventListener(i.end, this.onTouchEnd, !1);
                    else {
                        if (l.touch) {
                            var d = !("touchstart" !== i.start || !l.passiveListener || !t.passiveListeners) && { passive: !0, capture: !1 };
                            s.addEventListener(i.start, this.onTouchStart, d), s.addEventListener(i.move, this.onTouchMove, l.passiveListener ? { passive: !1, capture: o } : o), s.addEventListener(i.end, this.onTouchEnd, d), i.cancel && s.addEventListener(i.cancel, this.onTouchEnd, d), G || (e.addEventListener("touchstart", N), G = !0)
                        }(t.simulateTouch && !n.ios && !n.android || t.simulateTouch && !l.touch && n.ios) && (s.addEventListener("mousedown", this.onTouchStart, !1), e.addEventListener("mousemove", this.onTouchMove, o), e.addEventListener("mouseup", this.onTouchEnd, !1))
                    }(t.preventClicks || t.preventClicksPropagation) && s.addEventListener("click", this.onClick, !0), t.cssMode && a.addEventListener("scroll", this.onScroll), t.updateOnWindowResize ? this.on(n.ios || n.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", O, !0) : this.on("observerUpdate", O, !0)
                },
                detachEvents: function() {
                    var e = r(),
                        t = this.params,
                        i = this.touchEvents,
                        s = this.el,
                        a = this.wrapperEl,
                        n = this.device,
                        l = this.support,
                        o = !!t.nested;
                    if (!l.touch && l.pointerEvents) s.removeEventListener(i.start, this.onTouchStart, !1), e.removeEventListener(i.move, this.onTouchMove, o), e.removeEventListener(i.end, this.onTouchEnd, !1);
                    else {
                        if (l.touch) {
                            var d = !("onTouchStart" !== i.start || !l.passiveListener || !t.passiveListeners) && { passive: !0, capture: !1 };
                            s.removeEventListener(i.start, this.onTouchStart, d), s.removeEventListener(i.move, this.onTouchMove, o), s.removeEventListener(i.end, this.onTouchEnd, d), i.cancel && s.removeEventListener(i.cancel, this.onTouchEnd, d)
                        }(t.simulateTouch && !n.ios && !n.android || t.simulateTouch && !l.touch && n.ios) && (s.removeEventListener("mousedown", this.onTouchStart, !1), e.removeEventListener("mousemove", this.onTouchMove, o), e.removeEventListener("mouseup", this.onTouchEnd, !1))
                    }(t.preventClicks || t.preventClicksPropagation) && s.removeEventListener("click", this.onClick, !0), t.cssMode && a.removeEventListener("scroll", this.onScroll), this.off(n.ios || n.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", O)
                }
            },
            breakpoints: {
                setBreakpoint: function() {
                    var e = this.activeIndex,
                        t = this.initialized,
                        i = this.loopedSlides,
                        s = void 0 === i ? 0 : i,
                        a = this.params,
                        r = this.$el,
                        n = a.breakpoints;
                    if (n && (!n || 0 !== Object.keys(n).length)) {
                        var l = this.getBreakpoint(n);
                        if (l && this.currentBreakpoint !== l) {
                            var o = l in n ? n[l] : void 0;
                            o && ["slidesPerView", "spaceBetween", "slidesPerGroup", "slidesPerGroupSkip", "slidesPerColumn"].forEach((function(e) {
                                var t = o[e];
                                void 0 !== t && (o[e] = "slidesPerView" !== e || "AUTO" !== t && "auto" !== t ? "slidesPerView" === e ? parseFloat(t) : parseInt(t, 10) : "auto")
                            }));
                            var d = o || this.originalParams,
                                h = a.slidesPerColumn > 1,
                                p = d.slidesPerColumn > 1;
                            h && !p ? (r.removeClass(a.containerModifierClass + "multirow " + a.containerModifierClass + "multirow-column"), this.emitContainerClasses()) : !h && p && (r.addClass(a.containerModifierClass + "multirow"), "column" === d.slidesPerColumnFill && r.addClass(a.containerModifierClass + "multirow-column"), this.emitContainerClasses());
                            var u = d.direction && d.direction !== a.direction,
                                c = a.loop && (d.slidesPerView !== a.slidesPerView || u);
                            u && t && this.changeDirection(), S(this.params, d), S(this, { allowTouchMove: this.params.allowTouchMove, allowSlideNext: this.params.allowSlideNext, allowSlidePrev: this.params.allowSlidePrev }), this.currentBreakpoint = l, c && t && (this.loopDestroy(), this.loopCreate(), this.updateSlides(), this.slideTo(e - s + this.loopedSlides, 0, !1)), this.emit("breakpoint", d)
                        }
                    }
                },
                getBreakpoint: function(e) {
                    var t = l();
                    if (e) {
                        var i = !1,
                            s = Object.keys(e).map((function(e) { if ("string" == typeof e && 0 === e.indexOf("@")) { var i = parseFloat(e.substr(1)); return { value: t.innerHeight * i, point: e } } return { value: e, point: e } }));
                        s.sort((function(e, t) { return parseInt(e.value, 10) - parseInt(t.value, 10) }));
                        for (var a = 0; a < s.length; a += 1) {
                            var r = s[a],
                                n = r.point;
                            r.value <= t.innerWidth && (i = n)
                        }
                        return i || "max"
                    }
                }
            },
            checkOverflow: {
                checkOverflow: function() {
                    var e = this.params,
                        t = this.isLocked,
                        i = this.slides.length > 0 && e.slidesOffsetBefore + e.spaceBetween * (this.slides.length - 1) + this.slides[0].offsetWidth * this.slides.length;
                    e.slidesOffsetBefore && e.slidesOffsetAfter && i ? this.isLocked = i <= this.size : this.isLocked = 1 === this.snapGrid.length, this.allowSlideNext = !this.isLocked, this.allowSlidePrev = !this.isLocked, t !== this.isLocked && this.emit(this.isLocked ? "lock" : "unlock"), t && t !== this.isLocked && (this.isEnd = !1, this.navigation && this.navigation.update())
                }
            },
            classes: {
                addClasses: function() {
                    var e = this.classNames,
                        t = this.params,
                        i = this.rtl,
                        s = this.$el,
                        a = this.device,
                        r = [];
                    r.push("initialized"), r.push(t.direction), t.freeMode && r.push("free-mode"), t.autoHeight && r.push("autoheight"), i && r.push("rtl"), t.slidesPerColumn > 1 && (r.push("multirow"), "column" === t.slidesPerColumnFill && r.push("multirow-column")), a.android && r.push("android"), a.ios && r.push("ios"), t.cssMode && r.push("css-mode"), r.forEach((function(i) { e.push(t.containerModifierClass + i) })), s.addClass(e.join(" ")), this.emitContainerClasses()
                },
                removeClasses: function() {
                    var e = this.$el,
                        t = this.classNames;
                    e.removeClass(t.join(" ")), this.emitContainerClasses()
                }
            },
            images: {
                loadImage: function(e, t, i, s, a, r) {
                    var n, o = l();

                    function d() { r && r() }
                    m(e).parent("picture")[0] || e.complete && a ? d() : t ? ((n = new o.Image).onload = d, n.onerror = d, s && (n.sizes = s), i && (n.srcset = i), t && (n.src = t)) : d()
                },
                preloadImages: function() {
                    var e = this;

                    function t() { null != e && e && !e.destroyed && (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1), e.imagesLoaded === e.imagesToLoad.length && (e.params.updateOnImagesReady && e.update(), e.emit("imagesReady"))) }
                    e.imagesToLoad = e.$el.find("img");
                    for (var i = 0; i < e.imagesToLoad.length; i += 1) {
                        var s = e.imagesToLoad[i];
                        e.loadImage(s, s.currentSrc || s.getAttribute("src"), s.srcset || s.getAttribute("srcset"), s.sizes || s.getAttribute("sizes"), !0, t)
                    }
                }
            }
        },
        X = {},
        Y = function() {
            function t() {
                for (var e, i, s = arguments.length, a = new Array(s), r = 0; r < s; r++) a[r] = arguments[r];
                1 === a.length && a[0].constructor && a[0].constructor === Object ? i = a[0] : (e = a[0], i = a[1]), i || (i = {}), i = S({}, i), e && !i.el && (i.el = e);
                var n = this;
                n.support = z(), n.device = P({ userAgent: i.userAgent }), n.browser = k(), n.eventsListeners = {}, n.eventsAnyListeners = [], Object.keys(H).forEach((function(e) { Object.keys(H[e]).forEach((function(i) { t.prototype[i] || (t.prototype[i] = H[e][i]) })) })), void 0 === n.modules && (n.modules = {}), Object.keys(n.modules).forEach((function(e) {
                    var t = n.modules[e];
                    if (t.params) {
                        var s = Object.keys(t.params)[0],
                            a = t.params[s];
                        if ("object" != typeof a || null === a) return;
                        if (!(s in i) || !("enabled" in a)) return;
                        !0 === i[s] && (i[s] = { enabled: !0 }), "object" != typeof i[s] || "enabled" in i[s] || (i[s].enabled = !0), i[s] || (i[s] = { enabled: !1 })
                    }
                }));
                var l = S({}, B);
                n.useParams(l), n.params = S({}, l, X, i), n.originalParams = S({}, n.params), n.passedParams = S({}, i), n.params && n.params.on && Object.keys(n.params.on).forEach((function(e) { n.on(e, n.params.on[e]) })), n.$ = m;
                var o = m(n.params.el);
                if (e = o[0]) {
                    if (o.length > 1) {
                        var d = [];
                        return o.each((function(e) {
                            var s = S({}, i, { el: e });
                            d.push(new t(s))
                        })), d
                    }
                    var h, p, u;
                    return e.swiper = n, e && e.shadowRoot && e.shadowRoot.querySelector ? (h = m(e.shadowRoot.querySelector("." + n.params.wrapperClass))).children = function(e) { return o.children(e) } : h = o.children("." + n.params.wrapperClass), S(n, { $el: o, el: e, $wrapperEl: h, wrapperEl: h[0], classNames: [], slides: m(), slidesGrid: [], snapGrid: [], slidesSizesGrid: [], isHorizontal: function() { return "horizontal" === n.params.direction }, isVertical: function() { return "vertical" === n.params.direction }, rtl: "rtl" === e.dir.toLowerCase() || "rtl" === o.css("direction"), rtlTranslate: "horizontal" === n.params.direction && ("rtl" === e.dir.toLowerCase() || "rtl" === o.css("direction")), wrongRTL: "-webkit-box" === h.css("display"), activeIndex: 0, realIndex: 0, isBeginning: !0, isEnd: !1, translate: 0, previousTranslate: 0, progress: 0, velocity: 0, animating: !1, allowSlideNext: n.params.allowSlideNext, allowSlidePrev: n.params.allowSlidePrev, touchEvents: (p = ["touchstart", "touchmove", "touchend", "touchcancel"], u = ["mousedown", "mousemove", "mouseup"], n.support.pointerEvents && (u = ["pointerdown", "pointermove", "pointerup"]), n.touchEventsTouch = { start: p[0], move: p[1], end: p[2], cancel: p[3] }, n.touchEventsDesktop = { start: u[0], move: u[1], end: u[2] }, n.support.touch || !n.params.simulateTouch ? n.touchEventsTouch : n.touchEventsDesktop), touchEventsData: { isTouched: void 0, isMoved: void 0, allowTouchCallbacks: void 0, touchStartTime: void 0, isScrolling: void 0, currentTranslate: void 0, startTranslate: void 0, allowThresholdMove: void 0, formElements: "input, select, option, textarea, button, video, label", lastClickTime: x(), clickTimeout: void 0, velocities: [], allowMomentumBounce: void 0, isTouchEvent: void 0, startMoving: void 0 }, allowClick: !0, allowTouchMove: n.params.allowTouchMove, touches: { startX: 0, startY: 0, currentX: 0, currentY: 0, diff: 0 }, imagesToLoad: [], imagesLoaded: 0 }), n.useModules(), n.emit("_swiper"), n.params.init && n.init(), n
                }
            }
            var i, s, a, r = t.prototype;
            return r.emitContainerClasses = function() {
                var e = this;
                if (e.params._emitClasses && e.el) {
                    var t = e.el.className.split(" ").filter((function(t) { return 0 === t.indexOf("swiper-container") || 0 === t.indexOf(e.params.containerModifierClass) }));
                    e.emit("_containerClasses", t.join(" "))
                }
            }, r.emitSlidesClasses = function() {
                var e = this;
                e.params._emitClasses && e.el && e.slides.each((function(t) {
                    var i = t.className.split(" ").filter((function(t) { return 0 === t.indexOf("swiper-slide") || 0 === t.indexOf(e.params.slideClass) }));
                    e.emit("_slideClass", t, i.join(" "))
                }))
            }, r.slidesPerViewDynamic = function() {
                var e = this.params,
                    t = this.slides,
                    i = this.slidesGrid,
                    s = this.size,
                    a = this.activeIndex,
                    r = 1;
                if (e.centeredSlides) { for (var n, l = t[a].swiperSlideSize, o = a + 1; o < t.length; o += 1) t[o] && !n && (r += 1, (l += t[o].swiperSlideSize) > s && (n = !0)); for (var d = a - 1; d >= 0; d -= 1) t[d] && !n && (r += 1, (l += t[d].swiperSlideSize) > s && (n = !0)) } else
                    for (var h = a + 1; h < t.length; h += 1) i[h] - i[a] < s && (r += 1);
                return r
            }, r.update = function() {
                var e = this;
                if (e && !e.destroyed) {
                    var t = e.snapGrid,
                        i = e.params;
                    i.breakpoints && e.setBreakpoint(), e.updateSize(), e.updateSlides(), e.updateProgress(), e.updateSlidesClasses(), e.params.freeMode ? (s(), e.params.autoHeight && e.updateAutoHeight()) : (("auto" === e.params.slidesPerView || e.params.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0)) || s(), i.watchOverflow && t !== e.snapGrid && e.checkOverflow(), e.emit("update")
                }

                function s() {
                    var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                        i = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate());
                    e.setTranslate(i), e.updateActiveIndex(), e.updateSlidesClasses()
                }
            }, r.changeDirection = function(e, t) { void 0 === t && (t = !0); var i = this.params.direction; return e || (e = "horizontal" === i ? "vertical" : "horizontal"), e === i || "horizontal" !== e && "vertical" !== e || (this.$el.removeClass("" + this.params.containerModifierClass + i).addClass("" + this.params.containerModifierClass + e), this.emitContainerClasses(), this.params.direction = e, this.slides.each((function(t) { "vertical" === e ? t.style.width = "" : t.style.height = "" })), this.emit("changeDirection"), t && this.update()), this }, r.init = function() { this.initialized || (this.emit("beforeInit"), this.params.breakpoints && this.setBreakpoint(), this.addClasses(), this.params.loop && this.loopCreate(), this.updateSize(), this.updateSlides(), this.params.watchOverflow && this.checkOverflow(), this.params.grabCursor && this.setGrabCursor(), this.params.preloadImages && this.preloadImages(), this.params.loop ? this.slideTo(this.params.initialSlide + this.loopedSlides, 0, this.params.runCallbacksOnInit) : this.slideTo(this.params.initialSlide, 0, this.params.runCallbacksOnInit), this.attachEvents(), this.initialized = !0, this.emit("init")) }, r.destroy = function(e, t) {
                void 0 === e && (e = !0), void 0 === t && (t = !0);
                var i, s = this,
                    a = s.params,
                    r = s.$el,
                    n = s.$wrapperEl,
                    l = s.slides;
                return void 0 === s.params || s.destroyed || (s.emit("beforeDestroy"), s.initialized = !1, s.detachEvents(), a.loop && s.loopDestroy(), t && (s.removeClasses(), r.removeAttr("style"), n.removeAttr("style"), l && l.length && l.removeClass([a.slideVisibleClass, a.slideActiveClass, a.slideNextClass, a.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index")), s.emit("destroy"), Object.keys(s.eventsListeners).forEach((function(e) { s.off(e) })), !1 !== e && (s.$el[0].swiper = null, i = s, Object.keys(i).forEach((function(e) { try { i[e] = null } catch (e) {} try { delete i[e] } catch (e) {} }))), s.destroyed = !0), null
            }, t.extendDefaults = function(e) { S(X, e) }, t.installModule = function(e) {
                t.prototype.modules || (t.prototype.modules = {});
                var i = e.name || Object.keys(t.prototype.modules).length + "_" + x();
                t.prototype.modules[i] = e
            }, t.use = function(e) { return Array.isArray(e) ? (e.forEach((function(e) { return t.installModule(e) })), t) : (t.installModule(e), t) }, i = t, a = [{ key: "extendedDefaults", get: function() { return X } }, { key: "defaults", get: function() { return B } }], (s = null) && e(i.prototype, s), a && e(i, a), t
        }(),
        V = {
            name: "resize",
            create: function() {
                var e = this;
                S(e, { resize: { resizeHandler: function() { e && !e.destroyed && e.initialized && (e.emit("beforeResize"), e.emit("resize")) }, orientationChangeHandler: function() { e && !e.destroyed && e.initialized && e.emit("orientationchange") } } })
            },
            on: {
                init: function(e) {
                    var t = l();
                    t.addEventListener("resize", e.resize.resizeHandler), t.addEventListener("orientationchange", e.resize.orientationChangeHandler)
                },
                destroy: function(e) {
                    var t = l();
                    t.removeEventListener("resize", e.resize.resizeHandler), t.removeEventListener("orientationchange", e.resize.orientationChangeHandler)
                }
            }
        },
        F = {
            attach: function(e, t) {
                void 0 === t && (t = {});
                var i = l(),
                    s = this,
                    a = new(i.MutationObserver || i.WebkitMutationObserver)((function(e) {
                        if (1 !== e.length) {
                            var t = function() { s.emit("observerUpdate", e[0]) };
                            i.requestAnimationFrame ? i.requestAnimationFrame(t) : i.setTimeout(t, 0)
                        } else s.emit("observerUpdate", e[0])
                    }));
                a.observe(e, { attributes: void 0 === t.attributes || t.attributes, childList: void 0 === t.childList || t.childList, characterData: void 0 === t.characterData || t.characterData }), s.observer.observers.push(a)
            },
            init: function() {
                if (this.support.observer && this.params.observer) {
                    if (this.params.observeParents)
                        for (var e = this.$el.parents(), t = 0; t < e.length; t += 1) this.observer.attach(e[t]);
                    this.observer.attach(this.$el[0], { childList: this.params.observeSlideChildren }), this.observer.attach(this.$wrapperEl[0], { attributes: !1 })
                }
            },
            destroy: function() { this.observer.observers.forEach((function(e) { e.disconnect() })), this.observer.observers = [] }
        },
        W = { name: "observer", params: { observer: !1, observeParents: !1, observeSlideChildren: !1 }, create: function() { M(this, { observer: t(t({}, F), {}, { observers: [] }) }) }, on: { init: function(e) { e.observer.init() }, destroy: function(e) { e.observer.destroy() } } },
        R = {
            update: function(e) {
                var t = this,
                    i = t.params,
                    s = i.slidesPerView,
                    a = i.slidesPerGroup,
                    r = i.centeredSlides,
                    n = t.params.virtual,
                    l = n.addSlidesBefore,
                    o = n.addSlidesAfter,
                    d = t.virtual,
                    h = d.from,
                    p = d.to,
                    u = d.slides,
                    c = d.slidesGrid,
                    v = d.renderSlide,
                    f = d.offset;
                t.updateActiveIndex();
                var m, g, w, b = t.activeIndex || 0;
                m = t.rtlTranslate ? "right" : t.isHorizontal() ? "left" : "top", r ? (g = Math.floor(s / 2) + a + o, w = Math.floor(s / 2) + a + l) : (g = s + (a - 1) + o, w = a + l);
                var y = Math.max((b || 0) - w, 0),
                    E = Math.min((b || 0) + g, u.length - 1),
                    x = (t.slidesGrid[y] || 0) - (t.slidesGrid[0] || 0);

                function T() { t.updateSlides(), t.updateProgress(), t.updateSlidesClasses(), t.lazy && t.params.lazy.enabled && t.lazy.load() }
                if (S(t.virtual, { from: y, to: E, offset: x, slidesGrid: t.slidesGrid }), h === y && p === E && !e) return t.slidesGrid !== c && x !== f && t.slides.css(m, x + "px"), void t.updateProgress();
                if (t.params.virtual.renderExternal) return t.params.virtual.renderExternal.call(t, { offset: x, from: y, to: E, slides: function() { for (var e = [], t = y; t <= E; t += 1) e.push(u[t]); return e }() }), void(t.params.virtual.renderExternalUpdate && T());
                var C = [],
                    M = [];
                if (e) t.$wrapperEl.find("." + t.params.slideClass).remove();
                else
                    for (var z = h; z <= p; z += 1)(z < y || z > E) && t.$wrapperEl.find("." + t.params.slideClass + '[data-swiper-slide-index="' + z + '"]').remove();
                for (var P = 0; P < u.length; P += 1) P >= y && P <= E && (void 0 === p || e ? M.push(P) : (P > p && M.push(P), P < h && C.push(P)));
                M.forEach((function(e) { t.$wrapperEl.append(v(u[e], e)) })), C.sort((function(e, t) { return t - e })).forEach((function(e) { t.$wrapperEl.prepend(v(u[e], e)) })), t.$wrapperEl.children(".swiper-slide").css(m, x + "px"), T()
            },
            renderSlide: function(e, t) { var i = this.params.virtual; if (i.cache && this.virtual.cache[t]) return this.virtual.cache[t]; var s = i.renderSlide ? m(i.renderSlide.call(this, e, t)) : m('<div class="' + this.params.slideClass + '" data-swiper-slide-index="' + t + '">' + e + "</div>"); return s.attr("data-swiper-slide-index") || s.attr("data-swiper-slide-index", t), i.cache && (this.virtual.cache[t] = s), s },
            appendSlide: function(e) {
                if ("object" == typeof e && "length" in e)
                    for (var t = 0; t < e.length; t += 1) e[t] && this.virtual.slides.push(e[t]);
                else this.virtual.slides.push(e);
                this.virtual.update(!0)
            },
            prependSlide: function(e) {
                var t = this.activeIndex,
                    i = t + 1,
                    s = 1;
                if (Array.isArray(e)) {
                    for (var a = 0; a < e.length; a += 1) e[a] && this.virtual.slides.unshift(e[a]);
                    i = t + e.length, s = e.length
                } else this.virtual.slides.unshift(e);
                if (this.params.virtual.cache) {
                    var r = this.virtual.cache,
                        n = {};
                    Object.keys(r).forEach((function(e) {
                        var t = r[e],
                            i = t.attr("data-swiper-slide-index");
                        i && t.attr("data-swiper-slide-index", parseInt(i, 10) + 1), n[parseInt(e, 10) + s] = t
                    })), this.virtual.cache = n
                }
                this.virtual.update(!0), this.slideTo(i, 0)
            },
            removeSlide: function(e) {
                if (null != e) {
                    var t = this.activeIndex;
                    if (Array.isArray(e))
                        for (var i = e.length - 1; i >= 0; i -= 1) this.virtual.slides.splice(e[i], 1), this.params.virtual.cache && delete this.virtual.cache[e[i]], e[i] < t && (t -= 1), t = Math.max(t, 0);
                    else this.virtual.slides.splice(e, 1), this.params.virtual.cache && delete this.virtual.cache[e], e < t && (t -= 1), t = Math.max(t, 0);
                    this.virtual.update(!0), this.slideTo(t, 0)
                }
            },
            removeAllSlides: function() { this.virtual.slides = [], this.params.virtual.cache && (this.virtual.cache = {}), this.virtual.update(!0), this.slideTo(0, 0) }
        },
        q = {
            name: "virtual",
            params: { virtual: { enabled: !1, slides: [], cache: !0, renderSlide: null, renderExternal: null, renderExternalUpdate: !0, addSlidesBefore: 0, addSlidesAfter: 0 } },
            create: function() { M(this, { virtual: t(t({}, R), {}, { slides: this.params.virtual.slides, cache: {} }) }) },
            on: {
                beforeInit: function(e) {
                    if (e.params.virtual.enabled) {
                        e.classNames.push(e.params.containerModifierClass + "virtual");
                        var t = { watchSlidesProgress: !0 };
                        S(e.params, t), S(e.originalParams, t), e.params.initialSlide || e.virtual.update()
                    }
                },
                setTranslate: function(e) { e.params.virtual.enabled && e.virtual.update() }
            }
        },
        j = {
            handle: function(e) {
                var t = l(),
                    i = r(),
                    s = this.rtlTranslate,
                    a = e;
                a.originalEvent && (a = a.originalEvent);
                var n = a.keyCode || a.charCode,
                    o = this.params.keyboard.pageUpDown,
                    d = o && 33 === n,
                    h = o && 34 === n,
                    p = 37 === n,
                    u = 39 === n,
                    c = 38 === n,
                    v = 40 === n;
                if (!this.allowSlideNext && (this.isHorizontal() && u || this.isVertical() && v || h)) return !1;
                if (!this.allowSlidePrev && (this.isHorizontal() && p || this.isVertical() && c || d)) return !1;
                if (!(a.shiftKey || a.altKey || a.ctrlKey || a.metaKey || i.activeElement && i.activeElement.nodeName && ("input" === i.activeElement.nodeName.toLowerCase() || "textarea" === i.activeElement.nodeName.toLowerCase()))) {
                    if (this.params.keyboard.onlyInViewport && (d || h || p || u || c || v)) {
                        var f = !1;
                        if (this.$el.parents("." + this.params.slideClass).length > 0 && 0 === this.$el.parents("." + this.params.slideActiveClass).length) return;
                        var m = t.innerWidth,
                            g = t.innerHeight,
                            w = this.$el.offset();
                        s && (w.left -= this.$el[0].scrollLeft);
                        for (var b = [
                                [w.left, w.top],
                                [w.left + this.width, w.top],
                                [w.left, w.top + this.height],
                                [w.left + this.width, w.top + this.height]
                            ], y = 0; y < b.length; y += 1) {
                            var E = b[y];
                            E[0] >= 0 && E[0] <= m && E[1] >= 0 && E[1] <= g && (f = !0)
                        }
                        if (!f) return
                    }
                    this.isHorizontal() ? ((d || h || p || u) && (a.preventDefault ? a.preventDefault() : a.returnValue = !1), ((h || u) && !s || (d || p) && s) && this.slideNext(), ((d || p) && !s || (h || u) && s) && this.slidePrev()) : ((d || h || c || v) && (a.preventDefault ? a.preventDefault() : a.returnValue = !1), (h || v) && this.slideNext(), (d || c) && this.slidePrev()), this.emit("keyPress", n)
                }
            },
            enable: function() {
                var e = r();
                this.keyboard.enabled || (m(e).on("keydown", this.keyboard.handle), this.keyboard.enabled = !0)
            },
            disable: function() {
                var e = r();
                this.keyboard.enabled && (m(e).off("keydown", this.keyboard.handle), this.keyboard.enabled = !1)
            }
        },
        _ = { name: "keyboard", params: { keyboard: { enabled: !1, onlyInViewport: !0, pageUpDown: !0 } }, create: function() { M(this, { keyboard: t({ enabled: !1 }, j) }) }, on: { init: function(e) { e.params.keyboard.enabled && e.keyboard.enable() }, destroy: function(e) { e.keyboard.enabled && e.keyboard.disable() } } };
    var U = {
            lastScrollTime: x(),
            lastEventBeforeSnap: void 0,
            recentWheelEvents: [],
            event: function() {
                return l().navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : function() {
                    var e = r(),
                        t = "onwheel" in e;
                    if (!t) {
                        var i = e.createElement("div");
                        i.setAttribute("onwheel", "return;"), t = "function" == typeof i.onwheel
                    }
                    return !t && e.implementation && e.implementation.hasFeature && !0 !== e.implementation.hasFeature("", "") && (t = e.implementation.hasFeature("Events.wheel", "3.0")), t
                }() ? "wheel" : "mousewheel"
            },
            normalize: function(e) {
                var t = 0,
                    i = 0,
                    s = 0,
                    a = 0;
                return "detail" in e && (i = e.detail), "wheelDelta" in e && (i = -e.wheelDelta / 120), "wheelDeltaY" in e && (i = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (t = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (t = i, i = 0), s = 10 * t, a = 10 * i, "deltaY" in e && (a = e.deltaY), "deltaX" in e && (s = e.deltaX), e.shiftKey && !s && (s = a, a = 0), (s || a) && e.deltaMode && (1 === e.deltaMode ? (s *= 40, a *= 40) : (s *= 800, a *= 800)), s && !t && (t = s < 1 ? -1 : 1), a && !i && (i = a < 1 ? -1 : 1), { spinX: t, spinY: i, pixelX: s, pixelY: a }
            },
            handleMouseEnter: function() { this.mouseEntered = !0 },
            handleMouseLeave: function() { this.mouseEntered = !1 },
            handle: function(e) {
                var t = e,
                    i = this,
                    s = i.params.mousewheel;
                i.params.cssMode && t.preventDefault();
                var a = i.$el;
                if ("container" !== i.params.mousewheel.eventsTarget && (a = m(i.params.mousewheel.eventsTarget)), !i.mouseEntered && !a[0].contains(t.target) && !s.releaseOnEdges) return !0;
                t.originalEvent && (t = t.originalEvent);
                var r = 0,
                    n = i.rtlTranslate ? -1 : 1,
                    l = U.normalize(t);
                if (s.forceToAxis)
                    if (i.isHorizontal()) {
                        if (!(Math.abs(l.pixelX) > Math.abs(l.pixelY))) return !0;
                        r = -l.pixelX * n
                    } else {
                        if (!(Math.abs(l.pixelY) > Math.abs(l.pixelX))) return !0;
                        r = -l.pixelY
                    }
                else r = Math.abs(l.pixelX) > Math.abs(l.pixelY) ? -l.pixelX * n : -l.pixelY;
                if (0 === r) return !0;
                if (s.invert && (r = -r), i.params.freeMode) {
                    var o = { time: x(), delta: Math.abs(r), direction: Math.sign(r) },
                        d = i.mousewheel.lastEventBeforeSnap,
                        h = d && o.time < d.time + 500 && o.delta <= d.delta && o.direction === d.direction;
                    if (!h) {
                        i.mousewheel.lastEventBeforeSnap = void 0, i.params.loop && i.loopFix();
                        var p = i.getTranslate() + r * s.sensitivity,
                            u = i.isBeginning,
                            c = i.isEnd;
                        if (p >= i.minTranslate() && (p = i.minTranslate()), p <= i.maxTranslate() && (p = i.maxTranslate()), i.setTransition(0), i.setTranslate(p), i.updateProgress(), i.updateActiveIndex(), i.updateSlidesClasses(), (!u && i.isBeginning || !c && i.isEnd) && i.updateSlidesClasses(), i.params.freeModeSticky) {
                            clearTimeout(i.mousewheel.timeout), i.mousewheel.timeout = void 0;
                            var v = i.mousewheel.recentWheelEvents;
                            v.length >= 15 && v.shift();
                            var f = v.length ? v[v.length - 1] : void 0,
                                g = v[0];
                            if (v.push(o), f && (o.delta > f.delta || o.direction !== f.direction)) v.splice(0);
                            else if (v.length >= 15 && o.time - g.time < 500 && g.delta - o.delta >= 1 && o.delta <= 6) {
                                var w = r > 0 ? .8 : .2;
                                i.mousewheel.lastEventBeforeSnap = o, v.splice(0), i.mousewheel.timeout = E((function() { i.slideToClosest(i.params.speed, !0, void 0, w) }), 0)
                            }
                            i.mousewheel.timeout || (i.mousewheel.timeout = E((function() { i.mousewheel.lastEventBeforeSnap = o, v.splice(0), i.slideToClosest(i.params.speed, !0, void 0, .5) }), 500))
                        }
                        if (h || i.emit("scroll", t), i.params.autoplay && i.params.autoplayDisableOnInteraction && i.autoplay.stop(), p === i.minTranslate() || p === i.maxTranslate()) return !0
                    }
                } else {
                    var b = { time: x(), delta: Math.abs(r), direction: Math.sign(r), raw: e },
                        y = i.mousewheel.recentWheelEvents;
                    y.length >= 2 && y.shift();
                    var T = y.length ? y[y.length - 1] : void 0;
                    if (y.push(b), T ? (b.direction !== T.direction || b.delta > T.delta || b.time > T.time + 150) && i.mousewheel.animateSlider(b) : i.mousewheel.animateSlider(b), i.mousewheel.releaseScroll(b)) return !0
                }
                return t.preventDefault ? t.preventDefault() : t.returnValue = !1, !1
            },
            animateSlider: function(e) { var t = l(); return e.delta >= 6 && x() - this.mousewheel.lastScrollTime < 60 || (e.direction < 0 ? this.isEnd && !this.params.loop || this.animating || (this.slideNext(), this.emit("scroll", e.raw)) : this.isBeginning && !this.params.loop || this.animating || (this.slidePrev(), this.emit("scroll", e.raw)), this.mousewheel.lastScrollTime = (new t.Date).getTime(), !1) },
            releaseScroll: function(e) { var t = this.params.mousewheel; if (e.direction < 0) { if (this.isEnd && !this.params.loop && t.releaseOnEdges) return !0 } else if (this.isBeginning && !this.params.loop && t.releaseOnEdges) return !0; return !1 },
            enable: function() { var e = U.event(); if (this.params.cssMode) return this.wrapperEl.removeEventListener(e, this.mousewheel.handle), !0; if (!e) return !1; if (this.mousewheel.enabled) return !1; var t = this.$el; return "container" !== this.params.mousewheel.eventsTarget && (t = m(this.params.mousewheel.eventsTarget)), t.on("mouseenter", this.mousewheel.handleMouseEnter), t.on("mouseleave", this.mousewheel.handleMouseLeave), t.on(e, this.mousewheel.handle), this.mousewheel.enabled = !0, !0 },
            disable: function() { var e = U.event(); if (this.params.cssMode) return this.wrapperEl.addEventListener(e, this.mousewheel.handle), !0; if (!e) return !1; if (!this.mousewheel.enabled) return !1; var t = this.$el; return "container" !== this.params.mousewheel.eventsTarget && (t = m(this.params.mousewheel.eventsTarget)), t.off(e, this.mousewheel.handle), this.mousewheel.enabled = !1, !0 }
        },
        K = {
            update: function() {
                var e = this.params.navigation;
                if (!this.params.loop) {
                    var t = this.navigation,
                        i = t.$nextEl,
                        s = t.$prevEl;
                    s && s.length > 0 && (this.isBeginning ? s.addClass(e.disabledClass) : s.removeClass(e.disabledClass), s[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass)), i && i.length > 0 && (this.isEnd ? i.addClass(e.disabledClass) : i.removeClass(e.disabledClass), i[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass))
                }
            },
            onPrevClick: function(e) { e.preventDefault(), this.isBeginning && !this.params.loop || this.slidePrev() },
            onNextClick: function(e) { e.preventDefault(), this.isEnd && !this.params.loop || this.slideNext() },
            init: function() {
                var e, t, i = this.params.navigation;
                (i.nextEl || i.prevEl) && (i.nextEl && (e = m(i.nextEl), this.params.uniqueNavElements && "string" == typeof i.nextEl && e.length > 1 && 1 === this.$el.find(i.nextEl).length && (e = this.$el.find(i.nextEl))), i.prevEl && (t = m(i.prevEl), this.params.uniqueNavElements && "string" == typeof i.prevEl && t.length > 1 && 1 === this.$el.find(i.prevEl).length && (t = this.$el.find(i.prevEl))), e && e.length > 0 && e.on("click", this.navigation.onNextClick), t && t.length > 0 && t.on("click", this.navigation.onPrevClick), S(this.navigation, { $nextEl: e, nextEl: e && e[0], $prevEl: t, prevEl: t && t[0] }))
            },
            destroy: function() {
                var e = this.navigation,
                    t = e.$nextEl,
                    i = e.$prevEl;
                t && t.length && (t.off("click", this.navigation.onNextClick), t.removeClass(this.params.navigation.disabledClass)), i && i.length && (i.off("click", this.navigation.onPrevClick), i.removeClass(this.params.navigation.disabledClass))
            }
        },
        Z = {
            update: function() {
                var e = this.rtl,
                    t = this.params.pagination;
                if (t.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                    var i, s = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                        a = this.pagination.$el,
                        r = this.params.loop ? Math.ceil((s - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length;
                    if (this.params.loop ? ((i = Math.ceil((this.activeIndex - this.loopedSlides) / this.params.slidesPerGroup)) > s - 1 - 2 * this.loopedSlides && (i -= s - 2 * this.loopedSlides), i > r - 1 && (i -= r), i < 0 && "bullets" !== this.params.paginationType && (i = r + i)) : i = void 0 !== this.snapIndex ? this.snapIndex : this.activeIndex || 0, "bullets" === t.type && this.pagination.bullets && this.pagination.bullets.length > 0) {
                        var n, l, o, d = this.pagination.bullets;
                        if (t.dynamicBullets && (this.pagination.bulletSize = d.eq(0)[this.isHorizontal() ? "outerWidth" : "outerHeight"](!0), a.css(this.isHorizontal() ? "width" : "height", this.pagination.bulletSize * (t.dynamicMainBullets + 4) + "px"), t.dynamicMainBullets > 1 && void 0 !== this.previousIndex && (this.pagination.dynamicBulletIndex += i - this.previousIndex, this.pagination.dynamicBulletIndex > t.dynamicMainBullets - 1 ? this.pagination.dynamicBulletIndex = t.dynamicMainBullets - 1 : this.pagination.dynamicBulletIndex < 0 && (this.pagination.dynamicBulletIndex = 0)), n = i - this.pagination.dynamicBulletIndex, o = ((l = n + (Math.min(d.length, t.dynamicMainBullets) - 1)) + n) / 2), d.removeClass(t.bulletActiveClass + " " + t.bulletActiveClass + "-next " + t.bulletActiveClass + "-next-next " + t.bulletActiveClass + "-prev " + t.bulletActiveClass + "-prev-prev " + t.bulletActiveClass + "-main"), a.length > 1) d.each((function(e) {
                            var s = m(e),
                                a = s.index();
                            a === i && s.addClass(t.bulletActiveClass), t.dynamicBullets && (a >= n && a <= l && s.addClass(t.bulletActiveClass + "-main"), a === n && s.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), a === l && s.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next"))
                        }));
                        else {
                            var h = d.eq(i),
                                p = h.index();
                            if (h.addClass(t.bulletActiveClass), t.dynamicBullets) {
                                for (var u = d.eq(n), c = d.eq(l), v = n; v <= l; v += 1) d.eq(v).addClass(t.bulletActiveClass + "-main");
                                if (this.params.loop)
                                    if (p >= d.length - t.dynamicMainBullets) {
                                        for (var f = t.dynamicMainBullets; f >= 0; f -= 1) d.eq(d.length - f).addClass(t.bulletActiveClass + "-main");
                                        d.eq(d.length - t.dynamicMainBullets - 1).addClass(t.bulletActiveClass + "-prev")
                                    } else u.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), c.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next");
                                else u.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), c.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next")
                            }
                        }
                        if (t.dynamicBullets) {
                            var g = Math.min(d.length, t.dynamicMainBullets + 4),
                                w = (this.pagination.bulletSize * g - this.pagination.bulletSize) / 2 - o * this.pagination.bulletSize,
                                b = e ? "right" : "left";
                            d.css(this.isHorizontal() ? b : "top", w + "px")
                        }
                    }
                    if ("fraction" === t.type && (a.find("." + t.currentClass).text(t.formatFractionCurrent(i + 1)), a.find("." + t.totalClass).text(t.formatFractionTotal(r))), "progressbar" === t.type) {
                        var y;
                        y = t.progressbarOpposite ? this.isHorizontal() ? "vertical" : "horizontal" : this.isHorizontal() ? "horizontal" : "vertical";
                        var E = (i + 1) / r,
                            x = 1,
                            T = 1;
                        "horizontal" === y ? x = E : T = E, a.find("." + t.progressbarFillClass).transform("translate3d(0,0,0) scaleX(" + x + ") scaleY(" + T + ")").transition(this.params.speed)
                    }
                    "custom" === t.type && t.renderCustom ? (a.html(t.renderCustom(this, i + 1, r)), this.emit("paginationRender", a[0])) : this.emit("paginationUpdate", a[0]), a[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](t.lockClass)
                }
            },
            render: function() {
                var e = this.params.pagination;
                if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                    var t = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                        i = this.pagination.$el,
                        s = "";
                    if ("bullets" === e.type) {
                        for (var a = this.params.loop ? Math.ceil((t - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length, r = 0; r < a; r += 1) e.renderBullet ? s += e.renderBullet.call(this, r, e.bulletClass) : s += "<" + e.bulletElement + ' class="' + e.bulletClass + '"></' + e.bulletElement + ">";
                        i.html(s), this.pagination.bullets = i.find("." + e.bulletClass)
                    }
                    "fraction" === e.type && (s = e.renderFraction ? e.renderFraction.call(this, e.currentClass, e.totalClass) : '<span class="' + e.currentClass + '"></span> / <span class="' + e.totalClass + '"></span>', i.html(s)), "progressbar" === e.type && (s = e.renderProgressbar ? e.renderProgressbar.call(this, e.progressbarFillClass) : '<span class="' + e.progressbarFillClass + '"></span>', i.html(s)), "custom" !== e.type && this.emit("paginationRender", this.pagination.$el[0])
                }
            },
            init: function() {
                var e = this,
                    t = e.params.pagination;
                if (t.el) {
                    var i = m(t.el);
                    0 !== i.length && (e.params.uniqueNavElements && "string" == typeof t.el && i.length > 1 && (i = e.$el.find(t.el)), "bullets" === t.type && t.clickable && i.addClass(t.clickableClass), i.addClass(t.modifierClass + t.type), "bullets" === t.type && t.dynamicBullets && (i.addClass("" + t.modifierClass + t.type + "-dynamic"), e.pagination.dynamicBulletIndex = 0, t.dynamicMainBullets < 1 && (t.dynamicMainBullets = 1)), "progressbar" === t.type && t.progressbarOpposite && i.addClass(t.progressbarOppositeClass), t.clickable && i.on("click", "." + t.bulletClass, (function(t) {
                        t.preventDefault();
                        var i = m(this).index() * e.params.slidesPerGroup;
                        e.params.loop && (i += e.loopedSlides), e.slideTo(i)
                    })), S(e.pagination, { $el: i, el: i[0] }))
                }
            },
            destroy: function() {
                var e = this.params.pagination;
                if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                    var t = this.pagination.$el;
                    t.removeClass(e.hiddenClass), t.removeClass(e.modifierClass + e.type), this.pagination.bullets && this.pagination.bullets.removeClass(e.bulletActiveClass), e.clickable && t.off("click", "." + e.bulletClass)
                }
            }
        },
        J = {
            setTranslate: function() {
                if (this.params.scrollbar.el && this.scrollbar.el) {
                    var e = this.scrollbar,
                        t = this.rtlTranslate,
                        i = this.progress,
                        s = e.dragSize,
                        a = e.trackSize,
                        r = e.$dragEl,
                        n = e.$el,
                        l = this.params.scrollbar,
                        o = s,
                        d = (a - s) * i;
                    t ? (d = -d) > 0 ? (o = s - d, d = 0) : -d + s > a && (o = a + d) : d < 0 ? (o = s + d, d = 0) : d + s > a && (o = a - d), this.isHorizontal() ? (r.transform("translate3d(" + d + "px, 0, 0)"), r[0].style.width = o + "px") : (r.transform("translate3d(0px, " + d + "px, 0)"), r[0].style.height = o + "px"), l.hide && (clearTimeout(this.scrollbar.timeout), n[0].style.opacity = 1, this.scrollbar.timeout = setTimeout((function() { n[0].style.opacity = 0, n.transition(400) }), 1e3))
                }
            },
            setTransition: function(e) { this.params.scrollbar.el && this.scrollbar.el && this.scrollbar.$dragEl.transition(e) },
            updateSize: function() {
                if (this.params.scrollbar.el && this.scrollbar.el) {
                    var e = this.scrollbar,
                        t = e.$dragEl,
                        i = e.$el;
                    t[0].style.width = "", t[0].style.height = "";
                    var s, a = this.isHorizontal() ? i[0].offsetWidth : i[0].offsetHeight,
                        r = this.size / this.virtualSize,
                        n = r * (a / this.size);
                    s = "auto" === this.params.scrollbar.dragSize ? a * r : parseInt(this.params.scrollbar.dragSize, 10), this.isHorizontal() ? t[0].style.width = s + "px" : t[0].style.height = s + "px", i[0].style.display = r >= 1 ? "none" : "", this.params.scrollbar.hide && (i[0].style.opacity = 0), S(e, { trackSize: a, divider: r, moveDivider: n, dragSize: s }), e.$el[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](this.params.scrollbar.lockClass)
                }
            },
            getPointerPosition: function(e) { return this.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientX : e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientY : e.clientY },
            setDragPosition: function(e) {
                var t, i = this.scrollbar,
                    s = this.rtlTranslate,
                    a = i.$el,
                    r = i.dragSize,
                    n = i.trackSize,
                    l = i.dragStartPos;
                t = (i.getPointerPosition(e) - a.offset()[this.isHorizontal() ? "left" : "top"] - (null !== l ? l : r / 2)) / (n - r), t = Math.max(Math.min(t, 1), 0), s && (t = 1 - t);
                var o = this.minTranslate() + (this.maxTranslate() - this.minTranslate()) * t;
                this.updateProgress(o), this.setTranslate(o), this.updateActiveIndex(), this.updateSlidesClasses()
            },
            onDragStart: function(e) {
                var t = this.params.scrollbar,
                    i = this.scrollbar,
                    s = this.$wrapperEl,
                    a = i.$el,
                    r = i.$dragEl;
                this.scrollbar.isTouched = !0, this.scrollbar.dragStartPos = e.target === r[0] || e.target === r ? i.getPointerPosition(e) - e.target.getBoundingClientRect()[this.isHorizontal() ? "left" : "top"] : null, e.preventDefault(), e.stopPropagation(), s.transition(100), r.transition(100), i.setDragPosition(e), clearTimeout(this.scrollbar.dragTimeout), a.transition(0), t.hide && a.css("opacity", 1), this.params.cssMode && this.$wrapperEl.css("scroll-snap-type", "none"), this.emit("scrollbarDragStart", e)
            },
            onDragMove: function(e) {
                var t = this.scrollbar,
                    i = this.$wrapperEl,
                    s = t.$el,
                    a = t.$dragEl;
                this.scrollbar.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, t.setDragPosition(e), i.transition(0), s.transition(0), a.transition(0), this.emit("scrollbarDragMove", e))
            },
            onDragEnd: function(e) {
                var t = this.params.scrollbar,
                    i = this.scrollbar,
                    s = this.$wrapperEl,
                    a = i.$el;
                this.scrollbar.isTouched && (this.scrollbar.isTouched = !1, this.params.cssMode && (this.$wrapperEl.css("scroll-snap-type", ""), s.transition("")), t.hide && (clearTimeout(this.scrollbar.dragTimeout), this.scrollbar.dragTimeout = E((function() { a.css("opacity", 0), a.transition(400) }), 1e3)), this.emit("scrollbarDragEnd", e), t.snapOnRelease && this.slideToClosest())
            },
            enableDraggable: function() {
                if (this.params.scrollbar.el) {
                    var e = r(),
                        t = this.scrollbar,
                        i = this.touchEventsTouch,
                        s = this.touchEventsDesktop,
                        a = this.params,
                        n = this.support,
                        l = t.$el[0],
                        o = !(!n.passiveListener || !a.passiveListeners) && { passive: !1, capture: !1 },
                        d = !(!n.passiveListener || !a.passiveListeners) && { passive: !0, capture: !1 };
                    n.touch ? (l.addEventListener(i.start, this.scrollbar.onDragStart, o), l.addEventListener(i.move, this.scrollbar.onDragMove, o), l.addEventListener(i.end, this.scrollbar.onDragEnd, d)) : (l.addEventListener(s.start, this.scrollbar.onDragStart, o), e.addEventListener(s.move, this.scrollbar.onDragMove, o), e.addEventListener(s.end, this.scrollbar.onDragEnd, d))
                }
            },
            disableDraggable: function() {
                if (this.params.scrollbar.el) {
                    var e = r(),
                        t = this.scrollbar,
                        i = this.touchEventsTouch,
                        s = this.touchEventsDesktop,
                        a = this.params,
                        n = this.support,
                        l = t.$el[0],
                        o = !(!n.passiveListener || !a.passiveListeners) && { passive: !1, capture: !1 },
                        d = !(!n.passiveListener || !a.passiveListeners) && { passive: !0, capture: !1 };
                    n.touch ? (l.removeEventListener(i.start, this.scrollbar.onDragStart, o), l.removeEventListener(i.move, this.scrollbar.onDragMove, o), l.removeEventListener(i.end, this.scrollbar.onDragEnd, d)) : (l.removeEventListener(s.start, this.scrollbar.onDragStart, o), e.removeEventListener(s.move, this.scrollbar.onDragMove, o), e.removeEventListener(s.end, this.scrollbar.onDragEnd, d))
                }
            },
            init: function() {
                if (this.params.scrollbar.el) {
                    var e = this.scrollbar,
                        t = this.$el,
                        i = this.params.scrollbar,
                        s = m(i.el);
                    this.params.uniqueNavElements && "string" == typeof i.el && s.length > 1 && 1 === t.find(i.el).length && (s = t.find(i.el));
                    var a = s.find("." + this.params.scrollbar.dragClass);
                    0 === a.length && (a = m('<div class="' + this.params.scrollbar.dragClass + '"></div>'), s.append(a)), S(e, { $el: s, el: s[0], $dragEl: a, dragEl: a[0] }), i.draggable && e.enableDraggable()
                }
            },
            destroy: function() { this.scrollbar.disableDraggable() }
        },
        Q = {
            setTransform: function(e, t) {
                var i = this.rtl,
                    s = m(e),
                    a = i ? -1 : 1,
                    r = s.attr("data-swiper-parallax") || "0",
                    n = s.attr("data-swiper-parallax-x"),
                    l = s.attr("data-swiper-parallax-y"),
                    o = s.attr("data-swiper-parallax-scale"),
                    d = s.attr("data-swiper-parallax-opacity");
                if (n || l ? (n = n || "0", l = l || "0") : this.isHorizontal() ? (n = r, l = "0") : (l = r, n = "0"), n = n.indexOf("%") >= 0 ? parseInt(n, 10) * t * a + "%" : n * t * a + "px", l = l.indexOf("%") >= 0 ? parseInt(l, 10) * t + "%" : l * t + "px", null != d) {
                    var h = d - (d - 1) * (1 - Math.abs(t));
                    s[0].style.opacity = h
                }
                if (null == o) s.transform("translate3d(" + n + ", " + l + ", 0px)");
                else {
                    var p = o - (o - 1) * (1 - Math.abs(t));
                    s.transform("translate3d(" + n + ", " + l + ", 0px) scale(" + p + ")")
                }
            },
            setTranslate: function() {
                var e = this,
                    t = e.$el,
                    i = e.slides,
                    s = e.progress,
                    a = e.snapGrid;
                t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t) { e.parallax.setTransform(t, s) })), i.each((function(t, i) {
                    var r = t.progress;
                    e.params.slidesPerGroup > 1 && "auto" !== e.params.slidesPerView && (r += Math.ceil(i / 2) - s * (a.length - 1)), r = Math.min(Math.max(r, -1), 1), m(t).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t) { e.parallax.setTransform(t, r) }))
                }))
            },
            setTransition: function(e) {
                void 0 === e && (e = this.params.speed);
                this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]").each((function(t) {
                    var i = m(t),
                        s = parseInt(i.attr("data-swiper-parallax-duration"), 10) || e;
                    0 === e && (s = 0), i.transition(s)
                }))
            }
        },
        ee = {
            getDistanceBetweenTouches: function(e) {
                if (e.targetTouches.length < 2) return 1;
                var t = e.targetTouches[0].pageX,
                    i = e.targetTouches[0].pageY,
                    s = e.targetTouches[1].pageX,
                    a = e.targetTouches[1].pageY;
                return Math.sqrt(Math.pow(s - t, 2) + Math.pow(a - i, 2))
            },
            onGestureStart: function(e) {
                var t = this.support,
                    i = this.params.zoom,
                    s = this.zoom,
                    a = s.gesture;
                if (s.fakeGestureTouched = !1, s.fakeGestureMoved = !1, !t.gestures) {
                    if ("touchstart" !== e.type || "touchstart" === e.type && e.targetTouches.length < 2) return;
                    s.fakeGestureTouched = !0, a.scaleStart = ee.getDistanceBetweenTouches(e)
                }
                a.$slideEl && a.$slideEl.length || (a.$slideEl = m(e.target).closest("." + this.params.slideClass), 0 === a.$slideEl.length && (a.$slideEl = this.slides.eq(this.activeIndex)), a.$imageEl = a.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), a.$imageWrapEl = a.$imageEl.parent("." + i.containerClass), a.maxRatio = a.$imageWrapEl.attr("data-swiper-zoom") || i.maxRatio, 0 !== a.$imageWrapEl.length) ? (a.$imageEl && a.$imageEl.transition(0), this.zoom.isScaling = !0) : a.$imageEl = void 0
            },
            onGestureChange: function(e) {
                var t = this.support,
                    i = this.params.zoom,
                    s = this.zoom,
                    a = s.gesture;
                if (!t.gestures) {
                    if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
                    s.fakeGestureMoved = !0, a.scaleMove = ee.getDistanceBetweenTouches(e)
                }
                a.$imageEl && 0 !== a.$imageEl.length ? (t.gestures ? s.scale = e.scale * s.currentScale : s.scale = a.scaleMove / a.scaleStart * s.currentScale, s.scale > a.maxRatio && (s.scale = a.maxRatio - 1 + Math.pow(s.scale - a.maxRatio + 1, .5)), s.scale < i.minRatio && (s.scale = i.minRatio + 1 - Math.pow(i.minRatio - s.scale + 1, .5)), a.$imageEl.transform("translate3d(0,0,0) scale(" + s.scale + ")")) : "gesturechange" === e.type && s.onGestureStart(e)
            },
            onGestureEnd: function(e) {
                var t = this.device,
                    i = this.support,
                    s = this.params.zoom,
                    a = this.zoom,
                    r = a.gesture;
                if (!i.gestures) {
                    if (!a.fakeGestureTouched || !a.fakeGestureMoved) return;
                    if ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2 && !t.android) return;
                    a.fakeGestureTouched = !1, a.fakeGestureMoved = !1
                }
                r.$imageEl && 0 !== r.$imageEl.length && (a.scale = Math.max(Math.min(a.scale, r.maxRatio), s.minRatio), r.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale(" + a.scale + ")"), a.currentScale = a.scale, a.isScaling = !1, 1 === a.scale && (r.$slideEl = void 0))
            },
            onTouchStart: function(e) {
                var t = this.device,
                    i = this.zoom,
                    s = i.gesture,
                    a = i.image;
                s.$imageEl && 0 !== s.$imageEl.length && (a.isTouched || (t.android && e.cancelable && e.preventDefault(), a.isTouched = !0, a.touchesStart.x = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX, a.touchesStart.y = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY))
            },
            onTouchMove: function(e) {
                var t = this.zoom,
                    i = t.gesture,
                    s = t.image,
                    a = t.velocity;
                if (i.$imageEl && 0 !== i.$imageEl.length && (this.allowClick = !1, s.isTouched && i.$slideEl)) {
                    s.isMoved || (s.width = i.$imageEl[0].offsetWidth, s.height = i.$imageEl[0].offsetHeight, s.startX = T(i.$imageWrapEl[0], "x") || 0, s.startY = T(i.$imageWrapEl[0], "y") || 0, i.slideWidth = i.$slideEl[0].offsetWidth, i.slideHeight = i.$slideEl[0].offsetHeight, i.$imageWrapEl.transition(0), this.rtl && (s.startX = -s.startX, s.startY = -s.startY));
                    var r = s.width * t.scale,
                        n = s.height * t.scale;
                    if (!(r < i.slideWidth && n < i.slideHeight)) {
                        if (s.minX = Math.min(i.slideWidth / 2 - r / 2, 0), s.maxX = -s.minX, s.minY = Math.min(i.slideHeight / 2 - n / 2, 0), s.maxY = -s.minY, s.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, s.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !s.isMoved && !t.isScaling) { if (this.isHorizontal() && (Math.floor(s.minX) === Math.floor(s.startX) && s.touchesCurrent.x < s.touchesStart.x || Math.floor(s.maxX) === Math.floor(s.startX) && s.touchesCurrent.x > s.touchesStart.x)) return void(s.isTouched = !1); if (!this.isHorizontal() && (Math.floor(s.minY) === Math.floor(s.startY) && s.touchesCurrent.y < s.touchesStart.y || Math.floor(s.maxY) === Math.floor(s.startY) && s.touchesCurrent.y > s.touchesStart.y)) return void(s.isTouched = !1) }
                        e.cancelable && e.preventDefault(), e.stopPropagation(), s.isMoved = !0, s.currentX = s.touchesCurrent.x - s.touchesStart.x + s.startX, s.currentY = s.touchesCurrent.y - s.touchesStart.y + s.startY, s.currentX < s.minX && (s.currentX = s.minX + 1 - Math.pow(s.minX - s.currentX + 1, .8)), s.currentX > s.maxX && (s.currentX = s.maxX - 1 + Math.pow(s.currentX - s.maxX + 1, .8)), s.currentY < s.minY && (s.currentY = s.minY + 1 - Math.pow(s.minY - s.currentY + 1, .8)), s.currentY > s.maxY && (s.currentY = s.maxY - 1 + Math.pow(s.currentY - s.maxY + 1, .8)), a.prevPositionX || (a.prevPositionX = s.touchesCurrent.x), a.prevPositionY || (a.prevPositionY = s.touchesCurrent.y), a.prevTime || (a.prevTime = Date.now()), a.x = (s.touchesCurrent.x - a.prevPositionX) / (Date.now() - a.prevTime) / 2, a.y = (s.touchesCurrent.y - a.prevPositionY) / (Date.now() - a.prevTime) / 2, Math.abs(s.touchesCurrent.x - a.prevPositionX) < 2 && (a.x = 0), Math.abs(s.touchesCurrent.y - a.prevPositionY) < 2 && (a.y = 0), a.prevPositionX = s.touchesCurrent.x, a.prevPositionY = s.touchesCurrent.y, a.prevTime = Date.now(), i.$imageWrapEl.transform("translate3d(" + s.currentX + "px, " + s.currentY + "px,0)")
                    }
                }
            },
            onTouchEnd: function() {
                var e = this.zoom,
                    t = e.gesture,
                    i = e.image,
                    s = e.velocity;
                if (t.$imageEl && 0 !== t.$imageEl.length) {
                    if (!i.isTouched || !i.isMoved) return i.isTouched = !1, void(i.isMoved = !1);
                    i.isTouched = !1, i.isMoved = !1;
                    var a = 300,
                        r = 300,
                        n = s.x * a,
                        l = i.currentX + n,
                        o = s.y * r,
                        d = i.currentY + o;
                    0 !== s.x && (a = Math.abs((l - i.currentX) / s.x)), 0 !== s.y && (r = Math.abs((d - i.currentY) / s.y));
                    var h = Math.max(a, r);
                    i.currentX = l, i.currentY = d;
                    var p = i.width * e.scale,
                        u = i.height * e.scale;
                    i.minX = Math.min(t.slideWidth / 2 - p / 2, 0), i.maxX = -i.minX, i.minY = Math.min(t.slideHeight / 2 - u / 2, 0), i.maxY = -i.minY, i.currentX = Math.max(Math.min(i.currentX, i.maxX), i.minX), i.currentY = Math.max(Math.min(i.currentY, i.maxY), i.minY), t.$imageWrapEl.transition(h).transform("translate3d(" + i.currentX + "px, " + i.currentY + "px,0)")
                }
            },
            onTransitionEnd: function() {
                var e = this.zoom,
                    t = e.gesture;
                t.$slideEl && this.previousIndex !== this.activeIndex && (t.$imageEl && t.$imageEl.transform("translate3d(0,0,0) scale(1)"), t.$imageWrapEl && t.$imageWrapEl.transform("translate3d(0,0,0)"), e.scale = 1, e.currentScale = 1, t.$slideEl = void 0, t.$imageEl = void 0, t.$imageWrapEl = void 0)
            },
            toggle: function(e) {
                var t = this.zoom;
                t.scale && 1 !== t.scale ? t.out() : t.in(e)
            },
            in: function(e) {
                var t, i, s, a, r, n, l, o, d, h, p, u, c, v, f, m, g = this.zoom,
                    w = this.params.zoom,
                    b = g.gesture,
                    y = g.image;
                (b.$slideEl || (this.params.virtual && this.params.virtual.enabled && this.virtual ? b.$slideEl = this.$wrapperEl.children("." + this.params.slideActiveClass) : b.$slideEl = this.slides.eq(this.activeIndex), b.$imageEl = b.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), b.$imageWrapEl = b.$imageEl.parent("." + w.containerClass)), b.$imageEl && 0 !== b.$imageEl.length) && (b.$slideEl.addClass("" + w.zoomedSlideClass), void 0 === y.touchesStart.x && e ? (t = "touchend" === e.type ? e.changedTouches[0].pageX : e.pageX, i = "touchend" === e.type ? e.changedTouches[0].pageY : e.pageY) : (t = y.touchesStart.x, i = y.touchesStart.y), g.scale = b.$imageWrapEl.attr("data-swiper-zoom") || w.maxRatio, g.currentScale = b.$imageWrapEl.attr("data-swiper-zoom") || w.maxRatio, e ? (f = b.$slideEl[0].offsetWidth, m = b.$slideEl[0].offsetHeight, s = b.$slideEl.offset().left + f / 2 - t, a = b.$slideEl.offset().top + m / 2 - i, l = b.$imageEl[0].offsetWidth, o = b.$imageEl[0].offsetHeight, d = l * g.scale, h = o * g.scale, c = -(p = Math.min(f / 2 - d / 2, 0)), v = -(u = Math.min(m / 2 - h / 2, 0)), (r = s * g.scale) < p && (r = p), r > c && (r = c), (n = a * g.scale) < u && (n = u), n > v && (n = v)) : (r = 0, n = 0), b.$imageWrapEl.transition(300).transform("translate3d(" + r + "px, " + n + "px,0)"), b.$imageEl.transition(300).transform("translate3d(0,0,0) scale(" + g.scale + ")"))
            },
            out: function() {
                var e = this.zoom,
                    t = this.params.zoom,
                    i = e.gesture;
                i.$slideEl || (this.params.virtual && this.params.virtual.enabled && this.virtual ? i.$slideEl = this.$wrapperEl.children("." + this.params.slideActiveClass) : i.$slideEl = this.slides.eq(this.activeIndex), i.$imageEl = i.$slideEl.find("img, svg, canvas, picture, .swiper-zoom-target"), i.$imageWrapEl = i.$imageEl.parent("." + t.containerClass)), i.$imageEl && 0 !== i.$imageEl.length && (e.scale = 1, e.currentScale = 1, i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"), i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"), i.$slideEl.removeClass("" + t.zoomedSlideClass), i.$slideEl = void 0)
            },
            toggleGestures: function(e) {
                var t = this.zoom,
                    i = t.slideSelector,
                    s = t.passiveListener;
                this.$wrapperEl[e]("gesturestart", i, t.onGestureStart, s), this.$wrapperEl[e]("gesturechange", i, t.onGestureChange, s), this.$wrapperEl[e]("gestureend", i, t.onGestureEnd, s)
            },
            enableGestures: function() { this.zoom.gesturesEnabled || (this.zoom.gesturesEnabled = !0, this.zoom.toggleGestures("on")) },
            disableGestures: function() { this.zoom.gesturesEnabled && (this.zoom.gesturesEnabled = !1, this.zoom.toggleGestures("off")) },
            enable: function() {
                var e = this.support,
                    t = this.zoom;
                if (!t.enabled) {
                    t.enabled = !0;
                    var i = !("touchstart" !== this.touchEvents.start || !e.passiveListener || !this.params.passiveListeners) && { passive: !0, capture: !1 },
                        s = !e.passiveListener || { passive: !1, capture: !0 },
                        a = "." + this.params.slideClass;
                    this.zoom.passiveListener = i, this.zoom.slideSelector = a, e.gestures ? (this.$wrapperEl.on(this.touchEvents.start, this.zoom.enableGestures, i), this.$wrapperEl.on(this.touchEvents.end, this.zoom.disableGestures, i)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.on(this.touchEvents.start, a, t.onGestureStart, i), this.$wrapperEl.on(this.touchEvents.move, a, t.onGestureChange, s), this.$wrapperEl.on(this.touchEvents.end, a, t.onGestureEnd, i), this.touchEvents.cancel && this.$wrapperEl.on(this.touchEvents.cancel, a, t.onGestureEnd, i)), this.$wrapperEl.on(this.touchEvents.move, "." + this.params.zoom.containerClass, t.onTouchMove, s)
                }
            },
            disable: function() {
                var e = this.zoom;
                if (e.enabled) {
                    var t = this.support;
                    this.zoom.enabled = !1;
                    var i = !("touchstart" !== this.touchEvents.start || !t.passiveListener || !this.params.passiveListeners) && { passive: !0, capture: !1 },
                        s = !t.passiveListener || { passive: !1, capture: !0 },
                        a = "." + this.params.slideClass;
                    t.gestures ? (this.$wrapperEl.off(this.touchEvents.start, this.zoom.enableGestures, i), this.$wrapperEl.off(this.touchEvents.end, this.zoom.disableGestures, i)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.off(this.touchEvents.start, a, e.onGestureStart, i), this.$wrapperEl.off(this.touchEvents.move, a, e.onGestureChange, s), this.$wrapperEl.off(this.touchEvents.end, a, e.onGestureEnd, i), this.touchEvents.cancel && this.$wrapperEl.off(this.touchEvents.cancel, a, e.onGestureEnd, i)), this.$wrapperEl.off(this.touchEvents.move, "." + this.params.zoom.containerClass, e.onTouchMove, s)
                }
            }
        },
        te = {
            loadInSlide: function(e, t) {
                void 0 === t && (t = !0);
                var i = this,
                    s = i.params.lazy;
                if (void 0 !== e && 0 !== i.slides.length) {
                    var a = i.virtual && i.params.virtual.enabled ? i.$wrapperEl.children("." + i.params.slideClass + '[data-swiper-slide-index="' + e + '"]') : i.slides.eq(e),
                        r = a.find("." + s.elementClass + ":not(." + s.loadedClass + "):not(." + s.loadingClass + ")");
                    !a.hasClass(s.elementClass) || a.hasClass(s.loadedClass) || a.hasClass(s.loadingClass) || r.push(a[0]), 0 !== r.length && r.each((function(e) {
                        var r = m(e);
                        r.addClass(s.loadingClass);
                        var n = r.attr("data-background"),
                            l = r.attr("data-src"),
                            o = r.attr("data-srcset"),
                            d = r.attr("data-sizes"),
                            h = r.parent("picture");
                        i.loadImage(r[0], l || n, o, d, !1, (function() {
                            if (null != i && i && (!i || i.params) && !i.destroyed) {
                                if (n ? (r.css("background-image", 'url("' + n + '")'), r.removeAttr("data-background")) : (o && (r.attr("srcset", o), r.removeAttr("data-srcset")), d && (r.attr("sizes", d), r.removeAttr("data-sizes")), h.length && h.children("source").each((function(e) {
                                        var t = m(e);
                                        t.attr("data-srcset") && (t.attr("srcset", t.attr("data-srcset")), t.removeAttr("data-srcset"))
                                    })), l && (r.attr("src", l), r.removeAttr("data-src"))), r.addClass(s.loadedClass).removeClass(s.loadingClass), a.find("." + s.preloaderClass).remove(), i.params.loop && t) {
                                    var e = a.attr("data-swiper-slide-index");
                                    if (a.hasClass(i.params.slideDuplicateClass)) {
                                        var p = i.$wrapperEl.children('[data-swiper-slide-index="' + e + '"]:not(.' + i.params.slideDuplicateClass + ")");
                                        i.lazy.loadInSlide(p.index(), !1)
                                    } else {
                                        var u = i.$wrapperEl.children("." + i.params.slideDuplicateClass + '[data-swiper-slide-index="' + e + '"]');
                                        i.lazy.loadInSlide(u.index(), !1)
                                    }
                                }
                                i.emit("lazyImageReady", a[0], r[0]), i.params.autoHeight && i.updateAutoHeight()
                            }
                        })), i.emit("lazyImageLoad", a[0], r[0])
                    }))
                }
            },
            load: function() {
                var e = this,
                    t = e.$wrapperEl,
                    i = e.params,
                    s = e.slides,
                    a = e.activeIndex,
                    r = e.virtual && i.virtual.enabled,
                    n = i.lazy,
                    l = i.slidesPerView;

                function o(e) { if (r) { if (t.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]').length) return !0 } else if (s[e]) return !0; return !1 }

                function d(e) { return r ? m(e).attr("data-swiper-slide-index") : m(e).index() }
                if ("auto" === l && (l = 0), e.lazy.initialImageLoaded || (e.lazy.initialImageLoaded = !0), e.params.watchSlidesVisibility) t.children("." + i.slideVisibleClass).each((function(t) {
                    var i = r ? m(t).attr("data-swiper-slide-index") : m(t).index();
                    e.lazy.loadInSlide(i)
                }));
                else if (l > 1)
                    for (var h = a; h < a + l; h += 1) o(h) && e.lazy.loadInSlide(h);
                else e.lazy.loadInSlide(a);
                if (n.loadPrevNext)
                    if (l > 1 || n.loadPrevNextAmount && n.loadPrevNextAmount > 1) { for (var p = n.loadPrevNextAmount, u = l, c = Math.min(a + u + Math.max(p, u), s.length), v = Math.max(a - Math.max(u, p), 0), f = a + l; f < c; f += 1) o(f) && e.lazy.loadInSlide(f); for (var g = v; g < a; g += 1) o(g) && e.lazy.loadInSlide(g) } else {
                        var w = t.children("." + i.slideNextClass);
                        w.length > 0 && e.lazy.loadInSlide(d(w));
                        var b = t.children("." + i.slidePrevClass);
                        b.length > 0 && e.lazy.loadInSlide(d(b))
                    }
            }
        },
        ie = {
            LinearSpline: function(e, t) { var i, s, a, r, n, l = function(e, t) { for (s = -1, i = e.length; i - s > 1;) e[a = i + s >> 1] <= t ? s = a : i = a; return i }; return this.x = e, this.y = t, this.lastIndex = e.length - 1, this.interpolate = function(e) { return e ? (n = l(this.x, e), r = n - 1, (e - this.x[r]) * (this.y[n] - this.y[r]) / (this.x[n] - this.x[r]) + this.y[r]) : 0 }, this },
            getInterpolateFunction: function(e) { this.controller.spline || (this.controller.spline = this.params.loop ? new ie.LinearSpline(this.slidesGrid, e.slidesGrid) : new ie.LinearSpline(this.snapGrid, e.snapGrid)) },
            setTranslate: function(e, t) {
                var i, s, a = this,
                    r = a.controller.control,
                    n = a.constructor;

                function l(e) { var t = a.rtlTranslate ? -a.translate : a.translate; "slide" === a.params.controller.by && (a.controller.getInterpolateFunction(e), s = -a.controller.spline.interpolate(-t)), s && "container" !== a.params.controller.by || (i = (e.maxTranslate() - e.minTranslate()) / (a.maxTranslate() - a.minTranslate()), s = (t - a.minTranslate()) * i + e.minTranslate()), a.params.controller.inverse && (s = e.maxTranslate() - s), e.updateProgress(s), e.setTranslate(s, a), e.updateActiveIndex(), e.updateSlidesClasses() }
                if (Array.isArray(r))
                    for (var o = 0; o < r.length; o += 1) r[o] !== t && r[o] instanceof n && l(r[o]);
                else r instanceof n && t !== r && l(r)
            },
            setTransition: function(e, t) {
                var i, s = this,
                    a = s.constructor,
                    r = s.controller.control;

                function n(t) { t.setTransition(e, s), 0 !== e && (t.transitionStart(), t.params.autoHeight && E((function() { t.updateAutoHeight() })), t.$wrapperEl.transitionEnd((function() { r && (t.params.loop && "slide" === s.params.controller.by && t.loopFix(), t.transitionEnd()) }))) }
                if (Array.isArray(r))
                    for (i = 0; i < r.length; i += 1) r[i] !== t && r[i] instanceof a && n(r[i]);
                else r instanceof a && t !== r && n(r)
            }
        },
        se = {
            makeElFocusable: function(e) { return e.attr("tabIndex", "0"), e },
            makeElNotFocusable: function(e) { return e.attr("tabIndex", "-1"), e },
            addElRole: function(e, t) { return e.attr("role", t), e },
            addElLabel: function(e, t) { return e.attr("aria-label", t), e },
            disableEl: function(e) { return e.attr("aria-disabled", !0), e },
            enableEl: function(e) { return e.attr("aria-disabled", !1), e },
            onEnterKey: function(e) {
                var t = this.params.a11y;
                if (13 === e.keyCode) {
                    var i = m(e.target);
                    this.navigation && this.navigation.$nextEl && i.is(this.navigation.$nextEl) && (this.isEnd && !this.params.loop || this.slideNext(), this.isEnd ? this.a11y.notify(t.lastSlideMessage) : this.a11y.notify(t.nextSlideMessage)), this.navigation && this.navigation.$prevEl && i.is(this.navigation.$prevEl) && (this.isBeginning && !this.params.loop || this.slidePrev(), this.isBeginning ? this.a11y.notify(t.firstSlideMessage) : this.a11y.notify(t.prevSlideMessage)), this.pagination && i.is("." + this.params.pagination.bulletClass) && i[0].click()
                }
            },
            notify: function(e) {
                var t = this.a11y.liveRegion;
                0 !== t.length && (t.html(""), t.html(e))
            },
            updateNavigation: function() {
                if (!this.params.loop && this.navigation) {
                    var e = this.navigation,
                        t = e.$nextEl,
                        i = e.$prevEl;
                    i && i.length > 0 && (this.isBeginning ? (this.a11y.disableEl(i), this.a11y.makeElNotFocusable(i)) : (this.a11y.enableEl(i), this.a11y.makeElFocusable(i))), t && t.length > 0 && (this.isEnd ? (this.a11y.disableEl(t), this.a11y.makeElNotFocusable(t)) : (this.a11y.enableEl(t), this.a11y.makeElFocusable(t)))
                }
            },
            updatePagination: function() {
                var e = this,
                    t = e.params.a11y;
                e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.bullets.each((function(i) {
                    var s = m(i);
                    e.a11y.makeElFocusable(s), e.a11y.addElRole(s, "button"), e.a11y.addElLabel(s, t.paginationBulletMessage.replace(/\{\{index\}\}/, s.index() + 1))
                }))
            },
            init: function() {
                this.$el.append(this.a11y.liveRegion);
                var e, t, i = this.params.a11y;
                this.navigation && this.navigation.$nextEl && (e = this.navigation.$nextEl), this.navigation && this.navigation.$prevEl && (t = this.navigation.$prevEl), e && (this.a11y.makeElFocusable(e), this.a11y.addElRole(e, "button"), this.a11y.addElLabel(e, i.nextSlideMessage), e.on("keydown", this.a11y.onEnterKey)), t && (this.a11y.makeElFocusable(t), this.a11y.addElRole(t, "button"), this.a11y.addElLabel(t, i.prevSlideMessage), t.on("keydown", this.a11y.onEnterKey)), this.pagination && this.params.pagination.clickable && this.pagination.bullets && this.pagination.bullets.length && this.pagination.$el.on("keydown", "." + this.params.pagination.bulletClass, this.a11y.onEnterKey)
            },
            destroy: function() {
                var e, t;
                this.a11y.liveRegion && this.a11y.liveRegion.length > 0 && this.a11y.liveRegion.remove(), this.navigation && this.navigation.$nextEl && (e = this.navigation.$nextEl), this.navigation && this.navigation.$prevEl && (t = this.navigation.$prevEl), e && e.off("keydown", this.a11y.onEnterKey), t && t.off("keydown", this.a11y.onEnterKey), this.pagination && this.params.pagination.clickable && this.pagination.bullets && this.pagination.bullets.length && this.pagination.$el.off("keydown", "." + this.params.pagination.bulletClass, this.a11y.onEnterKey)
            }
        },
        ae = {
            init: function() {
                var e = l();
                if (this.params.history) {
                    if (!e.history || !e.history.pushState) return this.params.history.enabled = !1, void(this.params.hashNavigation.enabled = !0);
                    var t = this.history;
                    t.initialized = !0, t.paths = ae.getPathValues(this.params.url), (t.paths.key || t.paths.value) && (t.scrollToSlide(0, t.paths.value, this.params.runCallbacksOnInit), this.params.history.replaceState || e.addEventListener("popstate", this.history.setHistoryPopState))
                }
            },
            destroy: function() {
                var e = l();
                this.params.history.replaceState || e.removeEventListener("popstate", this.history.setHistoryPopState)
            },
            setHistoryPopState: function() { this.history.paths = ae.getPathValues(this.params.url), this.history.scrollToSlide(this.params.speed, this.history.paths.value, !1) },
            getPathValues: function(e) {
                var t = l(),
                    i = (e ? new URL(e) : t.location).pathname.slice(1).split("/").filter((function(e) { return "" !== e })),
                    s = i.length;
                return { key: i[s - 2], value: i[s - 1] }
            },
            setHistory: function(e, t) {
                var i = l();
                if (this.history.initialized && this.params.history.enabled) {
                    var s;
                    s = this.params.url ? new URL(this.params.url) : i.location;
                    var a = this.slides.eq(t),
                        r = ae.slugify(a.attr("data-history"));
                    s.pathname.includes(e) || (r = e + "/" + r);
                    var n = i.history.state;
                    n && n.value === r || (this.params.history.replaceState ? i.history.replaceState({ value: r }, null, r) : i.history.pushState({ value: r }, null, r))
                }
            },
            slugify: function(e) { return e.toString().replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "") },
            scrollToSlide: function(e, t, i) {
                if (t)
                    for (var s = 0, a = this.slides.length; s < a; s += 1) {
                        var r = this.slides.eq(s);
                        if (ae.slugify(r.attr("data-history")) === t && !r.hasClass(this.params.slideDuplicateClass)) {
                            var n = r.index();
                            this.slideTo(n, e, i)
                        }
                    } else this.slideTo(0, e, i)
            }
        },
        re = {
            onHashCange: function() {
                var e = r();
                this.emit("hashChange");
                var t = e.location.hash.replace("#", "");
                if (t !== this.slides.eq(this.activeIndex).attr("data-hash")) {
                    var i = this.$wrapperEl.children("." + this.params.slideClass + '[data-hash="' + t + '"]').index();
                    if (void 0 === i) return;
                    this.slideTo(i)
                }
            },
            setHash: function() {
                var e = l(),
                    t = r();
                if (this.hashNavigation.initialized && this.params.hashNavigation.enabled)
                    if (this.params.hashNavigation.replaceState && e.history && e.history.replaceState) e.history.replaceState(null, null, "#" + this.slides.eq(this.activeIndex).attr("data-hash") || ""), this.emit("hashSet");
                    else {
                        var i = this.slides.eq(this.activeIndex),
                            s = i.attr("data-hash") || i.attr("data-history");
                        t.location.hash = s || "", this.emit("hashSet")
                    }
            },
            init: function() {
                var e = r(),
                    t = l();
                if (!(!this.params.hashNavigation.enabled || this.params.history && this.params.history.enabled)) {
                    this.hashNavigation.initialized = !0;
                    var i = e.location.hash.replace("#", "");
                    if (i)
                        for (var s = 0, a = this.slides.length; s < a; s += 1) {
                            var n = this.slides.eq(s);
                            if ((n.attr("data-hash") || n.attr("data-history")) === i && !n.hasClass(this.params.slideDuplicateClass)) {
                                var o = n.index();
                                this.slideTo(o, 0, this.params.runCallbacksOnInit, !0)
                            }
                        }
                    this.params.hashNavigation.watchState && m(t).on("hashchange", this.hashNavigation.onHashCange)
                }
            },
            destroy: function() {
                var e = l();
                this.params.hashNavigation.watchState && m(e).off("hashchange", this.hashNavigation.onHashCange)
            }
        },
        ne = {
            run: function() {
                var e = this,
                    t = e.slides.eq(e.activeIndex),
                    i = e.params.autoplay.delay;
                t.attr("data-swiper-autoplay") && (i = t.attr("data-swiper-autoplay") || e.params.autoplay.delay), clearTimeout(e.autoplay.timeout), e.autoplay.timeout = E((function() { e.params.autoplay.reverseDirection ? e.params.loop ? (e.loopFix(), e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.isBeginning ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(e.slides.length - 1, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.params.loop ? (e.loopFix(), e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")) : e.isEnd ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(0, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")), e.params.cssMode && e.autoplay.running && e.autoplay.run() }), i)
            },
            start: function() { return void 0 === this.autoplay.timeout && (!this.autoplay.running && (this.autoplay.running = !0, this.emit("autoplayStart"), this.autoplay.run(), !0)) },
            stop: function() { return !!this.autoplay.running && (void 0 !== this.autoplay.timeout && (this.autoplay.timeout && (clearTimeout(this.autoplay.timeout), this.autoplay.timeout = void 0), this.autoplay.running = !1, this.emit("autoplayStop"), !0)) },
            pause: function(e) { this.autoplay.running && (this.autoplay.paused || (this.autoplay.timeout && clearTimeout(this.autoplay.timeout), this.autoplay.paused = !0, 0 !== e && this.params.autoplay.waitForTransition ? (this.$wrapperEl[0].addEventListener("transitionend", this.autoplay.onTransitionEnd), this.$wrapperEl[0].addEventListener("webkitTransitionEnd", this.autoplay.onTransitionEnd)) : (this.autoplay.paused = !1, this.autoplay.run()))) },
            onVisibilityChange: function() { var e = r(); "hidden" === e.visibilityState && this.autoplay.running && this.autoplay.pause(), "visible" === e.visibilityState && this.autoplay.paused && (this.autoplay.run(), this.autoplay.paused = !1) },
            onTransitionEnd: function(e) { this && !this.destroyed && this.$wrapperEl && e.target === this.$wrapperEl[0] && (this.$wrapperEl[0].removeEventListener("transitionend", this.autoplay.onTransitionEnd), this.$wrapperEl[0].removeEventListener("webkitTransitionEnd", this.autoplay.onTransitionEnd), this.autoplay.paused = !1, this.autoplay.running ? this.autoplay.run() : this.autoplay.stop()) }
        },
        le = {
            setTranslate: function() {
                for (var e = this.slides, t = 0; t < e.length; t += 1) {
                    var i = this.slides.eq(t),
                        s = -i[0].swiperSlideOffset;
                    this.params.virtualTranslate || (s -= this.translate);
                    var a = 0;
                    this.isHorizontal() || (a = s, s = 0);
                    var r = this.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(i[0].progress), 0) : 1 + Math.min(Math.max(i[0].progress, -1), 0);
                    i.css({ opacity: r }).transform("translate3d(" + s + "px, " + a + "px, 0px)")
                }
            },
            setTransition: function(e) {
                var t = this,
                    i = t.slides,
                    s = t.$wrapperEl;
                if (i.transition(e), t.params.virtualTranslate && 0 !== e) {
                    var a = !1;
                    i.transitionEnd((function() { if (!a && t && !t.destroyed) { a = !0, t.animating = !1; for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) s.trigger(e[i]) } }))
                }
            }
        },
        oe = {
            setTranslate: function() {
                var e, t = this.$el,
                    i = this.$wrapperEl,
                    s = this.slides,
                    a = this.width,
                    r = this.height,
                    n = this.rtlTranslate,
                    l = this.size,
                    o = this.browser,
                    d = this.params.cubeEffect,
                    h = this.isHorizontal(),
                    p = this.virtual && this.params.virtual.enabled,
                    u = 0;
                d.shadow && (h ? (0 === (e = i.find(".swiper-cube-shadow")).length && (e = m('<div class="swiper-cube-shadow"></div>'), i.append(e)), e.css({ height: a + "px" })) : 0 === (e = t.find(".swiper-cube-shadow")).length && (e = m('<div class="swiper-cube-shadow"></div>'), t.append(e)));
                for (var c = 0; c < s.length; c += 1) {
                    var v = s.eq(c),
                        f = c;
                    p && (f = parseInt(v.attr("data-swiper-slide-index"), 10));
                    var g = 90 * f,
                        w = Math.floor(g / 360);
                    n && (g = -g, w = Math.floor(-g / 360));
                    var b = Math.max(Math.min(v[0].progress, 1), -1),
                        y = 0,
                        E = 0,
                        x = 0;
                    f % 4 == 0 ? (y = 4 * -w * l, x = 0) : (f - 1) % 4 == 0 ? (y = 0, x = 4 * -w * l) : (f - 2) % 4 == 0 ? (y = l + 4 * w * l, x = l) : (f - 3) % 4 == 0 && (y = -l, x = 3 * l + 4 * l * w), n && (y = -y), h || (E = y, y = 0);
                    var T = "rotateX(" + (h ? 0 : -g) + "deg) rotateY(" + (h ? g : 0) + "deg) translate3d(" + y + "px, " + E + "px, " + x + "px)";
                    if (b <= 1 && b > -1 && (u = 90 * f + 90 * b, n && (u = 90 * -f - 90 * b)), v.transform(T), d.slideShadows) {
                        var C = h ? v.find(".swiper-slide-shadow-left") : v.find(".swiper-slide-shadow-top"),
                            S = h ? v.find(".swiper-slide-shadow-right") : v.find(".swiper-slide-shadow-bottom");
                        0 === C.length && (C = m('<div class="swiper-slide-shadow-' + (h ? "left" : "top") + '"></div>'), v.append(C)), 0 === S.length && (S = m('<div class="swiper-slide-shadow-' + (h ? "right" : "bottom") + '"></div>'), v.append(S)), C.length && (C[0].style.opacity = Math.max(-b, 0)), S.length && (S[0].style.opacity = Math.max(b, 0))
                    }
                }
                if (i.css({ "-webkit-transform-origin": "50% 50% -" + l / 2 + "px", "-moz-transform-origin": "50% 50% -" + l / 2 + "px", "-ms-transform-origin": "50% 50% -" + l / 2 + "px", "transform-origin": "50% 50% -" + l / 2 + "px" }), d.shadow)
                    if (h) e.transform("translate3d(0px, " + (a / 2 + d.shadowOffset) + "px, " + -a / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + d.shadowScale + ")");
                    else {
                        var M = Math.abs(u) - 90 * Math.floor(Math.abs(u) / 90),
                            z = 1.5 - (Math.sin(2 * M * Math.PI / 360) / 2 + Math.cos(2 * M * Math.PI / 360) / 2),
                            P = d.shadowScale,
                            k = d.shadowScale / z,
                            $ = d.shadowOffset;
                        e.transform("scale3d(" + P + ", 1, " + k + ") translate3d(0px, " + (r / 2 + $) + "px, " + -r / 2 / k + "px) rotateX(-90deg)")
                    }
                var L = o.isSafari || o.isWebView ? -l / 2 : 0;
                i.transform("translate3d(0px,0," + L + "px) rotateX(" + (this.isHorizontal() ? 0 : u) + "deg) rotateY(" + (this.isHorizontal() ? -u : 0) + "deg)")
            },
            setTransition: function(e) {
                var t = this.$el;
                this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), this.params.cubeEffect.shadow && !this.isHorizontal() && t.find(".swiper-cube-shadow").transition(e)
            }
        },
        de = {
            setTranslate: function() {
                for (var e = this.slides, t = this.rtlTranslate, i = 0; i < e.length; i += 1) {
                    var s = e.eq(i),
                        a = s[0].progress;
                    this.params.flipEffect.limitRotation && (a = Math.max(Math.min(s[0].progress, 1), -1));
                    var r = -180 * a,
                        n = 0,
                        l = -s[0].swiperSlideOffset,
                        o = 0;
                    if (this.isHorizontal() ? t && (r = -r) : (o = l, l = 0, n = -r, r = 0), s[0].style.zIndex = -Math.abs(Math.round(a)) + e.length, this.params.flipEffect.slideShadows) {
                        var d = this.isHorizontal() ? s.find(".swiper-slide-shadow-left") : s.find(".swiper-slide-shadow-top"),
                            h = this.isHorizontal() ? s.find(".swiper-slide-shadow-right") : s.find(".swiper-slide-shadow-bottom");
                        0 === d.length && (d = m('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "left" : "top") + '"></div>'), s.append(d)), 0 === h.length && (h = m('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "right" : "bottom") + '"></div>'), s.append(h)), d.length && (d[0].style.opacity = Math.max(-a, 0)), h.length && (h[0].style.opacity = Math.max(a, 0))
                    }
                    s.transform("translate3d(" + l + "px, " + o + "px, 0px) rotateX(" + n + "deg) rotateY(" + r + "deg)")
                }
            },
            setTransition: function(e) {
                var t = this,
                    i = t.slides,
                    s = t.activeIndex,
                    a = t.$wrapperEl;
                if (i.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), t.params.virtualTranslate && 0 !== e) {
                    var r = !1;
                    i.eq(s).transitionEnd((function() { if (!r && t && !t.destroyed) { r = !0, t.animating = !1; for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) a.trigger(e[i]) } }))
                }
            }
        },
        he = {
            setTranslate: function() {
                for (var e = this.width, t = this.height, i = this.slides, s = this.slidesSizesGrid, a = this.params.coverflowEffect, r = this.isHorizontal(), n = this.translate, l = r ? e / 2 - n : t / 2 - n, o = r ? a.rotate : -a.rotate, d = a.depth, h = 0, p = i.length; h < p; h += 1) {
                    var u = i.eq(h),
                        c = s[h],
                        v = (l - u[0].swiperSlideOffset - c / 2) / c * a.modifier,
                        f = r ? o * v : 0,
                        g = r ? 0 : o * v,
                        w = -d * Math.abs(v),
                        b = a.stretch;
                    "string" == typeof b && -1 !== b.indexOf("%") && (b = parseFloat(a.stretch) / 100 * c);
                    var y = r ? 0 : b * v,
                        E = r ? b * v : 0,
                        x = 1 - (1 - a.scale) * Math.abs(v);
                    Math.abs(E) < .001 && (E = 0), Math.abs(y) < .001 && (y = 0), Math.abs(w) < .001 && (w = 0), Math.abs(f) < .001 && (f = 0), Math.abs(g) < .001 && (g = 0), Math.abs(x) < .001 && (x = 0);
                    var T = "translate3d(" + E + "px," + y + "px," + w + "px)  rotateX(" + g + "deg) rotateY(" + f + "deg) scale(" + x + ")";
                    if (u.transform(T), u[0].style.zIndex = 1 - Math.abs(Math.round(v)), a.slideShadows) {
                        var C = r ? u.find(".swiper-slide-shadow-left") : u.find(".swiper-slide-shadow-top"),
                            S = r ? u.find(".swiper-slide-shadow-right") : u.find(".swiper-slide-shadow-bottom");
                        0 === C.length && (C = m('<div class="swiper-slide-shadow-' + (r ? "left" : "top") + '"></div>'), u.append(C)), 0 === S.length && (S = m('<div class="swiper-slide-shadow-' + (r ? "right" : "bottom") + '"></div>'), u.append(S)), C.length && (C[0].style.opacity = v > 0 ? v : 0), S.length && (S[0].style.opacity = -v > 0 ? -v : 0)
                    }
                }
            },
            setTransition: function(e) { this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e) }
        },
        pe = {
            init: function() {
                var e = this.params.thumbs;
                if (this.thumbs.initialized) return !1;
                this.thumbs.initialized = !0;
                var t = this.constructor;
                return e.swiper instanceof t ? (this.thumbs.swiper = e.swiper, S(this.thumbs.swiper.originalParams, { watchSlidesProgress: !0, slideToClickedSlide: !1 }), S(this.thumbs.swiper.params, { watchSlidesProgress: !0, slideToClickedSlide: !1 })) : C(e.swiper) && (this.thumbs.swiper = new t(S({}, e.swiper, { watchSlidesVisibility: !0, watchSlidesProgress: !0, slideToClickedSlide: !1 })), this.thumbs.swiperCreated = !0), this.thumbs.swiper.$el.addClass(this.params.thumbs.thumbsContainerClass), this.thumbs.swiper.on("tap", this.thumbs.onThumbClick), !0
            },
            onThumbClick: function() {
                var e = this.thumbs.swiper;
                if (e) {
                    var t = e.clickedIndex,
                        i = e.clickedSlide;
                    if (!(i && m(i).hasClass(this.params.thumbs.slideThumbActiveClass) || null == t)) {
                        var s;
                        if (s = e.params.loop ? parseInt(m(e.clickedSlide).attr("data-swiper-slide-index"), 10) : t, this.params.loop) {
                            var a = this.activeIndex;
                            this.slides.eq(a).hasClass(this.params.slideDuplicateClass) && (this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft, a = this.activeIndex);
                            var r = this.slides.eq(a).prevAll('[data-swiper-slide-index="' + s + '"]').eq(0).index(),
                                n = this.slides.eq(a).nextAll('[data-swiper-slide-index="' + s + '"]').eq(0).index();
                            s = void 0 === r ? n : void 0 === n ? r : n - a < a - r ? n : r
                        }
                        this.slideTo(s)
                    }
                }
            },
            update: function(e) {
                var t = this.thumbs.swiper;
                if (t) {
                    var i = "auto" === t.params.slidesPerView ? t.slidesPerViewDynamic() : t.params.slidesPerView,
                        s = this.params.thumbs.autoScrollOffset,
                        a = s && !t.params.loop;
                    if (this.realIndex !== t.realIndex || a) {
                        var r, n, l = t.activeIndex;
                        if (t.params.loop) {
                            t.slides.eq(l).hasClass(t.params.slideDuplicateClass) && (t.loopFix(), t._clientLeft = t.$wrapperEl[0].clientLeft, l = t.activeIndex);
                            var o = t.slides.eq(l).prevAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index(),
                                d = t.slides.eq(l).nextAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index();
                            r = void 0 === o ? d : void 0 === d ? o : d - l == l - o ? l : d - l < l - o ? d : o, n = this.activeIndex > this.previousIndex ? "next" : "prev"
                        } else n = (r = this.realIndex) > this.previousIndex ? "next" : "prev";
                        a && (r += "next" === n ? s : -1 * s), t.visibleSlidesIndexes && t.visibleSlidesIndexes.indexOf(r) < 0 && (t.params.centeredSlides ? r = r > l ? r - Math.floor(i / 2) + 1 : r + Math.floor(i / 2) - 1 : r > l && (r = r - i + 1), t.slideTo(r, e ? 0 : void 0))
                    }
                    var h = 1,
                        p = this.params.thumbs.slideThumbActiveClass;
                    if (this.params.slidesPerView > 1 && !this.params.centeredSlides && (h = this.params.slidesPerView), this.params.thumbs.multipleActiveThumbs || (h = 1), h = Math.floor(h), t.slides.removeClass(p), t.params.loop || t.params.virtual && t.params.virtual.enabled)
                        for (var u = 0; u < h; u += 1) t.$wrapperEl.children('[data-swiper-slide-index="' + (this.realIndex + u) + '"]').addClass(p);
                    else
                        for (var c = 0; c < h; c += 1) t.slides.eq(this.realIndex + c).addClass(p)
                }
            }
        },
        ue = [V, W, q, _, { name: "mousewheel", params: { mousewheel: { enabled: !1, releaseOnEdges: !1, invert: !1, forceToAxis: !1, sensitivity: 1, eventsTarget: "container" } }, create: function() { M(this, { mousewheel: { enabled: !1, lastScrollTime: x(), lastEventBeforeSnap: void 0, recentWheelEvents: [], enable: U.enable, disable: U.disable, handle: U.handle, handleMouseEnter: U.handleMouseEnter, handleMouseLeave: U.handleMouseLeave, animateSlider: U.animateSlider, releaseScroll: U.releaseScroll } }) }, on: { init: function(e) {!e.params.mousewheel.enabled && e.params.cssMode && e.mousewheel.disable(), e.params.mousewheel.enabled && e.mousewheel.enable() }, destroy: function(e) { e.params.cssMode && e.mousewheel.enable(), e.mousewheel.enabled && e.mousewheel.disable() } } }, {
            name: "navigation",
            params: { navigation: { nextEl: null, prevEl: null, hideOnClick: !1, disabledClass: "swiper-button-disabled", hiddenClass: "swiper-button-hidden", lockClass: "swiper-button-lock" } },
            create: function() { M(this, { navigation: t({}, K) }) },
            on: {
                init: function(e) { e.navigation.init(), e.navigation.update() },
                toEdge: function(e) { e.navigation.update() },
                fromEdge: function(e) { e.navigation.update() },
                destroy: function(e) { e.navigation.destroy() },
                click: function(e, t) {
                    var i, s = e.navigation,
                        a = s.$nextEl,
                        r = s.$prevEl;
                    !e.params.navigation.hideOnClick || m(t.target).is(r) || m(t.target).is(a) || (a ? i = a.hasClass(e.params.navigation.hiddenClass) : r && (i = r.hasClass(e.params.navigation.hiddenClass)), !0 === i ? e.emit("navigationShow") : e.emit("navigationHide"), a && a.toggleClass(e.params.navigation.hiddenClass), r && r.toggleClass(e.params.navigation.hiddenClass))
                }
            }
        }, {
            name: "pagination",
            params: { pagination: { el: null, bulletElement: "span", clickable: !1, hideOnClick: !1, renderBullet: null, renderProgressbar: null, renderFraction: null, renderCustom: null, progressbarOpposite: !1, type: "bullets", dynamicBullets: !1, dynamicMainBullets: 1, formatFractionCurrent: function(e) { return e }, formatFractionTotal: function(e) { return e }, bulletClass: "swiper-pagination-bullet", bulletActiveClass: "swiper-pagination-bullet-active", modifierClass: "swiper-pagination-", currentClass: "swiper-pagination-current", totalClass: "swiper-pagination-total", hiddenClass: "swiper-pagination-hidden", progressbarFillClass: "swiper-pagination-progressbar-fill", progressbarOppositeClass: "swiper-pagination-progressbar-opposite", clickableClass: "swiper-pagination-clickable", lockClass: "swiper-pagination-lock" } },
            create: function() { M(this, { pagination: t({ dynamicBulletIndex: 0 }, Z) }) },
            on: {
                init: function(e) { e.pagination.init(), e.pagination.render(), e.pagination.update() },
                activeIndexChange: function(e) {
                    (e.params.loop || void 0 === e.snapIndex) && e.pagination.update()
                },
                snapIndexChange: function(e) { e.params.loop || e.pagination.update() },
                slidesLengthChange: function(e) { e.params.loop && (e.pagination.render(), e.pagination.update()) },
                snapGridLengthChange: function(e) { e.params.loop || (e.pagination.render(), e.pagination.update()) },
                destroy: function(e) { e.pagination.destroy() },
                click: function(e, t) { e.params.pagination.el && e.params.pagination.hideOnClick && e.pagination.$el.length > 0 && !m(t.target).hasClass(e.params.pagination.bulletClass) && (!0 === e.pagination.$el.hasClass(e.params.pagination.hiddenClass) ? e.emit("paginationShow") : e.emit("paginationHide"), e.pagination.$el.toggleClass(e.params.pagination.hiddenClass)) }
            }
        }, { name: "scrollbar", params: { scrollbar: { el: null, dragSize: "auto", hide: !1, draggable: !1, snapOnRelease: !0, lockClass: "swiper-scrollbar-lock", dragClass: "swiper-scrollbar-drag" } }, create: function() { M(this, { scrollbar: t({ isTouched: !1, timeout: null, dragTimeout: null }, J) }) }, on: { init: function(e) { e.scrollbar.init(), e.scrollbar.updateSize(), e.scrollbar.setTranslate() }, update: function(e) { e.scrollbar.updateSize() }, resize: function(e) { e.scrollbar.updateSize() }, observerUpdate: function(e) { e.scrollbar.updateSize() }, setTranslate: function(e) { e.scrollbar.setTranslate() }, setTransition: function(e, t) { e.scrollbar.setTransition(t) }, destroy: function(e) { e.scrollbar.destroy() } } }, { name: "parallax", params: { parallax: { enabled: !1 } }, create: function() { M(this, { parallax: t({}, Q) }) }, on: { beforeInit: function(e) { e.params.parallax.enabled && (e.params.watchSlidesProgress = !0, e.originalParams.watchSlidesProgress = !0) }, init: function(e) { e.params.parallax.enabled && e.parallax.setTranslate() }, setTranslate: function(e) { e.params.parallax.enabled && e.parallax.setTranslate() }, setTransition: function(e, t) { e.params.parallax.enabled && e.parallax.setTransition(t) } } }, {
            name: "zoom",
            params: { zoom: { enabled: !1, maxRatio: 3, minRatio: 1, toggle: !0, containerClass: "swiper-zoom-container", zoomedSlideClass: "swiper-slide-zoomed" } },
            create: function() {
                var e = this;
                M(e, { zoom: t({ enabled: !1, scale: 1, currentScale: 1, isScaling: !1, gesture: { $slideEl: void 0, slideWidth: void 0, slideHeight: void 0, $imageEl: void 0, $imageWrapEl: void 0, maxRatio: 3 }, image: { isTouched: void 0, isMoved: void 0, currentX: void 0, currentY: void 0, minX: void 0, minY: void 0, maxX: void 0, maxY: void 0, width: void 0, height: void 0, startX: void 0, startY: void 0, touchesStart: {}, touchesCurrent: {} }, velocity: { x: void 0, y: void 0, prevPositionX: void 0, prevPositionY: void 0, prevTime: void 0 } }, ee) });
                var i = 1;
                Object.defineProperty(e.zoom, "scale", {
                    get: function() { return i },
                    set: function(t) {
                        if (i !== t) {
                            var s = e.zoom.gesture.$imageEl ? e.zoom.gesture.$imageEl[0] : void 0,
                                a = e.zoom.gesture.$slideEl ? e.zoom.gesture.$slideEl[0] : void 0;
                            e.emit("zoomChange", t, s, a)
                        }
                        i = t
                    }
                })
            },
            on: { init: function(e) { e.params.zoom.enabled && e.zoom.enable() }, destroy: function(e) { e.zoom.disable() }, touchStart: function(e, t) { e.zoom.enabled && e.zoom.onTouchStart(t) }, touchEnd: function(e, t) { e.zoom.enabled && e.zoom.onTouchEnd(t) }, doubleTap: function(e, t) { e.params.zoom.enabled && e.zoom.enabled && e.params.zoom.toggle && e.zoom.toggle(t) }, transitionEnd: function(e) { e.zoom.enabled && e.params.zoom.enabled && e.zoom.onTransitionEnd() }, slideChange: function(e) { e.zoom.enabled && e.params.zoom.enabled && e.params.cssMode && e.zoom.onTransitionEnd() } }
        }, { name: "lazy", params: { lazy: { enabled: !1, loadPrevNext: !1, loadPrevNextAmount: 1, loadOnTransitionStart: !1, elementClass: "swiper-lazy", loadingClass: "swiper-lazy-loading", loadedClass: "swiper-lazy-loaded", preloaderClass: "swiper-lazy-preloader" } }, create: function() { M(this, { lazy: t({ initialImageLoaded: !1 }, te) }) }, on: { beforeInit: function(e) { e.params.lazy.enabled && e.params.preloadImages && (e.params.preloadImages = !1) }, init: function(e) { e.params.lazy.enabled && !e.params.loop && 0 === e.params.initialSlide && e.lazy.load() }, scroll: function(e) { e.params.freeMode && !e.params.freeModeSticky && e.lazy.load() }, resize: function(e) { e.params.lazy.enabled && e.lazy.load() }, scrollbarDragMove: function(e) { e.params.lazy.enabled && e.lazy.load() }, transitionStart: function(e) { e.params.lazy.enabled && (e.params.lazy.loadOnTransitionStart || !e.params.lazy.loadOnTransitionStart && !e.lazy.initialImageLoaded) && e.lazy.load() }, transitionEnd: function(e) { e.params.lazy.enabled && !e.params.lazy.loadOnTransitionStart && e.lazy.load() }, slideChange: function(e) { e.params.lazy.enabled && e.params.cssMode && e.lazy.load() } } }, { name: "controller", params: { controller: { control: void 0, inverse: !1, by: "slide" } }, create: function() { M(this, { controller: t({ control: this.params.controller.control }, ie) }) }, on: { update: function(e) { e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline) }, resize: function(e) { e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline) }, observerUpdate: function(e) { e.controller.control && e.controller.spline && (e.controller.spline = void 0, delete e.controller.spline) }, setTranslate: function(e, t, i) { e.controller.control && e.controller.setTranslate(t, i) }, setTransition: function(e, t, i) { e.controller.control && e.controller.setTransition(t, i) } } }, { name: "a11y", params: { a11y: { enabled: !0, notificationClass: "swiper-notification", prevSlideMessage: "Previous slide", nextSlideMessage: "Next slide", firstSlideMessage: "This is the first slide", lastSlideMessage: "This is the last slide", paginationBulletMessage: "Go to slide {{index}}" } }, create: function() { M(this, { a11y: t(t({}, se), {}, { liveRegion: m('<span class="' + this.params.a11y.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>') }) }) }, on: { init: function(e) { e.params.a11y.enabled && (e.a11y.init(), e.a11y.updateNavigation()) }, toEdge: function(e) { e.params.a11y.enabled && e.a11y.updateNavigation() }, fromEdge: function(e) { e.params.a11y.enabled && e.a11y.updateNavigation() }, paginationUpdate: function(e) { e.params.a11y.enabled && e.a11y.updatePagination() }, destroy: function(e) { e.params.a11y.enabled && e.a11y.destroy() } } }, { name: "history", params: { history: { enabled: !1, replaceState: !1, key: "slides" } }, create: function() { M(this, { history: t({}, ae) }) }, on: { init: function(e) { e.params.history.enabled && e.history.init() }, destroy: function(e) { e.params.history.enabled && e.history.destroy() }, transitionEnd: function(e) { e.history.initialized && e.history.setHistory(e.params.history.key, e.activeIndex) }, slideChange: function(e) { e.history.initialized && e.params.cssMode && e.history.setHistory(e.params.history.key, e.activeIndex) } } }, { name: "hash-navigation", params: { hashNavigation: { enabled: !1, replaceState: !1, watchState: !1 } }, create: function() { M(this, { hashNavigation: t({ initialized: !1 }, re) }) }, on: { init: function(e) { e.params.hashNavigation.enabled && e.hashNavigation.init() }, destroy: function(e) { e.params.hashNavigation.enabled && e.hashNavigation.destroy() }, transitionEnd: function(e) { e.hashNavigation.initialized && e.hashNavigation.setHash() }, slideChange: function(e) { e.hashNavigation.initialized && e.params.cssMode && e.hashNavigation.setHash() } } }, { name: "autoplay", params: { autoplay: { enabled: !1, delay: 3e3, waitForTransition: !0, disableOnInteraction: !0, stopOnLastSlide: !1, reverseDirection: !1 } }, create: function() { M(this, { autoplay: t(t({}, ne), {}, { running: 1, paused: 1 }) }) }, on: { init: function(e) { e.params.autoplay.enabled && (e.autoplay.start(), r().addEventListener("visibilitychange", e.autoplay.onVisibilityChange)) }, beforeTransitionStart: function(e, t, i) { e.autoplay.running && (i || !e.params.autoplay.disableOnInteraction ? e.autoplay.pause(t) : e.autoplay.stop()) }, sliderFirstMove: function(e) { e.autoplay.running && (e.params.autoplay.disableOnInteraction ? e.autoplay.stop() : e.autoplay.pause()) }, touchEnd: function(e) { e.params.cssMode && e.autoplay.paused && !e.params.autoplay.disableOnInteraction && e.autoplay.run() }, destroy: function(e) { e.autoplay.running && e.autoplay.stop(), r().removeEventListener("visibilitychange", e.autoplay.onVisibilityChange) } } }, {
            name: "effect-fade",
            params: { fadeEffect: { crossFade: !1 } },
            create: function() { M(this, { fadeEffect: t({}, le) }) },
            on: {
                beforeInit: function(e) {
                    if ("fade" === e.params.effect) {
                        e.classNames.push(e.params.containerModifierClass + "fade");
                        var t = { slidesPerView: 1, slidesPerColumn: 1, slidesPerGroup: 1, watchSlidesProgress: !0, spaceBetween: 0, virtualTranslate: !0 };
                        S(e.params, t), S(e.originalParams, t)
                    }
                },
                setTranslate: function(e) { "fade" === e.params.effect && e.fadeEffect.setTranslate() },
                setTransition: function(e, t) { "fade" === e.params.effect && e.fadeEffect.setTransition(t) }
            }
        }, {
            name: "effect-cube",
            params: { cubeEffect: { slideShadows: !0, shadow: !0, shadowOffset: 20, shadowScale: .94 } },
            create: function() { M(this, { cubeEffect: t({}, oe) }) },
            on: {
                beforeInit: function(e) {
                    if ("cube" === e.params.effect) {
                        e.classNames.push(e.params.containerModifierClass + "cube"), e.classNames.push(e.params.containerModifierClass + "3d");
                        var t = { slidesPerView: 1, slidesPerColumn: 1, slidesPerGroup: 1, watchSlidesProgress: !0, resistanceRatio: 0, spaceBetween: 0, centeredSlides: !1, virtualTranslate: !0 };
                        S(e.params, t), S(e.originalParams, t)
                    }
                },
                setTranslate: function(e) { "cube" === e.params.effect && e.cubeEffect.setTranslate() },
                setTransition: function(e, t) { "cube" === e.params.effect && e.cubeEffect.setTransition(t) }
            }
        }, {
            name: "effect-flip",
            params: { flipEffect: { slideShadows: !0, limitRotation: !0 } },
            create: function() { M(this, { flipEffect: t({}, de) }) },
            on: {
                beforeInit: function(e) {
                    if ("flip" === e.params.effect) {
                        e.classNames.push(e.params.containerModifierClass + "flip"), e.classNames.push(e.params.containerModifierClass + "3d");
                        var t = { slidesPerView: 1, slidesPerColumn: 1, slidesPerGroup: 1, watchSlidesProgress: !0, spaceBetween: 0, virtualTranslate: !0 };
                        S(e.params, t), S(e.originalParams, t)
                    }
                },
                setTranslate: function(e) { "flip" === e.params.effect && e.flipEffect.setTranslate() },
                setTransition: function(e, t) { "flip" === e.params.effect && e.flipEffect.setTransition(t) }
            }
        }, { name: "effect-coverflow", params: { coverflowEffect: { rotate: 50, stretch: 0, depth: 100, scale: 1, modifier: 1, slideShadows: !0 } }, create: function() { M(this, { coverflowEffect: t({}, he) }) }, on: { beforeInit: function(e) { "coverflow" === e.params.effect && (e.classNames.push(e.params.containerModifierClass + "coverflow"), e.classNames.push(e.params.containerModifierClass + "3d"), e.params.watchSlidesProgress = !0, e.originalParams.watchSlidesProgress = !0) }, setTranslate: function(e) { "coverflow" === e.params.effect && e.coverflowEffect.setTranslate() }, setTransition: function(e, t) { "coverflow" === e.params.effect && e.coverflowEffect.setTransition(t) } } }, {
            name: "thumbs",
            params: { thumbs: { swiper: null, multipleActiveThumbs: !0, autoScrollOffset: 0, slideThumbActiveClass: "swiper-slide-thumb-active", thumbsContainerClass: "swiper-container-thumbs" } },
            create: function() { M(this, { thumbs: t({ swiper: null, initialized: !1 }, pe) }) },
            on: {
                beforeInit: function(e) {
                    var t = e.params.thumbs;
                    t && t.swiper && (e.thumbs.init(), e.thumbs.update(!0))
                },
                slideChange: function(e) { e.thumbs.swiper && e.thumbs.update() },
                update: function(e) { e.thumbs.swiper && e.thumbs.update() },
                resize: function(e) { e.thumbs.swiper && e.thumbs.update() },
                observerUpdate: function(e) { e.thumbs.swiper && e.thumbs.update() },
                setTransition: function(e, t) {
                    var i = e.thumbs.swiper;
                    i && i.setTransition(t)
                },
                beforeDestroy: function(e) {
                    var t = e.thumbs.swiper;
                    t && e.thumbs.swiperCreated && t && t.destroy()
                }
            }
        }];
    return Y.use(ue), Y
}));
const breakpoints = { screenSm: 480, screenMd: 768, screenMl: 1024, screenLg: 1280, screenXl: 1440 }

function minWidth(screensize) { return window.matchMedia(`(min-width: ${screensize}px)`); }

function maxWidth(screensize) { return window.matchMedia(`(max-width: ${screensize}px`); }
const brandColors = { simplyOrganic: "--color-simply-organic", auraCacia: "--color-aura-cacia", frontierCoOp: "--color-frontier-coop" }
const brandColorsLight = { simplyOrganic: "--color-simply-organic-light", auraCacia: "--color-aura-cacia", frontierCoOp: "--color-frontier-coop-light" }

function getTranslateX(elem) { let style = window.getComputedStyle(elem); let matrix = style.transform || style.webkitTransform || style.mozTransform; if (matrix === 'none') return 0; const matrixType = matrix.includes('3d') ? '3d' : '2d'; const matrixValues = matrix.match(/matrix.*\((.+)\)/)[1].split(', '); if (matrixType === '2d') return parseInt(matrixValues[4]); return parseInt(matrixValues[12]); }

function getTranslateY(elem) { let style = window.getComputedStyle(elem); let matrix = style.transform || style.webkitTransform || style.mozTransform; if (matrix === 'none') return 0; const matrixType = matrix.includes('3d') ? '3d' : '2d'; const matrixValues = matrix.match(/matrix.*\((.+)\)/)[1].split(', '); if (matrixType === '2d') return parseInt(matrixValues[5]); return parseInt(matrixValues[13]); }

function distFromPageTop(elem) {
    let output = 0;
    while (elem.offsetParent) {
        output += elem.offsetTop;
        output += getTranslateY(elem);
        elem = elem.offsetParent;
    }
    return output;
}

function distFromViewportTop(elem) { let scrollPos = window.pageYOffset; let elemPos = distFromPageTop(elem); let output = elemPos - scrollPos; return output; }

function distFromPageLeft(elem) {
    let output = 0;
    while (elem.offsetParent) {
        output += elem.offsetLeft;
        output += getTranslateX(elem);
        elem = elem.offsetParent;
    }
    return output;
}

function distFromViewportLeft(elem) { let scrollPos = window.pageXOffset; let elemPos = distFromPageLeft(elem); let output = elemPos - scrollPos; return output; }
const focusableElemQuery = "a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex='0'], [contenteditable]";

function getFocusableElems(elem) { return elem.querySelectorAll(focusableElemQuery); }

function isElementVisible(element) {
    if (element.offsetWidth || element.offsetHeight || element.getClientRects().length) { return true; } else { return false; }
}
var accordionDefault = { selector: '.js-accordion', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' }, mobileOnly: { class: 'js-accordion--mobile-only', breakpoint: breakpoints.screenMl } } }
var Accordion = function(element, options) {
    this.element = element;
    this.options = options;
    this.triggers = this.element.querySelectorAll(this.options.trigger.selector);
    this.contents = this.element.querySelectorAll(this.options.content.selector);
    this.type = this.element.getAttribute('data-type');
    this.initAccordion();
};
Accordion.prototype.initAccordion = function() {
    var self = this;
    for (var i = 0; i < self.triggers.length; i++) {
        var t = self.triggers[i];
        var isOpen = t.classList.contains(self.options.trigger.activeClass);
        t.setAttribute('id', 'accordion-trigger-' + i);
        t.setAttribute('aria-expanded', isOpen);
        t.setAttribute('aria-controls', 'accordion-content-' + i);
        if (isOpen && self.contents) { var matchContent = self.contents[i]; if (matchContent) matchContent.style.height = 'auto'; }
    }
    for (var j = 0; j < self.contents.length; j++) {
        var c = self.contents[j];
        c.setAttribute('id', 'accordion-content-' + j);
        c.setAttribute('aria-labelledby', 'accordion-trigger-' + j);
        c.inner = c.querySelector(self.options.content.innerSelector);
    }
    self.bindEvents();
};
Accordion.prototype.bindEvents = function() {
    var self = this;
    self.triggers.forEach(function(trigger) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            if (self.element.classList.contains(self.options.mobileOnly.class) && (minWidth(self.options.mobileOnly.breakpoint).matches)) return;
            var isOpen = this.classList.contains(self.options.trigger.activeClass);
            if (self.type && self.type == 'dependent' && !isOpen) { self.collapseOpenSiblings(trigger); }
            if (!isOpen) { self.openItem(trigger); } else { self.collapseItem(trigger); }
        });
    });
};
Accordion.prototype.collapseOpenSiblings = function(activeTrigger) {
    var self = this;
    var activeTriggerID = activeTrigger.getAttribute('id').replace('accordion-trigger-', ''),
        activeContent = self.contents[activeTriggerID];
    for (var i = 0; i < self.triggers.length; i++) {
        var t = self.triggers[i],
            id = t.getAttribute('id').replace('accordion-trigger-', ''),
            clickedWithinContent = self.contents[id] && self.contents[id].contains(activeTrigger);
        if (t.classList.contains(self.options.trigger.activeClass) && t != activeTrigger && !clickedWithinContent && !activeContent.contains(t)) { self.collapseItem(t); }
    }
};
Accordion.prototype.openItem = function(activeTrigger) {
    var self = this;
    activeTrigger.classList.add(self.options.trigger.activeClass);
    activeTrigger.setAttribute('aria-expanded', true);
    var index = activeTrigger.getAttribute('id').replace('accordion-trigger-', ''),
        content = self.contents[index];
    if (content) {
        content.classList.add(self.options.content.activeClass);
        if (content.inner) {
            content.style.height = content.inner.scrollHeight + 'px';
            var heightTransitionDelay = 250;
            setTimeout(function() { content.style.height = 'auto'; }, heightTransitionDelay);
        }
    }
};
Accordion.prototype.collapseItem = function(activeTrigger) {
    var self = this;
    activeTrigger.classList.remove(self.options.trigger.activeClass);
    activeTrigger.setAttribute('aria-expanded', false);
    var index = activeTrigger.getAttribute('id').replace('accordion-trigger-', ''),
        content = self.contents[index];
    if (content) {
        content.classList.remove(self.options.content.activeClass);
        if (content.inner) {
            content.style.height = content.inner.scrollHeight + 'px';
            var heightTransitionDelay = 100;
            setTimeout(function() { content.style.height = '0'; }, heightTransitionDelay);
        }
    }
};
var Accordions = function(params) {
    params = params || {};
    params.selector = params.selector || accordionDefault.selector;
    let options = Object.assign({}, accordionDefault.options, params.options);
    params.options = options;
    var accordions = document.querySelectorAll(params.selector);
    if (accordions.length > 0) {
        for (var i = 0; i < accordions.length; i++) {
            (function(i) { new Accordion(accordions[i], params.options); })(i);
        }
    } else {}
}
var collapsibleElemDefaultOptions = { triggerClass: 'js-collapsible-elem__trigger', openClass: 'js-collapsible-elem--open', transitionClass: 'js-collapsible-elem--transition', closeOnEsc: false, keyboardTrap: "none", contentClass: '', beforeOpen: function() { return; }, beforeClose: function() { return; } }

function collapsibleElem(elem, options = {}) {
    if (!elem) { console.trace('Bad element, can not collapse'); return false; }
    this.elem = elem;
    this.options = Object.assign({}, collapsibleElemDefaultOptions, options);
    this.triggers = this.elem.querySelectorAll('.' + this.options.triggerClass);
    if (this.options.contentClass) { this.contentBox = this.elem.querySelector('.' + this.options.contentClass); } else { this.contentBox = this.elem; }
    this.openPanel = function() {
        this.options.beforeOpen(this);
        this.elem.classList.add(this.options.transitionClass);
        this.elem.classList.add(this.options.openClass);
        setTimeout(() => { this.elem.classList.remove(this.options.transitionClass); }, 10);
        this.elem.addEventListener("keydown", this.keyboardListener);
        if ((that.options.keyboardTrap == "always") || ((that.options.keyboardTrap == "mobileOnly") && (maxWidth(breakpoints.screenMl - 1).matches))) { this.contentBox.querySelector(focusableElemQuery).focus(); }
        var dropdownDialogOpenEvent = document.createEvent("Event");
        dropdownDialogOpenEvent.initEvent("dropdowndialogopen", false, true);
        this.elem.dispatchEvent(dropdownDialogOpenEvent);
    }
    this.closePanel = function() {
        this.options.beforeClose(this);
        this.elem.classList.add(this.options.transitionClass);
        setTimeout(() => {
            this.elem.classList.remove(this.options.openClass);
            this.elem.classList.remove(this.options.transitionClass);
        }, 510);
        this.elem.removeEventListener("keydown", this.keyboardListener);
    }
    let that = this;
    this.keyboardListener = function(e) {
        if (that.options.closeOnEsc) {
            if (e.code === "Esc" || e.code === "Escape") {
                e.stopPropagation();
                that.closePanel();
                return;
            }
        }
        if ((that.options.keyboardTrap == "always") || ((that.options.keyboardTrap == "mobileOnly") && (maxWidth(breakpoints.screenMl - 1).matches))) {
            if (e.code === "Tab") {
                e.stopPropagation();
                let focusableElems = Array.from(getFocusableElems(that.contentBox)).filter((el) => { return isElementVisible(el); });
                let firstFocusableElem = focusableElems[0];
                let lastFocusableElem = focusableElems[focusableElems.length - 1];
                let currentFocus = document.activeElement;
                if (focusableElems.length === 1) { e.preventDefault(); return; }
                if (e.shiftKey) {
                    if (currentFocus === firstFocusableElem) {
                        e.preventDefault();
                        lastFocusableElem.focus();
                        return;
                    }
                } else {
                    if (currentFocus === lastFocusableElem) {
                        e.preventDefault();
                        firstFocusableElem.focus();
                        return;
                    }
                }
            }
        }
    }
    this.init = function() {
        this.triggers.forEach((trigger) => {
            trigger.addEventListener('click', () => {
                if (this.elem.classList.contains(this.options.openClass)) { this.closePanel(); } else { this.openPanel(); }
            });
        });
    }
    this.init();
}
var modalDefaultOptions = { transitionTiming: 300, closeBtnQuery: '.m-modal__close', overlayQuery: '.m-modal__overlay', contentContainerQuery: '.m-modal__content', confirmBtnQuery: '.js-modal-confirm .a-btn' }
var modals = {};
var currentModal;

function enableModal(trigger) {
    let modalID = trigger.getAttribute("data-modal-id");
    let modal = document.querySelector(`.m-modal#${modalID}`);
    modals[modalID] = new Modal(modal);
    trigger.addEventListener('click', () => { modals[modalID].openModal(); });
}

function modalKeyboardHandler(e) {
    if (!currentModal) return;
    let modal = currentModal;
    switch (e.key) {
        case "Tab":
            let currentFocus = document.activeElement;
            if (modal.focusableElemsInModal.length === 1) { e.preventDefault(); return; } else if (e.shiftKey) {
                if (currentFocus === modal.firstFocusableElem) {
                    e.preventDefault();
                    modal.lastFocusableElem.focus();
                    return;
                }
                if (currentFocus.getAttribute('type') == 'radio') {
                    let radioGroupName = currentFocus.getAttribute('name');
                    if ((modal.firstFocusableElem.getAttribute('type') == 'radio') && (modal.firstFocusableElem.getAttribute('name') == radioGroupName)) {
                        e.preventDefault();
                        modal.lastFocusableElem.focus();
                        return;
                    }
                }
            } else {
                if (currentFocus === modal.lastFocusableElem) {
                    e.preventDefault();
                    modal.firstFocusableElem.focus();
                    return;
                }
                if (currentFocus.getAttribute('type') == 'radio') {
                    let radioGroupName = currentFocus.getAttribute('name');
                    if ((modal.lastFocusableElem.getAttribute('type') == 'radio') && (modal.lastFocusableElem.getAttribute('name') == radioGroupName)) {
                        e.preventDefault();
                        modal.firstFocusableElem.focus();
                        return;
                    }
                }
            }
            break;
        case "Esc":
        case "Escape":
            modal.closeModal();
            break;
        default:
            break;
    }
}

function Modal(el, options = {}) {
    this.options = Object.assign({}, modalDefaultOptions, options);
    this.modal = el;
    this.scrollPosition = 0;
    this.transitionTiming = this.options.transitionTiming;
    this.modalCloseBtn = this.modal.querySelector(this.options.closeBtnQuery);
    this.modalOverlay = this.modal.querySelector(this.options.overlayQuery);
    this.modalContainer = this.modal.querySelector(this.options.contentContainerQuery);
    this.modalConfirm = this.modal.querySelector(this.options.confirmBtnQuery);
    this.focusableElemsInModal = getFocusableElems(this.modal);
    this.firstFocusableElem = this.focusableElemsInModal[0];
    this.lastFocusableElem = this.focusableElemsInModal[this.focusableElemsInModal.length - 1];
    this.modalCloseBtn.addEventListener("click", () => { this.closeModal(); });
    this.modalOverlay.addEventListener("click", () => { this.closeModal(); });
    if (this.modalConfirm) { this.modalConfirm.addEventListener("click", () => { this.closeModal(); }); }
    this.openModal = function() {
        if (this.modal) {
            this.previouslyFocusedElem = document.activeElement;
            this.modal.removeAttribute('hidden', true);
            this.modal.removeAttribute('aria-hidden', true);
            setTimeout(() => { this.modal.classList.remove("m-modal--hidden"); }, 1);
            currentModal = this;
            document.addEventListener("keydown", modalKeyboardHandler);
            document.body.classList.add("_has-modal");
            this.scrollPosition = window.pageYOffset;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollPosition}px`;
            this.modalContainer.scrollTop = 0;
            setTimeout(() => {
                if (this.isElementInView(this.firstFocusableElem)) { this.firstFocusableElem.focus(); } else {
                    let firstElemInModal = this.modalContainer.firstElementChild;
                    firstElemInModal.setAttribute("tab-index", "-1");
                    firstElemInModal.focus();
                }
            }, this.transitionTiming);
        }
    }
    this.closeModal = function() {
        if (this.modal) {
            this.modal.classList.add("m-modal--hidden");
            setTimeout(() => {
                this.modal.setAttribute('hidden', true);
                this.modal.setAttribute('aria-hidden', true);
            }, this.transitionTiming);
            currentModal = null;
            document.removeEventListener("keydown", modalKeyboardHandler);
            document.body.classList.remove("_has-modal");
            document.body.style.removeProperty('position');
            document.body.style.removeProperty('top');
            window.scrollTo(0, this.scrollPosition);
            if (this.previouslyFocusedElem) {
                this.previouslyFocusedElem.focus();
                this.previouslyFocusedElem = null;
            }
        }
    }
    this.isElementInView = function(elem) {
        if (elem == this.modalCloseBtn) return true;
        let modalHeight = this.modalContainer.clientHeight;
        let modalWidth = this.modalContainer.clientWidth;
        let elemRight = elem.offsetWidth;
        let elemBottom = elem.offsetHeight;
        let currElem = elem;
        while (currElem != this.modalContainer) {
            if (!currElem.offsetParent) return false;
            elemRight += currElem.offsetLeft;
            elemBottom += currElem.offsetTop;
            currElem = currElem.offsetParent;
        }
        if ((elemRight > modalWidth) || (elemBottom > modalHeight)) { return false; }
        return true;
    }
}

function PlaceholderLabelInput(elem) {
    this.elem = elem;
    this.checkEmpty = function() {
        let value = this.elem.value;
        let placeholderInputNotEmptyClass = "js-placeholder-label-not-empty";
        if (value == null || value == "") { this.elem.classList.remove(placeholderInputNotEmptyClass); } else { this.elem.classList.add(placeholderInputNotEmptyClass); }
    }
    this.elem.addEventListener("blur", () => { this.checkEmpty(); });
    this.checkEmpty();
}
const shopTheRecipeBreakpoint = breakpoints.screenMd;
let shopTheRecipeCardExpandedClass = 'm-shop-the-recipe-card--expanded';
let shopTheRecipeHotspotActiveClass = 'm-shop-the-recipe-card__hotspot--active';
let shopTheRecipeBulletActiveClass = 'a-carousel-indicator__bullet--active';
const shopTheRecipeCardOpen = new CustomEvent('shopTheRecipeCardOpen', { bubbles: true });
const shopTheRecipeCardClose = new CustomEvent('shopTheRecipeCardClose', { bubbles: true });
var bodyScrollPos;

function ShopTheRecipeCard(elem) {
    this.elem = elem;
    this.id = this.elem.id;
    let glideBreakpoint = shopTheRecipeBreakpoint - 1;
    this.productsCarousel = new Glide(`#${this.elem.id} .m-shop-the-recipe-card__products-carousel`, {
        type: "carousel",
        swipeThreshold: false,
        dragThreshold: false,
        breakpoints: {
            [glideBreakpoint]: { swipeThreshold: 80, dragThreshold: 120 }
        }
    });
    this.expandSection = this.elem.querySelector('.m-shop-the-recipe-card__card-body');
    this.productsTray = this.elem.querySelector('.m-shop-the-recipe-card__products');
    this.hotspots = this.elem.querySelectorAll('.m-shop-the-recipe-card__hotspot');
    this.bullets = this.elem.querySelectorAll('.a-carousel-indicator__bullet');
    this.closeBtn = this.elem.querySelector('.m-shop-the-recipe-card__products-close');
    this.openBtn = this.elem.querySelector('.m-shop-the-recipe-card__products-open');
    this.viewProdBtn = this.elem.querySelector('.m-shop-the-recipe-card__view-this-product');
    this.glideWrapperSlides = this.elem.closest('.glide__slides');
    this.glideWrapperTrack = this.elem.closest('.glide__track');
    this.isExpanded = false;
    this.expandCard = function() {
        if (minWidth(shopTheRecipeBreakpoint).matches) { return; }
        this.isExpanded = true;
        if (this.glideWrapperSlides) { this.glideWrapperSlides.style.overflow = 'visible'; }
        if (this.glideWrapperTrack) { this.glideWrapperTrack.style.overflow = 'visible'; }
        bodyScrollPos = window.pageYOffset;
        let bodyOffset = bodyScrollPos * -1;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `${bodyOffset}px`;
        let cardTranslateX = -1 * distFromViewportLeft(this.expandSection);
        let cardTranslateY = -1 * distFromPageTop(this.expandSection);
        this.expandSection.style.transform = `translate(${cardTranslateX}px, ${cardTranslateY-bodyOffset}px)`;
        this.productsTray.removeAttribute("hidden");
        setTimeout(() => { this.elem.classList.add(shopTheRecipeCardExpandedClass); }, 10);
        setTimeout(() => { this.productsCarousel.update(); }, 510);
        this.elem.dispatchEvent(shopTheRecipeCardOpen);
    }
    this.collapseCard = function() {
        this.isExpanded = false;
        this.expandSection.style.transform = '';
        setTimeout(() => {
            if (this.glideWrapperSlides) { this.glideWrapperSlides.style.overflow = ''; }
            if (this.glideWrapperTrack) { this.glideWrapperTrack.style.overflow = ''; }
            document.body.style.overflow = '';
            document.body.style.position = '';
            if (!minWidth(shopTheRecipeBreakpoint).matches) {
                this.productsTray.setAttribute("hidden", "");
                window.scrollTo(0, bodyScrollPos);
            }
        }, 500);
        this.elem.classList.remove(shopTheRecipeCardExpandedClass);
        let currIndex = 0;
        if (this.productsCarousel.index) { currIndex = this.productsCarousel.index; }
        this.setIndicators(currIndex);
        this.elem.dispatchEvent(shopTheRecipeCardClose);
    }
    this.setIndicators = function(productIndex) {
        this.hotspots.forEach((hotspot) => {
            if (hotspot.dataset.hotspotNumber == productIndex) { hotspot.classList.add(shopTheRecipeHotspotActiveClass); } else { hotspot.classList.remove(shopTheRecipeHotspotActiveClass) }
        });
        this.bullets.forEach((bullet) => {
            if (bullet.dataset.slideNumber == productIndex) { bullet.classList.add(shopTheRecipeBulletActiveClass); } else { bullet.classList.remove(shopTheRecipeBulletActiveClass); }
        });
    }
    this.setActiveProduct = function(productIndex) {
        this.productsCarousel.go('=' + productIndex);
        this.setIndicators(productIndex);
        if (!this.isExpanded) { this.expandCard(); }
    }
    this.init = function() {
        if (minWidth(shopTheRecipeBreakpoint).matches) {
            this.collapseCard();
            this.productsTray.removeAttribute("hidden");
        }
        minWidth(shopTheRecipeBreakpoint).addListener((e) => {
            if (e.matches) {
                this.collapseCard();
                this.productsTray.removeAttribute("hidden");
            } else { this.productsTray.setAttribute("hidden", ""); }
            this.productsCarousel.update();
        });
        this.hotspots.forEach((hotspot) => { hotspot.addEventListener("click", () => { this.setActiveProduct(hotspot.dataset.hotspotNumber); }); });
        this.bullets.forEach((bullet) => { bullet.addEventListener("click", () => { this.setActiveProduct(bullet.dataset.slideNumber); }); });
        this.openBtn.addEventListener("click", () => { this.setActiveProduct(0); });
        this.closeBtn.addEventListener("click", () => { this.collapseCard(); });
        this.productsCarousel.on('run', () => {
            let newIndex = this.productsCarousel.index;
            let productUrl = this.elem.querySelector('.glide__slide--active a').href;
            this.setIndicators(newIndex);
            this.viewProdBtn.href = productUrl;
        });
        this.productsCarousel.mount();
    }
    this.init();
}

function ShopTheRecipeCarousel(elem) {
    this.elem = elem;
    this.cards = [];
    let carouselSelector = '.c-shop-the-recipe-carousel__carousel';
    if (elem.id) { carouselSelector = '#' + elem.id + ' ' + carouselSelector; }
    let glideBreakpoint = shopTheRecipeBreakpoint - 1;
    this.carousel = new Glide(carouselSelector, {
        type: "carousel",
        breakpoints: {
            [glideBreakpoint]: { type: "slider", focusAt: "center", gap: 10, peek: 45 }
        }
    });
    this.init = function() {
        let cardElems = elem.querySelectorAll('.m-shop-the-recipe-card');
        cardElems.forEach((card) => {
            let newCard = new ShopTheRecipeCard(card);
            this.cards.push(newCard);
        });
        minWidth(shopTheRecipeBreakpoint).addListener((e) => { setTimeout(() => { this.carousel.update(); }, 10); });
        maxWidth(shopTheRecipeBreakpoint - 1).addListener((e) => { setTimeout(() => { this.carousel.update(); }, 10); });
        this.elem.addEventListener('shopTheRecipeCardOpen', () => { this.carousel.disable(); });
        this.elem.addEventListener('shopTheRecipeCardClose', () => { this.carousel.enable(); });
        this.carousel.mount();
    }
    this.init();
}
new Swiper('.js-swiper-container', { slidesPerView: 'auto', freeMode: true, mousewheel: { forceToAxis: true }, grabCursor: 'true', slideClass: 'js-swiper-slide', wrapperClass: 'js-swiper-wrapper', navigation: { nextEl: '.js-swiper-button-next', prevEl: '.js-swiper-button-prev' }, scrollbar: { el: '.js-swiper-scrollbar', draggable: true } })
document.querySelectorAll(".m-pagination__list").forEach((list) => {
    let paginationItems = list.querySelectorAll('.m-pagination__list-item:not(.m-pagination__list-item--disabled)'),
        paginationLength = paginationItems.length;
    if (paginationLength > 7) {
        let activeItemIndex;
        paginationItems.forEach((item, index) => { if (item.classList.contains('m-pagination__list-item--active')) { activeItemIndex = index; } });
        if (activeItemIndex === 0 || activeItemIndex === paginationLength - 1) { paginationItems.forEach((item, index) => { if ((index > activeItemIndex + 2 && index < paginationLength - 2) || (index < activeItemIndex - 2 && index > 1)) { item.classList.add('m-pagination__list-item--invisible') } }); } else if (activeItemIndex === 2) { paginationItems.forEach((item, index) => { if ((index > activeItemIndex && index < paginationLength - 2 && index > 3) || (index < activeItemIndex && index > 2)) { item.classList.add('m-pagination__list-item--invisible') } }); } else if (activeItemIndex === 3) { paginationItems.forEach((item, index) => { if ((index > activeItemIndex && index < paginationLength - 2) || (index < activeItemIndex && index > 2)) { item.classList.add('m-pagination__list-item--invisible') } }); } else if (activeItemIndex === paginationLength - 3) { paginationItems.forEach((item, index) => { if ((index > activeItemIndex && index < paginationLength - 3) || (index < activeItemIndex && index > 1 && index < paginationLength - 4)) { item.classList.add('m-pagination__list-item--invisible') } }); } else if (activeItemIndex === paginationLength - 4) { paginationItems.forEach((item, index) => { if ((index > activeItemIndex && index < paginationLength - 3) || (index < activeItemIndex && index > 1)) { item.classList.add('m-pagination__list-item--invisible') } }); } else { paginationItems.forEach((item, index) => { if ((index > activeItemIndex && index < paginationLength - 2) || (index < activeItemIndex && index > 1)) { item.classList.add('m-pagination__list-item--invisible') } }); }
    }
});
let shopTheRecipeCardDemo = document.querySelector('.m-shop-the-recipe-card--demo');
if (shopTheRecipeCardDemo) { new ShopTheRecipeCard(shopTheRecipeCardDemo); }
document.querySelectorAll(".m-text-input--placeholder-label .m-text-input__input").forEach((el) => { new PlaceholderLabelInput(el); });
document.querySelectorAll(".m-textarea--placeholder-label .m-textarea__input").forEach((el) => { new PlaceholderLabelInput(el); });
(function() { var accordion = new Accordions({ selector: '.js-accordion', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' } } }); })();
(function() { let el = document.querySelector('.m-product-gallery'); if (el) { new Glide('.m-product-gallery', { type: 'carousel', perView: 1, gap: 0 }).mount(); } })();
(function() {
    let modalButtons = document.querySelectorAll(".js-modal-trigger");
    for (var i = 0; i < modalButtons.length; i++) { enableModal(modalButtons[i]); }
    var modalFormCollapsibleOptions = { triggerClass: 'js-modal-form-collapsible__trigger', openClass: 'm-modal__form-wrapper--collapsible-open', transitionClass: 'm-modal__form-wrapper--collapsible-transition' };
    document.querySelectorAll('.js-modal-form-collapsible').forEach((el) => { new collapsibleElem(el, modalFormCollapsibleOptions); });
})();
(function() { var accordion = new Accordions({ selector: '.js-footer-accordion' }); })();
var submenuJsOptions = {
    triggerClass: 'js-nav-submenu__trigger',
    openClass: 'm-multilevel-menu__item--open',
    transitionClass: 'm-multilevel-menu__item--transition',
    keyboardTrap: "mobileOnly",
    contentClass: 'm-multilevel-menu__submenu',
    beforeOpen: function(current) {
        window.buildKitGlobals.multilevelSubmenus.forEach((submenu) => {
            if (current == submenu) { return; }
            submenu.closePanel();
        });
    }
};
window.buildKitGlobals = window.buildKitGlobals || {};
window.buildKitGlobals.multilevelSubmenus = [];
document.querySelectorAll('.js-nav-submenu').forEach((el) => {
    let submenu = new collapsibleElem(el, submenuJsOptions);
    window.buildKitGlobals.multilevelSubmenus.push(submenu);
});
var sidebarNavAccordion = new Accordions({ selector: '.js-sidebar-nav-accordion', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' } } });
let search = document.querySelector(".js-search");
if (search) {
    let searchInput = search.querySelector(".js-search__input");
    searchInput.addEventListener("keyup", toggleSearchResults);
    let searchTrends = search.querySelectorAll(".js-search-trending");
    searchTrends.forEach((trend) => {
        trend.addEventListener("click", (e) => {
            searchInput.value = e.target.innerText;
            toggleSearchResults();
        });
    });

    function toggleSearchResults() { if (searchInput.value) { search.classList.add("m-search-panel--show-results"); } else { search.classList.remove("m-search-panel--show-results"); } }
}
var mainMenuOptions = {
    triggerClass: 'js-main-menu__trigger',
    openClass: 'c-header__main--open',
    transitionClass: 'c-header__main--transition',
    closeOnEsc: true,
    keyboardTrap: "mobileOnly",
    contentClass: 'c-header__main-panel',
    scrollPosition: 0,
    beforeOpen: function(menu) {
        if (!minWidth(breakpoints.screenMl).matches) {
            document.body.classList.add("_has-modal");
            this.scrollPosition = window.pageYOffset;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollPosition}px`;
        }
    },
    beforeClose: function(menu) {
        mainMenuPanels.forEach((panel) => { panel.closePanel(); });
        searchPanel.closePanel();
        if (!minWidth(breakpoints.screenMl).matches) {
            document.body.classList.remove("_has-modal");
            document.body.style.removeProperty('position');
            document.body.style.removeProperty('top');
            window.scrollTo(0, this.scrollPosition);
        }
    }
}
var mainMenuPanelOptions = {
    triggerClass: 'js-main-menu-panel__trigger',
    openClass: 'c-header__link-item--open',
    transitionClass: 'c-header__link-item--transition',
    closeOnEsc: true,
    keyboardTrap: "mobileOnly",
    contentClass: 'c-header__panel',
    beforeOpen: function(current) {
        closeAllOtherHeaderMenus(current);
        window.buildKitGlobals.mainMenuUnderlay.classList.add("c-header__underlay--open");
        if (!minWidth(breakpoints.screenMl).matches) {
            document.body.classList.add("_has-modal");
            this.scrollPosition = window.pageYOffset;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollPosition}px`;
        }
    },
    beforeClose: function(current) {
        window.buildKitGlobals.multilevelSubmenus.forEach((submenu) => { submenu.closePanel(); });
        window.buildKitGlobals.mainMenuUnderlay.classList.remove("c-header__underlay--open");
    }
}
var searchPanelOptions = {
    triggerClass: 'js-search-panel__trigger',
    openClass: 'c-header__search-panel-wrapper--open',
    transitionClass: 'c-header__search-panel-wrapper--transition',
    closeOnEsc: true,
    keyboardTrap: "mobileOnly",
    contentClass: 'c-header__search-panel',
    scrollPosition: 0,
    beforeOpen: function(current) {
        if (!minWidth(breakpoints.screenMl).matches) {
            let y = distFromViewportTop(searchPanelInnerElem);
            searchPanelInnerElem.style.transform = `translateY(${y}px)`;
            setTimeout(() => { searchPanelInnerElem.style.transform = 'none'; }, 10);
            document.body.classList.add("_has-modal");
            this.scrollPosition = window.pageYOffset;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollPosition}px`;
        }
        closeAllOtherHeaderMenus(current);
        window.buildKitGlobals.mainMenuUnderlay.classList.add("c-header__underlay--open");
    },
    beforeClose: function(current) {
        window.buildKitGlobals.mainMenuUnderlay.classList.remove("c-header__underlay--open");
        if (!minWidth(breakpoints.screenMl).matches) {
            document.body.classList.remove("_has-modal");
            document.body.style.removeProperty('position');
            document.body.style.removeProperty('top');
            window.scrollTo(0, this.scrollPosition);
        }
    }
}
var minicartOptions = {
    triggerClass: 'js-minicart__trigger',
    openClass: 'c-header__minicart--open',
    transitionClass: 'c-header__minicart--transition',
    closeOnEsc: true,
    beforeOpen: function(current) {
        closeAllOtherHeaderMenus(current);
        window.buildKitGlobals.mainMenuUnderlay.classList.add("c-header__underlay--open");
    },
    beforeClose: function() { window.buildKitGlobals.mainMenuUnderlay.classList.remove("c-header__underlay--open"); }
}
var accountDropdownOptions = {
    triggerClass: 'js-account__trigger',
    openClass: 'c-header__account-button--open',
    transitionClass: 'c-header__account-button--transition',
    closeOnEsc: true,
    beforeOpen: function(current) {
        closeAllOtherHeaderMenus(current);
        window.buildKitGlobals.mainMenuUnderlay.classList.add("c-header__underlay--open");
    },
    beforeClose: function() { window.buildKitGlobals.mainMenuUnderlay.classList.remove("c-header__underlay--open"); }
}
let mainMenuElem = document.querySelector(".js-main-menu");
var mainMenu;
var mainMenuPanels = [];
var searchPanel;
var searchPanelInnerElem;
var accountDropdown;
var minicart;
window.buildKitGlobals = window.buildKitGlobals || {};
window.buildKitGlobals.mainMenuUnderlay = document.querySelector(".js-header-underlay");
if (mainMenuElem) {
    mainMenu = new collapsibleElem(mainMenuElem, mainMenuOptions);
    document.querySelectorAll('.js-main-menu-panel').forEach((el) => {
        let panel = new collapsibleElem(el, mainMenuPanelOptions);
        mainMenuPanels.push(panel);
    });
    let searchPanelElem = document.querySelector('.js-search-panel');
    if (searchPanelElem) {
        searchPanel = new collapsibleElem(searchPanelElem, searchPanelOptions);
        searchPanelInnerElem = searchPanelElem.querySelector('.c-header__search-panel');
    }
    let searchBtnElem = document.querySelector('.js-search-btn');
    if (searchBtnElem) {
        searchBtnElem.addEventListener("click", () => {
            if (minWidth(breakpoints.screenMl).matches) { searchPanel.openPanel(); } else {
                mainMenu.openPanel();
                setTimeout(() => { searchPanel.openPanel(); }, 10);
            }
        });
    }
    accountDropdown = new collapsibleElem(document.querySelector('.js-account'), accountDropdownOptions);
    minicart = new collapsibleElem(document.querySelector('.js-minicart'), minicartOptions);
    if (window.buildKitGlobals.mainMenuUnderlay) { window.buildKitGlobals.mainMenuUnderlay.addEventListener("click", () => { closeAllOtherHeaderMenus(); }); }
}

function closeAllOtherHeaderMenus(current = {}) {
    mainMenuPanels.forEach((panel) => {
        if (current == panel) { return; }
        panel.closePanel();
    });
    if (current != searchPanel) { searchPanel.closePanel(); }
    if (current != accountDropdown) { accountDropdown.closePanel(); }
    if (current != minicart) { minicart.closePanel(); }
}
(function() {
    let el = document.querySelector('.m-product-gallery');
    if (el) {
        const driftImgs = document.querySelectorAll('.m-product-gallery__img');
        const pane = document.querySelector('.c-product-overview__info');
        driftImgs.forEach(img => { new Drift(img, { paneContainer: pane, inlinePane: 900, inlineOffsetY: -125, containInline: true, hoverBoundingBox: true }); });
    }
})();
(function() { var accordion = new Accordions({ selector: '.js-accordion-description', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' } } }); })();
(function() { var accordion = new Accordions({ selector: '.js-accordion-details', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' } } }); })();
(function() {
    var accordion = new Accordions({ selector: '.js-filter-accordion', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open' }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner' } } });
    setCSSViewportHeight();
    window.addEventListener('resize', () => { setCSSViewportHeight(); });

    function setCSSViewportHeight() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }
})();
(function() { var filtersToggleBtn = document.querySelector('.js-toggle-filters'); if (filtersToggleBtn) { filtersToggleBtn.addEventListener('click', function() { filtersToggleBtn.classList.toggle('active'); }); } })();
var changeableProductsSlider = document.querySelector(".c-products-slider--changeable");
if (changeableProductsSlider) {
    var changeableProductsSliderSelect = changeableProductsSlider.querySelector(".c-products-slider__switcher-select");
    var changeableProductsSliderSelectWrapper = changeableProductsSlider.querySelector(".c-products-slider__switcher-select-wrapper");
    var changeableProductsSliderLists = changeableProductsSlider.querySelectorAll(".c-products-slider__slider-container");
    setChangeableProductsSlider(changeableProductsSliderSelect.value);
    changeableProductsSliderSelect.addEventListener("change", (e) => { setChangeableProductsSlider(e.target.value); });
}

function setChangeableProductsSlider(brand) {
    changeableProductsSliderLists.forEach((el) => {
        if (el.dataset.brand == brand) {
            el.removeAttribute("hidden");
            el.classList.add("c-products-slider__slider-container--appearing");
            setTimeout(() => {
                el.classList.remove("c-products-slider__slider-container--appearing");
                el.swiper.update();
            }, 10);
        } else { el.setAttribute("hidden", ""); }
    });
    let brandColor = brandColorsLight[brand];
    if (brandColor) { changeableProductsSliderSelectWrapper.style.setProperty('color', `var(${brandColor})`); } else { changeableProductsSliderSelectWrapper.style.removeProperty('color'); }
}
(function() {
    let expandableProductsSlider = document.querySelector(".c-expandable-products-slider__slider-wrapper");
    if (!expandableProductsSlider) { return; }
    let expandableProductsSliderActionArea = document.querySelector(".c-expandable-products-slider__slider");
    if (!expandableProductsSliderActionArea) { return; }
    expandableProductsSliderActionArea.addEventListener("mouseenter", allowExpandableProductsSliderPointer);
    expandableProductsSliderActionArea.addEventListener("mouseleave", disallowExpandableProductsSliderPointer);
    expandableProductsSliderActionArea.addEventListener("touchstart", allowExpandableProductsSliderPointer);
    expandableProductsSliderActionArea.addEventListener("touchend", disallowExpandableProductsSliderPointer);
    expandableProductsSliderActionArea.addEventListener("touchcancel", disallowExpandableProductsSliderPointer);

    function allowExpandableProductsSliderPointer() { expandableProductsSlider.style["pointer-events"] = "auto"; }

    function disallowExpandableProductsSliderPointer() { expandableProductsSlider.style["pointer-events"] = "none"; }
})();
let shopTheRecipeCarousel = document.querySelectorAll('.c-shop-the-recipe-carousel');
shopTheRecipeCarousel.forEach((el) => { new ShopTheRecipeCarousel(el); });
(function() {
    let targetName = '.c-testimonial-carousel__carousel';
    let parentEl = document.querySelectorAll(targetName);
    if (targetName) {
        parentEl.forEach((el) => {
            let contentCarousel = new Glide(el, { startAt: 1, perView: 1, gap: 25, type: 'carousel', breakpoints: { 767: { peek: { before: 0, after: 100 }, } } });
            const forward = el.parentElement.querySelector('.a-carousel-indicator__arrow--right');
            const backward = el.parentElement.querySelector('.a-carousel-indicator__arrow--left');
            let controlCarousel = new Glide(el.nextElementSibling, { startAt: 2, perView: 2, gap: 23, type: 'carousel', });
            contentCarousel.on('swipe.end', function() {
                let i = contentCarousel.index + 1;
                controlCarousel.go('=' + i);
            });
            controlCarousel.on('swipe.end', function() {
                let i = controlCarousel.index - 1;
                contentCarousel.go('=' + i);
            });
            forward.addEventListener('click', function() {
                contentCarousel.go('>');
                controlCarousel.go('>');
            });
            backward.addEventListener('click', function() {
                contentCarousel.go('<');
                controlCarousel.go('<');
            });
            contentCarousel.mount();
            controlCarousel.mount();
        });
    }
})();
(function() { let el = document.querySelector('.js-homepage-hero-carousel'); if (el) { new Glide('.js-homepage-hero-carousel', { type: 'carousel', perView: 1, gap: 0 }).mount(); } })();
(function() { var accordion = new Accordions({ selector: '.js-faq-accordion', options: { trigger: { selector: '.js-accordion-trigger', activeClass: 'm-accordion__title--open', }, content: { selector: '.js-accordion-content', activeClass: 'm-accordion__content--open', innerSelector: '.js-accordion-content-inner', }, }, }); })();
(function() {
    if (document.getElementById('js-plp')) {
        const template = document.querySelector('.js-plp');
        if (!template) { return; }
        const container = document.querySelector('.js-plp-container');
        var filtersToggleBtn = document.querySelector('.js-toggle-filters');
        var filtersCloseBtn = document.querySelector('.js-close-filters');
        const grid = document.querySelector('.js-plp-grid');
        if (grid) { animateCSSGrid.wrapGrid(grid, { duration: 300, easing: 'easeIn' }); }
        if (filtersToggleBtn) {
            filtersToggleBtn.addEventListener('click', function() {
                template.classList.toggle('t-plp--with-filters');
                grid.classList.toggle('t-plp__grid--with-filters');
                footerTop = footer.offsetTop;
            });
        }
        if (filtersCloseBtn) {
            filtersCloseBtn.addEventListener('click', function() {
                filtersToggleBtn.classList.remove('active');
                template.classList.remove('t-plp--with-filters');
                grid.classList.remove('t-plp__grid--with-filters');
            });
        }
        const footer = document.querySelector('.js-footer');
        var footerTop = '';
        const filterBar = document.querySelector('.js-filter-bar');
        var filterBarTop = filterBar.offsetTop;
        const filters = document.querySelector('.js-filters');
        const filtersContent = filters.querySelector('.c-sidebar-filters');
        var filtersTop = filters.offsetTop;

        function stickyFilters() {
            var filterBarHeight = filterBar.offsetHeight;
            footerTop = '';
            if (window.scrollY >= filterBarTop) {
                filterBar.classList.add('t-plp__filter-bar--is-fixed');
                template.style.paddingTop = filterBarHeight + 'px';
                $(".uni-tex-cat").addClass("none");
            } else {
                filterBar.classList.remove('t-plp__filter-bar--is-fixed');
                template.style.paddingTop = 0;
                $(".uni-tex-cat").removeClass("none");
            }
            if (minWidth(breakpoints.screenMl).matches) {
                var style = getComputedStyle(container);
                var contentWidth = container.offsetWidth - parseFloat(style.paddingLeft) - parseFloat(style.paddingRight);
                if ((window.innerHeight + filtersTop) > footerTop) { filtersContent.style.height = (footerTop - filtersTop) + 'px'; } else { filtersContent.style.height = (window.innerHeight - filterBarHeight) + 'px'; }
                filtersContent.style.width = ((contentWidth - (3 * 20)) / 4) + 'px';
                if ((window.scrollY + window.innerHeight) >= footerTop && window.pageYOffset >= (filtersTop - filterBarHeight)) { filters.classList.add('t-plp__filters--is-fixed'); if ((window.innerHeight + filtersTop) > footerTop) { filters.style.top = (filtersTop - window.scrollY) + 'px'; } else { filters.style.top = (filterBarHeight - ((window.scrollY + window.innerHeight) - footerTop)) + 'px'; } } else if (window.scrollY >= (filtersTop - filterBarHeight)) {
                    filters.classList.add('t-plp__filters--is-fixed');
                    filters.style.top = filterBarHeight + 'px';
                } else {
                    filters.classList.remove('t-plp__filters--is-fixed');
                    filters.style.top = 0;
                }
            } else if (minWidth(breakpoints.screenMd).matches) {
                filters.classList.remove('t-plp__filters--is-fixed');
                filters.style.top = 0;
                filtersContent.style.height = '100vh';
                filtersContent.style.width = '100%';
            } else {
                filters.classList.remove('t-plp__filters--is-fixed');
                filters.style.top = 0;
                filtersContent.style.height = '100vh';
                filtersContent.style.width = '100vw';
            }
        }
        window.addEventListener('scroll', stickyFilters);
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                filtersToggleBtn.classList.remove('active');
                template.classList.remove('t-plp--with-filters');
                grid.classList.remove('t-plp__grid--with-filters');
                filterBar.classList.remove('t-plp__filter-bar--is-fixed');
                filterBarTop = filterBar.offsetTop;
                filtersTop = filters.offsetTop;
                footerTop = footer.offsetTop;
                stickyFilters();
            }, 250);
        });
        const mobileQuickFilters = document.querySelector('.js-mobile-quick-filters');
        var quickFilters = filterBar.querySelectorAll('.m-quick-filter__input');
        if (quickFilters) {
            for (var i = 0; i < quickFilters.length; i++) {
                quickFilters[i].addEventListener('change', function(e) {
                    var filter = mobileQuickFilters.querySelector('label[for="' + e.target.id + '"]');
                    filter.classList.toggle('is-active')
                });
            }
        }
    }
})();
(function() {
    if (document.getElementById('js-srp')) {
        var categoryLinks = document.querySelectorAll('.js-srp-category-link');
        var cards = document.querySelectorAll('.js-srp-card');
        if (!cards.length) {
            let filterBtn = document.querySelectorAll('.c-filter-bar__filter-btn');
            filterBtn.forEach((btn) => { btn.style.display = "none"; });
            let sideBarFilters = document.querySelectorAll('.t-plp__filters.js-filters');
            sideBarFilters.forEach((filter) => { filter.style.display = "none"; });
            return;
        }

        function reset(elements, activeClass) {
            this.elements = elements;
            this.activeClass = activeClass;
            this.elements.forEach((el) => { el.classList.remove(this.activeClass); });
        }
        if (categoryLinks) {
            categoryLinks.forEach((link) => {
                link.addEventListener('click', function(e) {
                    var el = e.target;
                    if (!el.classList.contains('t-srp__category-link--active')) {
                        reset(categoryLinks, 't-srp__category-link--active');
                        el.classList.add('t-srp__category-link--active');
                        var resultType = el.dataset.type;
                        cards.forEach((card) => {
                            if (card.dataset.type === resultType) {
                                card.classList.add('t-srp__card--active');
                                card.classList.add('t-srp__card--loading');
                            } else { card.classList.remove('t-srp__card--active'); }
                        });
                        filtersToggleBtn.classList.remove('active');
                        template.classList.remove('t-plp--with-filters');
                        grid.classList.remove('t-plp__grid--with-filters');
                        filterBar.classList.remove('t-plp__filter-bar--is-fixed');
                        filterBarTop = filterBar.offsetTop;
                        filtersTop = filters.offsetTop;
                        footerTop = footer.offsetTop;
                    }
                });
            });
        }
        const template = document.querySelector('.js-plp');
        const container = document.querySelector('.js-plp-container');
        var filtersToggleBtn = document.querySelector('.js-toggle-filters');
        var filtersCloseBtn = document.querySelector('.js-close-filters');
        const grid = document.querySelector('.js-plp-grid');
        if (grid) { animateCSSGrid.wrapGrid(grid, { duration: 300, easing: 'easeIn', onEnd: (animatingElementList) => { animatingElementList.forEach((card) => { card.classList.remove('t-srp__card--loading'); }); } }); }
        if (filtersToggleBtn) {
            filtersToggleBtn.addEventListener('click', function() {
                template.classList.toggle('t-plp--with-filters');
                grid.classList.toggle('t-plp__grid--with-filters');
                footerTop = footer.offsetTop;
            });
        }
        if (filtersCloseBtn) {
            filtersCloseBtn.addEventListener('click', function() {
                filtersToggleBtn.classList.remove('active');
                template.classList.remove('t-plp--with-filters');
                grid.classList.remove('t-plp__grid--with-filters');
            });
        }
        const footer = document.querySelector('.js-footer');
        var footerTop = footer.offsetTop;
        const filterBar = document.querySelector('.js-filter-bar');
        var filterBarTop = filterBar.offsetTop;
        const filters = document.querySelector('.js-filters');
        const filtersContent = filters.querySelector('.c-sidebar-filters');
        var filtersTop = filters.offsetTop;

        function stickyFilters() {
            var filterBarHeight = filterBar.offsetHeight;
            footerTop = footer.offsetTop;
            if (window.scrollY >= filterBarTop) {
                filterBar.classList.add('t-plp__filter-bar--is-fixed');
                template.style.paddingTop = filterBarHeight + 'px';
            } else {
                filterBar.classList.remove('t-plp__filter-bar--is-fixed');
                template.style.paddingTop = 0;
            }
            if (minWidth(breakpoints.screenMl).matches) {
                var style = getComputedStyle(container);
                var contentWidth = container.offsetWidth - parseFloat(style.paddingLeft) - parseFloat(style.paddingRight);
                if ((window.innerHeight + filtersTop) > footerTop) { filtersContent.style.height = (footerTop - filtersTop) + 'px'; } else { filtersContent.style.height = (window.innerHeight - filterBarHeight) + 'px'; }
                filtersContent.style.width = ((contentWidth - (3 * 20)) / 4) + 'px';
                if ((window.scrollY + window.innerHeight) >= footerTop && window.pageYOffset >= (filtersTop - filterBarHeight)) { filters.classList.add('t-plp__filters--is-fixed'); if ((window.innerHeight + filtersTop) > footerTop) { filters.style.top = (filtersTop - window.scrollY) + 'px'; } else { filters.style.top = (filterBarHeight - ((window.scrollY + window.innerHeight) - footerTop)) + 'px'; } } else if (window.scrollY >= (filtersTop - filterBarHeight)) {
                    filters.classList.add('t-plp__filters--is-fixed');
                    filters.style.top = filterBarHeight + 'px';
                } else {
                    filters.classList.remove('t-plp__filters--is-fixed');
                    filters.style.top = 0;
                }
            } else if (minWidth(breakpoints.screenMd).matches) {
                filters.classList.remove('t-plp__filters--is-fixed');
                filters.style.top = 0;
                filtersContent.style.height = '100vh';
                filtersContent.style.width = '100%';
            } else {
                filters.classList.remove('t-plp__filters--is-fixed');
                filters.style.top = 0;
                filtersContent.style.height = '100vh';
                filtersContent.style.width = '100vw';
            }
        }
        window.addEventListener('scroll', stickyFilters);
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                filtersToggleBtn.classList.remove('active');
                template.classList.remove('t-plp--with-filters');
                grid.classList.remove('t-plp__grid--with-filters');
                filterBar.classList.remove('t-plp__filter-bar--is-fixed');
                filterBarTop = filterBar.offsetTop;
                filtersTop = filters.offsetTop;
                footerTop = footer.offsetTop;
                stickyFilters();
            }, 250);
        });
    }
})();;
(function($) {
    let storeEndpoint;
    let storeHeader;
    const plpModalSelector = ".m-modal#changeCart";
    const modalFormCollapsibleSelector = ".js-modal-form-collapsible";
    const modalFormCollapsibleOptions = { triggerClass: 'js-modal-form-collapsible__trigger', openClass: 'm-modal__form-wrapper--collapsible-open', transitionClass: 'm-modal__form-wrapper--collapsible-transition' };
    let storedCartId = localStorage.getItem("maskedQuoteId");
    let storageTimestamp = localStorage.getItem("ts");
    let storageTimeLimit = 30 * 60 * 1000;
    let user = { isLoggedIn: false, initials: localStorage.getItem("initials"), firstName: localStorage.getItem("fname"), favorites: [], carts: [], cartTotal: 0, shelves: [], priceLookup: { skus: {} }, wishlist: { id: -1, items: {} } };
    const messaging = { dashboard: "Welcome Back, $name", account: { login: { url: "/customer/account/login/referer/" + btoa(location.href), text: " Sign In/Create Account" }, links: [{ url: "/customer/account/", text: "My Account" }, { url: "/sales/order/history/", text: "My Orders" }, { url: "/company/users/", text: "My Organization", b2b: true }, { url: "/wishlist/", text: "My Wishlist" }, { url: "/customer/account/logout/referer/" + btoa(location.href), text: "Sign Out" }] }, pdp: { review: "Write a Review", signin: { message: "Please $link to view price", link: { url: "/customer/account/login/referer/" + btoa(location.href), text: "sign in" } }, shelves: { product: "", shelf: "", addSuccess: "$product has been added to your $shelf.", addError: "There was an error adding $product to your $shelf.", addErrorSelectShelf: "Please select a shelf." }, actions: { shelves: { cta: "Add to Shelf", modal: { ariaLabel: "Add to Shelf", headline: "Add to Shelf", confirmBtn: "Confirm", closeBtn: "Close" } }, wishlist: { add: "Add to Wishlist", remove: "Remove from Wishlist" }, cart: { cta: "Change Cart", modal: { ariaLabel: "Change Cart", headline: "Choose a cart", createPlaceholder: "Cart Name", createLabel: "Create", createTrigger: "Create a new cart", createBtn: "Create", confirmBtn: "Confirm", closeBtn: "Close" } } } }, plp: { actions: { qtyLabel: "Quantity", add: "Add to Cart" } }, cart: { addSuccess: { message: "You've added $productName to your cart", product: "", btn: {}, analytics: [] }, addError: "There was an error adding the item to your cart", changeSuccess: "You've changed your default cart", changeError: "There was an error changing your default cart", qtyMissingError: "Please specify the quantity of product(s)", qtyInvalidError: "Please specify a valid quantity of product(s)", cartNameMissingError: "Please specify a name for the cart", cartSelectMissingError: "Please select a cart or create a new one" }, minicart: { fallbackImg: `https://cdn2.webdamdb.com/md_YYMY3r48rXV0.jpg?` + Date.now(), signin: { message: "You must $link to see your carts.", link: { url: "/customer/account/login/referer/" + btoa(location.href), text: "sign in" } }, empty: { b2c: "Your Shopping Cart is Empty.", b2b: "You do not have any saved carts" }, total: { b2c: "Your Cart Total:", b2b: "Group Total", b2b_my_total: "My Approved Total", b2b_my_draft_total: "My Draft Total" }, viewBtn: { url: { b2b: "/requisition_list/requisition/index/", b2c: "/checkout/cart/" }, text: { b2c: "View Cart", b2b: "View Saved Carts" } }, checkoutBtn: { url: "/checkout/", message: window.location.origin.indexOf("coopmarket.com") !== -1 ? "Proceed to Checkout" : "Checkout on Co-Op Market" }, accessibility: { message: "My Cart", count: "($count items)" }, trackRemove: {} }, wishlist: { product: "", addSuccess: "$product has been added to your Wish List.", addError: "There was an error adding $product to your Wish List.", removeSuccess: "$product has been removed from your Wish List.", removeError: "There was an error removing $product from your Wish List.", trackAdd: {} }, favorites: { link: "", add: "Add to Favorites", remove: "Remove from Favorites", title: "", addSuccess: "$title has been added to your Favorites.", addError: "There was an error adding $title to your Favorites.", removeSuccess: "$title has been removed from your Favorites.", removeError: "There was an error removing $title from your Favorites.", signin: "/customer/account/login/referer/" + btoa(location.href) }, newsletter: { button: "", email: "", success: "$email has been signed up for the Newsletter.", error: "There was an error subscribing $email to the Newsletter.", errorEmptyEmail: "This is a required field." } };

    function initSession(doneCallback) {
        apiRequest(`${storeEndpoint}/acquia/action/init`, "GET", {}, false, true, function({ quoteType, quoteId, maskedQuoteId, email, name, lastname, accountType, defaultSavedCart, hash }) {
            if (storeEndpoint !== FrontierConfigs.paths.b2b) {
                storedCartId = maskedQuoteId;
                localStorage.setItem("maskedQuoteId", maskedQuoteId);
            }
            localStorage.setItem("ts", Date.now() + storageTimeLimit);
            if (quoteType === "customer") {
                user.isLoggedIn = true;
                let firstNameInitial = name ? name[0] : null;
                let lastNameInitial = lastname ? lastname[0] : null;
                localStorage.setItem("initials", firstNameInitial + lastNameInitial);
                localStorage.setItem("fname", name.split(" ")[0]);
                user.initials = firstNameInitial + lastNameInitial;
                user.firstName = name.split(" ")[0];
                displayAccountNav();
                showWishlistAction();
                addWishlistListeners();
                if (storeEndpoint === FrontierConfigs.paths.b2b) {
                    getSavedCartsB2B();
                    getShelves();
                    showPDPActions();
                    showPLPProductAction();
                    addPDPActionListeners();
                    showDashboardBlock();
                }
                getSkuPrices();
                getWishlist();
                getFavorites();
            } else if (quoteType !== "customer") {
                localStorage.removeItem("initials");
                if (storeEndpoint === FrontierConfigs.paths.b2b) {
                    localStorage.removeItem("maskedQuoteId");
                    hideDashboardBlock();
                } else { getSkuPrices(); }
                enableFavoritesAction(true);
            }
            if (storedCartId && storeEndpoint !== FrontierConfigs.paths.b2b) { getCartData(); }
            addAddToCartListeners();
            populateMiniCart();
        }, function(err) { console.log(`Acquia Error: ${ JSON.stringify(err)}`); }, doneCallback);
    }

    function loggedOutHandler() {
        user.isLoggedIn = false;
        $('.c-header__initials').remove();
        $(".js-account .a-icon-text-btn--icon-only").show();
        localStorage.removeItem("maskedQuoteId");
        localStorage.removeItem("initials");
        loggedOutAccountNav();
        $(".m-product-card__cta").html("");
        $(".m-product-overview__wishlist").remove();
        $(".m-wholesale-actions").remove();
        $(".m-product-overview__add-to-cart").remove();
        let pdpLink = `<a class="a-anchor" href="${ storeEndpoint+messaging.pdp.signin.link.url }">${ messaging.pdp.signin.link.text }</a>`;
        $(".m-product-overview__price-wrapper").html(`<span class="m-product-overview__price-hidden">
      ${ messaging.pdp.signin.message.replace("$link",pdpLink)}
    </span>`);
        $(".m-product-card .m-product-card__price").html("");
        $(".m-product-card__add-to-cart").remove();
        $(".m-product-overview__write-review").remove();
        hideDashboardBlock();
        enableFavoritesAction(true);
        if (storeEndpoint !== FrontierConfigs.paths.b2b) { initSession(); }
    }

    function displayAccountNav() {
        const accountBtn = $(`<button class="a-btn c-header__initials js-account__trigger" type="button">${ user.initials }</button>`);
        const accountIcon = $(".js-account .a-icon-text-btn--icon-only");
        accountIcon.after(accountBtn);
        accountIcon.hide();
        loggedInAccountNav();
        let accountNav = $("<ul class='m-account-dropdown__list'></ul>");
        for (let i = 0; i < messaging.account.links.length; ++i) { const link = messaging.account.links[i]; if ((!link.b2b && !link.b2c) || (link.b2b && storeEndpoint === FrontierConfigs.paths.b2b) || (link.b2c && storeEndpoint !== FrontierConfigs.paths.b2b)) { accountNav.append(`<li class="m-account-dropdown__item">
          <a href="${ storeEndpoint+messaging.account.links[i].url }" class="m-account-dropdown__link">
            ${ messaging.account.links[i].text }
          </a>
        </li>`); } }
        const mobileAccountNav = accountNav.clone();
        $(".c-header__main-panel-bottom").remove();
        $(".c-header__main-panel-top").after(mobileAccountNav);
        mobileAccountNav.wrap("<div class='c-header__main-panel-bottom'><div class='c-header__account-menu-mobile' id='c-header__account-menu-mobile'></div></div>");
        accountBtn.after(accountNav);
        accountNav.wrap("<div class='c-header__account-dropdown'><div class='m-account-dropdown'></div></div>");
        const socialLinks = $(".c-footer__social-links .m-social-links").clone();
        $(".c-header__account-menu-mobile").after(socialLinks);
        socialLinks.wrap("<div class='c-header__social' id='c-header__social'></div>");
        if (typeof accountDropdown !== "undefined") { accountDropdown = new collapsibleElem(document.querySelector('.js-account'), accountDropdownOptions); }
        $(".m-account-dropdown__list a[href*='logout']").on("click", function() {
            localStorage.removeItem("maskedQuoteId");
            localStorage.removeItem("ts");
        });
    }

    function showDashboardBlock() {
        let block = $(".c-account-header");
        const container = $(".t-homepage__account--unauth");
        block.show();
        $(".c-account-header__greeting", block).text(messaging.dashboard.replace("$name", user.firstName));
        if (container.length > 0) {
            container.removeClass("t-homepage__account--unauth");
            container.addClass("t-homepage__account");
        }
    }

    function hideDashboardBlock() {
        const container = $(".t-homepage__account");
        $(".c-account-header").hide();
        if (container.length > 0) {
            container.removeClass("t-homepage__account");
            container.addClass("t-homepage__account--unauth");
        }
    }

    function addSigninLink() { $('.m-account-menu').prepend(`<li class="m-account-menu__item">
    <a href="${ storeEndpoint+messaging.account.login.url }" class="m-account-menu__link">
    <span class="m-account-menu__link-text">
      ${ messaging.account.login.text }
    </span>
    </a></li>`); if ($('.c-header__account-button.js-account a').length) { $('.c-header__account-button.js-account a').attr('href', `${ storeEndpoint+messaging.account.login.url }`); } }

    function loggedInAccountNav() {
        $(".m-account-menu a[href*=login]").parent().hide();
        $(".m-account-menu a[href*=membership]").parent().hide();
        $(".m-account-menu a[href*=wishlist]").parent().show();
    }

    function getSkuPrices() {
        $(".m-product-card__sku, .m-product-overview__sku, .m-combined-product-name__sku").each(function() {
            const isPDPPrice = $(this).hasClass("m-product-overview__sku");
            const isMiniPrice = $(this).hasClass("m-combined-product-name__sku");
            const sku = $(this).text().slice(5);
            let parent;
            if (isPDPPrice) { parent = $(this).parents(".c-product-overview"); } else if (isMiniPrice) { parent = $(this).parents(".m-mini-product-card"); } else { parent = $(this).parents(".m-product-card"); }
            let price;
            if (isPDPPrice) { price = $(".m-price-lockup", parent); } else if (isMiniPrice) { price = $(".m-mini-product-card__price", parent); } else { price = $(".m-product-card__price", parent); }
            if (price.length === 0) {
                if (isPDPPrice) {
                    price = $("<div class='m-product-overview__price-wrapper'><div class='m-price-lockup'></div></div>");
                    $(".m-product-overview__rating", parent).after(price);
                } else if (isMiniPrice) {
                    price = $("<div class='m-mini-product-card__price'><div class='m-price-lockup'></div></div>");
                    $(".m-combined-product-name", parent).after(price);
                } else {
                    price = $("<div class='m-price-lockup m-product-card__price'></div>");
                    $(".m-product-card__sku", parent).after(price);
                }
            }
            if (parent.length > 0) {
                if (!user.priceLookup.skus[sku]) { user.priceLookup.skus[sku] = price; } else {
                    if (!Array.isArray(user.priceLookup.skus[sku])) { user.priceLookup.skus[sku] = [user.priceLookup.skus[sku]]; }
                    user.priceLookup.skus[sku].push(price);
                }
            }
        });
        if (Object.keys(user.priceLookup.skus).length > 0) { getProductPricesBySku(); }
    }

    function showWishlistAction() {
        $(".m-product-card__cta").html("");
        let wishlistIcon = '';
        if (storeEndpoint !== FrontierConfigs.paths.b2b) { wishlistIcon = `<button class="a-wishlist a-icon-text-btn a-icon-text-btn--icon-only js-wishlist-icon $type" type="button">
        <span class="a-icon-text-btn__icon a-wishlist__icon" aria-hidden="true">
          <span class="icon-favorite a-wishlist__icon--outline"></span>
          <span class="icon-favorite-filled a-wishlist__icon--filled"></span>
        </span>
        <span class="a-icon-text-btn__label">
          <span class="a-wishlist__label--add">
            ${ messaging.pdp.actions.wishlist.add }
          </span>
          <span class="a-wishlist__label--remove">
          ${ messaging.pdp.actions.wishlist.remove }
          </span>
        </span>
      </button>`; } else { wishlistIcon = `<button class="m-product-card__trigger a-icon-text-btn a-icon-text-btn--icon-only m-product-card__wishlist js-wishlist-icon" type="button" aria-label="">
        <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
      </button>`; }
        $(".m-product-card__cta").html(wishlistIcon.replace("$type", "m-product-card__wishlist"));
        if (storeEndpoint !== FrontierConfigs.paths.b2b && $('.c-product-overview').length > 0) {
            $(".js-wishlist-icon").remove();
            $(".m-combined-product-name").after(wishlistIcon.replace("$type", "m-product-overview__wishlist"));
        }
    }

    function showPDPActions() {
        if (storeEndpoint === FrontierConfigs.paths.b2b && $(".c-product-overview").length > 0) {
            const isUnavailable = $(".c-product-overview .m-product-overview__discontinued--unavailable").length > 0;
            $(".c-product-overview .m-product-overview__price-hidden").remove();
            $(".m-product-overview__price-wrapper").prepend(`<div class="m-price-lockup"></div>`);
            if (!isUnavailable) {
                $(".m-product-overview__price-wrapper").after(`<form class="m-product-overview__add-to-cart">
          <input class="a-number-input m-product-overview__qty" type="number" id="qty" name="qty" min="0" value="1" aria-label="Quantity">
          <button class="a-btn a-btn--primary m-product-overview__add-to-cart-btn" type="submit" disabled>Add to Cart</button>
        </form>`);
                $(".m-product-overview").after(`<div class="m-wholesale-actions">
          <div class="m-wholesale-actions__link-wrapper">
            <button class="a-anchor m-wholesale-actions__link js-modal-trigger" data-modal-id="addToShelf">
              <span>${ messaging.pdp.actions.shelves.cta }</span>
            </button>
            <div class="m-modal m-modal--hidden m-modal--slide-up-on-mobile" hidden="" aria-hidden="true" id="addToShelf">
            <div class="m-modal__overlay" tabindex="-1"></div>
              <div class="m-modal__box" role="dialog" aria-label="${ messaging.pdp.actions.shelves.modal.ariaLabel }" aria-modal="true">
                <div class="m-modal__content">
                  <h4 class="m-modal__headline">${ messaging.pdp.actions.shelves.modal.headline }</h4>
                  <div class="m-modal__body"></div>
                  <div class="m-modal__footer">
                    <div class="m-modal__cta js-modal-confirm">
                      <button class="a-btn a-btn--primary " type="button">${ messaging.pdp.actions.shelves.modal.confirmBtn }</button>
                    </div>
                  </div>
                </div>
                <button class="a-icon-text-btn a-icon-text-btn--icon-only m-modal__close" type="button">
                  <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                  <span class="a-icon-text-btn__label">${ messaging.pdp.actions.shelves.modal.closeBtn }</span>
                </button>
              </div>
            </div>
          </div>
          <div class="m-wholesale-actions__link-wrapper">
            <button class="a-anchor m-wholesale-actions__link m-wholesale-actions__add-to-wishlist js-wholesale-add-to-wishlist">
              <span class="m-wholesale-actions__add-to-wishlist-label--add">${ messaging.pdp.actions.wishlist.add }</span>
              <span class="m-wholesale-actions__add-to-wishlist-label--remove">${ messaging.pdp.actions.wishlist.remove }</span>
            </button>
          </div>
          <div class="m-wholesale-actions__link-wrapper">
            <button class="a-anchor m-wholesale-actions__link js-modal-trigger" data-modal-id="addToCart">
              <span>${ messaging.pdp.actions.cart.cta }</span>
            </button>
            <div class="m-modal m-modal--hidden m-modal--slide-up-on-mobile " hidden="" aria-hidden="true" id="addToCart">
              <div class="m-modal__overlay" tabindex="-1"></div>
              <div class="m-modal__box" role="dialog" aria-label="${ messaging.pdp.actions.cart.modal.ariaLabel }" aria-modal="true">
                <div class="m-modal__content m-modal__content--loading">
                  <h4 class="m-modal__headline">${ messaging.pdp.actions.cart.modal.headline }</h4>
                  <div class="m-modal__body"></div>
                  <div class="m-modal__footer">
                    <div class="m-modal__form-wrapper js-modal-form-collapsible m-modal__form-wrapper--collapsible">
                      <button class="a-anchor m-modal__link js-modal-form-collapsible__trigger">${ messaging.pdp.actions.cart.modal.createTrigger }</button>
                      <div class="m-modal__form">
                        <div class="m-text-input m-text-input--hidden-label">
                          <input class="a-text-input m-text-input__input" type="text" id="pdp-create-cart" name="pdp-create-cart" placeholder="${ messaging.pdp.actions.cart.modal.createPlaceholder }">
                          <label class="a-form-label m-text-input__label" for="pdp-create-cart">${ messaging.pdp.actions.cart.modal.createLabel }</label>
                        </div>
                        <button class="a-btn a-btn--primary ">${ messaging.pdp.actions.cart.modal.createBtn }</button>
                      </div>
                    </div>
                    <div class="m-modal__cta js-modal-confirm">
                      <button class="a-btn a-btn--primary " type="button">${ messaging.pdp.actions.cart.modal.confirmBtn }</button>
                    </div>
                  </div>
                </div>
                <button class="a-icon-text-btn a-icon-text-btn--icon-only m-modal__close" type="button">
                  <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                  <span class="a-icon-text-btn__label">${ messaging.pdp.actions.cart.modal.closeBtn }</span>
                </button>
              </div>
            </div>
          </div>
        </div>`);
                if (typeof Modal !== "undefined") {
                    if (!modals["addToCart"]) { modals["addToCart"] = new Modal(document.querySelector(".m-modal#addToCart")); }
                    if (!modals["addToShelf"]) { modals["addToShelf"] = new Modal(document.querySelector(".m-modal#addToShelf")); }
                    document.querySelectorAll(modalFormCollapsibleSelector).forEach((el) => { new collapsibleElem(el, modalFormCollapsibleOptions); });
                }
            }
        }
    }

    function showPLPProductAction() {
        if (storeEndpoint === FrontierConfigs.paths.b2b && $(".t-plp").length > 0) {
            $(".m-product-card .m-product-card__price").html("");
            $(".m-product-card__img-wrapper").after(`<form class="m-product-card__add-to-cart">
        <input class="a-number-input m-product-card__qty" type="number" name="qty" min="0" value="1" aria-label="${ messaging.plp.actions.qtyLabel }">
        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="submit" disabled>${ messaging.plp.actions.add }</button>
        <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="submit" disabled><span class="icon-add-to-cart"></span></button>
      </form>`);
        }
    }

    function showReviewAction() {
        if ($(".c-product-overview").length > 0) {
            $(".m-product-overview__rating-stars").eq(0).after(`<button class="a-anchor m-product-overview__write-review js-modal-trigger" data-modal-id="writeReview">
        <span>${ messaging.pdp.review }</span>
      </button>`);
            if (typeof Modal !== "undefined") { if (!modals["writeReview"]) { modals["writeReview"] = new Modal(document.querySelector(".m-modal#writeReview")); } }
            $('[data-modal-id="writeReview"]').on("click", function(e) { e.preventDefault(); if (modals["writeReview"] && user.isLoggedIn) { modals["writeReview"].openModal(); } });
        }
    }



    function disableFavoritesAction() { $(".js-favorite, .js-favorite-item").prop("disabled", true); }

    function enableFavoritesAction(forceSignin) {
        $(".js-favorite, .js-favorite-item").prop("disabled", false);
        if (forceSignin) {
            $(".js-favorite, .js-favorite-item").on("click", function(e) {
                e.preventDefault();
                window.location = storeEndpoint + messaging.account.login.url;
            });
        }
    }

    function disableNewsletterAction() { $(".m-newsletter-signup__submit").prop("disabled", true); }

    function enableNewsletterAction() { $(".m-newsletter-signup__submit").prop("disabled", false); }

    function getCartData() {
        let $minicartPanel = $('.c-header__minicart-panel');
        if ($minicartPanel.length) { $minicartPanel.addClass('c-header__minicart-panel--loader'); }
        graphQueryRequest("GET", { query: cleanGraphQuery(`{
          cart(cart_id: "${ storedCartId }") {
            items {
              id
              acquia_code
              product {
                name
                sku
                acquia_dam_image_mobile
                acquia_url
                brand
                price_range {
                  maximum_price {
                    regular_price {
                      value
                      currency
                    }
                    final_price {
                      value
                      currency
                    }
                  }
                }
                price_tiers {
                  final_price {
                    value
                    currency
                  }
                  quantity
                }
              }
              quantity
            }
            prices {
              grand_total {
                value
                currency
              }
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.cart === null) { initSession(); } else {
                user.carts = [data.cart];
                if (data.cart.prices && data.cart.prices.grand_total) { user.cartTotal = data.cart.prices.grand_total.value; }
                populateMiniCart();
            }
            setTimeout(function() { if ($minicartPanel.length) { $minicartPanel.removeClass('c-header__minicart-panel--loader'); } }, 500);
        }, function(err) {
            if (err[0] && err[0].extensions && err[0].extensions.category === "graphql-authorization" && user.isLoggedIn) { loggedOutHandler(); } else { console.log(`Cart Query Error: ${ JSON.stringify(err)}`); }
            setTimeout(function() { if ($minicartPanel.length) { $minicartPanel.removeClass('c-header__minicart-panel--loader'); } }, 500);
        });
    }

    function getFavorites() {
        graphQueryRequest("POST", { query: cleanGraphQuery(`query{
            favoriteItems {
                id
                type
                url
              }
        }
        `) }, true, function({ data }) {
            if (data.favoriteItems) {
                for (let i = 0; i < data.favoriteItems.length; ++i) {
                    if (data.favoriteItems[i].url === window.location.origin + window.location.pathname) {
                        $(".js-favorite, .js-favorite-item").each(function() {
                            $(this).data("favid", data.favoriteItems[i].id);
                            $(this).text(messaging.favorites.remove);
                        })
                    }
                }
            }
        }, function(err) { if (err[0] && err[0].extensions && err[0].extensions.category === "graphql-authorization" && user.isLoggedIn) { loggedOutHandler(); } else { console.log(`Favorites Error: ${ JSON.stringify(err)}`); } }, function() { enableFavoritesAction(); });
    }

    function addToFavorites(storeId, type, imageUrl, title, desc, url) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation{
          addItemToFavorites(
            favoriteItem: {
              store_id: ${ storeId }
              type: ${ type }
              image: "${ imageUrl }"
              title: "${ title.trim().replace(/\n/g,"").replace(/\t/g,"")}"
              description: "${ desc.trim().replace(/\n/g,"").replace(/\t/g,"")}"
              url: "${ url }"
            }
          ) {
            id
            message
          }
        }
        `) }, true, function({ data }) {
            displayMessage("success", messaging.favorites.addSuccess.replace("$title", messaging.favorites.title));
            messaging.favorites.link.data("favid", data.addItemToFavorites.id);
            messaging.favorites.link.text(messaging.favorites.remove);
            console.log(`Add to favorites success: ${ JSON.stringify(data)}`);
        }, function(err) {
            displayMessage("error", messaging.favorites.addError.replace("$title", messaging.favorites.title));
            console.log(`Add to favorites error: ${ JSON.stringify(err)}`);
        }, function() { enableFavoritesAction(); });
    }

    function removeFromFavorites(favId) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation{
          removeItemFromFavorites(
            favoriteItemId: ${ favId }
          ) {
            message
          }
        }
        `) }, true, function(data) {
            displayMessage("success", messaging.favorites.removeSuccess.replace("$title", messaging.favorites.title));
            messaging.favorites.link.text(messaging.favorites.add);
            console.log(`Remove From favorites success: ${ JSON.stringify(data)}`);
        }, function(err) {
            displayMessage("error", messaging.favorites.removeError.replace("$title", messaging.favorites.title));
            console.log(`Remove from to favorites error: ${ JSON.stringify(err)}`);
        }, function() { enableFavoritesAction(); });
    }

    function getWishlist() { graphQueryRequest("GET", { query: cleanGraphQuery(`query{
          customer {
            wishlist {
              id
              items {
                id
                qty
                product {
                  sku
                }
              }
            }
          }
        }
        `) }, true, function({ data }) { if (data.customer && data.customer.wishlist) { processWishlist(data.customer.wishlist); } }, function(err) { if (err[0] && err[0].extensions && err[0].extensions.category === "graphql-authorization" && user.isLoggedIn) { loggedOutHandler(); } else { console.log(`Wishlist Error: ${ JSON.stringify(err)}`); } }); }

    function addToWishlist(wishId, sku, quantity, selector, addedClass) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          addProductsToWishlist(wishlistId: ${ wishId }, wishlistItems: {
            sku: "${ sku }"
            quantity: ${ quantity }
          }) {
            wishlist {
              id
              items {
                id
                qty
                product {
                  sku
                }
              }
            }
            userInputErrors {
              code
              message
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.addProductsToWishlist && data.addProductsToWishlist.userInputErrors && data.addProductsToWishlist.userInputErrors.length > 0) {
                selector.removeClass(addedClass);
                displayMessage("error", messaging.wishlist.addError.replace("$product", messaging.wishlist.product));
            } else if (data.addProductsToWishlist && data.addProductsToWishlist.wishlist) {
                displayMessage("success", messaging.wishlist.addSuccess.replace("$product", messaging.wishlist.product));
                trackAddToWishlist();
                processWishlist(data.addProductsToWishlist.wishlist);
            }
        }, function(err) {
            selector.removeClass(addedClass);
            displayMessage("error", messaging.wishlist.addError.replace("$product", messaging.wishlist.product));
            console.log(`Add to wishlist error: ${ JSON.stringify(err)}`);
        });
    }

    function trackAddToWishlist() { if (dataLayer && dataLayer.push) { dataLayer.push({ "event": "addToFavorites", "products": [messaging.wishlist.trackAdd] }); } }

    function removeFromWishlist(wishId, itemId, selector, addedClass) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          removeProductsFromWishlist(wishlistId: ${ wishId }, wishlistItemsIds:${ itemId }) {
            wishlist {
              id
              items {
                id
                qty
                product {
                  sku
                }
              }
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.removeProductsFromWishlist && data.removeProductsFromWishlist.wishlist) {
                displayMessage("success", messaging.wishlist.removeSuccess.replace("$product", messaging.wishlist.product));
                processWishlist(data.removeProductsFromWishlist.wishlist);
            }
        }, function(err) {
            $(selector).addClass(addedClass);
            displayMessage("error", messaging.wishlist.removeError.replace("$product", messaging.wishlist.product));
            console.log(`Remove from favorites error: ${ JSON.stringify(err)}`);
        });
    }

    function processWishlist(wishlist) {
        user.wishlist.id = wishlist.id;
        let items = wishlist.items;
        user.wishlist.items = {};
        items.forEach(function(item) { user.wishlist.items[item.product.sku] = { id: item.id, qty: item.qty }; });
        if (items.length > 0) {
            $(".m-product-card__sku").each(function() {
                let sku = $(this).text().slice(5);
                let productCard = $(this).parents(".m-product-card");
                if (user.wishlist.items[sku]) {
                    $(".js-wishlist-icon", productCard).addClass("a-wishlist--added");
                    $(".js-wishlist-icon", productCard).data("wishid", user.wishlist.items[sku].id);
                    $(".m-product-card__qty", productCard).val(user.wishlist.items[sku].qty);
                } else { $(".js-wishlist-icon", productCard).removeClass("a-wishlist--added"); }
            });
            $(".m-product-overview__sku").each(function() {
                let sku = $(this).text().slice(5);
                let productOverview = $(this).parents(".c-product-overview");
                if (user.wishlist.items[sku]) {
                    if ($(".js-wishlist-icon", productOverview).length > 0) {
                        $(".js-wishlist-icon", productOverview).addClass("a-wishlist--added");
                        $(".js-wishlist-icon", productOverview).data("wishid", user.wishlist.items[sku].id);
                    } else {
                        $(".js-wholesale-add-to-wishlist", productOverview).addClass("m-wholesale-actions__add-to-wishlist--added");
                        $(".js-wholesale-add-to-wishlist", productOverview).data("wishid", user.wishlist.items[sku].id);
                    }
                    $(".m-product-overview__qty", productOverview).val(user.wishlist.items[sku].qty);
                } else {
                    $(".js-wishlist-icon", productOverview).removeClass("a-wishlist--added");
                    $(".js-wholesale-add-to-wishlist", productOverview).removeClass("m-wholesale-actions__add-to-wishlist--added");
                }
            });
        } else {
            $(".js-wishlist-icon").removeClass("a-wishlist--added");
            $(".js-wholesale-add-to-wishlist").removeClass("m-wholesale-actions__add-to-wishlist--added");
        }
    }

    function getSavedCartsB2B() {
        let $minicartPanel = $('.c-header__minicart-panel');
        if ($minicartPanel.length) { $minicartPanel.addClass('c-header__minicart-panel--loader'); }
        graphQueryRequest("GET", { query: cleanGraphQuery(`query {
          requisitionLists {
            lists {
              id
              items {
                id
                added_at
                qty
                product {
                  sku
                  name
                }
              }
              items_count
              name
              description
              updated_at
            }
            total
            my_total_draft
            my_total_approved
          }
        }
        `) }, true, function({ data }) {
            if (data.requisitionLists) {
                user.carts = data.requisitionLists.lists;
                user.cartTotal = data.requisitionLists.total;
                user.cartTotalDraft = data.requisitionLists.my_total_draft;
                user.cartTotalApproved = data.requisitionLists.my_total_approved;
                populateB2BSavedCartsModal();
                populateMiniCart();
            }
            setTimeout(function() { if ($minicartPanel.length) { $minicartPanel.removeClass('c-header__minicart-panel--loader'); } }, 500);
        }, function(err) {
            if (err[0] && err[0].extensions && err[0].extensions.category === "graphql-authorization" && user.isLoggedIn) { loggedOutHandler(); } else { console.log(`Saved Carts Query Error: ${ JSON.stringify(err)}`); }
            setTimeout(function() { if ($minicartPanel.length) { $minicartPanel.removeClass('c-header__minicart-panel--loader'); } }, 500);
        });
    }

    function populateB2BSavedCartsModal() {
        if (modals["addToCart"]) {
            let radioButton = $(`<div class="m-radio-button">
        <input type="radio" id="" class="m-radio-button__input" name="radioGroupName" value="">
        <label for="">
          <span class="m-radio-button__circle"></span>
          <span class="m-radio-button__text-label"></span>
        </label>
      </div>`);
            let modalBody = $(".m-modal__body", modals["addToCart"].modalContainer);
            let modalContainer = modals["addToCart"].modalContainer;
            $(modalContainer).removeClass('m-modal__content--loading');
            modalBody.html("");
            for (let i = 0; i < user.carts.length; ++i) {
                let radioCopy = radioButton.clone();
                $("input", radioCopy).val(user.carts[i].id);
                $("input", radioCopy).prop("id", "cart-item-" + i);
                $("label", radioCopy).prop("for", "cart-item-" + i);
                $(".m-radio-button__text-label", radioCopy).text(user.carts[i].name);
                if (storedCartId && storedCartId === user.carts[i].id) { $("input", radioCopy).prop("checked", true); } else { $("input", radioCopy).prop("checked", false); }
                modalBody.append(radioCopy);
            }
            if ($("input:checked", modalBody).length === 0 && storedCartId) {
                storedCartId = false;
                localStorage.removeItem("maskedQuoteId")
            }
            $(".js-modal-confirm button", modalContainer).off("click", handleCartSelect);
            $(".js-modal-confirm button", modalContainer).on("click", handleCartSelect);
            $(".js-modal-form-collapsible .m-modal__form button", modalContainer).off("click", handleNewCart);
            $(".js-modal-form-collapsible .m-modal__form button", modalContainer).on("click", handleNewCart);
        }
    }

    function handleCartSelect() {
        if (modals["addToCart"]) {
            let modalContainer = modals["addToCart"].modalContainer;
            let selectedCart = $("input:checked", modalContainer);
            if (selectedCart && selectedCart.length > 0) {
                setDefaultSavedCart(selectedCart.val());
                storedCartId = selectedCart.val();
                localStorage.setItem("maskedQuoteId", storedCartId);
                if (modals["addToCart"].addProduct) { messaging.cart.addSuccess.btn.trigger("click"); }
            } else { displayMessage("error", messaging.cart.cartSelectMissingError); }
        }
    }

    function handleNewCart() { if (modals["addToCart"]) { let modalContainer = modals["addToCart"].modalContainer; let cartName = $(".js-modal-form-collapsible input", modalContainer); if (cartName && cartName.val() !== "") { createNewCart(cartName.val(), ""); } else { displayMessage("error", messaging.cart.cartNameMissingError); } } }

    function addToCartB2C(cartId, cartItems, retry) {
        messaging.cart.addSuccess.btn.prop("disabled", true);
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          addSimpleProductsToCart(
            input: {
              cart_id: "${ cartId }"
              cart_items: [
                ${ cartItems }
              ]
            }
          ) {
            cart {
              items {
                id
                acquia_code
                product {
                  name
                  sku
                  acquia_dam_image_mobile
                  acquia_url
                  brand
                  price_range {
                    maximum_price {
                      regular_price {
                        value
                        currency
                      }
                      final_price {
                        value
                        currency
                      }
                    }
                  }
                  price_tiers {
                    final_price {
                      value
                      currency
                    }
                    quantity
                  }
                }
                quantity
              }
              prices {
                grand_total {
                  value
                  currency
                }
              }
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.addSimpleProductsToCart && data.addSimpleProductsToCart.cart) {
                user.carts = [data.addSimpleProductsToCart.cart];
                if (data.addSimpleProductsToCart.cart.prices && data.addSimpleProductsToCart.cart.prices.grand_total) { user.cartTotal = data.addSimpleProductsToCart.cart.prices.grand_total.value; }
                populateMiniCart();
            }
            displayMessage("success", messaging.cart.addSuccess.message.replace("$productName", messaging.cart.addSuccess.product));
            trackAddToCart();
        }, function(err) {
            if (!retry && err[0] && err[0].extensions && err[0].extensions.category && err[0].extensions.category === "graphql-no-such-entity") { initSession(function() { addToCartB2C(storedCartId, cartItems, true); }); } else if (err[0] && err[0].extensions && err[0].extensions.category && err[0].extensions.category === "graphql-input") { displayMessage("error", err[0].message); } else {
                displayMessage("error", messaging.cart.addError);
                console.log(`Add to cart error: ${ JSON.stringify(err)}`);
            }
        }, function() { enableAddToCartAction(); });
    }

    function addItemsToCartB2C(cartId, items) {
        let cartItems = "";
        const frontierCode = $("body").data("frontier-code");
        for (let i = 0; i < items.length; ++i) { cartItems += `{
        data: {
          quantity: ${ items[i].quantity }
          sku: "${ items[i].sku }"
          acquia_code: "${ frontierCode }"
        }
      }`; if (i < items.length - 1) { cartItems += ","; } }
        addToCartB2C(cartId, cartItems);
    }

    function addToCartB2B(reqId, quantity, sku) {
        messaging.cart.addSuccess.btn.prop("disabled", true);
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          addProductToRequisitionList(
            requisitionListId: ${ reqId }
            requisitionListItems: {
              sku: "${ sku }"
              quantity: ${ quantity }
            }
          ) {
            id
            items {
              id
              qty
              added_at
              product {
                sku
              }
            }
            items_count
            name
            description
            updated_at
          }
        }
        `) }, true, function(data) {
            getSavedCartsB2B();
            displayMessage("success", messaging.cart.addSuccess.message.replace("$productName", messaging.cart.addSuccess.product));
            trackAddToCart();
        }, function(err) {
            displayMessage("error", messaging.cart.addError);
            console.log(`Add to req list error: ${ JSON.stringify(err)}`);
        }, function() { enableAddToCartAction(); if (modals["addToCart"]) { modals["addToCart"].addProduct = false; } });
    }

    function trackAddToCart() { if (dataLayer && dataLayer.push) { dataLayer.push({ 'event': 'addToCart', 'ecommerce': { 'currencyCode': 'USD', 'add': { 'products': messaging.cart.addSuccess.analytics } } }); } }

    function removeFromCart(cartId, itemId) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          removeItemFromCart(
            input: {
              cart_id: "${ cartId }",
              cart_item_id: ${ itemId }
            }
          ) {
            cart {
              items {
                id
                acquia_code
                product {
                  name
                  sku
                  acquia_dam_image_mobile
                  acquia_url
                  brand
                  price_range {
                    maximum_price {
                      regular_price {
                        value
                        currency
                      }
                      final_price {
                        value
                        currency
                      }
                    }
                  }
                  price_tiers {
                    final_price {
                      value
                      currency
                    }
                    quantity
                  }
                }
                quantity
              }
              prices {
                grand_total {
                  value
                  currency
                }
              }
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.removeItemFromCart && data.removeItemFromCart.cart) {
                user.carts = [data.removeItemFromCart.cart];
                if (data.removeItemFromCart.cart.prices && data.removeItemFromCart.cart.prices.grand_total) { user.cartTotal = data.removeItemFromCart.cart.prices.grand_total.value; }
                populateMiniCart();
                trackRemoveItem();
            }
        }, function(err) { console.log(`Remove from cart error: ${ JSON.stringify(err)}`); });
    }

    function trackRemoveItem() { if (dataLayer && dataLayer.push) { dataLayer.push({ 'event': 'removeFromCart', 'ecommerce': { 'remove': { 'products': [messaging.minicart.trackRemove] } } }); } }

    function setDefaultSavedCart(reqId) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation{
          setDefaultRequisitionList(
            requisitionListId: ${ reqId }
          ) {
            id
            items {
              id
              qty
              added_at
              product {
                sku
              }
            }
            items_count
            name
            description
            updated_at
          }
        }
        `) }, true, function(data) {
            if (modals["addToCart"] && !modals["addToCart"].addProduct) {
                populateMiniCart();
                displayMessage("success", messaging.cart.changeSuccess);
            }
        }, function(err) {
            if (modals["addToCart"] && !modals["addToCart"].addProduct) { displayMessage("error", messaging.cart.changeError); }
            console.log(`Set default cart error: ${ JSON.stringify(err)}`);
        });
    }

    function createNewCart(cartName, cartDesc) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation{
          createNewRequisitionList(
            name : "${ cartName }"
            description: "${ cartDesc }"
          ) {
            id
            items {
              id
              qty
              added_at
              product {
                sku
              }
            }
            items_count
            name
            description
            updated_at
          }
        }
        `) }, true, function({ data }) {
            if (data.createNewRequisitionList) {
                storedCartId = data.createNewRequisitionList.id;
                localStorage.setItem("maskedQuoteId", storedCartId);
                getSavedCartsB2B();
                modals["addToCart"].closeModal();
                if (!modals["addToCart"].addProduct) { displayMessage("success", messaging.cart.changeSuccess); } else { messaging.cart.addSuccess.btn.trigger("click"); }
            }
        }, function(err) {
            if (modals["addToCart"] && !modals["addToCart"].addProduct) { displayMessage("error", messaging.cart.changeError); }
            console.log(`Create new cart error: ${ JSON.stringify(err)}`);
        });
    }

    function getShelves() {
        graphQueryRequest("GET", { query: cleanGraphQuery(`query {
          shelves {
            id
            name
            items {
              id
              qty
              product {
                sku
              }
            }
          }
        }
        `) }, true, function({ data }) {
            if (data.shelves) {
                user.shelves = data.shelves;
                populateB2BShelvesModal();
            }
        }, function(err) { if (err[0] && err[0].extensions && err[0].extensions.category === "graphql-authorization" && user.isLoggedIn) { loggedOutHandler(); } else { console.log(`Shelves Query Error: ${ JSON.stringify(err)}`); } });
    }

    function populateB2BShelvesModal() {
        if (modals["addToShelf"]) {
            let radioButton = $(`<div class="m-radio-button">
        <input type="radio" id="" class="m-radio-button__input" name="radioGroupName" value="">
        <label for="">
          <span class="m-radio-button__circle"></span>
          <span class="m-radio-button__text-label"></span>
        </label>
      </div>`);
            let modalBody = $(".m-modal__body", modals["addToShelf"].modalContainer);
            let modalContainer = modals["addToShelf"].modalContainer;
            modalBody.html("");
            for (let i = 0; i < user.shelves.length; ++i) {
                let radioCopy = radioButton.clone();
                $("input", radioCopy).val(user.shelves[i].id);
                $("input", radioCopy).prop("id", "shelves-" + i);
                $("label", radioCopy).prop("for", "shelves-" + i);
                $(".m-radio-button__text-label", radioCopy).text(user.shelves[i].name);
                modalBody.append(radioCopy);
            }
            $(".m-modal__cta button", modalContainer).off("click", handleShelfSelect);
            $(".m-modal__cta button", modalContainer).on("click", handleShelfSelect);
        }
    }

    function handleShelfSelect() {
        let modalContainer = modals["addToShelf"].modalContainer;
        let selectedShelf = $("input:checked", modalContainer);
        if (selectedShelf) {
            let shelfId = selectedShelf.val();
            let productQuantity = $(".c-product-overview .m-product-overview__qty").val();
            let productSku = $(".c-product-overview .m-product-overview__sku").text().slice(5);
            messaging.pdp.shelves.product = $(".c-product-overview .m-combined-product-name .a-product-name").text().trim();
            messaging.pdp.shelves.shelf = $(".m-radio-button__text-label", selectedShelf.parent()).text();
            addToShelf(shelfId, productSku, productQuantity);
        }
    }

    function addToShelf(shelfId, sku, quantity) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          addProductsToShelf(shelfId: ${ shelfId }, shelfItems: {
            sku: "${ sku }"
            quantity: ${ quantity }
          }) {
            shelf {
              id
              items {
                id
                qty
                product {
                  sku
                }
              }
            }
          }
        }
        `) }, true, function({ data }) { if (data.addProductsToShelf && data.addProductsToShelf.shelf) { displayMessage("success", messaging.pdp.shelves.addSuccess.replace("$product", messaging.pdp.shelves.product).replace("$shelf", messaging.pdp.shelves.shelf)); } }, function(err) {
            if (messaging.pdp.shelves.product && messaging.pdp.shelves.shelf) { displayMessage("error", messaging.pdp.shelves.addError.replace("$product", messaging.pdp.shelves.product).replace("$shelf", messaging.pdp.shelves.shelf)); } else { displayMessage("error", messaging.pdp.shelves.addErrorSelectShelf); }
            console.log(`Add to shelf error: ${ JSON.stringify(err)}`);
        });
    }

    function getProductPricesBySku() {
        const isArray = Object.keys(user.priceLookup.skus).length > 1;
        let skus = Object.keys(user.priceLookup.skus).reduce(function(acc, val) { acc.push(`"${ val }"`); return acc; }, []).join(",");
        if (Object.keys(user.priceLookup.skus).length > 1) { skus = `[ ${ skus } ]`; }
        graphQueryRequest("POST", { query: cleanGraphQuery(`query {
          products(filter: {sku: {${ isArray?"in":"eq"}: ${ skus }} }, pageSize: 100) {
            items {
              sku
              price_range {
                maximum_price {
                  regular_price {
                    value
                    currency
                  }
                  final_price {
                    value
                    currency
                  }
                }
              }
              price_tiers {
                final_price {
                  value
                  currency
                }
                quantity
              }
            }
          }
        }
        `) }, true, function({ data }) { if (data.products && data.products.items) { updatePrices(data.products.items); } }, function(err) { console.log(`Product prices error: ${ JSON.stringify(err)}`); });
    }

    function newsletterSignup(email, listid) {
        graphQueryRequest("POST", { query: cleanGraphQuery(`mutation {
          subscribeEmailToNewsletter(
            email: "${ email }",
            listIds : [
              "${ listid }"
            ]) {
            listIds
          }
        }
        `) }, true, function({ data }) { if (data.subscribeEmailToNewsletter && data.subscribeEmailToNewsletter.listIds) { displayMessage("success", messaging.newsletter.success.replace("$email", messaging.newsletter.email)); } }, function(err) {
            displayMessage("error", messaging.newsletter.error.replace("$email", messaging.newsletter.email));
            console.log(`Newsletter signup error: ${ JSON.stringify(err)}`);
        }, function() { enableNewsletterAction(); });
    }

    function updatePrices(products) {
        for (let i = 0; i < products.length; ++i) {
            if (user.priceLookup.skus[products[i].sku]) {
                let regularPrice = products[i].price_range.maximum_price.regular_price.value;
                const finalPrice = products[i].price_range.maximum_price.final_price.value;
                if (products[i].price_tiers && products[i].price_tiers.length > 0) { for (let j = 0; j < products[i].price_tiers.length; ++j) { if (products[i].price_tiers[j].quantity === 0.1) { regularPrice = products[i].price_tiers[j].final_price.value; break; } } }
                let price = "";
                if (regularPrice !== finalPrice && regularPrice > finalPrice) { price = `<span class="m-price-lockup__strikethrough">
            <span class="a-price a-price--strikethrough" role="text" aria-label="Was $${ regularPrice.toFixed(2)}">$${ regularPrice.toFixed(2)}</span>
          </span>
          <span class="m-price-lockup__price">
            <span class="a-price a-price--special" role="text" aria-label="Now $${ finalPrice.toFixed(2)}">$${ finalPrice.toFixed(2)}</span>
          </span>` } else { price = `<span class="m-price-lockup__price">
            <span class="a-price">$${ finalPrice.toFixed(2)}</span>
          </span>` }
                let skus = user.priceLookup.skus[products[i].sku];
                if (Array.isArray(skus)) { for (let i = 0; i < skus.length; ++i) { skus[i].html(price); } } else { skus.html(price); }
            }
        }
        enableAddToCartAction();
        hideCTAForProductsWithoutPrices();
    }

    function hideCTAForProductsWithoutPrices() {
        $('.m-price-lockup').each(function() {
            if (!$(this).find('.m-price-lockup__price').length) {
                $productContent = $(this).closest('.c-product-overview__content');
                $productContent.find(".m-product-overview__add-to-cart").remove();
                $productContent.find(".m-wholesale-actions").remove();
                $productContent.find(".m-product-overview__discontinued").text("Discontinued Item");
            }
        });
    }

    function handleFavorites(selector, storeId, type, img, title, desc, url) { disableFavoritesAction(); if (selector.text().trim() === messaging.favorites.add) { addToFavorites(storeId, type, img, title, desc, url); } else { removeFromFavorites(selector.data("favid")); } }

    function handleWishlist(selector, addedClass, sku, quantity, wishlistId, itemId) {
        if (selector.hasClass(addedClass)) {
            selector.removeClass(addedClass);
            removeFromWishlist(wishlistId, itemId, selector, addedClass);
        } else {
            if (quantity === "") {
                selector.removeClass(addedClass);
                displayMessage("error", messaging.cart.qtyMissingError);
            } else if (quantity > 0 && quantity < 10000) {
                selector.addClass(addedClass);
                addToWishlist(wishlistId, sku, quantity, selector, addedClass);
            } else {
                selector.removeClass(addedClass);
                displayMessage("error", messaging.cart.qtyInvalidError);
            }
        }
    }

    function handleNewsletterSignup() {
        const email = $(".m-newsletter-signup__input").val();
        if (email !== "") {
            $(".m-newsletter-signup__input").removeClass('m-newsletter-signup__input--error');
            $("#newsletter-error").remove();
            messaging.newsletter.button = $(this);
            messaging.newsletter.email = email;
            let listId = "";
            let list;
            if (FrontierConfigs.type === "B2B") { list = FrontierConfigs.newsletter.ids.b2b; } else { list = FrontierConfigs.newsletter.ids.b2c; }
            const keys = Object.keys(list);
            const brand = $("body").data("frontier-brand");
            for (let i = 0; i < keys.length; ++i) { if (keys[i] === brand) { listId = list[keys[i]]; break; } }
            if (listId !== "") {
                disableNewsletterAction();
                newsletterSignup(email, listId);
            }
        } else if (!$("#newsletter-error").length) { $(".m-newsletter-signup__input").addClass('m-newsletter-signup__input--error').after('<div class="m-newsletter-signup__error" id="newsletter-error">' + messaging.newsletter.errorEmptyEmail + '</div>'); }
    }

    function apiRequest(url, method, data, withStoreHeader, xhrFields, successCallback, errorCallback, doneCallback) { $.ajax({ url: url, method: method, dataType: "json", headers: withStoreHeader ? { Store: storeHeader } : {}, crossDomain: true, xhrFields: xhrFields ? { withCredentials: true } : {}, data: (typeof data === "object" && Object.keys(data).length > 0 && method === "POST") ? JSON.stringify(data) : data, contentType: typeof data === "undefined" || (typeof data === "object" && Object.keys(data).length === 0) ? "" : "application/json", success: successCallback, error: errorCallback, }).done(doneCallback); }

    function graphQueryRequest(method, data, xhrFields, successCallback, errorCallback, doneCallback) { apiRequest(`${storeEndpoint}/graphql`, method, data, true, xhrFields, function(data) { if (data.errors && errorCallback) { errorCallback(data.errors); } else if (successCallback) { successCallback(data); } }, errorCallback, doneCallback); }

    function cleanGraphQuery(query) { return query.replace(/[ ]{2,}(?=("[^"]*"|[^"])*$)/g, "").replace(/(\r\n|\n|\r)/g, " "); }

    function displayMessage(style, text) {
        const extraMessageStyles = "position:fixed;left:0;right:0;top:0;margin-top:-200px;z-index:999999;";
        const message = $(`<div class="a-message a-message--${ style }" style="${ extraMessageStyles }">${ text }</div>`);
        $('body').prepend(message);
        message.animate({ marginTop: 0 }, 500, function() { setTimeout(function() { message.animate({ marginTop: "-200px" }, 500, function() { message.remove(); }); }, 3000); });
    }

    function populateMiniCart() {
        let cart;
        if (storeEndpoint !== FrontierConfigs.paths.b2b) { if (user.carts[0]) { cart = user.carts[0]; } }
        const minicart = $(".m-minicart");
        minicart.html("");
        if ((storeEndpoint === FrontierConfigs.paths.b2b && user.isLoggedIn && (user.cartTotal > 0 || user.carts.length > 0)) || (storeEndpoint !== FrontierConfigs.paths.b2b && cart && cart.items.length > 0)) {
            minicart.append(createMinicartSubtotal());
            let minicartContent = $("<div class='m-minicart__content'></div>");
            if (storeEndpoint !== FrontierConfigs.paths.b2b) { minicartContent.append(createMinicartProducts(cart)); }
            minicartContent.append(createMinicartActions());
            minicart.append(minicartContent);
            updateMinicartCount(cart);
        } else {
            let emptyMinicart = $("<div class='m-minicart__empty'></div>");
            let copy = $("<p></p>");
            if (storeEndpoint === FrontierConfigs.paths.b2b && !user.isLoggedIn) {
                let signinLink = `<a class='a-anchor' href='${ storeEndpoint+messaging.minicart.signin.link.url }'>${ messaging.minicart.signin.link.text }</a>`;
                copy.html(messaging.minicart.signin.message.replace("$link", signinLink));
            } else {
                copy.html(storeEndpoint === FrontierConfigs.paths.b2b ? messaging.minicart.empty.b2b : messaging.minicart.empty.b2c);
                updateMinicartCount(cart);
            }
            emptyMinicart.html(copy);
            minicart.html(emptyMinicart);
        }
    }

    function createMinicartSubtotal() { if (storeEndpoint === FrontierConfigs.paths.b2b) { return $(`<div class="m-minicart__subtotal m-minicart__subtotal--no-border">
        <div class="m-minicart__subtotal-label">${ messaging.minicart.total.b2b }</div>
        <div class="m-minicart__subtotal-amount a-paragraph--large">$${ user.cartTotal.toFixed(2)}</div>
      </div>
      <div class="m-minicart__subtotal m-minicart__subtotal--no-border">
        <div class="m-minicart__subtotal-label">${ messaging.minicart.total.b2b_my_total }</div>
        <div class="m-minicart__subtotal-amount a-paragraph--large">$${ user.cartTotalApproved.toFixed(2)}</div>
      </div>
      <div class="m-minicart__subtotal m-minicart__draft-total">
        <div class="m-minicart__subtotal-label">${ messaging.minicart.total.b2b_my_draft_total }</div>
        <div class="m-minicart__subtotal-amount a-paragraph--large">$${ user.cartTotalDraft.toFixed(2)}</div>
      </div>`); } else { return $(`<div class="m-minicart__subtotal">
        <div class="m-minicart__subtotal-label">${ messaging.minicart.total.b2c }</div>
        <div class="m-minicart__subtotal-amount a-paragraph--large">$${ user.cartTotal.toFixed(2)}</div>
      </div>`); } }

    function createMinicartProducts(cart) {
        let products = $("<div class='m-minicart__products'></div>");
        for (let i = 0; i < cart.items.length && i < 10; ++i) {
            const item = cart.items[i];
            const finalPrice = item.product.price_range.maximum_price.final_price.value;
            let regularPrice = item.product.price_range.maximum_price.regular_price.value;
            if (item.product.price_tiers && item.product.price_tiers.length > 0) { for (let j = 0; j < item.product.price_tiers.length; ++j) { if (item.product.price_tiers[j].quantity === 0.1) { regularPrice = item.product.price_tiers[j].final_price.value; break; } } }
            let price = "";
            if (finalPrice != regularPrice && regularPrice > finalPrice) { price = `<span class="m-price-lockup__strikethrough">
          <span class="a-price a-price--strikethrough" role="text" aria-label="Was $${ regularPrice.toFixed(2)}">$${ regularPrice.toFixed(2)}</span>
        </span>
        <span class="m-price-lockup__price">
          <span class="a-price a-price--special" role="text" aria-label="Now $${ finalPrice.toFixed(2)}">$${ finalPrice.toFixed(2)}</span>
        </span>`; } else { price = `<span class="m-price-lockup__price">
          <span class="a-price">$${ finalPrice.toFixed(2)}</span>
        </span>`; }
            const product = $(`<div class="m-minicart__product">
        <a class="m-minicart__img" href="${ item.product.acquia_url }">
          <img src="${ item.product.acquia_dam_image_mobile?item.product.acquia_dam_image_mobile:messaging.minicart.fallbackImg }" alt="">
        </a>

        <div class="m-minicart__info">
          <div class="m-combined-product-name">
            <a class="m-combined-product-name__link" href="${ item.product.acquia_url }">
              <span class="a-folio m-combined-product-name__folio">
                ${ item.product.brand?item.product.brand:""}
              </span>
              <span class="a-product-name m-combined-product-name__product-name">
                ${ item.product.name }
              </span>
            </a>
          </div>
          <div class="m-minicart__qty-price">
            <div class="m-minicart__qty">
              Qty: ${ item.quantity }
            </div>
            <div class="m-price-lockup">
              ${ price }
            </div>
          </div>
        </div>
        <button class="a-icon-text-btn a-icon-text-btn--icon-only m-minicart__remove-btn" data-id="${ item.id }" type="button" aria-label="Remove item from cart">
          <span class="a-icon-text-btn__icon icon-close"></span>
        </button>
      </div>`);
            product.data("product-name", item.product.name);
            product.data("product-sku", item.product.sku);
            product.data("product-price", finalPrice.toFixed(2));
            product.data("product-qty", item.quantity);
            products.append(product);
        }
        $(".m-minicart__remove-btn", products).on("click", function(e) {
            e.preventDefault();
            const minicartProduct = $(this).parents(".m-minicart__product");
            messaging.minicart.trackRemove = { 'name': $(minicartProduct).data("product-name"), 'id': $(minicartProduct).data("product-sku"), 'brand': $("body").data("frontier-brand"), 'category': "", 'price': `${ $(minicartProduct).data("product-price")}`, 'quantity': $(minicartProduct).data("product-qty") };
            removeFromCart(storedCartId, $(this).data("id"));
        });
        return products;
    }

    function createMinicartActions() {
        const cartActions = $("<div class='m-minicart__actions'></div>");
        if (storeEndpoint === FrontierConfigs.paths.b2b) {
            const url = messaging.minicart.viewBtn.url.b2b.replace("$cartid", storedCartId);
            cartActions.append(`<a class="a-btn a-btn--primary" href="${ storeEndpoint+url }">${ messaging.minicart.viewBtn.text.b2b }</a>`);
        } else {
            cartActions.append(`<a class="a-btn a-btn--primary" href="${ storeEndpoint+messaging.minicart.checkoutBtn.url }">${ messaging.minicart.checkoutBtn.message }</a>`);
            cartActions.append(`<a class="a-btn a-btn--secondary" href="${ storeEndpoint+messaging.minicart.viewBtn.url.b2c }">${ messaging.minicart.viewBtn.text.b2c }</a>`);
        }
        return cartActions;
    }



    function addToCartHandler(qty, sku) {
        if (!user.isLoggedIn && storeEndpoint === FrontierConfigs.paths.b2b) { return; }
        if (qty === "") { displayMessage("error", messaging.cart.qtyMissingError); } else if (qty > 0 && qty <= 10000) {
            if (storeEndpoint === FrontierConfigs.paths.b2b) {
                if (storedCartId) { addToCartB2B(storedCartId, qty, sku); } else {
                    if (modals["addToCart"]) {
                        modals["addToCart"].addProduct = true;
                        modals["addToCart"].openModal();
                    }
                }
            } else {
                let items = [];
                items.push({ sku: sku, quantity: qty });
                addItemsToCartB2C(storedCartId, items);
            }
        } else { displayMessage("error", messaging.cart.qtyInvalidError); }
    }

    function addWishlistListeners() {
        $(".js-wishlist-icon.m-product-overview__wishlist").on("click", function(e) {
            let sku = $(".m-product-overview__sku").text().slice(5);
            let quantity = $(".m-product-overview__qty").val();
            if ($(".m-product-overview__qty").length === 0) { quantity = 1; }
            messaging.wishlist.product = $(".c-product-overview .m-combined-product-name .a-product-name").text().trim();
            messaging.wishlist.trackAdd = { name: $(".c-product-overview").data("product-name"), id: $(".c-product-overview").data("product-sku"), brand: $(".c-product-overview").data("product-brand"), category: $(".c-product-overview").data("product-category"), price: $(".c-product-overview .m-price-lockup__price").text().trim().replace("$", "") };
            handleWishlist($(this), "a-wishlist--added", sku, quantity, user.wishlist.id, $(this).data("wishid"));
        });
        $(".js-wishlist-icon.m-product-card__wishlist").on("click", function(e) {
            let productCard = $(this).parents('.m-product-card');
            let sku = $(".m-product-card__sku", productCard).text().slice(5);
            messaging.wishlist.product = $(".a-product-name", productCard).text().trim();
            messaging.wishlist.trackAdd = { name: $(productCard).data("product-name"), id: $(productCard).data("product-sku"), brand: $(productCard).data("product-brand"), category: $(productCard).data("product-category"), price: $(".m-price-lockup__price", productCard).text().trim().replace("$", "") };
            let quantity = 1;
            handleWishlist($(this), "a-wishlist--added", sku, quantity, user.wishlist.id, $(this).data("wishid"));
        });
        $(".js-wholesale-add-to-wishlist").on("click", function(e) {
            let sku = $(".c-product-overview .m-product-overview__sku").text().slice(5);
            let quantity = $(".c-product-overview .m-product-overview__qty").val();
            if ($(".c-product-overview .m-product-overview__qty").length === 0) { quantity = 1; }
            messaging.wishlist.product = $(".c-product-overview .m-combined-product-name .a-product-name").text().trim();
            messaging.wishlist.trackAdd = { name: $(".c-product-overview").data("product-name"), id: $(".c-product-overview").data("product-sku"), brand: $(".c-product-overview").data("product-brand"), category: $(".c-product-overview").data("product-category"), price: $(".c-product-overview .m-price-lockup__price").text().trim().replace("$", "") };
            handleWishlist($(this), "m-wholesale-actions__add-to-wishlist--added", sku, quantity, user.wishlist.id, $(this).data("wishid"));
        });
    }

    function addPDPActionListeners() {
        $('[data-modal-id="addToCart"]').on("click", function(e) {
            e.preventDefault();
            if (modals["addToCart"] && user.isLoggedIn) {
                modals["addToCart"].addProduct = false;
                modals["addToCart"].openModal();
            }
        });
        $('[data-modal-id="addToShelf"]').on("click", function(e) { e.preventDefault(); if (modals["addToShelf"] && user.isLoggedIn) { modals["addToShelf"].openModal(); } });
    }

    function addAddToCartListeners() {
        $(".m-product-overview__add-to-cart-btn").click(function(e) {
            let site = FrontierConfigs.domain;
            if (site == 'plantboss') { return true; }
            e.preventDefault();
            let productQuantity = $(".m-product-overview__qty").val();
            let productSku = $(".m-product-overview__sku").text().slice(5);
            messaging.cart.addSuccess.product = $(".c-product-overview .a-product-name").text().trim();
            messaging.cart.addSuccess.btn = $(".m-product-overview__add-to-cart-btn");
            messaging.cart.addSuccess.analytics = [];
            messaging.cart.addSuccess.analytics.push({ 'name': $(".c-product-overview").data("product-name"), 'id': $(".c-product-overview").data("product-sku"), 'brand': $(".c-product-overview").data("product-brand"), 'category': $(".c-product-overview").data("product-category"), 'price': $(".m-product-overview__price-wrapper .m-price-lockup__price").text().trim().replace("$", ""), 'quantity': productQuantity });
            addToCartHandler(productQuantity, productSku);
        });
        $(".m-product-card__add-to-cart button").on("click", function(e) {
            e.preventDefault();
            const productCard = $(this).parents(".m-product-card");
            let productQuantity = 0;
            if ($(".m-product-card__qty", productCard).length > 0) { productQuantity = $(".m-product-card__qty", productCard).val(); } else { productQuantity = 1; }
            let productSku = $(".m-product-card__sku", productCard).text().slice(5);
            messaging.cart.addSuccess.product = $(".a-product-name", productCard).text().trim();
            messaging.cart.addSuccess.btn = $(".m-product-card__add-to-cart-btn", productCard);
            messaging.cart.addSuccess.analytics = [];
            messaging.cart.addSuccess.analytics.push({ 'name': $(productCard).data("product-name"), 'id': $(productCard).data("product-sku"), 'brand': $(productCard).data("product-brand"), 'category': $(productCard).data("product-category"), 'price': $(".m-price-lockup__price", productCard).text().trim().replace("$", ""), 'quantity': productQuantity });
            if (modals && !modals["addToCart"] && $(plpModalSelector).length > 0) {
                modals["addToCart"] = new Modal(document.querySelector(plpModalSelector));
                populateB2BSavedCartsModal();
            }
            addToCartHandler(productQuantity, productSku);
        });
        $(".c-products-slider__add-all-btn").on("click", function(e) {
            e.preventDefault();
            const parentSlider = $(this).parents(".c-products-slider");
            const products = $(".m-combined-product-name__sku", parentSlider);
            let items = [];
            messaging.cart.addSuccess.analytics = [];
            products.each(function() {
                const miniCard = $(this).parents(".m-mini-product-card");
                items.push({ sku: $(this).text().slice(5), quantity: 1 });
                messaging.cart.addSuccess.analytics.push({ 'name': $(miniCard).data("product-name"), 'id': $(miniCard).data("product-sku"), 'brand': $(miniCard).data("product-brand"), 'category': $(miniCard).data("product-category"), 'price': $(".m-price-lockup__price", miniCard).text().trim().replace("$", ""), 'quantity': 1 });
            });
            messaging.cart.addSuccess.product = items.length + " products";
            messaging.cart.addSuccess.btn = $(this);
            addItemsToCartB2C(storedCartId, items);
        });
    }
    $(".m-newsletter-signup__submit").on("click", function(e) {
        e.preventDefault();
        handleNewsletterSignup();
    });
    $(".js-favorite, .js-favorite-item").on("click", function(e) {
        e.preventDefault();
        if (!user.isLoggedIn) { window.location = storeEndpoint + messaging.favorites.signin; return; }
        let type = $("[data-frontier-type]");
        if (type.length > 0) {
            let typeId = 0;
            type = type.data("frontier-type");
            switch (type) {
                case "recipe":
                case "recipe_categories":
                    typeId = 1;
                    break;
                case "blog":
                case "blog_categories":
                    typeId = 2;
                    break;
                case "articles":
                case "articles_category":
                    typeId = 3;
                    break;
            }
            if (typeId !== 0) {
                let img = "";
                let imgEl = $("[class*='-hero']");
                if (imgEl.length > 0) { img = $("img", imgEl.get(0)).attr("src"); } else { imgEl = $("[class*='-banner']"); if (imgEl.length > 0) { img = $("img", imgEl.get(0)).attr("src"); } }
                if (img !== "" && img.indexOf("http") !== 0) { img = window.location.origin + img; }
                let title = $("title").text().trim().split(" | ")[0];
                let desc = $("meta[name=description]").prop("content").substring(0, 200) + "...";
                let url = window.location.origin + window.location.pathname;
                messaging.favorites.link = $(this);
                messaging.favorites.title = title;
                handleFavorites($(this), 1, typeId, img, title, desc, url);
            }
        }
    });
    $(".m-product-card__img-wrapper, .m-mini-product-card").on("click", function() {
        if (dataLayer && dataLayer.push) {
            let productCard = this;
            if ($(this).hasClass("m-product-card__img-wrapper")) { productCard = $(this).parents(".m-product-card"); }
            const productName = $(productCard).data("product-name");
            const productSku = $(productCard).data("product-sku");
            const productBrand = $(productCard).data("product-brand");
            const productCategory = $(productCard).data("product-category");
            const productPrice = $(".m-price-lockup__price", productCard).text().trim().replace("$", "");
            if (productName && productSku && productBrand && productCategory) { dataLayer.push({ 'event': 'productClick', 'ecommerce': { 'click': { 'products': [{ 'name': productName, 'id': productSku, 'brand': productBrand, 'category': productCategory, 'price': productPrice }] } } }); }
        }
    });
    $(".js-minicart__trigger .icon-cart").on("click", function(e) {
        if ($(window).innerWidth() < 768) {
            e.preventDefault();
            let cartUrl = "";
            if (FrontierConfigs.type === "B2B") { cartUrl = messaging.minicart.viewBtn.url.b2b; } else { cartUrl = messaging.minicart.viewBtn.url.b2c; }
            window.location = storeEndpoint + cartUrl;
        }
    });
})(jQuery);;
(function($) {
    $(".frontier-custom-sort").on("change", function(event) {
        $dataHref = $(this).find(':selected').data("href");
        if ($dataHref) { window.location.href = $dataHref; }
        return false;
    });
})(jQuery);;
(function($, Drupal) {
    Drupal.theme.progressBar = function(id) { return '<div id="' + id + '" class="progress" aria-live="polite">' + '<div class="progress__label">&nbsp;</div>' + '<div class="progress__track"><div class="progress__bar"></div></div>' + '<div class="progress__percentage"></div>' + '<div class="progress__description">&nbsp;</div>' + '</div>'; };
    Drupal.ProgressBar = function(id, updateCallback, method, errorCallback) {
        this.id = id;
        this.method = method || 'GET';
        this.updateCallback = updateCallback;
        this.errorCallback = errorCallback;
        this.element = $(Drupal.theme('progressBar', id));
    };
    $.extend(Drupal.ProgressBar.prototype, {
        setProgress: function setProgress(percentage, message, label) {
            if (percentage >= 0 && percentage <= 100) {
                $(this.element).find('div.progress__bar').css('width', percentage + '%');
                $(this.element).find('div.progress__percentage').html(percentage + '%');
            }
            $('div.progress__description', this.element).html(message);
            $('div.progress__label', this.element).html(label);
            if (this.updateCallback) { this.updateCallback(percentage, message, this); }
        },
        startMonitoring: function startMonitoring(uri, delay) {
            this.delay = delay;
            this.uri = uri;
            this.sendPing();
        },
        stopMonitoring: function stopMonitoring() {
            clearTimeout(this.timer);
            this.uri = null;
        },
        sendPing: function sendPing() {
            if (this.timer) { clearTimeout(this.timer); }
            if (this.uri) {
                var pb = this;
                var uri = this.uri;
                if (uri.indexOf('?') === -1) { uri += '?'; } else { uri += '&'; }
                uri += '_format=json';
                $.ajax({
                    type: this.method,
                    url: uri,
                    data: '',
                    dataType: 'json',
                    success: function success(progress) {
                        if (progress.status === 0) { pb.displayError(progress.data); return; }
                        pb.setProgress(progress.percentage, progress.message, progress.label);
                        pb.timer = setTimeout(function() { pb.sendPing(); }, pb.delay);
                    },
                    error: function error(xmlhttp) {
                        var e = new Drupal.AjaxError(xmlhttp, pb.uri);
                        pb.displayError('<pre>' + e.message + '</pre>');
                    }
                });
            }
        },
        displayError: function displayError(string) {
            var error = $('<div class="messages messages--error"></div>').html(string);
            $(this.element).before(error).hide();
            if (this.errorCallback) { this.errorCallback(this); }
        }
    });
})(jQuery, Drupal);;

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }
(function($, window, Drupal, drupalSettings) {
    Drupal.behaviors.AJAX = {
        attach: function attach(context, settings) {
            function loadAjaxBehavior(base) {
                var elementSettings = settings.ajax[base];
                if (typeof elementSettings.selector === 'undefined') { elementSettings.selector = '#' + base; }
                $(elementSettings.selector).once('drupal-ajax').each(function() {
                    elementSettings.element = this;
                    elementSettings.base = base;
                    Drupal.ajax(elementSettings);
                });
            }
            Object.keys(settings.ajax || {}).forEach(function(base) { return loadAjaxBehavior(base); });
            Drupal.ajax.bindAjaxLinks(document.body);
            $('.use-ajax-submit').once('ajax').each(function() {
                var elementSettings = {};
                elementSettings.url = $(this.form).attr('action');
                elementSettings.setClick = true;
                elementSettings.event = 'click';
                elementSettings.progress = { type: 'throbber' };
                elementSettings.base = $(this).attr('id');
                elementSettings.element = this;
                Drupal.ajax(elementSettings);
            });
        },
        detach: function detach(context, settings, trigger) { if (trigger === 'unload') { Drupal.ajax.expired().forEach(function(instance) { Drupal.ajax.instances[instance.instanceIndex] = null; }); } }
    };
    Drupal.AjaxError = function(xmlhttp, uri, customMessage) {
        var statusCode = void 0;
        var statusText = void 0;
        var responseText = void 0;
        if (xmlhttp.status) { statusCode = '\n' + Drupal.t('An AJAX HTTP error occurred.') + '\n' + Drupal.t('HTTP Result Code: !status', { '!status': xmlhttp.status }); } else { statusCode = '\n' + Drupal.t('An AJAX HTTP request terminated abnormally.'); }
        statusCode += '\n' + Drupal.t('Debugging information follows.');
        var pathText = '\n' + Drupal.t('Path: !uri', { '!uri': uri });
        statusText = '';
        try { statusText = '\n' + Drupal.t('StatusText: !statusText', { '!statusText': $.trim(xmlhttp.statusText) }); } catch (e) {}
        responseText = '';
        try { responseText = '\n' + Drupal.t('ResponseText: !responseText', { '!responseText': $.trim(xmlhttp.responseText) }); } catch (e) {}
        responseText = responseText.replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi, '');
        responseText = responseText.replace(/[\n]+\s+/g, '\n');
        var readyStateText = xmlhttp.status === 0 ? '\n' + Drupal.t('ReadyState: !readyState', { '!readyState': xmlhttp.readyState }) : '';
        customMessage = customMessage ? '\n' + Drupal.t('CustomMessage: !customMessage', { '!customMessage': customMessage }) : '';
        this.message = statusCode + pathText + statusText + customMessage + responseText + readyStateText;
        this.name = 'AjaxError';
    };
    Drupal.AjaxError.prototype = new Error();
    Drupal.AjaxError.prototype.constructor = Drupal.AjaxError;
    Drupal.ajax = function(settings) {
        if (arguments.length !== 1) { throw new Error('Drupal.ajax() function must be called with one configuration object only'); }
        var base = settings.base || false;
        var element = settings.element || false;
        delete settings.base;
        delete settings.element;
        if (!settings.progress && !element) { settings.progress = false; }
        var ajax = new Drupal.Ajax(base, element, settings);
        ajax.instanceIndex = Drupal.ajax.instances.length;
        Drupal.ajax.instances.push(ajax);
        return ajax;
    };
    Drupal.ajax.instances = [];
    Drupal.ajax.expired = function() { return Drupal.ajax.instances.filter(function(instance) { return instance && instance.element !== false && !document.body.contains(instance.element); }); };
    Drupal.ajax.bindAjaxLinks = function(element) {
        $(element).find('.use-ajax').once('ajax').each(function(i, ajaxLink) {
            var $linkElement = $(ajaxLink);
            var elementSettings = { progress: { type: 'throbber' }, dialogType: $linkElement.data('dialog-type'), dialog: $linkElement.data('dialog-options'), dialogRenderer: $linkElement.data('dialog-renderer'), base: $linkElement.attr('id'), element: ajaxLink };
            var href = $linkElement.attr('href');
            if (href) {
                elementSettings.url = href;
                elementSettings.event = 'click';
            }
            Drupal.ajax(elementSettings);
        });
    };
    Drupal.Ajax = function(base, element, elementSettings) {
        var defaults = { event: element ? 'mousedown' : null, keypress: true, selector: base ? '#' + base : null, effect: 'none', speed: 'none', method: 'replaceWith', progress: { type: 'throbber', message: Drupal.t('Please wait...') }, submit: { js: true } };
        $.extend(this, defaults, elementSettings);
        this.commands = new Drupal.AjaxCommands();
        this.instanceIndex = false;
        if (this.wrapper) { this.wrapper = '#' + this.wrapper; }
        this.element = element;
        this.element_settings = elementSettings;
        this.elementSettings = elementSettings;
        if (this.element && this.element.form) { this.$form = $(this.element.form); }
        if (!this.url) { var $element = $(this.element); if ($element.is('a')) { this.url = $element.attr('href'); } else if (this.element && element.form) { this.url = this.$form.attr('action'); } }
        var originalUrl = this.url;
        this.url = this.url.replace(/\/nojs(\/|$|\?|#)/, '/ajax$1');
        if (drupalSettings.ajaxTrustedUrl[originalUrl]) { drupalSettings.ajaxTrustedUrl[this.url] = true; }
        var ajax = this;
        ajax.options = {
            url: ajax.url,
            data: ajax.submit,
            beforeSerialize: function beforeSerialize(elementSettings, options) { return ajax.beforeSerialize(elementSettings, options); },
            beforeSubmit: function beforeSubmit(formValues, elementSettings, options) { ajax.ajaxing = true; return ajax.beforeSubmit(formValues, elementSettings, options); },
            beforeSend: function beforeSend(xmlhttprequest, options) { ajax.ajaxing = true; return ajax.beforeSend(xmlhttprequest, options); },
            success: function success(response, status, xmlhttprequest) {
                if (typeof response === 'string') { response = $.parseJSON(response); }
                if (response !== null && !drupalSettings.ajaxTrustedUrl[ajax.url]) { if (xmlhttprequest.getResponseHeader('X-Drupal-Ajax-Token') !== '1') { var customMessage = Drupal.t('The response failed verification so will not be processed.'); return ajax.error(xmlhttprequest, ajax.url, customMessage); } }
                return ajax.success(response, status);
            },
            complete: function complete(xmlhttprequest, status) { ajax.ajaxing = false; if (status === 'error' || status === 'parsererror') { return ajax.error(xmlhttprequest, ajax.url); } },
            dataType: 'json',
            jsonp: false,
            type: 'POST'
        };
        if (elementSettings.dialog) { ajax.options.data.dialogOptions = elementSettings.dialog; }
        if (ajax.options.url.indexOf('?') === -1) { ajax.options.url += '?'; } else { ajax.options.url += '&'; }
        var wrapper = 'drupal_' + (elementSettings.dialogType || 'ajax');
        if (elementSettings.dialogRenderer) { wrapper += '.' + elementSettings.dialogRenderer; }
        ajax.options.url += Drupal.ajax.WRAPPER_FORMAT + '=' + wrapper;
        $(ajax.element).on(elementSettings.event, function(event) {
            if (!drupalSettings.ajaxTrustedUrl[ajax.url] && !Drupal.url.isLocal(ajax.url)) { throw new Error(Drupal.t('The callback URL is not local and not trusted: !url', { '!url': ajax.url })); }
            return ajax.eventResponse(this, event);
        });
        if (elementSettings.keypress) { $(ajax.element).on('keypress', function(event) { return ajax.keypressResponse(this, event); }); }
        if (elementSettings.prevent) { $(ajax.element).on(elementSettings.prevent, false); }
    };
    Drupal.ajax.WRAPPER_FORMAT = '_wrapper_format';
    Drupal.Ajax.AJAX_REQUEST_PARAMETER = '_drupal_ajax';
    Drupal.Ajax.prototype.execute = function() {
        if (this.ajaxing) { return; }
        try { this.beforeSerialize(this.element, this.options); return $.ajax(this.options); } catch (e) {
            this.ajaxing = false;
            window.alert('An error occurred while attempting to process ' + this.options.url + ': ' + e.message);
            return $.Deferred().reject();
        }
    };
    Drupal.Ajax.prototype.keypressResponse = function(element, event) {
        var ajax = this;
        if (event.which === 13 || event.which === 32 && element.type !== 'text' && element.type !== 'textarea' && element.type !== 'tel' && element.type !== 'number') {
            event.preventDefault();
            event.stopPropagation();
            $(element).trigger(ajax.elementSettings.event);
        }
    };
    Drupal.Ajax.prototype.eventResponse = function(element, event) {
        event.preventDefault();
        event.stopPropagation();
        var ajax = this;
        if (ajax.ajaxing) { return; }
        try {
            if (ajax.$form) {
                if (ajax.setClick) { element.form.clk = element; }
                ajax.$form.ajaxSubmit(ajax.options);
            } else {
                ajax.beforeSerialize(ajax.element, ajax.options);
                $.ajax(ajax.options);
            }
        } catch (e) {
            ajax.ajaxing = false;
            window.alert('An error occurred while attempting to process ' + ajax.options.url + ': ' + e.message);
        }
    };
    Drupal.Ajax.prototype.beforeSerialize = function(element, options) {
        if (this.$form && document.body.contains(this.$form.get(0))) {
            var settings = this.settings || drupalSettings;
            Drupal.detachBehaviors(this.$form.get(0), settings, 'serialize');
        }
        options.data[Drupal.Ajax.AJAX_REQUEST_PARAMETER] = 1;
        var pageState = drupalSettings.ajaxPageState;
        options.data['ajax_page_state[theme]'] = pageState.theme;
        options.data['ajax_page_state[theme_token]'] = pageState.theme_token;
        options.data['ajax_page_state[libraries]'] = pageState.libraries;
    };
    Drupal.Ajax.prototype.beforeSubmit = function(formValues, element, options) {};
    Drupal.Ajax.prototype.beforeSend = function(xmlhttprequest, options) {
        if (this.$form) {
            options.extraData = options.extraData || {};
            options.extraData.ajax_iframe_upload = '1';
            var v = $.fieldValue(this.element);
            if (v !== null) { options.extraData[this.element.name] = v; }
        }
        $(this.element).prop('disabled', true);
        if (!this.progress || !this.progress.type) { return; }
        var progressIndicatorMethod = 'setProgressIndicator' + this.progress.type.slice(0, 1).toUpperCase() + this.progress.type.slice(1).toLowerCase();
        if (progressIndicatorMethod in this && typeof this[progressIndicatorMethod] === 'function') { this[progressIndicatorMethod].call(this); }
    };
    Drupal.theme.ajaxProgressThrobber = function(message) { var messageMarkup = typeof message === 'string' ? Drupal.theme('ajaxProgressMessage', message) : ''; var throbber = '<div class="throbber">&nbsp;</div>'; return '<div class="ajax-progress ajax-progress-throbber">' + throbber + messageMarkup + '</div>'; };
    Drupal.theme.ajaxProgressIndicatorFullscreen = function() { return '<div class="ajax-progress ajax-progress-fullscreen">&nbsp;</div>'; };
    Drupal.theme.ajaxProgressMessage = function(message) { return '<div class="message">' + message + '</div>'; };
    Drupal.theme.ajaxProgressBar = function($element) { return $('<div class="ajax-progress ajax-progress-bar"></div>').append($element); };
    Drupal.Ajax.prototype.setProgressIndicatorBar = function() {
        var progressBar = new Drupal.ProgressBar('ajax-progress-' + this.element.id, $.noop, this.progress.method, $.noop);
        if (this.progress.message) { progressBar.setProgress(-1, this.progress.message); }
        if (this.progress.url) { progressBar.startMonitoring(this.progress.url, this.progress.interval || 1500); }
        this.progress.element = $(Drupal.theme('ajaxProgressBar', progressBar.element));
        this.progress.object = progressBar;
        $(this.element).after(this.progress.element);
    };
    Drupal.Ajax.prototype.setProgressIndicatorThrobber = function() {
        this.progress.element = $(Drupal.theme('ajaxProgressThrobber', this.progress.message));
        $(this.element).after(this.progress.element);
    };
    Drupal.Ajax.prototype.setProgressIndicatorFullscreen = function() {
        this.progress.element = $(Drupal.theme('ajaxProgressIndicatorFullscreen'));
        $('body').append(this.progress.element);
    };
    Drupal.Ajax.prototype.success = function(response, status) {
        var _this = this;
        if (this.progress.element) { $(this.progress.element).remove(); }
        if (this.progress.object) { this.progress.object.stopMonitoring(); }
        $(this.element).prop('disabled', false);
        var elementParents = $(this.element).parents('[data-drupal-selector]').addBack().toArray();
        var focusChanged = false;
        Object.keys(response || {}).forEach(function(i) { if (response[i].command && _this.commands[response[i].command]) { _this.commands[response[i].command](_this, response[i], status); if (response[i].command === 'invoke' && response[i].method === 'focus') { focusChanged = true; } } });
        if (!focusChanged && this.element && !$(this.element).data('disable-refocus')) {
            var target = false;
            for (var n = elementParents.length - 1; !target && n >= 0; n--) { target = document.querySelector('[data-drupal-selector="' + elementParents[n].getAttribute('data-drupal-selector') + '"]'); }
            if (target) { $(target).trigger('focus'); }
        }
        if (this.$form && document.body.contains(this.$form.get(0))) {
            var settings = this.settings || drupalSettings;
            Drupal.attachBehaviors(this.$form.get(0), settings);
        }
        this.settings = null;
    };
    Drupal.Ajax.prototype.getEffect = function(response) {
        var type = response.effect || this.effect;
        var speed = response.speed || this.speed;
        var effect = {};
        if (type === 'none') {
            effect.showEffect = 'show';
            effect.hideEffect = 'hide';
            effect.showSpeed = '';
        } else if (type === 'fade') {
            effect.showEffect = 'fadeIn';
            effect.hideEffect = 'fadeOut';
            effect.showSpeed = speed;
        } else {
            effect.showEffect = type + 'Toggle';
            effect.hideEffect = type + 'Toggle';
            effect.showSpeed = speed;
        }
        return effect;
    };
    Drupal.Ajax.prototype.error = function(xmlhttprequest, uri, customMessage) {
        if (this.progress.element) { $(this.progress.element).remove(); }
        if (this.progress.object) { this.progress.object.stopMonitoring(); }
        $(this.wrapper).show();
        $(this.element).prop('disabled', false);
        if (this.$form && document.body.contains(this.$form.get(0))) {
            var settings = this.settings || drupalSettings;
            Drupal.attachBehaviors(this.$form.get(0), settings);
        }
        throw new Drupal.AjaxError(xmlhttprequest, uri, customMessage);
    };
    Drupal.theme.ajaxWrapperNewContent = function($newContent, ajax, response) { return (response.effect || ajax.effect) !== 'none' && $newContent.filter(function(i) { return !($newContent[i].nodeName === '#comment' || $newContent[i].nodeName === '#text' && /^(\s|\n|\r)*$/.test($newContent[i].textContent)); }).length > 1 ? Drupal.theme('ajaxWrapperMultipleRootElements', $newContent) : $newContent; };
    Drupal.theme.ajaxWrapperMultipleRootElements = function($elements) { return $('<div></div>').append($elements); };
    Drupal.AjaxCommands = function() {};
    Drupal.AjaxCommands.prototype = {
        insert: function insert(ajax, response) {
            var $wrapper = response.selector ? $(response.selector) : $(ajax.wrapper);
            var method = response.method || ajax.method;
            var effect = ajax.getEffect(response);
            var settings = response.settings || ajax.settings || drupalSettings;
            var $newContent = $($.parseHTML(response.data, document, true));
            $newContent = Drupal.theme('ajaxWrapperNewContent', $newContent, ajax, response);
            switch (method) {
                case 'html':
                case 'replaceWith':
                case 'replaceAll':
                case 'empty':
                case 'remove':
                    Drupal.detachBehaviors($wrapper.get(0), settings);
                    break;
                default:
                    break;
            }
            $wrapper[method]($newContent);
            if (effect.showEffect !== 'show') { $newContent.hide(); }
            var $ajaxNewContent = $newContent.find('.ajax-new-content');
            if ($ajaxNewContent.length) {
                $ajaxNewContent.hide();
                $newContent.show();
                $ajaxNewContent[effect.showEffect](effect.showSpeed);
            } else if (effect.showEffect !== 'show') { $newContent[effect.showEffect](effect.showSpeed); }
            if ($newContent.parents('html').length) { $newContent.each(function(index, element) { if (element.nodeType === Node.ELEMENT_NODE) { Drupal.attachBehaviors(element, settings); } }); }
        },
        remove: function remove(ajax, response, status) {
            var settings = response.settings || ajax.settings || drupalSettings;
            $(response.selector).each(function() { Drupal.detachBehaviors(this, settings); }).remove();
        },
        changed: function changed(ajax, response, status) { var $element = $(response.selector); if (!$element.hasClass('ajax-changed')) { $element.addClass('ajax-changed'); if (response.asterisk) { $element.find(response.asterisk).append(' <abbr class="ajax-changed" title="' + Drupal.t('Changed') + '">*</abbr> '); } } },
        alert: function alert(ajax, response, status) { window.alert(response.text, response.title); },
        announce: function announce(ajax, response) { if (response.priority) { Drupal.announce(response.text, response.priority); } else { Drupal.announce(response.text); } },
        redirect: function redirect(ajax, response, status) { window.location = response.url; },
        css: function css(ajax, response, status) { $(response.selector).css(response.argument); },
        settings: function settings(ajax, response, status) {
            var ajaxSettings = drupalSettings.ajax;
            if (ajaxSettings) { Drupal.ajax.expired().forEach(function(instance) { if (instance.selector) { var selector = instance.selector.replace('#', ''); if (selector in ajaxSettings) { delete ajaxSettings[selector]; } } }); }
            if (response.merge) { $.extend(true, drupalSettings, response.settings); } else { ajax.settings = response.settings; }
        },
        data: function data(ajax, response, status) { $(response.selector).data(response.name, response.value); },
        invoke: function invoke(ajax, response, status) {
            var $element = $(response.selector);
            $element[response.method].apply($element, _toConsumableArray(response.args));
        },
        restripe: function restripe(ajax, response, status) { $(response.selector).find('> tbody > tr:visible, > tr:visible').removeClass('odd even').filter(':even').addClass('odd').end().filter(':odd').addClass('even'); },
        update_build_id: function update_build_id(ajax, response, status) { $('input[name="form_build_id"][value="' + response.old + '"]').val(response.new); },
        add_css: function add_css(ajax, response, status) { $('head').prepend(response.data); },
        message: function message(ajax, response) {
            var messages = new Drupal.Message(document.querySelector(response.messageWrapperQuerySelector));
            if (response.clearPrevious) { messages.clear(); }
            messages.add(response.message, response.messageOptions);
        }
    };
})(jQuery, window, Drupal, drupalSettings);;
(function(Drupal) { Drupal.theme.ajaxProgressBar = function($element) { return $element.addClass('ajax-progress ajax-progress-bar'); }; })(Drupal);;
(function($, Drupal) {
    Drupal.behaviors.frontiercoop = {
        attach: function(context, settings) {
            $(".frontier-custom-headersearch-tabs", context).click(function(event) {
                event.stopPropagation();
                let type = $(this).attr("data-frontier-search-custom-value");
                $(".frontier-custom-header-search-form").find("select").val(type);
                $(".frontier-custom-header-search-form").find("[type=submit]").click();
                return false;
            });
            $(".frontier-custom-search-panel-show-all", context).click(function(event) {
                event.stopPropagation();
                $(".frontier-custom-header-search-form").submit();
                return false;
            });
            $(".js-submit-icon", context).click(function(event) {
                event.preventDefault();
                $(".js-search-results").css("display", "block");
                $(".m-search-panel__trending").css("display", "none");
                $(".frontier-custom-header-search-form").find("[type=submit]").click();
                return false;
            });
            $(".js-search-close").click(function(event) {
                $(".js-header-underlay").removeClass("c-header__underlay--open");
                $(".js-search-panel").removeClass("c-header__search-panel-wrapper--open");
                return false;
            });
            $(document).ajaxSuccess(function(event, xhr, settings) {
                if (settings.extraData) {
                    if (settings.extraData.view_display_id === "block_header_search") {
                        $(".js-search-results").css("display", "block");
                        $(".m-search-panel__trending").css("display", "none");
                    }
                }
            });
            let searchInput = document.querySelector(".js-search__input");
            let searchTrends = document.querySelectorAll(".js-search-trending");
            searchTrends.forEach((trend) => {
                trend.addEventListener("click", (e) => {
                    searchInput.value = e.target.innerText;
                    $(".js-submit-input").click();
                    $(".js-search-results").css("display", "block");
                    $(".m-search-panel__trending").css("display", "none");
                });
            });
            if (searchInput) {
                let searchTimeout = 0;
                let characterTimeout = 0;
                let characterCounter = 0;
                searchInput.addEventListener("keyup", function(e) {
                    if (characterCounter > 0 && characterCounter != searchInput.value.length) {
                        clearTimeout(characterTimeout);
                        characterTimeout = setTimeout(function() { characterCounter = searchInput.value.length; }, 1000);
                    } else if (characterCounter == 0 && characterCounter == searchInput.value.length) {
                        $(".js-search-results").css("display", "none");
                        $(".m-search-panel__trending").css("display", "block");
                    } else {
                        clearTimeout(searchTimeout);
                        searchTimeout = setTimeout(function() {
                            if (searchInput.value.length > 2) {
                                $(".js-submit-input").click();
                                $(".js-search-results").css("display", "block");
                                $(".m-search-panel__trending").css("display", "none");
                            }
                        }, 1000);
                    }
                });
            }
        }
    }
})(jQuery, Drupal);;
/*!
 * jQuery Form Plugin
 * version: 4.2.2
 * Requires jQuery v1.7.2 or later
 * Project repository: https://github.com/jquery-form/form
 * Copyright 2017 Kevin Morris
 * Copyright 2006 M. Alsup
 * Dual licensed under the LGPL-2.1+ or MIT licenses
 * https://github.com/jquery-form/form#license
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 */
! function(e) { "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof module && module.exports ? module.exports = function(t, r) { return void 0 === r && (r = "undefined" != typeof window ? require("jquery") : require("jquery")(t)), e(r), r } : e(jQuery) }(function(e) {
    "use strict";

    function t(t) {
        var r = t.data;
        t.isDefaultPrevented() || (t.preventDefault(), e(t.target).closest("form").ajaxSubmit(r))
    }

    function r(t) {
        var r = t.target,
            a = e(r);
        if (!a.is("[type=submit],[type=image]")) {
            var n = a.closest("[type=submit]");
            if (0 === n.length) return;
            r = n[0]
        }
        var i = r.form;
        if (i.clk = r, "image" === r.type)
            if (void 0 !== t.offsetX) i.clk_x = t.offsetX, i.clk_y = t.offsetY;
            else if ("function" == typeof e.fn.offset) {
            var o = a.offset();
            i.clk_x = t.pageX - o.left, i.clk_y = t.pageY - o.top
        } else i.clk_x = t.pageX - r.offsetLeft, i.clk_y = t.pageY - r.offsetTop;
        setTimeout(function() { i.clk = i.clk_x = i.clk_y = null }, 100)
    }

    function a() {
        if (e.fn.ajaxSubmit.debug) {
            var t = "[jquery.form] " + Array.prototype.join.call(arguments, "");
            window.console && window.console.log ? window.console.log(t) : window.opera && window.opera.postError && window.opera.postError(t)
        }
    }
    var n = /\r?\n/g,
        i = {};
    i.fileapi = void 0 !== e('<input type="file">').get(0).files, i.formdata = void 0 !== window.FormData;
    var o = !!e.fn.prop;
    e.fn.attr2 = function() { if (!o) return this.attr.apply(this, arguments); var e = this.prop.apply(this, arguments); return e && e.jquery || "string" == typeof e ? e : this.attr.apply(this, arguments) }, e.fn.ajaxSubmit = function(t, r, n, s) {
        function u(r) {
            var a, n, i = e.param(r, t.traditional).split("&"),
                o = i.length,
                s = [];
            for (a = 0; a < o; a++) i[a] = i[a].replace(/\+/g, " "), n = i[a].split("="), s.push([decodeURIComponent(n[0]), decodeURIComponent(n[1])]);
            return s
        }

        function c(r) {
            function n(e) { var t = null; try { e.contentWindow && (t = e.contentWindow.document) } catch (e) { a("cannot get iframe.contentWindow document: " + e) } if (t) return t; try { t = e.contentDocument ? e.contentDocument : e.document } catch (r) { a("cannot get iframe.contentDocument: " + r), t = e.document } return t }

            function i() {
                function t() {
                    try {
                        var e = n(v).readyState;
                        a("state = " + e), e && "uninitialized" === e.toLowerCase() && setTimeout(t, 50)
                    } catch (e) { a("Server abort: ", e, " (", e.name, ")"), s(L), j && clearTimeout(j), j = void 0 }
                }
                var r = p.attr2("target"),
                    i = p.attr2("action"),
                    o = p.attr("enctype") || p.attr("encoding") || "multipart/form-data";
                w.setAttribute("target", m), l && !/post/i.test(l) || w.setAttribute("method", "POST"), i !== f.url && w.setAttribute("action", f.url), f.skipEncodingOverride || l && !/post/i.test(l) || p.attr({ encoding: "multipart/form-data", enctype: "multipart/form-data" }), f.timeout && (j = setTimeout(function() { T = !0, s(A) }, f.timeout));
                var u = [];
                try {
                    if (f.extraData)
                        for (var c in f.extraData) f.extraData.hasOwnProperty(c) && (e.isPlainObject(f.extraData[c]) && f.extraData[c].hasOwnProperty("name") && f.extraData[c].hasOwnProperty("value") ? u.push(e('<input type="hidden" name="' + f.extraData[c].name + '">', k).val(f.extraData[c].value).appendTo(w)[0]) : u.push(e('<input type="hidden" name="' + c + '">', k).val(f.extraData[c]).appendTo(w)[0]));
                    f.iframeTarget || h.appendTo(D), v.attachEvent ? v.attachEvent("onload", s) : v.addEventListener("load", s, !1), setTimeout(t, 15);
                    try { w.submit() } catch (e) { document.createElement("form").submit.apply(w) }
                } finally { w.setAttribute("action", i), w.setAttribute("enctype", o), r ? w.setAttribute("target", r) : p.removeAttr("target"), e(u).remove() }
            }

            function s(t) {
                if (!x.aborted && !X) {
                    if ((O = n(v)) || (a("cannot access response document"), t = L), t === A && x) return x.abort("timeout"), void S.reject(x, "timeout");
                    if (t === L && x) return x.abort("server abort"), void S.reject(x, "error", "server abort");
                    if (O && O.location.href !== f.iframeSrc || T) {
                        v.detachEvent ? v.detachEvent("onload", s) : v.removeEventListener("load", s, !1);
                        var r, i = "success";
                        try {
                            if (T) throw "timeout";
                            var o = "xml" === f.dataType || O.XMLDocument || e.isXMLDoc(O);
                            if (a("isXml=" + o), !o && window.opera && (null === O.body || !O.body.innerHTML) && --C) return a("requeing onLoad callback, DOM not available"), void setTimeout(s, 250);
                            var u = O.body ? O.body : O.documentElement;
                            x.responseText = u ? u.innerHTML : null, x.responseXML = O.XMLDocument ? O.XMLDocument : O, o && (f.dataType = "xml"), x.getResponseHeader = function(e) { return { "content-type": f.dataType }[e.toLowerCase()] }, u && (x.status = Number(u.getAttribute("status")) || x.status, x.statusText = u.getAttribute("statusText") || x.statusText);
                            var c = (f.dataType || "").toLowerCase(),
                                l = /(json|script|text)/.test(c);
                            if (l || f.textarea) {
                                var p = O.getElementsByTagName("textarea")[0];
                                if (p) x.responseText = p.value, x.status = Number(p.getAttribute("status")) || x.status, x.statusText = p.getAttribute("statusText") || x.statusText;
                                else if (l) {
                                    var m = O.getElementsByTagName("pre")[0],
                                        g = O.getElementsByTagName("body")[0];
                                    m ? x.responseText = m.textContent ? m.textContent : m.innerText : g && (x.responseText = g.textContent ? g.textContent : g.innerText)
                                }
                            } else "xml" === c && !x.responseXML && x.responseText && (x.responseXML = q(x.responseText));
                            try { M = N(x, c, f) } catch (e) { i = "parsererror", x.error = r = e || i }
                        } catch (e) { a("error caught: ", e), i = "error", x.error = r = e || i }
                        x.aborted && (a("upload aborted"), i = null), x.status && (i = x.status >= 200 && x.status < 300 || 304 === x.status ? "success" : "error"), "success" === i ? (f.success && f.success.call(f.context, M, "success", x), S.resolve(x.responseText, "success", x), d && e.event.trigger("ajaxSuccess", [x, f])) : i && (void 0 === r && (r = x.statusText), f.error && f.error.call(f.context, x, i, r), S.reject(x, "error", r), d && e.event.trigger("ajaxError", [x, f, r])), d && e.event.trigger("ajaxComplete", [x, f]), d && !--e.active && e.event.trigger("ajaxStop"), f.complete && f.complete.call(f.context, x, i), X = !0, f.timeout && clearTimeout(j), setTimeout(function() { f.iframeTarget ? h.attr("src", f.iframeSrc) : h.remove(), x.responseXML = null }, 100)
                    }
                }
            }
            var u, c, f, d, m, h, v, x, y, b, T, j, w = p[0],
                S = e.Deferred();
            if (S.abort = function(e) { x.abort(e) }, r)
                for (c = 0; c < g.length; c++) u = e(g[c]), o ? u.prop("disabled", !1) : u.removeAttr("disabled");
            (f = e.extend(!0, {}, e.ajaxSettings, t)).context = f.context || f, m = "jqFormIO" + (new Date).getTime();
            var k = w.ownerDocument,
                D = p.closest("body");
            if (f.iframeTarget ? (b = (h = e(f.iframeTarget, k)).attr2("name")) ? m = b : h.attr2("name", m) : (h = e('<iframe name="' + m + '" src="' + f.iframeSrc + '" />', k)).css({ position: "absolute", top: "-1000px", left: "-1000px" }), v = h[0], x = {
                    aborted: 0,
                    responseText: null,
                    responseXML: null,
                    status: 0,
                    statusText: "n/a",
                    getAllResponseHeaders: function() {},
                    getResponseHeader: function() {},
                    setRequestHeader: function() {},
                    abort: function(t) {
                        var r = "timeout" === t ? "timeout" : "aborted";
                        a("aborting upload... " + r), this.aborted = 1;
                        try { v.contentWindow.document.execCommand && v.contentWindow.document.execCommand("Stop") } catch (e) {}
                        h.attr("src", f.iframeSrc), x.error = r, f.error && f.error.call(f.context, x, r, t), d && e.event.trigger("ajaxError", [x, f, r]), f.complete && f.complete.call(f.context, x, r)
                    }
                }, (d = f.global) && 0 == e.active++ && e.event.trigger("ajaxStart"), d && e.event.trigger("ajaxSend", [x, f]), f.beforeSend && !1 === f.beforeSend.call(f.context, x, f)) return f.global && e.active--, S.reject(), S;
            if (x.aborted) return S.reject(), S;
            (y = w.clk) && (b = y.name) && !y.disabled && (f.extraData = f.extraData || {}, f.extraData[b] = y.value, "image" === y.type && (f.extraData[b + ".x"] = w.clk_x, f.extraData[b + ".y"] = w.clk_y));
            var A = 1,
                L = 2,
                F = e("meta[name=csrf-token]").attr("content"),
                E = e("meta[name=csrf-param]").attr("content");
            E && F && (f.extraData = f.extraData || {}, f.extraData[E] = F), f.forceSync ? i() : setTimeout(i, 10);
            var M, O, X, C = 50,
                q = e.parseXML || function(e, t) { return window.ActiveXObject ? ((t = new ActiveXObject("Microsoft.XMLDOM")).async = "false", t.loadXML(e)) : t = (new DOMParser).parseFromString(e, "text/xml"), t && t.documentElement && "parsererror" !== t.documentElement.nodeName ? t : null },
                _ = e.parseJSON || function(e) { return window.eval("(" + e + ")") },
                N = function(t, r, a) {
                    var n = t.getResponseHeader("content-type") || "",
                        i = ("xml" === r || !r) && n.indexOf("xml") >= 0,
                        o = i ? t.responseXML : t.responseText;
                    return i && "parsererror" === o.documentElement.nodeName && e.error && e.error("parsererror"), a && a.dataFilter && (o = a.dataFilter(o, r)), "string" == typeof o && (("json" === r || !r) && n.indexOf("json") >= 0 ? o = _(o) : ("script" === r || !r) && n.indexOf("javascript") >= 0 && e.globalEval(o)), o
                };
            return S
        }
        if (!this.length) return a("ajaxSubmit: skipping submit process - no element selected"), this;
        var l, f, d, p = this;
        "function" == typeof t ? t = { success: t } : "string" == typeof t || !1 === t && arguments.length > 0 ? (t = { url: t, data: r, dataType: n }, "function" == typeof s && (t.success = s)) : void 0 === t && (t = {}), l = t.method || t.type || this.attr2("method"), (d = (d = "string" == typeof(f = t.url || this.attr2("action")) ? e.trim(f) : "") || window.location.href || "") && (d = (d.match(/^([^#]+)/) || [])[1]), t = e.extend(!0, { url: d, success: e.ajaxSettings.success, type: l || e.ajaxSettings.type, iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false" : "about:blank" }, t);
        var m = {};
        if (this.trigger("form-pre-serialize", [this, t, m]), m.veto) return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"), this;
        if (t.beforeSerialize && !1 === t.beforeSerialize(this, t)) return a("ajaxSubmit: submit aborted via beforeSerialize callback"), this;
        var h = t.traditional;
        void 0 === h && (h = e.ajaxSettings.traditional);
        var v, g = [],
            x = this.formToArray(t.semantic, g, t.filtering);
        if (t.data) {
            var y = e.isFunction(t.data) ? t.data(x) : t.data;
            t.extraData = y, v = e.param(y, h)
        }
        if (t.beforeSubmit && !1 === t.beforeSubmit(x, this, t)) return a("ajaxSubmit: submit aborted via beforeSubmit callback"), this;
        if (this.trigger("form-submit-validate", [x, this, t, m]), m.veto) return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"), this;
        var b = e.param(x, h);
        v && (b = b ? b + "&" + v : v), "GET" === t.type.toUpperCase() ? (t.url += (t.url.indexOf("?") >= 0 ? "&" : "?") + b, t.data = null) : t.data = b;
        var T = [];
        if (t.resetForm && T.push(function() { p.resetForm() }), t.clearForm && T.push(function() { p.clearForm(t.includeHidden) }), !t.dataType && t.target) {
            var j = t.success || function() {};
            T.push(function(r, a, n) {
                var i = arguments,
                    o = t.replaceTarget ? "replaceWith" : "html";
                e(t.target)[o](r).each(function() { j.apply(this, i) })
            })
        } else t.success && (e.isArray(t.success) ? e.merge(T, t.success) : T.push(t.success));
        if (t.success = function(e, r, a) { for (var n = t.context || this, i = 0, o = T.length; i < o; i++) T[i].apply(n, [e, r, a || p, p]) }, t.error) {
            var w = t.error;
            t.error = function(e, r, a) {
                var n = t.context || this;
                w.apply(n, [e, r, a, p])
            }
        }
        if (t.complete) {
            var S = t.complete;
            t.complete = function(e, r) {
                var a = t.context || this;
                S.apply(a, [e, r, p])
            }
        }
        var k = e("input[type=file]:enabled", this).filter(function() { return "" !== e(this).val() }).length > 0,
            D = "multipart/form-data",
            A = p.attr("enctype") === D || p.attr("encoding") === D,
            L = i.fileapi && i.formdata;
        a("fileAPI :" + L);
        var F, E = (k || A) && !L;
        !1 !== t.iframe && (t.iframe || E) ? t.closeKeepAlive ? e.get(t.closeKeepAlive, function() { F = c(x) }) : F = c(x) : F = (k || A) && L ? function(r) {
            for (var a = new FormData, n = 0; n < r.length; n++) a.append(r[n].name, r[n].value);
            if (t.extraData) { var i = u(t.extraData); for (n = 0; n < i.length; n++) i[n] && a.append(i[n][0], i[n][1]) }
            t.data = null;
            var o = e.extend(!0, {}, e.ajaxSettings, t, { contentType: !1, processData: !1, cache: !1, type: l || "POST" });
            t.uploadProgress && (o.xhr = function() {
                var r = e.ajaxSettings.xhr();
                return r.upload && r.upload.addEventListener("progress", function(e) {
                    var r = 0,
                        a = e.loaded || e.position,
                        n = e.total;
                    e.lengthComputable && (r = Math.ceil(a / n * 100)), t.uploadProgress(e, a, n, r)
                }, !1), r
            }), o.data = null;
            var s = o.beforeSend;
            return o.beforeSend = function(e, r) { t.formData ? r.data = t.formData : r.data = a, s && s.call(this, e, r) }, e.ajax(o)
        }(x) : e.ajax(t), p.removeData("jqxhr").data("jqxhr", F);
        for (var M = 0; M < g.length; M++) g[M] = null;
        return this.trigger("form-submit-notify", [this, t]), this
    }, e.fn.ajaxForm = function(n, i, o, s) { if (("string" == typeof n || !1 === n && arguments.length > 0) && (n = { url: n, data: i, dataType: o }, "function" == typeof s && (n.success = s)), n = n || {}, n.delegation = n.delegation && e.isFunction(e.fn.on), !n.delegation && 0 === this.length) { var u = { s: this.selector, c: this.context }; return !e.isReady && u.s ? (a("DOM not ready, queuing ajaxForm"), e(function() { e(u.s, u.c).ajaxForm(n) }), this) : (a("terminating; zero elements found by selector" + (e.isReady ? "" : " (DOM not ready)")), this) } return n.delegation ? (e(document).off("submit.form-plugin", this.selector, t).off("click.form-plugin", this.selector, r).on("submit.form-plugin", this.selector, n, t).on("click.form-plugin", this.selector, n, r), this) : this.ajaxFormUnbind().on("submit.form-plugin", n, t).on("click.form-plugin", n, r) }, e.fn.ajaxFormUnbind = function() { return this.off("submit.form-plugin click.form-plugin") }, e.fn.formToArray = function(t, r, a) {
        var n = [];
        if (0 === this.length) return n;
        var o, s = this[0],
            u = this.attr("id"),
            c = t || void 0 === s.elements ? s.getElementsByTagName("*") : s.elements;
        if (c && (c = e.makeArray(c)), u && (t || /(Edge|Trident)\//.test(navigator.userAgent)) && (o = e(':input[form="' + u + '"]').get()).length && (c = (c || []).concat(o)), !c || !c.length) return n;
        e.isFunction(a) && (c = e.map(c, a));
        var l, f, d, p, m, h, v;
        for (l = 0, h = c.length; l < h; l++)
            if (m = c[l], (d = m.name) && !m.disabled)
                if (t && s.clk && "image" === m.type) s.clk === m && (n.push({ name: d, value: e(m).val(), type: m.type }), n.push({ name: d + ".x", value: s.clk_x }, { name: d + ".y", value: s.clk_y }));
                else if ((p = e.fieldValue(m, !0)) && p.constructor === Array)
            for (r && r.push(m), f = 0, v = p.length; f < v; f++) n.push({ name: d, value: p[f] });
        else if (i.fileapi && "file" === m.type) {
            r && r.push(m);
            var g = m.files;
            if (g.length)
                for (f = 0; f < g.length; f++) n.push({ name: d, value: g[f], type: m.type });
            else n.push({ name: d, value: "", type: m.type })
        } else null !== p && void 0 !== p && (r && r.push(m), n.push({ name: d, value: p, type: m.type, required: m.required }));
        if (!t && s.clk) {
            var x = e(s.clk),
                y = x[0];
            (d = y.name) && !y.disabled && "image" === y.type && (n.push({ name: d, value: x.val() }), n.push({ name: d + ".x", value: s.clk_x }, { name: d + ".y", value: s.clk_y }))
        }
        return n
    }, e.fn.formSerialize = function(t) { return e.param(this.formToArray(t)) }, e.fn.fieldSerialize = function(t) {
        var r = [];
        return this.each(function() {
            var a = this.name;
            if (a) {
                var n = e.fieldValue(this, t);
                if (n && n.constructor === Array)
                    for (var i = 0, o = n.length; i < o; i++) r.push({ name: a, value: n[i] });
                else null !== n && void 0 !== n && r.push({ name: this.name, value: n })
            }
        }), e.param(r)
    }, e.fn.fieldValue = function(t) {
        for (var r = [], a = 0, n = this.length; a < n; a++) {
            var i = this[a],
                o = e.fieldValue(i, t);
            null === o || void 0 === o || o.constructor === Array && !o.length || (o.constructor === Array ? e.merge(r, o) : r.push(o))
        }
        return r
    }, e.fieldValue = function(t, r) {
        var a = t.name,
            i = t.type,
            o = t.tagName.toLowerCase();
        if (void 0 === r && (r = !0), r && (!a || t.disabled || "reset" === i || "button" === i || ("checkbox" === i || "radio" === i) && !t.checked || ("submit" === i || "image" === i) && t.form && t.form.clk !== t || "select" === o && -1 === t.selectedIndex)) return null;
        if ("select" === o) {
            var s = t.selectedIndex;
            if (s < 0) return null;
            for (var u = [], c = t.options, l = "select-one" === i, f = l ? s + 1 : c.length, d = l ? s : 0; d < f; d++) {
                var p = c[d];
                if (p.selected && !p.disabled) {
                    var m = p.value;
                    if (m || (m = p.attributes && p.attributes.value && !p.attributes.value.specified ? p.text : p.value), l) return m;
                    u.push(m)
                }
            }
            return u
        }
        return e(t).val().replace(n, "\r\n")
    }, e.fn.clearForm = function(t) { return this.each(function() { e("input,select,textarea", this).clearFields(t) }) }, e.fn.clearFields = e.fn.clearInputs = function(t) {
        var r = /^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;
        return this.each(function() {
            var a = this.type,
                n = this.tagName.toLowerCase();
            r.test(a) || "textarea" === n ? this.value = "" : "checkbox" === a || "radio" === a ? this.checked = !1 : "select" === n ? this.selectedIndex = -1 : "file" === a ? /MSIE/.test(navigator.userAgent) ? e(this).replaceWith(e(this).clone(!0)) : e(this).val("") : t && (!0 === t && /hidden/.test(a) || "string" == typeof t && e(this).is(t)) && (this.value = "")
        })
    }, e.fn.resetForm = function() {
        return this.each(function() {
            var t = e(this),
                r = this.tagName.toLowerCase();
            switch (r) {
                case "input":
                    this.checked = this.defaultChecked;
                case "textarea":
                    return this.value = this.defaultValue, !0;
                case "option":
                case "optgroup":
                    var a = t.parents("select");
                    return a.length && a[0].multiple ? "option" === r ? this.selected = this.defaultSelected : t.find("option").resetForm() : a.resetForm(), !0;
                case "select":
                    return t.find("option").each(function(e) { if (this.selected = this.defaultSelected, this.defaultSelected && !t[0].multiple) return t[0].selectedIndex = e, !1 }), !0;
                case "label":
                    var n = e(t.attr("for")),
                        i = t.find("input,select,textarea");
                    return n[0] && i.unshift(n[0]), i.resetForm(), !0;
                case "form":
                    return ("function" == typeof this.reset || "object" == typeof this.reset && !this.reset.nodeType) && this.reset(), !0;
                default:
                    return t.find("form,input,label,select,textarea").resetForm(), !0
            }
        })
    }, e.fn.enable = function(e) { return void 0 === e && (e = !0), this.each(function() { this.disabled = !e }) }, e.fn.selected = function(t) {
        return void 0 === t && (t = !0), this.each(function() {
            var r = this.type;
            if ("checkbox" === r || "radio" === r) this.checked = t;
            else if ("option" === this.tagName.toLowerCase()) {
                var a = e(this).parent("select");
                t && a[0] && "select-one" === a[0].type && a.find("option").selected(!1), this.selected = t
            }
        })
    }, e.fn.ajaxSubmit.debug = !1
});;
(function($, Drupal, drupalSettings) {
    Drupal.Views = {};
    Drupal.Views.parseQueryString = function(query) {
        var args = {};
        var pos = query.indexOf('?');
        if (pos !== -1) { query = query.substring(pos + 1); }
        var pair = void 0;
        var pairs = query.split('&');
        for (var i = 0; i < pairs.length; i++) { pair = pairs[i].split('='); if (pair[0] !== 'q' && pair[1]) { args[decodeURIComponent(pair[0].replace(/\+/g, ' '))] = decodeURIComponent(pair[1].replace(/\+/g, ' ')); } }
        return args;
    };
    Drupal.Views.parseViewArgs = function(href, viewPath) {
        var returnObj = {};
        var path = Drupal.Views.getPath(href);
        var viewHref = Drupal.url(viewPath).substring(drupalSettings.path.baseUrl.length);
        if (viewHref && path.substring(0, viewHref.length + 1) === viewHref + '/') {
            returnObj.view_args = decodeURIComponent(path.substring(viewHref.length + 1, path.length));
            returnObj.view_path = path;
        }
        return returnObj;
    };
    Drupal.Views.pathPortion = function(href) {
        var protocol = window.location.protocol;
        if (href.substring(0, protocol.length) === protocol) { href = href.substring(href.indexOf('/', protocol.length + 2)); }
        return href;
    };
    Drupal.Views.getPath = function(href) {
        href = Drupal.Views.pathPortion(href);
        href = href.substring(drupalSettings.path.baseUrl.length, href.length);
        if (href.substring(0, 3) === '?q=') { href = href.substring(3, href.length); }
        var chars = ['#', '?', '&'];
        for (var i = 0; i < chars.length; i++) { if (href.indexOf(chars[i]) > -1) { href = href.substr(0, href.indexOf(chars[i])); } }
        return href;
    };
})(jQuery, Drupal, drupalSettings);;
(function($, Drupal, drupalSettings) {
    Drupal.behaviors.ViewsAjaxView = {};
    Drupal.behaviors.ViewsAjaxView.attach = function(context, settings) {
        if (settings && settings.views && settings.views.ajaxViews) {
            var ajaxViews = settings.views.ajaxViews;
            Object.keys(ajaxViews || {}).forEach(function(i) { Drupal.views.instances[i] = new Drupal.views.ajaxView(ajaxViews[i]); });
        }
    };
    Drupal.behaviors.ViewsAjaxView.detach = function(context, settings, trigger) {
        if (trigger === 'unload') {
            if (settings && settings.views && settings.views.ajaxViews) {
                var ajaxViews = settings.views.ajaxViews;
                Object.keys(ajaxViews || {}).forEach(function(i) {
                    var selector = '.js-view-dom-id-' + ajaxViews[i].view_dom_id;
                    if ($(selector, context).length) {
                        delete Drupal.views.instances[i];
                        delete settings.views.ajaxViews[i];
                    }
                });
            }
        }
    };
    Drupal.views = {};
    Drupal.views.instances = {};
    Drupal.views.ajaxView = function(settings) {
        var selector = '.js-view-dom-id-' + settings.view_dom_id;
        this.$view = $(selector);
        var ajaxPath = drupalSettings.views.ajax_path;
        if (ajaxPath.constructor.toString().indexOf('Array') !== -1) { ajaxPath = ajaxPath[0]; }
        var queryString = window.location.search || '';
        if (queryString !== '') { queryString = queryString.slice(1).replace(/q=[^&]+&?|&?render=[^&]+/, ''); if (queryString !== '') { queryString = (/\?/.test(ajaxPath) ? '&' : '?') + queryString; } }
        this.element_settings = { url: ajaxPath + queryString, submit: settings, setClick: true, event: 'click', selector: selector, progress: { type: 'fullscreen' } };
        this.settings = settings;
        this.$exposed_form = $('form#views-exposed-form-' + settings.view_name.replace(/_/g, '-') + '-' + settings.view_display_id.replace(/_/g, '-'));
        this.$exposed_form.once('exposed-form').each($.proxy(this.attachExposedFormAjax, this));
        this.$view.filter($.proxy(this.filterNestedViews, this)).once('ajax-pager').each($.proxy(this.attachPagerAjax, this));
        var selfSettings = $.extend({}, this.element_settings, { event: 'RefreshView', base: this.selector, element: this.$view.get(0) });
        this.refreshViewAjax = Drupal.ajax(selfSettings);
    };
    Drupal.views.ajaxView.prototype.attachExposedFormAjax = function() {
        var that = this;
        this.exposedFormAjax = [];
        $('input[type=submit], input[type=image]', this.$exposed_form).not('[data-drupal-selector=edit-reset]').each(function(index) {
            var selfSettings = $.extend({}, that.element_settings, { base: $(this).attr('id'), element: this });
            that.exposedFormAjax[index] = Drupal.ajax(selfSettings);
        });
    };
    Drupal.views.ajaxView.prototype.filterNestedViews = function() { return !this.$view.parents('.view').length; };
    Drupal.views.ajaxView.prototype.attachPagerAjax = function() { this.$view.find('ul.js-pager__items > li > a, th.views-field a, .attachment .views-summary a').each($.proxy(this.attachPagerLinkAjax, this)); };
    Drupal.views.ajaxView.prototype.attachPagerLinkAjax = function(id, link) {
        var $link = $(link);
        var viewData = {};
        var href = $link.attr('href');
        $.extend(viewData, this.settings, Drupal.Views.parseQueryString(href), Drupal.Views.parseViewArgs(href, this.settings.view_base_path));
        var selfSettings = $.extend({}, this.element_settings, { submit: viewData, base: false, element: link });
        this.pagerAjax = Drupal.ajax(selfSettings);
    };
    Drupal.AjaxCommands.prototype.viewsScrollTop = function(ajax, response) {
        var offset = $(response.selector).offset();
        var scrollTarget = response.selector;
        while ($(scrollTarget).scrollTop() === 0 && $(scrollTarget).parent()) { scrollTarget = $(scrollTarget).parent(); }
        if (offset.top - 10 < $(scrollTarget).scrollTop()) { $(scrollTarget).animate({ scrollTop: offset.top - 10 }, 500); }
    };
})(jQuery, Drupal, drupalSettings);;
(function($, Drupal) {
    'use strict';
    Drupal.behaviors.views_tree = {
        attach: function(context, settings) {
            var views_tree_settings = settings.views_tree_settings;
            for (var views_tree_settings_id in views_tree_settings) {
                var views_tree_name = views_tree_settings[views_tree_settings_id][0];
                $.each($(".view-id-" + views_tree_name + " .view-content li"), function() {
                    var count = $(this).find("li").length;
                    if (count > 0) {
                        $(this).addClass('views_tree_parent');
                        $(this).children('ul').addClass("item-list");
                        if (views_tree_settings[views_tree_settings_id][1] != "collapsed") {
                            $(this).addClass('views_tree_expanded');
                            $(this).prepend('<div class="views_tree_link views_tree_link_expanded"><a href="#">' + Drupal.t('Operation') + '</a></div>');
                        } else {
                            $(this).addClass('views_tree_collapsed');
                            $(this).prepend('<div class="views_tree_link views_tree_link_collapsed"><a href="#">' + Drupal.t('Operation') + '</a></div>');
                            $(this).children(".item-list").hide();
                        }
                    }
                });
            }
            $('.views_tree_link a', context).on('click', function(e) {
                e.preventDefault();
                if ($(this).parent().hasClass('views_tree_link_expanded')) {
                    $(this).parent().parent().children(".item-list").slideUp();
                    $(this).parent().addClass('views_tree_link_collapsed');
                    $(this).parent().removeClass('views_tree_link_expanded');
                } else {
                    $(this).parent().parent().children(".item-list").slideDown();
                    $(this).parent().addClass('views_tree_link_expanded');
                    $(this).parent().removeClass('views_tree_link_collapsed');
                }
            });
        }
    };
})(jQuery, Drupal);;