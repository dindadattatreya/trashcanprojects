
<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Add</title>
</head>
<body>

<h1>Product Add</h1>
<form action="" method="POST">
<input type="text" name="pname" placeholder="enter product name">
<input type="text" name="type" placeholder="enter product type">
<input type="text" name="price" placeholder="enter product price">

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
    if (isset($_POST['add']) && $_POST['pname'] !="") {
       
        $pname = $_POST['pname'];
        $type = $_POST['type'];
        $price = $_POST['price'];

        $sql = "insert into product set
        pname='$pname',type='$type',price='$price'"; 
        
        $res = mysqli_query($conn, $sql);

        if ($res == true) { 
            $_SESSION['add']="Product Added Successfully"; 
      
            header("Location:product_add.php"); 
            
        } else { 
  
            $_SESSION['add']="Duplicate Value Not Possible";
            ?>
 <script> location.replace("product_add.php"); </script>
            <?php
           
            
    }
    }
?>