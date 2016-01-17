jQuery(document).ready(function($) {            
    $(window).scroll(function() {  
        // var scroll 		= $(this).scrollTop();
        var nav 		= $('#main-navbar');
          
        nav.addClass('#main-navbar.second-state');
          
        // if (scroll > 200) {
        //     nav.addClass('second-state');
                   
        // } else {    
        //   nav.removeClass('second-state');
            
        // }
    });
    
});
