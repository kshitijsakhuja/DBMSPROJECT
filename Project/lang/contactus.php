<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // If your password is empty, leave it as an empty string
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    // Get form data
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    //$contactno = isset($_POST['contactno']) ? $_POST['contactno'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO tblcontactus(firstname, lastname, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Message Sent Successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    if (isset($stmt)) {
        $stmt->close();
    }
    $conn->close();

    // Display success message if it exists and redirect to index.html
    if (isset($_SESSION['success_message'])) {
        echo "<script>alert('{$_SESSION['success_message']}');</script>";
        unset($_SESSION['success_message']);
        header("Location: index.php");
        exit;
    }
}
?>