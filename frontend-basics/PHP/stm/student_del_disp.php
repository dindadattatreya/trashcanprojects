<?php
include('connect2.php');
$sid=$_POST['sid'];
$sql="select * from student_master where sid='$sid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        $count=mysqli_num_rows($res);
        if($count>0)
            {
                $row=mysqli_fetch_assoc($res);
                $sname=$row['sname'];
                $city=$row['city'];
                $class=$row['class'];

                ?>

<!-- HTML -->

<div>

<form action="student_del_save.php" method="POST">
<input type="text" name="sid" value=<?php echo $sid;  ?> hidden>
<input type="text" name="sname" value=<?php echo $sname;  ?> readonly>
<input type="text" name="city" value=<?php echo $city;  ?> readonly>
<input type="text" name="class" value=<?php echo $class;  ?> readonly >

<input type="submit" name="add" value="Submit">
<a href="student_edit.php"><input type="button" name="reset" value="Cancel"></a>

</form>


</div>


<!-- HTML Close -->

<?php
                
            }
        else
        {
            echo "No Such Record Found";
      }


}


?>