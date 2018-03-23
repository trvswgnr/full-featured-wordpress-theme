/**
  * Simple parallax effect
  */
export const parallax = function(target){
  const amountScrolled = $(window).scrollTop();

  $(target).each(function(){
    let speed = $(this).data('scroll-speed');

    if ( isNaN(speed) ) { speed = 5; }

    $(this).css('transform', `translateY(${(amountScrolled * (speed/10) * -1)}px)`);
  });

};
