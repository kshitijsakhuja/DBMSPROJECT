<?php
//Databse Connection details
$servername="localhost";
$username="root";
$password= "";
$dbname="hms";

//create connection
$conn= new mysqli($servername,$username, $password ,$dbname); 

//check connection
if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);
}

//Handle form submission
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //Retrieve form data
    $RecordDate = !empty($_POST['CreationDate']) ? $_POST['CreationDate']:'';
    $Bloodpressure = !empty($_POST['BloodPressure']) ? $_POST['BloodPressure']:'';
    $weight=!empty($_POST['Weight']) ? $_POST['Weight']: '';
    $Bloodsugar=!empty($_POST['BloodSugar']) ? $_POST['BloodSugar'] :'';
    $BodyTemp=!empty($_POST['Temperature']) ? $_POST['Temperature'] : '';
    $MedicalPrescription=!empty($_POST['MedicalPres']) ? $_POST['MedicalPres'] : '';

    //prepare sql statemnet to insert data into the databse
    $sql= "INSERT INTO tblmedicalhistory(CreationDate,BloodPressure,Weight,BloodSugar,Temperature,MedicalPres) 
    VALUES('$RecordDate','$Bloodpressure','$weight','$Bloodsugar','$BodyTemp','$MedicalPrescription')";

    //Exctue the statement
    if($conn->query($sql)=== TRUE){
        echo "Medical History Add";
        header("location:add-medical-history.html");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

//close connection
$conn->close();
?>