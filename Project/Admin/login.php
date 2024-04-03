<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../include/dbConfig.php";

    $stmt = $pdo->prepare("SELECT * FROM admin WHERE admin_email = :username");
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $username = $_POST["username"];
    $password = $_POST['password'];
    if ($stmt->execute()) {
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($password == $row["password"]) {
                session_regenerate_id();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["updationDate"] = time(); // Store login time
                header("location: index.html");
                exit;
            } else {
                echo "Invalid username or password.";
            }
        } else {
            $login_err = "Invalid username or password.";
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    unset($stmt);
    unset($pdo);
}
?>
