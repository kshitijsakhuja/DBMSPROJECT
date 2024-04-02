<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "hms"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving search query
$specilization = $_POST['department'];

// Constructing SQL query
$sql = "SELECT * FROM doctors";
if ($specilization != 'All') {
    $sql .= " WHERE specilization = '$specilization'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>Name: " . $row["doctorName"]. " - specilization: " . $row["specilization"]. "</p>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
