<?php
include_once ('../backend/Role.php');

if (isset($_POST['titleName'])){
    $newRole= new Role();
    $newRole->roleName=$_POST['titleName'];
    $newRole->roleDescription=$_POST['titleDescription'];

    $addRole=$newRole->add_role();

}



include_once ('header3.php');
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="x_panel">
                    <div class="X_title">
                        <h3>Job Roles</h3>
                    </div>
                    <hr class="separator">

                    <div class="x_content">
                        <!--left column-->
                        <div class="col-md-6 col-sm-6-col-xs-12 roleTable">
                            <form  class="form-horizontal form_label-left" action="role.php" method="POST">
                                <!--title Name-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TitleName">Title Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="" name="titleName" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                                <!--title Description-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TitleDescription">Description<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="titleDescription" name="titleDescription" class="form-control col-md-7 col-xs-12" required></textarea>
                                    </div>
                                </div>
                                <!--buttons-->
                                <div class="form-group modalButton">
                                    <input type="submit" value="Add" class="btn btn-primary" id="btnAddPackage">
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </div>
                            </form>
                        </div>
                        <!--right column-->
                        <div class="col-md-6 col-sm-6 col-sx-12">
                            <form  class="form-horizontal form_label-left" action="role.php" method="POST">
                                <!--title Name-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TitleName">Title Name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="" name="titleName" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                                <!--title Description-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TitleDescription">Description<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="titleDescription" name="titleDescription" class="form-control col-md-7 col-xs-12" required></textarea>
                                    </div>
                                </div>
                                <!--buttons-->
                                <div class="form-group modalButton">
                                    <input type="submit" value="Add" class="btn btn-primary" id="btnAddPackage">
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!--start table-->

            <!--end table-->

            <!--start jobTitle modal-->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalAddTitle">
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

                        </div>
                    </div>
                </div>
            </div>
            <!--End jobTitle modal-->
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
include_once ('footer.php');
?>