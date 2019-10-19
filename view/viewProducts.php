<?php

 include_once ('../backend/Product.php');
 include_once ('../backend/Package.php');
 include_once('../backend/ProductCategory.php');



 $product = new Product();
 $allProduct=$product->get_all_product();


include_once('header.php');
?>
<!-- page content -->
<div style="min-height: 3768px;">
    <div class="x_panel">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Category</h3>
            </div>
            <div style="text-align: right">
                <input type="button" value="Add Category" class="btn btn-primary" data-toggle="modal" data-target="#modalAddType">
            </div>

        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

                <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Package</th>
                            <th>Added Date</th>
                            <th style=""></th>
                        </tr>
                        </thead>


                        <tbody>

                        <?php

                        foreach ($allProduct as $item)
                        {
                            echo"<tr role=\"row\" class=\"odd\">
                            <td class=\"sorting_1\">$item->serialNumber</td>
                            
                            <td>Available</td>
                            
                            <td>". $item->productPackage->packageName."</td>

                            <td>
                                <a href=\"#\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-folder\"></i> View </a>
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

    </div>

    <!-- /page content -->

</div>

<?php
include_once('footer.php')
?>
