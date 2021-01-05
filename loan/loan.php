<!-- LOAN INSERTION -->

<?php
session_start();
// $con=mysqli_connect('localhost','root','','loan management system');
include ("/var/www/html/access/access_loan.php");
  // //connection
  $db = "loan_management_system";
  $con = mysqli_connect($host, $user, $passwd, $db);
  unset($hostname, $username, $passwd, $db);

if(!$con){
      echo'Connection error'. mysqli_connect_errno();
}
else {
    echo "Connected";
}

if (isset($_POST['submit'])) {
    // Storing values from form in vars.
$customer_name = $_SESSION['name'];
$customer_id = $_SESSION['customer_id'];

$loan_type=$_POST["loantype"];
$loan_amount=$_POST["loanamount"];
$loan_tenure=$_POST["loantenure"];
$interest_rate=$_POST["interestrate"];


echo $customer_id;
echo "<br>";
echo $customer_name;
echo "<br>";
echo $loan_type;
echo "<br>";
echo $loan_amount;
echo "<br>";
echo $loan_tenure;
echo "<br>";
echo $interest_rate;

// loan_id | customer_id | customer_name | loan_type | loan_amount | loan_tenure | interest_rate
$sql = "INSERT INTO loan_details (customer_id, customer_name, loan_type, loan_amount, loan_tenure, interest_rate) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($con);

if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: loan.php?msg=stmterror");
    exit();
    // replace with header soon.
}
else {
    mysqli_stmt_bind_param($stmt, "isssss", $customer_id, $customer_name, $loan_type, $loan_amount, $loan_tenure, $interest_rate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    header("Location: loan.php?msg=success");
    exit();
}
mysqli_stmt_close($stmt);
mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
</head>
<body>
    
<div class="form-popup" id="myForm">
  <form action="/Loan-Management-system/test.php" class="form-container"  method="POST">
  <?php echo $_SESSION['customer_id'] ?>
    <h1> ENTER LOAN DETAILS :</h1>
     <label for="loan type"><b>LOAN TYPE</b></label>
    <select id="loantype" name="loantype">
      <option value="#" disabled selected>Choose</option>
      <option value="home_loan">Home Loan</option>
      <option value="personal_loan">Personal Loan</option>
      <option value="vehicle_loan">Vehicle Loan</option>
    </select>
     <br>
     
     <label for="loan amount"><b>LOAN AMOUNT</b></label>
     <input type="number" maxlength = "10" placeholder="Enter loan amount" name="loanamount" required>
     <br>
     
     <label for="loan tenure"><b>LOAN TENURE</b></label>
     <!-- <input type="months" maxlength = "50" placeholder="Enter loan tenure" name="loantenure" required> -->
     <select id="loantenure" name="loantenure">
      <option value="#" disabled selected>Select</option>
      <option value="24">24 Months</option>
      <option value="60">60 Months</option>
      <option value="84">84 Months</option>
    </select>
     <br>
     
     <label for="interest rate"><b>INTEREST RATE</b></label>
     <select id="interestrate" name="interestrate">
      <option value="#" disabled selected>Select</option>
      <option value="6%">6%</option>
      <option value="7%">7%</option>
      <option value="8%">8%</option>
      <option value="9%">9%</option>
      <option value="10%">10%</option>
      <option value="11%">11%</option>
      <option value="12%">12%</option>
    </select>
     <br>
     <br>
     
     <button type="submit" class="submitbtn" name="submit">SUBMIT</button>
<button type="reset" class="resetbtn">RESET</button>
  </form>
</div>

</body>
</html>