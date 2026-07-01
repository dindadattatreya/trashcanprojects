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
<form action="add_student_save.php" method="POST">
<input type="text" name="sname" placeholder="enter student name">
<input type="text" name="city" placeholder="enter student city">
<input type="text" name="class" placeholder="enter student class">
<input type="text" name="age" placeholder="enter student age">


<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
} ?>
<input type="submit" name="add" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>



</body>
</html>