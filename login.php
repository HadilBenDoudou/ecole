<?php
session_start();
if (isset($_SESSION['erreurLogin']))
    $erreurLogin = $_SESSION['erreurLogin'];
else {
    $erreurLogin = "";
}
session_destroy();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Educators | Online Course & Education HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="templates/educators/assets/media/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="templates/educators/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="templates/educators/assets/css/app.css">
    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

    <section class="banner style-1">
        <div class="container">
            <div class="banner-content">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                        <strong>
                            <h2>
                                <a class="navbar-brand" href="index-2.html">
                                    <img src="templates/educators/assets/media/logo.svg" alt="">
                                </a> <br>
                            </h2>
                        </strong>
                        <p class="light-text">Welcome to our educational <br> platform where you can log in <br>and enrich your learning experience.</p>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-0">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-20 col-md-20 col-20 ">
                        <div class="trail-content">
                            <h4>Login <b>Students</b> </h4>
                            <span></span>
                            <form method="post" action="seConnecter.php">
                                <?php if (!empty($erreurLogin)) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo $erreurLogin ?>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="login" placeholder="your name">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd" placeholder="your password">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="carte_etudiant" name="carte_etudiant" placeholder="your catre">

                                </div>

                                <button class="educators-btn medium dark"> Get It Now</button>
                            </form>
                            <div style="margin-top: 20px;margin-left:50px;">
                                <a href="InitialiserPwd.php" style="color: #000; text-decoration: none;">Forgot Password?</a>
                                <span style="margin: 0 10px; color: #000;">|</span>
                                <a href="sigup.php" style="color: #000; text-decoration: none;">Create Account</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>