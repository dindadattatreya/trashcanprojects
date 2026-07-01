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
    <h1>Student Add</h1>
    <form action="" method="post">
<input type="text" name="sname" placeholder="enter student name">
<input type="text" name="city" placeholder="enter student city">
<input type="text" name="class" placeholder="enter student class">
<input type="text" name="text" placeholder="enter student age">



<input type="submit" name="add" value="Submit">
<input type="reset" name="reset" value="Reset">
    </form>
    
    <?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
} 

?>
</body>
</html>

<?php
    if (isset($_POST['add']) && $_POST['sname'] !="" ) {
        //echo "clicked";
        $sname = $_POST['sname'];
        $city = $_POST['city'];
        $class = $_POST['class'];
        $age = $_POST['age'];


        $sql = "insert into student_master set
sname='$sname',city='$city',class='$class',age='$age'";
        /*  $sql = "select * from adminpass where username= '$username'  and password='$password'"; */


        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['add']="Batch Added Successfully";

            $_SESSION['sname']=$sname;
            $_SESSION['city']=$city;
            $_SESSION['class']=$class;
            $_SESSION['age']=$age;

      
            header("Location:add_student.php");
            
        } else {
  
            $_SESSION['add']="Duplicate Value Not Possible";
            ?>
 <script> location.replace("student_master.php"); </script> 
            <?php
           
            
}
}
?>