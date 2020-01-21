<?php
include_once ('header3.php');
include_once ('../backend/GRN.php');

$getAcptOrder= new GRN();
$acptOrderDetail=$getAcptOrder->get_accepted_order();
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Add GRN</h4>
                    </div>
                    <div class="x_content">
                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <!--start stock table-->
                                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 75px;">Reference No</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Order Date</th>
                                            <!--                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Total (Rs.)</th>
                                            -->                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 85px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 185px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        if(!empty($acptOrderDetail)){
                                            foreach ($acptOrderDetail as $item){
                                                echo "<tr role=\"row\" class=\"even\">
                                            <td class=\"sorting_1\">$item->orderRef</td>
                                            <td>$item->orderDate</td>
                                            <td>$item->orderStatus</td>
                                            <td>
                                                <a href='set_grn.php?rn=$item->orderRef'><button class=\"btn btn-info\"'><span class=\"fa fa-plus\"></span></button></a>
                                            </td>
                                        </tr>";
                                            }
                                        }else{
                                            echo "<div class='alert alert-info' role='alert'>
                                                <p><h4 style='color: #fff;text-align: center'>Records are not found</h4></p>
                                          </div>";

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
include_once ('footer.php');
?>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->

<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>

<!-- Datatables -->
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
