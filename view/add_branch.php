<?php
    include_once ('../backend/Branch.php');

    if(isset($_POST['branchName'])){
        $newBranch=new Branch();
        $newBranch->branchName=$_POST['branchName'];
        $newBranch->coachName=$_POST['coachName'];
        $newBranch->branchAddress=$_POST['branchAdd'];
        $newBranch->city=$_POST['city'];
        $newBranch->postalCode=$_POST['postalCode'];
        $newBranch->contactNumber=$_POST['contactNumber'];

        $addBranch=$newBranch->add_branch();
    }
    include_once ('header3.php')
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-ms-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Add Branch</h4>
                    </div>
                    <form class="form-horizontal form_label-left" action="add_branch.php" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="branchName">Branch Name</label>
                            <div class="col-md-6 col-ms6 col-xs-12">
                                <input type="text" name="branchName" id="branchName" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="coachName">Coach Name</label>
                            <div class="col-md-6 col-ms-6 col-xs-12">
                                <input type="text" class="form-control" name="coachName" id="coachName"required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="branchAdd">Branch Address</label>
                            <div class="col-md-6 col-ms-6 col-xs-12">
                                <input type="text" class="form-control" name="branchAdd" id="branchAdd" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="city">City</label>
                            <div class="col-md-6 col-ms-6 col-xs-12">
                                <input type="text" class="form-control" name="city" id="city" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="postalCode">Postal Code</label>
                            <div class="col-md-6 col-ms-6 col-xs-12">
                                <input type="text" class="form-control" data-validate-length-range="5" name="postalCode" id="postalCode" pattern="\^[0-9]{*}" title="Please enter correct code." required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-ms-3 col-xs-3" for="contactNumber">Contact Number</label>
                            <div class="col-md-6 col-ms-6 col-xs-12">
                                <input type="text" class="form-control" name="contactNumber" id="contactNumber" pattern="[0][0-9]{9}" title="Please enter correct number.(0xx xxxxxxx)" required/>
                            </div>
                        </div>
                        <div class="form-group addResetButtons_right">
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
    include_once ('footer.php')
?>
<script src="../vendors/validator/validator.js"></script>
