<?php
session_start();


$valid_username = "admin";
$valid_password = "1234";

if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid login. <a href='login.php'>Try again</a>";
}
