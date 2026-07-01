<?php

include('connect2.php');

$sname = $_POST['sname'];
$city = $_POST['city'];
$class = $_POST['class'];




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
    <div class="submit-form">
        <form action="" method="post">
          <input type="text" value=<?php echo $sname; ?> name="sname" readonly> 
          <input type="text" value=<?php echo $city; ?> name="city" readonly>
          <input type="text" value=<?php echo $class; ?> name="class" readonly>
       
       
       

<input type="submit" name="save_student" value="Submit">
<input type="reset" name="reset" value="Reset">
        </form>
    </div>
</body>
</html>
<?php
    if (isset($_POST['save_student']) && $_POST['sname'] !="" ) {
        //echo "clicked";


        $sql = "insert into student_master set
sname='$sname',city='$city',class='$class'";
        /*  $sql = "select * from adminpass where username= '$username'  and password='$password'"; */


        $res = mysqli_query($conn,$sql);

        if ($res == true) {
            $_SESSION['add']="Batch Added Successfully";

            header("Location:student_master1.php");
            
        } else {
  
            $_SESSION['add']="Duplicate Value Not Possible";
            ?>
 <script> location.replace("student_master1.php"); </script> 
            <?php
           
            
      }
}
?>