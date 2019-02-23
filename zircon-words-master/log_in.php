<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="layout/styles/custom.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="sign_up.php"></a>
                <div class="form-inline">
                    <p class="mr-sm-3 mt-sm-3 text-white">Not a Member?</p>
                    <a href="sign_up.php"><button class="btn btn-outline-success my-2 my-sm-0" >Sign Up</button></a>
                </div>
            </nav>
        </div>
        <div class="logOn bg-white">
        <?php
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                            unset($_SESSION['error']);
                        }
                    ?>
            <form class="n" action="process.php" method="post">
                <div class="text-center mb-4">
                    <img src="./images/demo/backgrounds/132dd90b-9e47-4608-9a23-4468452bda5d.png" style="height: 5rem; width: 5rem">
                </div>
                <div class="form-group">
                    <input type="" class="form-control" id="formGroupExampleInput" placeholder="Username/Email" name="username">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password">
                </div>
                <div class="text-center btnLog">
                    <button class="btn btnL btn-outline-success my-2 my-sm-0" type="submit">LogIn</button>
                </div>
            </form>
        </div>
    </div>

    








    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>