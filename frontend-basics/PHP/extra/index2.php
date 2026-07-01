<?php
include("connect.php");
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

<form action=""  method="POST" >

<div class="container">
    <div class="form-head">
        <h1>Addmission Form</h1>
        <h3>MAKAUT UNIVERSITY , KOLKATA=700001</H3>
    </div>
    <div class="input-section">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <textarea placeholder="Enter Password hints" name="moretext"></textarea>
    </div>

    <div class="btn-class">
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
        <input type="button" value="Hints" name="hint">
    </div>

</div>

</form>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $sql = "select * from login where username= '$username'  and password='$password'";
   
  
    $res=mysqli_query($conn,$sql);
    
    if($res==true)
    {
        $count=mysqli_num_rows($res);
        if($count>0)
        {
            $row = mysqli_fetch_assoc($res);
            $hint = $row['hint'];
            echo $hint;
            $_SESSION['user']=$username;
            $_SESSION['hint']=$hint;
            header("Location:dashboard.php");
           
        }
    }else{


   
    }
}
?>