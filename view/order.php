<?php
    include_once ('../backend/Connection.php');
    include_once ('header.php');
    include_once ('../backend/ProductCategory.php');
    include_once ('../backend/purchaseOrder.php');

        /*get category name*/
    $productCategory=new ProductCategory();
    $allCategory =   $productCategory->get_all_categories();

    if (isset($_POST['catName'])){

        $newOrder=new purchaseOrder();
        $newOrder->orderRef=$_POST['orderRefNo'];
        $newOrder->orderQty=$_POST['qtyArr'];
        $newOrder->orderDescription=$_POST['desArr'];
        $newOrder->orderCategory=$_POST['catName'];
        $newOrder->orderDate=$_POST['orderDate'];

        $addOrder=$newOrder->add_purchase_order();
    }

?>
<div class="col-md-12 col-ms-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Purchase Orders</h4>
        </div>
        <div class="x_content">
            <!--start form-->
            <form   action="#" method="POST" class="form-horizontal form-label-left">

                <div class="row">
                    <!--left col-->
                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <!--purchase Date-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="orderDate">Order Date<span class="required">*</span></label>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control has-feedback-left" name="orderDate"  value="<?php echo date("Y-m-d")?>" readonly>
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <!--category-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Category</label>
                            <div class="col-sm-8 col-sm-8 col-xs-12">
                                <select class="form-control" name="catName" id="catName">
                                    <?php
                                        foreach ($allCategory as $item){
                                            echo "<option value='$item->product_c_id'>$item->categoryName</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!--description-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description</label>
                            <div class="col-md-8 col-sm-8 col-sx-12">
                                <textarea name="description" class="form-control" id="desc" ></textarea>
                            </div>
                        </div>


                    </div>

                    <!--right col-->
                    <div class="col-md-6 col-ms-6 col-xs-6">
                    <!--ref number-->
                    <div class="form-group">
                        <label class="cotrol-label col-md-3 col-sm-3 col-xs-12" for="refNo">Ref. No</label>
                        <div class="col-md-9 col-ms-9 col-xs-12">
                            <input type="text" name="orderRefNo" id="refNo" class="form-control" value="<?php echo substr(str_shuffle('0123456789'), 0, 6);?>" readonly>
                        </div>
                    </div>

                    <!--qty-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Qty</label>
                        <div class="col-md-4 col-sm-4">
                            <input type="text" name="qty" id="qty" class="form-control">
                        </div>
                    </div>
                    <!--submit button-->
                    <div class="form-group" style="text-align: right">
                        <input type="button" value="Add" class="btn btn-primary btn-lg" onclick="addTo()">
                    </div>
                </div>
                </div>


            <hr class="separator">


            <!--start input details table-->

            <div class="row">
                <div class="table-responsive" style="margin-top: 75px;">

                    <!--data input table-->
                    <table class="table table-striped jambo_table bulk_action" id="tblOrder">

                        <thead>
                        <tr class="headings">

                            <th class="column-title">Category</th>
                            <th class="column-title">Qty </th>
                            <th class="column-title">Description </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody id="tbId">

                        </tbody>


                    </table>

                    <hr class="separator">
                    <div class="form-group" style="text-align: right">
                        <input type="submit" value="Place Order" class="btn btn-success btn-lg">
                        <input type="button" value="Reset" class="btn btn-danger btn-lg" onclick="window.location.reload()">
                    </div>



                </div>
            </div>
            </form>
            <!--end form-->

        </div>
    </div>
</div>
<?php
    include_once ('footer.php');
?>

<script>
    function addTo(){
        cName=$('#catName option:selected').text();
        qty=$('#qty').val();
        des=$('#desc').val()

        $('#tblOrder').append("<tr>" +
            "<td><input type='text' class='form-control' name='cNameArr[]' value='"+cName+"' readonly></td>" +
            "<td><input type='text' class='form-control' name='qtyArr[]' value='"+qty+"' readonly></td>" +
            "<td><input type='text' class='form-control' name='desArr[]' value='"+des+"' readonly></td>" +
            "<td><a href=\"#\" class=\"btn btn-danger btn-xs\">" +
            "<i class=\"fa fa-trash-o\"></i> Delete </a></td></tr>");

        $('#cName').val("");
        $('#qty').val("");
        $('#desc').val("");
        $('#cName').focus();
    }
</script>

