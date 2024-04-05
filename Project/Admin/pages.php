<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $about_us_description = $_POST['Description'];
    
    // SQL query to insert data into database
    $sql = "INSERT INTO tblpage (PageDescription) VALUES ('$about_us_description')";

    if ($conn->query($sql) === TRUE) {
        echo "About Us Description saved successfully.";
        header("Location:pages.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
