<?php
include('../maininclude/dbconnection.php');
session_start();

if(!isset($_SESSION['is_login'])){
    echo "<script> location.href = '../studentlogin.php' </script>";
}
else{
    ?>

    <?php
$sql = "SELECT course_id, course_name FROM addcourse";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            background-color: #f8f9fa; /* Light background color */
        }
        .course-selection {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 400px; /* Fixed width for the form */
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


<?php if ($result->num_rows > 0): ?>
    <div class="course-selection">
        <form action='enroll.php' method='post'>
            <h2>Select a Course to Enroll</h2>
            <ul class="list-unstyled">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <li>
                        <input type='radio' name='course_id' value='<?php echo $row['id']; ?>' required>
                        <?php echo htmlspecialchars($row['course_name']); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
            <button type='submit' class='btn btn-primary btn-block'>Enroll in Selected Course</button>
        </form>
    </div>
<?php else: ?>
    <div class="course-selection">
        <p>No courses available for enrollment.</p>
    </div>
<?php endif; ?>

</body>
</html>

<?php

}

?>