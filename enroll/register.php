<?php

// signup
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include ('maininclude/dbconnection.php');
 
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $password = md5("password");
    
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `student` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
            $sql = "INSERT INTO `student` (`firstName`, `lastName`, `email`,  `password`) VALUES ('$fName','$lName','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        header("location:loginorsignup.php");
        // else{
        //     $showError = "Passwords do not match";
        // }
    }

    
// signIn



if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$password=md5('$password');

    $sql="SELECT * From student WHERE email='$email' AND password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['is_login']=true;
		$_SESSION['loginType']='Student';
        $_SESSION['email']=$row['email'];
        //header("location: student/studentprofile.php");
		header("location: index.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }

}
    
?>