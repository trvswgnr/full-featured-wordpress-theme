!function(t){function e(n){if(i[n])return i[n].exports;var o=i[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,e),o.l=!0,o.exports}var i={};e.m=t,e.c=i,e.d=function(t,i,n){e.o(t,i)||Object.defineProperty(t,i,{configurable:!1,enumerable:!0,get:n})},e.n=function(t){var i=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(i,"a",i),i},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=1)}([function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.viewport_width=$(window).width(),e.is_in_view=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=$(window).scrollTop(),n=$(t).offset();if(n=n?n.top:"",i>=n-e)return!0};!function(t){t.expr[":"].onScreen=function(e){var i=t(window),n=i.scrollTop(),o=i.height(),r=n+o,s=t(e),a=s.offset().top,l=s.height(),c=a+l;return a>=n&&a<r||c>n&&c<=r||l>o&&a<=n&&c>=r}}(jQuery)},function(t,e,i){i(2),t.exports=i(8)},function(t,e,i){"use strict";i(3),i(6),i(7)},function(t,e,i){"use strict";var n=i(0),o=i(4),r=i(5);!function(){(0,r.fitText)()}(),$(document).ready(function(){$(".carousel").slick({adaptiveHeight:!0})}),$(window).scroll(function(){(0,n.is_in_view)("#how_it_works",200)&&n.viewport_width>=768&&$(".marketing-points--alt .marketing-points__heading.is-first .line").animate({width:"100%"},500,function(){setTimeout(function(){$(".marketing-points--alt .marketing-points__heading.is-middle .line").animate({width:"100%"},500)},200)}),(0,o.parallax)(".js-parallax"),(0,o.parallax)(".js-parallax-shape",1090)})},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.parallax=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,i=$(window).scrollTop();$(t).each(function(){var t=$(this).data("scroll-speed");isNaN(t)&&(t=5),$(this).css("transform","translateY("+(i*(t/10)*-1+e)+"px)")})}},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.fitText=void 0;var n=i(0);e.fitText=function(){function t(t){var e=void 0,i=void 0;for(t.style.display="inline-block",t.style.fontSize="1px",e=t.parentNode.offsetWidth,e/t.offsetWidth,i=0;t.offsetWidth<e;)i+=1,t.style.fontSize=i+"px";t.style.fontSize=i-1+"px"}var e=void 0;e=document.querySelectorAll(".js-fit-text"),n.viewport_width<=460&&Array.prototype.forEach.call(e,t)}},function(t,e,i){"use strict";$(".js-menu-toggle").click(function(){$(".mobile-menu").toggleClass("is-active"),$("html").toggleClass("nav-open")})},function(t,e,i){"use strict";$(".js-social-share").click(function(t){t.preventDefault();var e=$(this).data("social"),i=$(this).attr("href"),n=void 0;""!==i&&"#"!==i||(i=window.location.href),n="facebook"===e?"https://www.facebook.com/sharer/sharer.php?u="+i:"twitter"===e?"https://twitter.com/intent/tweet?url="+i:"https://www.linkedin.com/shareArticle?mini=true&url="+i,window.open(n,"","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600")})},function(t,e){}]);
