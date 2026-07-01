<?php
include('connect.php');

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$type=$_POST['type'];
$price=$_POST['price'];

$sql="delete from product where pid='$pid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        echo "Records deleted Successfully ";
        header("Refresh: 5; url=product_del.php");
    }
    else
    {
        echo "Error";
}
?>