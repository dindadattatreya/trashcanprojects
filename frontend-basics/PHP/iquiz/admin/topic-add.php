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
  
  <h1>topic add</h1>
  <form action="" method="POST">
    <input type="text" name="topicname" placeholder="topic name">
    <input type="submit" name="add" value="submit">
  </form>
</body>
</html>

<?php
if(isset($_POST['add']) && isset($_POST['topicname']) != "")
{
  $topicname = $_POST['topicname'];

    $sql = "insert into topic set topicname='$topicname'";
    $res = mysqli_query($conn,$sql);
    if ($res == true) {
        $_SESSION['add'] = "Topic Name Added Successfully";
        header("Location:topic.php");
    } else {
        $_SESSION['add'] = "Topic Name Cannot be Updated right now.";
        header("Location:topic.php");
    }
}
?>
<!-- topic addition -->