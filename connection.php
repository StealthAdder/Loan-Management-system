<?php

    $con=mysqli_connect('localhost','root','','loan management system');
  if(!$con){
      echo'Connection error'. mysqli_connect_errno();
  }
?>