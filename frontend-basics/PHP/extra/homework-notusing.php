<?php
include ('connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    
    <form action="" method="POST">
    <div class="container">
        <h1> Enter userid to see Name and Phone Number</h1>
        <div class="input-section">
            <input type ="number" placeholder="Enter Your ID" name="id">
            <div class="btn-class">
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset" name="reset">
                
            </div>

        </div>
    </div>
    </form></body>
</html>

<?php
if (isset($_POST['submit'])){
$id = $_POST['id'];

$sql = "select * from homework where id = '$id'";
$res = mysqli_query($conn,$sql);

    if ($res==true)
        {
            $count = mysqli_num_rows($res);

                if ($count>0)
                {
                    $_SESSION['id'] = $id;
                    $row = mysqli_fetch_assoc($res);
                    $username = $row['username'];
                    $phonenumber = $row['phonenumber'];

                    $_SESSION['username'] = $username;
                    $_SESSION['phonenumber'] = $phonenumber;

                    header("Location:dashhw.php");
                }
               
        }
        else
        {

        }
    }

?>