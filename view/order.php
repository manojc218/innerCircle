<?php
include_once ('../backend/Connection.php');
include_once ('header3.php');
include_once ('../backend/ProductCategory.php');
include_once('../backend/PurchaseOrder.php');
include_once ('../backend/Notification.php');
include_once ('../backend/User.php');

/*get category name*/
$productCategory=new ProductCategory();
$allCategory =   $productCategory->get_all_categories();

if (isset($_POST['catName'])){

    $newOrder=new purchaseOrder();
    $newOrder->orderRef=$_POST['orderRefNo'];
    $newOrder->orderQty=$_POST['qtyArr'];
    $newOrder->orderDescription=$_POST['desArr'];
    $newOrder->orderCategory=$_POST['cNameIdArr'];
    $newOrder->orderDate=$_POST['orderDate'];

    /*call to add_purchase_order function*/
    $addOrder=$newOrder->add_purchase_order();

    $user=new User();
    $setUser=$user->get_users_by_role(4);//send to administrator

    /*call to add notification function*/
    $notification=new Notification();

    foreach ($setUser as $item){
        $notification->notificationText="New order has been placed";
        $notification->receiver=$item->userId;
        $sendNotification=$notification->addNotification();
    }



    $setUser=$user->get_users_by_role(9);//send to Executive secretary

    $detailArray=0;
    foreach ($setUser as $item){
        $notification->notificationText="New order has been placed";
        $notification->receiver=$item->userId;
        $sendNotification=$notification->addNotification();
    }


    $setUser=$user->get_users_by_role(10);//send to accountant


    foreach ($setUser as $item){
        $notification->notificationText="New order has been placed";
        $notification->receiver=$item->userId;
        $sendNotification=$notification->addNotification();
    }
}
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
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
                                            <select class="form-control" name="catName" id="catName" required>
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
                                        <div class="col-md-4 col-sm-4" >
                                            <input type="text" name="qty" id="qty" class="form-control" >
                                        </div>
                                    </div>
                                    <!--submit button-->
                                    <div class="form-group" style="text-align: right">
                                        <input type="button" value="Add" class="btn btn-primary btn-lg" onclick="addTo()" required>
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

                                            <th hidden class="column-title">CategoryId</th>
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
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once ('footer.php');
?>
<script>
    function addTo(){
        cNameId=$('#catName option:selected').val();
        c_Name=$('#catName option:selected').text();
        qty=$('#qty').val();
        des=$('#desc').val()

        $('#tblOrder').append(
            "<tr>" +
            "<td hidden><input type='text' class='form-control' name='cNameIdArr[]' value='"+cNameId+"' readonly></td>"+
            "<td><input type='text' class='form-control' name='cNameArr[]' value='"+c_Name+"' readonly></td>" +
            "<td><input type='text' class='form-control' name='qtyArr[]' value='"+qty+"' readonly></td>" +
            "<td><input type='text' class='form-control' name='desArr[]' value='"+des+"' readonly></td>" +
            "<td><input type='button' class='btn btn-danger btn-xs' id='btnRemove' value='Remove' onclick='remove(this)'></td>" +
            "</tr>");

        $('#cName').val("");
        $('#qty').val("");
        $('#desc').val("");
        $('#cName').focus();
    }
    function remove(btn) {
        $(btn).parent().parent().parent().remove();
    }
</script>