jQuery(document).ready(function(){
  // add extra elem in section:workplace for bg color purpose
  getSupportDiv('.workplace', '.effect-to-right', '.effect-to-right');
  getSupportDiv('.workplace', '.effect-to-left', '.effect-to-right');

  // effect to slide in
  $('.effect .effect-elem').css('opacity', '0');
  $('.effect-to-right, .effect-to-left, .effect-to-top, .effect-to-bottom').addClass('move');
    $(window).scroll( function(){
      $('.effect').each( function(){
        let elemPos = $(this).offset().top;
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight + windowHeight/6) {
          $('.effect-elem', this).css('opacity', '1');
          $(this).find('.effect-to-right, .effect-to-left, .effect-to-top, .effect-to-bottom').removeClass('move');
        } else {
          $('.effect-elem', this).css('opacity', '0');
          $(this).find('.effect-to-right, .effect-to-left, .effect-to-top, .effect-to-bottom').addClass('move');
        }
      });
    });

    let timer = false;
    $(window).on('load resize', (e) => {
      // positioning screen images on desktop graphic for mobile
      w = getWindowWidth();
      if ( w < 768 ) {
        let targetElem = $('.screens img:first-child').offset().left;
        $('.banner .slider').css('left', targetElem + 10 + 'px');
      }
      // add extra elem in section:workplace for bg color purpose (when resize)
      if (e.type === 'resize') {
        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
          $('div.bg-support').remove();
          getSupportDiv('.workplace', '.effect-to-right', '.effect-to-right');
          getSupportDiv('.workplace', '.effect-to-left', '.effect-to-right');
        }, 300);
      }
    });

    // mobile nav bar
    $('#nav-toggle').on('click', function() {
      $(this).toggleClass('open close');
    });

    // testimonial slider - swiper plugnin
    let w = getWindowWidth();
    let slideViews = ( w < 768 ) ? 1 : 2 ;
    let swiper = new Swiper('.swiper-container', {
      slidesPerView: slideViews,
      loop: true,
      speed: 3000,
      autoplay: {
        delay: 1000,
        disableOnInteraction: true
      },
    });
});

function getWindowWidth(){
  return $(window).width();
}
function getSupportDiv(parentClassName, className, offsetBaseElem) {
  const divH = $(parentClassName).find(className).innerHeight();
  const divGap = $(parentClassName).find(offsetBaseElem).offset();
  const absoluteLR = ((className === offsetBaseElem) ? 'left' : 'right');

  const cssResult = {
    'background-color': 'inherit',
    'height': divH,
    'width': divGap.left,
    'position': 'absolute',
    'z-index': '-10'
  }
  cssResult[absoluteLR] = '-' + divGap.left + 'px';

  $(parentClassName).find(className).append('<div class="bg-support"></div>');
  $('.bg-support').css(cssResult);
}