<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit(); // Make sure to exit after redirecting to prevent further execution of the script.
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization and Registration</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- Registration Form -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Full Name</label>
        <input type="text" name="full_name" placeholder="Enter your full name">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email address">
        <label>Profile Picture</label>
        <input type="file" name="avatar">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <label>Confirm Password</label>
        <input type="password" name="password_confirm" placeholder="Confirm your password">
        <button type="submit">Sign Up</button>
        <p>
            Already have an account? - <a href="/">sign in</a>!
        </p>
        <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        unset($_SESSION['message']); // Unset the 'message' key after displaying it.
    }
?>
    </form>

</body>
</html>
