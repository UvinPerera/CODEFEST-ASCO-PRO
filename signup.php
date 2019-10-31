<?php
session_start();
if(isset($_POST["userName"]))
{
	 
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius+Sans+One">

<style type="text/css">
.img{
    height:100px;
        width: 70px;
        margin-top: 20px;
}
form label{
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 12pt;
}
.btn{
    background-color: rgb(182, 180, 180);
}
.btn:hover{
    background-color: rgb(146, 146, 146);
}
.bg-grey {
    background-color: #f6f6f6;
  }
  .bg-white{
      background-color: white;
  }
  .headerFont{
    font-family: 'Julius Sans One', sans-serif;
}
.newh{
    
    font-family: 'Julius Sans One', sans-serif;
}

.container{
    font-family: 'Comfortaa', cursive;
}
  .panel{
      padding:5px;
      padding-top:20px;
      padding-bottom:20px;
      box-shadow: 0px 0px 10px rgba(0,0,0, .1);
      margin-top: 50px;
      margin-bottom: 50px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
  }
  body{
    background: url("Images/photo-1524995997946-a1c2e315a42f.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
  	-moz-background-size: cover;
  	-o-background-size: cover;
  	background-size: cover;
  }
</style>
</head>
<body class="">
    <div class="container">
        <div class="row">
            <div class="col-12"><center><a href="index.php"><img class="img" src="Emblem_of_Sri_Lanka.svg.png"></a></center></div>
        </div>
        <div class="row">
            <div class="col-12 headerFont"><center><h2 style="color: white;"><b>ASOC University</b></h2></center></div>
        </div>
        <?php
        if(isset($_POST["userName"]))
        {
	        if($resultRow[0]=="")
	        {
                echo "<div class='row justify-content-center'>
                        <div class='col-sm-5 col-xs-12'>
                            <div class='alert alert-danger'>
                                <center><h5><b>Invalid Login Details</b></h5></center>
                            </div>
                        </div>
                    </div>";
	        }
        }
        ?>
        <div class="row justify-content-center login">
            <div class="col-sm-8 col-xs-12">
                <div class="panel">
                    <div class="row col-12 ml-1 mb-2 newh">
                    <h4>SIGN UP</h4>
                    </div>
                    <form class="form-inline" action="#" method="POST" id="loginForm">   
                        <div class="row" style="width:100%">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; First Name
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="text" id="fname" name="fname" class="form-control mb-2 mr-sm-2"  placeholder="First Name" style="width:100%; height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Last Name
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="text" id="lname" name="lname" class="form-control mb-2 mr-sm-2"  placeholder="Last Name" style="width:100%; height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Email
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="text" id="email" name="email" class="form-control mb-2 mr-sm-2"  placeholder="Email Address" style="width:100%; height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; DOB
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="date" id="dob" name="dob" class="form-control mb-2 mr-sm-2"  placeholder="DOB" style="width:100%; height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Address
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <textarea type="date" id="address" name="address" class="form-control mb-2 mr-sm-2"  placeholder="Address" style="width:100%; height: 50px;"></textarea></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Username
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="text" id="userName" name="userName" class="form-control mb-2 mr-sm-2"  placeholder="Username" style="width:100%; height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12 mb-2 ml-3">
                                        <i class="fa fa-lock" aria-hidden="true"></i>&nbsp; Password    
                                    </div>
                                    <div class="col-12 mb-md-4 ml-3">
                                        <input type="password" id="password" name="password" class="form-control mb-2 mr-sm-2"  placeholder="Password" style="width:100%;height: 50px;"></form></br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12  ml-3">
                                <button type="button" class="btn mb-2" style="width:100%;" onclick="valid();">Sign Up</button>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function valid()
        {
            var x=0;
            if(document.getElementById("userName").value=="")
            {
                document.getElementById("userName").style.borderColor="red";
                $('input[name=userName]').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationEnd',
                function() {
                    $(this).removeClass('animated shake');
                }
                );
                x=1;
            }
            else
            {
                document.getElementById("userName").style.borderColor="#d4d4d4";
            }
            if(document.getElementById("password").value=="")
            {
                document.getElementById("password").style.borderColor="red";
                $('input[name=password]').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationEnd',
                function() {
                    $(this).removeClass('animated shake');
                }
                );
                x=1;
            }
            else
            {
                document.getElementById("password").style.borderColor="#d4d4d4";
            }
            if(x==0)
            {
                document.getElementById("loginForm").submit();
            }
        }
    </script>
</body>
</html>