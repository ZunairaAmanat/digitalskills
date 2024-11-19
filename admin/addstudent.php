<?php

session_start();


include('../maininclude/header.php');
include('../maininclude/dbconnection.php');


if(isset($_REQUEST['stuSubmitBtn']))
    //Checking for empty fields
    if(($_REQUEST['firstName'] == "") || ($_REQUEST['lastName'] == "") || ($_REQUEST['password'] == "") || ($_REQUEST['email'] == ""))
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';

        else
        {
            $firstName = $_REQUEST['firstName'];
            $lastName = $_REQUEST['lastName'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $sql= "INSERT INTO `student` (`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName', '$lastName', '$email', '$password')";

            if($conn ->query($sql) == TRUE){
                $msg = '<div class = "alert alert-successs col-sm-6 m1-5 mt-2">Student Added Successfully</div>';
            }
            else{
                $msg = '<div class = "alert alert-danger col-sm-6 m1-5 mt-2">Unable to add student</div>';

            }
        }
?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">
  <fieldset>
    <legend class="text-center">Add New Student</legend>
    <div class="mb-3">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName">
    </div>
    <div class="mb-3">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName">
    </div>
    <div class="mb-3">
    <label for="email">Email</label>
    <input name="email" id="email" class="form-control" row="2">
    </div>
    <div class="mb-3">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password">
    </div>
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="stuSubmitBtn" name="stuSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>
  </fieldset>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>
