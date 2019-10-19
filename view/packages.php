<?php
include_once ('../backend/Package.php');
include_once('../backend/ProductCategory.php');

if(isset($_POST['packageName'])){
    $newPackage=new Package();
    $newPackage->packageName=$_POST['packageName'];
    $newPackage->packageDescription=$_POST['packageDescription'];

    $addPackage=$newPackage->add_package();

}
    /*get categories*/
    $productCategory=new ProductCategory();
    $allCategory=$productCategory->get_all_categories();

    /*get packages*/
    $package=new Package();
    $allPackage = $package->get_all_packages();





include_once('header.php');/*link to header*/

?>
<div class="col-md-12 col-sm-12 col-xm-12">
    <div class="x_panel">
        <div class="x_title">
            <h4>Packages</h4>

            <!--add button-->
            <div style="text-align: right">
                <input type="button" class="btn btn-primary" name="addPackage" value="Add Package" data-toggle="modal" data-target="#modalAddPackage">
            </div>

            <div class="clearfix"></div><!--separator-->
        </div>
        <div class="x_content">

            <!-- start project list -->
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 30%">Package Name</th>
                    <th>Status</th>
                    <th style="">Description</th>
                    <th>Added Date</th>
                    <th style="width: 20%;"></th>
                </tr>
                </thead>


                <tbody>

                <?php

                foreach ($allPackage as $item)
                {
                    echo"<tr role=\"row\" class=\"odd\">
                            <td class=\"sorting_1\">$item->packageName</td>                                                   
                            <td>Available</td>                            
                            <td >$item->packageDescription</td>  
                                                      
                            <td >$item->addedDate</td>
                            <td>
                                
                                <a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                                <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
                            </td>
                        </tr>";
                }
                ?>

                </tbody>
            </table>
            <!-- end project list -->
        </div>
    </div>
</div>




    <!--start table-->


<!--start addPackage Modal-->

<div class="modal fade" tabindex="-1" role="dialog" id="modalAddPackage">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--close button-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!--modal title-->
                <h5 class="modal-title">Add Package</h5>

            </div>
            <div class="modal-body">
                <form  class="form-horizontal form_label-left" action="packages.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Product_serial">Select Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12">

                                <?php
                                foreach ($allCategory as $item){

                                    echo "<option value='$item->product_t_id'>$item->categoryName</option>";
                                }
                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="package_name">Package Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="packageName" name="packageName" class="form-control col-md-7 col-xs-12" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="select_category">Select Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="packageDescription" name="packageDescription" class="form-control col-md-7 col-xs-12" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Add" class="btn btn-primary" id="btnAddPackage">
                        <button type="reset" class="btn btn-success">Reset</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--End addPackage Modal-->


<?php
include_once('footer.php');/*link to footer*/
?>
