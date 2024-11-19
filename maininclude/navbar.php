<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Digital Skills</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="courses.php" class="nav-item nav-link">Courses</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            <?php if(isset($_SESSION['loginType']) && $_SESSION['loginType']=='Admin'){ ?>
				<a href="admin/admindashboard.php" class="nav-item nav-link">Dashboard</a>
			<?php } ?>
			<?php if(isset($_SESSION['loginType']) && $_SESSION['loginType']=='Student'){ ?>
				<a href="student/studentprofile.php" class="nav-item nav-link">Profile</a>
			<?php } ?>
			</div>
           
           <!-- <a href="student/studentprofile.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">My Profile<i class="fa fa-arrow-right ms-3"></i></a>-->
           <?php if(!isset($_SESSION['is_login'])){ ?>
			<a href="studentsignup.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Student Signup<i class="fa fa-arrow-right ms-3"></i></a>
			<a href="studentlogin.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Student Login<i class="fa fa-arrow-right ms-3"></i></a>
		   <?php } else {?>
		   <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></i></a>
            <?php } ?>
               
        </div>
    </div>
</div>
</nav>