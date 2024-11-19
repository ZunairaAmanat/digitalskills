<?php

session_start();

include('../maininclude/header.php');
include('../maininclude/dbconnection.php');
?>

<div class="col-sm-9 mt-5 mx-3">
<form class="row g-3 mt-5 mx-3 mt-3 form-inline d-print-none">
    
  <div class="col-auto form-group mr-3">
    <input type="text" readonly class="form-control-plaintext " id="" value="Enter Course ID:">
  </div>
  <div class="col-auto ">
    <label for="checkid" class="visually-hidden"></label>
    <input type="text" class="form-control" id="checkid" name="checkid">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Search</button>
</div>

<?php
$sql = "SELECT course_id FROM addcourse";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
        $sql = "SELECT * FROM addcourse WHERE course_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(($row['course_id']) == $_REQUEST['checkid'] ){
            $_SESSION['course_id'] = $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
            ?>

            <h3 class=" bg-dark text-white p-2">Course ID: <?php if(isset($row['course_id'])){echo $row['course_id'];} ?>Course Name: <?php if(isset($row['course_name'])){echo $row['course_name'];} ?></h3>

 <?php
 $sql = "SELECT * FROM lesson WHERE course_id ={$_REQUEST['checkid']}";
 $result = $conn->query($sql);

 echo 
 '<table class="table">
        <thead>
            <tr>
                <th scope="col">Lesson ID</th>
                <th scope="col">Lesson Name</th>
                <th scope="col">Lesson Link</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>';
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo    '<th scope="row">' .$row["lesson_id"]. '</th>';
            echo    '<td>'.$row["lesson_name"].'</td>';
            echo    '<td>'.$row["lesson_link"].'</td>';
             echo   '<td>
					
					<form action="editlesson.php" method = "POST" class = "d-inline">
                    <input type = "hidden" name = "id" value  = '.$row["lesson_id"] .'>
                    <button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form>
                
                    <form action="" method = "POST" class = "d-inline">
                    <input type = "hidden" name = "id" value  = '.$row["lesson_id"] .'>
                    <button type="submit" class="btn btn-secondary" name="Delete" value="Delete"><i class="fas fa-trash-alt"></i></button></form>
                </td>
            </tr>';
        }
        echo '</tbody>
     </table>';
    }
     else{
        echo '<div class = "alert alert-dark mt-4" role = "alert">Course Not Found !</div>';
     }
     if(isset($_REQUEST['Delete'])){
        $sql = "DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
        if($conn->query($sql) === TRUE){
         echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        }
         else{
             echo "Unable to Delete Data";
         }
}
}
}
?>
</form>
</div>


<?php
if(isset($_SESSION['course_id'])){
    echo '<div>
    <a href="addlesson.php" class="btn btn-danger" style="position:fixed; bottom:10px; right:20px; margin-bottom: 30px; fixed;"><i class="fas fa-plus fa-2x"></i></a>
</div>';
}
?>
