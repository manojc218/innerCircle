<?php
    include_once('headerLoader.php');
    include_once ('../backend/Branch.php');
    include_once ('../backend/Sale.php');
    include_once ('../backend/User.php');

    $branchCount=new Branch();
    $newBranchCount=$branchCount->count_branch();

    $productCount=new Sale();
    $soldSimCount=$productCount->get_sum_of_sold_sims();
    $soldRouterCount=$productCount->get_sum_of_sold_router();
    $soldDtvCount=$productCount->get_sum_of_sold_dtv();

    $userCount=new User();
    $getUserCount=$userCount->count_users();
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <!--start x_panel-->
                <div class="x_panel">

                    <!--start page content-->
                    <div class="x_content">
                        <!--start data counts titles-->
                        <div class="row tile_count">
                            <!--count for total employees-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Employees</span>
                                <div class="count"><?php echo $getUserCount ?></div>
                            </div>
                            <!--count for total branches-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i> Total Branches</span>
                                <div class="count"><?php echo $newBranchCount ?></div>
                            </div>
                            <!--count for total sold sims-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Sold Sims</span>
                                <div class="count "><?php echo $soldSimCount ?></div>
                            </div>
                            <!--count for total sold routers-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Sold Routers</span>
                                <div class="count"><?php echo $soldRouterCount?></div>
                            </div>
                            <!--count for total sold Dtv-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Sold Dtv</span>
                                <div class="count"><?php echo $soldDtvCount?></div>
                            </div>
                            <!--count for total events-->
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i> Total Events</span>
                                <div class="count">7,325</div>
                            </div>
                        </div>
                        <!--end data counts titles-->
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <!--start monthly sales chart-->
                            <div class="dashboard_graph">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Monthly Sales</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span>December 12, 2019 - January 10, 2020</span> <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="demo-container" style="height:250px">
                                        <div id="chart_plot_03" class="demo-placeholder" style="padding: 0px; position: relative;">
                                            <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 910px; height: 280px;" width="1137" height="350"></canvas>
                                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                                <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 15px; text-align: center;">0</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 126px; text-align: center;">2</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 236px; text-align: center;">4</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 347px; text-align: center;">6</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 457px; text-align: center;">8</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 565px; text-align: center;">10</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 675px; text-align: center;">12</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 786px; text-align: center;">14</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 126px; top: 264px; left: 896px; text-align: center;">16</div>
                                                </div>
                                                <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 252px; left: 7px; text-align: right;">0</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 220px; left: 7px; text-align: right;">5</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 189px; left: 1px; text-align: right;">10</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 157px; left: 1px; text-align: right;">15</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 126px; left: 1px; text-align: right;">20</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 95px; left: 1px; text-align: right;">25</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 63px; left: 1px; text-align: right;">30</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 32px; left: 1px; text-align: right;">35</div>
                                                    <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">40</div>
                                                </div>
                                            </div>
                                            <canvas class="flot-overlay" width="1137" height="350" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 910px; height: 280px;"></canvas>
                                            <div class="legend">
                                                <div style="position: absolute; width: 78px; height: 15px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
                                                <table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454">
                                                    <tbody>
                                                    <tr>
                                                        <td class="legendColorBox">
                                                            <div style="border:1px solid #ccc;padding:1px">
                                                                <div style="width:4px;height:0;border:5px solid rgb(38,185,154);overflow:hidden"></div>
                                                            </div>
                                                        </td>
                                                        <td class="legendLabel">Sim Cards</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end of user-activity-graph -->
                        </div>

                    </div>

                </div>
                <!--end page content-->
            </div>

        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
    include_once('footer.php');
?>

<script>

</script>
