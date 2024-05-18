/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/components/copybtn.js":
/*!**************************************!*\
  !*** ./src/js/components/copybtn.js ***!
  \**************************************/
/***/ (function() {

(function ($) {
  class CopyBtn {
    constructor() {
      this.init();
    }
    init() {
      this.handleCopyBtn(".simplecharm-portfolio-copy-mail");
      this.handleCopyBtn(".simplecharm-portfolio-copy-phone");
    }
    handleCopyBtn(copyBtn) {
      let instance = this;
      $(copyBtn).on("click", e => this.copy(e, instance, copyBtn));
      $(copyBtn).on("focus", e => this.copy(e, instance, copyBtn));
    }
    bottomAlert(alertText, bgColor, timing) {
      var bottomAlert = document.getElementById("simplecharm-portfolio-bottom-alert");
      bottomAlert.textContent = alertText;
      bottomAlert.style.background = bgColor;
      bottomAlert.style.opacity = "1";
      bottomAlert.style.transform = "translate(-50%,0)";
      setTimeout(function () {
        bottomAlert.style.transform = "translate(-50%,50px)";
        bottomAlert.style.opacity = "0";
      }, timing);
    }
    copy(e, instance, copyBtn) {
      e.preventDefault();
      if (e.type !== "click" && e.keyCode !== 13) return;
      let tempTextArea = document.createElement("textarea");
      tempTextArea.value = $(copyBtn).siblings("h2").html();
      document.body.appendChild(tempTextArea);
      tempTextArea.select();
      tempTextArea.setSelectionRange(0, 99999);
      if (document.execCommand("copy")) {
        instance.bottomAlert("Copied!", "#204ecf", 1000);
      } else {
        instance.bottomAlert("Can't Copy! Try Again.", "#f00", 3000);
      }
      document.body.removeChild(tempTextArea);
    }
  }
  new CopyBtn();
})(jQuery);

/***/ }),

/***/ "./src/js/components/navigation-toggler.js":
/*!*************************************************!*\
  !*** ./src/js/components/navigation-toggler.js ***!
  \*************************************************/
/***/ (function() {

(function ($) {
  $('.simplecharm-portfolio-navigation-toggler').on('click', function (e) {
    e.preventDefault();
    $(this).siblings('#simplecharm-portfolio-navigation').slideToggle();
  });
})(jQuery);

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/***/ (function() {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nUndefined mixin.\n  ╷\n2 │     @include simplecharm-portfolio-button;\n  │     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  src/sass/components/_button.scss 2:5  @forward\n  src/sass/main.scss 12:1               root stylesheet\n    at tryRunOrWebpackError (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/HookWebpackError.js:88:9)\n    at __webpack_require_module__ (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5241:12)\n    at __webpack_require__ (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5198:18)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5270:20\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at done (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/Hook.js:18:14)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5176:43\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5138:16\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5106:15\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at done (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3527:9)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5052:8\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3490:6\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/HookWebpackError.js:68:3\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:113:20)\n    at ItemCacheFacade.store (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/CacheFacade.js:141:15)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3489:11\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:99:5\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:81:18)\n    at ItemCacheFacade.get (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3456:9)\n    at codeGen (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5040:11)\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5070:14\n    at processQueue (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/util/processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n-- inner error --\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nUndefined mixin.\n  ╷\n2 │     @include simplecharm-portfolio-button;\n  │     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  src/sass/components/_button.scss 2:5  @forward\n  src/sass/main.scss 12:1               root stylesheet\n    at Object.<anonymous> (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/css-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/postcss-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/sass-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/src/sass/main.scss:1:7)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/javascript/JavascriptModulesPlugin.js:452:10\n    at Hook.eval [as call] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/Hook.js:14:14)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5243:39\n    at tryRunOrWebpackError (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/HookWebpackError.js:83:7)\n    at __webpack_require_module__ (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5241:12)\n    at __webpack_require__ (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5198:18)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5270:20\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at done (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/Hook.js:18:14)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5176:43\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5138:16\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5106:15\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3485:9)\n    at done (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3527:9)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5052:8\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3490:6\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/HookWebpackError.js:68:3\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Cache.store (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:113:20)\n    at ItemCacheFacade.store (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/CacheFacade.js:141:15)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3489:11\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:99:5\n    at Hook.eval [as callAsync] (eval at create (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/tapable/lib/HookCodeFactory.js:33:10), <anonymous>:16:1)\n    at Cache.get (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Cache.js:81:18)\n    at ItemCacheFacade.get (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/CacheFacade.js:115:15)\n    at Compilation._codeGenerationModule (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:3456:9)\n    at codeGen (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5040:11)\n    at symbolIterator (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3482:9)\n    at timesSync (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:2297:7)\n    at Object.eachLimit (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/neo-async/async.js:3463:5)\n    at /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/Compilation.js:5070:14\n    at processQueue (/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/webpack/lib/util/processAsyncTree.js:61:4)\n    at process.processTicksAndRejections (node:internal/process/task_queues:77:11)\n\nGenerated code for /opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/css-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/postcss-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/node_modules/sass-loader/dist/cjs.js!/opt/lampp/htdocs/wp-content/themes/simplecharm-portfolio/assets/src/sass/main.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nUndefined mixin.\\n  ╷\\n2 │     @include simplecharm-portfolio-button;\\n  │     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\\n  ╵\\n  src/sass/components/_button.scss 2:5  @forward\\n  src/sass/main.scss 12:1               root stylesheet\");");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
/* harmony import */ var _components_copybtn_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/copybtn.js */ "./src/js/components/copybtn.js");
/* harmony import */ var _components_copybtn_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_copybtn_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_navigation_toggler_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/navigation-toggler.js */ "./src/js/components/navigation-toggler.js");
/* harmony import */ var _components_navigation_toggler_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_navigation_toggler_js__WEBPACK_IMPORTED_MODULE_2__);
//import sass



}();
/******/ })()
;
//# sourceMappingURL=main.js.map