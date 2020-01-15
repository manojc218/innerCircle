<?php
include_once ('header3.php');
include_once ('../backend/PurchaseOrder.php');

$orderInfo = new PurchaseOrder();
$order=$orderInfo->get_order();


if(isset($_GET['rn'])){
    $rn=$_GET['rn'];
    $cancel=$orderInfo->deleteOrder($rn);
}
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
                                    <table id="viewOrder" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
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
                                        if(!empty($order)){
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
                                    <a href='view_order.php?rn=$item->orderRef'><button class=\"btn btn-danger\" id='btnDelete'><span class=\"fa fa-remove\" ></span></button></a>
                                </td>
                            </tr>";
                                            }
                                        }else{
                                            echo "<div class='alert alert-danger' role='alert'>
                                                <p><h4 style='color: #fff;text-align: center'>Records are not found</h4></p>
                                          </div>";
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
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once ('footer.php');
?>

<script>
    function remove(btn){
        $(btn).parent().parent().parent().remove();
    }
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
        $('#viewOrder').DataTable({
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