<?php
$server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "digital_skills";


// Create Connection
$conn = new mysqli($server, $db_user, $db_password, $db_name);

// Check Connection 
if($conn->connect_error){
    die("connection failed" );
}
// else {
// echo"connected";
// }

?>