$(document).ready(function($) {
 
    // Scrolling on the Sections Clicks

var kjj= $(window).width();
console.log(kjj);
console.log($('.commonsection').width());
if ( kjj< 600){
    $(".scroll").click(function(event){   
      event.preventDefault();
      // console.log('smchs');
      $('html,body').animate({scrollLeft:$(this.hash).offset().left -100 }, 500);
      console.log($(this.hash).offset().left);
      console.log($(this.hash).offset());

    });
}
else{
      $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollLeft:$(this.hash).offset().left - 250 }, 500);
      console.log($(this.hash).offset().left);
      console.log($(this.hash).offset());
    });
}


    // Scrolling on the Menu

   	$(window).scroll(function() { 
        if ($(document).scrollTop() > 50) { 
          $(".navbar-fixed-top").css("background-color", "#333"); 
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent");
        }
    });


    
});