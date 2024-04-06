<?php
session_start();

// Database connection
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

if (!empty($_POST['contactno']) && !empty($_POST['email'])) {
    // Sanitize user inputs
    $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Prepare and execute SQL query
    $sql = "SELECT * FROM doctors WHERE contactno = '$contactno' AND docEmail = '$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows == 1) {
        // Generate a random password reset token
        $token = bin2hex(random_bytes(16));

        // Store the token in the database
        $update_sql = "UPDATE doctors SET reset_token = '$token' WHERE contactno = '$contactno'";
        if ($conn->query($update_sql) === TRUE) {
            // Send the reset link to the doctor's email
            $reset_link = "http://example.com/reset-password.php?token=" . $token; // Change 'example.com' to your domain
            $to = $email;
            $subject = "Password Reset Link";
            $message = "Click the following link to reset your password: " . $reset_link;
            $headers = "From: your_email@example.com\r\n"; // Change 'your_email@example.com' to your email
            $headers .= "Reply-To: your_email@example.com\r\n"; // Change 'your_email@example.com' to your email
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
                $_SESSION['success_message'] = "Password reset link sent to your email.";
                header('Location: forgot-password-success.html');
                exit;
            } else {
                $_SESSION['error_message'] = "Failed to send password reset link. Please try again later.";
                header('Location: forgot-password.php');
                exit;
            }
        } else {
            $_SESSION['error_message'] = "Error updating token in database.";
            header('Location: forgot-password.php');
            exit;
        }
    } else {
        $_SESSION['error_message'] = "Invalid mobile number or email.";
        header('Location: forgot-password.php');
        exit;
    }
} else {
    $_SESSION['error_message'] = "Mobile number and email are required.";
    header('Location: forgot-password.php');
    exit;
}

// Close database connection
$conn->close();
?>
