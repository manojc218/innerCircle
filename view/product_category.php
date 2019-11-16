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


include_once('header.php');/*link to header*/
?>
<div class="col-md-12 col-ms-12 col-xs-12">
<!-- page content -->
    <div>
        <div class="x_panel">

                <div class="x_title">
                    <h3>Product Category</h3>

                    <div style="text-align: right">
                        <input type="button" value="Add Category" class="btn btn-primary" data-toggle="modal" data-target="#modalAddType">
                        <input type="button" value="Add Points" class="btn btn-primary" data-toggle="modal" data-target="#modalAddPoints">
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
                            <th>Added Date</th>
                            <th style="width: 20%"></th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php

                            foreach ($allCategory as $item)
                            {
                                echo"<tr role=\"row\" class=\"odd\">
                                        <td class=\"sorting_1\">$item->categoryName</td><!--Category Name-->
                                        
                                        <td>Available</td><!--Status-->
                                        
                                        <td>Null</td><!--Description-->
                                        
                                        <td> </td><!--added date-->
            
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
                <form action="product_category.php" method="POST">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Product_category">Category Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="category_name" name="category_name" class="form-control col-md-7 col-xs-12" required>


                            <input type="submit" class="btn btn-primary" value="Add" id="modalAddButton">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--End add category modal-->

<!--start add points modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddPoints">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--close button-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!--modal title-->
                <h5 class="modal-title">Add Points</h5>

            </div>
            <div class="modal-body">
                <form class="form-horizontal form_label-left" action="product_category.php" method="POST">
                    <!--Category Name-->
                    <di3..v class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Product_category">Category Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12">
                                <option>Category</option>
                            </select>
                        </div>
                    </di3..v>
                    <!--Points-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="point_value">Point Value<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="point_value" name="point_value" class="form-control col-md-7 col-xs-12" required>
                        </div>
                        <!--add button-->
                    </div>
                    <div class="form-group"  style="position: relative;left:450px;">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="submit" class="btn btn-primary" value="Add" id="modalAddButton">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!--End add category modal-->

<?php
    include_once('footer.php');/*link to footer*/
?>
