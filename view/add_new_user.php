<?php
include_once ("../backend/User.php");
include_once ("../backend/Role.php");
include_once ("../backend/Branch.php");
include_once("../backend/phpmailer/Mail.php");

    $role=new Role();
    $allRoles=$role->get_all_roles();

    $selectedRole=new Role();
    $allSelectedRole=$selectedRole->get_selected_role();

    $branch=new Branch();
    $allBranch=$branch->get_all_branches();

/*call to add_new_user function*/
if (isset($_POST['fname']))
{
    $newUser = new User();
    $newUser->firstName = $_POST['fname'];
    $newUser->lastName=$_POST['lname'];
    $newUser->nic=$_POST['nic'];
    $newUser->gender=$_POST['genderRadio'];
    $newUser->dob=$_POST['dob'];
    $newUser->addLine1=$_POST['addLine1'];
    $newUser->addLine2=$_POST['addLine2'];
    $newUser->city=$_POST['city'];
    $newUser->postalCode=$_POST['postalCode'];
    $newUser->mobileNumber=$_POST['mobile'];
    $newUser->landNumber=$_POST['land'];
    $newUser->email=$_POST['email'];
    $newUser->branchName=$_POST['branchName'];
    $newUser->roleName=$_POST['roleName'];
    $newUser->manager=$_POST['manager'];
    $newUser->userName=$_POST['username'];
    $newUser->workingId=$_POST['workingId'];


    $result = $newUser->add_new_user();

}

include_once('header.php');

?>
            <div class="col-md-12 col-sm-12 col-xs-12" id="reg_form">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add New Member</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="">
                        <br>
                        <!--Start User Reg Form-->
                        <form class="form-horizontal form-label-left " data-validate-pattern="" novalidate="" method="post" action="#" >
                            <div class="personal-info" id="personal-info"><!--start personal-info-->

                                <!--First Name-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fname" name="fname" class="form-control col-md-7 col-xs-12" required>
                                        <div class="alert">please put something here</div>
                                    </div>

                                </div>

                                <!--Last Name-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="lname" name="lname" class="form-control col-md-7 col-xs-12" required>

                                    </div>
                                </div>

                                <!--nic-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nic">NIC <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nic" name="nic" class="form-control col-md-7 col-xs-12" pattern="[0-9]{9}[V|X]" title="Enter NIC with the V or X" required>
                                    </div>
                                </div>

                                <!--Gender-->

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>

                                    <div class="col-md-6 col-sm-6 col-xs-12" aria-required="true">
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" value="Male" id="radioMale" name="genderRadio"> Male
                                            </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <label>
                                                <input type="radio" value="Female" id="radioFemale" name="genderRadio"> Female
                                            </label>
                                        </div>

                                    </div>
                                </div>




                                <!--Date of birth-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="dob" name="dob" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--Address Line 1-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addressLine1">Address Line 1 <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="addLine1" name="addLine1" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--Address Line 2-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="addressLine2">Address Line 2 <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="addLine2" name="addLine2" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--City-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="city" name="city" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>


                                <!--Postal Code-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="postalCode">Postal Code <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="postalCode" name="postalCode" class="form-control col-md-7 col-xs-12" pattern="[0-9]{*}" required>
                                    </div>
                                </div>

                                <!--Contact number-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-13" for="ContactNumber">Contact Number <span class="required">*</span></label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" placeholder="Mobile" class="form-control" name="mobile" pattern="[0][0-9]{9}" required>

                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" placeholder="Land Line" class="form-control" name="land" required>

                                    </div>
                                </div>

                                <!--Email-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" class="form-control col-md-7 col-xs-12" required>

                                    </div>
                                </div>

                                <!--upload image-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userImage">User Image <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" required>
                                    </div>
                                </div>



                                <!--personal-info, "Next" button to official-info-->
                                <div class="form-group addResetButtons_right">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input class="btn btn-success" value="Next" type="button" onclick="document.getElementById('official-info').scrollIntoView();"/>
                                    </div>
                                </div>
                            </div>
                            <!--Solid Line-->
                            <div class="ln_solid"></div>

                            <!--end personal-info-->

                            <!--start official-info-->
                            <div class="official-info" id="official-info">

                                <!--Branch Name-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch">Branch <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control col-md-7 col-ms-7 col-xs-12" id="branchName" name="branchName" onclick="getManager()">
                                            <?php
                                            foreach ($allBranch as $item) {
                                                echo"<option value='$item->branchId'>$item->branchName</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!--Role Name-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role name">Role Name<span class="required">*</span></label>
                                    <div class="col-md-6 col-ms-6 col-xs-6">
                                        <select class="form-control col-md-7 col-ms-7 col-xs-12" name="roleName">
                                            <?php
                                                foreach($allRoles as $item){
                                                    echo"<option value='$item->roleId'>$item->roleName</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!--Manager-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="manager">Manager <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control col-md-7 col-ms-7 col-xs-12" id="manager"   name="manager" >

                                        </select>
                                    </div>
                                </div>

                                <!--Working ID-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="workingId">Working ID <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="workingId" name="workingId" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--UserName-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">User Name <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="username" name="username" class="form-control col-md-7 col-xs-12" min="5" required>
                                    </div>
                                </div>

                                <!--Solid Line-->
                                <div class="ln_solid"></div>

                                <!--Start submit Buttons-->
                                <div class="form-group addResetButtons_right">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="reset" value="Reset" class="btn btn-success btn-lg">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Add User">
                                    </div>
                                </div>
                            </div><!--end official-info-->
                        </form>
                        <!--End User Reg Form-->
                    </div>
                </div>
            </div>


<?php
    include_once('footer.php');
?>
<script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>

<script>


    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

</script>

<!--get managers for relevant branch-->
<script>
    function getManager(){
        id=$("#branchName").val();
        $.get("AJAX.php?type=getManager",{bid:id},function(data){

            result=JSON.parse(data);
            $("#manager").html("");
            for(item in result){
                text="<option value='"+result[item].userId+"'>"+result[item].firstName+"</option>";
                $("#manager").append(text);
            }
        });

    }
</script>

<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="../vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>