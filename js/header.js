function getHeader(){
    var a=document.getElementsById("header");
a.innerHTML=
    `
    <div class="row first" id="top">
        <div class="col-sm-2 col-12"><center><a href="index.php"><img class="img-fluid" src="images/logo.png"></a></center></div>
        <div class="col-sm-10 col-12">
        <div class="container-fluid headerFont">
            <div class="row ">
                    <div class="col-12"><p class="login">Hi,&ensp;
                        <a href="Login.php"><img src="images/Student Male_52px.png" width="1.5%"> Login</a></p></div>  
            </div>
            <div class="row">
              <div class="col-12">
                <p class="login"></p>
              </div>
            </div>
            <div class="row rn ">
                <div class="col-12 col-sm-11 col-lg-10">
                    <center><h3 class="display-3 heading1">ASOC UNIVERSITY</h3></center>
                </div>
            </div>
        </div>
        </div>
    </div>
    `;
}