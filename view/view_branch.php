<?php
    include_once('header.php');
    include_once ('../backend/Branch.php');

    $branch = new Branch();
    $getNewBranch = $branch->get_all_branches();
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Branches</h4>
            </div>

            <div class="x_content">
                <?php
                    foreach ($getNewBranch as $item)
                    {
                        /*start branch details card*/
                        echo "  <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                                    <div class=\"well profile_view\" style='background-color: #00214a;'>
                                        <div class=\"col-sm-12\">
                                             <div class=\"left col-xs-12\">
                                                <h2>$item->branchName</h2>
                                                <p><strong>Coach Name : </strong> $item->coachName</p>
                                                <ul class=\"list-unstyled\">
                                                    <li><strong> Address :</strong> $item->branchAddress, $item->city</li>
                                                    <li><strong>Phone :</strong> +94$item->contactNumber</li>
                                                </ul>
                                             </div>
    
                                        </div>
                                        <div class=\"col-xs-12 bottom text-center\">
        
                                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                                                <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                                    </i> <i class=\"fa fa-comments-o\"></i> </button>
                                                <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                                    <i class=\"fa fa-user\"> </i> View Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
//                      /*end branch details card*/
                    }
                ?>
            </div>
        </div>
    </div>

<?php
    include_once('footer.php');
?>