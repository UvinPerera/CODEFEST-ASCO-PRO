<?php 
function getHeader()
{
    echo '
    <div class="row first" id="top">
        <div class="col-sm-2 col-12"><center><a href="index.php"><img class="img-fluid" src="images/logo.png"></a></center></div>
        <div class="col-sm-10 col-12">
        <div class="container-fluid headerFont">
            <div class="row ">
                    <div class="col-12"><p class="login">Hi,';
                    
                      if(isset($_SESSION["userData"]))
                      {
                        $user=$_SESSION["userData"];
                        echo '<i class="fa fa-user fa-fw"></i> $user[1] $user[2]';
                        echo '&ensp; <a href="Logout.php">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></p></div>';
                      }
                      else
                      {
                        echo '<a href="Login.php"><i class="fa fa-user fa-fw"></i> Login</a></p></div>';
                      }
             echo '       
            </div>
            <div class="row">
              <div class="col-12">
                <p class="login">';if(isset($_SESSION["userData"]))
                {
                  if($_SESSION["usertype"]=="user"){echo '<a href="MyBooks.php">My Account</a>';}
                  else{ echo '<a href="SearchBooks.php">Admin Panel</a>';}
                }echo'</p>
              </div>
            </div>
            <div class="row rn ">
                <div class="col-12 col-sm-11 col-lg-10">
                    <center><h3 class="display-3 heading1">ASOC UNIVERSITY</h3></center>
                </div>
            </div>
        </div>
        </div>
    </div>';
}
function getProfile()
{
    echo '
    <div class="col-xl-2 col-lg-3 offwhite">
        <div class="row users hide">
            <div class="col-12 text-center"><img src="Images/dp.png"></div>
            <div class="container-fluid">
                <hr>
                <div class="row">
                    <div class="col-12"><i class="fa fa-user" aria-hidden="true"></i> Name</div>
                    <div class="col-12"><i class="fa fa-envelope" aria-hidden="true"></i> Email</div>

                </div>
            </div>
        </div>
    </div>
    ';
}
?>