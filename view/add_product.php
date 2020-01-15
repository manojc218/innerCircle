<?php
include_once('../backend/ProductCategory.php');
include_once ('../backend/Package.php');
include_once ('../backend/Product.php');

$productCategory=new ProductCategory();
$allCategory =   $productCategory->get_all_categories();


if (isset($_POST['sNum'])){
    $newProduct= new Product();
    $newProduct->serialNumber=$_POST['sNum'];
    $newProduct->productCategory=$_POST['cName'];
    $addProduct=$newProduct->add_product2();
}
include_once('headerLoader.php');
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
                    <div class="x_title">
                        <h4>Add Products</h4>
                    </div>
                    <!--start add product form-->
                    <form class="form-horizontal form_label-left" method="POST">

                        <!--product type-->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 com-xs-12" for="productCategory">Select Category</label>
                            <!--start product type dropdown-->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control col-md-7 col-xs-12" name="" id="productCategory">
                                    <option value=''>Choose one</option>
                                    <?php
                                    foreach ($allCategory as $item){
                                        echo "<option value='$item->product_c_id'>$item->categoryName</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!--end product type dropdown-->
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Serial Number">Serial Number<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="serialNumber" name="serialNumber" class="form-control col-md-7 col-xs-12" required>
                            </div>
                        </div>


                        <div class="form-group" style="text-align: center">
                            <input type="button" value="Add" class="btn btn-primary" id="btnAddProduct" onclick="checkSameSerial()">
                            <button type="reset" class="btn btn-success">Reset</button>
                        </div>
                        <br>
                        <!--start table-->
                        <div class="row">
                            <div class="table-responsive">
                                <!--data input table-->
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <!--<th class="column-title">Product Id</th>-->
                                        <th class="column-title">Serial Number</th>
                                        <th class="column-title">Category </th>

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

                                <!--submit button-->
                                <div  style="text-align: right">
                                    <input type="submit" class="btn btn-primary" value="Add Products">
                                </div>
                            </div>
                        </div>
                        <!--end table-->

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once('footer.php');
?>
<script>
    function checkSameSerial(){
        serialNum=$('#serialNumber').val();
        $.get("AJAX.php?type=checkSameSerial",{serialNumber:serialNum},function (data) {
            result3=JSON.parse(data);
            if (result3 == 0)
                addProduct();
            else alert('This Product is already entered');
        });

    }
</script>
<script>
    function addProduct() {
        sn=$('#serialNumber').val();
        cn=$('#productCategory').val();

        $('#tbId').append("<tr>" +
            "<td><input  class='form-control' type='text' name='sNum[]' value='"+sn+"' readonly></td>" +
            "<td><input  class='form-control' type='text' name='cName[]' value='"+cn+"' readonly></td>" +
            "<td><a href='#' class='btn btn-danger btn-xs ' onclick='remove(this)'><i class='fa fa-trash-o'></i> Remove </a></td></tr>");

        $('#serialNumber').val(" ");
        /*remove an appended item*/
        function remove(btn) {
            $(btn).parent().parent().parent().remove();
        }
    }
</script>