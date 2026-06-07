error_reporting(E_ALL);
ini_set('display_errors', 1);
<?php
$conn = new mysqli("localhost","root","","appointment");

if($conn->connect_error){
    die("DB connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users(name,email,password,phone)
VALUES('$name','$email','$password','$phone')";

if($conn->query($sql) === TRUE){
    header("Location: login.php?msg=success");
}else{
    echo "Error";
}
?>