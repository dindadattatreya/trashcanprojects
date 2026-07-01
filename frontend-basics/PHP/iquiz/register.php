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
  <h1 class="reg-head">Register</h1>
<form class="row g-3 form-width form-color" action="genuid.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
    <input type="text" name="fname" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" id="inputPassword4">
  </div>
  <fieldset class="row mb-3 mt-5">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
        <label class="form-check-label" for="gridRadios1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
        <label class="form-check-label" for="gridRadios2">
          Female
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="other">
        <label class="form-check-label" for="gridRadios3">
          Other
        </label>
      </div>
    </div>
  </fieldset>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="inputAddress2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputCity">
  </div>
  
  <div class="col-12">
    <button type="submit" name="save" class="btn btn-primary sign-btn">Sign in</button>
    <a href="mainpage.php"><button type="submit" name="back" class="btn btn-primary sign-btn">Back</button></a>
  </div>
</form>
<?php
if (isset($_SESSION['save'])) {
  echo $_SESSION['save'];
  unset($_SESSION['save']);
} 
?>
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php

// if(isset($_POST['back']))
// {
//   header('Location:mainpage.php');
// }
?>
<!-- register.php -->