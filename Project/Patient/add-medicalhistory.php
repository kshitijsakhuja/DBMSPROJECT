<?php
// Database Connection details
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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $PatientID = !empty($_POST['PatientID']) ? $_POST['PatientID'] : '';
    $RecordDate = !empty($_POST['CreationDate']) ? $_POST['CreationDate'] : '';
    $Bloodpressure = !empty($_POST['BloodPressure']) ? $_POST['BloodPressure'] : '';
    $weight = !empty($_POST['Weight']) ? $_POST['Weight'] : '';
    $Bloodsugar = !empty($_POST['BloodSugar']) ? $_POST['BloodSugar'] : '';
    $BodyTemp = !empty($_POST['Temperature']) ? $_POST['Temperature'] : '';
    $MedicalPrescription = !empty($_POST['MedicalPres']) ? $_POST['MedicalPres'] : '';

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO tblmedicalhistory(PatientID, CreationDate, BloodPressure, Weight, BloodSugar, Temperature, MedicalPres) 
            VALUES ('$PatientID', '$RecordDate', '$Bloodpressure', '$weight', '$Bloodsugar', '$BodyTemp', '$MedicalPrescription')";

    // Execute the statement
    if ($conn->query($sql) === TRUE) {
        echo "Medical History Added";
        // Redirect to a success page or wherever you want
        header("location:add-medical-history.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
