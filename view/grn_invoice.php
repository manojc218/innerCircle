<?php
include_once ('header3.php');
include_once ('../backend/GRN.php');
$orderRf=$_GET['grnRf'];
$grn=new GRN();
$getGrnDetails=$grn->get_grn_details($orderRf);
?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">

            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">

                        <div class="x_content">

                            <section class="content invoice">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-xs-12 invoice-header">
                                        <h1>
                                            <i class="fa fa-globe"></i> GRN Invoice
                                        </h1>
                                        <hr class="separator">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class=" invoice-col" style="font-size:15px">
                                        <div class="col-md-2">
                                            <b>Order Reference :</b><br>
                                            <b>Order Date      :</b><br>
                                            <b>Received Date   :</b>
                                        </div>

                                        <div class="col-md-2">
                                            <?php echo $getGrnDetails[0]->orderRef?>
                                            <br>
                                            <?php echo $getGrnDetails[0]->orderDate?>
                                            <br>
                                            <?php echo $getGrnDetails[0]->receivedDate?>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">


                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">

                                    </div>
                                    <!-- /.col -->
                                </div>
                                <br>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row" style="font-size: 15px">
                                    <div class="col-xs-12 table">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr style="color: #fff;background-color: #2A3F54 ">
                                                <th>Product</th>
                                                <th>Ordered Qty</th>
                                                <th>Received Qty</th>
                                                <th style="width:">Unit Price</th>
                                                <th>Sell Price</th>
                                                <th>Sub Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($getGrnDetails as $item){
                                                echo "<tr>
                                            <td>$item->orderCategoryName</td>
                                            <td>$item->orderQty</td>
                                            <td>$item->receivedQty</td>
                                            <td>$item->unitPrice</td>
                                            <td>$item->sellPrice</td>
                                            <td>$item->subTotal</td>
                                        </tr>";
                                            }
                                            echo "<tr style='color: #fff;background-color: #2A3F54 '>
                                        <td colspan='5' style='text-align: center;font-size: 20px'>Total</td>
                                        <td style='font-size: 16px'>$item->totCost</td>
                                      </tr>"
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
                                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                    </div>
                                </div>
                            </section>
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