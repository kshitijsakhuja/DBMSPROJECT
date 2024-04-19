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
    $row['ID']=$_GET['deleteid'];

    $sql = "DELETE FROM tblpatient WHERE id={$row['ID']}";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
        header("Location:patients.php");
    }else {
        echo "Deletion failed";
    }
}

?>