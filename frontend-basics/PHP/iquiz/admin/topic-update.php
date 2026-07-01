<?php
include('connect.php');
$topicid = $_GET['topicid'];

$sql = "select * from topic where topicid=$topicid";

$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $topicname = $row['topicname'];
    } else {

        header("Location:topic.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container table-full">
        <div>
            <h1>Update Topic</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>
                            Modify Topic Name
                        </th>
                        <th>
                            <input type="text" name="topicname" id="" value="<?php echo $topicname; ?>">
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input type="submit" value="Modify Subject" class="btn btn-primary" name="edit">

                        </th>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>
<?php

if (isset($_POST['edit']) && $_POST['topicname'] != "") {

    $topicname = $_POST['topicname'];

    $sql = "update topic set
topicname='$topicname' where topicid='$topicid';
";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['edit'] = "Topic Name Updated Successfully";
        header("Location:topic.php");
    } else {
        $_SESSION['edit'] = "Topic Name Cannot be Updated right now.";
        header("Location:topic.php");
    }
}
?>
<!-- topic modification -->