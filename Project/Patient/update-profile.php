<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST['id']) && !empty($_POST['fullname']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['email']) && !empty($_POST['gender'])) {
    // Form data
    $U_id = $_POST['id'];
    $full_name = $_POST['fullname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Prepare the SQL query
    $sql = "UPDATE users SET fullName = ?, address = ?, city = ?, email = ?, gender = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssssi", $full_name, $address, $city, $email, $gender, $U_id);

    // Execute the query
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Updated Successfully";
        header('Location: manage-profile.html');
        exit;
    } else {
        $_SESSION['error_message'] = "Error updating record: " . $conn->error;
        header('Location: manage-profile.html');
        exit;
    }
} else {
    $_SESSION['error_message'] = "All fields are required.";
    header('Location: manage-profile.html');
    exit;
}

// Close the prepared statement and the connection
if (isset($stmt)) {
    $stmt->close();
}
$conn->close();
?>
