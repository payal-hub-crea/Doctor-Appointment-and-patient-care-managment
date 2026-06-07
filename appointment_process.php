<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    die("Please login first");
}

$user_id = $_SESSION['user_id'];

// FORM DATA (HTML ids वापरले आहेत)
$patient_name = $_POST['apt-name'] ?? '';
$phone        = $_POST['apt-phone'] ?? '';
$email        = $_POST['apt-email'] ?? '';
$age          = $_POST['apt-age'] ?? '';
$gender       = $_POST['apt-gender'] ?? '';
$department   = $_POST['apt-department'] ?? '';
$doctor       = $_POST['apt-doctor'] ?? '';
$date         = $_POST['apt-date'] ?? '';
$time         = $_POST['apt-time'] ?? '';
$type         = $_POST['apt-type'] ?? '';
$symptoms     = $_POST['apt-symptoms'] ?? '';

// INSERT QUERY
$sql = "INSERT INTO appointments 
(user_id, patient_name, phone, email, age, gender, department, doctor, appointment_date, appointment_time, visit_type, symptoms)
VALUES
('$user_id', '$patient_name', '$phone', '$email', '$age', '$gender', '$department', '$doctor', '$date', '$time', '$type', '$symptoms')";

if($conn->query($sql)){
    echo "<script>
    alert('Appointment Booked Successfully');
    window.location.href='index.php#appointment';
    </script>";
}

