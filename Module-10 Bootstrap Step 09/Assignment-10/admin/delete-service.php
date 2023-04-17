<?php
    require_once('functions/function.php');

    $id=$_GET['d'];
    $del="DELETE FROM iphone_service WHERE serv_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location:all-service.php');
    }else{
        echo "Opps.! Delete Failed";
    }
?>