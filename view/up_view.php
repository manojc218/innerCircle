<?php
    include_once ('header3.php');
    include_once ('../backend/User.php');

    /*get user's id*/
    $uId=$_GET['uId'];

    /*getting user details using get_all_users function*/
    $getUserDetails=new User();
    $userDetails=$getUserDetails->get_user_details_by_id($uId);
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">
            <!--start content-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_conten">
                        <div class="row">
                            <!--profile left column-->
                            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                <!--profile_image-->
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->
                                        <img class="img-responsive avatar-view" src="userImg/<?php $userDetails[0]->userId ?>.jpg" alt="Avatar" title="Change the avatar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9-col-xs-12">
                                <!--User's name-->
                                <h3 style="position: relative;left: 20px;font-size: 35px"><?php echo $userDetails[0]->firstName." ".$userDetails[0]->lastName ?></h3>
                                <br>

                                <!--icon column-->
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <ul class="list-unstyled user_data" style="font-size: 16px;text-align: center">
                                        <li><i class="fa fa-map-marker user-profile-icon"></i></li>
                                        <li><i class="fa fa-briefcase user-profile-icon"></i></li>
                                        <li><i class="fa fa-birthday-cake user-profile-icon"></i></li>
                                        <li><i class="fa fa-sitemap user-profile-icon"></i></li>
                                    </ul>
                                </div>
                                <!--details column-->
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <ul class="list-unstyled user_data" style="font-size: 16px">
                                        <li><?php echo $userDetails[0]->addLine1.", ".$userDetails[0]->addLine2.', '.$userDetails[0]->city?></li>
                                        <li><?php echo $userDetails[0]->roleName?></li>
                                        <li><?php echo $userDetails[0]->dob?></li>
                                        <li><?php echo $userDetails[0]->branchName?></li>

                                    </ul>
                                </div>
                                <br>
                                <br>
                                <!--change password button-->
                                <a class="btn btn-clipboard" id="changePass" style="position: relative;left: 20px;" data-toggle="modal" data-target="#modalChangePass"><i class="fa fa-edit m-right-xs"></i> Change Passoword</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!--change password model-->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalChangePass">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!--close button-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!--modal title-->
                            <h3 class="modal-title">Change Password</h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal form_label-left" action="up_view.php" method="POST">
                                <!--current password-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="currentPassword">Current Password<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="" name="currentPassword" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                                <!--hidden current password-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hiddenCurrentPassword">Current Password<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" value="<?php echo $userDetails[0]->password ?>" id="" name="hiddenCurrentPassword" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--new password-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="newPassword">New Password<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="" name="newPassword" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--retype new password-->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="retypePassword">Retype New Password<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="" name="retypePassword" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>

                                <!--buttons-->
                                <div class="form-group modalButton">
                                    <input type="submit" value="Change" class="btn btn-primary" id="btnAddPackage">
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end content-->
        </div>
    </div>
</div>
<!-- /page content -->
<!-- footer content -->
<?php
    include_once ('footer.php');
?>
