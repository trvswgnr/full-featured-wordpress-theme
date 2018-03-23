/**
  * Simple parallax effect
  */
export const parallax = function(target){

  const amount_scrolled = $(window).scrollTop();

  $(target).each(function(){
    let speed = $(this).data('scroll-speed');

    if ( isNaN(speed) ) { speed = 5; }

    $(this).css('transform', `translateY(${(amount_scrolled * (speed/10) * -1)}px)`);
  });
};
