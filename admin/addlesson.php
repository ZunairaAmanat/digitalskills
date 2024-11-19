<?php

    session_start();


include('../maininclude/header.php');
include('../maininclude/dbconnection.php');

if(isset($_REQUEST['lessonSubmitBtn'])){
    //Checking for empty fields
    if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "") ){
        $msg = '<div class = "alert alert-warning col-sm-6 m1-5 mt-2">Fill All Fields</div>';
    }
        else
        {
            $lesson_name = $_REQUEST['lesson_name'];
            $lesson_desc = $_REQUEST['lesson_desc'];
            $course_id = $_REQUEST['course_id'];
            $course_name = $_REQUEST['course_name'];
            $lesson_link = $_FILES['lesson_link']['name'];
            $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
            $link_folder = '../lessonvideo/' .$lesson_link;
            move_uploaded_file($lesson_link_temp, $link_folder);

            $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES ('$lesson_name' , '$lesson_desc' , '$link_folder' , '$course_id' , '$course_name')";

            if($conn ->query($sql) == TRUE){
                $msg = '<div class = "alert alert-successs col-sm-6 m1-5 mt-2">Lesson Added Successfully</div>';
            }
            else{
                $msg = '<div class = "alert alert-danger col-sm-6 m1-5 mt-2">Unable to add Lesson</div>';

            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">
  <fieldset>
    <legend class="text-center">Add New Lesson</legend>
    <div class="mb-3">
    <label for="course_id">Course ID</label>
    <input type="text" class="form-control" id="course_id" name="course_id"  value = "<?php if(isset($_SESSION['course_id'])) {echo $_SESSION['course_id'];} ?>"readonly>
    </div>
    <div class="mb-3">
    <label for="course_name">Course Name</label>
    <input type="text" class="form-control" id="course_name" name="course_name"  value = "<?php if(isset($_SESSION['course_name'])) {echo $_SESSION['course_name'];} ?>"readonly>
    </div>
    <div class="mb-3">
    <label for="lesson_name">Lesson Name</label>
    <input type="text" class="form-control" id="lesson_name" name="lesson_name">
    </div>
    <div class="mb-3">
    <label for="lesson_desc">Lesson Description</label>
    <textarea name="lesson_desc" id="lesson_desc" class="form-control" row="2"></textarea>
    </div>
    <div class="mb-3">
    <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
    </div>
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="lesson.php" class="btn btn-secondary">Close</a>
        </div>
  </fieldset>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>
</div>
</div>
