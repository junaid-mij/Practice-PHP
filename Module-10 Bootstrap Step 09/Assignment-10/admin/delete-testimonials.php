<?php
    require_once('functions/function.php');

    $id=$_GET['d'];
    $del="DELETE FROM iphone_testimonials WHERE testi_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location:all-testimonials.php');
    }else{
        echo "Opps.! Delete Failed";
    }
?>