<?php
//  $utype=$_SESSION["utype"];
$utype="Moderator";
 ?>
<div class='col-xl-2 col-lg-3 pt-5 sidenav'>
    <ul class='pb-5 cat' style='list-style: none; font-size: 18px; padding-left: 10px;'>
    <?php if($utype=="Student")
    {
        echo "
        <li>
            <img src='images/course_50px.png' width='10%'> COURSES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='mycourses.php' id='mycour'><img src='images/course_50px.png' width='8%'> Following Courses</a>
                </li>
                <li>
                    <a href='othercourse.php' id='othercs'><img src='images/course_50px.png' width='8%'> Recommended Courses</a>
                </li>
                <hr>
            </ul>
        </li>";
    }?>
        <?php if($utype=="Moderator")
        {
            echo "
            <li>
            <img src='images/course_50px.png' width='10%'> COURSES
            <ul class='pb-5 pl-4 cat' style='list-style: none; font-size: 15px'>
                <li>
                    <a href='moderCourseView.php' id='mycour'><img src='images/course_50px.png' width='8%'> View Courses</a>
                </li>
                <li>
                    <a href='addCourse.php' id='addcrs'><img src='images/course_50px.png' width='8%'> Add Courses</a>
                </li>
                <hr>
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