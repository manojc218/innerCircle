<?php
    include_once ('../backend/Product.php');
    include_once ('../backend/Package.php');
    include_once('../backend/ProductCategory.php');
    include_once('../backend/User.php');



        /*get sim list*/
        $simList=new Product();
        $newSimList=$simList->get_sim();


        /*get router list*/
        $routerList=new Product();
        $newRouterList=$routerList->get_router();

        /*get DTv list*/
        $dtvList=new Product();
        $newDtvList=$dtvList->get_dtv();

        /*get username*/
        /*$nameList=new Product();
        $userId=$nameList->get_username_by_id($uId);*/

include_once ('header.php');
?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="page-title">
            <div class="title">
                <h3>Products</h3>
            </div>
        </div>

        <!--start product view filter section-->
        <div class="filterProductView col-md-12 col-sm-12 col-xs-12">
                        <!--filter form start-->
            <form class="form-horizontal form_label-left" method="post">

                <div class="row"><!--start filter first row class-->

                    <div class="col-md-4 col-sm-4 col-xs-12"><!--start branch-->
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="filterBranch">Branch</label>
                        <div class="col-md-10 col-sm-10 col-xs-12 ">
                            <select class="form-control" name="filterBranch"></select>
                        </div>
                    </div><!--end branch-->

                    <div class="col-md-4 col-sm-4 col-xs-12"><!--start serial number-->
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="filterSerialNumber">Serial Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12 ">
                            <select class="form-control" name="filterBranch"></select>
                        </div>
                    </div><!--end serial number-->


                    <div class="col-md-4 col-sm-4 col-xs-12" style="overflow: auto"><!--start date-->
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="filterDate">Date</label>
                        <div id="reportrange" class="pull-right col-md-10 col-sm-10 col-xs-10" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>July 31, 2019 - August 29, 2019</span> <b class="caret"></b>
                        </div>
                    </div><!--end date-->

                </div><!--end filter first row class end-->

                <br>

                <div class="row"><!--start filter second row-->
                    <div class="col-md-4 col-sm-4 col-xs-12"><!--start category-->
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="filterCategory">Cateogy</label>
                        <div class="col-md-10 col-sm-10 col-xs-12 ">
                            <select class="form-control" name="filterBranchCategory"></select>
                        </div>
                    </div><!--end category-->

                    <div class="col-md-4 col-sm-4 col-xs-12"><!--start package-->
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="filterPackage">Package</label>
                        <div class="col-md-10 col-sm-10 col-xs-12 ">
                            <select class="form-control" name="filterPackage"></select>
                        </div>
                    </div><!--end package-->

                    <div class="col-md-4 col-sm-4 col-xs-12"><!--start Filter button-->
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <input type="submit" class="btn btn-primary col-md-8" value="Filter" style="position: absolute; left:62px; padding: 5px;">
                        </div>
                    </div><!--end package-->
                </div><!--end filter second row-->
            </form>
            <!--end filter form-->

            <hr class="separator"><!--page spearator-->
        </div>

        <!--Start Product tables-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <!--SimCard Tab-->
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><strong>Sim Cards</strong></a>
                                </li>
                                <!--4gRouter Tab-->
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><strong>4G Routers</strong></a>
                                </li>
                                <!--Dtv Tab-->
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><strong>Dtv</strong></a>
                                </li>
                            </ul>

                            <!--View Sim cards-->
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <!--Start Sim Card view table-->
                                    <table class="table table-striped projects" id="productTable">
                                        <!--Start Table Head-->
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Serial Number</th>
                                                <th style="width: 20%;">Description</th>
                                                <th style="width: 20%;">Added Date</th>
                                                <th style=""></th>
                                            </tr>
                                        </thead>
                                        <!--End Table head-->


                                        <!--Start table body-->
                                        <tbody>

                                            <?php

                                                foreach ($newSimList as $item)
                                                    {
                                                         echo"<tr role=\"row\" class=\"odd\">
                                                                <td class=\"sorting_1\">$item->serialNumber</td> 
                                                                <td>$item->userName</td>
                                                                <td>$item->addedDate</td>
                                                                <td>
                                                                    <a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
                                                                  </td>
                                                              </tr>";
                                                     }
                                                ?>
                                        </tbody>
                                        <!--end table body-->
                                    </table>
                                    <!--End Sim card view table-->
                                </div>


                                <!--Start 4G Routers tab-->
                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                    <!--Start 4gRouters view table-->
                                    <table class="table table-striped projects" id="productRouter">
                                        <thead>
                                        <tr>
                                            <th style="width: 20%;">Serial Number</th>
                                            <th style="width: 20%;">Description</th>
                                            <th style="width: 20%;">Added Date</th>
                                            <th style=""></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php

                                        foreach ($newRouterList as $item)
                                        {
                                            echo"<tr role=\"row\" class=\"odd\">
                                                            <td class=\"sorting_1\">$item->serialNumber</td>
                                                            <td>$item->userName</td>
                                                            <td> $item->addedDate</td>
                                                            <td>
                                                                <a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                                                                <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
                                                            </td>
                                                        </tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>

                                <!--View Dtv table-->
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                    <!--Start Dtv view table-->
                                    <table class="table table-striped projects" id="productDtv">
                                        <thead>
                                        <tr>
                                            <th style="width: 20%;">Serial Number</th>
                                            <th style="width: 20%;">Description</th>
                                            <th style="width: 20%;">Added Date</th>
                                            <th style=""></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php

                                        foreach ($newDtvList as $item)
                                            {
                                                echo"<tr role=\"row\" class=\"odd\">
                                                                <td class=\"sorting_1\">$item->serialNumber</td>
                                                                <td>$item->userName</td>
                                                                <td>$item->addedDate</td>
                                                                <td>
                                                                    <a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                                                                    <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
                                                                </td>
                                                            </tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!--End Dtv view-->
                        </div>
                    </div>
            </div>
        </div>
    <!--End product tables-->
    </div>
</div>

<?php
    include_once ('footer.php');
?>


<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>


<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>

<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#productTable').DataTable({
            dom:'Bfrtip',"pageLength":50,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });

    $(document).ready(function(){
        $('#productRouter').DataTable({
            dom:'Bfrtip',"pageLength":50,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });

    $(document).ready(function(){
        $('#productDtv').DataTable({
            dom:'Bfrtip',"pageLength":50,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>