<?php
    include_once ('header.php');
    include_once ('../backend/PurchaseOrder.php');

    $rn=$_GET['rn'];


    $catName=new PurchaseOrder();
    $orderDetails=$catName->get_category_details($rn);
?>
<!--start content-->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add GRN</h2>
            </div>
            <div class="x_content">
                <form action="#" method="POST" class="form-horizontal form-label-left">
                    <div class="row">
                        <!--left col-->
                        <div class="col-md-6">
                            <!--ref number-->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ReferenceNo">Reference No</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" name="grnRefNo" id="grnRefNo" readonly>
                                </div>
                            </div>


                            <!---->
                        </div>
                        <!--right col-->
                        <div class="col-md-6">
                            <!--order date-->
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="orderDate">Order Date </label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" name="orderDate" id="orderDate" readonly>
                                </div>
                            </div>

                            <!--Received data-->
                            <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="receivedDate">Received Date </label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" name="receivedDate" id="receivedDate" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="table-responsive" style="margin-top: 75px;">

                            <!--data input table-->
                            <table class="table table-striped jambo_table bulk_action" id="tblOrder">

                                <thead>
                                <tr class="headings">

                                    <th hidden class="column-title">CategoryId</th>
                                    <th class="column-title">Category</th>
                                    <th class="column-title">Description</th>
                                    <th class="column-title">Qty </th>
                                    <th class="column-title">Unit Price (Rs) </th>
                                    <th class="column-title">Total (Rs)</th>
                                </tr>
                                </thead>

                                <tbody id="tbId">
                                <tr>
                                    <td>Sim Card</td>
                                    <td>Description</td>
                                    <td>1000</td>
                                    <td class="col-md-3 col-sm-3 col-xs-6"><input type="text" name="unitPrice" id="unitPrice" class="form-control "></td>
                                    <td class="col-md-3 col-sm-3 col-xs-6"><input type="text" name="total" id="total" class="form-control" readonly> </td>

                                </tr>

                                </tbody>


                            </table>

                            <hr class="separator">
                            <div class="form-group" style="text-align: right">
                                <input type="submit" value="Received" class="btn btn-success btn-lg">
                                <input type="button" value="Reset" class="btn btn-danger btn-lg" onclick="window.location.reload()">
                            </div>



                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--end content-->
<?php
    include_once ('footer.php');
?>
