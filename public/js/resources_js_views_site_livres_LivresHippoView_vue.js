"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_site_livres_LivresHippoView_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js ***!
  \****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
/* harmony import */ var _services_books__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../services/books */ "./resources/js/services/books.js");
/* harmony import */ var laravel_vue_pagination__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! laravel-vue-pagination */ "./node_modules/laravel-vue-pagination/dist/laravel-vue-pagination.es.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var methodName = context.method, method = delegate.iterator[methodName]; if (undefined === method) return context.delegate = null, "throw" === methodName && delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method) || "return" !== methodName && (context.method = "throw", context.arg = new TypeError("The iterator does not provide a '" + methodName + "' method")), ContinueSentinel; var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) keys.push(key); return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'LivresHippoView',
  components: {
    Bootstrap4Pagination: laravel_vue_pagination__WEBPACK_IMPORTED_MODULE_2__.Bootstrap4Pagination
  },
  setup: function setup() {
    var _useBooks = (0,_services_books__WEBPACK_IMPORTED_MODULE_1__["default"])(),
      getLivresHipp = _useBooks.getLivresHipp,
      books = _useBooks.books,
      success = _useBooks.success,
      showEmpty = _useBooks.showEmpty;
    (0,vue__WEBPACK_IMPORTED_MODULE_0__.onMounted)( /*#__PURE__*/_asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            _context.next = 2;
            return getLivresHipp(1);
          case 2:
          case "end":
            return _context.stop();
        }
      }, _callee);
    })));
    return {
      books: books,
      getLivresHipp: getLivresHipp,
      success: success,
      showEmpty: showEmpty
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286":
/*!********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286 ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
/* harmony import */ var _asset_loader_loading_loading_forever_gif__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../../../../asset/loader/loading-loading-forever.gif */ "./resources/asset/loader/loading-loading-forever.gif");


var _hoisted_1 = {
  id: "home-6"
};
var _hoisted_2 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<section class=\"d-page-banner\"><div class=\"container\"><div class=\"row\"><div class=\"content\"><h1 class=\"margin-banner\">LivresHippo</h1><ul class=\"breadcrumb\"></ul></div></div></div></section>", 1);
var _hoisted_3 = {
  "class": "project-slider-area-s2"
};
var _hoisted_4 = {
  "class": "container"
};
var _hoisted_5 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "s-title-wrap text-center"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", {
  "class": "s-title"
}, "Les livresHippo")], -1 /* HOISTED */);
var _hoisted_6 = {
  key: 0,
  "class": "text-center"
};
var _hoisted_7 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
  style: {
    "margin": "auto",
    "height": "50px"
  },
  src: _asset_loader_loading_loading_forever_gif__WEBPACK_IMPORTED_MODULE_1__["default"],
  alt: ""
}, null, -1 /* HOISTED */);
var _hoisted_8 = [_hoisted_7];
var _hoisted_9 = {
  "class": "row project-slider-container-s2"
};
var _hoisted_10 = {
  "class": "pricing-t-s1 shadow"
};
var _hoisted_11 = {
  "class": "pt-header"
};
var _hoisted_12 = {
  "class": "pt-ribbon"
};
var _hoisted_13 = ["src"];
var _hoisted_14 = {
  "class": "price description-book mt-2"
};
var _hoisted_15 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "p-suf",
  style: {
    "font-weight": "bolder"
  }
}, "Auteur : ", -1 /* HOISTED */);
var _hoisted_16 = {
  "class": "pt-footer"
};
var _hoisted_17 = ["href"];
var _hoisted_18 = {
  "class": "text-center",
  style: {
    "margin-top": "-10px"
  }
};
var _hoisted_19 = {
  key: 0,
  "class": "s-sub-title"
};
var _hoisted_20 = {
  "class": "b-pagination",
  style: {
    "margin-top": "20px"
  }
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_Bootstrap4Pagination = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Bootstrap4Pagination");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [_hoisted_2, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("section", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [_hoisted_5, $setup.success === false ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("p", _hoisted_6, _hoisted_8)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($setup.books.data, function (book) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "col-md-4 mb-5",
      key: book.id
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(book.real_price) + " Fcfa", 1 /* TEXT */)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
      src: book.image_url,
      alt: ""
    }, null, 8 /* PROPS */, _hoisted_13), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [_hoisted_15, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(book.author) + " ", 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(book.description), 1 /* TEXT */)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      "class": "pt-btn btn btn-s1",
      href: "https://api.whatsapp.com/send?phone=22942225090&text=Bonjour/Bonsoir PBA! \n Je veux commander le livre: ".concat(book.title, ".")
    }, "Commander", 8 /* PROPS */, _hoisted_17)])])]);
  }), 128 /* KEYED_FRAGMENT */)), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_18, [$setup.showEmpty == true ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("span", _hoisted_19, "Aucun livre disponible, ")) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_20, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Bootstrap4Pagination, {
    data: $setup.books,
    onPaginationChangePage: $setup.getLivresHipp,
    "show-disabled": true,
    align: _ctx.right
  }, null, 8 /* PROPS */, ["data", "onPaginationChangePage", "align"])])])])]);
}

/***/ }),

/***/ "./resources/js/services/books.js":
/*!****************************************!*\
  !*** ./resources/js/services/books.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ useBooks)
/* harmony export */ });
/* harmony import */ var _helpers_axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../helpers/axios */ "./resources/js/helpers/axios.js");
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return exports; }; var exports = {}, Op = Object.prototype, hasOwn = Op.hasOwnProperty, defineProperty = Object.defineProperty || function (obj, key, desc) { obj[key] = desc.value; }, $Symbol = "function" == typeof Symbol ? Symbol : {}, iteratorSymbol = $Symbol.iterator || "@@iterator", asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator", toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag"; function define(obj, key, value) { return Object.defineProperty(obj, key, { value: value, enumerable: !0, configurable: !0, writable: !0 }), obj[key]; } try { define({}, ""); } catch (err) { define = function define(obj, key, value) { return obj[key] = value; }; } function wrap(innerFn, outerFn, self, tryLocsList) { var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator, generator = Object.create(protoGenerator.prototype), context = new Context(tryLocsList || []); return defineProperty(generator, "_invoke", { value: makeInvokeMethod(innerFn, self, context) }), generator; } function tryCatch(fn, obj, arg) { try { return { type: "normal", arg: fn.call(obj, arg) }; } catch (err) { return { type: "throw", arg: err }; } } exports.wrap = wrap; var ContinueSentinel = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var IteratorPrototype = {}; define(IteratorPrototype, iteratorSymbol, function () { return this; }); var getProto = Object.getPrototypeOf, NativeIteratorPrototype = getProto && getProto(getProto(values([]))); NativeIteratorPrototype && NativeIteratorPrototype !== Op && hasOwn.call(NativeIteratorPrototype, iteratorSymbol) && (IteratorPrototype = NativeIteratorPrototype); var Gp = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(IteratorPrototype); function defineIteratorMethods(prototype) { ["next", "throw", "return"].forEach(function (method) { define(prototype, method, function (arg) { return this._invoke(method, arg); }); }); } function AsyncIterator(generator, PromiseImpl) { function invoke(method, arg, resolve, reject) { var record = tryCatch(generator[method], generator, arg); if ("throw" !== record.type) { var result = record.arg, value = result.value; return value && "object" == _typeof(value) && hasOwn.call(value, "__await") ? PromiseImpl.resolve(value.__await).then(function (value) { invoke("next", value, resolve, reject); }, function (err) { invoke("throw", err, resolve, reject); }) : PromiseImpl.resolve(value).then(function (unwrapped) { result.value = unwrapped, resolve(result); }, function (error) { return invoke("throw", error, resolve, reject); }); } reject(record.arg); } var previousPromise; defineProperty(this, "_invoke", { value: function value(method, arg) { function callInvokeWithMethodAndArg() { return new PromiseImpl(function (resolve, reject) { invoke(method, arg, resolve, reject); }); } return previousPromise = previousPromise ? previousPromise.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(innerFn, self, context) { var state = "suspendedStart"; return function (method, arg) { if ("executing" === state) throw new Error("Generator is already running"); if ("completed" === state) { if ("throw" === method) throw arg; return doneResult(); } for (context.method = method, context.arg = arg;;) { var delegate = context.delegate; if (delegate) { var delegateResult = maybeInvokeDelegate(delegate, context); if (delegateResult) { if (delegateResult === ContinueSentinel) continue; return delegateResult; } } if ("next" === context.method) context.sent = context._sent = context.arg;else if ("throw" === context.method) { if ("suspendedStart" === state) throw state = "completed", context.arg; context.dispatchException(context.arg); } else "return" === context.method && context.abrupt("return", context.arg); state = "executing"; var record = tryCatch(innerFn, self, context); if ("normal" === record.type) { if (state = context.done ? "completed" : "suspendedYield", record.arg === ContinueSentinel) continue; return { value: record.arg, done: context.done }; } "throw" === record.type && (state = "completed", context.method = "throw", context.arg = record.arg); } }; } function maybeInvokeDelegate(delegate, context) { var methodName = context.method, method = delegate.iterator[methodName]; if (undefined === method) return context.delegate = null, "throw" === methodName && delegate.iterator["return"] && (context.method = "return", context.arg = undefined, maybeInvokeDelegate(delegate, context), "throw" === context.method) || "return" !== methodName && (context.method = "throw", context.arg = new TypeError("The iterator does not provide a '" + methodName + "' method")), ContinueSentinel; var record = tryCatch(method, delegate.iterator, context.arg); if ("throw" === record.type) return context.method = "throw", context.arg = record.arg, context.delegate = null, ContinueSentinel; var info = record.arg; return info ? info.done ? (context[delegate.resultName] = info.value, context.next = delegate.nextLoc, "return" !== context.method && (context.method = "next", context.arg = undefined), context.delegate = null, ContinueSentinel) : info : (context.method = "throw", context.arg = new TypeError("iterator result is not an object"), context.delegate = null, ContinueSentinel); } function pushTryEntry(locs) { var entry = { tryLoc: locs[0] }; 1 in locs && (entry.catchLoc = locs[1]), 2 in locs && (entry.finallyLoc = locs[2], entry.afterLoc = locs[3]), this.tryEntries.push(entry); } function resetTryEntry(entry) { var record = entry.completion || {}; record.type = "normal", delete record.arg, entry.completion = record; } function Context(tryLocsList) { this.tryEntries = [{ tryLoc: "root" }], tryLocsList.forEach(pushTryEntry, this), this.reset(!0); } function values(iterable) { if (iterable) { var iteratorMethod = iterable[iteratorSymbol]; if (iteratorMethod) return iteratorMethod.call(iterable); if ("function" == typeof iterable.next) return iterable; if (!isNaN(iterable.length)) { var i = -1, next = function next() { for (; ++i < iterable.length;) if (hasOwn.call(iterable, i)) return next.value = iterable[i], next.done = !1, next; return next.value = undefined, next.done = !0, next; }; return next.next = next; } } return { next: doneResult }; } function doneResult() { return { value: undefined, done: !0 }; } return GeneratorFunction.prototype = GeneratorFunctionPrototype, defineProperty(Gp, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), defineProperty(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, toStringTagSymbol, "GeneratorFunction"), exports.isGeneratorFunction = function (genFun) { var ctor = "function" == typeof genFun && genFun.constructor; return !!ctor && (ctor === GeneratorFunction || "GeneratorFunction" === (ctor.displayName || ctor.name)); }, exports.mark = function (genFun) { return Object.setPrototypeOf ? Object.setPrototypeOf(genFun, GeneratorFunctionPrototype) : (genFun.__proto__ = GeneratorFunctionPrototype, define(genFun, toStringTagSymbol, "GeneratorFunction")), genFun.prototype = Object.create(Gp), genFun; }, exports.awrap = function (arg) { return { __await: arg }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, asyncIteratorSymbol, function () { return this; }), exports.AsyncIterator = AsyncIterator, exports.async = function (innerFn, outerFn, self, tryLocsList, PromiseImpl) { void 0 === PromiseImpl && (PromiseImpl = Promise); var iter = new AsyncIterator(wrap(innerFn, outerFn, self, tryLocsList), PromiseImpl); return exports.isGeneratorFunction(outerFn) ? iter : iter.next().then(function (result) { return result.done ? result.value : iter.next(); }); }, defineIteratorMethods(Gp), define(Gp, toStringTagSymbol, "Generator"), define(Gp, iteratorSymbol, function () { return this; }), define(Gp, "toString", function () { return "[object Generator]"; }), exports.keys = function (val) { var object = Object(val), keys = []; for (var key in object) keys.push(key); return keys.reverse(), function next() { for (; keys.length;) { var key = keys.pop(); if (key in object) return next.value = key, next.done = !1, next; } return next.done = !0, next; }; }, exports.values = values, Context.prototype = { constructor: Context, reset: function reset(skipTempReset) { if (this.prev = 0, this.next = 0, this.sent = this._sent = undefined, this.done = !1, this.delegate = null, this.method = "next", this.arg = undefined, this.tryEntries.forEach(resetTryEntry), !skipTempReset) for (var name in this) "t" === name.charAt(0) && hasOwn.call(this, name) && !isNaN(+name.slice(1)) && (this[name] = undefined); }, stop: function stop() { this.done = !0; var rootRecord = this.tryEntries[0].completion; if ("throw" === rootRecord.type) throw rootRecord.arg; return this.rval; }, dispatchException: function dispatchException(exception) { if (this.done) throw exception; var context = this; function handle(loc, caught) { return record.type = "throw", record.arg = exception, context.next = loc, caught && (context.method = "next", context.arg = undefined), !!caught; } for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i], record = entry.completion; if ("root" === entry.tryLoc) return handle("end"); if (entry.tryLoc <= this.prev) { var hasCatch = hasOwn.call(entry, "catchLoc"), hasFinally = hasOwn.call(entry, "finallyLoc"); if (hasCatch && hasFinally) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } else if (hasCatch) { if (this.prev < entry.catchLoc) return handle(entry.catchLoc, !0); } else { if (!hasFinally) throw new Error("try statement without catch or finally"); if (this.prev < entry.finallyLoc) return handle(entry.finallyLoc); } } } }, abrupt: function abrupt(type, arg) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc <= this.prev && hasOwn.call(entry, "finallyLoc") && this.prev < entry.finallyLoc) { var finallyEntry = entry; break; } } finallyEntry && ("break" === type || "continue" === type) && finallyEntry.tryLoc <= arg && arg <= finallyEntry.finallyLoc && (finallyEntry = null); var record = finallyEntry ? finallyEntry.completion : {}; return record.type = type, record.arg = arg, finallyEntry ? (this.method = "next", this.next = finallyEntry.finallyLoc, ContinueSentinel) : this.complete(record); }, complete: function complete(record, afterLoc) { if ("throw" === record.type) throw record.arg; return "break" === record.type || "continue" === record.type ? this.next = record.arg : "return" === record.type ? (this.rval = this.arg = record.arg, this.method = "return", this.next = "end") : "normal" === record.type && afterLoc && (this.next = afterLoc), ContinueSentinel; }, finish: function finish(finallyLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.finallyLoc === finallyLoc) return this.complete(entry.completion, entry.afterLoc), resetTryEntry(entry), ContinueSentinel; } }, "catch": function _catch(tryLoc) { for (var i = this.tryEntries.length - 1; i >= 0; --i) { var entry = this.tryEntries[i]; if (entry.tryLoc === tryLoc) { var record = entry.completion; if ("throw" === record.type) { var thrown = record.arg; resetTryEntry(entry); } return thrown; } } throw new Error("illegal catch attempt"); }, delegateYield: function delegateYield(iterable, resultName, nextLoc) { return this.delegate = { iterator: values(iterable), resultName: resultName, nextLoc: nextLoc }, "next" === this.method && (this.arg = undefined), ContinueSentinel; } }, exports; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }


function useBooks() {
  var structure = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)();
  var loader = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)(false);
  var success = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)(false);
  var showEmpty = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)(false);
  var errors = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var categories = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var books = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var evenements = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var trainings = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var distributeurs = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var teams = (0,vue__WEBPACK_IMPORTED_MODULE_1__.ref)([]);
  var getAllCategories = /*#__PURE__*/function () {
    var _ref = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee() {
      var response;
      return _regeneratorRuntime().wrap(function _callee$(_context) {
        while (1) switch (_context.prev = _context.next) {
          case 0:
            success.value = false;
            _context.prev = 1;
            _context.next = 4;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get('/book-categories');
          case 4:
            response = _context.sent;
            if (response.data.success === true) {
              success.value = true;
              categories.value = response.data.data;
            }
            _context.next = 12;
            break;
          case 8:
            _context.prev = 8;
            _context.t0 = _context["catch"](1);
            errors.value = _context.t0;
            success.value = true;
          case 12:
          case "end":
            return _context.stop();
        }
      }, _callee, null, [[1, 8]]);
    }));
    return function getAllCategories() {
      return _ref.apply(this, arguments);
    };
  }();
  var getAllBooks = /*#__PURE__*/function () {
    var _ref2 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee2() {
      var page,
        response,
        _args2 = arguments;
      return _regeneratorRuntime().wrap(function _callee2$(_context2) {
        while (1) switch (_context2.prev = _context2.next) {
          case 0:
            page = _args2.length > 0 && _args2[0] !== undefined ? _args2[0] : 1;
            _context2.prev = 1;
            _context2.next = 4;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-books?page=".concat(page));
          case 4:
            response = _context2.sent;
            if (response.data.success === true) {
              books.value = response.data.data;
            }
            _context2.next = 11;
            break;
          case 8:
            _context2.prev = 8;
            _context2.t0 = _context2["catch"](1);
            errors.value = _context2.t0;
          case 11:
          case "end":
            return _context2.stop();
        }
      }, _callee2, null, [[1, 8]]);
    }));
    return function getAllBooks() {
      return _ref2.apply(this, arguments);
    };
  }();
  var getBooksAParaitre = /*#__PURE__*/function () {
    var _ref3 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee3() {
      var page,
        response,
        _args3 = arguments;
      return _regeneratorRuntime().wrap(function _callee3$(_context3) {
        while (1) switch (_context3.prev = _context3.next) {
          case 0:
            page = _args3.length > 0 && _args3[0] !== undefined ? _args3[0] : 1;
            _context3.prev = 1;
            showEmpty.value = false;
            success.value = false;
            _context3.next = 6;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-books-a-paraitre?page=".concat(page));
          case 6:
            response = _context3.sent;
            if (response.data.success === true) {
              books.value = response.data.data;
              success.value = true;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context3.next = 14;
            break;
          case 10:
            _context3.prev = 10;
            _context3.t0 = _context3["catch"](1);
            errors.value = _context3.t0;
            success.value = true;
          case 14:
          case "end":
            return _context3.stop();
        }
      }, _callee3, null, [[1, 10]]);
    }));
    return function getBooksAParaitre() {
      return _ref3.apply(this, arguments);
    };
  }();
  var getLivresHipp = /*#__PURE__*/function () {
    var _ref4 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee4() {
      var page,
        response,
        _args4 = arguments;
      return _regeneratorRuntime().wrap(function _callee4$(_context4) {
        while (1) switch (_context4.prev = _context4.next) {
          case 0:
            page = _args4.length > 0 && _args4[0] !== undefined ? _args4[0] : 1;
            _context4.prev = 1;
            showEmpty.value = false;
            success.value = false;
            _context4.next = 6;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-books-livres-hippo?page=".concat(page));
          case 6:
            response = _context4.sent;
            if (response.data.success === true) {
              books.value = response.data.data;
              success.value = true;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context4.next = 14;
            break;
          case 10:
            _context4.prev = 10;
            _context4.t0 = _context4["catch"](1);
            errors.value = _context4.t0;
            success.value = true;
          case 14:
          case "end":
            return _context4.stop();
        }
      }, _callee4, null, [[1, 10]]);
    }));
    return function getLivresHipp() {
      return _ref4.apply(this, arguments);
    };
  }();
  var getBooksNouveautes = /*#__PURE__*/function () {
    var _ref5 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee5() {
      var page,
        response,
        _args5 = arguments;
      return _regeneratorRuntime().wrap(function _callee5$(_context5) {
        while (1) switch (_context5.prev = _context5.next) {
          case 0:
            page = _args5.length > 0 && _args5[0] !== undefined ? _args5[0] : 1;
            _context5.prev = 1;
            showEmpty.value = false;
            success.value = false;
            _context5.next = 6;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-books-nouveautes?page=".concat(page));
          case 6:
            response = _context5.sent;
            if (response.data.success === true) {
              books.value = response.data.data;
              success.value = true;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context5.next = 14;
            break;
          case 10:
            _context5.prev = 10;
            _context5.t0 = _context5["catch"](1);
            errors.value = _context5.t0;
            success.value = true;
          case 14:
          case "end":
            return _context5.stop();
        }
      }, _callee5, null, [[1, 10]]);
    }));
    return function getBooksNouveautes() {
      return _ref5.apply(this, arguments);
    };
  }();
  var getPbaEvents = /*#__PURE__*/function () {
    var _ref6 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee6() {
      var page,
        response,
        _args6 = arguments;
      return _regeneratorRuntime().wrap(function _callee6$(_context6) {
        while (1) switch (_context6.prev = _context6.next) {
          case 0:
            page = _args6.length > 0 && _args6[0] !== undefined ? _args6[0] : 1;
            _context6.prev = 1;
            showEmpty.value = false;
            success.value = false;
            _context6.next = 6;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-pba-events?page=".concat(page));
          case 6:
            response = _context6.sent;
            if (response.data.success === true) {
              evenements.value = response.data.data;
              success.value = true;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context6.next = 14;
            break;
          case 10:
            _context6.prev = 10;
            _context6.t0 = _context6["catch"](1);
            errors.value = _context6.t0;
            success.value = true;
          case 14:
          case "end":
            return _context6.stop();
        }
      }, _callee6, null, [[1, 10]]);
    }));
    return function getPbaEvents() {
      return _ref6.apply(this, arguments);
    };
  }();
  var getPbaTrainings = /*#__PURE__*/function () {
    var _ref7 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee7() {
      var page,
        response,
        _args7 = arguments;
      return _regeneratorRuntime().wrap(function _callee7$(_context7) {
        while (1) switch (_context7.prev = _context7.next) {
          case 0:
            page = _args7.length > 0 && _args7[0] !== undefined ? _args7[0] : 1;
            _context7.prev = 1;
            showEmpty.value = false;
            _context7.next = 5;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-pba-trainings?page=".concat(page));
          case 5:
            response = _context7.sent;
            if (response.data.success === true) {
              trainings.value = response.data.data;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context7.next = 12;
            break;
          case 9:
            _context7.prev = 9;
            _context7.t0 = _context7["catch"](1);
            errors.value = _context7.t0;
          case 12:
          case "end":
            return _context7.stop();
        }
      }, _callee7, null, [[1, 9]]);
    }));
    return function getPbaTrainings() {
      return _ref7.apply(this, arguments);
    };
  }();
  var getDistributeurs = /*#__PURE__*/function () {
    var _ref8 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee8() {
      var page,
        response,
        _args8 = arguments;
      return _regeneratorRuntime().wrap(function _callee8$(_context8) {
        while (1) switch (_context8.prev = _context8.next) {
          case 0:
            page = _args8.length > 0 && _args8[0] !== undefined ? _args8[0] : 1;
            _context8.prev = 1;
            _context8.next = 4;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-distributeurs?page=".concat(page));
          case 4:
            response = _context8.sent;
            if (response.data.success === true) {
              distributeurs.value = response.data.data;
            }
            _context8.next = 11;
            break;
          case 8:
            _context8.prev = 8;
            _context8.t0 = _context8["catch"](1);
            errors.value = _context8.t0;
          case 11:
          case "end":
            return _context8.stop();
        }
      }, _callee8, null, [[1, 8]]);
    }));
    return function getDistributeurs() {
      return _ref8.apply(this, arguments);
    };
  }();
  var getPbaTeam = /*#__PURE__*/function () {
    var _ref9 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee9() {
      var page,
        response,
        _args9 = arguments;
      return _regeneratorRuntime().wrap(function _callee9$(_context9) {
        while (1) switch (_context9.prev = _context9.next) {
          case 0:
            page = _args9.length > 0 && _args9[0] !== undefined ? _args9[0] : 1;
            _context9.prev = 1;
            showEmpty.value = false;
            success.value = false;
            _context9.next = 6;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-pba-team?page=".concat(page));
          case 6:
            response = _context9.sent;
            if (response.data.success === true) {
              teams.value = response.data.data;
              success.value = true;
              if (response.data.data.data.length === 0) {
                showEmpty.value = true;
              }
            }
            _context9.next = 14;
            break;
          case 10:
            _context9.prev = 10;
            _context9.t0 = _context9["catch"](1);
            errors.value = _context9.t0;
            success.value = true;
          case 14:
          case "end":
            return _context9.stop();
        }
      }, _callee9, null, [[1, 10]]);
    }));
    return function getPbaTeam() {
      return _ref9.apply(this, arguments);
    };
  }();
  var filterBookByCategoryId = /*#__PURE__*/function () {
    var _ref10 = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee10(id) {
      var response;
      return _regeneratorRuntime().wrap(function _callee10$(_context10) {
        while (1) switch (_context10.prev = _context10.next) {
          case 0:
            success.value = false;
            _context10.prev = 1;
            books.value = [];
            _context10.next = 5;
            return _helpers_axios__WEBPACK_IMPORTED_MODULE_0__["default"].get("/get-books-by-category/".concat(id));
          case 5:
            response = _context10.sent;
            if (response.data.success === true) {
              success.value = true;
              books.value = response.data.data;
            }
            _context10.next = 13;
            break;
          case 9:
            _context10.prev = 9;
            _context10.t0 = _context10["catch"](1);
            errors.value = _context10.t0;
            success.value = true;
          case 13:
          case "end":
            return _context10.stop();
        }
      }, _callee10, null, [[1, 9]]);
    }));
    return function filterBookByCategoryId(_x) {
      return _ref10.apply(this, arguments);
    };
  }();
  return {
    getAllCategories: getAllCategories,
    categories: categories,
    success: success,
    loader: loader,
    getAllBooks: getAllBooks,
    books: books,
    filterBookByCategoryId: filterBookByCategoryId,
    getBooksAParaitre: getBooksAParaitre,
    getLivresHipp: getLivresHipp,
    showEmpty: showEmpty,
    getBooksNouveautes: getBooksNouveautes,
    getPbaEvents: getPbaEvents,
    evenements: evenements,
    getPbaTrainings: getPbaTrainings,
    trainings: trainings,
    getPbaTeam: getPbaTeam,
    teams: teams,
    getDistributeurs: getDistributeurs,
    distributeurs: distributeurs
  };
}

/***/ }),

/***/ "./resources/asset/loader/loading-loading-forever.gif":
/*!************************************************************!*\
  !*** ./resources/asset/loader/loading-loading-forever.gif ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ("/images/loading-loading-forever.gif?1952935ed80fba5926fe769b3ee0a9df");

/***/ }),

/***/ "./node_modules/laravel-vue-pagination/dist/laravel-vue-pagination.es.js":
/*!*******************************************************************************!*\
  !*** ./node_modules/laravel-vue-pagination/dist/laravel-vue-pagination.es.js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Bootstrap4Pagination": () => (/* binding */ ae),
/* harmony export */   "Bootstrap5Pagination": () => (/* binding */ ne),
/* harmony export */   "RenderlessPagination": () => (/* binding */ B),
/* harmony export */   "TailwindPagination": () => (/* binding */ ie)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

const B = {
  emits: ["pagination-change-page"],
  props: {
    data: {
      type: Object,
      default: () => {
      }
    },
    limit: {
      type: Number,
      default: 0
    },
    keepLength: {
      type: Boolean,
      default: !1
    }
  },
  computed: {
    isApiResource() {
      return !!this.data.meta;
    },
    currentPage() {
      return this.isApiResource ? this.data.meta.current_page : this.data.current_page;
    },
    firstPageUrl() {
      return this.isApiResource ? this.data.links.first : null;
    },
    from() {
      return this.isApiResource ? this.data.meta.from : this.data.from;
    },
    lastPage() {
      return this.isApiResource ? this.data.meta.last_page : this.data.last_page;
    },
    lastPageUrl() {
      return this.isApiResource ? this.data.links.last : null;
    },
    nextPageUrl() {
      return this.isApiResource ? this.data.links.next : this.data.next_page_url;
    },
    perPage() {
      return this.isApiResource ? this.data.meta.per_page : this.data.per_page;
    },
    prevPageUrl() {
      return this.isApiResource ? this.data.links.prev : this.data.prev_page_url;
    },
    to() {
      return this.isApiResource ? this.data.meta.to : this.data.to;
    },
    total() {
      return this.isApiResource ? this.data.meta.total : this.data.total;
    },
    pageRange() {
      if (this.limit === -1)
        return 0;
      if (this.limit === 0)
        return this.lastPage;
      for (var t = this.currentPage, g = this.keepLength, a = this.lastPage, u = this.limit, f = t - u, m = t + u, h = (u + 2) * 2, e = (u + 2) * 2 - 1, n = [], d = [], P, l = 1; l <= a; l++)
        (l === 1 || l === a || l >= f && l <= m || g && l < h && t < h - 2 || g && l > a - e && t > a - e + 2) && n.push(l);
      return n.forEach(function(x) {
        P && (x - P === 2 ? d.push(P + 1) : x - P !== 1 && d.push("...")), d.push(x), P = x;
      }), d;
    }
  },
  methods: {
    previousPage() {
      this.selectPage(this.currentPage - 1);
    },
    nextPage() {
      this.selectPage(this.currentPage + 1);
    },
    selectPage(t) {
      t === "..." || t === this.currentPage || this.$emit("pagination-change-page", t);
    }
  },
  render() {
    return this.$slots.default({
      data: this.data,
      limit: this.limit,
      computed: {
        isApiResource: this.isApiResource,
        currentPage: this.currentPage,
        firstPageUrl: this.firstPageUrl,
        from: this.from,
        lastPage: this.lastPage,
        lastPageUrl: this.lastPageUrl,
        nextPageUrl: this.nextPageUrl,
        perPage: this.perPage,
        prevPageUrl: this.prevPageUrl,
        to: this.to,
        total: this.total,
        pageRange: this.pageRange
      },
      prevButtonEvents: {
        click: (t) => {
          t.preventDefault(), this.previousPage();
        }
      },
      nextButtonEvents: {
        click: (t) => {
          t.preventDefault(), this.nextPage();
        }
      },
      pageButtonEvents: (t) => ({
        click: (g) => {
          g.preventDefault(), this.selectPage(t);
        }
      })
    });
  }
}, w = (t, g) => {
  const a = t.__vccOpts || t;
  for (const [u, f] of g)
    a[u] = f;
  return a;
}, E = {
  compatConfig: {
    MODE: 3
  },
  inheritAttrs: !1,
  emits: ["pagination-change-page"],
  components: {
    RenderlessPagination: B
  },
  props: {
    data: {
      type: Object,
      default: () => {
      }
    },
    limit: {
      type: Number,
      default: 0
    },
    keepLength: {
      type: Boolean,
      default: !1
    },
    showDisabled: {
      type: Boolean,
      default: !1
    },
    size: {
      type: String,
      default: "default",
      validator: (t) => ["small", "default", "large"].indexOf(t) !== -1
    },
    align: {
      type: String,
      default: "left",
      validator: (t) => ["left", "center", "right"].indexOf(t) !== -1
    }
  },
  methods: {
    onPaginationChangePage(t) {
      this.$emit("pagination-change-page", t);
    }
  }
}, $ = ["tabindex"], D = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { "aria-hidden": "true" }, "\xAB", -1), z = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { class: "sr-only" }, "Previous", -1), O = {
  key: 0,
  class: "sr-only"
}, N = ["tabindex"], j = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { "aria-hidden": "true" }, "\xBB", -1), L = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { class: "sr-only" }, "Next", -1);
function S(t, g, a, u, f, m) {
  const h = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("RenderlessPagination");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(h, {
    data: a.data,
    limit: a.limit,
    "keep-length": a.keepLength,
    onPaginationChangePage: m.onPaginationChangePage
  }, {
    default: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)((e) => [
      e.computed.total > e.computed.perPage ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("ul", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({ key: 0 }, t.$attrs, {
        class: ["pagination", {
          "pagination-sm": a.size == "small",
          "pagination-lg": a.size == "large",
          "justify-content-center": a.align == "center",
          "justify-content-end": a.align == "right"
        }]
      }), [
        e.computed.prevPageUrl || a.showDisabled ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          key: 0,
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-prev-nav", { disabled: !e.computed.prevPageUrl }])
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#",
            "aria-label": "Previous",
            tabindex: !e.computed.prevPageUrl && -1
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.prevButtonEvents, !0)), [
            (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "prev-nav", {}, () => [
              D,
              z
            ])
          ], 16, $)
        ], 2)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0),
        ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(!0), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)(e.computed.pageRange, (n, d) => ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-page-nav", { active: n == e.computed.currentPage }]),
          key: d
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#"
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.pageButtonEvents(n), !0)), [
            (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)((0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(n) + " ", 1),
            n == e.computed.currentPage ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("span", O, "(current)")) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
          ], 16)
        ], 2))), 128)),
        e.computed.nextPageUrl || a.showDisabled ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          key: 1,
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-next-nav", { disabled: !e.computed.nextPageUrl }])
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#",
            "aria-label": "Next",
            tabindex: !e.computed.nextPageUrl && -1
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.nextButtonEvents, !0)), [
            (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "next-nav", {}, () => [
              j,
              L
            ])
          ], 16, N)
        ], 2)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
      ], 16)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
    ]),
    _: 3
  }, 8, ["data", "limit", "keep-length", "onPaginationChangePage"]);
}
const ae = /* @__PURE__ */ w(E, [["render", S]]), M = {
  compatConfig: {
    MODE: 3
  },
  inheritAttrs: !1,
  emits: ["pagination-change-page"],
  components: {
    RenderlessPagination: B
  },
  props: {
    data: {
      type: Object,
      default: () => {
      }
    },
    limit: {
      type: Number,
      default: 0
    },
    showDisabled: {
      type: Boolean,
      default: !1
    },
    keepLength: {
      type: Boolean,
      default: !1
    },
    size: {
      type: String,
      default: "default",
      validator: (t) => ["small", "default", "large"].indexOf(t) !== -1
    },
    align: {
      type: String,
      default: "left",
      validator: (t) => ["left", "center", "right"].indexOf(t) !== -1
    }
  },
  methods: {
    onPaginationChangePage(t) {
      this.$emit("pagination-change-page", t);
    }
  }
}, V = ["tabindex"], T = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { "aria-hidden": "true" }, "\xAB", -1), F = ["aria-current"], H = ["tabindex"], q = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { "aria-hidden": "true" }, "\xBB", -1);
function G(t, g, a, u, f, m) {
  const h = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("RenderlessPagination");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(h, {
    data: a.data,
    limit: a.limit,
    "keep-length": a.keepLength,
    onPaginationChangePage: m.onPaginationChangePage
  }, {
    default: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)((e) => [
      e.computed.total > e.computed.perPage ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("ul", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({ key: 0 }, t.$attrs, {
        class: ["pagination", {
          "pagination-sm": a.size == "small",
          "pagination-lg": a.size == "large",
          "justify-content-center": a.align == "center",
          "justify-content-end": a.align == "right"
        }]
      }), [
        e.computed.prevPageUrl || a.showDisabled ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          key: 0,
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-prev-nav", { disabled: !e.computed.prevPageUrl }])
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#",
            "aria-label": "Previous",
            tabindex: !e.computed.prevPageUrl && -1
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.prevButtonEvents, !0)), [
            (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "prev-nav", {}, () => [
              T
            ])
          ], 16, V)
        ], 2)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0),
        ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(!0), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)(e.computed.pageRange, (n, d) => ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-page-nav", { active: n == e.computed.currentPage }]),
          key: d
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#"
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.pageButtonEvents(n), !0), {
            "aria-current": n == e.computed.currentPage ? "page" : null
          }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(n), 17, F)
        ], 2))), 128)),
        e.computed.nextPageUrl || a.showDisabled ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", {
          key: 1,
          class: (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["page-item pagination-next-nav", { disabled: !e.computed.nextPageUrl }])
        }, [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
            class: "page-link",
            href: "#",
            "aria-label": "Next",
            tabindex: !e.computed.nextPageUrl && -1
          }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.nextButtonEvents, !0)), [
            (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "next-nav", {}, () => [
              q
            ])
          ], 16, H)
        ], 2)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
      ], 16)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
    ]),
    _: 3
  }, 8, ["data", "limit", "keep-length", "onPaginationChangePage"]);
}
const ne = /* @__PURE__ */ w(M, [["render", G]]), I = {
  compatConfig: {
    MODE: 3
  },
  inheritAttrs: !1,
  emits: ["pagination-change-page"],
  components: {
    RenderlessPagination: B
  },
  props: {
    data: {
      type: Object,
      default: () => {
      }
    },
    limit: {
      type: Number,
      default: 0
    },
    keepLength: {
      type: Boolean,
      default: !1
    },
    itemClasses: {
      type: Array,
      default: () => [
        "bg-white",
        "text-gray-500",
        "border-gray-300",
        "hover:bg-gray-50"
      ]
    },
    activeClasses: {
      type: Array,
      default: () => [
        "bg-blue-50",
        "border-blue-500",
        "text-blue-600"
      ]
    }
  },
  methods: {
    onPaginationChangePage(t) {
      this.$emit("pagination-change-page", t);
    }
  }
}, J = ["disabled"], K = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { class: "sr-only" }, "Previous", -1), Q = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("svg", {
  class: "h-5 w-5",
  "aria-hidden": "true",
  xmlns: "http://www.w3.org/2000/svg",
  fill: "none",
  viewBox: "0 0 24 24",
  "stroke-width": "1.5",
  stroke: "currentColor"
}, [
  /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("path", {
    "stroke-linecap": "round",
    "stroke-linejoin": "round",
    d: "M15.75 19.5L8.25 12l7.5-7.5"
  })
], -1), W = ["aria-current", "disabled"], X = ["disabled"], Y = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", { class: "sr-only" }, "Next", -1), Z = /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("svg", {
  class: "w-5 h-5",
  "aria-hidden": "true",
  xmlns: "http://www.w3.org/2000/svg",
  fill: "none",
  viewBox: "0 0 24 24",
  "stroke-width": "1.5",
  stroke: "currentColor"
}, [
  /* @__PURE__ */ (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("path", {
    "stroke-linecap": "round",
    "stroke-linejoin": "round",
    d: "M8.25 4.5l7.5 7.5-7.5 7.5"
  })
], -1);
function ee(t, g, a, u, f, m) {
  const h = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("RenderlessPagination");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(h, {
    data: a.data,
    limit: a.limit,
    "keep-length": a.keepLength,
    onPaginationChangePage: m.onPaginationChangePage
  }, {
    default: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)((e) => [
      e.computed.total > e.computed.perPage ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("nav", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({ key: 0 }, t.$attrs, {
        class: "isolate inline-flex -space-x-px rounded-md shadow-sm",
        "aria-label": "Pagination"
      }), [
        (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
          class: ["relative inline-flex items-center rounded-l-md border px-2 py-2 text-sm font-medium focus:z-20 disabled:opacity-50", a.itemClasses],
          disabled: !e.computed.prevPageUrl
        }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.prevButtonEvents, !0)), [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "prev-nav", {}, () => [
            K,
            Q
          ])
        ], 16, J),
        ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(!0), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)(e.computed.pageRange, (n, d) => ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("button", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
          class: ["relative inline-flex items-center border px-4 py-2 text-sm font-medium focus:z-20", [
            n == e.computed.currentPage ? a.activeClasses : a.itemClasses,
            n == e.computed.currentPage ? "z-30" : ""
          ]],
          "aria-current": e.computed.currentPage ? "page" : null,
          key: d
        }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.pageButtonEvents(n), !0), {
          disabled: n === e.computed.currentPage
        }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(n), 17, W))), 128)),
        (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", (0,vue__WEBPACK_IMPORTED_MODULE_0__.mergeProps)({
          class: ["relative inline-flex items-center rounded-r-md border px-2 py-2 text-sm font-medium focus:z-20 disabled:opacity-50", a.itemClasses],
          disabled: !e.computed.nextPageUrl
        }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toHandlers)(e.nextButtonEvents, !0)), [
          (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderSlot)(t.$slots, "next-nav", {}, () => [
            Y,
            Z
          ])
        ], 16, X)
      ], 16)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("", !0)
    ]),
    _: 3
  }, 8, ["data", "limit", "keep-length", "onPaginationChangePage"]);
}
const ie = /* @__PURE__ */ w(I, [["render", ee]]);



/***/ }),

/***/ "./resources/js/views/site/livres/LivresHippoView.vue":
/*!************************************************************!*\
  !*** ./resources/js/views/site/livres/LivresHippoView.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _LivresHippoView_vue_vue_type_template_id_db294286__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./LivresHippoView.vue?vue&type=template&id=db294286 */ "./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286");
/* harmony import */ var _LivresHippoView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./LivresHippoView.vue?vue&type=script&lang=js */ "./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js");
/* harmony import */ var C_laragon_www_pbaedition_org_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_laragon_www_pbaedition_org_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_LivresHippoView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_LivresHippoView_vue_vue_type_template_id_db294286__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/site/livres/LivresHippoView.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js":
/*!************************************************************************************!*\
  !*** ./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LivresHippoView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LivresHippoView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./LivresHippoView.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286":
/*!******************************************************************************************!*\
  !*** ./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286 ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LivresHippoView_vue_vue_type_template_id_db294286__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_LivresHippoView_vue_vue_type_template_id_db294286__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./LivresHippoView.vue?vue&type=template&id=db294286 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/site/livres/LivresHippoView.vue?vue&type=template&id=db294286");


/***/ })

}]);