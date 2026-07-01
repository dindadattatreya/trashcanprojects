<?php

include('connect1.php');

$sname = $_POST['sname'];
$phonenumber = $_POST['phonenumber'];
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
          <input type="text" value=<?php echo $phonenumber; ?> name="phonenumber" readonly>
       
<input type="submit" name="save_student" value="Submit">
<input type="reset" name="reset" value="Reset">
        </form>
    </div>
</body>
</html>
<?php
    if (isset($_POST['save_student']) && $_POST['sname'] !="" ) {
       
        $sql = "insert into login set 
        sname='$sname',phonenumber='$phonenumber'";
        // $sql = "INSERT INTO login (sname, phonenumber) 
            // VALUES ('$sname', '$phonenumber')";
        $res = mysqli_query($conn, $sql);
            //echo mysqli_error($conn);

        if ($res == true) {
            $_SESSION['add']= "Batch Added Successfully";
            header("Location:pracaddstudent.php");
            
        } else {
            
            $_SESSION['add']="Duplicate Value Not Possible";
            ?>
 <script> location.replace("pracaddstudent.php"); </script> 
            <?php
        
            
      }
}
?>