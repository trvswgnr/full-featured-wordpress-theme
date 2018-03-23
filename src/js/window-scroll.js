/**
 * Events that fire on window scroll
 */

$(window).scroll(() => {
  if (is_visible('#how_it_works', 200)) {
    if (VIEWPORT_WIDTH >= 768) {
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
});
