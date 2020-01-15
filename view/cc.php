
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
    <!--data tablesor pdf-->
    <link href="../vendors/datatables/datatables.css" rel="stylesheet">
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
        <div class="col-md-3 left_col menu mCustomScrollBox _mCS_1 mCS-autoHide" style="overflow: visible;">

            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="dashboard.php" class="site_title"><img src="../docs/images/inner%20circle%20logo%20transparent_white_icon.png" style="width: 135px; height:100px;"> </a>
                </div>

                <div class="clearfix"></div>
                <br/>
                <!-- menu profile quick info -->
                <div class="profile clearfix" id="profileHeader" style="background:linear-gradient(#220008,#962731)">
                    <!--<div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>-->


                    <div class="profile_info"  style="text-align: center">
                        <span>Welcome,<br></span>
                        <a href='up_view.php?uId=201' style='color: #fff;font-size: 14px'>duminda</a>                    </div>
                </div>
                <!-- /menu profile quick info -->




                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu fixed">
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
                                    <li><a href="user_view.php">View User <span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="role.php">Job Titles <span class="fa fa-chevron-right"></span></a></li>

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
                            <!--products-->
                            <li>
                                <a><i class="fa fa-database"></i> Products <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="product_category.php">Product Categories<span class="fa fa-chevron-right"></span></a></li>
                                    <!--                                    <li><a href="packages.php">Packages<span class="fa fa-chevron-right"></span></a></li>
                                    -->                                    <li><a href="add_product.php">Add Products<span class="fa fa-chevron-right"></span></a></li>
                                    <li><a href="view_products.php">View Products<span class="fa fa-chevron-right"></span></a></li>
                                </ul>
                            </li>
                            <!--Stock-->
                            <li>
                                <a><i class="fa fa-pie-chart"></i>Stock<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="stock.php">Stocks<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="distribute.php">Distribute<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="view_distribution.php">Distribution List<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>

                            <!--Sales-->
                            <li>
                                <a><i class="fa fa-bar-chart-o"></i>Sales<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="add_sales.php">Add Sales<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="view_sales.php">View Sales<span class="fa fa-chevron-right"></span> </a></li>
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
                                <a><i class="fa fa-flag-checkered"></i>Events<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="event.php">Create Events<span class="fa fa-chevron-right"></span> </a></li>
                                    <li><a href="view_events.php">View Events<span class="fa fa-chevron-right"></span> </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu" >
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <!--top nav signout-->
                            <a class="user-profile" data-toggle="tooltip" data-placement="bottom" title="Logout" href="logout.php" >
                                <span class=" fa fa-sign-out navbar_icon" style="font-size: 20px;"></span>
                            </a>
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
                                        <!--<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>-->
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
                        <!--<li role="presentation" class="dropdown">
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
                                </li>-->
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
                <div class="row">
                    <div style="min-height: 3768px;">
                        <div class="">
                            <div class="page-title">
                                <div class="title_left">

                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h4>Sales</h4>
                                    </div>
                                    <div class="x_content">
                                        <!--date filter-->

                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="startDate">From </label>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <input type="date" class="form-control has-feedback-left" name="startDate" id="startDate">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="endDate">To </label>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <input type="date" class="form-control has-feedback-left" name="endDate" id="endDate">
                                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg" id="btnSearch" style="position: relative;left: 300px;">Search</button>
                                            </div>
                                        </form>
                                        <br>
                                        <!--start table-->
                                        <table class="table table-striped jambo_table" id="saleTable">
                                            <thead>
                                            <tr class="headings">
                                                <th class="column-title" style="display: table-cell;">Guy Name </th>
                                                <th class="column-title" style="display: table-cell;">Sale Date </th>
                                                <th class="column-title" style="display: table-cell;">Sim Cards </th>
                                                <th class="column-title" style="display: table-cell;">4G Routers </th>
                                                <th class="column-title" style="display: table-cell;">Dialog Tv </th>
                                                <th class="column-title" style="display: table-cell;">Total Points</th>
                                                <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7" style="display: none;">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>

                                                <td class=''>Rasika Kumara</td>
                                                <td class=''>2020-01-12</td>
                                                <td class=''>1 </i></td>
                                                <td class=''>0</td>
                                                <td class=''>1</td>
                                                <td class=''>10</td>
                                                <td class=''><a href=''>View</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--end table-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer content -->
        <footer class="">
            <div class="pull-left">
                Inner Circle (PVT) Ltd
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

</body>
</html>

<!-- jQuery -->
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap Colorpicker -->
<script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- jquery.inputmask -->
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<!-- jQuery Knob -->
<script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Cropper -->
<script src="../vendors/cropper/dist/cropper.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!--validation-->

<script>
    $('.numonly').bind('input paste', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $('.deconly').keydown(function(e){
        var key = e.charCode || e.keyCode || 0;
        // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
        // home, end, period, and numpad decimal
        return (
            key == 8 ||
            key == 9 ||
            key == 13 ||
            key == 46 ||
            key == 110 ||
            key == 190 ||
            (key >= 35 && key <= 40) ||
            (key >= 48 && key <= 57) ||
            (key >= 96 && key <= 105));
    });

    $('.deconly').change(function(){
        if( !this.value.match(/((^[0-9]*[.])?[0-9]+$)/g, '')){
            this.value="";
        }
    });

</script>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="../vendors/datatables/buttons.jqueryui.js"></script>

<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendors/datatables/buttons.bootstrap4.js"></script>
<script src="../vendors/datatables/buttons.bootstrap.js"></script>
<script src="../vendors/datatables/buttons.html5.js"></script>
<script src="../vendors/datatables/datatables.js"></script>
<script src="../vendors/datatables/buttons.print.js"></script>
<script src="../vendors/datatables/buttons.colVis.js"></script>
<!-- Datatables -->

<script>
    $(document).ready(function(){
        $('#saleTable').DataTable({
            dom:'Bfrtip',"pageLength":20,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                {
                    extend:'print',
                    exportOptions:{
                        column:':visible'
                    }
                },
                'colvis'
            ],
            "scrollY":"450px",
            "scrollCollapse": true,
            "paging":         false
        });
    });
</script>

