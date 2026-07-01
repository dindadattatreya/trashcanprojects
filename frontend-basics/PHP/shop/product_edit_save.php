<?php
include('connect.php');

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$type=$_POST['type'];
$price=$_POST['price'];

$sql="update product set pname='$pname',type='$type',price='$price' where pid='$pid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        echo "Records saved Successfully ";
        header("Refresh: 5; url=product_edit.php");
    }
    else
    {
        echo "Error";
}
?>