<?php
    require_once('functions/function.php');

    $id=$_GET['d'];
    $del="DELETE FROM iphone_works WHERE work_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location:all-works.php');
    }else{
        echo "Opps.! Delete Failed";
    }
?>