<!-- Input by user+save -->
<?php
include('connect2.php');
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

<h1>Student Add</h1>
<form action="" method="POST">
<input type="text" name="sname" placeholder="enter student name">
<input type="text" name="city" placeholder="enter student city">
<input type="text" name="class" placeholder="enter student class">

<input type="submit" name="add" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add']; # To show the status after query whether the batch added or not in the next redirected page
    unset($_SESSION['add']);
} 
?>
</body>
</html>

<?php
    if (isset($_POST['add']) && $_POST['sname'] !="") {
        //echo "clicked";
        $sname = $_POST['sname'];
        $city = $_POST['city'];
        $class = $_POST['class'];

        $sql = "insert into student_master set
        sname='$sname',city='$city',class='$class'"; #Insert query operation
        
        $res = mysqli_query($conn, $sql);

        if ($res == true) { # If $sql query operation successful 
            $_SESSION['add']="Batch Added Successfully"; # Prints record added into DB-table successfully
      
            header("Location:student_add.php"); // Redirect to 'student.php'
            
        } else { # If $sql query operation not successful 
  
            $_SESSION['add']="Duplicate Value Not Possible";
            ?>
 <script> location.replace("student_add.php"); </script> <!-- Redirect to 'student.php' -->
            <?php
           
            
    }
    }
?>