
<?php
    include_once('../backend/ProductCategory.php');
    include_once ('../backend/Package.php');
    include_once ('../backend/Product.php');
    $productCategory=new ProductCategory();
    $allCategory =   $productCategory->get_all_categories();
    $package=new Package();
    $allPackage= $package->get_all_packages();
    $product= new Product();
    if (isset($_POST['serialNumber'])){
        $newProduct= new Product();
        $newProduct->serialNumber=$_POST['serialNumber'];
        $newProduct->productCategory=$_POST['productCategory'];
        $newProduct->productPackage=$_POST['productPackage'];
        $newProduct->productDescription=$_POST['productDescription']='Head Office';
        $addProduct=$newProduct->add_product2();
    }
include_once('header.php');
?>
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
                            <select class="form-control col-md-7 col-xs-12" name="productCategory">
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
                        <label class="control-label col-md-3 col-sm-3 com-xs-12" for="selectPackage">Select Package</label>
                        <!--start product type dropdown-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="productPackage">
                                <?php
                                    foreach($allPackage as $item){
                                        echo"<option value='$item->packageId'>$item->packageName</option>";
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


                    <div class="form-group">
                        <input type="submit" value="Add" class="btn btn-primary" id="btnAddPackage">
                        <button type="reset" class="btn btn-success">Reset</button>
                    </div>

                </form>

                </div>
            </div>



<?php
    include_once('footer.php');
?>
