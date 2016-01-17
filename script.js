// function - on scroll, navbar shrinks
(document).ready(function($) {            
    $(window).scroll(function() {  
        var scroll 		= $(this).scrollTop();
        var nav 		= $('#main-navbar');
        
        // nav.addClass('#main-navbar.second-state');
          
        if (scroll > 200) {
            nav.addClass('#main-navbar.second-state');
        } else {    
          nav.removeClass('#main-navbar.second-state');
            
        }
    });
    
});
