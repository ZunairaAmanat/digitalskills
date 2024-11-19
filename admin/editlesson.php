<?php

session_start();

include('../maininclude/header.php');
include('../maininclude/dbconnection.php');

//update
if(isset($_REQUEST['requpdate'])){
    //Checking for empty fields
    if( ($_REQUEST['lesson_id'] == "") || ($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
        // msg displayed if required field missing.
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';
    }
    else
    {
        $lid = $_REQUEST['lesson_id'];
        $lname = $_REQUEST['lesson_name'];
        $ldesc = $_REQUEST['lesson_desc'];
        $cid = $_REQUEST['course_id'];
        $cname = $_REQUEST['course_name'];
        $llink = '../lessonvideo/'. $_FILES['lesson_link']['name'];

        $sql = "UPDATE  lesson SET lesson_id = '$lid', lesson_name = '$lname', lesson_desc = '$ldesc', course_id = '$cid', course_name = '$cname', lesson_link = '$llink'
        WHERE `lesson`.`lesson_id` = '$lid'";

        if($conn->query($sql) == TRUE){
            //below msg display on form submit success
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Updated Successfully</div>';
        }
        else{
            $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Unable to Update</div>';
        }
    }
}

?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">
  <fieldset>
    <legend class="text-center">Update Lesson Details</legend>

    <?php
    if(isset($_REQUEST['view'])){
        $sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } 
    ?>



    <div class="mb-3">
    <label for="lesson_id">Lesson ID</label>
    <input type="text" class="form-control" id="lesson_id" name="lesson_id" value="<?php if(isset($row['lesson_id'])) {echo $row['lesson_id'];} ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="lesson_name">Lesson Name</label>
    <input type="text" class="form-control" id="lesson_name" name="lesson_name" value="<?php if(isset($row['lesson_name'])) {echo $row['lesson_name'];} ?>">
    </div>
    <div class="mb-3">
    <label for="lesson_desc">Lesson Description</label>
    <textarea name="lesson_desc" id="lesson_desc" class="form-control" row="2" ><?php if(isset($row['lesson_desc'])) {echo $row['lesson_desc'];} ?></textarea>
    </div>
    <div class="mb-3">
    <label for="course_id">Course ID</label>
    <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) {echo $row['course_id'];} ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) {echo $row['course_name'];} ?>" readonly>
    </div>
    <div class="mb-3">
    <label for="lesson_link">Lesson Link</label>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="<?php if(isset($row['lesson_link'])) {echo $row['lesson_link'];} ?>" allowfullscreen frameborder="0" class="embed-responsive-item"></iframe>
    </div>
	<!-- <video width="320" height="240" controls><source src="<?php //if(isset($row['lesson_link'])) {echo $row['lesson_link'];} ?>" type="video/mp4"></video> -->
	
    <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
    </div>
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="lesson.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>