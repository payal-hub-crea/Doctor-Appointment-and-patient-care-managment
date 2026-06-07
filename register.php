<!DOCTYPE html>
<html>
<head>
    <title>Register - MIT Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-page">

    <div class="login-box">

        <h2>Create Account</h2>
        <p>Patient Registration</p>

        <form action="register_process.php" method="POST">

            <input type="text" name="name" placeholder="Full Name" required>

            <input type="email" name="email" placeholder="Email Address" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="text" name="phone" placeholder="Phone Number" required>

            <button type="submit">Register</button>

        </form>

        <div class="login-links">
            <a href="login.php">Already have account? Login</a>
        </div>

    </div>

</div>

</body>
</html>