/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/components/media.js":
/*!************************************!*\
  !*** ./src/js/components/media.js ***!
  \************************************/
/***/ (function() {

(function ($) {
  class SimpleCharm_portfolio_Media {
    constructor() {
      this.init();
    }
    init() {
      this.mediaUploader('simplecharm-portfolio-user-image', "simplecharm_portfolio_user_image");
      this.mediaUploader('simplecharm-portfolio-user-image2', "simplecharm_portfolio_user_image2");
    }
    mediaUploader(picked_image, hidden_field) {
      //doing the same things if there any multiple field with the class name
      $(`.${picked_image}`).click(function (e) {
        e.preventDefault();
        let image = wp.media({
          title: 'Upload Image',
          // mutiple: true if you want to upload multiple files at once
          multiple: false,
          // only load image files
          library: {
            type: 'image'
          }
        }).open().on('select', function (e) {
          // This will return the selected image from the Media Uploader, the result is an object
          let uploaded_image = image.state().get('selection').first();
          // We convert uploaded_image to a JSON object to make accessing it easier
          let image_url = uploaded_image.toJSON().url;
          // Let's assign the url value to the input field
          $(`.${picked_image}`).attr("src", image_url);
          $(`.${hidden_field}`).val(image_url);
        });
      });
    }
  }
  new SimpleCharm_portfolio_Media();
})(jQuery);

/***/ }),

/***/ "./src/js/components/repeater.js":
/*!***************************************!*\
  !*** ./src/js/components/repeater.js ***!
  \***************************************/
/***/ (function() {

(function ($) {
  class Repeater {
    constructor() {
      this.init();
    }
    init() {
      this.handleRepeater("simplecharm_social_link_add", ['simplecharm_portfolio_empty-row__social_link', 'screen-reader-text'], '#repeatable-fieldset-one tbody>tr:last-child', 'simplecharm_social_link_remove', 'social_link');
      this.handleRepeater("simplecharm_skill_link_add", ['simplecharm_portfolio_empty-row__skills_link', 'screen-reader-text'], '#repeatable-fieldset-one tbody>tr:last-child', 'simplecharm_skills_remove', 'skills');
    }
    handleRepeater(addBtn, hiddenFields, insertBefore, removeBtn, dataName) {
      let queue = $(`${insertBefore} input[type=text]`).data("queue");
      $(`#${addBtn}`).on('click', function () {
        let row = $(`.${hiddenFields.join(".")}`).clone(true);
        let newInputs = row.find('input');
        queue++;
        newInputs.each(function () {
          $(this).data('queue', queue);
          let name = $(this).attr('name');
          let inputType = $(this)[0].className;
          $(this).attr('name', `simplecharm_portfolio[${dataName}][${queue}][${inputType}][]`);
        });
        row.removeClass(hiddenFields.join(" "));
        row.insertBefore(insertBefore);
        return false;
      });
      $(`.${removeBtn}`).on('click', function () {
        $(this).parents('tr').remove();
        return false;
      });
    }
  }
  new Repeater();
})(jQuery);

/***/ }),

/***/ "./src/js/components/toggler.js":
/*!**************************************!*\
  !*** ./src/js/components/toggler.js ***!
  \**************************************/
/***/ (function() {

(function ($) {
  $('.portfolio-section-toggle').click(function () {
    $(this).siblings('.portfolio-section-content').slideToggle('slow');
  });
})(jQuery);

/***/ }),

/***/ "./src/sass/admin/admin.scss":
/*!***********************************!*\
  !*** ./src/sass/admin/admin.scss ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/*!*************************!*\
  !*** ./src/js/admin.js ***!
  \*************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_admin_admin_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/admin/admin.scss */ "./src/sass/admin/admin.scss");
/* harmony import */ var _components_media_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/media.js */ "./src/js/components/media.js");
/* harmony import */ var _components_media_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_media_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_repeater_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/repeater.js */ "./src/js/components/repeater.js");
/* harmony import */ var _components_repeater_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_repeater_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_toggler_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/toggler.js */ "./src/js/components/toggler.js");
/* harmony import */ var _components_toggler_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_toggler_js__WEBPACK_IMPORTED_MODULE_3__);




}();
/******/ })()
;
//# sourceMappingURL=admin.js.map