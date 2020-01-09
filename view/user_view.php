<?php
    include_once('header.php');
    include_once ("../backend/User.php");


    $getDetails=new User();
    $userDetails=$getDetails->get_all_users();

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
                            <div class="x_content">

                                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-sm-12">

                                            <table id="userTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Position</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="WorkingId: activate to sort column ascending" style="width: 100px;">Working ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Branch: activate to sort column ascending" style="width: 100px;">Branch</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 73px;">Manager</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 73px;">Actions</th>
                                                    <!--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 135px;">Start date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 106px;">Salary</th>-->
                                                </tr>
                                                </thead>


                                                <tbody>

                                                <?php



                                                foreach($userDetails as $item){

                                                    echo"<tr role=\"row\" class=\"odd\">
                                                    <td class=\"sorting_1\"><a href='user_profile.php'>$item->firstName $item->lastName</a></td>
                                                    <td>$item->roleName</td>
                                                    <td>$item->workingId</td>
                                                    <td>$item->branchName</td>                                                    
                                                    <td>$item->manager</td>
                                                    <td><input type='button' class='btn btn-primary'></span> </td>
                                                    
                                                </tr>";


                                                }

                                                ?>
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!--<div class="row">
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
                                    </div>-->
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

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>


<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>

<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#userTable').DataTable({
            dom:'Bfrtip',"pageLength":20,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "scrollY":"400px",
            "scrollCollapse": true,
            "paging":         false
        });
    });
</script>


