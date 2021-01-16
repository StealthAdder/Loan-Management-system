<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #0f0f0f;}
	input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    }
.submitbtn {
  background-color: #1d7a21; /* Green */
   border-radius:15px 50px 30px;
  width: 25%;
  margin: 8px 0;
  color: rgb(255, 248, 248);
  padding: 14px 20px;
  display: inline-block;
}
.backbtn {
    background-color: #a31c9c; /* Green */
  border:transparent;
  border-radius:15px 50px 30px;
  width: 25%;
  margin: 8px 0;
  color: rgb(255, 248, 248);
  padding: 14px 20px;
  display: inline-block;
}
.header {
  padding: 20px;
  text-align: center;
  background: #ADEFD1FF ;
  color: #00203FFF;
}
.form-container .btn:hover, .open-button:hover, .submitbtn:hover ,.resetbtn:hover ,.viewbtn:hover , .backbtn:hover {
  opacity: .8;
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: rgb(235, 212, 212);
  outline: none;
}
.form-container input[type=text], .form-container input[type=number],.form-container input[type=months] {
    width: 100%;
  padding: 12px 20px;
  margin: 8px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.form-container {
  max-width: 100px 300px;
  padding: 50px;
  background-color: white;
}
</style>
<head>
    <div class="header">
    <center>
    <h1><u>LOAN MANAGEMENT</u></h1>
    <h2>VIEW LOAN DETAILS:</h2>
</center> 
</div>
<br>
</head>
<div class="form-popup" id="myForm">
    <form action="/view_loan_details.php" class="form-container"  method="post">
        
        <h4>Enter Details:</h4>
        
                <label for="loanid"><b>LOAN ID</b></label>
				<input type="text"  maxlength="20" placeholder="Enter loan id" name="loanid" required>
				<br>
			
				<label for="customerid"><b>CUSTOMER ID</b></label>
				<input type="text" maxlength="20" placeholder="Enter customer id" name="customerid" required>
                <br>
                <center><button type="submit" class="submitbtn">SUBMIT</button>
                    <br>
                <button onclick="window.location.href='loan.php';" class="backbtn">
                BACK
                </button>
            </center>
            </form>
            </div>


            <?php

      $con=mysqli_connect('localhost','root','','loan management system');
      if(!$con){
          echo'Connection error'. mysqli_connect_errno();
      }

        $customer_id = $post['customer_id'];

        $sql = "SELECT * FROM loan_details WHERE customer_id=?";

        $stmt = mysqli_stmt_init($con);

      // connection verify
      if(!mysqli_stmt_prepare($stmt, $sql)) {
        // checking
      header("Location: ../index.php?error=sqlerrorstmt");
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $customer_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
      }
  ?>
      <table>
  
      <tr>
        <td><b>LOAN ID</b></td><br>
        <td><b>NAME</b></td>
        <td><b>CUSTOMER ID</b></td>
        <td><b>LOAN TYPE</b></td>
        <td><b>LOAN AMOUNT</b></td>
        <td><b>LOAN TENURE</b></td>
        <td><b>INTEREST</b></td>
        <td><b>EMAIL</b></td>
      </tr>
    <?php
    $i=0;
   
    ?>
    <tr>
        <td><?php echo $row["loan_id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["customer_id"]; ?></td>
        <td><?php echo $row["loan_type"]; ?></td>
        <td><?php echo $row["loan_amount"]; ?></td>
        <td><?php echo $row["loan_tenure"]; ?></td>
        <td><?php echo $row["interest_rate"]; ?></td>
      
    </tr>
    <?php
    $i++;
    
    ?>
    </table>