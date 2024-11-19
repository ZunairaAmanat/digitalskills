<?php
// session_start();

include('../maininclude/header.php');
include('../maininclude/dbconnection.php');


if(isset($_REQUEST['courseSubmitBtn']))
    //Checking for empty fields
    if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") || ($_REQUEST['author_qua'] == "") || ($_REQUEST['author_desc'] == "") )
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';

        else
        {
            $course_name = $_REQUEST['course_name'];
            $course_desc = $_REQUEST['course_desc'];
            $course_author = $_REQUEST['course_author'];
            $author_qua = $_REQUEST['author_qua'];
            $author_desc = $_REQUEST['author_desc'];
            $course_img = $_FILES['course_img']['name'];
            $course_img_temp = $_FILES['course_img']['tmp_name'];
            $img_folder = '../img/courseimg/' .$course_img;
            move_uploaded_file($course_img_temp, $img_folder);

            $sql = "INSERT INTO addcourse (course_name, course_desc, course_author, author_qua, author_desc,  course_img) values ('$course_name' , '$course_desc' , '$course_author' , '$author_qua' , '$author_desc' ,  '$img_folder')";

            if($conn ->query($sql) == TRUE){
                $msg = '<div class = "alert alert-successs col-sm-6 m1-5 mt-2">Course Added Successfully</div>';
            }
            else{
                $msg = '<div class = "alert alert-danger col-sm-6 m1-5 mt-2">Unable to add course</div>';

            }
        }
?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">
  <fieldset>
    <legend class="text-center">Add New Courses</legend>
    <div class="mb-3">
    <label for="course_name">Course Name</label>
    <input type="text" class="form-control" id="course_name" name="course_name">
    </div>
    <div class="mb-3">
    <label for="course_desc">Course Description</label>
    <textarea name="course_desc" id="course_desc" class="form-control" row="2"></textarea>
    </div>
    <div class="mb-3">
    <label for="course_author">Author</label>
    <input type="text" class="form-control" id="course_author" name="course_author">
    </div>
    <div class="mb-3">
    <label for="author_qua">Author Qualification</label>
            <input type="text" class="form-control" id="author_qua" name="author_qua">
    </div>
    <div class="mb-3">
    <label for="author_desc">Author Description</label>
    <textarea name="author_desc" id="author_desc" class="form-control" row="2"></textarea>
    </div>
    <div class="mb-3">
    <label for="course_img">Course Image</label>
            <input type="file" class="form-control-file" id="course_img" name="course_img">
    </div>
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
            <a href="admincourses.php" class="btn btn-secondary">Close</a>
        </div>
  </fieldset>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>
