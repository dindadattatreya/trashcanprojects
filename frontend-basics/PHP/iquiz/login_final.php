<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>

<?php
include('connect.php');

$userid = $_POST['userid'];
$password = $_POST['password'];

$sql = "select * from user where userid = '$userid' and password = '$password'";
$res = mysqli_query($conn, $sql);

if ($res == true) {
  $count = mysqli_num_rows($res);
  if ($count > 0) {
    $row = mysqli_fetch_assoc($res);
    $fname = $row['fname'];
?>
    <h1 class="login-final-text"><?php echo "$fname ... " . "welcome to IQuiz" ?></h1>
  <?php
  } else {
    echo "incorect information";
  }
}
?>

<?php
$sql = "select * from subject";
$res = mysqli_query($conn, $sql);
if ($res == true) 
{
  $count = mysqli_num_rows($res);
  if ($count > 0) 
{
?>
  <div>
    <form action="quiz.php" method="POST">
    Choose Your Subject 
    <select name="subject">
      <!-- <option value=<?php echo $subject ?>><?php echo $subject; ?></option> -->
      <?php
      while ($row = mysqli_fetch_assoc($res)) {
        //$subid = $row['subid'];
        $subname = $row['subname'];
      ?>
        <option value=<?php echo $subname ?>><?php echo $subname; ?></option>
      <?php
      }
      ?>

    </select>
<?php
}
}?>
    <!-- Topic -->
<?php
    $sql = "select * from topic";
$res = mysqli_query($conn, $sql);
if ($res == true) {
  $count = mysqli_num_rows($res);

  if ($count > 0) {
    ?>
    Choose Your Topic 
    <select name="topic">
     
      <?php
      while ($row = mysqli_fetch_assoc($res)) {
        //$subid = $row['subid'];
        $topicname = $row['topicname'];
      ?>
        <option value=<?php echo $topicname ?>><?php echo $topicname; ?></option>
      <?php
      }
      ?>

    </select>
    <input type="text" name="userid" value=<?php echo $userid;  ?> hidden>
    <button type="submit" name="gen" class="btn btn-primary login-btn">Genarate Question</button>
    <button type="reset" name="gen" class="btn btn-primary login-btn">Reset</button>
    <a href="mainpage.php"><button  name="back" class="btn btn-primary sign-btn">Back</button></a>
    </form>
  </div>

<?php
}

}
?>