<?php
    session_start();

    if($_SESSION['userRole']==4){
        include ('header3.php');
    }elseif ($_SESSION['userRole']==10){
        include ('header3.php');
    }elseif ($_SESSION['userRole']==1){
        include ('header3.php');
    }

?>