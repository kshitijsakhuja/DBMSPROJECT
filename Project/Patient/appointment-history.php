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

// Constructing SQL query to retrieve appointment
$sql = "SELECT * FROM appointment";

// Execute SQL query
$result = $conn->query($sql);

// Display appointments in a table
if ($result->num_rows > 0) {
    echo '<table>
            <tr>
                <th>Appointment ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Appointment DateTime</th>
                <th>Creation DateTime</th>
                <th>Status</th>
                <th>Action</th>
            </tr>';
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row["appointment_id"] . '</td>
                <td>' . $row["patient_name"] . '</td>
                <td>' . $row["doctor_name"] . '</td>
                <td>' . $row["appointment_datetime"] . '</td>
                <td>' . $row["creation_datetime"] . '</td>
                <td>' . $row["status"] . '</td>
                <td><button>View</button></td>
              </tr>';
    }
    echo '</table>';
} else {
    echo "<h3>No appointments found</h3>";
}

// Close connection
$conn->close();
?>
