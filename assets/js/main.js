/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./dev/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./dev/index.js":
/*!**********************!*\
  !*** ./dev/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/app.scss */ \"./dev/scss/app.scss\");\n/* harmony import */ var _scss_app_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_app_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_toggleMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/toggleMenu */ \"./dev/js/toggleMenu.js\");\n/* harmony import */ var _js_scrollTop__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/scrollTop */ \"./dev/js/scrollTop.js\");\n\n\n\nObject(_js_toggleMenu__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\nObject(_js_scrollTop__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\n\n//# sourceURL=webpack:///./dev/index.js?");

/***/ }),

/***/ "./dev/js/scrollTop.js":
/*!*****************************!*\
  !*** ./dev/js/scrollTop.js ***!
  \*****************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var smoothscrolljs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! smoothscrolljs */ \"./node_modules/smoothscrolljs/dist/smooth-scroll.min.js\");\n/* harmony import */ var smoothscrolljs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(smoothscrolljs__WEBPACK_IMPORTED_MODULE_0__);\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (function () {\n  var target = document.querySelector('.pageTop');\n  var destination = document.querySelector('.scrollTo');\n  target.addEventListener('click', function () {\n    smoothscrolljs__WEBPACK_IMPORTED_MODULE_0___default()(destination);\n  });\n});\n\n//# sourceURL=webpack:///./dev/js/scrollTop.js?");

/***/ }),

/***/ "./dev/js/toggleMenu.js":
/*!******************************!*\
  !*** ./dev/js/toggleMenu.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony default export */ __webpack_exports__[\"default\"] = (function () {\n  var spNav = document.getElementsByClassName('headerSpNav')[0];\n  var btn = document.getElementById('menuToggle');\n  btn.addEventListener('click', function () {\n    if (spNav.classList.contains('active')) {\n      spNav.className = 'headerSpNav';\n    } else {\n      spNav.className = 'headerSpNav active';\n    }\n\n    if (btn.classList.contains('active')) {\n      btn.className = 'headerSpNav_btn';\n    } else {\n      btn.className = 'headerSpNav_btn active';\n    }\n  });\n});\n\n//# sourceURL=webpack:///./dev/js/toggleMenu.js?");

/***/ }),

/***/ "./dev/scss/app.scss":
/*!***************************!*\
  !*** ./dev/scss/app.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./dev/scss/app.scss?");

/***/ }),

/***/ "./node_modules/smoothscrolljs/dist/smooth-scroll.min.js":
/*!***************************************************************!*\
  !*** ./node_modules/smoothscrolljs/dist/smooth-scroll.min.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\n!function (t, o) {\n  \"object\" == ( false ? undefined : _typeof(exports)) && \"undefined\" != typeof module ? module.exports = o() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (o),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?\n\t\t\t\t(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :\n\t\t\t\t__WEBPACK_AMD_DEFINE_FACTORY__),\n\t\t\t\t__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : undefined;\n}(this, function () {\n  \"use strict\";\n\n  function O(t) {\n    return (O = \"function\" == typeof Symbol && \"symbol\" == _typeof(Symbol.iterator) ? function (t) {\n      return _typeof(t);\n    } : function (t) {\n      return t && \"function\" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? \"symbol\" : _typeof(t);\n    })(t);\n  }\n\n  var C = {\n    linear: function linear(t) {\n      return t;\n    },\n    easeIn: function easeIn(t) {\n      return t * t * t;\n    },\n    easeOut: function easeOut(t) {\n      return --t * t * t + 1;\n    },\n    easeInOut: function easeInOut(t) {\n      return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;\n    }\n  };\n  return function (t) {\n    var o,\n        n = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : {},\n        e = n.duration,\n        i = void 0 === e ? 600 : e,\n        f = n.easing,\n        r = void 0 === f ? \"easeInOut\" : f,\n        u = n.context,\n        l = void 0 === u ? window : u,\n        a = n.orientation,\n        c = void 0 === a ? \"vertical\" : a,\n        p = n.offset,\n        s = void 0 === p ? 0 : p,\n        d = n.onUpdate,\n        y = void 0 === d ? function () {} : d,\n        m = n.onComplete,\n        v = void 0 === m ? function () {} : m,\n        g = {\n      top: (o = l).pageYOffset || o.scrollTop || 0,\n      left: o.pageXOffset || o.scrollLeft || 0\n    },\n        b = \"object\" === O(t) ? function (t) {\n      var o = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : window,\n          n = o.pageXOffset || o.scrollLeft,\n          e = o.pageYOffset || o.scrollTop,\n          i = t.getBoundingClientRect(),\n          f = \"function\" == typeof o.getBoundingClientRect ? o.getBoundingClientRect() : {\n        left: 0,\n        top: 0\n      };\n      return {\n        left: Math.abs(f.left - i.left - n),\n        top: Math.abs(f.top - i.top - e)\n      };\n    }(t, l) : {\n      top: t,\n      left: t\n    },\n        w = \"horizontal\" === c,\n        h = function h(t) {\n      var o = t.top,\n          n = t.left;\n      return w ? n : o;\n    };\n\n    !function (t) {\n      var f = t.start,\n          r = t.end,\n          u = t.duration,\n          o = t.easing,\n          l = t.onUpdate,\n          a = t.onComplete;\n\n      if (\"function\" == typeof l) {\n        var c = \"function\" != typeof o ? C[o] || C.easeInOut : o,\n            p = null;\n        window.requestAnimationFrame(function t(o) {\n          var n = o - (p = p || o),\n              e = Math.min(n / u, 1),\n              i = f + (r - f) * c(e);\n          l(i, e), n <= u ? window.requestAnimationFrame(t) : \"function\" == typeof a && a(i, e);\n        });\n      }\n    }({\n      start: h(g),\n      end: h(b) + s,\n      onUpdate: function onUpdate(t, o) {\n        var n, e, i, f;\n        n = l, i = (e = {\n          top: w ? g.top : t,\n          left: w ? t : g.left\n        }).top, f = e.left, n === window ? n.scrollTo(f, i) : (n.scrollTop = i, n.scrollLeft = f), y(t, o);\n      },\n      onComplete: v,\n      duration: i,\n      easing: r\n    });\n  };\n});\n\n//# sourceURL=webpack:///./node_modules/smoothscrolljs/dist/smooth-scroll.min.js?");

/***/ })

/******/ });