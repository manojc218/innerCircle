<?php
include_once ('header3.php');
include_once ('../backend/GRN.php');

$grn=new GRN();
$grnInfo=$grn->getGRN();
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
                        <h4>Good Received Note</h4>
                        <div style="text-align: right">
                            <button class="btn btn-primary btn-dark"><a href="dashboard.php" style="color: #fff;">Pending Orders</a></button>
                        </div>
                        <hr class="separator">
                    </div>

                    <div class="x_content">
                        <!--GRN Table content-->
                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <!--start stock table-->
                                    <table id="grnDataTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 75px;">Reference No</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;"> Ordered Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Received Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 85px;">Total (Rs.)</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 120px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($grnInfo as $item){
                                            echo"<tr role=\"row\" class=\"even\">
                                            <td class=\"sorting_1\">$item->orderRef</td>
                                            <td>$item->orderDate</td>
                                            <td>$item->receivedDate</td>
                                            <td>$item->totCost</td>
                                            <td>
                                                <a href='grn_invoice.php?grnRf=$item->orderRef'><button class='btn btn-primary' id='view'><span class='fa fa-eye'></span></button></a>
                                               <!-- <button class=\"btn btn - dark\" id=\"print\"><span class=\"fa fa -print\"></span></button>
                                                <button class=\"btn btn - danger\" id=\"delete\"><span class=\"fa fa - remove\"></span></button>-->
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
<script src="../vendors/datatables/buttons.jqueryui.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendors/datatables/buttons.bootstrap4.js"></script>
<script src="../vendors/datatables/buttons.bootstrap.js"></script>
<script src="../vendors/datatables/buttons.html5.js"></script>

<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>
<script src="../vendors/datatables/buttons.print.js"></script>
<script src="../vendors/datatables/buttons.colVis.js"></script>



<!--data tables for pdf-->


<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#grnDataTable').DataTable({
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