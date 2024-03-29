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
//Checking Details for reset password
if(isset($_POST['submit'])){
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
    $query=mysqli_query($conn,"select id from  doctors where contactno='$contactno' and docEmail='$email'");

    $row=mysqli_num_rows($query);
    if($row>0){
    
    $_SESSION['cnumber']=$contactno;
    $_SESSION['email']=$email;
    header('location:reset-password.php');
    } else {
    echo "<script>alert('Invalid details. Please try with valid details');</script>";
    echo "<script>window.location.href ='forget-password.php'</script>";
    
    
    }
    
    }
    ?>