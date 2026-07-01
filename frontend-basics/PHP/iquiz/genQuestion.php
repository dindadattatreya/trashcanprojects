<?php

include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">

<form action="mainQuiz.php" method="POST" class="color">

<?php

$sql = "select * from subject";
$res = mysqli_query($conn, $sql);
if($res == true){
  ?>
  <label for="">Select Subject </label>
  <select name="subject">
  <?php
    while($row=mysqli_fetch_assoc($res))
    {
      $subid = $row['subid'];
      $subname = $row['subname'];
      ?>
      <option value=<?php echo $subname ?>><?php echo $subname; ?></option>
      <?php
    }
  ?>
  </select><br><br>
    <?php
}

$sql = "select * from topic";
$res = mysqli_query($conn, $sql);
if($res == true){
  $count = mysqli_num_rows($res);

  ?>
   <label for="">Select Topic </label>
  <select name="topic">
  <?php
    while($row=mysqli_fetch_assoc($res))
    {
      $topicid = $row['topicid'];
      $topicname = $row['topicname'];
      ?>
      <option value=<?php echo $topicname ?>><?php echo $topicname; ?></option>
      <?php
    }
  ?>
  </select><br><br>
    <?php
}



?>
  <label for="">Hardness</label>
    <select name="hardness">
      <option value="easy">easy</option>
      <option value="moderate">moderate</option>
      <option value="hard">hard</option>
    </select><br><br>
    <label for="">Enter Duration</label>
    <input type="number"  name="duration" value="30">
    <input type="text" name="userid" value=<?php echo $userid;  ?> hidden>
    <label for="">Enter number of question</label>
    <input type="number"  name="no_of_q" value="10">
    <input type="submit" name ="submit" value="Submit">
    <input type="reset" name ="reset" value="Reset">
    <input type="button" name ="back" value="Back">
</form>
</div>
</body>
</html>
