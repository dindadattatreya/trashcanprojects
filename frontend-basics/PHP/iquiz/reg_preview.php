<?php
include('connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$userid = $_POST['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- own css -->
  <link rel="stylesheet" href="style.css">
  
</head>
<body>

<div class="register-input">
  <h3 class="reg-prev-head">Click Save to Reagister</h3>
  <form class="row g-3 form-width form-color" action="reg_save.php" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control" id="inputEmail4" value=<?php echo $fname;?> readonly>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Last Name</label>
          <input type="text" name="lname" class="form-control" id="inputPassword4" value=<?php echo $lname;?> readonly>
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Gender</label>
          <input type="text" name="gender" class="form-control" id="inputAddress2" value=<?php echo $gender;?> readonly>
        </div>        
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Phone Number</label>
          <input type="text" name="phone" class="form-control" id="inputAddress2" value=<?php echo $phone;?> readonly>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="inputCity" value=<?php echo $password;?> readonly>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Userid</label>
          <input type="text" name="userid" class="form-control" id="inputEmail4" value=<?php echo $userid;?> readonly>
        </div>
        
        <div class="col-md-3">
          <button type="submit" name="save" class="btn btn-primary sign-btn">Save</button>
        </div>
        <div class="col-md-3">
          <a href="register.php"><button type="button" name="cancel" class="btn btn-primary sign-btn">Cancel</button></a>
        </div>
  </form>
</div>
  

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php

?>

<!-- registration preview -->