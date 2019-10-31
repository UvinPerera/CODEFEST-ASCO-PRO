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
<meta name="pageid" content="mycour">
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

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Logo , Heading & Login-->
    <div class="container-fluid">
      <?php getHeader(); ?>
    </div>
    <!--Side Navigation Bar-->
    <div class="row">
        <?php include("UI/sidenav.php");?>
    <!--Course Section-->
        <div class="col-xl-8 col-lg-6 offwhite">
            <div class="row"><div class="col-12 text-center"><h1>COURSES</h1> <hr></div></div>
            <div class="row users hide">
                <div class="col-sm-10 col-6"><h4></i> 1). COURSE NAME </h4></div>
                <div class="col-sm-2 col-6 pt-2"><button type="button" class="btn btn-success">Edit</button></div>
                <div class="col-12"> Course Cordinator:- </div>
                <div class="container-fluid details">
                    <hr>
                    <div class="row">
                        <div class="col-12">Course Content</div>
                    </div>
                </div>
            </div>


        </div>
        <!--Profile-->
        <?php getProfile(); ?>
    </div>

    <!--Bottom-->
    <?php getFooter(); ?>
</body>
</html>