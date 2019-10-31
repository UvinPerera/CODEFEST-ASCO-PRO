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
<meta name="pageid" content="addExam">
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
    <!--New Course Section-->
        <div class="col-xl-8 col-lg-6 offwhite">
            <div class="row"><div class="col-12 text-center"><h1>ADD EXAMS</h1> <hr></div></div>
            <div class="row pl-2">
            <form class="form-inline pl-2 pt-4 pl-4" action="#" method="POST" id="loginForm" style="width:100%; background-color:white;">   
                <div class="row" style="width:100%;"><div class="col-12"><hr></div><div class="col-12 text-center"><h3>Add Units</h3></div></div>
                <div class="row m-0" style="width:100%">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                &nbsp; Select Course
                            </div>
                            <div class="col-12 mb-md-4">
                                <select type="text" id="scname" name="scname" class="form-control mb-2 mr-sm-2" style="width:100%; height: 50px;">
                                <option value="">Select Course</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12"><hr></div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Question
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="question" name="question" class="form-control mb-2 mr-sm-2"  placeholder="Question" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Answer 1
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="an1" name="an1" class="form-control mb-2 mr-sm-2"  placeholder="Answer 1" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Answer 2
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="an2" name="an2" class="form-control mb-2 mr-sm-2"  placeholder="Answer 2" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Answer 3
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="an3" name="an3" class="form-control mb-2 mr-sm-2"  placeholder="Answer 3" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Answer 4
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="an4" name="an4" class="form-control mb-2 mr-sm-2"  placeholder="Answer 4" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-12 col-sm-6" style="padding-top:32px;">
                        <button type="button" name="addQues" id="addQues" class="btn mb-2" style="width:100%; height: 50px;">Add Quesion</button>
                    </div>
                </div>
                
            </form>
        </div>


        </div>
        <!--Profile-->
        <?php getProfile(); ?>
    </div>

    <!--Bottom-->
    <?php getFooter(); ?>
</body>
</html>