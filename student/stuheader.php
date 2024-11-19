<?php
include('../maininclude/dbconnection.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['is_login'])){
    $email = $_SESSION['email'];
}

if(isset($email)){
    $sql = "SELECT stu_img FROM student WHERE email = '$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img']; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/all.min.css">
    <script src="../js/all.min.js"></script>

    <style>
    .outer-course-wrap {
        background-color: #f9f9f9; /* Light background for contrast */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>
    <!-- top navbar  -->
 <nav class="navbar navbar-dark fixed-top p-1 shadow" style="background-color: var(--primary);">
    <a href="../index.php" class="navbar-brand col-sm-3 col-md-2 mr-0">Digital Skills Student Dashboard</a>
 </nav>

<!-- side bar -->
<div class="container-fluid md-5 " style="margin: top 40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2  sidebar py-5 d-print-none ">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                      
                        <li class="nav-item mb-3">
                         <img src="<?php echo $stu_img?>" alt="studentimage" class="img-thumbnail rounded-circle">
                        </li>
                        <li class="nav-item">
                            <a href="studentprofile.php" class="nav-link <?php 
                            //if(PAGE == 'profile'){
                                //echo 'active';}?>">
                                <i class="fas fa-user"></i>
                                Profile <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentcourses.php" class="nav-link ">
                                <i class="fab fa-accessible-icon"></i>
                                My Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentfeedback.php" class="nav-link">
                                <i class="fas fa-users"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                LogOut
                            </a>
                        </li> 
                    </ul>
                </div>
            </nav>
