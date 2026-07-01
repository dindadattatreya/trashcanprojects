<?php

include('connect.php');

$sname = $_SESSION['sname'];
$city = $_SESSION['city'];
$class = $_SESSION['class'];
$age = $_SESSION['age'];



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
          <input type="text" value=<?php echo $sname; ?> readonly> 
          <input type="text" value=<?php echo $city; ?> readonly>
          <input type="text" value=<?php echo $class; ?> readonly>
          <input type="text" value=<?php echo $age; ?> readonly>
        </form>
    </div>
</body>
</html>