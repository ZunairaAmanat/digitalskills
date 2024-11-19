<?php

include('stuheader.php');
if(!isset($_SESSION)){
    session_start();
}


if(isset($_SESSION['is_login'])){
    $email = $_SESSION['email'];
    echo "Email from session: $email"; // Debugging line
	} else {
		echo "No email found in session.";
	}


$sql = "SELECT * FROM student WHERE  email = '$email'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $sid = $row['id'];
    $email = $row['email'];
    $fName = $row['firstName'];
    $stuOcc = $row['stu_occ'];
    $stuImg = $row['stu_img'];
	$stuCourse = $row["stu_course"];
}

if(isset($_REQUEST['updateStuNameBtn'])){
    if( ($_REQUEST['id'] == "") || ($_REQUEST['fName'] == "") || ($_REQUEST['stuOcc'] == "") || ($_REQUEST['email'] == "") ){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    }
    
    else{
        $fName= $_REQUEST['fName'];
        $stuOcc = $_REQUEST["stuOcc"];
        $stuCourse = $_REQUEST["stuCourse"];
        $stu_image = $_FILES['stuImg']['name'];
        $stu_image_temp = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../img/stu/' . $stu_image;
        move_uploaded_file($stu_image_temp,$img_folder);
        $sql = "UPDATE `student` SET `id`='$sid', `firstName` = '$fName', `email` = '$email', `stu_occ` = '$stuOcc', `stu_course` = '$stuCourse', `stu_img` = '$img_folder' WHERE `student`.`id` = $sid";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Update Sucessfully </div>';
        } else{
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Operation Fialed </div>';
        }

    }
}

?>

<div class="col-sm-6 mt-5 mx-5 " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">

<div class="mb-3">
    <label for="Id">Student ID</label>
    <input type="text" class="form-control" id="id" name="id" value = "<?php if(isset($sid)) {echo $sid;} ?>" readonly>
    </div>

    <div class="mb-3">
    <label for="email">Email</label>
    <input type="email"name="email" id="email" class="form-control"  value = "<?php echo $email ?>">
    </div>

    <div class="mb-3">
    <label for="fName">First Name</label>
    <input type="text" name="fName" id="fName" class="form-control"  value = "<?php if(isset($fName)) {echo $fName;} ?>">
    </div>

    <div class="mb-3">
    <label for="stuOcc">Occupation</label>
    <input type="text" name="stuOcc" id="stuOcc" class="form-control"  value = "<?php if(isset($stuOcc)) {echo $stuOcc;} ?>">
    </div>
	<div class="mb-3">
    <label for="stuCourse">Course</label>
    <select name="stuCourse" id="stuCourse" class="form-control" >
	<?php
		$query = "SELECT * FROM addcourse";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
			while( $row = mysqli_fetch_assoc($result) ){
         		$course_id = $row["course_id"];
                $course_name = $row["course_name"];
				if($row["course_id"]==$stuCourse)
					echo "<option value='$course_id' selected>$course_name</option>";
				else
					echo "<option value='$course_id'>$course_name</option>";
			}
		}
	?>
	</select>
    </div>

    <div class="mb-3">
    <label for="stuImg">Upload Image</label>
    <input type="file" name="stuImg" id="stuImg" class="form-control">
    </div>
    
    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="updateStuNameBtn" name="updateStuNameBtn">Update</button>
            <?php if(isset($passmsg)) {echo $passmsg;}?>
    </form>
</div>
</div>
</div>