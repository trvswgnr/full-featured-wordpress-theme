/**
 * -- EVENTS
 */
import { VIEWPORT_WIDTH, in_view } from "./globals.js";
import { parallax } from "./parallax.js";


/**
  * Events that fire when the page is loaded.
  */
$(document).ready(function(){
  $('.carousel').slick();
});


/**
 * Events that fire on Window Scroll
 */
$(window).scroll(() => {
  /**
    * Homepage marketing points section animate lines when in viewport
    */
  if (in_view('#how_it_works', 200)) {
    if (VIEWPORT_WIDTH >= 768) {
      $('.marketing-points--alt .marketing-points__heading.is-first .line').animate({
        width: '100%'
      }, 500, () => {
        setTimeout(() => {
          $('.marketing-points--alt .marketing-points__heading.is-middle .line').animate({
            width: '100%'
          }, 500);
        }, 200);
      });
    }
  }

  // parallax effect on scroll
  parallax('.js-parallax');

});
