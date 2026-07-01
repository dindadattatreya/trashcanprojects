<?php
include('connect.php');
$qid=$_GET['qid'];
$sql="delete from question_master where qid=$qid";

$res=mysqli_query($conn,$sql);

if($res==true)
{
  $_SESSION['delete']="Question Deleted Successfully";
  header('Location:question.php');
}
else
{
    echo "not deleted";
}

?>
<!-- question deletion -->