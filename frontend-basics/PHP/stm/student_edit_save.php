<?php
include('connect2.php');

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$city=$_POST['city'];
$class=$_POST['class'];

$sql="update student_master set sname='$sname',city='$city',class='$class' where sid='$sid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        echo "Records saved Successfully ";
        header("Refresh: 5; url=student_edit.php");
    }
    else
    {
        echo "Error";
}
?>