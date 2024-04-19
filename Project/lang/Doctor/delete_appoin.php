<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ''; // If your password is empty, leave it as an empty string
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['deleteid'])){
    $row['id']=$_GET['deleteid'];

    $sql = "DELETE FROM appointment WHERE id={$row['id']}";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
        header("Location:manage-appointment.php");
    }else {
        echo "Deletion failed";
    }
}

?>