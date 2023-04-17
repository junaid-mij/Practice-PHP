<?php
    require_once('functions/function.php');

    $id=$_GET['d'];
    $del="DELETE FROM iphone_partners WHERE part_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location:all-partners.php');
    }else{
        echo "Opps.! Delete Failed";
    }
?>