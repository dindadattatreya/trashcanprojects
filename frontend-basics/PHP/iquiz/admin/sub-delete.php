<?php
include('connect.php');
$subid=$_GET['subid'];
$sql="delete from subject where subid=$subid";

$res=mysqli_query($conn,$sql);

if($res==true)
{





    $_SESSION['delete']="Subject Deleted Successfully";
    header('Location:subject.php');
}
else
{
    echo "not deleted";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!-- subject deletion -->