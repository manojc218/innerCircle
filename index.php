<?php

$msg="";
session_start();
//print_r($_SESSION);
//exit;
    if(isset($_GET["logout"]))
    {
        session_destroy();//session destroy when logout
    }

else if(isset($_SESSION['user_id']))
    {
        header("location:view/dashboard.php");
    }

if(isset($_POST['username']))
{
    include_once ('backend/User.php');
    $userLogin = new user();
    $loginResult = $userLogin->user_login($_POST['username'], $_POST['password']);

    if ($loginResult) {
        header("location:view/dashboard.php");
    } else {
        $msg ="<div style=\"background-color: #962731;height: 50px;\">
                            <h5 style=\"position: relative;top: 10px;\">Sorry, username and password are not match. Please check and retry</h5>
                        </div>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InnerCircle(PVT)Ltd</title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="build/css/custom.css" rel="stylesheet">
    </head>

    <body class="login">
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <!--start login form-->
                <form method="post" action="index.php">
                    <h1>INNER CIRCLE (PVT) Ltd.</h1>
                    <div class="alert alert-info" role="alert" id="lgAlert">
                        <h3>Please Login Here</h3>
                        <?=$msg?>
                    </div>

                    <!--User name-->
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required=""  name="username"/>
                    </div>

                    <!--Password-->
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                    </div>
                    <div>

                        <!--login button-->
                        <button class="btn btn-primary btn-lg" >Login</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">


                        <div class="clearfix"></div>
                        <br />
                        <!--Inner Circle Logo-->
                        <div>
                            <img src="docs/images/inner%20circle%20logo%20transparent_white_croped.png" style="width: 300px;height: 170px;">
                        </div>
                    </div>
                </form>
                <!--End login form-->
            </section>
        </div>
    </div>
        <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <!--start login form-->
                        <form method="post" action="index.php">
                            <h1>INNER CIRCLE (PVT) Ltd.</h1>
                            <div class="alert alert-info" role="alert" id="lgAlert">
                                <h3>Please Login Here</h3>
                                <?=$msg?>
                            </div>

                            <!--User name-->
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required=""  name="username"/>
                            </div>

                            <!--Password-->
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                            </div>
                            <div>

                                <!--login button-->
                                <button class="btn btn-primary btn-lg" >Login</button>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">


                                <div class="clearfix"></div>
                                <br />
                                        <!--Inner Circle Logo-->
                                <div>
                                    <img src="docs/images/inner%20circle%20logo%20transparent_white_croped.png" style="width: 300px;height: 170px;">
                                </div>
                            </div>
                        </form>
                            <!--End login form-->
                    </section>
                </div>
        </div>
    </body>
</html>
