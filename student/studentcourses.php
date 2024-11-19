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
        $stu_image = $_FILES['stuImg']['name'];
        $stu_image_temp = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../img/stu/' . $stu_image;
        move_uploaded_file($stu_image_temp,$img_folder);
        $sql = "UPDATE `student` SET `id`='$sid', `firstName` = '$fName', `email` = '$email', `stu_occ` = '$stuOcc', `stu_img` = '$img_folder' WHERE `student`.`id` = $sid";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Update Sucessfully </div>';
        } else{
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Operation Fialed </div>';
        }

    }
}

?>
<div class="col-sm-6 mt-5 mx-0">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">My Course</h1>
    </div>
    <section id="content" class="h-100 min-vh-100">
        <div class="outer-course-wrap">
            <div class="container clearfix">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM `addcourse` WHERE course_id='$stuCourse'";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $course_id = $row["course_id"];
                            $course_img = $row["course_img"];
                            $course_name = $row["course_name"];
                            $course_author = $row["course_author"];
                            $author_qua = $row["author_qua"];

                            echo '
                            <div class="col-12 mb-4">
                                <div class="d-flex p-3 border rounded shadow-sm" style="background-color: #ffffff;">
                                    <img src="../img/' . ($course_img) . '" alt="' . ($course_name) . '" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover; margin-right: 20px;">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">' . ($course_name) . '</h5>
                                        <p class="card-text">' . (($course_author)) . '</p>
                                        <p class="card-text">' . (($author_qua)) . '</p>
                                        <a href="watchcourse.php?course_id=' . $course_id . '" class="btn btn-primary mt-2">Watch Course</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    } else {
                        echo '<div class="col-12"><p class="text-center">No courses found.</p></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .outer-course-wrap {
        background-color: #f9f9f9; /* Light background for contrast */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-weight: bold; /* Enhance title visibility */
    }

    .card-text {
        color: #555; /* Subtle color for description */
    }

    .btn-primary {
        background-color: #007bff; /* Bootstrap primary color */
        border: none; /* Remove border for a cleaner look */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
</style>



<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM lesson WHERE course_id='$stuCourse' ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while( $row = $result->fetch_assoc()){
                            
                    
                    echo '<tr>
                        <th scope="row">'.$row['lesson_name'].'</th>
                        <td>'.$row['lesson_desc'].'</td>
                    </tr>';
                                 
                }
            }
                    ?>
                </tbody>

            </table>

                    </div>
                </div>
            </div>
        </div>
</section>

</div>