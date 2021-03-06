<?php
include_once('./../app/Global.php');
$flash = flash();
ByPass('guest');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='../assets/css/login.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Task Management System</title>
</head>

<body>
    <!-- main start-->
    <div class="main">
        <!--container start-->
        <div class="container">
            <!--row start-->
            <div class="row">
                <div class="col-md loginBG">
                    <img src="../assets/images/img-login.png" width="80%">
                </div>
                <div class="col-md align-self-center loginPadding">
                    <center> <img src="../assets/images/logo.png" width="50%"></center>
                    <br>
                    <?php if (!empty($flash[0])) { ?>
                        <div class="alert alert-lg alert-danger"><?= $flash[0] ?></div>
                    <?php } ?>
                    <form name="myForm" action='./attempt/' method="post" class="needs-validation" novalidate>
                        <label>Email Address</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="email" id="email" aria-label="email" aria-describedby="basic-addon1" name='email' required>

                        </div>
                        <p id="emailValidation"></p>
                        <label>Password</label>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" name='password' required>
                        </div>

                        <div class="input-group mb-3">
                            <a href="#">Forgot your password?</a>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-primary" style="width:100%" value="login">
                        </div>
                        <p id="password"></p>
                        <div class="text-center">
                            <p>Don't have an account? <a href="#">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!--row start-->
        </div>
        <!--container end-->
    </div>
    <!-- main end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>