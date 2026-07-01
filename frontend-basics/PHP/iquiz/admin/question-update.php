
<?php
include('connect.php');
$qid = $_GET['qid'];

$sql = "select * from question_master where qid=$qid";

$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $subject=$row['subject'];
        $topic=$row['topic'];
        $hardness=$row['hardness'];
        $description = $row['description'];
        $option_a=$row['option_a'];
        $option_b=$row['option_b'];
        $option_c=$row['option_c'];
        $option_d=$row['option_d'];
        $answer=$row['answer'];
    } else {

        header("Location:question.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container table-full">
        <div>
            <h1>Update Topic</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>
                            Modify Subejct
                        </th>
                        <th>
                        <!-- <input type="text" name="subject" value=<?php //echo $subject ?>> -->
                        <?php
                            $sql = "select * from subject where subname<>'$subject'";
                            $res = mysqli_query($conn, $sql);
                            if($res == true){
                              $count = mysqli_num_rows($res);

                              ?>
                              <br><select name="subject">
                              <option value=<?php echo $subject ?>><?php echo $subject; ?></option>
                              <?php
                                while($row=mysqli_fetch_assoc($res))
                                {
                                  //$subid = $row['subid'];
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
                        </th>
                    </tr>

                    <tr>
                        <th>
                            Modify Topic
                        </th>
                        <th>
                        <?php
                              $sql = "select * from topic";
                              $res = mysqli_query($conn, $sql);
                              if($res == true){
                                $count = mysqli_num_rows($res);

                                ?>
                                <br><select name="topic">
                                <option value=<?php echo $topic ?>><?php echo $topic; ?></option>
                                <?php
                                  while($row=mysqli_fetch_assoc($res))
                                  {
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
                        </th>
                    </tr>

                    <tr>
                        <th>
                            Modify Hardness
                        </th>
                        <th>
                    
                            <br><select name="hardness">
                            <option value=<?php echo $hardness ?>><?php echo $hardness; ?></option>
                              <option value="easy">easy</option>
                              <option value="moderate">moderate</option>
                              <option value="hard">hard</option>
                            </select><br><br>
                        </th>
                    </tr>

                    <tr>
                        <th>
                            Modify Description
                        </th>
                        <th>
                            <!-- <input type="text" name="topicname" id="" value="<?php //echo $topicname; ?>"> -->
                            <br><input type="text" name="description" value=<?php echo $description ?>><br><br>
                        </th>
                    </tr>

                    <tr>
                        <th>
                          Modify Options
                        </th>
                        <th>
                        <br><input type="text" name="option_a" value=<?php echo $option_a ?>>
                          <input type="text" name="option_b" value=<?php echo $option_b ?>>
                          <input type="text" name="option_c" value=<?php echo $option_c ?>>
                          <input type="text" name="option_d" value=<?php echo $option_d ?>><br><br>
                        </th>
                    </tr>

                    <tr>
                        <th>
                          <br>Modify Answer
                        </th>
                        <th>
                          <br><input type="text" name="answer" value=<?php echo $answer ?>>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <br><input type="submit" value="Modify Subject" class="btn btn-primary" name="edit">

                        </th>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>
<?php

if (isset($_POST['edit']) && $_POST['answer'] != "") {

  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  $hardness=$_POST['hardness'];
  $description = $_POST['description'];
  $option_a=$_POST['option_a'];
  $option_b=$_POST['option_b'];
  $option_c=$_POST['option_c'];
  $option_d=$_POST['option_d'];
  $answer=$_POST['answer'];

    $sql = "update question_master set subject='$subject',topic='$topic',hardness='$hardness', description='$description',option_a='$option_a',option_b='$option_b',option_c='$option_c',option_d='$option_d',answer='$answer' where qid='$qid';
";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['edit'] = "Question Updated Successfully";
        ?>
        <script> location.replace("question.php"); </script>
        <?php
    } else {
        $_SESSION['edit'] = "Question Cannot be Updated right now.";
        ?>
        <script> location.replace("question.php"); </script>
        <?php
}
}
?>
<!-- question modification -->