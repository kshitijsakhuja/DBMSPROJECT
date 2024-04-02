<?php
// Establishing connection to the database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "hms"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieving search query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $specilization = $_POST['department'];

    // Constructing SQL query
    if ($specilization == "" || $specilization == 'All') {
        $sql = "SELECT * FROM doctors";
    } else {
        // Using prepared statement to prevent SQL injection
        $sql = "SELECT * FROM doctors WHERE specialization = ?";
    }

    // Prepare and bind SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($specilization != "" && $specilization != 'All') {
            $stmt->bind_param("s", $specilization);
        }

        // Execute SQL statement
        $stmt->execute();

        // Get result set
        $result = $stmt->get_result();

        // Output data
        if ($result->num_rows > 0) {
            echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                </tr>';
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td> ' . $row["doctorName"] . '</td><td> ' . $row["specialization"] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo "<h3>0 results</h3>";
        }

        // Close result set
        $stmt->close();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>