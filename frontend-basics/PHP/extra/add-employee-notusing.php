<?php
include ('connect1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action="" method="POST">

    <input type="text" name="empname" placeholder="Enter Employee name">
    <input type="text" name="phonenumber" placeholder="Enter Employee phonenumber">
    <input type="text" name="city" placeholder="Enter Employee City">
    <input type="text" name="dept" placeholder="Enter Employee Department">
    <input type="text" name="deptid" placeholder="Enter Employee Department ID">

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
if (isset($_POST['add']) && $_POST['empname'] !="" )
{
    $empname = $_POST['empname'];
    $phonenumber = $_POST['phonenumber'];
    $city = $_POST['city'];
    $dept = $_POST['dept'];
    $deptid = $_POST['deptid'];

    $sql = "insert into practice1 set empname='$empname', phonenumber='$phonenumber', city='$city', dept='$dept', deptid='$deptid'";
    $res = mysqli_query($conn,$sql);

        if ($res == true)
        {
            $_SESSION['add']="Employee Added Successfully";
            header("Location:add_employee.php");
        }
        else
        {
            $_SESSION['add']= "Error Adding";
            ?>
            <script> location.replace("employee_master.php"); </script>
            <?php
    
        }
    }


?>
