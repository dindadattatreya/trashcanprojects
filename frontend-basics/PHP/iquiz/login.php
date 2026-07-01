<?php
include('connect.php');
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
  <h1 class="reg-head">Login</h1>
<form class="row g-3 form-width form-color" action="login_final.php" method="POST">
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Userid</label>
    <input type="text" name="userid" class="form-control" id="inputAddress2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputCity">
  </div>
  
  <div class="col-12">
    <button type="submit" name="save" class="btn btn-primary login-btn">Login</button>
  </div>
</form>
<?php
      if (isset($_SESSION['save'])) {
          echo $_SESSION['save'];
          unset($_SESSION['save']);
      } ?>
</div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!-- simple login file where userid, password, and login-save and it will redirect me to login_final.php -->
