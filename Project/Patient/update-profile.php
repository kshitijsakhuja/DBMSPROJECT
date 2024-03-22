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

if (!empty($_POST['fullname']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['email']) && !empty($_POST['gender'])) {
  // Form data
  $full_name = isset($_POST['fullname']) ? $_POST['fullname'] : '';
  $address = isset($_POST['address']) ? $_POST['address'] : '';
  $city = isset($_POST['city']) ? $_POST['city'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

  // Prepare the SQL query
  $sql = "
    UPDATE users
    SET fullname = ?, address = ?, city = ?, email = ?, gender = ?
    WHERE id = ?";


  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssi", $full_name, $address, $city, $email, $gender, $_SESSION['id']);
  echo "HEllo World";

  // Execute the query
  if ($stmt->execute()) {
    $_SESSION['success_message'] = "Updated Successfully";
    //header('Location: manage-profile.html');
    echo("Record updated successfully");
    exit;
  } else {
    echo "Error: " . $stmt->error;
  }
}

// Close the prepared statement and the connection
if (isset($stmt)) {
  $stmt->close();
}

$conn->close();
?>