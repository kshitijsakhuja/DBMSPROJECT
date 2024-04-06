<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "hms"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve specialization from the form
    $specialization = $_POST['specialization'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO doctorspecilization (specialization, updationDate) VALUES (?, CURRENT_TIMESTAMP) ON DUPLICATE KEY UPDATE updationDate = CURRENT_TIMESTAMP";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $specialization);

    // Execute the statement 
    if ($stmt->execute()) {
        echo "Specialization added successfully.";
        header("Location:add-specialization.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
