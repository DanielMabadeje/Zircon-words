<?php
 include_once 'functions.php';

 if (!isLoggedIn()) {
     session_destroy();
     header('location: log_in.php');
     $_SESSION['error'] = 'You are not logged in';
 }
