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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $specialization = !empty($_POST['doctorSpecialization']) ? $_POST['doctorSpecialization'] : '';
    $doctorName = !empty($_POST['doctor']) ? $_POST['doctor'] : '';
    $date = !empty($_POST['appointmentDate']) ? $_POST['appointmentDate'] : '';
    $time = !empty($_POST['appointmentTime']) ? $_POST['appointmentTime'] : '';
    $consultancy_fees = !empty($_POST['consultancyfees']) ? $_POST['consultancyfees'] : '';

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO appointment (doctorspecialization, doctor, appointmentDate, appointmentTime, consultancyfees) 
    VALUES ('$specialization', '$doctorName', '$date', '$time', '$consultancy_fees')";
    
    // Execute the statement
    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
        header("location:appointments-history.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
