<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['uid'])) {
    // Get the user ID from the session
    $user_id = $_SESSION['uid'];
    
    // Your database connection code
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

    // Get the current date and time
    $logout_time = date("Y-m-d H:i:s");

    // Update the logout time in the userlog table
    $sql = "UPDATE userlog SET logout ='$logout_time' WHERE uid='$user_id'";
    if ($conn->query($sql) === TRUE) {
        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to the login page or any other desired page
        header("Location: Patient_login.html");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: Patient_login.html");
    exit;
}
?>
