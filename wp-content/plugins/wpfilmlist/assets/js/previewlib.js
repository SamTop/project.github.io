(function(){var GBS_HOST = "https://books.google.com/";var k,l=this;function n(a){return void 0!==a}function p(){}
function aa(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}function q(a){return"array"==aa(a)}function ba(a){var b=aa(a);return"array"==b||"object"==b&&"number"==typeof a.length}function r(a){return"string"==typeof a}function t(a){return"function"==aa(a)}function ca(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}function da(a,b,c){return a.call.apply(a.bind,arguments)}
function ea(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}}function u(a,b,c){u=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?da:ea;return u.apply(null,arguments)}
function fa(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}}var ha=Date.now||function(){return+new Date};function v(a,b){var c=a.split("."),d=l;c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(var e;c.length&&(e=c.shift());)!c.length&&n(b)?d[e]=b:d[e]?d=d[e]:d=d[e]={}}
function w(a,b){function c(){}c.prototype=b.prototype;a.ta=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Aa=function(a,c,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[c].apply(a,g)}};function ia(a,b,c){this.o=c;this.i=a;this.j=b;this.g=0;this.b=null}ia.prototype.get=function(){var a;0<this.g?(this.g--,a=this.b,this.b=a.next,a.next=null):a=this.i();return a};function ja(a,b){a.j(b);a.g<a.o&&(a.g++,b.next=a.b,a.b=b)};function y(a){if(Error.captureStackTrace)Error.captureStackTrace(this,y);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}w(y,Error);y.prototype.name="CustomError";function ka(){}
function la(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(q(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),la(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],"function"!=typeof f&&(c.push(e),ma(d,c),c.push(":"),la(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":ma(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}var na={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},oa=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;
function ma(a,b){b.push('"',a.replace(oa,function(a){var b=na[a];b||(b="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),na[a]=b);return b}),'"')};function pa(a,b){this.width=a;this.height=b}k=pa.prototype;k.clone=function(){return new pa(this.width,this.height)};k.wa=function(){return this.width*this.height};k.isEmpty=function(){return!this.wa()};k.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};k.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};k.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function qa(a,b){for(var c in a)b.call(void 0,a[c],c,a)}var ra="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function sa(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<ra.length;f++)c=ra[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}};function ta(a){a.prototype.then=a.prototype.then;a.prototype.$goog_Thenable=!0}function ua(a){if(!a)return!1;try{return!!a.$goog_Thenable}catch(b){return!1}};function va(a){va[" "](a);return a}va[" "]=p;function wa(a,b){for(var c=a.split("%s"),d="",e=Array.prototype.slice.call(arguments,1);e.length&&1<c.length;)d+=c.shift()+e.shift();return d+c.join("%s")}var xa=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};
function ya(a){if(!za.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(Aa,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(Ba,"&lt;"));-1!=a.indexOf(">")&&(a=a.replace(Ca,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(Da,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(Ea,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(Fa,"&#0;"));return a}var Aa=/&/g,Ba=/</g,Ca=/>/g,Da=/"/g,Ea=/'/g,Fa=/\x00/g,za=/[\x00&<>"']/;function Ga(a,b){return a<b?-1:a>b?1:0}
function Ha(a){return String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()})}function Ia(a){var b=r(void 0)?"undefined".replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g,"\\$1").replace(/\x08/g,"\\x08"):"\\s";return a.replace(new RegExp("(^"+(b?"|["+b+"]+":"")+")([a-z])","g"),function(a,b,e){return b+e.toUpperCase()})};function Ja(){this.i=this.i;this.V=this.V}Ja.prototype.i=!1;Ja.prototype.isDisposed=function(){return this.i};var z="closure_listenable_"+(1E6*Math.random()|0),Ka=0;var A;a:{var La=l.navigator;if(La){var Ma=La.userAgent;if(Ma){A=Ma;break a}}A=""}function B(a){return-1!=A.indexOf(a)};var Na=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(r(a))return r(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},Oa=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=r(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},Pa=Array.prototype.some?function(a,b,c){return Array.prototype.some.call(a,
b,c)}:function(a,b,c){for(var d=a.length,e=r(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&b.call(c,e[f],f,a))return!0;return!1};function Qa(a){return Array.prototype.concat.apply(Array.prototype,arguments)}function Ra(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};function Sa(){this.g=this.b=null}var Ua=new ia(function(){return new Ta},function(a){a.reset()},100);Sa.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.g=null),a.next=null);return a};function Ta(){this.next=this.g=this.b=null}Ta.prototype.set=function(a,b){this.b=a;this.g=b;this.next=null};Ta.prototype.reset=function(){this.next=this.g=this.b=null};function C(a,b){this.type=a;this.b=this.g=b}C.prototype.i=function(){};function Va(a,b,c,d,e){this.listener=a;this.b=null;this.src=b;this.type=c;this.$=!!d;this.ha=e;++Ka;this.T=this.W=!1}function Wa(a){a.T=!0;a.listener=null;a.b=null;a.src=null;a.ha=null};var Xa=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/;function Ya(a,b){if(a)for(var c=a.split("&"),d=0;d<c.length;d++){var e=c[d].indexOf("="),f=null,g=null;0<=e?(f=c[d].substring(0,e),g=c[d].substring(e+1)):f=c[d];b(f,g?decodeURIComponent(g.replace(/\+/g," ")):"")}};function Za(a){this.src=a;this.b={};this.g=0}function $a(a,b,c,d,e,f){var g=b.toString();b=a.b[g];b||(b=a.b[g]=[],a.g++);var h=ab(b,c,e,f);-1<h?(a=b[h],d||(a.W=!1)):(a=new Va(c,a.src,g,!!e,f),a.W=d,b.push(a));return a}Za.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.b))return!1;var e=this.b[a];b=ab(e,b,c,d);return-1<b?(Wa(e[b]),Array.prototype.splice.call(e,b,1),0==e.length&&(delete this.b[a],this.g--),!0):!1};
function bb(a,b){var c=b.type;if(c in a.b){var d=a.b[c],e=Na(d,b),f;(f=0<=e)&&Array.prototype.splice.call(d,e,1);f&&(Wa(b),0==a.b[c].length&&(delete a.b[c],a.g--))}}function ab(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.T&&f.listener==b&&f.$==!!c&&f.ha==d)return e}return-1};function cb(a){l.setTimeout(function(){throw a;},0)}var db;
function eb(){var a=l.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!B("Presto")&&(a=function(){var a=document.createElement("IFRAME");a.style.display="none";a.src="";document.documentElement.appendChild(a);var b=a.contentWindow,a=b.document;a.open();a.write("");a.close();var c="callImmediate"+Math.random(),d="file:"==b.location.protocol?"*":b.location.protocol+"//"+b.location.host,a=u(function(a){if(("*"==d||a.origin==d)&&a.data==
c)this.port1.onmessage()},this);b.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){b.postMessage(c,d)}}});if("undefined"!==typeof a&&!B("Trident")&&!B("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(n(c.next)){c=c.next;var a=c.cb;c.cb=null;a()}};return function(a){d.next={cb:a};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")?function(a){var b=document.createElement("SCRIPT");
b.onreadystatechange=function(){b.onreadystatechange=null;b.parentNode.removeChild(b);b=null;a();a=null};document.documentElement.appendChild(b)}:function(a){l.setTimeout(a,0)}};var fb="StopIteration"in l?l.StopIteration:{message:"StopIteration",stack:""};function gb(){}gb.prototype.next=function(){throw fb;};gb.prototype.va=function(){return this};function D(a,b){this.x=n(a)?a:0;this.y=n(b)?b:0}D.prototype.clone=function(){return new D(this.x,this.y)};D.prototype.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};D.prototype.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};D.prototype.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};var hb=B("Opera"),E=B("Trident")||B("MSIE"),ib=B("Edge"),F=B("Gecko")&&!(-1!=A.toLowerCase().indexOf("webkit")&&!B("Edge"))&&!(B("Trident")||B("MSIE"))&&!B("Edge"),G=-1!=A.toLowerCase().indexOf("webkit")&&!B("Edge");function jb(){var a=l.document;return a?a.documentMode:void 0}var kb;
a:{var lb="",mb=function(){var a=A;if(F)return/rv\:([^\);]+)(\)|;)/.exec(a);if(ib)return/Edge\/([\d\.]+)/.exec(a);if(E)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(G)return/WebKit\/(\S+)/.exec(a);if(hb)return/(?:Version)[ \/]?(\S+)/.exec(a)}();mb&&(lb=mb?mb[1]:"");if(E){var nb=jb();if(null!=nb&&nb>parseFloat(lb)){kb=String(nb);break a}}kb=lb}var ob=kb,pb={};
function H(a){var b;if(!(b=pb[a])){b=0;for(var c=xa(String(ob)).split("."),d=xa(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",h=d[f]||"",m=RegExp("(\\d*)(\\D*)","g"),x=RegExp("(\\d*)(\\D*)","g");do{var T=m.exec(g)||["","",""],U=x.exec(h)||["","",""];if(0==T[0].length&&0==U[0].length)break;b=Ga(0==T[1].length?0:parseInt(T[1],10),0==U[1].length?0:parseInt(U[1],10))||Ga(0==T[2].length,0==U[2].length)||Ga(T[2],U[2])}while(0==b)}b=pb[a]=0<=b}return b}
var qb=l.document,rb=qb&&E?jb()||("CSS1Compat"==qb.compatMode?parseInt(ob,10):5):void 0;function sb(a,b){tb||ub();vb||(tb(),vb=!0);var c=wb,d=Ua.get();d.set(a,b);c.g?c.g.next=d:c.b=d;c.g=d}var tb;function ub(){if(l.Promise&&l.Promise.resolve){var a=l.Promise.resolve(void 0);tb=function(){a.then(xb)}}else tb=function(){var a=xb;!t(l.setImmediate)||l.Window&&l.Window.prototype&&!B("Edge")&&l.Window.prototype.setImmediate==l.setImmediate?(db||(db=eb()),db(a)):l.setImmediate(a)}}var vb=!1,wb=new Sa;
function xb(){for(var a=null;a=wb.remove();){try{a.b.call(a.g)}catch(b){cb(b)}ja(Ua,a)}vb=!1};var yb=!E||9<=Number(rb);!F&&!E||E&&9<=Number(rb)||F&&H("1.9.1");E&&H("9");var zb=!E||9<=Number(rb),Ab=E&&!H("9");!G||H("528");F&&H("1.9b")||E&&H("8")||hb&&H("9.5")||G&&H("528");F&&!H("8")||E&&H("9");function Bb(a,b){this.g={};this.b=[];this.j=this.i=0;var c=arguments.length;if(1<c){if(c%2)throw Error("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else if(a){var e;if(a instanceof Bb)e=a.U(),d=a.S();else{var c=[],f=0;for(e in a)c[f++]=e;e=c;c=[];f=0;for(d in a)c[f++]=a[d];d=c}for(c=0;c<e.length;c++)this.set(e[c],d[c])}}k=Bb.prototype;k.S=function(){Cb(this);for(var a=[],b=0;b<this.b.length;b++)a.push(this.g[this.b[b]]);return a};
k.U=function(){Cb(this);return this.b.concat()};k.isEmpty=function(){return 0==this.i};k.clear=function(){this.g={};this.j=this.i=this.b.length=0};k.remove=function(a){return I(this.g,a)?(delete this.g[a],this.i--,this.j++,this.b.length>2*this.i&&Cb(this),!0):!1};function Cb(a){if(a.i!=a.b.length){for(var b=0,c=0;b<a.b.length;){var d=a.b[b];I(a.g,d)&&(a.b[c++]=d);b++}a.b.length=c}if(a.i!=a.b.length){for(var e={},c=b=0;b<a.b.length;)d=a.b[b],I(e,d)||(a.b[c++]=d,e[d]=1),b++;a.b.length=c}}
k.get=function(a,b){return I(this.g,a)?this.g[a]:b};k.set=function(a,b){I(this.g,a)||(this.i++,this.b.push(a),this.j++);this.g[a]=b};k.forEach=function(a,b){for(var c=this.U(),d=0;d<c.length;d++){var e=c[d],f=this.get(e);a.call(b,f,e,this)}};k.clone=function(){return new Bb(this)};k.va=function(a){Cb(this);var b=0,c=this.j,d=this,e=new gb;e.next=function(){if(c!=d.j)throw Error("The map has changed since the iterator was created");if(b>=d.b.length)throw fb;var e=d.b[b++];return a?e:d.g[e]};return e};
function I(a,b){return Object.prototype.hasOwnProperty.call(a,b)};function Db(a,b){qa(b,function(b,d){"style"==d?a.style.cssText=b:"class"==d?a.className=b:"for"==d?a.htmlFor=b:Eb.hasOwnProperty(d)?a.setAttribute(Eb[d],b):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a.setAttribute(d,b):a[d]=b})}var Eb={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"};
function Fb(){var a=window.document,a="CSS1Compat"==a.compatMode?a.documentElement:a.body;return new pa(a.clientWidth,a.clientHeight)}function Gb(){var a=document,b=a.scrollingElement?a.scrollingElement:G||"CSS1Compat"!=a.compatMode?a.body||a.documentElement:a.documentElement,a=a.parentWindow||a.defaultView;return E&&H("10")&&a.pageYOffset!=b.scrollTop?new D(b.scrollLeft,b.scrollTop):new D(a.pageXOffset||b.scrollLeft,a.pageYOffset||b.scrollTop)}
function Hb(a,b,c){var d=arguments,e=document,f=d[0],g=d[1];if(!yb&&g&&(g.name||g.type)){f=["<",f];g.name&&f.push(' name="',ya(g.name),'"');if(g.type){f.push(' type="',ya(g.type),'"');var h={};sa(h,g);delete h.type;g=h}f.push(">");f=f.join("")}f=e.createElement(f);g&&(r(g)?f.className=g:q(g)?f.className=g.join(" "):Db(f,g));2<d.length&&Ib(e,f,d);return f}
function Ib(a,b,c){function d(c){c&&b.appendChild(r(c)?a.createTextNode(c):c)}for(var e=2;e<c.length;e++){var f=c[e];!ba(f)||ca(f)&&0<f.nodeType?d(f):Oa(Jb(f)?Ra(f):f,d)}}function J(a){return document.createElement(a)}function Kb(a){return a&&a.parentNode?a.parentNode.removeChild(a):null}function Jb(a){if(a&&"number"==typeof a.length){if(ca(a))return"function"==typeof a.item||"string"==typeof a.item;if(t(a))return"function"==typeof a.item}return!1};function K(a,b){C.call(this,a?a.type:"");this.b=this.g=null;this.clientY=this.clientX=0;this.j=null;a&&this.init(a,b)}w(K,C);
K.prototype.init=function(a,b){this.type=a.type;var c=a.changedTouches?a.changedTouches[0]:null;this.g=a.target||a.srcElement;this.b=b;var d=a.relatedTarget;if(d&&F)try{va(d.nodeName)}catch(e){}null===c?(this.clientX=void 0!==a.clientX?a.clientX:a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY):(this.clientX=void 0!==c.clientX?c.clientX:c.pageX,this.clientY=void 0!==c.clientY?c.clientY:c.pageY);this.j=a;a.defaultPrevented&&this.i()};
K.prototype.i=function(){K.ta.i.call(this);var a=this.j;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,Ab)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(b){}};function L(a,b){this.b=0;this.u=void 0;this.j=this.g=this.i=null;this.o=this.s=!1;if(a!=p)try{var c=this;a.call(b,function(a){M(c,2,a)},function(a){M(c,3,a)})}catch(d){M(this,3,d)}}function Lb(){this.next=this.i=this.g=this.j=this.b=null;this.o=!1}Lb.prototype.reset=function(){this.i=this.g=this.j=this.b=null;this.o=!1};var Mb=new ia(function(){return new Lb},function(a){a.reset()},100);function Nb(a,b,c){var d=Mb.get();d.j=a;d.g=b;d.i=c;return d}
L.prototype.then=function(a,b,c){return Ob(this,t(a)?a:null,t(b)?b:null,c)};ta(L);L.prototype.cancel=function(a){0==this.b&&sb(function(){var b=new N(a);Pb(this,b)},this)};function Pb(a,b){if(0==a.b)if(a.i){var c=a.i;if(c.g){for(var d=0,e=null,f=null,g=c.g;g&&(g.o||(d++,g.b==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.b&&1==d?Pb(c,b):(f?(d=f,d.next==c.j&&(c.j=d),d.next=d.next.next):Qb(c),Rb(c,e,3,b)))}a.i=null}else M(a,3,b)}
function Sb(a,b){a.g||2!=a.b&&3!=a.b||Tb(a);a.j?a.j.next=b:a.g=b;a.j=b}function Ob(a,b,c,d){var e=Nb(null,null,null);e.b=new L(function(a,g){e.j=b?function(c){try{var e=b.call(d,c);a(e)}catch(x){g(x)}}:a;e.g=c?function(b){try{var e=c.call(d,b);!n(e)&&b instanceof N?g(b):a(e)}catch(x){g(x)}}:g});e.b.i=a;Sb(a,e);return e.b}L.prototype.H=function(a){this.b=0;M(this,2,a)};L.prototype.R=function(a){this.b=0;M(this,3,a)};
function M(a,b,c){if(0==a.b){a==c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.b=1;var d;a:{var e=c,f=a.H,g=a.R;if(e instanceof L)Sb(e,Nb(f||p,g||null,a)),d=!0;else if(ua(e))e.then(f,g,a),d=!0;else{if(ca(e))try{var h=e.then;if(t(h)){Ub(e,h,f,g,a);d=!0;break a}}catch(m){g.call(a,m);d=!0;break a}d=!1}}d||(a.u=c,a.b=b,a.i=null,Tb(a),3!=b||c instanceof N||Vb(a,c))}}
function Ub(a,b,c,d,e){function f(a){h||(h=!0,d.call(e,a))}function g(a){h||(h=!0,c.call(e,a))}var h=!1;try{b.call(a,g,f)}catch(m){f(m)}}function Tb(a){a.s||(a.s=!0,sb(a.v,a))}function Qb(a){var b=null;a.g&&(b=a.g,a.g=b.next,b.next=null);a.g||(a.j=null);return b}L.prototype.v=function(){for(var a=null;a=Qb(this);)Rb(this,a,this.b,this.u);this.s=!1};
function Rb(a,b,c,d){if(3==c&&b.g&&!b.o)for(;a&&a.o;a=a.i)a.o=!1;if(b.b)b.b.i=null,Wb(b,c,d);else try{b.o?b.j.call(b.i):Wb(b,c,d)}catch(e){Xb.call(null,e)}ja(Mb,b)}function Wb(a,b,c){2==b?a.j.call(a.i,c):a.g&&a.g.call(a.i,c)}function Vb(a,b){a.o=!0;sb(function(){a.o&&Xb.call(null,b)})}var Xb=cb;function N(a){y.call(this,a)}w(N,y);N.prototype.name="cancel";function O(a,b){this.g=this.v=this.j="";this.u=null;this.o=this.s="";this.i=!1;var c;a instanceof O?(this.i=n(b)?b:a.i,Yb(this,a.j),this.v=a.v,this.g=a.g,Zb(this,a.u),this.s=a.s,$b(this,a.b.clone()),this.o=a.o):a&&(c=String(a).match(Xa))?(this.i=!!b,Yb(this,c[1]||"",!0),this.v=P(c[2]||""),this.g=P(c[3]||"",!0),Zb(this,c[4]),this.s=P(c[5]||"",!0),$b(this,c[6]||"",!0),this.o=P(c[7]||"")):(this.i=!!b,this.b=new Q(null,0,this.i))}
O.prototype.toString=function(){var a=[],b=this.j;b&&a.push(R(b,ac,!0),":");var c=this.g;if(c||"file"==b)a.push("//"),(b=this.v)&&a.push(R(b,ac,!0),"@"),a.push(encodeURIComponent(String(c)).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),c=this.u,null!=c&&a.push(":",String(c));if(c=this.s)this.g&&"/"!=c.charAt(0)&&a.push("/"),a.push(R(c,"/"==c.charAt(0)?bc:cc,!0));(c=this.b.toString())&&a.push("?",c);(c=this.o)&&a.push("#",R(c,dc));return a.join("")};O.prototype.clone=function(){return new O(this)};
function Yb(a,b,c){a.j=c?P(b,!0):b;a.j&&(a.j=a.j.replace(/:$/,""))}function Zb(a,b){if(b){b=Number(b);if(isNaN(b)||0>b)throw Error("Bad port number "+b);a.u=b}else a.u=null}function $b(a,b,c){b instanceof Q?(a.b=b,ec(a.b,a.i)):(c||(b=R(b,fc)),a.b=new Q(b,0,a.i))}function P(a,b){return a?b?decodeURI(a.replace(/%25/g,"%2525")):decodeURIComponent(a):""}function R(a,b,c){return r(a)?(a=encodeURI(a).replace(b,gc),c&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null}
function gc(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)}var ac=/[#\/\?@]/g,cc=/[\#\?:]/g,bc=/[\#\?]/g,fc=/[\#\?@]/g,dc=/#/g;function Q(a,b,c){this.g=this.b=null;this.i=a||null;this.j=!!c}function S(a){a.b||(a.b=new Bb,a.g=0,a.i&&Ya(a.i,function(b,c){var d=decodeURIComponent(b.replace(/\+/g," "));S(a);a.i=null;var d=V(a,d),e=a.b.get(d);e||a.b.set(d,e=[]);e.push(c);a.g=a.g+1}))}k=Q.prototype;
k.remove=function(a){S(this);a=V(this,a);return I(this.b.g,a)?(this.i=null,this.g=this.g-this.b.get(a).length,this.b.remove(a)):!1};k.clear=function(){this.b=this.i=null;this.g=0};k.isEmpty=function(){S(this);return 0==this.g};function hc(a,b){S(a);b=V(a,b);return I(a.b.g,b)}k.U=function(){S(this);for(var a=this.b.S(),b=this.b.U(),c=[],d=0;d<b.length;d++)for(var e=a[d],f=0;f<e.length;f++)c.push(b[d]);return c};
k.S=function(a){S(this);var b=[];if(r(a))hc(this,a)&&(b=Qa(b,this.b.get(V(this,a))));else{a=this.b.S();for(var c=0;c<a.length;c++)b=Qa(b,a[c])}return b};k.set=function(a,b){S(this);this.i=null;a=V(this,a);hc(this,a)&&(this.g=this.g-this.b.get(a).length);this.b.set(a,[b]);this.g=this.g+1;return this};k.get=function(a,b){var c=a?this.S(a):[];return 0<c.length?String(c[0]):b};function ic(a,b,c){a.remove(b);0<c.length&&(a.i=null,a.b.set(V(a,b),Ra(c)),a.g=a.g+c.length)}
k.toString=function(){if(this.i)return this.i;if(!this.b)return"";for(var a=[],b=this.b.U(),c=0;c<b.length;c++)for(var d=b[c],e=encodeURIComponent(String(d)),d=this.S(d),f=0;f<d.length;f++){var g=e;""!==d[f]&&(g+="="+encodeURIComponent(String(d[f])));a.push(g)}return this.i=a.join("&")};k.clone=function(){var a=new Q;a.i=this.i;this.b&&(a.b=this.b.clone(),a.g=this.g);return a};function V(a,b){var c=String(b);a.j&&(c=c.toLowerCase());return c}
function ec(a,b){b&&!a.j&&(S(a),a.i=null,a.b.forEach(function(a,b){var e=b.toLowerCase();b!=e&&(this.remove(b),ic(this,e,a))},a));a.j=b};var jc="closure_lm_"+(1E6*Math.random()|0),kc={},lc=0;function mc(a,b,c,d,e){if(q(b))for(var f=0;f<b.length;f++)mc(a,b[f],c,d,e);else c=nc(c),a&&a[z]?$a(a.b,String(b),c,!1,d,e):oc(a,b,c,!1,d,e)}
function oc(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=!!e,h=pc(a);h||(a[jc]=h=new Za(a));c=$a(h,b,c,d,e,f);if(!c.b){d=qc();c.b=d;d.src=a;d.listener=c;if(a.addEventListener)a.addEventListener(b.toString(),d,g);else if(a.attachEvent)a.attachEvent(rc(b.toString()),d);else throw Error("addEventListener and attachEvent are unavailable.");lc++}}function qc(){var a=sc,b=zb?function(c){return a.call(b.src,b.listener,c)}:function(c){c=a.call(b.src,b.listener,c);if(!c)return c};return b}
function tc(a,b,c,d,e){if(q(b))for(var f=0;f<b.length;f++)tc(a,b[f],c,d,e);else c=nc(c),a&&a[z]?$a(a.b,String(b),c,!0,d,e):oc(a,b,c,!0,d,e)}function uc(a,b,c,d,e){if(q(b))for(var f=0;f<b.length;f++)uc(a,b[f],c,d,e);else(c=nc(c),a&&a[z])?a.b.remove(String(b),c,d,e):a&&(a=pc(a))&&(b=a.b[b.toString()],a=-1,b&&(a=ab(b,c,!!d,e)),(c=-1<a?b[a]:null)&&vc(c))}
function vc(a){if("number"!=typeof a&&a&&!a.T){var b=a.src;if(b&&b[z])bb(b.b,a);else{var c=a.type,d=a.b;b.removeEventListener?b.removeEventListener(c,d,a.$):b.detachEvent&&b.detachEvent(rc(c),d);lc--;(c=pc(b))?(bb(c,a),0==c.g&&(c.src=null,b[jc]=null)):Wa(a)}}}function rc(a){return a in kc?kc[a]:kc[a]="on"+a}function wc(a,b,c,d){var e=!0;if(a=pc(a))if(b=a.b[b.toString()])for(b=b.concat(),a=0;a<b.length;a++){var f=b[a];f&&f.$==c&&!f.T&&(f=xc(f,d),e=e&&!1!==f)}return e}
function xc(a,b){var c=a.listener,d=a.ha||a.src;a.W&&vc(a);return c.call(d,b)}
function sc(a,b){if(a.T)return!0;if(!zb){var c;if(!(c=b))a:{c=["window","event"];for(var d=l,e;e=c.shift();)if(null!=d[e])d=d[e];else{c=null;break a}c=d}e=c;c=new K(e,this);d=!0;if(!(0>e.keyCode||void 0!=e.returnValue)){a:{var f=!1;if(0==e.keyCode)try{e.keyCode=-1;break a}catch(m){f=!0}if(f||void 0==e.returnValue)e.returnValue=!0}e=[];for(f=c.b;f;f=f.parentNode)e.push(f);for(var f=a.type,g=e.length-1;0<=g;g--){c.b=e[g];var h=wc(e[g],f,!0,c),d=d&&h}for(g=0;g<e.length;g++)c.b=e[g],h=wc(e[g],f,!1,c),
d=d&&h}return d}return xc(a,new K(b,this))}function pc(a){a=a[jc];return a instanceof Za?a:null}var yc="__closure_events_fn_"+(1E9*Math.random()>>>0);function nc(a){if(t(a))return a;a[yc]||(a[yc]=function(b){return a.handleEvent(b)});return a[yc]};function W(a,b,c){if(r(b))(b=zc(a,b))&&(a.style[b]=c);else for(var d in b){c=a;var e=b[d],f=zc(c,d);f&&(c.style[f]=e)}}var Ac={};function zc(a,b){var c=Ac[b];if(!c){var d=Ha(b),c=d;void 0===a.style[d]&&(d=(G?"Webkit":F?"Moz":E?"ms":hb?"O":null)+Ia(d),void 0!==a.style[d]&&(c=d));Ac[b]=c}return c}function Bc(a,b,c){var d;b instanceof D?(d=b.x,b=b.y):(d=b,b=c);a.style.left=Cc(d,!1);a.style.top=Cc(b,!1)}
function Dc(a,b,c){if(b instanceof pa)c=b.height,b=b.width;else if(void 0==c)throw Error("missing height argument");a.style.width=Cc(b,!0);a.style.height=Cc(c,!0)}function Cc(a,b){"number"==typeof a&&(a=(b?Math.round(a):a)+"px");return a}function Ec(a,b){var c=a.style;"opacity"in c?c.opacity=b:"MozOpacity"in c?c.MozOpacity=b:"filter"in c&&(c.filter=""===b?"":"alpha(opacity="+100*Number(b)+")")};/*
 Portions of this code are from MochiKit, received by
 The Closure Authors under the MIT license. All other code is Copyright
 2005-2009 The Closure Authors. All Rights Reserved.
*/
function X(a,b){this.o=[];this.ma=a;this.V=b||null;this.j=this.b=!1;this.i=void 0;this.H=this.ua=this.u=!1;this.s=0;this.g=null;this.v=0}X.prototype.cancel=function(a){if(this.b)this.i instanceof X&&this.i.cancel();else{if(this.g){var b=this.g;delete this.g;a?b.cancel(a):(b.v--,0>=b.v&&b.cancel())}this.ma?this.ma.call(this.V,this):this.H=!0;this.b||(a=new Y,Fc(this),Gc(this,!1,a))}};X.prototype.R=function(a,b){this.u=!1;Gc(this,a,b)};function Gc(a,b,c){a.b=!0;a.i=c;a.j=!b;Hc(a)}
function Fc(a){if(a.b){if(!a.H)throw new Ic;a.H=!1}}X.prototype.callback=function(a){Fc(this);Gc(this,!0,a)};function Jc(a,b,c,d){a.o.push([b,c,d]);a.b&&Hc(a)}X.prototype.then=function(a,b,c){var d,e,f=new L(function(a,b){d=a;e=b});Jc(this,d,function(a){a instanceof Y?f.cancel():e(a)});return f.then(a,b,c)};ta(X);function Kc(a){return Pa(a.o,function(a){return t(a[1])})}
function Hc(a){if(a.s&&a.b&&Kc(a)){var b=a.s,c=Lc[b];c&&(l.clearTimeout(c.w),delete Lc[b]);a.s=0}a.g&&(a.g.v--,delete a.g);for(var b=a.i,d=c=!1;a.o.length&&!a.u;){var e=a.o.shift(),f=e[0],g=e[1],e=e[2];if(f=a.j?g:f)try{var h=f.call(e||a.V,b);n(h)&&(a.j=a.j&&(h==b||h instanceof Error),a.i=b=h);if(ua(b)||"function"===typeof l.Promise&&b instanceof l.Promise)d=!0,a.u=!0}catch(m){b=m,a.j=!0,Kc(a)||(c=!0)}}a.i=b;d&&(h=u(a.R,a,!0),d=u(a.R,a,!1),b instanceof X?(Jc(b,h,d),b.ua=!0):b.then(h,d));c&&(b=new Mc(b),
Lc[b.w]=b,a.s=b.w)}function Ic(){y.call(this)}w(Ic,y);Ic.prototype.message="Deferred has already fired";Ic.prototype.name="AlreadyCalledError";function Y(){y.call(this)}w(Y,y);Y.prototype.message="Deferred was canceled";Y.prototype.name="CanceledError";function Mc(a){this.w=l.setTimeout(u(this.g,this),0);this.b=a}Mc.prototype.g=function(){delete Lc[this.w];throw this.b;};var Lc={};function Nc(){Ja.call(this);this.b=new Za(this);this.u=this}w(Nc,Ja);Nc.prototype[z]=!0;Nc.prototype.removeEventListener=function(a,b,c,d){uc(this,a,b,c,d)};function Oc(a,b){var c=a.u,d=b,e=d.type||d;if(r(d))d=new C(d,c);else if(d instanceof C)d.g=d.g||c;else{var f=d,d=new C(e,c);sa(d,f)}c=d.b=c;Pc(c,e,!0,d);Pc(c,e,!1,d)}
function Pc(a,b,c,d){if(b=a.b.b[String(b)]){b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.T&&g.$==c){var h=g.listener,m=g.ha||g.src;g.W&&bb(a.b,g);e=!1!==h.call(m,d)&&e}}}};function Qc(a,b){var c=b||{},d=c.document||document,e=J("SCRIPT"),f={ra:e,ka:void 0},g=new X(Rc,f),h=null,m=null!=c.timeout?c.timeout:5E3;0<m&&(h=window.setTimeout(function(){Sc(e,!0);var b=new Tc(1,"Timeout reached for loading script "+a);Fc(g);Gc(g,!1,b)},m),f.ka=h);e.onload=e.onreadystatechange=function(){e.readyState&&"loaded"!=e.readyState&&"complete"!=e.readyState||(Sc(e,c.ya||!1,h),g.callback(null))};e.onerror=function(){Sc(e,!0,h);var b=new Tc(0,"Error while loading script "+a);Fc(g);Gc(g,
!1,b)};f=c.attributes||{};sa(f,{type:"text/javascript",charset:"UTF-8",src:a});Db(e,f);Uc(d).appendChild(e);return g}function Uc(a){var b=a.getElementsByTagName("HEAD");return b&&0!=b.length?b[0]:a.documentElement}function Rc(){if(this&&this.ra){var a=this.ra;a&&"SCRIPT"==a.tagName&&Sc(a,!0,this.ka)}}function Sc(a,b,c){null!=c&&l.clearTimeout(c);a.onload=p;a.onerror=p;a.onreadystatechange=p;b&&window.setTimeout(function(){Kb(a)},0)}
function Tc(a,b){var c="Jsloader error (code #"+a+")";b&&(c+=": "+b);y.call(this,c)}w(Tc,y);function Vc(a,b){this.b=b||"en"}function Wc(a){var b=J("img");b.src=wa("https://books.google.com/intl/%s/googlebooks/images/gbs_preview_button1.gif",a.b);b.border=0;W(b,"cursor","pointer");return b}function Xc(a,b,c){this.b=c||"en";c=J("a");c.href=b;a.appendChild(c);a=Wc(this);c.appendChild(a)}w(Xc,Vc);function Yc(a,b,c){this.b=c||"en";c=Wc(this);a.appendChild(c);W(a,"cursor","pointer");mc(a,"click",b)}w(Yc,Vc);function Zc(a,b){var c=document.getElementsByTagName("body")[0],d=J("div");Ec(d,.5);W(d,{backgroundColor:"#333",position:"absolute",zIndex:200});this.o=d;Dc(d,c.scrollWidth,Math.max(c.scrollHeight,Fb().height));Bc(d,0,0);c.appendChild(d);this.i=J("div");W(this.i,{position:"absolute",zIndex:201});c.appendChild(this.i);this.g=J("div");Dc(this.g,618,500);W(this.g,{backgroundColor:"#333",position:"absolute",zIndex:202});Bc(this.g,3,3);Ec(this.g,.3);this.i.appendChild(this.g);this.b=J("div");Bc(this.b,
0,0);W(this.b,{position:"absolute",padding:"8px",border:"1px solid #2c4462",backgroundColor:"#b4cffe",zIndex:203});c=J("div");W(c,{backgroundColor:"#d8e8fd",fontSize:"16px",fontFamily:"Arial, sans-serif",fontWeight:"bold",padding:"2px 2px 2px 5px"});this.b.appendChild(c);d=J("img");d.src="https://books.google.com/googlebooks/images/dialog_close_x.gif";d.width=15;d.height=15;W(d,{cursor:"pointer",position:"absolute",right:"11px",top:"11px"});tc(d,"click",u(this.close,this));c.appendChild(d);d=J("div");
d.innerHTML="&nbsp;";c.appendChild(d);this.j=J("div");this.b.appendChild(this.j);Dc(this.j,600,456);this.i.appendChild(this.b);b(this.j,a);d=Fb();c=Math.max(0,(d.height-500)/2);c=Math.floor(c+Gb().y);d=Math.max(0,(d.width-618)/2);d=Math.floor(d);Bc(this.i,d,c)}Zc.prototype.close=function(){Oa([this.b,this.o,this.g],Kb)};function $c(a,b){this.g=new O(a);this.b=b?b:"callback";this.ka=5E3}var ad=0;$c.prototype.send=function(a,b,c,d){a=a||null;d=d||"_"+(ad++).toString(36)+ha().toString(36);var e="_callbacks___"+d,f=this.g.clone();if(a)for(var g in a)if(!a.hasOwnProperty||a.hasOwnProperty(g)){var h=f,m=g,x=a[g];q(x)||(x=[String(x)]);ic(h.b,m,x)}b&&(l[e]=bd(d,b),b=this.b,g=e,q(g)||(g=[String(g)]),ic(f.b,b,g));b=Qc(f.toString(),{timeout:this.ka,ya:!0});Jc(b,null,cd(d,a,c),void 0);return{w:d,qa:b}};
$c.prototype.cancel=function(a){a&&(a.qa&&a.qa.cancel(),a.w&&dd(a.w,!1))};function cd(a,b,c){return function(){dd(a,!1);c&&c(b)}}function bd(a,b){return function(c){dd(a,!0);b.apply(void 0,arguments)}}function dd(a,b){var c="_callbacks___"+a;if(l[c])if(b)try{delete l[c]}catch(d){l[c]=void 0}else l[c]=p};function ed(){Nc.call(this);this.s=null;this.o=!0}w(ed,Nc);ed.prototype.j=function(){if(this.o)this.o=!1;else throw Error();};function Z(a){ed.call(this);this.R=new $c(a);this.g=!0}w(Z,ed);Z.prototype.j=function(a,b){Z.ta.j.call(this,a,b);this.g=!1;this.R.send({},u(this.H,this,a),u(this.v,this,b))};Z.prototype.H=function(a,b){this.g||(this.s=b,Oc(this,"success"),a&&a(this.s),this.g=!0)};Z.prototype.v=function(a){this.g||(Oc(this,"error"),a&&a(),this.g=!0)};function fd(a,b,c,d){q(a)||(a=[a]);this.b=a;this.i=b;this.g=c;b=new O((GBS_HOST||"https://books.google.com/")+"books?jscmd=viewapi");b.b.set("bibkeys",a.join(","));b.b.set("hl","en");b.b.set("source",d||"previewlib");(new Z(b)).j(u(this.j,this))}fd.prototype.j=function(a){for(var b=0;b<this.b.length;b++){var c=a[this.b[b]];if(c){var d=c.preview_url,e;if(e=d)e=c.preview,c=c.embeddable,n(c)||(c=!0),e=("full"==e||"partial"==e)&&c;if(e){this.i&&this.i(d);return}}}this.g&&this.g()};v("GBS_insertPreviewButtonLink",function(a,b){gd(a,fa(hd,(b||{}).alternativeUrl),"GBS_insertPreviewButtonLink")});v("GBS_insertPreviewButtonPopup",function(a){gd(a,id,"GBS_insertPreviewButtonPopup")});v("GBS_insertEmbeddedViewer",function(a,b,c){gd(a,fa(jd,b,c),"GBS_insertEmbeddedViewer")});function gd(a,b,c){var d=kd();new fd(a,function(a){b(d,a)},null,c)}
function hd(a,b,c){a||(a=new O(c),ld&&(c=new O(GBS_HOST),Yb(a,c.j),a.g=c.g,Zb(a,c.u),a.s="/books/p/"+ld),a=a.toString().replace(/#.*/g,""),a=new O(a),a.b.set("hl","en"),a=a.toString());new Xc(b,a,md)}function id(a,b){new Yc(a,fa(nd,b),md)}function jd(a,b,c,d){var e=J("div");c.appendChild(e);Dc(e,a,b);od(e,d)}
function od(a,b){var c=Hb("iframe",{frameBorder:"0",width:"100%",height:"100%"});a.appendChild(c);var d=new O(b);d.b.set("output","embed");if(pd){var e=[];la(new ka,pd,e);d.o=encodeURIComponent(String(e.join("")))}c.src=d.toString()}function nd(a){new Zc(a,od)}var md="en";v("GBS_setLanguage",function(a){md=a});v("GBS_setViewerOptions",function(a){pd=a});var ld=null;v("GBS_setCobrandName",function(a){ld=a});var pd={};
function kd(){var a="__GBS_Button"+qd++;document.write(wa('<span id="%s"></span>',a));var b=document;return r(a)?b.getElementById(a):a}var qd=0;
})();