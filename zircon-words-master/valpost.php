<?php

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
if (empty($name || $title || $content)) {
    $_SESSION['error'] = 'Inputs cannot be empty';
    $errors[] = 'Inputs cannot be empty';
}
// var_dump($_FILES['fileToUpload']['name']);
// if (empty($_FILES['fileToUpload']['name'])) {
//     $target_file = 'uploads/users_571.jpg';
// } else {
//     $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
// }
if ($target_file == 'uploads/') {
    $target_file = 'uploads/users_571.jpg';
}
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        echo 'File is an image - '.$check['mime'].'. <br>';
        $uploadOk = 1;
    } else {
        echo 'File is not an image.';
        // $target_file = 'uploads/users_571.jpg';
        $uploadOk = 1;
    }
}
if ($_FILES['fileToUpload']['size'] > 100000000) {
    echo 'your file is too large.<br>';
    $uploadOk = 1;
}
// if (empty($_FILES['file']['name'])) {
//     $target_file = 'uploads/users_571.jpg';
// }
if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
&& $imageFileType != 'gif' && $imageFileType != 'mp4') {
    // $errors[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
    $uploadOk = 0;
} elseif ($target_file == 'uploads/') {
    $target_file = 'uploads/users_571.jpg';
} else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo 'The file '.basename($_FILES['fileToUpload']['name']).' has been uploaded.';
    } else {
        $errors[] = 'Sorry, there was an error uploading your file.';
    }
}

    if (empty($errors)) {
        var_dump($target_file);
        include 'insertpost.php';
        header('location: individual_posts.php');
    } else {
        foreach ($errors as $error) {
            echo $error.'<br>';
            $_SESSION['error'] = $error;
            // header('location:add_blogs.php');
        }
    }
