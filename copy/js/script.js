function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};

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