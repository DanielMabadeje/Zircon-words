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
    <div class="col-md-12">
                    <?php
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                            unset($_SESSION['error']);
                        }
                    ?>
        <div class="signUp bg-light">
            <h5 class="text-center headSign" >SIGN UP</h5>
            <form class="logIn" action="validate.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control fC" id="formGroupExampleInput" placeholder="FULL NAME" name="name">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control fC" id="formGroupExampleInput2" placeholder="PASSWORD" name="pwd">
                </div>
                <div class="form-group">
                    <input type="Password" class="form-control fC" id="formGroupExampleInput" placeholder="CONFIRM PASSWORD" name="pwds">
                </div>
                <div class="form-group ">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control fC" id="formGroupExampleInput" placeholder="EMAIL" name="email">
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control fC" id="formGroupExampleInput2"  placeholder="FACEBOOK" name="facebook">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control fC" id="formGroupExampleInput" value="twitter.com/" placeholder="TWITTER" name="twitter">
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control fC" id="formGroupExampleInput2" value="instagram.com/" name="instagram">
                </div>
                <div class="form-group ">
                </div>
                <div class="text-center btnLog">
                    <button class="btn btnS btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>
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