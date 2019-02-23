<?php

$servername = 'localhost';
$usernames = 'root';
$passwords = '';
$dbname = 'zirconwords';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usernames, $passwords);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO zirconusers (id, fullname, email, password, twitter, instagram, facebook, sex, usertype)
    VALUES (NULL, '$name', '$email', '$secure', '$twitter', '$instagram',  '$facebook', '$sex', 'user')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $_proud['error'] = 'Sign up successful';
    include 'log_in.php';
} catch (PDOException $e) {
    echo $sql.'<br>'.$e->getMessage();
}

$conn = null;
