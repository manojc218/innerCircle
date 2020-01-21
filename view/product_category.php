<?php

include_once('../backend/ProductCategory.php');/*link to ProductCategory class*/

if(isset($_POST['category_name'])){
    $newCategory=new ProductCategory();
    $newCategory->categoryName=$_POST['category_name'];

    $result2=$newCategory->add_category();

}
/*get all from the product category table*/
$productCategory= new ProductCategory();
$allCategory=$productCategory->get_all_categories();

/*add data to the table*/


include_once('header3.php');/*link to header*/
?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">

            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-ms-12 col-xs-12">
                    <!-- page content -->
                    <div>
                        <div class="x_panel">

                            <div class="x_title">
                                <h3>Product Category</h3>

                                <div style="text-align: right">
                                    <input type="button" value="Add Category" class="btn btn-primary" data-toggle="modal" data-target="#modalAddType">
                                </div>
                                <div class="clearfix"></div><!--separator-->
                            </div>


                            <div class="x_content">
                                <!-- start project list -->
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Points</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>

                                    <?php

                                    foreach ($allCategory as $item)
                                    {
                                        echo"<tr role=\"row\" class=\"odd\">
                                        <td class=\"sorting_1\">$item->categoryName</td><!--Category Name-->
                                        
                                        <td>$item->status</td><!--Status-->
                                        
                                        <td>$item->categoryDescription</td><!--Description-->
                                        
                                        <td>$item->points</td><!--points-->
            
                                        <td>
                                            <a href=\"view_products.php\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-folder\"></i> View </a>
                                            <a href=\"#\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i> Edit </a>
                                            <a href=\"#\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i> Delete </a>
                                        </td> <!--operation buttons-->
                                    </tr>";
                                    }
                                    ?>

                                    </tbody>
                                </table>
                                <!-- end project list -->
                            </div>
                            <!-- /page content -->
                        </div>
                    </div>
                </div>


                <!--start add category modal-->
                <div class="modal fade" tabindex="-1" role="dialog" id="modalAddType">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--close button-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!--modal title-->
                                <h5 class="modal-title">Add Product Category</h5>

                            </div>
                            <div class="modal-body">
                                <form action="product_category.php" method="POST" class="form-horizontal">
                                    <!--category Name-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Product_category">Category Name<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="category_name" name="category_name" class="form-control " required>
                                        </div>
                                    </div>
                                    <!--category description-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text"  id="description" name="description" class="form-control "></textarea>
                                        </div>
                                    </div>
                                    <!--category points-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Points">Points<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="points" name="points" class="form-control " required>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Add" id="modalAddButton">
                                    </div>



                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End add category modal-->

            </div>
        </div>
    </div>
    <!-- /page content -->
    <!-- footer content -->
<?php
include_once ('footer.php');
?>