<?php
session_start();
include('../maininclude/dbconnection.php');

if (isset($_POST['enroll'])) {
    // Check if the user is logged in
    if (!isset($_SESSION['is_login']) || $_SESSION['loginType'] !== 'Student') {
        echo "You must be logged in to enroll in a course.";
        exit();
    }
}
    // Get the course ID from the POST request
    $course_id = $_POST['course_id'];
    $email = $_SESSION['email']; // Get the logged-in user's email

    // Prepare and execute the enrollment query
    $sql = "INSERT INTO `enrollments` ( `email`, `course_id`) VALUES (' $email', '$course_id')";
    $result = mysqli_query($conn, $sql); // Assuming course_id is an integer
    if ($result)
      {
        header("Location: ../student/studentcourses.php");
    } else {
        echo "Error enrolling in course: ";
    }
?>