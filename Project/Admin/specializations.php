<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "hms"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve specializations
$sql = "SELECT * FROM doctorspecilization";

// Execute query
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Specialization</th>
                <th>Creation Date</th>
                <th>Updation Date</th>
                <th>Action</th>
            </tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['specialization']}</td>
                <td>{$row['creation Date']}</td>
                <td>{$row['updation Date']}</td>
                <td>
                    <button class='edit'><i class='fas fa-pen'></i></button>
                    <button class='delete'><i class='fas fa-trash-alt'></i></button>
                </td>
            </tr>";
    }
    echo '</table>';
} else {
    echo "0 results";
    header("Location:specializations.html");
}

// Close connection
$conn->close();
?>
