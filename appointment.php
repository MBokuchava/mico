<?php
// Book Appointment

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST["inputPatientName"];
    $doctorName = $_POST["inputDoctorName"];
    $departmentName = $_POST["inputDepartmentName"];
    $phoneNumber = $_POST["inputPhone"];
    $symptoms = $_POST["inputSymptoms"];
    $appointmentDate = $_POST["inputDate"];

    echo "<h2> <i><b>$patientName, your reservation is accepted!</b></i> </h2>";
    echo "<h3>Appointment Details:</h3>";
    echo "<p>Patient Name: <b>$patientName</b></p>";
    echo "<p>Doctor's Name: <b>$doctorName</b></p>";
    echo "<p>Department's Name: <b>$departmentName</b></p>";
    echo "<p>Phone Number: <b>$phoneNumber</b></p>";
    echo "<p>Symptoms: <b>$symptoms</b></p>";
    echo "<p>Appointment Date: <b>$appointmentDate</b></p>";
}
?>
