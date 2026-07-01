<?php
include('connect.php');
$uid=$_POST['userid'];
echo $uid;



?>


<?php

if(isset($_POST['submit']) && isset($_POST['duration']) != "" && isset($_POST['duration'])>0 && isset($_POST['no_of_q']) !="" && isset($_POST['no_of_q'])>0)
{
    $subject=$_POST['subject'];
    $topic=$_POST['topic'];
    $hardness=$_POST['hardness'];
    $sql="select * from question_master where subject='$subject' and topic='$topic' and hardness='$hardness'";
    $res = mysqli_query($conn, $sql);
if($res == true){
  $sqldel="delete from question_temp";
  $resdel=mysqli_query($conn,$sqldel);
  $count = mysqli_num_rows($res);
    // echo $count;
    $recno=0;
    while ($rows = mysqli_fetch_assoc($res)) {
      $recno=$recno+1;
      $subject= $rows['subject'];
      $topic = $rows['topic'];
      $hardness = $rows['hardness'];
      $description=$rows['description'];
      $option_a=$rows['option_a'];
      $option_b=$rows['option_b'];
      $option_c=$rows['option_c'];
      $option_d=$rows['option_d'];
      $answer=$rows['answer'];
     $sql_question="insert into question_temp (qid,subject,topic,hardness,description,option_a,option_b,option_c,option_d,answer) values('$recno','$subject','$topic','$hardness','$description','$option_a','$option_b','$option_c','$option_d','$answer')";
     $res1=mysqli_query($conn,$sql_question);  

    }

    // MAin Section

    $sql11="select * from question_temp";
     $res11=mysqli_query($conn,$sql11);

  ?>

<table border=2>
<?php
     if($res11)
     {
        while($rows11=mysqli_fetch_assoc($res11))
        {
            ?>

            <tr><td><?php echo $rows11['qid'];  ?></td></tr>
            <tr><td><?php echo $rows11['description'];  ?></td></tr>
            <tr><td><?php echo $rows11['option_a'];  ?></td></tr>
            <tr><td><?php echo $rows11['option_b'];  ?></td></tr>
            <tr><td><?php echo $rows11['option_c'];  ?></td></tr>
            <tr><td><?php echo $rows11['option_d'];  ?></td></tr>
            <tr><td><input type="text"></td></tr>
            <?php
        }

     }   
     ?>
</table>
  <?php
}
else
{
    echo "no";
}


}
?>