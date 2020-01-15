<?php
    include_once ('header3.php');

    /*link purchase order class*/
    include_once ('../backend/PurchaseOrder.php');

    $rn=$_GET['rn'];


    $order=new PurchaseOrder();
    $orderDetails=$order->get_order_details($rn);

    if(isset($_POST['ref'])){
        $sendRef=new PurchaseOrder();
        $sendRef->orderRef=$_POST['ref'];

        $sendApprove=$sendRef->update_approve();
    }
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <!--start content-->
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!--<h4>Orders</h4>-->
                        <div style="text-align: right">
                            <a href="view_order.php" style="color: #000;"><button class="btn btn-warning">Back</button></a>
                        </div>

                    </div>
                    <div class="x_content">

                        <section class="content invoice" id="orderInvoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12 invoice-header">
                                    <h1>
                                        <i class="fa fa-globe"></i> Order Invoice
                                        <small class="pull-right">Order Date : <?php echo $orderDetails[0]->orderDate ?></small>
                                    </h1>
                                    <hr class='separator'>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <u>From</u><br><br>
                                    <address style="font-size: 14px;">
                                        <strong>Inner Circle (PVT) Ltd.</strong>
                                        <br>Main Street
                                        <br>Kandy
                                        <br>Phone: 1 (804) 123-9876
                                        <br>Email: admin@innercircle.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <u>To</u><br><br>
                                    <address style="font-size: 14px">
                                        <strong>Manager</strong>
                                        <br>Dialog Axiata
                                        <br>Kandy
                                        <br>Phone: 1 (804) 123-9876
                                        <br>Email: jon@ironadmin.com
                                    </address>
                                </div>
                                <!-- /.col --><br><br>
                                <div class="col-sm-4 invoice-col">
                                    <b>Reference No :</b> <p style="color: #000000;font-size: 15px;"><?php echo $orderDetails[0]->orderRef?></p>
                                    <form method="POST" action="#">
                                        <input type="text" name="ref" value="<?php echo $orderDetails[0]->orderRef?>" hidden >
                                        <?php
                                        if(isset($_SESSION['userRole']) && $_SESSION['userRole']==4){
                                            echo "<input type='submit' value='Approve' class='btn btn-danger btn-lg' id='approve'>";
                                        }
                                        ?>
                                    </form>

                                    <br>
                                    <!--<b>Order Status:</b><p style="font-size: 15px;color: #0000e4;"><?php /*echo " ".$orderDetails[0]->orderStatus*/?></p>-->
                                    <!--<br>
                                    <b>Payment Due:</b> 2/22/2014
                                    <br>
                                    <b>Account:</b> 968-34567-->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row --><hr class="separator">

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr style="background-color: #2A3F54;color: #fff;font-size: 15px">
                                            <th>Category</th>
                                            <th>Qty</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($orderDetails as $item){
                                            echo "<tr style='font-size: 15px'>
                                    <td>$item->orderCategoryName </td>
                                    <td>$item->orderQty</td>
                                    <td>$item->orderDescription</td>                              
                                </tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                        </section>



                    </div>
                </div>
            </div>
            <!--end content-->
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<?php
    include_once ('footer.php')
?>

<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>

<!--<script>
    $(document).ready(function(){
        $('#table_id').DataTable({
            dom:'Bfrtip',"pageLength":50,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>-->

