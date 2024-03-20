<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$email = $_POST["email"];
$phone_number = $_POST["contactno"];
$subject = $_POST["subject"];
$message = $_POST["message"];

    // Prepare SQL statement
$sql = "INSERT INTO tblcontactus (firstname, lastname, email, contactno, subject, message) VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$subject', '$message');";

    // Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //header("location: contact-us.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>