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
  
  <h1>Question Add</h1>
  <form action="" method="POST">

    <!-- subject input drop-down list -->
    <label for="">Subject</label>
    <?php
      $sql = "select * from subject";
      $res = mysqli_query($conn, $sql);
      if($res == true){
        $count = mysqli_num_rows($res);

        ?>
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
    ?>

    <!-- topic input drop-down list -->
    <label for="">Topic</label>

    <?php
      $sql = "select * from topic";
      $res = mysqli_query($conn, $sql);
      if($res == true){
        $count = mysqli_num_rows($res);

        ?>
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
    
    <label for="">Description</label>
    <input type="text" name="description" placeholder="enter description"><br><br>
    
    <label for="">Options</label>
    <input type="text" name="option_a" placeholder="enter option A">
    <input type="text" name="option_b" placeholder="enter option B">
    <input type="text" name="option_c" placeholder="enter option c">
    <input type="text" name="option_d" placeholder="enter option D"><br><br>
    
    <label for="">Answer</label>
    <input type="text" name="answer" placeholder="enter answer"><br><br>

    <input type="submit" name="add" value="submit">
  </form>
</body>
</html>

<?php
if(isset($_POST['add']) && isset($_POST['subject']) != "")
{

  $qid = $_POST['qid'];
  $subject = $_POST['subject'];
  $topic = $_POST['topic'];
  $hardness = $_POST['hardness'];
  $description = $_POST['description'];
  $option_a = $_POST['option_a'];
  $option_b = $_POST['option_b'];
  $option_c = $_POST['option_c'];
  $option_d = $_POST['option_d'];
  $answer = $_POST['answer'];

    $sql = "insert into question_master set qid='$qid',subject='$subject',topic='$topic',hardness='$hardness',description='$description',option_a='$option_a',option_b='$option_b',option_c='$option_c',option_d='$option_d',answer='$answer'";
    $res = mysqli_query($conn,$sql);
    if ($res == true) {
        $_SESSION['add'] = "Question Added Successfully";
        header("Location:question.php");
    } else {
        $_SESSION['add'] = "Question Cannot be Updated right now.";
        header("Location:question.php");
    }
}
?>
<!-- question addition -->