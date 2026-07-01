<?php
include('connect.php');
$subid = $_GET['subid'];

$sql = "select * from subject where subid=$subid";

$res = mysqli_query($conn, $sql);
if ($res == true) {
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $subname = $row['subname'];
    } else {

        header("Location:subject.php");
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
            <h1>Update Subject</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>
                            Modify Subject Name
                        </th>
                        <th>
                            <input type="text" name="subname" id="" value="<?php echo $subname; ?>">
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

if (isset($_POST['edit']) && $_POST['subname'] != "") {

    $subname = $_POST['subname'];

    $sql = "update subject set
subname='$subname' where subid='$subid';
";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['edit'] = "Batch Name Updated Successfully";
        header("Location:subject.php");
    } else {
        $_SESSION['edit'] = "Subject Name Cannot be Updated right now.";
        header("Location:subject.php");
    }
}
?>
<!-- subject modification -->