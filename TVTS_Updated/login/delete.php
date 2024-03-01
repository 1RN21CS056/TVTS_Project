<?php

include 'config.php';

if(isset($_GET['deletevhno'])){
    $vhno=$_GET['deletevhno'];

    $sql="delete from `vehicle_detail` where vhno ='$vhno'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:vehicle_list.php');
    }
}