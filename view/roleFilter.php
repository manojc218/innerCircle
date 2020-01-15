<?php
include_once('header.php');
include_once ("../backend/User.php");


$getDetails=new User();
$userDetails=$getDetails->get_all_users();

/*send filter dates*/
if(!empty($_POST['startDate']) && !empty($_POST['endDate'])){
    $sDate=$_POST['startDate'];
    $eDate=$_POST['endDate'];
}else{
    $sDate=date('Y-m-01');
    $eDate=date('Y-m-t');
}


?>
    <div class="col-md-12">
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
                <!--end date filter-->
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <!--start stock table-->
                            <table id="stockTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 299px;">manager</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137px;">admin</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73px;">accountant</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 73px;">free lancer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $getDates=new User();
                                $doFiler=$getDates->filter_user_by_regdate($sDate,$eDate);
                                 if(!empty($doFiler)){
                                    foreach ($doFiler as $item){
                                        echo "<td class='sorting_1'>$item->man</td>                                            
                                            <td>$item->admin</td>
                                            <td>$item->acc</td>
                                            <td>$item->fl</td>";
                                    }

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
