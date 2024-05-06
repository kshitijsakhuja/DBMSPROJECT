<?php
// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $reportType = $_POST['report_type'];

    // Connect to your database using MySQLi
    $host = 'localhost';  // Your database host
    $user = 'root';   // Your database username
    $password = '';   // Your database password
    $dbname = 'hms';  // Your database name

    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define a base SQL query to use based on the report type
    switch ($reportType) {
        case 'Patient':
            $sql = "SELECT * FROM users WHERE regDate BETWEEN ? AND ?";
            break;
        case 'Appointment':
            $sql = "SELECT * FROM appointment WHERE appointmentDate BETWEEN ? AND ?";
            break;
        case 'Doctor':
            $sql = "SELECT * FROM doctors WHERE creationDate BETWEEN ? AND ?";
            break;
        default:
            echo "Invalid Report Type";
            exit;
    }

    // Prepare SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("MySQL prepare error: " . $conn->error);
    }

    // Bind parameters and execute SQL statement
    $stmt->bind_param("ss", $startDate, $endDate);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check results and display
    if ($result->num_rows > 0) {
        // Simple HTML to display results
        echo "<h1>" . htmlspecialchars($reportType) . " Report from $startDate to $endDate</h1>";
        echo "<table border='1'>";
        echo "<tr>";
        while ($field = $result->fetch_field()) {
            echo "<th>" . htmlspecialchars($field->name) . "</th>";
        }
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $column) {
                echo "<td>" . htmlspecialchars($column) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No data submitted";
}
?>
