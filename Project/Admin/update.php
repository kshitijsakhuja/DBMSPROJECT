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

$row['id']=$_GET['updateid'];
if(isset($_POST['submit'])){
    // $name=$_POST['doctorSpecialization'];
    $date=$_POST['appointmentDate'];
    $time= $_POST['appointmentTime'];


    $sql = "UPDATE appointment SET appointmentDate = '{$date}', appointmentTime='{$time}' WHERE id = {$row['id']}";

    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data updated successfully";
    }else{
        echo "Data updation failed";
    }
}    


?>