<?php
include_once('header3.php');
include_once ("../backend/User.php");


$getDetails=new User();
$userDetails=$getDetails->get_all_users();

/*send filter dates*/
if(!empty($_POST['startDate']) && !empty($_POST['endDate'])){
    $sDate=$_POST['startDate'];
    $eDate=$_POST['endDate'];
}else{
    $sDate=date('Y-m-01');
    $sDate=date('Y-m-t');
}


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
                    <div class="x_content">
                        <!--date filter-->
                        <form class="form-horizontal" action="roleFilter.php" method="POST">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="startDate">From </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="date" class="form-control has-feedback-left" name="startDate" id="startDate">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-1 col-sm-1 col-xs-12 control-label" for="endDate">To </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="date" class="form-control has-feedback-left" name="endDate" id="endDate">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg" id="btnSearch" style="position: relative;left: 300px;">Search</button>
                            </div>
                        </form>

                        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-sm-12">

                                    <!--end date filter-->
                                    <table id="userTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">NIC Number</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="WorkingId: activate to sort column ascending" style="width: 100px;">Working ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Branch: activate to sort column ascending" style="width: 100px;">Branch</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Manager: activate to sort column ascending" style="width: 73px;">Registered Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 73px;">Actions</th>
                                        </tr>
                                        </thead>


                                        <tbody>

                                        <?php
                                        foreach($userDetails as $item){

                                            echo"<tr role=\"row\" class=\"odd\">
                                                            <td class=\"sorting_1\"><a href='user_profile.php'>$item->firstName $item->lastName</a></td>
                                                            <td>$item->nic</td>
                                                            <td>$item->roleName</td>
                                                            <td>$item->workingId</td>
                                                            <td>$item->branchName</td>                                                    
                                                            <td>$item->regDate</td>
                                                            <td><input type='button' class='btn btn-primary'></span> </td>
                                                            
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
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once ('footer.php');
?>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="../vendors/datatables/buttons.jqueryui.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../vendors/datatables/buttons.bootstrap4.js"></script>
<script src="../vendors/datatables/buttons.bootstrap.js"></script>
<script src="../vendors/datatables/buttons.html5.js"></script>

<!--data tables for pdf-->
<script src="../vendors/datatables/datatables.js"></script>
<script src="../vendors/datatables/buttons.print.js"></script>
<script src="../vendors/datatables/buttons.colVis.js"></script>



<!--data tables for pdf-->


<!-- Datatables -->
<script>
    $(document).ready(function(){
        $('#userTable').DataTable({
            dom:'Bfrtip',"pageLength":20,
            buttons:[
                'copy',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                {
                    extend:'print',
                    exportOptions:{
                        column:':visible'
                    }
                },
                'colvis'
            ],
            "scrollY":"450px",
            "scrollCollapse": true,
            "paging":         false
        });
    });
</script>


