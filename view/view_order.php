<?php
include_once ('header.php');
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_titile">
            <h4>Purchased Orders</h4>
            <div style="text-align: right">
                <button class="btn btn-primary btn-dark"><a href="order.php" style="color: #fff;">Place Order</a></button>
            </div>
            <hr class="separator">
        </div>
        <div class="x_content">
            <!--GRN Table-->
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                <div class="row">
                    <div class="col-sm-12">
                        <!--start stock table-->
                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 75px;">Reference No</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Order Date</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Total (Rs.)</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 85px;">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 185px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr role="row" class="even">
                                <td class="sorting_1">6658</td>
                                <td>10/06/2015</td>
                                <td>4000</td>
                                <td>Completed</td>
                                <td>
                                    <button class="btn btn-primary"><span class="fa fa-eye"></span></button>
                                    <button class="btn btn-success"><span class="fa fa-edit"></span></button>
                                    <button class="btn btn-dark"><span class="fa fa-print"></span></button>
                                    <button class="btn btn-danger"><span class="fa fa-remove"></span></button>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">2458</td>
                                <td>01/01/2019</td>
                                <td>6000</td>
                                <td>Pending</td>
                                <td>
                                    <button class="btn btn-primary" id="view"><span class="fa fa-eye"></span></button>
                                    <button class="btn btn-success" id="edit"><span class="fa fa-edit"></span></button>
                                    <button class="btn btn-dark" id="print"><span class="fa fa-print"></span></button>
                                    <button class="btn btn-danger" id="delete"><span class="fa fa-remove"></span></button>
                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!--end grn table-->
        </div>
    </div>
</div>

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
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

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
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
