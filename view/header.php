<?php
    session_start();
    if(!isset($_SESSION['userId'])){
        header('location:../index.php');
    }
    $uid=$_SESSION["userId"];
    $userName=$_SESSION["userName"];
    include_once ('../backend/User.php');
    $user=new User();
    $getUserId=$user->get_user_by_id($uid);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>InnerCircle</title>


    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <!--page content start-->


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
    <!--custom my css-->
    <link href="../build/customCss/mycss.css" rel="stylesheet">


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col <!--menu_fixed--> mCustomScrollBox _mCS_1 mCS-autoHide" style="overflow: visible;">

            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="dashboard.php" class="site_title"><img src="../docs/images/inner%20circle%20logo%20transparent_white_icon.png" style="width: 135px; height:100px;"> </a>
                </div>

                <div class="clearfix"></div>
                <br/>
                <!-- menu profile quick info -->
                <div class="profile clearfix" id="profileHeader" style="background:linear-gradient(#220008,#962731)">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>


                    <div class="profile_info" >
                        <span>Welcome,<br></span>
                        <?php
                            echo $userName;
                        ?>
                    </div>
                </div>
                <!-- /menu profile quick info -->




                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <!--<h3>General</h3>-->
                        <div class="separator" style=""></div>
                        <ul class="nav side-menu">
                            <!--Overview-->
                            <li>
                                <a href=dashboard.php><i class="fa fa-desktop"></i> Dashboard <span class="fa fa-chevron-right"></span></a>

                            </li>
                            <!--Administrator-->
                            <li>
                                <a><i class="fa fa-user"></i> Administrative <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="">
                                    <li><a href="add_new_user.php">Add User<span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="user_view.php">View User <span class="fa fa-chevron-right"></span></a>
                                    <li><a href="role.php">Job Titles <span class="fa fa-chevron-right"></span></a>

                                </ul>
                            </li>
                            <!--products-->
                            <li>
                                <a><i class="fa fa-database"></i> Products <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="product_category.php">Product Categories<span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="packages.php">Packages<span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="add_product.php">Add Products<span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="view_products.php">View Products<span class="fa fa-chevron-right"></span></a></li>
                                </ul>
                            </li>
                            <!--purchase management-->
                            <li>
                                <a><i class="fa fa-th-large"></i>Purchase Management<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="order.php">Place Orders<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="view_order.php">View Orders<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="add_grn.php">Add GRN<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="grn.php">GRN<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>

                            <!--Sales-->
                            <li>
                                <a><i class="fa fa-bar-chart-o"></i>Sales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="add_sales.php">Add Sales<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="#">View Sales<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>
                            <!--Stock-->
                            <li>
                                <a><i class="fa fa-pie-chart"></i>Stock<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="stock.php">Stocks<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="distribute.php">Distribute<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>
                            <!--Branches-->
                            <li>
                                <a><i class="fa fa-sitemap"></i>Branches<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="add_branch.php">Add Branch<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="view_branch.php">View Branch<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>

                            <!--Events-->
                            <li>
                                <a href="event.php"><i class="fa fa-flag"></i>Events<span class="fa fa-chevron-right"></span></a>
                            </li>

                            <li>
                                <a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-right"></span></a>
                            </li>

                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="../index.php">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                   <!--<div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>-->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <!--top nav signout-->
                            <a class="user-profile" data-toggle="tooltip" data-placement="bottom" title="Logout" href="logout.php" >
                                <span class=" fa fa-sign-out navbar_icon" style="font-size: 20px;"></span>
                            </a>
                            <!--<ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li><a href="javascript:;"><span class="badge bg-red pull-right">50%</span><span>Settings</span></a></li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>-->
                        </li>

                        <!--Notifications-->
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" data-placement="bottom" title="Notifications" aria-expanded="false">
                                <i class="fa fa-bell-o navbar_icon" ;"></i>
                                <span class="badge bg-red">12</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                                            <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                        </span>
                                        <span class="message">Film festivals used to be do-or-die moments for movie makers. They were where...</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--Messeages-->
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown tooltip" title="Messages" aria-expanded="false">
                                <i class="fa fa-envelope-o navbar_icon" ;"></i>
                                <span class="badge bg-red">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class= "right_col" role="main">
            <div class="">


                <div class="clearfix"></div>

                <div class="row">
