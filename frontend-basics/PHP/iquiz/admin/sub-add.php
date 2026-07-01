<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>Subject Add</h1>
  <form action="" method="POST">
    <input type="text" name="subname" placeholder="subject name">
    <input type="submit" name="add" value="submit">
  </form>
</body>
</html>

<?php
if(isset($_POST['add']) && isset($_POST['subname']) != "")
{
  $subname = $_POST['subname'];

    $sql = "insert into subject set subname='$subname'";
    $res = mysqli_query($conn,$sql);
    if ($res == true) {
        $_SESSION['add'] = "Subject Added Successfully";
        header("Location:subject.php");
    } else {
        $_SESSION['add'] = "Subject Cannot be Updated right now.";
        header("Location:subject.php");
    }
}
?>
<!-- subject addition -->