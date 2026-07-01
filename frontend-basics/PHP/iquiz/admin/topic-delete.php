<?php
include('connect.php');
$topicid=$_GET['topicid'];
$sql="delete from topic where topicid=$topicid";

$res=mysqli_query($conn,$sql);

if($res==true)
{





    $_SESSION['delete']="Topic Deleted Successfully";
    header('Location:topic.php');
}
else
{
    echo "not deleted";
}

?>
<!-- topic deletion -->