<?php
session_start();
error_reporting(0);
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // If your password is empty, leave it as an empty string
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else {
    if (isset($_GET['cancel'])) {
        mysqli_query($con, "UPDATE appointment SET doctorStatus='0' WHERE id ='".$_GET['id']."'");
        $_SESSION['msg'] = "Appointment canceled !!";
    }
}
?>
