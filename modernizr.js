window.Modernizr=function(d,g,x){function r(b,e){for(var g in b){var n=b[g];if(!~(""+n).indexOf("-")&&E[n]!==x)return"pfx"==e?n:!0}return!1}function B(b,e,g){var n=b.charAt(0).toUpperCase()+b.slice(1),h=(b+" "+G.join(n+" ")+n).split(" ");if("string"===typeof e||"undefined"===typeof e)e=r(h,e);else a:{h=(b+" "+u.join(n+" ")+n).split(" "),b=h;for(var q in b)if(n=e[b[q]],n!==x){e=!1===g?b[q]:"function"===typeof n?n.bind(g||e):n;break a}e=!1}return e}var h={},s=g.documentElement,f=g.createElement("modernizr"),
E=f.style,H=" -webkit- -moz- -o- -ms- ".split(" "),G=["Webkit","Moz","O","ms"],u=["webkit","moz","o","ms"],f={},w=[],v=w.slice,y,C=function(b,e,h,n){var d,q,f,r,p=g.createElement("div"),a=g.body,k=a||g.createElement("body");if(parseInt(h,10))for(;h--;)f=g.createElement("div"),f.id=n?n[h]:"modernizr"+(h+1),p.appendChild(f);return d=['&#173;<style id="smodernizr">',b,"</style>"].join(""),p.id="modernizr",(a?p:k).innerHTML+=d,k.appendChild(p),a||(k.style.background="",k.style.overflow="hidden",r=s.style.overflow,
s.style.overflow="hidden",s.appendChild(k)),q=e(p,b),a?p.parentNode.removeChild(p):(k.parentNode.removeChild(k),s.style.overflow=r),!!q},z={}.hasOwnProperty,D;"undefined"===typeof z||"undefined"===typeof z.call?D=function(b,e){return e in b&&"undefined"===typeof b.constructor.prototype[e]}:D=function(b,e){return z.call(b,e)};Function.prototype.bind||(Function.prototype.bind=function(b){var e=this;if("function"!=typeof e)throw new TypeError;var g=v.call(arguments,1),h=function(){if(this instanceof
h){var d=function(){};d.prototype=e.prototype;var d=new d,q=e.apply(d,g.concat(v.call(arguments)));return Object(q)===q?q:d}return e.apply(b,g.concat(v.call(arguments)))};return h});f.touch=function(){var b;return"ontouchstart"in d||d.DocumentTouch&&g instanceof DocumentTouch?b=!0:C(["@media (",H.join("touch-enabled),("),"modernizr){#modernizr{top:9px;position:absolute}}"].join(""),function(e){b=9===e.offsetTop}),b};f.multiplebgs=function(){E.cssText="background:url(https://),url(https://),red url(https://)";
return/(url\s*\(.*?){3}/.test(E.background)};f.csstransforms=function(){return!!B("transform")};for(var F in f)D(f,F)&&(y=F.toLowerCase(),h[y]=f[F](),w.push((h[y]?"":"no-")+y));h.addTest=function(b,e){if("object"==typeof b)for(var g in b)D(b,g)&&h.addTest(g,b[g]);else{b=b.toLowerCase();if(h[b]!==x)return h;e="function"==typeof e?e():e;s.className+=" "+(e?"":"no-")+b;h[b]=e}return h};E.cssText="";return f=null,function(b,e){function g(){var l=m.elements;return"string"==typeof l?l.split(" "):l}function h(l){var c=
M[l[N]];return c||(c={},J++,l[N]=J,M[J]=c),c}function d(l,c,t){c||(c=e);if(A)return c.createElement(l);t||(t=h(c));var k;return t.cache[l]?k=t.cache[l].cloneNode():a.test(l)?k=(t.cache[l]=t.createElem(l)).cloneNode():k=t.createElem(l),!k.canHaveChildren||p.test(l)||k.tagUrn?k:t.frag.appendChild(k)}function q(l,c){c.cache||(c.cache={},c.createElem=l.createElement,c.createFrag=l.createDocumentFragment,c.frag=c.createFrag());l.createElement=function(a){return m.shivMethods?d(a,l,c):c.createElem(a)};
l.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+g().join().replace(/[\w\-]+/g,function(l){return c.createElem(l),c.frag.createElement(l),'c("'+l+'")'})+");return n}")(m,c.frag)}function f(l){l||(l=e);var c=h(l);if(m.shivCSS&&!k&&!c.hasCSS){var a,b=l;a=b.createElement("p");b=b.getElementsByTagName("head")[0]||b.documentElement;a=(a.innerHTML="x<style>article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}</style>",
b.insertBefore(a.lastChild,b.firstChild));c.hasCSS=!!a}return A||q(l,c),l}var r=b.html5||{},p=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,a=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,k,N="_html5shiv",J=0,M={},A;(function(){try{var a=e.createElement("a");a.innerHTML="<xyz></xyz>";k="hidden"in a;var c;if(!(c=1==a.childNodes.length)){e.createElement("a");var b=e.createDocumentFragment();c="undefined"==typeof b.cloneNode||
"undefined"==typeof b.createDocumentFragment||"undefined"==typeof b.createElement}A=c}catch(g){A=k=!0}})();var m={elements:r.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:"3.7.0",shivCSS:!1!==r.shivCSS,supportsUnknownElements:A,shivMethods:!1!==r.shivMethods,type:"default",shivDocument:f,createElement:d,createDocumentFragment:function(a,c){a||(a=e);
if(A)return a.createDocumentFragment();c=c||h(a);for(var b=c.frag.cloneNode(),k=0,d=g(),P=d.length;k<P;k++)b.createElement(d[k]);return b}};b.html5=m;f(e)}(this,g),h._version="2.7.1",h._prefixes=H,h._domPrefixes=u,h._cssomPrefixes=G,h.testProp=function(b){return r([b])},h.testAllProps=B,h.testStyles=C,s.className=s.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+w.join(" ")),h}(this,this.document);
(function(d,g,x){function r(a){return"[object Function]"==y.call(a)}function B(a){return"string"==typeof a}function h(){}function s(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function f(){var a=C.shift();z=1;a?a.t?w(function(){("c"==a.t?p.injectCss:p.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),f()):z=0}function E(a,k,e,h,d,A,m){function l(l){if(!t&&s(c.readyState)&&(r.r=t=1,!z&&f(),c.onload=c.onreadystatechange=null,l)){"img"!=a&&w(function(){b.removeChild(c)},50);for(var e in q[k])q[k].hasOwnProperty(e)&&
q[k][e].onload()}}m=m||p.errorTimeout;var c=g.createElement(a),t=0,n=0,r={t:e,s:k,e:d,a:A,x:m};1===q[k]&&(n=1,q[k]=[]);"object"==a?c.data=k:(c.src=k,c.type=a);c.width=c.height="0";c.onerror=c.onload=c.onreadystatechange=function(){l.call(this,n)};C.splice(h,0,r);"img"!=a&&(n||2===q[k]?(b.insertBefore(c,F?null:v),w(l,m)):q[k].push(c))}function H(a,b,g,h,d){return z=0,b=b||"j",B(a)?E("c"==b?O:e,a,b,this.i++,g,h,d):(C.splice(this.i++,0,a),1==C.length&&f()),this}function G(){var a=p;return a.loader={load:H,
i:0},a}var u=g.documentElement,w=d.setTimeout,v=g.getElementsByTagName("script")[0],y={}.toString,C=[],z=0,D="MozAppearance"in u.style,F=D&&!!g.createRange().compareNode,b=F?u:v.parentNode,u=d.opera&&"[object Opera]"==y.call(d.opera),u=!!g.attachEvent&&!u,e=D?"object":u?"script":"img",O=u?"script":e,n=Array.isArray||function(a){return"[object Array]"==y.call(a)},I=[],q={},K={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},L,p;p=function(a){function b(a){a=a.split("!");var c=I.length,e=
a.pop(),g=a.length,e={url:e,origUrl:e,prefixes:a},k,d,h;for(d=0;d<g;d++)h=a[d].split("="),(k=K[h.shift()])&&(e=k(e,h));for(d=0;d<c;d++)e=I[d](e);return e}function e(a,c,d,g,h){var f=b(a),m=f.autoCallback;f.url.split(".").pop().split("?").shift();f.bypass||(c&&(c=r(c)?c:c[a]||c[g]||c[a.split("/").pop().split("?")[0]]),f.instead?f.instead(a,c,d,g,h):(q[f.url]?f.noexec=!0:q[f.url]=1,d.load(f.url,f.forceCSS||!f.forceJS&&"css"==f.url.split(".").pop().split("?").shift()?"c":x,f.noexec,f.attrs,f.timeout),
(r(c)||r(m))&&d.load(function(){G();c&&c(f.origUrl,h,g);m&&m(f.origUrl,h,g);q[f.url]=2})))}function g(a,c){function b(a,f){if(a)if(B(a))f||(k=function(){var a=[].slice.call(arguments);m.apply(this,a);n()}),e(a,k,c,0,d);else{if(Object(a)===a)for(p in q=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(p)&&(!f&&!--q&&(r(k)?k=function(){var a=[].slice.call(arguments);m.apply(this,a);n()}:k[p]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,
b);n()}}(m[p])),e(a[p],k,c,p,d))}else!f&&n()}var d=!!a.test,f=a.load||a.both,k=a.callback||h,m=k,n=a.complete||h,q,p;b(d?a.yep:a.nope,!!f);f&&b(f)}var d,f,m=this.yepnope.loader;if(B(a))e(a,0,m,0);else if(n(a))for(d=0;d<a.length;d++)f=a[d],B(f)?e(f,0,m,0):n(f)?p(f):Object(f)===f&&g(f,m);else Object(a)===a&&g(a,m)};p.addPrefix=function(a,b){K[a]=b};p.addFilter=function(a){I.push(a)};p.errorTimeout=1E4;null==g.readyState&&g.addEventListener&&(g.readyState="loading",g.addEventListener("DOMContentLoaded",
L=function(){g.removeEventListener("DOMContentLoaded",L,0);g.readyState="complete"},0));d.yepnope=G();d.yepnope.executeStack=f;d.yepnope.injectJs=function(a,b,e,d,n,q){var m=g.createElement("script"),l,c;d=d||p.errorTimeout;m.src=a;for(c in e)m.setAttribute(c,e[c]);b=q?f:b||h;m.onreadystatechange=m.onload=function(){!l&&s(m.readyState)&&(l=1,b(),m.onload=m.onreadystatechange=null)};w(function(){l||(l=1,b(1))},d);n?m.onload():v.parentNode.insertBefore(m,v)};d.yepnope.injectCss=function(a,b,e,d,n,p){d=
g.createElement("link");var m;b=p?f:b||h;d.href=a;d.rel="stylesheet";d.type="text/css";for(m in e)d.setAttribute(m,e[m]);n||(v.parentNode.insertBefore(d,v),w(b,0))}})(this,document);Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
Modernizr.addTest("pointerevents",function(){var d=document.createElement("x"),g=document.documentElement,x=window.getComputedStyle,r;return"pointerEvents"in d.style?(d.style.pointerEvents="auto",d.style.pointerEvents="x",g.appendChild(d),r=x&&"auto"===x(d,"").pointerEvents,g.removeChild(d),!!r):!1});