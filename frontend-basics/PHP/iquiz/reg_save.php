<?php
include('connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$userid = $_POST['userid'];

// $sql="insert into user set fname='$fname',lname='$lname',gender='$gender',phone='$phone',userid ='$userid',password = '$password'";
$sql ="insert into user (fname,lname,gender,phone,userid,password) values('$fname','$lname','$gender','$phone','$userid','$password')";
$res = mysqli_query($conn, $sql);

if($res == true)
{
  echo "<h1>registration successfull</h1>";
  header('Refresh:3, url="register.php"');
}
else
{
  echo "error!!!!";
}

?>
<!-- it will show registration successfull -->