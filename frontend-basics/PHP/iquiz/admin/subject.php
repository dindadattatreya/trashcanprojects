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
<div class="container">
        <div>
            <h1>Subject Master</h1>

            <br><br><br>
            <a href="sub-add.php"> <button class="btn btn-primary">Add New Subject</button></a>
            <table class="tbl-full">
                <tr>
                    <th>Subject Id</th>
                    <th>Subject Name</th>
                    <th>Actions</th>
                </tr>
                <?php
                $sql = "select * from subject";
                $res = mysqli_query($conn, $sql);
                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);

                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $subid = $rows['subid'];
                            $subname = $rows['subname'];
                ?>

                            <tr>
                                <th><?php echo $subid ?></th>
                                <th><?php echo $subname ?></th>

                                <th>
                                    <a href="sub-update.php?subid=<?php echo $subid ?>"><button class="btn btn-warning">Edit</button></a>
                                    <a href="sub-delete.php?subid=<?php echo $subid ?>"> <button class="btn btn-danger">Delete</button></a>
                                </th>
                            </tr>
                            <tr>

                    <?php

                        }
                    } else {
                    }
                }
                    ?>

                    
            </table>
        </div>
        <a href="admin-dashboard.php"> <button class="btn btn-primary">Back to Menu</button></a>
    </div>
   
</body>

</html>
<?php
if (isset($_SESSION['add'])) {
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}

if(isset($_SESSION['delete']))
{
echo $_SESSION['delete'];
unset($_SESSION['delete']);
}

if(isset($_SESSION['edit']))
{
echo $_SESSION['edit'];
unset($_SESSION['edit']);
}

?>
</body>
</html>
<!-- subject master -->