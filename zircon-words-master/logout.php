<?php

session_start();

include_once 'functions.php';
if (isLoggedIn()) {
    session_destroy();
    $_SESSION = [];
    header('location: login.php');
}

header('location: log_in.php');
