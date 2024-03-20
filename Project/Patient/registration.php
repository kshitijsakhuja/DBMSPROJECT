<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hms";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

    $fname = $_POST['fullname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confirmpassword']; // corrected column name
    
    if($password==$confpassword){
        $hashpwd=md5($password);
        if($gender=="male"){
            $query = mysqli_query($con, "INSERT INTO users (fullname, address, city, gender, email, password) VALUES ('$fname', '$address', '$city', 'Male', '$email', '$hashpwd');");
            if($query) {
                echo "Successfully Registered. You can login now";
                //header('location: index.html');
                exit;
            } else {
                echo "Error: " . mysqli_error($con);
            } 

        }
        else if($gender=="female"){
            $query = mysqli_query($con, "INSERT INTO users (fullname, address, city, gender, email, password) VALUES ('$fname', '$address', '$city', 'Female', '$email', '$hashpwd');");
            if($query) {
                echo "Successfully Registered. You can login now";
                //header('location: index.html');
                exit;
            } else {
                echo "Error: " . mysqli_error($con);
            } 

        }
        
    }
    else{
        echo "Passwords do not match!";
    } 
    

?>
