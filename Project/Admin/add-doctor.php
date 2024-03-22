<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database configuration
    include_once "../include/dbConfig.php";
    
    // Retrieve form data
    $specialization = $_POST["specialization"];
    $name = $_POST["name"];
    $clinicAddress = $_POST["clinicAddress"];
    $consultancyFees = $_POST["consultancyFees"];
    $contactNo = $_POST["contactNo"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    // Validate form data (you can add more validation as needed)
    if (empty($specialization) || empty($name) || empty($clinicAddress) || empty($consultancyFees) || empty($contactNo) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Please fill in all the fields.";
        exit;
    }
    
    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }
    
    // Generate ID for the new doctor entry (you can use any method to generate a unique ID)
    $id = uniqid('doctor_');

    // Hash the password (you should use a stronger hashing method)
    $hashedPassword = md5($password);

    // Prepare and execute SQL query to insert data into the database
    $stmt = $pdo->prepare("INSERT INTO doctors (id, specialization, doctorname, address, docFees, contactno, docEmail, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$id, $specialization, $name, $clinicAddress, $consultancyFees, $contactNo, $email, $hashedPassword]);

    // Check if insertion was successful
    if ($stmt->rowCount() > 0) {
        echo "Doctor added successfully.";
        header("Location: add-doctor.html");
        exit; // Make sure to exit after header redirect
    } else {
        echo "Error adding doctor. Please try again.";
    }

    // Close the database connection
    unset($pdo);
}
?>
