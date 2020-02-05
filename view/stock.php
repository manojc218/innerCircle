<?php
session_start();

if(isset($_SESSION['userRole']) && $_SESSION['userRole']==4){

}else{
    header('location:dashboard.php');
}
include_once('header3.php');



include_once ('../backend/Stock.php');
include_once ('../backend/Product.php');
include_once ('../backend/User.php');

/*get branch name*/
$getStock= new Stock();
$getAllStock=$getStock->get_stock();
$getMainSimStock=$getStock->get_main_sim_stock();
$getMainRouterCount=$getStock->get_main_router_stock();
$getMainDtvPreCount=$getStock->get_main_dtv_pre_count();
$getMainDtvPostCount=$getStock->get_main_dtv_post_count();

?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h1>Stocks</h1>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div style="background-color:#f7f7f7 ">

                                <div class="row tile_count" style="margin: 15px">
                                    <h4 style="text-decoration: underline ">Main Stock</h4>
                                    <!--count for HO sims-->
                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                        <span class="count_top" style="color: #122b40;font-style: italic"><i class="fa fa-info-circle"></i> SIM CARDS</span>
                                        <div class="count"><?php echo $getMainSimStock ?></div>
                                    </div>
                                    <!--count for HO sims-->
                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                        <span class="count_top" style="color: #122b40;font-style: italic"><i class="fa fa-info-circle"></i> ROUTERS</span>
                                        <div class="count"><?php echo $getMainRouterCount ?></div>
                                    </div>
                                    <!--count for HO sims-->
                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                        <span class="count_top" style="color: #122b40;font-style: italic"><i class="fa fa-info-circle"></i> DTv (Pre Paid)</span>
                                        <div class="count"><?php echo $getMainDtvPreCount ?></div>
                                    </div>
                                    <!--count for HO sims-->
                                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                        <span class="count_top" style="color: #122b40;font-style: italic"><i class="fa fa-info-circle"></i> DTv (Post Paid)</span>
                                        <div class="count"><?php echo $getMainDtvPostCount ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <!--start stock table-->
                                    <table id="stockTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 182px;">Manager Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 299px;">SIM Cards</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">4G Routers</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73px;">DTv</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($getAllStock as $item){
                                            echo"<tr role=\"row\" class=\"even\">
                                            <td class=\"sorting_1\">$item->managerName</td>                                            
                                            <td>$item->SIMS</td>
                                            <td>$item->ROUTER</td>
                                            <td>$item->DTV</td>";
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once('footer.php');
?>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>

<!-- FastClick -->


<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#stockTable').DataTable({
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
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>