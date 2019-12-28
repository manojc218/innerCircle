<?php
    include_once ('header.php');
    include_once ('../backend/User.php');

    /*get user's id*/
    $uId=$_GET['uId'];

    /*getting user details using get_all_users function*/
    $getUserDetails=new User();
    $userDetails=$getUserDetails->get_user_details_by_id($uId);
?>


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
                            <img class="img-responsive avatar-view" src="../docs/images/userImg/white-Dgray.png" alt="Avatar" title="Change the avatar">
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
                    <a class="btn btn-dark" href="change_pass.php" id="changePass" style="position: relative;left: 20px;"><i class="fa fa-edit m-right-xs"></i> Change Passoword</a>
                </div>


            </div>
        </div>
    </div>
</div>




<?php
    include_once ('footer.php');
?>
