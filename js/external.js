$(document).ready(function($) {
 
    // Scrolling on the Sections Clicks

    $(".scroll").click(function(event){   
	    event.preventDefault();
	    $('html,body').animate({scrollLeft:$(this.hash).offset().left - 250 }, 500);
	  });




    // Scrolling on the Menu

   	$(window).scroll(function() { 
        if ($(document).scrollTop() > 50) { 
          $(".navbar-fixed-top").css("background-color", "#333"); 
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent");
        }
    });


    
});