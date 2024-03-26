<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
    exit;
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

<!-- Authorization Form -->

<form action="vendor/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter your login">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <button type="submit">Sign in</button>
    <p>
        Don't have an account? - <a href="register.php">register now</a>!
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        unset($_SESSION['message']); // Optionally, you can remove the key after displaying the message
    }
    ?>
</form>

</body>
</html>
