<?php
// Start the session
session_start();

// Include database configuration
include_once "../include/dbConfig.php";

// Update logout time in the database
if(isset($_SESSION['user_id'])) {
    // Get the user's ID from the session
    $user_id = $_SESSION['user_id'];

    // Prepare and execute SQL query to update logout time
    $stmt = $pdo->prepare("UPDATE admin SET logout = CURRENT_TIMESTAMP WHERE id = ?");
    $stmt->execute([$user_id]);
}

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: Admin_login.html");
exit;
?>
