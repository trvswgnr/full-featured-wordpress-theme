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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(6);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(10);
__webpack_require__(3);
__webpack_require__(5);

/***/ }),
/* 2 */,
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$('.js-menu-toggle').click(function () {
  $('.mobile-menu').toggleClass('is-active');
  $('html').toggleClass('nav-open');
});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var parallax = exports.parallax = function parallax(target) {
  var amountScrolled = $(window).scrollTop();

  $(target).each(function () {
    var speed = $(this).data('scroll-speed');

    if (isNaN(speed)) {
      speed = 5;
    }

    $(this).css('transform', 'translateY(' + amountScrolled * (speed / 10) * -1 + 'px)');
  });
};

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function fitText(item) {
  item.style.display = 'inline-block';
  item.style.fontSize = '1px';
  var parentWidth = item.parentNode.offsetWidth;
  var percentage = parentWidth / item.offsetWidth;
  var size = 0;
  while (item.offsetWidth < parentWidth) {
    size += 1;
    item.style.fontSize = size + 'px';
  }
  item.style.fontSize = size - 1 + 'px';
}

var elements = document.querySelectorAll('.js-fit-text');

window.onresize = function () {
  var window_width = $(window).width();
  if (window_width <= 460) {
    Array.prototype.forEach.call(elements, fitText);
  }
};

window.onresize();

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 7 */,
/* 8 */,
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
/**
 * Global Variables and Methods
 */

var VIEWPORT_WIDTH = exports.VIEWPORT_WIDTH = $(window).width();

/**
 * Determine if the target element is in view and if so return true
 */
var in_view = exports.in_view = function in_view(target) {
  var el_offset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;

  var amount_scrolled = $(window).scrollTop();
  var el_position = $(target).offset();
  el_position = el_position.top;
  var offset = el_offset;
  var trigger_position = el_position - offset;
  if (amount_scrolled >= trigger_position) {
    return true;
  }
};

/**
 * Adds the :onScreen pseudo selector to jQuery to affect elements visible in the viewport.
 */
(function ($) {
  $.expr[":"].onScreen = function (elem) {
    var $window = $(window);
    var viewport_top = $window.scrollTop();
    var viewport_height = $window.height();
    var viewport_bottom = viewport_top + viewport_height;
    var $elem = $(elem);
    var top = $elem.offset().top;
    var height = $elem.height();
    var bottom = top + height;

    return top >= viewport_top && top < viewport_bottom || bottom > viewport_top && bottom <= viewport_bottom || height > viewport_height && top <= viewport_top && bottom >= viewport_bottom;
  };
})(jQuery);

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _globals = __webpack_require__(9);

var _parallax = __webpack_require__(4);

/**
  * Events that fire when the page is loaded.
  */
/**
 * -- EVENTS
 */
$(document).ready(function () {
  $('.carousel').slick();
});

/**
 * Events that fire on Window Scroll
 */
$(window).scroll(function () {
  /**
    * Homepage marketing points section animate lines when in viewport
    */
  if ((0, _globals.in_view)('#how_it_works', 200)) {
    if (_globals.VIEWPORT_WIDTH >= 768) {
      $('.marketing-points--alt .marketing-points__heading.is-first .line').animate({
        width: '100%'
      }, 500, function () {
        setTimeout(function () {
          $('.marketing-points--alt .marketing-points__heading.is-middle .line').animate({
            width: '100%'
          }, 500);
        }, 200);
      });
    }
  }

  // parallax effect on scroll
  (0, _parallax.parallax)('.js-parallax');
});

/***/ })
/******/ ]);
