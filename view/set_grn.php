<?php
    include_once ('header.php');
    include_once ('../backend/PurchaseOrder.php');

    $rn=$_GET['rn'];


    $catName=new PurchaseOrder();
    $grnDetails=$catName->get_category_details($rn);
?>
<!--start content-->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add GRN</h2>
            </div>
            <div class="x_content">
                <form action="add_grn.php" method="POST" class="form-horizontal form-label-left">
                    <div class="row">
                        <!--left col-->
                        <div class="col-md-6">
                            <!--ref number-->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ReferenceNo">Reference No</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" value="<?php echo $grnDetails[0]->orderRef ?>" name="grnRefNo" id="grnRefNo" readonly>
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
                                    <input type="text" class="form-control" value="<?php echo $grnDetails[0]->orderDate?>" name="orderDate" id="orderDate" readonly>
                                </div>
                            </div>

                            <!--Received data-->
                            <!--<div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label" for="receivedDate">Received Date </label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" name="receivedDate" id="receivedDate" readonly>
                                </div>
                            </div>-->
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
                                    <th class="column-title">Ordered Qty </th>
                                    <th class="column-title">Received Qty </th>
                                    <th class="column-title">Unit Price (Rs) </th>
                                    <th class="column-title">Subtotal (Rs)</th>
                                </tr>
                                </thead>

                                <tbody id="">
                                <?php
                                foreach ($grnDetails as $item){
                                    echo "<tr>
                                    <td><input type='text' value='$item->orderCategoryName' class='col-md-2 col-sm-2 col-xs-12 form-control' name='grnCatName' id='grnCatName' readonly></td>
                                    <td><input type='text' value='$item->orderDescription' class='col-md-2 col-sm-2 col-xs-12 form-control' name='grnDescription' id='grnDescription' readonly></td>
                                    <td><input type='text' value='$item->orderQty' class='col-md-2 col-sm-2 col-xs-12 form-control' name='grnOrderQty' id='grnOrderQty' readonly></td>
                                    <td class=\"col-md-2 col-sm-2 col-xs-6 \"><input type='text' name=\"receivedQty\" id=\"receivedQty\" class=\"form-control rQty \" onchange='calSubTot(this)'></td> 
                                    <td class=\"col-md-2 col-sm-2 col-xs-6 \"><input type=\"text\" name=\"unitPrice\" id=\"unitPrice\" class=\"form-control uPrice\" onchange='calSubTot(this)'></td> 
                                    <td class=\"col-md-2 col-sm-2 col-xs-6 \" readonly><input type=\"text\" value='0' name=\"subTotal\" id=\"subTotal\" class=\"form-control subTotal\" readonly ></td>

                                </tr>";
                                    }
                                ?>
                                <tr>
                                    <td colspan="5" class="col-md-2 col-sm-2 col-xs-2 " style="background-color: #2A3F54;color:#fff;font-size: 25px;text-align: center;">Total</td>
                                    <td class="col-md-2 col-sm-2 col-xs-2"  style="background-color: #2A3F54"><input type="text" class="form-control total" name="grnTotal" id="grnTotal" readonly></td>
                                </tr>

                            </table>

                            <hr class="separator">
                            <div class="form-group" style="text-align: right">
                                <a href="add_grn.php"><input type="button" value="Back" class="btn btn-dark btn-lg"></a>
                                <input type="submit" value="Received" class="btn btn-success btn-lg" onclick="href='../'">
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
<script>
    function calSubTot(x){
        val1=$(x).parent().parent().find(".rQty").val();
        val2=$(x).parent().parent().find(".uPrice").val();
        tot=val1*val2;
        $(x).parent().parent().find(".subTotal").val(tot);
        calTot();
    }

    function calTot() {
        var sum=0;
        $('.subTotal').each(function (index, element) {
            sum=sum+parseFloat($(element).val());
        });
        $(".total").val(sum);
    }

</script>
