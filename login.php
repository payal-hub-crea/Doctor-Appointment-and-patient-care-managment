<?php
session_start();

$error = "";

if(isset($_GET['error'])){
    $error = "Invalid Email or Password!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-page">
    <div class="login-box">

        <h2>MIT Hospital</h2>
        <p>Patient Login Portal</p>

        <?php
        if($error != ""){
            echo "<p style='color:red;'>$error</p>";
        }
        ?>

        <form action="login_process.php" method="POST">

            <input type="email" name="email" placeholder="Email Address" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

        </form>

        <a href="register.php">Create New Account</a>

    </div>
</div>

</body>
</html>