<?php

session_start();



include('../maininclude/header.php');
include('../maininclude/dbconnection.php');

//update
if(isset($_REQUEST['requpdate']))
    //Checking for empty fields
    if( ($_REQUEST['Id'] == "") || ($_REQUEST['firstName'] == "") || ($_REQUEST['lastName'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['password'] == "")){
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';
    }
    else
    {
        $sid = $_REQUEST['Id'];
        $firstName = $_REQUEST['firstName'];
        $lastName = $_REQUEST['lastName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

       $sql="UPDATE `student` SET `firstName` = '$firstName', `lastName` = '$lastName', `email` = '$email', `password` = '$password' WHERE `student`.`id` = '$sid'"; 
        if($conn->query($sql) == TRUE){
            //below msg display on form submit success
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Updated Successfully</div>';
        }
        else{
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Unable to Update</div>';
        }
    }




?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">

    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM student WHERE id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } 
    ?>

    <legend class="text-center">Update Student Record</legend>
    <div class="mb-3">
    <label for="Id">Student ID</label>
    <input type="text" class="form-control" id="Id" name="Id" value = "<?php if(isset($row['id'])) {echo $row['id'];} ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" value = "<?php if(isset($row['firstName'])) {echo $row['firstName'];} ?>">
    </div>
    <div class="mb-3">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" value = "<?php if(isset($row['lastName'])) {echo $row['lastName'];} ?>">
    </div>
    <div class="mb-3">
    <label for="email">Email</label>
    <input name="email" id="email" class="form-control" row="2" value = "<?php if(isset($row['email'])) {echo $row['email'];} ?>">
    </div>
    <div class="mb-3">
    <label for="password">Password</label>
    <input type="text" class="form-control" id="password" name="password" value = "<?php if(isset($row['password'])) {echo $row['password'];} ?>">
    </div>

    
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="student.php" class="btn btn-secondary">Close</a>
        </div>
  </fieldset>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>