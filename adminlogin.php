<?php
session_start();
include('./maininclude/dbconnection.php');




if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$password=md5('$password');

    $sql="SELECT * From adminlogin WHERE email='$email' AND password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
		$_SESSION['is_login']=true;
		$_SESSION['loginType']='Admin';
        $_SESSION['email']=$row['email'];
        //header("location: admin/admindashboard.php");
		header("location: index.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/sty.css">
</head>
<body>
<div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
      </div>
      <script src="js/validationscript.js"></script>
</body>
</html>
