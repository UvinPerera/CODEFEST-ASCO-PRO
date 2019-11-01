<?php
session_start();
$actual_link = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//$actual_link="HomePage.php";
$_SESSION["url"]=$actual_link;
include("UI/header.php");
include("UI/footer.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <script src="js/SmoothScroll.js"></script>
  <script src="js/script.js"></script>

<style type="text/css">
    body {
     }
     .logoRight{
       visibility:hidden;
     }
     .logoLeft{
       visibility:hidden;
     }
     .animated{
       visibility:visible;
     }
    .slideanimUP {visibility:hidden;}
  .slideUP {
    animation-name: slideUP;
    -webkit-animation-name: slideUP;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slideUP {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slideUP {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  .slideanimRIGHT {visibility:hidden;}
  .slideRIGHT {
    animation-name: slideRIGHT;
    -webkit-animation-name: slideRIGHT;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slideRIGHT {
    0% {
      opacity: 0;
      transform: translateX(70%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slideRIGHT {
    0% {
      opacity: 0;
      -webkit-transform: translateX(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
    }
  }
  .slideanimLEFT {visibility:hidden;}
  .slideLEFT {
    animation-name: slideLEFT;
    -webkit-animation-name: slideLEFT;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slideLEFT {
    0% {
      opacity: 0;
      transform: translateX(-40%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slideLEFT {
    0% {
      opacity: 0;
      -webkit-transform: translateX(0%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(70%);
    }
  }
   
  }
  
    
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Logo , Heading & Login-->
    <div class="container-fluid">
      <?php getHeader(); ?>
    </div>
    <!--Side Navigation Bar-->
    <nav id="myNavbar" class="navbar navbar-expand-sm sticky-top">
                <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa fa-bars" aria-hidden="true" style="color: white"></i>
          </button>
          <div class="navbar-collapse collapse justify-content-center order-1" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" id="nav-item-2" href="#section2">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav-item-3" href="#section3">Contact</a>
              </li>   
            </ul>
          </div>  
</nav>    
    <div id="slides" class="carousel" data-ride="carousel" data-interval="4000">
        
    <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <!--slideshow-->
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block" src="Images/loginback.jpeg">
            </div>
            <div class="carousel-item">
            <img class="d-block" src="Images/piattaforma-e-learning1.jpg">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="Images/slide-6.jpg">
            </div>
        </div>
        <!--Left & Right Buttons-->
        <a class="carousel-control-prev" href="#slides" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slides" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--About-->
    <div id="section2" class="container-fluid bg-grey sub section">
        <div class="container" style="text-align: justify">
            <div class="row ">
                <div class="col-sm-8">
                    <h1 class="slideanimUP newh">About</h1>
                    <p class="justify-content slideanimUP">The ASOC University is a newly started online learning system for every student. Every student can register and follow the courses.
                   </p>
                </div>
                <div class="col-sm-4 loCol">
                    <i class="fa fa-book logo logoRight" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Contact-->
    <div id="section3" class="container-fluid sub section" style="background-color: white;">
        <div class="container" style="text-align: justify">
            <div class="row">
                <div class="col-sm-5 loCol">
                        <i class="fa fa-envelope logo logoLeft" aria-hidden="true"></i>
                </div>
                <div class="col-sm-7">
                    <h1 class="slideanimUP newh">Contact</h1>
                    <p class="slideanimUP">Contact us and we'll get back to you within 24 hours.</p>  
                    <p class="slideanimUP"><i class="fa fa-phone-square red" aria-hidden="true"></i> +94772535348</p>
                    <p class="slideanimUP"><a href="mailto:asocpro4@gmail.com?Subject=Contact"><i class="fa fa-envelope red" aria-hidden="true"></i> asocpro4@gmail.com</a></p>
                </div>
            </div>
            <div class="row">
                <form class="form-inline col-12" action="#" method="POST" id="msg">
                    <div class="row" style="width:100%">
                        <div class="col-sm-6">
                            <input type="text" id="cusName" name="cusName" class="form-control mb-2 mr-sm-2 slideanimLEFT"  placeholder="Name" style="width:100%">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" id="cusEmail" name="cusEmail" class="form-control mb-2 mr-sm-2 slideanimRIGHT"  placeholder="Email" style="width:100%">
                        </div>
                    </div>
                    <div class="row" style="width:100%">
                        <div class="col-sm-12">
                            <textarea class="form-control mb-2 mr-sm-2 slideanimUP" id="Message" name="Message" placeholder="Message" rows="5" style="width: 100%;"></textarea>
                        </div>
                    </div>
                    <div class="row" style="width:100%">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-right sendButton slideanimRIGHT btnSrc" onclick="valid();">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Footer Image-->
    <div id="section4" class="container-fluid foot">
        <div clss="row rowFoot" >
              <div class="col-12">
                <center><h4 class="display-4 heading2"><i class="fa fa-quote-left" aria-hidden="true"></i>E - Learning!<i class="fa fa-quote-right" aria-hidden="true"></i></h4></center>
              </div>
        </div>
    </div>
    <!--Bottom-->
    <?php getFooter(); ?>
    <script>
function valid()
{
  var x=0;
  if(document.getElementById("cusName").value=="")
  {
    document.getElementById("cusName").style.borderColor="red";
     x=1;
  }
  else
  {
    document.getElementById("cusName").style.borderColor="#d4d4d4";
  }
  if(document.getElementById("cusEmail").value=="")
  {
    document.getElementById("cusEmail").style.borderColor="red";
     x=1;
  }
  else
  {
    document.getElementById("cusEmail").style.borderColor="#d4d4d4";
  }
  if(document.getElementById("Message").value=="")
  {
    document.getElementById("Message").style.borderColor="red";
     x=1;
  }
  else
  {
    document.getElementById("Message").style.borderColor="#d4d4d4";
  }

  if(x==0)
  {
    document.getElementById("msg").submit();
  }
}
    </script>
</body>
</html>