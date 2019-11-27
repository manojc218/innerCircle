<?php
    include_once ('header.php');
    /*link purchase order class*/
    include_once ('../backend/PurchaseOrder.php');

    $rn=$_GET['rn'];


    $catName=new PurchaseOrder();
    $orderDetails=$catName->get_category_details($rn);


?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <!--<h4>Orders</h4>-->
            <div style="text-align: right">
                <a href="view_order.php" style="color: #000;"><button class="btn btn-warning">Back</button></a>
            </div>

        </div>
        <div class="x_content">

                <section class="content invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12 invoice-header">
                        <h1>
                            <i class="fa fa-globe"></i> Order Details
                            <small class="pull-right">Order Date : <?php echo $orderDetails[0]->orderDate ?></small>
                        </h1>
                        <hr class='separator'>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>Inner Circle (PVT) Ltd.</strong>
                            <br>Main Street
                            <br>Kandy
                            <br>Phone: 1 (804) 123-9876
                            <br>Email: admin@innercircle.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong>Manager</strong>
                            <br>Dialog Axiata
                            <br>Kandy
                            <br>Phone: 1 (804) 123-9876
                            <br>Email: jon@ironadmin.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Reference No : <?php echo $orderDetails[0]->orderRef?></b>
                        <!--<br>
                        <br>-->
                        <!--<b>Order ID:</b> 4F3S8J
                        <br>
                        <b>Payment Due:</b> 2/22/2014
                        <br>
                        <b>Account:</b> 968-34567-->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Description</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($orderDetails as $item){
                                echo "<tr>
                                <td>$item->orderCategory </td>
                                <td>$item->orderQty</td>
                                <td>$item->orderDescription</td>
                                <td>$64.50</td>
                            </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12">
                        <button class="btn btn-default" onclick="window.print();">
                        <i class="fa fa-print"></i> Print</button>
                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                    </div>
                </div>
            </section>



        </div>
    </div>

</div>

<?php
    include_once ('footer.php');
?>

