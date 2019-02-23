<?php
 session_start();
 require_once 'connection.php';
 include_once 'functions.php';
 include 'checksession.php';
 $sql = "SELECT * FROM zirconusers WHERE fullname='$_SESSION[username]'";

 $result = $conn->query($sql);
 $student = $result->fetchAll(PDO::FETCH_ASSOC);
 foreach ($student as $key => $row) {
     $key = $key + 1;
     $usertype = $row['usertype'];
     $email = $row['email'];
 }
 if ($usertype === 'superadmin') {
     $_SESSION['admin'] = 1;
     $_SESSION['superadmin'] = 1;
 } elseif ($usertype === 'admin') {
     $_SESSION['admin'] = 1;
 }
//  echo $_SESSION['username'];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="layout/styles/custom.css">
    <title>View Posts</title>
</head>

        
<div class="wrapper row0">
        <div id="topbar" class="hoc clear">
            <div class="fl_left">
                <div id="logo" class="fl_left">
                    <h4><a href="index.html">ZIRCON</a></h4>
                </div>
            </div>
            <div class="fl_right">
                <ul>
                    <li><a href="view_posts.php"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="add_blogs.php">Add Posts</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="individual_posts.php">My Posts</a></li>
                    <?php
                if (isLoggedIn()) {
                    echo '<li id="hov"><a href="logout.php">Log out</a></li>';
                } else {
                    echo '<li id="hov"><a class="" href="login.php">Log in</a></li> or';
                    echo '<li id="hov"><a class="folow btn btn-sm btn-outline-secondary" href="account.php">Sign up</a></li>';
                }
                    ?>
                </ul>
            </div>
        </div>
    </div>