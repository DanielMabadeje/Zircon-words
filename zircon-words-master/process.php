<?php

session_start();
include 'functions.php';

if (isLoggedIn()) {
    header('location: view_posts.php');
}

$username = $_POST['username'];
$password = $_POST['password'];
$secure = password_hash($password, PASSWORD_DEFAULT);

require_once 'connection.php';

$sql = "SELECT * FROM zirconusers WHERE fullname='$username' OR email='$username'";
$result = $conn->query($sql);
$user = $result->fetch(PDO::FETCH_ASSOC);

if (empty($username)) {
    $_SESSION['error'] = 'Invalid Username or Password';
    header('location: log_in.php');
}
$level = $user['password'];
if (password_verify($password, $level)) {
    header('location: view_posts.php');
    $_SESSION['username'] = $user['fullname'];
} else {
    $_SESSION['error'] = 'Invalid Username or Password';
    echo 'wowo';
    header('location: log_in.php');
}
