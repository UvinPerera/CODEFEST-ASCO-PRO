$('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 2000);


$(document).ready(function(){
  $(".nav-item").click(function () {
      $("nav li.active").removeClass('active');
      $(this).addClass('active');
  });
         $(window).scroll(function() {
    $(".slideanimUP").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideUP");
        }
    });
    $(".slideanimRIGHT").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideRIGHT");
        }
    });
    $(".slideanimLEFT").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideLEFT");
        }
    });
    $(".logoRight").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("animated slideInRight");
        }
    });
    $(".logoLeft").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("animated slideInLeft");
        }
    });
  });
  $(document).scroll(function () {
   //get document scroll position
     var position = $(document).scrollTop(); 
     //get header height
     var header = $('nav').outerHeight();
     
     //check active section
     $('.section').each(function() {
         if($(this).position().top <= (position + header))
          {
               $("nav li.active").removeClass('active');
               $("nav li").eq().addClass('active');
          }
          if(position<500)
          {
            $("nav li.active").removeClass('active');
          }     
      });

     
   }); 
});