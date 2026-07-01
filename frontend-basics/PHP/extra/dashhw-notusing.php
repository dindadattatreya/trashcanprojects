<?php

include('connect.php');
 echo "<h1 style='color:green';> Welcome  " .$_SESSION['username']."Your id is  ".$_SESSION['id']."And Contact Number= ".$_SESSION['phonenumber']."</h1>";
?>