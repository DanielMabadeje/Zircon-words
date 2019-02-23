<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$passwords = $_POST['pwds'];
$sex = $_POST['customRadio'];
$secure = password_hash($password, PASSWORD_DEFAULT);
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$twitter = $_POST['twitter'];

if (empty($name)) {
    $errors[] = 'Name not Given';
}

if (empty($email)) {
    $errors[] = 'email not Given';
} else {
    filter_var($email);
}
if (empty($password)) {
    $errors[] = 'password not Given';
}

if (($sex = 1)) {
    $sex = 'male';
} else {
    $sex = 'female';
}

if ($sex = null) {
    $errors[] = 'gender not Given';
}
if ($password != $passwords) {
    $errors[] = 'Passwords do not match';
}

$Syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
if (!preg_match($Syntaxe, $email)) {
    $errors[] = 'invalid email';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

if (empty($errors)) {
    include 'insertusers.php';
    header('location: log_in.php');
} else {
    foreach ($errors as $error) {
        echo $error.'<br>';
        $_SESSION['error'] = $error;
        header('location:sign_up.php');
    }
}
