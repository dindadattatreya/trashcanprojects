<?php
include('connect.php');
$pid=$_POST['pid'];
$sql="select * from product where pid='$pid'";
$res=mysqli_query($conn,$sql);
if($res==true)
    {
        $count=mysqli_num_rows($res);
        if($count>0)
            {
                $row=mysqli_fetch_assoc($res);
                $pname=$row['pname'];
                $type=$row['type'];
                $price=$row['price'];

                ?>

<!-- HTML -->

<div>

<form action="product_del_save.php" method="POST">
<input type="text" name="pid" value=<?php echo $pid;  ?> hidden>
<input type="text" name="pname" value=<?php echo $pname;  ?> readonly>
<input type="text" name="type" value=<?php echo $type;  ?> readonly>
<input type="text" name="price" value=<?php echo $price;  ?> readonly >

<input type="submit" name="add" value="Submit">
<a href="product_edit.php"><input type="button" name="reset" value="Cancel"></a>

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