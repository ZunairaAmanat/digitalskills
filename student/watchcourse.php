<?php
include('../maininclude/dbconnection.php');
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['is_login'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script> location.href = '../index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> <!-- Make sure jQuery is loaded -->
    <script src="../js/custom.js"></script> <!-- Include your custom.js file -->
</head>

<body>
    <div class="container-fluid btn btn-primary p-2">
        <h3>Welcome to Digital Skills</h3>
    </div>
    <br>
    <br>
    <a href="studentcourses.php" class="btn btn-danger">My Courses</a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 border-bright">
                <h4 class="text-center">Lessons</h4>
                <ul id="playlist" class="nav flex-column">
                    <?php
                    if (isset($_REQUEST['course_id'])) {
                        $course_id = $_REQUEST['course_id'];
                        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<li class="nav-item border-bottom py-2" movieurl="' . $row['lesson_link'] . '" style="cursor:pointer;">' . $row['lesson_name'] . '</li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="col-sm-8">
                <video id="videoarea" src="" class="mt-5 w-75 ml-2" controls></video>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#playlist li").on("click", function() {
                const movieUrl = $(this).attr("movieurl");
                if (movieUrl) {
                    $("#videoarea").attr("src", movieUrl);
                    $("#videoarea")[0].load(); // Load the new video
                    $("#videoarea")[0].play(); // Play the video
                }
            });

            const initialMovieUrl = $("#playlist li").eq(0).attr("movieurl");
            if (initialMovieUrl) {
                $("#videoarea").attr("src", initialMovieUrl);
                $("#videoarea")[0].load();
                $("#videoarea")[0].play();
            }
        });
    </script>
</body>
</html>
