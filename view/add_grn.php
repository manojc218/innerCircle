<?php
 include_once ('header.php');
 include_once ('../backend/GRN.php');

 $getAcptOrder= new GRN();
 $acptOrderDetail=$getAcptOrder->add_accepted_order();
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Add GRN</h4>
            </div>
            <div class="x_content">
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <!--start stock table-->
                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 75px;">Reference No</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Order Date</th>
                                    <!--                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Total (Rs.)</th>
                                    -->                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 85px;">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 185px;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($acptOrderDetail as $item){
                                    echo "
                                        <tr role=\"row\" class=\"even\">
                                            <td class=\"sorting_1\">$item->orderRef</td>
                                            <td>$item->orderDate</td>
                                            <td>$item->orderStatus</td>
                                            <td>
                                                <a href='view_orderDetails.php?rn=$item->orderRef'><button class=\"btn btn-info\"'><span class=\"fa fa-plus\"></span></button></a>
                                            </td>
                                        </tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
    include_once ('footer.php');
?>
