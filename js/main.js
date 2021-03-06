jQuery v3 .4 .1 | (c) JS Foundation and other contributors | jquery.org / license * /! function(e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
      if (!e.document) throw new Error("jQuery requires a window with a document");
      return t(e)
    } : t(e)
  }("undefined" != typeof window ? window : this, function(C, e) {
      "use strict";
      var t = [],
        E = C.document,
        r = Object.getPrototypeOf,
        s = t.slice,
        g = t.concat,
        u = t.push,
        i = t.indexOf,
        n = {},
        o = n.toString,
        v = n.hasOwnProperty,
        a = v.toString,
        l = a.call(Object),
        y = {},
        m = function(e) {
          return "function" == typeof e && "number" != typeof e.nodeType
        },
        x = function(e) {
          return null != e && e === e.window
        },
        c = {
          type: !0,
          src: !0,
          nonce: !0,
          noModule: !0
        };

      function b(e, t, n) {
        var r, i, o = (n = n || E).createElement("script");
        if (o.text = e, t)
          for (r in c)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
        n.head.appendChild(o).parentNode.removeChild(o)
      }

      function w(e) {
        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e
      }
      var f = "3.4.1",
        k = function(e, t) {
          return new k.fn.init(e, t)
        },
        p = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

      function d(e) {
        var t = !!e && "length" in e && e.length,
          n = w(e);
        return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
      }
      k.fn = k.prototype = {
          jquery: f,
          constructor: k,
          length: 0,
          toArray: function() {
            return s.call(this)
          },
          get: function(e) {
            return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e]
          },
          pushStack: function(e) {
            var t = k.merge(this.constructor(), e);
            return t.prevObject = this, t
          },
          each: function(e) {
            return k.each(this, e)
          },
          map: function(n) {
            return this.pushStack(k.map(this, function(e, t) {
              return n.call(e, t, e)
            }))
          },
          slice: function() {
            return this.pushStack(s.apply(this, arguments))
          },
          first: function() {
            return this.eq(0)
          },
          last: function() {
            return this.eq(-1)
          },
          eq: function(e) {
            var t = this.length,
              n = +e + (e < 0 ? t : 0);
            return this.pushStack(0 <= n && n < t ? [this[n]] : [])
          },
          end: function() {
            return this.prevObject || this.constructor()
          },
          push: u,
          sort: t.sort,
          splice: t.splice
        }, k.extend = k.fn.extend = function() {
          var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            u = arguments.length,
            l = !1;
          for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || m(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
            if (null != (e = arguments[s]))
              for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (k.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || k.isPlainObject(n) ? n : {}, i = !1, a[t] = k.extend(l, o, r)) : void 0 !== r && (a[t] = r));
          return a
        }, k.extend({
            expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(e) {
              throw new Error(e)
            },
            noop: function() {},
            isPlainObject: function(e) {
                var t, n;
                return !(!e || "[object Object]" !== o.call(e)) && (!
