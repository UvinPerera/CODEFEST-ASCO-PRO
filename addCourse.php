<?php
session_start();
if(isset($_COOKIE["utype"]))
{ 
    if($_COOKIE["utype"]!="moderator" && $_COOKIE["utype"]!="admin")
    {
        header("Location: index.php");
    }
}
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
<meta name="pageid" content="addcrs">
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
            <div class="row"><div class="col-12 text-center"><h1>ADD COURSES</h1> <hr></div></div>
            <div class="row pl-2">
            <form class="form-inline pl-2 pt-4 pl-4" action="#" method="POST" id="loginForm" style="width:100%; background-color:white;">   
                <div class="row" style="width:100%">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                &nbsp; New Course Name
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="cname" name="cname" class="form-control mb-2 mr-sm-2"  placeholder="New Course Name" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2">
                                &nbsp; Coordinator
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="co" name="co" class="form-control mb-2 mr-sm-2"  placeholder="Coordinator" style="width:100%; height: 50px;"></br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-12 col-sm-6" style="padding-top:32px;">
                        <button type="submit" class="btn mb-2" style="width:100%; height: 50px;">Add Course</button>
                    </div>
                    </div>
                </form>
                <form class="form-inline pl-2 pt-4 pl-4" action="#" method="POST" id="loginForm2" style="width:100%; background-color:white;">
                
                <div class="row" style="width:100%;"><div class="col-12"><hr></div><div class="col-12 text-center"><h3>Add Units</h3></div></div>
                <div class="row" style="width:100%">
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
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                &nbsp; New Unit Name
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="text" id="nuname" name="nuname" class="form-control mb-2 mr-sm-2"  placeholder="New Unit Name" style="width:100%; height: 50px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-12 col-sm-6" style="padding-top:32px;">
                        <button type="submit" class="btn mb-2" style="width:100%; height: 50px;">Add Unit</button>
                    </div>
                    
                </div>
                </form>
                <form class="form-inline pl-2 pt-4 pl-4" enctype="multipart/form-data" action="upload.php" method="POST" id="loginForm3" style="width:100%; background-color:white;">
                <div class="row" style="width:100%;"><div class="col-12"><hr></div><div class="col-12 text-center"><h3>Add Content</h3></div></div>
                <div class="row" style="width:100%">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                &nbsp; Select Course
                            </div>
                            <div class="col-12 mb-md-4">
                                <select type="text" id="scname2" name="scname2" class="form-control mb-2 mr-sm-2" style="width:100%; height: 50px;">
                                <option value="">Select Course</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                &nbsp; Select Unit
                            </div>
                            <div class="col-12 mb-md-4">
                                <select type="text" id="scunit" name="scunit" class="form-control mb-2 mr-sm-2" style="width:100%; height: 50px;">
                                <option value="">Select Unit</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12 mb-2 ">
                                &nbsp; Select File
                            </div>
                            <div class="col-12 mb-md-4">
                                <input type="file" id="fileup" name="fileup" class="form-control mb-2 mr-sm-2" style="width:100%; height: 50px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6" style="padding-top:32px;">
                        <button type="submit" class="btn mb-2" style="width:100%; height: 50px;">Add File</button>
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

    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-firestore.js"></script>

    <script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCv7dyqkVhp-lQgjknTqF0GLOg6zqjaLDA",
    authDomain: "codefest-69f68.firebaseapp.com",
    databaseURL: "https://codefest-69f68.firebaseio.com",
    projectId: "codefest-69f68",
    storageBucket: "codefest-69f68.appspot.com",
    messagingSenderId: "528784762467",
    appId: "1:528784762467:web:14e2a02116d6d06302fa56",
    measurementId: "G-1T56H3FCM6"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();
  </script>
  <script  src="addCourse.js"></script>
  <script src="addUnit.js"> </script>
  <script src="addContent.js"></script>
</body>
</html>