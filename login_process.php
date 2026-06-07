<?php
session_start();

$conn = new mysqli("localhost","root","","appointment");

if($conn->connect_error){
    die("DB Error");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){

    $row = $result->fetch_assoc();

    // 🔥 IMPORTANT FIX
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_name'] = $row['name'];

    // force redirect
    header("Location: index.php");
    exit();

}else{
    header("Location: login.php?error=1");
    exit();
}
?>
