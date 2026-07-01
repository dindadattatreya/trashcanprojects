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

  <div class="container">
    <div>
      <h1>Question</h1>

      <br><br>
      <a href="question-add.php"><button>Add New Question</button></a>
      <table class="tbl-full">
        <tr>
          <th>Q id</th>
          <th>subject</th>
          <th>topic</th>
          <th>hardness</th>
          <th>description</th>
          <th>opA</th>
          <th>opB</th>
          <th>opC</th>
          <th>opD</th>
          <th>ans</th>
          <th>action</th>
        </tr>

        <?php
        $sql = "select * from question_master";
        $res = mysqli_query($conn, $sql);
        if($res == true)
        {
          $count = mysqli_num_rows($res);

          if($count > 0)
          {
            while($row = mysqli_fetch_assoc($res))
            {
              $qid = $row['qid'];
              $subject = $row['subject'];
              $topic = $row['topic'];
              $hardness = $row['hardness'];
              $description = $row['description'];
              $option_a = $row['option_a'];
              $option_b = $row['option_b'];
              $option_c = $row['option_c'];
              $option_d = $row['option_d'];
              $answer = $row['answer'];
              ?>

            <tr>
              <th><?php echo $qid ?></th>
              <th><?php echo $subject ?></th>
              <th><?php echo $topic ?></th>
              <th><?php echo $hardness ?></th>
              <th><?php echo $description ?></th>
              <th><?php echo $option_a ?></th>
              <th><?php echo $option_b ?></th>
              <th><?php echo $option_c ?></th>
              <th><?php echo $option_d ?></th>
              <th><?php echo $answer ?></th>
              <th>
                <a href="question-update.php?qid=<?php echo $qid?>"><button>Edit</button></a>
                <a href="question-delete.php?qid=<?php echo $qid?>"><button>Delete</button></a>
              </th>

            </tr>
            <tr>


              <?php
            }
          }
          else{

          }
        }
        ?>

      </table>

    </div>
    <a href="admin-dashboard.php"> <button class="btn btn-primary">Back to Menu</button></a>
  </div>

</body>
</html>
<!-- showing questions -->