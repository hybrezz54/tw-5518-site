jQuery(document).ready(function($) {
    
    // on scroll, navbar shrinks
    $(window).scroll(function() {
        var scroll 		= $(this).scrollTop();
        var nav 		= $('#nav-links');

        // nav.addClass('#main-navbar.second-state');

        if (scroll > 200) {
            nav.addClass('second-state');
        } else {
            nav.removeClass('second-state');
        }
    });

    $('.slider').slick({
      arrows: true,
      dots: true,
      centerMode: true,
      slidesToShow: 1,
      infinite: true,
      adaptiveHeight: false,
      fade: false
    });

});
