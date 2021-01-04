<?php
// $con=mysqli_connect('localhost','root','','loan management system');
include ("/var/www/html/access/access_loan.php");
  // //connection
  $db = "loan_management_system";
  $con = mysqli_connect($host, $user, $passwd, $db);
  unset($hostname, $username, $passwd, $db);

if(!$con){
      echo'Connection error'. mysqli_connect_errno();
  }
?>