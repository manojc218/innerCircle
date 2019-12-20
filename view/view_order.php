<?php
include_once ('header.php');
include_once ('../backend/PurchaseOrder.php');

/*$rn=$_GET['rn'];*/

$orderInfo = new PurchaseOrder();
$order=$orderInfo->get_order();

/*$deleteInfo=new PurchaseOrder();
$deleteDetail=$deleteInfo->delete_order_details($rn);*/



?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_titile">
            <h4>Purchased Orders</h4>
            <!--back button-->
            <div style="text-align: right">
                <a href="order.php" style="color: #fff;"><button class="btn btn-primary btn-dark">Place Order</button></a>
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
<!--                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Total (Rs.)</th>
-->                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 85px;">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 185px;">Action</th>
                           </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($order as $item){
                                echo "<tr role=\"row\" class=\"even\">
                                <td class=\"sorting_1\">$item->orderRef</td>
                                <td>$item->orderDate</td>
                                <td>$item->orderStatus</td>
<!--
                                <td>Completed</td>
-->
                                <td>
                                <a href='order_invoice.php?rn=$item->orderRef'><button class=\"btn btn-primary\"'><span class=\"fa fa-eye\"></span></button></a>
                                    <button class=\"btn btn-success\"><span class=\"fa fa-edit\"></span></button>
                                    <button class=\"btn btn-dark\"><span class=\"fa fa-print\"></span></button>
                                   <button class=\"btn btn-danger\" id='btnDelete'><span class=\"fa fa-remove\"></span></button>
                                </td>
                            </tr>";
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <!--end grn table-->
        </div>
    </div>
</div>


<?php
include_once ('footer.php');
?>

<script>
    $.('#btnDelete').on("click",deletebutton);
    
    function deletebutton() {
            $(this).parent("tr").remove();
    }
</script>




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
