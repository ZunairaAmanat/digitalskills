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
}

if(isset($_REQUEST['addFeedback'])){
		$sid = $_REQUEST['id'];
		$fback = $_REQUEST['fback'];
        $sql = "INSERT INTO feedback (std_id, feedback) values ('$sid' , '$fback'); ";
		if($conn ->query($sql) == TRUE)
            $msg = '<div class = "alert alert-successs col-sm-6 m1-5 mt-2">Added Successfully</div>';
        else
            $msg = '<div class = "alert alert-danger col-sm-6 m1-5 mt-2">Unable to add</div>';
    }


?>

<div class="col-sm-6 mt-5 mx-5  " >
    <form action="" method="post" enctype="multipart/form-data" style="background-color:#E6E6FA;  padding: 50px;">

<div class="mb-3 mt-5">
    <label for="Id">Student ID</label>
    <input type="text" class="form-control" id="id" name="id" value = "<?php if(isset($sid)) {echo $sid;} ?>" readonly>
    </div>

    <div class="mb-3">
    <label for="fback">Feedback</label>
    <input type="text" name="fback" id="fback" class="form-control"  value = "<?php if(isset($fback)) {echo $fback;} ?>">
    </div>

    <div class="text-center">
            <button type="submit" class="btn btn-danger" id="addFeedback" name="addFeedback">Add Feedback</button>
            <?php if(isset($passmsg)) {echo $passmsg;}?>
		</form>
	</div>
<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Feedback ID</th>
                        <th scope="col">Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = "SELECT * FROM feedback WHERE std_id='$sid' ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while( $row = $result->fetch_assoc()){
                            
                    
                    echo '<tr>
                        <th scope="row">'.$row['fb_id'].'</th>
                        <td>'.$row['feedback'].'</td>
                    </tr>';
                                 
                }
            }
                    ?>
                </tbody>

            </table>
</div>
</div>