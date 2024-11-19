<?php
session_start();
include('maininclude/dbconnection.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursedetails</title>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/all.min.css">
    <script src="./js/all.min.js"></script>
</head>
<body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
    
    
        <!-- Navbar Start -->
    <?php
	include_once("maininclude/navbar.php");
	?>
    <!-- Navbar End -->
    
    
        <!-- Header Start -->
        <?php 
        if(isset($_REQUEST['id'])){
            $course_id = $_REQUEST['id'];
            $sql = "SELECT * FROM addcourse WHERE course_id = '$course_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
		}
    echo'<div class="container-fluid bg-primary py-5 mb-5 page-header">
       
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown"> '.$row['course_name'].'</h1>';
                    ?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Learn</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">With</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Digital</li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Skills</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


        <!--** Main Start **-->
        <main id="tg-main" class="tg-main innerpages inner_h">
            

            <div id="ctl00_CPHBody_pnloffered">
	
                <div class="tg-haslayout tg-sectionspace">
                    <div class="container">
                        
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
<!--** Video Section **-->
<?php 
        if(isset($_REQUEST['id'])){
            $course_id = $_REQUEST['id'];
            $sql = "SELECT * FROM addcourse WHERE course_id = '$course_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
		}
echo'<div id="ctl00_CPHBody_divPlayer" class="col-md-12">
<div class="videoWrapper">
<img src="./img/'.$row['course_img'].'"  width="600" height="325"></img>
</div>
<span id="ctl00_CPHBody_lbltestmsg"></span>
</div>';
?>
<br>
<br>
<div class="tg-sectionhead mt30">
<h3>About</h3>
</div>
<div class="tg-description">
<p>
<span id="ctl00_CPHBody_lblContents"><?php echo  nl2br($row['course_desc'])?></span>
</p>
</div>
              <br>
              <br>                  
<div class="tg-sectionhead mt30">
<h4>
<span id="ctl00_CPHBody_lblTitle_Instructor">Meet The Trainer(s)</span></h4>
                                </div>
<div class="tg-admindetail">
<span id="ctl00_CPHBody_dlInstructor" style="display:inline-block;border-width:0px;width:100%;"><span valign="top">

<div class="tg-admininfo">
     <div class="tg-adminhead">
<div class="tg-adminname">
<h4><?php echo $row['course_author']?><span>&nbsp; (<?php echo $row['author_qua']?>)</span></h4>
 </div>
</div>
<div class="tg-description">
<p><p><?php echo  nl2br($row['author_desc'])?></p>
</p>
</div>
</div>
</span></span>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

<div class="tg-coursesummary">
    <ul class="listlabel">
        <li><span><strong><i class="bi bi-alarm"></i>Batch Duration:</strong> </span><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">12 Weeks</span></span> </li>
        <li><span><strong> <i class="bi bi-youtube"></i>Videos Duration:</strong> </span><span class="listdesc"><span id="ctl00_CPHBody_lblVideosDuration">24 hours</span></span> </li>
        
        <li><span><strong><i class="bi bi-calendar-day-fill"></i>Start Date:</strong> </span><span class="listdesc"><span id="ctl00_CPHBody_lblStartDate">10 Jul 2024</span></span> </li>
        <li><span><strong><i class="bi bi-backspace-reverse"></i>Fee:</strong> </span><span class="listdesc"><span class="uppercase">Free of Cost</span> </span></li>
        
        <li><span><strong><i class="bi bi-journal-arrow-up"></i>Who can Join:</strong> </span><span class="listdesc"><span id="ctl00_CPHBody_lblWhoJoin">Everyone</span> </span> </li>
        <li><span><strong><i class="bi bi-person-fill"></i>Enrolled Trainees:</strong> </span><span class="listdesc"><span id="ctl00_CPHBody_lblenrolledtrainees" title="Enroll Trainees in Current Batch">32698</span></span> </li>
        <li><span><strong><i class="bi bi-camera-video-fill"></i>Video Medium:</strong> </span><span class="listdesc"><span lang="en">Urdu & English</span> </span></li>
    </ul>
</div>


<!-- enrollment -->
<form action="enroll/checkout.php" method="post"> 
    <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"> <!-- Ensure you set the course ID -->
    <div class="mt30 d-grid gap-2 ">  
        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="enroll">Enroll Now</button>
    </div>
</form>

<!-- enrollment end -->

<br>
<br>
<div class="tg-featureslist brpl30 mt30">
                                    <h3 class="tg-featurehead">What you will learn</h3>
                                    <span id="ctl00_CPHBody_lblOutcomes"><strong>After completing this course, a trainee will be able to:</strong><br/>
<div class="tg-coursesummary">
    <ul class="listlabel">
        <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Set goals</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Select an in-demand skill</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Sign up as a freelancer at different various platforms</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Create and manage an effective profile on freelance platforms</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Search the right projects</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Write a winning proposal</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Manage a project once it is awarded</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Communicate with the client effectively</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Manage project payments (escrow, invoicing system)</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Retain positive feedback</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Retain existing clients</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Use Forum and Communities</span></span> </li>

            <li><i class="bi bi-check-circle-fill"></i><span class="listdesc">
            <span id="ctl00_CPHBody_lblLength">Manage portfolio</span></span> </li>
    </ul>
</div>

 </nav>                            
</div>
</div>
</div>
</div>
 </div>
</div>            
</div>
  </main>
</div>


</div>
</form>
     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php
include('maininclude/footer.php');
?>