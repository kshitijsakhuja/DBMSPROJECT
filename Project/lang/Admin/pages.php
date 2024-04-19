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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = $conn->real_escape_string($_POST['Description']);
    $pageId = 1;  // Assuming you know the ID of the page to update

    $sql = "UPDATE tblpage SET PageDescription = '$description' WHERE ID = $pageId";

    if ($conn->query($sql) === TRUE) {
        echo "Page description updated successfully.";
        header("Location: pages.html");   // Redirect
    } else {
        echo "Error updating description: " . $conn->error;
    }

    $conn->close();
}
?>
