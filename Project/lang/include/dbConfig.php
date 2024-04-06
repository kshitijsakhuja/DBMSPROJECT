<?php
// Database configuration
$host = "localhost"; // Your database host (e.g., localhost)
$dbname = "hms"; // Your database name
$username = "root"; // Your database username
$password = ""; // Your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally, set other PDO attributes if needed

    // Check if the connection is successful
    if ($pdo) {
        echo "Connected successfully";
    }

} catch(PDOException $e) {
    // Handle database connection errors
    //echo $username;
    //echo $password;
    echo "Connection failed: " . $e->getMessage();
    exit(); // Terminate script execution
}
?>
