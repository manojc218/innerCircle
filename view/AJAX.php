<?php
include_once ("../backend/User.php");
include_once ("../backend/ProductCategory.php");
include_once ("../backend/Product.php");

/*Add new user -> get manager's name when selecting branch*/
if ($_GET['type']=="getManager"){
    $id=new User();
    $manager=$id->get_manager_by_branch($_GET['bid']);

    echo json_encode($manager);
}

/*distribute ->display item which are input in form*/
if ($_GET['type']=="addTo") {

    $prdC = new ProductCategory();
    $category = $prdC->get_category_by_id($_GET['serialNumber']);
    $a['cat']=$category;

    echo json_encode($a);
}

if($_GET['type']=="checkSerial"){
    $checkStatus=new Product();
    $getStatus=$checkStatus->get_status_by_id($_GET['serialNumber']);

    echo ($getStatus);
}
