<?php
include('connect1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pracaddstudentsave.php" method="POST">
        <input type="text" name="sname" placeholder="enter student name">
        <input type="text" name="phonenumber" placeholder="enter student phonenumber">

        <input type="submit" name="add" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </form>
    <?php if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
} ?>
</body>
</html>

