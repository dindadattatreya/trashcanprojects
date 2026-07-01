<?php
include('connect2.php');

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$city=$_POST['city'];
$class=$_POST['class'];

$sql="delete from student_master where sid='$sid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        echo "Records deleted Successfully ";
        header("Refresh: 5; url=student_del.php");
    }
    else
    {
        echo "Error";
}
?>