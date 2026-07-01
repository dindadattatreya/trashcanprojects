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
            <h1>Topic</h1>

            <br><br><br>
            <a href="topic-add.php"> <button class="btn btn-primary">Add New Topic</button></a>
            <table class="tbl-full">
                <tr>
                    <th>Topic Id</th>
                    <th>Topic Name</th>
                    <th>Actions</th>
                </tr>
                <?php
                $sql = "select * from topic";
                $res = mysqli_query($conn, $sql);
                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);

                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $topicid = $rows['topicid'];
                            $topicname = $rows['topicname'];
                ?>

                            <tr>
                                <th><?php echo $topicid ?></th>
                                <th><?php echo $topicname ?></th>

                                <th>
                                    <a href="topic-update.php?topicid=<?php echo $topicid ?>"><button class="btn btn-warning">Edit</button></a>
                                    <a href="topic-delete.php?topicid=<?php echo $topicid ?>"> <button class="btn btn-danger">Delete</button></a>
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
<!-- topic displaying -->