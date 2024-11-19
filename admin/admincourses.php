<?php

session_start();

include('../maininclude/header.php');
include('../maininclude/dbconnection.php');
?>
<div class="col-sm-9 mt-5 mx-5  p-5">
    <!-- table -->
     <p class="bg-dark text-white p-2">List of courses</p>
     <?php
     $sql = "SELECT * FROM addcourse";
     $result = $conn->query($sql);
     if($result->num_rows > 0){    
     ?>
     <table class="table">
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){
           echo '<tr>';
            echo    '<th scope="row">' .$row['course_id']. '</th>';
            echo    '<td>'.$row['course_name'].'</td>';
            echo    '<td>'.$row['course_author'].'</td>';
             echo   '<td>'.
                    '
                    <form action = "editcourse.php" method = "POST" class = "d-inline">
                    <input type = "hidden" name = "id"value  = '.$row["course_id"].'>
                    <button type=" submit" class="btn btn-info mr-3" name="view" value="View"><i class="fas fa-pen"></i></button></form>

                    <form action="" method = "POST" class = "d-inline">
                    <input type = "hidden" name = "id"value  = '.$row["course_id"].'>
                    <button type="submit" class="btn btn-secondary" name="Delete" value="Delete"><i class="far fa-trash-alt"></i></button></form>
                </td>
            </tr>';
    } ?>
     </tbody>
     </table>
   <?php } else{
    echo "0 Result";
   }
   
   if(isset($_REQUEST['Delete'])){
   $sql = "DELETE FROM addcourse WHERE course_id = {$_REQUEST['id']}";
   if($conn->query($sql) == TRUE){
    echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
   }
    else{
        echo "Unable to Delete Data";
    }
}
   ?>
</div>

<div>
    <a href="addcourse.php" class="btn btn-danger" style="position:fixed; bottom:10px; right:20px; margin-bottom: 30px; fixed;"><i class="fas fa-plus fa-2x"></i></a>
</div>
