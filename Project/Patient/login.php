<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../include/dbConfig.php";

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :username");
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $username = $_POST["username"];
    $password = $_POST['password'];
    if ($stmt->execute()) {
        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (md5($password) == $row["password"]) {
                // Valid credentials, start a new session
                session_regenerate_id();
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;

                // Generate a unique session ID
                $sessionId = session_id();

                // Store login information in userlog table
                $loginTime = date('Y-m-d H:i:s');
                //$logoutTime=date('Y-m-d H:i:s');
                $ipAddress = $_SERVER['REMOTE_ADDR'];
                $stmt = $pdo->prepare("INSERT INTO userlog (username, uid, logintime, userip) VALUES (:username, :session_id, :login_time, :ip_address)");
                $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                $stmt->bindParam(":session_id", $sessionId, PDO::PARAM_STR);
                $stmt->bindParam(":login_time", $loginTime, PDO::PARAM_STR);
                $stmt->bindParam(":ip_address", $ipAddress, PDO::PARAM_STR);
                $stmt->execute();

                // Redirect to index.html
                header("location: index.html");
                exit;
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    unset($stmt);
    unset($pdo);
}
?>
