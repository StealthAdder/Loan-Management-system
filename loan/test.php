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
if(isset($_POST['submit']))
{
  
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


// check for type of loan
if ($loan_type === "HOME LOAN") {
    // check if amount is > then 5L
    if ($loan_amount >= 500000) {
        // calculate interest rate.
    }
    else {

    }
}



$sql = "INSERT INTO loan_details (customer_id, customer_name, loan_type, loan_amount, loan_tenure, interest_rate) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($con);

if(!mysqli_stmt_prepare($stmt, $sql)) {
  
    header("Location: /Loan-Management-system/loan.php?msg=stmterror");
    exit();
    // replace with header soon.
}
else {
    mysqli_stmt_bind_param($stmt, "isssss", $customer_id, $customer_name, $loan_type, $loan_amount, $loan_tenure, $interest_rate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    header("Location: /Loan-Management-system/loan/loan.php?msg=success");
    exit();
}
mysqli_stmt_close($stmt);
mysqli_close($con);

}
?>