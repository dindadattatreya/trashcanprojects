
<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
</head>
<body>
    
<form action="product_edit_disp.php" method="POST">
    <input type="text" name="pid">
    <input type="submit" name='submit' value="Search">
</form>
</body>
</html>