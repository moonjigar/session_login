<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session Login Log Out</title>
</head>

<body>
<form method="POST" action="login_session.php">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
</body>
</html>