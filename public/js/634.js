/*! For license information please see 634.js.LICENSE.txt */
"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[634],{7884:(t,e,r)=>{r.d(e,{Z:()=>u});var n=r(7722),a=r(821);function o(t){return o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},o(t)}function i(){i=function(){return t};var t={},e=Object.prototype,r=e.hasOwnProperty,n=Object.defineProperty||function(t,e,r){t[e]=r.value},a="function"==typeof Symbol?Symbol:{},s=a.iterator||"@@iterator",c=a.asyncIterator||"@@asyncIterator",u=a.toStringTag||"@@toStringTag";function l(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{l({},"")}catch(t){l=function(t,e,r){return t[e]=r}}function h(t,e,r,a){var o=e&&e.prototype instanceof d?e:d,i=Object.create(o.prototype),s=new O(a||[]);return n(i,"_invoke",{value:P(t,r,s)}),i}function p(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=h;var f={};function d(){}function v(){}function g(){}var b={};l(b,s,(function(){return this}));var y=Object.getPrototypeOf,m=y&&y(y(j([])));m&&m!==e&&r.call(m,s)&&(b=m);var w=g.prototype=d.prototype=Object.create(b);function x(t){["next","throw","return"].forEach((function(e){l(t,e,(function(t){return this._invoke(e,t)}))}))}function k(t,e){function a(n,i,s,c){var u=p(t[n],t,i);if("throw"!==u.type){var l=u.arg,h=l.value;return h&&"object"==o(h)&&r.call(h,"__await")?e.resolve(h.__await).then((function(t){a("next",t,s,c)}),(function(t){a("throw",t,s,c)})):e.resolve(h).then((function(t){l.value=t,s(l)}),(function(t){return a("throw",t,s,c)}))}c(u.arg)}var i;n(this,"_invoke",{value:function(t,r){function n(){return new e((function(e,n){a(t,r,e,n)}))}return i=i?i.then(n,n):n()}})}function P(t,e,r){var n="suspendedStart";return function(a,o){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===a)throw o;return S()}for(r.method=a,r.arg=o;;){var i=r.delegate;if(i){var s=_(i,r);if(s){if(s===f)continue;return s}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===n)throw n="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n="executing";var c=p(t,e,r);if("normal"===c.type){if(n=r.done?"completed":"suspendedYield",c.arg===f)continue;return{value:c.arg,done:r.done}}"throw"===c.type&&(n="completed",r.method="throw",r.arg=c.arg)}}}function _(t,e){var r=e.method,n=t.iterator[r];if(void 0===n)return e.delegate=null,"throw"===r&&t.iterator.return&&(e.method="return",e.arg=void 0,_(t,e),"throw"===e.method)||"return"!==r&&(e.method="throw",e.arg=new TypeError("The iterator does not provide a '"+r+"' method")),f;var a=p(n,t.iterator,e.arg);if("throw"===a.type)return e.method="throw",e.arg=a.arg,e.delegate=null,f;var o=a.arg;return o?o.done?(e[t.resultName]=o.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=void 0),e.delegate=null,f):o:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,f)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function E(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function O(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function j(t){if(t){var e=t[s];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var n=-1,a=function e(){for(;++n<t.length;)if(r.call(t,n))return e.value=t[n],e.done=!1,e;return e.value=void 0,e.done=!0,e};return a.next=a}}return{next:S}}function S(){return{value:void 0,done:!0}}return v.prototype=g,n(w,"constructor",{value:g,configurable:!0}),n(g,"constructor",{value:v,configurable:!0}),v.displayName=l(g,u,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===v||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,g):(t.__proto__=g,l(t,u,"GeneratorFunction")),t.prototype=Object.create(w),t},t.awrap=function(t){return{__await:t}},x(k.prototype),l(k.prototype,c,(function(){return this})),t.AsyncIterator=k,t.async=function(e,r,n,a,o){void 0===o&&(o=Promise);var i=new k(h(e,r,n,a),o);return t.isGeneratorFunction(r)?i:i.next().then((function(t){return t.done?t.value:i.next()}))},x(w),l(w,u,"Generator"),l(w,s,(function(){return this})),l(w,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=Object(t),r=[];for(var n in e)r.push(n);return r.reverse(),function t(){for(;r.length;){var n=r.pop();if(n in e)return t.value=n,t.done=!1,t}return t.done=!0,t}},t.values=j,O.prototype={constructor:O,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(E),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function n(r,n){return i.type="throw",i.arg=t,e.next=r,n&&(e.method="next",e.arg=void 0),!!n}for(var a=this.tryEntries.length-1;a>=0;--a){var o=this.tryEntries[a],i=o.completion;if("root"===o.tryLoc)return n("end");if(o.tryLoc<=this.prev){var s=r.call(o,"catchLoc"),c=r.call(o,"finallyLoc");if(s&&c){if(this.prev<o.catchLoc)return n(o.catchLoc,!0);if(this.prev<o.finallyLoc)return n(o.finallyLoc)}else if(s){if(this.prev<o.catchLoc)return n(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return n(o.finallyLoc)}}}},abrupt:function(t,e){for(var n=this.tryEntries.length-1;n>=0;--n){var a=this.tryEntries[n];if(a.tryLoc<=this.prev&&r.call(a,"finallyLoc")&&this.prev<a.finallyLoc){var o=a;break}}o&&("break"===t||"continue"===t)&&o.tryLoc<=e&&e<=o.finallyLoc&&(o=null);var i=o?o.completion:{};return i.type=t,i.arg=e,o?(this.method="next",this.next=o.finallyLoc,f):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),f},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),E(r),f}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var a=n.arg;E(r)}return a}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:j(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),f}},t}function s(t,e,r,n,a,o,i){try{var s=t[o](i),c=s.value}catch(t){return void r(t)}s.done?e(c):Promise.resolve(c).then(n,a)}function c(t){return function(){var e=this,r=arguments;return new Promise((function(n,a){var o=t.apply(e,r);function i(t){s(o,n,a,i,c,"next",t)}function c(t){s(o,n,a,i,c,"throw",t)}i(void 0)}))}}function u(){(0,a.iH)();var t=(0,a.iH)(!1),e=(0,a.iH)(!1),r=(0,a.iH)(!1),o=(0,a.iH)([]),s=(0,a.iH)([]),u=(0,a.iH)([]),l=(0,a.iH)([]),h=(0,a.iH)([]),p=(0,a.iH)([]),f=(0,a.iH)([]),d=function(){var t=c(i().mark((function t(){var r;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e.value=!1,t.prev=1,t.next=4,n.Z.get("/book-categories");case 4:!0===(r=t.sent).data.success&&(e.value=!0,s.value=r.data.data),t.next=12;break;case 8:t.prev=8,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 12:case"end":return t.stop()}}),t,null,[[1,8]])})));return function(){return t.apply(this,arguments)}}(),v=function(){var t=c(i().mark((function t(){var e,r,a=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=a.length>0&&void 0!==a[0]?a[0]:1,t.prev=1,t.next=4,n.Z.get("/get-books?page=".concat(e));case 4:!0===(r=t.sent).data.success&&(u.value=r.data.data),t.next=11;break;case 8:t.prev=8,t.t0=t.catch(1),o.value=t.t0;case 11:case"end":return t.stop()}}),t,null,[[1,8]])})));return function(){return t.apply(this,arguments)}}(),g=function(){var t=c(i().mark((function t(){var a,s,c=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return a=c.length>0&&void 0!==c[0]?c[0]:1,t.prev=1,r.value=!1,e.value=!1,t.next=6,n.Z.get("/get-books-a-paraitre?page=".concat(a));case 6:!0===(s=t.sent).data.success&&(u.value=s.data.data,e.value=!0,0===s.data.data.data.length&&(r.value=!0)),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 14:case"end":return t.stop()}}),t,null,[[1,10]])})));return function(){return t.apply(this,arguments)}}(),b=function(){var t=c(i().mark((function t(){var a,s,c=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return a=c.length>0&&void 0!==c[0]?c[0]:1,t.prev=1,r.value=!1,e.value=!1,t.next=6,n.Z.get("/get-books-livres-hippo?page=".concat(a));case 6:!0===(s=t.sent).data.success&&(u.value=s.data.data,e.value=!0,0===s.data.data.data.length&&(r.value=!0)),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 14:case"end":return t.stop()}}),t,null,[[1,10]])})));return function(){return t.apply(this,arguments)}}(),y=function(){var t=c(i().mark((function t(){var a,s,c=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return a=c.length>0&&void 0!==c[0]?c[0]:1,t.prev=1,r.value=!1,e.value=!1,t.next=6,n.Z.get("/get-books-nouveautes?page=".concat(a));case 6:!0===(s=t.sent).data.success&&(u.value=s.data.data,e.value=!0,0===s.data.data.data.length&&(r.value=!0)),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 14:case"end":return t.stop()}}),t,null,[[1,10]])})));return function(){return t.apply(this,arguments)}}(),m=function(){var t=c(i().mark((function t(){var a,s,c=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return a=c.length>0&&void 0!==c[0]?c[0]:1,t.prev=1,r.value=!1,e.value=!1,t.next=6,n.Z.get("/get-pba-events?page=".concat(a));case 6:!0===(s=t.sent).data.success&&(l.value=s.data.data,e.value=!0,0===s.data.data.data.length&&(r.value=!0)),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 14:case"end":return t.stop()}}),t,null,[[1,10]])})));return function(){return t.apply(this,arguments)}}(),w=function(){var t=c(i().mark((function t(){var e,a,s=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=s.length>0&&void 0!==s[0]?s[0]:1,t.prev=1,r.value=!1,t.next=5,n.Z.get("/get-pba-trainings?page=".concat(e));case 5:!0===(a=t.sent).data.success&&(h.value=a.data.data,0===a.data.data.data.length&&(r.value=!0)),t.next=12;break;case 9:t.prev=9,t.t0=t.catch(1),o.value=t.t0;case 12:case"end":return t.stop()}}),t,null,[[1,9]])})));return function(){return t.apply(this,arguments)}}(),x=function(){var t=c(i().mark((function t(){var e,r,a=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e=a.length>0&&void 0!==a[0]?a[0]:1,t.prev=1,t.next=4,n.Z.get("/get-distributeurs?page=".concat(e));case 4:!0===(r=t.sent).data.success&&(p.value=r.data.data),t.next=11;break;case 8:t.prev=8,t.t0=t.catch(1),o.value=t.t0;case 11:case"end":return t.stop()}}),t,null,[[1,8]])})));return function(){return t.apply(this,arguments)}}(),k=function(){var t=c(i().mark((function t(){var a,s,c=arguments;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return a=c.length>0&&void 0!==c[0]?c[0]:1,t.prev=1,r.value=!1,e.value=!1,t.next=6,n.Z.get("/get-pba-team?page=".concat(a));case 6:!0===(s=t.sent).data.success&&(f.value=s.data.data,e.value=!0,0===s.data.data.data.length&&(r.value=!0)),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 14:case"end":return t.stop()}}),t,null,[[1,10]])})));return function(){return t.apply(this,arguments)}}(),P=function(){var t=c(i().mark((function t(r){var a;return i().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e.value=!1,t.prev=1,u.value=[],t.next=5,n.Z.get("/get-books-by-category/".concat(r));case 5:!0===(a=t.sent).data.success&&(e.value=!0,u.value=a.data.data),t.next=13;break;case 9:t.prev=9,t.t0=t.catch(1),o.value=t.t0,e.value=!0;case 13:case"end":return t.stop()}}),t,null,[[1,9]])})));return function(e){return t.apply(this,arguments)}}();return{getAllCategories:d,categories:s,success:e,loader:t,getAllBooks:v,books:u,filterBookByCategoryId:P,getBooksAParaitre:g,getLivresHipp:b,showEmpty:r,getBooksNouveautes:y,getPbaEvents:m,evenements:l,getPbaTrainings:w,trainings:h,getPbaTeam:k,teams:f,getDistributeurs:x,distributeurs:p}}},4165:(t,e,r)=>{r.d(e,{Z:()=>o});var n=r(3645),a=r.n(n)()((function(t){return t[1]}));a.push([t.id,".btn-b[data-v-0e1e31b2]{--bs-btn-padding-x:0.75rem;--bs-btn-padding-y:0.375rem;--bs-btn-font-family: ;--bs-btn-font-size:1rem;--bs-btn-font-weight:400;--bs-btn-line-height:1.5;--bs-btn-color:var(--bs-body-color);--bs-btn-bg:transparent;--bs-btn-border-width:var(--bs-border-width);--bs-btn-border-color:transparent;--bs-btn-border-radius:var(--bs-border-radius);--bs-btn-hover-border-color:transparent;--bs-btn-box-shadow:inset 0 1px 0 hsla(0,0%,100%,.15),0 1px 1px rgba(0,0,0,.075);--bs-btn-disabled-opacity:0.65;--bs-btn-focus-box-shadow:0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb),.5);background-color:var(--bs-btn-bg);border:var(--bs-btn-border-width) solid var(--bs-btn-border-color);border-radius:var(--bs-btn-border-radius);border-radius:11px;color:var(--bs-btn-color);cursor:pointer;display:inline-block;font-family:var(--bs-btn-font-family);font-size:var(--bs-btn-font-size);font-weight:var(--bs-btn-font-weight);line-height:var(--bs-btn-line-height);padding:var(--bs-btn-padding-y) var(--bs-btn-padding-x);text-align:center;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-user-select:none;-moz-user-select:none;user-select:none;vertical-align:middle}.btn-b[data-v-0e1e31b2],.btn-sm[data-v-0e1e31b2]{--bs-btn-padding-y:0.25rem;--bs-btn-padding-x:0.5rem;--bs-btn-font-size:0.875rem;--bs-btn-border-radius:var(--bs-border-radius-sm)}.btn-b-success[data-v-0e1e31b2]{--bs-btn-color:#fff;--bs-btn-bg:#198754;--bs-btn-border-color:#198754;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#157347;--bs-btn-hover-border-color:#146c43;--bs-btn-focus-shadow-rgb:60,153,110;--bs-btn-active-color:#fff;--bs-btn-active-bg:#146c43;--bs-btn-active-border-color:#13653f;--bs-btn-active-shadow:inset 0 3px 5px rgba(0,0,0,.125);--bs-btn-disabled-color:#fff;--bs-btn-disabled-bg:#198754;--bs-btn-disabled-border-color:#198754}.btn-b-danger[data-v-0e1e31b2]{--bs-btn-color:#fff;--bs-btn-bg:#893003;--bs-btn-border-color:#893003;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#bb2d3b;--bs-btn-hover-border-color:#b02a37;--bs-btn-focus-shadow-rgb:225,83,97;--bs-btn-active-color:#fff;--bs-btn-active-bg:#b02a37;--bs-btn-active-border-color:#a52834;--bs-btn-active-shadow:inset 0 3px 5px rgba(0,0,0,.125);--bs-btn-disabled-color:#fff;--bs-btn-disabled-bg:#893003;--bs-btn-disabled-border-color:#893003}",""]);const o=a},2992:(t,e,r)=>{r.d(e,{Z:()=>n});const n="/images/loading-loading-forever.gif?1952935ed80fba5926fe769b3ee0a9df"},7823:(t,e,r)=>{r.d(e,{SC:()=>d});var n=r(821);const a={emits:["pagination-change-page"],props:{data:{type:Object,default:()=>{}},limit:{type:Number,default:0},keepLength:{type:Boolean,default:!1}},computed:{isApiResource(){return!!this.data.meta},currentPage(){return this.isApiResource?this.data.meta.current_page:this.data.current_page},firstPageUrl(){return this.isApiResource?this.data.links.first:null},from(){return this.isApiResource?this.data.meta.from:this.data.from},lastPage(){return this.isApiResource?this.data.meta.last_page:this.data.last_page},lastPageUrl(){return this.isApiResource?this.data.links.last:null},nextPageUrl(){return this.isApiResource?this.data.links.next:this.data.next_page_url},perPage(){return this.isApiResource?this.data.meta.per_page:this.data.per_page},prevPageUrl(){return this.isApiResource?this.data.links.prev:this.data.prev_page_url},to(){return this.isApiResource?this.data.meta.to:this.data.to},total(){return this.isApiResource?this.data.meta.total:this.data.total},pageRange(){if(-1===this.limit)return 0;if(0===this.limit)return this.lastPage;for(var t,e=this.currentPage,r=this.keepLength,n=this.lastPage,a=this.limit,o=e-a,i=e+a,s=2*(a+2),c=2*(a+2)-1,u=[],l=[],h=1;h<=n;h++)(1===h||h===n||h>=o&&h<=i||r&&h<s&&e<s-2||r&&h>n-c&&e>n-c+2)&&u.push(h);return u.forEach((function(e){t&&(e-t==2?l.push(t+1):e-t!=1&&l.push("...")),l.push(e),t=e})),l}},methods:{previousPage(){this.selectPage(this.currentPage-1)},nextPage(){this.selectPage(this.currentPage+1)},selectPage(t){"..."===t||t===this.currentPage||this.$emit("pagination-change-page",t)}},render(){return this.$slots.default({data:this.data,limit:this.limit,computed:{isApiResource:this.isApiResource,currentPage:this.currentPage,firstPageUrl:this.firstPageUrl,from:this.from,lastPage:this.lastPage,lastPageUrl:this.lastPageUrl,nextPageUrl:this.nextPageUrl,perPage:this.perPage,prevPageUrl:this.prevPageUrl,to:this.to,total:this.total,pageRange:this.pageRange},prevButtonEvents:{click:t=>{t.preventDefault(),this.previousPage()}},nextButtonEvents:{click:t=>{t.preventDefault(),this.nextPage()}},pageButtonEvents:t=>({click:e=>{e.preventDefault(),this.selectPage(t)}})})}},o=(t,e)=>{const r=t.__vccOpts||t;for(const[t,n]of e)r[t]=n;return r},i={compatConfig:{MODE:3},inheritAttrs:!1,emits:["pagination-change-page"],components:{RenderlessPagination:a},props:{data:{type:Object,default:()=>{}},limit:{type:Number,default:0},keepLength:{type:Boolean,default:!1},showDisabled:{type:Boolean,default:!1},size:{type:String,default:"default",validator:t=>-1!==["small","default","large"].indexOf(t)},align:{type:String,default:"left",validator:t=>-1!==["left","center","right"].indexOf(t)}},methods:{onPaginationChangePage(t){this.$emit("pagination-change-page",t)}}},s=["tabindex"],c=(0,n._)("span",{"aria-hidden":"true"},"«",-1),u=(0,n._)("span",{class:"sr-only"},"Previous",-1),l={key:0,class:"sr-only"},h=["tabindex"],p=(0,n._)("span",{"aria-hidden":"true"},"»",-1),f=(0,n._)("span",{class:"sr-only"},"Next",-1);const d=o(i,[["render",function(t,e,r,a,o,i){const d=(0,n.up)("RenderlessPagination");return(0,n.wg)(),(0,n.j4)(d,{data:r.data,limit:r.limit,"keep-length":r.keepLength,onPaginationChangePage:i.onPaginationChangePage},{default:(0,n.w5)((e=>[e.computed.total>e.computed.perPage?((0,n.wg)(),(0,n.iD)("ul",(0,n.dG)({key:0},t.$attrs,{class:["pagination",{"pagination-sm":"small"==r.size,"pagination-lg":"large"==r.size,"justify-content-center":"center"==r.align,"justify-content-end":"right"==r.align}]}),[e.computed.prevPageUrl||r.showDisabled?((0,n.wg)(),(0,n.iD)("li",{key:0,class:(0,n.C_)(["page-item pagination-prev-nav",{disabled:!e.computed.prevPageUrl}])},[(0,n._)("a",(0,n.dG)({class:"page-link",href:"#","aria-label":"Previous",tabindex:!e.computed.prevPageUrl&&-1},(0,n.mx)(e.prevButtonEvents,!0)),[(0,n.WI)(t.$slots,"prev-nav",{},(()=>[c,u]))],16,s)],2)):(0,n.kq)("",!0),((0,n.wg)(!0),(0,n.iD)(n.HY,null,(0,n.Ko)(e.computed.pageRange,((t,r)=>((0,n.wg)(),(0,n.iD)("li",{class:(0,n.C_)(["page-item pagination-page-nav",{active:t==e.computed.currentPage}]),key:r},[(0,n._)("a",(0,n.dG)({class:"page-link",href:"#"},(0,n.mx)(e.pageButtonEvents(t),!0)),[(0,n.Uk)((0,n.zw)(t)+" ",1),t==e.computed.currentPage?((0,n.wg)(),(0,n.iD)("span",l,"(current)")):(0,n.kq)("",!0)],16)],2)))),128)),e.computed.nextPageUrl||r.showDisabled?((0,n.wg)(),(0,n.iD)("li",{key:1,class:(0,n.C_)(["page-item pagination-next-nav",{disabled:!e.computed.nextPageUrl}])},[(0,n._)("a",(0,n.dG)({class:"page-link",href:"#","aria-label":"Next",tabindex:!e.computed.nextPageUrl&&-1},(0,n.mx)(e.nextButtonEvents,!0)),[(0,n.WI)(t.$slots,"next-nav",{},(()=>[p,f]))],16,h)],2)):(0,n.kq)("",!0)],16)):(0,n.kq)("",!0)])),_:3},8,["data","limit","keep-length","onPaginationChangePage"])}]]);Boolean,Boolean;Boolean},5634:(t,e,r)=>{r.r(e),r.d(e,{default:()=>U});var n=r(821),a=r(2992),o=function(t){return(0,n.dD)("data-v-0e1e31b2"),t=t(),(0,n.Cn)(),t},i={id:"home-6"},s=(0,n.uE)('<section class="d-page-banner" data-v-0e1e31b2><div class="container" data-v-0e1e31b2><div class="row" data-v-0e1e31b2><div class="content" data-v-0e1e31b2><h1 class="margin-banner" data-v-0e1e31b2>Nouveautés</h1><ul class="breadcrumb" data-v-0e1e31b2></ul></div></div></div></section>',1),c={class:"home6-team-s team-area-s2"},u={class:"container"},l={key:0,class:"text-center"},h=[o((function(){return(0,n._)("img",{style:{margin:"auto",height:"50px"},src:a.Z,alt:""},null,-1)}))],p={class:"row project-slider-container-s2"},f={class:"pricing-t-s1 shadow"},d={class:"pt-header"},v={class:"pt-ribbon"},g=["src"],b={class:"price description-book mt-2"},y=o((function(){return(0,n._)("span",{class:"p-suf",style:{"font-weight":"bolder"}},"Auteur : ",-1)})),m={class:"pt-footer"},w=["href"],x=["href"],k={class:"text-center",style:{"margin-top":"-10px"}},P={key:0,class:"s-sub-title"},_={class:"b-pagination",style:{"margin-top":"20px"}};var L=r(7884);function E(t){return E="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},E(t)}function O(){O=function(){return t};var t={},e=Object.prototype,r=e.hasOwnProperty,n=Object.defineProperty||function(t,e,r){t[e]=r.value},a="function"==typeof Symbol?Symbol:{},o=a.iterator||"@@iterator",i=a.asyncIterator||"@@asyncIterator",s=a.toStringTag||"@@toStringTag";function c(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{c({},"")}catch(t){c=function(t,e,r){return t[e]=r}}function u(t,e,r,a){var o=e&&e.prototype instanceof p?e:p,i=Object.create(o.prototype),s=new L(a||[]);return n(i,"_invoke",{value:x(t,r,s)}),i}function l(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=u;var h={};function p(){}function f(){}function d(){}var v={};c(v,o,(function(){return this}));var g=Object.getPrototypeOf,b=g&&g(g(j([])));b&&b!==e&&r.call(b,o)&&(v=b);var y=d.prototype=p.prototype=Object.create(v);function m(t){["next","throw","return"].forEach((function(e){c(t,e,(function(t){return this._invoke(e,t)}))}))}function w(t,e){function a(n,o,i,s){var c=l(t[n],t,o);if("throw"!==c.type){var u=c.arg,h=u.value;return h&&"object"==E(h)&&r.call(h,"__await")?e.resolve(h.__await).then((function(t){a("next",t,i,s)}),(function(t){a("throw",t,i,s)})):e.resolve(h).then((function(t){u.value=t,i(u)}),(function(t){return a("throw",t,i,s)}))}s(c.arg)}var o;n(this,"_invoke",{value:function(t,r){function n(){return new e((function(e,n){a(t,r,e,n)}))}return o=o?o.then(n,n):n()}})}function x(t,e,r){var n="suspendedStart";return function(a,o){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===a)throw o;return S()}for(r.method=a,r.arg=o;;){var i=r.delegate;if(i){var s=k(i,r);if(s){if(s===h)continue;return s}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===n)throw n="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n="executing";var c=l(t,e,r);if("normal"===c.type){if(n=r.done?"completed":"suspendedYield",c.arg===h)continue;return{value:c.arg,done:r.done}}"throw"===c.type&&(n="completed",r.method="throw",r.arg=c.arg)}}}function k(t,e){var r=e.method,n=t.iterator[r];if(void 0===n)return e.delegate=null,"throw"===r&&t.iterator.return&&(e.method="return",e.arg=void 0,k(t,e),"throw"===e.method)||"return"!==r&&(e.method="throw",e.arg=new TypeError("The iterator does not provide a '"+r+"' method")),h;var a=l(n,t.iterator,e.arg);if("throw"===a.type)return e.method="throw",e.arg=a.arg,e.delegate=null,h;var o=a.arg;return o?o.done?(e[t.resultName]=o.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=void 0),e.delegate=null,h):o:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,h)}function P(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function _(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function L(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(P,this),this.reset(!0)}function j(t){if(t){var e=t[o];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var n=-1,a=function e(){for(;++n<t.length;)if(r.call(t,n))return e.value=t[n],e.done=!1,e;return e.value=void 0,e.done=!0,e};return a.next=a}}return{next:S}}function S(){return{value:void 0,done:!0}}return f.prototype=d,n(y,"constructor",{value:d,configurable:!0}),n(d,"constructor",{value:f,configurable:!0}),f.displayName=c(d,s,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===f||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,d):(t.__proto__=d,c(t,s,"GeneratorFunction")),t.prototype=Object.create(y),t},t.awrap=function(t){return{__await:t}},m(w.prototype),c(w.prototype,i,(function(){return this})),t.AsyncIterator=w,t.async=function(e,r,n,a,o){void 0===o&&(o=Promise);var i=new w(u(e,r,n,a),o);return t.isGeneratorFunction(r)?i:i.next().then((function(t){return t.done?t.value:i.next()}))},m(y),c(y,s,"Generator"),c(y,o,(function(){return this})),c(y,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=Object(t),r=[];for(var n in e)r.push(n);return r.reverse(),function t(){for(;r.length;){var n=r.pop();if(n in e)return t.value=n,t.done=!1,t}return t.done=!0,t}},t.values=j,L.prototype={constructor:L,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(_),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function n(r,n){return i.type="throw",i.arg=t,e.next=r,n&&(e.method="next",e.arg=void 0),!!n}for(var a=this.tryEntries.length-1;a>=0;--a){var o=this.tryEntries[a],i=o.completion;if("root"===o.tryLoc)return n("end");if(o.tryLoc<=this.prev){var s=r.call(o,"catchLoc"),c=r.call(o,"finallyLoc");if(s&&c){if(this.prev<o.catchLoc)return n(o.catchLoc,!0);if(this.prev<o.finallyLoc)return n(o.finallyLoc)}else if(s){if(this.prev<o.catchLoc)return n(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return n(o.finallyLoc)}}}},abrupt:function(t,e){for(var n=this.tryEntries.length-1;n>=0;--n){var a=this.tryEntries[n];if(a.tryLoc<=this.prev&&r.call(a,"finallyLoc")&&this.prev<a.finallyLoc){var o=a;break}}o&&("break"===t||"continue"===t)&&o.tryLoc<=e&&e<=o.finallyLoc&&(o=null);var i=o?o.completion:{};return i.type=t,i.arg=e,o?(this.method="next",this.next=o.finallyLoc,h):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),h},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),_(r),h}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var a=n.arg;_(r)}return a}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:j(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),h}},t}function j(t,e,r,n,a,o,i){try{var s=t[o](i),c=s.value}catch(t){return void r(t)}s.done?e(c):Promise.resolve(c).then(n,a)}function S(t){return function(){var e=this,r=arguments;return new Promise((function(n,a){var o=t.apply(e,r);function i(t){j(o,n,a,i,s,"next",t)}function s(t){j(o,n,a,i,s,"throw",t)}i(void 0)}))}}const A={name:"BookView",components:{Bootstrap4Pagination:r(7823).SC},setup:function(){var t=(0,L.Z)(),e=t.getBooksNouveautes,r=t.books,a=t.success,o=t.showEmpty;return(0,n.bv)(S(O().mark((function t(){return O().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e(1);case 2:case"end":return t.stop()}}),t)})))),{books:r,getBooksNouveautes:e,success:a,showEmpty:o}}};var B=r(3379),N=r.n(B),D=r(4165),G={insert:"head",singleton:!1};N()(D.Z,G);D.Z.locals;const U=(0,r(3744).Z)(A,[["render",function(t,e,r,a,o,L){var E=(0,n.up)("Bootstrap4Pagination");return(0,n.wg)(),(0,n.iD)("div",i,[s,(0,n._)("section",c,[(0,n._)("div",u,[!1===a.success?((0,n.wg)(),(0,n.iD)("p",l,h)):(0,n.kq)("",!0),(0,n._)("div",p,[((0,n.wg)(!0),(0,n.iD)(n.HY,null,(0,n.Ko)(a.books.data,(function(t){return(0,n.wg)(),(0,n.iD)("div",{class:"col-md-4 mb-5",key:t.id},[(0,n._)("div",f,[(0,n._)("div",d,[(0,n._)("div",v,(0,n.zw)(t.real_price)+" Fcfa",1)]),(0,n._)("img",{src:t.image_url,alt:""},null,8,g),(0,n._)("div",b,[y,(0,n.Uk)(" "+(0,n.zw)(t.author)+" ",1),(0,n._)("p",null,(0,n.zw)(t.description),1)]),(0,n._)("div",m,[t.amazon?((0,n.wg)(),(0,n.iD)("a",{key:0,class:"btn-b btn-sm btn-b-danger mb-1",target:"_blank",href:t.amazon},"Acheter sur Amazon ",8,w)):(0,n.kq)("",!0),(0,n._)("a",{class:"btn-b btn-sm btn-b-success",href:"https://api.whatsapp.com/send?phone=22942225090&text=Bonjour/Bonsoir PBA! \n Je veux commander le livre: ".concat(t.title,".")},"Commander via WhatsApp",8,x)])])])})),128)),(0,n._)("p",k,[1==a.showEmpty?((0,n.wg)(),(0,n.iD)("span",P,"Aucun livre disponible, ")):(0,n.kq)("",!0)])]),(0,n._)("div",_,[(0,n.Wm)(E,{data:a.books,onPaginationChangePage:a.getBooksNouveautes,"show-disabled":!0,align:t.right},null,8,["data","onPaginationChangePage","align"])])])])])}],["__scopeId","data-v-0e1e31b2"]])}}]);