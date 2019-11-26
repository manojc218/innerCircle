<?php
    include_once('header.php');
    include_once ("../backend/User.php");


    $uDetails=new User();
    $result=$uDetails->get_all_users();




?>



        <!-- page content -->
        <div style="min-height: 3768px;">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Memeber List</h3>
                    </div>
                </div>
            </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">

                                <!--panel toolbox-->
                                <!--<ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>-->
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <div class="row">


                                        <!--entries counter-->

                                        <!--<div class="col-sm-6"><div class="dataTables_length" id="datatable_length">
                                                <label>Show
                                                    <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries</label>
                                            </div>
                                        </div>-->
                                        <!--end entries counter-->


                                        <div class="col-sm-6" id="memberSearch">
                                            <div id="datatable_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-sm-12">

                                            <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Position</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Branch: activate to sort column ascending" style="width: 100px;">Branch</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73px;">Manager</th>
                                                    <!--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Start date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 106px;">Salary</th>-->
                                                </tr>
                                                </thead>


                                                <tbody>

                                                <?php



                                                foreach($result as $item){

                                                    echo"<tr role=\"row\" class=\"odd\">
                                                    <td class=\"sorting_1\">$item->firstName $item->lastName</td>
                                                    <td>$item->roleName</td>
                                                    <td>$item->branchName</td>
                                                    <td>$item->manager</td>
                                                    
                                                </tr>";


                                                }

                                                ?>
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled" id="datatable_previous">
                                                        <a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                                                    </li>
                                                    <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a>
                                                    </li>

                                                    <li class="paginate_button next" id="datatable_next">
                                                        <a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        <!-- /page content -->


    </div>
</div>
<?php
    include_once('footer.php');
?>