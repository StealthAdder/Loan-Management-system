<?php
// $con=mysqli_connect('localhost','root','','loan management system');
include ("/var/www/html/access/access_loan.php");
// //connection
$con = mysqli_connect($host, $user, $passwd, $db);
unset($hostname, $username, $passwd, $db);

$customer_id = $_POST['customer_id'];
$loan_id = $_POST['loan_id'];


if(!$con){
    echo 'Connection error'. mysqli_connect_errno();
}
$sql = "SELECT * FROM emi WHERE customer_id=? AND loan_id=? ORDER BY loan_id DESC";

$stmt = mysqli_stmt_init($con);

// connection verify
if(!mysqli_stmt_prepare($stmt, $sql)) {
// checking
header("Location: /Loan-Management-system/loan/loan_details.php?error=sqlerrorstmt");
}
else {
mysqli_stmt_bind_param($stmt, "ii", $customer_id, $loan_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
setlocale(LC_MONETARY, 'en_IN');
$row = mysqli_fetch_assoc($result);

// init vars related to emi and loan_payment table.
$loan_amount = $row['loan_amount'];
$n = $row['loan_tenure'];
}
?>