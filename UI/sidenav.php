<?php
//  $utype=$_SESSION["utype"];
$utype="Student";
 ?>
<div class='col-xl-2 col-lg-3 pt-5 sidenav'>
    <ul class='pb-5 cat' style='list-style: none; font-size: 18px; padding-left: 10px;'>

        <li>
            <i class='fa fa-home' aria-hidden='true'></i> COURSES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='mycourses.php' id='mycour'><i class='fa fa-home' aria-hidden='true'></i> Following Courses</a>
                </li>
                <li>
                    <a href='propertyView.php' id='viewp'><i class='fa fa-home' aria-hidden='true'></i> Other Courses</a>
                </li>
                <hr>
            </ul>
        </li>
        <?php if($utype=="Director")
        {
            echo "
        <li>
            <i class='fa fa-building' aria-hidden='true'></i> BRANCHES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='branchNew.php' id='addb'><i class='fa fa-building' aria-hidden='true'></i> Add New Branch</a>
                </li>
                <li>
                    <a href='branchView.php' id='viewb'><i class='fa fa-building' aria-hidden='true'></i> View & Edit Branches</a>
                    <hr>
                </li>
            </ul>
        </li>";
        }?>
        <?php if($utype=="Director" || $utype=="Manager" || $utype=="Supervisor")
        {
            echo "
        <li>
            <i class='fa fa-users' aria-hidden='true'></i> EMPLOYEES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='employeeNew.php' id='adde'><i class='fa fa-users' aria-hidden='true'></i> Add New Employee</a>
                </li>
                <li>
                    <a href='employeeView.php' id='viewe'><i class='fa fa-users' aria-hidden='true'></i> View & Edit Employees</a>
                    <hr>
                </li>
            </ul>
        </li>";
        }?>
    </ul>
</div>