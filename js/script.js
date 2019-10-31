$('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 2000);

window.onload = () => { 

    // var webhost = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    // webhost.parentNode.removeChild(webhost);
    var metapageID = document.querySelector("meta[name=pageid]");
    var pageid = metapageID.getAttribute("content");
    var activeItem = document.getElementById(pageid);
    activeItem.classList.add("active");
  }

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
   $(document).ready(function(){
    $(".users").click(function () {
        if($(this).hasClass('show'))
        {
            x="show";
        }
        else
        {
            x="hide";
        }
        $("div").removeClass('show');
            $("div").removeClass('hide');
        $("div").addClass('hide');
        if(x=="show")
        {
            $(this).removeClass('show');
            $(this).removeClass('hide');
            $(this).addClass('hide');
        }
        else
        {
            $(this).removeClass('show');
            $(this).removeClass('hide');
            $(this).addClass('show');
        }
    });
});
});